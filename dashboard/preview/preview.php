<?php 

$sgsc_id = $_GET['uid'];//'140724104508';

function getCurrentDirectoryUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $host = $_SERVER['HTTP_HOST'];

    $directory = dirname($_SERVER['SCRIPT_NAME']);

    $currentDirectoryUrl = $protocol . $host . $directory;

    if (substr($currentDirectoryUrl, -1) != '/') {
        $currentDirectoryUrl .= '';
    }

    return $currentDirectoryUrl;
}


// echo getCurrentDirectoryUrl();

$vx = rand(1,9999);
?>



<link rel="stylesheet" type="text/css" href="../../JS/sgsc-frame.css">
<script src="../../JS/sgsc-cuid.js?v=<?php echo $vx; ?>"></script>
<script src="../../JS/scripts_embed.js"></script>
<script src="../../JS/jquery.min.js"></script>
<script type="text/javascript">  jQuery = $.noConflict();    </script>

<div id="sgsc_calc__<?php echo $sgsc_id; ?>" style="text-align: center;">Loading...</div>

<script type="text/javascript">
	var app_url = "<?php echo getCurrentDirectoryUrl().'?preview=1&uid='.$sgsc_id; ?>" ;
	var embed = '<center><iframe class="sgsc-calc-frame" id="sgsc_calc_<?php echo $sgsc_id; ?>" src="'+app_url+'" scrolling="no" border="no" onload="iFrameResize()"></iframe></center>';
document.getElementById('sgsc_calc__<?php echo $sgsc_id; ?>').innerHTML = embed;
</script>

