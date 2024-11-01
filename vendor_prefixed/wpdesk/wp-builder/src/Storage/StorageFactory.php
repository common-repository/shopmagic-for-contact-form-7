<?php

namespace ShopMagicCF7Vendor\WPDesk\PluginBuilder\Storage;

class StorageFactory
{
    /**
     * @return PluginStorage
     */
    public function create_storage()
    {
        return new \ShopMagicCF7Vendor\WPDesk\PluginBuilder\Storage\WordpressFilterStorage();
    }
}
