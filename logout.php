<?php
session_start();
session_destroy();
echo "<script>alert('Logout Berhasil');document.location='login.php'</script>";
?>