<?php
    // Receipt page
    include "base.php";

    // check if the total price is valid
    if (isset($_POST["price"])) {
        // get bearer token
        $bearerToken = getToken('access_token');
        
        // visa card
        $data = array(
            'amount' => $_POST["price"], 
            'currency' => 'CAD',
            'card_expiry_month' => '10',
            'card_expiry_year' => '18',
            'card_number' => '4111111111111111',
            'cvv2' => '595'
            );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, TRANS_SALE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer " . $bearerToken
        ));
        
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            return;
        }
        curl_close($ch);
        
        $jsonObj = json_decode($response);
        $key_amount = "amount";
        $key_order_number = "id";
        $key_card_type = "card_type";
        $key_tran_id = "transaction_id";
        $key_tran_res = "transaction_result";
        $key_tran_type = "transaction_type";
        $amount = $jsonObj->$key_amount;
        $order_number = $jsonObj->$key_order_number;
        $card_type = $jsonObj->$key_card_type;
        $tran_id = $jsonObj->$key_tran_id;
        $tran_res = $jsonObj->$key_tran_res;
        $tran_type = $jsonObj->$key_tran_type;
        
        $str = "<h2>Thanks for your order</h2>Here's your confirmation for order number " . $order_number . ".<br><br>";
        $str .= "<table width='30%' border=0 cellpadding=1 cellspacing=1>";
        $str .= "<tr><td><b>Order Number:</b><td><td>" . $order_number . "</td></tr>";
        $str .= "<tr><td><b>Transaction ID:</b><td><td>" . $tran_id . "</td></tr>";
        $str .= "<tr><td><b>Order Time:</b><td><td>" . date("F j, Y, g:i a") . "</td></tr>";
        $str .= "<tr><td><b>Order Type:</b><td><td>". $tran_type ."</td></tr>";
        $str .= "<tr><td><b>Card Type:</b><td><td>". $card_type ."</td></tr>";
        $str .= "<tr><td><b>Amount:</b><td><td>$" . $amount ."</td></tr>";
        $str .= "</table>";
        $str .= "<br><input type='button' name='print' value='Print'></input>";
        echo $str;
    } else {
        echo "<meta http-equiv='refresh' content='0; url=index.php' />"; 
    }

?>
