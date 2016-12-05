
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<section class="content-header">
      <h1>
        Form Pengelolaan Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Form Pengelolaan Data</li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <!-- left column -->
        
          <!-- Create form  -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_mobil" class="col-sm-2 control-label">ID_Mobil</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_mobil" placeholder="ID_Mobil">
                  </div>
                </div>
                <div class="form-group">
                 <label for="merk" class="col-sm-2 control-label">Merk</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="merk" placeholder="Merk">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tahun" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun" placeholder="Tahun">
                  </div>
                  </div>
                <div class="form-group">
                  <label for="Negara" class="col-sm-2 control-label">Negara</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="negara" placeholder="Negara">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer" >                
                <input type="submit" class="btn btn-warning"  name="create" value="Create">         
              </div>
              <!-- /.box-footer -->              
            </form>
          </div>
          <?php
            include "koneksi.php";
            if (isset($_POST['create'])) {
               $id = $_POST['id_mobil'];
                $merk = $_POST['merk'];
                $tahun = $_POST['tahun'];
                $negara = $_POST['negara'];
                mysql_query("INSERT INTO `showroommobil`.`mobil` (`Id_Mobil`, `Merk`, `Model`, `Tipe`, `Pintu`, `Tahun_Produksi`, `Negara_Pembuat`, `Jenis_Produksi`) VALUES ('$id', '$merk', '', '', '', '$tahun', '$negara', '')");
               
               echo '<script language="javascript">alert("Insert successfull !"); document.location="http://localhost:99/PWD2/template/index.php?page=tabel";</script>';
                }
          ?>
          <!-- /.box -->

          <!-- Update form 
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Form</h3>
            </div>
            
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_mobil" class="col-sm-2 control-label">ID_Mobil</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_mobil" placeholder="ID_Mobil">
                  </div>
                </div>
                <div class="form-group">
                 <label for="merk" class="col-sm-2 control-label">Merk</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="merk" placeholder="Merk">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tahun" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun" placeholder="Tahun">
                  </div>
                  </div>
                <div class="form-group">
                  <label for="Negara" class="col-sm-2 control-label">Negara</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="negara" placeholder="Negara">
                  </div>
                </div>
              </div>
              
              <div class="box-footer">                
                <input href="?page=tabel" type="submit" class="btn btn-primary"  name="update" value="Update">  
              </div>
              
            </form>
          </div>
           
       </div>
       <?php
        /*include "koneksi.php";
        if (isset($_POST['update'])) {
               $id = $_POST['id_mobil'];
                $merk = $_POST['merk'];
                $tahun = $_POST['tahun'];
                $negara = $_POST['negara'];
                mysql_query("UPDATE `mobil` SET `Merk`='$merk',`Tahun_Produksi`='$tahun',`Negara_Pembuat`='$negara' WHERE `Id_Mobil`='$id'");
               
               echo '<script language="javascript">alert("Update successfull !"); document.location="http://localhost:99/PWD2/template/index.php?page=tabel";</script>';
                }*/
        ?>
        
        <div class="col-md-6">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Delete Form</h3>
            </div>
         
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_mobil" class="col-sm-2 control-label">ID_Mobil</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_mobil" placeholder="ID_Mobil">
                  </div>
                </div>
                
              </div>
            
              <div class="box-footer">                
                <input type="submit" class="btn btn-danger"  name="delete" value="Delete"> 
              </div>
              
            </form>
          </div>
        
        </div>
       
      </div>
      <?php
        /*include "koneksi.php";
        if (isset($_POST['delete'])) {
               $id = $_POST['id_mobil'];
                $merk = $_POST['merk'];
                $tahun = $_POST['tahun'];
                $negara = $_POST['negara'];
                mysql_query("DELETE FROM `mobil` WHERE `Id_Mobil`='$id'");
               
               echo '<script language="javascript">alert("Delete successfull !"); document.location="http://localhost:99/PWD2/template/index.php?page=tabel";</script>';
                }*/
        ?> -->
      
    </section>
  </body>
</html>