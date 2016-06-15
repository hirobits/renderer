<?php

namespace Driver\Renderer;

use ServiceInterface\Renderer\Renderer;

/**
 * Class Blade
 * @package Driver\Renderer
 */
class Blade implements Renderer
{
    /**
     * @var \Philo\Blade\Blade
     */
    private $blade;

    /**
     * Blade constructor.
     * @param \Philo\Blade\Blade $blade
     */
    public function __construct(\Philo\Blade\Blade $blade)
    {
        $this->blade = $blade;
    }

    /**
     * @param string $template
     * @param array $data
     * @return mixed
     */
    public function render($template, $data = [])
    {
        return $this->blade->view()->make($template, $data)->render();
    }
}
