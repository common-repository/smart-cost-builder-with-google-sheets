<h2 input-name="1">... {...}</h2>

<div class="sgsc-container-input">
	<div class="sgsc-i-label">Title</div>
	<div><input type="text" class="sgsc-full-width" sgsc-comp="title"  placeholder="Enter (e.g Estimated Monthly Loan Payment)" value="" required></div>
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

<button type="button" class="sgsc-btn"  onclick="sgsc_save_result(this);">Save <i class="fas fa-share-square"></i></button>
<button type="button" class="sgsc-btn sgsc-close">Close <i class="fas fa-window-close"></i></button>

<style type="text/css">
	.sgsc-flex-2{
		display: flex;
		gap: 20px;
	}

	.sgsc-flex-2 > div:nth-child(1){width: 50%}
	.sgsc-flex-2 > div:nth-child(2){width: 50%}

	.sgsc-container-input{
		margin-bottom: 10px;
	}

	.sgsc-container-input input,.sgsc-container-input select{
		width:100%;
		max-width: 200px;
	}

input.sgsc-full-width{
		width:100%;
		max-width: 450px;
	}

	.sgsc-container-input input::placeholder,.sgsc-container-input select::placeholder{
		font-size: 12px;
	}

	.sgsc-i-label{
		margin: 10px 0;
		font-weight: 600;
	}

	.sgsc-btn {
    background-color: var(--sgsc-green);
    padding: 9px;
    border: 1px solid var(--sgsc-green);
    color: white;
    width: 150px;
    font-family: var(--sgsc-default-font);
    cursor: pointer;
    font-size: 14px;
}

.sgsc-close {
    background-color: #e68888;
    border: 1px solid #e68888;
    color: #ffffff;
}
</style>