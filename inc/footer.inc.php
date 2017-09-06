<?php 
function copyright_date($startYear = null) {
	$thisYear = date('Y');
    if (!is_numeric($startYear)) {
		$year = $thisYear;
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) {
		echo "$thisYear";
	} else {
		echo "$year&ndash;$thisYear";
	}   
 } 
?>
	<footer class="container-fluid">
		<div class="container text-light">
			<span> &copy; <?php copyright_date(2001); ?> <span class="logo"><span class="pleysier">Pleysier</span><span class="web">Web</span><span class="solutions">Solutions</span></span></span>
			<a href="text/humans.txt" class="pull-right"><img src="img/humanstxt-transparent-color.png" alt="humans.txt"></a>
		</div>
	</footer>
