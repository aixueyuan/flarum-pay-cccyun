<?php

namespace Neworder\PayCccyun;

use Flarum\Extend;
use Neworder\PayCccyun\Service\SingletonReg;

return [
    // 仅注册 ServiceProvider
    (new Extend\ServiceProvider)->register(SingletonReg::class)
];
