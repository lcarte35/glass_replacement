<?php
// This function will return a random
// string of specified length
function random_strings($length_of_string) {
     
    // md5 the timestamps and returns substring
    // of specified length
    return substr(md5(time()), 0, $length_of_string);
}
 
// This function will generate
// Random string of length 10
echo random_strings(5);

?>