<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter (e.g What is your monthly income?)" value="" required></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Hint / Tooltip</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="tooltip"  placeholder="Enter"  value=""></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Google Sheet Cell Mapping</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="cell_mapping"  placeholder="Enter"  value="A1" required></div>
</div>


<div class="sgsc-flex-2">
<!-- ----------------------------------------------------	 -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Type</div>
	<div><select sgsc-comp="type" exclude-reset="1"><?php echo sgsc_create_options('Number###Text###Hidden','Number'); ?></select></div>
</div>


<div class="sgsc-container-input sgsc-hide" input-option*="Number">
	<div class="sgsc-i-label">Number Format</div>
	<div>
		<select sgsc-comp="number_format" exclude-reset="1">
		<?php echo sgsc_create_options_WV(
		$val='EU###US',
		$txt='EU (1.000,00)###US (1,000.00)',
		$def_val='US'); ?>	
		</select>
	</div>
</div>

<!-- ----------------------------------------------------	 -->
</div>


<div class="sgsc-flex-2" input-option="Number">
<!-- ----------------------------------------------------	 -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Currency / Unit</div>
	<div><input type="text" sgsc-comp="unit"  placeholder="Enter (kg, mm , $)" value=""></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Currency / Unit Location </div>
	<div>
		<select sgsc-comp="unit_location" exclude-reset="1">
		<?php echo sgsc_create_options_WV(
		$val='Right###Left',
		$txt='On Right###On Left',
		$def_val='Left'); ?>
		</select></div>
</div>

<!-- ----------------------------------------------------	 -->
</div>

<div class="sgsc-flex-2" input-option="Number">
<!-- ----------------------------------------------------	 -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Min Value</div>
	<div><input type="text" sgsc-comp="min_value"  placeholder="Enter (e.g 10)" value=""></div>
</div>


<div class="sgsc-container-input">
	<div class="sgsc-i-label">Max Value</div>
	<div><input type="text" sgsc-comp="max_value"  placeholder="Enter (e.g 1000)" value=""></div>
</div>

<!-- ----------------------------------------------------	 -->
</div>

<div class="sgsc-flex-2" input-option="Number">
<!-- ----------------------------------------------------	 -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Default Value</div>
	<div><input type="text" sgsc-comp="def_value"  placeholder="Enter" value=""></div>
</div>


<div class="sgsc-container-input">
	<div class="sgsc-i-label">Decimal Places</div>
	<div><input type="number" sgsc-comp="decimals"  placeholder="1" value="0" exclude-reset="1"></div>
</div>

<!-- ----------------------------------------------------	 -->
</div>


<div class="sgsc-container-input">
	<div class="sgsc-i-label">Required Field?</div>
	<div>
		<select sgsc-comp="is_required" exclude-reset="1">
		<?php echo sgsc_create_options_WV(
		$val='0###1',
		$txt='No###Yes',
		$def_val='0'); ?>	
		</select>
	</div>
</div>




<div class="sgsc-flex-2" input-option="Number">
<!-- ----------------------------------------------------	 -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Locked Field?</div>
	<div>
		<select sgsc-comp="is_locked" exclude-reset="1">
		<?php echo sgsc_create_options_WV(
		$val='0###1',
		$txt='No###Yes',
		$def_val='0'); ?>	
		</select>
	</div>
</div>


<div class="sgsc-container-input">
	<div class="sgsc-i-label">Show Lock Icon</div>
	<div>
		<select sgsc-comp="lock_icon" exclude-reset="1">
		<?php echo sgsc_create_options_WV(
		$val='0###1',
		$txt='No###Yes',
		$def_val='0'); ?>	
		</select>
	</div>
</div>

<!-- ----------------------------------------------------	 -->
</div>



<div style="height: 20px;"></div>
<p class="config-error">Unable to save. Fields with (*) are required.</p>
<button type="button" class="sgsc-btn"  onclick="sgsc_save_input(this);">Save <i class="fas fa-share-square"></i></button>
<button type="button" class="sgsc-btn sgsc-close">Close <i class="fas fa-window-close"></i></button>

