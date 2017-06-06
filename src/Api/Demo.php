<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\Api;

use BrianFaust\WordPressXmlRpc\Base;

class Demo extends Base
{
    public function sayHello()
    {
        return $this->post('demo.sayHello');
    }

    public function addTwoNumbers($numberOne, $numberTwo)
    {
        return $this->post('demo.addTwoNumbers', [$numberOne, $numberTwo]);
    }
}