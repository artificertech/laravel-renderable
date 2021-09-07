<?php

namespace Artificertech\LaravelRenderable\Concerns;

trait IsRenderable
{
    /**
     * The class renderable attributes.
     *
     * @var array
     */
    protected $renderableAttributes = [];

    /**
     * Get an attribute from the model.
     *
     * @param  string  $key
     * @return mixed
     */
    public function getRenderable($key)
    {
        if (!$key) {
            return;
        }

        return $this->renderableAttributes[$key];
    }

    /**
     * Set a given attribute on the model.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    public function setRenderable($key, $value)
    {
        $this->renderableAttributes[$key] = $value;

        return $this;
    }

    public function component()
    {
        return $this->component;
    }

    public function renderableAttributes()
    {
        return $this->renderableAttributes;
    }
}
