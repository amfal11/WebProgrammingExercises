<?php

// bagian submit name
if(isset($_POST['submit']))
{
    setcookie("username", $_POST['username'], time()+3*30*24*3600, "/");

    setcookie("visits", 0, time()+3*30*24*3600, "/");

    setcookie("lastvisit", date("d-m-Y:i:s"), time()+3830*24*3600, "/");

    header("Location: myapp.php");
}

// bagian cookie user
if(isset($_COOKIE['username']))
{
    echo "<p>Hallo selamat datang ".$_COOKIE['username']."</p>";

    echo "<p>Ini kunjungan anda yang ke-".($_COOKIE['visits']+1)."</p>";

    echo "<p>Kunjungan Anda sebelumnya adalah pada tanggal ".$_COOKIE['lastvisit']."</p>";

    // update cookie
    setcookie("username", $_COOKIE['username'], time()+3*30*24*3600, "/");
    setcookie("visits", ($_COOKIE['visits']+1), time()+3*30*24*3600, "/");
    setcookie("lastvisit", date("d-m-Y:i:s"), time()+3830*24*3600, "/");
}
else
{
    // jika cookie tidak ada maka muncul form
?>

<h1>Welcome to my site</h1>
<p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
<p>Kita kenalan dulu ya, silahkan masukan nama Anda</p>
<form action="" method="post">
    Nama Anda <input type="text" name="username">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
}
?>
