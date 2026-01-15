<?php
$kategori = null;
$kategori2 = null;
$kategori3 = null;
$kategori4 = null;
$kategori5 = null;
$kategori6 = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nilai1 = $_POST['number1'];
    $nilai2 = $_POST['number2'];
    $nilai3 = $_POST['number3'];
    $nilai4 = $_POST['number4'];
    $nilai5 = $_POST['number5'];
    $nilai6 = $_POST['number6'];
    // mengambil data

    // mengolah
    
    if($nilai1 == 4){
        $kategori1 = "benar";
    } else {
        $kategori1 = "salah";      
    }

     if($nilai2 == 5){
        $kategori2 = "benar";
    } else {
        $kategori2 = "salah";      
    }

     if($nilai3 == 6){
        $kategori3 = "bemar";
    } else {
        $kategori3 = "salah";      
    }

     if($nilai4 == 8){
        $kategori4 = "benar";
    } else {
        $kategori4 = "salah";
        
    }
     if($nilai5 == 1){
        $kategori5 = "benar";
    } else {
        $kategori5 = "salah";      
    }
     if($nilai6 == 8){
        $kategori6 = "benar";
    } else {
        $kategori6 = "salah";      
    }
}
?>
<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>Penjumlahan PHP</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 50%">
        <div class="card-body">
            <H5 class="card-title text-center mb-3211">ColorBlindTest</h5>
            <form method="POST">
                <div class="row">
                <div class=" col-lg-6 mb-3 text-center ">
                     <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/4-med.png" alt="">
                    <input class="form-control " type="number" name="number1" id="" placeholder="">
                   
                </div>
                <div class="col-lg-6 mb-3 text-center">
                     <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/5-med.png" alt="">
                    <input class="form-control" type="number" name="number2" id="" placeholder="">
                </div>

                <div class=" col-lg-6 mb-3 text-center">
                     <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/6-light2.png" alt="">
                    <input class="form-control" type="number" name="number3" id="" placeholder="">
                </div>

                 <div class=" col-lg-6 mb-3 text-center">
                     <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/8-light.png" alt="">
                    <input class="form-control" type="number" name="number4" id="" placeholder="">
                </div>

                <div class=" col-lg-6 mb-3 text-center">
                     <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/1-light2.png" alt="">
                    <input class="form-control" type="number" name="number5" id="" placeholder="">
                </div>

                <div class=" col-lg-6 mb-3 text-center">
                     <img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/8-dark.png" alt="">
                    <input class="form-control" type="number" name="number6" id="" placeholder="">
                </div>

                </div>
           
                

                <button class=" btn btn-primary w-100"> submit </button>
            </form>

             <?php
             if ($kategori1 !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori1; ?>
                </div>
            <?php endif; ?>

               <?php
             if ($kategori2 !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori2; ?>
                </div>
            <?php endif; ?>

               <?php
             if ($kategori3 !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori3; ?>
                </div>
            <?php endif; ?>

               <?php
             if ($kategori4 !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori4; ?>
                </div>
            <?php endif; ?>

             <?php
             if ($kategori5 !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori5; ?>
                </div>
            <?php endif; ?>

             <?php
             if ($kategori6 !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori6; ?>
                </div>
            <?php endif; ?>

            


            


        






        </div>
</body>
</html>
