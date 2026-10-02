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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_9aa1beda75a486a82577813169952237 extends Template
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
<section class=\"cb-coll-hero\" data-cb-banner";
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["banners"] ?? null)) == 1)) {
            yield " style=\"--cb-banner:url('";
            yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["banners"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "image", [], "any", false, false, false, 2);
            yield "');";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["banners"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "mobile", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "--cb-banner-mobile:url('";
                yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["banners"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "mobile", [], "any", false, false, false, 2);
                yield "');";
            }
            yield "\"";
        }
        yield ">
  ";
        // line 3
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["banners"] ?? null)) > 1)) {
            // line 4
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 5
                yield "    <div class=\"cb-coll-hero__slide";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-on";
                }
                yield "\" style=\"--cb-banner:url('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                yield "');";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "mobile", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "--cb-banner-mobile:url('";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "mobile", [], "any", false, false, false, 5);
                    yield "');";
                }
                yield "\"></div>
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
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            yield "  ";
        }
        // line 8
        yield "  <div class=\"cb-coll-hero__shade\"></div>
  <div class=\"cb-coll-hero__copy\">
    <p class=\"cb-kicker\">Wholesale collection · Pricing locked</p>
    <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    <p>";
        // line 12
        yield ($context["summary"] ?? null);
        yield "</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"#assortment\">Explore products</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"";
        // line 15
        yield ($context["register"] ?? null);
        yield "\">Apply for a Trade Account</a>
    </div>
  </div>
  ";
        // line 18
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["banners"] ?? null)) > 1)) {
            // line 19
            yield "  <div class=\"cb-hero__dots cb-hero__dots--list\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 21
                yield "    <button type=\"button\" data-cb-dot";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " class=\"is-on\"";
                }
                yield " aria-label=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
                yield "\"></button>
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
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "  </div>
  ";
        } else {
            // line 25
            yield "  <img class=\"cb-hero__dots\" src=\"catalog/view/image/craftboat/dots.svg\" alt=\"\">
  ";
        }
        // line 27
        yield "</section>

