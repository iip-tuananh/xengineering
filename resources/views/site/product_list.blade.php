@extends('site.layouts.master')
@section('title')  {{ $category ? $category->name : "Sản phẩm" }} - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/breadcrumb_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>

    <link href="/site/assets/paginate.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>






    <link href="/site/assets/sidebar_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>



    <link href="/site/assets/collection_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>

@endsection


@section('content')
    <div class="bodywrap">
        <div class="layout-collection">
            <section class="bread-crumb"
                     style="background-image: url({{ $banner->image->path ?? '' }});">

                <div class="container">
                    <div class="title-bread-crumb">

                        {{ $category ? $category->name : "Tất cả sản phẩm" }}

                    </div>

                    <ul class="breadcrumb">
                        @if($category)
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

                            <li class="home">
                                <a href="{{ route('front.getProductList') }}"><span>Sản phẩm</span></a>
                                <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                               data-icon="chevron-right" role="img"
                                                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                               class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                            fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                            class=""></path></svg>&nbsp;</span>
                            </li>

                            <li><strong><span> {{ $category ? $category->name : "Tất cả sản phẩm" }}</span></strong></li>
                        @else
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


                            <li><strong><span> Tất cả sản phẩm</span></strong></li>
                        @endif



                    </ul>
                </div>
            </section>
            <div class="container">
                <div class="row">


                    <div class="block-collection col-lg-9 col-12">
                        <h1 class="title-page d-none"><span>{{ $category ? $category->name : "Tất cả sản phẩm" }}</span></h1>
                        <div class="category-products">

                            @php
                                $sort = request('sort', 'date_desc');
                                $options = [
                                    'date_desc'  => ['label' => 'Mặc định',      'title' => 'Mặc định'],
                                    'name_asc'   => ['label' => 'A &rarr; Z',    'title' => 'A → Z'],
                                    'name_desc'  => ['label' => 'Z &rarr; A',    'title' => 'Z → A'],
                                    'price_asc'  => ['label' => 'Giá tăng dần',  'title' => 'Giá tăng dần'],
                                    'price_desc' => ['label' => 'Giá giảm dần',  'title' => 'Giá giảm dần'],
                                    'date_asc'   => ['label' => 'Hàng cũ nhất',  'title' => 'Hàng cũ nhất'],
                                ];
                                $currentLabel = $options[$sort]['label'] ?? 'Mặc định';
                            @endphp

                            <div id="sort-by">
                                <label class="left">Sắp xếp: </label>

                                <ul id="sortBy">
                                    <li>
                                        <span>{!! $currentLabel !!}</span>
                                        <ul>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'date_desc','page'=>1]) }}"
                                                   title="Mặc định">Mặc
                                                    định</a></li>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'name_asc','page'=>1]) }}"
                                                   title="A &rarr; Z">A
                                                    &rarr; Z</a></li>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'name_desc','page'=>1]) }}"
                                                   title="Z &rarr; A">Z &rarr; A</a></li>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'price_asc','page'=>1]) }}"
                                                   title="Giá tăng dần">Giá tăng dần</a></li>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'price_desc','page'=>1]) }}"
                                                   title="Giá giảm dần">Giá giảm dần</a></li>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'date_desc','page'=>1]) }}"
                                                   title="Hàng mới nhất">Hàng mới nhất</a></li>
                                            <li>
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'date_asc','page'=>1]) }}"
                                                   title="Hàng cũ nhất">Hàng cũ nhất</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            <div class="products-view products-view-grid list_hover_pro">
                                <div class="row row-fix">

                                    @foreach($products as $product)
                                        <div class="col-6 col-md-4 col-xl-3 col-fix">
                                            <div class="item_product_main">

                                                <form
                                                    class="variants product-action" data-cart-form
                                                    data-id="product-actions-34111758" enctype="multipart/form-data">
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                           href="{{ route('front.getProductDetail', $product->slug) }}"
                                                           title="{{ $product->name }}">
                                                            <img width="234" height="234" class="lazyload image1"
                                                                 src="/site/assets/lazy75d3.png?1719476197344"
                                                                 data-src="{{ $product->image->path ?? '' }}"
                                                                 alt="  {{ $product->name }}">
                                                        </a>


                                                    </div>

                                                    <div class="product-info">
                                                        <h3 class="product-name">
                                                            <a class="line-clamp line-clamp-2"
                                                               href="{{ route('front.getProductDetail', $product->slug) }}"
                                                               title="{{ $product->name }}">
                                                                {{ $product->name }}
                                                            </a></h3>
                                                        <div class="price-box">
                                                            @if($product->price > 0)
                                                                {{ formatCurrency($product->price) }}₫
                                                            @else
                                                                Liên hệ
                                                            @endif

                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                            </div>

                            <div class="pagenav">
                                {{ $products->links('site.pagination.paginate2') }}
                            </div>


                        </div>
                    </div>
                    <aside class="dqdt-sidebar sidebar col-lg-3 col-12">

                        <div class="aside-content aside-content-menu">
                            <div class="title-head-col">
                                Danh mục sản phẩm
                            </div>
                            <nav class="nav-category">
                                <ul class="nav navbar-pills">
                                    @foreach($allCates as $cate)
                                        <li class="nav-item  relative">
                                            <a title="Quần áo bảo hộ" class="nav-link" href="{{ route('front.getProductList', $cate->slug) }}">{{ $cate->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </nav>
                        </div>
                        <script data-cfasync="false"
                                src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            $(".open_mnu").click(function () {
                                $(this).toggleClass('cls_mn').next().slideToggle();
                            });
                        </script>
                        <script
                            src="/site/assets/search_filter75d3.js?1719476197344"
                            type="text/javascript"></script>
                        <div class="filter-content">

                            <div class="filter-container">
                                <div class="col_title">
                                    <div class="filter-container__selected-filter" style="display: none;">
                                        <div class="filter-container__selected-filter-header clearfix">
					<span class="filter-container__selected-filter-header-title">
						Bạn chọn
					</span>
                                        </div>
                                        <div class="filter-container__selected-filter-list">
                                            <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                               class="filter-container__clear-all">Bỏ hết
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10"
                                                     height="10" x="0" y="0" viewBox="0 0 365.696 365.696"
                                                     style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                     class=""><g>
                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                              d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                                                              fill="#ffffff" data-original="#fff" style=""
                                                              class=""></path>
                                                    </g></svg>
                                            </a>
                                            <ul></ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Lọc giá -->


                                <!-- End Lọc giá -->
                                <!-- Lọc Loại -->
                                <!-- End Lọc Loại -->

                                <!-- Lọc Thương hiệu -->

                                <!-- End Lọc Thương hiệu -->

                                <!-- Lọc theo chất liệu -->

                                <!-- End lọc theo chất liệu -->
                                <!-- Lọc kích thước màn hình -->

                                <!-- End lọc theo kích thước màn hình -->
                                <div class="border_filter">

                                </div>
                                <!-- Lọc tính năng camera -->

                                <!-- End lọc theo tính nắng camera -->
                                <!-- Lọc theo tính năng đặc biệt -->

                                <!-- End lọc theo tính năng đặc biệt -->
                            </div>
                        </div>
                        <div class="blog_noibat">


                            <h2 class="h2_sidebar_blog">
                                <a href="{{ route('front.blogs') }}" title="Tin tức mới nhất">Tin tức mới nhất</a>
                            </h2>
                            <div class="blog_content">

                                @foreach($blogs as $blog)
                                    <div class="item">
                                        <div class="post-thumb">

                                            <a class="thumb" href="{{ route('front.blogDetail', $blog->slug) }}"
                                               title="{{ $blog->name }}">
                                                <img class="lazyload"
                                                     src="{{ $blog->image->path ?? '' }}"
                                                     data-src="{{ $blog->image->path ?? '' }}"
                                                     alt="{{ $blog->name }}">
                                            </a>


                                        </div>
                                        <div class="contentright">
                                            <h3>
                                                <a class="line-clamp line-clamp-2"
                                                   href="{{ route('front.blogDetail', $blog->slug) }}"
                                                   title="{{ $blog->name }}">{{ $blog->name }}</a>
                                            </h3>
                                        </div>

                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </aside>
                </div>
                <div id="open-filters" class="open-filters d-lg-none d-xl-none">
                </div>
            </div>
        </div>
        <div class="opacity_sidebar"></div>
        <script>
            var colName = "Tất cả sản phẩm";

            var colId = 0;

            var selectedViewData = "data";
        </script>
        <script src="/site/assets/col75d3.js?1719476197344"
                type="text/javascript"></script>
    </div>

@endsection

@push('scripts')


@endpush
