<?php

/* __string_template__2c14d9bd5fa1e99f141a0e320c065f227912ee50065a9f8a678ba49b55fba746 */
class __TwigTemplate_2cbb17645d87de0025963bc34a721755dcc0cfceed6eca7cdc08d88fe5292672 extends Twig_Template
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
        echo "<section class=\"services scrollspy\" id=\"Catalog\">
  <div class=\"container\">
\t\t<h2 class=\"animated fadeIn services-h2\">Каталог</h2>
\t\t<hr class=\"animated zoomIn services-hr\">
\t\t<p class=\"animated fadeIn lead center services-p\">Здесь представлены самые лучшие модели 2017 - 2018 годов.</p>
<div class=\"row\">
 ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 10
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive img-thumbnail\" /></a></div>
      <div class=\"caption justify-content-around\">
        <h4><a href=\"";
            // line 12
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
       <!-- <p>";
            // line 13
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p> -->
        ";
            // line 14
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 15
                echo "        <div class=\"rating\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 18
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 20
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 22
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </div>
        ";
            }
            // line 25
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 26
                echo "        <p class=\"price\">
          ";
                // line 27
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 28
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 30
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 32
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 33
                    echo "         
          ";
                }
                // line 35
                echo "        </p>
        ";
            }
            // line 37
            echo "      </div>
      <div class=\"button-group\">
        <button class=\"center\" type=\"button\" onclick=\"cart.add('";
            // line 39
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"> <span>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
       
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "__string_template__2c14d9bd5fa1e99f141a0e320c065f227912ee50065a9f8a678ba49b55fba746";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  123 => 39,  119 => 37,  115 => 35,  111 => 33,  108 => 32,  100 => 30,  94 => 28,  92 => 27,  89 => 26,  86 => 25,  82 => 23,  76 => 22,  72 => 20,  68 => 18,  65 => 17,  61 => 16,  58 => 15,  56 => 14,  52 => 13,  46 => 12,  35 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <section class="services scrollspy" id="Catalog">*/
/*   <div class="container">*/
/* 		<h2 class="animated fadeIn services-h2">Каталог</h2>*/
/* 		<hr class="animated zoomIn services-hr">*/
/* 		<p class="animated fadeIn lead center services-p">Здесь представлены самые лучшие модели 2017 - 2018 годов.</p>*/
/* <div class="row">*/
/*  {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-thumbnail" /></a></div>*/
/*       <div class="caption justify-content-around">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*        <!-- <p>{{ product.description }}</p> -->*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*          */
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-group">*/
/*         <button class="center" type="button" onclick="cart.add('{{ product.product_id }}');"> <span>{{ button_cart }}</span></button>*/
/*        */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/*     </div>*/
/* </section>*/
