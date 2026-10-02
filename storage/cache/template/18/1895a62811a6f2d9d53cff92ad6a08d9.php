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

/* catalog/view/template/checkout/cart_drawer.twig */
class __TwigTemplate_6932f78f718ccff3d2715aa600ffdde5 extends Template
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
        yield "<article class=\"cb-cart\">
  ";
        // line 2
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"cb-cart__alert\">";
            yield ($context["error_warning"] ?? null);
            yield "</p>";
        }
        // line 3
        yield "  ";
        if ((($tmp = ($context["error_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"cb-cart__alert\">";
            yield ($context["error_stock"] ?? null);
            yield "</p>";
        }
        // line 4
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"cb-cart__alert cb-cart__alert--ok\">";
            yield ($context["success"] ?? null);
            yield "</p>";
        }
        // line 5
        yield "  <header class=\"cb-cart__top\">
    <div>
      <p class=\"cb-cart__kicker\">Wholesale order</p>
      <h1>Your cart</h1>
    </div>
    <button type=\"button\" class=\"cb-cart__close\" data-cart-close aria-label=\"Close\"><img src=\"catalog/view/image/craftboat/cart-close.svg\" alt=\"\"></button>
  </header>
  <section class=\"cb-cart__access\">
    <img class=\"cb-cart__seal\" src=\"catalog/view/image/craftboat/cart-seal.svg\" alt=\"\">
    <p class=\"cb-cart__kicker\">Trade access required</p>
    <h2>Build your opening order with wholesale access.</h2>
    <p>Apply for a verified retailer account to unlock trade pricing, live availability and case-pack ordering.</p>
    <a class=\"cb-btn cb-btn--black cb-cart__wide\" href=\"";
        // line 17
        yield ($context["register"] ?? null);
        yield "\">Apply to buy <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    <a class=\"cb-btn cb-btn--line cb-cart__wide\" href=\"";
        // line 18
        yield ($context["login"] ?? null);
        yield "\">Already approved? Sign in</a>
    <p class=\"cb-cart__fine\">Applications are reviewed by the Craft Boat team.</p>
  </section>
  <section class=\"cb-cart__draft\">
    <div class=\"cb-cart__head\">
      <p class=\"cb-cart__kicker\">Saved order draft</p>
      <span>";
        // line 24
        yield ($context["unit_count"] ?? null);
        yield " units</span>
    </div>
    ";
        // line 26
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 28
                yield "        <div class=\"cb-cart__item\">
          <a class=\"cb-cart__thumb\" href=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                yield "\"></a>
          <div>
            <a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                yield "</a>
            <em>";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 32);
                yield "</em>
            <small>";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 33);
                yield " units · ";
                if ((($tmp = ($context["priced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 33);
                } else {
                    yield "price locked";
                }
                yield "</small>
          </div>
          <a class=\"btn-danger cb-cart__remove\" href=\"";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 35);
                yield "\" aria-label=\"Remove\">×</a>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "      <div class=\"cb-cart__actions\">
        <a class=\"cb-btn cb-btn--line cb-cart__wide\" href=\"";
            // line 39
            yield ($context["cart"] ?? null);
            yield "\">View cart</a>
        <a class=\"cb-btn cb-btn--black cb-cart__wide\" href=\"";
            // line 40
            yield ($context["checkout"] ?? null);
            yield "\">Checkout <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    ";
        } else {
            // line 43
            yield "      <p class=\"cb-cart__empty\">Your draft is empty. Add pieces from the catalog to start an opening order.</p>
    ";
        }
        // line 45
        yield "  </section>
  <section class=\"cb-cart__guide\">
    <div class=\"cb-cart__head\">
      <p class=\"cb-cart__kicker\">Opening order guide</p>
      <span>\$500 minimum</span>
    </div>
    <div class=\"cb-cart__bar\" aria-hidden=\"true\"><span style=\"width: ";
        // line 51
        yield (((($tmp = ($context["priced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["progress"] ?? null)) : (0));
        yield "%\"></span></div>
    <p>";
        // line 52
        if ((($tmp = ($context["priced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Draft value ";
            yield ($context["draft_total"] ?? null);
            yield " toward the \$500 opening order.";
        } elseif ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Price stays locked for this account.";
        } else {
            yield "Sign in to reveal your draft value and progress.";
        }
        yield "</p>
  </section>
  <section class=\"cb-cart__ways\">
    <div class=\"cb-cart__head\">
      <p class=\"cb-cart__kicker\">Helpful ways to start</p>
      <span>For independent retailers</span>
    </div>
    <a href=\"";
        // line 59
        yield ($context["ready"] ?? null);
        yield "\">
      <i>01</i>
      <span><strong>Buy what can move sooner</strong><small>8 product lines are marked ready to ship in 3–5 days.</small></span>
      <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\">
    </a>
    <a class=\"is-hot\" href=\"";
        // line 64
        yield ($context["favourites"] ?? null);
        yield "\">
      <i>02</i>
      <span><strong>Begin with buyer favourites</strong><small>Use proven products as the foundation of your first order.</small></span>
      <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\">
    </a>
    <a href=\"";
        // line 69
        yield ($context["contact"] ?? null);
        yield "\">
      <i>03</i>
      <span><strong>Let us build the mix</strong><small>Curated case-pack plans make the \$500 opening order easier.</small></span>
      <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\">
    </a>
  </section>
  <a class=\"cb-cart__ask\" href=\"";
        // line 75
        yield ($context["contact"] ?? null);
        yield "\">
    <span>Need help planning your buy?</span>
    <strong>Ask the Craft Boat trade team →</strong>
  </a>
</article>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_drawer.twig";
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
        return array (  218 => 75,  209 => 69,  201 => 64,  193 => 59,  175 => 52,  171 => 51,  163 => 45,  159 => 43,  153 => 40,  149 => 39,  146 => 38,  137 => 35,  126 => 33,  122 => 32,  116 => 31,  107 => 29,  104 => 28,  99 => 27,  97 => 26,  92 => 24,  83 => 18,  79 => 17,  65 => 5,  58 => 4,  51 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<article class=\"cb-cart\">
  {% if error_warning %}<p class=\"cb-cart__alert\">{{ error_warning }}</p>{% endif %}
  {% if error_stock %}<p class=\"cb-cart__alert\">{{ error_stock }}</p>{% endif %}
  {% if success %}<p class=\"cb-cart__alert cb-cart__alert--ok\">{{ success }}</p>{% endif %}
  <header class=\"cb-cart__top\">
    <div>
      <p class=\"cb-cart__kicker\">Wholesale order</p>
      <h1>Your cart</h1>
    </div>
    <button type=\"button\" class=\"cb-cart__close\" data-cart-close aria-label=\"Close\"><img src=\"catalog/view/image/craftboat/cart-close.svg\" alt=\"\"></button>
  </header>
  <section class=\"cb-cart__access\">
    <img class=\"cb-cart__seal\" src=\"catalog/view/image/craftboat/cart-seal.svg\" alt=\"\">
    <p class=\"cb-cart__kicker\">Trade access required</p>
    <h2>Build your opening order with wholesale access.</h2>
    <p>Apply for a verified retailer account to unlock trade pricing, live availability and case-pack ordering.</p>
    <a class=\"cb-btn cb-btn--black cb-cart__wide\" href=\"{{ register }}\">Apply to buy <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    <a class=\"cb-btn cb-btn--line cb-cart__wide\" href=\"{{ login }}\">Already approved? Sign in</a>
    <p class=\"cb-cart__fine\">Applications are reviewed by the Craft Boat team.</p>
  </section>
  <section class=\"cb-cart__draft\">
    <div class=\"cb-cart__head\">
      <p class=\"cb-cart__kicker\">Saved order draft</p>
      <span>{{ unit_count }} units</span>
    </div>
    {% if products %}
      {% for product in products %}
        <div class=\"cb-cart__item\">
          <a class=\"cb-cart__thumb\" href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\"></a>
          <div>
            <a href=\"{{ product.href }}\">{{ product.name }}</a>
            <em>{{ product.model }}</em>
            <small>{{ product.quantity }} units · {% if priced %}{{ product.total }}{% else %}price locked{% endif %}</small>
          </div>
          <a class=\"btn-danger cb-cart__remove\" href=\"{{ product.remove }}\" aria-label=\"Remove\">×</a>
        </div>
      {% endfor %}
      <div class=\"cb-cart__actions\">
        <a class=\"cb-btn cb-btn--line cb-cart__wide\" href=\"{{ cart }}\">View cart</a>
        <a class=\"cb-btn cb-btn--black cb-cart__wide\" href=\"{{ checkout }}\">Checkout <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    {% else %}
      <p class=\"cb-cart__empty\">Your draft is empty. Add pieces from the catalog to start an opening order.</p>
    {% endif %}
  </section>
  <section class=\"cb-cart__guide\">
    <div class=\"cb-cart__head\">
      <p class=\"cb-cart__kicker\">Opening order guide</p>
      <span>\$500 minimum</span>
    </div>
    <div class=\"cb-cart__bar\" aria-hidden=\"true\"><span style=\"width: {{ priced ? progress : 0 }}%\"></span></div>
    <p>{% if priced %}Draft value {{ draft_total }} toward the \$500 opening order.{% elseif logged %}Price stays locked for this account.{% else %}Sign in to reveal your draft value and progress.{% endif %}</p>
  </section>
  <section class=\"cb-cart__ways\">
    <div class=\"cb-cart__head\">
      <p class=\"cb-cart__kicker\">Helpful ways to start</p>
      <span>For independent retailers</span>
    </div>
    <a href=\"{{ ready }}\">
      <i>01</i>
      <span><strong>Buy what can move sooner</strong><small>8 product lines are marked ready to ship in 3–5 days.</small></span>
      <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\">
    </a>
    <a class=\"is-hot\" href=\"{{ favourites }}\">
      <i>02</i>
      <span><strong>Begin with buyer favourites</strong><small>Use proven products as the foundation of your first order.</small></span>
      <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\">
    </a>
    <a href=\"{{ contact }}\">
      <i>03</i>
      <span><strong>Let us build the mix</strong><small>Curated case-pack plans make the \$500 opening order easier.</small></span>
      <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\">
    </a>
  </section>
  <a class=\"cb-cart__ask\" href=\"{{ contact }}\">
    <span>Need help planning your buy?</span>
    <strong>Ask the Craft Boat trade team →</strong>
  </a>
</article>
", "catalog/view/template/checkout/cart_drawer.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\checkout\\cart_drawer.twig");
    }
}
