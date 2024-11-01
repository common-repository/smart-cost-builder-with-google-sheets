<div class="main-div-sgsc">
<?php 
$icon_url = plugins_url('', __DIR__)."/../icons/";
?>

<form id="calc-appearance-settings-form">
<h2 class="sgsc-heading-txt">Input Free Calculator</h2>
<table class="appearance-table">
<tr>
	<td>Is it input free calculator? <i class="fas fa-question-circle" title="This feature allows you to create a calculator that requires no input elements such as text fields, checkboxes, or selects. It's perfect for displaying fresh data directly from your Google Sheets without requiring user interaction. You can showcase your data in dynamic formats like charts, tables, images, and more, providing a seamless and interactive experience for your users."></i></td>
	<td><select class="sgsc-full-width" data-name="sgsc-input-free-calc" data-v="0">
		<?php echo sgsc_create_options_WV(
		$val='1###0',
		$txt='Yes ### No',
		$def_val='0'); ?>	
		</select>
</td>
</tr>
</table>


<h2 class="sgsc-heading-txt">Theme & Formatting</h2>
<table class="appearance-table">
<tr>
	<td>Number Format <span class="sgsc-pro-icon"></span></td>
	<td>
		<select data-name="number_format" data-v="US" exclude-reset="1">
		<?php echo sgsc_create_options_WV(
		$val='EU###US',
		$txt='EU (1.000,00)###US (1,000.00)',
		$def_val='US'); ?>	
		</select>
	</td>
</tr>

<tr>
	<td>Theme Color</td>
	<td>
		<input type="text" class="sgsc-full-width" placeholder="" data-name="sgsc-color" data-v="#00b163" value="#00b163" required>
		<input type="Color" id="sgsc-color-picker" value="#00b163">
	</td>
</tr>


<tr>
<td>Auto Calculate On Load</td>
<td><select class="sgsc-full-width" data-name="sgsc-onload-calculate" data-v="1">
		<?php echo sgsc_create_options_WV(
		$val='1###0',
		$txt='Yes ### No',
		$def_val='0'); ?>	
		</select>
</td>
</tr>
</table>



<h2 class="sgsc-heading-txt">Layout</h2>

<table class="appearance-table">
<tr><td colspan="2">
	
<div class="img-options-sgsc" data-name="sgsc-layout" data-v="Horizontal">
<?php 
echo SGSC_IMG_OPTIONS($label="Horizontal",$img=$icon_url."horizontal-icon.png",$checked="1"); 
echo SGSC_IMG_OPTIONS($label="Vertical",$img=$icon_url."vertical-icon.png",$checked="0"); 
?>
</div>

</td></tr>

<tr><td colspan="2" style="height: 40px;"></td></tr>

<tr sgsc-tr-id="sections-width">
<td>Sections Width (Left / Right) <i class="fas fa-question-circle" title="This controls width of left and right sides."></i> </td>
<td><select class="sgsc-full-width" data-name="sgsc-sections-width" data-v="50-50">
		<?php echo sgsc_create_options_WV(
		$val='50-50 ### 30-70 ### 40-60 ### 60-40',
		$txt='50% / 50% ### 30% / 70% ### 40% / 60% ### 60% / 40%' ,
		$def_val='50-50'); ?>	
		</select>
</td>
</tr>



<tr>
<td>Max Calculator Width (i.e 1200px) <i class="fas fa-question-circle" title="By default, calculator width is set to 900px"></i></td>
<td><input type="number" class="sgsc-full-width" data-name="sgsc-calc-width" data-v="900" value="900" placeholder="900" required></td>
</tr>

<tr>
<td>Align Contents to Center</td>
<td><select class="sgsc-full-width" data-name="sgsc-contents-align" data-v="1">
		<?php echo sgsc_create_options_WV(
		$val='1###0',
		$txt='Yes ### No',
		$def_val='No'); ?>	
		</select>
</td>
</tr>


</table>


<h2 class="sgsc-heading-txt">Shadow</h2>

<table class="appearance-table">
<tr><td colspan="2">
	
<div class="sgsc-check-options" data-name="sgsc-shadow" data-v="i">
 
 <div class="opt checked" data-v="i">Apply to Input Section Only</div>
 <div class="opt" data-v="c">Apply to Entire Calculator</div>
 <div class="opt checked" data-v="nill">No Shadow</div> 

</div>

</td></tr>

</table>


</form>
</div>


<script type="text/javascript">
	$(document).on('change', 'input[data-name],select[data-name]', function() {
	  $(this).attr('data-v',this.value);
	});


	$(document).on('change', '[data-name="sgsc-color"]', function() {
	  $('#sgsc-color-picker').val(this.value);
	});

	$(document).on('change', '#sgsc-color-picker', function() {
	  $('[data-name="sgsc-color"]').val(this.value);
	  $('[data-name="sgsc-color"]').attr('data-v',this.value);

	  $('[data-name="sgsc-color"]').trigger('change');
	});
</script>

<script type="text/javascript">
	$(document).on('click', '[data-name="sgsc-layout"]', function() {
		var v = $(this).attr('data-v');
		var tr = $('[sgsc-tr-id="sections-width"]');
		// console.log(v);
		if(v == "Horizontal"){tr.show("slow");}else{tr.hide();}

	});


$(document).on('change', '[data-name="sgsc-input-free-calc"]', function() {
  var input_area = $('[sgsc-calculator-html="1"] .sgsc-form-area');
  var v = $(this).attr('data-v');

  if(v == '0'){input_area.show();}else{input_area.hide();}
});
	
</script>

<script type="text/javascript">
    $( document ).ready(function() {
    $('.sgsc-pro-icon').attr("title","Go pro to unlock it.");
    });

   $(document).on('change', '[data-name="number_format"]', function() {
      $(this).val("US");$(this).attr("data-v","US");
      alert("Try pro to unlock this feature");
    });
    
</script>


<style type="text/css">
	#calc-appearance-settings-form input[type="text"],
	#calc-appearance-settings-form input[type="number"],
	#calc-appearance-settings-form select{
		width: 150px;
	}
</style>

<?php include __DIR__.'/img-options.php'; ?>
<?php include __DIR__.'/check-options.php'; ?>
<?php include __DIR__.'/load-default-appearance.php';?>


