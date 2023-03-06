
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .error {color: red;}
        .container{ margin: 15rem;}
    </style>
</head>

<body>
<div class="container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box picture">
      <?php echo ('<img src= "' . $_GET["photo"] . '" id="upload-img">'); ?>
    </div>
    <div class="box">
      <?php echo ("<p>Name<p>"); ?>
    </div>
    <div class="box">
      <?php echo ("<p>".$_GET["first-name"]." ".$_GET["last-name"]."<p>"); ?>
    </div>
    
    <div class="box">
      <?php echo ("<p>Email<p>"); ?>
    </div>
    <div class="box">
      <?php echo ("<p>" . $_GET["email"] . "<p>"); ?>
    </div>
    <div class="box">
      <?php echo ("<p>Address<p>"); ?>
    </div>
    <div class="box" >
      <?php echo ("<p>" . $_GET["address"] . "<p>"); ?>
    </div>
    <div class="box"></div>
  </div>

    <!-- <script src="test.js"></script> -->
</body>

</html>