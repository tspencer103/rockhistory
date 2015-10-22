<html>
<title>Rock History</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(function() {
  $.ajax({
      type: "POST",
      url: "pull_history.php",
      data: "" + status,
      success: function(data){
          document.getElementById("demo").innerHTML = data;

      }
  });
});
</script>

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
</style>


</head>

<body>

<div class="Container">
<form id="reg-form" name="reg-form" method="post">
<select name="month"  id="month" placeholder="Month" size="1">
<?php
$mo = 1;
while($mo <= 12) {
    echo '<option value= "' . $mo . '">' . date("F", mktime(0, 0, 0, $mo+1, 0, 0)) . '</option><br>';
    echo "\n";
    $mo++;
}
?>
</select>
<select name="day" id="day" placeholder="Day" size="1">
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

</html>