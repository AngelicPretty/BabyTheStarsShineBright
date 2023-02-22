<?php
/**
 * The template for displaying the header
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage LittleFish
 * @since LittleFish 1.0
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">	<meta charset="UTF-8">
	<Meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta name="description" content="ロリィタ服ブランド「BABY, THE STARS SHINE BRIGHT」「ALICE and the PIRATES」の公式ウェブサイト" />
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
    <!-- <link rel="dns-prefetch" href="//www.google-analytics.com"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Lobster+Two&family=M+PLUS+Rounded+1c:wght@300;500&family=Montserrat:wght@300;500&family=Noto+Sans+TC:wght@300;500&family=Noto+Serif+JP:wght@300;500&family=Noto+Serif+TC:wght@300;500&display=swap&family=Pinyon+Script&display=swap" rel="stylesheet">
	<link rel="alternate" href="http://sweethoney.great-site.net/" hreflang="ja" />
	<link rel="alternate" href="http://sweethoney.great-site.net/" hreflang="en" />
	<link rel="alternate" href="http://sweethoney.great-site.net/" hreflang="zh" />
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="BABY, THE STARS SHINE BRIGHT">
	<meta property="og:url" content="http://sweethoney.great-site.net/">
	<meta property="og:title" content="BABY, THE STARS SHINE BRIGHT">
	<meta property="og:description" content="ロリィタ服ブランド「BABY, THE STARS SHINE BRIGHT」「ALICE and the PIRATES」の公式ウェブサイト">
	<meta property="og:image" content="https://www.babyssb.co.jp/wp-content/themes/babyssbThema/inc/images/ogp.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Little_FIsh">
	<meta name="twitter:image" content="https://www.babyssb.co.jp/wp-content/themes/babyssbThema/inc/images/ogp.png">
	<meta name="twitter:description" content="「BABY, THE STARS SHINE BRIGHT」「Little Fish and Jasmine」">
	<meta name="twitter:title" content="Little Fish and Jasmine">

<title>Little Fish Project Work | 「Little Fish and JasmineS」「BABY, THE STARS SHINE BRIGHT」の公式ウェブサイト</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='//www.google.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="stylesheet" id="wp-block-library-css" href="https://www.babyssb.co.jp/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3" type="text/css" media="all">
<link rel='stylesheet' id='sbi_styles-css'  href='https://www.babyssb.co.jp/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.0.4' type='text/css' media='all' />
<?php wp_enqueue_style('block.min', get_template_directory_uri() . '/inc/css/block.min.css',array(),'1.0','all'); ?>
<style>.wp-container-1 {display: flex;gap: 0.5em;flex-wrap: wrap;align-items: center;align-items: center;}.wp-container-1 > * { margin: 0; }</style>
<style id='global-styles-inline-css' type='text/css'>

body {
	cursor:url(http://sweethoney.great-site.net/wp-content/themes/babyssb/inc/images/spy_family/anya/Anya_Arrow.ani), default;
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
  --wp--preset--color--crimson: #dc143c;
  --wp--preset--color--pink: #efb0b6;
  --wp--preset--color--gold: #bd9472;
  --wp--preset--color--ocher: #c5b098;
  --wp--preset--color--light-ocher: #f3efea;
  --wp--preset--color--navy: #22659a;
  --wp--preset--color--text-color: #402e27;
  --wp--preset--color--text-navy-color: #343e50;
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
  --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
  --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
  --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
  --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
  --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
  --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
  --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
  --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
  --wp--preset--font-size--small: 13px;
  --wp--preset--font-size--medium: 20px;
  --wp--preset--font-size--large: 36px;
  --wp--preset--font-size--x-large: 42px;
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
.s {
}
#s {
}

</style>
<?php wp_enqueue_style('common.min', get_template_directory_uri() . '/inc/css/common.min.css',array(),'1.0','all'); ?>
<?php wp_enqueue_style('top.min', get_template_directory_uri() . '/inc/css/top.min.css',array(),'1.0','all'); ?>
<link rel='stylesheet' id='snow-monkey-editor-css'  href='http://sweethoney.great-site.net/css/app.css' type='text/css' media='all' />
<link rel="stylesheet" id="form-theme-css" href="http://sweethoney.great-site.net/wp-content/themes/babyssb/inc/css/form.min.css" type="text/css" media="all">
<link rel="stylesheet" id="my-block-style-css" href="http://sweethoney.great-site.net/wp-content/themes/babyssb/inc/css/block.min.css" type="text/css" media="all">
<link rel='stylesheet' id='fontawesome-css'  href='http://sweethoney.great-site.net/css/all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-css'  href='http://sweethoney.great-site.net/css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='owlcarousel-css'  href='http://sweethoney.great-site.net/css/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owlcarousel-theme-css'  href='http://sweethoney.great-site.net/css/owl.theme.default.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='basic-style-css'  href='http://sweethoney.great-site.net/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='sweet-alert-css'  href='http://sweethoney.great-site.net/css/sweetalert2.min.css' type='text/css' media='all' />
<link rel="canonical" href="https://www.babyssb.co.jp">
<link rel="icon" href="https://www.babyssb.co.jp/wp-content/uploads/2021/11/cropped-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.babyssb.co.jp/wp-content/uploads/2021/11/cropped-favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.babyssb.co.jp/wp-content/uploads/2021/11/cropped-favicon-180x180.png" />
<mta name="msapplication-TileImage" content="https://www.babyssb.co.jp/wp-content/uploads/2021/11/cropped-favicon-270x270.png" />
<script src="http://sweethoney.great-site.net/wp-content/themes/babyssb/js/idauth.js"></script>
<script src="http://sweethoney.great-site.net/wp-content/themes/babyssb/js/sweetalert.min.js"></script>
<script src="http://sweethoney.great-site.net/wp-content/themes/babyssb/js/jquery-3.6.0.min.js"></script>


</head>
<body class="store_info-template-default single single-store_info postid-114257 wp-embed-responsive text-lang_ja <?php if (is_page()) {echo "page";} ?>">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><header itemscope="itemscope" itemtype="https://schema.org/WPHeader" class="header-wrap navbar">
	<div class="container">
		<div class="navbar-site">
			<p class="navbar-brand"><a href="https://www.babyssb.co.jp/" class="link-after"><object data="http://sweethoney.great-site.net/images/logo.png" type="image/png" class="navbar-brand-svg"><img src="http://sweethoney.great-site.net/images/logo.png" alt="BABY, THE STARS SHINE BRIGHT" title="BABY, THE STARS SHINE BRIGHT"></object></a></p>
			<div class="navbar-site-lang_search">
				<div class="navbar-site-lang">
					<p class="text-lang_en"><i class="fas fa-globe-asia"></i>Language</p>
					<p class="navbar-site-lang-btn"><img src="https://www.babyssb.co.jp/wp-content/themes/babyssbThema/inc/images/header/btn-lang.png" alt="Language Button"></p>
					<dl>
						<dt><i class="fas fa-check-circle"></i>日本語</dt>
						<dd>
							<ul class="">
								<li class="text-lang_ja"><a href="http://sweethoney.great-site.net/">日本語</a></li>
								<li class="text-lang_en"><a href="http://sweethoney.great-site.net/en/">ENGLISH</a></li>
								<li class="text-lang_zh"><a href="http://sweethoney.great-site.net/zh/">简体中文</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="navbar-site-search">
					<p class="navbar-site-search-btn"><img src="https://www.babyssb.co.jp/wp-content/themes/babyssbThema/inc/images/header/btn-search.png" alt="Seacrh Button"></p>
					<div class="navbar-site-search-wrap"><form role="search" method="get" class="form-search" action="http://sweethoney.great-site.net/">
	<input type="text" placeholder="キーワード検索" value="" name="s" />
	<button type="submit" name="submit" id="searchsubmit" value="検索"><i class="fas fa-search"></i></button>
</form></div>
				</div>
			</div>
			<p class="navbar-site-online"><a href="http://sweethoney.great-site.net/wp-admin/" target="_blank"><img src="http://sweethoney.great-site.net/wp-content/themes/babyssb/images/onlinestore-header.png" alt="BABY, THE STARS SHINE BRIGHT オンラインストア"></a></p>
			<button class="header-nav-toggle"><span></span><span></span><span></span></button>
		</div>
		<div class="navbar-collapse" id="navbarContent">
			<ul class="navbar-nav" id="navbarNav">
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php if(is_home()){echo"current-menu-item";} ?> page_item page-item-108145 current_page_item active menu-item-112597 nav-item menuitem-page-home"><a title="トップページ" href="http://sweethoney.great-site.net/" class="nav-link"><span class="link-menu">HOME<span class="small">トップページ</span></span></a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112598 <?php if(is_page(74)){echo"current-menu-item";} ?> nav-item menuitem-page-brand"><a title="コンセプト" href="https://sweethoney.great-site.net/introduction" class="nav-link"><span class="link-menu">Love Diary<span class="small">ラブダイアリー</span></span></a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-112604 <?php if(is_page(164)){echo"current-menu-item";} ?> nav-item"><a title="お知らせ" href="http://sweethoney.great-site.net/galleryindex/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-112604"><span class="link-menu">Styling Gallery<span class="small">ラブダイアリー</span></span></a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-112604" role="menu">
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112670 nav-item menuitem-category-official_news"><a title="お知らせ" href="http://sweethoney.great-site.net/galleryindex/gallery-art/" class="dropdown-item"><span class="link-menu">Art</span></a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112672 nav-item menuitem-category-media"><a title="メディア" href="http://sweethoney.great-site.net/galleryindex/gallery-pho/" class="dropdown-item"><span class="link-menu">Photography</span></a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112671  nav-item menuitem-category-gallery"><a title="イベントレポート" href="http://sweethoney.great-site.net/galleryindex/gallery-pho/" class="dropdown-item"><span class="link-menu">Graphic Design</span></a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112669 nav-item menuitem-category-info"><a title="インフォメーション" href="http://sweethoney.great-site.net/galleryindex/gallery-twilight/" class="dropdown-item"><span class="link-menu">Twlight</span></a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item-108277 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-112605 <?php if(is_page(217)){echo"current-menu-item";} ?> nav-item"><a title="店舗からのお知らせ" href="http://sweethoney.great-site.net/category/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-112605"><span class="link-menu">Category Archives<span class="small">カテゴリーアーカイブ</span></span></a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-112604" role="menu">
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112670 nav-item menuitem-category-official_news"><a title="お知らせ" href="http://sweethoney.great-site.net/category/travel/" class="dropdown-item"><span class="link-menu">Travel</span></a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112672 nav-item menuitem-category-media"><a title="メディア" href="http://sweethoney.great-site.net/category/word/" class="dropdown-item"><span class="link-menu">World</span></a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112671  nav-item menuitem-category-gallery"><a title="イベントレポート" href="http://sweethoney.great-site.net/category/mdpios/" class="dropdown-item"><span class="link-menu">MDPI Linux OS</span></a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112669 nav-item menuitem-category-info"><a title="インフォメーション" href="http://sweethoney.great-site.net/category/update/" class="dropdown-item"><span class="link-menu">Update Log</span></a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112599 nav-item menuitem-page-shop_list"><a title="店舗一覧" href="https://www.babyssb.co.jp/shop_list/" class="nav-link"><span class="link-menu">Love Letter<span class="small">ラブレター</span></span></a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112601 nav-item menuitem-page-recruit"><a title="求人情報" href="http://sweethoney.great-site.net/gallery/" class="nav-link"><span class="link-menu">Life Daily<span class="small">生活日記</span></span></a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56 nav-item menuitem-page-contact"><a title="お問い合わせ" href="http://sweethoney.great-site.net/contact/" class="nav-link"><span class="link-menu">About<span class="small">アバウト</span></span></a></li>
			</ul>
			<p class="navbar-site-online"><a href="http://sweethoney.great-site.net/wp-admin/" target="_blank"><img src="http://sweethoney.great-site.net/wp-content/themes/babyssb/images/onlinestore-header.png" alt="BABY, THE STARS SHINE BRIGHT オンラインストア" title="BABY, THE STARS SHINE BRIGHT"></a></p>
		</div>
	</div>
</header>
	</head>