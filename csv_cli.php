<?php
$servername = "localhost";
$username = "root";
$password = "root";
$connection_error = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=laravel", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        $connection_error = "Connection failed: " . $e->getMessage();
    }


    if($connection_error == ''){
        $stmt = $conn->prepare("SELECT COUNT(user_id) as total_items,u.name FROM `wishlists` w LEFT JOIN `users` u ON u.id = w.user_id LEFT JOIN products p ON w.product_id = p.id GROUP BY w.user_id");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $delimiter = ",";
        $filename = "members_" . date('Y-m-d') . ".csv";
        $f = fopen('cli.csv', 'w');
        $fields = array('Name', 'Items');
        foreach($result as $k=>$v) {
            $lineData = array($v['name'],$v['total_items']);
            fputcsv($f, $lineData, $delimiter);
        }
        fseek($f, 0);
        //header('Content-Type: text/csv');
        //header('Content-Disposition: attachment; filename="' . $filename . '";');
        fpassthru($f);
        exit;
    }
    

?>