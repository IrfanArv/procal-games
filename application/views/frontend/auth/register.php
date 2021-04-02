<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/iofrm-style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/iofrm-theme4.css">
    <link href="<?php echo base_url(); ?>assets/login/ladda-themeless.min.css" rel="stylesheet">

    <script src="<?= base_url(); ?>assets/js/jquery-1.11.2.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/spin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/ladda.min.js"></script>

  <script type="text/javascript">
    $(function () {
    $(".form-signin").on('submit',function(){ 
    $(".resultregist").html("<div class='alert alert-inverse loading '>Tunggu...</div>");
    $.post("<?php echo base_url().$this->uri->segment(1);?>Welcome/register",$(".form-signin").serialize(), function(response){
    var resp = $.parseJSON(response);
    console.log(resp);
    if(!resp.status){
    $(".resultregist").html("<div class='alert alert-danger loading '>"+resp.msg+"</div>");
    }else{
    $(".resultregist").html("<div class='alert alert-success login '>Mengalihkan, Mohon Tunggu...</div>");
    window.location.replace(resp.url);
    }
    }); });
    
     });
  </script>


</head>
<body>
    <div class="form-body">
        
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                  <img src="<?= base_url(); ?>assets/images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="mb-3">Hai, Selamat Datang</h3>
                        
                        <form method="POST" class="form-signin form-horizontal" role="form" onsubmit="return false;">
                            <input type="text" name="name" placeholder="Nama Lengkap " required="" autofocus="" class="form-control">
                            <input type="email" name="email" placeholder="Alamat Email " required="" autofocus="" class="form-control">
                            <input type="number" name="phone" placeholder="Nomor Telepon " required="" autofocus="" class="form-control">
                            <div class="form-button">
                                <button type="submit" class="ibtn ladda-button">Mainkan Game</button>
						        <div style="margin-top:10px" class="resultregist"></div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script>
    Ladda.bind( 'div:not(.progress-demo) button', { timeout: 2000 } );
    Ladda.bind( '.progress-demo button', {
    	callback: function( instance ) {
    		var progress = 0;
    		var interval = setInterval( function() {
    			progress = Math.min( progress + Math.random() * 0.1, 1 );
    			instance.setProgress( progress );
    			if( progress === 1 ) {
    				instance.stop();
    				clearInterval( interval );
    			}
    		}, 200 );
    	}
    } ); 
</script>