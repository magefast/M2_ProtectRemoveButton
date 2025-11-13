<?php

namespace Strekoza\ProtectRemoveButton\Plugin\Category;

use Magento\Catalog\Block\Adminhtml\Category\Edit\DeleteButton;
use Strekoza\ProtectRemoveButton\Service\Settings;

class CategoryDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param DeleteButton $subject
     * @param $result
     * @return false
     */
    public function afterGetButtonData(DeleteButton $subject, $result)
    {

        if ($this->settings->isHideDeleteButtonForCategory() === true) {
            return false;
        }

        return $result;
    }
}
