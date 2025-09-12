@extends('site.layouts.master')
@section('title'){{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link rel="preload" as='style' type="text/css"
          href="/site/assets/index.scss75d3.css?1719476197344123">
    <link href="/site/assets/index.scss75d3.css?1719476197344123" rel="stylesheet"
          type="text/css" media="all"/>
@endsection

@section('content')
    <div class="bodywrap">

        <section class="section_slider">
            <div class="container">
                <div class="row ">
                    <div class="home-slider swiper-container">
                        <div class="swiper-wrapper">

                            @foreach($banners as $banner)
                                <div class="swiper-slide">
                                    <div class="clearfix" title="Slider">
                                        <picture>
                                            <source
                                                media="(min-width: 1200px)"
                                                srcset="{{ $banner->image->path ?? '' }}">
                                            <source
                                                media="(min-width: 992px)"
                                                srcset="{{ $banner->image->path ?? '' }}">
                                            <source
                                                media="(min-width: 569px)"
                                                srcset="{{ $banner->image->path ?? '' }}">
                                            <source
                                                media="(max-width: 567px)"
                                                srcset="{{ $banner->image->path ?? '' }}">
                                            <img width="1917" height="876"
                                                 src="{{ $banner->image->path ?? '' }}"
                                                 alt="Slider" class="img-responsive"/>
                                        </picture>
                                    </div>
                                    <div class="thumb-slider-text">

                                        <div class="title">
                                            {{ $banner->title }}
                                        </div>
                                        <div class="content" style="font-size: 50px">
                                            {!! $banner->intro !!}
                                        </div>
                                        <a class="style-button" href="{{ route('front.contact') }}" title="Liên hệ">
                                            Liên hệ
                                            <span>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-chevron-double-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd"
                                          d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
									<path fill-rule="evenodd"
                                          d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
								</svg>
							</span>
                                        </a>

                                    </div>
                                </div>

                            @endforeach


                        </div>


                    </div>

                </div>
            </div>
        </section>

        <script>
            var swiper = new Swiper('.home-slider', {
                autoplay: false,
                pagination: {
                    el: '.home-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.home-slider .swiper-button-next',
                    prevEl: '.home-slider .swiper-button-prev',
                },
            });
        </script>


        <section class="section_about">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 image">
                        <picture>

                            <source
                                media="(max-width: 567px)"
                                srcset="{{ $about->image->path ?? '' }}">
                            <img width="647" height="725" class="lazyload"
                                 src="{{ $about->image->path ?? '' }}"
                                 data-src="{{ $about->image->path ?? '' }}"
                                 alt="	Về Chúng Tôi">
                        </picture>
                        <div class="content-image">
					<span class="num counter">
						{{ $about->experience_number }}
					</span>
                            <span class="text">
						Năm <b>Kinh nghiệm</b>
					</span>
                        </div>
                    </div>
                    <div class="col-lg-6 noidung">
				<span class="title-smail">
					Về Chúng Tôi
				</span>
                        <span class="title">
				{{ $about->title }}
				</span>
                        <span class="content">
					{!! $about->intro !!}
				</span>
                        @if ($about->results && count($about->results))
                        <ul>
                            @foreach($about->results as $result)
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<path
                                d="M497.36,69.995c-7.532-7.545-19.753-7.558-27.285-0.032L238.582,300.845l-83.522-90.713    c-7.217-7.834-19.419-8.342-27.266-1.126c-7.841,7.217-8.343,19.425-1.126,27.266l97.126,105.481    c3.557,3.866,8.535,6.111,13.784,6.22c0.141,0.006,0.277,0.006,0.412,0.006c5.101,0,10.008-2.026,13.623-5.628L497.322,97.286    C504.873,89.761,504.886,77.54,497.36,69.995z"/>
                                        <path
                                            d="M492.703,236.703c-10.658,0-19.296,8.638-19.296,19.297c0,119.883-97.524,217.407-217.407,217.407    c-119.876,0-217.407-97.524-217.407-217.407c0-119.876,97.531-217.407,217.407-217.407c10.658,0,19.297-8.638,19.297-19.296    C275.297,8.638,266.658,0,256,0C114.84,0,0,114.84,0,256c0,141.154,114.84,256,256,256c141.154,0,256-114.846,256-256    C512,245.342,503.362,236.703,492.703,236.703z"/>
						</svg>
                                    <span><b>{{ $result['title'] }}</b>
{{ $result['content'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                        @endif

                        <a class="style-button" href="{{ route('front.abouts') }}" title="Xem thêm">
                            Xem thêm
                            <span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-double-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
                                  d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
							<path fill-rule="evenodd"
                                  d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .section_giaiphap .title-smail {
                font-weight: 500;
                font-size: 18px;
                line-height: 28px;
                text-transform: capitalize;
                color: #000;
                padding: 0;
                margin: 0 0 5px;
                display: block;
                position: relative;
                text-align: center;
            }

            .section_giaiphap .title {
                font-size: 48px;
                line-height: 56px;
                z-index: 9;
                padding: 0;
                margin: 0 0;
                position: relative;
                display: block;
                color: #FF1212;
                font-weight: 700;
                text-align: center;
                margin-bottom: 50px;
            }
        </style>



        <style>
            /* Khối item có nền ảnh khi hover */
           .section_giaiphap .item{
                position: relative !important;
                overflow: hidden !important;
                border-radius: 12px !important;
                background:#fff !important;
            }

            /* Ảnh nền */
            .section_giaiphap .item .bg{
                position:absolute !important; inset:0 !important;
                background-size:cover !important; background-position:center !important;
                opacity:0; transform:scale(1.03) !important;
                transition:opacity .25s ease, transform .5s ease, filter .25s ease !important;
                z-index:0 !important;
            }

            /* Lớp tối (scrim) để tăng độ tương phản chữ */
            .section_giaiphap .item::after{
                content:""; position:absolute !important; inset:0 !important;
                background:rgba(0,0,0,0) !important;       /* mặc định không tối */
                transition:background .25s ease !important;
                pointer-events:none !important;             /* không chặn click */
                z-index:1 !important;
            }

            /* Nội dung luôn nằm trên overlay */
            .section_giaiphap .item .icon,
            .section_giaiphap .item a,
            .section_giaiphap .item span{ position:relative !important; z-index:2 !important; transition:color .25s ease; }

            /* Hiệu ứng khi hover (desktop) */
            @media (hover:hover) and (pointer:fine){
                .section_giaiphap .item:hover .bg{ opacity:1 !important; transform:scale(1.08); filter:brightness(.85); }
                .section_giaiphap .item:hover::after{
                    /* gradient dịu mắt, có thể tăng/giảm 0.45–0.65 tùy ảnh */
                    background:linear-gradient(180deg, rgba(0,0,0,.25), rgba(0,0,0,.55)) !important;
                }
                .section_giaiphap .item:hover a,
                .section_giaiphap .item:hover span{ color:#fff; text-shadow:0 1px 2px rgba(0,0,0,.5)!important; }
                .section_giaiphap .item:hover .icon img{ filter:drop-shadow(0 2px 3px rgba(0,0,0,.4)) brightness(1.05)!important; }
            }

            /* Tuỳ chọn: “bọc nền” ngay sau chữ để luôn dễ đọc, dùng cùng hoặc thay cho scrim */
            .section_giaiphap  .item:hover a,
            .section_giaiphap .item:hover span{
                /* bật 2 dòng dưới nếu muốn có nền mờ ngay sau text */
                /* background:rgba(0,0,0,.45); padding:2px 6px; border-radius:6px;
                   -webkit-box-decoration-break:clone; box-decoration-break:clone; */
            }

        </style>
        <section class="section_giaiphap">
            <div class="container">
{{--                <span class="title-smail">--}}
{{--			Kinh nghiệm tuyệt vời trong việc xây dựng--}}
{{--		</span>--}}
                <span class="title">
			Dịch vụ của chúng tôi
		</span>
                <div class="row">

                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="icon">
                                    <img width="64" height="64" class="lazyload"
                                         src="{{ $service->image_label->path ?? '' }}"
                                         data-src="{{ $service->image_label->path ?? '' }}"
                                         alt="{{ $service->name }}">
                                </div>

                                <a href="{{ route('front.getServiceDetail', $service->slug) }}">{{ $service->name }}</a>
                                <span>{{ $service->description }}</span>
                                <div class="bg lazyload"
                                     data-src="{{ $service->image->path ?? '' }}"></div>
                            </div>
                        </div>

                    @endforeach
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="item">--}}
{{--                            <div class="icon">--}}
{{--                                <img width="64" height="64" class="lazyload"--}}
{{--                                     src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                     data-src="//bizweb.dktcdn.net/100/504/442/themes/940088/assets/icon_item_giaiphap_2.png?1719476197344"--}}
{{--                                     alt="Thiết kế kiến trúc - nội thất">--}}
{{--                            </div>--}}

{{--                            <a href="#">Thiết kế kiến trúc - nội thất</a>--}}
{{--                            <span>Giải pháp thiết kế kiến trúc, nội thất, đáp ứng nhu cầu đa dạng về phong cách và ngân sách. Các thiết kế chú tâm nâng cấp thẩm mỹ kiến trúc và vẻ đẹp cá nhân hóa.</span>--}}
{{--                            <div class="bg lazyload"--}}
{{--                                 data-src="/site/assets/bg_item_giaiphap_275d3.png?1719476197344"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="item">--}}
{{--                            <div class="icon">--}}
{{--                                <img width="64" height="64" class="lazyload"--}}
{{--                                     src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                     data-src="//bizweb.dktcdn.net/100/504/442/themes/940088/assets/icon_item_giaiphap_3.png?1719476197344"--}}
{{--                                     alt="Thi công xây toàn bộ - xây phần thô">--}}
{{--                            </div>--}}

{{--                            <a href="#">Thi công xây toàn bộ - xây phần thô</a>--}}
{{--                            <span>Giải pháp thi công kiến trúc ngoại thất, nội thất và hạng mục phụ theo bản vẽ chủ đầu tư cung cấp, kết hợp tư vấn tối ưu thiết kế và kiểm tra pháp lý.</span>--}}
{{--                            <div class="bg lazyload"--}}
{{--                                 data-src="/site/assets/bg_item_giaiphap_375d3.png?1719476197344"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="item">--}}
{{--                            <div class="icon">--}}
{{--                                <img width="64" height="64" class="lazyload"--}}
{{--                                     src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                     data-src="//bizweb.dktcdn.net/100/504/442/themes/940088/assets/icon_item_giaiphap_4.png?1719476197344"--}}
{{--                                     alt="Cải tạo sửa chữa nhà">--}}
{{--                            </div>--}}

{{--                            <a href="#">Cải tạo sửa chữa nhà</a>--}}
{{--                            <span>Giải pháp thiết kế, thi công nâng cấp, mở rộng công trình. Bố trí lại không gian thẩm mỹ và khoa học. Tính toán kết cấu an toàn, tối ưu ngân sách hợp lý.</span>--}}
{{--                            <div class="bg lazyload"--}}
{{--                                 data-src="/site/assets/bg_item_giaiphap_475d3.png?1719476197344"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="item">--}}
{{--                            <div class="icon">--}}
{{--                                <img width="64" height="64" class="lazyload"--}}
{{--                                     src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                     data-src="//bizweb.dktcdn.net/100/504/442/themes/940088/assets/icon_item_giaiphap_5.png?1719476197344"--}}
{{--                                     alt="Pháp lý xây dựng">--}}
{{--                            </div>--}}

{{--                            <a href="#">Pháp lý xây dựng</a>--}}
{{--                            <span>Giải pháp dịch vụ pháp lý đúng pháp luật - xử lý nhanh: pháp lý nhà đất, xin phép xây dựng, hoàn công và các thủ tục khác như cấp biển số nhà, điện, nước, thoát nước thải.</span>--}}
{{--                            <div class="bg lazyload"--}}
{{--                                 data-src="/site/assets/bg_item_giaiphap_575d3.png?1719476197344"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>


        <style>
            /* bỏ background của section nếu CSS cũ đang set */
            .section_about2 { background: none !important; }

            /* nền giới hạn trong container */
            .section_about2 .boxed-bg{
                background: url('/site/assets/bg_about75d3.jpg?1719476197344') center/cover no-repeat;
                border-radius: 14px;
                padding: 24px;               /* tuỳ chỉnh khoảng đệm */
            }

            /* tuỳ chọn: tăng padding trên desktop */
            @media (min-width: 992px){
                .section_about2 .boxed-bg{ padding: 40px; }
            }

        </style>
        <section class="section_about2"> <!-- bỏ lazy bg ở đây -->
            <div class="container">
                <div class="boxed-bg">   <!-- nền chỉ rộng bằng container -->
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="title">{{ $whyBlock->title }}</span>
                            <img width="711" height="427" class="lazyload"
                                 src="{{ $whyBlock->image->path ?? '' }}"
                                 data-src="{{ $whyBlock->image->path ?? '' }}" alt="Về Chúng Tôi">
                        </div>
                        <div class="col-lg-6">
                            @if ($whyBlock->results && count($whyBlock->results))
                                <div class="about-tab e-tabs not-dqtab">

                                    <ul class="tabs tabs-title clearfix">
                                        @foreach ($whyBlock->results as $key => $why)
                                            <li class="tab-link {{ $loop->first ? 'active' : '' }}" data-tab="#tab-{{$key}}">
                                                <h3>{{ $why['title'] }}</h3>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="tab-float">
                                        @foreach ($whyBlock->results as $key => $why)

                                            <div id="tab-{{$key}}" class="tab-content {{ $loop->first ? 'active' : '' }} content_extab">
                                                {{ $why['content'] }}
                                            </div>

                                        @endforeach



                                    </div>
                                </div>
                            @endif

                            <a class="style-button" href="{{ route('front.contact') }}" title="Liên hệ ngay">
                                Liên hệ ngay
                                <span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-double-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
                                  d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
							<path fill-rule="evenodd"
                                  d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <script>
            function activeTab(obj) {
                $('.about-tab ul li').removeClass('active');
                $(obj).addClass('active');
                var id = $(obj).attr('data-tab');
                $('.tab-content').removeClass('active');
                $(id).addClass('active');
            }

            $('.about-tab ul li').click(function () {
                activeTab(this);
                return false;
            });
        </script>


        <script>
            var swipervideos = new Swiper('.videos-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 0,
                autoplay: false,
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                    },
                    500: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,

                    },
                    991: {
                        slidesPerView: 3,

                    },
                    1200: {
                        slidesPerView: 4,

                    }
                }

            });
        </script>


{{--        <section class="section_duan lazyload"--}}
{{--                 data-src="//bizweb.dktcdn.net/100/504/442/themes/940088/assets/duan-bg.jpg?1719476197344">--}}
{{--            <div class="container">--}}
{{--		<span class="title-smail">--}}
{{--			Một số dự án--}}
{{--		</span>--}}

{{--                <h3 class="title">--}}
{{--                    <a class="title-name" href="du-an.html" title="Đã hoàn thiện">Đã hoàn thiện--}}
{{--                    </a>--}}
{{--                </h3>--}}
{{--                <div class="duan-slider swiper-container">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb" href="hikari-complex.html" title="Hikari Complex">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da10.jpg?v=1704335399057"--}}
{{--                                             alt="Hikari Complex">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1" href="hikari-complex.html"--}}
{{--                                           title="Hikari Complex">Hikari Complex</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2022</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Nam</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb" href="nova-world-ho-tram-the-tropicana.html"--}}
{{--                                       title="Nova World Hồ Tràm – The Tropicana">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da9.jpg?v=1704335247817"--}}
{{--                                             alt="Nova World Hồ Tràm – The Tropicana">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1" href="nova-world-ho-tram-the-tropicana.html"--}}
{{--                                           title="Nova World Hồ Tràm – The Tropicana">Nova World Hồ Tràm – The--}}
{{--                                            Tropicana</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2021</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Nam</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb" href="khu-signature-show.html" title="Khu Signature Show">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da8.jpg?v=1704335119087"--}}
{{--                                             alt="Khu Signature Show">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1" href="khu-signature-show.html"--}}
{{--                                           title="Khu Signature Show">Khu Signature Show</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2022</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Nam</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb"--}}
{{--                                       href="truong-lien-cap-va-truong-mam-non-khu-dan-cu-cityland-riverside.html"--}}
{{--                                       title="Trường Liên cấp và Trường Mầm non Khu dân cư Cityland Riverside">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da7.jpg?v=1704334926257"--}}
{{--                                             alt="Trường Liên cấp và Trường Mầm non Khu dân cư Cityland Riverside">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1"--}}
{{--                                           href="truong-lien-cap-va-truong-mam-non-khu-dan-cu-cityland-riverside.html"--}}
{{--                                           title="Trường Liên cấp và Trường Mầm non Khu dân cư Cityland Riverside">Trường--}}
{{--                                            Liên cấp và Trường Mầm non Khu dân cư Cityland Riverside</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình văn hóa - y tế - Giáo dục</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2018</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Nam</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb" href="khu-nghi-duong-alma-resort.html"--}}
{{--                                       title="Khu nghỉ dưỡng Alma Resort">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da6.jpg?v=1704334598253"--}}
{{--                                             alt="Khu nghỉ dưỡng Alma Resort">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1" href="khu-nghi-duong-alma-resort.html"--}}
{{--                                           title="Khu nghỉ dưỡng Alma Resort">Khu nghỉ dưỡng Alma Resort</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2019</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Trung</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb"--}}
{{--                                       href="to-hop-du-lich-thung-lung-dai-duong-novaworld-phan-thiet.html"--}}
{{--                                       title="Tổ hợp du lịch thung lũng Đại dương ( Novaworld Phan Thiet)">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da5.jpg?v=1704334318027"--}}
{{--                                             alt="Tổ hợp du lịch thung lũng Đại dương ( Novaworld Phan Thiet)">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1"--}}
{{--                                           href="to-hop-du-lich-thung-lung-dai-duong-novaworld-phan-thiet.html"--}}
{{--                                           title="Tổ hợp du lịch thung lũng Đại dương ( Novaworld Phan Thiet)">Tổ hợp du--}}
{{--                                            lịch thung lũng Đại dương ( Novaworld Phan Thiet)</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2021</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Trung</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb" href="zannier-hotel-bai-san-ho.html"--}}
{{--                                       title="Zannier Hotel Bãi San Hô">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da4.jpg?v=1704334223693"--}}
{{--                                             alt="Zannier Hotel Bãi San Hô">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1" href="zannier-hotel-bai-san-ho.html"--}}
{{--                                           title="Zannier Hotel Bãi San Hô">Zannier Hotel Bãi San Hô</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2020</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Trung</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}


{{--                            <div class="item-blog-duan">--}}
{{--                                <div class="block-thumb">--}}

{{--                                    <a class="thumb" href="toa-nha-van-phong-vinfast.html"--}}
{{--                                       title="Tòa nhà Văn phòng Vinfast">--}}
{{--                                        <img width="400" height="300" class="lazyload"--}}
{{--                                             src="/site/assets/lazy75d3.png?1719476197344"--}}
{{--                                             data-src="https://bizweb.dktcdn.net/100/504/442/articles/da3.jpg?v=1704333912747"--}}
{{--                                             alt="Tòa nhà Văn phòng Vinfast">--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h3>--}}
{{--                                        <a class="line-clamp line-clamp-1" href="toa-nha-van-phong-vinfast.html"--}}
{{--                                           title="Tòa nhà Văn phòng Vinfast">Tòa nhà Văn phòng Vinfast</a>--}}
{{--                                    </h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>Hạng mục: <span>Công trình thương mại phức hợp</span></li>--}}
{{--                                        <li>Chủ đầu tư: <span>Dola Contruction</span></li>--}}
{{--                                        <li>Năm hoàn thiện: <span>2021</span></li>--}}
{{--                                        <li>Khu vực:<span>Miền Bắc</span></li>--}}
{{--                                    </ul>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <a class="style-button" href="du-an.html" title="Xem tất cả">--}}
{{--                    Xem tất cả--}}
{{--                    <span>--}}
{{--				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
{{--                     class="bi bi-chevron-double-right" viewBox="0 0 16 16">--}}
{{--					<path fill-rule="evenodd"--}}
{{--                          d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>--}}
{{--					<path fill-rule="evenodd"--}}
{{--                          d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>--}}
{{--				</svg>--}}
{{--			</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <script>--}}
{{--            var swiperduan = new Swiper('.duan-slider', {--}}
{{--                slidesPerView: 3,--}}
{{--                loop: false,--}}
{{--                grabCursor: true,--}}
{{--                roundLengths: true,--}}
{{--                slideToClickedSlide: false,--}}
{{--                spaceBetween: 20,--}}

{{--                autoplay: false,--}}
{{--                breakpoints: {--}}
{{--                    300: {--}}
{{--                        slidesPerView: 1,--}}
{{--                    },--}}
{{--                    500: {--}}
{{--                        slidesPerView: 1,--}}
{{--                    },--}}
{{--                    640: {--}}
{{--                        slidesPerView: 2,--}}
{{--                    },--}}
{{--                    768: {--}}
{{--                        slidesPerView: 2,--}}

{{--                    },--}}
{{--                    991: {--}}
{{--                        slidesPerView: 2,--}}

{{--                    },--}}
{{--                    1200: {--}}
{{--                        slidesPerView: 3,--}}

{{--                    }--}}
{{--                }--}}

{{--            });--}}
{{--        </script>--}}


        @foreach($categoriesSpecial as $cateSpecial)
            <section class="section_product">
                <div class="container">
{{--		<span class="title-smail">--}}
{{--			Một số sản phẩm--}}
{{--		</span>--}}

                    <h3 class="title">
                        <a class="title-name" href="#" title="Bảo hộ lao động">{{ $cateSpecial->name }}
                        </a>
                    </h3>

                    <div class="product-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($cateSpecial->products as $product)
                                <div class="swiper-slide">


                                    <form
                                          class="variants product-action" data-cart-form data-id="product-actions-34111758"
                                          enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                               href="{{ route('front.getProductDetail', $product->slug) }}"
                                               title="{{ $product->name }}">
                                                <img width="234" height="234" class="lazyload image1"
                                                     src="{{ $product->image->path ?? '' }}"
                                                     data-src="{{ $product->image->path ?? '' }}"
                                                     alt="{{ $product->name }}">
                                            </a>
                                        </div>

                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                        href="{{ route('front.getProductDetail', $product->slug) }}"
                                                                        title="{{ $product->name }}">{{ $product->name }}</a>
                                            </h3>
                                            @if($product->price > 0)
                                                <div class="price-box">
                                                    {{ formatCurrency($product->price) }}₫
                                                </div>
                                            @else
                                                <div class="price-box">
                                                    Liên hệ
                                                </div>
                                            @endif


                                        </div>
                                    </form>
                                </div>

                            @endforeach

                        </div>
                    </div>

                    <a class="style-button" href="{{ route('front.getProductList') }}" title="Xem tất cả">
                        Xem tất cả sản phẩm
                        <span>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-chevron-double-right" viewBox="0 0 16 16">
					<path fill-rule="evenodd"
                          d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
					<path fill-rule="evenodd"
                          d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
				</svg>
			</span>
                    </a>
                </div>
            </section>

        @endforeach
        <script>
            var swiperduan = new Swiper('.product-slider', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,
                autoplay: false,
                breakpoints: {
                    300: {
                        slidesPerView: 2,
                    },
                    500: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,

                    },
                    991: {
                        slidesPerView: 4,

                    },
                    1200: {
                        slidesPerView: 5,

                    }
                }

            });
        </script>


        <style>
            /* bỏ nền full-width trên section nếu đang set ở nơi khác */
            .section_danhgia{ background:none !important; }

            /* nền chỉ trong container */
            .section_danhgia .feedback-box{
                background: url('//bizweb.dktcdn.net/100/504/442/themes/940088/assets/background_danhgia.jpg?1719476197344')
                center/cover no-repeat;
                border-radius: 14px;
                padding: 24px;
            }
            @media (min-width:992px){
                .section_danhgia .feedback-box{ padding: 40px; }
            }

            /* nếu muốn bo góc cả slider bên trong */
            .section_danhgia .danhgia-slider{ overflow:hidden; border-radius: 10px; }

        </style>
        <section class="section_danhgia">
            <div class="container">
                <div class="feedback-box">
                    <span class="title-smail"></span>
                    <h3 class="title">Đánh giá từ khách hàng</h3>

                    <div class="danhgia-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($feedbacks as $feedback)
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="avatar">
                                            <img width="200" height="200" alt="{{ $feedback->name }}" class="lazyload"
                                                 src="{{ $feedback->image->path ?? '' }}"
                                                 data-src="{{ $feedback->image->path ?? '' }}">
                                        </div>
                                        <div class="content">{{ $feedback->message }}</div>
                                        <div class="name">{{ $feedback->name }}</div>
                                        <div class="job">{{ $feedback->position }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            var swiper = new Swiper('.danhgia-slider', {
                autoplay: false,
                spaceBetween: 30,
                slidesPerView: 1,
                pagination: {
                    el: '.danhgia-slider .swiper-pagination',
                    clickable: true,
                },

            });
        </script>



        <style>
            /* ----- Partners slider (blue tone, gọn gàng) ----- */
            .partners .title { margin-bottom: 16px; }
            .partners-swiper { padding: 10px 0 36px; }

            .partner-card {
                display: block;
                background: #fff;
                border: 1px solid rgba(0,0,0,.06);
                border-radius: 14px;
                box-shadow: 0 2px 10px rgba(0,0,0,.04);
                transition: transform .25s ease, box-shadow .25s ease;
            }

            .partner-card:hover { transform: translateY(-3px); box-shadow: 0 8px 22px rgba(0,0,0,.08); }

            .logo-frame {
                /* Tỷ lệ khung đồng nhất cho logo */
                aspect-ratio: 1 / 1;          /* đổi sang 16/9 nếu logo đa phần ngang */
                width: 100%;
                display: grid;
                place-items: center;
                padding: 12px;
                overflow: hidden;
                border-radius: 14px;
            }

            .logo-frame img {
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
                filter: grayscale(100%);
                opacity: .85;
                transition: filter .25s ease, opacity .25s ease, transform .25s ease;
            }

            .partner-card:hover .logo-frame img {
                filter: grayscale(0%);
                opacity: 1;
                transform: scale(1.02);
            }

            /* Swiper arrows & pagination */
            #partnersSwiper .swiper-button-prev,
            #partnersSwiper .swiper-button-next {
                width: 36px; height: 36px;
                background: #FF1212; /* xanh dương */
                border-radius: 50%;
                box-shadow: 0 2px 10px #FF1212;
            }
            #partnersSwiper .swiper-button-prev::after,
            #partnersSwiper .swiper-button-next::after {
                color: #fff; font-size: 14px; font-weight: 700;
            }
            #partnersSwiper .swiper-pagination-bullet { opacity: .5; }
            #partnersSwiper .swiper-pagination-bullet-active { background: #FF1212; opacity: 1; }

            /* Ẩn mũi tên trên màn nhỏ nếu muốn */
            @media (max-width: 575.98px) {
                #partnersSwiper .swiper-button-prev,
                #partnersSwiper .swiper-button-next { display: none; }
            }

        </style>


        <section class="section_product partners">
            <div class="container">
                <h3 class="title">
                    <a class="title-name" href="#" title="Đối tác chiến lược">Đối tác chiến lược</a>
                </h3>






                <!-- Swiper -->
                <div class="swiper partners-swiper swiper-container" id="partnersSwiper">
                    <div class="swiper-wrapper">
                        {{-- DYNAMIC (Blade) --}}
                        @isset($partners)
                            @foreach($partners as $p)
                                <div class="swiper-slide">
                                    <a class="partner-card" href="{{ $p->url ?? '#' }}" target="_blank" rel="noopener"
                                       aria-label="Đối tác: {{ $p->name ?? 'Partner' }}">
                                        <div class="logo-frame">
                                            <img
                                                src="{{ $p->image->path ?? '' }}"
                                                alt="{{ $p->name ?? 'Partner logo' }}" loading="lazy">
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                        @endisset
                    </div>

                    <!-- Pagination + Arrows -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
        <script>
            // Khởi tạo Swiper (đã cài thư viện Swiper)
            const partnersSwiper = new Swiper('#partnersSwiper', {
                loop: true,
                speed: 600,
                spaceBetween: 16,
                slidesPerView: 2,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    576:  { slidesPerView: 3, spaceBetween: 20 },
                    768:  { slidesPerView: 4, spaceBetween: 24 },
                    992:  { slidesPerView: 5, spaceBetween: 28 },
                    1200: { slidesPerView: 6, spaceBetween: 32 }
                },
                pagination: {
                    el: '#partnersSwiper .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true
                },
                navigation: {
                    nextEl: '#partnersSwiper .swiper-button-next',
                    prevEl: '#partnersSwiper .swiper-button-prev'
                },
                watchSlidesProgress: true
            });

        </script>




        <section class="section_blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">


                        <h3 class="title">
                            <a class="title-name" href="#" title="Kinh nghiệm xây dựng">Tin tức & Hoạt động
                            </a>
                        </h3>
                        <span class="title-smail">
					Những kinh nghiệm được chúng tôi chia sẻ thường xuyên, mang lại cho bạn nhiều thông tin bổ ích.
				</span>
                        <a class="style-button" href="{{ route('front.blogs') }}" title="Xem tất cả">
                            Xem tất cả
                            <span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-double-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
                                  d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
							<path fill-rule="evenodd"
                                  d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</span>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="blog-slider swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($blogs as $blog)
                                    <div class="swiper-slide">
                                        <div class="item-blog">
                                            <div class="block-thumb">
                                                @php
                                                    $dt = \Carbon\Carbon::parse($blog->created_at);
                                                    $thuMap = [1=>'T2', 2=>'T3', 3=>'T4', 4=>'T5', 5=>'T6', 6=>'T7', 7=>'CN'];
                                                    $thu = $thuMap[$dt->dayOfWeekIso]; // 1=Mon…7=Sun
                                                @endphp


                                                <a class="thumb" href="{{ route('front.blogDetail', $blog->slug) }}"
                                                   title="Tìm hiểu về bố trí thép sàn bản kê 4 cạnh">
                                                    <img width="400" height="300" class="lazyload"
                                                         src="{{ $blog->image->path ?? '' }}"
                                                         data-src="{{ $blog->image->path ?? '' }}"
                                                         alt="{{ $blog->name }}">
                                                </a>


                                                <div class="time-post">
                                                    {{ $thu }}
                                                    <span>{{ $dt->format('m/Y') }}</span>
                                                </div>
                                            </div>
                                            <div class="block-content">

                                                <h3>
                                                    <a class="line-clamp line-clamp-2"
                                                       href="{{ route('front.blogDetail', $blog->slug) }}"
                                                       title="Tìm hiểu về bố trí thép sàn bản kê 4 cạnh">{{ $blog->name }}</a>
                                                </h3>

                                                <p class="justify line-clamp line-clamp-3">{{ $blog->intro }}
                                                </p>

                                            </div>

                                        </div>
                                    </div>

                                @endforeach
                        </div>


                    </div>
                </div>


            </div>
        </section>
        <script>
            var swiperduan = new Swiper('.blog-slider', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,

                autoplay: false,
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                    },
                    500: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,

                    },
                    991: {
                        slidesPerView: 2,

                    },
                    1200: {
                        slidesPerView: 2,

                    }
                }

            });
        </script>


    </div>
@endsection

@push('scripts')

@endpush
