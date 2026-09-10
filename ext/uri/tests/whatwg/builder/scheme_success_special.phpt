--TEST--
Test Uri\WhatWg\UrlBuilder::setScheme() - success - contains digit & special characters
--FILE--
<?php

$url = new Uri\WhatWg\UrlBuilder()
    ->setScheme('my-12+34.scheme')
    ->build();

var_dump($url->toAsciiString());
var_dump($url);
var_dump($url->equals(new Uri\WhatWg\Url($url->toAsciiString())));

?>
--EXPECTF--
string(16) "my-12+34.scheme:"
object(Uri\WhatWg\Url)#%d (%d) {
  ["scheme"]=>
  string(15) "my-12+34.scheme"
  ["username"]=>
  NULL
  ["password"]=>
  NULL
  ["host"]=>
  NULL
  ["port"]=>
  NULL
  ["path"]=>
  string(0) ""
  ["query"]=>
  NULL
  ["fragment"]=>
  NULL
}
bool(true)
