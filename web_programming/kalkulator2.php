<!-- php -->
  
<?php
$sum = null;

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $firstNumber = $_POST['number1'];
    $secondNumber = $_POST['number2'];
    $operator = $_POST['operator'];

    if ($operator == "+") {
        $sum = $firstNumber + $secondNumber;
    }
    if ($operator == "*") {
        $sum = $firstNumber * $secondNumber;
    }
    if ($operator == "-") {
        $sum = $firstNumber - $secondNumber;
    }
    if ($operator == "/") {
        $sum = $firstNumber / $secondNumber;
    }
}

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
            <div class="card-title text-center">kalkulator</div>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="number1" id="number1"
                    placeholder="first number" value="<?php echo $firstNumber; ?>">
                </div>

                <div class="mb-3">
                    <input class="form-control" type="number" name="number2" id="number2"
                    placeholder="second number" value="<?= $secondNumber; ?>">
                </div>

                <select class="form-select mb-3" aria-label="Default select example " name="operator">
                     <option selected>Open this select menu</option>
                     <option value="+">tambah</option>
                     <option value="*">kali</option>
                     <option value="-">kurang</option>
                     <option value="/">bagi</option>
                  </select>
                
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