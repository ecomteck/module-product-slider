<?php
/**
 * Ecomteck
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the ecomteck.com license that is
 * available through the world-wide-web at this URL:
 * https://ecomteck.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Ecomteck
 * @package     Ecomteck_ProductQuestions
 * @copyright   Copyright (c) 2019 Ecomteck (https://ecomteck.com/)
 * @license     https://ecomteck.com/LICENSE.txt
 */

namespace Ecomteck\ProductSlider\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for product slider search results.
 * @api
 * @since 100.0.2
 */
interface SliderSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get sliders list.
     *
     * @return SliderInterface[]
     */
    public function getItems();

    /**
     * Set sliders list.
     *
     * @param SliderInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
