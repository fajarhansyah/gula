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
              <li class="breadcrumb-item active">Hapus data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label>Kode Plant</label>
                    <input type="text" name="kode_plant" value="1201" class="form-control" readonly>
                  </div>
                  <div class="form-group" hidden>
                    <label>User Id</label>
                    <input type="text" name="user_id" value="OTHRS_GEMP1201" class="form-control"  readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Giling</label>
                    <input type="date" name="tanggal_giling" class="form-control" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin ta Pean ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Mengapus data 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php
             if( isset($_POST['kode_plant']) && isset($_POST['tanggal_giling']) && isset($_POST['user_id']))
             {
            $json = file_get_contents('https://simpg-db.holding-perkebunan.com/deleteKinerjaHarian.php?kode_plant='.$_POST["kode_plant"].'&tanggal_giling='.$_POST["tanggal_giling"].'&user_id='.$_POST["user_id"].'');
             }
            ?>
            <!-- Button trigger modal -->

            <!-- Modal -->
                                                                    
          </div>
          <!--/.col (left) -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include_once 'footer.php'; ?>
