<?php

if (!isset($_SESSION['customer'])) {
    $_SESSION['customer'] = [
        ['id' => 1, 'nama_customer' => 'Arief', 'email' => 'arief@example.com', 'no_telepon' => '081234567890'],
        ['id' => 2, 'nama_customer' => 'Bagdi', 'email' => 'bagdi@example.com', 'no_telepon' => '081234567891'],
        ['id' => 3, 'nama_customer' => 'Caca', 'email' => 'caca@example.com', 'no_telepon' => '081234567892'],
    ];
}

$customer = &$_SESSION['customer'];
?>