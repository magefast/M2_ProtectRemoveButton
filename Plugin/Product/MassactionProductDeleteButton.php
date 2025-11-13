<?php

namespace Strekoza\ProtectRemoveButton\Plugin\Product;

use Magento\Catalog\Ui\Component\Product\MassAction;
use Strekoza\ProtectRemoveButton\Service\Settings;

class MassactionProductDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function afterGetChildComponents(MassAction $subject, $result)
    {
        if ($this->settings->isHideDeleteButtonForProductMassAction()) {
            if ($subject->getContext()->getNamespace() == 'product_listing') {
                if (isset($result['delete'])) {
                    unset($result['delete']);
                }
            }
        }

        return $result;
    }
}
