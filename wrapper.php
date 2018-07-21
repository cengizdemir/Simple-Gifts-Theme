<section class="wrapper">
<?php
	$page=@$_GET['page'];

		if($page=='alerts-and-modals.html'){
		    include"alerts-and-modals.php";
		}
		elseif ($page=='buttons.html') {
		    include"buttons.php";
		}
		elseif ($page=='modal.html') {
		    include"modal.php";
		}
		elseif ($page=='typography.html') {
		    include"typography.php";
		}
		elseif ($page=='icons.html') {
		    include"icons.php";
		}
		elseif ($page=='layouts-and-grids.html') {
		    include"layouts-and-grids.php";
		}
		elseif ($page=='divide.html') {
		    include"divide.php";
		}


		elseif ($page=='horizontal-first.html') {
		    include"horizontal-first.php";
		}
		elseif ($page=='horizontal-second.html') {
		    include"horizontal-second.php";
		}
		elseif ($page=='vertical-first.html') {
		    include"vertical-first.php";
		}
		elseif ($page=='vertical-second.html') {
		    include"vertical-second.php";
		}
		elseif ($page=='vertical-third.html') {
		    include"vertical-third.php";
		}


		elseif ($page=='single-page-first.html') {
		    include"single-page-first.php";
		}
		elseif ($page=='single-page-second.html') {
		    include"single-page-second.php";
		}
	else
	{
	include('horizontal-first.php');
	}
?>
</section>
