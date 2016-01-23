<?php

/* partials/base.html.twig */
class __TwigTemplate_86932a1888d91d2dacd298d53a7dcfb25382021d5a93c542674f45f3ad98b0c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "    </head>
    <body>

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"";
        // line 32
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">";
        // line 35
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</span>
                    </div>
                     ";
        // line 37
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 37)->display($context);
        // line 38
        echo "                </header>
            </div>
        </div>

        ";
        // line 42
        if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()) != "App")) {
            // line 43
            echo "            <div class=\"intro\">
                <div class=\"container\">
                    <div class=\"units-row\">
                        <div class=\"unit-10\">
                            <img class=\"img-intro\" src=\"";
            // line 47
            echo $this->env->getExtension('GravTwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "intro_avatar", array())));
            echo "\" alt=\"\">
                        </div>
                        <div class=\"unit-90\">
                            <p class=\"p-intro\">";
            // line 50
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "intro", array());
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 56
            $this->displayBlock('body', $context, $blocks);
            // line 63
            echo "        ";
        } else {
            // line 64
            echo "            <iframe src=\"https://young-temple-4348.herokuapp.com/\"></iframe>
        ";
        }
        // line 66
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp authortitle\">
                            <a href=\"";
        // line 72
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author1", array()), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author1", array()), "title", array());
        echo "</a>
                        </p>
                        <p class=\"text-centered foot-cp authorname\">
                        <a href=\"";
        // line 75
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author1", array()), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author1", array()), "name", array());
        echo "</a>
                    </p>
                    </div>
                    ";
        // line 85
        echo "                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp authortitle\">
                        <a href=\"";
        // line 87
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author2", array()), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author2", array()), "title", array());
        echo "</a>
                    </p>
                    <p class=\"text-centered foot-cp authorname\">
                        <a href=\"";
        // line 90
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author2", array()), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author2", array()), "name", array());
        echo "</a>
                    </p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 6)->display($context);
        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

        ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        ";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 12
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/kube.min.js"), "method");
        // line 13
        echo "        ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/kube.min.css"), "method");
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 18
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 19
        echo "        ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "                <div class=\"content\">
                    <div class=\"container\">
                        ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                    </div>
                </div>
            ";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 59,  225 => 60,  223 => 59,  219 => 57,  216 => 56,  212 => 19,  209 => 18,  206 => 17,  203 => 16,  200 => 15,  196 => 13,  193 => 12,  190 => 11,  187 => 10,  177 => 20,  175 => 15,  170 => 14,  168 => 10,  163 => 8,  160 => 7,  158 => 6,  150 => 5,  147 => 4,  144 => 3,  128 => 90,  120 => 87,  116 => 85,  108 => 75,  100 => 72,  92 => 66,  88 => 64,  85 => 63,  83 => 56,  74 => 50,  68 => 47,  62 => 43,  60 => 42,  54 => 38,  52 => 37,  47 => 35,  39 => 32,  30 => 25,  28 => 3,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://img/favicon.png') }}" />*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://js/kube.min.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://css/kube.min.css') %}*/
/*             {% do assets.addCss('theme://css/font-awesome.min.css') %}*/
/*             {% do assets.addCss('theme://css/custom.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>*/
/*         <link href='https://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>*/
/*         {% endblock head%}*/
/*     </head>*/
/*     <body>*/
/* */
/*         <div class="main-nav">*/
/*             <div class="container">*/
/*                 <header class="group top-nav">*/
/*                     <nav class="navbar logo-w navbar-left" >*/
/*                         <a class="logo" href="{{ base_url_absolute }}">{{ site.title }}</a>*/
/*                     </nav>*/
/*                     <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">*/
/*                         <span class="logo">{{ site.title }}</span>*/
/*                     </div>*/
/*                      {% include 'partials/navigation.html.twig' %}*/
/*                 </header>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if header.title != 'App' %}*/
/*             <div class="intro">*/
/*                 <div class="container">*/
/*                     <div class="units-row">*/
/*                         <div class="unit-10">*/
/*                             <img class="img-intro" src="{{ url('theme://img/' ~ site.intro_avatar ) }}" alt="">*/
/*                         </div>*/
/*                         <div class="unit-90">*/
/*                             <p class="p-intro">{{ site.intro }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% block body %}*/
/*                 <div class="content">*/
/*                     <div class="container">*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         {% else %}*/
/*             <iframe src="https://young-temple-4348.herokuapp.com/"></iframe>*/
/*         {% endif %}*/
/* */
/*         <footer>*/
/*             <div class="container">*/
/*                 <div class="units-row">*/
/*                     <div class="unit-50">*/
/*                         <p class="text-centered foot-cp authortitle">*/
/*                             <a href="{{ site.author1.url }}">{{ site.author1.title }}</a>*/
/*                         </p>*/
/*                         <p class="text-centered foot-cp authorname">*/
/*                         <a href="{{ site.author1.url }}">{{ site.author1.name }}</a>*/
/*                     </p>*/
/*                     </div>*/
/*                     {#  <div class="unit-50">*/
/*                         <ul class="social list-flat">*/
/*                         {% for item in site.social %}*/
/*                             <li><a href="{{ item.link }}"><i class="fa fa-{{ item.icon }}"></i></a></li>*/
/*                         {% endfor %}*/
/*                         </ul>*/
/*                     </div> #}*/
/*                     <div class="unit-50">*/
/*                         <p class="text-centered foot-cp authortitle">*/
/*                         <a href="{{ site.author2.url }}">{{ site.author2.title }}</a>*/
/*                     </p>*/
/*                     <p class="text-centered foot-cp authorname">*/
/*                         <a href="{{ site.author2.url }}">{{ site.author2.name }}</a>*/
/*                     </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/* */
/*     </body>*/
/* </html>*/
/* */
