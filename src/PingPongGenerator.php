<?php
//Use Debug Mode in App?
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {

            $input = $input_number;
            $counter = 1;
            $pingPongArray = array();
            while ($counter <= $input ) {
                if ((($counter % 3) == 0) && (($counter % 5) == 0) ) {
                    array_push($pingPongArray, "pingpong");
                    $counter++;
                } elseif ((($counter % 3) == 0)) {
                    array_push($pingPongArray, "ping");
                    $counter++;
                } elseif((($counter % 5) == 0)) {
                    array_push($pingPongArray, "pong");
                    $counter++;
                } else {
                    array_push($pingPongArray, $counter);
                    $counter++;
                }
            }
            return $pingPongArray;
        }
    }


?>
