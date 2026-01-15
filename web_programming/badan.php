<!-- php -->
  
<?php
$sum = null;

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $beratbadan = $_POST['berat'];
    $tinggibadan = $_POST['tinggi'] /100;

    $sum = $beratbadan / $tinggibadan

    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>


<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 20%;">
        <div class="card-body">
            <div class="card-title text-center">IMT</div>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="berat" id="berat badan"
                    placeholder="berat" value="<?php echo $berat; ?>">
                </div>

                <div class="mb-3">
                    <input class="form-control" type="number" name="tinggi" id="tinggi badan"
                    placeholder="tinggi" value="<?= $tinggi; ?>">
                </div>
            
                <button class="btn btn-primary w-100">hitung</button>
            </form>
            <?php if ($sum !== null): ?>
                <div class="alert alert-success text-center mt-5">
                    hasil: <?php echo $sum; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>