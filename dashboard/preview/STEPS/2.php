<?php 
    foreach ($seq["results"] as $data) {
        
        if(!isset($main[$data])){continue;}
        
        if($main[$data]["type"] == "section_break"){break;}

        // echo "<pre>";print_r($main[$data]);echo"</pre>";
        echo create_element($main[$data]);
}

        echo create_sgsr_calc__btn("sgsr-calc-button");


?>