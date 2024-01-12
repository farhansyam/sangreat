@php
$channel = core()->getCurrentChannel();
@endphp


{{-- SEO Meta Content --}}
@push ('meta')
<meta name="title" content="{{ $channel->home_seo['meta_title'] ?? '' }}" />

<meta name="description" content="{{ $channel->home_seo['meta_description'] ?? '' }}" />

<meta name="keywords" content="{{ $channel->home_seo['meta_keywords'] ?? '' }}" />
@endPush

<x-shop::layouts>
    {{-- Page Title --}}
    <x-slot:title>
        {{ $channel->home_seo['meta_title'] ?? '' }}
        </x-slot>

        {{-- Loop over the theme customization --}}
        @if ($page == 'maklon')
              <!doctype html>
<html dir="ltr" lang="en-US" prefix="og: https://ogp.me/ns#">
<!-- Mirrored from aimskincare.co.id/maklon-kosmetik/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 00:42:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Sangreat Natural Indonesia | Maklon</title>
	<!-- All in One SEO 4.2.5.1 - aioseo.com -->
	<meta name="description" content="Aimskincare merupakan perusahaan jasa maklon kosmetik yang merupakan anak dari AIM Group , membuat berbagai produk kosmetik untuk memudahkan kallan membuat produk kosmetik tanpa harus mempunyai pabrik sendiri." />
	<meta name="robots" content="max-image-preview:large" />
	<link rel="canonical" href="index.html" />
	<meta name="generator" content="All in One SEO (AIOSEO) 4.2.5.1 " />
	<script type="text/javascript">
		/* <![CDATA[ */
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/aimskincare.co.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
			}
		};
		/*! This file is auto-generated */
		! function(i, n) {
			var o, s, e;

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
					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
				return t.every(function(e, t) {
					return e === r[t]
				})
			}

			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
					case "emoji":
						return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
				}
				return !1
			}

			function f(e, t, n) {
				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
					a = r.getContext("2d", {
						willReadFrequently: !0
					}),
					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
				return e.forEach(function(e) {
					o[e] = t(a, e, n)
				}), o
			}

			function t(e) {
				var t = i.createElement("script");
				t.src = e, t.defer = !0, i.head.appendChild(t)
			}
			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, e = new Promise(function(e) {
				i.addEventListener("DOMContentLoaded", e, {
					once: !0
				})
			}), new Promise(function(t) {
				var n = function() {
					try {
						var e = JSON.parse(sessionStorage.getItem(o));
						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
					} catch (e) {}
					return null
				}();
				if (!n) {
					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
							r = new Blob([e], {
								type: "text/javascript"
							}),
							a = new Worker(URL.createObjectURL(r), {
								name: "wpTestEmojiSupports"
							});
						return void(a.onmessage = function(e) {
							c(n = e.data), a.terminate(), t(n)
						})
					} catch (e) {}
					c(n = f(s, u, p))
				}
				t(n)
			}).then(function(e) {
				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
					n.DOMReady = !0
				}
			}).then(function() {
				return e
			}).then(function() {
				var e;
				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
			}))
		}((window, document), window._wpemojiSettings);
		/* ]]> */
	</script>
	<style id='wp-emoji-styles-inline-css' type='text/css'>
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
	<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min1e39.css?ver=6.4.2' type='text/css' media='all' />
	<style id='classic-theme-styles-inline-css' type='text/css'>
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
	<style id='global-styles-inline-css' type='text/css'>
		body {
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

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
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

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
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

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='contact-form-7-css' href="{{asset('wp-content/plugins/contact-form-7/includes/css/styles9f31.css?ver=5.7.2')}}" type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.minf7ff.css?ver=2.8.3' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-pro-css' href='wp-content/plugins/elementor-pro/assets/css/frontend.minf7ff.css?ver=2.8.3' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/globalcc6d.css?ver=1683261793' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-550-css' href='wp-content/uploads/elementor/css/post-5503a9f.css?ver=1679294229' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-42-css' href='wp-content/uploads/elementor/css/post-42fef8.css?ver=1677930324' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-45-css' href='wp-content/uploads/elementor/css/post-45eeda.css?ver=1677144018' type='text/css' media='all' />
	<link rel='stylesheet' id='qlwapp-css' href='wp-content/plugins/wp-whatsapp-chat/assets/frontend/css/frontendcbf4.css?ver=4.9.4' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CScada%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAntic+Didone%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CArsenal%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=6.4.2' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.minad76.css?ver=5.9.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.minad76.css?ver=5.9.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.minad76.css?ver=5.9.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.minad76.css?ver=5.9.0' type='text/css' media='all' />
	<script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<link rel="https://api.w.org/" href="https://aimskincare.co.id/wp-json/" />
	<link rel="alternate" type="application/json" href="https://aimskincare.co.id/wp-json/wp/v2/pages/550" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://aimskincare.co.id/xmlrpc.php?rsd" />
	<meta name="generator" content="WordPress 6.4.2" />
	<link rel='shortlink' href='https://aimskincare.co.id/?p=550' />
	<link rel="alternate" type="application/json+oembed" href="https://aimskincare.co.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Faimskincare.co.id%2Fmaklon-kosmetik%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://aimskincare.co.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Faimskincare.co.id%2Fmaklon-kosmetik%2F&amp;format=xml" />
	<!-- Google Tag Manager for WordPress by gtm4wp.com -->
	<!-- GTM Container placement set to footer -->
	<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">
		var dataLayer_content = {
			"pagePostType": "page",
			"pagePostType2": "single-page",
			"pagePostAuthor": "aimskincare"
		};
		dataLayer.push(dataLayer_content);
	</script>
	<script data-cfasync="false">
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5C6L3S4');
	</script>
	<!-- End Google Tag Manager -->
	<!-- End Google Tag Manager for WordPress by gtm4wp.com -->
	<style>
		:root {
			--qlwapp-scheme-font-family: inherit;
			--qlwapp-scheme-font-size: 18;
		}

		#qlwapp {
			font-family: var(--qlwapp-scheme-font-family);
		}

		#qlwapp {
			font-size: calc(var(--qlwapp-scheme-font-size)*1px);
		}
	</style>
	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<link rel="modulepreload" href="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<script type="module" src="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}"></script>
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">
</head>

