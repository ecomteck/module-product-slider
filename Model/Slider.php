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
 * @package     Ecomteck_
 * @copyright   Copyright (c) 2019 Ecomteck (https://ecomteck.com/)
 * @license     https://ecomteck.com/LICENSE.txt
 */

namespace Ecomteck\ProductSlider\Model;

use Mageplaza\Productslider\Model\Slider as MainSlider;
use Ecomteck\ProductSlider\Api\Data\SliderInterface;

class Slider extends MainSlider implements  SliderInterface
{

    /**
     * Get SLIDER ID
     *
     * @return int|null
     */
    public function getId()
    {
        return parent::getData(self::SLIDER_ID);
    }

    /**
     * Set SLIDER ID
     *
     * @param int $sliderId
     * @return SliderInterface
     */
    public function setId($sliderId)
    {
        return $this->setData(self::SLIDER_ID, $sliderId);
    }

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return SliderInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Set Status
     *
     * @param int $status
     * @return SliderInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return SliderInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Get Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return SliderInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Get Store IDs
     *
     * @return string|null
     */
    public function getStoreIds()
    {
        return $this->getData(self::STORE_IDS);
    }

    /**
     * Set Store IDs
     *
     * @param string $storeIds
     * @return SliderInterface
     */
    public function setStoreIds($storeIds)
    {
        return $this->setData(self::STORE_IDS, $storeIds);
    }

    /**
     * Get Customer Group IDs
     *
     * @return string|null
     */
    public function getCustomerGroupIds()
    {
        return $this->getData(self::CUSTOMER_GROUP_IDS);
    }

    /**
     * Set Customer Group IDs
     *
     * @param string $customerGroupIds
     * @return SliderInterface
     */
    public function setCustomerGroupIds($customerGroupIds)
    {
        return $this->setData(self::CUSTOMER_GROUP_IDS, $customerGroupIds);
    }

    /**
     * Get Limit Number
     *
     * @return int|null
     */
    public function getLimitNumber()
    {
        return $this->getData(self::LIMIT_NUMBER);
    }

    /**
     * Set Limit Number
     *
     * @param int $limitNumber
     * @return SliderInterface
     */
    public function setLimitNumber($limitNumber)
    {
        return $this->setData(self::LIMIT_NUMBER, $limitNumber);
    }

    /**
     * Get Location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->getData(self::LOCATION);
    }

    /**
     * Set Location
     *
     * @param string $location
     * @return SliderInterface
     */
    public function setLocation($location)
    {
        return $this->setData(self::LOCATION, $location);
    }

    /**
     * Get Time Cache
     *
     * @return string|null
     */
    public function getTimeCache()
    {
        return $this->getData(self::TIME_CACHE);
    }

    /**
     * Set Time Cache
     *
     * @param string $timeCache
     * @return SliderInterface
     */
    public function setTimeCache($timeCache)
    {
        return $this->setData(self::TIME_CACHE, $timeCache);
    }

    /**
     * Get From Date
     *
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->getData(self::FROM_DATE);
    }

    /**
     * Set From Date
     *
     * @param string $fromDate
     * @return SliderInterface
     */
    public function setFromDate($fromDate)
    {
        return $this->setData(self::FROM_DATE, $fromDate);
    }

    /**
     * Get To Date
     *
     * @return string|null
     */
    public function getToDate()
    {
        return $this->getData(self::TO_DATE);
    }

    /**
     * Set To Date
     *
     * @param string $toDate
     * @return SliderInterface
     */
    public function setToDate($toDate)
    {
        return $this->setData(self::TO_DATE, $toDate);
    }

    /**
     * Get Product Type
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->getData(self::PRODUCT_TYPE);
    }

    /**
     * Set Product Type
     *
     * @param string $productType
     * @return SliderInterface
     */
    public function setProductType($productType)
    {
        return $this->setData(self::PRODUCT_TYPE, $productType);
    }

    /**
     * Get Category IDs
     *
     * @return string|null
     */
    public function getCategoryIds()
    {
        return $this->getData(self::CATEGORIES_IDS);
    }

    /**
     * Set Category IDs
     *
     * @param string $categoryIds
     * @return SliderInterface
     */
    public function setCategoryIds($categoryIds)
    {
        return $this->setData(self::CATEGORIES_IDS, $categoryIds);
    }

    /**
     * Get Product IDs
     *
     * @return string|null
     */
    public function getProductIds()
    {
        return $this->getData(self::PRODUCT_IDS);
    }

    /**
     * Set Product IDs
     *
     * @param string $productIds
     * @return SliderInterface
     */
    public function setProductIds($productIds)
    {
        return $this->setData(self::PRODUCT_IDS, $productIds);
    }

    /**
     * Get Display Additional
     *
     * @return string|null
     */
    public function getDisplayAdditional()
    {
        return $this->getData(self::DISPLAY_ADDITIONAL);
    }

    /**
     * Set Display Additional
     *
     * @param string $displayAdditional
     * @return SliderInterface
     */
    public function setDisplayAdditional($displayAdditional)
    {
        return $this->setData(self::DISPLAY_ADDITIONAL, $displayAdditional);
    }

    /**
     * Get Is Responsive
     *
     * @return string|null
     */
    public function getIsResponsive()
    {
        return $this->getData(self::IS_RESPONSIVE);
    }

    /**
     * Set Is Responsive
     *
     * @param string $isResponsive
     * @return SliderInterface
     */
    public function setIsResponsive($isResponsive)
    {
        return $this->setData(self::IS_RESPONSIVE, $isResponsive);
    }

    /**
     * Get Responsive Items
     *
     * @return string|null
     */
    public function getResponsiveItems()
    {
        return $this->getData(self::RESPONSIVE_ITEMS);
    }

    /**
     * Set Responsive Items
     *
     * @param string $responsiveItems
     * @return SliderInterface
     */
    public function setResponsiveItems($responsiveItems)
    {
        return $this->setData(self::RESPONSIVE_ITEMS, $responsiveItems);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return SliderInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get Updated At
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set Updated At
     *
     * @param string $updatedAt
     * @return SliderInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}