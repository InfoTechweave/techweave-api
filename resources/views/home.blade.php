<!DOCTYPE html>
<html>

<body>
    <?php

/* After successful phone number verification an access_token will be returned by auth verification popup. In this if condition  please use this access_token to call Phone Email API to get verified phone number.  */
if(isset($_GET['access_token'])){

    /* To get verified phone number please call the getuser API */

    // Initialize cURL session
    $ch = curl_init();
    $url = "https://eapi.phone.email/getuser";
    $postData = array(
        'access_token' => $_GET['access_token'],
        'client_id' => '18373326995746576499'
    );

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url); // URL to submit the POST request
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of outputting it directly
    curl_setopt($ch, CURLOPT_POST, true); // Set the request type to POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData); // Set the POST data
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignore SSL certificate verification (not recommended in production)

    $response = curl_exec($ch);

    if ($response === false) {
        // Handle error here
    }

    curl_close($ch);

    $json_data = json_decode($response,true);

    if($json_data['status'] != 200) {
        // Handle error here
    }

    $country_code = $json_data['country_code'];
    $phone_no = $json_data['phone_no'];
    echo $country_code ;
    echo $phone_no;
    ?>
    <?php
} ?>

    <h1>My First Heading</h1>

    <p>My first paragraph.</p>

</body>

</html>
