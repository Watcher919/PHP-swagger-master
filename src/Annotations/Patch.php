<?php

/**
 * @license Apache 2.0
 */

namespace Swagger\Annotations;

/**
 * @Annotation
 */
class Patch extends Operation {

    public $method = 'patch';

    /** @inheritdoc */
    public static $parents = [
        'Swagger\Annotations\Path',
        'Swagger\Annotations\Swagger'
    ];
}