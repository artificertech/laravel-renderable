<?php

namespace Artificertech\LaravelRenderable\Tests\Stubs;

use Artificertech\LaravelRenderable\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as FacadesView;

class TestRenderable implements Renderable
{
    /** The blade file to use */
    protected string $viewFile;

    /**
     * Create a new renderable instance.
     *
     * @return void
     */
    public function __construct($viewFile)
    {
        $this->viewFile = $viewFile;
    }

    /**
     * Defines the variable name that this renderable class
     * will have when used with the x-renderable blade component.
     *
     * @return string
     */
    public function variableName(): string
    {
        return 'test';
    }

    /**
     * Get the view that represents the renderable object.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return FacadesView::file($this->viewFile);
    }
}
