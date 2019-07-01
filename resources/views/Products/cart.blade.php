@extends('layout.app')
@section('content')

<main class="site-main shopping-cart">

        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="#">Home </a></li>
                <li class="active"><a href="#">Shopping Cart</a></li>
            </ol>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">

                @if(session()->has('success_message'))
                    <div class="alert alert-sucess">
                            {{session()->get('success_message')}}
                    </div>
                @endif

                @if(count($errors)> 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Cart::count() >0)
                <h2>{{Cart::count()}} item(s) in Shopping Cart</h2>
                    <form class="form-cart">
                        <div class="table-cart">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="tb-image"></th>
                                    <th class="tb-product">Product Name</th>
                                    <th class="tb-price">Unit Price</th>
                                    <th class="tb-qty">Qty</th>
                                    <th class="tb-total">SubTotal</th>
                                    <th class="tb-remove"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="tb-image"><a href="{{ route('productdetail',['id' => $item->id])}}" class="item-photo"><img src="{{$item->options->url}}"
                                                                                            alt="cart"></a></td>
                                    <td class="tb-product">
                                        <div class="product-name"><a href="#">{{$item->name}}</a></div>
                                    </td>
                                    <td class="tb-price">
                                        <span class="price">Rs.{{$item->price}}</span>
                                    </td>
                                    <td class="tb-qty">
                                        <div class="quantity">
                                            <div class="buttons-added">
                                                <input type="text" value="1" title="Qty" class="input-text qty text"
                                                       size="1">
                                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tb-total">
                                        <span class="price">Rs.{{$item->price}}</span>
                                    </td>
                                    </form>
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        <td class="tb-remove">
                                            @csrf
                                            {{ method_field('DELETE')}}
                                            <button type="submit" class="cart-options">Remove</button>

                                        <!-- <a href="#" class="action-remove"><span><i class="fa fa-times"
                                                                                  aria-hidden="true"></i></span></a> -->
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-actions">
                            <a href="{{ route('shop')}}" class="button">
                                <span>Continue Shopping</span>
                            </a>
                            <button type="submit" class="btn-clean">
                                <span>Update Shopping Cart</span>
                            </button>
                            <form action="{{ route('cart.empty') }}" method="GET">

                                @csrf
                                <button type="submit" class="btn-update">Clear Shopping Cart</button>

                            </form>
                            <!-- <button type="submit" class="btn-update">
                                <span>Clear Shopping Cart</span>
                            </button> -->
                        </div>

                </div>
                @else

                <div class="col-md-9">
                    <h3>No Item In Cart</h3>
                    <a href="{{ url('/shop')}}" class="button">
                                Continue Shopping
                    </a>
                </div>

                @endif
                <div class="col-md-3">
                    <div class="order-summary">
                        <h4 class="title-shopping-cart">Order Summary</h4>
                        <div class="checkout-element-content">
                            <span class="order-left">Subtotal:<span>Rs.{{Cart::subtotal()}}</span></span>
                            <span class="order-left">Shipping:<span>Free Shipping</span></span>
                            <span class="order-left">Total:<span class="cartprice">Rs.{{Cart::subtotal()}}</span></span>
                            <ul>
                                <li><label class="inline"><input type="checkbox"><span class="input"></span>I have promo
                                    code</label></li>
                            </ul>
                            <a href="{{url('/checkout')}}" type="submit" class="btn-checkout">
                                <span>Check Out</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section">You may be also interested</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="0"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":5}}'>
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
                    <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false"
                         data-loop="true" data-margin="2"
                         data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
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
