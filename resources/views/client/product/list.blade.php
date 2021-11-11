@extends('client.layouts.master')
@push('stack-css')
@endpush
@section('content')
            
<div class="container container-240 shop-collection catleft">
    <div class="filter-collection-left hidden-lg hidden-md">
      <a class="btn">Filter</a>
    </div>
    <div class="row shop-colect r-sidebar">
        <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
            <div class="close-sidebar-collection hidden-lg hidden-md">
                <span>filter</span><i class="icon_close ion-close"></i>
            </div>
            <div class="filter filter-cate">
                <ul class="wiget-content v3">
                    <li class="active"><a href="#">All Categories</a>
                        <ul class="wiget-content v4">
                            <li><h3>Cell Phone & Accessories <span class="number">(120)</span></h3></li>
                            <li><a href="#">Unlocked Cell Phones <span class="number">(80)</span></a></li>
                            <li><a href="#">Carrier Phones <span class="number">(39)</span></a></li>
                            <li><a href="#">Accessories  <span class="number">(56)</span></a></li>
                            <li><a href="#">Wearable Technology <span class="number">(10)</span></a></li>
                            <li><a href="#">Cases <span class="number">(30)</span></a></li>
                            <li><a href="#">Bluetooth Headsets <span class="number">(30)</span></a></li>
                            <li><a href="#">Top 20 Staff Pick <span class="number">(30)</span></a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="filter filter-group">
                <h1 class="widget-blog-title">Product filter</h1>
                <div class="filter-price filter-inside">
                    <h3>Price</h3>
                    <div class="filter-content">
                        <div class="price-range-holder">
                            <input type="text" class="price-slider" value="">
                        </div>
                        <span class="min-max">
                            Price: $25 — $258
                        </span>
                        <a href="#" class="btn-filter e-gradient">Filter</a>
                    </div>
                </div>
                <div class="filter-brand filter-inside">
                    <h3>Brands</h3>
                    <ul class="e-filter brand-filter">
                        <li><a href="#">Apple <span class="number">(80)</span></a></li>
                        <li class="active-filter"><a href="#">Samsung <span class="number">(80)</span></a></li>
                        <li><a href="#">LG <span class="number">(80)</span></a></li>
                        <li><a href="#">Blackberry <span class="number">(80)</span></a></li>
                        <li><a href="#">Oppo <span class="number">(80)</span></a></li>
                        <li><a href="#">Panasonic <span class="number">(80)</span></a></li>
                    </ul>
                    <a href="#" class="btn-showmore">Show more +</a>
                </div>
                <div class="filter-color filter-brand filter-inside">
                    <h3>Color</h3>
                    <ul class="e-filter brand-filter">
                        <li><a href="#">Black <span class="number">(80)</span></a></li>
                        <li><a href="#">Black Leather <span class="number">(80)</span></a></li>
                        <li class="active-filter"><a href="#">Black with Red <span class="number">(80)</span></a></li>
                        <li><a href="#">Gold <span class="number">(80)</span></a></li>
                        <li><a href="#">Spacegrey  <span class="number">(80)</span></a></li>
                    </ul>
                    <a href="#" class="btn-showmore">Show more +</a>
                </div>
            </div>
            <div class="filter filter-product e-category">
                <h1 class="widget-blog-title">Top Products</h1>
                <div class="owl-carousel owl-theme js-owl-post">
                    <div class="item">
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema</a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/sound.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema</a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/ring.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/macbookair.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/sound.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/ring.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/macbookair.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/sound.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/ring.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/macbookair.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <a class="image-bd hover-images" href=""><img src="/client/img/o-banner3.jpg" alt="" class="img-reponsive"></a>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
            <div class="e-product">
                <div class="pd-banner">
                   <a href="#" class="image-bd effect_img2"><img src="/client/img/o-banner2.jpg" alt="" class="img-reponsive"></a> 
                </div>
                <div class="section-cate">
                    <div class="owl-carousel owl-theme owl-cate js-owl-cate2">
                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/pd1.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Unlocked Cell Phones</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Carrier Phones</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Bluetooth Headsets</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/phonecase.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Premium Case</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Unlocked Cell Phones</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Unlocked Cell Phones</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/samsung3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Unlocked Cell Phones</h3>
                        </div>

                        <div class="item item-pd">
                            <div class="product-img">
                                <a href="#"><img src="/client/img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <h3>Unlocked Cell Phones</h3>
                        </div>


                    </div>
                </div>
                <div class="pd-top">
                    <h1 class="title v2">Các mặt hàng</h1>
                    <div class="show-element"><span>Hiện {{$products->firstItem()}}–{{$products->lastItem()}} của {{$products->total()}} sản phẩm</span></div>
                </div>
                <div class="pd-middle">
                    <div class="view-mode view-group">
                        <a class="grid-icon col active"><img src="/client/img/grid.png" alt=""></a>
                        <a class="grid-icon col2"><img src="/client/img/grid2.png" alt=""></a>
                        <a class="list-icon list"><img src="/client/img/list.png" alt=""></a>
                    </div>
                    <form action="{{ route('client.product.index')}}" method="get">
                    <div class="pd-sort">
                        <div class="filter-sort">
                            <div class="dropdown">
                              <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                                    <span class="dropdown-label">{{(request()->get('sort')!='')?request()->get('sort'):'Sắp xếp mặc định'}}</span>
                              </button>
                              
                              <ul class="dropdown-menu">
                                  <li><a href="{{ route('client.product.index')}}" type="submit">Sắp xếp mặc định</a></li>
                                  <li><a href=""><button name="sort" type="submit" value="Mới nhất">Mới nhất</button></a></li>
                                  <li><a href=""><button name="sort" type="submit" value="Bán chạy">Bán chạy</button></a></li>
                              </ul>
                           
                            </div>
                        </div>
                        <div class="filter-show">
                            <div class="dropdown">
                                  <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                      Show
                                        <span class="dropdown-label">12</span>
                                  </button>
                                  <ul class="dropdown-menu">
                                      <li><a href="#">12</a></li>   
                                      <li><a href="#">24</a></li>
                                      <li><a href="#">36</a></li>
                                        <li><a href="#">48</a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="product-collection-grid product-grid">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                            <div class="pd-bd product-inner">
                                <div class="product-img">
                                    <a href="#"><img src="/client/img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                    {!! $product->show_percent!!}
                                </div>
                                <div class="product-info">
                                    <div class="color-group"></div>
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
                                            <div class="number-rating">( {{$product->review_count}} đánh giá )</div>
                                        </div>
                                        <p class="product-cate">{{$product->category->name}}</p>
                                        <h3 class="product-title"><a href="#">{{$product->name}}</a></h3>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                {!!$product->show_price!!}
                                            </div>
                                            <a href="{{ route('client.product.show', ['id'=>$product->id]) }}" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                        </div>    
                                        <div class="product-bottom-group">
                                            <a href="" class="btn-icon">
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
              
                <div class="pd-middle space-v1">
                    
                    {!!$products->links()!!}
                    {{-- <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul> --}}
                    {{-- <div class="pd-sort">
                        <div class="filter-sort">
                            <div class="dropdown">
                              <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="dropdown-label">Default sorting</span>
                              </button>
                              <ul class="dropdown-menu">
                                  <li><a href="manual">Featured</a></li>   
                                  <li><a href="best-selling">Best Selling</a></li>
                                  <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                    <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                  <li><a href="price-descending">Price, high to low</a></li>
                                  <li><a href="price-ascending">Price, low to high</a></li>
                                  <li><a href="created-ascending">Date, old to new</a></li>
                                  <li><a href="created-descending">Date, new to old</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="filter-show">
                            <div class="dropdown">
                                  <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                      Show
                                        <span class="dropdown-label">12</span>
                                  </button>
                                  <ul class="dropdown-menu">
                                      <li><a href="#">12</a></li>   
                                      <li><a href="#">24</a></li>
                                      <li><a href="#">36</a></li>
                                        <li><a href="#">48</a></li>
                                  </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection