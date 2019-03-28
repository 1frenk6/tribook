<?php

declare(strict_types=1);

/**
 * Class Triboo_Blog_Model_Resource_Post
 */
class Triboo_Blog_Model_Resource_Post extends Mage_Eav_Model_Entity_Abstract
{
    /**
     * @var $resource
     */
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType(Triboo_Blog_Helper_Config::ENTITY_TYPE_CODE_POST);
        $this->setConnection(
            $resource->getConnection(Triboo_Blog_Helper_Config::CONNECTION_READ),
            $resource->getConnection(Triboo_Blog_Helper_Config::CONNECTION_WRITE)
        );
    }
    /**
     * Triboo_Blog_Model_Resource_Post getDefaultAttributes.
     * @return array
     */
    protected function __getDefaultAttributes(): array
    {
        return [
            'increment_id',
            'is_active',
            'entity_type_id',
            'created_at',
            'updated_at',
            'store_id',
            ];
    }
}