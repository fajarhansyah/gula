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
              <li class="breadcrumb-item active">Tambah Data</li>
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
                    <label>Pass Key</label>
                    <input type="text" name="in_pass_key" value="dsb89657" class="form-control" readonly>
                  </div>
                  <div class="form-group" hidden>
                    <label>Kode Plant</label>
                    <input type="text" name="in_kode_plant" value="1201"  class="form-control"  readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Giling </label>
                    <input type="date" name="in_tgl_giling" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Hari giling ke</label>
                    <input type="text" name="in_hari_giling_ke" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Jumlah Tebu Masuk(Ton)</label>
                    <input type="text" name="in_TEBU_MASUK" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Sisa Pagi (Ton)</label>
                    <input type="text" name="in_SISA_PAGI_TON" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label >Sisa Pagi (%) </label>
                    <input type="text" name="in_SISA_PAGI_PERSEN" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Luas Kebun Digiling TR SBH (Ha)</label>
                    <input type="text" name="in_LUAS_KEBUN_DIGILING_TR_SBH" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Luas Kebun Digiling TR SPT (Ha)</label>
                    <input type="text" name="in_LUAS_KEBUN_DIGILING_TR_SPT" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Luas Kebun Digiling TS (Ha)</label>
                    <input type="text" name="in_LUAS_KEBUN_DIGILING_TS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Jumlah Tebu Digiling TR SBH (Ton)</label>
                    <input type="text" name="in_JUMLAH_TEBU_DIGILING_TR_SBH" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Jumlah Tebu Digiling TR SPT (Ton)</label>
                    <input type="text" name="in_JUMLAH_TEBU_DIGILING_TR_SPT" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Jumlah Tebu Digiling TS (Ton)</label>
                    <input type="text" name="in_JUMLAH_TEBU_DIGILING_TS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produktivitas TR SBH (Ton/Ha)</label>
                    <input type="text" name="in_PRODUKTIVITAS_TR_SBH" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Produktivitas TR SPT (Ton/Ha)</label>
                    <input type="text" name="in_PRODUKTIVITAS_TR_SPT" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produktivitas TS (Ton/Ha)</label>
                    <input type="text" name="in_PRODUKTIVITAS_TS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Hablur TR SBH (Ton)</label>
                    <input type="text" name="in_HABLUR_TR_SBH" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Hablur TR SPT (Ton)</label>
                    <input type="text" name="in_HABLUR_TR_SPT" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Hablur TS (Ton)</label>
                    <input type="text" name="in_HABLUR_TS" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Produksi Gula Ptpn EKS SBH (Ton)</label>
                    <input type="text" name="in_PRODUKSI_GULA_PTPN_EKS_SBH" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produksi Gula Ptpn EKS SPT (Ton)</label>
                    <input type="text" name="in_PRODUKSI_GULA_PTPN_EKS_SPT" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produksi Gula Ptpn EKS TS (Ton)</label>
                    <input type="text" name="in_PRODUKSI_GULA_PTPN_EKS_TS" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Produksi Gula PTR (Ton)</label>
                    <input type="text" name="in_PRODUKSI_GULA_PTR" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produksi Tetes Ptpn EKS SBH (Ton)</label>
                    <input type="text" name="in_PRODUKSI_TETES_PTPN_EKS_SBH" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label >Produksi Tetes Ptpn EKS SPT (Ton)</label>
                    <input type="text" name="in_PRODUKSI_TETES_PTPN_EKS_SPT" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produksi Tetes Ptpn EKS TS (Ton)</label>
                    <input type="text" name="in_PRODUKSI_TETES_PTPN_EKS_TS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produksi Tetes PTR (Ton)</label>
                    <input type="text" name="in_PRODUKSI_TETES_PTR" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Produktivitas Gula(Ton/Ha)</label>
                    <input type="text" name="in_PRODUKTIVITAS_GULA" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Pol Tebu (%)</label>
                    <input type="text" name="in_POL_TEBU" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>KES (TCD)</label>
                    <input type="text" name="in_KES" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>KIS (TCD)</label>
                    <input type="text" name="in_KIS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>ME (%)</label>
                    <input type="text" name="in_ME" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>BHR (%)</label>
                    <input type="text" name="in_BHR" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label >Or Overall (%)</label>
                    <input type="text" name="in_OR_OVERALL" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Ampas (%)</label>
                    <input type="text" name="in_AMPAS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Blotong (%)</label>
                    <input type="text" name="in_BLOTONG" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>OV (%)</label>
                    <input type="text" name="in_OV" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Tetes (%)</label>
                    <input type="text" name="in_TETES" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Jam Berhenti Dalam (%)</label>
                    <input type="text" name="in_JAM_BERHENTI_DALAM" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Jam Berhenti Luar (%)</label>
                    <input type="text" name="in_JAM_BERHENTI_LUAR" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Jam Berhenti Total (%)</label>
                    <input type="text" name="in_JAM_BERHENTI_TOTAL" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label >Keterangan Jam Berhenti</label>
                    <input type="text" name="in_KETERANGAN_JAM_BERHENTI" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Prod GUla EKS RS (Ton)</label>
                    <input type="text" name="in_PROD_GULA_EKS_RS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Prod Tetes EKS RS (Ton)</label>
                    <input type="text" name="in_PROD_TETES_EKS_RS" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Raw Sugar Diolah (Ton)</label>
                    <input type="text" name="in_RAW_SUGAR_DIOLAH" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Rendemen EKS RS (%)</label>
                    <input type="text" name="in_RENDEMEN_EKS_RS" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Produksi Gula Non Spect Gula Sisan (Ton)</label>
                    <input type="text" name="in_PRODUKSI_GULA_NON_SPECT_GULA_SISAN" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label>Produksi Gula non Spect Gula Kristal Putih Non SNI (Ton)</label>
                    <input type="text" name="in_PRODUKSI_GULA_NON_SPECT_GULA_KRISTAL_PUTIH_NON_SNI" class="form-control" >
                  </div>
                  <div class="form-group" hidden>
                    <label>User ID</label>
                    <input type="text" name="in_user_id" value="OTHRS_GEMP1201" class="form-control" readonly>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php
             if( isset($_POST['in_pass_key']) && isset($_POST['in_kode_plant']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']) && isset($_POST['in_tgl_giling']))
             {
            $json = file_get_contents('https://simpg-db.holding-perkebunan.com/createKinerjaHarian.php?in_pass_key='.$_POST["in_pass_key"].'&in_kode_plant='.$_POST["in_kode_plant"].'&in_tgl_giling='.$_POST["in_tgl_giling"].'&in_hari_giling_ke='.$_POST["in_hari_giling_ke"].'&in_TEBU_MASUK='.$_POST["in_TEBU_MASUK"].'&in_SISA_PAGI_TON='.$_POST["in_SISA_PAGI_TON"].'&in_SISA_PAGI_PERSEN='.$_POST["in_SISA_PAGI_PERSEN"].'&in_LUAS_KEBUN_DIGILING_TR_SBH='.$_POST["in_LUAS_KEBUN_DIGILING_TR_SBH"].'&in_LUAS_KEBUN_DIGILING_TR_SPT='.$_POST["in_LUAS_KEBUN_DIGILING_TR_SPT"].'&in_LUAS_KEBUN_DIGILING_TS='.$_POST["in_LUAS_KEBUN_DIGILING_TS"].'&in_JUMLAH_TEBU_DIGILING_TR_SBH='.$_POST["in_JUMLAH_TEBU_DIGILING_TR_SBH"].'&in_JUMLAH_TEBU_DIGILING_TR_SPT='.$_POST["in_JUMLAH_TEBU_DIGILING_TR_SPT"].'&in_JUMLAH_TEBU_DIGILING_TS='.$_POST["in_JUMLAH_TEBU_DIGILING_TS"].'&in_PRODUKTIVITAS_TR_SBH='.$_POST["in_PRODUKTIVITAS_TR_SBH"].'&in_PRODUKTIVITAS_TR_SPT='.$_POST["in_PRODUKTIVITAS_TR_SPT"].'&in_PRODUKTIVITAS_TS='.$_POST["in_PRODUKTIVITAS_TS"].'&in_HABLUR_TR_SBH='.$_POST["in_HABLUR_TR_SBH"].'&in_HABLUR_TR_SPT='.$_POST["in_HABLUR_TR_SPT"].'&in_HABLUR_TS='.$_POST["in_HABLUR_TS"].'&in_PRODUKSI_GULA_PTPN_EKS_SBH='.$_POST["in_PRODUKSI_GULA_PTPN_EKS_SBH"].'&in_PRODUKSI_GULA_PTPN_EKS_SPT='.$_POST["in_PRODUKSI_GULA_PTPN_EKS_SPT"].'&in_PRODUKSI_GULA_PTPN_EKS_TS='.$_POST["in_PRODUKSI_GULA_PTPN_EKS_TS"].'&in_PRODUKSI_GULA_PTR='.$_POST["in_PRODUKSI_GULA_PTR"].'&in_PRODUKSI_TETES_PTPN_EKS_SBH='.$_POST["in_PRODUKSI_TETES_PTPN_EKS_SBH"].'&in_PRODUKSI_TETES_PTPN_EKS_SPT='.$_POST["in_PRODUKSI_TETES_PTPN_EKS_SPT"].'&in_PRODUKSI_TETES_PTPN_EKS_TS='.$_POST["in_PRODUKSI_TETES_PTPN_EKS_TS"].'&in_PRODUKSI_TETES_PTR='.$_POST["in_PRODUKSI_TETES_PTR"].'&in_PRODUKTIVITAS_GULA='.$_POST["in_PRODUKTIVITAS_GULA"].'&in_POL_TEBU='.$_POST["in_POL_TEBU"].'&in_KES='.$_POST["in_KES"].'&in_KIS='.$_POST["in_KIS"].'&in_ME='.$_POST["in_ME"].'&in_BHR='.$_POST["in_BHR"].'&in_OR_OVERALL='.$_POST["in_OR_OVERALL"].'&in_AMPAS='.$_POST["in_AMPAS"].'&in_BLOTONG='.$_POST["in_BLOTONG"].'&in_OV='.$_POST["in_OV"].'&in_TETES='.$_POST["in_TETES"].'&in_JAM_BERHENTI_DALAM='.$_POST["in_JAM_BERHENTI_DALAM"].'&in_JAM_BERHENTI_LUAR='.$_POST["in_JAM_BERHENTI_LUAR"].'&in_JAM_BERHENTI_TOTAL='.$_POST["in_JAM_BERHENTI_TOTAL"].'&in_KETERANGAN_JAM_BERHENTI='.$_POST["in_KETERANGAN_JAM_BERHENTI"].'&in_PROD_GULA_EKS_RS='.$_POST["in_PROD_GULA_EKS_RS"].'&in_PROD_TETES_EKS_RS='.$_POST["in_PROD_TETES_EKS_RS"].'&in_RAW_SUGAR_DIOLAH='.$_POST["in_RAW_SUGAR_DIOLAH"].'&in_RENDEMEN_EKS_RS='.$_POST["in_RENDEMEN_EKS_RS"].'&in_PRODUKSI_GULA_NON_SPECT_GULA_SISAN='.$_POST["in_PRODUKSI_GULA_NON_SPECT_GULA_SISAN"].'&in_PRODUKSI_GULA_NON_SPECT_GULA_KRISTAL_PUTIH_NON_SNI='.$_POST["in_PRODUKSI_GULA_NON_SPECT_GULA_KRISTAL_PUTIH_NON_SNI"].'&in_user_id='.$_POST["in_user_id"].'');
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