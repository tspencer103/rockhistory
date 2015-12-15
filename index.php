<<<<<<< HEAD
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
=======
<html>
<title>Today in Rock History</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
<script>
$(function() {
  $.ajax({
      type: "POST",
      url: "pull_history.php",
      data: "" + status,
      success: function(data){
<<<<<<< HEAD
          document.getElementById("history").innerHTML = data;
=======
          document.getElementById("demo").innerHTML = data;
>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc

      }
  });
});
</script>

<<<<<<< HEAD
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
=======
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
				document.getElementById("demo").innerHTML = data;
				}
		});
		return false;
	});
});

</script>
<style type="text/css">
    body { background: #333333; }
    p
    {
    font-family: sans-serif;
    }
    .Table
    {
        display: Table;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
        background: #c6d4a8;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        //border: solid;
        //border-width: thin;
        padding: 15px;
    }
    div.row:nth-child(odd)
    {
		background: #daedb2;
    }
    div.row:nth-child(even)
    {
		background: #c6d4a8;
    }
    div.Container
    {
    	margin: auto;
    	width: 60%;
    	background: #5e6d3d;
    	padding: 10px;
    }
    select:required:invalid
    {
		color: #999;
	}
	option
	{
		color: #000;
	}

</style>


</head>

>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
<body>

<div class="Container">
<form id="reg-form" name="reg-form" method="post">
<<<<<<< HEAD
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
=======
<select name="month" required  id="month" placeholder="Month" size="1">
<option value="" disabled selected>Month</option>
<?php
$mo = 1;
while($mo <= 12) {
    echo '<option value= "' . $mo . '">' . date("F", mktime(0, 0, 0, $mo+1, 0, 0)) . '</option><br>';
    echo "\n";
    $mo++;
}
?>
</select>
<select name="day" required id="day" placeholder="Day" size="1">
<option value="" disabled selected>Day</option>
<?php
$da = 1;
while($da <= 31) {
    echo '<option value= "' . $da . '">' . date("j", mktime(0, 0, 0, 0, $da, 0)) . '</option><br>';
    echo "\n";
    $da++;
}
?>

 </select>
 <button type="submit" >Go</button>

 </form>

    <p id="demo"></p>

</div>

</body>

>>>>>>> 296b3c951a61abf376f563e28b3d89f0acac92fc
</html>