<?php

namespace Krupka\TrapManager;

use Backend;
use Carbon\Carbon;
use Krupka\TrapManager\Controllers\Traps;
use Krupka\TrapManager\Models\Trap;
use System\Classes\PluginBase;
use Krupka\Trapmanager\Models\TrapEntry;

/**
 * TrapManager Plugin Information File
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
            'name'        => 'TrapManager',
            'description' => 'No description provided yet...',
            'author'      => 'Krupka',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Krupka\TrapManager\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'krupka.trapmanager.some_permission' => [
                'tab' => 'TrapManager',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {


        return [
            'trapmanager' => [
                'label'       => 'TrapManager',
                'url'         => Backend::url('krupka/trapmanager/traps'),
                'icon'        => 'icon-crosshairs',
                'permissions' => ['krupka.trapmanager.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSchedule($schedule)
    {
        $schedule->call(function () {

            $allTraps = Trap::all();
            foreach ($allTraps as $trap) {
                $trap_id = $trap->id;
                $trapEntry = new TrapEntry();
                $trapEntry->trap_id = $trap_id;
                $trapEntry->date = Carbon::today();

                $trapEntry->save();
            }
        })->daily();
    }
}
