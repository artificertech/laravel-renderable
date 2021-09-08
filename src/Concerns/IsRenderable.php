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
     * @param  string|array  $key
     * @param  mixed  $value
     * @return mixed
     */
    public function setRenderable($key, $value = null)
    {
        if (is_array($key)) {
            $this->renderableAttributes = array_merge($this->renderableAttributes, $key);

            return $this;
        }

        $this->renderableAttributes[$key] = $value;

        return $this;
    }

    /**
     * Get the blade component that will be used for this object.
     *
     * @return string
     */
    public function component()
    {
        return $this->component;
    }

    /**
     * Get the attributes that will be passed to the blade component.
     *
     * @return array
     */
    public function renderableAttributes()
    {
        return $this->renderableAttributes;
    }
}
