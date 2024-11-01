<script type="text/javascript">
	$(document).on('click', '.sgsc-check-options .opt', function() {

		$(this).closest('.sgsc-check-options').find('.opt').removeClass('checked');
		$(this).addClass('checked');

        var v = $(this).attr('data-v');
		$(this).closest('[data-name]').attr('data-v',v).trigger('change');
	  
	});
</script>
<style type="text/css">
	.sgsc-check-options .opt{font-size: 14px;padding: 4px;vertical-align: middle;cursor: pointer;}
	.sgsc-check-options .opt:before{
	content: "\f0c8 \00a0";
    font-family: "Font Awesome 5 Pro";
    font-weight: 400;
    color: var(--sgsc-green);
	}

	.sgsc-check-options .opt.checked:before{
	content: "\f14a \00a0";
    font-family: "Font Awesome 5 Pro";
    font-weight: 900;
    color: var(--sgsc-green);
	}
</style>