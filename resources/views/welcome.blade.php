
@extends('layout.app')
@section('content')
<main class="site-main">

            <div class="block-slide">

                <div class="container">

                    <div class="main-slide slide-opt-3">

                        <div class="owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                        @if($data['slider'])
                        @foreach($data['slider'] as $key => $row)
                        <div class="item-slide item-slide-2" style="background-image:url({{$row['image']}});">

                                <div class="container">

                                    <div class="slide-desc slide-desc-2">

                                        <div class="p-primary"><span>{{$row['short_description']}}</span></div>

                                        <p class="p-second">Free Delivery</p>

                                        <p>On Online Purchases of Small Appliances</p>

                                        <a href="#" class="btn-shop-now">Shop Now</a>

                                    </div>

                                </div>

                            </div>
                            @endforeach
                        @endif

                            <div class="item-slide item-slide-1">

                                <div class="container">

                                    <div class="slide-desc slide-desc-1">

                                        <div class="p-primary">Get Your New Samsung S3 Right Now</div>

                                        <p>Beyond The Future.</p>

                                        <a href="#" class="btn-shop-now">Shop Now</a>

                                    </div>

                                </div>

                            </div>



                            <!-- <div class="item-slide item-slide-3">

                                <div class="container">

                                    <div class="slide-desc slide-desc-3">

                                        <div class="p-primary">Say hello to the future</div>

                                        <p>Find appliances that consume more money than others.</p>

                                        <a href="#" class="btn-shop-now">Shop Now</a>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                    </div>
                    @if($data['advert'])
                    @foreach($data['advert'] as $key=> $row)
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">

                        <a href="#" class="banner-img"><img src="{{$row['image']}}" alt="banner1"></a>

                        <!-- <a href="#" class="btn-shop-now">Shop now</a> -->
                    </div>
                    @endforeach
                        @endif
                    <!-- <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">

                        <a href="#" class="banner-img"><img src="{{asset('images/home1/banner2-1.jpg')}}" alt="banner2"></a>

                    </div> -->

                </div>

            </div>

            <div class="block-feature-product">

                <div class="container">

                    <div class="title-of-section">Featured Products</div>

                    <div class="tab-product tab-product-fade-effect">

                        <ul class="box-tabs nav-tab">

                            <li class="active"><a data-animated="" data-toggle="tab" href="#tab-1">All Products </a></li>

                            <li><a data-animated="fadeInLeft" data-toggle="tab" href="#tab-2">Accessories</a></li>

                            <li><a data-animated="zoomInUp" data-toggle="tab" href="#tab-2">Top 100 Best Seller</a></li>

                            <li><a data-animated="fadeInRight" data-toggle="tab" href="#tab-1">Electronics</a></li>

                        </ul>

                        <div class="tab-content">

                            <div class="tab-container">

                                <div id="tab-1" class="tab-panel active">

                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":5}}'>

                                @if($data['rows'])
                                    @foreach($data['rows'] as $key => $row)
                                        <div class="owl-one-row">

                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="{{ route('productdetail',['id' => $row->id]) }}"><img src="{{$row['feature_image']}}" alt="f1"></a>

                                                        </div>
                                                        <span class="onsale">-{{$row['discounted_percentage']}}</span>
                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>
                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="{{ route('productdetail',['id' => $row->id]) }}">{{$row['title']}}</a></div>

                                                        <span class="price">

                                                            <ins>{{$row['discounted_price']}}</ins>
                                                            <del>{{$row['price']}}</del>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>



                                                            <span class="review">{{$row['review']}} Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <form action="{{ route('cart.store') }}" method="POST">
                                                                @csrf
                                                                    <input type="hidden" name="id" value="{{ $row['id']}}">
                                                                    <input type="hidden" name="title" value="{{ $row['title']}}">
                                                                    <input type="hidden" name="discounted_price" value="{{ $row['discounted_price']}}">
                                                                    <input type="hidden" name="image_url" value="{{ $row['feature_image'] }}">
                                                                    <button type="submit" class="add-to-cart">Add To Cart</button>
                                                                </form>
                                                                <!-- <a href="#" class="add-to-cart">Add to cart</a> -->

                                                                <!-- <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    @endforeach
                                @endif
                                    </div>

                                </div>

                                <div id="tab-2" class="tab-panel">

                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":5}}'>
                                        <div class="owl-one-row">

                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f1.jpg')}}" alt="f1"></a>

                                                        </div>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Vegan Kitchen Essentials</a></div>

                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f6.jpg')}}" alt="f6"></a>

                                                        </div>

                                                        <span class="onnew style2">New</span>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Acer's Aspire S7 is a thin and portable laptop</a></div>

                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-one-row">

                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f2.jpg')}}" alt="f2"></a>

                                                        </div>

                                                         <span class="onnew">New</span>

                                                         <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Electrolux Washing Machine.</a></div>

                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f7.jpg')}}" alt="f7"></a>

                                                        </div>

                                                        <span class="onsale style2">-50%</span>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">PerfectCare Aqua Pressurised steam generator GC8640</a></div>

                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-one-row">

                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f3.jpg')}}" alt="f3"></a>

                                                        </div>

                                                         <span class="onsale">-50%</span>

                                                         <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Friteuse Tristar FR6929 1,75 l</a></div>

                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f8.jpg')}}" alt="f8"></a>

                                                        </div>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">



                                                        <div class="product-name"><a href="#">Over-The-Range Microwave - 2.1</a></div>

                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-one-row">

                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f4.jpg')}}" alt="f4"></a>

                                                        </div>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>

                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f9.jpg')}}" alt="f9"></a>

                                                        </div>

                                                        <span class="onsale style2">-50%</span>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Smart Watch SERIE 2 (42mm) SilverCase with White Sport</a></div>

                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-one-row">

                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f5.jpg')}}" alt="f5"></a>

                                                        </div>

                                                        <span class="onsale">-50%</span>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Crock-Pot. Programmable Cook</a></div>

                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner equal-elem">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/home1/f10.jpg')}}" alt="f10"></a>

                                                        </div>

                                                        <a href="#" class="quick-view">Quick View</a>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Xbox One S Halo Collection Bund</a></div>

                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

                                                        </span>

                                                        <span class="star-rating">

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <span class="review">5 Review(s)</span>

                                                        </span>

                                                        <div class="group-btn-hover">

                                                            <div class="inner">

                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>

                                                                <a href="#" class="add-to-cart">Add to cart</a>

                                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="block-top-categori">

                <div class="container">

                    <div class="title-of-section">Top Categories This Week</div>

                    <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"360":{"items":2},"500":{"items":3},"992":{"items":5}}'>

                    @if($data['category'])
                    @foreach($data['category'] as $key=> $row)
                        <div class="block-top-categori-item">

                            <a href="#"><img src="{{$row['image']}}" alt="c1"></a>

                            <div class="block-top-categori-title">{{$row['title']}}</div>

                        </div>
                    @endforeach
                    @endif

                    </div>

                </div>

            </div>

            <div class="block-promotion-banner">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-7">

                            <div class="promotion-banner style-5">

                                <a href="#" class="banner-img"><img src="{{asset('images/home1/banner3.jpg')}}" alt="banner3"></a>

                            </div>

                        </div>

                        <div class="col-sm-5">

                            <div class="promotion-banner style-5">

                                <a href="#" class="banner-img"><img src="{{asset('images/home1/banner4.jpg')}}" alt="banner4"></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="block-sale-product full-width block-background">

                <div class="container">

                    <div class="title-of-section">Sale Products</div>

                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"1200":{"items":4}}'>

                        <div class="product-item style1">

                            <div class="product-inner equal-elem">

                                <div class="product-thumb">

                                    <div class="thumb-inner">

                                        <a href="#"><img src="{{asset('images/home1/s1.jpg')}}" alt="s1"></a>

                                    </div>

                                    <span class="onsale">-50%</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Vegan Kitchen Essentials</a></div>

                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

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

                                        <a href="#"><img src="{{asset('images/home1/s2.jpg')}}" alt="s2"></a>

                                    </div>

                                    <span class="onsale">-50%</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Electrolux Washing Machine.</a></div>

                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

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

                                        <a href="#"><img src="{{asset('images/home1/s3.jpg')}}" alt="s3"></a>

                                    </div>

                                    <span class="onsale">-50%</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Friteuse Tristar FR6929 1,75 l</a></div>

                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

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

                                        <a href="#"><img src="{{asset('images/home1/s4.jpg')}}" alt="s4"></a>

                                    </div>

                                    <span class="onsale">-50%</span>

                                    <a href="#" class="quick-view">Quick View</a>

                                </div>

                                <div class="product-innfo">

                                    <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>

                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

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

            <div class="block-recent-view">

                <div class="container">

                    <div class="title-of-section">Recently Viewed Products</div>

                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1000":{"items":5}}'>

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

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="product-name"><a href="#">Women Hats</a></div>

                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

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

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="product-name"><a href="#">Basketball Sports Audio & Theater</a></div>

                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

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

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="product-name"><a href="#">Dark Green Prada Sneakers</a></div>

                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

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
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="product-name"><a href="#">Clutches in Men's Bags for Men</a></div>

                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

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

                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>

                                    <div class="product-name"><a href="#">Parka With a Hood</a></div>

                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

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
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>

                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

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

            <!-- <div class="block-the-blog">

                <div class="container">

                    <div class="title-of-section">From The Blog</div>

                    <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"992":{"items":3}}'>

                        <div class="blog-item">

                            <div class="post-thumb">

                                <a href="#"><img src="{{asset('images/home1/blog1.jpg')}}" alt="blog1"></a>

                                <span class="date">2019<span>Jan 06</span></span>

                            </div>

                            <div class="post-item-info">

                                <h3 class="post-name"><a href="#">It’s all about the bread: whole grain home</a></h3>

                                <div class="post-metas">

                                    <span class="author">Post by: <span>Admin</span></span>

                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>36 Comments</span>

                                </div>
                                <div>Lorem ipsum dolor sit amet consectetur adipiscing, elit integer urna placerat donec, cum viverra egestas ac luctus...</div>

                            </div>

                        </div>

                        <div class="blog-item">

                            <div class="post-thumb">

                                <a href="#"><img src="{{asset('images/home1/blog2.jpg')}}" alt="blog2"></a>

                                <span class="date">2019<span>Jan 06</span></span>

                            </div>

                            <div class="post-item-info">

                                <h3 class="post-name"><a href="#">Ridiculus nascetur, malesuada non in netus.</a></h3>

                                <div class="post-metas">

                                    <span class="author">Post by: <span>Admin</span></span>

                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>36 Comments</span>

                                </div>
                                <div>Lorem ipsum dolor sit amet consectetur adipiscing, elit integer urna placerat donec, cum viverra egestas ac luctus...</div>

                            </div>

                        </div>

                        <div class="blog-item">

                            <div class="post-thumb">

                                <a href="#"><img src="{{asset('images/home1/blog3.jpg')}}" alt="blog3"></a>

                                <span class="date">2019<span>Jan 06</span></span>

                            </div>

                            <div class="post-item-info">

                                <h3 class="post-name"><a href="#">Using Lorem Ipsum allows designers to put</a></h3>

                                <div class="post-metas">

                                    <span class="author">Post by: <span>Admin</span></span>

                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>36 Comments</span>

                                </div>
                                <div>Lorem ipsum dolor sit amet consectetur adipiscing, elit integer urna placerat donec, cum viverra egestas ac luctus...</div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> -->

            <div class="block-section-brand">
                <div class="container">
                    <div class="section-brand style1">
                        <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"320":{"items":2},"480":{"items":3},"768":{"items":4},"992":{"items":5},"1200":{"items":5}}'>
                            <a href="#" class="item-brand"><img src="{{asset('images/deepakbanner.jpg')}}" alt="brand1"></a>
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
