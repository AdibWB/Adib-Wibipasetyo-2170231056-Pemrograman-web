<?php
if (empty($_POST['nama'])) {
    header("Location:kosong.php");
} else {
    echo "<center>nama :".$_POST['nama']."</center><br>";
}
?>