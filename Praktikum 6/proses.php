<?php
session_start();

// daftar users
$user = array
    (
        array("admin", "Admin Ganteng", "admin"),
        array("naufal", "Naufal Ammar", "ammar"),
        array("k3518047", "Mahasiswa Keren", "nanana")
    );

// jika form login sudah submitted
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // proses pengecekan user
    foreach($user as $profile_user)
    {
        if(($profile_user[0] == $username) && ($profile_user[2] == $password))
        {
            // jika user match maka membuat sesion baru dengan nama user
            $_SESSION['namauser'] = $profile_user[1];

            // redirect menuju page1.php
            header("Location: page1.php");
        }
    }

    // jika user tidak ditemukan
    echo "<h3>Login Gagal</h3>";
    echo "<p>Silahkan <a href=\"form.html\">login kembali</a></p>";
}
?>