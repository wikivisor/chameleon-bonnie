<?php

$wgLogos = [
    '1x' => 'w/extensions/wikivisor/skins/chameleon/images/logo.png',
];
$wgFavicon = 'w/extensions/wikivisor/skins/chameleon/favicon/favicon.ico';

// Customization
wfLoadExtension( 'Bootstrap' );
$wgDefaultSkin='chameleon';
$egChameleonLayoutFile= $IP . '/extensions/wikivisor/skins/chameleon/layouts/custom.xml';
$egChameleonExternalStyleModules = [
	$IP . '/extensions/wikivisor/skins/chameleon/custom.scss' => 'afterMain',
];
$egChameleonExternalStyleVariables = [
    'font-family-base' => '"Helvetica Neue", sans-serif',
    'font-weight-bold' => '500',
    'font-weight-bolder' => '700',
    'font-size-base' => '1.15rem',
    'border-radius' => '10px',
    'cmln-first-heading-underline-color' => 'transparent',
    'container-max-widths' => '(sm: 1400px, md: 1400px, lg: 1400px, xl: 1400px)',
];
$wgAllowSiteCSSOnRestrictedPages = true;

// Load resources
$wgHooks['BeforePageDisplay'][] = function( $out, $skin ) {
     $code = <<<'START_END_MARKER'
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="72x72" href="/w/extensions/wikivisor/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/w/extensions/wikivisor/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/w/extensions/wikivisor/favicon/favicon-16x16.png">
<link rel="manifest" href="/w/extensions/wikivisor/favicon/site.webmanifest">
<link rel="mask-icon" href="/w/extensions/wikivisor/favicon/safari-pinned-tab.svg" color="#3ca4a4">
<link rel="shortcut icon" href="/w/extensions/wikivisor/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#ff0000">
<meta name="msapplication-config" content="/w/extensions/wikivisor/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
START_END_MARKER;
     $out->addHeadItem( 'head-tags-load', $code );
};
