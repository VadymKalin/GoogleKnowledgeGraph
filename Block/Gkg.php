<?php
/**
 * Copyright © 2016 Vadym Kalin.
 * http://full-stack-dev.com
 * kalinvadim@gmail.com
 * All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

namespace Kalin\GoogleKnowledgeGraph\Block;

/**
 * GoogleKnowledgeGraph Page Block
 */
class Gkg extends \Magento\Framework\View\Element\Template
{
    /**
     * Google knowledge graph data
     *
     * @var \Kalin\GoogleKnowledgeGraph\Helper\Data
     */
    protected $_googleKnowledgeGraphData = null;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $salesOrderCollection
     * @param \Kalin\GoogleKnowledgeGraph\Helper\Data $googleKnowledgeGraphData
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $salesOrderCollection,
        \Kalin\GoogleKnowledgeGraph\Helper\Data $googleKnowledgeGraphData,
        array $data = []
    ) {
        $this->_googleKnowledgeGraphData = $googleKnowledgeGraphData;
        parent::__construct($context, $data);
    }

    /**
     * Get config
     *
     * @param string $path
     * @return mixed
     */
    public function getConfig($path)
    {
        return $this->_scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Render Google Knowledge Graph tracking scripts
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->_googleKnowledgeGraphData->isGoogleKnowledgeGraphAvailable()) {
            return '';
        }

        return parent::_toHtml();
    }
}