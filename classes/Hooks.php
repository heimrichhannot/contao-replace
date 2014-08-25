<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2014 Heimrich & Hannot GmbH
 * @package replace
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\Replace;


class Hooks extends Replace
{
	public function parseFrontendTemplateHook($strBuffer, $strTemplate)
	{
		return static::replace($strBuffer);
	}
}