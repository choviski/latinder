<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/Latinder Logo mobile.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Latinder</title>
    <style>
        /* BACKGROUND */
        body{
            width: 100%;
            height:100%;
            background-image: url("images/backgroundGradient.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;
        }
        #logo{
            width:100%;
        }
    </style>
</head>
<body class="container-fluid ">
    <div class="row d-flex justify-content-center">
        <div class=" col-md-6 col-sm10 text-center" style="margin-top: 10%;transform: translateY(-20%)">
            <img src="images/Latinder Logo.png"  class="mt-5 " id="logo">
            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </div>


</body>
</html>
<?php /**PATH C:\pogramas\latinder\resources\views////layouts/iniciais.blade.php ENDPATH**/ ?>