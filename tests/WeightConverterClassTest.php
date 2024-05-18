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

    /**
     * @dataProvider kgToStonesProvider
     */
    public function testKgToStones($kg, $expectedStones)
    {
        $converter = new WeightConverterClass($kg);
        $this->assertEquals($expectedStones, $converter->toStones(), '', 0.0001);
    }

    public static function kgToStonesProvider()
    {
        return [
            [0, 0],
            [1,  0.15747],
            [10, 1.5747],
            [20, 3.1494],
            [30, 4.7241],
            [40, 6.2988],
            [50, 7.8735],
            [60, 9.4482],
            [70, 11.0229],
            [80, 12.5976],
            [90, 14.1723],
            [100, 15.747],
        ];
    }
}
