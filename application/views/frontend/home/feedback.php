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
    function save(){
    $('#isi4_btn').text('Menyimpan ...'); 
        $('#isi4_btn').attr('disabled',true); 
    $.ajax({

        url   : '<?php echo site_url("welcome/save");?>',
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",


        success: function(data){
            $('#end').show();
            $("#hello").hide();  
            $('#isi1').hide();   
            $('#isi2').hide();
            $('#isi3').hide();
            $('#isi4').hide();
        }
    });
}
                
		

        
    $(document).ready(function(){
        $('#feedback').on('click', function(event) {        
            $('#isi1').show();
            $("#hello").hide();     
        });

        $('#isi1_btn').on('click', function(event) {        
            $('#isi2').show();
            $("#hello").hide();  
            $('#isi1').hide();   
        });

        $('#isi2_btn').on('click', function(event) {        
            $('#isi3').show();
            $("#hello").hide();  
            $('#isi1').hide(); 
            $('#isi2').hide();   
        });

        $('#isi3_btn').on('click', function(event) {        
            $('#isi4').show();
            $("#hello").hide();  
            $('#isi1').hide();   
            $('#isi2').hide();
            $('#isi3').hide();
        });

        
        $("#submit").on('click', "#isi4_btn", function() {
            $('#end').show();
            $("#hello").hide();  
            $('#isi1').hide();   
            $('#isi2').hide();
            $('#isi3').hide();
            $('#isi4').hide();
		});

        $('#btn_end').on('click', function(event) {        
            $('.content').show();
            $("#content").show();
            $('#end').hide();
            $("#hello").hide();  
            $('#isi1').hide();   
            $('#isi2').hide();
            $('#isi3').hide();
            $('#isi4').hide();
            
            
        });

    });
</script>
</head>
<body>

<div class="container text-center">
<?php $user_data = substr( $_SERVER['REQUEST_URI'],23); ?>
    
        
        <div class="row" id="hello">
            <!-- <?php  echo substr( $_SERVER['REQUEST_URI'],23); ?>  -->

            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-center selamat">
                    <div class="row">
                        <div class="col-12">
                            <p class="wording mbsel">
                            Saran dan pendapat anda sangat berarti untuk kami
                            <!-- <br><br>
                            Sampai berjumpa di kegiatan berikutnya -->
                            </p>
                            <p class="wording mbfed">
                            <!-- lorem ipsum, lorem ipsum lorem ipsum lorem ipsum -->
                            
                            </p>
                            <a id="feedback" href="javascript:void(0)" class="btn btn-primary btn-feedback fixed-bottom btn-lg"> Feedback </a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
        <form action="#" id="form">
        <input  type="hidden" name="id" value="<?php echo $user_data; ?>">
        <div class="row" id="isi1" style="display: none;">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-center selamat">
                    <div class="row">
                        <div class="col-12">
                            <p class="wording">
                            Bagaimana pendapat anda mengenai booth Wyeth Nutrition ?
                            </p>
                            <div class="text-left formfeedback">
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_1" id="fb_11" value="1" checked>
                                    <label class="form-check-label" for="fb_12">
                                        Bagus
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_1" id="fb_12" value="2">
                                    <label class="form-check-label" for="fb_12">
                                        Biasa Saja
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_1" id="fb_13" value="3">
                                    <label class="form-check-label" for="fb_13">
                                        Kurang Bagus
                                    </label>
                                </div>
                                
                            </div>
                            <a id="isi1_btn" href="javascript:void(0)" class="btn btn-primary btn-feedback btn-lg fixed-bottom"> Next </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="isi2" style="display: none;">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-center selamat">
                    <div class="row">
                        <div class="col-12">
                            <p class="wording">
                            Bagaimana pendapat anda mengenai paparan product knowledge Wyeth Nutrition ?
                            </p>
                            <div class="text-left formfeedback">
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_2" id="fb_21" value="1" checked>
                                    <label class="form-check-label" for="fb_22">
                                        Bagus
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_2" id="fb_22" value="2">
                                    <label class="form-check-label" for="fb_12">
                                        Biasa Saja
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_2" id="fb_23" value="3">
                                    <label class="form-check-label" for="fb_23">
                                        Kurang Bagus
                                    </label>
                                </div>
                                
                            </div>
                            <a id="isi2_btn" href="javascript:void(0)" class="btn btn-primary btn-feedback btn-lg fixed-bottom"> Next </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="isi3" style="display: none;">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-center selamat">
                    <div class="row">
                        <div class="col-12">
                            <p class="wording" style="font-size: 24px !important;">
                            Bagaimana pendapat anda mengenai kegiatan booth Wyeth Nutrition (Games & Photobooth) ?
                            </p>
                            <div class="text-left formfeedback">
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_3" id="fb_31" value="1" checked>
                                    <label class="form-check-label" for="fb_31">
                                        Menarik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_3" id="fb_32" value="2">
                                    <label class="form-check-label" for="fb_32">
                                        Biasa Saja
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="option-input radio" type="radio" name="fb_3" id="fb_33" value="3">
                                    <label class="form-check-label" for="fb_33">
                                        Kurang Menarik
                                    </label>
                                </div>
                                
                            </div>
                            <a id="isi3_btn" href="javascript:void(0)" class="btn btn-primary btn-feedback btn-lg fixed-bottom"> Next </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="isi4" style="display: none;">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-center selamat">
                    <div class="row">
                        <div class="col-12">
                            <p class="wording">
                            Saran dan Kritik
                            </p>
                                <textarea id="saran" class="textarea" name="saran" rows="10" cols="35" required="required"></textarea>
                            
                            <a id="isi4_btn" onclick="save()" class="btn btn-primary btn-feedback text-white btn-lg fixed-bottom"> Submit </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>

        <div class="row" id="end" style="display: none;">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-center selamat">
                    <div class="row">
                        <div class="col-12">
                            <p class="wording mbsel">
                            Terima Kasih atas partisipasi anda.
                                <br><br>
                                Sampai berjumpa di kegiatan berikutnya
                            </p>
                            
                            <a href="#" id="btn_end" class="btn btn-primary btn-feedback btn-lg fixed-bottom"> Play Again </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="content" style="display: none;">
    <iframe width="100%" class="content" height="100%" frameborder="0" src="https://itch.io/embed-upload/3585738?color=333333"   style="border:0;display:none"/>
</div>

    


</body>
</html>