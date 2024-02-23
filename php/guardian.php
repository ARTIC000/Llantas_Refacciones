<?php
session_start();

class Guardian {
    public static function protectAdmin() {
        if (!isset($_SESSION['id_usuario']) || $_SESSION['id_rol'] !== 1) {
            header('Location: ../dashboard.php');
            exit();
        }
    }
}
?>
