<?php

/*
 * This file is part of the Aisel package.
 *
 * (c) Ivan Proskuryakov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Aisel\HistoryBundle\Controller;

use PhpSpec\ObjectBehavior;

/**
 * @author Ivan Proskoryakov <volgodark@gmail.com>
 */
class ApiHistoryControllerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('\Aisel\HistoryBundle\Controller\ApiHistoryController');
    }
}
