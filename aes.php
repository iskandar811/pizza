<?php
// AES encryption function
function encryptAES($data, $key)
{
    $cipher = "AES-256-CBC";
    $ivLength = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivLength);

    $encryptedData = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);

    $encryptedData = base64_encode($iv . $encryptedData);

    return $encryptedData;
}

// AES decryption function
function decryptAES($encryptedData, $key)
{
    $cipher = "AES-256-CBC";
    $encryptedData = base64_decode($encryptedData);
    $ivLength = openssl_cipher_iv_length($cipher);
    $iv = substr($encryptedData, 0, $ivLength);
    $encryptedData = substr($encryptedData, $ivLength);

    $decryptedData = openssl_decrypt($encryptedData, $cipher, $key, OPENSSL_RAW_DATA, $iv);

    return $decryptedData;
}

// Example usage
$key = "NafTtIfiEVjDkDE+Zco1S3nOUX94UDWy46lO4tv92o90BRz5V7/Bc4dgWx2CsMIn";
$data = "Sensitive information";

// Encrypt data
$encryptedData = encryptAES($data, $key);
echo "Encrypted Data: " . $encryptedData . "\n";

// Decrypt data
$decryptedData = decryptAES($encryptedData, $key);
echo "Decrypted Data: " . $decryptedData . "\n";
?>


//AES encryption to hide sensitive info - address
        $enc_key= openssl_random_pseudo_bytes(32);

        $sql2 = "INSERT INTO aes_key (address, enc_key) VALUES (?,?)";
        if($stmt2 = mysqli_prepare($conn, $sql2)){
            mysqli_stmt_bind_param($stmt2, "ss", $address,$enc_key);
            mysqli_stmt_execute($stmt2);
            echo "AES key saved!";
        }
        else{
            echo "Error!".mysqli_error($conn);
        }
        mysqli_stmt_close($stmt2);

        $eaddress=openssl_encrypt($address, 'AES-256-CBC', $enc_key, OPENSSL_RAW_DATA);
        //AES end