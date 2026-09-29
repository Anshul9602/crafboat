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

/* catalog/view/template/product/collection.twig */
class __TwigTemplate_390683885bdf495e26ec9091c1aece13 extends Template
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
        yield ($context["header"] ?? null);
        yield "
<section class=\"cb-coll-hero\" style=\"background-image:url('";
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "image", [], "any", false, false, false, 2);
        yield "')\">
  <div class=\"cb-coll-hero__shade\"></div>
  <div class=\"cb-coll-hero__copy\">
    <p class=\"cb-kicker\">Wholesale collection · Pricing locked</p>
    <h1>";
        // line 6
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "name", [], "any", false, false, false, 6);
        yield "</h1>
    <p>";
        // line 7
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "summary", [], "any", false, false, false, 7);
        yield "</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"#assortment\">Explore products</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"";
        // line 10
        yield ($context["register"] ?? null);
        yield "\">Apply for a Trade Account</a>
    </div>
  </div>
  <img class=\"cb-hero__dots\" src=\"catalog/view/image/craftboat/dots.svg\" alt=\"\">
</section>

<nav class=\"cb-coll-switch\" aria-label=\"Explore collections\">
  <span>Explore collections</span>
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            yield "  <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 19);
            yield "\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " class=\"is-on\"";
            }
            yield ">
    <strong>";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 20);
            yield "</strong>
    <em>";
            // line 21
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "blurb", [], "any", false, false, false, 21);
            yield "</em>
  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "</nav>

<section class=\"cb-coll-note\">
  <div>
    <p class=\"cb-kicker\">Browse before you apply</p>
    <h2 class=\"cb-display\">Everything needed to understand the product. Trade figures unlock after approval.</h2>
  </div>
  <div class=\"cb-coll-note__list\">
    <div>
      <h3>Visible now</h3>
      <p>Product name, MSRP, SKU, case pack, MOQ, material and dispatch window.</p>
    </div>
    <div>
      <h3>With trade access</h3>
      <p>Wholesale price, retail margin, live inventory, quantity controls and quick add.</p>
    </div>
  </div>
</section>

<section class=\"cb-coll-products\" id=\"assortment\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">";
        // line 46
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "heading", [], "any", false, false, false, 46);
        yield "</p>
      <h2>Build the collection into your store.</h2>
    </div>
    <p>Paper &amp; Desk · Textiles · Home · Stationery — each product page carries the complete commercial specification while protecting trade pricing.</p>
  </div>
  <div class=\"cb-coll-tools\">
    <div class=\"cb-coll-filters\">
      <a class=\"";
        // line 53
        if ((($context["availability"] ?? null) == "all")) {
            yield "is-on";
        }
        yield "\" href=\"";
        yield ($context["filter_all"] ?? null);
        yield "\">All</a>
      <a class=\"";
        // line 54
        if ((($context["availability"] ?? null) == "ready")) {
            yield "is-on";
        }
        yield "\" href=\"";
        yield ($context["filter_ready"] ?? null);
        yield "\">Ready to ship</a>
      <a class=\"";
        // line 55
        if ((($context["availability"] ?? null) == "made")) {
            yield "is-on";
        }
        yield "\" href=\"";
        yield ($context["filter_made"] ?? null);
        yield "\">Made to order</a>
    </div>
    <form class=\"cb-coll-sort\" method=\"get\" action=\"index.php\">
      <input type=\"hidden\" name=\"route\" value=\"product/collection\">
      <input type=\"hidden\" name=\"language\" value=\"en-gb\">
      <input type=\"hidden\" name=\"collection\" value=\"";
        // line 60
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["collection"] ?? null), "code", [], "any", false, false, false, 60);
        yield "\">
      <input type=\"hidden\" name=\"availability\" value=\"";
        // line 61
        yield ($context["availability"] ?? null);
        yield "\">
      <span>Sort</span>
      <label>
        <select name=\"sort\" aria-label=\"Sort\" onchange=\"this.form.submit()\">
          <option value=\"featured\"";
        // line 65
        if ((($context["sort"] ?? null) == "featured")) {
            yield " selected";
        }
        yield ">Featured</option>
          <option value=\"name\"";
        // line 66
        if ((($context["sort"] ?? null) == "name")) {
            yield " selected";
        }
        yield ">Name</option>
        </select>
        <img src=\"catalog/view/image/craftboat/chevron.svg\" alt=\"\">
      </label>
    </form>
  </div>
  <div class=\"cb-grid\">
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
            yield "\">
      <span class=\"cb-badge\">";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 75);
            yield "</span>
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"";
            // line 77
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 77);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 79
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 79);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 79);
            yield "</span></div>
        <h3>";
            // line 80
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 81
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 81);
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship";
            // line 84
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " cb-ship--wait";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 84);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\">";
            // line 86
            if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Signed in · pricing unlocks after approval";
            } else {
                yield "Sign in to view wholesale pricing";
            }
            yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
    ";
            $context['_iterated'] = true;
        }
        // line 89
        if (!$context['_iterated']) {
            // line 90
            yield "    <p class=\"cb-muted\">No products in this view yet.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "  </div>
</section>

<section class=\"cb-coll-story\">
  <div class=\"cb-coll-story__photo\" style=\"background-image:url('catalog/view/image/craftboat/collection-story.png')\"></div>
  <div class=\"cb-coll-story__copy\">
    <p class=\"cb-kicker\">The making story</p>
    <h2 class=\"cb-display\">Made as a family, finished by hand.</h2>
    <p>Hand-carved blocks register each colour separately before the printed cotton is wrapped, pleated, stitched or bound in Jaipur.</p>
    <p><a class=\"cb-btn cb-btn--black\" href=\"";
        // line 101
        yield ($context["about"] ?? null);
        yield "\">Discover Craft Boat’s process →</a></p>
  </div>
</section>

<section class=\"cb-unlock\">
  <div>
    <p class=\"cb-kicker\">Shopping for yourself?</p>
    <h2 class=\"cb-display\">Unlock wholesale pricing and add full case packs.</h2>
  </div>
  <div class=\"cb-unlock__actions\">
    <a class=\"cb-btn cb-btn--black\" href=\"";
        // line 111
        yield ($context["register"] ?? null);
        yield "\">Apply for a trade account →</a>
    <a class=\"cb-unlock__login\" href=\"";
        // line 112
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["account"] ?? null)) : (($context["login"] ?? null)));
        yield "\">";
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Go to your account";
        } else {
            yield "Already approved? Sign in";
        }
        yield "</a>
  </div>
