<?php

namespace TallAndSassy\AppThemeBase;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TallAndSassy\AppThemeBase\Commands\AppThemeBaseCommand;
use TallAndSassy\AppThemeBase\Http\Controllers\AppThemeBaseController;

class AppThemeBaseServiceProvider extends ServiceProvider
{
    public static string $blade_prefix = "tassy"; #tassy is a template term

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/app-theme-base.php' => config_path('app-theme-base.php'),
                ],
                'config'
            );

            $this->publishes(
                [
                    __DIR__ . '/../resources/views' => base_path('resources/views/vendor/app-theme-base'),
                ],
                'views'
            );

            $migrationFileName = 'create_app_theme_base_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes(
                    [
                        __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path(
                            'migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName
                        ),
                    ],
                    'migrations'
                );
            }

            $this->publishes([
                 __DIR__.'/../resources/public' => public_path('/'),
                ], ['public']);

            $this->publishes([
                 __DIR__.'/../resources/views/auth' => resource_path('/views/auth'),
                ], ['views.auth']);
            $this->publishes([
                 __DIR__.'/../resources/views/profile' => resource_path('/views/profile'),
                ], ['views.profile']);
            $this->publishes([
                 __DIR__.'/../resources/views/teams' => resource_path('/views/teams'),
                ], ['views.teams']);

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('tallandsassy/app-theme-base'),
            ], 'grok.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/tallandsassy/app-theme-base'),
            ], 'grok.views');*/



            // Registering package commands.
            $this->commands(
                [
                    AppThemeBaseCommand::class,
                ]
            );
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tassy');


        Route::macro(
            'tassy',
            function (string $prefix) {
                Route::prefix($prefix)->group(
                    function () {
                        // Prefix Route Samples -BEGIN-
                        // Sample routes that only show while developing...
                        if (App::environment(['local', 'testing'])) {
                            // prefixed url to string
                            Route::get(
                                '/TallAndSassy/AppThemeBase/sample_string', // you will absolutely need a prefix in your url
                                function () {
                                    return "Hello AppThemeBase string via blade prefix";
                                }
                            );

                            // prefixed url to blade view
                            Route::get(
                                '/TallAndSassy/AppThemeBase/sample_blade',
                                function () {
                                    return view('tassy::sample_blade');
                                }
                            );

                            // prefixed url to controller
                            Route::get(
                                '/TallAndSassy/AppThemeBase/controller',
                                [AppThemeBaseController::class, 'sample']
                            );
                        }
                        // Prefix Route Samples -END-

                        // TODO: Add your own prefixed routes here...
                    }
                );
            }
        );
        Route::tassy('tassy'); // This works. http://test-jet.test/tassy/TallAndSassy/AppThemeBase/string
        // They are addatiive, so in your own routes/web.php file, do Route::tassy('staff'); to
        // make http://test-jet.test/staff/TallAndSassy/AppThemeBase/string work


        // global url samples -BEGIN-
        if (App::environment(['local', 'testing'])) {
            // global url to string
            Route::get(
                '/grok/TallAndSassy/AppThemeBase/sample_string',
                function () {
                    return "Hello AppThemeBase string via global url.";
                }
            );

            // global url to blade view
            Route::get(
                '/grok/TallAndSassy/AppThemeBase/sample_blade',
                function () {
                    return view('tassy::sample_blade');
                }
            );

            // global url to controller
            Route::get('/grok/TallAndSassy/AppThemeBase/controller', [AppThemeBaseController::class, 'sample']);
        }
        // global url samples -END-

        // TODO: Add your own global routes here...

        // GROK
        if (App::environment(['local', 'testing'])) {
            \ElegantTechnologies\Grok\GrokWrangler::grokMe(static::class, 'TallAndSassy', 'app-theme-base', 'resources/views/grok', 'tassy');//tassy gets macro'd out
            Route::get('/grok/TallAndSassy/AppThemeBase', fn () => view('tassy::grok/index'));
        }

        // TODO: Register your livewire components that live in this package here:
        # \Livewire\Livewire::component('tassygroklivewirejet::a-a-nothing',  \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\AANothing::class);
        // TODO: Add your own other boot related stuff here...
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/app-theme-base.php', 'app-theme-base');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
