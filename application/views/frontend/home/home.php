<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title?></title>
    <link href="<?php echo base_url().'assets/images/logo.png'?>" rel="shortcut icon">
    <link href="<?php echo base_url().'assets/images/logo.png'?>" rel="apple-touch-icon">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#downloadbtn').on('click', function(event) {        
            $('.content').show();
            $("#content").show();
            $(".container").hide();
            
            
        });
    });
        
    </script>

</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-flex justify-content-center hello">
                <div class="row">
                    <div class="col-12 procal">
                        <img src="<?= base_url(); ?>assets/images/logo.png" class="img-fluid logo shadow-lg rounded" alt="">
                    </div>
                    <div class="col-12 gretting">
                        <div class="col-lg-8 mx-auto">
                            <div class="card ">
                                <div class="card-body">
                                Terima kasih atas partisipasi anda
                                sebelum memulai permainan, silahkan klik tombol download di bawah ini.
                                <br><br>
                                Selamat Bermain!
                                </div>
                            </div>
                            <hr class="line">
                            <div class="download">
                                <a id="downloadbtn" href="<?php base_url();?>welcome/download" class="btn btn-secondary btn-lg btn-block btn-download"> <img src="<?= base_url(); ?>assets/images/download.png" class="img-download" alt=""><span>Download Flayer</span> </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div id="content" style="display: none;">
    <iframe width="100%" class="content" height="100%" frameborder="0" src="https://webly.id/games/html5/S26Procal/?color=333333"   style="border:0;display:none"/>
</div>



</body>
</html>