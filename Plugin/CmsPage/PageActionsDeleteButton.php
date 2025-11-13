<?php

namespace Strekoza\ProtectRemoveButton\Plugin\CmsPage;

use Magento\Cms\Ui\Component\Listing\Column\PageActions;
use Strekoza\ProtectRemoveButton\Service\Settings;

class PageActionsDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function afterPrepareDataSource(PageActions $subject, $result, array $dataSource)
    {
        if ($this->settings->isHideDeleteButtonForPage()) {
            foreach ($result['data']['items'] as $name => $item) {
                if (isset($item['actions']['delete'])) {
                    unset($result['data']['items'][$name]['actions']['delete']);
                }
            }
        }

        return $result;
    }
}
