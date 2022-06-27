<div class="page-header d-print-none">
  <div class="row align-items-center">
    <div class="col">
      <!-- Page pre-title -->
      
      <h2 class="page-title">
        Hai, 
        <?php
        
          $time = date("H");
        
          $timezone = date("e");
        
          if ($time < "12") { 
              echo "Selamat Pagi ";
          } else
        
          if ($time >= "12" && $time < "17") {
              echo "Selamat Siang ";
          } else
          if ($time >= "17" && $time < "19") {
              echo "Selamat Sore ";
          } else
          if ($time >= "19") {
              echo "Selamat Malam ";
          }
          echo $this->session->userdata('nama');
          ?>  
      </h2>
    </div>
    <!-- Page title actions -->
    <div class="col-auto ms-auto d-print-none">
      <div class="btn-list">
       
        <a href="#" class="btn btn-danger d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-small">
          
	          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
          Reset Database
        </a>

        
      </div>
    </div>

    <div class="row row-cards">

      <div class="col-md-6 col-xl-4">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/file-download -->
	                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  e - Flayer
                </div>
                  <div class="text-muted">
                    <?php 
                      $query=$this->db->query("SELECT * FROM account");
                      $jml=$query->num_rows();
                    ?>
                     <?php echo $jml;?> e - Flayer di download
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-purple text-white avatar">
                <!-- Download SVG icon from http://tabler-icons.io/i/device-gamepad -->
	                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="2" y="6" width="20" height="12" rx="2" /><path d="M6 12h4m-2 -2v4" /><line x1="15" y1="11" x2="15" y2="11.01" /><line x1="18" y1="13" x2="18" y2="13.01" /></svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  Player
                </div>
                <div class="text-muted">
                    <?php 
                      $query=$this->db->query("SELECT * FROM account");
                      $jml=$query->num_rows();
                    ?>
                     <?php echo $jml;?>
                     Player Bermain
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-teal text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/file-like -->
	                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="16" width="3" height="5" rx="1" /><path d="M6 20a1 1 0 0 0 1 1h3.756a1 1 0 0 0 .958 -.713l1.2 -3c.09 -.303 .133 -.63 -.056 -.884c-.188 -.254 -.542 -.403 -.858 -.403h-2v-2.467a1.1 1.1 0 0 0 -2.015 -.61l-1.985 3.077v4z" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12.1v-7.1a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-2.3" /></svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  Feedback
                </div>
                <div class="text-muted">
                    <?php 
                      $query=$this->db->query("SELECT * FROM feedback");
                      $jml=$query->num_rows();
                    ?>
                     <?php echo $jml;?> Feedback
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Leadboard</h3>
          </div>
          <div class="container mt-3">
          <div class="table-responsive">
          <table id="leadboard" class="table table-striped table-bordered dt-responsive nowrap card-table table-vcenter" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
            </div>
          </div>
            
        </div>
      </div>


      <div class="col-md-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Account Login</h3>
          </div>
          <div class="container mt-3">
            <div class="table-responsive">
              <table id="table" class="table table-striped table-bordered dt-responsive nowrap card-table table-vcenter" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                      <tr>
                          <th>Nama</th>
                          <th>No HP</th>
                          <th>Tanggal Login</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Feedback</h3>
          </div>
          
          <div class="container table-responsive mt-3">
            <table id="table_feedback" class="table table-striped table-bordered " style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Booth Wyeth Nutrition ?</th>
                        <th>Paparan product knowledge Wyeth Nutrition ?</th>
                        <th>Mengenai kegiatan booth Wyeth Nutrition (Games & Photobooth) ?</th>
                        <th>Saran & Kritik</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-title">Kamu yakin mau reset data?</div>
            <div>Pastikan kamu telah melakukan backup data pada masing - masing table</div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
            <a type="button"  class="btn btn-danger" href="<?php echo base_url().'backend/Dashboard/reset_all'?>" >Ya, Reset Database</a>
          </div>
        </div>
      </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>


