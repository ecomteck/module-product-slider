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

namespace Ecomteck\ProductSlider\Api\Data;

/**
 * Interface SliderInterface
 * @api
 * @since 100.0.2
 */
interface SliderInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SLIDER_ID          = 'slider_id';
    const NAME               = 'name';
    const STATUS             = 'status';
    const TITLE              = 'title';
    const DESCRIPTION        = 'description';
    const STORE_IDS          = 'store_ids';
    const CUSTOMER_GROUP_IDS = 'customer_group_ids';
    const LIMIT_NUMBER       = 'limit_number';
    const LOCATION           = 'location';
    const TIME_CACHE         = 'time_cache';
    const FROM_DATE          = 'from_date';
    const TO_DATE            = 'to_date';
    const PRODUCT_TYPE       = 'product_type';
    const CATEGORIES_IDS     = 'categories_ids';
    const PRODUCT_IDS        = 'product_ids';
    const DISPLAY_ADDITIONAL = 'display_additional';
    const IS_RESPONSIVE      = 'is_responsive';
    const RESPONSIVE_ITEMS   = 'responsive_items';
    const CREATED_AT         = 'created_at';
    const UPDATED_AT         = 'updated_at';

    /**
     * Get SLIDER ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set SLIDER ID
     *
     * @param int $sliderId
     * @return SliderInterface
     */
    public function setId($sliderId);

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set Name
     *
     * @param string $name
     * @return SliderInterface
     */
    public function setName($name);

    /**
     * Get Status
     *
     * @return int|null
     */
    public function getStatus();

    /**
     * Set Status
     *
     * @param int $status
     * @return SliderInterface
     */
    public function setStatus($status);

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set Title
     *
     * @param string $title
     * @return SliderInterface
     */
    public function setTitle($title);

    /**
     * Get Description
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set Description
     *
     * @param string $description
     * @return SliderInterface
     */
    public function setDescription($description);

    /**
     * Get Store IDs
     *
     * @return string|null
     */
    public function getStoreIds();

    /**
     * Set Store IDs
     *
     * @param string $storeIds
     * @return SliderInterface
     */
    public function setStoreIds($storeIds);

    /**
     * Get Customer Group IDs
     *
     * @return string|null
     */
    public function getCustomerGroupIds();

    /**
     * Set Customer Group IDs
     *
     * @param string $customerGroupIds
     * @return SliderInterface
     */
    public function setCustomerGroupIds($customerGroupIds);

    /**
     * Get Limit Number
     *
     * @return int|null
     */
    public function getLimitNumber();

    /**
     * Set Limit Number
     *
     * @param int $limitNumber
     * @return SliderInterface
     */
    public function setLimitNumber($limitNumber);

    /**
     * Get Location
     *
     * @return string|null
     */
    public function getLocation();

    /**
     * Set Location
     *
     * @param string $location
     * @return SliderInterface
     */
    public function setLocation($location);

    /**
     * Get Time Cache
     *
     * @return string|null
     */
    public function getTimeCache();

    /**
     * Set Time Cache
     *
     * @param string $timeCache
     * @return SliderInterface
     */
    public function setTimeCache($timeCache);

    /**
     * Get From Date
     *
     * @return string|null
     */
    public function getFromDate();

    /**
     * Set From Date
     *
     * @param string $fromDate
     * @return SliderInterface
     */
    public function setFromDate($fromDate);

    /**
     * Get To Date
     *
     * @return string|null
     */
    public function getToDate();

    /**
     * Set To Date
     *
     * @param string $toDate
     * @return SliderInterface
     */
    public function setToDate($toDate);

    /**
     * Get Product Type
     *
     * @return string|null
     */
    public function getProductType();

    /**
     * Set Product Type
     *
     * @param string $productType
     * @return SliderInterface
     */
    public function setProductType($productType);

    /**
     * Get Category IDs
     *
     * @return string|null
     */
    public function getCategoryIds();

    /**
     * Set Category IDs
     *
     * @param string $categoryIds
     * @return SliderInterface
     */
    public function setCategoryIds($categoryIds);

    /**
     * Get Product IDs
     *
     * @return string|null
     */
    public function getProductIds();

    /**
     * Set Product IDs
     *
     * @param string $productIds
     * @return SliderInterface
     */
    public function setProductIds($productIds);

    /**
     * Get Display Additional
     *
     * @return string|null
     */
    public function getDisplayAdditional();

    /**
     * Set Display Additional
     *
     * @param string $displayAdditional
     * @return SliderInterface
     */
    public function setDisplayAdditional($displayAdditional);

    /**
     * Get Is Responsive
     *
     * @return string|null
     */
    public function getIsResponsive();

    /**
     * Set Is Responsive
     *
     * @param string $isResponsive
     * @return SliderInterface
     */
    public function setIsResponsive($isResponsive);

    /**
     * Get Responsive Items
     *
     * @return string|null
     */
    public function getResponsiveItems();

    /**
     * Set Responsive Items
     *
     * @param string $responsiveItems
     * @return SliderInterface
     */
    public function setResponsiveItems($responsiveItems);

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return SliderInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get Updated At
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set Updated At
     *
     * @param string $updatedAt
     * @return SliderInterface
     */
    public function setUpdatedAt($updatedAt);
}
