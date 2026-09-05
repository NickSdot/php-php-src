--TEST--
Test Uri\WhatWg\UrlBuilder::setFragment() - success - with base URL containing opaque path
--FILE--
<?php

$base = new Uri\WhatWg\Url('scheme:opaque-path');

$url = new Uri\WhatWg\UrlBuilder()
    ->setFragment('foo')
    ->build($base);

var_dump($url->toAsciiString());
var_dump($url);
var_dump($url->equals(new Uri\WhatWg\Url($url->toAsciiString())));
var_dump($url->equals(new Uri\WhatWg\Url('#foo', $base), Uri\UriComparisonMode::IncludeFragment));

?>
--EXPECTF--
string(22) "scheme:opaque-path#foo"
object(Uri\WhatWg\Url)#%d (%d) {
  ["scheme"]=>
  string(6) "scheme"
  ["username"]=>
  NULL
  ["password"]=>
  NULL
  ["host"]=>
  NULL
  ["port"]=>
  NULL
  ["path"]=>
  string(11) "opaque-path"
  ["query"]=>
  NULL
  ["fragment"]=>
  string(3) "foo"
}
bool(true)
bool(true)
