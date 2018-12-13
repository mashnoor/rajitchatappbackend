@extends('layouts.master')

@section('content')

    {{-- <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Home</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Home</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="row">
                <div class="col-md-8">
                    <h3 class="box-title">Items</h3>
                </div>
                <div class="col-md-4">
                    <button data-toggle="modal" href="#create-new-item" type="button" class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Item</button>
                </div>
                </div>
                <hr>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <strong>Ooops!</strong> There are some problem with your input.<br><br>
                    <ul>
                        @foreach($errors -> all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                @endif

                @if(Session::has('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                @endif

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S#.</th>
                                            <th>Heading</th>
                                            <th>Details</th>
                                            <th>Created by</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach($items as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            {{-- <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                                </div>
                                            </td> --}}
                                            <td>{{$item->heading}}</td>
                                            <td>{{$item->details}}</td>
                                            <?php $user_info = App\User::where('id', $item->user_id)->first(); ?>
                                            <td>
                                            @if($user_info != NULL)
                                                {{$user_info->name}},&nbsp;{{$user_info->designation}},&nbsp;ID:&nbsp;{{$user_info->id_no}}
                                            @else
                                                User ID:&nbsp;{{$item->user_id}}&nbsp;<span style="color:red; font-size: 11px;"><em>(User data not found)</em></span>
                                            @endif
                                            </td>
                                            <td class="text-nowrap">
                                                <span data-toggle="tooltip" data-original-title="Edit">
                                                <a href="{{ action('HomeController@item_edit', $item->id) }}"
                                                     data-toggle="modal" 
                                                     data-target="#editItem-{{$item->id}}">
                                                <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                </span>
                                                <a href="{{action('HomeController@item_delete', $item->id)}}" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-close text-danger"></i></a>
                                                @include('items-edit')
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@include('items-create')

@endsection