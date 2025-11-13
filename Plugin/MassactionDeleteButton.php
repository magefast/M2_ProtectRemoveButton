<?php

namespace Strekoza\ProtectRemoveButton\Plugin;

use Magento\Ui\Component\MassAction;
use Strekoza\ProtectRemoveButton\Service\Settings;

class MassactionDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function afterGetChildComponents(MassAction $subject, $result)
    {
        if ($this->settings->isHideDeleteButtonForPageMassAction()) {
            if ($subject->getContext()->getNamespace() == 'cms_page_listing') {
                if (isset($result['delete'])) {
                    unset($result['delete']);
                }
            }
        }

        if ($this->settings->isHideDeleteButtonForCmsBlockMassAction()) {
            if ($subject->getContext()->getNamespace() == 'cms_block_listing') {
                if (isset($result['delete'])) {
                    unset($result['delete']);
                }
            }
        }

        //@todo Settings in Admin panel || User settings
        if ($subject->getContext()->getNamespace() == 'navigationpro_menu_listing') {
            if (isset($result['delete'])) {
                unset($result['delete']);
            }
        }

        return $result;
    }
}
