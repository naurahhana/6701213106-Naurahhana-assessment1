<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <form method="POST" action="">
                    <input type="number" name="angka1" required>
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="number" name="angka2" required>
                    <input type="submit" name = "hitung" value="hitung">    
                </form>
            </td>
        </tr>
        <tr>
            <td>
            <?php
                if(isset($_POST['submit'])){
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    $operator = $_POST['operator'];

                    switch($operator){
                        case "tambah":
                            $hasil = $angka1 + $angka2;
                            break;
                        case "kurang":
                            $hasil = $angka1 - $angka2;
                            break;
                        case "kali":
                            $hasil = $angka1 * $angka2;
                            break;
                        case "bagi":
                            $hasil = $angka1 / $angka2;
                            break;
                    }

                    echo "<br>Hasil perhitungan: ".$hasil;
                }
            ?>
            </td>
        </tr>
    </table>
</body>
