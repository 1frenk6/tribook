<?php
$installer = $this;
$installer->startSetup();
/**
 * Adding new attribute "enable"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_is_enable', [
        'type'              => 'int',
        'label'             => 'tbblog_is_enable',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => 0,
        'visible'           => true,
        'required'          => true,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => true,
        'unique'            => false,
        ]
);
/**
 * Adding new attribute "post_image"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_post_image', [
        'type'              => 'varchar',
        'label'             => 'tbblog_post_image',
        'frontend_model'    => 'catalog/product_attribute_frontend_image',
        'input'             => 'media_image',
        'class'             => '',
        'source'            => '',
        'global'            => 0,
        'visible'           => true,
        'required'          => true,
        'user_defined'      => true,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => true,
        'unique'            => false,
    ]
);
/**
 * Adding new attribute "short_description"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_short_description', [
        'type'              => 'varchar',
        'label'             => 'tbblog_short_description',
        'input'             => 'text',
        'class'             => '',
        'source'            => '',
        'global'            => 0,
        'visible'           => true,
        'required'          => true,
        'user_defined'      => true,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => true,
        'unique'            => false,
    ]
);
/**
 * Adding new attribute "description"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_description', [
        'type'              => 'varchar',
        'label'             => 'tbblog_description',
        'input'             => 'textarea',
        'class'             => '',
        'source'            => '',
        'global'            => 0,
        'visible'           => true,
        'required'          => true,
        'user_defined'      => true,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => true,
        'unique'            => false,
        ]
);
$installer -> endSetup();