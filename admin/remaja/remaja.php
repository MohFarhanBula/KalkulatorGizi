
 

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cek Gizi Usia Remaja & Dewasa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Remaja & Dewasa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




              <?php
                  $umur = $_POST['umur'];
                  $tinggi_badan = $_POST['tinggi_badan']*$_POST['tinggi_badan'];
                  $berat_badan = $_POST['berat_badan'];

                  $hsl = $berat_badan/$tinggi_badan;


                ?>


      <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cek Gizi Remaja Dan Dewasa</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            	<form action="?module=remaja" method="POST">
                <div class="form-group">
                  <label for="exampleSelectRounded0">Jenis Kelamin</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option selected="" disabled=""> -- Pilih Salah Satu --</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
	           	   
	              <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="text" required="" name="umur" id="umur" placeholder="cth : 20" class="form-control">
                </div>
  

              <div class="form-group">
                  <label for="tinggi_badan">Tinggi Badan</label>
                  <input type="text" required="" placeholder="cth : 1.70" name="tinggi_badan" id="tinggi_badan" class="form-control">
                </div>


	              <div class="form-group">
	                <label for="berat_badan">Berat Badan</label>
	                <input type="text" required="" placeholder="cth : 83" name="berat_badan" id="berat_badan" class="form-control">
	              </div>
	               <div class="row">
			        <div class="col-12">
			          <input type="reset" value="Reset" class="btn btn-secondary">
			          <input type="submit" value="Hitung Gizi Remaja & Dewasa" class="btn btn-success float-right">
			        </div>
			      </div>
	            </div>
	            <!-- /.card-body -->  	
	        </form>


          </div>
          <!-- /.card -->



                 <?php

                    if ($hsl <= 18.5) {
                      ?>

                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner" style="text-align: center;">

                                <h1>Berat Badan Kurang</h1>
                   
                              <!-- <h1><?php echo $berat_badan; ?></h1> -->

                            </div>

                          </div>
                        </div>
                      </div>

                      <?php
                    }else if ($hsl <= 22.9){
                      ?>
                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner" style="text-align: center;">

                                <h1>Berat Badan Normal</h1>
                              <!-- <h1><?php echo $berat_badan; ?></h1> -->
                            </div>

                          </div>
                        </div>
                      </div>
                      <?php
                    }elseif ($hsl <= 24.9) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>kelebihan Berat Badan</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($hsl <= 29.9) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Obesitas 1</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }elseif ($hsl >= 30) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                              <div class="inner" style="text-align: center;">

                                  <h1>Obesitas II</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  

                  ?>
  
        
 </div>

