<?php
session_start();

// hapus semua session
session_destroy();
// ke halaman login
header("Location: form.html");

?>