<body class="page-template-default page page-id-550 wp-custom-logo elementor-default elementor-page elementor-page-550">
	<main class="site-main post-550 page type-page status-publish hentry" role="main">
		<div class="page-content">
			<div data-elementor-type="wp-post" data-elementor-id="550" class="elementor elementor-550" data-elementor-settings="[]">
				<div class="elementor-inner">
					<div class="elementor-section-wrap">
						<section style="background-color:#5DBBBF;color:white" class="elementor-element elementor-element-9ec54dd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="9ec54dd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-1cf85fe elementor-column elementor-col-50 elementor-top-column" data-id="1cf85fe" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-7449b46 elementor-widget elementor-widget-image" data-id="7449b46" data-element_type="widget" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<div class="elementor-image">
															<img decoding="async" width="1200" height="1000" src="{{asset('storage/public/image/'.$side1->img)}}" class="attachment-full size-full" alt="" srcset="https://aimskincare.co.id/wp-content/uploads/2021/09/product-asc.png 1200w, https://aimskincare.co.id/wp-content/uploads/2021/09/product-asc-300x250.png 300w, https://aimskincare.co.id/wp-content/uploads/2021/09/product-asc-1024x853.png 1024w, https://aimskincare.co.id/wp-content/uploads/2021/09/product-asc-768x640.png 768w" sizes="(max-width: 1200px) 100vw, 1200px" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-e5b5d0c elementor-column elementor-col-50 elementor-top-column" data-id="e5b5d0c" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-a28e0d3 elementor-widget elementor-widget-heading" data-id="a28e0d3" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default" style="color:white">{{$side1->title}}</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-b4406d9 elementor-widget elementor-widget-text-editor" data-id="b4406d9" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix" style="color:white">{{$side1->desk}}</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-0573ecf elementor-align-left elementor-widget elementor-widget-button" data-id="0573ecf" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://web.whatsapp.com/send?phone=6281210002461&amp;text=Hello%20team%20aimskincare," class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">{{$side1->button}}</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-element elementor-element-9f45934 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="9f45934" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-0d917dc elementor-column elementor-col-50 elementor-top-column" data-id="0d917dc" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-490c718 elementor-widget elementor-widget-heading" data-id="490c718" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">{{$side2->title}}</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-cf45c7c elementor-widget elementor-widget-divider" data-id="cf45c7c" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-68ba5ae elementor-widget elementor-widget-text-editor" data-id="68ba5ae" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<p>{{$side2->desk}}</p>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-1d5117d elementor-widget elementor-widget-text-editor" data-id="1d5117d" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<div class="elementor-text-editor elementor-clearfix">
															<!-- <p>Kami memberikan layanan produksi kosmetik (skincare &amp; color cosmetics) All In One, mulai dari pengembangan formula hingga proses produksi, dengan inovasi dan teknologi terbaru, kami adalah perusahaan manufaktur atau pabrik bersertifikat CPKB<br />(<em>Cara Pembuatan Kosmetik yang Baik &amp; Benar), </em>BPOM &amp; Halal MUI Grade A.</p> -->
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-557b21d elementor-align-left elementor-widget elementor-widget-button" data-id="557b21d" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://aimskincare.co.id/index.php/what-we-do/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">{{$side2->button}}</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-3d4e335 elementor-column elementor-col-50 elementor-top-column" data-id="3d4e335" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-c21641e elementor-widget elementor-widget-image" data-id="c21641e" data-element_type="widget" data-widget_type="image.default">
													<div class="elementor-widget-container">
														<div class="elementor-image">
															<img loading="lazy" decoding="async" width="800" height="800" src="{{asset('storage/public/image/'.$side2->img)}}" class="attachment-large size-large" alt="" srcset="https://aimskincare.co.id/wp-content/uploads/2021/09/about-asc.png 1000w, https://aimskincare.co.id/wp-content/uploads/2021/09/about-asc-300x300.png 300w, https://aimskincare.co.id/wp-content/uploads/2021/09/about-asc-150x150.png 150w, https://aimskincare.co.id/wp-content/uploads/2021/09/about-asc-768x768.png 768w" sizes="(max-width: 800px) 100vw, 800px" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-element elementor-element-bf5128a elementor-section-content-middle elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="bf5128a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-ca5eed2 elementor-column elementor-col-100 elementor-top-column" data-id="ca5eed2" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-2f86fd7 elementor-widget elementor-widget-heading" data-id="2f86fd7" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default" style="color:white">Mengapa Sangreat Natural Indonesia</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-9b71977 elementor-widget elementor-widget-divider" data-id="9b71977" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-fe2681b elementor-skin-coverflow elementor-arrows-yes elementor-pagination-type-bullets elementor-pagination-position-outside elementor-widget elementor-widget-media-carousel" data-id="fe2681b" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;coverflow&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;loop&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
													<div class="elementor-widget-container">
														<div class="elementor-swiper">
															<div class="elementor-main-swiper swiper-container">
																<div class="swiper-wrapper">
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/1-1.jpg)">
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/2-1.jpg)">
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/3-1.jpg)">
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/4-1.jpg)">
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/5-1.jpg)">
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/6-1.jpg)">
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-carousel-image" style="background-image: url(wp-content/uploads/2021/09/7-1.jpg)">
																		</div>
																	</div>
																</div>
																<div class="swiper-pagination"></div>
																<div class="elementor-swiper-button elementor-swiper-button-prev">
																	<i class="eicon-chevron-left" aria-hidden="true"></i>
																	<span class="elementor-screen-only">Previous</span>
																</div>
																<div class="elementor-swiper-button elementor-swiper-button-next">
																	<i class="eicon-chevron-right" aria-hidden="true"></i>
																	<span class="elementor-screen-only">Next</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-9de01c8 elementor-align-center elementor-widget elementor-widget-button" data-id="9de01c8" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://web.whatsapp.com/send?phone=6281210002461&amp;text=Hello%20team%20aimskincare," class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">HUBUNGI KAMI</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section style="background-color:#5DBBBF;color:white;" class="elementor-element elementor-element-2337635 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="2337635" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-22310d6 elementor-column elementor-col-100 elementor-top-column" data-id="22310d6" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-16f5c22 elementor-widget elementor-widget-heading" data-id="16f5c22" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default" style="color: white;">Mengapa Sangreat Natural Indonesia</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-8b78df2 elementor-widget elementor-widget-divider" data-id="8b78df2" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
												<section class="elementor-element elementor-element-c15394a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c15394a" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															<div class="elementor-element elementor-element-0b2cdd9 elementor-column elementor-col-50 elementor-inner-column" data-id="0b2cdd9" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		@php
																		$no = 1;
																		@endphp
																		@foreach ($whys as $why)
																		<div class="elementor-element elementor-element-ff0e2d4 elementor-widget elementor-widget-heading" data-id="ff0e2d4" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default" style="color:white">{{$no++}}. {{$why->title}}</h3>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-7879cf9 elementor-widget elementor-widget-text-editor" data-id="7879cf9" data-element_type="widget" data-widget_type="text-editor.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-text-editor elementor-clearfix">
																					<p style="color:white">{{$why->desk}}</p>
																				</div>
																			</div>
																		</div>
																		@if ($no === 5) {{-- Jika sudah 4 item, hentikan loop --}}
																		@break
																		@endif
																		@endforeach
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-9051ee2 elementor-column elementor-col-50 elementor-inner-column" data-id="9051ee2" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		@foreach ($whys as $index => $why)
																		@if ($loop->index >= 4) {{-- Mulai dari indeks ke-4 (item ke-5) --}}
																		<div class="elementor-element elementor-element-ff0e2d4 elementor-widget elementor-widget-heading" data-id="ff0e2d4" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<h3 class="elementor-heading-title elementor-size-default" style="color:white">{{ $index + 1 }}. {{ $why->title }}</h3>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-7879cf9 elementor-widget elementor-widget-text-editor" data-id="7879cf9" data-element_type="widget" data-widget_type="text-editor.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-text-editor elementor-clearfix">
																					<p style="color:white">{{ $why->desk }}</p>
																				</div>
																			</div>
																		</div>
																		@endif
																		@endforeach
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-element elementor-element-5a622be elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5a622be" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-a08bd71 elementor-column elementor-col-50 elementor-top-column" data-id="a08bd71" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<section class="elementor-element elementor-element-54720d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="54720d0" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															@php
															$no = 1;
															@endphp
															@foreach ($proses as $data)
															@php
															$no++;
															@endphp
															<div class="elementor-element elementor-element-39c72fd elementor-column elementor-col-33 elementor-inner-column" data-id="39c72fd" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-4dcc127 elementor-widget elementor-widget-image" data-id="4dcc127" data-element_type="widget" data-widget_type="image.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-image">
																					<img loading="lazy" decoding="async" width="200" height="200" src="{{asset('storage/public/image/'.$data->image)}}" class="attachment-large size-large" alt="" srcset="{{asset('storage/public/image/'.$data->image)}} 200w, {{asset('storage/public/image/'.$data->image)}} 150w" sizes="(max-width: 200px) 100vw, 200px" />
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-c9b6a17 elementor-widget elementor-widget-heading" data-id="c9b6a17" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-heading-title elementor-size-default">{{$data->title}}</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															@if ($no == 4) {{-- Jika sudah 4 item, hentikan loop --}}
															@break
															@endif
															@endforeach
														</div>
													</div>
												</section>
												<section class="elementor-element elementor-element-7397816 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7397816" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															@foreach ($proses as $index => $data)
															@if ($loop->index >= 3) {{-- Mulai dari indeks ke-4 (item ke-5) --}}
															<div class="elementor-element elementor-element-39c72fd elementor-column elementor-col-33 elementor-inner-column" data-id="39c72fd" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-4dcc127 elementor-widget elementor-widget-image" data-id="4dcc127" data-element_type="widget" data-widget_type="image.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-image">
																					<img loading="lazy" decoding="async" width="200" height="200" src="{{asset('storage/public/image/'.$data->image)}}" class="attachment-large size-large" alt="" srcset="{{asset('storage/public/image/'.$data->image)}} 200w, {{asset('storage/public/image/'.$data->image)}} 150w" sizes="(max-width: 200px) 100vw, 200px" />
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-c9b6a17 elementor-widget elementor-widget-heading" data-id="c9b6a17" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-heading-title elementor-size-default">{{$data->title}}</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															@endif
															@endforeach
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-76f9ef2 elementor-column elementor-col-50 elementor-top-column" data-id="76f9ef2" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-12a077f elementor-widget elementor-widget-heading" data-id="12a077f" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default" style="margin-left:100px;">Bagaimana Proses<br>Maklon di Sangreat Natural Indonesia</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-5518764 elementor-widget elementor-widget-divider" data-id="5518764" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider" style="margin-left:100px;">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section style="background-color:#5DBBBF" class="elementor-element elementor-element-e15a1e2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e15a1e2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-d564df3 elementor-column elementor-col-100 elementor-top-column" data-id="d564df3" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-55e28cc elementor-widget elementor-widget-heading" data-id="55e28cc" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default" style="color:white">Sertifikasi Perusahaan</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-f05d5ac elementor-widget elementor-widget-divider" data-id="f05d5ac" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
												<section style="background-color: white;" class="elementor-element elementor-element-281063b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="281063b" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															@foreach ($ser as $data)
															<div class="elementor-element elementor-element-9d35921 elementor-column elementor-col-25 elementor-inner-column" data-id="9d35921" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-326317a elementor-widget elementor-widget-image" data-id="326317a" data-element_type="widget" data-widget_type="image.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-image">
																					<img loading="lazy" decoding="async" width="200" height="200" src="{{asset('storage/public/image/'.$data->image)}}" class="attachment-large size-large" alt="" srcset="{{asset('storage/public/image/'.$data->image)}} 200w, {{asset('storage/public/image/'.$data->image)}} 150w" sizes="(max-width: 200px) 100vw, 200px" />
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															@endforeach
														</div>
													</div>
												</section>
												<div class="elementor-element elementor-element-3a22e3f elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="3a22e3f" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
													<div class="elementor-widget-container">
														<div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
															<video class="elementor-video" src="{{$video->link}}" autoplay="" muted="muted" controlsList="nodownload"></video>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-element elementor-element-00a5349 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="00a5349" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-49bc168 elementor-column elementor-col-100 elementor-top-column" data-id="49bc168" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-25d0bd0 elementor-widget elementor-widget-heading" data-id="25d0bd0" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">Produk Yang Kami Buat</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-692aeed elementor-widget elementor-widget-divider" data-id="692aeed" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
												<section class="elementor-element elementor-element-6263a7b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="6263a7b" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															@foreach ($produk as $data)
															<div class="eleme	ntor-element elementor-element-d4b3360 elementor-hidden-phone elementor-column elementor-col-20 elementor-inner-column" data-id="d4b3360" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-f61181a elementor-widget elementor-widget-image" data-id="f61181a" data-element_type="widget" data-widget_type="image.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-image">
																					<img loading="lazy" decoding="async" width="799" height="1024" src="{{asset('storage/public/image/'.$data->image)}}" class="attachment-large size-large" alt="" srcset="{{asset('storage/public/image/'.$data->image)}} 200w, {{asset('storage/public/image/'.$data->image)}}" class="attachment-large size-large" alt="" srcset="https://aimskincare.co.id/wp-content/uploads/2021/09/asc_Health-Kit.jpg 799w, https://aimskincare.co.id/wp-content/uploads/2021/09/asc_Health-Kit-234x300.jpg 234w, https://aimskincare.co.id/wp-content/uploads/2021/09/asc_Health-Kit-768x984.jpg 768w" sizes="(max-width: 799px) 100vw, 799px" />
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-9d3da17 elementor-widget elementor-widget-heading" data-id="9d3da17" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-heading-title elementor-size-default">{{$data->title}}</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															@endforeach
														</div>
													</div>
												</section>
												<section class="elementor-element elementor-element-0ca0f66 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="0ca0f66" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															<div class="elementor-element elementor-element-9f56f41 elementor-hidden-desktop elementor-hidden-tablet elementor-column elementor-col-50 elementor-inner-column" data-id="9f56f41" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-d4f6db5 elementor-widget elementor-widget-image" data-id="d4f6db5" data-element_type="widget" data-widget_type="image.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-image">
																					<img decoding="async" src="wp-content/uploads/elementor/thumbs/asc_Hair-Care-pcwbj0i2pgbkvgyja6cad79qwbpjcqpe3mmh93nzfs.jpeg" title="asc_Hair-Care" alt="asc_Hair-Care" />
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-7c74436 elementor-widget elementor-widget-heading" data-id="7c74436" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-heading-title elementor-size-default">Hair Care</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-41f6bf7 elementor-hidden-desktop elementor-hidden-tablet elementor-column elementor-col-50 elementor-inner-column" data-id="41f6bf7" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-98cdc98 elementor-widget elementor-widget-image" data-id="98cdc98" data-element_type="widget" data-widget_type="image.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-image">
																					<img loading="lazy" decoding="async" width="799" height="1024" src="wp-content/uploads/2021/09/asc_Health-Kit.jpg" class="attachment-large size-large" alt="" srcset="https://aimskincare.co.id/wp-content/uploads/2021/09/asc_Health-Kit.jpg 799w, https://aimskincare.co.id/wp-content/uploads/2021/09/asc_Health-Kit-234x300.jpg 234w, https://aimskincare.co.id/wp-content/uploads/2021/09/asc_Health-Kit-768x984.jpg 768w" sizes="(max-width: 799px) 100vw, 799px" />
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-ce6eb02 elementor-widget elementor-widget-heading" data-id="ce6eb02" data-element_type="widget" data-widget_type="heading.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-heading-title elementor-size-default">Health Kit</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- <section class="elementor-element elementor-element-32f9380 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="32f9380" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                        	<div class="elementor-row">
                        		<div class="elementor-element elementor-element-18a94e4 elementor-column elementor-col-100 elementor-top-column" data-id="18a94e4" data-element_type="column">
                        			<div class="elementor-column-wrap  elementor-element-populated">
                        				<div class="elementor-widget-wrap">
                        					<div class="elementor-element elementor-element-d326719 elementor-widget elementor-widget-heading" data-id="d326719" data-element_type="widget" data-widget_type="heading.default">
                        						<div class="elementor-widget-container">
                        							<h2 class="elementor-heading-title elementor-size-default">Portfolio Kami</h2>
                        						</div>
                        					</div>
                        					<div class="elementor-element elementor-element-7827ca6 elementor-widget elementor-widget-divider" data-id="7827ca6" data-element_type="widget" data-widget_type="divider.default">
                        						<div class="elementor-widget-container">
                        							<div class="elementor-divider">
                        								<span class="elementor-divider-separator">
                        								</span>
                        							</div>
                        						</div>
                        					</div>
                        					<div class="elementor-element elementor-element-68b7351 elementor-widget elementor-widget-gallery" data-id="68b7351" data-element_type="widget" data-settings="{&quot;gallery_layout&quot;:&quot;masonry&quot;,&quot;columns&quot;:3,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;columns_tablet&quot;:2,&quot;columns_mobile&quot;:1,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}" data-widget_type="gallery.default">
                        						<div class="elementor-widget-container">
                        							<div class="elementor-gallery__container">
                        								<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/2021/09/IMG_9868-1-1-1024x1024.jpg" data-elementor-lightbox-slideshow="all-68b7351">
                        									<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://aimskincare.co.id/wp-content/uploads/2021/09/IMG_9868-1-1.jpg" data-width="1728" data-height="1728" alt=""></div>
                        									<div class="elementor-gallery-item__overlay"></div>
                        								</a>
                        								<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/2021/09/pms-adara-1-718x1024.jpg" data-elementor-lightbox-slideshow="all-68b7351">
                        									<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://aimskincare.co.id/wp-content/uploads/2021/09/pms-adara-1.jpg" data-width="1642" data-height="2342" alt=""></div>
                        									<div class="elementor-gallery-item__overlay"></div>
                        								</a>
                        								<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/2021/09/Glanz-1-725x1024.jpg" data-elementor-lightbox-slideshow="all-68b7351">
                        									<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://aimskincare.co.id/wp-content/uploads/2021/09/Glanz-1.jpg" data-width="1413" data-height="1996" alt=""></div>
                        									<div class="elementor-gallery-item__overlay"></div>
                        								</a>
                        								<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/2021/09/leurre-1-scaled-e1631528277796-744x1024.jpg" data-elementor-lightbox-slideshow="all-68b7351">
                        									<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://aimskincare.co.id/wp-content/uploads/2021/09/leurre-1-scaled-e1631528277796.jpg" data-width="1478" data-height="2035" alt=""></div>
                        									<div class="elementor-gallery-item__overlay"></div>
                        								</a>
                        								<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/2021/09/Cellestiane-2-1024x678.jpg" data-elementor-lightbox-slideshow="all-68b7351">
                        									<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://aimskincare.co.id/wp-content/uploads/2021/09/Cellestiane-2-scaled.jpg" data-width="2560" data-height="1695" alt=""></div>
                        									<div class="elementor-gallery-item__overlay"></div>
                        								</a>
                        								<a class="e-gallery-item elementor-gallery-item elementor-animated-content" href="wp-content/uploads/2021/09/AB-cosmetic-1-692x1024.jpg" data-elementor-lightbox-slideshow="all-68b7351">
                        									<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://aimskincare.co.id/wp-content/uploads/2021/09/AB-cosmetic-1.jpg" data-width="1413" data-height="2092" alt=""></div>
                        									<div class="elementor-gallery-item__overlay"></div>
                        								</a>
                        							</div>
                        						</div>
                        					</div>
                        					<div class="elementor-element elementor-element-b420840 elementor-align-center elementor-widget elementor-widget-button" data-id="b420840" data-element_type="widget" data-widget_type="button.default">
                        						<div class="elementor-widget-container">
                        							<div class="elementor-button-wrapper">
                        								<a href="https://aimskincare.co.id/index.php/our-clients/" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                        									<span class="elementor-button-content-wrapper">
                        										<span class="elementor-button-text">LIHAT LEBIH BANYAK</span>
                        									</span>
                        								</a>
                        							</div>
                        						</div>
                        					</div>
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        </section> -->
						<section class="elementor-element elementor-element-abb4ce7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="abb4ce7" data-element_type="section" id="hubungi">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-row">
									<div class="elementor-element elementor-element-1445e02 elementor-column elementor-col-100 elementor-top-column" data-id="1445e02" data-element_type="column">
										<div class="elementor-column-wrap  elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-dfa53a0 elementor-widget elementor-widget-heading" data-id="dfa53a0" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">Hubungi Kami</h2>
													</div>
												</div>
												<div class="elementor-element elementor-element-7df220b elementor-widget elementor-widget-divider" data-id="7df220b" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
												<section class="elementor-element elementor-element-f595bc8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="f595bc8" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-row">
															<div class="elementor-element elementor-element-3d57238 elementor-column elementor-col-50 elementor-inner-column" data-id="3d57238" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-e24a479 elementor-widget elementor-widget-google_maps" data-id="e24a479" data-element_type="widget" data-widget_type="google_maps.default">
																			<div class="elementor-widget-container">
																				<div class="elementor-custom-embed"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5747492646146!2d106.76044437499341!3d-6.575228893418195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4f09fc7ca57%3A0x1056d93ae72ff127!2sPT.%20SanGreat%20Natural%20Indonesia!5e0!3m2!1sid!2ssg!4v1703209874425!5m2!1sid!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-c7c9041 elementor-column elementor-col-50 elementor-inner-column" data-id="c7c9041" data-element_type="column">
																<div class="elementor-column-wrap  elementor-element-populated">
																	<div class="elementor-widget-wrap">
																		<div class="elementor-element elementor-element-bf6d99d elementor-button-align-start elementor-widget elementor-widget-form" data-id="bf6d99d" data-element_type="widget" data-widget_type="form.default">
																			<div class="elementor-widget-container">
																				<form class="elementor-form" method="post" name="New Form" action="{{route('hubungi.store')}}">
																					@csrf
																					<input type="hidden" name="post_id" value="550" />
																					<input type="hidden" name="form_id" value="bf6d99d" />
																					<div class="elementor-form-fields-wrapper elementor-labels-above">
																						<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_1 elementor-col-100">
																							<label for="form-field-field_1" class="elementor-field-label">Subject</label>
																							<div class="elementor-field elementor-select-wrapper ">
																								<select name="subject" id="form-field-field_1" class="elementor-field-textual elementor-size-sm">
																									<option value="Product and Marketing Consultation">Product and Marketing Consultation</option>
																								</select>
																							</div>
																						</div>
																						<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required elementor-mark-required">
																							<label for="form-field-name" class="elementor-field-label">Full Name</label><input size="1" type="text" name="fullname" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name" required="required" aria-required="true">
																						</div>
																						<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required elementor-mark-required">
																							<label for="form-field-email" class="elementor-field-label">Email Address</label><input size="1" type="email" name="email" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
																						</div>
																						<div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-phone elementor-col-100 elementor-field-required elementor-mark-required">
																							<label for="form-field-phone" class="elementor-field-label">Phone Number</label><input size="1" type="tel" name="notlpn" id="form-field-phone" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Phone" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
																						</div>
																						<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required elementor-mark-required">
																							<label for="form-field-message" class="elementor-field-label">Message</label><textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="pesan" id="form-field-message" rows="4" placeholder="Message" required="required" aria-required="true"></textarea>
																						</div>
																						<div class="elementor-field-type-recaptcha elementor-field-group elementor-column elementor-field-group-captcha elementor-col-100">
																							<div class="elementor-field" id="form-field-captcha">
																								<div class="elementor-g-recaptcha" data-sitekey="6LeLWmocAAAAAKL1nEd6POrHMF-XzMGYMe2PIK9-" data-type="v2_checkbox" data-theme="light" data-size="normal"></div>
																							</div>
																						</div>
																						<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
																							<button type="submit" class="elementor-button elementor-size-sm">
																								<span>
																									<span class=" elementor-button-icon">
																									</span>
																									<span class="elementor-button-text">Make an Appointment</span>
																								</span>
																							</button>
																						</div>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<div class="post-tags">
			</div>
		</div>
		<section id="comments" class="comments-area">
		</section>
		<!-- .comments-area -->
	</main>
	<!-- GTM Container placement set to footer -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C6L3S4" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="qlwapp" class="qlwapp-free qlwapp-button qlwapp-bottom-right qlwapp-all qlwapp-rounded">
		<div class="qlwapp-container">
			<a class="qlwapp-toggle" data-action="open" data-phone="628118438899" data-message="Hello aimskincare," href="javascript:void(0);" target="_blank">
				<i class="qlwapp-icon qlwapp-whatsapp-icon"></i>
				<i class="qlwapp-close" data-action="close">&times;</i>
				<span class="qlwapp-text">How can I help you?</span>
			</a>
		</div>
	</div>
	<link rel='stylesheet' id='elementor-gallery-css' href='wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min20b9.css?ver=1.0.2' type='text/css' media='all' />
	<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/index9f31.js?ver=5.7.2" id="swv-js"></script>
	<script type="text/javascript" id="contact-form-7-js-extra">
		/* <![CDATA[ */
		var wpcf7 = {
			"api": {
				"root": "https:\/\/aimskincare.co.id\/wp-json\/",
				"namespace": "contact-form-7\/v1"
			},
			"cached": "1"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/contact-form-7/includes/js/index9f31.js?ver=5.7.2')}}" id="contact-form-7-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/wp-whatsapp-chat/assets/frontend/js/frontend3a8d.js?ver=021fa4de1c6ea4db860e85f702082b24')}}" id="qlwapp-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1')}}" id="smartmenus-js"></script>
	<script type="text/javascript" src="{{asset('wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js')}}"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.minf488.js?ver=1.1.0')}}" id="elementor-gallery-js"></script>
	<script type="text/javascript" src="www.google.com/recaptcha/apib042.js?render=explicit&amp;ver=2.8.3" id="elementor-recaptcha-api-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor/assets/js/frontend-modules.minf7ff.js?ver=2.8.3')}}" id="elementor-frontend-modules-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.minf7ff.js?ver=2.8.3')}}" id="elementor-sticky-js"></script>
	<script type="text/javascript" id="elementor-pro-frontend-js-before">
		/* <![CDATA[ */
		var ElementorProFrontendConfig = {
			"ajaxurl": "https:\/\/aimskincare.co.id\/wp-admin\/admin-ajax.php",
			"nonce": "7681a85d30",
			"shareButtonsNetworks": {
				"facebook": {
					"title": "Facebook",
					"has_counter": true
				},
				"twitter": {
					"title": "Twitter"
				},
				"google": {
					"title": "Google+",
					"has_counter": true
				},
				"linkedin": {
					"title": "LinkedIn",
					"has_counter": true
				},
				"pinterest": {
					"title": "Pinterest",
					"has_counter": true
				},
				"reddit": {
					"title": "Reddit",
					"has_counter": true
				},
				"vk": {
					"title": "VK",
					"has_counter": true
				},
				"odnoklassniki": {
					"title": "OK",
					"has_counter": true
				},
				"tumblr": {
					"title": "Tumblr"
				},
				"delicious": {
					"title": "Delicious"
				},
				"digg": {
					"title": "Digg"
				},
				"skype": {
					"title": "Skype"
				},
				"stumbleupon": {
					"title": "StumbleUpon",
					"has_counter": true
				},
				"telegram": {
					"title": "Telegram"
				},
				"pocket": {
					"title": "Pocket",
					"has_counter": true
				},
				"xing": {
					"title": "XING",
					"has_counter": true
				},
				"whatsapp": {
					"title": "WhatsApp"
				},
				"email": {
					"title": "Email"
				},
				"print": {
					"title": "Print"
				}
			},
			"facebook_sdk": {
				"lang": "en_US",
				"app_id": ""
			}
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="w{{asset('p-content/plugins/elementor-pro/assets/js/frontend.minf7ff.js?ver=2.8.3')}}" id="elementor-pro-frontend-js"></script>
	<script type="text/javascript" src="{{asset('wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2')}}" id="jquery-ui-core-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor/assets/lib/dialog/dialog.minfe9d.js?ver=4.7.3')}}" id="elementor-dialog-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}" id="elementor-waypoints-js"></script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor/assets/lib/swiper/swiper.min4f24.js?ver=4.4.6')}}" id="swiper-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-before">
		/* <![CDATA[ */
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"version": "2.8.3",
			"urls": {
				"assets": "https:\/\/aimskincare.co.id\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"general": {
					"elementor_global_image_lightbox": "yes"
				},
				"editorPreferences": []
			},
			"post": {
				"id": 550,
				"title": "Maklon Kosmetik",
				"excerpt": ""
			}
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="{{asset('wp-content/plugins/elementor/assets/js/frontend.minf7ff.js?ver=2.8.3')}}" id="elementor-frontend-js"></script>
</body>
<!-- Mirrored from aimskincare.co.id/maklon-kosmetik/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 00:43:43 GMT -->

