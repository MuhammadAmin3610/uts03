<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']);
    echo "Halo, $nama!";
} else {
    echo "Halo, tamu!";
}
?>
