<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter (e.g What is your monthly loan payment?)" value="" required></div>
</div>


<div class="sgsc-container-input">
	<div class="sgsc-i-label">icon</div>
	<div>
		<select sgsc-comp="icon"><?php echo sgsc_create_options_WV(
		$val='sgsc-calculator-icon ### sgsc-right-arrow-icon',
		$txt='Calculator Icon ### Right Arrow Icon',
		$def_val=''); ?>	
		</select>
	</div>
</div>



<div style="height: 20px;"></div>
<p class="config-error">Unable to save. Fields with (*) are required.</p>

<button type="button" class="sgsc-btn"  onclick="sgsc_save_input(this);">Save <i class="fas fa-share-square"></i></button>
<button type="button" class="sgsc-btn sgsc-close">Close <i class="fas fa-window-close"></i></button>

