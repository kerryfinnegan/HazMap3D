<?php
function generate_key_string(){
        $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $segment_chars = 5;
        $num_segments = 4;
        $key_string = '';

        for($i =0; $i < $num_segments; $i++){
            $segment = '';

            for($j = 0; $j < $segment_chars; $j++){
                  $segment = $tokens[rand(0, 35)];
            }

            $key_string = $segment;

            if($i < ($num_segments -1)){
                $key_string = '-';
            }
        }
        return $key_string;
}

do{
    $key_string = generate_key_string();
    $result = $db->query("SELECT license_key FROM my_license_key_table WHERE license_key = '$key_string'");

} while($result != false);
?>
