<?php

/* __string_template__c41c7b9d1069e0ef47a0d19604bd129449b15291cfd1da94cc1124057ea1c93f */
class __TwigTemplate_41698381f97c7555ee9b334781de7bbf360912d145349cf04a5cbdaa43c33f59 extends Twig_Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
  <!-- Chrome, Firefox OS and Opera -->
\t<meta name=\"theme-color\" content=\"#000\">
\t<!-- Windows Phone -->
\t<meta name=\"msapplication-navbutton-color\" content=\"#000\">
\t<!-- iOS Safari -->
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#000\">
";
        }
        // line 23
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 24
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 26
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\">

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/default/assets/stylesheet/animate.css\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/default/assets/stylesheet/stylesheet.min.css\" rel=\"stylesheet\">
  <script type=\"text/javascript\" src=\"catalog/view/javascript/smoothscroll/smoothscroll.min.js\"></script>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 37
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 40
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "<script src=\"catalog/view/theme/default/assets/js/libs.min.js\" type=\"text/javascript\"></script>
   
   
 <!-- <script src=\"catalog/view/javascript/plugins.js\"></script> -->
   
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 51
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</head>
<body id=\"home\" data-spy=\"scroll\" data-target=\"#navbar-example\">
  <div class=\"wrapper\">
  <div class=\"main-top px-3 d-flex flex-column flex-xl-row   justify-content-between align-items-center\">
  <a class=\"navbar-brand flex-sm-wrap\" href=\"/\">Интернет-магазин фотоловушек \"ФИЛИН\" Российского производства</a>
     <div class=\"main-cart\">
       <div class=\"info-block\">
        <div class=\"info-cart d-flex flex-row align-items-center justify-content-center\">
          <span class=\"checkout-cart\">В вашей</span> &nbsp;<a class=\"checkout-cart\" href=\"/index.php?route=checkout/cart\"><strong>КОРЗИНЕ</strong></a>&nbsp;&nbsp;  ";
        // line 61
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo " 
        </div><br>
       
       <img class=\"cart-img\" src=\"image/cart-img.jpg\">
       <a href=\"index.php?route=checkout/cart\" class=\"btn btn-sm btn-primary link-left\"><strong><i class=\"fa fa-shopping-cart\"></i> Перейти в корзину</strong></a>
       <a href=\"index.php?route=checkout/checkout\" class=\"btn btn-sm btn-success link-right\"><strong><i class=\"fa fa-share\"></i> Оформить заказ</strong></a>
     </div>
       </div>
  </div>

  
 
      <!-- <a href=\"";
        // line 73
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-sm\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a> -->
  ";
    }

    public function getTemplateName()
    {
        return "__string_template__c41c7b9d1069e0ef47a0d19604bd129449b15291cfd1da94cc1124057ea1c93f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 73,  163 => 61,  153 => 53,  145 => 51,  141 => 50,  130 => 48,  126 => 47,  119 => 42,  110 => 40,  106 => 39,  93 => 37,  89 => 36,  77 => 26,  71 => 24,  69 => 23,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/*   <!-- Chrome, Firefox OS and Opera -->*/
/* 	<meta name="theme-color" content="#000">*/
/* 	<!-- Windows Phone -->*/
/* 	<meta name="msapplication-navbutton-color" content="#000">*/
/* 	<!-- iOS Safari -->*/
/* 	<meta name="apple-mobile-web-app-status-bar-style" content="#000">*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/*   <link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/bootstrap.min.css">*/
/* */
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>*/
/* <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/*   <link href="catalog/view/theme/default/assets/stylesheet/animate.css" rel="stylesheet">*/
/*   <link href="catalog/view/theme/default/assets/stylesheet/stylesheet.min.css" rel="stylesheet">*/
/*   <script type="text/javascript" src="catalog/view/javascript/smoothscroll/smoothscroll.min.js"></script>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/default/assets/js/libs.min.js" type="text/javascript"></script>*/
/*    */
/*    */
/*  <!-- <script src="catalog/view/javascript/plugins.js"></script> -->*/
/*    */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body id="home" data-spy="scroll" data-target="#navbar-example">*/
/*   <div class="wrapper">*/
/*   <div class="main-top px-3 d-flex flex-column flex-xl-row   justify-content-between align-items-center">*/
/*   <a class="navbar-brand flex-sm-wrap" href="/">Интернет-магазин фотоловушек "ФИЛИН" Российского производства</a>*/
/*      <div class="main-cart">*/
/*        <div class="info-block">*/
/*         <div class="info-cart d-flex flex-row align-items-center justify-content-center">*/
/*           <span class="checkout-cart">В вашей</span> &nbsp;<a class="checkout-cart" href="/index.php?route=checkout/cart"><strong>КОРЗИНЕ</strong></a>&nbsp;&nbsp;  {{ cart }} */
/*         </div><br>*/
/*        */
/*        <img class="cart-img" src="image/cart-img.jpg">*/
/*        <a href="index.php?route=checkout/cart" class="btn btn-sm btn-primary link-left"><strong><i class="fa fa-shopping-cart"></i> Перейти в корзину</strong></a>*/
/*        <a href="index.php?route=checkout/checkout" class="btn btn-sm btn-success link-right"><strong><i class="fa fa-share"></i> Оформить заказ</strong></a>*/
/*      </div>*/
/*        </div>*/
/*   </div>*/
/* */
/*   */
/*  */
/*       <!-- <a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-sm">{{ text_checkout }}</span></a> -->*/
/*   */
