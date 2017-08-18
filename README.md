# Twig Renderable Extension

This package adds a custom render-tag to [Twig](https://twig.symfony.com). This tag automatically renders an instance of a class that implements the interface TwigRenderableInterface.
This is done by including the twig-template which is returned from `$instance->getTemplate()` with the data which got returned from `$instance->getRenderData()`.

```twig
{% render instance %}
```

## Dependencies

* `PHP  >=7.0.0`
* `twig\twig ^2.0`


## Installation

Install with [Composer](http://getcomposer.org):

```
composer require dtkahl/twig-renderable-extension
```

Register the extension to the Twig instance:

```php
use \Dtkahl\FormBuilder|TwigRenderableExtension;
$twig->addExtension(new TwigRenderableExtension);
```
