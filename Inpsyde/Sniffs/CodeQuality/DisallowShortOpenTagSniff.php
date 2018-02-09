<?php declare(strict_types=1); # -*- coding: utf-8 -*-
/*
 * This file is part of the php-coding-standards package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\InpsydeCodingStandard\Sniffs\CodeQuality;

use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff as GenericShortOpenTagSniff;

/**
 * @package php-coding-standards
 * @license http://opensource.org/licenses/MIT MIT
 */
final class DisallowShortOpenTagSniff extends GenericShortOpenTagSniff
{
    /**
     * @return int[]
     */
    public function register()
    {
        return [
            T_OPEN_TAG,
            T_INLINE_HTML,
        ];
    }
}
