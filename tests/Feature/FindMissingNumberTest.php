<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class FindMissingNumberTest extends TestCase
{
    /**
     * @test
     * @dataProvider inputArray()
     */
    public function it_returns_true_for_valid_email_format($inputArray, $result)
    {
        $this->assertEquals($result,
        \Src\Helpers\findMissingNumber($inputArray)
        );
    }


    public static function inputArray()
    {
        return [
            [[4,6], 5],
            [[1,2,3,4,5,7,8,9], 6],
            [[5,6,7,9], 8],
            [[9,8,7,6,5,3,2], 4],
        ];
    }
}


