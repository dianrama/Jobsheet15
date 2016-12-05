<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="javascript" href="bootstrap/js/bootstrap.js">
</head>
<body>
 <?php
    include "koneksi.php";
  ?>
<section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel Showroom Mobil</h3>

              <div style="float: right;">
                 <a href="http://localhost:99/PWD2/template/index.php?page=form"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#Create">Create</button></a>
                  <button type="button" class="btn btn-info" TYPE="button" onClick="history.go(0)" >Read</button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Update">Update</button>
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">Delete</button>
               </div>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">ID Mobil</th>
                  <th>Merk</th>
                  <th>Tahun</th>
                  <th style="width: 200px">Negara</th>
                </tr>
                <?php
                error_reporting(1);
                while($row = mysql_fetch_array($query)){
                
                ?>
                <tr>
                  <td><?php echo $row['Id_Mobil']."<br>";?></td>
                  <td><?php echo $row['Merk']."<br>";?></td>
                  <td><?php echo $row['Tahun_Produksi']."<br>";?></td>
                  <td><?php echo $row['Negara_Pembuat']."<br>";?></td>
                </tr>
                <?php } ?>
              </tbody></table>
            </div>
           
      </div>
      <!-- /.row -->
      
    </section>    
   
      <div id="Update" class="modal fade" role="dialog">
      <div class="modal-dialog">       
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Data</h4>
          </div>
          <div class="modal-body">
            <form class="form-group" method="POST">
                <input type="text" name="id" placeholder="ID Mobil" class="form-control"><br>
                <input type="text" name="merk" placeholder="Merk" class="form-control"><br>
                <input type="text" name="tahun" placeholder="Tahun Produksi" class="form-control"><br>
                <input type="text" name="negara" placeholder="Negara Pembuat" class="form-control"><br>
                <button type="submit" class="btn btn-warning" name="update" onClick="history.go(0)">Update</button>
            </form>
          </div>
          <?php
              error_reporting(1);
              include "koneksi.php";
              $id = $_POST['id'];
              $merk = $_POST['merk'];
              $tahun = $_POST['tahun'];
              $negara = $_POST['negara'];
              if (isset($_POST['update'])) {
                $sql = "UPDATE `mobil` SET `Merk`='$merk',`Tahun_Produksi`='$tahun',`Negara_Pembuat`='$negara' WHERE `Id_Mobil`='$id'";
      $exe = mysql_query($sql);
      header("refresh:0");
              }
          ?>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
    
    <!-- Delete Form -->
      <div id="Delete" class="modal fade" role="dialog">
      <div class="modal-dialog">

       
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Item</h4>
          </div>
          <div class="modal-body">
            <form class="form-group" method="POST">
                <input type="text" name="id" placeholder="ID Mobil" class="form-control"><br>
                <button type="submit" class="btn btn-danger" name="delete" onClick="history.go(0)">Delete</button>
            </form>
          </div>
          <?php
             error_reporting(1);
              include "koneksi.php";
              $id = $_POST['id'];
              if (isset($_POST['delete'])) {
                $sql = "DELETE FROM `mobil` WHERE `Id_Mobil`='$id'";
                $exe = mysql_query($sql);
                header("refresh:1");
              }
          ?>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div> 
            
    </body>
</html>