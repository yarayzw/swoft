<?php declare(strict_types=1);

namespace App\Http\Controller;


use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * Class HomeController
 * @Controller()
 */
class TestController
{

    /**a
     * @RequestMapping("/test/api")
     * @return string
     */
    public function testApi(): string
    {
        return 'emmm';
    }

}