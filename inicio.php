<?php
$zbr21 = "www.google.com";
exec("ping $zbr21", $output, $result);
if($result === 0) {
    echo "IP ON";
}
elseif($result === 1) {
    echo "IP OFF";
}
else {
    echo "Erro";
}
