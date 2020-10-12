<?php

namespace TallAndSassy\AppThemeBase\Tests\Feature\Models;

use TallAndSassy\AppThemeBase\Models\AppThemeBaseModel;
use TallAndSassy\AppThemeBase\Tests\TestCase;

class AppThemeBaseModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        $model = AppThemeBaseModel::create(['name' => 'John']);
        $this->assertDatabaseCount('app-theme-base', 1);
        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
