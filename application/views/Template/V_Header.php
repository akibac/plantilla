<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title><?=$title?></title>
        <!-- Favicon -->
        <link rel="icon" href="<?= base_url() ?>argon/assets/img/brand/favicon.png" type="image/png">
        <!-- Icons -->
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/css/argon.css?v=1.2.0" type="text/css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <!-- <link rel="stylesheet" href="<?= base_url() ?>dist/css/pb.css" type="text/css"> -->

        <!-- SWEET ALERT -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/<?= SWEETALERT_CSS ?>">
        <link rel="stylesheet" href="<?= base_url() ?>dist/argon/assets/vendor/select2/dist/css/select2.min.css">
        

        
    </head>

    <!--  -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
              <img src="<?= base_url() ?>dist/argon/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                

                <li class="nav-item">
                  <a class="nav-link active" href="<?=base_url()?>">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                </li>
                <?= $menu ?>
              </ul>
              <!-- Divider -->
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal"></span>
              </h6>
              <!-- Navigation -->
              <ul class="navbar-nav mb-md-3">
                
                <li class="nav-item">
                    <a class="nav-link" href="#" id="closep">
                        <i class="ni ni-fat-remove"></i>
                        <span class="nav-link-text">Cerrar</span>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>
    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">

                <li class="nav-item d-xl-none"> 
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>

                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    <div class="px-3 py-3">
                      <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="<?= base_url() ?>dist/argon/assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="<?= base_url() ?>dist/argon/assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="<?= base_url() ?>dist/argon/assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>5 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="<?= base_url() ?>dist/argon/assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="<?= base_url() ?>dist/argon/assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-ungroup"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                    <div class="row shortcuts px-4">
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                          <i class="ni ni-calendar-grid-58"></i>
                        </span>
                        <small>Calendar</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                          <i class="ni ni-email-83"></i>
                        </span>
                        <small>Email</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                          <i class="ni ni-credit-card"></i>
                        </span>
                        <small>Payments</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                          <i class="ni ni-books"></i>
                        </span>
                        <small>Reports</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                          <i class="ni ni-pin-3"></i>
                        </span>
                        <small>Maps</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                          <i class="ni ni-basket"></i>
                        </span>
                        <small>Shop</small>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="<?= base_url() ?>dist/profile/<?=$this->session->IdUser?>/<?=$this->session->img_pro?>">
                      </span>
                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->NameUser ?></span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="<?=base_url()?>Admin/C_Users/detail_user" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>My profile</span>
                    </a>
                    <a href="<?=base_url()?>Admin/C_Users/Settings" class="dropdown-item">
                      <i class="ni ni-settings-gear-65"></i>
                      <span>Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-calendar-grid-58"></i>
                      <span>Activity</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-support-16"></i>
                      <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url() ?>C_Main/Logout" class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>Cerrar Sesion</span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    