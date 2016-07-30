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

}
