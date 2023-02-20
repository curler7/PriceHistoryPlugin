<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Sylius\PriceHistoryPlugin\Behat\Element\Shop\Product\ShowPage;

interface LowestPriceInformationElementInterface
{
    public function isThereInformationAboutProductLowestPriceWithPrice(string $lowestPriceBeforeDiscount): bool;

    public function isThereInformationAboutProductLowestPrice(): bool;
}
