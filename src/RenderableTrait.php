<?php namespace Dtkahl\TwigRenderableExtension;

trait RenderableTrait {
    protected $template = null;

    public function getTemplate()
    {
        return $this->template;
    }

    public function getRenderData(array $data) : array
    {
        return array_merge($data, [
            "object" => $this,
        ]);
    }

}