<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider fizzBuzAnswers
     */
    public function testReturnsStringForIntegerAccordingToFizzBuzRules(int $integer, string $expected): void
    {
        self::assertSame($expected, FizzBuzz::intToString($integer));
    }

    public function fizzBuzAnswers(): array
    {
        // answers copied from https://en.wikipedia.org/wiki/Fizz_buzz
        return [
//            [1,  '1'        ],
//            [2,  '2'        ],
//            [3,  'Fizz'     ],
//            [4,  '4'        ],
            [5,  'Buzz'     ],
//            [6,  'Fizz'     ],
//            [7,  '7'        ],
//            [8,  '8'        ],
//            [9,  'Fizz'     ],
            [10, 'Buzz'     ],
//            [11, '11'       ],
//            [12, 'Fizz'     ],
//            [13, '13'       ],
//            [14, '14'       ],
            [15, 'Fizz Buzz'],
        ];
    }
}
