@extends('client.layouts.master')
@section('content')
<div class="container container-240">
    <div class="e-cat">
        <div class="banner">
            <a href="#" class="image-bd effect_img2"><img src="/client/img/o-banner.jpg" alt="" class="img-reponsive"></a>
        </div>
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li class="active">Danh mục</li>
        </ul>
        <div class="section-cate">
            <h1 class="e-title text-center">Danh mục</h1>
            <div class="owl-carousel owl-theme owl-cate js-owl-cate">
                @foreach ($categories as $category)
                <form action="">
                    <input type="text" value="{{$category->id}}" name="cate" hidden>
                    <div class="item item-pd">
                        {{-- <div class="product-img">
                            <button type="submit" ><img src="/client/img/product/pd1.jpg" alt="" class="img-reponsive"></button>
                        </div> --}}
                        <h3 style="width: 100%;"><button style="width: 100%; background:white;" type="submit">{{$category->name}}</button></h3>
                    </div>
                </form>
                @endforeach
            </div>
            <div class="blog-grid">
                <div class="ecome-heading style3 spc3" style="margin-top: 35px;">
                    {{-- @php
                        dd($categories);
                    @endphp --}}
                    @if (request('cate') != null)
                        @foreach ($categories as $key => $category)
                            @if ($category->id == request('cate') )
                                <h1>{{$category->name}}</h1> 
                            @endif
                    @endforeach
                        
                    @else
                        <h1>{!!$categories[0]->name!!}</h1> 
                    @endif
                    
                </div>
                    @foreach ($posts as $post)
                        <div class="col-md-4 col-sm-6 col-xs-12 blog-post-item">
                            <div class="blog-img">
                                <a href="{{route('client.blog.show',['id'=>$post->id])}}" class="hover-images"><img src="{{$post->image_url_full}}" alt="" class="img-reponsive"></a>
                                <div class="blog-post-date e-gradient abs">
                                    <span class="b-date">{{$post->created_at->format('d')}}</span>
                                    <span class="b-month">{{'Tháng:'.$post->created_at->format('m')}}</span>
                                </div>
                            </div>
                            <div class="blog-info">
                                <h3 class="blog-post-title"><a href="{{route('client.blog.show',['id'=>$post->id])}}">{{$post->title}}</a></h3>
                                {{-- <p class="blog-post-desc" style="text-size:12px; ">{!!$post->short_content!!}</p> --}}
                                <div class="blog-post-author">
                                    <div class="author">Viết bởi <span class="c-black">{{$post->user->name}}</span></div>
                                    <div class="blog-post-comment"><span class="c-black"></span>2</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
@section('after-e-category')
<div class="feature">
    <div class="container container-240">
        <div class="feature-inside">
            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/truck.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Giao hàng trên toàn thế giới</h3>
                    <p>Với các trang web bằng 5 ngôn ngữ, chúng tôi giao hàng đến hơn 200 quốc gia và khu vực.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Thanh toán an toàn</h3>
                    <p>Thanh toán bằng các phương thức thanh toán an toàn và phổ biến nhất trên thế giới.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/safety.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Mua sắm với sự tự tin</h3>
                    <p>Bảo vệ người mua của chúng tôi bao gồm việc mua hàng của bạn từ khi nhấp chuột đến khi giao hàng.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/telephone.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Hỗ trợ 24/7</h3>
                    <p>Hỗ trợ 24/7 để có trải nghiệm mua sắm suôn sẻ.</p>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection