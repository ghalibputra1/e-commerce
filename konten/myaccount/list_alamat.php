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
                     <div class="container" style="padding-top:20x; padding-bottom:20px">
                       <div class="text-center" align="center" style="padding:20px">
                         <h5><b>Alamat Saya</b> </h5>
                         <hr>
                            <h5><a href="#" style="color:black"><i class="fa fa-plus-square-o"></i> Tambah Alamat</a></h5>
                         <hr>
                       </div>

                       <table>
                         <thead>
                           <th>Nama Penerima</th>
                           <th>Alamat Pengirim</th>
                           <th>Telepon</th>
                           <th></th>
                         </thead>
                         <tbody>
                           <tr>
                             <td>Aswar Kasim</td>
                             <td>Jl. Pelita Raya</td>
                             <td>0232151512</td>
                             <td align="right">
                               <button type="button" name="button" class="btn btn-primary btn-xs">Jadikan alama utama</button><div class="clearfix"></div><br>
                               <a href="#"><i class="fa fa-edit"></i> Ubah</a>
                               <a href="#"><i class="fa fa-trash"></i> Hapus</a>
                             </td>
                           </tr>
                         </tbody>
                       </table>
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
