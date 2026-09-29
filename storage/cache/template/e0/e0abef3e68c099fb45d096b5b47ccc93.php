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
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 5
            yield "  ";
            if ((($tmp = ($context["error_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 8
            yield "  ";
            if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 11
            yield "  ";
            if ((($tmp = ($context["attention"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 14
            yield "  <div class=\"cb-bag\">
    <h1>";
            // line 15
            yield ($context["heading_title"] ?? null);
            if ((($tmp = ($context["weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <small>";
                yield ($context["weight"] ?? null);
                yield "</small>";
            }
            yield "</h1>
    <div class=\"cb-bag__grid\">
      <div id=\"output-cart\" class=\"cb-bag__items\">
        <div class=\"cb-bag__items-head\"><span>In your cart</span><span>";
            // line 18
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield "</span></div>
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                yield "          <article class=\"cb-bag__item\">
            <a class=\"cb-bag__thumb\" href=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                yield "\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    yield "\">";
                }
                yield "</a>
            <div class=\"cb-bag__copy\">
              <a class=\"cb-bag__name\" href=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                yield "</a>
              <em>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 24);
                yield "</em>
              ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 26
                    yield "                <em>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 26);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26);
                    yield "</em>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "              ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<em>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 28);
                    yield "</em>";
                }
                // line 29
                yield "              <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <label>Qty</label>
                <input type=\"text\" name=\"quantity\" value=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
                yield "\" class=\"form-control";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-invalid";
                }
                yield "\">
                <input type=\"hidden\" name=\"key\" value=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 32);
                yield "\">
                <button type=\"submit\" formaction=\"";
                // line 33
                yield ($context["edit"] ?? null);
                yield "\" class=\"cb-bag__update\">";
                yield ($context["button_update"] ?? null);
                yield "</button>
                <a href=\"";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 34);
                yield "\" class=\"btn-danger cb-bag__remove\">";
                yield ($context["button_remove"] ?? null);
                yield "</a>
              </form>
              ";
                // line 36
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<small class=\"cb-bag__note\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 36);
                    yield "</small>";
                }
                // line 37
                yield "            </div>
            <div class=\"cb-bag__money\">
              <strong>";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39);
                yield "</strong>
              <span>";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40);
                yield "</span>
            </div>
          </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "      </div>
      <aside class=\"cb-bag__summary\">
        <h2>Order summary</h2>
        ";
            // line 47
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
                // line 48
                yield "          <div class=\"cb-bag__row";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-total";
                }
                yield "\"><span>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 48);
                yield "</span><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 48);
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
            // line 50
            yield "        ";
            if ((($tmp = ($context["modules"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "          <div id=\"accordion\" class=\"accordion cb-bag__extras\">
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 53
                    yield "              ";
                    yield $context["module"];
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                yield "          </div>
        ";
            }
            // line 57
            yield "        <a class=\"cb-btn cb-btn--black\" href=\"";
            yield ($context["checkout"] ?? null);
            yield "\">";
            yield ($context["button_checkout"] ?? null);
            yield "</a>
        <a class=\"cb-btn cb-btn--line\" href=\"";
            // line 58
            yield ($context["continue"] ?? null);
            yield "\">";
            yield ($context["button_shopping"] ?? null);
            yield "</a>
      </aside>
    </div>
  </div>
";
        } else {
            // line 63
            yield "  <div class=\"cb-bag\">
    <h1>";
            // line 64
            yield ($context["heading_title"] ?? null);
            yield "</h1>
    <p class=\"cb-bag__empty\">";
            // line 65
            yield ($context["text_no_results"] ?? null);
            yield "</p>
    <a class=\"cb-btn cb-btn--black\" href=\"";
            // line 66
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
        return array (  299 => 66,  295 => 65,  291 => 64,  288 => 63,  278 => 58,  271 => 57,  267 => 55,  258 => 53,  254 => 52,  251 => 51,  248 => 50,  225 => 48,  208 => 47,  203 => 44,  193 => 40,  189 => 39,  185 => 37,  179 => 36,  172 => 34,  166 => 33,  162 => 32,  154 => 31,  150 => 29,  143 => 28,  132 => 26,  128 => 25,  124 => 24,  118 => 23,  105 => 21,  102 => 20,  98 => 19,  94 => 18,  83 => 15,  80 => 14,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  <div class=\"cb-bag\">
    <h1>{{ heading_title }}{% if weight %} <small>{{ weight }}</small>{% endif %}</h1>
    <div class=\"cb-bag__grid\">
      <div id=\"output-cart\" class=\"cb-bag__items\">
        <div class=\"cb-bag__items-head\"><span>In your cart</span><span>{{ products|length }}</span></div>
        {% for product in products %}
          <article class=\"cb-bag__item\">
            <a class=\"cb-bag__thumb\" href=\"{{ product.href }}\">{% if product.thumb %}<img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">{% endif %}</a>
            <div class=\"cb-bag__copy\">
              <a class=\"cb-bag__name\" href=\"{{ product.href }}\">{{ product.name }}</a>
              <em>{{ product.model }}</em>
              {% for option in product.option %}
                <em>{{ option.name }}: {{ option.value }}</em>
              {% endfor %}
              {% if product.subscription %}<em>{{ product.subscription }}</em>{% endif %}
              <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <label>Qty</label>
                <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" class=\"form-control{% if product.minimum %} is-invalid{% endif %}\">
                <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                <button type=\"submit\" formaction=\"{{ edit }}\" class=\"cb-bag__update\">{{ button_update }}</button>
                <a href=\"{{ product.remove }}\" class=\"btn-danger cb-bag__remove\">{{ button_remove }}</a>
              </form>
              {% if product.minimum %}<small class=\"cb-bag__note\">{{ product.minimum }}</small>{% endif %}
            </div>
            <div class=\"cb-bag__money\">
              <strong>{{ product.total }}</strong>
              <span>{{ product.price }}</span>
            </div>
          </article>
        {% endfor %}
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
        <a class=\"cb-btn cb-btn--black\" href=\"{{ checkout }}\">{{ button_checkout }}</a>
        <a class=\"cb-btn cb-btn--line\" href=\"{{ continue }}\">{{ button_shopping }}</a>
      </aside>
    </div>
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
