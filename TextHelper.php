<?php

namespace wolverineo250kr\helpers\text;

class TextHelper
{
	 /**
     * Cut string, puts postfix in the end
     *
     * @param string $string itself 
     * @param integer $length sets how long the string should be
     * @param string $postfix to put in the end if string
	 * @param string $encoding, default UTF-8
     *
     * @return string
     * @throws nothing
     */
    public static function cut(string $string, int $length, $postfix = '', $encoding = 'UTF-8'): string
    {
        $string = strip_tags($string);
        if (mb_strlen($string, $encoding) <= $length) {
            return $string; 
        }

        $resultString = mb_substr($string, 0, $length, $encoding);
        $resultString = mb_substr($resultString, 0, mb_strripos($resultString, ' ', 0, $encoding), $encoding).$postfix;

        if (!$postfix) {
            $resultString = rtrim($resultString, "!,.- ");
        }

        return $resultString;
    }
	
	 /**
		* Returns a string with all spaces 
		* converted to given replacement, 
		* non word characters removed and 
		* the rest of characters transliterated.
		*
		* @param string $string itself  
		* @param string $replacement is character to replace all spaces
		* @param boolean $lowercase whether to return the string in lowercase or not. Defaults to true.
		*
	*/
    public static function slug(string $string, $replacement = '-', $lowercase = true): string
    {
        return \wolverineo250kr\helpers\text\extended\Inflector::slug($string, $replacement, $lowercase);
    }
	
	/**
     * Corrects keyboard layout
     *
     * @param string $string itself  
     * @param string $languageFrom language in
	 * @param string $languageTo language out
     *
     * @return string
     * @throws nothing
     */	
    public static function puntoSwitcher(string $string, $languageFrom = 'EN', $languageTo = 'RU'): string
    {
        return \wolverineo250kr\helpers\text\extended\LayoutSwitch::puntoSwitch($string, mb_strtoupper($languageFrom), mb_strtoupper($languageTo));
    }
}
