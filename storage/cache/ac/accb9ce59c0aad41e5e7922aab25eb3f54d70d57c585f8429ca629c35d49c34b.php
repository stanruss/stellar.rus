<?php

/* __string_template__a7e0687fcfa23b1efdf9972825cd57536f4bdb8140cbf7a427b621e7024a09ea */
class __TwigTemplate_91c3c1bf3de66b2b607945b127aa43276f1e12dca0d41f589c6c391561fc2748 extends Twig_Template
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
        echo "<div id=\"cart\">
  <!--<a class=\"checkout\" href=\"";
        // line 2
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><button  class=\"btn btn-inverse btn-block btn-lg\"><i class=\"fa fa-share\"></i> <span>";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></button></a> -->
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 3
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"dropdown-toggle btn btn-sm btn-success float-right\"> <span id=\"cart-total\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></button>
  
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 6
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 7
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "        <tr>
          <td class=\"text-center\">";
                // line 11
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 12
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 13
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 14
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 17
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 18
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 19
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 20
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 24
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 26
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 28
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 29
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 38
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 39
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 40
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </table>
        <p class=\"text-right\"><a class=\"btn btn-sm btn-primary\" href=\"";
            // line 44
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a class=\"btn btn-sm btn-success\" href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 48
            echo "    <li>
      <p class=\"text-center\">";
            // line 49
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 52
        echo "  </ul>
  
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a7e0687fcfa23b1efdf9972825cd57536f4bdb8140cbf7a427b621e7024a09ea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 52,  197 => 49,  194 => 48,  181 => 44,  178 => 43,  169 => 40,  165 => 39,  162 => 38,  158 => 37,  151 => 32,  140 => 29,  136 => 28,  131 => 26,  127 => 24,  122 => 23,  111 => 20,  107 => 19,  103 => 18,  95 => 17,  90 => 16,  87 => 15,  78 => 14,  71 => 13,  65 => 12,  51 => 11,  48 => 10,  44 => 9,  40 => 7,  38 => 6,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart">*/
/*   <!--<a class="checkout" href="{{ checkout }}" title="{{ text_checkout }}"><button  class="btn btn-inverse btn-block btn-lg"><i class="fa fa-share"></i> <span>{{ text_checkout }}</span></button></a> -->*/
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="dropdown-toggle btn btn-sm btn-success float-right"> <span id="cart-total">{{ text_items }}</span></button>*/
/*   */
/*   <ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table table-striped">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-bordered">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-right"><a class="btn btn-sm btn-primary" href="{{ cart }}"><strong><i class="fa fa-shopping-cart"></i> {{ text_cart }}</strong></a>&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-success" href="{{ checkout }}"><strong><i class="fa fa-share"></i> {{ text_checkout }}</strong></a></p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/*   */
/* </div>*/
/* */
