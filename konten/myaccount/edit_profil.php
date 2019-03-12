<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Ubah Profil</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name=""  class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="text" name=""  class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="">No. Telepon</label>
            <input type="text" name=""  class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <div class="row">
              <div class="col-md-3">
                <select name="" class="form-control">
                  <?php
                    for ($i=1; $i < 31; $i++) {
                   ?>
                  <option value=""><?php echo $i; ?></option>

                <?php } ?>
                </select>
              </div>

              <div class="col-md-4">
                <select class="form-control" name="">
                  <option value="">Januari</option>
                  <option value="">Februari</option>
                  <option value="">Maret</option>
                  <option value="">April</option>
                  <option value="">Mei</option>
                </select>
              </div>

              <div class="col-md-4">
                <select name="" class="form-control">
                  <?php
                    for ($i=1960; $i < 2030; $i++) {
                   ?>
                  <option value=""><?php echo $i; ?></option>
                <?php } ?>
                </select>
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="">Gender</label><div class="clearfix">

            </div>
            <div class="col-md-6">
              <select class="form-control" name="">
                <option value="">Laki-laki</option>
                <option value="">Perempuan</option>
              </select>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
