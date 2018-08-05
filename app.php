<?php

include 'morse.php';
include 'LED.php';

$morsecode = new Morse();
$led = new LED();
$maxlength = 255;

if( isset($_POST["message"]) ){

    $msgtype = $_POST["type"];
    
    if($msgtype === "plaintxt"){
    // case :plain to morse todo
    $plaintxt = $_POST["message"];
    if($plaintxt === ""){
        $status = "Failed";
        $responsearr = array("status" => $status,
                            "errtxt" => "No text to encode");
        echo json_encode($responsearr);
        exit;
    }
    elseif(strlen($plaintxt) >= $maxlength)
    {
        $status = "Failed";
        $responsearr = array( "status" => $status,
                            "errtxt" => "Message too long");
        echo json_encode($responsearr);
        exit;
    }
    
    $morsetxt = $morsecode->encodeString($plaintxt);
    $led->flashLED($morsetxt);
    
    $status = "Success";
    $responsearr = array("status" => $status,
                "errtxt" => "Text successfully encoded",
                "morsetxt" => $morsetxt);
    echo json_encode($responsearr);
    }
    // case morse direct output, return plain
    elseif($msgtype === "morsetxt"){
        $morsetxt = $_POST["message"];
        
        $plaintxt = $morsecode->decodeString($morsetxt);
        
        $led->flashLED($morsetxt);
        
        $status = "SuccessMorse";
        $responsearr = array("status" => $status,
                    "errtxt" => "Morse text successfully sent",
                    "plaintxt" => $plaintxt);
        echo json_encode($responsearr);
    }
}
else{
    
    $status = "Failed";
    $responsearr = array("status" => $status,
                "errtxt" => "No message field in input array");
    echo json_encode($responsearr);
}  
     
?>