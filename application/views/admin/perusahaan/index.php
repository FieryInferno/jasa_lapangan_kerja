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
          <?php
            if ($this->session->sukses) { ?>
              <div class="alert alert-success">
                <?= $this->session->sukses; ?>
              </div>
            <?php }
          ?>
          <div class="table-responsive">
            <table class="table" id="myTable" width="100%">
              <thead>
                <tr>
                  <th scope="col" width="2%">#</th>
                  <th scope="col" width="20%">Nama Perusahaan</th>
                  <th scope="col" width="22%">Lokasi</th>
                  <th scope="col" width="22%">Industri</th>
                  <th scope="col" width="19%">Website</th>
                  <th scope="col" width="10%">Aksi</th>
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
                        <a href="<?= base_url('admin/perusahaan/detail/' . $key['id']); ?>" class="btn btn-info">Detail</a>
                        <a href="<?= base_url('admin/perusahaan/edit/' . $key['id']); ?>" class="btn btn-success">Edit</a>
                        <form action="<?= base_url('admin/perusahaan/hapus/' . $key['id']); ?>" method="post">
                          <input type="hidden" name="_method" value="DELETE">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $key['id']; ?>">Hapus</button>

                          <!-- Modal -->
                          <div class="modal fade" id="hapus<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Apakah anda yakin akan menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button class="btn btn-danger" type="submit">Hapus</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
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