<header class="header" ng-controller="headerPartial">
    <div class="container">
        <div class="thumb-header ">

            <style>
                .nav-item{
                    text-transform: uppercase;
                }
            </style>

            <div class="row align-item-center no-margin">


                <div class="col-lg-2 col-12 no-padding">
                    <a href="{{ route('front.home-page') }}" class="logo" title="Logo" style="display: block;    padding: 10px; text-align: center">
                        <img  height="100" style="max-height: 100px"
                             src="{{ $config->image->path ?? '' }}"
                             alt="{{ $config->web_title }}">
                    </a>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <form
                          class="header-search-form input-group search-bar" role="search">
                        <input type="text" name="query" required
                               class="input-group-field auto-search search-auto form-control"
                               placeholder="Nhập tên sản phẩm..." autocomplete="off"  ng-model="keywords">
                        <input type="hidden" name="type" value="product">
                        <button type="button" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm" ng-click="search()">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="#000"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill="#000"
                                      d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z"></path>
                            </svg>
                        </button>

                    </form>
                </div>
                <div class="col-lg-10 no-padding " style="    right: -1px;">
                    <div class="top-header d-none d-lg-block">
                        <div class="row align-item-center no-margin">
                            <div class="col-lg-5 col-xl-6">
                                <div class="topbar-text">
                                    <div class="text-slider swiper-container">
                                        <div class="swiper-wrapper">


                                            <div class="swiper-slide">
                                                {{ $config->short_name_company }} xin chào!
                                            </div>


                                            <div class="swiper-slide">
                                                Bạn cần hỗ trợ?
                                            </div>


                                            <div class="swiper-slide">
                                                Liên hệ ngay cho chúng tôi nhé!
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-6">
                                <ul class="ul-contact">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                        <div class="contact">
                                            Hotline:
                                            <a href="tel:{{ $config->hotline }}" title="{{ $config->hotline }}">{{ $config->hotline }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <svg style="    margin-top: -1px;" xmlns="http://www.w3.org/2000/svg" width="16"
                                             height="16" fill="currentColor" class="bi bi-envelope-fill"
                                             viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                        </svg>
                                        <div class="contact ">
                                            Email:
                                            <a href=""
                                               title="{{ $config->email }}"><span class="__cf_email__"
                                                                             >{{ $config->email }}</span></a>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-header">
                        <div class="row no-margin">

                            <div class=" col-lg-8">
                                <div class="header-menu">
                                    <div class="header-menu-des">
                                        <nav class="header-nav">
                                            <ul class="item_big">
                                                <li>
                                                    <a class="logo-sitenav d-lg-none d-block" href="index.html"
                                                       title="Logo">
                                                        <img width="172" height="50"
                                                             src="{{ $config->image->path ?? '' }}"
                                                             alt="{{ $config->web_title }}">
                                                    </a>
                                                </li>
{{--                                                <li class="d-lg-none d-block account-mb">--}}
{{--                                                    <ul>--}}


{{--                                                        <li>--}}
{{--                                                            <a href="account/register.html" title="Đăng ký">--}}
{{--                                                                Đăng ký--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="account/login.html" title="Đăng nhập">--}}
{{--                                                                Đăng nhập--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </li>--}}
                                                <li class="d-block d-lg-none title-danhmuc"><span>Menu chính</span></li>


                                                <li class="nav-item nav-item-first {{ request()->routeIs('front.home-page') ? 'active' : '' }} ">
                                                    <a class="a-img" href="{{ route('front.home-page') }}" title="Trang chủ">
                                                        Trang chủ
                                                    </a>
                                                </li>

                                                <li class="nav-item {{ request()->routeIs('front.abouts') ? 'active' : '' }}">
                                                    <a class="a-img" href="{{ route('front.abouts') }}" title="Giới thiệu">
                                                        Giới thiệu
                                                    </a>
                                                </li>

                                                <li class="nav-item {{ request()->routeIs('front.services') ? 'active' : '' }} ">
                                                    <a class="a-img" href="{{ route('front.services') }}" title=" Dịch vụ">
                                                        Dịch vụ
                                                    </a>
                                                </li>

                                                <li class="nav-item {{ request()->routeIs('front.getProductList') ? 'active' : '' }} ">
                                                    <a class="a-img" href="{{ route('front.getProductList') }}" title="Sản phẩm">
                                                        Sản phẩm
                                                    </a>
                                                </li>

                                                <li class="nav-item {{ request()->routeIs('front.projects') ? 'active' : '' }} ">
                                                    <a class="a-img" href="{{ route('front.projects') }}" title="Dự án">
                                                        Dự án đã thực hiện
                                                    </a>
                                                </li>

                                                <li class="nav-item {{ request()->routeIs('front.blogs') ? 'active' : '' }} ">
                                                    <a class="a-img" href="{{ route('front.blogs') }}" title="Tin tức">
                                                        Tin tức
                                                    </a>
                                                </li>


                                                <li class="nav-item {{ request()->routeIs('front.contact') ? 'active' : '' }}  ">
                                                    <a class="a-img" href="{{ route('front.contact') }}" title="Liên hệ">
                                                        Liên hệ
                                                    </a>
                                                </li>







                                            </ul>
                                        </nav>

                                        <div class="control-menu d-none">
                                            <a href="#" id="prev">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path fill="#fff"
                                                          d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                                                </svg>
                                            </a>
                                            <a href="#" id="next">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path fill="#fff"
                                                          d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-7 col-sm-9 col-lg-2 header-control ">
                                <ul class="ul-control">
                                    <li class="menu-bar d-inline-block d-lg-none">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="svg-inline--fa fa-bars fa-w-14">
                                            <path fill="#ffffff"
                                                  d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                                                  class=""></path>
                                        </svg>
                                    </li>

                                    <li class="header-search d-lg-inline-block d-none">
                                        <a href="search.html" class="icon" title="Tìm kiếm">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path fill="#fff"
                                                      d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                            </svg>
                                        </a>
                                        <div class="search-smart">
                                            <form
                                                class="header-search-form input-group search-bar" role="search">
                                                <input type="text" name="query" required
                                                       class="input-group-field auto-search search-auto form-control"
                                                       placeholder="Nhập tên sản phẩm..." autocomplete="off"  ng-model="keywords">
                                                <input type="hidden" name="type" value="product">
                                                <button type="button" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm" ng-click="search()">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#000"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#000"
                                                              d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z"></path>
                                                    </svg>
                                                </button>

                                            </form>




                                        </div>
                                    </li>


                                </ul>
                            </div>
                            <div class="col-5 col-sm-3 col-lg-2 header-button">
                                <a href="{{ route('front.contact') }}" title="Liên hệ ngay">Liên hệ ngay
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                        <path fill-rule="evenodd"
                                              d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</header>
