<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: shonan
 * Date: 2017-11-24
 * Time: 18:20
 */

namespace Shonans\ValidateTest;

use Shonans\Validate\Filter\Filtration;
use PHPUnit\Framework\TestCase;

/**
 * Class FiltrationTest
 *
 * @covers \Shonan\Validate\Filter\Filtration
 */
class FiltrationTest extends TestCase
{
    public function testFiltration(): void
    {
        $data = [
            'name'    => ' tom ',
            'status'  => ' 23 ',
            'word'    => 'word',
            'toLower' => 'WORD',
            'title'   => 'helloWorld',
        ];

        $rules = [
            ['name', 'string|trim'],
            ['status', 'trim|int'],
            ['word', 'string|trim|upper'],
            ['toLower', 'lower'],
            [
                'title',
                [
                    'string',
                    'snake' => ['-'],
                    'ucfirst',
                ]
            ],
        ];

        $cleaned = Filtration::make($data, $rules)->filtering();

        $this->assertSame($cleaned['name'], 'tom');
        $this->assertSame($cleaned['status'], 23);
        $this->assertSame($cleaned['word'], 'WORD');
        $this->assertSame($cleaned['toLower'], 'word');
        $this->assertSame($cleaned['title'], 'Hello-world');
    }
}
