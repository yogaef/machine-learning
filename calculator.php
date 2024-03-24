<?php
include "functions.php";

$angka1 = "0";
$angka2 = "0";
$operator = "+";
$hasil = "0";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = hitung($angka1, $angka2, $operator);
    add_session_hist($angka1, $angka2, $operator, $hasil);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Kalkulator</title>
</head>
<body>
    <div>
        <div>
            <div class="container">
                <h2>Kalkulator Keren Sekali
                    <a class="btn btn-primary btn-sm" href="history.php">Lihat Riwayat &raquo;</a>
                </h2>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <th>Angka 1</th>
                            <th>Opr</th>
                            <th>Angka 2</th>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-control" type="text" name="angka1">
                            </td>
                            <td>
                                <select class="form-control" name="operator">
                                    <option value="+" <?=($operator== '+'?"selected":"")?>> + </option>
                                    <option value="-" <?=($operator== '-'?"selected":"")?>> - </option>
                                    <option value="X" <?=($operator== 'X'?"selected":"")?>> X </option>
                                    <option value="/" <?=($operator== '/'?"selected":"")?>> / </option>
                                </select>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="angka2">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><input class="btn btn-primary btn-block" type="submit" value="HITUNG"></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div id="hasil" style="font-weight: bold"><?=$hasil?></div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>