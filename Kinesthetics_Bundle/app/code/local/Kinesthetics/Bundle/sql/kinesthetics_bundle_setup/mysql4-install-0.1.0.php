<?php
 
$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
/**
 * Adding Different Attributes
 */
 
// adding attribute group
$setup->addAttributeGroup('catalog_product', 'Default', 'Bundle Option', 3);
 
// the attribute added will be displayed under the group/tab Special Attributes in product edit page
$setup->addAttribute('catalog_product', 'isbundle', array(
	'group'     	=> 'Bundle Option',
	'input'         => 'boolean',
    'type'          => 'int',
    'label'         => 'Is Bundle',
	'backend'       => '',
	'visible'       => 0,
	'required'		=> 0,
	'user_defined' => 1,
	'searchable' => 0,
	'filterable' => 0,
	'comparable'	=> 1,
	'visible_on_front' => 0,
	'visible_in_advanced_search'  => 0,
	'is_html_allowed_on_front' => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
 
$installer->endSetup();