</section>

<section class=\"cb-retail\">
  <img class=\"cb-retail__mark\" src=\"catalog/view/image/craftboat/pattern.svg\" alt=\"\">
  <div>
    <p class=\"cb-kicker\">Shopping for yourself?</p>
    <h2 class=\"cb-display\">Buy individual pieces from our retail store.</h2>
  </div>
  <a class=\"cb-btn cb-btn--white\" href=\"https://www.seedsofanaar.com/\" target=\"_blank\" rel=\"noopener\">Seeds of Anaar <img src=\"catalog/view/image/craftboat/external.svg\" alt=\"\"></a>
</section>
";
        // line 124
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/collection.twig";
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
        return array (  308 => 124,  287 => 112,  283 => 111,  270 => 101,  259 => 92,  252 => 90,  250 => 89,  238 => 86,  229 => 84,  223 => 81,  219 => 80,  213 => 79,  206 => 77,  201 => 75,  196 => 74,  191 => 73,  179 => 66,  173 => 65,  166 => 61,  162 => 60,  150 => 55,  142 => 54,  134 => 53,  124 => 46,  100 => 24,  91 => 21,  87 => 20,  78 => 19,  74 => 18,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<section class=\"cb-coll-hero\" style=\"background-image:url('{{ collection.image }}')\">
  <div class=\"cb-coll-hero__shade\"></div>
  <div class=\"cb-coll-hero__copy\">
    <p class=\"cb-kicker\">Wholesale collection · Pricing locked</p>
    <h1>{{ collection.name }}</h1>
    <p>{{ collection.summary }}</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"#assortment\">Explore products</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"{{ register }}\">Apply for a Trade Account</a>
    </div>
  </div>
  <img class=\"cb-hero__dots\" src=\"catalog/view/image/craftboat/dots.svg\" alt=\"\">
</section>

<nav class=\"cb-coll-switch\" aria-label=\"Explore collections\">
  <span>Explore collections</span>
  {% for item in collections %}
  <a href=\"{{ item.href }}\"{% if item.active %} class=\"is-on\"{% endif %}>
    <strong>{{ item.name }}</strong>
    <em>{{ item.blurb }}</em>
  </a>
  {% endfor %}
</nav>

<section class=\"cb-coll-note\">
  <div>
    <p class=\"cb-kicker\">Browse before you apply</p>
    <h2 class=\"cb-display\">Everything needed to understand the product. Trade figures unlock after approval.</h2>
  </div>
  <div class=\"cb-coll-note__list\">
    <div>
      <h3>Visible now</h3>
      <p>Product name, MSRP, SKU, case pack, MOQ, material and dispatch window.</p>
    </div>
    <div>
      <h3>With trade access</h3>
      <p>Wholesale price, retail margin, live inventory, quantity controls and quick add.</p>
    </div>
  </div>
</section>

<section class=\"cb-coll-products\" id=\"assortment\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">{{ collection.heading }}</p>
      <h2>Build the collection into your store.</h2>
    </div>
    <p>Paper &amp; Desk · Textiles · Home · Stationery — each product page carries the complete commercial specification while protecting trade pricing.</p>
  </div>
  <div class=\"cb-coll-tools\">
    <div class=\"cb-coll-filters\">
      <a class=\"{% if availability == 'all' %}is-on{% endif %}\" href=\"{{ filter_all }}\">All</a>
      <a class=\"{% if availability == 'ready' %}is-on{% endif %}\" href=\"{{ filter_ready }}\">Ready to ship</a>
      <a class=\"{% if availability == 'made' %}is-on{% endif %}\" href=\"{{ filter_made }}\">Made to order</a>
    </div>
    <form class=\"cb-coll-sort\" method=\"get\" action=\"index.php\">
      <input type=\"hidden\" name=\"route\" value=\"product/collection\">
      <input type=\"hidden\" name=\"language\" value=\"en-gb\">
      <input type=\"hidden\" name=\"collection\" value=\"{{ collection.code }}\">
      <input type=\"hidden\" name=\"availability\" value=\"{{ availability }}\">
      <span>Sort</span>
      <label>
        <select name=\"sort\" aria-label=\"Sort\" onchange=\"this.form.submit()\">
          <option value=\"featured\"{% if sort == 'featured' %} selected{% endif %}>Featured</option>
          <option value=\"name\"{% if sort == 'name' %} selected{% endif %}>Name</option>
        </select>
        <img src=\"catalog/view/image/craftboat/chevron.svg\" alt=\"\">
      </label>
    </form>
  </div>
  <div class=\"cb-grid\">
    {% for product in products %}
    <a class=\"cb-card\" href=\"{{ product.href }}\">
      <span class=\"cb-badge\">{{ product.badge }}</span>
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
      <div>
        <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.sku }}</span></div>
        <h3>{{ product.name }}</h3>
        <p class=\"cb-collection\">{{ product.collection }}</p>
      </div>
      <div>
        <p class=\"cb-ship{% if product.wait %} cb-ship--wait{% endif %}\">{{ product.ship }}</p>
        <hr>
        <span class=\"cb-card__foot\">{% if logged %}Signed in · pricing unlocks after approval{% else %}Sign in to view wholesale pricing{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
    {% else %}
    <p class=\"cb-muted\">No products in this view yet.</p>
    {% endfor %}
  </div>
