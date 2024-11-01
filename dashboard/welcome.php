<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<?php 
if( isset($_GET['msg']) && $_GET['msg'] == 'lim' ){$lim = 1;}else{$lim = 0;}
if( isset($_GET['create_new']) || isset($_GET['edit_sgsc']) ){

	include __DIR__.'/dashboard.php';

}else{

	include __DIR__.'/demo.php';

}


?>