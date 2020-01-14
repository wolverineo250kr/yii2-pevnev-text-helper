<?php

namespace wolverineo250kr\helpers\text\extended;

class LayoutSwitch extends \yii\helpers\BaseInflector {

    const LANG = [
        'ru' => [
            "Й", "Ц", "У", "К", "Е", "Н", "Г", "Ш", "Щ", "З",
            "Ф", "Ы", "В", "А", "П", "Р", "О", "Л", "Д",
            "Я", "Ч", "С", "М", "И", "Т", "Ь", "Х", "Ъ",
            "й", "ц", "у", "к", "е", "н", "г", "ш", "щ", "з", "х", "ъ",
            "ф", "ы", "в", "а", "п", "р", "о", "л", "д", "ж", "э",
            "я", "ч", "с", "м", "и", "т", "ь", "б", "ю"
        ],
        'en' => [
            "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P",
            "A", "S", "D", "F", "G", "H", "J", "K", "L",
            "Z", "X", "C", "V", "B", "N", "M", "{", "}",
            "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "[", "]",
            "a", "s", "d", "f", "g", "h", "j", "k", "l", ";", "'",
            "z", "x", "c", "v", "b", "n", "m", ",", "."
        ]
    ];

    public static function puntoSwitch($string, $languageFrom, $languageTo): string {
        $string = str_replace(self::LANG[mb_strtolower($languageFrom)], self::LANG[mb_strtolower($languageTo)], $string);

        return $string;
    }
}
