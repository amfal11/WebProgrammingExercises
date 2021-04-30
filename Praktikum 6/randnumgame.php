<?php
session_start();
if (!isset($_SESSION['rand']))
{
    header("Location: randthenum.php");
}
?>

<h2>Hallo, nama saya Mr.PHP.<br> Saya telah memilih secara random sebuah bilangan bulat.
    Silahkan anda menebak ya!
</h2>
<form action="" method="post">
    Bilangan tebakan Anda <input type="text" name="angka"> <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $angka = $_POST['angka'];

    if($angka == $_SESSION['rand'])
    {
        session_destroy();
        echo "<p>Selamat ya... Anda benar, saya telah memilih bilangan ".$_SESSION['rand']."</p>";
        echo "<a href=\"randnumgame.php\">ulangi lagi</a>";
        

    }

    else if ($angka < $_SESSION['rand'])
    {
        echo "Wah... masih salah ya, bilangan tebakan anda terlalu rendah.";
    }

    else if ($angka > $_SESSION['rand'])
    {
        echo "Wah... masih salah ya, bilangan tebakan anda terlalu tinggi.";
    }
}
?>