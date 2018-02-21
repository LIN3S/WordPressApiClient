<?php
/*
 * This file is part of the WordPressApiClient project.
 *
 * (c) sergio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WordPressApiClient\Exception;


class AuthorizationNotConfigured extends \Exception
{
    public function __construct()
    {
        parent::__construct('Authorization must be configured to be used in secure request');
    }
}
