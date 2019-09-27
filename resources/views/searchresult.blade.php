@extends('layout.app')
@section('content')

<main class="site-main product-list product-grid">

    <div class="container">

        <ol class="breadcrumb-page">

            <li><a href="#">Home </a></li>

            <li class="active"><a href="#">Grid Categorys </a></li>

        </ol>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-8 float-none float-right">

                <div class="main-content">

                    <div class="promotion-banner style-3">

                        <a href="#" class="banner-img"><img src="{{asset('images/product/banner-product.jpg')}}" alt="banner-product"></a>

                    </div>

                    <div class="toolbar-products">

                        <h4 class="title-product">Search Result</h4>

                        @if($data['searchquery']->count()!=0)

                            <div style="text-align:center;"><b><h4 class="price"> <ins style="font-size: 30px !important;"> {{$data['searchquery']->count()}} </ins> Result(s) for '{{ request()->input('query')}}'</h4></div>
                               
                        @else
                        <div style="text-align:center;"><b><h4 class="price"> <ins style="font-size: 30px !important;"> No Items Found.</h4></div>

                        @endif
                    </div>

                    <div class="products products-list products-grid equal-container">
                    @if($data['searchquery'])
                   
                        @foreach($data['searchquery'] as $key => $row)
                            <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                <div class="product-inner">

                                    <div class="product-thumb">

                                        <div class="thumb-inner">

                                            <a href="#"><img src="{{$row->feature_image}}" alt="p8"></a>

                                        </div>

                                        <span class="onsale">-{{$row->discounted_percentage}}</span>

                                        <a href="#" class="quick-view">Quick View</a>

                                    </div>

                                    <div class="product-innfo">

                                        <div class="product-name"><a href="#">{{$row->title}}</a></div>

                                        <span class="price">

                                            <ins>Rs.{{$row->discounted_price}}</ins>

                                            <del>Rs.{{$row->price}}</del>

                                        </span>

                                        <span class="star-rating">

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <span class="review">{{$row->review}}Review(s)</span>

                                        </span>

                                        <div class="info-product">

                                            <p>Weigh: 8.25 kg</p>

                                            <p>Size: One Size Fits All </p>

                                            <p>Guarantee: 2 Year</p>

                                        </div>

                                        <div class="single-add-to-cart">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row['id']}}">
                                                <input type="hidden" name="title" value="{{ $row['title']}}">
                                                <input type="hidden" name="discounted_price" value="{{ $row['discounted_price']}}">
                                                <input type="hidden" name="image_url" value="{{ $row['feature_image'] }}">
                                                <button type="submit" class="add-to-cart">Add To Cart</button>
                                            </form>
                                            <!-- <a href="#" class="btn-add-to-cart">Add to cart</a> -->

                                            <!-- <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                            <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a> -->

                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    @endif
                    {{$data['searchquery']->appends(request()->input())->links()}}
                    </div>

                    <!-- <div class="pagination">

                        <ul class="nav-links">

                            <li class="active"><a href="#">1</a></li>

                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>

                            <li class="back-next"><a href="#">Next</a></li>

                        </ul>

                        <span class="show-resuilt">Showing 1-8 of 12 result</span>

                    </div> -->

                </div>

            </div>

            
        </div>

    </div>


</main>


@endsection