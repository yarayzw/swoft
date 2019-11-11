<?php declare(strict_types=1);

namespace App\Http\Controller;

use Swoft;
use Swoft\Exception\SwoftException;
use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Response;
use Swoft\View\Renderer;
use Throwable;

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