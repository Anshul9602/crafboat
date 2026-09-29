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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_e1cc37deffb893a791d7ae67b4e8cf19 extends Template
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
        yield "<div class=\"offcanvas offcanvas-end tck-search\" tabindex=\"-1\" id=\"tck-search\">
  <div class=\"tck-search__bar\">
    <button type=\"button\" class=\"tck-search__back\" data-bs-dismiss=\"offcanvas\" aria-label=\"Back\">
      <i class=\"fa-solid fa-arrow-left\"></i>
    </button>
    <form action=\"";
        // line 6
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" class=\"tck-search__field\">
      <button type=\"submit\" class=\"tck-search__icon\" aria-label=\"Search\">
        <i class=\"fa-solid fa-magnifying-glass\"></i>
      </button>
      <input type=\"text\" name=\"search\" value=\"";
        // line 10
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"Search cakes\" autocomplete=\"off\"/>
    </form>
  </div>

  <div class=\"tck-search__body\">
    ";
        // line 15
        if ((($tmp = ($context["popular"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    <section class=\"tck-search__block\">
      <h3 class=\"tck-search__heading\"><i class=\"fa-solid fa-arrow-trend-up\"></i> Popular Searches</h3>
      <div class=\"tck-search__chips\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["popular"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["chip"]) {
                // line 20
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["chip"], "href", [], "any", false, false, false, 20);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["chip"], "name", [], "any", false, false, false, 20);
                yield "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chip'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "      </div>
    </section>
    ";
        }
        // line 25
        yield "
    ";
        // line 26
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "    <section class=\"tck-search__block tck-rail\">
      <h3 class=\"tck-search__heading\"><i class=\"fa-solid fa-bullhorn\"></i> What's New</h3>
      <div class=\"tck-search__rail\">
        <div class=\"tck-rail__track\">
          ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                yield "            <div class=\"tck-rail__item\">
              <div class=\"ck-card\">
                <a href=\"";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                yield "\" class=\"ck-card__figure\">
                  <span class=\"tck-badge\">";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 35);
                yield "</span>
                  <img src=\"";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "img", [], "any", false, false, false, 36);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 36);
                yield "\">
                </a>
                <div class=\"ck-card__info\">
                  <div class=\"ck-card__eyebrow\">
                    <span class=\"ck-card__subtitle\">";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sub", [], "any", false, false, false, 40);
                yield "</span>
                    ";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                      <span class=\"ck-card__rating\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42);
                    yield " <i class=\"fa-solid fa-star\"></i></span>
                    ";
                }
                // line 44
                yield "                  </div>
                  <a class=\"ck-card__title\" href=\"";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 45);
                yield "</a>
                  <div class=\"ck-card__price-row\">
                    <span class=\"price-new\">";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sale", [], "any", false, false, false, 47);
                yield "</span>
                    ";
                // line 48
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "compare", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"price-old\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "compare", [], "any", false, false, false, 48);
                    yield "</span>";
                }
                // line 49
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"tck-off\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 49);
                    yield "</span>";
                }
                // line 50
                yield "                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "        </div>
        <button type=\"button\" class=\"tck-search__rail-btn\" data-rail=\"next\" aria-label=\"Next\">
          <i class=\"fa-solid fa-chevron-right\"></i>
        </button>
      </div>
    </section>
    ";
        }
        // line 62
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/search.twig";
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
        return array (  185 => 62,  176 => 55,  166 => 50,  159 => 49,  153 => 48,  149 => 47,  142 => 45,  139 => 44,  133 => 42,  131 => 41,  127 => 40,  118 => 36,  114 => 35,  110 => 34,  106 => 32,  102 => 31,  96 => 27,  94 => 26,  91 => 25,  86 => 22,  75 => 20,  71 => 19,  66 => 16,  64 => 15,  56 => 10,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"offcanvas offcanvas-end tck-search\" tabindex=\"-1\" id=\"tck-search\">
  <div class=\"tck-search__bar\">
    <button type=\"button\" class=\"tck-search__back\" data-bs-dismiss=\"offcanvas\" aria-label=\"Back\">
      <i class=\"fa-solid fa-arrow-left\"></i>
    </button>
    <form action=\"{{ action }}\" method=\"post\" class=\"tck-search__field\">
      <button type=\"submit\" class=\"tck-search__icon\" aria-label=\"Search\">
        <i class=\"fa-solid fa-magnifying-glass\"></i>
      </button>
      <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Search cakes\" autocomplete=\"off\"/>
    </form>
  </div>

  <div class=\"tck-search__body\">
    {% if popular %}
    <section class=\"tck-search__block\">
      <h3 class=\"tck-search__heading\"><i class=\"fa-solid fa-arrow-trend-up\"></i> Popular Searches</h3>
      <div class=\"tck-search__chips\">
        {% for chip in popular %}
          <a href=\"{{ chip.href }}\">{{ chip.name }}</a>
        {% endfor %}
      </div>
    </section>
    {% endif %}

    {% if products %}
    <section class=\"tck-search__block tck-rail\">
      <h3 class=\"tck-search__heading\"><i class=\"fa-solid fa-bullhorn\"></i> What's New</h3>
      <div class=\"tck-search__rail\">
        <div class=\"tck-rail__track\">
          {% for product in products %}
            <div class=\"tck-rail__item\">
              <div class=\"ck-card\">
                <a href=\"{{ product.href }}\" class=\"ck-card__figure\">
                  <span class=\"tck-badge\">{{ product.badge }}</span>
                  <img src=\"{{ product.img }}\" alt=\"{{ product.title }}\">
                </a>
                <div class=\"ck-card__info\">
                  <div class=\"ck-card__eyebrow\">
                    <span class=\"ck-card__subtitle\">{{ product.sub }}</span>
                    {% if product.rating %}
                      <span class=\"ck-card__rating\">{{ product.rating }} <i class=\"fa-solid fa-star\"></i></span>
                    {% endif %}
                  </div>
                  <a class=\"ck-card__title\" href=\"{{ product.href }}\">{{ product.title }}</a>
                  <div class=\"ck-card__price-row\">
                    <span class=\"price-new\">{{ product.sale }}</span>
                    {% if product.compare %}<span class=\"price-old\">{{ product.compare }}</span>{% endif %}
                    {% if product.percent %}<span class=\"tck-off\">{{ product.percent }}</span>{% endif %}
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
        <button type=\"button\" class=\"tck-search__rail-btn\" data-rail=\"next\" aria-label=\"Next\">
          <i class=\"fa-solid fa-chevron-right\"></i>
        </button>
      </div>
    </section>
    {% endif %}
  </div>
</div>
", "catalog/view/template/common/search.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\search.twig");
    }
}
