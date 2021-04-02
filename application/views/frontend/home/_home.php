<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <script src="<?= base_url(); ?>assets/js/jquery-1.11.2.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <style>
        body, html
            {
                margin: 0; padding: 0; height: 100%; overflow: hidden;
            }

            #content
            {
                position:absolute; left: 0; right: 0; bottom: 0; top: 0px; 
            }
    </style>

</head>
<body style="background-color: #000;"> 

    <div id="content">
        <iframe width="100%" height="100%" frameborder="0" src="https://itch.io/embed-upload/3580592?color=333333" />
    </div>


</body>
</html>