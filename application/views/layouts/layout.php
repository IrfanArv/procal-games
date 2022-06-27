<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php echo $title;?></title>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <link rel="icon" href="<?php echo base_url().'assets/images/logo.png'?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo base_url().'assets/images/logo.png'?>" type="image/x-icon"/>
    <meta name="description" content="Event Virtual"/>
    <link href="<?php echo base_url().'assets/dist/css/tabler.min.css'?>" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/dist/libs/sw/sweetalert.css'?>" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/dist/css/tabler-vendors.min.css'?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  
    <style>
      a.btn.btn-success.btn-excel {
          background: #1D6F42 !important;
      }
    </style>
    <script src="<?php echo base_url().'assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/js/tabler.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/dist/libs/sw/sweetalert.js'?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>




<!-- https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js
https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js -->


  </head>
  <body class="antialiased">
    <div class="page">
        <?php echo $_header; ?>
        <?php echo $_menu; ?>
        <div class="content">
            <div class="container-xl">
                <?php echo $_content; ?>  
            </div>
        <?php echo $_footer; ?>
      </div>
    </div>

  </body>
</html>