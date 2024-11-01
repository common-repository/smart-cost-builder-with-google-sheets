<?php 
function SGSC_IMG_OPTIONS($label,$img,$checked=0){

$checked = floatval($checked);
$checked = $checked == '1' ? 1 : 0;

$html = '
<div class="opt" data-v="'.$label.'">
<span select-icon="'.$checked.'"></span>
<img src="'.$img.'"> 
<span class="opt-label">'.$label.'</span>
</div>
';

return $html;
}


function SGSC_VALIDATE_JSON($jsonString) {
    json_decode($jsonString);
    return (json_last_error() === JSON_ERROR_NONE);
}

function sgsc_create_options($a,$s){
$arr = explode('###', $a);
$html = '';

for($i=0;$i<sizeof($arr);$i++){

$x = trim($arr[$i]);
$selected = '';
if($x == trim($s)){$selected = 'selected';}
$html .= '<option value="'.$x.'" '.$selected.'>'.$x.'</option>';

}

return $html;
}


function sgsc_create_options_WV($val,$txt,$def_val){
$val= explode('###', $val);
$txt= explode('###', $txt);
$html = '';

for($i=0;$i<sizeof($val);$i++){

$x = trim($val[$i]);
$txt[$i] = trim($txt[$i]);

$selected = '';

if($x == trim($def_val)){$selected = 'selected';}

$html .= '<option value="'.$val[$i].'" '.$selected.'>'.$txt[$i].'</option>';

}

return $html;
}

?>