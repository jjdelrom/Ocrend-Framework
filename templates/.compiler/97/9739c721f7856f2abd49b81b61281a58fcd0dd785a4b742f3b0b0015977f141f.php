<?php

/* overall/header.twig */
class __TwigTemplate_57179fadda0b6324f6fbe23ee0638dda8f6cf3d1663e4290d5c5096b188050cc extends Twig_Template
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
<html lang=\"es\">
<head>
  <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("URL"), "html", null, true);
        echo "\" />

  <meta charset=\"utf-8\" />
  <meta name=\"application-name\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("APP"), "html", null, true);
        echo "\" />
  <meta name=\"author\" content=\"www.ocrend.com\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"views/app/css/app.css\" />
  <link rel=\"stylesheet\" href=\"views/app/css/font-awesome.min.css\" />
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
     <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
   <![endif]-->

  <title>";
        // line 20
        echo twig_escape_filter($this->env, twig_constant("APP"), "html", null, true);
        echo "</title>
</head>
";
    }

    public function getTemplateName()
    {
        return "overall/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/*   <base href="{{ constant('URL') }}" />*/
/* */
/*   <meta charset="utf-8" />*/
/*   <meta name="application-name" content="{{ constant('APP') }}" />*/
/*   <meta name="author" content="www.ocrend.com" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*   <link rel="stylesheet" href="views/app/css/app.css" />*/
/*   <link rel="stylesheet" href="views/app/css/font-awesome.min.css" />*/
/*   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*    <!--[if lt IE 9]>*/
/*      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*    <![endif]-->*/
/* */
/*   <title>{{ constant('APP') }}</title>*/
/* </head>*/
/* */
