<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 17.02.2016
 * Time: 20:33
 */

namespace UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}