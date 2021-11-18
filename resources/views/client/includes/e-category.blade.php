<div class="e-category">
    <div class="container container-240">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1 class="cate-title">Sản phẩm nổi bật</h1>
                @foreach ($featured_product as $item)
                <div class="cate-item">
                    <div class="product-img">
                        <a href="#"><img src="/client/img/product/usb.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="product-info" style="width: 65%;">
                        <h3 class="product-title"><a href="#">{{$item->name}}</a></h3>
                        <div class="product-price v2">{!!$item->show_price!!}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1 class="cate-title">Sản phẩm mới</h1>
                @foreach ($new_products as $item)
                    <div class="cate-item">
                        <div class="product-img" >
                            <a href="#"><img src="/client/img/product/anker.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info" style="width: 65%;">
                            <h3 class="product-title"><a href="#">{{$item->name}}</a></h3>
                            <div class="product-price v2"><span>{!!$item->show_price!!}</span></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1 class="cate-title">Sản phẩm bán chạy</h1>
                @foreach ($top_products as $item)
                    <div class="cate-item">
                        <div class="product-img" >
                            <a href="#"><img src="/client/img/product/anker.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info" style="width: 65%;">
                            <h3 class="product-title"><a href="#">{{$item->name}}</a></h3>
                            <div class="product-price v2"><span>{!!$item->show_price!!}</span></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>