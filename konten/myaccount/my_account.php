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
                   <div class="card">
                       <table>
                           <thead>
                               <tr>
                                   <td colspan="2"><h3>Profil Saya</h3></td>
                               </tr>

                           </thead>
                           <tbody>
                               <tr>
                                   <td><i class="fa fa-user"></i> Nama Lengkap</td>
                                   <td align="Right"><b> Irfan</b></td>
                               </tr>

                               <tr>
                                   <td><i class="fa fa-envelope"></i> Email</td>
                                   <td align="Right"><b> irfan@gmail.com</b></td>
                               </tr>
                               <tr>
                                   <td><i class="fa fa-phone"></i> No Telepon</td>
                                   <td align="Right"><b> 0851313351</b></td>
                               </tr>
                               <tr>
                                   <td><i class="fa fa-mars"></i> Laki-laki</td>
                                   <td align="Right"><b> Laki-laki</b></td>
                               </tr>
                               <tr>
                                   <td><i class="fa fa-table"></i> Member ID Ace Rewards</td>
                                   <td align="Right"><b> <a href="#">Masukkan Data</a> </b></td>
                               </tr>
                               <tr>
                                   <td><i class="fa fa-table"></i> Member ID Informa Rewards</td>
                                   <td align="Right"><b> <a href="#">Masukkan Data</a> </b></td>
                               </tr>
                               <tr>
                                   <td><i class="fa fa-table"></i> Toys Smile Club</td>
                                   <td align="Right"><b> <a href="#">Masukkan Data</a> </b></td>
                               </tr>
                           </tbody>
                           <tfoot>
                               <tr><td colspan="2"><?php include('edit_profil.php') ?></td></tr>
                           </tfoot>
                       </table>
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
