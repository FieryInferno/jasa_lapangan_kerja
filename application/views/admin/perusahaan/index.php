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
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Perusahaan</li>
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
        <div class="card-header">
          <a href="<?= base_url(); ?>admin/perusahaan/tambah" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Perusahaan</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Industri</th>
                  <th scope="col">Website</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($perusahaan as $key) { ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><img src="<?= base_url('asset/' . $key['logo']); ?>" alt="" width="25%"> <?= $key['nama']; ?></td>
                      <td><?= $key['alamat']; ?></td>
                      <td><?= $key['industri']; ?></td>
                      <td><a href="<?= $key['website']; ?>"><?= $key['website']; ?></a></td>
                      <td>
                        <button class="btn btn-info">Detail</button>
                        <a href="<?= base_url('admin/perusahaan/edit/' . $key['id']); ?>" class="btn btn-success">Edit</a>
                        <button class="btn btn-danger">Hapus</button>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->