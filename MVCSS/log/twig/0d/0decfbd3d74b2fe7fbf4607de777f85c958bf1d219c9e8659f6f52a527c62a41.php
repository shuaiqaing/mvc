<?php

/* layaot.html */
class __TwigTemplate_2f42f38a0a4a7fa2ba5beb72e3284de7f24eb34308ea5da0b332b37f62f21491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
\t<header>header</header>
\t<content>
\t\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "\t</content>
\t<footer>footer</footer>
</body>
</html>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "layaot.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  33 => 13,  31 => 10,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
\t<header>header</header>
\t<content>
\t\t{% block content %}
\t\t
\t\t{% endblock%}
\t</content>
\t<footer>footer</footer>
</body>
</html>";
    }
}
