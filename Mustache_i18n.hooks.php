<?php

/**
 * Hooks for Mustache_i18n extension
 *
 * @file
 * @ingroup Extensions
 */
class Mustache_i18nHooks
{

	public static function onExtensionLoad()
	{
		global $wgAutoloadLocalClasses;
		$wgAutoloadLocalClasses['TemplateParser'] = dirname( __FILE__ ) . '/TemplateParser.php';
	}

	/**
	 * @param OutputPage $out
	 */
	public static function onBeforePageDisplay( $out )
	{
		$out->addModules('ext.mustache_i18n.foo');
	}

}
