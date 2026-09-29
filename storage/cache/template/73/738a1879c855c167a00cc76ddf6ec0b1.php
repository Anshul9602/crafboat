<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_902ff1163655fba45f871660b1d94251 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<button type=\"button\" class=\"tck-icon-btn\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#cart-drawer\" aria-label=\"Cart\">
  <i class=\"fa-solid fa-bag-shopping\"></i>
  ";
        // line 3
        if ((($tmp = ($context["count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"tck-count\">";
            yield ($context["count"] ?? null);
            yield "</span>";
        }
        // line 4
        yield "</button>
<div class=\"offcanvas offcanvas-end tck-cart-panel\" tabindex=\"-1\" id=\"cart-drawer\">
  <div class=\"offcanvas-header\">
    <div>
      <h5 class=\"offcanvas-title\">Your cart</h5>
      <p class=\"tck-cart-count mb-0\">";
        // line 9
        yield ($context["count"] ?? null);
        yield " item";
        if ((($context["count"] ?? null) != 1)) {
            yield "s";
        }
        yield "</p>
    </div>
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"></button>
  </div>
  <div class=\"offcanvas-body\">
    ";
        // line 14
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                yield "        <div class=\"tck-cart-item\">
          <a class=\"tck-cart-item__img\" href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                yield "\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    yield "\"/>";
                }
                yield "</a>
          <div class=\"tck-cart-item__meta\">
            <div class=\"tck-cart-item__top\">
              <a href=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                yield "</a>
              <span>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 21);
                yield "</span>
            </div>
            <div class=\"tck-cart-item__price\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                yield " each</div>
            <div class=\"tck-cart-item__row\">
              <form class=\"tck-qty tck-qty--sm\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                // line 25
                yield ($context["list"] ?? null);
                yield "\" data-oc-target=\"#cart\">
                <input type=\"hidden\" name=\"key\" value=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 26);
                yield "\">
                <button type=\"submit\" formaction=\"";
                // line 27
                yield ($context["edit"] ?? null);
                yield "\" data-qty-set=\"";
                yield (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 27) - 1);
                yield "\" aria-label=\"Decrease\">−</button>
                <input type=\"text\" name=\"quantity\" value=\"";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
                yield "\" readonly>
                <button type=\"submit\" formaction=\"";
                // line 29
                yield ($context["edit"] ?? null);
                yield "\" data-qty-set=\"";
                yield (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29) + 1);
                yield "\" aria-label=\"Increase\">+</button>
              </form>
              <form action=\"";
                // line 31
                yield ($context["remove"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["list"] ?? null);
                yield "\" data-oc-target=\"#cart\">
                <input type=\"hidden\" name=\"key\" value=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 32);
                yield "\">
                <button type=\"submit\" class=\"tck-cart-remove\">Remove</button>
              </form>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    ";
        } else {
            // line 40
            yield "      <div class=\"tck-cart-empty\">
        <p>Your cart is empty</p>
        <a href=\"";
            // line 42
            yield ($context["continue"] ?? null);
            yield "\" class=\"tck-cart-checkout\" data-bs-dismiss=\"offcanvas\">Continue shopping</a>
      </div>
    ";
        }
        // line 45
        yield "  </div>
  ";
        // line 46
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "    <div class=\"tck-cart-footer\">
      <table class=\"tck-cart-totals w-100\">
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 50
                yield "          <tr>
            <td>";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 51);
                yield "</td>
            <td class=\"text-end\"><strong>";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 52);
                yield "</strong></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "      </table>
      <p class=\"tck-product__tax mb-3\">Inclusive of all taxes</p>
      <div class=\"tck-cart-actions\">
        <a href=\"";
            // line 58
            yield ($context["cart"] ?? null);
            yield "\" class=\"tck-cart-view\">View cart</a>
        <a href=\"";
            // line 59
            yield ($context["checkout"] ?? null);
            yield "\" class=\"tck-cart-checkout\">Checkout</a>
      </div>
    </div>
  ";
        }
        // line 63
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/cart.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  213 => 63,  206 => 59,  202 => 58,  197 => 55,  188 => 52,  184 => 51,  181 => 50,  177 => 49,  173 => 47,  171 => 46,  168 => 45,  162 => 42,  158 => 40,  155 => 39,  142 => 32,  136 => 31,  129 => 29,  125 => 28,  119 => 27,  115 => 26,  111 => 25,  106 => 23,  101 => 21,  95 => 20,  81 => 17,  78 => 16,  73 => 15,  71 => 14,  59 => 9,  52 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<button type=\"button\" class=\"tck-icon-btn\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#cart-drawer\" aria-label=\"Cart\">
  <i class=\"fa-solid fa-bag-shopping\"></i>
  {% if count %}<span class=\"tck-count\">{{ count }}</span>{% endif %}
</button>
<div class=\"offcanvas offcanvas-end tck-cart-panel\" tabindex=\"-1\" id=\"cart-drawer\">
  <div class=\"offcanvas-header\">
    <div>
      <h5 class=\"offcanvas-title\">Your cart</h5>
      <p class=\"tck-cart-count mb-0\">{{ count }} item{% if count != 1 %}s{% endif %}</p>
    </div>
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"></button>
  </div>
  <div class=\"offcanvas-body\">
    {% if products %}
      {% for product in products %}
        <div class=\"tck-cart-item\">
          <a class=\"tck-cart-item__img\" href=\"{{ product.href }}\">{% if product.thumb %}<img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\"/>{% endif %}</a>
          <div class=\"tck-cart-item__meta\">
            <div class=\"tck-cart-item__top\">
              <a href=\"{{ product.href }}\">{{ product.name }}</a>
              <span>{{ product.total }}</span>
            </div>
            <div class=\"tck-cart-item__price\">{{ product.price }} each</div>
            <div class=\"tck-cart-item__row\">
              <form class=\"tck-qty tck-qty--sm\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ list }}\" data-oc-target=\"#cart\">
                <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                <button type=\"submit\" formaction=\"{{ edit }}\" data-qty-set=\"{{ product.quantity - 1 }}\" aria-label=\"Decrease\">−</button>
                <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" readonly>
                <button type=\"submit\" formaction=\"{{ edit }}\" data-qty-set=\"{{ product.quantity + 1 }}\" aria-label=\"Increase\">+</button>
              </form>
              <form action=\"{{ remove }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ list }}\" data-oc-target=\"#cart\">
                <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                <button type=\"submit\" class=\"tck-cart-remove\">Remove</button>
              </form>
            </div>
          </div>
        </div>
      {% endfor %}
    {% else %}
      <div class=\"tck-cart-empty\">
        <p>Your cart is empty</p>
        <a href=\"{{ continue }}\" class=\"tck-cart-checkout\" data-bs-dismiss=\"offcanvas\">Continue shopping</a>
      </div>
    {% endif %}
  </div>
  {% if products %}
    <div class=\"tck-cart-footer\">
      <table class=\"tck-cart-totals w-100\">
        {% for total in totals %}
          <tr>
            <td>{{ total.title }}</td>
            <td class=\"text-end\"><strong>{{ total.text }}</strong></td>
          </tr>
        {% endfor %}
      </table>
      <p class=\"tck-product__tax mb-3\">Inclusive of all taxes</p>
      <div class=\"tck-cart-actions\">
        <a href=\"{{ cart }}\" class=\"tck-cart-view\">View cart</a>
        <a href=\"{{ checkout }}\" class=\"tck-cart-checkout\">Checkout</a>
      </div>
    </div>
  {% endif %}
</div>
", "catalog/view/template/common/cart.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\cart.twig");
    }
}
