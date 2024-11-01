<div style="display: none;" data-element-template="1"><?php include __DIR__.'/../components/element-template.php'; ?></div>
<div style="display: none;" data-result-template="1"><?php include __DIR__.'/../components/result-template.php'; ?></div>



<div sgsc-calculator-html="1">

<?php 
// $sgsc_form = __DIR__.'/../../save/forms/'.$sgsc_calc_id.'.php';
$sgsc_form = $wpbox_save_dir.'/forms/'.$sgsc_calc_id.'.php';

if (file_exists($sgsc_form)) { include $sgsc_form;  }else{ //echo 'FILE_NOT_FOUND';
?>

<div class="sgsc-calc-flex">
<div class="sgsc-form-area"></div>
<div class="sgsc-result-area"></div>
</div>

<?php } ?>

</div>



<div><?php include __DIR__.'/../components/popup.php'; ?></div>
<div><?php include __DIR__.'/../components/shortcode-modal.php'; ?></div>


<style type="text/css">
  .sgsc-form-area:after {
    content: "Drag Input Elements here";
    font-family: var(--sgsc-default-font);
    color: #929292;
    position: absolute;
    margin: auto;
    margin-top: 1%;
    border: 1px dashed;
    padding: 20px;
    margin-left: -11%;

    z-index: 1;
}


.sgsc-result-area:after {
    content: "Drag Result Elements here";
    font-family: var(--sgsc-default-font);
    color: #929292;
    position: absolute;
    margin: auto;
    margin-top: 1%;
    border: 1px dashed;
    padding: 20px;
    margin-left: -11%;

    z-index: 1;
}

.sgsc-dropped-item {
    z-index: 2;
    position: relative;
}
</style>


<style type="text/css">
  .drag-over{
    border:2px dashed #8BC34A;
  }

  

  .sgsc-grey-txt{
        color: black;
        font-weight: 500;
    }

    .sgsc-form-area, .sgsc-result-area {
    border: 2px dashed #9e9e9e;
    background-color: #d3e3fd;
}

    [sgsc-calculator-html="1"]{
      padding: 5px;
    }
</style>

<style type="text/css">
  .sgsc-calc-flex{
    display: flex;
    gap: 10px;
  }

  .sgsc-calc-flex > div {
/*    border: 1px solid red;*/
    width: -webkit-fill-available;
}
</style>




