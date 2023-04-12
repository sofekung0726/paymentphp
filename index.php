<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<center>
<div class="container">
  <div class="row ">
    <div class="col">
       <div class="card" style="width: 24rem;">
       <?php
                        if(isset($_SESSION['error'])){
                    ?>
                    <div class="alert-md alert-danger" role="alert">
                       <p style="font-size:small;text-align:center;margin-top:0%;">
                       <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                       ?>
                       </p>
                    </div>
                    <?php
                        }       
                    ?>
  <form action="./control.php" method = "post">
  <div class="card-body">
    <h5 class="card-title">เลือกธนาคาร</h5>
   

    <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="bank">
    <option selected> เลือก ธนาคาร</option>
    <option value="BBL">BBL</option>
    <option value="Kbank">Kbank</option>
    <option value="krungsri">krungsri</option>
    <option value="ktb">ktb</option>
    <option value="scb">scb</option>
    <option value="tmb">tmb</option>
  </select>
  <label for="floatingSelect">Submit bank</label>
</div>
     <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">บัญชีปลายทาง </label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="atm" placeholder="กรอกบัญชีปลายทาง">
                    </div>
                  </div>
  
    <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">ชื่อ </label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="bankname" placeholder="ชื่อจริง">
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">นามสกุล </label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="first_name" placeholder="นามสกุล">
                    </div>
                  </div>
    
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">จำนวนเงินที่โอน </label>
                    <input style="font-size:small;" type="text" class="form-control" id="formGroupExampleInput2" name="balance" placeholder="จำนวนเงิน">
                    </div>
                  </div>
  
  
</div>

</p>
<div class="d-grid gap-2">
                                    <button type="submit" name="submit" class="btn btn-primary btn-sm">ยืนยันการโอนเงิน</button>
                </div>
  </div>
  </for>
</div>
    </div>
   
</div>
   
</center>

</body>
</html>

