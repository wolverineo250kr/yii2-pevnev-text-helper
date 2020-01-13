# yii2-pevnev-text-helper
<p>
<h2>Install</h2>
<b>composer require "wolverineo250kr/yii2-pevnev-text-helper":"*"</b>
<h2>Usage</h2>
<br/>
To cut string to required length call in your Yii2 app following php command with following params:<br/>
<b>$string</b> - type <u>sting</u>. Text to cut (required).<br/>
<b>$length</b> - type <u>integer</u>. Length for a string. (required)<br/>
<b>$postfix</b> - type <u>sting</u>. Postfix to put in the end if string.<br/>
<b>$encoding</b> - type <u>sting</u>. Encode. Default UTF-8.<br/>
<br/>
<pre>
\wolverineo250kr\helpers\text\TextHelper::cut($string, $length, $postfix, $encoding);
</pre>
----------------------------------------------------------------------
<br/>
To convert string call in your Yii2 app following php command with following params:<br/>
<b>$string</b> - type <u>sting</u>. Text to cut (required).<br/>
<b>$replacement</b> - type <u>sting</u>. Character to replace all spaces. (Default '-')<br/>
<b>$lowercase</b> - type <u>boolean</u>. Whether to return the string in lowercase or not. Defaults to true.<br/> 
<br/>
<pre>
\wolverineo250kr\helpers\text\TextHelper::slug($string, $replacement, $lowercase);
</pre>
----------------------------------------------------------------------
<br/>
To transliterate string call in your Yii2 app following php command with following params:<br/>
<b>$string</b> - type <u>sting</u>. Text to cut (required).<br/>
<b>$languageFrom</b> - type <u>sting</u>. Language in. (Default 'EN')<br/>
<b>$languageTo</b> - type <u>boolean</u>. Language out. (Default 'RU')<br/> 
<br/>
<pre>
\wolverineo250kr\helpers\text\TextHelper::puntoSwitcher($string, $languageFrom, $languageTo);
</pre>
