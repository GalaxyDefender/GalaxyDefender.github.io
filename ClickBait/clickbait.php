<?php
define("TITLE", "Honest Click Bait Headlines");
include("functions.php");

   if( isset($_POST["fix_submit"]) ) {
       checkForClickBait();
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE;?></title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <h1><?php echo TITLE?></h1>
        <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
        
        <div class="row">
            <form action="" class="col-sm-8 col-sm-offset-2" action="" method="post">
                <textarea placeholder="Paste click bait headline here" name="clickbait_headline" class="form-control input-lg"></textarea><br>
                <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
            </form>
        </div>
        
        <?php
            if (isset($_POST["fix_submit"])) {
                $clickBait = checkForClickBait()[0];
                $honestHeadline = checkForClickBait()[1];
                
                displayHonestHeadline($clickBait, $honestHeadline);
            }
        ?>
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>