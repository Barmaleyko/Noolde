<?php

namespace RoSky\Bundle\NoodleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RoSkyNoodleBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
