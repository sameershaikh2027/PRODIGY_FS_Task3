<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    
<div class="container">
    <div class="navbar text-center border rounded my-5" 
         style="background-color: orange; color: white; text-align: center; padding: 20px;">
        <h1 style="margin: 0;">MY CART</h1>
    </div>
</div>
<div class="container" style="display: flex; flex-direction: column; align-items: center; padding: 20px;">
    <div style="width: 100%; max-width: 800px;">
        <table style="border-collapse: collapse; width: 100%; background-color: #f9f9f9; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: orange; color: white;">
                <tr>
                    <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Serial No.</th>
                    <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Item Name</th>
                    <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Item Price</th>
                    <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Quantity</th>
                    <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $total += $value['Price'] * $value['Quantity'];
                        echo "
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 10px;'>" . ($key + 1) . "</td>
                            <td style='border: 1px solid #ddd; padding: 10px;'>{$value['Item_Name']}</td>
                            <td style='border: 1px solid #ddd; padding: 10px;'>{$value['Price']}</td>
                            <td style='border: 1px solid #ddd; padding: 10px;'>
                                <form action='manage_cart.php' method='POST'>
                                    <input class='text-center' type='number' name='Quantity' value='{$value['Quantity']}' min='1' max='10' style='width: 100%; padding: 5px;'>
                                    <input type='hidden' name='Item_Name' value='{$value['Item_Name']}'>
                                    <button type='submit' name='Update_Item' class='btn btn-sm btn-outline-primary' style='margin-top: 5px;'>Update</button>
                                </form>
                            </td>
                            <td style='border: 1px solid #ddd; padding: 10px;'>
                                <form action='manage_cart.php' method='POST'>
                                    <button type='submit' name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                    <input type='hidden' name='Item_Name' value='{$value['Item_Name']}'>
                                </form>
                            </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                <td colspan="5" style="border: 1px; background-color:aqua; padding: 12px; text-align: right;"><strong>Grand Total: Rs <?php echo number_format($total, 2); ?></strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
 <!-- User Information Box -->
 <div style="display: flex; justify-content: center; align-items: center; height: 42vh; padding: 20px;">
    <!-- Rectangle box with form -->
    <div style="border: 2px solid orange; padding: 15px; font-size: 16px; box-sizing: border-box; width: 700px; max-width: 700px;">
        <form action="place_order.php" method="POST">
            <div style="margin-bottom: 10px;">
                <label for="name" style="display: block; margin-bottom: 5px; font-size: 14px;">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Name" required style="width: 100%; padding: 8px; box-sizing: border-box; font-size: 14px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="phone" style="display: block; margin-bottom: 5px; font-size: 14px;">Phone:</label>
                <input type="tel" id="phone" name="phone"placeholder="Enter Phone Number" required style="width: 100%; padding: 8px; box-sizing: border-box; font-size: 14px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="address" style="display: block; margin-bottom: 5px; font-size: 14px;">Address:</label>
                <textarea id="address" name="address" placeholder="Enter Delivery Address"required style="width: 100%; padding: 8px; box-sizing: border-box; resize: vertical; font-size: 14px;"></textarea>
            </div>
            <div style="margin-bottom: 10px;">
                <label for="payment-mode" style="display: block; margin-bottom: 5px; font-size: 14px;">Payment Mode:</label>
                <select id="payment-mode" name="payment_mode" required style="width: 100%; padding: 8px; box-sizing: border-box; font-size: 14px;">
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cod">Cash on Delivery</option>
                </select>
            </div>
            <!-- Hidden field to pass cart data -->
            <input type="hidden" name="cart_data" value="<?php echo htmlspecialchars(json_encode($_SESSION['cart'])); ?>">
            <button type="submit" style="width: 100%; padding: 10px; background-color: orange; color: white; border: none; cursor: pointer; font-size: 16px;">Place Order</button>
        </form>
    </div>
</div>
</body>
</html>
