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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_e27f006ce2d0566f42e8140c0c14863b extends Template
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
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 3
                yield "    <div id=\"cb-cart-block\" data-message=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_warning"] ?? null), "html_attr");
                yield "\" hidden></div>
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                // line 4
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 6
            yield "  ";
            if ((($tmp = ($context["error_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 9
            yield "  ";
            if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 12
            yield "  ";
            if ((($tmp = ($context["attention"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield "</div>
  ";
            }
            // line 15
            yield "  <div class=\"cb-bag\" data-units=\"";
            yield ($context["unit_count"] ?? null);
            yield "\">
    <h1>";
            // line 16
            yield ($context["heading_title"] ?? null);
            yield "<small>";
            if ((($tmp = ($context["weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ($context["weight"] ?? null);
                yield " · ";
            }
            yield ($context["item_count"] ?? null);
            yield " item";
            if ((($context["item_count"] ?? null) != 1)) {
                yield "s";
            }
            yield "</small></h1>
    <div class=\"cb-bag__grid\">
      <div class=\"cb-bag__main\">
        <div id=\"output-cart\" class=\"cb-bag__items\">
          <div class=\"cb-bag__items-head\">
            <label class=\"cb-check\"><input type=\"checkbox\" data-select-all checked> Select all items (";
            // line 21
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield ")</label>
            <button type=\"button\" class=\"cb-bag__remove-selected\" data-remove-selected>
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M4 7h16M9 7V5h6v2M8 7l1 13h6l1-13\"></path></svg>
              Remove selected
            </button>
          </div>
          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 28
                yield "            <article class=\"cb-bag__item\">
              <label class=\"cb-check\"><input type=\"checkbox\" class=\"cb-bag__check\" checked></label>
              <a class=\"cb-bag__thumb\" href=\"";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                yield "\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    yield "\">";
                }
                yield "</a>
              <div class=\"cb-bag__copy\">
                <a class=\"cb-bag__name\" href=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                yield "</a>
                <em>";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 33);
                yield "</em>
                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 35
                    yield "                  <em>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35);
                    yield "</em>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<em>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 37);
                    yield "</em>";
                }
                // line 38
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pack", [], "any", false, false, false, 38) > 1)) {
                    yield "<em class=\"cb-bag__pack\">Case pack of ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pack", [], "any", false, false, false, 38);
                    yield "</em>";
                }
                // line 39
                yield "                <form method=\"post\" data-oc-target=\"#shopping-cart\" data-step=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pack", [], "any", false, false, false, 39);
                yield "\">
                  <span class=\"cb-qty\">
                    <button type=\"button\" class=\"cb-qty__btn\" data-qty=\"-1\" aria-label=\"Decrease quantity\"";
                // line 41
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pack", [], "any", false, false, false, 41))) {
                    yield " disabled";
                }
                yield ">−</button>
                    <input type=\"text\" name=\"quantity\" value=\"";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                yield "\" inputmode=\"numeric\" class=\"form-control\" aria-label=\"Quantity\">
                    <button type=\"button\" class=\"cb-qty__btn\" data-qty=\"1\" aria-label=\"Increase quantity\">+</button>
                  </span>
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 45);
                yield "\">
                  <button type=\"submit\" formaction=\"";
                // line 46
                yield ($context["edit"] ?? null);
                yield "\" class=\"cb-bag__update\" hidden>";
                yield ($context["button_update"] ?? null);
                yield "</button>
                  <a href=\"";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 47);
                yield "\" class=\"btn-danger cb-bag__remove\">
                    <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M4 7h16M9 7V5h6v2M8 7l1 13h6l1-13\"></path></svg>
                    ";
                // line 49
                yield ($context["button_remove"] ?? null);
                yield "
                  </a>
                </form>
              </div>
              <div class=\"cb-bag__money\">
                <strong>";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 54);
                yield "</strong>
                <span>";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                yield "</span>
              </div>
            </article>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "        </div>
        ";
            // line 60
            if ((($tmp = ($context["suggestions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "          <section class=\"cb-also\">
            <div class=\"cb-also__head\">
              <h2>You may also like</h2>
              <a href=\"";
                // line 64
                yield ($context["shop"] ?? null);
                yield "\">View all →</a>
            </div>
            <div class=\"cb-grid\">
              ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["suggestions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    yield "                <a class=\"cb-card\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 68);
                    yield "\">
                  <span class=\"cb-badge\">";
                    // line 69
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "badge", [], "any", false, false, false, 69);
                    yield "</span>
                  <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"";
                    // line 70
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 70);
                    yield "\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
                  <img class=\"cb-card__img\" src=\"";
                    // line 71
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 71);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 71);
                    yield "\">
                  <div>
                    <div class=\"cb-meta\"><span>";
                    // line 73
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 73);
                    yield "</span><span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sku", [], "any", false, false, false, 73);
                    yield "</span></div>
                    <h3>";
                    // line 74
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 74);
                    yield "</h3>
                    <p class=\"cb-collection\">";
                    // line 75
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collection", [], "any", false, false, false, 75);
                    yield "</p>
                  </div>
                  <div>
                    <p class=\"cb-ship";
                    // line 78
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "wait", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " cb-ship--wait";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "ship", [], "any", false, false, false, 78);
                    yield "</p>
                    <hr>
                    <span class=\"cb-card__foot\"><span>";
                    // line 80
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "role_price", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "role_base", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "<s class=\"cb-card__was\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "role_base", [], "any", false, false, false, 80);
                            yield "</s>";
                        }
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "role_price", [], "any", false, false, false, 80);
                    } elseif ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "Pricing locked for this account";
                    } else {
                        yield "Sign in to view pricing";
                    }
                    yield "</span> <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
                  </div>
                </a>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                yield "            </div>
          </section>
        ";
            }
            // line 87
            yield "      </div>
      <aside class=\"cb-bag__summary\">
        <h2>Order summary</h2>
        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 91
                yield "          <div class=\"cb-bag__row";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-total";
                }
                yield "\"><span>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 91);
                yield "</span><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 91);
                yield "</b></div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "        ";
            if ((($tmp = ($context["modules"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "          <div id=\"accordion\" class=\"accordion cb-bag__extras\">
            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 96
                    yield "              ";
                    yield $context["module"];
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                yield "          </div>
        ";
            }
            // line 100
            yield "        <a class=\"cb-btn cb-btn--black\" href=\"";
            yield ($context["checkout"] ?? null);
            yield "\">";
            yield ($context["button_checkout"] ?? null);
            yield " →</a>
        <a class=\"cb-btn cb-btn--line\" href=\"";
            // line 101
            yield ($context["continue"] ?? null);
            yield "\">";
            yield ($context["button_shopping"] ?? null);
            yield "</a>
      </aside>
    </div>
    <ul class=\"cb-trust\">
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M3 7h11v8H3zM14 10h4l3 3v2h-7zM7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm10 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z\"></path></svg>
        <span><strong>Fast &amp; reliable shipping</strong><em>Worldwide delivery</em></span>
      </li>
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6z\"></path></svg>
        <span><strong>Secure payment</strong><em>100% secure checkout</em></span>
      </li>
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 21s-7-4.4-7-10a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 5.6-7 10-7 10z\"></path></svg>
        <span><strong>Sustainable crafts</strong><em>Ethically sourced</em></span>
      </li>
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M4 13a8 8 0 0 1 16 0M4 13v4a2 2 0 0 0 2 2h1v-6H4zm16 0v4a2 2 0 0 1-2 2h-1v-6h3z\"></path></svg>
        <span><strong>Dedicated support</strong><em>Here to help</em></span>
      </li>
    </ul>
  </div>
";
        } else {
            // line 124
            yield "  <div class=\"cb-bag\">
    <h1>";
            // line 125
            yield ($context["heading_title"] ?? null);
            yield "</h1>
    <p class=\"cb-bag__empty\">";
            // line 126
            yield ($context["text_no_results"] ?? null);
            yield "</p>
    <a class=\"cb-btn cb-btn--black\" href=\"";
            // line 127
            yield ($context["continue"] ?? null);
            yield "\">";
            yield ($context["button_continue"] ?? null);
            yield "</a>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  436 => 127,  432 => 126,  428 => 125,  425 => 124,  397 => 101,  390 => 100,  386 => 98,  377 => 96,  373 => 95,  370 => 94,  367 => 93,  344 => 91,  327 => 90,  322 => 87,  317 => 84,  296 => 80,  287 => 78,  281 => 75,  277 => 74,  271 => 73,  264 => 71,  260 => 70,  256 => 69,  251 => 68,  247 => 67,  241 => 64,  236 => 61,  234 => 60,  231 => 59,  221 => 55,  217 => 54,  209 => 49,  204 => 47,  198 => 46,  194 => 45,  188 => 42,  182 => 41,  176 => 39,  169 => 38,  162 => 37,  151 => 35,  147 => 34,  143 => 33,  137 => 32,  124 => 30,  120 => 28,  116 => 27,  107 => 21,  89 => 16,  84 => 15,  78 => 13,  75 => 12,  69 => 10,  66 => 9,  60 => 7,  57 => 6,  52 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div id=\"cb-cart-block\" data-message=\"{{ error_warning|e('html_attr') }}\" hidden></div>
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }}</div>
  {% endif %}
  <div class=\"cb-bag\" data-units=\"{{ unit_count }}\">
    <h1>{{ heading_title }}<small>{% if weight %}{{ weight }} · {% endif %}{{ item_count }} item{% if item_count != 1 %}s{% endif %}</small></h1>
    <div class=\"cb-bag__grid\">
      <div class=\"cb-bag__main\">
        <div id=\"output-cart\" class=\"cb-bag__items\">
          <div class=\"cb-bag__items-head\">
            <label class=\"cb-check\"><input type=\"checkbox\" data-select-all checked> Select all items ({{ products|length }})</label>
            <button type=\"button\" class=\"cb-bag__remove-selected\" data-remove-selected>
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M4 7h16M9 7V5h6v2M8 7l1 13h6l1-13\"></path></svg>
              Remove selected
            </button>
          </div>
          {% for product in products %}
            <article class=\"cb-bag__item\">
              <label class=\"cb-check\"><input type=\"checkbox\" class=\"cb-bag__check\" checked></label>
              <a class=\"cb-bag__thumb\" href=\"{{ product.href }}\">{% if product.thumb %}<img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">{% endif %}</a>
              <div class=\"cb-bag__copy\">
                <a class=\"cb-bag__name\" href=\"{{ product.href }}\">{{ product.name }}</a>
                <em>{{ product.model }}</em>
                {% for option in product.option %}
                  <em>{{ option.name }}: {{ option.value }}</em>
                {% endfor %}
                {% if product.subscription %}<em>{{ product.subscription }}</em>{% endif %}
                {% if product.pack > 1 %}<em class=\"cb-bag__pack\">Case pack of {{ product.pack }}</em>{% endif %}
                <form method=\"post\" data-oc-target=\"#shopping-cart\" data-step=\"{{ product.pack }}\">
                  <span class=\"cb-qty\">
                    <button type=\"button\" class=\"cb-qty__btn\" data-qty=\"-1\" aria-label=\"Decrease quantity\"{% if product.quantity <= product.pack %} disabled{% endif %}>−</button>
                    <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" inputmode=\"numeric\" class=\"form-control\" aria-label=\"Quantity\">
                    <button type=\"button\" class=\"cb-qty__btn\" data-qty=\"1\" aria-label=\"Increase quantity\">+</button>
                  </span>
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                  <button type=\"submit\" formaction=\"{{ edit }}\" class=\"cb-bag__update\" hidden>{{ button_update }}</button>
                  <a href=\"{{ product.remove }}\" class=\"btn-danger cb-bag__remove\">
                    <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M4 7h16M9 7V5h6v2M8 7l1 13h6l1-13\"></path></svg>
                    {{ button_remove }}
                  </a>
                </form>
              </div>
              <div class=\"cb-bag__money\">
                <strong>{{ product.total }}</strong>
                <span>{{ product.price }}</span>
              </div>
            </article>
          {% endfor %}
        </div>
        {% if suggestions %}
          <section class=\"cb-also\">
            <div class=\"cb-also__head\">
              <h2>You may also like</h2>
              <a href=\"{{ shop }}\">View all →</a>
            </div>
            <div class=\"cb-grid\">
              {% for item in suggestions %}
                <a class=\"cb-card\" href=\"{{ item.href }}\">
                  <span class=\"cb-badge\">{{ item.badge }}</span>
                  <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"{{ item.product_id }}\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
                  <img class=\"cb-card__img\" src=\"{{ item.image }}\" alt=\"{{ item.name }}\">
                  <div>
                    <div class=\"cb-meta\"><span>{{ item.category }}</span><span>{{ item.sku }}</span></div>
                    <h3>{{ item.name }}</h3>
                    <p class=\"cb-collection\">{{ item.collection }}</p>
                  </div>
                  <div>
                    <p class=\"cb-ship{% if item.wait %} cb-ship--wait{% endif %}\">{{ item.ship }}</p>
                    <hr>
                    <span class=\"cb-card__foot\"><span>{% if item.role_price %}{% if item.role_base %}<s class=\"cb-card__was\">{{ item.role_base }}</s>{% endif %}{{ item.role_price }}{% elseif logged %}Pricing locked for this account{% else %}Sign in to view pricing{% endif %}</span> <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
                  </div>
                </a>
              {% endfor %}
            </div>
          </section>
        {% endif %}
      </div>
      <aside class=\"cb-bag__summary\">
        <h2>Order summary</h2>
        {% for total in totals %}
          <div class=\"cb-bag__row{% if loop.last %} is-total{% endif %}\"><span>{{ total.title }}</span><b>{{ total.text }}</b></div>
        {% endfor %}
        {% if modules %}
          <div id=\"accordion\" class=\"accordion cb-bag__extras\">
            {% for module in modules %}
              {{ module }}
            {% endfor %}
          </div>
        {% endif %}
        <a class=\"cb-btn cb-btn--black\" href=\"{{ checkout }}\">{{ button_checkout }} →</a>
        <a class=\"cb-btn cb-btn--line\" href=\"{{ continue }}\">{{ button_shopping }}</a>
      </aside>
    </div>
    <ul class=\"cb-trust\">
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M3 7h11v8H3zM14 10h4l3 3v2h-7zM7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm10 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4z\"></path></svg>
        <span><strong>Fast &amp; reliable shipping</strong><em>Worldwide delivery</em></span>
      </li>
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6z\"></path></svg>
        <span><strong>Secure payment</strong><em>100% secure checkout</em></span>
      </li>
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 21s-7-4.4-7-10a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 5.6-7 10-7 10z\"></path></svg>
        <span><strong>Sustainable crafts</strong><em>Ethically sourced</em></span>
      </li>
      <li>
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M4 13a8 8 0 0 1 16 0M4 13v4a2 2 0 0 0 2 2h1v-6H4zm16 0v4a2 2 0 0 1-2 2h-1v-6h3z\"></path></svg>
        <span><strong>Dedicated support</strong><em>Here to help</em></span>
      </li>
    </ul>
  </div>
{% else %}
  <div class=\"cb-bag\">
    <h1>{{ heading_title }}</h1>
    <p class=\"cb-bag__empty\">{{ text_no_results }}</p>
    <a class=\"cb-btn cb-btn--black\" href=\"{{ continue }}\">{{ button_continue }}</a>
  </div>
{% endif %}
", "catalog/view/template/checkout/cart_list.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\checkout\\cart_list.twig");
    }
}
