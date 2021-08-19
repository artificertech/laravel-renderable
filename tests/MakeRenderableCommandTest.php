<?php

namespace Artificertech\LaravelRenderable\Tests;

use Illuminate\Support\Facades\File;

class MakeRenderableCommandTest extends TestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        File::deleteDirectory(app_path('Renderable'));
        File::deleteDirectory(resource_path('views/renderable'));
    }

    /** @test */
    public function make_renderable_command_requires_name_input()
    {
        try {
            $this->artisan('make:renderable');

            $this->assertTrue(false, 'Command must have name argument');
        } catch (\Throwable $th) {
            $this->assertTrue(true);
        }

        $this->artisan('make:renderable TestRenderable')
            ->expectsOutput('Renderable created successfully.')
            ->assertExitCode(0);
    }

    /** @test */
    public function make_renderable_command_creates_files()
    {
        $this->artisan('make:renderable TestRenderable')
            ->expectsOutput('Renderable created successfully.')
            ->assertExitCode(0);

        File::exists(app_path('Renderable/TestRenderable.php'));
        File::exists(resource_path('views/renderable/test-renderable'));
    }
}
