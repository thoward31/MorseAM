<?php

class LED
{
    public function flashLED($str)
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
                default:
                    usleep(140000);
                    break;
            }
        }
    }
    
    private function shortFlash()
    {
        system ( "gpio -g write 24 1" );
        usleep(200000);
        system ( "gpio -g write 24 0" );
        usleep(600000);
    }
    private function longFlash()
    {
        system ( "gpio -g write 24 1" );
        usleep(600000);
        system ( "gpio -g write 24 0" );
        usleep(600000);
    }
}

?>