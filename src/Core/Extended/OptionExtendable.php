<?php
declare(strict_types=1);
namespace PHPJava\Core\Extended;

trait OptionExtendable
{
    /**
     * @var array
     */
    private $options = [];

    public function getOptions($key = null)
    {
        if (isset($this->options[$key])) {
            return $this->options[$key];
        }
        return $this->options;
    }
}
