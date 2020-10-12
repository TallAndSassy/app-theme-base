<?php


namespace TallAndSassy\AppThemeBase\Tests\Feature\Commands;

class AppThemeBaseCommandTest extends \TallAndSassy\AppThemeBase\Tests\TestCase
{
    /** @test */
    public function test_command_works()
    {
        $this->artisan('tassy:somecommand')->assertExitCode(0);
        $this->artisan('tassy:somecommand')->expectsOutput('TallAndSassy/AppThemeBase/hw/tbd');
    }
}
