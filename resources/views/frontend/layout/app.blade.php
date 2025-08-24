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
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="create-block-campaignblock-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-create-block-campaignblock {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-create-block-campaignblock .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-campaigns-block-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-campaigns-block {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-campaigns-block h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-campaigns-block p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-campaigns-block .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-donations-block-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-donations-block {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-donations-block h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-donations-block p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-donations-block .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-donors-block-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-donors-block {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-donors-block h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-donors-block p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-donors-block .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-donation-button-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-donation-button {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-donation-button h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-donation-button p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-donation-button .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-campaign-progress-bar-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-campaign-progress-bar {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-campaign-progress-bar h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-campaign-progress-bar p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-campaign-progress-bar .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-campaign-stats-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-campaign-stats {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-campaign-stats h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-campaign-stats p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-campaign-stats .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="charitable-my-donations-style-inline-css" type="text/css">
        /*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/style.scss ***!
  \***************************************************************************************************************************************************************************************************************************************/
        /**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
        .wp-block-charitable-my-donations {
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .wp-block-charitable-my-donations h5 {
            margin: 0 auto;
            margin-top: 0 !important;
            margin-bottom: 0px !important;
        }

        .wp-block-charitable-my-donations p {
            font-size: 11px;
            line-height: 16px;
            text-align: center;
            font-weight: 400;
            font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .wp-block-charitable-my-donations .charitable-logo {
            margin-left: auto;
            margin-right: auto;
            display: table;
        }

        /*# sourceMappingURL=style-index.css.map*/
    </style>
    <style id="global-styles-inline-css" type="text/css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('frontend/css/styles.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="events-manager-css" href="{{ asset('frontend/css/events-manager.min.css') }}" type="text/css" media="all">
    <style id="events-manager-inline-css" type="text/css">
        body .em {
            --font-family: inherit;
            --font-weight: inherit;
            --font-size: 1em;
            --line-height: inherit;
        }
    </style>
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
    <style id="stylesheet">
        body {
            background: #FFFFFF;
        }

        .news_ticker_sec span {
            background: #5D2B00
        }

        #triangle-right {
            border-left: 25px solid #5D2B00
        }

        #add_payment_method .wc-proceed-to-checkout a.checkout-button,
        .breadcrumb::before,
        .calendar_wrap>table caption,
        .calendar_wrap>table tbody td#today,
        .date-box,
        .dnt-lst>a:focus,
        .dnt-lst>a:hover,
        .em-booking-buttons input[type=submit],
        .em-booking-login-form>input[type=submit],
        .em-pagination .next:focus,
        .em-pagination .next:hover,
        .em-pagination .prev:focus,
        .em-pagination .prev:hover,
        .em-pagination a:focus,
        .em-pagination a:hover,
        .em-pagination span,
        .event-detail-desc ul>li:before,
        .event-detail-img .countdown:before,
        .event-detail-img>span:before,
        .event-thmb .countdown:before,
        .event-thmb>span:before,
        .featured-area-wrap .owl-carousel button.owl-dot.active,
        .lgn-rgstr-frm input[type=submit],
        .member-expr-lst>li:before,
        .owl-carousel .owl-nav>button.owl-next,
        .owl-carousel .owl-nav>button.owl-prev,
        .page+span.edit-link>a:focus,
        .page+span.edit-link>a:hover,
        .page-links>a:focus,
        .page-links>a:hover,
        .page-links>span,
        .page>span.edit-link>a:focus,
        .page>span.edit-link>a:hover,
        .pagination>li a:focus,
        .pagination>li.active span,
        .pagination>li:hover a,
        .plr-bx>i:after,
        .plyr.v4 .player .volume .volume-btn,
        .post-password-form input[type=submit],
        .pr-tm-lst .pr-tm-bx.spc-pr-tm,
        .preloader,
        .rspn-mnu-btn:hover,
        .rspn-mnu-cls:hover,
        .rspn-scil>li a:hover,
        .serv-bx2:hover .serv-inf2,
        .serv-bx:hover .srv-inf.green-bg,
        .social-share2>a:focus,
        .social-share2>a:hover,
        .srch-cls-btn:hover,
        .tag-sticky-2 .post-bx .post-inf:before,
        .tagcloud>a,
        .team-bx:hover .team-inf,
        .team-inf>span:before,
        .theme-bg,
        .theme-bg-layer:before,
        .theme-btn.green-bg:after,
        .theme-btn.green-bg:before,
        .widget table caption,
        .widget.style2>h5::before,
        .woocommerce #respond input#submit,
        .woocommerce #respond input#submit.alt,
        .woocommerce .cart .button,
        .woocommerce .cart input.button,
        .woocommerce .woocommerce-error .button,
        .woocommerce .woocommerce-info .button,
        .woocommerce .woocommerce-message .button,
        .woocommerce a.button,
        .woocommerce a.button.alt,
        .woocommerce a.remove,
        .woocommerce button.button,
        .woocommerce button.button.alt,
        .woocommerce div.product form.cart .button,
        .woocommerce input.button,
        .woocommerce input.button.alt,
        .woocommerce nav.woocommerce-pagination ul li a:focus,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce span.onsale,
        .woocommerce ul.products li.product a,
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
        .woocommerce-cart table.cart th,
        .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
        .woocommerce-page .woocommerce-error .button,
        .woocommerce-page .woocommerce-info .button,
        .woocommerce-page .woocommerce-message .button,
        .wp-block-button .wp-block-button__link:focus,
        .wp-block-button .wp-block-button__link:hover,
        .wp-block-tag-cloud>a,
        a.page-item.brd-rd5.active,
        body.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        form.wp-block-search button,
        nav>div>ul li>a:after,
        nav>div>ul li>a:before,
        table#wp-calendar caption,
        table#wp-calendar tbody td#today,
        .tq-support-cause-stats .progress-bar {
            background-color: #DB9E30 !important;
        }

        .pr-tm-wrp:before {
            background-image: linear-gradient(120deg, #DB9E30, #004B39) !important;
        }

        .tag-clouds>span,
        .pst-shr-tgs .scl1>span,
        #cancel-comment-reply-link,
        .abt-vdo>a:focus,
        .abt-vdo>a:hover,
        .blog-detail-desc>h2+ol li a,
        .blog-detail-desc>h2+ul li a,
        .breadcrumb>li a:focus,
        .breadcrumb>li a:hover,
        .cause-inf>h5 a:focus,
        .cause-inf>h5 a:hover,
        .cnt-inf-lst>li a:focus,
        .cnt-inf-lst>li a:hover,
        .cnt-inf>li a:focus,
        .cnt-inf>li a:hover,
        .cont-frm a:focus,
        .cont-frm a:hover,
        .cpy-rgt>p a:focus,
        .cpy-rgt>p a:hover,
        .em-pagination a:focus,
        .em-pagination a:hover,
        .em-pagination span,
        .event-bx:hover>a:focus,
        .event-bx:hover>a:hover,
        .event-bx>a:focus,
        .event-bx>a:hover,
        .event-bx>h5 a:focus,
        .event-bx>h5 a:hover,
        .event-inf>a:focus,
        .event-inf>a:hover,
        .event-inf>h5 a:focus,
        .event-inf>h5 a:hover,
        .header-search form>button:focus,
        .header-search form>button:hover,
        .inf-lst>li a:focus,
        .inf-lst>li a:hover,
        .ins,
        .light_mode .pr-tm-bx>span,
        .lst-cas>h6 a:focus,
        .lst-cas>h6 a:hover,
        .ltst-prd-inf>h6 a:focus,
        .ltst-prd-inf>h6 a:hover,
        .pagination .page-link.active,
        .post-inf>a:focus,
        .post-inf>a:hover,
        .post-inf>h5 a:focus,
        .post-inf>h5 a:hover,
        .post-info>a,
        .prayer-timings>table tr:hover td,
        .product-detail-tabs>ul li a.nav-link.active,
        .product-detail-tabs>ul li a.nav-link:focus,
        .product-detail-tabs>ul li a.nav-link:hover,
        .product-inf>h5 a:focus,
        .product-inf>h5 a:hover,
        .pst-mta>li a:focus,
        .pst-mta>li a:hover,
        .rcnt-inf>h6 a:focus,
        .rcnt-inf>h6 a:hover,
        .rsnp-mnu ul li.menu-item-has-children.active:before,
        .rsnp-mnu ul>li.active>a,
        .rsnp-mnu ul>li:hover>a,
        .rsnp-mnu ul>li>a:focus,
        .rspn-cnt>span a:focus,
        .rspn-cnt>span a:hover,
        .rspn-srch>button:hover,
        .scl1>a:focus,
        .scl1>a:hover,
        .serv-bx:hover>i.green-clr,
        .service-detail-nav>ul li.active>a,
        .service-detail-nav>ul li:hover>a,
        .service-detail-nav>ul li>a:focus,
        .srch-btn:focus,
        .srch-btn:hover,
        .style1 nav>div ul ul li a:hover,
        .tag-clouds>a:focus,
        .tag-clouds>a:hover,
        .tch-dwn-btn>a:focus,
        .tch-dwn-btn>a:hover,
        .tch-thmb>a:focus,
        .tch-thmb>a:hover,
        .theme-clr,
        .time-box>span:first-child,
        .tp-lnks>li a:focus,
        .tp-lnks>li a:hover,
        .widget .srch-frm button i,
        .widget table a,
        .widget ul li>a:focus,
        .widget ul li>a:hover,
        .widget>div>ul li span.rss-date,
        .widget>div>ul li:before,
        .widget>h5+div>ul li:before,
        .widget>h5+div>ul li:hover>a,
        .widget>h5+div>ul li>a:focus,
        .widget>ul li span.rss-date,
        .widget>ul li:before,
        .widget_recent_comments a:hover,
        .woocommerce .star-rating span,
        .woocommerce .star-rating+a,
        .woocommerce .star-rating::before,
        .woocommerce .woocommerce-tabs ul.tabs li.active .star-rating span,
        .woocommerce .woocommerce-tabs ul.tabs li.active .star-rating::before,
        .woocommerce .woocommerce-tabs ul.tabs li:hover .star-rating span,
        .woocommerce .woocommerce-tabs ul.tabs li:hover .star-rating::before,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a:focus,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active>a,
        .woocommerce div.product .woocommerce-tabs ul.tabs li>a:focus,
        .woocommerce div.product .woocommerce-tabs ul.tabs li>a:hover,
        .woocommerce div.product form.cart .group_table td label a:focus,
        .woocommerce div.product form.cart .group_table td label a:hover,
        .woocommerce div.product form.cart .group_table td.woocommerce-grouped-product-list-item__price>span,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce form .form-row .required,
        .woocommerce form .form-row label abbr,
        .woocommerce form .form-row.woocommerce-invalid label,
        .woocommerce table.shop_table td.product-name a:focus,
        .woocommerce table.shop_table td.product-name a:hover,
        .woocommerce table.shop_table td.product-price,
        .woocommerce table.shop_table td.product-subtotal,
        .woocommerce ul.product_list_widget li a+del+ins,
        .woocommerce ul.product_list_widget li a:focus img+span.product-title,
        .woocommerce ul.product_list_widget li:hover img+span.product-title,
        .woocommerce ul.products li.product .price,
        .woocommerce-MyAccount-content p a,
        .woocommerce-MyAccount-navigation>ul>li a:focus,
        .woocommerce-MyAccount-navigation>ul>li a:hover,
        .woocommerce-MyAccount-navigation>ul>li.is-active a,
        .woocommerce-account .addresses .title .edit,
        .woocommerce-info a,
        .woocommerce-info::before,
        .woocommerce-message a,
        .woocommerce-message::before,
        .wp-block-calendar table#wp-calendar tbody a,
        .wp-block-calendar table#wp-calendar tfoot a,
        a:hover,
        body .pst-shr-tgs .tag-clouds a:hover,
        dd a,
        div.category-sticky .post-bx .post-inf::before,
        div.post-bx.lst .post-inf>a:focus,
        div.post-bx.lst .post-inf>a:hover,
        div.sticky .post-bx .post-inf::before,
        div.tag-sticky-2 .post-bx .post-inf::before,
        dl a,
        form.cart+a.compare:focus,
        form.cart+a.compare:hover,
        h2+table td a,
        h2+table th a,
        header.style1 .scl1>a:focus,
        header.style1 .scl1>a:hover,
        header.style1 nav>div>a.srch-btn:focus,
        header.style1 nav>div>a.srch-btn:hover,
        nav>div>ul li a:focus,
        nav>div>ul li:hover,
        nav>div>ul li:hover>a,
        nav>div>ul>li.menu-item-has-children:hover:after,
        ol.breadcrumb>li.breadcrumb-item.active,
        p a,
        table th a:focus,
        table th a:hover,
        header.style2 .dropdown-menu,
        .tq-service-box2 i,
        footer span a:hover,
        .widget a:hover,
        .tq-header-menu nav ul ul li.menu-item-has-children>a:hover,
        .single .event-detail-desc>ul li:before,
        .single-campaign .cause-detail-wrp .scl1>a:hover {
            color: #DB9E30;
        }

        .abt-vdo.style2:before,
        .dnt-lst>a:focus,
        .dnt-lst>a:hover,
        .pagination>li.active,
        .pagination>li:hover,
        .product-detail-tabs>ul li a.nav-link.active,
        .product-detail-tabs>ul li a.nav-link:focus,
        .product-detail-tabs>ul li a.nav-link:hover,
        .serv-bx2:hover .serv-inf2,
        .theme-brd-clr,
        .wp-block-button .wp-block-button__link:focus,
        .wp-block-button .wp-block-button__link:hover,
        li.pr-tm-bx {
            border-color: #DB9E30;
        }

        .testi-desc {
            border-top-color: #DB9E30;
        }

        #add_payment_method .wc-proceed-to-checkout a.checkout-button:focus,
        #add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
        .blue-bg,
        .btn-primary:hover,
        .cont-frm .form-submit input:focus,
        .cont-frm .form-submit input:hover,
        .cont-frm input.wpcf7-submit:focus,
        .cont-frm input.wpcf7-submit:hover,
        .dnt-lst a.brd-rd30.active,
        .em-booking-buttons input[type=submit]:focus,
        .em-booking-buttons input[type=submit]:hover,
        .em-booking-login-form>input[type=submit]:focus,
        .em-booking-login-form>input[type=submit]:hover,
        .fea-prd-prc:before,
        .featured-area-wrap .owl-carousel button.owl-dot,
        .green-bg,
        .green-bg-layer:before,
        .lg-mnu-inr,
        .lg-mnu-sec,
        .lgn-rgstr-frm input[type=submit]:focus,
        .lgn-rgstr-frm input[type=submit]:hover,
        .namaz-drp .table thead>tr,
        .owl-carousel .owl-nav>button:focus,
        .owl-carousel .owl-nav>button:hover,
        .package-box.active:before,
        .post-password-form input[type=submit]:focus,
        .post-password-form input[type=submit]:hover,
        .rcnt-pst:before,
        .rspn-mnu-btn,
        .serv-bx:hover .srv-inf.theme-bg,
        .single-product .btn-primary:hover,
        .tagcloud>a:focus,
        .tagcloud>a:hover,
        .theme-bg .newsletter-form form p:last-of-type input,
        .theme-bg .newsletter-form>button,
        .theme-btn.theme-bg:after,
        .theme-btn.theme-bg:before,
        .widget.blue-bg2.style2,
        .woocommerce #respond input#submit.alt:focus,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce #respond input#submit:focus,
        .woocommerce #respond input#submit:hover,
        .woocommerce .cart .button:focus,
        .woocommerce .cart .button:hover,
        .woocommerce .cart input.button:focus,
        .woocommerce .cart input.button:hover,
        .woocommerce .woocommerce-error .button:focus,
        .woocommerce .woocommerce-error .button:hover,
        .woocommerce .woocommerce-info .button:focus,
        .woocommerce .woocommerce-info .button:hover,
        .woocommerce .woocommerce-message .button:focus,
        .woocommerce .woocommerce-message .button:hover,
        .woocommerce a.button.alt:focus,
        .woocommerce a.button.alt:hover,
        .woocommerce a.button:focus,
        .woocommerce a.button:hover,
        .woocommerce a.remove:focus,
        .woocommerce a.remove:hover,
        .woocommerce button.button.alt:focus,
        .woocommerce button.button.alt:hover,
        .woocommerce button.button:focus,
        .woocommerce button.button:hover,
        .woocommerce div.product form.cart .button:focus,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce input.button.alt:focus,
        .woocommerce input.button.alt:hover,
        .woocommerce input.button:focus,
        .woocommerce input.button:hover,
        .woocommerce ul.products li.product a:focus,
        .woocommerce ul.products li.product a:hover,
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus,
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
        .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:focus,
        .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
        .woocommerce-page .woocommerce-error .button:focus,
        .woocommerce-page .woocommerce-error .button:hover,
        .woocommerce-page .woocommerce-info .button:focus,
        .woocommerce-page .woocommerce-info .button:hover,
        .woocommerce-page .woocommerce-message .button:focus,
        .woocommerce-page .woocommerce-message .button:hover,
        .wp-block-tag-cloud>a:focus,
        .wp-block-tag-cloud>a:hover,
        footer .wpcf7 input[type=submit]:hover,
        form.wp-block-search button:focus,
        form.wp-block-search button:hover,
        header.style2>.topbar,
        input.mailpoet_submit,
        .namaz-drp button#dropdownMenuButton {
            background-color: #004B39;
        }

        .error-page-inner>h1,
        .error-page-inner>p a:focus,
        .error-page-inner>p a:hover,
        .error-page-inner>span,
        .green-clr,
        .inf-lst li,
        .menu-sec nav>div>ul>li:hover>a,
        .menu-sec nav>div>ul>li>a:focus,
        .pr-tm-bx>span i,
        .rspn-cnt .inf-lst>li i,
        .serv-bx:hover>i.theme-clr,
        .serv-bx>h5 a:focus,
        .serv-bx>h5 a:hover,
        .style2 nav>div ul li:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce button.button:hover,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce-MyAccount-content p a:focus,
        .woocommerce-MyAccount-content p a:hover,
        .woocommerce-account .addresses .title .edit:focus,
        .woocommerce-account .addresses .title .edit:hover,
        .woocommerce-page a.button.alt:hover,
        .woocommerce-page a.button:hover,
        .woocommerce-page button.button.alt:hover,
        .woocommerce-page button.button:hover,
        a.comment-reply-link:hover,
        p a:hover,
        #cancel-comment-reply-link:hover,
        .widget .srch-frm button i:hover,
        .cmt-inf a.url:hover {
            color: #004B39 !important;
        }

        .green-brd-clr,
        .namaz-drp button#dropdownMenuButton {
            border-color: #004B39;
        }
    </style>
    <style id="charitable-highlight-colour-styles">
        .campaign-raised .amount,
        .campaign-figures .amount,
        .donors-count,
        .time-left,
        .charitable-form-field a:not(.button),
        .charitable-form-fields .charitable-fieldset a:not(.button),
        .charitable-notice,
        .charitable-notice .errors a {
            color: ;
        }

        #charitable-donation-form .charitable-notice {
            border-color: ;
        }

        .campaign-progress-bar .bar,
        .donate-button,
        .charitable-donation-form .donation-amount.selected,
        .charitable-donation-amount-form .donation-amount.selected {
            background-color: #f89d35;
        }

        .charitable-donation-form .donation-amount.selected,
        .charitable-donation-amount-form .donation-amount.selected,
        .charitable-notice,
        .charitable-drag-drop-images li:hover a.remove-image,
        .supports-drag-drop .charitable-drag-drop-dropzone.drag-over {
            border-color: #f89d35;
        }
    </style>
    <meta name="generator"
        content="Elementor 3.30.3; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <link rel="icon" href="images/cropped-favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="images/cropped-favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="images/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage"
        content="https://naudummy.com/muezzin/wp-content/uploads/2023/12/cropped-favicon-270x270.png">
    <style id="taqwa_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        body h1 {
            font-family: "Cinzel Decorative";
            font-weight: 700;
            font-style: normal;
            color: #000;
            font-size: 60px;
        }

        body h2 {
            font-family: "Cinzel Decorative";
            font-weight: 700;
            font-style: normal;
            color: #000;
            font-size: 54px;
        }

        body h3 {
            font-family: "Cinzel Decorative";
            font-weight: 700;
            font-style: normal;
            color: #000;
            font-size: 30px;
        }

        body h4 {
            font-family: "Cinzel Decorative";
            font-weight: 700;
            font-style: normal;
            color: #000;
            font-size: 26px;
        }

        body h5 {
            font-family: "Cinzel Decorative";
            font-weight: 700;
            font-style: normal;
            color: #000;
            font-size: 24px;
        }

        body h6 {
            font-family: Epilogue;
            font-weight: 700;
            font-style: normal;
            color: #fff;
            font-size: 16px;
        }

        body p,
        .event-detail-desc>p,
        .inf-lst li,
        .hdr-srch>form input,
        .pst-mta li,
        .post-inf>a,
        .post-bx .post-inf>p,
        .widget form input,
        .widget form textarea,
        .cpy-rgt>p,
        .pagination>li,
        .wp-block-button .wp-block-button__link,
        .wp-block-cover p.wp-block-cover-text,
        body ol li,
        body .elementor-text-editor p:not(:first-child),
        body ul li,
        figcaption,
        .elementor-text-editor p:not(:first-child) {
            font-family: Epilogue;
            font-weight: 400;
            font-style: normal;
            color: #444;
            font-size: 16px;
        }

        #nav-id li a,
        .menu-sec nav>div>ul>li,
        .tq-header-menu nav ul li,
        .tq-header-menu nav ul ul li {
            font-family: Epilogue;
            font-weight: 600;
            font-style: normal;
            color: #fff;
            font-size: 16px;
        }

        html body,
        .tag-clouds>span,
        .tag-clouds>a,
        .pst-shr-tgs .scl1,
        .single-campaign .tag-clouds,
        .theme-btn,
        .cause-detail-inf-inr .pst-mta>li span,
        .event-detail-desc ul li:not(.blocks-gallery-grid .blocks-gallery-image, .blocks-gallery-grid .blocks-gallery-item, .wp-block-gallery .blocks-gallery-image, .wp-block-gallery .blocks-gallery-item) {
            font-family: Epilogue;
            font-weight: normal;
            font-style: normal;
        }
    </style>
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
