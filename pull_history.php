<?php


/* if not user selected mm/dd, get today's date, else set user choice */
if($_POST) {
	$month= $_POST['month'];
	$day= $_POST['day'];
} else {
	$month = date('n');
	$day = date('j');
}

/* The mm/dd formatted for display only */	
$tdate=date("F j", mktime(0, 0, 0, $month, $day, 0));

?>
<div class="Table">
    <div class="Title"><div id="title"><? echo "This Day in Rock History for $tdate" ?></div></div>
    <div class-"heading"></div>

<?php
	/* Query the database */
	$db = mysql_connect("localhost","babewe5_wlup", "lup234");
	mysql_select_db("babewe5_wlup",$db);
	$result = mysql_query("SELECT * FROM RockHistory081512 WHERE month=$month AND day=$day ORDER BY year",$db);

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
           <p><small>Copyright &copy; <? echo date("Y"); ?> Tim Spencer</p>
     </div>
</div>
</div>