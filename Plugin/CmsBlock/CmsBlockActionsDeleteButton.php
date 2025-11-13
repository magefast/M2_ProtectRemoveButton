<?php

namespace Strekoza\ProtectRemoveButton\Plugin\CmsBlock;

use Magento\Cms\Ui\Component\Listing\Column\BlockActions;
use Strekoza\ProtectRemoveButton\Service\Settings;

class CmsBlockActionsDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function afterPrepareDataSource(BlockActions $subject, $result, array $dataSource)
    {
        if ($this->settings->isHideDeleteButtonForCmsBlock()) {
            foreach ($result['data']['items'] as $name => $item) {
                if (isset($item['actions']['delete'])) {
                    unset($result['data']['items'][$name]['actions']['delete']);
                }
            }
        }

        return $result;
    }
}
