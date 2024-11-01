<?php 
function RAND_C($length=8){

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
  
    return $randomString;
}

function create_input($data){
global $sgsc_number_format;
// echo "<pre>";print_r($data);echo"</pre>";

$title = $data["title"];

$type= $data["type"];
$num_format= $sgsc_number_format == 'EU' ? 'EU' : 'US';
$cell_map= $data["cell_mapping"];
$unit= $data["unit"];
$unit_location= $data["unit_location"];
$min= $data["min_value"];
$max= $data["max_value"];
$def= $data["def_value"] !=='' ? $data["def_value"] : "";

$decimals= floatval($data["decimals"]);
$decimals= $decimals >= 0 ? $decimals : 0;

$required= $data["is_required"] == '1' ? 1 : 0;

$id = $cell_map;

$hint= '';
if($data["tooltip"] !==''){$hint= '<i class="fas fa-question-circle" title="'.$data["tooltip"].'"></i>';}

$lock_icon = $data["lock_icon"] == '1' ? '<i class="fad fa-lock"></i> ' : "";
$is_locked = $data["is_locked"] == '1' ? 'readonly' : "";

$html = '
<div class="input-block" ib="1">
<div class="input-container" red-border="0">
    <span class="input-label">'.$lock_icon.$title." ".$hint.'</span>
    
    <input type="text" class="khyzer fieldset-input" 
    data-cell="input-'.$id.'" 
    type="'.$data["type"].'"

    options="type:'.$data["type"].'"
    data-type="'.$data["type"].'"
    data-format="'.$num_format.'"
    data-unit="'.$unit.'"
    data-ul="'.$unit_location.'"
    data-min="'.$min.'"
    data-max="'.$max.'"
    data-def="'.$def.'"
    data-decimal="'.$decimals.'" 

    is-required="'.$required.'"
    placeholder="Enter" 
    value="" cell-v="-" '.$is_locked.'>

</div>

<span error="1" input-error="1">This field is required.</span>

</div>


';


return $html;
}


function select_options($opt,$def){
$html = '';

for($i=0;$i<sizeof($opt);$i++){

$s = '';
if(  strtolower(trim($opt[$i])) == strtolower(trim($def)) ){$s = 'selected';}

$html .= '<option value="'.$opt[$i].'" '.$s.'>'.$opt[$i].'</option>';
}

return $html;

}


function create_select($data){

// echo "<pre>";print_r($data);echo"</pre>";

$title = $data["title"];

$type= $data["type"];
$cell_map= $data["cell_mapping"];

$options=  $data["options"];
$def=  $data["def_value"];

$opt = explode("\n", $options);
$opt = select_options($opt,$def);
// echo "<pre>";print_r($opt);echo"</pre>";

$id = $cell_map;
$required= $data["is_required"] == '1' ? 1 : 0;


$hint= '';
if($data["tooltip"] !==''){$hint= '<i class="fas fa-question-circle" title="'.$data["tooltip"].'"></i>';}

$html = '
<div class="input-block" ib="1">

<div class="input-container">
    <span class="input-label">'.$title." ".$hint.'</span>
    <select class="khyzer fieldset-input" 
    data-cell="input-'.$id.'"
    options="type:'.$data["type"].'" 

    data-def="'.$def.'"
    cell-v=""

    is-required="'.$required.'">

      '.$opt.'
    
    </select>
</div>

<span error="1" input-error="1">This field is required.</span>

</div>

';


return $html;
}


function checkbox_options($opt,$def){
$html = '';

for($i=0;$i<sizeof($opt);$i++){

$s = '';
if(  strtolower(trim($opt[$i])) == strtolower(trim($def)) ){$s = 'checked';}

$html .= '<div class="checkbox-option '.$s.'" data-v="'.$opt[$i].'">'.$opt[$i].'</div>';
}

return $html;
}


function create_checkbox($data){

// echo "<pre>";print_r($data);echo"</pre>";

$title = $data["title"];

$type= $data["type"];
$cell_map= $data["cell_mapping"];

$options=  $data["options"];
$def=  $data["def_value"];

$opt = explode("\n", $options);
$opt = checkbox_options($opt,$def);
// echo "<pre>";print_r($opt);echo"</pre>";

$id = $cell_map;

$multi_select= $data["multi_select"];
$required= $data["is_required"] == '1' ? 1 : 0;



$hint= '';
if($data["tooltip"] !==''){$hint= '<i class="fas fa-question-circle" title="'.$data["tooltip"].'"></i>';}

$html = '
<div>
<div class="checkbox-container noselect" ib="1">
    <input type="hidden"  data-cell="input-'.$id.'" cell-v="" options="type:'.$data["type"].'" value="'.$def.'" is-required="'.$required.'">
    <span class="checkbox-label">'.$title." ".$hint.'</span>
    <div class="checkbox-list" selected-value="" multi-check="'.$multi_select.'" is-required="'.$required.'">
       
        '.$opt.'
    
    </div>

    <span error="1">This field is required.</span>
</div>
</div>

';


return $html;
}



function create_heading($data){

// echo "<pre>";print_r($data);echo"</pre>";
$title = $data["title"];
$style = 'font-weight:'.$data["font_weight"].';font-size:'.$data["font_size"].'px;text-align:'.$data["align"];

$hint= '';
if($data["tooltip"] !==''){$hint= ' <i class="fas fa-question-circle" title="'.$data["tooltip"].'"></i>';}


$html = '
<h2 class="h2" style="'.$style.'">'.$title.$hint.'</h2>
';

return $html;

}


function create_paragraph($data){

// echo "<pre>";print_r($data);echo"</pre>";


$static_content = $data["para_type"] == 'static' ? $data["static_content"] : "...";
$cell_map= $data["cell_mapping"];

$style = 'font-weight:'.$data["font_weight"].';font-size:'.$data["font_size"].'px;text-align:'.$data["align"];

$html_static = '
<p class="paragraph" style="'.$style.'">'.$static_content.'</p>
';

$html_mapped = '
<p class="paragraph" style="'.$style.'" id="'.$cell_map.'"  data-cell="'.$cell_map.'" options="type:'.$data["type"].'">...</p>';

return $html = $data["para_type"] == 'static' ? $html_static : $html_mapped;

}


function create_readonly($data){

// echo "<pre>";print_r($data);echo"</pre>";

$title = $data["title"];
$cell_map= $data["cell_mapping"];
$id = $cell_map;

$hint= '';
if($data["tooltip"] !==''){$hint= '<i class="fas fa-question-circle" title="'.$data["tooltip"].'"></i>';}

$html = '

<div class="result-container">
    <div><span class="result-label">'.$title." ".$hint.'</span></div>
    <div><span class="result-val" id="'.$id.'"  data-cell="'.$cell_map.'" options="type:'.$data["type"].'">...</span></div>
</div>

';


return $html;
}


function create_seperator($data){

$height= '';
$height = floatval( $data["height"] );
$height = $height > 0 ? $height : 20;


$html = '<div style="height:'.$height.'px;"></div>';


return $html;

}





function create_button($data){

$title = $data["title"];
$icon = $data["icon"];



$html = '
<div>
<button type="button" class="btn '.$icon.'">'.$title.'</button>
</div>
';


return $html;

}






?>