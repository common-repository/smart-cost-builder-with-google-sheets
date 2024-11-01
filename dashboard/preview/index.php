<?php 
// echo "running...";return 0;
$sgsc_error = 0;
if(!isset($_GET['uid'])){echo "ERROR";return 0;} 


include __DIR__.'/parser.php';  
if($sgsc_error == '1'){echo "ERROR";return 0;}


// -------------------------------------------------
//            Applications Settings
//--------------------------------------------------
// echo "<pre>";print_r($data);echo"</pre>";
$app = [];

$app["color"] = '#8bc34a';
$app["flex"] = '1';
$app["cal-width"] = '900';
$app["center-align"] = '0';
$app["onload-calculate"] = '1';
$app["number_format"] = 'US';
$app["shadow"] = '';


if (strpos($data["sgsc-color"], '#') !== false) { $app["color"] =  trim( $data["sgsc-color"] ); }
if (strpos($data["sgsc-layout"], 'Vertical') !== false) { $app["flex"] = 0; }

$data["sgsc-calc-width"] = floatval($data["sgsc-calc-width"]);
if($data["sgsc-calc-width"] > 50){$app["cal-width"] = $data["sgsc-calc-width"];}

if($data["sgsc-contents-align"] > 50){$app["cal-width"] = $data["sgsc-calc-width"];}

$app["center-align"] = $data["sgsc-contents-align"] == '1' ? 1 : 0;
$app["onload-calculate"] = $data["sgsc-onload-calculate"] == '0' ? 0 : 1;
$app["number_format"] = "U"."S";

$sgsc_number_format = $app["number_format"];
$app["i_shadow"] = $data["sgsc-shadow"] == 'i' ? 1 : 0;
$app["w_shadow"] = $data["sgsc-shadow"] == 'c' ? 1 : 0;


$widths = [50,50];
if (strpos($data["sgsc-sections-width"], '-') !== false) {
	$w = explode("-", $data["sgsc-sections-width"]);
	$widths[0] = floatval($w[0]);
	$widths[1] = floatval($w[1]);
}


$app["left-width"] = $widths[0] > 0 ? $widths[0] : 50; 
$app["right-width"] = $widths[1] > 0 ? $widths[1] : 50; 


$app["slider-float"] = $app["center-align"] == '1' ? "auto" : "none";
$app["step-3-mg-top"] = "40px";


// ================ FREE INPUT CALCULATOR ==========
$app["hide-left"] = '0';
if($data["sgsc-input-free-calc"] == '1'){$app["left-width"] = 0;$app["right-width"] = 100;}
if($data["sgsc-input-free-calc"] == '1'){$app["hide-left"] = '1';}


$app["checkbox-margin"] = $app["center-align"] == '1' ? "auto" : "none";
$app["checkbox-max_w"] = $app["center-align"] == '1' ? "350px" : "100%";

include __DIR__.'/function.php';


// echo "<pre>";print_r($app);echo"</pre>";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $data["calc-title"]; ?></title>
<link rel="icon" href="../../img/icon.png" type="image/x-icon">
<link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/common.css?v=<?php echo rand(1,999); ?>">

<?php include __DIR__.'/head.php'; ?>
<?php include __DIR__.'/css/style.php'; ?>
<?php include __DIR__.'/css/elements-css.php'; ?>

<script type="text/javascript" src="Lib/formatter-js.js"></script>

<script type="text/javascript">function sgsc(){return "<?php echo base64_encode($data["sheet-id"]); ?>";}</script>
<script type="text/javascript">function calc_uid(){return "<?php echo $_GET['uid']; ?>";}</script>

</head>
<body>

<?php 
if(isset($_GET['preview']) && $_GET['preview'] == '1'){
?>

<h2 style="text-align: center;">Preview: <?php echo $data["calc-title"]; ?></h2>
<div style="height: 50px;"></div>

<?php } ?>


<div class="main" center-contents="1" calc-number-format="<?php echo $app["number_format"];?>">

<div class="error-msg"></div>


<div card="<?php echo $app["w_shadow"]; ?>" flexer="<?php echo $app["flex"]; ?>">
<div id="step-1" class="steps hide-" hide="<?php echo $app["hide-left"]; ?>" align-center="<?php echo $app["center-align"]; ?>"><?php include 'STEPS/1.php'; ?></div>
<div id="step-2" class="steps card- hide-"><?php include 'STEPS/2.php'; ?></div>
</div>


<div class="s3-spacer"></div>
<div id="step-3" class="steps"><?php include 'STEPS/3.php'; ?></div>


</div>


<script type="text/javascript" src="Lib/common-js.js"></script>

<script type="text/javascript" src="Lib/slider-js.js"></script>
<script type="text/javascript" src="Lib/checkbox-js.js"></script>
<script type="text/javascript" src="Lib/autofill-js.js"></script>
<script type="text/javascript" src="Lib/script-js.js?v=1.2"></script>


<script type="text/javascript">
$( document ).ready(function() {
	<?php if( $app["onload-calculate"] == '1' ){echo "submit_calc();";} ?>
});
</script>


<?php include 'css/root-update-css.php'; ?>

<div style="height:100px;"></div>
</body>
</html>