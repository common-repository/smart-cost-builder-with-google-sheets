<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter (e.g What is your monthly loan payment?)" value="" required></div>
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
	<div class="sgsc-i-label">Add Options (one per line)</div>
	<div>

<textarea class="sgsc-full-width" sgsc-comp="options" placeholder="option 1
option 2" required></textarea>

	</div>
</div>



<!-- ----------------------------------------------------	 -->
</div>



<div class="sgsc-flex-2">
<!-- ----------------------------------------------------	 -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Default Option (optional)</div>
	<div><input type="text" sgsc-comp="def_value"  placeholder="Enter" value=""></div>
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


<div style="height: 20px;"></div>
<p class="config-error">Unable to save. Fields with (*) are required.</p>

<button type="button" class="sgsc-btn"  onclick="sgsc_save_input(this);">Save <i class="fas fa-share-square"></i></button>
<button type="button" class="sgsc-btn sgsc-close">Close <i class="fas fa-window-close"></i></button>

