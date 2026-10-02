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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_2c75bfcf68e74c00fab90870df2d9318 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"theme-color\" content=\"#123942\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>";
        }
        // line 10
        yield "  ";
        if ((($tmp = ($context["keywords"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>";
        }
        // line 11
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 12
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 13
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 14
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 15
        yield ($context["theme"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  ";
        // line 16
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">";
        }
        // line 17
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 17);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 17);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 17);
            yield "\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            yield "<script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 18);
            yield "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            yield $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "</head>
<body class=\"cb";
        // line 21
        if ((($tmp = ($context["account_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " cb-acct";
        }
        yield "\">
<div id=\"container\">
  <div id=\"alert\"></div>
  <div class=\"cb-topbar\">
    <span>Craft Boat’s wholesale home for approved stocklists</span>
    ";
        // line 26
        if ((($tmp = ($context["topbar_note"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "      <span>";
            yield ($context["topbar_note"] ?? null);
            yield "</span>
    ";
        } else {
            // line 29
            yield "      <a href=\"https://www.faire.com/\" target=\"_blank\" rel=\"noopener\">Prefer Faire? Continue there ↗</a>
    ";
        }
        // line 31
        yield "  </div>
  <div class=\"cb-bar\">
  <header class=\"cb-header\">
    <a class=\"cb-logo\" href=\"";
        // line 34
        yield ($context["home"] ?? null);
        yield "\"><img src=\"catalog/view/image/craftboat/logo.svg\" alt=\"Craft Boat\"></a>
    <form class=\"cb-search\" action=\"";
        // line 35
        yield ($context["search_action"] ?? null);
        yield "\" method=\"post\">
      <label class=\"cb-search__field\">
        <img src=\"catalog/view/image/craftboat/search.svg\" alt=\"\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 38
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"Search products, SKU, material or colour\">
      </label>
      <button class=\"cb-btn cb-btn--teal\" type=\"submit\">Search</button>
    </form>
    <div class=\"cb-tools\">
      ";
        // line 43
        if ((($tmp =  !($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <a href=\"";
            yield ($context["login"] ?? null);
            yield "\">Sign in</a>
      ";
        } else {
            // line 46
            yield "        <a href=\"";
            yield ($context["account"] ?? null);
            yield "\">Account</a>
      ";
        }
        // line 48
        yield "      <a href=\"";
        yield ($context["wishlist"] ?? null);
        yield "\">Saved <span class=\"cb-pill cb-saved-count\">";
        yield ($context["saved_count"] ?? null);
        yield "</span></a>
      <button type=\"button\" class=\"cb-tools__cart\" data-cart-open data-cart-url=\"";
        // line 49
        yield ($context["cart_drawer"] ?? null);
        yield "\">Cart <span class=\"cb-pill\">";
        yield ($context["cart_count"] ?? null);
        yield "</span></button>
      <a class=\"cb-btn cb-btn--black\" href=\"";
        // line 50
        yield ($context["register"] ?? null);
        yield "\">Apply to buy</a>
      <button type=\"button\" class=\"cb-menu\" data-nav-toggle aria-expanded=\"false\" aria-controls=\"cb-nav\" aria-label=\"Menu\"><span></span></button>
    </div>
  </header>
  <button type=\"button\" class=\"cb-nav-backdrop\" data-nav-close aria-label=\"Close menu\"></button>
  <nav class=\"cb-nav\" id=\"cb-nav\">
    <button type=\"button\" class=\"cb-nav__close\" data-nav-close aria-label=\"Close menu\"><span></span></button>
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 58
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 58);
        yield "\">Shop <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__shop\">
          <div>
            <p class=\"cb-mega__kicker\">Shop Craft Boat trade</p>
            <h2>Find the right pieces for your next buy.</h2>
            <a class=\"cb-mega__more\" href=\"";
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 64);
        yield "\">View the full catalog →</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Shop by edit</p>
            <a href=\"";
        // line 68
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "new", [], "any", false, false, false, 68);
        yield "\">New arrivals</a>
            <a href=\"";
        // line 69
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "favourites", [], "any", false, false, false, 69);
        yield "\">Buyer favourites</a>
            <a href=\"";
        // line 70
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "ready", [], "any", false, false, false, 70);
        yield "\">Ready to ship</a>
            <a href=\"";
        // line 71
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "holiday", [], "any", false, false, false, 71);
        yield "\">Holiday 2026</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Shop by need</p>
            <a href=\"";
        // line 75
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "desk", [], "any", false, false, false, 75);
        yield "\">Refresh the desk</a>
            <a href=\"";
        // line 76
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "gifting", [], "any", false, false, false, 76);
        yield "\">Build a gifting table</a>
            <a href=\"";
        // line 77
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 77);
        yield "\">Add home accents</a>
            <a href=\"";
        // line 78
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 78);
        yield "\">Start with an assortment</a>
          </div>
          <a class=\"cb-mega__promo\" href=\"";
        // line 80
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "ready", [], "any", false, false, false, 80);
        yield "\" style=\"background-image:url('image/catalog/craftboat/trays.png')\">
            <span>Available now</span>
            <strong>Ready-stock lines dispatch in 3–5 days</strong>
            <em>Shop ready stock →</em>
          </a>
        </div>
      </div>
    </div>
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 89);
        yield "\">Departments <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__depts\">
          <div>
            <p class=\"cb-mega__kicker\">Browse departments</p>
            <h2>From paper objects to soft goods.</h2>
            <p>Products can live in more than one useful buying category.</p>
          </div>
          <div>
            <p class=\"cb-mega__label\">Home &amp; desk</p>
            <a href=\"";
        // line 99
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 99);
        yield "\">Home accents</a>
            <a href=\"";
        // line 100
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "storage", [], "any", false, false, false, 100);
        yield "\">Storage &amp; organisation</a>
            <a href=\"";
        // line 101
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 101);
        yield "\">Kitchen &amp; tabletop</a>
            <a href=\"";
        // line 102
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "textiles", [], "any", false, false, false, 102);
        yield "\">Textiles &amp; bedding</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Paper &amp; gifting</p>
            <a href=\"";
        // line 106
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "stationery", [], "any", false, false, false, 106);
        yield "\">Stationery &amp; writing</a>
            <a href=\"";
        // line 107
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "gifting", [], "any", false, false, false, 107);
        yield "\">Gift wrapping</a>
            <a href=\"";
        // line 108
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "desk", [], "any", false, false, false, 108);
        yield "\">Craft materials</a>
            <a href=\"";
        // line 109
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "textiles", [], "any", false, false, false, 109);
        yield "\">Accessories &amp; pouches</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Textile &amp; seasonal</p>
            <a href=\"";
        // line 113
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 113);
        yield "\">Frames &amp; decorative objects</a>
            <a href=\"";
        // line 114
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "storage", [], "any", false, false, false, 114);
        yield "\">Desk organisation</a>
            <a href=\"";
        // line 115
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 115);
        yield "\">Lighting &amp; lampshades</a>
            <a href=\"";
        // line 116
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "seasonal", [], "any", false, false, false, 116);
        yield "\">Holiday keepsakes</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 122
        yield ($context["collections"] ?? null);
        yield "\">Collections <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__cards\">
          <div>
            <p class=\"cb-mega__kicker\">Editorial collections</p>
            <h2>Buy a cohesive colour and material story.</h2>
            <a class=\"cb-mega__more\" href=\"";
        // line 128
        yield ($context["collections"] ?? null);
        yield "\">Explore all collections →</a>
          </div>
          <a class=\"cb-mega__card\" href=\"";
        // line 130
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "saffron", [], "any", false, false, false, 130);
        yield "\" style=\"background-image:url('image/catalog/craftboat/pouch.png')\">
            <strong>Saffron Valley</strong>
            <em>Florals and sun-warmed block print.</em>
          </a>
          <a class=\"cb-mega__card\" href=\"";
        // line 134
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "marbled", [], "any", false, false, false, 134);
        yield "\" style=\"background-image:url('image/catalog/craftboat/trays.png')\">
            <strong>Marbled Stories</strong>
            <em>One-of-one colour pulled by hand.</em>
          </a>
          <a class=\"cb-mega__card\" href=\"";
        // line 138
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "holiday", [], "any", false, false, false, 138);
        yield "\" style=\"background-image:url('image/catalog/craftboat/collection-holiday.png')\">
            <strong>Holiday 2026</strong>
            <em>Keepsake gifting for the season.</em>
          </a>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 145
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "new", [], "any", false, false, false, 145);
        yield "\">New arrivals</a>
    <a href=\"";
        // line 146
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "favourites", [], "any", false, false, false, 146);
        yield "\">Bestsellers</a>
    <a href=\"";
        // line 147
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "ready", [], "any", false, false, false, 147);
        yield "\"><i class=\"cb-dot\"></i> Ready to ship</a>
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 149
        yield ($context["about"] ?? null);
        yield "\">Crafts &amp; values <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__craft\">
          <div>
            <p class=\"cb-mega__kicker\">Shop by craft</p>
            <h2>Let the making story guide the assortment.</h2>
            <a class=\"cb-mega__more\" href=\"";
        // line 155
        yield ($context["about"] ?? null);
        yield "\">How Craft Boat makes →</a>
          </div>
          <div class=\"cb-craft\">
            <a href=\"";
        // line 158
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "stationery", [], "any", false, false, false, 158);
        yield "\"><strong>Handmade paper</strong><span>Waste becomes paper. Paper becomes possibility.</span></a>
            <a href=\"";
        // line 159
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "marbled", [], "any", false, false, false, 159);
        yield "\"><strong>Hand marbled</strong><span>No two pulls from the marbling table are the same.</span></a>
            <a href=\"";
        // line 160
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "saffron", [], "any", false, false, false, 160);
        yield "\"><strong>Block printed</strong><span>Pattern, registered one colour at a time.</span></a>
            <a href=\"";
        // line 161
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "textiles", [], "any", false, false, false, 161);
        yield "\"><strong>Natural dyed</strong><span>Colour with a material story.</span></a>
            <a class=\"is-wide\" href=\"";
        // line 162
        yield ($context["about"] ?? null);
        yield "\"><strong>Made in Jaipur</strong><span>A multidisciplinary studio, close to the hands that make.</span></a>
          </div>
          <a class=\"cb-mega__promo\" href=\"";
        // line 164
        yield ($context["contact"] ?? null);
        yield "\" style=\"background-image:url('image/catalog/craftboat/pouch.png')\">
            <span>Made for your store</span>
            <strong>Develop a custom colour, form or finish.</strong>
            <em>Start a custom brief →</em>
          </a>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 172
        yield ($context["contact"] ?? null);
        yield "\">Custom orders</a>
  </nav>
  </div>
  <main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  461 => 172,  450 => 164,  445 => 162,  441 => 161,  437 => 160,  433 => 159,  429 => 158,  423 => 155,  414 => 149,  409 => 147,  405 => 146,  401 => 145,  391 => 138,  384 => 134,  377 => 130,  372 => 128,  363 => 122,  354 => 116,  350 => 115,  346 => 114,  342 => 113,  335 => 109,  331 => 108,  327 => 107,  323 => 106,  316 => 102,  312 => 101,  308 => 100,  304 => 99,  291 => 89,  279 => 80,  274 => 78,  270 => 77,  266 => 76,  262 => 75,  255 => 71,  251 => 70,  247 => 69,  243 => 68,  236 => 64,  227 => 58,  216 => 50,  210 => 49,  203 => 48,  197 => 46,  191 => 44,  189 => 43,  181 => 38,  175 => 35,  171 => 34,  166 => 31,  162 => 29,  156 => 27,  154 => 26,  144 => 21,  141 => 20,  131 => 19,  119 => 18,  103 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  76 => 11,  69 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"theme-color\" content=\"#123942\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}<meta name=\"description\" content=\"{{ description }}\"/>{% endif %}
  {% if keywords %}<meta name=\"keywords\" content=\"{{ keywords }}\"/>{% endif %}
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"{{ theme }}\" type=\"text/css\" rel=\"stylesheet\"/>
  {% if icon %}<link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">{% endif %}
  {% for style in styles %}<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>{% endfor %}
  {% for script in scripts %}<script src=\"{{ script.href }}\" type=\"text/javascript\"></script>{% endfor %}
  {% for analytic in analytics %}{{ analytic }}{% endfor %}
