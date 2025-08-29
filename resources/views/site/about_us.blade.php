@extends('site.layouts.master')
@section('title')Giới thiệu - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/breadcrumb_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all" />

    <link href="/site/assets/paginate.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all" />



    <link href="/site/assets/style_page.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all" />


@endsection

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb" style="background-image: url({{ $banner->image->path ?? '' }});">

            <div class="container">
                <div class="title-bread-crumb">

                    Giới thiệu

                </div>
                <ul class="breadcrumb" >
                    <li class="home">
                        <a  href="{{ route('front.home-page') }}" ><span >Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
                    </li>

                    <li><strong ><span>Giới thiệu</span></strong></li>

                </ul>
            </div>
        </section>
        <section class="page page-about">
            <div class="container">
                <div class="pg_page padding-top-15">
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <div class="page-title category-title">
                                <h1 class="title-head d-none"><a href="#">Giới thiệu</a></h1>
                            </div>
                            <div class="content-page rte">
                                {!! $config->web_des !!}
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="aside-content-menu aside-content-blog">
                                <div class="title-head-col">
                                    Nội dung thêm


                                </div>
                                <nav class="nav-category">
                                    <ul class="nav navbar-pills">
                                        <li class="nav-item  relative">
                                            <a title="Trang chủ" class="nav-link" href="{{ route('front.home-page') }}">Trang chủ</a>
                                        </li>
                                        <li class="nav-item active relative">
                                            <a title="Giới thiệu" class="nav-link" href="{{ route('front.abouts') }}">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item  relative">
                                            <a title="Dự án" class="nav-link" href="{{ route('front.projects') }}">Dự án</a>
                                        </li>
                                        <li class="nav-item  relative">
                                            <a title="Dự án" class="nav-link" href="{{ route('front.getProductList') }}">Sản phẩm</a>
                                        </li>
                                        <li class="nav-item  relative">
                                            <a title="Tin tức" class="nav-link" href="{{ route('front.blogs') }}">Tin tức</a>
                                        </li>
                                        <li class="nav-item  relative">
                                            <a title="Liên hệ" class="nav-link" href="{{ route('front.contact') }}">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                                $(".open_mnu").click(function(){
                                    $(this).toggleClass('cls_mn').next().slideToggle();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection

@push('scripts')



@endpush
