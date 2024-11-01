<script type="text/javascript">
	function sgsc_app_settings(id,val){

		console.log(id,val);
        var e = $('[data-name="'+id+'"]');
        
        if ( e.is('input') || e.is('select') ) {
        
        $('[data-name="'+id+'"]').val(val);
		$('[data-name="'+id+'"]').attr('data-v',val);
		
		}


		if (e.hasClass('img-options-sgsc')) {
			e.find('[data-v="'+val+'"]').trigger('click');
 
		}


		if (e.hasClass('sgsc-check-options')) {
			e.find('[data-v="'+val+'"]').trigger('click');
 
		}


		$('[data-name="sgsc-color"]').trigger('change');
                                
	}


<?php 

if (file_exists($sgsc_appearance)){

$app_data = file_get_contents($sgsc_appearance);
$app_data = json_decode($app_data,true);

// echo "<pre>";print_r($app_data);echo"</pre>";

foreach ($app_data as $key => $value) {
	// echo "<pre>";print_r([$key,$value]);echo"</pre>";
	echo "sgsc_app_settings(`$key`,`$value`);";

}

}
?>
</script>

<?php 
// echo "<pre>";print_r($app_data);echo"</pre>";

?>


<script type="text/javascript">
	$( document ).ready(function() {
	 $('[data-name="sgsc-input-free-calc"]').trigger('change');
	});
</script>