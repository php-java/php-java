<?php
namespace PHPJava\Core\Traits;

trait OptionExtendable
{
    /**
     * @var array
     */
    private $options = [];

    public function getOptions($key = null)
    {
        if (isset($key)) {
            return $this->options[$key];
        }
        return $this->options;
    }
}
