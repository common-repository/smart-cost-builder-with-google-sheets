<div id="sgsc-shortcode-modal" class="sgsc-modal">

  <div class="sgsc-modal-content">
    <span class="sgsc-modal-close">&times;</span>

    <h1>Short Code</h1>
    <p>To use this calculator on your webpage or post, use following shortcode:</p>
    <p><xmp>[sgsc-calc id="<?php echo get_sgsc_admin_db($sgsc_calc_id); ?>"]</xmp></p>
  
  </div>

</div>


<script type="text/javascript">
  $(document).on('click', '.sgsc-modal-close', function() {
    $('#sgsc-shortcode-modal').hide();
  });
</script>