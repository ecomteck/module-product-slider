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

use Ecomteck\ProductSlider\Api\Data;
use Ecomteck\ProductSlider\Api\SliderRepositoryInterface;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use Mageplaza\Productslider\Model\ResourceModel\Slider as ResourceSlider;
use Mageplaza\Productslider\Model\ResourceModel\Slider\CollectionFactory as SliderCollectionFactory;

/**
 * Class SliderRepository
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class SliderRepository implements SliderRepositoryInterface
{

    /**
     * @var ResourceSlider
     */
    protected $resource;

    /**
     * @var SliderFactory
     */
    protected $sliderFactory;

    /**
     * @var SliderCollectionFactory
     */
    protected $sliderCollectionFactory;

    /**
     * @var Data\SliderSearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    /**
     * @var DataObjectProcessor
     */
    protected $dataObjectProcessor;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    public function __construct(
        ResourceSlider $resource,
        SliderFactory $sliderFactory,
        SliderCollectionFactory $sliderCollectionFactory,
        Data\SliderSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor = null
    ) {
        $this->resource = $resource;
        $this->sliderFactory = $sliderFactory;
        $this->sliderCollectionFactory = $sliderCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor ?: $this->getCollectionProcessor();
    }

    /**
     * Save slider.
     *
     * @param Data\SliderInterface $slider
     * @return Data\SliderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\SliderInterface $slider)
    {
        if ($slider->getStoreIds() === null) {
            $storeId = $this->storeManager->getStore()->getId();
            $slider->setStoreIds($storeId);
        }
        try {
            $this->resource->save($slider);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Could not save the slider: %1', $exception->getMessage()),
                $exception
            );
        }

        return $slider;
    }

    /**
     * Retrieve slider.
     *
     * @param int $sliderId
     * @return Data\SliderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($sliderId)
    {
        $slider = $this->sliderFactory->create();
        $slider->load($sliderId);
        if (!$slider->getId()) {
            throw new NoSuchEntityException(__('The Product slider with the "%1" ID doesn\'t exist.', $sliderId));
        }
        return $slider;
    }

    /**
     * Retrieve sliders matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return Data\SliderSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        /** @var \Mageplaza\Productslider\Model\ResourceModel\Slider\Collection $collection */
        $collection = $this->sliderCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var Data\SliderSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

    /**
     * Delete slider.
     *
     * @param Data\SliderInterface $slider
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\SliderInterface $slider)
    {
        try {
            $this->resource->delete($slider);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the slider: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * Delete slider by ID.
     *
     * @param int $sliderId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($sliderId)
    {
        return $this->delete($this->getById($sliderId));
    }

    /**
     * Retrieve collection processor
     *
     * @deprecated 102.0.0
     * @return CollectionProcessorInterface
     */
    private function getCollectionProcessor()
    {
        if (!$this->collectionProcessor) {
            $this->collectionProcessor = \Magento\Framework\App\ObjectManager::getInstance()->get(
                'Ecomteck\ProductSlider\Model\Api\SearchCriteria\SliderCollectionProcessor'
            );
        }
        return $this->collectionProcessor;
    }
}
