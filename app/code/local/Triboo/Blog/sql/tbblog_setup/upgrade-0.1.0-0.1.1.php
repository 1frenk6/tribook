<?php
$installer = $this;
$installer->startSetup();
/**
 * Adding new attribute "created_at"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_created_at', [
        'type'              => 'datetime',
        'label'             => 'tbblog_created_at',
        'input'             => 'date',
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
 * Adding new attribute "updated_at"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_updated_at', [
        'type'              => 'datetime',
        'label'             => 'tbblog_updated_at',
        'input'             => 'date',
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
 * Adding new attribute "enable"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_enable', [
        'type'              => 'int',
        'label'             => 'tbblog_enable',
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
 * Adding new attribute "description"
 */
$installer->addAttribute(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST , 'tbblog_description', [
        'type'              => 'varchar',
        'label'             => 'tbblog_description',
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
$installer -> endSetup();