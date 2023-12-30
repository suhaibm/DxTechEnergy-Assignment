<?php

namespace Assignment\Tests\IsValidEmailTest;

use PHPUnit\Framework\TestCase;


class IsValidEmailTest extends TestCase
{
    /**
     * @test
     * @dataProvider validEmails()
     */
    public function it_returns_true_for_valid_email_format($email)
    {
        $this->assertTrue(
            \Assignment\Src\Helpers\Methods\isValidEmail($email)
        );
    }

    /**
     * @test
     * @dataProvider invalidEmails()
     */
    public function it_returns_false_for_invalid_email_format($email)
    {
        $this->assertFalse(
            \Assignment\Src\Helpers\Methods\isValidEmail($email)
        );
    }


    public static function validEmails()
    {
        return [
            'suhaib@gmail.com' => ['suhaib@gmail.com'],
            's@g.co' => ['s@g.co'],
            'suha__ib123@g.co' => ['suha__ib123@g.co'],
            'suha-ib@g.co' => ['suha-ib@g.co'],
            'suhaib.mu@g.co' => ['suhaib.mu@g.co'],
            'SuhAib.mu@g.co' => ['SuhAib.mu@g.co'],
        ];
    }

    public static function invalidEmails()
    {
        return [
            's' => ['s'],
            'suhaib' => ['suhaib'],
            'suhib@gmail.c' => ['suhib@gmail.c'],
            'suhib@gmail.abcd' => ['suhib@gmail.abcd'],
            '.suhib@gmail.com' => ['.suhib@gmail.com'],
            'suhib$@gmail.com' => ['suhib$@gmail.com'],
            'suhib..murshid@gmail.com' => ['suhib..murshid@gmail.com'],
            'suhib#gmail.com' => ['suhib#gmail.com'],
            'suhib@gmailcom' => ['suhib@gmailcom'],
            'suhib@gmail.1com' => ['suhib@gmail.1com'],
            'suhib@gmail.c2m' => ['suhib@gmail.c2m'],
            'suhib@gmail@yahoo.com' => ['suhib@gmail@yahoo.com'],
            'suh{ib@gmail@yahoo.com' => ['suh{ib@gmail@yahoo.com'],
            'suh ib@gmail@yahoo.com' => ['suh ib@gmail@yahoo.com'],
            'suh(something)ib@gmail@yahoo.com' => ['suh(something)ib@gmail@yahoo.com'],
        ];
    }
}


