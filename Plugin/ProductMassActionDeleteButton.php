<?php
/**
 * @author magefast@gmail.com www.magefast.com
 */

namespace Strekoza\ProtectRemoveButton\Plugin;

use Magento\Catalog\Ui\Component\Product\MassAction;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Strekoza\ProtectRemoveButton\Api\SettingsInterface;

class ProductMassActionDeleteButton implements SettingsInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param MassAction $subject
     * @param $result
     * @param $actionType
     * @return false
     */
    public function afterIsActionAllowed(MassAction $subject, $result, $actionType)
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_PRODUCT_DELETE_BUTTON_MASS_ACTION);

        if ($actionType == 'delete') {
            if ((bool)$settings == true) {
                return false;
            }
        }

        return $result;
    }
}
