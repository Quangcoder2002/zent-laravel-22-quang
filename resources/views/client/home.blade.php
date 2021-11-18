@extends('client.layouts.master')
@section('content')
<div class="ads-group v2 bd-slick">
    <div class="container container-240">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="e-slide js-slider-3items">
                    <div class="e-slide-img">
                        <img src="/client/img/slider/h5_s1.jpg" alt="" class="img-responsive">
                        <div class="slide-content v1">
                            <p class="cate">SMART TIVI</p>
                            <h3>Say hello to the future</h3>
                            <p class="sale">Sale up to <span class="red">60%</span> off</p>
                            <a href="#" class="slide-btn e-pink-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                    <div class="e-slide-img">
                        <img src="/client/img/slider/h5_s2.jpg" alt="" class="img-responsive">
                        <div class="slide-content v1">
                            <p class="cate">SMART TIVI</p>
                            <h3>Say hello to the future</h3>
                            <p class="sale">Sale up to <span class="red">60%</span> off</p>
                            <a href="#" class="slide-btn e-pink-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                    <div class="e-slide-img">
                        <img src="/client/img/slider/h5_s3.jpg" alt="" class="img-responsive">
                        <div class="slide-content v1">
                            <p class="cate">SMART TIVI</p>
                            <h3>Say hello to the future</h3>
                            <p class="sale">Sale up to <span class="red">60%</span> off</p>
                            <a href="#" class="slide-btn e-red-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-12 banner-img-item">
                        <div class="banner-img banner-img2">
                            <a href="#"><img src="/client/img/banner/h5_b2.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v4">
                                <p class="content-name">Playstation 4 game pro</p>
                                <p class="content-price">From <span class="red">29.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 banner-img-item">
                        <div class="banner-img banner-img2 banner-img-item">
                            <a href="#"><img src="/client/img/banner/h5_b1.jpg" alt="" class="img-responsive"></a>
                            <div class="h-banner-content v4">
                                <p class="content-name">Smart phone mix 2</p>
                                <p class="content-price">From <span class="red">99.99</span></p>
                                <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature v2 -->
<div class="e-feature">
    <div class="container container-240">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 feature-item">
                <div class="feature-block-img">
                    <img src="/client/img/feature/b_truck.png" alt="" class="img-reponsive">
                </div>
                <div class="feature-info v2">
                    <h3>Giao hàng trên toàn thế giới</h3>
                    <p>Với các trang web bằng 5 ngôn ngữ, chúng tôi giao hàng đến hơn 200 quốc gia và khu vực.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 feature-item">
                <div class="feature-block-img">
                    <img src="/client/img/feature/b_credit.png" alt="" class="img-reponsive">
                </div>
                <div class="feature-info v2">
                    <h3>Thanh toán an toàn</h3>
                    <p>Thanh toán bằng các phương thức thanh toán an toàn và phổ biến nhất trên thế giới.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 feature-item">
                <div class="feature-block-img">
                    <img src="/client/img/feature/b-tele.png" alt="" class="img-reponsive">
                </div>
                <div class="feature-info v2">
                    <h3>Hỗ trợ 24/7</h3>
                    <p>Hỗ trợ 24/7 để có trải nghiệm mua sắm suôn sẻ.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product tab gradient -->
