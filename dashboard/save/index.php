<?php 

// echo '<pre>';print_r($_POST);echo'</pre>';
function removeExcessiveLineBreaks($html) {
    // Regular expression to match three or more consecutive line breaks
    $pattern = "/(\r?\n){3,}/";
    
    // Replace matches with a single line break
    $replacement = "\n\n"; // You can change this to "\n" if you only want a single line break

    // Perform the replacement
    $result = preg_replace($pattern, $replacement, $html);

    return $result;
}

// $_POST = [
// "calc_id" => "1",
// "json_config" => "2",
// "json_sequence" => "3",
// "html_config" => "4",
// "json_appearance" => "5"

// ];



$calc_id = $_POST['calc_id'];
$save_directory = __DIR__.'/../../../../uploads/wpbox_sgsc_save';

$json = $save_directory.'/jsons/'.$calc_id.'-main.php';
$json_data = $_POST['json_config'];

$seq_file = $save_directory.'/jsons/'.$calc_id.'-sequence.php';
$json_seq = $_POST['json_sequence'];

$html = $save_directory.'/forms/'.$calc_id.'.php';
$html_data = $_POST['html_config'];


$app_file = $save_directory.'/jsons/'.$calc_id.'-app.php';
$json_appearance = $_POST['json_appearance'];



$json_data = json_decode($json_data,true);
$json_data = json_encode($json_data, JSON_PRETTY_PRINT);

$file2write = fopen($json, "w") or die("Unable to open file!");
$text2write = $json_data;
fwrite($file2write, $text2write);
fclose($file2write);


$json_seq = json_decode($json_seq,true);
$json_seq = json_encode($json_seq, JSON_PRETTY_PRINT);

$file2write = fopen($seq_file, "w") or die("Unable to open file!");
$text2write = $json_seq;
fwrite($file2write, $text2write);
fclose($file2write);


$file2write = fopen($html, "w") or die("Unable to open file!");
$text2write = removeExcessiveLineBreaks($html_data);
fwrite($file2write, $text2write);
fclose($file2write);


$json_appearance = json_decode($json_appearance,true);
$json_appearance = json_encode($json_appearance, JSON_PRETTY_PRINT);

$file2write = fopen($app_file, "w") or die("Unable to open file!");
$text2write = $json_appearance;
fwrite($file2write, $text2write);
fclose($file2write);

// echo "Saved!";
?>