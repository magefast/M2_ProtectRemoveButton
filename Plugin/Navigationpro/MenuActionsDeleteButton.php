<?php

namespace Strekoza\ProtectRemoveButton\Plugin\Navigationpro;

use Strekoza\ProtectRemoveButton\Service\Settings;
use Swissup\Navigationpro\Ui\Component\Listing\Column\MenuActions;

class MenuActionsDeleteButton
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function afterPrepareDataSource(MenuActions $subject, $result)
    {
        //@todo Settings in Admin panel || User settings

        foreach ($result['data']['items'] as $name => $item) {
            if (isset($item['actions']['delete'])) {
                unset($result['data']['items'][$name]['actions']['delete']);
            }
        }

        return $result;
    }
}
