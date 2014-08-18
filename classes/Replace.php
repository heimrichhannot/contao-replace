<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2014 Heimrich & Hannot GmbH
 * @package Replace
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\Replace;


class Replace
{
	public static function replace($strBuffer)
	{
		$arrConfig = deserialize(\Config::get('replace'), true);

		if(!is_array($arrConfig)) return $strBuffer;

		foreach($arrConfig as $name => $config)
		{
			if(!(isset($config['search']) && isset($config['replace']))) continue;

			$search = '#' . $config['search'] . '(?![^<]*>)#'; // ignore html tags

			$strBuffer = preg_replace($search, $config['replace'], $strBuffer);
		}

		return $strBuffer;
	}

} 