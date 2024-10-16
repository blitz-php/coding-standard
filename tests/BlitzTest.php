<?php

declare(strict_types=1);

/**
 * This file is part of Blitz PHP framework.
 *
 * (c) 2022 Dimitri Sitchet Tomkeu <devcode.dst@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BlitzPHP\CodingStandard\Tests;

use BlitzPHP\CodingStandard\Blitz;
use Nexus\CsConfig\Ruleset\RulesetInterface;
use Nexus\CsConfig\Test\AbstractRulesetTestCase;
use PhpCsFixer\Preg;
use PHPUnit\Framework\Attributes\CoversClass;

/**
 * @internal
 */
#[CoversClass(Blitz::class)]
final class BlitzTest extends AbstractRulesetTestCase
{
    protected static function createRuleset(): RulesetInterface
    {
        /** @var class-string<RulesetInterface> $ruleset */
        $ruleset = Preg::replace('/^(BlitzPHP\\\\CodingStandard)\\\\Tests(\\\\\S+)Test/', '$1$2', self::class);

        return new $ruleset();
    }
}