</html>
<!-- Page generated by LiteSpeed Cache 5.3.2 on 2023-12-21 13:02:20 -->
        @elseif($page == 'rewards')
        <!DOCTYPE html>
<!-- saved from url=(0039)https://www.paragon-innovation.com/news -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sangreat Rewards</title>

    {{-- <link href="https://www.paragon-innovation.com/static/css/2.03c6c993.chunk.css" rel="stylesheet"> --}}
    <link href="{{asset('cc.css')}}" rel="stylesheet">
    	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<link rel="modulepreload" href="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<script type="module" src="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}"></script>
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">
</head>

  
</head>

<body>
        <div class="wrapper   template-color-1 template-font-2" id="wrapper">
            <div class="paragon-search-popup">
                <div class="overlay"></div>
                <div class="inner">
                    <div class="search-header">
                        <div class="logo">
                            <a href="https://www.paragon-innovation.com/">
                                <img src="/Paragon News_files/paragon-corp-white.e705509b.png" alt="logo"></a>
                        </div>
                        <button class="search-close"></button>
                    </div>
                    <div class="search-content">
                        <div><label><input type="search" placeholder="Enter search keyword" required="" value=""></label><button class="search-submit"><i class="fa fa-search"></i></button></div>
                    </div>
                </div>
            </div>
            <div class="paragon-popup-mobile-menu popup-mobile-visible">
                <div class="overlay"></div>
                <div class="inner">
                    <div class="mobileheader">
                        <div class="logo"><a href="https://www.paragon-innovation.com/"><img src="./Paragon News_files/paragon-corp-white.e705509b.png" alt="logo"></a></div>
                        <button class="mobile-close"></button>
                    </div>
                    <div class="menu-content">
                        <ul class="menulist object-custom-menu">

                        </ul>
                    </div>
                </div>
            </div>
            <div class="brook-breadcrumb-area halfscreen breadcrumb-title-bar breadcrumb-title-white d-flex align-items-center pt_md--70 pt_sm--100 pb_sm--50 position-relative bg-image-career">
                <div class="overlay" style="background-color: rgb(0, 0, 0); opacity: 0.3;"></div>
                <div class="plr--180 plr_lg--100 plr_md--50 plr_sm--50 container-fluid">
                    <div class="align-items-center row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-inner text-center align-items-center">
                                <h1 class="heading heading-h1 font-60 text-white" style="font-family: Montserrat;">Rewards</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="" class="bk-blog-grid-area bg_color--5 section-ptb-150">
                <div class="container">
                    <div class="mt--n60 row">
                        @foreach ($rewards as $data)
                        <div class="col-lg-4 col-sm-6">
                            <div class="blog-grid blog-grid--modern blog-standard mt--60 blog-theme-color">
                                <div class="post-thumb"><a href="{{route('rewards.show',$data->id)}}"><img src="{{asset('storage/public/image/'.$data->cover)}}" alt="{{$data->title}}"></a>
                                </div>
                                <div class="post-content text-center">
                                    <div class="post-inner">
                                        <div class="post-meta mb--10">
                                            <div class="post-date" style="font-family: Montserrat;">@php
                                                $originalDate = $data->created_at; // Tanggal asli dalam format "Y-m-d H:i:s"
                                                $newDate = date('d, M Y', strtotime($originalDate)); // Mengonversi format tanggal
                                                echo $newDate; // Output: "23, Dec 2023"
                                                @endphp</div>
                                        </div>
                                        <h5 class="heading heading-h5 line-height-1-39" style="font-family: Montserrat; min-height: 14vh;">
                                            <a href="{{route('rewards.show',$data->id)}}">{{$data->title}}</a>
                                        </h5>
                                        <br>
                                        <a class="btn btn-primary" href="?page=single&id={{$data->id}}" style="color: white;">Read</a>

                                    </div>
                                </div>

                            </div>

                        </div>
                        @endforeach
                    </div>
                    {{ $rewards->links() }}
                </div>

            </div>
        </div>
        <script type="text/javascript" async="" src="./Paragon News_files/js"></script>
        <script async="" src="./Paragon News_files/analytics.js.download"></script>

        <script src="./Paragon News_files/2.82e9c6da.chunk.js.download"></script>
        <script src="./Paragon News_files/main.b02f615e.chunk.js.download"></script>