</section>

<section class=\"cb-coll-story\">
  <div class=\"cb-coll-story__photo\" style=\"background-image:url('catalog/view/image/craftboat/collection-story.png')\"></div>
  <div class=\"cb-coll-story__copy\">
    <p class=\"cb-kicker\">The making story</p>
    <h2 class=\"cb-display\">Made as a family, finished by hand.</h2>
    <p>Hand-carved blocks register each colour separately before the printed cotton is wrapped, pleated, stitched or bound in Jaipur.</p>
    <p><a class=\"cb-btn cb-btn--black\" href=\"{{ about }}\">Discover Craft Boat’s process →</a></p>
  </div>
</section>

<section class=\"cb-unlock\">
  <div>
    <p class=\"cb-kicker\">Shopping for yourself?</p>
    <h2 class=\"cb-display\">Unlock wholesale pricing and add full case packs.</h2>
  </div>
  <div class=\"cb-unlock__actions\">
    <a class=\"cb-btn cb-btn--black\" href=\"{{ register }}\">Apply for a trade account →</a>
    <a class=\"cb-unlock__login\" href=\"{{ logged ? account : login }}\">{% if logged %}Go to your account{% else %}Already approved? Sign in{% endif %}</a>
  </div>
</section>

<section class=\"cb-retail\">
  <img class=\"cb-retail__mark\" src=\"catalog/view/image/craftboat/pattern.svg\" alt=\"\">
  <div>
    <p class=\"cb-kicker\">Shopping for yourself?</p>
    <h2 class=\"cb-display\">Buy individual pieces from our retail store.</h2>
  </div>
  <a class=\"cb-btn cb-btn--white\" href=\"https://www.seedsofanaar.com/\" target=\"_blank\" rel=\"noopener\">Seeds of Anaar <img src=\"catalog/view/image/craftboat/external.svg\" alt=\"\"></a>
</section>
{{ footer }}
", "catalog/view/template/product/collection.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\product\\collection.twig");
    }
}
