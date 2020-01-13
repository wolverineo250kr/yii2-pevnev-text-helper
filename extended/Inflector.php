<?php

namespace wolverineo250kr\helpers\text\extended;

class Inflector extends \yii\helpers\BaseInflector
{
    public static $transliterator = "Russian-Latin/BGN; Any-Latin; Latin-ASCII; [\u0080-\uffff] remove";

}