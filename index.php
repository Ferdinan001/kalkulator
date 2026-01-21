<?php
function cek_data($data)
{
    if (isset($_GET[$data]) && $_GET[$data] !== "")
    {
        return $_GET[$data];
    } else
    {
        return 0;
    }
}

function hasil($a, $b)
{
    $angka1 = cek_data($a);
    $angka2 = cek_data($b);
    $operasi = isset($_GET['dor']) ? $_GET['dor'] : "";

    if ($operasi == "tambah")
    {
        return $angka1 + $angka2;
    } elseif ($operasi == "kurang")
    {
        return $angka1 - $angka2;
    } elseif ($operasi == "kali")
    {
        return $angka1 * $angka2;
    } elseif ($operasi == "bagi")
    {
        if ($angka2 == 0)
        {
            return "angka tidak bisa dibagi";
        } else
        {
            return $angka1 / $angka2;
        }
    }
    return 0;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Using Function</title>
</head>

<body>

    <h2>Angka pertama = <?= cek_data("angka1"); ?></h2>
    <h2>Angka kedua = <?= cek_data("angka2"); ?></h2>
    <h2>Hasil = <?= hasil("angka1", "angka2"); ?></h2>

    <hr>

    <form method="get">
        <label>Angka pertama</label><br>
        <input type="number" name="angka1"><br>

        <label>Angka kedua</label><br>
        <input type="number" name="angka2"><br><br>

        <input type="submit" name="dor" value="tambah">
        <input type="submit" name="dor" value="kurang">
        <input type="submit" name="dor" value="kali">
        <input type="submit" name="dor" value="bagi">
    </form>

</body>

</html>