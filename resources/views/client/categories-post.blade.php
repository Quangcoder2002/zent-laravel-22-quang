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
                    <h1>{!!$categories[request('cate')-1]->name!!}</h1>
                </div>
                    @foreach ($posts as $post)
                        <div class="col-md-4 col-sm-6 col-xs-12 blog-post-item">
                            <div class="blog-img">
                                <a href="{{route('client.blog.show',['id'=>$post->id])}}" class="hover-images"><img src="/client/img/blog/blog_1.jpg" alt="" class="img-reponsive"></a>
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
                    <h3>Worldwide Delivery</h3>
                    <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Safe Payment</h3>
                    <p>Pay with the world’s most popular and secure payment methods.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/safety.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>Shop with Confidence</h3>
                    <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                </div>
            </div>

            <div class="feature-block text-center">
                <div class="feature-block-img"><img src="/client/img/feature/telephone.png" alt="" class="img-reponsive"></div>
                <div class="feature-info">
                    <h3>24/7 Help Center</h3>
                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection