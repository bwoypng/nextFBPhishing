<?php

namespace facebookAPI;

use LazyJsonMapper\LazyJsonMapper;

class Response extends LazyJsonMapper {

    const ALLOW_VIRTUAL_PROPERTIES = false;

    /** @var bool */
    const ALLOW_VIRTUAL_FUNCTIONS = true;

    /** @var bool */
    const USE_MAGIC_LOOKUP_CACHE = true;

}
