<?php

namespace Strekoza\ProtectRemoveButton\Service;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Strekoza\ProtectRemoveButton\Api\SettingsInterface;

class Settings implements SettingsInterface
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isHideDeleteButtonForCategory(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_CATEGORY_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForProductMassAction(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_PRODUCT_MASSACTION_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForAttributeSet(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_ATTRIBUTE_SET_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForAttribute(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_ATTRIBUTE_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForCmsBlock(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_CMS_BLOCK_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForCmsBlockMassAction(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_CMS_BLOCK_MASSACTION_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForPage(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_CMS_PAGE_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

    public function isHideDeleteButtonForPageMassAction(): bool
    {
        $settings = $this->scopeConfig->getValue(self::XML_SETTINGS_PATH_DISABLE_CMS_PAGE_MASSACTION_DELETE_BUTTON);

        if ((bool)$settings === true) {
            return true;
        }

        return false;
    }

}
