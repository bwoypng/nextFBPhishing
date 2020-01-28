<?php

namespace facebookAPI\Response\Models;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class LoginSuccessSessionCookiesModel
 * @package facebookAPI\Response\Models
 *
 * @method bool hasDomain()
 * @method bool isDomain()
 * @method string getDomain()
 * @method $this setDomain(string $value)
 * @method $this unsetDomain()
 * @method bool hasExpires()
 * @method bool isExpires()
 * @method string getExpires()
 * @method $this setExpires(string $value)
 * @method $this unsetExpires()
 * @method bool hasExpiresTimestamp()
 * @method bool isExpiresTimestamp()
 * @method int getExpiresTimestamp()
 * @method $this setExpiresTimestamp(int $value)
 * @method $this unsetExpiresTimestamp()
 * @method bool hasHttponly()
 * @method bool isHttponly()
 * @method bool getHttponly()
 * @method $this setHttponly(bool $value)
 * @method $this unsetHttponly()
 * @method bool hasName()
 * @method bool isName()
 * @method string getName()
 * @method $this setName(string $value)
 * @method $this unsetName()
 * @method bool hasPath()
 * @method bool isPath()
 * @method string getPath()
 * @method $this setPath(string $value)
 * @method $this unsetPath()
 * @method bool hasSecure()
 * @method bool isSecure()
 * @method bool getSecure()
 * @method $this setSecure(bool $value)
 * @method $this unsetSecure()
 * @method bool hasValue()
 * @method bool isValue()
 * @method string getValue()
 * @method $this setValue(string $value)
 * @method $this unsetValue()
 */
class LoginSuccessSessionCookiesModel extends LazyJsonMapper {

    public const JSON_PROPERTY_MAP = [
        "name"=> "string",
         "value"=> "string",
         "expires"=> "string",
         "expires_timestamp"=> "int",
         "domain"=> "string",
         "path"=> "string",
         "secure"=> "bool",
         "httponly"=> "bool"
    ];
}
