
<?php 

include '../config.php';

$stm = $pdo->query('SELECT * FROM categories');
$row = $stm ->fetchall(PDO::FETCH_ASSOC);

if (!empty($row)){
    echo json_encode($row);
} else {
    echo json_encode(array('error' => 'unable to fetch'));
}