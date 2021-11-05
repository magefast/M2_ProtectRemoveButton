<?php
/**
 * @author magefast@gmail.com www.magefast.com
 */

namespace Strekoza\ProtectRemoveButton\Plugin;

use Magento\Cms\Block\Adminhtml\Block\Edit\DeleteButton;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Strekoza\ProtectRemoveButton\Api\SettingsInterface;

class BlockDeleteButton implements SettingsInterface
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
     * @param DeleteButton $subject
     * @param $result
     * @return array|null
     */
    public function afterGetButtonData(DeleteButton $subject, $result): ?array
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_CMS_BLOCK_DELETE_BUTTON);

        if ((bool)$settings == true) {
            return [];
        }

        return $result;
    }
}
