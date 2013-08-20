<?php
/**
 * @Author: Sohel Rana
 * @URL: http://www.sohelranabd.com
 * @Description: This is simple example of type conversion
 */

$stringVar = "10 Hello World"; //Integer variable
settype($stringVar,'integer'); // permanently change the type
echo gettype($stringVar); // Knowing the data type of $stringVar

$intVar = (int)$stringVar;  //Converting into integer
echo $intVar;

