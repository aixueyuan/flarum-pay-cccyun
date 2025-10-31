<?php

namespace Neworder\PayYun;

use Flarum\Extend;
use Neworder\PayYun\Service\SingletonReg;

return [
    (new Extend\ServiceProvider)->register(SingletonReg::class)
];
