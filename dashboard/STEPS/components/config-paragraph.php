<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title (Will not be visible on frontend)</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter" value=""></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">This paragraph will be a: <i class="fas fa-question-circle" title="Static paragraph will remain unchanged, while dynamic paragraph will update based on the content in the connected Google Sheet cell. Static paragraph will require you to manually enter the description while the dynamic paragraph will fetch the content from the mapped google sheet cell."></i></div>
	<div>
		<select sgsc-comp="para_type" dynamic-option="paragraph" exclude-reset="1"><?php echo sgsc_create_options_WV(
		$val='static###g-mapped',
		$txt='Static Paragraph ### Dynamic Paragraph (Google Sheet Cell Mapping)',
		$def_val='static'); ?>	
		</select>
	</div>
</div>


<div class="sgsc-container-input sgsc-hide-" sub-option="paragraph" option="0">
	<div class="sgsc-i-label">Description</div>
	<div><textarea class="sgsc-full-width" sgsc-comp="static_content"  placeholder="Enter" value=""></textarea></div>
</div>

<div class="sgsc-container-input sgsc-hide" sub-option="paragraph" option="1">
	<div class="sgsc-i-label">Google Sheet Cell Mapping</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="cell_mapping"  placeholder="Enter (e.g A1)"  value=""></div>
</div>

<div class="sgsc-flex-2">

<!-- ------------------------------------------ -->
<div class="sgsc-container-input">
	<div class="sgsc-i-label">Font Size (e.g 12px)</div>
	<div><input type="number" class="sgsc-full-width*" sgsc-comp="font_size"  placeholder="Enter"  value="14"></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Font Weight (e.g 600)</div>
	<div><input type="number" class="sgsc-full-width*" sgsc-comp="font_weight"  placeholder="Enter"  value="300"></div>
</div>
<!-- ---------------------------------------------- -->
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

