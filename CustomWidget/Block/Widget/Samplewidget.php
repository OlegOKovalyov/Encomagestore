<?php

namespace Encomagestore\CustomWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Samplewidget extends Template implements BlockInterface
{

    protected $_template = "widget/samplewidget.phtml";

    protected $_productCollectionFactory;

    protected $_productVisibility;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\Product\Visibility $productVisibility,
        \Magento\Catalog\Helper\ImageFactory $imageHelperFactory,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_productVisibility = $productVisibility;
        $this->imageHelperFactory = $imageHelperFactory;
        parent::__construct($context, $data);
    }

    public function getTitle() {
        return 'Random Products';
    }

    public function getProductCollection() {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');

        // get simple products
        $collection->addAttributeToFilter('type_id', \Magento\Catalog\Model\Product\Type::TYPE_SIMPLE);

        // filter current website products
        $collection->addWebsiteFilter();

        // filter current store products
        $collection->addStoreFilter();

        // set visibility filter
        $collection->setVisibility($this->_productVisibility->getVisibleInSiteIds());

        // fetching only 3 products
        $collection->setPageSize(3)->getSelect()->orderRand();

        return $collection;
    }

}
