<?php 
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Komponen Kerja</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label>Kode Plant</label>
                    <input type="text" name="kode_plant" value="1201"  class="form-control"  readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Giling </label>
                    <input type="date" name="tanggal_giling" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Icumsa Gula</label>
                    <input type="number" name="icumsa_gula" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>bbt meja tebu A</label>
                    <input type="number" name="bbt_meja_tebu_a" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>bbt meja tebu B</label>
                    <input type="number" name="bbt_meja_tebu_b" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>bbt meja tebu C</label>
                    <input type="number" name="bbt_meja_tebu_c" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>bbt meja tebu D</label>
                    <input type="number" name="bbt_meja_tebu_d" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>bbt meja tebu E</label>
                    <input type="number" name="bbt_meja_tebu_e" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Brix npp</label>
                    <input type="number" name="brix_npp" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Pol Npp</label>
                    <input type="number" name="pol_npp" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>n nira</label>
                    <input type="number" name="n_nira" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>user id</label>
                    <input type="text" name="user_id" class="form-control"  value="OTHRS_GEMP1201" readonly>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php
             if( isset($_POST['kode_plant']) && isset($_POST['tanggal_giling']) && isset($_POST['icumsa_gula']) && isset($_POST['bbt_meja_tebu_a']) && isset($_POST['bbt_meja_tebu_b']) && isset($_POST['bbt_meja_tebu_c']) && isset($_POST['bbt_meja_tebu_d']) && isset($_POST['bbt_meja_tebu_e']) && isset($_POST['brix_npp']) && isset($_POST['pol_npp']) && isset($_POST['n_nira']) && isset($_POST['user_id']))
             {
            $json = file_get_contents('https://simpg-db.holding-perkebunan.com/addKinerjaHarian.php?kode_plant='.$_POST["kode_plant"].'&tanggal_giling='.$_POST["tanggal_giling"].'&icumsa_gula='.$_POST["icumsa_gula"].'&bbt_meja_tebu_a='.$_POST["bbt_meja_tebu_a"].'&bbt_meja_tebu_b='.$_POST["bbt_meja_tebu_b"].'&bbt_meja_tebu_c='.$_POST["bbt_meja_tebu_c"].'&bbt_meja_tebu_d='.$_POST["bbt_meja_tebu_d"].'&bbt_meja_tebu_e='.$_POST["bbt_meja_tebu_e"].'&brix_npp='.$_POST["brix_npp"].'&pol_npp='.$_POST["pol_npp"].'&n_nira='.$_POST["n_nira"].'&user_id='.$_POST["user_id"].'');
             }
            ?>
          </div>
          <!--/.col (left) -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php'; ?>