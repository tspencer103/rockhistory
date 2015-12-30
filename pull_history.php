<?php
if (array_key_exists("search",$_POST)) { 
    $search = TRUE;
} else {
   /* if not user selected mm/dd, get today's date, else set user choice */
    if($_POST) {
	$month= $_POST['month'];
	$day= $_POST['day'];
    } else {
	$month = date('n');
	$day = date('j');
    }
}

/* The mm/dd formatted for display only */	
$tdate=date("F j", mktime(0, 0, 0, $month, $day, 0));

?>
<div class="Table">
    <div class="Title"><div id="title">
    <?php
       if ($search) {
           echo "Search results for '" . $_POST['search'] . "'";
       } else {
           echo "This Day in Rock History for $tdate";
       }
    ?>
 </div>
</div>
<div class-"heading"></div>

<?php
	$db = mysql_connect("localhost","babewe5_wlup", "lup234");
	mysql_select_db("babewe5_wlup",$db);

	if($search) {
		$search  = "%" . $_POST[search] . "%";
		$result = mysql_query("SELECT * FROM `RockHistory081512` WHERE history LIKE '$search' ORDER BY year",$db);
	} else {	
		$result = mysql_query("SELECT * FROM RockHistory081512 WHERE month=$month AND day=$day ORDER BY year",$db);
	}

		/* Got result? Display it.. as in return the data to jQuery */
		if (!$result) { echo("ERROR: " . mysql_error() . "\n$SQL\n"); }
			while ($row = mysql_fetch_array ($result)) {
			?>

			<div class="Row">
        			<div class="Cell">
            				<p><? echo $row["year"] ?></p>
        			</div>
        			<div class="Cell">
            				<p><? echo $row["history"] ?></p>						
        			</div>
			</div>
			<?
			}
			mysql_free_result ($result);
			?>

<div class="Row">
     <div class="Cell">
     </div>
     <div class="Cell">
           <p><small>Copyright &copy; <? echo date("Y"); ?> <a href="/about">Tim Spencer</a></p>
     </div>
</div>
</div>