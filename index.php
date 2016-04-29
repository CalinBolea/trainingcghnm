<?php
while(1) {
echo "Are you sure you want to do this? Type 'yes' to continue: ";
$handle = fopen ("google.com","r");
$line = fgets($handle);
var_dump($line);
if(trim($line) != 'yes'){
 echo "ABORTING!\n…";
}
}
