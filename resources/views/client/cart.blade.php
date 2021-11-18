@extends('client.layouts.master')
@section('content')
            
<div class="container container-240">         
    <div class="checkout">
        <ul class="breadcrumb v3">
            <li><a href="#">Home</a></li>
            <li class="active">Giỏ hàng</li>
        </ul>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="shopping-cart bd-7">
                    <div class="cmt-title text-center abs">
                        <h1 class="page-title v2">Giỏ hàng</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table cart-table">  
                            <tbody>
                                @foreach (Cart::content() as $product)
                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="{{ route('client.cart.remove',$product->rowId) }}" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="/client/img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">{{$product->name}} </a>
                                        </div>
                                    </td>
                                    
                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                              <input type="number" step="1" min="1" max="999" name="quantity" value="{{$product->qty}}" title="Qty" class="qty input-text js-number" size="4">
                                              <div class="tc pa">
                                                <a class="quantity-right-plus" href="{{ route('client.cart.increase',$product->rowId) }}"><i class="fa fa-caret-up"></i></a>
                                                <a class="quantity-left-minus" href="{{ route('client.cart.decrease',$product->rowId) }}"><i class="fa fa-caret-down"></i></a>
                                             </div>
                                           </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">{{number_format($product->price*$product->qty,0,'','.')}}đ</p>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-cart-bottom">
                        
                            <form class="form_coupon" action="#" method="post">
                                <input type="email" value="" placeholder="Nhập mã giảm giá" name="EMAIL" id="mail" class="newsletter-input form-control">
                                <div class="input-icon">
                                    <img src="/client/img/coupon-icon.png" alt="">
                                </div>
                                <button id="subscribe2" class="button_mini btn" type="submit">
                                    Áp dụng
                                </button>
                            </form>
                    </div>
    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="cart-total bd-7">
                    <div class="cmt-title text-center abs">
                        <h1 class="page-title v3">Tổng thanh toán</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="shop_table">
                            <tbody>
                                {{-- <tr class="cart-subtotal">
                                    <th>Tổng sản phẩm</th>
                                    <td>$ 1.215.00</td>
                                </tr>
                                <tr class="cart-shipping">
                                    <th>Shipping</th>
                                    <td class="td">
                                        <ul class="shipping">
                                            <li>
                                                <input type="radio" name="gender" value="Flat" id="radio1" checked="checked">
                                                <label for="radio1">Flat rate : $ 12</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="gender" value="Free" id="radio2">
                                                <label for="radio2">Free Shipping</label>
                                            </li>
                                        </ul>
                                        <a href="#" class="calcu">Calculate shipping</a>
                                    </td>
                                </tr> --}}
                                <tr class="order-total">
                                    <th>Tổng</th>
                                    <td>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}}đ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-total-bottom">
                        <a href="{{ route('client.order.index') }}" class="btn-gradient btn-checkout">Thanh toán</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection