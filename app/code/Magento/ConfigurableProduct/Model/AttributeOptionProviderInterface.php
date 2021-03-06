<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ConfigurableProduct\Model;

/**
 * Interface to retrieve options for attribute
 * @api
 */
interface AttributeOptionProviderInterface
{
    /**
     * Retrieve options for attribute
     *
     * @param \Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute
     * @param int $productId
     * @return array
     */
    public function getAttributeOptions(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $productId);
}