<script>

  var table;
  var table_lead;
  var table_feedback;
        
    $(document).ready(function() {
        function newexportaction(e, dt, button, config) {
         var self = this;
         var oldStart = dt.settings()[0]._iDisplayStart;
         dt.one('preXhr', function (e, s, data) {
             // Just this once, load all data from the server...
             data.start = 0;
             data.length = 2147483647;
             dt.one('preDraw', function (e, settings) {
                 // Call the original action function
                 if (button[0].className.indexOf('buttons-copy') >= 0) {
                     $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                     $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                     $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                     $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-print') >= 0) {
                     $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                 }
                 dt.one('preXhr', function (e, s, data) {
                     // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                     // Set the property to what it was before exporting.
                     settings._iDisplayStart = oldStart;
                     data.start = oldStart;
                 });
                 // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                 setTimeout(dt.ajax.reload, 0);
                 // Prevent rendering of the full data to the DOM
                 return false;
             });
         });
         // Requery the server with the new one-time export settings
         dt.ajax.reload();
     }

        table = $('#table').DataTable({ 
          
            "processing": true, 
            "serverSide": true, 
            "order": [], 
            "ajax": {
                "url": "<?php echo site_url('backend/Dashboard/account_login')?>",
                "type": "POST"
            },

            

            dom: 'Blfrtip',
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          buttons: [
              {
                  extend: 'excel',
                  "action": newexportaction
                  
              },
              {
                  extend: 'print',
                  "action": newexportaction
                  
              },
              {
                  extend: 'pdf',
                  
                  "action": newexportaction
              }
            ],

        });
    });


    $(document).ready(function() {

      function newexportaction(e, dt, button, config) {
         var self = this;
         var oldStart = dt.settings()[0]._iDisplayStart;
         dt.one('preXhr', function (e, s, data) {
             // Just this once, load all data from the server...
             data.start = 0;
             data.length = 2147483647;
             dt.one('preDraw', function (e, settings) {
                 // Call the original action function
                 if (button[0].className.indexOf('buttons-copy') >= 0) {
                     $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                     $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                     $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                     $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-print') >= 0) {
                     $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                 }
                 dt.one('preXhr', function (e, s, data) {
                     // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                     // Set the property to what it was before exporting.
                     settings._iDisplayStart = oldStart;
                     data.start = oldStart;
                 });
                 // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                 setTimeout(dt.ajax.reload, 0);
                 // Prevent rendering of the full data to the DOM
                 return false;
             });
         });
         // Requery the server with the new one-time export settings
         dt.ajax.reload();
     }
        table_lead = $('#leadboard').DataTable({ 
          
            "processing": true, 
            "serverSide": true, 
            "order": [], 
            "ajax": {
                "url": "<?php echo site_url('backend/Dashboard/leadboard')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 
            },
            
            ],

            
            dom: 'Blfrtip',
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          
            buttons: [
              {
                  extend: 'excel',
                  "action": newexportaction
                  
              },
              {
                  extend: 'print',
                  "action": newexportaction
                  
              },
              {
                  extend: 'pdf',
                  
                  "action": newexportaction
              }
            ],
        });
    });

    $(document).ready(function() {

      function newexportaction(e, dt, button, config) {
         var self = this;
         var oldStart = dt.settings()[0]._iDisplayStart;
         dt.one('preXhr', function (e, s, data) {
             // Just this once, load all data from the server...
             data.start = 0;
             data.length = 2147483647;
             dt.one('preDraw', function (e, settings) {
                 // Call the original action function
                 if (button[0].className.indexOf('buttons-copy') >= 0) {
                     $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                     $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                     $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                     $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-print') >= 0) {
                     $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                 }
                 dt.one('preXhr', function (e, s, data) {
                     // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                     // Set the property to what it was before exporting.
                     settings._iDisplayStart = oldStart;
                     data.start = oldStart;
                 });
                 // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                 setTimeout(dt.ajax.reload, 0);
                 // Prevent rendering of the full data to the DOM
                 return false;
             });
         });
         // Requery the server with the new one-time export settings
         dt.ajax.reload();
     }
      table_feedback = $('#table_feedback').DataTable({ 
            

            "processing": true, 
            "serverSide": true, 
            "order": [], 
            "ajax": {
                "url": "<?php echo site_url('backend/Dashboard/feedback')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 
            },
            
            ],

            dom: 'Blfrtip',
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            buttons: [
              {
                  extend: 'excel',
                  "action": newexportaction
                  
              },
              {
                  extend: 'print',
                  "action": newexportaction
                  
              },
              {
                  extend: 'pdf',
                  
                  "action": newexportaction
              }
            ],


        });
    });

</script>