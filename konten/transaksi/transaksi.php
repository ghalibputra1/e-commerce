<?php include('../../function/helper.php') ?>
<?php include('../../layout/head.php') ?>
<?php include('../../layout/header.php') ?>


<div class="page home page-template-default">
  <div class="container">
    <nav class="woocommerce-breadcrumb">
      <a href="http://demo2.transvelo.in/electro">Home</a>
      <span class="delimiter"><i class="fa fa-angle-right"></i></span>My Store
    </nav>


    <div class="row">

        <div class="col-md-12">
          <h4><b>Transaksi</b> </h4>
          <div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
							<li class="nav-item accessories_tab">
								<a href="#tab-Pembelian" data-toggle="tab" class="active" aria-expanded="true">Pembelian</a>
							</li>

							<li class="nav-item description_tab">
								<a href="#tab-Pembayaran" data-toggle="tab" class="" aria-expanded="false">Pembayaaran</a>
							</li>

						</ul>

						<div class="tab-content">
							<div class="tab-pane panel entry-content wc-tab active" id="tab-Pembelian" aria-expanded="true">

                <div class="accessories">
                	<div class="electro-wc-message"></div>
                	 <div class="row">

                       <div class="container">

                            <?php include('pembelian.php') ?>
                       </div>

                	 </div><!-- /.row -->
                  </div><!-- /.accessories -->
  							</div>

							<div class="tab-pane panel entry-content wc-tab" id="tab-Pembayaran" aria-expanded="false">
								<div class="electro-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div><!-- /.electro-description -->
							 </div>


						</div>
					</div>
        </div>
    </div>
  </div>
</div>


<?php include('../../layout/footer.php') ?>
