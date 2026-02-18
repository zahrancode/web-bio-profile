<?php
$config['db'] = [
    'host' => 'localhost',
    'name' => 'x3msg655_3ms-gaming',
    'username' => 'x3msg655_3ms-gaming',
    'password' => '@vinta888'
];

$conn = mysqli_connect(
    $config['db']['host'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start();
// Auto logout setelah 30 menit
$timeout = 1800;
if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)){
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();
?>