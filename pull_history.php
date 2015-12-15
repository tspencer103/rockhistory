<?php

<<<<<<< HEAD

/* if not user selected mm/dd, get today's date, else set user choice */
=======
>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
if($_POST) {
	$month= $_POST['month'];
	$day= $_POST['day'];
} else {
	$month = date('n');
	$day = date('j');
}

<<<<<<< HEAD
/* The mm/dd formatted for display only */	
=======
>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
$tdate=date("F j", mktime(0, 0, 0, $month, $day, 0));

?>
<div class="Table">
<<<<<<< HEAD
    <div class="Title"><p id="title"><? echo "This Day in Rock History for $tdate" ?></p></div>
    <div class-"heading"></div>

<?php
	/* Query the database */
	$db = mysql_connect("localhost","babewe5_wlup", "lup234");
	mysql_select_db("babewe5_wlup",$db);
	$result = mysql_query("SELECT * FROM RockHistory081512 WHERE month=$month AND day=$day ORDER BY year",$db);

		/* Got result? Display it.. as in return the data to jQuery */
=======
    <div class="Title">
        <p><? echo "This Day in Rock History for $tdate" ?></p>
    </div>
    <div class-"heading">
    </div>

<?php
	$db = mysql_connect("localhost","user", "password");
	mysql_select_db("babewe5_wlup",$db);
	$result = mysql_query("SELECT * FROM RockHistory081512 WHERE month=$month AND day=$day ORDER BY year",$db);
>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
		if (!$result) { echo("ERROR: " . mysql_error() . "\n$SQL\n"); }
			while ($row = mysql_fetch_array ($result)) {
			?>

			<div class="Row">
        			<div class="Cell">
            				<p><? echo $row["year"] ?></p>
        			</div>
        			<div class="Cell">
<<<<<<< HEAD
            				<p><? echo $row["history"] ?></p>						
=======
            				<p><? echo $row["history"] ?></p>
>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
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
