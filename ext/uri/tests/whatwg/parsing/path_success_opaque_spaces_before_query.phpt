--TEST--
Test Uri\WhatWg\Url parsing - opaque path - spaces before query
--FILE--
<?php

$url = new Uri\WhatWg\Url('foo:abc  ?query', softErrors: $softErrors);

var_dump($url);
var_dump($url->toAsciiString());
var_dump($softErrors);

?>
--EXPECTF--
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
  string(7) "abc %20"
  ["query"]=>
  string(5) "query"
  ["fragment"]=>
  NULL
}
string(17) "foo:abc %20?query"
array(2) {
  [0]=>
  object(Uri\WhatWg\UrlValidationError)#%d (%d) {
    ["context"]=>
    string(7) " ?query"
    ["type"]=>
    enum(Uri\WhatWg\UrlValidationErrorType::InvalidUrlUnit)
    ["failure"]=>
    bool(false)
  }
  [1]=>
  object(Uri\WhatWg\UrlValidationError)#%d (%d) {
    ["context"]=>
    string(8) "  ?query"
    ["type"]=>
    enum(Uri\WhatWg\UrlValidationErrorType::InvalidUrlUnit)
    ["failure"]=>
    bool(false)
  }
}
