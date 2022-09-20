
 

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cek Gizi Bayi & Balita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bayi & Balita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


 <div class="container-fluid">
  <div style="text-align:center; ">
            <h1>Pilih Jenis Kelamin</h1>
          </div>
    <div class="row">
         <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align: center;">Laki - Laki</h3>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="?module=umur_laki" class="small-box-footer">Pilih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Perempuan</h3>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="?module=umur_perempuan" class="small-box-footer">Pilih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </div>
  </div>


              <?php
                  $umur = $_POST['umur'];
                  $tinggi_badan = $_POST['tinggi_badan'];
                  $berat_badan = $_POST['berat_badan'];

                ?>


      <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cek Gizi Bayi Dan Balita</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            	<form action="?module=laki_laki" method="POST">
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <input type="text" value="laki-laki" readonly="" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                </div>
	           	   
	              <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="text" value="0-24 Bulan" readonly="" name="umur" id="umur" class="form-control">
                </div>
  
                <div class="form-group">
                  <label for="tb">Tinggi Badan</label>
                  <select id="tb" required="" class="form-control custom-select" name="tinggi_badan">
                    <option selected disabled>-- Pilih Salah Satu --</option>
                  <?php 
                    $query = mysqli_query($koneksi, "SELECT * FROM bayi_balita_laki_laki");
                    while ($d = mysqli_fetch_array($query)) {

                      ?>
                        <option value="<?php echo $d['panjang_badan']; ?>"><?php echo $d['panjang_badan']; ?> Cm </option>
                      <?php     
                    }
                      
                  ?>
                  </select>
                </div>

	              <div class="form-group">
	                <label for="berat_badan">Berat Badan</label>
	                <input type="text" required="" placeholder="cth : 1.9" name="berat_badan" id="berat_badan" class="form-control">
	              </div>
	               <div class="row">
			        <div class="col-12">
			          <input type="reset" value="Reset" class="btn btn-secondary">
			          <input type="submit" value="Hitung Gizi Anak" class="btn btn-success float-right">
			        </div>
			      </div>
	            </div>
	            <!-- /.card-body -->  	
	        </form>


          </div>
          <!-- /.card -->



                 <?php
                    $query1 = mysqli_query($koneksi, "SELECT * FROM bayi_balita_laki_laki WHERE panjang_badan = '$tinggi_badan' ");

                    while($data = mysqli_fetch_array($query1)){
                      $kurang3sd = $data['kurang3sd'];
                      $kurang2sd = $data['kurang2sd'];
                      $kurang1sd = $data['kurang1sd'];
                      $median = $data['median'];
                      $tambah1sd = $data['tambah1sd'];
                      $tambah2sd = $data['tambah2sd'];
                      $tambah3sd = $data['tambah3sd'];
                   

                    // echo $kurang3sd;
                    //      echo $kurang2sd;
                    //      echo $kurang1sd;
                    //      echo $median;  
                    //      echo $tambah1sd;  
                    //      echo $tambah2sd;  
                    //      echo $tambah3sd;  

                    if ($berat_badan <= $kurang3sd) {
                      ?>

                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner" style="text-align: center;">

                                <h1>Gizi Buruk</h1>
                   
                              <!-- <h1><?php echo $berat_badan; ?></h1> -->

                            </div>

                          </div>
                        </div>
                      </div>

                      <?php
                    }else if ($berat_badan <= $kurang2sd){
                      ?>
                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner" style="text-align: center;">

                                <h1>Kurang Gizi</h1>
                              <!-- <h1><?php echo $berat_badan; ?></h1> -->
                            </div>

                          </div>
                        </div>
                      </div>
                      <?php
                    }elseif ($berat_badan <= $kurang1sd) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Normal</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($berat_badan <= $median) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Normal</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($berat_badan <= $tambah1sd) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Resiko Berat Badan Lebih</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($berat_badan <= $tambah2sd) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Berat Badan Lebih</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($berat_badan <= $tambah3sd) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Obesitas</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($berat_badan >= $tambah3sd) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Obesitas</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  }

                  ?>
  
        
 </div>

