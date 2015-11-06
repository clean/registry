<?php namespace Clean;

class Registry
{
    protected $data = [];

    /**
     * Sets variable
     *
     * @param string $name
     * @param mixed $value
     *
     * @return $this
     */
    public function set($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    /**
     * Gets variable
     *
     * @param string $name
     * @param mixed $default
     *
     * @return $this
     */
    public function get($name, $default = null)
    {
        return isset($this->data[$name])
            ? $this->data[$name]
            : $default;
    }

    /**
     * Returns information if velue exist in registry
     *
     * @param string $name
     *
     * @return bool
     */
    public function has($name)
    {
        return isset($this->data[$name]);
    }
}
