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
        if(isset($result) && count($result) > 0){
            $delimiter = ",";
            $filename = "members_" . date('Y-m-d') . ".csv";
            $f = fopen('cli.csv', 'w');
            $counter = 0;
            foreach($result as $k=>$v) {
                $counter++;
                if($counter == 1){
                    $lineData = array('Name', 'Items');
                }
                $lineData = array($v['name'],$v['total_items']);    
                fputcsv($f, $lineData, $delimiter);
            }
            fseek($f, 0);
            fpassthru($f);
            exit;
        }
        
    }
    

?>