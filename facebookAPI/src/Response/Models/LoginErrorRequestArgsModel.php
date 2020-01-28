<?php

namespace facebookAPI\Response\Models;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class LoginErrorRequestArgsModel
 * @package facebookAPI\Response\Models
 *
 * @method bool hasKey()
 * @method bool isKey()
 * @method string getKey()
 * @method $this setKey(string $value)
 * @method $this unsetKey()
 * @method bool hasValue()
 * @method bool isValue()
 * @method string getValue()
 * @method $this setValue(string $value)
 * @method $this unsetValue()
 */
class LoginErrorRequestArgsModel extends LazyJsonMapper {

    public const JSON_PROPERTY_MAP = [
        "key" => "string",
        "value" => "string"
    ];
}
