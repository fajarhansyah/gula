<?php 
include_once 'header.php';
include_once 'sidebar.php';
error_reporting(0);
?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header col-4">
                    <form action="view.php" method="post">
                    <div class="form-group row">
                        <label for="example-date-input" class="col-4 col-form-label">Mulai tanggal </label>
                        <div class="col-8">
                            <input class="form-control" type="date"  name="dari_tgl"  id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-4 col-form-label">Sampai dengan</label>
                        <div class="col-8">
                            <input class="form-control" type="date" name="sd_tgl"  id="example-date-input">
                        </div>
                    </div>
                    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                    </form>
                </div>
                <?php
                if(isset($_POST["dari_tgl"]) && isset($_POST["sd_tgl"]))
                {
                    $startDate = new \DateTime($_POST['dari_tgl']);
                    $endDate = new \DateTime($_POST['sd_tgl']);
                    $json = file_get_contents('https://simpg-db.holding-perkebunan.com/getKinerjaHarian.php?kode_plant=1201&dari_tgl='.$_POST["dari_tgl"].'&sd_tgl='.$_POST["sd_tgl"].'');
                    $data = json_decode($json);
                    $datas = array();
                    foreach ($data as $key => $value) {
                        $datas[$value->komponen]['ptpn'] = $value->ptpn;
                        $datas[$value->komponen]['pg'] = $value->pg;
                        $datas[$value->komponen]['satuan_komponen'] = $value->satuan_komponen;
                        $datas[$value->komponen]['grup_komponen'] = $value->grup_komponen;
                        $datas[$value->komponen]['komponen'] = $value->komponen;
                        $datas[$value->komponen]['angka'][] = $value->nilai_komponen;
                    }
                }
                
                ?>
                <!-- /.card-header -->
                <div class="card-body" style="overflow-x:auto;">
                    Export to :
                    <table id="example" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>PTPN</th>
                        <th>PG</th>
                        <th>Grub Komponen</th>
                        <th>Komponen</th>
                        <th>Satuan</th>
                        <?php
                        for($date = $startDate; $date <= $endDate; $date->modify('+1 day')){
                        ?>
                        <th><?=$date->format('d-m-Y'); ?></th>
                        <?php } ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($datas as $key => $value) { ?>
                        <tr>
                            <td><?= $value["ptpn"] ?></td>
                            <td><?= $value["pg"] ?></td>
                            <td><?= $value["grup_komponen"] ?></td>
                            <td><?= $value["komponen"] ?></td>
                            <td><?= $value["satuan_komponen"] ?></td>
                            <?php foreach ($value['angka'] as $keys => $values) { ?>
                            <td><?= $values ?></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
    </div>
    <?php include_once 'footer.php'; ?>