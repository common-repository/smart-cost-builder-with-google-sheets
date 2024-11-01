<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter (e.g Your Estimated Cost)" value="" required></div>
</div>

<div class="sgsc-container-input" style="display:none;">
	<div class="sgsc-i-label">Description</div>
	<div><textarea class="sgsc-full-width" sgsc-comp="sub-title"  placeholder="Enter" value=""></textarea></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Hint / Tooltip</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="tooltip"  placeholder="Enter"  value=""></div>
</div>


<div class="sgsc-flex-2">
<!-- ------------------------------------------ -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Font Size (e.g 12px)</div>
	<div><input type="number" class="sgsc-full-width*" sgsc-comp="font_size"  placeholder="Enter"  value="12"></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Font Weight (e.g 600)</div>
	<div><input type="number" class="sgsc-full-width*" sgsc-comp="font_weight"  placeholder="Enter"  value="600"></div>
</div>

<!-- ------------------------------------------ -->
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Content Alignment</div>
	<div>
		<select sgsc-comp="align" exclude-reset="1"><?php echo sgsc_create_options_WV(
		$val='center###left###right###none',
		$txt='Center ### Left ### Right ### none',
		$def_val='none'); ?>	
		</select>
	</div>
</div>


<div style="height: 20px;"></div>
<p class="config-error">Unable to save. Fields with (*) are required.</p>

<button type="button" class="sgsc-btn"  onclick="sgsc_save_input(this);">Save <i class="fas fa-share-square"></i></button>
<button type="button" class="sgsc-btn sgsc-close">Close <i class="fas fa-window-close"></i></button>

