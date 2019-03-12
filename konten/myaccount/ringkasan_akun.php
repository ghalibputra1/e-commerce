<?php include('../../function/helper.php') ?>
<?php include('../../layout/head.php') ?>
<?php include('../../layout/header.php') ?>


<div class="page home page-template-default">
<div id="content" class="site-content" tabindex="-1">
 <div class="container">

   <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Laptops &amp; Computers</nav>

   <div id="primary" class="content-area">


     <main id="main" class="site-main">

               <div class="row">
                 <div class="col-md-2">

                    <?php include('sidebar_account.php') ?>

                 </div>
                 <div class="col-md-10">
                   <div class="row">
                     <!-- Profil -->
                     <div class="col-md-6">
                       <div class="card">

                         <br>
                         <div class="container">
                           <h4>
                             <i class="fa fa-user"></i> Profil Saya
                             <hr>
                           </h4>
                               <div class="row">
                                 <!-- avatar -->
                                 <div class="col-md-4">
                                   <img src="<?php echo base_url."assets/images/avatar1.png" ?>" alt="asd" width="100px" class="img-circle">
                                 </div>

                                 <!-- Data -->
                                 <div class="col-md-8">
                                   <p><i class="fa fa-user"></i> Aswar Kasim</p>
                                   <p><i class="fa fa-envelope"></i> aswarkasim@gmail.com</p>
                                   <p><i class="fa fa-phone"></i> 085298730727</p>
                                 </div>
                               </div>
                               <br>

                               <div class="row">
                                 <div class="col-md-12">
                                   <p style="font-size:10px">
                                     <span class="form-control alert alert-info alert-block"><i class="fa fa-exclamation-circle" style="font-size:10px"></i>  Lengkapi Form untuk transaksi semakin mudah</span>
                                   </p>
                                   <p>
                                     <button type="button" name="button" class="btn btn-primary btn-block"><i class="fa fa-edit"></i>Lengkapi data saya</button>
                                   </p>
                                 </div>
                               </div>

                         </div>
                         <br>
                       </div>
                     </div>
                     <!-- end profil -->

                     <!-- Alamat -->
                     <div class="col-md-6">
                       <div class="card">

                         <br>
                         <div class="container">
                           <h4>
                             <i class="fa fa-map-marker"></i> Alamat Saya
                             <hr>
                           </h4>
                               <div class="row">
                                 <div class="text-center" align="center">
                                   <img src="<?php echo base_url."assets/images/alamat.png"; ?>" alt="" width="30%">
                                 </div>
                               </div>
                               <br>

                               <div class="row">
                                 <div class="col-md-12">

                                   <p>
                                     <button type="button" name="button" class="btn btn-primary btn-block"><i class="fa fa-edit"></i>Masukkan Alamat</button>
                                   </p>
                                 </div>
                               </div>

                         </div>
                         <br>
                       </div>
                     </div>
                     <!-- end alamat -->


                   </div>

                   <div class="row">
                     <div class="col-md-12">
                       <div class="card">

                         <br>
                         <div class="container">
                           <h4>
                             <i class="ec ec-shopping-bag"></i> Pesanan Saya
                             <hr>
                           </h4>
                               <div class="row">
                                 <div class="text-center" align="center">
                                   <img src="<?php echo base_url."assets/images/shopping.png"; ?>" alt="" width="30%">
                                 </div>
                               </div>
                               <br>

                               <div class="row">
                                 <div class="col-md-12">
                                   <p style="font-size:10px">
                                     <span class="form-control alert alert-info alert-block"><i class="fa fa-exclamation-circle" style="font-size:10px"></i>  Lengkapi Form untuk transaksi semakin mudah</span>
                                   </p>
                                   <p>
                                     <button type="button" name="button" class="btn btn-primary btn-block"><i class="fa fa-edit"></i>Lengkapi data saya</button>
                                   </p>
                                 </div>
                               </div>

                         </div>
                         <br>
                       </div>
                     </div>

                   </div>
                 </div>

               </div>

     </main>
   </div><!-- #primary -->


 </div><!-- .container -->
</div><!-- #content -->
</div><!-- #content -->

<?php include('../../layout/sidebar.php') ?>
<?php include('../../layout/footer.php') ?>
