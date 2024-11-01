<div class="sgsc-top-header">

<div>
	<input type="text" id="calc-name" class="calc-title" placeholder="Enter Calc Name" value="<?php echo $sgsc_calc_name; ?>">
</div>


<div class="sgsc-h-1">

<span sgsc-page="appearance" class="sgsc-nav-items"><i class="far fa-palette"></i> Appearance & Settings </span>

<span sgsc-page="calc" class="sgsc-nav-items sgsc-selected"><i class="fas fa-cogs"></i> Configure Inputs / Results</span>

<span sgsc-page="g-sheet" class="sgsc-nav-items"><i class="fab fa-google"></i> Configure Google Sheet</span>

</div>	


<div class="sgsc-noselect">
<span class="sgsc-nav-items sgsc-btns-small" sgsc-action="preview"> Preview <i class="fas fa-eye"></i> </span>
<span class="sgsc-nav-items sgsc-btns-small" sgsc-action="embed"> Embed <i class="fas fa-code"></i></span>
<!-- <span class="sgsc-nav-items sgsc-btns-small" action="save-calc"> Save <i class="fas fa-save"></i></span> -->
</div>


</div>

<style type="text/css">
	input.calc-title[type="text"] {
    width: 100%;
    max-width: 350px;
    min-width: 259px;
    border: 0;
    border: 1px solid var(--sgsc-green);
    border-radius: 28px;
    font-size: 13px;
    text-align: center;
    color: var(--sgsc-green);
}

	.sgsc-h-1 {
    margin-left: 1%;
    font-size: 12px;
    font-weight: 400;
}

	.sgsc-top-header{
		display: flex;
		justify-content: space-between;
	}

	.sgsc-nav-items{
		display: inline-block;
		width: fit-content;
		padding: 12px;
		border-right: 1px solid #ebebeb;
		cursor: pointer;
	}

	.sgsc-nav-items[sgsc-page]:hover{
          transform: 0.2s;
          background-color: whitesmoke;
	}

	.sgsc-nav-items:last-child{border-right: 0px solid #ebebeb;}
	.sgsc-selected{border-bottom: 2px solid var(--sgsc-green);}

	.sgsc-btns-small{
		background-color: var(--sgsc-green);
		border:1px solid var(--sgsc-green);
		color: white;
		cursor: pointer;
	}
</style>