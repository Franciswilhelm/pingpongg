<?php
//Use Debug Mode in App?
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {

            $input = 5;
            $counter = 1;
            $pingPongArray = array();
            while ($counter <= $input ) {
                array_push($pingPongArray, $counter);
                $counter++;
            }
            return $pingPongArray;
        }
    }


?>
