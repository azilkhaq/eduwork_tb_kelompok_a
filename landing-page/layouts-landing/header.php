
   <!-- header starts -->
   <header class="main_header_area">
       <div class="header-content py-1 bg-theme">
           <div class="container d-flex align-items-center justify-content-between">
               <div class="links">
                   <ul>
                       <li><a href="#" class="white"><i class="icon-calendar white"></i> <?php echo date('l, d-m-Y'); ?></a> 
                       </li>
                       <li><a href="#" class="white"><i class="icon-location-pin white"></i> Jakarta, Indonesia</a>
                       </li>                       
                   </ul>
               </div>
               <div class="links float-right">
                   <ul>
                       <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                       <li><a href="#" class="white"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                       <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Navigation Bar -->
       <div class="header_menu" id="header_menu">
           <nav class="navbar navbar-default">
               <div class="container">
                   <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                       <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                           <a class="navbar-brand" href="index.php">
                               <img src="assets/images/tavelin.png" alt="image">
                           </a>
                       </div>
                       <!-- Collect the nav links, forms, and other content for toggling -->
                       <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                           <ul class="nav navbar-nav" id="responsive-menu">
                               <li class="dropdown submenu active">
                                   <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon-arrow-down" aria-hidden="true"></i></a>
                               </li>

                               <li><a href="about.php">Tentang Kami</a></li>

                               <li class="submenu dropdown">
                                   <a href="destinasi.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata <i class="icon-arrow-down" aria-hidden="true"></i></a>
                               </li>
                               <li><a href="gallery.php">Galeri</a></li>
                           </ul>
                       </div>

                       <div class="register-login d-flex align-items-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nir-btn white">Login</a>
                        </div>
                       <div id="slicknav-mobile"></div>
                   </div>
               </div><!-- /.container-fluid -->
           </nav>
       </div>
       <!-- Navigation Bar Ends -->
   </header>
   <!-- header ends -->
