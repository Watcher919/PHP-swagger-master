<?php

/**
 * @license Apache 2.0
 */

namespace SwaggerTests;

class ExamplesTest extends SwaggerTestCase {

    /**
     * Test the processed Examples against json files in ExamplesOutput.
     *
     * @dataProvider getExamples
     * @param string $dir
     */
    public function testExample($example, $output) {
        $swagger = \Swagger\scan(__DIR__ . '/../Examples/'.$example);
        $this->markTestSkipped('Not yet implemeted');
        die((string) $swagger);
        $this->assertSwaggerEqualsFile(__DIR__ . '/ExamplesOutput/'.$output, $swagger);
    }

    /**
     * dataProvider for testExample
     * @return array
     */
    public function getExamples() {
        return [
            ['swagger-spec/petstore', 'petstore.json']
        ];
    }


}
