<?php
/**
 * Copyright © 2016 Vadym Kalin.
 * http://full-stack-dev.com
 * kalinvadim@gmail.com
 * All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

namespace Kalin\GoogleKnowledgeGraph\Helper;

use Magento\Store\Model\Store;

/**
 * GoogleKnowledgeGraph data helper
 *
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_ACTIVE = 'google/knowledgegraph/active';

    /**
     * Whether Google Knowledge Graph is ready to use
     *
     * @param null|string|bool|int|Store $store
     * @return bool
     */
    public function isGoogleKnowledgeGraphAvailable($store = null)
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ACTIVE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
    }
}
