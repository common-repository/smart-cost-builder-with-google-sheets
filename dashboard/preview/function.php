<?php

include __DIR__.'/all-elements.php';

function create_element($data){
    // echo "<pre>";print_r($data);echo"</pre>";

$type = $data["type"];

if($type == 'Number' || $type == 'Text' || $type == 'Hidden'){return create_input($data);}

if($type == 'select'){return create_select($data);}
if($type == 'checkbox'){return create_checkbox($data);}

if($type == 'heading'){return create_heading($data);}
if($type == 'paragraph'){return create_paragraph($data);}

if($type == 'readonly'){return create_readonly($data);}
if($type == 'date'){return create_date($data);}


if($type == 'seperator'){return create_seperator($data);}
if($type == 'button'){return create_button($data);}

if($type == 'button'){return create_button($data);}
if($type == 'table'){return create_table($data);}
if($type == 'img'){return create_image($data);}

if($type == 'slider'){return create_slider($data);}

if($type == 'linechart'){return create_linechart($data);}
if($type == 'piechart'){return create_piechart($data);}



}




function LIST_2_ARRAY($txt){


if (strpos($txt, "\n") !== false) { 
$txt = explode("\n", $txt);

$d = [];
for($i=0;$i<sizeof($txt);$i++){

array_push($d, trim($txt[$i])  );

 }

return $d;

}

return trim($txt);

}


function create_sgsr_calc__btn($data){
    return '<div class="sgsr_green_txt"></div>';
}








?>



