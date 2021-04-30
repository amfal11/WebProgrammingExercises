<?php

// hapus semua cookie
setcookie("namauser", "", time()-3600);
// ke halaman login
header("Location: formcookie.html");

?>