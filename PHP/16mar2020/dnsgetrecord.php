
<?php

//$arr =dns_get_record("prothomalo.com");
echo "<pre>";
//print_r($arr);



 //getmxrr("wjgilmore.com", $mxhosts);
 //print_r($mxhosts);

 echo "HTTP's default port number is: ".getservbyname("SSH", "tcp");


 echo "Port 80's default service is: ".getservbyport(80, "tcp");

?>