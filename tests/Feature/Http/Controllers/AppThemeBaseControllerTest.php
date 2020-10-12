<?php


namespace TallAndSassy\AppThemeBase\Tests\Feature\Http\Controllers;

class AppThemeBaseControllerTest extends \TallAndSassy\AppThemeBase\Tests\TestCase
{
    /** @test */
    public function global_urls_returns_ok()
    {
        // Test hard-coded routes...
        $this
            ->get('/grok/TallAndSassy/AppThemeBase/sample_string')
            ->assertOk()
            ->assertSee('Hello AppThemeBase string via global url.');
        $this
            ->get('/grok/TallAndSassy/AppThemeBase/sample_blade')
            ->assertOk()
            ->assertSee('Hello AppThemeBase from blade in TallAndSassy/AppThemeBase/groks/sample_blade');
        $this
            ->get('/grok/TallAndSassy/AppThemeBase/controller')
            ->assertOk()
            ->assertSee('Hello AppThemeBase from: TallAndSassy\AppThemeBase\Http\Controllers\AppThemeBaseController::sample');
    }


    /** @test */
    public function prefixed_urls_returns_ok()
    {
        // Test user-defined routes...
        // Reproduce in routes/web.php like so
        //  Route::tassy('staff');
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppThemeBase/string
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppThemeBase/blade
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppThemeBase/controller
        $userDefinedBladePrefix = $this->userDefinedBladePrefix; // user will do this in routes/web.php Route::tassy('url');

        // string
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppThemeBase/sample_string")
            ->assertOk()
            #->assertSee('hw(TallAndSassy\AppThemeBase\Http\Controllers\AppThemeBaseController)');
        ->assertSee('Hello AppThemeBase string via blade prefix');

        // blade
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppThemeBase/sample_blade")
            ->assertOk()
            ->assertSee('Hello AppThemeBase from blade in TallAndSassy/AppThemeBase/groks/sample_blade');

        // controller
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppThemeBase/controller")
            ->assertOk()
            ->assertSee('Hello AppThemeBase from: TallAndSassy\AppThemeBase\Http\Controllers\AppThemeBaseController::sample');
    }
}
