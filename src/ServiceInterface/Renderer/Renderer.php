<?php

namespace ServiceInterface\Renderer;

/**
 * Interface Renderer
 * @package ServiceInterface\Renderer
 */
interface Renderer
{
    /**
     * @param string $template
     * @param array $data
     * @return mixed
     */
    public function render($template, $data = []);
}
