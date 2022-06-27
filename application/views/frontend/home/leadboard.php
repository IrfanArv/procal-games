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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/lead.css">
</head>
<body>
<div class="container text-center">
    
    <div class="row ">
        <div class="col-lg-8 mx-auto">
        <div class="d-flex justify-content-center mt-3 mb-3 ">
                <img src="<?= base_url(); ?>assets/images/logo.png" class="img-fluid logo shadow-lg rounded" alt="">
            </div>
            
        </div>
    </div> 
    
    <div class="lead col-lg-10 mx-auto">

        <table class="table table-borderless">
            
            <tbody class="show_score">
                
                
            </tbody>
        </table>
    </div>

    <footer class="col-lg-8 mx-auto">
     <div class="container ">
         <div class="row py-3">
             <div class=" col-6 mb-4 d-flex justify-content-start align-self-center">
                <a href="#" onclick="reload_table()">
                    <img src="<?= base_url(); ?>assets/images/btn.png" class="img-fluid footer_ref" alt="">
                </a>
                 
                 
             </div>
             <div class="col-6 mb-4 d-flex justify-content-end">
             <img src="<?= base_url(); ?>assets/images/qr.png" class="img-fluid footer_img" alt="">
                 
             </div>
             
         </div>
     </div>
     
 </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script>
        
        function reload_table()
        {
            $( ".show_score" ).load(window.location.href );
        }
        $(document).ready(function(){
            show_score();
 
            Pusher.logToConsole = true;
 
            var pusher = new Pusher('6883481843fb618042f2', {
                cluster: 'ap1',
                forceTLS: true
            });
 
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if(data.message === 'success'){
                    show_score();
                }
            });
 
            function show_score(){
                $.ajax({
                    url   : '<?php echo site_url("welcome/get_score");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var count = 1;
                        var i;

                     
                        
                        for(i=0; i<data.length; i++){
                            
                            html += '<tr>'+
                                        '<td><div class="rank">'+ count++ +'</div></td>'+
                                        '<td><div class="name">'+ data[i].account_name +'</div></td>'+
                                        // '<td><div class="phone">'+ data[i].account_phone.substr(0, 9) + 'XXX' +'</div></td>'+
                                        '<td class="point">'+ data[i].account_score +' <img src="<?= base_url(); ?>assets/images/coin.png" class="img-fluid coin" alt="" ></div>'+
                                    '</tr>';
                        }
                        $('.show_score').html(html);
                    }
 
                });
            } 
 
        });

    </script>
</body>
</html>