<?php namespace Dtkahl\TwigRenderableExtension;

trait RenderableTrait {
    protected $template = null;

    public function setTemplate(string $template) : void
    {
        $this->template = $template;
    }

    public function getTemplate() : string
    {
        return $this->template;
    }

    public function getRenderData() : array
    {
        return [
            "object" => $this,
        ];
    }

}