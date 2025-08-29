@extends('site.layouts.master')
@section('title')Tìm kiếm - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/breadcrumb_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>
    <link href="/site/assets/paginate.scss.css?1719476197344" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/blog_article_style.scss.css?1719476197344" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/collection_style.scss.css?1719476197344" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/search_style.scss.css?1719476197344" rel="stylesheet" type="text/css" media="all" />

@endsection

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb" style="background-image: url({{ $banner->image->path ?? '' }});">

            <div class="container">
                <div class="title-bread-crumb">

                    Tìm kiếm

                </div>
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('front.home-page') }}"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                       data-icon="chevron-right" role="img"
                                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                       class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                    fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path></svg>&nbsp;</span>
                    </li>

                    <li><strong><span>Tìm kiếm</span></strong></li>

                </ul>
            </div>
        </section>
        <section class="signup search-main wrap_background background_white clearfix">
            <div class="container">
                <div class="category-products ">
                    <div class="products-view-grid">
                        <div class="row row-fix">
                            <div class="col-12 col-fix">
                                @if($products->count())
                                    <h1 class="title-page-search" style="font-size: 1.5rem">
                                        <span>Có {{ $products->count() }} kết quả tìm kiếm phù hợp với từ khóa "{{$keyword}}"</span>
                                    </h1>
                                @else
                                    <h1 class="title-page-search" style="font-size: 1.5rem">
                                        <span>Không tìm thấy bất kỳ kết quả nào với từ khóa "{{$keyword}}"</span>
                                    </h1>
                                @endif

                            </div>
                            @foreach($products as $product)
                                <div class="col-6 col-md-4 col-lg-20 col-fix">
                                    <form  class="variants product-action" data-cart-form data-id="product-actions-34110716" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="{{ route('front.getProductDetail', $product->slug) }}"
                                               title="{{ $product->name }}">
                                                <img  width="234" height="234" class="lazyload image1" src="{{ $product->image->path ?? '' }}"
                                                      data-src="{{ $product->image->path ?? '' }}" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                        href="{{ route('front.getProductDetail', $product->slug) }}" title="{{ $product->name }}">{{ $product->name }}</a></h3>
                                            <div class="price-box">
                                               {{ $product->price > 0 ? formatCurrency($product->price) .'₫' : 'Liên hệ' }}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('scripts')

@endpush
