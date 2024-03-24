<?php
session_start();
if(isset($_GET['del'])){
    unset($_SESSION['history'][$_GET['del']]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Riwayat Perhitungan Kalkulator</title>
</head>
<body>
    <div class="container" style="width: 500px">
        <h2>Riwayat Perhitungan</h2>
        <a href="calculator.php" class="btn btn-primary btn-sm">&laquo; Kembali ke Kalkulator</a>

        <table class="table table-bordered">
            <?php foreach($_SESSION['history'] as $idx => $data): ?>
            <tr>
                <td><?=$data[0]?></td>
                <td><?=$data[2]?></td>
                <td><?=$data[1]?></td>
                <td><?=$data[3]?></td>
                <td>
                    <a class="btn btn-danger btn-sm" href="history.php?del=<?=$idx?>"> x </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>