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
 * @package     Ecomteck_ProductSlider
 * @copyright   Copyright (c) 2019 Ecomteck (https://ecomteck.com/)
 * @license     https://ecomteck.com/LICENSE.txt
 */

namespace Ecomteck\ProductSlider\Api;

/**
 * Product Slider CRUD interface.
 * @api
 * @since 100.0.2
 */
interface SliderRepositoryInterface
{
    /**
     * Save slider.
     *
     * @param Data\SliderInterface $slider
     * @return Data\SliderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\SliderInterface $slider);

    /**
     * Retrieve slider.
     *
     * @param int $sliderId
     * @return Data\SliderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($sliderId);

    /**
     * Retrieve sliders matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return Data\SliderSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete slider.
     *
     * @param Data\SliderInterface $slider
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\SliderInterface $slider);

    /**
     * Delete slider by ID.
     *
     * @param int $sliderId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($sliderId);
}
