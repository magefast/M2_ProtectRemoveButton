<?php

namespace Strekoza\ProtectRemoveButton\Plugin\Attribute;

use Magento\Backend\Block\Widget\Button\ButtonList;
use Magento\Framework\App\Request\Http;
use Strekoza\ProtectRemoveButton\Service\Settings;

class AttributeDeleteButton
{
    private Settings $settings;
    private Http $request;

    public function __construct(Settings $settings, Http $request)
    {
        $this->settings = $settings;
        $this->request = $request;
    }

    public function afterUpdate(ButtonList $subject, $result, $buttonId, $key, $data)
    {
        if ($this->settings->isHideDeleteButtonForAttribute() === true) {
            $actionName = $this->request->getActionName();
            $controllerName = $this->request->getControllerName();
            $moduleName = $this->request->getModuleName();

            if ($moduleName === 'catalog' && $controllerName === 'product_attribute' && $actionName === 'edit') {
                if ($buttonId === 'delete') {
                    $subject->remove($buttonId);
                }
            }
        }

        return $result;
    }
}
