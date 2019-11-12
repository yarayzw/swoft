<?php declare(strict_types=1);

namespace App\Http\Controller;


use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * Class HomeController
 * @Controller()
 */
class WeChatTheThirdPartyController
{

    /**
     * @RequestMapping("/wechat/thirdparty/get/token")
     * @return string
     */
    public function getToken(): string
    {
        return 'emmm';
    }

    /**
     * @RequestMapping("/wechat/thirdparty/get/license")
     * @return string
     */
    public function getPreAuthCode(): string
    {
        return 'emmm';
    }

}