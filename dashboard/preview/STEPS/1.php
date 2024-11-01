<div class="round-corners" card="<?php echo $app["i_shadow"]; ?>">

<div>
<?php 
    foreach ($seq["inputs"] as $data) {
      if(!isset($main[$data])){continue;}

    // echo "<pre>";print_r($main[$data]);echo"</pre>";
        echo create_element($main[$data]);
}

?>


<!-- <center> -->
    <div style="margin: var(--checkbox-margin);max-width: 100px;">
    <div class="loader sgsc-load" style="display: none;margin:15px;"></div>
    </div>
<!-- </center> -->

</div>

</div>