</body>

</html>
        @elseif($page == 'single')
  <!DOCTYPE html>
<!-- saved from url=(0039)https://www.paragon-innovation.com/news -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sangreat Rewards</title>

    {{-- <link href="https://www.paragon-innovation.com/static/css/2.03c6c993.chunk.css" rel="stylesheet"> --}}
    <link href="{{asset('cc.css')}}" rel="stylesheet">
    	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<link rel="modulepreload" href="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<script type="module" src="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}"></script>
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">
</head>

        <div class="wrapper   template-color-1 template-font-2" id="wrapper">
        <div class="wrapper   template-color-1 template-font-1 bg_color--1" id="wrapper">
            <div class="brook-blog-details-area bg_color--1 pt--90 pb--100">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-lg-8">
                            <div class="blog-details-wrapper">
                                <article class="blog-post standard-post">
                                    <header class="header mb--40 text-center">
                                        <h3 class="heading heading-h3 font-32" style="font-family: Montserrat;">{{$rewards->title}}</h3>
                                        <div class="post-meta mt--20">
                                            <div class="post-date" style="font-family: Montserrat;">@php
                                                $originalDate = $rewards->created_at; // Tanggal asli dalam format "Y-m-d H:i:s"
                                                $newDate = date('d, M Y', strtotime($originalDate)); // Mengonversi format tanggal
                                                echo $newDate; // Output: "23, Dec 2023"
                                                @endphp</div>
                                        </div>
                                    </header>
                                    <div class="thumb text-left wow move-up mb--10"><img src="{{asset('storage/public/image/'.$rewards->cover)}}" alt="thumb" style="width: 100%;"></div>
                                    <p class="bk_pra wow move-up mb--60" style="font-family: Montserrat; font-size: 12px; text-align: center;"></p>
                                    <section class="content basic-dark2-line-1px pb--50 mb--35">
                                        <div class="inner">
                                            <div class="desc mt--45 mb--50 news">
                                                {!! $rewards->desk !!}
                                                <br>
                                                <p style="text-align:justify">Writer: {{$rewards->writer}}</p>
                                                <p style="text-align:justify">Editor:{{$rewards->editor}}</p>
                                            </div>
                                        </div>
                                    </section>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brook-blog-details-area pb--150">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-lg-8">
                            <div class="brook-pagination-wrapper text-center">
                                <!-- <ul class="brook-pagination">
                                    <li data-pagination-current="false" class="active"><a href="https://www.paragon-innovation.com/post/news/SKltn7BsOUJ5EzF">1</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/wJPXGSRJYkOq971">2</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/6e4fyM4GUGW07MJ">3</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/qFjFU8knUg3byaq">4</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/dEJ1lQ6rpA3u39s">5</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/EzByHCp5H22ODvL">6</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/xm4z4eVlcZEKnTy">7</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/EEkmUIQfJ0JhNh3">8</a></li>
                                    <li data-pagination-ellipsis="true"><span>…</span></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/fHCZGqeyBvMtDTy">80</a></li>
                                    <li><a href="https://www.paragon-innovation.com/post/news/pU3makRcprEaVLk">81</a></li>
                                    <li data-pagination-next="true"><a href="https://www.paragon-innovation.com/post/news/wJPXGSRJYkOq971"><i class="fa fa-angle-right"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($page == 'about')
