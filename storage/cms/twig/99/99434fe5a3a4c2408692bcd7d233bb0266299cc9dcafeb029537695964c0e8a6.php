<?php

/* C:\xampp\htdocs\apiajax/themes/demo/pages/weather.htm */
class __TwigTemplate_bf2eba6902e5b2285f78c70f383d85f95b6745f8a0a2172a5f78165343264534 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myWeather"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\apiajax/themes/demo/pages/weather.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'myWeather' %}", "C:\\xampp\\htdocs\\apiajax/themes/demo/pages/weather.htm", "");
    }
}
