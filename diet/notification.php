<?PHP

if(isset($_POST['send_all'])){
    
    $app_id = $_POST['app_id'];
    $message = $_POST['message'];
    $heading = $_POST['heading'];
    $response = sendMessage($app_id,$heading,$message);
    $return["allresponses"] = $response;
    $return = json_encode($return);

    $data = json_decode($response, true);
    print_r($data);
    $id = $data['id'];
    print_r($id);

    print("\n\nJSON received:\n");
    print($return);
    print("\n");

}
function sendMessage($app_id,$heading,$message) {
    $content      = array(
        "en" => $message
    );
    
    $headings = array(
        "en" => $heading
    );
  
    $fields = array(
        'app_id' => $app_id,
        'included_segments' => array(
            'All'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'headings' => $headings
    );
    
    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ZjZiOTcwYjgtZWE3OC00ZmQzLTk5OTMtM2I3M2MxYmNhNjRj'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}


?>