<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter (e.g Estimated Cost)" value=""></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Hint / Tooltip</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="tooltip"  placeholder="Enter"  value=""></div>
</div>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Google Sheet Cell Mapping</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="cell_mapping"  placeholder="Enter"  value="" required></div>
</div>




<div style="height: 20px;"></div>
<p class="config-error">Unable to save. Fields with (*) are required.</p>

<button type="button" class="sgsc-btn"  onclick="sgsc_save_input(this);">Save <i class="fas fa-share-square"></i></button>
<button type="button" class="sgsc-btn sgsc-close">Close <i class="fas fa-window-close"></i></button>

