@extends('adminlayouts.app')

@section('css')
<link href="{{asset('css/dashboard_css/summernote.css')}}" rel="stylesheet">
@endsection

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
                            <form role="form" action="{{ route('admin.products.store')}}" method="POST" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control btn-primary" id="category" name="category" placeholder="Enter Category">
                                        @if($data['category'])
                                        @foreach($data['category'] as $key=> $row)

                                        <option value="{{$row->id}}">{{$row->title}}</option>


                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter Short Description">
                                </div>
                                <div class="form-group">
                                    <label for="imageupload">Feature Image</label>
                                    <input type="file" id="image" name="image">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                                </div>
                                <div class="form-group">
                                    <label for="discounted_price">Discounted Price</label>
                                    <input type="text" class="form-control" id="discounted_price" name="discounted_price" placeholder="Enter Discounted Price">
                                </div>
                                <div class="form-group">
                                    <label for="review">Review</label>
                                    <input type="text" class="form-control" id="review" name="review" placeholder="Enter Review">
                                </div>
                                <div class="form-group">
                                    <label for="specific_description">Specific Description</label>
                                    <textarea id="editor" name="specific_description" class="form-control" name="specific_description" placeholder="Enter Specific Description" cols="40" rows="5"></textarea>

                                </div>

                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <textarea id="editor1" class="form-control" name="long_description" placeholder="Enter Long Description" cols="40" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="each_featureproduct">Each Feature Product</label>
                                    <input type="number" class="form-control" id="each_featureproduct" name="each_feature_product" placeholder="Enter Each Feature Product">
                                </div>
                                <div class="form-group">
                                    <label for="discounted_percent">Discounted Percentage</label>
                                    <input type="text" class="form-control" id="discounted_percent" name="discounted_percentage" placeholder="Enter Discounted Percentage">
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

@section('js')
<script src="{{asset('js/dashboard_js/ckeditor.js')}}"></script>
<script>
    $(document).ready(function() {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });


    });
</script>
@endsection