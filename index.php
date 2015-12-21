<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="rockhistory.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="rockhistory.css" />
    <title>BETA Today in Rock History</title>
</head>

<body>

    <div id="header">
       <!--  <div class="inHeaderLeft"> -->
            <form id="reg-form" name="reg-form" method="post">
                <select name="month" required id="month" size="1">
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
                <button type="submit">Go</button>
            </form>
            <div class="headerText">ROCK AND ROLL HISTORY</div>
            
        <!-- </div> -->
        <!-- <div class="inHeaderRight">ROCK AND ROLL HISTORY</div> -->
    </div>

    <div id="content">


            <!-- display results -->
            <div id="history"></div>

            <br />

 
        <div class="clear"></div>
    </div>

</body>

</html>