  <script type="text/javascript">function sgsc_url(){return "<?php echo plugin_dir_url(__FILE__); ?>";}</script>
<script type="text/javascript">function sgsc_reload(url){window.open(url,'_self');}</script>
<script type="text/javascript">function sgsc_load_error(){
alert('Unable to load the calculator. Either the calculator is deleted or calculator is not available. \n\n You can create a new one by clicking "create" from plugin menu.');
window.open('?page=WPBOX_SGSC_settings','_self');
}</script>
<?php 

 
if(isset($_GET['edit_sgsc'])){
	$calc_id = $_GET['edit_sgsc'];
	$sgsc_details = GET_SGSC($calc_id);
  
  if( sizeof($sgsc_details) > 0 ){
   $sgsc_details = $sgsc_details[0];

  $sgsc_calc_id = $sgsc_details["calc_id"];
	$sgsc_calc_name = $sgsc_details["title"];
  $sgsc_calc_date = $sgsc_details["date_created"];
  $sgsc_calc_gsheet = $sgsc_details["g_sheet"];
  
  }else{
  	  echo '<script type="text/javascript">sgsc_load_error();</script>';
  	  return 0;
  }
		
}else{
	$sgsc_calc_id = date('dmyHis');
	$sgsc_calc_date = date('M d, Y');
	$sgsc_calc_name = "untitled calc".date('dmy-His');

$data = array(
"calc_id"=> $sgsc_calc_id,
"title"=> $sgsc_calc_name,
"date_created"=> $sgsc_calc_date,
"g_sheet"=> '',
"input_tab"=> '',
"result_tab"=> ''
);


  if(get_sgsc_admin_records() >= get_sgsc_l() ){
      echo '<script type="text/javascript">sgsc_cal_error();</script>';
      return 0;
  }

  SGSC_RECORDS_ADD($data);
  $url = '?page=WPBOX_SGSC_settings&edit_sgsc='.$sgsc_calc_id;
  echo '<script type="text/javascript">sgsc_reload("'.$url.'")</script>';
}

	// echo "<pre>";print_r($sgsc_details);echo"</pre>";  return 0;

// echo "<pre>";print_r([get_sgsc_admin_records(),get_sgsc_l()]);echo"</pre>";


$config_json_data = '{}';
$sgsc_url = plugin_dir_url(__FILE__);

// $sgsc_json = __DIR__.'/save/jsons/'.$sgsc_calc_id.'-main.php';
// $sgsc_appearance = __DIR__.'/save/jsons/'.$sgsc_calc_id.'-app.php'; 
global $wpbox_save_dir;

$sgsc_json = $wpbox_save_dir.'/jsons/'.$sgsc_calc_id.'-main.php';
$sgsc_appearance = $wpbox_save_dir.'/jsons/'.$sgsc_calc_id.'-app.php'; 


if (file_exists($sgsc_json)){

$json_data = file_get_contents($sgsc_json);

if (SGSC_VALIDATE_JSON($json_data)) {
$config_json_data = $json_data;
if($config_json_data == '[]'){$config_json_data = '{}';}

}

}
?>

<script type="text/javascript">
function sgsc_calc_id(){return '<?php echo $sgsc_calc_id; ?>';}

localStorage.setItem('sgsc_calc_id'+sgsc_calc_id(), '<?php echo $sgsc_calc_id; ?>');
localStorage.setItem('sgsc_calc_date'+sgsc_calc_id(), '<?php echo $sgsc_calc_date; ?>');
localStorage.setItem('sgsc_calc_gsheet'+sgsc_calc_id(), '<?php echo $sgsc_calc_gsheet; ?>');

  function sgsc_calc_details(){
	var calc_name = $('#calc-name').val();
  
  var data = [
    
    localStorage.getItem('sgsc_calc_id'+sgsc_calc_id()),
    calc_name,
    localStorage.getItem('sgsc_calc_date'+sgsc_calc_id()),
    localStorage.getItem('sgsc_calc_gsheet'+sgsc_calc_id()),

    ];

	return data;}
</script>
<script type="text/javascript">function sgsc_url(){return '<?php echo $sgsc_url; ?>';}</script>
<script type="text/javascript">
	var sgsc_calc_config = <?php echo $config_json_data; ?>;
	console.log(sgsc_calc_config);
</script>



<div class="sgsc-main sgsc-card sgsc_mh sgsc-hide-">
	<div><?php include __DIR__.'/top-header.php'; ?></div>
	<div sgsc-view="calc" class="sgsc-hide*"><?php include __DIR__.'/STEPS/calc.php'; ?></div>
	<div sgsc-view="g-sheet" class="sgsc-hide"><?php include __DIR__.'/STEPS/g-sheet.php'; ?></div>
	<div sgsc-view="appearance" class="sgsc-hide"><?php include __DIR__.'/STEPS/appearance.php'; ?></div>
	
</div>


<style type="text/css">
	.sgsc-hide{
		display: none;
	}

	.sgsc-ellipsis-txt {
    text-overflow: ellipsis;
    white-space: nowrap;
    max-width: 287px;
    overflow: hidden;
    padding-top: 7px;
}
</style>

<style type="text/css">
  .tooltip{
    background-color:black;
    color: white;
    font-size: 12px;
    border: 1px solid black;
    font-family: var(--sgsc-default-font);
    border-radius: 4px;

    z-index: 999;
    max-width: 350px;
    padding: 8px;
  }

  .ui-widget.ui-widget-content {
    border: 1px solid #000000;
}

.ui-widget-shadow {
     -webkit-box-shadow: 0px 0px 0px #666666; 
     box-shadow: 0px 0px 0px #666666; 
}
</style>

<script type="text/javascript">
	$(document).on('click', '[sgsc-page]', function() {
  var pg =   $(this).attr('sgsc-page');
  $('[sgsc-page]').removeClass('sgsc-selected');
  $(this).addClass('sgsc-selected');
  
  $('[sgsc-view]').hide();
  $('[sgsc-view="'+pg+'"]').show('slow');

});

</script>

<script> $( function() { $( document ).tooltip(

{ tooltipClass: "tooltip", }

); } ); 

</script>

<script type="text/javascript">
  $( document ).ready(function() {
        // $('[sgsc-page="appearance"]').trigger('click');  
  });
</script>

<?php include __DIR__.'/js/dynamic-option-control-js.php'; ?>
<?php include __DIR__.'/js/save_config-js.php'; ?>
<?php include __DIR__.'/js/config-template-js.php'; ?>
<?php include __DIR__.'/js/popup-control-js.php'; ?>

<?php include __DIR__.'/js/g-sheet-js.php'; ?>
<?php include __DIR__.'/js/action-btns-js.php'; ?>
<?php include __DIR__.'/js/copy-js.php'; ?>



<?php include __DIR__.'/STEPS/components/config-css.php'; ?>

<?php include __DIR__.'/STEPS/CALCULATOR/dragger-input-js.php'; ?>
<?php include __DIR__.'/STEPS/CALCULATOR/dragger-results-js.php'; ?>