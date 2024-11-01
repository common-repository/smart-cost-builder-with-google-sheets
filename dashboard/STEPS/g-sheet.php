<div class="sgsc-sheet-connect">
	<form onsubmit="check_gsheet();return false;" id="sheet-config-form">
		
		<div class="sgsc-input-container">
			<div class="sgsc-label"><h2>Enter Google Sheet URL</h2></div>
			<div class="sgsc-field"><input type="text" class="sgsc-kzr sgsc-full-width" placeholder="https://docs.google.com/spreadsheets/d/1sdnsWkpZGl74PHO2A38Q/" id="gsheet-url" name="gsheet-url" required></div>
		</div>


		<div class="sgsc-input-container">
			<div class="sgsc-loader gsheet-loader" style="margin:auto;margin-bottom: 20px;display: none;"></div>
			<button type="submit" class="sgsc-btn" id="connect-sgsc">Connect <i class="fas fa-chevron-double-right"></i></button>
		</div>

	
	</form>


<?php 

	$img_dir =  plugin_dir_url(__FILE__); 
	$share_image = $img_dir."/../../../img/sharing-settings.png";
	$sgsc_link = $img_dir."/../../../img/sgsc-link-tab.png";
	$success_img = $img_dir."/../../../img/connect.svg";

	include __DIR__.'/SHEET_CONFIG/hint.php';

?>

</div>

<style type="text/css">
	.sgsc-hint-img{
		width: 600px;
	}

	.sgsc-pointer{cursor: pointer;}
</style>

<style type="text/css">
	.sgsc-sheet-connect{
		margin: auto;
		width: 100%;
		max-width: 900px;
		min-height: 500px;
		border-radius: 12px;
		background-color: white;
		margin-top: 20px;

		padding: 20px;
	}

	.sgsc-input-container{
		margin:auto;
/*		background-color: whitesmoke;*/
		max-width: 600px;
		text-align: center;
		margin-bottom: 20px;
	}

	.sgsc-label{
/*		padding: 12px;*/
/*		font-weight: 600;*/
	}

	.sgsc-field{

	}

	.sgsc-input-container input.sgsc-kzr[type="text"] {
    width: 100%;
    text-align: center;
    font-size: 11px;
}


.sgsc-input-container input.sgsc-kzr[type="text"]::placeholder{
   color: rgb(0, 0, 0, 0.2);
   font-size: 12px;
}

.sgsc-gsheet-error{
    font-size: 14px;
    padding: 13px;
    border-radius: 14px;
    color: black;
    text-align: left;
}

.red-error{
	    background-color: #ffe7e7;
}

.green-error {
    background-color: #f3ffe8;
    color: #36ad36;
    font-weight: 700;
    text-align: center;
}


</style>