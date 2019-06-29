@extends('layout.app')

@section('css')
<style>
.owl-stage{
    left: 156px;
}
</style>
@endsection

@section('content')
<main class="site-main">

            <div class="container">

                <ol class="breadcrumb-page">

                    <li><a href="#">Home </a></li>

                    <li class="active"><a href="#">Detail</a></li>

                </ol>

            </div>

            <div class="container">

                <div class="product-content-single">

                    <div class="row">

                        <div class="col-md-4 col-sm-12 padding-right">

                            <div class="product-media">

                                <div class="image-preview-container image-thick-box image_preview_container">

                                    <img id="img_zoom" data-zoom-image="{{ !empty($data['row']->feature_image) ? $data['row']['feature_image']:'' }}" src="{{ !empty($data['row']->feature_image) ? $data['row']['feature_image']:'' }}" alt="">

                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>

                                </div>

                                <div class="product-preview image-small product_preview">

                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>

                                        <a href="#" data-image="{{ !empty($data['row']->feature_image) ? $data['row']['feature_image']:'' }}" data-zoom-image="{{ !empty($data['row']->feature_image) ? $data['row']['feature_image']:'' }}">

                                            <img src="{{ !empty($data['row']->feature_image) ? $data['row']['feature_image']:'' }}" data-large-image="{{ !empty($data['row']->feature_image) ? $data['row']['feature_image']:'' }}" alt="i1">

                                        </a>
                                        <!-- <a href="#" data-image="{{asset('images/detail/thick-box-1.jpg')}}" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">

                                            <img src="{{asset('images/detail/i2.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">

                                        </a>
                                        <a href="#" data-image="{{asset('images/detail/thick-box-1.jpg')}}" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">

                                            <img src="{{asset('images/detail/i1.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">

                                        </a>
                                        <a href="#" data-image="{{asset('images/detail/thick-box-1.jpg')}}" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">

                                            <img src="{{asset('images/detail/i2.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">

                                        </a>
                                        <a href="#" data-image="{{asset('images/detail/thick-box-1.jpg')}}" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">

                                            <img src="{{asset('images/detail/i1.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">

                                        </a> -->

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-5 col-sm-6">

                            <div class="product-info-main">

                                <div class="product-name"><a href="#">{{ !empty($data['row']->title) ? $data['row']['title']:'' }}</a></div>

                                <span class="star-rating">

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <span class="review">{{ !empty($data['row']->review) ? $data['row']['review']:'' }} Review(s)</span>

                                </span>

                                <div class="product-infomation">

                                {{ !empty($data['row']->specific_description) ? $data['row']['specific_description']:'' }}

                                </div>

                                <div class="group-btn-share">

                                    <a href="#"><img src="{{asset('images/detail/btn1.png')}}" alt="btn1"></a>
                                    <a href="#"><img src="{{asset('images/detail/btn2.png')}}" alt="btn2"></a>
                                    <a href="#"><img src="{{asset('images/detail/btn3.png')}}" alt="btn3"></a>
                                    <a href="#"><img src="{{asset('images/detail/btn4.png')}}" alt="btn4"></a>

                                </div>

                                <div class="product-description">

                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 making it over 2000 years old.

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="product-info-price">

                                <div class="product-info-stock-sku">

                                    <div class="stock available">

                                        <span class="label-stock">Availability: </span>In Stock

                                    </div>

                                </div>

                                <div class="transportation">

                                    <span>item with Free Delivery</span>

                                </div>

                                <span class="price">

                                    <ins>{{ !empty($data['row']->discounted_price) ? $data['row']['discounted_price']:'' }}</ins>

                                    <del>{{ !empty($data['row']->price) ? $data['row']['price']:'' }}</del>

                                </span>

                                <div class="quantity">

                                    <h6 class="quantity-title">Quantity:</h6>

                                    <div class="buttons-added">

                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">

                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>

                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>

                                    </div>

                                </div>

                                <div class="single-add-to-cart">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $data['row']['id']}}">
                                        <input type="hidden" name="title" value="{{ $data['row']['title']}}">
                                        <input type="hidden" name="discounted_price" value="{{ $data['row']['discounted_price']}}">
                                        <button type="submit" class="btn-add-to-cart">Add To Cart</button>
                                    </form>

                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container">

                <div class="tab-details-product">

                    <ul class="box-tab nav-tab">

                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>

                        <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>

                        <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>

                    </ul>

                    <div class="tab-container">

                        <div id="tab-1" class="tab-panel active">

                            <div class="box-content">

                                <p>{{ !empty($data['row']->long_description) ? $data['row']['long_description']:'' }}</p>
                            </div>

                        </div>

                        <div id="tab-2" class="tab-panel">

                            <div class="box-content">

                                <p>ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla ullamcorper, interdum dolor vel, dictum justo. Vivamus finibus lorem id auctor

                                    placerat. Ut fermentum nulla lectus, in laoreet metus ultrices ac. Integer eleifend urna ultricies enim facilisis, vel fermentum eros porta.

                                </p>

                                <span>Weights & Dimensions</span>

                                <div class="parameter">

                                    <p>Overall: 40" H x 35.5" L x 35.5" W</p>

                                    <p>Bar height:40"</p>

                                    <p>Overall Product Weight: 88 lbs</p>

                                </div>

                            </div>

                        </div>

                        <div id="tab-3" class="tab-panel">

                            <div class="box-content">

                                <form method="post" action="#"  class="new-review-form">

                                    <a href="#" class="form-title">Write a review</a>

                                    <div class="form-content">

                                        <p class="form-row form-row-wide">

                                            <label>Name</label>

                                            <input type="text" value="" name="text" placeholder="Enter your name" class="input-text">

                                        </p>

                                        <p class="form-row form-row-wide">

                                            <label>Email</label>

                                            <input type="text" name="text" placeholder="admin@example.com" class="input-text">

                                        </p>

                                        <p class="form-row form-row-wide">

                                            <label>Review Title<span class="required">*</span></label>

                                            <input type="email" name="email" placeholder="Give your review a title" class="input-text">

                                        </p>

                                        <p class="form-row form-row-wide">

                                            <label>Body of Review (1500)</label>

                                            <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>

                                        </p>

                                        <p class="form-row">

                                            <input type="submit" value="Submit Review" name="Submit" class="button-submit">

                                        </p>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="block-recent-view">

                <div class="container">

                    <div class="title-of-section">You may be also interested</div>

                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":5}}'>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/r1.jpg')}}" alt="r1"></a>

                                    </div>

                                    <span class="onsale">-50%</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Women Hats</a></div>

                                    <span class="price">

                                        <ins>Rs.229.00</ins>

                                        <del>Rs.259.00</del>

                                    </span>

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="group-btn-hover style2">

                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>

                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/r2.jpg')}}" alt="r2"></a>

                                    </div>

                                    <span class="onnew">new</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Basketball Sports Audio & Theater</a></div>

                                    <span class="price price-dark">

                                        <ins>Rs.229.00</ins>

                                    </span>

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="group-btn-hover style2">

                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>

                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/r3.jpg')}}" alt="r3"></a>

                                    </div>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Dark Green Prada Sneakers</a></div>

                                    <span class="price price-dark">

                                        <ins>Rs.229.00</ins>

                                    </span>

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="group-btn-hover style2">

                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>

                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/r4.jpg')}}" alt="r4"></a>

                                    </div>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Clutches in Men's Bags for Men</a></div>

                                    <span class="price price-dark">

                                        <ins>Rs.229.00</ins>

                                    </span>

                                    <div class="group-btn-hover style2">

                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>

                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/r5.jpg')}}" alt="r5"></a>

                                    </div>

                                    <span class="onsale">-50%</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Parka With a Hood</a></div>

                                    <span class="price">

                                        <ins>Rs.229.00</ins>

                                        <del>Rs.259.00</del>

                                    </span>

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="group-btn-hover style2">

                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>

                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/r6.jpg')}}" alt="r6"></a>

                                    </div>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>

                                    <span class="price price-dark">

                                        <ins>Rs.229.00</ins>

                                    </span>

                                    <div class="group-btn-hover style2">

                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>

                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="block-section-brand">
                <div class="container">
                    <div class="section-brand style1">
                        <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                        <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a>
                        </div>
                    </div>
                </div>
            </div>

		</main>
        @endsection
