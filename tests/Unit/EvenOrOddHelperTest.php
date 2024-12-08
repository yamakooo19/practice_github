<?php

namespace Tests\Unit\Helpers;

use App\Helpers\EvenOrOddHelper;
use PHPUnit\Framework\TestCase;

class EvenOrOddHelperTest extends TestCase
{
    /**
     * 偶数の場合のテスト
     *
     * @dataProvider evenNumbersProvider
     */
    public function testReturnsEvenForEvenNumbers($number)
    {
        // テスト対象のメソッドを実行
        $result = EvenOrOddHelper::evenOrOdd($number);

        // 偶数の場合は "even" が返されることを確認
        $this->assertEquals('even', $result, "数値 {$number} は偶数なので'even'が返されるべきです");
    }

    /**
     * 奇数の場合のテスト
     *
     * @dataProvider oddNumbersProvider
     */
    public function testReturnsOddForOddNumbers($number)
    {
        // テスト対象のメソッドを実行
        $result = EvenOrOddHelper::evenOrOdd($number);

        // 奇数の場合は "odd" が返されることを確認
        $this->assertEquals('odd', $result, "数値 {$number} は奇数なので'odd'が返されるべきです");
    }

    /**
     * 0の場合のテスト（特別なケース）
     */
    public function testZeroIsConsideredEven()
    {
        $result = EvenOrOddHelper::evenOrOdd(0);
        $this->assertEquals('even', $result, "0は偶数として扱われるべきです");
    }

    /**
     * 負の数の場合のテスト
     */
    public function testHandlesNegativeNumbers()
    {
        // 負の偶数のテスト
        $this->assertEquals('even', EvenOrOddHelper::evenOrOdd(-2), "-2は偶数として扱われるべきです");

        // 負の奇数のテスト
        $this->assertEquals('odd', EvenOrOddHelper::evenOrOdd(-3), "-3は奇数として扱われるべきです");
    }

    /**
     * 偶数のテストデータを提供するデータプロバイダー
     */
    public static function evenNumbersProvider()
    {
        return [
            [2],
            [4],
            [6],
            [8],
            [10],
            [100],
            [1000]
        ];
    }


    /**
     * 奇数のテストデータを提供するデータプロバイダー
     */
    public static function oddNumbersProvider()
    {
        return [
            [1],
            [3],
            [5],
            [7],
            [9],
            [99],
            [999]
        ];
    }
}