<!DOCTYPE html>
<!-- saved from url=(0039)https://www.paragon-innovation.com/news -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sangreat Rewards</title>

    {{-- <link href="https://www.paragon-innovation.com/static/css/2.03c6c993.chunk.css" rel="stylesheet"> --}}
    <link href="{{asset('cc.css')}}" rel="stylesheet">
    	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="preload" as="style" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<link rel="modulepreload" href="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-de506919.css')}}" />
	<link rel="stylesheet" href="{{asset('themes/shop/default/build/assets/app-05f8acf7.css')}}" />
	<script type="module" src="{{asset('themes/shop/default/build/assets/app-aa4b60e6.js')}}"></script>
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">
</head>

  
</head>

<body>
        <div class="brook-breadcrumb-area bg-image-about-us fullscreen breadcrumb-title-bar breadcrumb-title-white d-flex align-items-center pt_md--70 pt_sm--100 pb_sm--50 position-relative">
            <div class="overlay" style="background-color: rgb(0, 0, 0); opacity: 0.3;"></div>
            <div class="plr--180 plr_lg--100 plr_md--50 plr_sm--50 container-fluid">
                <div class="align-items-center row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center align-items-center">
                            <h1 class="heading heading-h1 font-60 text-white">About Sangreat Natural Indonesia</h1>
                            <div style="width: 100%; display: flex; justify-content: center;">
                                <p class="mt--50" style="color: white; font-size: 28px; line-height: 37px; width: 70%; font-family: Montserrat;">
                                    {{$about->deskripsi}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pl--150 pr--150 pl_lp--70 pr_lp--70 pl_lg--70 pr_lg--70 pl_md--50 pr_md--50 pl_sm--30 pr_sm--30" style="background-color: rgb(255, 255, 255); min-height: 45vh; display: flex; align-items: center;">
        <div class="plr--180 plr_lg--100 plr_md--50 plr_sm--10 container-fluid" style="height: 100%; width: 70%;">
            <div class="align-items-center row" style="height: 100%;">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-left align-items-center"><img src="{{asset('storage/public/image/'.$about->logo)}}" alt="Paragon Corp"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper  all-wrapper template-color-4 template-font-2 bg_color--1" id="wrapper">
        <div class="checkpoint bg-banner-vision" style="height: 45vh; background-position: center 125px;">
            <div class="paragon-overlay"></div>
            <div id="vision" class="brook-contact-form-area ptb--150 ptb-md--80 ptb-sm--60" style="height: 45vh; display: flex; align-items: center;">
                <div class="container" style="max-width: 1591px;">
                    <div class="row">
                        <div class="wow move-up align-items-center text-left text-white col-lg-12">
                            <h1 style="color: white; font-family: Montserrat; margin: 0px;">Our Vision</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pl--150 pr--150 pl_lp--70 pr_lp--70 pl_lg--70 pr_lg--70 pl_md--50 pr_md--50 pl_sm--30 pr_sm--30" style="background-color: rgb(255, 255, 255); min-height: 45vh; display: flex; align-items: center;">
        <div class="plr--180 plr_lg--100 plr_md--50 plr_sm--10 container-fluid" style="height: 100%; width: 70%;">
            <div class="align-items-center row" style="height: 100%;">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-left align-items-center">
                        <h3 class="mb--70" style="color: rgb(33, 90, 168);">Our Vision</h3>
                        <p style="color: rgb(33, 90, 168); font-size: 24px; line-height: 34.13px;">
                            {!!$about->visi!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper  all-wrapper template-color-4 template-font-2 bg_color--1" id="wrapper">
        <div class="checkpoint bg-banner-mission" style="height: 45vh; background-position: center 100px;">
            <div class="paragon-overlay"></div>
            <div id="mission" class="brook-contact-form-area ptb--150 ptb-md--80 ptb-sm--60" style="height: 45vh; display: flex; align-items: center;">
                <div class="container" style="max-width: 1591px;">
                    <div class="row">
                        <div class="wow move-up align-items-center text-left text-white col-lg-12">
                            <h1 style="color: white; font-family: Montserrat; margin: 0px;">Our Mission</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pl--150 pr--150 pl_lp--70 pr_lp--70 pl_lg--70 pr_lg--70 pl_md--50 pr_md--50 pl_sm--30 pr_sm--30" style="background-color: rgb(255, 255, 255);">
        <div class="plr--180 plr_lg--100 plr_md--50 plr_sm--10 mt--70 mb--70 container-fluid">
            <div class="align-items-center row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-left align-items-center">
                        <h3 class="mb--40" style="color: rgb(33, 90, 168);">Our Mission</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                @php $count = 0 @endphp

                                @foreach ($misis as $data)
                                @if ($count < 4) <div class="bk-list mt--50">
                                    <div class="list-header with-default null">
                                        <div class="row">
                                            <div class="col-lg-3 col-3"><img src="{{ asset('storage/public/image/'.$data->image) }}" alt="list"></div>
                                            <div class="col-lg-9 col-9">
                                                <div class="title-wrap">
                                                    <h5 class="heading heading-h5" style="color: rgb(33, 90, 168); margin-bottom: 16px;">{{ $data->title }}</h5>
                                                    <p class="bk_pra" style="color: rgb(33, 90, 168);">{{ $data->desk }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @php $count++ @endphp
                            @else
                            @break
                            @endif
                            @endforeach

                        </div>
                        <div class="col-lg-6">
                            @foreach ($misis as $data)
                            @if ($count > 4) <div class="bk-list mt--50">
                                <div class="list-header with-default null">
                                    <div class="row">
                                        <div class="col-lg-3 col-3"><img src="{{ asset('storage/public/image/'.$data->image) }}" alt="list"></div>
                                        <div class="col-lg-9 col-9">
                                            <div class="title-wrap">
                                                <h5 class="heading heading-h5" style="color: rgb(33, 90, 168); margin-bottom: 16px;">{{ $data->title }}</h5>
                                                <p class="bk_pra" style="color: rgb(33, 90, 168);">{{ $data->desk }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @php $count++ @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="wrapper  all-wrapper template-color-4 template-font-2 bg_color--1" id="wrapper">
        <div class="checkpoint bg-banner-corevalue" style="height: 45vh; background-position: center 117px;">
            <div class="paragon-overlay"></div>
            <div id="corevalue" class="brook-contact-form-area ptb--150 ptb-md--80 ptb-sm--60" style="height: 45vh; display: flex; align-items: center;">
                <div class="container" style="max-width: 1591px;">
                    <div class="row">
                        <div class="wow move-up align-items-center text-left text-white col-lg-12">
                            <h1 style="color: white; font-family: Montserrat; margin: 0px;">Our Core Values</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper   template-color-1 template-font-2" id="wrapper">
        <div class="brook-testimonial-area ptb--150 ptb-md--80 ptb-sm--60 slick-arrow-hover" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                            }

                            .carousel {
                                position: relative;
                                width: 100%;
                                max-width: 800px;
                                /* Sesuaikan lebar carousel */
                                margin: 50px auto;
                                overflow: hidden;
                            }

                            .slide {
                                display: none;
                            }

                            .slide.active {
                                display: block;
                            }

                            .image-caption {
                                text-align: center;
                            }

                            .image-caption .im {
                                width: 30%;
                                height: auto;
                                display: block;
                                margin: 0 auto;
                            }

                            .image-caption .caption {
                                border-radius: 20px;
                                background-color: rgb(79, 163, 167);
                                color: white;
                                padding: 10px;
                                margin-top: 10px;
                            }

                            .image-caption .caption h2 {
                                margin-bottom: 5px;
                                font-size: 24px;
                            }

                            .image-caption .caption p {
                                font-size: 16px;
                            }

                            .prev,
                            .next {
                                cursor: pointer;
                                position: absolute;
                                top: 50%;
                                width: auto;
                                margin-top: -22px;
                                padding: 16px;
                                color: white;
                                font-weight: bold;
                                font-size: 20px;
                                transition: 0.6s ease;
                                border-radius: 0 3px 3px 0;
                            }

                            .prev {
                                left: 0;
                                border-radius: 3px 0 0 3px;
                            }

                            .next {
                                right: 0;
                                border-radius: 3px 0 0 3px;
                            }
                        </style>
                        <div class="carousel">
                            @foreach($history as $data)
                            <div class="slide">
                                <div class="image-caption">
                                    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                                    <img src="{{ asset('storage/public/image/'.$data->image) }}" alt="Slide" class="im">
                                    <a class="next" onclick="changeSlide(1)">&#10095;</a>
                                    <div class="caption">
                                        <h2 style="color:white">{{ $data->title }}</h2>
                                        <p>{{ $data->desk }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        <script>
                            // JavaScript untuk mengatur perpindahan slide
                            let slides = document.querySelectorAll(".slide");
                            let currentSlide = 0;

                            function showSlide(n) {
                                slides[currentSlide].classList.remove("active");
                                currentSlide = (n + slides.length) % slides.length;
                                slides[currentSlide].classList.add("active");
                            }

                            setInterval(() => {
                                showSlide(currentSlide + 1);
                            }, 3000); // Ganti slide setiap 3 detik
                        </script>
                        <script>
                            let slideIndex = 1;

                            function showSlide(n) {
                                let slides = document.getElementsByClassName("slide");
                                if (n > slides.length) {
                                    slideIndex = 1
                                }
                                if (n < 1) {
                                    slideIndex = slides.length
                                }
                                for (let i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                slides[slideIndex - 1].style.display = "block";
                            }

                            function changeSlide(n) {
                                showSlide(slideIndex += n);
                            }

                            // Tampilkan slide pertama saat halaman dimuat
                            showSlide(slideIndex);
                        </script>


                    </div>
                </div>
            </div>
        </div>
        <style>
            .image-container {
                display: flex;
                justify-content: center;
                /* Mengatur posisi horizontal menjadi tengah */
                align-items: center;
                /* Mengatur posisi vertikal menjadi tengah */
                height: 300px;
                /* Sesuaikan dengan tinggi yang diinginkan */
                /* Tambahan: Jika ingin membatasi ukuran gambar */
                /* max-width: 100%; */
                /* max-height: 100%; */
            }

            .centered-image {
                /* Tambahan: Jika ingin membatasi ukuran gambar */
                /* max-width: 100%; */
                /* max-height: 100%; */
                /* Memastikan gambar tetap proporsional */
                /* width: auto; */
                /* height: auto; */
            }
        </style>
        <div class="image-container">
            <img src="{{ asset('storage/public/image/'.$banner->banner) }}" alt="Slide" class="centered-image">
        </div>
        <br><br><br>
        <br><br><br>
        <br><br><br>

</body>

</html>
        @else
        @foreach ($customizations as $customization)
        @php ($data = $customization->options)

        {{-- Static content --}}
        @switch ($customization->type)
        {{-- Image Carousel --}}
        @case ($customization::IMAGE_CAROUSEL)
        <x-shop::carousel :options="$data"></x-shop::carousel>

        @break

        @case ($customization::STATIC_CONTENT)
        {{-- push style --}}
        @push ('styles')
        <style>
        {{ $data['css'] }}
        </style>
        @endpush

        {{-- render html --}}
        {!! $data['html'] !!}

        @break

        @case ($customization::CATEGORY_CAROUSEL)
        {{-- Categories carousel --}}
        <x-shop::categories.carousel :title="$data['title'] ?? ''" :src="route('shop.api.categories.index', $data['filters'] ?? [])" :navigation-link="route('shop.home.index')">
        </x-shop::categories.carousel>

        @break

        @case ($customization::PRODUCT_CAROUSEL)
        {{-- Product Carousel --}}
        <x-shop::products.carousel {{-- title="Men's Collections" --}} :title="$data['title'] ?? ''" :src="route('shop.api.products.index', $data['filters'] ?? [])" :navigation-link="route('shop.home.index')">
        </x-shop::products.carousel>

        @break
        @endswitch
        @endforeach
        @endif
</x-shop::layouts>