</head>
<body class=\"cb{% if account_page %} cb-acct{% endif %}\">
<div id=\"container\">
  <div id=\"alert\"></div>
  <div class=\"cb-topbar\">
    <span>Craft Boat’s wholesale home for approved stocklists</span>
    {% if topbar_note %}
      <span>{{ topbar_note }}</span>
    {% else %}
      <a href=\"https://www.faire.com/\" target=\"_blank\" rel=\"noopener\">Prefer Faire? Continue there ↗</a>
    {% endif %}
  </div>
  <div class=\"cb-bar\">
  <header class=\"cb-header\">
    <a class=\"cb-logo\" href=\"{{ home }}\"><img src=\"catalog/view/image/craftboat/logo.svg\" alt=\"Craft Boat\"></a>
    <form class=\"cb-search\" action=\"{{ search_action }}\" method=\"post\">
      <label class=\"cb-search__field\">
        <img src=\"catalog/view/image/craftboat/search.svg\" alt=\"\">
        <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Search products, SKU, material or colour\">
      </label>
      <button class=\"cb-btn cb-btn--teal\" type=\"submit\">Search</button>
    </form>
    <div class=\"cb-tools\">
      {% if not logged %}
        <a href=\"{{ login }}\">Sign in</a>
      {% else %}
        <a href=\"{{ account }}\">Account</a>
      {% endif %}
      <a href=\"{{ wishlist }}\">Saved <span class=\"cb-pill cb-saved-count\">{{ saved_count }}</span></a>
      <button type=\"button\" class=\"cb-tools__cart\" data-cart-open data-cart-url=\"{{ cart_drawer }}\">Cart <span class=\"cb-pill\">{{ cart_count }}</span></button>
      <a class=\"cb-btn cb-btn--black\" href=\"{{ register }}\">Apply to buy</a>
      <button type=\"button\" class=\"cb-menu\" data-nav-toggle aria-expanded=\"false\" aria-controls=\"cb-nav\" aria-label=\"Menu\"><span></span></button>
    </div>
  </header>
  <button type=\"button\" class=\"cb-nav-backdrop\" data-nav-close aria-label=\"Close menu\"></button>
  <nav class=\"cb-nav\" id=\"cb-nav\">
    <button type=\"button\" class=\"cb-nav__close\" data-nav-close aria-label=\"Close menu\"><span></span></button>
    <div class=\"cb-nav__item\">
      <a href=\"{{ nav.catalog }}\">Shop <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__shop\">
          <div>
            <p class=\"cb-mega__kicker\">Shop Craft Boat trade</p>
            <h2>Find the right pieces for your next buy.</h2>
            <a class=\"cb-mega__more\" href=\"{{ nav.catalog }}\">View the full catalog →</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Shop by edit</p>
            <a href=\"{{ nav.new }}\">New arrivals</a>
            <a href=\"{{ nav.favourites }}\">Buyer favourites</a>
            <a href=\"{{ nav.ready }}\">Ready to ship</a>
            <a href=\"{{ nav.holiday }}\">Holiday 2026</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Shop by need</p>
            <a href=\"{{ nav.desk }}\">Refresh the desk</a>
            <a href=\"{{ nav.gifting }}\">Build a gifting table</a>
            <a href=\"{{ nav.home }}\">Add home accents</a>
            <a href=\"{{ nav.catalog }}\">Start with an assortment</a>
          </div>
          <a class=\"cb-mega__promo\" href=\"{{ nav.ready }}\" style=\"background-image:url('image/catalog/craftboat/trays.png')\">
            <span>Available now</span>
            <strong>Ready-stock lines dispatch in 3–5 days</strong>
            <em>Shop ready stock →</em>
          </a>
        </div>
      </div>
    </div>
    <div class=\"cb-nav__item\">
      <a href=\"{{ nav.catalog }}\">Departments <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__depts\">
          <div>
            <p class=\"cb-mega__kicker\">Browse departments</p>
            <h2>From paper objects to soft goods.</h2>
            <p>Products can live in more than one useful buying category.</p>
          </div>
          <div>
            <p class=\"cb-mega__label\">Home &amp; desk</p>
            <a href=\"{{ nav.home }}\">Home accents</a>
            <a href=\"{{ nav.storage }}\">Storage &amp; organisation</a>
            <a href=\"{{ nav.home }}\">Kitchen &amp; tabletop</a>
            <a href=\"{{ nav.textiles }}\">Textiles &amp; bedding</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Paper &amp; gifting</p>
            <a href=\"{{ nav.stationery }}\">Stationery &amp; writing</a>
            <a href=\"{{ nav.gifting }}\">Gift wrapping</a>
            <a href=\"{{ nav.desk }}\">Craft materials</a>
            <a href=\"{{ nav.textiles }}\">Accessories &amp; pouches</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Textile &amp; seasonal</p>
            <a href=\"{{ nav.home }}\">Frames &amp; decorative objects</a>
            <a href=\"{{ nav.storage }}\">Desk organisation</a>
            <a href=\"{{ nav.home }}\">Lighting &amp; lampshades</a>
            <a href=\"{{ nav.seasonal }}\">Holiday keepsakes</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"cb-nav__item\">
      <a href=\"{{ collections }}\">Collections <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__cards\">
          <div>
            <p class=\"cb-mega__kicker\">Editorial collections</p>
            <h2>Buy a cohesive colour and material story.</h2>
            <a class=\"cb-mega__more\" href=\"{{ collections }}\">Explore all collections →</a>
          </div>
          <a class=\"cb-mega__card\" href=\"{{ nav.saffron }}\" style=\"background-image:url('image/catalog/craftboat/pouch.png')\">
            <strong>Saffron Valley</strong>
            <em>Florals and sun-warmed block print.</em>
          </a>
          <a class=\"cb-mega__card\" href=\"{{ nav.marbled }}\" style=\"background-image:url('image/catalog/craftboat/trays.png')\">
            <strong>Marbled Stories</strong>
            <em>One-of-one colour pulled by hand.</em>
          </a>
          <a class=\"cb-mega__card\" href=\"{{ nav.holiday }}\" style=\"background-image:url('image/catalog/craftboat/collection-holiday.png')\">
            <strong>Holiday 2026</strong>
            <em>Keepsake gifting for the season.</em>
          </a>
        </div>
      </div>
    </div>
    <a href=\"{{ nav.new }}\">New arrivals</a>
    <a href=\"{{ nav.favourites }}\">Bestsellers</a>
    <a href=\"{{ nav.ready }}\"><i class=\"cb-dot\"></i> Ready to ship</a>
    <div class=\"cb-nav__item\">
      <a href=\"{{ about }}\">Crafts &amp; values <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__craft\">
          <div>
            <p class=\"cb-mega__kicker\">Shop by craft</p>
            <h2>Let the making story guide the assortment.</h2>
            <a class=\"cb-mega__more\" href=\"{{ about }}\">How Craft Boat makes →</a>
          </div>
          <div class=\"cb-craft\">
            <a href=\"{{ nav.stationery }}\"><strong>Handmade paper</strong><span>Waste becomes paper. Paper becomes possibility.</span></a>
            <a href=\"{{ nav.marbled }}\"><strong>Hand marbled</strong><span>No two pulls from the marbling table are the same.</span></a>
            <a href=\"{{ nav.saffron }}\"><strong>Block printed</strong><span>Pattern, registered one colour at a time.</span></a>
            <a href=\"{{ nav.textiles }}\"><strong>Natural dyed</strong><span>Colour with a material story.</span></a>
            <a class=\"is-wide\" href=\"{{ about }}\"><strong>Made in Jaipur</strong><span>A multidisciplinary studio, close to the hands that make.</span></a>
          </div>
          <a class=\"cb-mega__promo\" href=\"{{ contact }}\" style=\"background-image:url('image/catalog/craftboat/pouch.png')\">
            <span>Made for your store</span>
            <strong>Develop a custom colour, form or finish.</strong>
            <em>Start a custom brief →</em>
          </a>
        </div>
      </div>
    </div>
    <a href=\"{{ contact }}\">Custom orders</a>
  </nav>
  </div>
  <main>
", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\header.twig");
    }
}
