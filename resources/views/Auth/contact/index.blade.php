@extends('Auth.layouts.master')
@section('title')
    Liên hệ
@endsection
@section('content')
<!-- main wrapper start -->
<main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">Liên hệ</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- contact wrapper area start -->
        <div class="contact-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h2 class="contact-title">Gửi phản hồi</h2>
                            <form method="POST" class="contact-form">
                                @csrf()
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <input name="name" placeholder="Họ tên *" type="text">
                                        @if ($errors->has('name'))
                                            <span style="font-size: 12px;" class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Số điện thoại *" type="text">
                                        @if ($errors->has('phone'))
                                            <span style="font-size: 12px;" class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <input name="email" placeholder="Email *" type="text">
                                        @if ($errors->has('email'))
                                            <span style="font-size: 12px;" class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <input name="title" placeholder="Tiêu đề *" type="text">
                                        @if ($errors->has('title'))
                                            <span style="font-size: 12px;" class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Nội dung *" name="message" class="form-control2"></textarea>
                                            @if ($errors->has('message'))
                                                <span style="font-size: 12px;" class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                        </div>
                                        @if(session()->has('message_success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message_success') }}
                                            </div>
                                        @endif
                                        <div class="contact-btn">
                                            <button class="btn" type="submit">Gửi tin</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info pt-0">
                            <h2 class="contact-title">Liên hệ</h2>
                            <!-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                                formas human.</p> -->
                            <ul>
                                <li><i class="fa fa-fax"></i> Địc chỉ : 18E Cộng Hòa, Tân Bình, TP. Hồ Chí Minh</li>
                                <li><i class="fa fa-phone"></i> contact@fpt.com</li>
                                <li><i class="fa fa-envelope-o"></i> 0969.969.969</li>
                            </ul>
                            <div class="working-time">
                                <h3>Giờ làm việc</h3>
                                <p class="pb-0"><span>Thứ 2 – Thứ 6:</span>08AM – 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact wrapper area end -->
    </main>
@endsection