<div class="product-tab">
    <div class="container container-240">
        <div class="ecome-heading style2 spc5">
            <ul class="product-tab-sw v2">
                <li class="active"><a data-toggle="tab" href="#feature" aria-expanded="true">Nổi bật</a></li>
                <li class=""><a data-toggle="tab" href="#top-rated" aria-expanded="false">Top theo dõi</a></li>
                <li class=""><a data-toggle="tab" href="#most" aria-expanded="false">Sản phẩm mới</a></li>
            </ul>
            <a href="#" class="btn-show">Xem thêm<i class="ion-ios-arrow-forward"></i></a>
        </div>
        <div class="tab-content">
            <div id="feature" class="tab-pane fade in active">
                <div class="product-tab-pd js-multiple-row2">
                  @foreach ($features as $feature)
                  <div class="product-item">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="{{ route('client.product.show', ['id'=>$feature->id]) }}"><img src="/client/img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                            {!! $feature->show_percent!!}
                        </div>
                        <div class="product-info">
                            <div class="color-group">
                                <a href="#" class="circle black"></a>
                                <a href="#" class="circle skyblue"></a>
                                <a href="#" class="circle pink"></a>
                            </div>
                            <div class="element-list element-list-left">
                                <ul class="desc-list">
                                    <li>Connects directly to Bluetooth</li>
                                    <li>Battery Indicator light</li>
                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                    <li>Computers running Windows</li>
                                </ul>
                            </div>
                            <div class="element-list element-list-middle">
                                <div class="product-rating bd-rating">
                                    <span class="star star-5"></span>
                                    <span class="star star-4"></span>
                                    <span class="star star-3"></span>
                                    <span class="star star-2"></span>
                                    <span class="star star-1"></span>
                                    <div class="number-rating">( 896 reviews )</div>
                                </div>
                                <p class="product-cate">{{$feature->category->name}}</p>
                                <h3 class="product-title"><a href="{{ route('client.product.show', ['id'=>$feature->id]) }}">{{$feature->name}}</a></h3>
                                <div class="product-bottom">
                                    <div class="product-price">{!!$feature->show_price!!}</div>
                                    <a href="{{ route('client.product.show', ['id'=>$feature->id]) }}" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                </div>
                                <div class="product-bottom-group">
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                </div>
                            </div>
                            <div class="product-button-group">
                                <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                  @endforeach
                    
                </div>
            </div>
            <div id="top-rated" class="tab-pane fade">
                <div class="product-tab-pd js-multiple-row2">
                    @foreach ($top_views as $top_view)
                    <div class="product-item">
                        <div class="pd-bd product-inner">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/sound.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle red"></a>
                                    <a href="#" class="circle gray"></a>
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( {{$top_view->review_count}} đánh giá )</div>
                                    </div>
                                    <p class="product-cate">{{$top_view->category->name}}</p>
                                    <h3 class="product-title"><a href="#">{{$top_view->name}}</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price">{!!$top_view->show_price!!}</div>
                                        <a href="{{ route('client.product.show', ['id'=>$top_view->id]) }}" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                        <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                        <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="most" class="tab-pane fade">
                <div class="product-tab-pd js-multiple-row2">
                    @foreach ($news as $new)
                    <div class="product-item">
                        <div class="pd-bd product-inner">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/sound3.jpg" alt="" class="img-reponsive"></a>
                                {!! $new->show_percent!!}
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <p class="product-cate">{{$new->category->name}}</p>
                                    <h3 class="product-title"><a href="#">{{$new->name}}</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            {!!$new->show_price!!}
                                        </div>
                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                        <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                        <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
            </div>
        </div>
    </div>
</div>
<!-- homepage banner -->
<div class="homepage-banner">
    <div class="container container-240">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="banner-img banner-img2">
                    <a href="#"><img src="/client/img/banner/h5_b3.jpg" alt="" class="img-responsive"></a>
                    <div class="h-banner-content">
                        <p class="content-name">The pro stage for your home</p>
                        <p class="content-price">From <span class="red">69.99</span></p>
                        <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="banner-img banner-img2">
                    <a href="#"><img src="/client/img/banner/h5_b4.jpg" alt="" class="img-responsive"></a>
                    <div class="h-banner-content">
                        <p class="content-name">Smart speaker for music lovers</p>
                        <p class="content-price">From <span class="red">39.99</span></p>
                        <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Best sellers -->
