<?php
$kategori = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nilai = $_POST['number'];
    // mengambil data

    // mengolah
    
    if($nilai > 75){
        $kategori = "Lulus";
    } else {
        $kategori = "Tidak Lulus";
        
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
    <div class="card shadow" style="width: 23%">
        <div class="card-body">
            <H5 class="card-title text-center">Kalkulator</h5>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="number" id="" placeholder=""
                        >
                </div>

                <button class=" btn btn-primary w-100"> Hitung </button>
            </form>

             <?php if ($kategori !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $kategori; ?>
                </div>
            <?php endif; ?>


        






        </div>
</body>
</html>
