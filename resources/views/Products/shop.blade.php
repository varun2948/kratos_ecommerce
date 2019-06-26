@extends('layout.app')
@section('content')

<main class="site-main product-list product-grid">

            <div class="container">

                <ol class="breadcrumb-page">

                    <li><a href="#">Home </a></li>

                    <li class="active"><a href="#">Grid Categorys  </a></li>

                </ol>

            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-9 col-sm-8 float-none float-right">

                        <div class="main-content">

                            <div class="promotion-banner style-3">

                                <a href="#" class="banner-img"><img src="{{asset('images/product/banner-product.jpg')}}" alt="banner-product"></a>

                            </div>

                            <div class="toolbar-products">

                                <h4 class="title-product">Grid Category</h4>

                                <div class="toolbar-option">

                                    <div class="toolbar-sort">

                                        <select class="chosen-select sorter-options form-control" >

                                            <option selected="selected" value="position">Sort by popularity</option>

                                            <option value="name">Name</option>

                                            <option value="price">Price</option>

                                        </select>

                                    </div>

                                    <div class="toolbar-per">

                                        <select class="chosen-select limiter-options form-control" >

                                            <option selected="selected" value="6">20 per page</option>

                                            <option value="15">15</option>

                                            <option value="30">30</option>

                                        </select>

                                    </div>

                                    <div class="modes">

                                        <a href="grid-product.html" class="active modes-mode mode-grid" title="Grid"><i class="flaticon-squares"></i>

                                            <span>Grid</span>

                                        </a>

                                        <a href="list-product.html" title="List" class="modes-mode mode-list"><i class="flaticon-interface"></i>

                                            <span>List</span>

                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="products products-list products-grid equal-container">

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p8.jpg')}}" alt="p8"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Acer's Aspire S7 is a thin and portable laptop</a></div>

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

                                            <div class="info-product">

                                                <p>Weigh:  8.25 kg</p>

                                                <p>Size:  One Size Fits All </p>

                                                <p>Guarantee:  2 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p9.jpg')}}" alt="p9"></a>

                                            </div>

                                            <span class="onnew">new</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">VR-BOX - Imported Virtual Reality 3D Glasses</a></div>

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

                                            <div class="info-product">

                                                <p>Display Size:  6</p>

                                                <p>Display Type:  Linux</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p10.jpg')}}" alt="p10"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Xbox One S Halo Collection Bund</a></div>

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

                                            <div class="info-product">

                                                <p>Color: White</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p11.jpg')}}" alt="p11"></a>

                                            </div>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p12.jpg')}}" alt="p12"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p13.jpg')}}" alt="p13"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p14.jpg')}}" alt="p14"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p15.jpg')}}" alt="p15"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p16.jpg')}}" alt="p16"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p17.jpg')}}" alt="p17"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p18.jpg')}}" alt="p18"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">

                                    <div class="product-inner">

                                        <div class="product-thumb">

                                            <div class="thumb-inner">

                                                <a href="#"><img src="{{asset('images/product/p19.jpg')}}" alt="p19"></a>

                                            </div>

                                            <span class="onsale">-50%</span>

                                            <a href="#" class="quick-view">Quick View</a>

                                        </div>

                                        <div class="product-innfo">

                                            <div class="product-name"><a href="#">Skullcandy Headphone Grind Wireless (White)</a></div>

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

                                            <div class="info-product">

                                                <p>Hight precision lens provided</p>

                                                <p>Android Supported</p>

                                                <p>Guarantee:  1 Year</p>

                                            </div>

                                            <div class="single-add-to-cart">

                                                <a href="#" class="btn-add-to-cart">Add to cart</a>

                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>

                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="pagination">

                                <ul class="nav-links">

                                    <li class="active"><a href="#">1</a></li>

                                    <li><a href="#">2</a></li>

                                    <li><a href="#">3</a></li>

                                    <li class="back-next"><a href="#">Next</a></li>

                                </ul>

                                <span class="show-resuilt">Showing 1-8 of 12 result</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-4">

                        <div class="col-sidebar">

                            <div class="filter-options">

                                <div class="block-title">Shop by</div>

                                <div class="block-content">

                                    <div class="filter-options-item filter-categori">

                                        <div class="filter-options-title">Categories</div>

                                        <div class="filter-options-content">

                                            <ul>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Home Audio & Theater</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>TV & Video</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Camera, Photo & Video</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Cell Phones & Accessories</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Headphones</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Video Games</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Bluetooth & Wireless Speakers</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Gaming Console</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Computers & Tablets</label></li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="filter-options-item filter-brand">

                                        <div class="filter-options-title">Brand</div>

                                        <div class="filter-options-content">

                                            <ul>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Cameras</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Smartphone</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Printer & Ink</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Game & Consoles</label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Sound & Speaker</label></li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="filter-options-item filter-price">

                                        <div class="filter-options-title">Price</div>

                                        <div class="filter-options-content">

                                            <div class="price_slider_wrapper">

                                                <div data-label-reasult="Price:" data-min="0" data-max="3000" data-unit="Rs." class="slider-range-price " data-value-min="85" data-value-max="2000">

                                                    <span class="text-right">Filter</span>

                                                </div>

                                                <div class="price_slider_amount">

                                                    <div class="price_label">

                                                        Price: <span class="from">Rs.85</span>-<span class="to">Rs.2000</span>

                                                    </div>



                                                </div>



                                            </div>

                                        </div>

                                    </div>

                                    <div class="filter-options-item filter-size">

                                        <div class="filter-options-title">Size</div>

                                        <div class="filter-options-content">

                                            <ul>

                                                <li><label class="inline" ><input type="checkbox"><span class="input">S</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input">M</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input">L</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input">XL</span></label></li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="filter-options-item filter-color">

                                        <div class="filter-options-title">Color</div>

                                        <div class="filter-options-content">

                                            <ul>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Red<span class="value">(217)</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Black<span class="value">(79)</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Grey<span class="value">(116)</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>While<span class="value">(38)</span></label></li>

                                            </ul>

                                            <ul>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Yellow<span class="value">(179)</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Blue<span class="value">(283)</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Pink<span class="value">(29)</span></label></li>

                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Green<span class="value">(205)</span></label></li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="block-banner-sidebar">

                                <a href="#"><img src="{{asset('images/product/banner-sidebar.jpg')}}" alt="banner-sidebar"></a>

                            </div>

                            <div class="block-latest-roducts">

                                <div class="block-title">Latest Products</div>

                                <div class="block-latest-roducts-content">

                                    <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                                        <div class="owl-ones-row">

                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p1.jpg')}}" alt="p1"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Leather Chelsea Boots</a></div>

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

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p2.jpg')}}" alt="p2"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">2750 Cotu Classic Sneakers</a></div>

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

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p3.jpg')}}" alt="p3"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Thule Chasm Sport Duffel Bag</a></div>

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

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p4.jpg')}}" alt="p4"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Pullover Hoodie - Mens</a></div>

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

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="owl-ones-row">

                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p1.jpg')}}" alt="p1"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Leather Chelsea Boots</a></div>

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

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p2.jpg')}}" alt="p2"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">2750 Cotu Classic Sneakers</a></div>

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

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p3.jpg')}}" alt="p3"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Thule Chasm Sport Duffel Bag</a></div>

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

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-item style1">

                                                <div class="product-inner">

                                                    <div class="product-thumb">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('images/blog/p4.jpg')}}" alt="p4"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Pullover Hoodie - Mens</a></div>

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
                        @for ($i = 0; $i <= 6; $i++)
                         <a href="#" class="item-brand"><img src="{{asset('images/brand1.jpg')}}" alt="brand1"></a> Varun
                        @endfor

                            <!-- <a href="#" class="item-brand"><img src="assets/images/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="assets/images/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="assets/images/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="assets/images/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="assets/images/brand1.jpg" alt="brand1"></a> -->
                        </div>
                    </div>
                </div>
            </div>

        </main>


@endsection
