<div style="height:25px;"></div>

<div class="sgsc-main sgsc-card create-card demo-page">

	<div calc-limit-error="<?php echo $lim; ?>">
		<p>You have reached your limit for creating calculators. Please consider <a href="?page=WPBOX_SGSC_subscription">upgrading your subscription plan.</a></p>

		<p>You can view your created calculators <a href="?page=WPBOX_SGSC_all_calc"> by clicking here.</a>. To create a new one, you can either delete an existing calculator or upgrade your subscription plan to increase your limit.</p>
	</div>

	<div style="height:100px;"></div>
	<h1 class="sgsc-space-1">Create New Calculator</h1>
	<div style="height:20px;"></div>
	<button type="button" class="sgsc-btn green-btn" action="create-calc">Create <i class="far fa-plus"></i></button>

	<div style="height:100px;"></div>
	<h2>Need help getting started?</h2>
    <h2 class="watch-video">Watch a Video <i class="fas fa-play-circle"></i></h2>

    <div style="height:40px;"></div>
	<a href="https://wppluginbox.com/en/sgsc-documentation/" target="_blank" style="text-decoration: none;color: var(--sgsc-green);font-size: 16px;border:1px solid var(--sgsc-green);padding: 12px;border-radius: 25px;">View Documentation <i class="fas fa-angle-double-right"></i></a>

</div>


<script type="text/javascript">
	$(document).on('click', '[action="create-calc"]', function() {
	  window.open('?page=WPBOX_SGSC_settings&create_new=1','_self');
	});

	$(document).on('click', '.watch-video', function() {
	  window.open('https://wppluginbox.com/en/sgsc-get-started','_blank');
	});
</script>

<style type="text/css">
	[calc-limit-error="0"]{display: none;}
	[calc-limit-error="1"]{
	padding: 23px;
    margin: auto;
    max-width: 400px;
    font-family: Arial;
    font-size: 14px;
    background-color: #ff000012;
    color: #ff0000c9;
    border-radius: 12px;
    margin-top: 24px;
    text-align: center;
	}
</style>
<style type="text/css">
	.create-card{
		padding: 20px;
		background-color: white;
		text-align: center;
		min-height: 500px;
		max-width: 90%;
		margin: auto;
	}

	.sgsc-space-1{
		margin: 10px;
	}

	.watch-video{
		color: var(--sgsc-green);
	}

	.watch-video:hover{
		text-decoration: underline;
		transform: scale(1.1);
		cursor: pointer;
	}

	.green-btn{border-radius: 25px;}
	.green-btn:hover{
		transform: scale(1.1);
		transition: 0.2s;
	}

	
</style>