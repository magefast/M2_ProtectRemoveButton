<?php

namespace Strekoza\ProtectRemoveButton\Plugin\CmsBlock;

use Magento\Cms\Block\Adminhtml\Block\Edit\DeleteButton;
use Strekoza\ProtectRemoveButton\Service\Settings;

class CmsBlockDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param DeleteButton $subject
     * @param $result
     * @return array|null
     */
    public function afterGetButtonData(DeleteButton $subject, $result): ?array
    {
        if ($this->settings->isHideDeleteButtonForCmsBlock() === true) {
            return [];
        }

        return $result;
    }
}
