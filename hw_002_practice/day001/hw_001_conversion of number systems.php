test
<?php
//10进制转8进制
echo '10进制转8进制';
echo '<br>';
echo decoct(111);
echo '<br>';
//10进制转16进制
echo '10进制转16进制';
echo '<br>';
echo dechex(111);
echo '<br>';

//10进制转2进制
echo '10进制转2进制';
echo '<br>';
echo decbin(111);
echo '<br>';

//二进制转10进制
echo '2进制转10进制';
echo '<br>';
echo bindec("010001");

//8进制转10进制 octdec
echo '8进制转10进制';
echo '<br>';
echo octdec(012312);
echo '<br>';


//16进制转10进制 hexdec
echo '16进制转10进制';
echo '<br>';
echo hexdec(0x12312);

echo '<br>';
