@extends('site.layouts.master')
@section('title') {{ $product->name }}- {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')

    <link href="/site/assets/breadcrumb_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>

    <link href="/site/assets/product_style.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>

@endsection


@section('content')
    <div class="bodywrap">

        <section class="bread-crumb" style="background-image: url({{ $banner->image->path ?? '' }});">

            <div class="container">
                <div class="title-bread-crumb">

                    {{ $product->name }}

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


                    <li>
                        <a class="changeurl" href="{{ route('front.getProductList', $product->category->slug ?? '') }}"><span>  {{ $product->category->name ?? '' }}</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                       data-icon="chevron-right" role="img"
                                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                       class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                    fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path></svg>&nbsp;</span>
                    </li>

                    <li><strong><span>  {{ $product->name }}</span></strong>
                    <li>

                </ul>
            </div>
        </section>


        <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="product-detail-left product-images col-lg-6">

                                <div class="product-image-block relative">

                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper" id="lightgallery">

                                            <a class="swiper-slide" data-hash="0"
                                               href="{{ $product->image->path ?? '' }}" title="Click để xem">
                                                <img height="400" width="400" src="{{ $product->image->path ?? '' }}"
                                                     alt="{{ $product->name }}"
                                                     data-image="{{ $product->image->path ?? '' }}"
                                                     class="img-responsive mx-auto d-block swiper-lazy"/>
                                            </a>

                                            @foreach($product->galleries as $index => $gallery)
                                                <a class="swiper-slide" data-hash="{{ $index + 1 }}"
                                                   href="{{ $gallery->image->path ?? '' }}"
                                                   title="Click để xem">
                                                    <img height="400" width="400"
                                                         src="{{ $gallery->image->path ?? '' }}"
                                                         alt="{{ $product->name }}"
                                                         data-image="{{ $gallery->image->path ?? '' }}"
                                                         class="img-responsive mx-auto d-block swiper-lazy"/>
                                                </a>

                                            @endforeach

                                        </div>


                                    </div>
                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide" data-hash="0">
                                                <div class="p-100">
                                                    <img height="80" width="80" src="{{ $product->image->path ?? '' }}"
                                                         alt="{{ $product->name }}"
                                                         data-image="{{ $product->image->path ?? '' }}"
                                                         class="swiper-lazy"/>
                                                </div>
                                            </div>

                                            @foreach($product->galleries as $index => $gallery)
                                                <div class="swiper-slide" data-hash="0">
                                                    <div class="p-100">
                                                        <img height="80" width="80"
                                                             src="{{ $gallery->image->path ?? '' }}"
                                                             alt="{{ $product->name }}"
                                                             data-image="{{ $gallery->image->path ?? '' }}"
                                                             class="swiper-lazy"/>
                                                    </div>
                                                </div>

                                            @endforeach

                                        </div>
                                        <div class="swiper-button-next">
                                        </div>
                                        <div class="swiper-button-prev">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="details-pro col-lg-6">
                                <h1 class="title-product">{{ $product->name }}</h1>
                                <div class="inventory_quantity">

                                    <div class="thump-break">
		<span class="mb-break inventory">
			<span class="stock-brand-title">Tình trạng:</span>


			<span class="a-stock">
				Còn hàng
			</span>


		</span>
                                        <div class="sku-product clearfix">
                                            <span class="stock-brand-title">Mã sản phẩm:</span>
                                            <span class="variant-sku" itemprop="sku" content="Đang cập nhật"><span
                                                    class="a-sku">{{ $product->code }}</span></span>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews_details_product ">
                                    <div class=" "
                                         data-id="34110517">
                                        <div class="sapo-product-reviews-star" data-score="5" data-number="5"
                                             style="color: #ffbe00; font-size: 8px" title="Not rated yet!"><i data-alt="1"
                                                                                              class="star-on-png"
                                                                                              title="Not rated yet!"></i>&nbsp;<i
                                                data-alt="2" class="star-on-png" title="Not rated yet!"></i>&nbsp;<i
                                                data-alt="3" class="star-on-png" title="Not rated yet!"></i>&nbsp;<i
                                                data-alt="4" class="star-on-png" title="Not rated yet!"></i>&nbsp;<i
                                                data-alt="5" class="star-on-png" title="Not rated yet!"></i><input
                                                name="score" type="hidden" readonly=""></div>
                                       </div>
                                </div>

                                <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form"

                                      class="form-inline">
                                    <div class="price-box clearfix">

                                        <div class="special-price">
                                            @if($product->price > 0)
                                                <span
                                                    class="price product-price">{{ formatCurrency($product->price) }}₫</span>
                                            @else
                                                <span class="price product-price">Liên hệ</span>
                                            @endif
                                        </div> <!-- Giá -->

                                    </div>


                                    <div class="form-product">

                                        <div class="box-variant clearfix  d-none ">

                                            <input type="hidden" id="one_variant" name="variantId" value="106703414"/>

                                        </div>
                                        <div class="clearfix form-group ">
                                            <div class="flex-quantity">

                                                <div class="btn-mua button_actions clearfix">

                                                    <a href="{{ route('front.contact') }}">
                                                        <button type="button"
                                                                class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart"
                                                                title="Thêm vào giỏ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                                                 viewBox="0 0 29 29" fill="none">
                                                                <g clip-path="url(#clip0_546_768)">
                                                                    <path
                                                                        d="M28.5695 10.4822C28.1865 10.0018 27.612 9.72617 26.9932 9.72617H21.4082L18.3797 2.79149C18.1919 2.36153 17.6911 2.16504 17.2611 2.35292C16.831 2.54068 16.6347 3.04155 16.8225 3.47157L19.554 9.72622H9.44602L12.1775 3.47157C12.3653 3.04155 12.169 2.54074 11.7389 2.35292C11.309 2.16504 10.8081 2.36141 10.6203 2.79149L7.59183 9.72622H2.00684C1.38798 9.72622 0.813476 10.0018 0.430529 10.4823C0.0546051 10.954 -0.0841078 11.5604 0.0499606 12.1461L3.03249 25.1735C3.24075 26.0831 4.04545 26.7184 4.98936 26.7184H24.0106C24.9546 26.7184 25.7593 26.0831 25.9675 25.1735L28.95 12.1461C29.0841 11.5603 28.9454 10.9539 28.5695 10.4822ZM24.0106 25.0191H4.98936C4.8451 25.0191 4.71873 24.9245 4.68888 24.7942L1.70636 11.7669C1.68297 11.6647 1.72222 11.5878 1.75937 11.5413C1.79381 11.498 1.87181 11.4254 2.00684 11.4254H6.84978L6.62724 11.935C6.43948 12.3651 6.63579 12.8659 7.06581 13.0537C7.17648 13.1021 7.2918 13.1249 7.40537 13.1249C7.73286 13.1249 8.04495 12.9345 8.1844 12.6152L8.70397 11.4256H20.2962L20.8157 12.6152C20.9552 12.9345 21.2673 13.1249 21.5947 13.1249C21.7083 13.1249 21.8236 13.1021 21.9343 13.0537C22.3643 12.8659 22.5607 12.3651 22.3729 11.935L22.1503 11.4254H26.9933C27.1283 11.4254 27.2063 11.498 27.2407 11.5413C27.2778 11.5878 27.3172 11.6648 27.2938 11.7669L24.3112 24.7942C24.2813 24.9245 24.1549 25.0191 24.0106 25.0191Z"
                                                                        fill="#1F1E3C"/>
                                                                    <path
                                                                        d="M9.40234 15.107C8.93313 15.107 8.55273 15.4874 8.55273 15.9566V22.1871C8.55273 22.6563 8.93313 23.0367 9.40234 23.0367C9.87155 23.0367 10.252 22.6563 10.252 22.1871V15.9566C10.252 15.4874 9.87161 15.107 9.40234 15.107Z"
                                                                        fill="#1F1E3C"/>
                                                                    <path
                                                                        d="M14.5 15.107C14.0308 15.107 13.6504 15.4874 13.6504 15.9566V22.1871C13.6504 22.6563 14.0308 23.0367 14.5 23.0367C14.9692 23.0367 15.3496 22.6563 15.3496 22.1871V15.9566C15.3496 15.4874 14.9692 15.107 14.5 15.107Z"
                                                                        fill="#1F1E3C"/>
                                                                    <path
                                                                        d="M19.5977 15.107C19.1284 15.107 18.748 15.4874 18.748 15.9566V22.1871C18.748 22.6563 19.1284 23.0367 19.5977 23.0367C20.0669 23.0367 20.4473 22.6563 20.4473 22.1871V15.9566C20.4472 15.4874 20.0669 15.107 19.5977 15.107Z"
                                                                        fill="#1F1E3C"/>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_546_768">
                                                                        <rect width="29" height="29" fill="white"/>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>

                                                            Liên hệ

                                                        </button>
                                                    </a>



                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">

                                <div class="product-tab e-tabs not-dqtab" id="tab-product">
                                    <ul class="tabs tabs-title clearfix">

                                        <li class="tab-link active" data-tab="#tab-1">
                                            <h3>Mô tả sản phẩm</h3>
                                        </li>


                                        <li class="tab-link" data-tab="#tab-2">
                                            <h3>Hướng dẫn mua hàng</h3>
                                        </li>


{{--                                        <li class="tab-link" data-tab="#tab-3">--}}
{{--                                            <h3>Đánh giá sản phẩm</h3>--}}
{{--                                        </li>--}}

                                    </ul>
                                    <div class="tab-float">

                                        <div id="tab-1" class="tab-content active content_extab">
                                            <div class="rte product_getcontent">

                                                <div class="ba-text-fpt">
                                                    {!! $product->body !!}
                                                </div>
                                                <div class="show-more d-none">
                                                    <div class="btn btn-default btn--view-more see-more">
                                                        <a href="javascript:void(0)" class="more-text see-more">Xem
                                                            thêm</a>
                                                        <a href="javascript:void(0)" class="less-text see-more">Thu
                                                            gọn </a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                        <div id="tab-2" class="tab-content content_extab">
                                            <div class="rte">

                                               {!! $config->hdmh !!}

                                            </div>
                                        </div>


{{--                                        <div id="tab-3" class="tab-content content_extab">--}}
{{--                                            <div class="rte">--}}
{{--                                                <div id="sapo-product-reviews" class="sapo-product-reviews"--}}
{{--                                                     data-id="34111672">--}}
{{--                                                    <div id="sapo-product-reviews-noitem" style="display: none;">--}}
{{--                                                        <div class="content">--}}
{{--                                                            <p data-content-text="language.suggest_noitem"></p>--}}
{{--                                                            <div class="product-reviews-summary-actions">--}}
{{--                                                                <button type="button" class="btn-new-review"--}}
{{--                                                                        onclick="BPR.newReview(this); return false;"--}}
{{--                                                                        data-content-str="language.newreview"></button>--}}
{{--                                                            </div>--}}
{{--                                                            <div id="noitem-bpr-form_" data-id="formId"--}}
{{--                                                                 class="noitem-bpr-form" style="display:none;">--}}
{{--                                                                <div class="sapo-product-reviews-form"></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

                                    </div>
                                </div>

                            </div>

                            <div class="col-12">


                                <div class="productRelate product-lq">
                                    <h3 class="title">
                                        <a class="title-name" href="day-an-toan.html">Sản phẩm liên quan
                                        </a>
                                    </h3>

                                    <div class="product-relate-swiper swiper-container">
                                        <div class="swiper-wrapper">


                                            @foreach($productsLq as $pLienquan)
                                                <div class="swiper-slide">
                                                    <div class=" item_product_main">


                                                        <form
                                                               class="variants product-action" data-cart-form
                                                              data-id="product-actions-34111758"
                                                              enctype="multipart/form-data">
                                                            <div class="product-thumbnail">
                                                                <a class="image_thumb scale_hover"
                                                                   href="{{ route('front.getProductDetail', $pLienquan->slug) }}"
                                                                   title="{{ $pLienquan->name }}">
                                                                    <img width="234" height="234" class="lazyload image1"
                                                                         src="{{ $pLienquan->image->path ?? '' }}"
                                                                         data-src="{{ $pLienquan->image->path ?? '' }}"
                                                                         alt="{{ $pLienquan->name }}">
                                                                </a>

                                                            </div>

                                                            <div class="product-info">
                                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                                            href="{{ route('front.getProductDetail', $pLienquan->slug) }}"
                                                                                            title="{{ $pLienquan->name }}ỹ">{{ $pLienquan->name }}</a></h3>
                                                                <div class="price-box">
                                                                  {{ $pLienquan->price > 0 ? (formatCurrency($pLienquan->price)).'₫' : 'Liên hệ' }}
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach





                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row row-fix" style="position: sticky;
    top: 10px;">

                            <div class="col-12 col-fix margin-0">
                                <div class="support-product">
                                    <div class="title">
                                        CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN
                                    </div>
                                    <div class="image">
                                        <img src="/site/assets/image_hotro75d3.png?1719476197344"
                                             alt="Hỗ trợ trực tuyến">
                                    </div>
                                    <div class="title2">
                                        Để được hỗ trợ tốt nhất. Hãy gọi
                                    </div>
                                    <div class="phone">
                                        <a href="tel:19006750" title="{{ $config->hotline }}">{{ $config->hotline }}</a>
                                    </div>
                                    <div class="or">
                                        <span>Hoặc</span>
                                    </div>
                                    <div class="title3">
                                        Chat hỗ trợ trực tuyến
                                    </div>
                                    <a title="Chat với chúng tôi" class="chat" href="{{ $config->facebook_mess }}"
                                       target="_blank">
                                        Chat với chúng tôi
                                    </a>
                                </div>
                            </div>


                            <div class="col-12 col-md-6 col-lg-12 col-fix margin-0">
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
                            </div>


                            <div class="col-12 col-md-6 col-lg-12 col-fix margin-0">
                                <div class="aside-content-menu aside-content-blog">
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
                                <script>
                                    $(".open_mnu").click(function () {
                                        $(this).toggleClass('cls_mn').next().slideToggle();
                                    });
                                </script>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </section>


        <script>

            function activeTab(obj) {
                $('.product-tab ul li').removeClass('active');
                $(obj).addClass('active');
                var id = $(obj).attr('data-tab');
                $('.tab-content').removeClass('active');
                $(id).addClass('active');
            }

            $('.product-tab ul li').click(function () {
                activeTab(this);
                return false;
            });

            var variantsize = false;
            var ww = $(window).width();

            jQuery(function ($) {

                // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                // Hide selectors if we only have 1 variant and its title contains 'Default'.

                $('.selector-wrapper').hide();

                $('.selector-wrapper').css({
                    'text-align': 'left',
                    'margin-bottom': '15px'
                });
            });

            jQuery('.swatch :radio').change(function () {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
                $(this).closest('.swatch').find('.header .value-roperties').html(optionValue);
            });

            setTimeout(function () {
                $('.swatch .swatch-element').each(function () {
                    $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest('.swatch').find('input:checked').val());
                });
            }, 500);
            setTimeout(function () {
                var ch = $('.product_getcontent').height(),
                    smore = $('.show-more');
                console.log(ch);
                if (ch > 700) {
                    $('.ba-text-fpt').addClass('has-height');
                    smore.removeClass('d-none');
                }
            }, 200);
            $('.btn--view-more').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                $this.parents('.product_getcontent').toggleClass('expanded');
                $('html, body').animate({scrollTop: $('.product_getcontent').offset().top - 110}, 'slow');
                $(this).toggleClass('active');

            });


            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 5,
                slidesPerView: 20,
                freeMode: true,
                lazy: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                hashNavigation: true,
                slideToClickedSlide: true,
                breakpoints: {
                    300: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    500: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 5,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 10,
                    },
                    1199: {
                        slidesPerView: 5,
                        spaceBetween: 10,
                    },
                },
                navigation: {
                    nextEl: '.gallery-thumbs .swiper-button-next',
                    prevEl: '.gallery-thumbs .swiper-button-prev',
                },
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 0,
                lazy: true,
                hashNavigation: true,
                thumbs: {
                    swiper: galleryThumbs
                }
            });
            var swiper = new Swiper('.product-relate-swiper', {
                slidesPerColumnFill: 'row',
                direction: 'horizontal',
                slidesPerView: 4,
                spaceBetween: 20,
                slidesPerGroup: 1,
                slidesPerColumn: 1,
                navigation: {
                    nextEl: '.product-lq .section-next',
                    prevEl: '.product-lq .section-prev',
                },
                breakpoints: {
                    280: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });

            $(document).ready(function () {
                $("#lightgallery").lightGallery({
                    thumbnail: false
                });
            });

        </script>
    </div>

@endsection

@push('scripts')
    <link rel="preload" as="script" href="/site/assets/picbox75d3.js?1719476197344"/>
    <link rel="preload" as='style' type="text/css" href="/site/assets/picbox.scss75d3.css?1719476197344">
    <link href="/site/assets/picbox.scss75d3.css?1719476197344" rel="stylesheet" type="text/css" media="all"/>
    <script src="/site/assets/picbox75d3.js?1719476197344" type="text/javascript"></script>

@endpush
