<?php

$installer = $this;
$installer->startSetup();

$attribute  = array(
    'group'                     => 'General',
        'input'                     => 'select',
        'type'                      => 'int',
        'label'                     => 'Mega Menu',
        'source'                    => 'eav/entity_attribute_source_boolean',
        'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'                   => 1,
        'required'                  => 1,
        'visible_on_front'          => 0,
        'is_html_allowed_on_front'  => 0,
        'is_configurable'           => 0,
        'searchable'                => 0,
        'filterable'                => 0,
        'comparable'                => 0,
        'unique'                    => false,
        'user_defined'              => false,
        'default'           => '0',
        'is_user_defined'           => false,
        'used_in_product_listing'   => true
);
$installer->addAttribute('catalog_category', 'mega_menu', $attribute);
$installer->endSetup();

?>
