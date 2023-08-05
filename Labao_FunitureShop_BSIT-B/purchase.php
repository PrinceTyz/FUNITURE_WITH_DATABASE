<?php
session_start();
$conn = mysqli_connect('localhost:3308', 'root', '', 'user_db');

if (mysqli_connect_error()) {
    echo "<script>
    alert('Cannot connect to the database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $full_name = $_POST['full_name'];
        $phone_no = $_POST['phone_no'];
        $address = $_POST['address'];
        $pay_mode = $_POST['pay_mode'];

        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) 
                   VALUES ('$full_name','$phone_no','$address','$pay_mode')";

        if (mysqli_query($conn, $query1)) {
            $Order_Id = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $query2);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
                
                foreach ($_SESSION['cart'] as $key => $values) {
                    $Item_Name = $values['Item_name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                
                unset($_SESSION['cart']);
                echo"<script>
                alert('Ordered place successfully');
                window.location.href='index.php';
                </script>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>