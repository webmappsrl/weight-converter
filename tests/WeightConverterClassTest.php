<?php

use PHPUnit\Framework\TestCase;
use Webmapp\WeightConverter\WeightConverterClass;

class WeightConverterClassTest extends TestCase
{
    /**
     * @dataProvider weightProvider
     */
    public function testToPounds($kilograms, $expectedPounds)
    {
        $converter = new WeightConverterClass($kilograms);
        $this->assertEquals($expectedPounds, $converter->toPounds(), '', 0.00001);
    }

    public static function weightProvider()
    {
        return [
            [0, 0.0],
            [1, 2.20462],
            [2.5, 5.51155],
            [5, 11.02310],
            [10, 22.04620],
            [20, 44.09240],
            [50, 110.23100],
            [100, 220.46200],
        ];
    }
}
?>
