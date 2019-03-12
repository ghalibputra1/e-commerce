<?php include('../../function/helper.php') ?>
<?php include('../../layout/head.php') ?>
<?php include('../../layout/header2.php') ?>

<div class="page home page-template-default">
  <div class="container">
    <nav class="woocommerce-breadcrumb">
      <a href="http://demo2.transvelo.in/electro">Home</a>
      <span class="delimiter"><i class="fa fa-angle-right"></i></span>My Store
    </nav>


    <div class="row">
        <div class="col-md-3">
          <!-- Profil -->
          <div class="csard">
            <p>SELLER</p>
            <div class="img-thsumbnail">
              <img src="<?php echo base_url."assets/images/avatar1.png"; ?>" alt="" width="30%">
            </div><br>
            <div class="content">
              <p>
                Aswar Kasim <br>
                Username : <b>aswarkasim</b> <br>
                <small><a href="#" class="label label-primary">0% feedback</a></small>
              </p>
              <hr>
              <p>
                <div class="container">
                  <span><i class="fas fa-map-marker-alt"></i> Makassar</span>
                </div>
              </p>
              <hr>
              <div class="clearfix">
                <span>
                  <ul class="list-group">
                    <li class="list-group-item"><a href="#" class="text-warning">Semua Barang</a> </li>
                    <li class="list-group-item"><a href="#" class="text-warning">Lihat Feedback</a> </li>
                    <li class="list-group-item"><a href="#" class="text-warning">Laporkan Pelanggan</a> </li>
                  </ul>
                </span>
              </div>
              <hr>
            </div>
          </div>
          <!-- End Profil -->
        </div>
        <div class="col-md-9">
          <div class="alert alert-warning">
            Nikmati Cicilan 0% dengan belanja minimum Rp500.000
          </div>
          <div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
							<li class="nav-item accessories_tab">
								<a href="#tab-Barang" data-toggle="tab" class="active" aria-expanded="true">Barang</a>
							</li>

							<li class="nav-item description_tab">
								<a href="#tab-catatanSeller" data-toggle="tab" class="" aria-expanded="false">Catatan Seller</a>
							</li>

							<li class="nav-item specification_tab">
								<a href="#tab-ulasan" data-toggle="tab" class="" aria-expanded="false">Ulasan</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane panel entry-content wc-tab active" id="tab-Barang" aria-expanded="true">

                <div class="accessories">
                	<div class="electro-wc-message"></div>
                	 <div class="row">

                       <div class="container">
                         <span class="pull-right">
                             <a href="<?php echo base_url."konten/mystore/jual_barang.php"; ?>" class="btn btn-primary">Jual Barang</a>
                            </span><div class="clearfix"></div>
                            <?php include('List_barang.php') ?>
                       </div>

                	 </div><!-- /.row -->
                  </div><!-- /.accessories -->
  							</div>

							<div class="tab-pane panel entry-content wc-tab" id="tab-catatanSeller" aria-expanded="false">
								<div class="electro-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div><!-- /.electro-description -->
							 </div>

							<div class="tab-pane panel entry-content wc-tab" id="tab-ulasan" aria-expanded="false">
                <span>
                  <ul class="products columns-3">
              			 <li class="product list-view">
              				<div class="media">
              					<div class="media-body media-middle">
              						<div class="row">
                            <div class="col-xs-2">
                              <img src="<?php echo base_url."assets/images/avatar1.png"; ?>" alt="">
                            </div>
              							<div class="col-xs-10">
              								<span class="loop-product-categories"><a rel="tag" href="#">Aswar Kasim</a></span>
              									<div class="product-rating">
              										<div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div><div class="clearfix">
                                  </div>
                                  <small>01 Februari 2019, pukul 21:40 WIB</small>
              									</div>
              									<div class="product-short-description">
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

              									</div>
              							</div>

              						</div>
              					</div>
              				</div>
              			</li>

                    <li class="product list-view">
                     <div class="media">
                       <div class="media-body media-middle">
                         <div class="row">
                           <div class="col-xs-2">
                             <img src="<?php echo base_url."assets/images/avatar1.png"; ?>" alt="">
                           </div>
                           <div class="col-xs-10">
                             <span class="loop-product-categories"><a rel="tag" href="#">Aswar Kasim</a></span>
                               <div class="product-rating">
                                 <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div><div class="clearfix">
                                 </div>
                                 <small>01 Februari 2019, pukul 21:40 WIB</small>
                               </div>
                               <div class="product-short-description">
                                 <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                               </div>
                           </div>

                         </div>
                       </div>
                     </div>
                   </li>

              			</ul>
                </span>
							</div><!-- /.panel -->


						</div>
					</div>
        </div>
    </div>
  </div>
</div>


<?php include('../../layout/sidebar.php') ?>
<?php include('../../layout/footer.php') ?>
