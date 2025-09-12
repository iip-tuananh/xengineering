<head>
    <meta charset="UTF-8"/>
    <meta name="theme-color" content="#140626"/>
    <meta name='revisit-after' content='2 days'/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noodp,index,follow"/>
    <meta name="description" content="">
    <meta name="keywords" content="Cập nhật sau"/>
    <title>@yield('title')</title>


    <link rel="shortcut icon" href="{{@$config->favicon->path ?? ''}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{@$config->favicon->path ?? ''}}">
    <meta name="application-name" content="{{ $config->web_title }}" />
    <meta name="generator" content="@yield('title')" />

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="{{ $config->web_title }}">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ url()->current() }}" />



    <link rel="preload" as="script"
          href="/site/assets/jquery75d3.js?1719476197344"/>
    <script src="/site/assets/jquery75d3.js?1719476197344"
            type="text/javascript"></script>
    <link rel="preload" as="script"
          href="/site/assets/swiper75d3.js?1719476197344"/>
    <script src="/site/assets/swiper75d3.js?1719476197344"
            type="text/javascript"></script>
    <link rel="preload" as="script"
          href="/site/assets/lazy75d3.js?1719476197344"/>
    <script src="/site/assets/lazy75d3.js?1719476197344"
            type="text/javascript"></script>
    <script>
        //cookie
        !function (e) {
            var n;
            if ("function" == typeof define && define.amd && (define(e), n = !0), "object" == typeof exports && (module.exports = e(), n = !0), !n) {
                var t = window.Cookies, o = window.Cookies = e();
                o.noConflict = function () {
                    return window.Cookies = t, o
                }
            }
        }(function () {
            function e() {
                for (var e = 0, n = {}; e < arguments.length; e++) {
                    var t = arguments[e];
                    for (var o in t) n[o] = t[o]
                }
                return n
            }

            function n(e) {
                return e.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent)
            }

            return function t(o) {
                function r() {
                }

                function i(n, t, i) {
                    if ("undefined" != typeof document) {
                        "number" == typeof (i = e({path: "/"}, r.defaults, i)).expires && (i.expires = new Date(1 * new Date + 864e5 * i.expires)), i.expires = i.expires ? i.expires.toUTCString() : "";
                        try {
                            var c = JSON.stringify(t);
                            /^[\{\[]/.test(c) && (t = c)
                        } catch (e) {
                        }
                        t = o.write ? o.write(t, n) : encodeURIComponent(String(t)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), n = encodeURIComponent(String(n)).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent).replace(/[\(\)]/g, escape);
                        var f = "";
                        for (var u in i) i[u] && (f += "; " + u, !0 !== i[u] && (f += "=" + i[u].split(";")[0]));
                        return document.cookie = n + "=" + t + f
                    }
                }

                function c(e, t) {
                    if ("undefined" != typeof document) {
                        for (var r = {}, i = document.cookie ? document.cookie.split("; ") : [], c = 0; c < i.length; c++) {
                            var f = i[c].split("="), u = f.slice(1).join("=");
                            t || '"' !== u.charAt(0) || (u = u.slice(1, -1));
                            try {
                                var a = n(f[0]);
                                if (u = (o.read || o)(u, a) || n(u), t) try {
                                    u = JSON.parse(u)
                                } catch (e) {
                                }
                                if (r[a] = u, e === a) break
                            } catch (e) {
                            }
                        }
                        return e ? r[e] : r
                    }
                }

                return r.set = i, r.get = function (e) {
                    return c(e, !1)
                }, r.getJSON = function (e) {
                    return c(e, !0)
                }, r.remove = function (n, t) {
                    i(n, "", e(t, {expires: -1}))
                }, r.defaults = {}, r.withConverter = t, r
            }(function () {
            })
        });

    </script>
    <link rel="preload" as='style' type="text/css"
          href="/site/assets/main.scss75d3.css?3456">

    <link rel="preload" as='style' type="text/css"
          href="/site/assets/bootstrap-4-3-min75d3.css?1719476197344">
    <link rel="preload" as='style' type="text/css"
          href="/site/assets/swiper.scss75d3.css?1719476197344">
    <link rel="stylesheet"
          href="/site/assets/bootstrap-4-3-min75d3.css?1719476197344">
    <link href="/site/assets/main.scss75d3.css?3456" rel="stylesheet"
          type="text/css" media="all"/>



    <link href="/site/assets/swiper.scss75d3.css?1719476197344"
          rel="stylesheet" type="text/css" media="all"/>






{{--    <script>--}}
{{--        window.BizwebAnalytics = window.BizwebAnalytics || {};--}}
{{--        window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};--}}
{{--        window.BizwebAnalytics.meta.currency = 'VND';--}}
{{--        window.BizwebAnalytics.tracking_url = 's.html';--}}

{{--        var meta = {};--}}


{{--        for (var attr in meta) {--}}
{{--            window.BizwebAnalytics.meta[attr] = meta[attr];--}}
{{--        }--}}
{{--    </script>--}}

    <style>
        /* Ẩn mọi phần tử có ng-cloak cho đến khi Angular khởi tạo */
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none !important;
        }
    </style>

    <script src="/site/js/stats.minbadf.js?v=96f2ff2"></script>


</head>
