<!-- Rock History.  Author: Tim Spencer.  Original build October 1998 for use on Clear Channel Radio websites.
    12/4/15 Updated code to use jQuery and Ajax -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="rockhistory.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
<title>Today in Rock History</title>

<!-- Get today's history on page load -->
<script>
$(function() {
  $.ajax({
      type: "POST",
      url: "pull_history.php",
      data: "" + status,
      success: function(data){
          document.getElementById("history").innerHTML = data;

      }
  });
});
</script>

<!-- Get user selected mm/dd history on page load -->
<script>
$(document).ready(function()
{
    $(document).on('submit', '#reg-form', function()
    {

        var data = $(this).serialize();

        $.ajax({

        type : 'POST',
        url  : 'pull_history.php',
        data : data,
        success :  function(data)
                {
                document.getElementById("history").innerHTML = data;
                }
        });
        return false;
    });
});

</script>
</head>
<body>

<div class="Container">
<form id="reg-form" name="reg-form" method="post">
<select name="month" required  id="month" size="1">
<option value="" disabled selected>Month</option>
<?php
    /* build month selector */
    $mo = 1;
    while($mo <= 12) {
        echo '<option value= "' . $mo . '">' . date("F", mktime(0, 0, 0, $mo+1, 0, 0)) . '</option>';
        echo "\n";
        $mo++;
    }
?>
</select>
<select name="day" required id="day" size="1">
<option value="" disabled selected>Day</option>
<?php
    /* build day selector */
    $da = 1;
    while($da <= 31) {
        echo '<option value= "' . $da . '">' . date("j", mktime(0, 0, 0, 0, $da, 0)) . '</option>';
        echo "\n";
        $da++;
    }
?>
 </select>
 <button type="submit" >Go</button>
 </form>

 <!-- display results -->
 <p id="history"></p>

</div>
</body>
</html>