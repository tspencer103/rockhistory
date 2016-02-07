<?php

function __autoload($class_name) {
    if(file_exists($class_name . '.php')) {
        require_once($class_name . '.php');    
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}


try {
    $db = new Db();    
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

if (is_bool($db) === TRUE) {
      die("Unable to connect to database");
}

/* check for user search and sanitize if exists */
if (array_key_exists("search",$_POST)) { 
    $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
    $search_string = '%' . $search . '%';
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
           echo "Search results for '" . $search . "'";
       } else {
           echo "Rock History for $tdate";
       }
    ?>
 </div>
</div>
<!-- <div class-"heading"></div> -->

<?php

  if($search) {
    $result = $db->select("SELECT * FROM `RockHistory081512` WHERE history LIKE '$search_string' ORDER BY year"); 
  } else {  
    $result = $db->select("SELECT * FROM RockHistory081512 WHERE month = '$month' AND day = '$day' ORDER BY year");
  }

            /* Got result? Display it.. as in return the data to Ajax */
      foreach($result as $row) {
      ?>

      <div class="Row">
              <div class="Cell date">
                    <p><? 
                     if($search) { echo str_pad($row['month'], 2, "0", STR_PAD_LEFT) . '.' . str_pad($row['day'], 2, "0", STR_PAD_LEFT) . '.'; } 
                     echo $row["year"];
                    ?></p>
                     
              </div>
              <div class="Cell">
                    <p><? echo $row["history"] ?></p>           
              </div>
      </div>
      <?
      }
      ?>
</div>