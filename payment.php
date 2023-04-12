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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
      
         
    </style>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">   </div>
        
            <div class="col-4 form">
                <br>
                    <h2>Payment slip  <i style="font-size:18px"class="bi bi-coin"></i></h2>
                    <p style="font-size:small;">รายละเอียดการโอนเงิน</p>
                    <hr>
                    <p style="font-size:small;">ธนาคารปลายทาง :
                            <?php
                                switch($_SESSION['bank_direc']){
                                            case"krungsri":
                                                echo "Krungsri   <img src='./img/krungsri.png' width='20px'alt=''>";
                                            break; 
                                            case"krungthai": 
                                                echo "krungthai   <img src='./img/ktb.png' width='20px'alt=''>";
                                            break; 
                                            case"kasikorn": 
                                                echo "kasikorn   <img src='./img/kbank.png' width='20px'alt=''>";
                                            break; 
                                            case"bangkok":
                                                echo "Bankkok   <img src='./img/bbl.png' width='20px'alt=''>";
                                            break; 
                                            case"thaipanit": 
                                                echo "Thaipanis   <img src='./img/scb.png' width='20px'alt=''>";
                                            break; 
                                            case"ttb": 
                                                echo "Thanachat   <img src='./img/tmg.png' width='20px'alt=''>";
                                            break; 

                                        }
                            
                            ?>
                    </p>
                    <p style="font-size:small;">บัญชีปลายทาง : <?= $_SESSION['atm']?></p>
                    <p style="font-size:small;">ชื่อ-นามสกุล : <?= $_SESSION['bankname']?>  <?= $_SESSION['lastname']?></p>
                    <p style="font-size:small;">จำนวนเงินที่โอน: <?= $_SESSION['balance']?> บาท</p>
            </div>


            <div class="col-4">   </div>

        </div>
    </div>
</body>
</html>