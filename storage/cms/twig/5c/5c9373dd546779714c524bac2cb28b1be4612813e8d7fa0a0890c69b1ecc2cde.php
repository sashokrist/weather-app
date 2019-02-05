<?php

/* C:\xampp\htdocs\apiajax/plugins/sasho/weather/components/weather/default.htm */
class __TwigTemplate_3cf87ede36c3e018eee1d13edb394aaaa367a29277e07b042d3ab77953c1566b extends Twig_Template
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
        echo "
<h1 class=\"text-center\"><b>WEATHER APP</b></h1>
<form
      data-request-validate
      data-request-update=\"weather_table: '#city'\"
      data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onWeather\">
    <div class=\"form-group\">
    <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"enter city\" value=\"Sofia\">
    </div>
    <button data-attach-loading type=\"submit\" class=\"btn btn-primary form-control\">Get Weather</button>
</form>
<div id=\"city\">";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("weather_table"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\apiajax/plugins/sasho/weather/components/weather/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h1 class=\"text-center\"><b>WEATHER APP</b></h1>
<form
      data-request-validate
      data-request-update=\"weather_table: '#city'\"
      data-request=\"{{ __SELF__ }}::onWeather\">
    <div class=\"form-group\">
    <input type=\"text\" name=\"city\" class=\"form-control\" placeholder=\"enter city\" value=\"Sofia\">
    </div>
    <button data-attach-loading type=\"submit\" class=\"btn btn-primary form-control\">Get Weather</button>
</form>
<div id=\"city\">{% partial 'weather_table' %}</div>

", "C:\\xampp\\htdocs\\apiajax/plugins/sasho/weather/components/weather/default.htm", "");
    }
}
