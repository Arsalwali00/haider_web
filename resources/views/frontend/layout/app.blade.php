<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>Haider</title>
    <meta name="robots" content="max-image-preview:large">
    <style>
        img:is([sizes="auto" i],
        [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>

    <link rel="stylesheet" href="{{ asset('frontend/style1.css') }}">
    <link rel="dns-prefetch" href="//code.jivosite.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/naudummy.com\/muezzin\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"
            }
        };
        /*! This file is auto-generated */
        ! function(s, n) {
            var o, i, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === a[t]
                })
            }

            function u(e, t) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)
                    if (0 !== n.data[a]) return !1;
                return !0
            }

            function f(e, t, n, a) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !a(e, "\ud83e\udedf")
                }
                return !1
            }

            function g(e, t, n, a) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : s.createElement("canvas"),
                    o = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    i = (o.textBaseline = "top", o.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    i[e] = t(o, e, n, a)
                }), i
            }

            function t(e) {
                var t = s.createElement("script");
                t.src = e, t.defer = !0, s.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                s.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p
                                .toString(), u.toString()
                            ].join(",") + "));",
                            a = new Blob([e], {
                                type: "text/javascript"
                            }),
                            r = new Worker(URL.createObjectURL(a), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(r.onmessage = function(e) {
                            c(n = e.data), r.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = g(i, f, p, u))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel="stylesheet" id="animate-css" href="{{ asset('frontend/css/animate.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-css" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="charitable-elementor-editor-css" href="{{ asset('frontend/css/charitable-elementor-editor.css') }}"
        type="text/css" media="all">

    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('frontend/css/styles.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="events-manager-css" href="{{ asset('frontend/css/events-manager.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" id="charitable-styles-css" href="{{ asset('frontend/css/charitable.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="{{ asset('frontend/css/dashicons.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="webfonts-css" href="{{ asset('frontend/css/webfonts.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="taqwa-wp-developers-css" href="{{ asset('frontend/css/wp-developer.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="fancybox-css" href="{{ asset('frontend/css/fancybox.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="taqwa-ttstyles-css" href="{{ asset('frontend/css/ttstyles.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="taqwa-default-css" href="{{ asset('frontend/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="taqwa-responsive-css" href="{{ asset('frontend/css/responsive.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="plus_bootstrap5-css" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="plus_style-css" href="{{ asset('frontend/css/plus_style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="plus_responsive-css" href="{{ asset('frontend/css/plus_responsive.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="plus_swiper-bundle-css" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('frontend/css/elementor-icons.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('frontend/css/frontend.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-5-css" href="{{ asset('frontend/css/post-5.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2330-css" href="{{ asset('frontend/css/post-2330.css') }}" type="text/css" media="all">
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Cinzel%20Decorative:400,700,900%7CEpilogue:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&subset=latin&display=swap&ver=1735727163">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Cinzel%20Decorative:400,700,900%7CEpilogue:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&subset=latin&display=swap&ver=1735727163"
        media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Cinzel%20Decorative:400,700,900%7CEpilogue:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&subset=latin&display=swap&ver=1735727163" />
    </noscript>
    <link rel="stylesheet" id="elementor-gf-local-roboto-css" href="{{ asset('frontend/css/roboto.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-gf-local-robotoslab-css" href="{{ asset('frontend/css/robotoslab.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-gf-local-epilogue-css" href="{{ asset('frontend/css/epilogue.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-gf-local-cinzeldecorative-css" href="{{ asset('frontend/css/cinzeldecorative.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('frontend/css/fontawesome.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('frontend/css/brands.min.css') }}" type="text/css"
        media="all">
    <script type="text/javascript" src="frontend/js/js-cookie.min.js" id="js-cookie-js"></script>
    <script type="text/javascript" id="charitable-sessions-js-extra">
        /* <![CDATA[ */
        var CHARITABLE_SESSION = {
            "ajaxurl": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php",
            "id": "",
            "cookie_name": "charitable_session",
            "expiration": "86400",
            "expiration_variant": "82800",
            "secure": "",
            "cookie_path": "\/muezzin\/",
            "cookie_domain": "",
            "generated_id": "84decfa3c5346f72dff7832a4cb18c06",
            "disable_cookie": ""
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('frontend/js/charitable-session.min.js') }}" id="charitable-sessions-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/core.min.js') }}" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/mouse.min.js') }}" id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/sortable.min.js') }}" id="jquery-ui-sortable-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/datepicker.min.js') }}" id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        /* <![CDATA[ */
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('frontend/js/resizable.min.js') }}" id="jquery-ui-resizable-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/draggable.min.js') }}" id="jquery-ui-draggable-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/controlgroup.min.js') }}" id="jquery-ui-controlgroup-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/checkboxradio.min.js') }}" id="jquery-ui-checkboxradio-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/button.min.js') }}" id="jquery-ui-button-js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/dialog.min.js') }}" id="jquery-ui-dialog-js"></script>
    <script type="text/javascript" id="events-manager-js-extra">
        /* <![CDATA[ */
        var EM = {
            "ajaxurl": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php",
            "locationajaxurl": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php?action=locations_search",
            "firstDay": "1",
            "locale": "en",
            "dateFormat": "yy-mm-dd",
            "ui_css": "https:\/\/naudummy.com\/muezzin\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui\/build.min.css",
            "show24hours": "0",
            "is_ssl": "1",
            "autocomplete_limit": "10",
            "calendar": {
                "breakpoints": {
                    "small": 560,
                    "medium": 908,
                    "large": false
                }
            },
            "phone": "",
            "datepicker": {
                "format": "d\/m\/Y"
            },
            "search": {
                "breakpoints": {
                    "small": 650,
                    "medium": 850,
                    "full": false
                }
            },
            "url": "https:\/\/naudummy.com\/muezzin\/wp-content\/plugins\/events-manager",
            "assets": {
                "input.em-uploader": {
                    "js": {
                        "em-uploader": {
                            "url": "https:\/\/naudummy.com\/muezzin\/wp-content\/plugins\/events-manager\/includes\/js\/em-uploader.js?v=7.0.5",
                            "event": "em_uploader_ready"
                        }
                    }
                },
                ".em-recurrence-sets, .em-timezone": {
                    "js": {
                        "luxon": {
                            "url": "luxon\/luxon.js?v=7.0.5",
                            "event": "em_luxon_ready"
                        }
                    }
                },
                ".em-booking-form, #em-booking-form, .em-booking-recurring, .em-event-booking-form": {
                    "js": {
                        "em-bookings": {
                            "url": "https:\/\/naudummy.com\/muezzin\/wp-content\/plugins\/events-manager\/includes\/js\/bookingsform.js?v=7.0.5",
                            "event": "em_booking_form_js_loaded"
                        }
                    }
                }
            },
            "cached": "1",
            "bookingInProgress": "Please wait while the booking is being submitted.",
            "tickets_save": "Save Ticket",
            "bookingajaxurl": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php",
            "bookings_export_save": "Export Bookings",
            "bookings_settings_save": "Save Settings",
            "booking_delete": "Are you sure you want to delete?",
            "booking_offset": "30",
            "bookings": {
                "submit_button": {
                    "text": {
                        "default": "Send your booking",
                        "free": "Send your booking",
                        "payment": "Send your booking",
                        "processing": "Processing ..."
                    }
                },
                "update_listener": ""
            },
            "bb_full": "Sold Out",
            "bb_book": "Book Now",
            "bb_booking": "Booking...",
            "bb_booked": "Booking Submitted",
            "bb_error": "Booking Error. Try again?",
            "bb_cancel": "Cancel",
            "bb_canceling": "Canceling...",
            "bb_cancelled": "Cancelled",
            "bb_cancel_error": "Cancellation Error. Try again?",
            "txt_search": "Search",
            "txt_searching": "Searching...",
            "txt_loading": "Loading...",
            "event_detach_warning": "Are you sure you want to detach this event? By doing so, this event will be independent of the recurring set of events.",
            "delete_recurrence_warning": "Are you sure you want to delete all recurrences of this event? All events will be moved to trash.",
            "disable_bookings_warning": "Are you sure you want to disable bookings? If you do this and save, you will lose all previous bookings. If you wish to prevent further bookings, reduce the number of spaces available to the amount of bookings you currently have",
            "booking_warning_cancel": "Are you sure you want to cancel your booking?"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('frontend/js/events-manager.js') }}" id="events-manager-js"></script>
    <link rel="https://api.w.org/" href="https://naudummy.com/muezzin/wp-json/">
    <link rel="alternate" title="JSON" type="application/json"
        href="https://naudummy.com/muezzin/wp-json/wp/v2/pages/2330">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://naudummy.com/muezzin/xmlrpc.php?rsd">

    <link rel="canonical" href="https://naudummy.com/muezzin/">
    <link rel="shortlink" href="https://naudummy.com/muezzin/">
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://naudummy.com/muezzin/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnaudummy.com%2Fmuezzin%2F">
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://naudummy.com/muezzin/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnaudummy.com%2Fmuezzin%2F&format=xml">
    <meta name="generator" content="Redux 4.5.7">

    <meta name="generator"
        content="Elementor 3.30.3; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">

    <link rel="icon" href="images/cropped-favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="images/cropped-favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="images/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage"
        content="https://naudummy.com/muezzin/wp-content/uploads/2023/12/cropped-favicon-270x270.png">

    <script src="{{ asset('frontend/js/wp-emoji-release.min.js') }}" defer=""></script>
</head>


<body
	class="home wp-singular page-template page-template-elementor_header_footer page page-id-2330 wp-theme-taqwa elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-2330"
	itemscope="">

    @yield('main')


	<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/muezzin\/*"},{"not":{"href_matches":["\/muezzin\/wp-*.php","\/muezzin\/wp-admin\/*","\/muezzin\/wp-content\/uploads\/*","\/muezzin\/wp-content\/*","\/muezzin\/wp-content\/plugins\/*","\/muezzin\/wp-content\/themes\/taqwa\/*","\/muezzin\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
	<script type="text/javascript">
		(function () {
			let targetObjectName = 'EM';
			if (typeof window[targetObjectName] === 'object' && window[targetObjectName] !== null) {
				Object.assign(window[targetObjectName], []);
			} else {
				console.warn('Could not merge extra data: window.' + targetObjectName + ' not found or not an object.');
			}
		})();
	</script>
	<div class="gtranslate_wrapper" id="gt-wrapper-30975220"></div>
	<script>
		const lazyloadRunObserver = () => {
			const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
			const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let lazyloadBackground = entry.target;
						if (lazyloadBackground) {
							lazyloadBackground.classList.add('e-lazyloaded');
						}
						lazyloadBackgroundObserver.unobserve(entry.target);
					}
				});
			}, { rootMargin: '200px 0px 200px 0px' });
			lazyloadBackgrounds.forEach((lazyloadBackground) => {
				lazyloadBackgroundObserver.observe(lazyloadBackground);
			});
		};
		const events = [
			'DOMContentLoaded',
			'elementor/lazyload/observe',
		];
		events.forEach((event) => {
			document.addEventListener(event, lazyloadRunObserver);
		});
	</script>
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}" id="plus_bootstrap5-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/swiper-bundle.min.js') }}" id="plus_swiper-bundle-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/plus_scripts.js') }}" id="plus_scripts-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}" id="owl-carousel-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/custom-slider.js') }}" id="slider-script-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/musicplayer-min.js') }}" id="musicplayer-min-js"></script>
	<script type="text/javascript" id="charitable-elementor-preview-js-extra">
		/* <![CDATA[ */
		var charitableElementor = { "ajaxurl": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php", "nonce": "6141eea897", "debug": "1" };
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{ asset('frontend/js/charitable-elementor-preview.js') }}"
		id="charitable-elementor-preview-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/hooks.min.js') }}" id="wp-hooks-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/i18n.min.js') }}" id="wp-i18n-js"></script>
	<script type="text/javascript" id="wp-i18n-js-after">
		/* <![CDATA[ */
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{ asset('frontend/js/index_1.js') }}" id="swv-js"></script>
	<script type="text/javascript" id="contact-form-7-js-before">
		/* <![CDATA[ */
		var wpcf7 = {
			"api": {
				"root": "https:\/\/naudummy.com\/muezzin\/wp-json\/",
				"namespace": "contact-form-7\/v1"
			},
			"cached": 1
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{ asset('frontend/js/index.js') }}" id="contact-form-7-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/charitable-frontend.min.js') }}" id="charitable-frontend-v2-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/comment-reply.min.js') }}" id="comment-reply-js" async="async"
		data-wp-strategy="async"></script>
	<script type="text/javascript" id="bootstrap-js-extra">
		/* <![CDATA[ */
		var ajax_var = { "url": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php", "nonce": "f68ca881ab" };
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min_1.js') }}" id="bootstrap-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/fancybox.min.js') }}" id="fancybox-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/perfect-scrollbar.min.js') }}" id="perfect-scrollbar-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/custom-scripts.js') }}" id="taqwa-custom-scripts-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/webpack.runtime.min.js') }}" id="elementor-webpack-runtime-js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/frontend-modules.min.js') }}" id="elementor-frontend-modules-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-before">
		/* <![CDATA[ */
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "3.30.3", "is_static": false, "experimentalFeatures": { "additional_custom_breakpoints": true, "home_screen": true, "global_classes_should_enforce_capabilities": true, "cloud-library": true, "e_opt_in_v4_page": true }, "urls": { "assets": "https:\/\/naudummy.com\/muezzin\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/naudummy.com\/muezzin\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/naudummy.com\/muezzin\/wp-content\/uploads" }, "nonces": { "floatingButtonsClickTracking": "f146d46e93" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 2330, "title": "Muezzin%20%E2%80%93%20Islamic%20Center%20WordPress%20Theme", "excerpt": "", "featuredImage": false } };
		/* ]]> */
	</script>
	<script type="text/javascript" src="js/frontend.min.js" id="elementor-frontend-js"></script>
	<script type="text/javascript" src="//code.jivosite.com/widget/sMDBcnf9C1?ver=1.3.6.1"
		id="jivosite_widget_code-js"></script>
	<script type="text/javascript" id="gt_widget_script_30975220-js-before">
		/* <![CDATA[ */
		window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {}; window.gtranslateSettings['30975220'] = { "default_language": "en", "languages": ["ar", "nl", "en", "fr", "de", "hi", "it", "fa", "es", "tr", "ur"], "url_structure": "none", "flag_style": "2d", "wrapper_selector": "#gt-wrapper-30975220", "alt_flags": [], "float_switcher_open_direction": "top", "switcher_horizontal_position": "right", "switcher_vertical_position": "bottom", "flags_location": "\/muezzin\/wp-content\/plugins\/gtranslate\/flags\/" };
		/* ]]> */
	</script>
	<script src="js/float.js" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="/muezzin/"
		data-gt-orig-domain="naudummy.com" data-gt-widget-id="30975220" defer=""></script>




</body>

</html><!-- Page cached by LiteSpeed Cache 7.2 on 2025-08-23 07:51:58 -->
