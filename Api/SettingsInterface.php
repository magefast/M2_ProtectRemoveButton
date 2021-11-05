<?php
/**
 * @author magefast@gmail.com www.magefast.com
 */
namespace Strekoza\ProtectRemoveButton\Api;

interface SettingsInterface
{
    public const XML_SETTINGS_PATH_DISABLE_CATEGORY_DELETE_BUTTON = 'protect_remove_button/settings/category_delete_button';
    public const XML_SETTINGS_PATH_DISABLE_PRODUCT_DELETE_BUTTON_MASS_ACTION = 'protect_remove_button/settings/product_delete_button_mass_action';
    public const XML_SETTINGS_PATH_DISABLE_CMS_PAGE_DELETE_BUTTON = 'protect_remove_button/settings/cms_page_delete_button';
    public const XML_SETTINGS_PATH_DISABLE_CMS_BLOCK_DELETE_BUTTON = 'protect_remove_button/settings/cms_block_delete_button';
}

// todo: for page listing &  block listing
