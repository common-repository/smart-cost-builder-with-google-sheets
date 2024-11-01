<?php 
    
    $element_draw = 0;
    $step_3_mg_top = '-';

    foreach ($seq["results"] as $data) {
        
        if(!isset($main[$data])){continue;}

                // echo "<pre>";print_r($main[$data]);echo"</pre>";

        if($main[$data]["type"] == "section_break"){$element_draw = 1;}
        if($step_3_mg_top == '-' && isset($main[$data]["margin_top"])){
            $step_3_mg_top = $main[$data]["margin_top"]; 
        }

        if($element_draw == '1'){ echo create_element($main[$data]);  }

}


$app["step-3-mg-top"] = floatval($step_3_mg_top) > 0 ? $step_3_mg_top."px" : "40px";


?>




