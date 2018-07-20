<?php

include 'morse.php';

function flashLED($str)
{
    system ( "gpio -g mode 24 out" );
    
    $strlen = strlen( $str );
    for( $i = 0; $i <= $strlen; $i++ ) {
        $char = substr( $str, $i, 1 );
        // $char contains the current character
        switch($char){
            case '.':
                shortFlash();
                break;
            case '-':
                longFlash();
                break;
            // TODO deal with punctuation as 'STOP'    
            default:
                usleep(140000);
                break;
        }
    }
}
function shortFlash()
{
    system ( "gpio -g write 24 1" );
    usleep(200000);
    system ( "gpio -g write 24 0" );
    usleep(600000);
}
function longFlash()
{
    system ( "gpio -g write 24 1" );
    usleep(600000);
    system ( "gpio -g write 24 0" );
    usleep(600000);
}

$morsecode = new Morse();

if( isset($_POST["message"]) ){

    $plaintxt = $_POST["message"];
    if($plaintxt === ""){
        $status = "Failed";
        $responsearr = array("status" => $status,
                            "errtxt" => "No text to encode");
        echo json_encode($responsearr);
        exit;
    }
    
    $morsetxt = $morsecode->encodeString($plaintxt);
    flashLED($morsetxt);
    
    $status = "Success";
    $responsearr = array("status" => $status,
                "errtxt" => "Text successfully encoded",
                "morsetxt" => $morsetxt);
    echo json_encode($responsearr);
}
else{
    
    $status = "Failed";
    $responsearr = array("status" => $status,
                "errtxt" => "No message field in input array");
    echo json_encode($responsearr);
}  
     
?>