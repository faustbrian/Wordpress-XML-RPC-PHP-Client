<?php

declare(strict_types=1);

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\WordPressXmlRpc\API;

use Plients\Http\HttpResponse;

class System extends AbstractAPI
{
    public function multicall(): HttpResponse
    {
        return $this->post('system.multicall');
    }

    public function listMethods(): HttpResponse
    {
        return $this->post('system.listMethods');
    }

    public function getCapabilities(): HttpResponse
    {
        return $this->post('system.getCapabilities');
    }
}
