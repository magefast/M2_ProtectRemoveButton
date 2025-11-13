<?php

namespace Strekoza\ProtectRemoveButton\Api;

interface SettingsInterface
{
    public const XML_SETTINGS_PATH_DISABLE_CATEGORY_DELETE_BUTTON = 'protect_remove_button/settings/category_delete_button';

    public const XML_SETTINGS_PATH_DISABLE_PRODUCT_MASSACTION_DELETE_BUTTON = 'protect_remove_button/settings/product_delete_button_massaction';

    public const XML_SETTINGS_PATH_DISABLE_ATTRIBUTE_SET_DELETE_BUTTON = 'protect_remove_button/settings/attribute_set_delete_button';

    public const XML_SETTINGS_PATH_DISABLE_ATTRIBUTE_DELETE_BUTTON = 'protect_remove_button/settings/attribute_delete_button';

    public const XML_SETTINGS_PATH_DISABLE_CMS_BLOCK_DELETE_BUTTON = 'protect_remove_button/settings/cms_block_delete_button';
    public const XML_SETTINGS_PATH_DISABLE_CMS_BLOCK_MASSACTION_DELETE_BUTTON = 'protect_remove_button/settings/cms_block_delete_button_massaction';

    public const XML_SETTINGS_PATH_DISABLE_CMS_PAGE_DELETE_BUTTON = 'protect_remove_button/settings/cms_page_delete_button';
    public const XML_SETTINGS_PATH_DISABLE_CMS_PAGE_MASSACTION_DELETE_BUTTON = 'protect_remove_button/settings/cms_page_delete_button_massaction';


    public function isHideDeleteButtonForCategory(): bool;

    public function isHideDeleteButtonForProductMassAction(): bool;

    public function isHideDeleteButtonForAttributeSet(): bool;

    public function isHideDeleteButtonForAttribute(): bool;

    public function isHideDeleteButtonForCmsBlock(): bool;

    public function isHideDeleteButtonForCmsBlockMassAction(): bool;

    public function isHideDeleteButtonForPage(): bool;

    public function isHideDeleteButtonForPageMassAction(): bool;
}
