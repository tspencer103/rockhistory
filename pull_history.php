<?php
    require("class_db.php");
 
    $db = new Db();    
    if (is_bool($db) === TRUE) {
    	die("Unable to connect to database");
    }

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
           echo "Rock History for $tdate";
       }
    ?>
 </div>
</div>
<div class-"heading"></div>

<?php

	if($search) {
		$search  = "%" . $_POST[search] . "%";
		$result = $db->select("SELECT * FROM `RockHistory081512` WHERE history LIKE '$search' ORDER BY year"); 
	} else {	
		$result = $db->select("SELECT * FROM RockHistory081512 WHERE month = '$month' AND day = '$day' ORDER BY year");
	}

		        /* Got result? Display it.. as in return the data to Ajax */
			foreach($result as $row) {
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
			?>
</div>