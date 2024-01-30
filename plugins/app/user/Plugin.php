<?php namespace App\User;

use Backend;
use System\Classes\PluginBase;
use App\Arrival\Models\Arrival;
/**
 * user Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'user',
            'description' => 'No description provided yet...',
            'author'      => 'app',
            'icon'        => 'icon-leaf'
        ];
    }




    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        
    
    }

}
