<?php declare(strict_types=1);

namespace App\Http\Controller;


/**
 * Class HomeController
 * @Controller()
 */
class TestController
{

    /**
     * @RequestMapping("/testApi")
     * @return string
     */
    public function testApi(): string
    {
        return 'emmm';
    }

}