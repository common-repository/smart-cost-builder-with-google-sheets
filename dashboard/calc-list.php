<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


<div class="tb-list sgsc-main">
<h1>All Calculators </h1>
<?php 
if(isset($_GET['delete_sgsc'])){
SGSC_RECORDS_DELETE($_GET['delete_sgsc']);
SGSC_REMOVE_CALCULATOR($_GET['delete_sgsc']);	
}

$all_calc = GET_ALL_SGSC();
// echo "<pre>";print_r($all_calc);echo"</pre>";
?>
<div class="sgsc-responsive sgsc-scroll sgsc-sticky-header">
<table class="all-calc-list">
	<thead>
		<tr>
		<td>Title</td>
		<td>Date Created</td>
		<td>Google Sheet Linked</td>
		<td>Short Code</td>
		<td>Action</td>
	    </tr>
	</thead>
	<tbody>

<?php 

foreach ($all_calc as $data) {
	echo '

<tr>
		<td>'.$data["title"].'</td>
		<td>'.$data["date_created"].'</td>
		<td><span btn="action-link" data-url="'.$data["g_sheet"].'"></span></td>
		<td><xmp>[sgsc-calc id="'.$data["NO"].'"]</xmp></td>
		<td>
			<span btn="action-edit" calc-id="'.$data["calc_id"].'"></span>
			<span btn="action-delete" calc-id="'.$data["calc_id"].'" calc-name="'.$data["title"].'"></span>
			</td>
	    </tr>

	';
}

?>
		

		<?php //for($i=1;$i<=10;$i++){ ?>
		<!-- <tr>
		<td>Fitnedd Calculator</td>
		<td>May 15, 2024</td>
		<td><span btn="action-link"></span></td>
		<td><xmp>[sgsc-calc id="1"]</xmp></td>
		<td>
			<span btn="action-edit"></span>
			<span btn="action-delete"></span>
			</td>
	    </tr> -->

	<?php //} ?>
	</tbody>
</table>
</div>

</div>

<script type="text/javascript">
	$(document).on('click', '[btn="action-edit"]', function() {
	  var id = $(this).attr('calc-id');
	  var url = '?page=WPBOX_SGSC_settings&edit_sgsc='+id;
	  window.open(url,'_self');

	});


	$(document).on('click', '[btn="action-delete"]', function() {
	  var id = $(this).attr('calc-id');
	  var name = $(this).attr('calc-name')
	 
	 if(confirm('Are you sure, you want to delete calculator "'+name+'"?')){
	 	var url = '?page=WPBOX_SGSC_all_calc&delete_sgsc='+id;
	   window.open(url,'_self');
	 }
    


	});


	$(document).on('click', '[data-url]', function() {
	  var url = $(this).attr('data-url');
	  if(url == '-' || url == ''){console.log('invalid_link');return 0;}

	  url = 'https://docs.google.com/spreadsheets/d/' + url;

	  window.open(url,'_blank');
	});
</script>

<style type="text/css">
	.tb-list{
		padding: 20px;
		background-color: white;
	}

	.all-calc-list{
		width: 100%;
		text-align: center;
		border-collapse: collapse;
	}

.all-calc-list td{
   padding: 8px;
	}

	.all-calc-list thead td {
    background-color: #7d55ff;
    color: white;
}
</style>