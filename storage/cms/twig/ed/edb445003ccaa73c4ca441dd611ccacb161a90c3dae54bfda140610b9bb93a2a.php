<?php

/* C:\xampp\htdocs\apiajax/themes/demo/partials/weather_table.htm */
class __TwigTemplate_37b0375303ea0973042611e68b122e2c5d150a1f61da82cca4f609b9b3320ef4 extends Twig_Template
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
        echo "<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        font-size: medium;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
";
        // line 19
        if (($context["city"] ?? null)) {
            // line 20
            echo "    <h1 class=\"text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "name", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "sys", array()), "country", array()), "html", null, true);
            echo "</h1>
    <table>
        <tr>
            <td>Temperature: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "main", array()), "temp", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td>humidity: ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "main", array()), "humidity", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td>temp_min: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "main", array()), "temp_min", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td>temp_max: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "main", array()), "temp_max", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td>wind: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "wind", array()), "speed", array()), "html", null, true);
            echo " km/h</td>
        </tr>
        <tr>
            <td>
                longitude: <strong>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "coord", array()), "lon", array()), "html", null, true);
            echo "</strong>
                latitude: <strong> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "coord", array()), "lat", array()), "html", null, true);
            echo " </strong>
            </td>
        </tr>
        <tr>
            <td>
               Weather is <strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "weather", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "main", array()), "html", null, true);
            echo "</strong>
                The sky is <strong>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "weather", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "description", array()), "html", null, true);
            echo "</strong>
            </td>
        </tr>
        <tr>
            <td>visibility: ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "visibility", array()), "html", null, true);
            echo " m.</td>
        </tr>
    </table>


";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\apiajax/themes/demo/partials/weather_table.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  101 => 46,  97 => 45,  89 => 40,  85 => 39,  78 => 35,  72 => 32,  66 => 29,  60 => 26,  54 => 23,  45 => 20,  43 => 19,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        font-size: medium;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
{% if city %}
    <h1 class=\"text-center\">{{ city.name }}, {{ city.sys.country }}</h1>
    <table>
        <tr>
            <td>Temperature: {{ city.main.temp }}</td>
        </tr>
        <tr>
            <td>humidity: {{ city.main.humidity }}</td>
        </tr>
        <tr>
            <td>temp_min: {{ city.main.temp_min }}</td>
        </tr>
        <tr>
            <td>temp_max: {{ city.main.temp_max }}</td>
        </tr>
        <tr>
            <td>wind: {{ city.wind.speed }} km/h</td>
        </tr>
        <tr>
            <td>
                longitude: <strong>{{ city.coord.lon }}</strong>
                latitude: <strong> {{ city.coord.lat }} </strong>
            </td>
        </tr>
        <tr>
            <td>
               Weather is <strong>{{ city.weather[0].main }}</strong>
                The sky is <strong>{{ city.weather[0].description }}</strong>
            </td>
        </tr>
        <tr>
            <td>visibility: {{ city.visibility }} m.</td>
        </tr>
    </table>


{% endif %}", "C:\\xampp\\htdocs\\apiajax/themes/demo/partials/weather_table.htm", "");
    }
}
