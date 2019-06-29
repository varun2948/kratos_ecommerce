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
                                <form role="form" action="{{ route('admin.products.update',$data['row']->id)}}" method="POST" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                                    value="{{ !empty($data['row']->title) ? $data['row']['title']:'' }}">
                                </div>
                            <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter Short Description"
                                    value="{{ !empty($data['row']->short_description) ? $data['row']['short_description']:'' }}">
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
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price"
                                     value="{{ !empty($data['row']->price) ? $data['row']['price']:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="discounted_price">Discounted Price</label>
                                    <input type="text" class="form-control" id="discounted_price" name="discounted_price" placeholder="Enter Discounted Price"
                                    value="{{ !empty($data['row']->discounted_price) ? $data['row']['discounted_price']:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="review">Review</label>
                                    <input type="text" class="form-control" id="review" name="review" placeholder="Enter Review"
                                    value="{{ !empty($data['row']->review) ? $data['row']['review']:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="specific_description">Specific Description</label>
                                    <input type="text" id="specific_description" class="form-control" name="specific_description" placeholder="Enter Specific Description" cols="40" rows="5"
                                    value="{{ !empty($data['row']->specific_description) ? $data['row']['specific_description']:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <input type="text" id="long_description" class="form-control" name="long_description" placeholder="Enter Long Description" cols="40" rows="5"
                                    value="{{ !empty($data['row']->long_description) ? $data['row']['long_description']:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="each_featureproduct">Each Feature Product</label>
                                    <input type="number" class="form-control" id="each_featureproduct" name="each_feature_product" placeholder="Enter Each Feature Product"
                                    value="{{ !empty($data['row']->each_feature_product) ? $data['row']['each_feature_product']:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="discounted_percent">Discounted Percentage</label>
                                    <input type="text" class="form-control" id="discounted_percent" name="discounted_percentage" placeholder="Enter Discounted Percentage"
                                    value="{{ !empty($data['row']->discounted_percentage) ? $data['row']['discounted_percentage']:'' }}">
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
