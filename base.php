<?php
    // Client ID
    define('CLIENT_ID', 'd025da9c04e41425c6de8c5cdc8d40c9');
    
    // Client secret
    define('CLIENT_SECRET', '26a7743531e548ac07aef90a933f6d53');
    
    // Public encrypion key
    define('PUBLIC_ENCRYPTION_KEY', '2d2d2d2d2d424547494e205055424c4943204b45592d2d2d2d2d4d494942496a414e42676b71686b6947397730424151454641414f43415138414d49494243674b43415145417659584c365869796a454f2f7057657559774345555a6e566b65766932503952424e526d52686f66375236566b324366743861787476564e4a496d3479674c596141505a6479316a6f337a493265742f78307369476f5034526375666c7843444a4b686354442f4c6e4d66632b644333662f52666e79644a71744e707335757a48626b3633514975336144355a6b7866644352596f7a2b59324d6e4a6152486e7531615437586b66796334495461662f445543687a3942554c485a6564304f5147377956364e42434c5154772b52494c2f46465a64304d4374547a4b4e4a6c4454676b302f65386b4936466b7767746a6f472b4d4b4c78785567776b564c326358695676734e31456552304376463332716a793264376231664331682f7565504c56446336494e4a7058557734586a646e6370506a74744e59684843726161723452365642453442544b4c3636424a475a66625363774944415141422d2d2d2d2d454e44205055424c4943204b45592d2d2d2d2d');
    
    // OAUTH access url
    define('AUTH_URL', 'https://sandbox-auth.payfirma.com/oauth/token');
    
    // Sale url
    define('TRANS_SALE', 'https://sandbox-apigateway.payfirma.com/transaction-service/sale');
    
    /*
     * Authorize and retrieve access token (token, type, expire date, etc) based on the given key
     * @param: 
     *  $key: the key specified: access_token, access_type, expires_in, merchant_id, or scope
     */
    function getToken($key) {
        $basicToken = base64_encode(CLIENT_ID . ':' . CLIENT_SECRET);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, AUTH_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials&client_id=". CLIENT_ID ."&client_secret=" . CLIENT_SECRET);
        curl_setopt($ch, CURLOPT_POST, TRUE);

        $headers = array();
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        $headers[] = "Authorization: Basic ". $basicToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        
        $jsonObj = json_decode($response);
        $result = $jsonObj->$key;
        
        return $result;
    }

?>
