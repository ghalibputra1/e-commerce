<?php include('../../function/helper.php') ?>
<?php include('../../layout/head.php') ?>
<?php include('../../layout/header.php') ?>

<div class="container">


<nav class="woocommerce-breadcrumb">
  <a href="http://demo2.transvelo.in/electro">Home</a>
  <span class="delimiter"><i class="fa fa-angle-right"></i></span>Smart Phones &amp; Tablets
</nav>


<div class="row">

<div class="col-md-8">
  <div class="card">
    <div class="container">
      <br>
      <h5><b>Data Barang</b></h5><br>
      <div class="form-group">
        <label for="">Nama Barang <small style="Color:Red">*</small> </label>
        <input type="text" name="" value="" class="form-control">
        <small class="text-muted">Nama barang masih dapat diubah selama barang belum masuk transaksi</small>
      </div>

      <div class="form-group">
        <label for="">Kategori Barang <small style="Color:Red">*</small> </label>
        <select name="product_cat" id="product_cat" class="form-control">
    				<option value="0" selected="selected">All Categories</option>
    				<option class="level-0" value="laptops-laptops-computers">Laptops</option>
    				<option class="level-0" value="ultrabooks-laptops-computers">Ultrabooks</option>
			</select>
      </div>

    </div>
  </div><br>

  <div class="card">
    <div class="container">
      <br>
      <h5><b>Detail Barang</b></h5><br>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="">Harga Satuan <small style="Color:Red">*</small> </label>
            <input type="text" name="" value="" class="form-control" placeholder="Rp.">
          </div>
          <div class="col-md-6">
            <br>
              <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="">Perkiraan Berat <small style="Color:Red">*</small> </label>
            <input type="text" name="" value="" class="form-control" placeholder="Gram">
          </div>
          <div class="col-md-6">
            <br>
              <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
          </div>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="">Pembelian Minimum <small style="Color:Red">*</small> </label>
            <input type="text" name="" value="" class="form-control" placeholder="Buah">
          </div>
          <div class="col-md-6">
            <br>
              <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="">Kondisi Barang <small style="Color:Red">*</small> </label><br>
              <input type="radio" name="kondisi" value="Baru" class="custom-control-input"> <b>Baru</b>
              <input type="radio" name="kondisi" value="Bekas" class="custom-control-input"> <b>Bekas</b>   <br>

              <style media="screen">
                .custom-control-input{
                  padding-right: 20px;
                  color: white;
                }
              </style>
          </div>
        </div>
      </div>


    </div>
  </div>

  <div class="card">
    <div class="container">
      <br>
      <h5><b>Detail Barang</b></h5><br>
      <div class="form-group">
          <label for="">Deskripsi Barang <small style="Color:Red">*</small> </label>
          <textarea name="name" rows="8" cols="80"></textarea>
          <small class="text-muted">Deskripsi barang minimum berjumlah 30 karakter</small>
      </div>

      <div class="form-group">
          <label for="">Link Youtube</label>
          <input type="text" name="" value="" class="form-control">
          <small class="text-muted">Deskripsi barang minimum berjumlah 30 karakter</small>
      </div>

    </div>
  </div>

  <div class="card">
    <div class="container">
      <br>
      <h5><b>Atribut Barang</b></h5><br>
      <div class="form-group">
          <label for="">Merk Barang</label>
          <select class="form-control" name="" width="100px">
            <option value="">Merk</option>
            <option value=""></option>
          </select>
      </div>

    </div>



  </div>



</div>

<div class="col-md-4">
  <div class="card">
    <br>
    <div class="container">
      <h5><b>Gambar Barang</b></h5><br>
      <input type="file" name="" value="">
      <br><br>
      <center>
        <button type="input" name="button" class="btn btn-primary">Upload</button>
      </center>
      <br>
    </div>
  </div>
  <br><br>
  <div class="pull-right">
    <button type="button" name="button" class="btn btn-secondary"><i class="fas fa-save"></i> Simpan ke draf</button>
    <button type="button" name="button" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Jual</button>
  </div>
</div>
</div>


</div>



<?php include('../../layout/sidebar.php') ?>
<?php include('../../layout/footer.php') ?>
