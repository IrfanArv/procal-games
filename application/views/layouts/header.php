<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href="<?php echo base_url().'dashboard'?>"> 
            <h2 class="page-title">
                S - 26 Procal
            </h2>
        </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item d-none d-md-flex me-3">
            <a href="<?php echo base_url()?>leadboard" target="_blank" class="nav-link px-0" data-toggle="tooltip" data-placement="top" title="Realtime Leadboard">
            <!-- Download SVG icon from http://tabler-icons.io/i/device-gamepad -->
	       <!-- Download SVG icon from http://tabler-icons.io/i/file-like -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="16" width="3" height="5" rx="1" /><path d="M6 20a1 1 0 0 0 1 1h3.756a1 1 0 0 0 .958 -.713l1.2 -3c.09 -.303 .133 -.63 -.056 -.884c-.188 -.254 -.542 -.403 -.858 -.403h-2v-2.467a1.1 1.1 0 0 0 -2.015 -.61l-1.985 3.077v4z" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12.1v-7.1a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-2.3" /></svg>
            </a>

        </div>
        <div class="nav-item d-none d-md-flex me-3">
            <a href="<?php echo base_url()?>" target="_blank" class="nav-link px-0" data-toggle="tooltip" data-placement="top" title="Buka Game">
            <!-- Download SVG icon from http://tabler-icons.io/i/device-gamepad -->
	        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="2" y="6" width="20" height="12" rx="2" /><path d="M6 12h4m-2 -2v4" /><line x1="15" y1="11" x2="15" y2="11.01" /><line x1="18" y1="13" x2="18" y2="13.01" /></svg>
            </a>

        </div>
        
        

        <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm"">
                <?php
                    $nama = $this->session->userdata('nama');
                    $pn = explode(' ' , $nama);
                    foreach($pn as $i =>$inisial) {
                    $i > 0;
                    echo substr($inisial,0,1);
                    }
                ?>
            </span>
            <div class="d-none d-xl-block ps-2">
                <div><?php echo $this->session->userdata('username') ?> </div>
                <div class="mt-1 small text-muted">
                
                </div>
            </div> 
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="<?php echo base_url().'logout'?>" class="dropdown-item">Logout</a>
            </div>
        </div>
        </div>
    </div>
</header>
