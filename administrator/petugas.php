
<?php 
include '../layouts/header.php';
include '../layouts/navbar_admin_petugas.php';
?>

<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Data Petugas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Petugas</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                      <i class="fas fa-plus"></i> Tambah Petugas
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <?php 
              if(isset($_GET['info'])){
                if($_GET['info'] == "hapus"){ ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-trash"></i> Sukses</h5>
                    Data berhasil di hapus
                  </div>
                <?php } else if($_GET['info'] == "simpan"){ ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Sukses</h5>
                    Data berhasil di simpan
                  </div>
                <?php }else if($_GET['info'] == "update"){ ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-edit"></i> Sukses</h5>
                    Data berhasil di update
                  </div>
                <?php } } ?>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Id Level</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    include "../connect.php";
                    $tb_petugas=mysqli_query($conn, "SELECT * FROM tb_petugas");
                    while($d_tb_petugas = mysqli_fetch_array($tb_petugas)){
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?=$d_tb_petugas['nama_petugas']?></td>
                        <td><?=$d_tb_petugas['username']?></td>
                        <td><?=$d_tb_petugas['password']?></td>
                        <td><?=$d_tb_petugas['id_level']?></td>
                        <td>
                          <button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-ubah<?php echo $d_tb_petugas['id_petugas']; ?>">
                            <i class="fas fa-edit"></i> Edit
                          </button>
                          <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus<?php echo $d_tb_barang['id_barang']; ?>">
                            <i class="fas fa-trash"></i> Hapus
                          </button>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal-hapus<?php echo $d_tb_barang['id_barang']; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Hapus Data Barang</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form>
                              <div class="modal-body">
                                <p>Apakah Anda Yakin Akan Menghapus Data <b><?=$d_tb_barang['nama_barang']?></b>!!!</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="hapus_barang.php?id_barang=<?php echo $d_tb_barang['id_barang']; ?>" class="btn btn-primary">Hapus</a>
                              </div>
                            </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <div class="modal fade" id="modal-ubah<?php echo $d_tb_petugas['id_petugas']; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Data petugas</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form method="post" action="update_petugas.php">
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Nama Petugas</label>
                                  <input type="text" name="id_petugas" value="<?php echo $d_tb_petugas['id_petugas'];?>" hidden>
                                  <input type="text" class="form-control" name="nama_petugas" value="<?php echo $d_tb_petugas['nama_petugas'];?>" placeholder="Masukan Nama Petugas ...">
                                </div>
                                <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" class="form-control" name="username" value="<?php echo $d_tb_petugas['username'];?>" placeholder="Masukan Username ...">
                                </div>
                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" class="form-control" name="password" value="<?php echo $d_tb_petugas['password'];?>" placeholder="Masukan Password">
                                  <i><font color="red">Abaikan jika password tidak di rubah *</font></i>
                                </div>
                                <div class="form-group">
                                  <select name="id_level" class="form-control select2" style="width: 100%;">
                                  <label>Level</label>
                                  <option value="">--- Pilih Level ---</option>
                                  <option value="1">Admin</option>
                                  <option value="2">Petugas</option>
                                </select>
                                  

                                </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                            </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                    <?php } ?>
                  </tbody>
                </table>                  
                <div class="modal fade" id="modal-tambah">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Petugas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="post" action="simpan_petugas.php">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Nama Petugas</label>
                            <input type="text" class="form-control" name="nama_petugas" placeholder="Nama Petugas...">
                          </div>
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username....">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" placeholder="Password...">
                          </div>
                          <div class="form-group">
                            <label>Id Level</label>
                                <select class="form-control" name="id_level">
                                  <option value="">--- Pilih Level ---</option>
                                  <option value="1">Admin</option>
                                  <option value="2">Petugas</option>
                                </select>
                          </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  include '../layouts/footer.php';
  ?>