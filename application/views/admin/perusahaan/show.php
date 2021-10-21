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
            <li class="breadcrumb-item active">Tambah</li>
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
        <div class="card-body">
          <div class="row">
            <div class="col-2">
              <img src="<?= base_url('asset/' . $logo); ?>" alt="" width="100%">
            </div>
            <div class="col-10">
              <h1><strong><?= $nama; ?></strong></h1>
              <div class="text-justify"><?= $deskripsi; ?></div>
              <table width="100%">
                <tr>
                  <td>
                    <div class="row">
                      <div class="col-4">
                        Alamat
                      </div>
                      <div class="col-8">
                        <strong><?= $alamat; ?></strong>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-4">
                        Website
                      </div>
                      <div class="col-8">
                        <a href="<?= $website; ?>"><strong><?= $website; ?></strong></a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="row">
                      <div class="col-4">
                        Industri
                      </div>
                      <div class="col-8">
                        <strong><?= $industri; ?></strong>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-4">
                        Ukuran Perusahaan
                      </div>
                      <div class="col-8">
                        <strong><?= $ukuran; ?></strong>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
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