<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/layout/templates/header.html.twig */
class __TwigTemplate_dd8da7c4a34e8609a15c696d334d62f57bcb9bd6439208f52c30b3b6159f6fa5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "for" => 46);
        $filters = array("escape" => 47);
        $functions = array("simplify_menu" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
                ['simplify_menu']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), ["main"]);
        // line 2
        echo "
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<style>
.social-part .fa{
    padding-right:20px;
}
ul li a{
    margin-right: 20px;
}

</style>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function () {
\$('.navbar-light .dmenu').hover(function () {
        \$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        \$(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>

<html lang=\"en\">
<head>
  <title>Navbar</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i\" rel=\"stylesheet\">
</head>
  <body>

    <nav class=\"navbar navbar-expand-sm   navbar-light bg-light\" >
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo03\" aria-controls=\"navbarTogglerDemo03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo03\">
          <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
             ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 47
            echo "      <img src=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 47, $this->source), "html", null, true);
            echo " alt=\"logo\" width=\"50\" height=\"50\">
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      &nbsp; &nbsp; &nbsp;
              ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "menu_tree", [], "any", false, false, true, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 51
            echo "              
         <li class=\"nav-item\">
              <a class=\"nav-link\" style=\"color: #21D192\" href=\"";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menu_item"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menu_item"], "text", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo " </a>
            </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    
            <li class=\"nav-item dropdown dmenu\">
            <a class=\"nav-link dropdown-toggle\" style=\"color: #21D192\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
              Our Service
            </a>
            <div class=\"dropdown-menu sm-menu\">
              <a class=\"dropdown-item\" href=\"#\">service2</a>
              <a class=\"dropdown-item\" href=\"#\">service 2</a>
              <a class=\"dropdown-item\" href=\"#\">service 3</a>
            </div>
          </li>
      
           <!-- <li class=\"nav-item dropdown dmenu\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
              Dropdown link
            </a>
            <div class=\"dropdown-menu sm-menu\">
              <a class=\"dropdown-item\" href=\"#\">Link 1</a>
              <a class=\"dropdown-item\" href=\"#\">Link 2</a>
              <a class=\"dropdown-item\" href=\"#\">Link 3</a>
              <a class=\"dropdown-item\" href=\"#\">Link 4</a>
              <a class=\"dropdown-item\" href=\"#\">Link 5</a>
              <a class=\"dropdown-item\" href=\"#\">Link 6</a>
            </div>
          </li> -->
          </ul>
          <div class=\"social-part\">
            <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
          </div>
        </div>
      </nav>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/layout/templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  134 => 53,  130 => 51,  126 => 50,  123 => 49,  114 => 47,  110 => 46,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/layout/templates/header.html.twig", "C:\\xampp\\htdocs\\ex3\\web\\modules\\custom\\layout\\templates\\header.html.twig");
    }
}
