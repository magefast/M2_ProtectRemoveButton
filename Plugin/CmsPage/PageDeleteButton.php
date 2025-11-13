<?php

namespace Strekoza\ProtectRemoveButton\Plugin\CmsPage;

use Magento\Cms\Block\Adminhtml\Page\Edit\DeleteButton;
use Strekoza\ProtectRemoveButton\Service\Settings;

class PageDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param DeleteButton $subject
     * @param $result
     * @return array
     */
    public function afterGetButtonData(DeleteButton $subject, $result)
    {
        if ($this->settings->isHideDeleteButtonForPage()) {
            return [];
        }

        return $result;
    }
}
