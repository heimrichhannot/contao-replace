<?php


$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][]  = array('HeimrichHannot\Replace\Hooks', 'parseFrontendTemplateHook');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('HeimrichHannot\Replace\Hooks', 'outputFrontendTemplateHook');

$GLOBALS['TL_REPLACE'] = array();