<script type="text/javascript">
	$(document).on('click', '.img-options-sgsc .opt', function() {

		$(this).closest('.img-options-sgsc').find('[select-icon]').attr('select-icon',0);
		$(this).find('[select-icon]').attr('select-icon',1);

        var v = $(this).attr('data-v');
		$(this).closest('[data-name]').attr('data-v',v).trigger('change');
	  
	});
</script>

<style type="text/css">
	.img-options-sgsc{
		display: flex;
		gap:15px;
	}

	.opt-label{
		display: block;
	}
    
    .img-options-sgsc .opt img{width: 50px;}
    [select-icon="1"]:before,[select-icon="0"]:before{
    content: "\f058";
    font-family: "Font Awesome 5 Pro";
    font-weight: 900;
    display: block;
    height: 20px;
    color: var(--sgsc-green);

    }

    [select-icon="0"]:before{
    content: "";
    }

.img-options-sgsc .opt {
    padding: 8px;
    text-align: center;
    background-color: #00b1631a;
    border-radius: 12px;
    width: 100px;
    cursor: pointer;
}

	.main-div-sgsc{
		padding: 20px;
	}

	.appearance-table{
		width: 100%;
		max-width: 600px;
/*		margin: auto;*/
	}

	.sgsc-heading-txt{
		color: var(--sgsc-green);
		margin-top: 50px;

	}

	.sgsc-heading-txt:before{
		content: "\f0da \00a0";
		font-family: "Font Awesome 5 Pro";
        font-weight: 900;
	}
</style>