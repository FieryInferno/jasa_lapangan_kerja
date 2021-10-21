<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Perusahaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/perusahaan">Perusahaan</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <form action="<?= base_url(); ?>admin/perusahaan/edit" method="post" enctype="multipart/form-data">
          <?php
            if ($this->session->error) { ?>
              <div class="alert alert-danger">
                <?= $this->session->error; ?>
              </div>
            <?php }
          ?>
          <div class="card-body">
            <div class="row">
              <div class="col-2">
                <img src="<?= base_url('asset/' . $logo); ?>" class="img-thumbnail img-preview" id="anggota-img" width="200" height="200">
              </div>
              <div class="col-10">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto" onchange="previewImg()" name="logo" required>
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Perusahaan</label>
              <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama" value="<?= $nama; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"><?= $deskripsi; ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <textarea name="alamat" id="alamat" cols="20" rows="2" class="form-control"><?= $alamat; ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Industri</label>
              <input type="text" class="form-control" placeholder="Industri" name="industri" value="<?= $industri; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Website</label>
              <input type="text" class="form-control" placeholder="Website" name="website" value="<?= $website; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ukuran</label>
              <input type="text" class="form-control" placeholder="Ukuran" name="ukuran" value="<?= $ukuran; ?>">
            </div>
          </div>
          <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Edit">Edit</button>

            <!-- Modal -->
            <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin akan mengedit data?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  function previewImg() {
    const gambar      = document.querySelector('#foto');
    const label       = document.querySelector('.custom-file-label');
    const imgPreview  = document.querySelector('.img-preview');
    label.textContent = gambar.files[0].name;
    const file = new FileReader();
    file.readAsDataURL(gambar.files[0]);
    file.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }
</script>