@extends('adminlayouts.app')

@section('content')

<section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        @if(session()->has('success_message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!
           		{{ session()->get('success_message') }} </h4>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Basic Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{ route('admin.category.update',$data['row']->id) }}" method="POST" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                                    value="{{ !empty($data['row']->title) ? $data['row']['title']:'' }}">
                                </div>
                                @if(isset($data['row']))
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="imageupload" name="image">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    @if ($data['row']->image)
                                    <div class="form-group">
                                        <label>Previous Facts Image</label>
                                        <img src="{{  $data['row']['image'] }}" height="100" width="80">
                                    </div>
                                    @else
                                        <div class="form-group">
                                        <span>No image Found</span>
                                        </div>
                                        </div>
                                        @endif
                                    @else
                                    <div class="form-group">
                                        <label>Facts Image</label>
                                        <input type="file" class="form-control" name="image">
                                        @if($errors->has('image'))
                                            <span class="help-block error">
                                                <strong class="error">{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug"
                                    value="{{ !empty($data['row']->slug) ? $data['row']['slug']:'' }}">
                                </div>
<!--
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
    </section>
</section>
        @endsection
