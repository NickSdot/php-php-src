--TEST--
Test Uri\WhatWg\UrlBuilder::setQuery() - success - hashmark
--FILE--
<?php

$errors = [];

$url = new Uri\WhatWg\UrlBuilder()
    ->setScheme('https')
    ->setHost('example.com')
    ->setQuery('a#b')
    ->build(null, $errors);

var_dump($url->toAsciiString());
var_dump($url);
var_dump($errors);
var_dump($url->equals(new Uri\WhatWg\Url($url->toAsciiString())));

?>
--EXPECTF--
string(26) "https://example.com/?a%23b"
object(Uri\WhatWg\Url)#%d (%d) {
  ["scheme"]=>
  string(5) "https"
  ["username"]=>
  NULL
  ["password"]=>
  NULL
  ["host"]=>
  string(11) "example.com"
  ["port"]=>
  NULL
  ["path"]=>
  string(1) "/"
  ["query"]=>
  string(5) "a%23b"
  ["fragment"]=>
  NULL
}
array(1) {
  [0]=>
  object(Uri\WhatWg\UrlValidationError)#%d (%d) {
    ["context"]=>
    string(2) "#b"
    ["type"]=>
    enum(Uri\WhatWg\UrlValidationErrorType::InvalidUrlUnit)
    ["failure"]=>
    bool(false)
  }
}
bool(true)
