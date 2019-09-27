@extends('adminlayouts.app')

@section('content')

<section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Basic Forms
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{ route('admin.category.store')}}" method="POST" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="imageupload" name="image">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
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