<div class="bestseller2 spc5 bg-gradient bg-insinde">
    <div class="container container-240">
        <div class="h-heading">
            <div class="title-icon">
                <h1>Sản phẩm bán chạy</h1>
            </div>
            <ul class="product-tab-sw2">
                <li class="active"><a data-toggle="tab" href="#tv" aria-expanded="true">Thiết bị điện tử</a></li>
                <li class=""><a data-toggle="tab" href="#audito" aria-expanded="false">Âm thanh</a></li>
                <li class=""><a data-toggle="tab" href="#camera" aria-expanded="false">Máy ảnh & máy quay</a></li>
                <li class=""><a data-toggle="tab" href="#phone" aria-expanded="false">Điện thoại & phụ kiện</a></li>
                <li class=""><a data-toggle="tab" href="#headphone" aria-expanded="false">Tai nghe</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="tv" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                        <div class="pd-bd product-inner v3">
                            <div class="product-img v3">
                                <a href="#"><img src="/client/img/b-product5.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle skyblue"></a>
                                    <a href="#" class="circle pink"></a>
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <p class="product-cate">Audio Speakers</p>
                                    <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>$1,215.00</span></div>
                                        <a href="#" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/usb.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="audito" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                        <div class="pd-bd product-inner v3">
                            <div class="product-img v3">
                                <a href="#"><img src="/client/img/b-product1.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle skyblue"></a>
                                    <a href="#" class="circle pink"></a>
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <p class="product-cate">Audio Speakers</p>
                                    <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>$1,215.00</span></div>
                                        <a href="#" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/usb.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="camera" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                        <div class="pd-bd product-inner v3">
                            <div class="product-img v3">
                                <a href="#"><img src="/client/img/b-product4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle skyblue"></a>
                                    <a href="#" class="circle pink"></a>
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <p class="product-cate">Audio Speakers</p>
                                    <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>$1,215.00</span></div>
                                        <a href="#" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/usb.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="phone" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                        <div class="pd-bd product-inner v3">
                            <div class="product-img v3">
                                <a href="#"><img src="/client/img/b-product3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle skyblue"></a>
                                    <a href="#" class="circle pink"></a>
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <p class="product-cate">Audio Speakers</p>
                                    <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>$1,215.00</span></div>
                                        <a href="#" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/usb.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="headphone" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                        <div class="pd-bd product-inner v3">
                            <div class="product-img v3">
                                <a href="#"><img src="/client/img/b-product2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle skyblue"></a>
                                    <a href="#" class="circle pink"></a>
                                </div>
                                <div class="element-list element-list-left">
                                    <ul class="desc-list">
                                        <li>Connects directly to Bluetooth</li>
                                        <li>Battery Indicator light</li>
                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                        <li>Computers running Windows</li>
                                    </ul>
                                </div>
                                <div class="element-list element-list-middle">
                                    <div class="product-rating bd-rating">
                                        <span class="star star-5"></span>
                                        <span class="star star-4"></span>
                                        <span class="star star-3"></span>
                                        <span class="star star-2"></span>
                                        <span class="star star-1"></span>
                                        <div class="number-rating">( 896 reviews )</div>
                                    </div>
                                    <p class="product-cate">Audio Speakers</p>
                                    <h3 class="product-title"><a href="#">GP100 Video Projector</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>$1,215.00</span></div>
                                        <a href="#" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                    </div>
                                    <div class="product-bottom-group">
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/usb.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="#"><img src="/client/img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Connects directly to Bluetooth</li>
                                                <li>Battery Indicator light</li>
                                                <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                <li>Computers running Windows</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Wireless Controller - White</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span class="red">$1.450.00</span>
                                                    <span class="old">$1,215.00</span>
                                                </div>
                                                <a href="#" class="btn-icon btn-view">
                                                    <span class="icon-bg icon-view"></span>
                                                </a>
                                            </div>
                                            <div class="product-bottom-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-button-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
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
<!-- Category -->
<div class="category-list spc5">
    <div class="container container-240">
        <div class="ecome-heading style5 spc5v2">
            <h1>Danh mục</h1>
            <a href="#" class="btn-show">xem thêm<i class="ion-ios-arrow-forward"></i></a>
        </div>
        
        <div class="owl-carousel owl-theme owl-cate v3 js-owl-cate">
            @foreach ($cate_products as $item)
            <div class="category-item">
                <div class="bd-7 pd30">
                    <div class="cate-img">
                        <a href="#"><img src="/client/img/product/tv3.jpg" alt=""></a>
                    </div>
                    <div class="cate-content">
                        <h3>{{$item->name}}</h3>
                        <div class="abs">
                            <a href="#" class="btn-shopcate btn-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="cate-bg pd30">
                    <ul class="cate-list">
                        {{-- <li><a href="#">Televisions</a></li>
                        <li><a href="#">Blu-ray Players</a></li>
                        <li><a href="#">Streaming Media Players</a></li>
                        <li><a href="#">Home Audio</a></li> --}}
                    </ul>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<div class="container container-240">
    <div class="brand">
        <div class="ecome-heading style5v2 spc4">
            <h1>Các thương hiệu</h1>
        </div>
        <div class="owl-carousel owl-theme owl-brand js-owl-brand">
            @foreach ($brand as $item)
            <div class="brand-item">
                <a href="" class="hover-images"><img src="client/img/brand/brand.png" alt=""></a>
            </div>
            @endforeach
        </div>
        <div class="about-brand">
            <div class="row">
                {{-- <div class="col-xs-12 col-sm-12 col-sm-3 col-md-4">
                    <div class="about-brand-info text-center">
                        <div class="brand-img">
                            <a href="#" class="hover-images"><img src="client/img/brand/sony_info.png" alt=""></a>
                        </div>
                        <div class="brand-info">
                            <p>All the Lorem Ipsum generators on the Internet
                                <br> tend to repeat predefined chunks as necessary, making this the first true generator on the Internetandful
                                <br> of model sentence </p>
                        </div>
                        <a href="#" class="btn-gradient btn-brand">Shop this brand <i class="ion-ios-arrow-forward"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-sm-8 col-md-8">
                    <div class="row engoc-equal-row">
                        <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                            <div class="pd-bd product-inner v2">
                                <div class="flex align-center">
                                    <div class="product-img">
                                        <a href="#"><img src="client/img/product/tplink.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom v2">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <div class="product-bottom-element flex">
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    <div class="color-group">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-xs hidden-sm">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-button-group hidden-md hidden-lg">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                            <div class="pd-bd product-inner v2">
                                <div class="flex align-center">
                                    <div class="product-img">
                                        <a href="#"><img src="client/img/product/wifi.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom v2">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <div class="product-bottom-element flex">
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    <div class="color-group">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-xs hidden-sm">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-button-group hidden-md hidden-lg">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                            <div class="pd-bd product-inner v2">
                                <div class="flex align-center">
                                    <div class="product-img">
                                        <a href="#"><img src="client/img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom v2">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <div class="product-bottom-element flex">
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    <div class="color-group">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-xs hidden-sm">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-button-group hidden-md hidden-lg">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 product-item">
                            <div class="pd-bd product-inner v2">
                                <div class="flex align-center">
                                    <div class="product-img">
                                        <a href="#"><img src="client/img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group">
                                        </div>
                                        <div class="element-list element-list-left">
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <p class="product-cate">Audio Speakers</p>
                                            <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                            <div class="product-bottom v2">
                                                <div class="product-price"><span>$1,215.00</span></div>
                                                <div class="product-bottom-element flex">
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    <div class="color-group">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button-group hidden-xs hidden-sm">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-button-group hidden-md hidden-lg">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-cart"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<!-- recent added -->
<!-- Banner -->
<div class="container container-240">
    <div class="banner-callus spc2 spc5 image-bd effect_img2">
        <a href="#"><img src="/client/img/banner/h5_b5.jpg" alt="" class="img-responsive"></a>
        <div class="box-center">
            <p>Free Shipping on Orders $50</p>
            <a href="#" class="btn-callus">Shop now</a>
        </div>
    </div>
</div>
@endsection