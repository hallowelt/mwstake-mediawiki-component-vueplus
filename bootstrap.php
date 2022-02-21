<?php

if ( defined( 'MWSTAKE_MEDIAWIKI_COMPONENT_VUEPLUS_VERSION' ) ) {
	return;
}

define( 'MWSTAKE_MEDIAWIKI_COMPONENT_VUEPLUS_VERSION', '1.0.0' );

MWStake\MediaWiki\ComponentLoader\Bootstrapper::getInstance()
->register( 'rel135vue3shim', function () {
	$GLOBALS['wgHooks']['ResourceLoaderRegisterModules'][] = function ( $resourceLoader ) {
		$resourceLoader->register( [ 'mws.vueplus.tree-editor' => [
			'localBasePath' => __DIR__,
			// TBD
			]
		] );
		$resourceLoader->register( [ 'mws.vueplus.tile-view' => [
			'localBasePath' => __DIR__,
			// TBD
			]
		] );
	};
} );
