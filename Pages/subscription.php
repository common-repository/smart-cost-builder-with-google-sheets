
<div class="sgsc-main small-cards sgsc-card" style="margin-top: 20px;margin-right: 10px;">
<h1>Subscription Details</h1>

<p>You are using free version of <b>Smart Cost Builder With Google Sheets</b>. </p>

<br>

<?php $loading_img_url = plugins_url('/../img/loader.gif',__FILE__) ?>


<table class="subsc-detail-table">
	
	<tr>
		<td>Subscription Plan:</td>
		<td>$0 / Month [01 Calculator]</td>
	</tr>

	
	<tr>
		<td>Today's usage:</td>
		<td sgsc-hits-usage="1"><img src="<?php echo $loading_img_url; ?>" class="sgsc-img-loader"></td>
	</tr>

	<tr>
		<td>Quota Resets in: </td>
		<td sgsc-quota-reset="1"><img src="<?php echo $loading_img_url; ?>" class="sgsc-img-loader"></td>
	</tr>

	<tr><td colspan="2" style="height: 20px;"></td></tr>


	<tr>
		<td colspan="2"><button type="button" data-action="manage-subscription" class="btn">Upgrade Subscription <i class="fas fa-angle-double-right"></i></button></td>
	</tr>
</table>


</div>



<script type="text/javascript">
	jQuery(document).on('click', '[data-action="manage-subscription"]', function() {
	  var url = "https://wppluginbox.com/en/smart-google-sheets-calculator-pro-pricing/?h_url=" + window.location.host;
	  window.open(url,"_blank");
	});
</script>

<script type="text/javascript">
	jQuery( document ).ready(function() {
		get_sgsc_usage();
	});
</script>


<style type="text/css">

	.sgsc-img-loader {
            height: 18px;
        }
        

	.btn {
    background-color: red;
    color: white;
    padding: 7px;
    border: 1px solid red;
    cursor: pointer;
    width: 200px;
    outline: none;
}


	.subsc-detail-table{
        width: 100%;
        max-width: 400px;
        font-weight: 500;
	}

	.sgsc-pro{
		color: #a40f0f;
		font-weight: bold;
	}
</style>

