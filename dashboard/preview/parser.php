<?php
$uid = $_GET['uid'];

$sgsc_calc_id = $uid;//trim($data[0]);

$json_main = __DIR__.'/../../../../uploads/wpbox_sgsc_save/jsons/'.$sgsc_calc_id.'-main.php';
$json_seq = __DIR__.'/../../../../uploads/wpbox_sgsc_save/jsons/'.$sgsc_calc_id.'-sequence.php';
$json_app = __DIR__.'/../../../../uploads/wpbox_sgsc_save/jsons/'.$sgsc_calc_id.'-app.php';

if (!file_exists($json_main)) { echo 'ERROR_M <br>';$sgsc_error = 1;return 0;}
if (!file_exists($json_seq)) { echo 'ERROR_S <br>';$sgsc_error = 1;return 0;}
if (!file_exists($json_app)) { echo 'ERROR_A <br>';$sgsc_error = 1;return 0;}


$main = json_decode( file_get_contents($json_main) ,true );
$seq =  json_decode( file_get_contents($json_seq)  ,true );
$data =  json_decode( file_get_contents($json_app)  ,true );

// echo "<pre>";print_r([$main,$seq]);echo"</pre>";
// echo "<pre>";print_r($main);echo"</pre>";


?>