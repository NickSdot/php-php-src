--TEST--
Test Uri\WhatWg\UrlBuilder::setScheme() - success - non-special scheme
--XFAIL--
not yet: a hostless non-special URL is built with the wrong path type
--FILE--
<?php

$url = new Uri\WhatWg\UrlBuilder()
    ->setScheme('foo')
    ->build();

var_dump($url->toAsciiString());
var_dump($url);
var_dump($url->equals(new Uri\WhatWg\Url($url->toAsciiString())));

?>
--EXPECTF--
string(4) "foo:"
object(Uri\WhatWg\Url)#%d (%d) {
  ["scheme"]=>
  string(3) "foo"
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
