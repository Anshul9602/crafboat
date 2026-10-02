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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_9c7aa6950ad9dd7c1717ee191ccc7eef extends Template
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
            yield "  <div class=\"cb-wish\">
    <div class=\"cb-wish__head\"><span>Saved pieces</span><span>";
            // line 3
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield "</span></div>
    <div class=\"cb-grid\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                yield "        <article class=\"cb-card\">
          <a class=\"cb-wish__link\" href=\"";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
                yield "\">
            <span class=\"cb-badge\">";
                // line 8
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 8);
                yield "</span>
            ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<img class=\"cb-card__img\" src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\">";
                }
                // line 10
                yield "            <div>
              <div class=\"cb-meta\"><span>";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 11);
                yield "</span><span>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 11);
                yield "</span></div>
              <h3>";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                yield "</h3>
              ";
                // line 13
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"cb-collection\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 13);
                    yield "</p>";
                }
                // line 14
                yield "            </div>
            <div>
              <p class=\"cb-ship";
                // line 16
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " cb-ship--wait";
                }
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 16);
                yield "</p>
              <hr>
              <span class=\"cb-card__foot\">
                ";
                // line 19
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "                  ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 21
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21), [".00" => ""]);
                        yield "
                  ";
                    } else {
                        // line 23
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23), [".00" => ""]);
                        yield "
                  ";
                    }
                    // line 25
                    yield "                ";
                }
                // line 26
                yield "              </span>
            </div>
          </a>
          <a class=\"cb-heart is-saved btn-danger\" href=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 29);
                yield "\" aria-label=\"";
                yield ($context["button_remove"] ?? null);
                yield "\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></a>
          <form id=\"form-product-";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 30);
                yield "\" action=\"";
                yield ($context["cart_add"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["cart"] ?? null);
                yield "\" data-oc-target=\"#cart\">
            <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 31);
                yield "\">
            <input type=\"hidden\" name=\"quantity\" value=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 32);
                yield "\">
          </form>
          <div class=\"cb-wish__actions\">
            <button type=\"submit\" form=\"form-product-";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35);
                yield "\" class=\"btn btn-primary\">";
                yield ($context["button_cart"] ?? null);
                yield "</button>
            <a href=\"";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 36);
                yield "\" class=\"btn btn-danger\">";
                yield ($context["button_remove"] ?? null);
                yield "</a>
          </div>
        </article>
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
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "    </div>
  </div>
";
        } else {
            // line 43
            yield "  <p class=\"cb-wish__empty\">";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/wishlist_list.twig";
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
        return array (  201 => 43,  196 => 40,  176 => 36,  170 => 35,  164 => 32,  160 => 31,  152 => 30,  146 => 29,  141 => 26,  138 => 25,  132 => 23,  126 => 21,  123 => 20,  121 => 19,  111 => 16,  107 => 14,  101 => 13,  97 => 12,  91 => 11,  88 => 10,  80 => 9,  76 => 8,  72 => 7,  69 => 6,  52 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  <div class=\"cb-wish\">
    <div class=\"cb-wish__head\"><span>Saved pieces</span><span>{{ products|length }}</span></div>
    <div class=\"cb-grid\">
      {% for product in products %}
        <article class=\"cb-card\">
          <a class=\"cb-wish__link\" href=\"{{ product.href }}\">
            <span class=\"cb-badge\">{{ product.badge }}</span>
            {% if product.thumb %}<img class=\"cb-card__img\" src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">{% endif %}
            <div>
              <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.model }}</span></div>
              <h3>{{ product.name }}</h3>
              {% if product.collection %}<p class=\"cb-collection\">{{ product.collection }}</p>{% endif %}
            </div>
            <div>
              <p class=\"cb-ship{% if product.wait %} cb-ship--wait{% endif %}\">{{ product.ship }}</p>
              <hr>
              <span class=\"cb-card__foot\">
                {% if product.price %}
                  {% if not product.special %}
                    {{ product.price|replace({'.00': ''}) }}
                  {% else %}
                    {{ product.special|replace({'.00': ''}) }}
                  {% endif %}
                {% endif %}
              </span>
            </div>
          </a>
          <a class=\"cb-heart is-saved btn-danger\" href=\"{{ product.remove }}\" aria-label=\"{{ button_remove }}\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></a>
          <form id=\"form-product-{{ loop.index0 }}\" action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\">
            <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\">
          </form>
          <div class=\"cb-wish__actions\">
            <button type=\"submit\" form=\"form-product-{{ loop.index0 }}\" class=\"btn btn-primary\">{{ button_cart }}</button>
            <a href=\"{{ product.remove }}\" class=\"btn btn-danger\">{{ button_remove }}</a>
          </div>
        </article>
      {% endfor %}
    </div>
  </div>
{% else %}
  <p class=\"cb-wish__empty\">{{ text_no_results }}</p>
{% endif %}
", "catalog/view/template/account/wishlist_list.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\wishlist_list.twig");
    }
}