<nav class=\"cb-coll-switch\" aria-label=\"Explore collections\">
  <span>Explore collections</span>
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            yield "  <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 32);
            yield "\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " class=\"is-on\"";
            }
            yield ">
    <strong>";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 33);
            yield "</strong>
    <em>";
            // line 34
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "blurb", [], "any", false, false, false, 34);
            yield "</em>
  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        // line 59
        yield ($context["assortment"] ?? null);
        yield "</p>
      <h2>Build the collection into your store.</h2>
    </div>
    <p>Paper &amp; Desk · Textiles · Home · Stationery — each product page carries the complete commercial specification while protecting trade pricing.</p>
  </div>
  <div class=\"cb-coll-tools\">
    <div class=\"cb-coll-filters\">
      <a class=\"";
        // line 66
        if ((($context["availability"] ?? null) == "all")) {
            yield "is-on";
        }
        yield "\" href=\"";
        yield ($context["filter_all"] ?? null);
        yield "\">All</a>
      <a class=\"";
        // line 67
        if ((($context["availability"] ?? null) == "ready")) {
            yield "is-on";
        }
        yield "\" href=\"";
        yield ($context["filter_ready"] ?? null);
        yield "\">Ready to ship</a>
      <a class=\"";
        // line 68
        if ((($context["availability"] ?? null) == "made")) {
            yield "is-on";
        }
        yield "\" href=\"";
        yield ($context["filter_made"] ?? null);
        yield "\">Made to order</a>
    </div>
    <form class=\"cb-coll-sort\" method=\"get\" action=\"index.php\">
      <input type=\"hidden\" name=\"route\" value=\"product/category\">
      <input type=\"hidden\" name=\"language\" value=\"en-gb\">
      <input type=\"hidden\" name=\"path\" value=\"";
        // line 73
        yield ($context["path"] ?? null);
        yield "\">
      <input type=\"hidden\" name=\"availability\" value=\"";
        // line 74
        yield ($context["availability"] ?? null);
        yield "\">
      <span>Sort</span>
      <label>
        <select name=\"sort\" aria-label=\"Sort\" onchange=\"this.form.submit()\">
          <option value=\"p.sort_order\"";
        // line 78
        if ((($tmp =  !($context["sort_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " selected";
        }
        yield ">Featured</option>
          <option value=\"pd.name\"";
        // line 79
        if ((($tmp = ($context["sort_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 87
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 87);
            yield "\">
      <span class=\"cb-badge\">";
            // line 88
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 88);
            yield "</span>
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"";
            // line 89
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
            yield "\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 90);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 92
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 92);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 92);
            yield "</span></div>
        <h3>";
            // line 93
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 94);
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship";
            // line 97
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " cb-ship--wait";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 97);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\"><span>";
            // line 99
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<s class=\"cb-card__was\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 99);
                    yield "</s>";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 99);
            } elseif ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Pricing locked for this account";
            } else {
                yield "Sign in to view pricing";
            }
            yield "</span> <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
    ";
            $context['_iterated'] = true;
        }
        // line 102
        if (!$context['_iterated']) {
            // line 103
            yield "    <p class=\"cb-muted\">No products in this view yet.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "  </div>
</section>

<section class=\"cb-coll-story\">
  <div class=\"cb-coll-story__photo\" style=\"background-image:url('catalog/view/image/craftboat/collection-story.png')\"></div>
  <div class=\"cb-coll-story__copy\">
    <p class=\"cb-kicker\">The making story</p>
    <h2 class=\"cb-display\">Made as a family, finished by hand.</h2>
    <p>Hand-carved blocks register each colour separately before the printed cotton is wrapped, pleated, stitched or bound in Jaipur.</p>
    <p><a class=\"cb-btn cb-btn--black\" href=\"";
        // line 114
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
        // line 124
        yield ($context["register"] ?? null);
        yield "\">Apply for a trade account →</a>
    <a class=\"cb-unlock__login\" href=\"";
        // line 125
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
        // line 137
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
        return "catalog/view/template/product/category.twig";
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
        return array (  432 => 137,  411 => 125,  407 => 124,  394 => 114,  383 => 105,  376 => 103,  374 => 102,  355 => 99,  346 => 97,  340 => 94,  336 => 93,  330 => 92,  323 => 90,  319 => 89,  315 => 88,  310 => 87,  305 => 86,  293 => 79,  287 => 78,  280 => 74,  276 => 73,  264 => 68,  256 => 67,  248 => 66,  238 => 59,  214 => 37,  205 => 34,  201 => 33,  192 => 32,  188 => 31,  182 => 27,  178 => 25,  174 => 23,  153 => 21,  136 => 20,  133 => 19,  131 => 18,  125 => 15,  119 => 12,  115 => 11,  110 => 8,  107 => 7,  80 => 5,  62 => 4,  60 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<section class=\"cb-coll-hero\" data-cb-banner{% if banners|length == 1 %} style=\"--cb-banner:url('{{ banners[0].image }}');{% if banners[0].mobile %}--cb-banner-mobile:url('{{ banners[0].mobile }}');{% endif %}\"{% endif %}>
  {% if banners|length > 1 %}
    {% for banner in banners %}
    <div class=\"cb-coll-hero__slide{% if loop.first %} is-on{% endif %}\" style=\"--cb-banner:url('{{ banner.image }}');{% if banner.mobile %}--cb-banner-mobile:url('{{ banner.mobile }}');{% endif %}\"></div>
    {% endfor %}
  {% endif %}
  <div class=\"cb-coll-hero__shade\"></div>
  <div class=\"cb-coll-hero__copy\">
    <p class=\"cb-kicker\">Wholesale collection · Pricing locked</p>
    <h1>{{ heading_title }}</h1>
    <p>{{ summary }}</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"#assortment\">Explore products</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"{{ register }}\">Apply for a Trade Account</a>
    </div>
  </div>
  {% if banners|length > 1 %}
  <div class=\"cb-hero__dots cb-hero__dots--list\">
    {% for banner in banners %}
    <button type=\"button\" data-cb-dot{% if loop.first %} class=\"is-on\"{% endif %} aria-label=\"{{ banner.title }}\"></button>
    {% endfor %}
  </div>
  {% else %}
  <img class=\"cb-hero__dots\" src=\"catalog/view/image/craftboat/dots.svg\" alt=\"\">
  {% endif %}
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
      <p class=\"cb-kicker\">{{ assortment }}</p>
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
      <input type=\"hidden\" name=\"route\" value=\"product/category\">
      <input type=\"hidden\" name=\"language\" value=\"en-gb\">
      <input type=\"hidden\" name=\"path\" value=\"{{ path }}\">
      <input type=\"hidden\" name=\"availability\" value=\"{{ availability }}\">
      <span>Sort</span>
      <label>
        <select name=\"sort\" aria-label=\"Sort\" onchange=\"this.form.submit()\">
          <option value=\"p.sort_order\"{% if not sort_name %} selected{% endif %}>Featured</option>
          <option value=\"pd.name\"{% if sort_name %} selected{% endif %}>Name</option>
        </select>
        <img src=\"catalog/view/image/craftboat/chevron.svg\" alt=\"\">
      </label>
    </form>
  </div>
  <div class=\"cb-grid\">
    {% for product in cards %}
    <a class=\"cb-card\" href=\"{{ product.href }}\">
      <span class=\"cb-badge\">{{ product.badge }}</span>
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"{{ product.product_id }}\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
      <div>
        <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.sku }}</span></div>
        <h3>{{ product.name }}</h3>
        <p class=\"cb-collection\">{{ product.collection }}</p>
      </div>
      <div>
        <p class=\"cb-ship{% if product.wait %} cb-ship--wait{% endif %}\">{{ product.ship }}</p>
        <hr>
        <span class=\"cb-card__foot\"><span>{% if product.role_price %}{% if product.role_base %}<s class=\"cb-card__was\">{{ product.role_base }}</s>{% endif %}{{ product.role_price }}{% elseif logged %}Pricing locked for this account{% else %}Sign in to view pricing{% endif %}</span> <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
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
", "catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\product\\category.twig");
    }
}
