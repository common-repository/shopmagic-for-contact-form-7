<?php

namespace ShopMagicCF7Vendor\WPDesk\PluginBuilder\Plugin;

interface HookablePluginDependant extends \ShopMagicCF7Vendor\WPDesk\PluginBuilder\Plugin\Hookable
{
    /**
     * Set Plugin.
     *
     * @param AbstractPlugin $plugin Plugin.
     *
     * @return null
     */
    public function set_plugin(\ShopMagicCF7Vendor\WPDesk\PluginBuilder\Plugin\AbstractPlugin $plugin);
    /**
     * Get plugin.
     *
     * @return AbstractPlugin.
     */
    public function get_plugin();
}
