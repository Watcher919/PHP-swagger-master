<?php

/**
 * @license Apache 2.0
 */

namespace Swagger\Processors;

use Swagger\Analysis;

/**
 * Use the parameter->name as keyfield (parameter->parameter) when used in swagger object.
 */
class AugmentParameters
{
    public function __invoke(Analysis $analysis)
    {
        if ($analysis->openapi->parameters) {
            $keys = [];
            $parametersWithoutKey = [];
            foreach ($analysis->openapi->parameters as $parameter) {
                if ($parameter->parameter) {
                    $keys[$parameter->parameter] = $parameter;
                } else {
                    $parametersWithoutKey[] = $parameter;
                }
            }
            foreach ($parametersWithoutKey as $parameter) {
                if ($parameter->name && empty($keys[$parameter->name])) {
                    $parameter->parameter = $parameter->name;
                    $keys[$parameter->parameter] = $parameter;
                }
            }
        }
    }
}
