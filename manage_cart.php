<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add-to-cart-btn'])) {
        // Initialize the cart session array if not set
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $item_name = $_POST['Item_Name'];
        $item_price = $_POST['Price'];

        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['Item_Name'] == $item_name) {
                $item['Quantity'] += 1;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['cart'][] = [
                'Item_Name' => $item_name,
                'Price' => $item_price,
                'Quantity' => 1
            ];
        }

        header("Location: index.php");
        exit();
    }

    if (isset($_POST['Remove_Item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header("Location: mycart.php");
                exit();
            }
        }
    }

    if (isset($_POST['Update_Item'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['Item_Name'] == $_POST['Item_Name']) {
                $item['Quantity'] = $_POST['Quantity'];
                break;
            }
        }
        header("Location: mycart.php");
        exit();
    }
}
?>
