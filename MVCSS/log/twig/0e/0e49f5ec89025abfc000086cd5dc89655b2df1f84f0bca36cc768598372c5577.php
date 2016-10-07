<?php

/* add.html */
class __TwigTemplate_c42825a183b633d23eec5ecd0bee6fe4d87c61d9767eac84cc0f5bf4ab7868fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
\t<a href=\"/index/lists\">列表</a>
\t<form action=\"/index/add_1\" method=\"post\">
\t\t<input type=\"text\" name=\"name\">
\t\t<input type=\"submit\" value=\"提交\">
\t</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
\t<a href=\"/index/lists\">列表</a>
\t<form action=\"/index/add_1\" method=\"post\">
\t\t<input type=\"text\" name=\"name\">
\t\t<input type=\"submit\" value=\"提交\">
\t</form>
</body>
</html>";
    }
}
