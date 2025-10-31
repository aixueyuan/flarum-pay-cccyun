<?php

namespace Newpay\PayCccyun;

use Flarum\Extend;
use Newpay\PayCccyun\Service\SingletonReg;

return [
    // 仅注册 ServiceProvider
    (new Extend\ServiceProvider)->register(SingletonReg::class)
];
