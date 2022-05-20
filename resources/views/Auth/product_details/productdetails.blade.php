@extends('Auth.layouts.master')
@section('title')
    Chi tiết sản phẩm
@endsection
@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="{{URL::asset('img/banner/breadcrumb-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Cửa hàng</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Cửa hàng</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- product details wrapper start -->
    <div class="product-details-wrapper section-padding">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img1.jpg')}}" alt="" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img2.jpg')}}" alt=""/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img3.jpg')}}" alt=""/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img4.jpg')}}" alt=""/>
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-5">
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img1.jpg')}}" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img2.jpg')}}" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img3.jpg')}}" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img4.jpg')}}" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title">Primitive Mens Premium Shoes</h3>
                                    <div class="pro-review">
                                        <span><a href="#">1 đánh giá</a></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                    Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <a href="cart.html" class="btn btn-default">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="color-option mb-20">
                                        <h5 class="cat-title">Màu sắc :</h5>
                                        <ul>
                                            <li>
                                                <a class="c-black" href="#" title="Black"></a>
                                            </li>
                                            <li>
                                                <a class="c-blue" href="#" title="Blue"></a>
                                            </li>
                                            <li>
                                                <a class="c-brown" href="#" title="Brown"></a>
                                            </li>
                                            <li>
                                                <a class="c-gray" href="#" title="Gray"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-size mb-20">
                                        <h5 class="cat-title">Kích thước :</h5>
                                        <select class="nice-select">
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Tình trạng:</h5>
                                        <span>Còn hàng</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5 class="cat-title">Chia sẻ:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->
                    <div class="product-details-reviews section-padding">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab_one">Mô tả</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_two">Thông tin</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_three">Bình luận</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>
                                                <div class="review-description">
                                                    <div class="tab-thumb">
                                                        <img src="{{URL::asset('img/about/services.jpg')}}" alt="">
                                                    </div>
                                                    <div class="tab-des">
                                                        <h3>Thông tin sản phẩm :</h3>
                                                        <ul>
                                                            <li>Donec non est at libero vulputate rutrum</li>
                                                            <li>Morbi ornare lectus quis justo gravida</li>
                                                            <li>Pellentesque aliquet, sem eget laoreet</li>
                                                            <li>Donec a neque libero</li>
                                                            <li>Pellentesque aliquet, sem eget laoreet</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper.</p>
                                                <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_two">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Màu sắc</td>
                                                        <td>black, blue, red</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kích thước</td>
                                                        <td>L, M, S</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <form action="#" class="review-form">
                                                <h5>1 bình luận: <span>Chaz Kangeroo Hoodies</span></h5>
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="{{URL::asset('img/about/avatar.jpg')}}" alt="">
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>admin -</span> 30 Nov, 2018</p>
                                                        </div>
                                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit amet sem varius ante feugiat lacinia. Nunc ipsum nulla, vulputate ut venenatis vitae, malesuada ut mi. Quisque iaculis, dui congue placerat pretium, augue erat accumsan lacus</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span> Họ và tên</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span> Email</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span> Nội dung</label>
                                                        <textarea class="form-control" required></textarea>
                                                        <div class="help-block pt-10"><span class="text-danger">Ghi chú:</span> HTML is not translated!</div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span> Đánh giá</label>
                                                        &nbsp;&nbsp;&nbsp; Tệ&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating" checked>
                                                        &nbsp;Rất tốt
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="sqr-btn" type="submit">Tiếp tục</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- product details reviews end --> 

                    <!-- featured product area start -->
                    <section class="Related-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title text-center">
                                        <h2 class="title">Sản phẩm liên quan</h2>
                                        <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                                        <!-- product single item start -->
                                        <div class="product-item mb-50">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{URL::asset('img/product/product-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">
                                                    <a href="product-details.html">Leather Mens Slipper</a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$80.00</span>
                                                    <span class="price-old"><del>$70.00</del></span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Thêm vào giỏ hàng"><i class="ion-bag"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                        title="Xem nhanh"><i class="ion-ios-eye-outline"></i></span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product single item start -->

                                        <!-- product single item start -->
                                        <div class="product-item mb-50">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{URL::asset('img/product/product-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">
                                                    <a href="product-details.html">Quickiin Mens shoes</a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$80.00</span>
                                                    <span class="price-old"><del>$70.00</del></span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Thêm vào giỏ hàng"><i class="ion-bag"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                        title="Xem nhanh"><i class="ion-ios-eye-outline"></i></span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product single item start -->

                                        <!-- product single item start -->
                                        <div class="product-item mb-50">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{URL::asset('img/product/product-3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">
                                                    <a href="product-details.html">Rexpo Womens shoes</a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$80.00</span>
                                                    <span class="price-old"><del>$70.00</del></span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                        title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product single item start -->

                                        <!-- product single item start -->
                                        <div class="product-item mb-50">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{URL::asset('img/product/product-4.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">
                                                    <a href="product-details.html">Primitive Mens shoes</a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$80.00</span>
                                                    <span class="price-old"><del>$70.00</del></span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                        title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product single item start -->

                                        <!-- product single item start -->
                                        <div class="product-item mb-50">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="{{URL::asset('img/product/product-5.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">
                                                    <a href="product-details.html">Leather Mens Slipper</a>
                                                </h5>
                                                <div class="price-box">
                                                    <span class="price-regular">$80.00</span>
                                                    <span class="price-old"><del>$70.00</del></span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                        title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product single item start -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- featured product area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- product details wrapper end -->
</main>
<!-- main wrapper end -->
    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img1.jpg')}}" alt="product thumb" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img2.jpg')}}" alt="product thumb"/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img3.jpg')}}" alt="product thumb"/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{URL::asset('img/product/product-details-img4.jpg')}}" alt="product thumb"/>
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-5">
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img1.jpg')}}" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img2.jpg')}}" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img3.jpg')}}" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{URL::asset('img/product/product-details-img4.jpg')}}" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title">Primitive Mens Premium Shoes</h3>
                                    <div class="pro-review">
                                        <span><a href="#">1 bình luận</a></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <a href="cart.html" class="btn btn-default">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Tình trạng: </h5>
                                        <span>Còn hàng</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5 class="cat-title">Chia sẻ:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->



@endsection