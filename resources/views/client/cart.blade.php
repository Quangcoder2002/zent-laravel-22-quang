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
                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="/client/img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>
                                    
                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                              <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                              <div class="tc pa">
                                                <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                             </div>
                                           </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                </tr>

                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="/client/img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>
                                    
                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                              <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                              <div class="tc pa">
                                                 <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                 <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                              </div>
                                           </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                </tr>

                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="/client/img/product/sound2.jpg" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>
                                    
                                    <td class="bcart-quantity single-product-detail">
                                        <div class="single-product-info">
                                            <div class="e-quantity">
                                              <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                              <div class="tc pa">
                                                 <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                                 <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                              </div>
                                           </div>
                                        </div>
                                    </td>
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                </tr>
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
                                    <td>$ 1.215.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-total-bottom">
                        <a href="#" class="btn-gradient btn-checkout">Mua hàng</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection