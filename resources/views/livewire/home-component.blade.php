<main id="main">
    <div class="container">

       <!--MAIN SLIDE-->
       <section id="section1">
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                data-dots="false">
                <div class="item-slide" id="section1">
                    <img src="{{ asset('assets/images/main-slider-1-1.jpg') }}" alt="" class="img-slide">
                    <div class="slide-info slide-1">
                        <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                        <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                        <p class="sale-info">Only price: <span class="price">RM 59.99</span></p>
                        <a href="/shop" class="btn-link">Shop Now</a>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{ asset('assets/images/main-slider-1-2.jpg') }}" alt="" class="img-slide">
                    <div class="slide-info slide-2">
                        <h2 class="f-title">Extra 25% Off</h2>
                        <span class="f-subtitle">On online payments</span>
                        <p class="discount-code">Use Code: #FA6868</p>
                        <h4 class="s-title">Get Free</h4>
                        <p class="s-subtitle">TRansparent Bra Straps</p>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="{{ asset('assets/images/main-slider-1-3.jpg') }}" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                        <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                        <p class="sale-info">Stating at: <b class="price">RM 225.00</b></p>
                        <a href="/shop" class="btn-link">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--BANNER-->
    <div class="wrap-banner style-twin-default">
        <div class="banner-item">
            <a href="/shop" class="link-banner banner-effect-1">
                <figure><img src="{{ asset('assets/images/home-1-banner-1.jpg') }}" alt="" width="580"
                        height="190"></figure>
            </a>
        </div>
        <div class="banner-item">
            <a href="/shop" class="link-banner banner-effect-1">
                <figure><img src="{{ asset('assets/images/home-1-banner-2.jpg') }}" alt="" width="580"
                        height="190"></figure>
            </a>
        </div>
    </div>

        <!--On Sale-->
        <section id="section2">
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-countdown mercado-countdown" data-expire="2023/12/12 12:34:56"></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
                    data-loop="false" data-nav="true" data-dots="false"
                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                    @foreach ($products as $product)
                        @if ($product->type_sale == 'Sales')
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                        title="{{ $product->name }}">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                width="800" height="800" alt="{{ $product->name }}">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        @if ($product->type_sale == 'Sales')
                                            <span class="flash-item sale-label">{{ $product->type_sale }}</span>
                                        @elseif ($product->type_sale == 'Best Seller')
                                            <span class="flash-item bestseller-label">{{ $product->type_sale }}</span>
                                        @else
                                            <span class="flash-item new-label">{{ $product->type_sale }}</span>
                                        @endif

                                    </div>
                                    <div class="wrap-btn">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                            class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $product->name }}</span></a>
                                    @if ($product->type_sale == 'Sales')
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">RM {{ $product->sale_price }}</p>
                                            </ins> <del>
                                                <p class="product-price">RM {{ $product->regular_price }}</p>
                                            </del></div>
                                    @else
                                        <div class="wrap-price"><span
                                                class="product-price">RM {{ $product->regular_price }}</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>

        <!--Latest Products-->
        <section id="section3">
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Latest Products</h3>
                <div class="wrap-top-banner">
                    <a class="link-banner banner-effect-2">
                        <figure><img src="{{ asset('assets/images/digital-electronic-banner.jpg') }}" width="1170"
                                height="240" alt="">
                        </figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                    @foreach ($products as $product)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                                    title="{{ $product->name }}">
                                                    <figure><img
                                                            src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                            width="800" height="800"
                                                            alt="{{ $product->name }}">
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    @if ($product->type_sale == 'Sales')
                                                        <span
                                                            class="flash-item sale-label">{{ $product->type_sale }}</span>
                                                    @elseif ($product->type_sale == 'Best Seller')
                                                        <span
                                                            class="flash-item bestseller-label">{{ $product->type_sale }}</span>
                                                    @else
                                                        <span
                                                            class="flash-item new-label">{{ $product->type_sale }}</span>
                                                    @endif

                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#"
                                                    class="product-name"><span>{{ $product->name }}</span></a>
                                                @if ($product->type_sale == 'Sales')
                                                    <div class="wrap-price"><ins>
                                                            <p class="product-price">RM {{ $product->sale_price }}</p>
                                                        </ins> <del>
                                                            <p class="product-price">RM {{ $product->regular_price }}
                                                            </p>
                                                        </del></div>
                                                @else
                                                    <div class="wrap-price"><span
                                                            class="product-price">RM {{ $product->regular_price }}</span>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Product Categories-->
        <section id="section4">
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Product Categories</h3>
                <div class="wrap-top-banner">
                    <a href="/shop" class="link-banner banner-effect-2">
                        <figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170"
                                height="240" alt="">
                        </figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#fashion_1a" class="tab-control-item active">{{ $categories[0]->name }}</a>
                            <a href="#fashion_1b" class="tab-control-item">{{ $categories[1]->name }}</a>
                            <a href="#fashion_1c" class="tab-control-item">{{ $categories[2]->name }}</a>
                            <a href="#fashion_1d" class="tab-control-item">{{ $categories[4]->name }}</a>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content-item active" id="fashion_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($products as $product)
                                        @if ($product->category_id == 1)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                                        title="{{ $product->name }}">
                                                        <figure><img
                                                                src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                                width="800" height="800"
                                                                alt="{{ $product->name }}">
                                                        </figure>
                                                    </a>
                                                    <div class="group-flash">
                                                        @if ($product->type_sale == 'Sales')
                                                            <span
                                                                class="flash-item sale-label">{{ $product->type_sale }}</span>
                                                        @elseif ($product->type_sale == 'Best Seller')
                                                            <span
                                                                class="flash-item bestseller-label">{{ $product->type_sale }}</span>
                                                        @else
                                                            <span
                                                                class="flash-item new-label">{{ $product->type_sale }}</span>
                                                        @endif

                                                    </div>
                                                    <div class="wrap-btn">
                                                        <a href="#" class="function-link">quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <a href="#"
                                                        class="product-name"><span>{{ $product->name }}</span></a>
                                                    @if ($product->type_sale == 'Sales')
                                                        <div class="wrap-price"><ins>
                                                                <p class="product-price">RM {{ $product->sale_price }}
                                                                </p>
                                                            </ins> <del>
                                                                <p class="product-price">RM {{ $product->regular_price }}
                                                                </p>
                                                            </del></div>
                                                    @else
                                                        <div class="wrap-price"><span
                                                                class="product-price">RM {{ $product->regular_price }}</span>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container "
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($products as $product)
                                        @if ($product->category_id == 2)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                                        title="{{ $product->name }}">
                                                        <figure><img
                                                                src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                                width="800" height="800"
                                                                alt="{{ $product->name }}">
                                                        </figure>
                                                    </a>
                                                    <div class="group-flash">
                                                        @if ($product->type_sale == 'Sales')
                                                            <span
                                                                class="flash-item sale-label">{{ $product->type_sale }}</span>
                                                        @elseif ($product->type_sale == 'Best Seller')
                                                            <span
                                                                class="flash-item bestseller-label">{{ $product->type_sale }}</span>
                                                        @else
                                                            <span
                                                                class="flash-item new-label">{{ $product->type_sale }}</span>
                                                        @endif

                                                    </div>
                                                    <div class="wrap-btn">
                                                        <a href="#" class="function-link">quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <a href="#"
                                                        class="product-name"><span>{{ $product->name }}</span></a>
                                                    @if ($product->type_sale == 'Sales')
                                                        <div class="wrap-price"><ins>
                                                                <p class="product-price">RM {{ $product->sale_price }}
                                                                </p>
                                                            </ins> <del>
                                                                <p class="product-price">RM {{ $product->regular_price }}
                                                                </p>
                                                            </del></div>
                                                    @else
                                                        <div class="wrap-price"><span
                                                                class="product-price">RM {{ $product->regular_price }}</span>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($products as $product)
                                        @if ($product->category_id == 3)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                                        title="{{ $product->name }}">
                                                        <figure><img
                                                                src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                                width="800" height="800"
                                                                alt="{{ $product->name }}">
                                                        </figure>
                                                    </a>
                                                    <div class="group-flash">
                                                        @if ($product->type_sale == 'Sales')
                                                            <span
                                                                class="flash-item sale-label">{{ $product->type_sale }}</span>
                                                        @elseif ($product->type_sale == 'Best Seller')
                                                            <span
                                                                class="flash-item bestseller-label">{{ $product->type_sale }}</span>
                                                        @else
                                                            <span
                                                                class="flash-item new-label">{{ $product->type_sale }}</span>
                                                        @endif

                                                    </div>
                                                    <div class="wrap-btn">
                                                        <a href="#" class="function-link">quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <a href="#"
                                                        class="product-name"><span>{{ $product->name }}</span></a>
                                                    @if ($product->type_sale == 'Sales')
                                                        <div class="wrap-price"><ins>
                                                                <p class="product-price">RM {{ $product->sale_price }}
                                                                </p>
                                                            </ins> <del>
                                                                <p class="product-price">RM {{ $product->regular_price }}
                                                                </p>
                                                            </del></div>
                                                    @else
                                                        <div class="wrap-price"><span
                                                                class="product-price">RM {{ $product->regular_price }}</span>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($products as $product)
                                        @if ($product->category_id == 5)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                                        title="{{ $product->name }}">
                                                        <figure><img
                                                                src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                                                width="800" height="800"
                                                                alt="{{ $product->name }}">
                                                        </figure>
                                                    </a>
                                                    <div class="group-flash">
                                                        @if ($product->type_sale == 'Sales')
                                                            <span
                                                                class="flash-item sale-label">{{ $product->type_sale }}</span>
                                                        @elseif ($product->type_sale == 'Best Seller')
                                                            <span
                                                                class="flash-item bestseller-label">{{ $product->type_sale }}</span>
                                                        @else
                                                            <span
                                                                class="flash-item new-label">{{ $product->type_sale }}</span>
                                                        @endif

                                                    </div>
                                                    <div class="wrap-btn">
                                                        <a href="#" class="function-link">quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <a href="#"
                                                        class="product-name"><span>{{ $product->name }}</span></a>
                                                    @if ($product->type_sale == 'Sales')
                                                        <div class="wrap-price"><ins>
                                                                <p class="product-price">RM {{ $product->sale_price }}
                                                                </p>
                                                            </ins> <del>
                                                                <p class="product-price">RM {{ $product->regular_price }}
                                                                </p>
                                                            </del></div>
                                                    @else
                                                        <div class="wrap-price"><span
                                                                class="product-price">RM {{ $product->regular_price }}</span>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</main>
