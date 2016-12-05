<?php
include "koneksi.php";
if(isset($_POST['create']))
{
		//$name = $_FILES['file']['name'];
		//$temp = $_FILES['file']['tmp_name'];
		
		//move_uploaded_file($temp,"foto/".$name);
		 $id = $_POST['Id_Mobil'];
     $merk = $_POST['Merk'];
     $tahun = $_POST['Tahun_Produksi'];
    $negara = $_POST['Negara_Pembuat'];
		
		mysqli_query("INSERT INTO `showroommobil`.`mobil` (`Id_Mobil`, `Merk`, `Model`, `Tipe`, `Pintu`, `Tahun_Produksi`, `Negara_Pembuat`, `Jenis_Produksi`) VALUES ('$id', '$merk', '', '', '', '$tahun', '$negara', '')");

				echo '<script language="javascript">alert("Insert succesfull  !"); document.location="http://localhost:99/PWD2/template/index.php?page=tabel";</script>';
		
}
?>
<section class="content">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FORM ISIAN DATA MOBIL </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id_Mobil</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="Id_Mobil" placeholder="Inputkan Id_Mobil" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Merk</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="Merk" placeholder="Inputkan Merk Mobil" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun Produksi</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="Tahun_Produksi" placeholder="Inputkan Tahun Produksi" type="text">
                  </div>
                </div>
				
			     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Negara Pembuat</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="Negara_Pembuat" placeholder="Inputkan Negara Pembuat" type="text">
                  </div>
                </div>
				
                </div>      
             
			  
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right" name="create">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
			
          </div>
</section>