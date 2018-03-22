<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        //
        //
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $user = \Auth::user();

            $event->menu->add([
                'text' =>__('admin.menu.hello') . ' ' . $user->firstname . ' ' . $user->lastname,
                'icon' => 'user',
            ]);

            $event->menu->add('MAIN NAVIGATION');
            
            $event->menu->add([
                'text' => __('admin.menu.home'),
                'url'  => '/',
                'icon' => 'home',
            ]);
            if ($user->hasAnyRole(['admin', 'anim'])) {
                $event->menu->add([
                    'text'    => __('admin.menu.configuration'),
                    'icon'    => 'gears',
                    'submenu' => [
                        [
                            'text' => __('admin.menu.cities'),
                            'url'  => 'admin/cities',
                            'icon' => 'cloud',
                            'can'  => 'manage cities',
                        ],
                        [
                            'text' =>  __('admin.menu.spaces'),
                            'url'  => 'admin/spaces',
                            'icon' => 'home',
                            'can'  => 'manage spaces',
                        ],
                        /*[
                            'text' => __('admin.menu.rooms'),
                            'url'  => 'admin/rooms',
                            'icon' => 'square'
                        ],
                        [
                            'text' => 'Horaires',
                            'url'  => 'admin/horaires',
                            'icon' => 'clock-o'
                        ],
                        [
                            'text' => 'Tarifs',
                            'url'  => 'admin/tarifs',
                            'icon' => 'eur'
                        ],
                        [
                            'text' => 'Materiel',
                            'url'  => 'admin/materiels',
                            'icon' => 'desktop'
                        ]*/
                    ]
                ]);
            }
            
            $event->menu->add([
                'text'       => 'Important',
                'icon_color' => 'red',
            ]);
            $event->menu->add([
                'text'       => 'Warning',
                'icon_color' => 'yellow',
            ]);
            $event->menu->add([
                'text'       => 'Information',
                'icon_color' => 'aqua',
            ]);
            $event->menu->add([
                'text' => 'Blog',
                'url'  => 'admin/blog',
                'can'  => 'manage-blog',
            ]);
            $event->menu->add([
                'text'        => 'Pages',
                'url'         => 'admin/pages',
                'icon'        => 'file',
                'label'       => 4,
                'label_color' => 'warning',
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
