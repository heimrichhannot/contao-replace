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

		if (!is_array($arrConfig)) return $strBuffer;

		preg_match('#(?<BTAG><body[^<]*>)(?<BCONTENT>.*)<\/body>#s', $strBuffer, $arrElements);

		if(!isset($arrElements['BTAG']) && !isset($arrElements['BCONTENT'])) return $strBuffer;

		$strTag = $arrElements['BTAG'];

		$strBody = $arrElements['BCONTENT']; // replace body content only

		foreach ($arrConfig as $name => $config)
		{
			if (!(isset($config['search']) && isset($config['replace']))) continue;

			$search = '#' . $config['search'] . '(?![^<]*>)#s'; // ignore html tags

			$strBody = preg_replace($search, $config['replace'], $strBody);
		}

		$strBuffer = preg_replace('#<body[^<]*>(?<BCONTENT>.*)<\/body>#s', $strTag . $strBody, $strBuffer);

		return $strBuffer;
	}

} 
