<?php

namespace Strekoza\ProtectRemoveButton\Plugin\Attribute;

use Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Main;
use Strekoza\ProtectRemoveButton\Service\Settings;

class AttributeSetDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function afterGetIsCurrentSetDefault(Main $subject, $result)
    {
        if ($this->settings->isHideDeleteButtonForAttributeSet() === true) {
            return true;
        }

        return $result;
    }
}
