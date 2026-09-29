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
  <header class=\"cb-header\">
    <a class=\"cb-logo\" href=\"";
        // line 33
        yield ($context["home"] ?? null);
        yield "\"><img src=\"catalog/view/image/craftboat/logo.svg\" alt=\"Craft Boat\"></a>
    <form class=\"cb-search\" action=\"";
        // line 34
        yield ($context["search_action"] ?? null);
        yield "\" method=\"post\">
      <label class=\"cb-search__field\">
        <img src=\"catalog/view/image/craftboat/search.svg\" alt=\"\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 37
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"Search products, SKU, material or colour\">
      </label>
      <button class=\"cb-btn cb-btn--teal\" type=\"submit\">Search</button>
    </form>
    <div class=\"cb-tools\">
      ";
        // line 42
        if ((($tmp =  !($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <a href=\"";
            yield ($context["login"] ?? null);
            yield "\">Sign in</a>
      ";
        } else {
            // line 45
            yield "        <a href=\"";
            yield ($context["account"] ?? null);
            yield "\">Account</a>
      ";
        }
        // line 47
        yield "      <a href=\"";
        yield ($context["wishlist"] ?? null);
        yield "\">Saved <span class=\"cb-pill\">";
        yield ($context["saved_count"] ?? null);
        yield "</span></a>
      <button type=\"button\" class=\"cb-tools__cart\" data-cart-open data-cart-url=\"";
        // line 48
        yield ($context["cart_drawer"] ?? null);
        yield "\">Cart <span class=\"cb-pill\">";
        yield ($context["cart_count"] ?? null);
        yield "</span></button>
      <a class=\"cb-btn cb-btn--black\" href=\"";
        // line 49
        yield ($context["register"] ?? null);
        yield "\">Apply to buy</a>
    </div>
  </header>
  <nav class=\"cb-nav\">
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 54
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 54);
        yield "\">Shop <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__shop\">
          <div>
            <p class=\"cb-mega__kicker\">Shop Craft Boat trade</p>
            <h2>Find the right pieces for your next buy.</h2>
            <a class=\"cb-mega__more\" href=\"";
        // line 60
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 60);
        yield "\">View the full catalog →</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Shop by edit</p>
            <a href=\"";
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "new", [], "any", false, false, false, 64);
        yield "\">New arrivals</a>
            <a href=\"";
        // line 65
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "favourites", [], "any", false, false, false, 65);
        yield "\">Buyer favourites</a>
            <a href=\"";
        // line 66
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "ready", [], "any", false, false, false, 66);
        yield "\">Ready to ship</a>
            <a href=\"";
        // line 67
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "holiday", [], "any", false, false, false, 67);
        yield "\">Holiday 2026</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Shop by need</p>
            <a href=\"";
        // line 71
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "desk", [], "any", false, false, false, 71);
        yield "\">Refresh the desk</a>
            <a href=\"";
        // line 72
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "gifting", [], "any", false, false, false, 72);
        yield "\">Build a gifting table</a>
            <a href=\"";
        // line 73
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 73);
        yield "\">Add home accents</a>
            <a href=\"";
        // line 74
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 74);
        yield "\">Start with an assortment</a>
          </div>
          <a class=\"cb-mega__promo\" href=\"";
        // line 76
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "ready", [], "any", false, false, false, 76);
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
        // line 85
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "catalog", [], "any", false, false, false, 85);
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
        // line 95
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 95);
        yield "\">Home accents</a>
            <a href=\"";
        // line 96
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "storage", [], "any", false, false, false, 96);
        yield "\">Storage &amp; organisation</a>
            <a href=\"";
        // line 97
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 97);
        yield "\">Kitchen &amp; tabletop</a>
            <a href=\"";
        // line 98
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "textiles", [], "any", false, false, false, 98);
        yield "\">Textiles &amp; bedding</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Paper &amp; gifting</p>
            <a href=\"";
        // line 102
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "stationery", [], "any", false, false, false, 102);
        yield "\">Stationery &amp; writing</a>
            <a href=\"";
        // line 103
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "gifting", [], "any", false, false, false, 103);
        yield "\">Gift wrapping</a>
            <a href=\"";
        // line 104
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "desk", [], "any", false, false, false, 104);
        yield "\">Craft materials</a>
            <a href=\"";
        // line 105
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "textiles", [], "any", false, false, false, 105);
        yield "\">Accessories &amp; pouches</a>
          </div>
          <div>
            <p class=\"cb-mega__label\">Textile &amp; seasonal</p>
            <a href=\"";
        // line 109
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 109);
        yield "\">Frames &amp; decorative objects</a>
            <a href=\"";
        // line 110
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "storage", [], "any", false, false, false, 110);
        yield "\">Desk organisation</a>
            <a href=\"";
        // line 111
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "home", [], "any", false, false, false, 111);
        yield "\">Lighting &amp; lampshades</a>
            <a href=\"";
        // line 112
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "seasonal", [], "any", false, false, false, 112);
        yield "\">Holiday keepsakes</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 118
        yield ($context["collections"] ?? null);
        yield "\">Collections <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__cards\">
          <div>
            <p class=\"cb-mega__kicker\">Editorial collections</p>
            <h2>Buy a cohesive colour and material story.</h2>
            <a class=\"cb-mega__more\" href=\"";
        // line 124
        yield ($context["collections"] ?? null);
        yield "\">Explore all collections →</a>
          </div>
          <a class=\"cb-mega__card\" href=\"";
        // line 126
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "saffron", [], "any", false, false, false, 126);
        yield "\" style=\"background-image:url('image/catalog/craftboat/pouch.png')\">
            <strong>Saffron Valley</strong>
            <em>Florals and sun-warmed block print.</em>
          </a>
          <a class=\"cb-mega__card\" href=\"";
        // line 130
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "marbled", [], "any", false, false, false, 130);
        yield "\" style=\"background-image:url('image/catalog/craftboat/trays.png')\">
            <strong>Marbled Stories</strong>
            <em>One-of-one colour pulled by hand.</em>
          </a>
          <a class=\"cb-mega__card\" href=\"";
        // line 134
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "holiday", [], "any", false, false, false, 134);
        yield "\" style=\"background-image:url('image/catalog/craftboat/collection-holiday.png')\">
            <strong>Holiday 2026</strong>
            <em>Keepsake gifting for the season.</em>
          </a>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 141
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "new", [], "any", false, false, false, 141);
        yield "\">New arrivals</a>
    <a href=\"";
        // line 142
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "favourites", [], "any", false, false, false, 142);
        yield "\">Bestsellers</a>
    <a href=\"";
        // line 143
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "ready", [], "any", false, false, false, 143);
        yield "\"><i class=\"cb-dot\"></i> Ready to ship</a>
    <div class=\"cb-nav__item\">
      <a href=\"";
        // line 145
        yield ($context["about"] ?? null);
        yield "\">Crafts &amp; values <img src=\"catalog/view/image/craftboat/plus.svg\" alt=\"\"></a>
      <div class=\"cb-mega\">
        <div class=\"cb-mega__craft\">
          <div>
            <p class=\"cb-mega__kicker\">Shop by craft</p>
            <h2>Let the making story guide the assortment.</h2>
            <a class=\"cb-mega__more\" href=\"";
        // line 151
        yield ($context["about"] ?? null);
        yield "\">How Craft Boat makes →</a>
          </div>
          <div class=\"cb-craft\">
            <a href=\"";
        // line 154
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "stationery", [], "any", false, false, false, 154);
        yield "\"><strong>Handmade paper</strong><span>Waste becomes paper. Paper becomes possibility.</span></a>
            <a href=\"";
        // line 155
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "marbled", [], "any", false, false, false, 155);
        yield "\"><strong>Hand marbled</strong><span>No two pulls from the marbling table are the same.</span></a>
            <a href=\"";
        // line 156
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "saffron", [], "any", false, false, false, 156);
        yield "\"><strong>Block printed</strong><span>Pattern, registered one colour at a time.</span></a>
            <a href=\"";
        // line 157
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["nav"] ?? null), "textiles", [], "any", false, false, false, 157);
        yield "\"><strong>Natural dyed</strong><span>Colour with a material story.</span></a>
            <a class=\"is-wide\" href=\"";
        // line 158
        yield ($context["about"] ?? null);
        yield "\"><strong>Made in Jaipur</strong><span>A multidisciplinary studio, close to the hands that make.</span></a>
          </div>
          <a class=\"cb-mega__promo\" href=\"";
        // line 160
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
        // line 168
        yield ($context["contact"] ?? null);
        yield "\">Custom orders</a>
  </nav>
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
        return array (  457 => 168,  446 => 160,  441 => 158,  437 => 157,  433 => 156,  429 => 155,  425 => 154,  419 => 151,  410 => 145,  405 => 143,  401 => 142,  397 => 141,  387 => 134,  380 => 130,  373 => 126,  368 => 124,  359 => 118,  350 => 112,  346 => 111,  342 => 110,  338 => 109,  331 => 105,  327 => 104,  323 => 103,  319 => 102,  312 => 98,  308 => 97,  304 => 96,  300 => 95,  287 => 85,  275 => 76,  270 => 74,  266 => 73,  262 => 72,  258 => 71,  251 => 67,  247 => 66,  243 => 65,  239 => 64,  232 => 60,  223 => 54,  215 => 49,  209 => 48,  202 => 47,  196 => 45,  190 => 43,  188 => 42,  180 => 37,  174 => 34,  170 => 33,  166 => 31,  162 => 29,  156 => 27,  154 => 26,  144 => 21,  141 => 20,  131 => 19,  119 => 18,  103 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  76 => 11,  69 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
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
      <a href=\"{{ wishlist }}\">Saved <span class=\"cb-pill\">{{ saved_count }}</span></a>
      <button type=\"button\" class=\"cb-tools__cart\" data-cart-open data-cart-url=\"{{ cart_drawer }}\">Cart <span class=\"cb-pill\">{{ cart_count }}</span></button>
      <a class=\"cb-btn cb-btn--black\" href=\"{{ register }}\">Apply to buy</a>
    </div>
  </header>
  <nav class=\"cb-nav\">
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
  <main>
", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\header.twig");
    }
}
