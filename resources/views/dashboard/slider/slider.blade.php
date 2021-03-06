@extends('adminlayouts.app')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        @if(session()->has('success_message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!
           		{{ session()->get('success_message') }} </h4>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Editable Table
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <a href={{url('/admin/addslider')}}><button id="editable-sample_new" class="btn btn-primary">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                    </a>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Save as PDF</a></li>
                                        <li><a href="#">Export to Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Sort Order</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 1; @endphp
                                @if($data['rows'])
                                    @foreach($data['rows'] as $key => $row)
                                <tr class="">
                                    <td>{{$row['id']}}</td>
                                    <td>{{$row['title']}}</td>
                                    <td>{{$row['short_description']}}</td>
                                    <td><img src="{{$row['image']}}" height="80px" width="70px"></td>
                                    <td>{{$row['status']}}</td>
                                    <td>{{$row['sortorder']}}</td>
                                    <td>{{$row['created_at']}}</td>
                                    <td>{{$row['updated_at']}}</td>
                                    <td><a class="btn btn-primary edit" onclick="return confirm('Are you sure to Edit Slider?');"
                                    href="{{ route('admin.slider.edit',['id' => $row->id]) }}">Edit</a></td>
                                    <td><a class="btn btn-danger delete" onclick="return confirm('Are you sure to Delete Slider?');"
                                     href="{{ route('admin.slider.delete',['id' => $row->id]) }}">Delete</a></td>
                                </tr>
                                {{ $i ++}}
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>

@endsection
