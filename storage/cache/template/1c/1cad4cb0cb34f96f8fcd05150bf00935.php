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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_644a93aea2f8dedd4173e470c4f34343 extends Template
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
<section class=\"cb-hero\" data-cb-banner";
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
                yield "    <div class=\"cb-hero__slide";
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
        yield "  <div class=\"cb-hero__shade\"></div>
  <div class=\"cb-hero__copy\">
    <p class=\"cb-kicker\">craft boat trade</p>
    <h1>Soulful objects, made to <em>keep.</em></h1>
    <p>Handmade paper, textile and home objects for thoughtful stores and collected interiors.</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"";
        // line 14
        yield ($context["shop"] ?? null);
        yield "\">Shop wholesale</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"index.php?route=account/register&amp;language=en-gb&amp;account=trade\">Apply for a Trade Account</a>
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
        yield "  <a class=\"cb-message\" href=\"index.php?route=information/contact&amp;language=en-gb\">Message Craft Boat <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
</section>

<nav class=\"cb-shopbar\" aria-label=\"Start shopping\">
  <a href=\"";
        // line 31
        yield ($context["shop"] ?? null);
        yield "\">Start Shopping</a>
  <a href=\"";
        // line 32
        yield ($context["arrivals"] ?? null);
        yield "\">New Arrivals <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"";
        // line 33
        yield ($context["bestsellers_link"] ?? null);
        yield "\">Bestsellers <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"";
        // line 34
        yield ($context["ready_link"] ?? null);
        yield "\">Ready to ship <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"";
        // line 35
        yield ($context["holiday"] ?? null);
        yield "\">Holiday 2026 <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"";
        // line 36
        yield ($context["shop"] ?? null);
        yield "\">All Products <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
</nav>

<section class=\"cb-section\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Shop by category</p>
      <h2>Find what your store needs.</h2>
    </div>
    <p>Browse by product type without needing to know the editorial collection.</p>
  </div>
  <div class=\"cb-cats\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 49
            yield "    <a class=\"cb-cat\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 49);
            yield "\"><span class=\"cb-cat__photo\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 49);
            yield "\" alt=\"\"></span><span class=\"cb-cat__label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
            yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "  </div>
</section>

<section class=\"cb-section cb-section--tight\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Explore categories</p>
      <h2>Build your assortment by department.</h2>
    </div>
    <p>Adapted from Craft Boat’s real Faire taxonomy, then simplified for a single-brand buying journey.</p>
  </div>
  <div class=\"cb-depts\" id=\"cb-depts\">
    <a class=\"cb-dept\" href=\"";
        // line 63
        yield ($context["dept_home"] ?? null);
        yield "\" style=\"background-image:url('catalog/view/image/craftboat/dept-home.png')\">
      <h3>Home accents</h3>
      <p>Hand-finished trays, frames and small objects with a strong shelf story.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-dept\" href=\"";
        // line 68
        yield ($context["dept_storage"] ?? null);
        yield "\" style=\"background-image:url('catalog/view/image/craftboat/dept-storage.png')\">
      <h3>Storage &amp; organisation</h3>
      <p>Keepsake boxes, desk trays, pen pots and pouches for useful displays.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-dept\" href=\"";
        // line 73
        yield ($context["dept_stationery"] ?? null);
        yield "\" style=\"background-image:url('catalog/view/image/craftboat/dept-stationery.png')\">
      <h3>Stationery &amp; writing</h3>
      <p>Handmade paper, journals, notebooks and paper bundles for considered gifting.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
  </div>
  <div class=\"cb-depts__dots\" hidden>
    <button type=\"button\" class=\"is-on\" aria-label=\"Home accents\"></button>
    <button type=\"button\" aria-label=\"Storage and organisation\"></button>
    <button type=\"button\" aria-label=\"Stationery and writing\"></button>
  </div>
  <p class=\"cb-more\">More to explore</p>
  <div class=\"cb-chips\">
    <a href=\"";
        // line 86
        yield ($context["dept_home"] ?? null);
        yield "\">Home accents</a>
    <a href=\"";
        // line 87
        yield ($context["dept_storage"] ?? null);
        yield "\">Storage &amp; organisation</a>
    <a href=\"";
        // line 88
        yield ($context["dept_home"] ?? null);
        yield "\">Kitchen &amp; tabletop</a>
    <a href=\"";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["categories"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[2] ?? null) : null), "href", [], "any", false, false, false, 89);
        yield "\">Textiles &amp; bedding</a>
    <a href=\"";
        // line 90
        yield ($context["dept_stationery"] ?? null);
        yield "\">Stationery &amp; writing</a>
    <a href=\"";
        // line 91
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["categories"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[4] ?? null) : null), "href", [], "any", false, false, false, 91);
        yield "\">Gift wrapping</a>
    <a href=\"";
        // line 92
        yield ($context["dept_stationery"] ?? null);
        yield "\">Craft materials</a>
    <a href=\"";
        // line 93
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["categories"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[2] ?? null) : null), "href", [], "any", false, false, false, 93);
        yield "\">Accessories &amp; pouches</a>
    <a href=\"";
        // line 94
        yield ($context["dept_home"] ?? null);
        yield "\">Frames &amp; decorative objects</a>
    <a href=\"";
        // line 95
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["categories"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[0] ?? null) : null), "href", [], "any", false, false, false, 95);
        yield "\">Desk organisation</a>
    <a href=\"";
        // line 96
        yield ($context["dept_home"] ?? null);
        yield "\">Lighting &amp; lampshades</a>
    <a href=\"";
        // line 97
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["categories"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[5] ?? null) : null), "href", [], "any", false, false, false, 97);
        yield "\">Holiday keepsakes</a>
  </div>
</section>

<section class=\"cb-section\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Buyer favourites</p>
      <h2>Best sellers</h2>
    </div>
    <p>Product names and suggested retail remain visible. Sign in to unlock wholesale pricing and quick ordering.</p>
  </div>
  <div class=\"cb-grid\">
    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bestsellers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 111
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 111);
            yield "\">
      <span class=\"cb-badge\">";
            // line 112
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 112);
            yield "</span>
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"";
            // line 113
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
            yield "\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"";
            // line 114
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 114);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 116
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 116);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 116);
            yield "</span></div>
        <h3>";
            // line 117
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 118
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 118);
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " cb-ship--wait";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 121);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\"><span>";
            // line 123
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<s class=\"cb-card__was\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 123);
                    yield "</s>";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 123);
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
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "  </div>
</section>

<section class=\"cb-catalog\">
  <p class=\"cb-kicker\">Explore full catalog</p>
  <h2 class=\"cb-display\">Discover the full collection with wholesale pricing.</h2>
  <a class=\"cb-btn cb-btn--black\" href=\"";
        // line 133
        yield ($context["shop"] ?? null);
        yield "\">View all products</a>
</section>

<section class=\"cb-peach\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Buy by assortment</p>
      <h2>Build a stronger shelf, faster.</h2>
    </div>
    <p class=\"cb-muted\" style=\"color:#202020\">Curated case-pack plans turn product discovery into a viable wholesale order. Review the exact units and values before adding.</p>
  </div>
  <div class=\"cb-assort\">
    <article>
      <div class=\"cb-thumbs\"><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span></div>
      <div class=\"cb-assort__body\">
        <p class=\"cb-green\">dispatch 3–5 days</p>
        <p>6 proven lines · 32 units</p>
        <h3>Opening Edit</h3>
        <p class=\"cb-muted\">A balanced first order across desk, gifting, textile and home.</p>
        <div class=\"cb-row\"><span>Wholesale</span><b>";
        // line 152
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Locked";
        } else {
            yield "Sign in";
        }
        yield "</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1860</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"";
        // line 155
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["account"] ?? null)) : (($context["login"] ?? null)));
        yield "\">";
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "View your account";
        } else {
            yield "Sign in to add assortment";
        }
        yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    </article>
    <article>
      <div class=\"cb-thumbs\"><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span></div>
      <div class=\"cb-assort__body\">
        <p class=\"cb-green\">dispatch 3–5 days</p>
        <p>4 lines · 20 units</p>
        <h3>Ready-Stock Refill</h3>
        <p class=\"cb-muted\">In-stock bestsellers for a fast floor refresh or top-up order.</p>
        <div class=\"cb-row\"><span>Wholesale</span><b>";
        // line 165
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Locked";
        } else {
            yield "Sign in";
        }
        yield "</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1176</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"";
        // line 168
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["account"] ?? null)) : (($context["login"] ?? null)));
        yield "\">";
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "View your account";
        } else {
            yield "Sign in to add assortment";
        }
        yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    </article>
    <article>
      <div class=\"cb-thumbs\"><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span></div>
      <div class=\"cb-assort__body\">
        <p class=\"cb-green\">dispatch 3–5 days</p>
        <p>4 lines · 20 giftable units</p>
        <h3>Gifting Table</h3>
        <p class=\"cb-muted\">Easy-to-merchandise paper and textile pieces for gifting moments.</p>
        <div class=\"cb-row\"><span>Wholesale</span><b>";
        // line 178
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Locked";
        } else {
            yield "Sign in";
        }
        yield "</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1860</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"";
        // line 181
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["account"] ?? null)) : (($context["login"] ?? null)));
        yield "\">";
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "View your account";
        } else {
            yield "Sign in to add assortment";
        }
        yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    </article>
  </div>
</section>

<section class=\"cb-section\">
  <div>
    <p class=\"cb-kicker\">Buy by assortment</p>
    <h2 class=\"cb-display\" style=\"max-width:658px\">Choose the story your customer will take home.</h2>
    <div class=\"cb-tabs\">
      <a class=\"is-on\" href=\"index.php?route=product/special&amp;language=en-gb\">Handmade paper</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Hand marbled</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Block printed</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Natural dyed</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Made in Jaipur</a>
    </div>
  </div>
  <div class=\"cb-story\">
    <div class=\"cb-story__photo\" style=\"background-image:url('catalog/view/image/craftboat/paper-mill.png')\"></div>
    <div class=\"cb-story__copy\">
      <p class=\"cb-kicker\">Handmade paper</p>
      <h2 class=\"cb-display\">Waste becomes paper. Paper becomes possibility.</h2>
      <p class=\"cb-muted\">Cotton textile offcuts are pulped, pulled into sheets and transformed into journals, wrapping paper and rigid objects by hand.</p>
      <p><a class=\"cb-btn cb-btn--line\" href=\"";
        // line 205
        yield ($context["paper"] ?? null);
        yield "\">Shop handmade paper</a></p>
    </div>
  </div>
</section>

<section class=\"cb-ready\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">In stock in Jaipur</p>
      <h2>Ready to Ship</h2>
    </div>
    <p>Available now and expected to dispatch within 3–5 days. Approved buyers can see quantities and add full case packs immediately.</p>
  </div>
  <div class=\"cb-grid\">
    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ready"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 220
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 220);
            yield "\">
      <span class=\"cb-badge\">ready</span>
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"";
            // line 222
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 222);
            yield "\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"";
            // line 223
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 223);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 223);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 225
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 225);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 225);
            yield "</span></div>
        <h3>";
            // line 226
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 226);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 227
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 227);
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship\">";
            // line 230
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 230);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\"><span>";
            // line 232
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<s class=\"cb-card__was\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 232);
                    yield "</s>";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 232);
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
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "  </div>
  <div class=\"cb-center-btn\"><a class=\"cb-btn cb-btn--line\" href=\"";
        // line 237
        yield ($context["shop"] ?? null);
        yield "\">Shop all ready stock</a></div>
</section>

<section class=\"cb-cream\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">The direct difference</p>
      <h2>Made for our stockists.</h2>
    </div>
    <p>A closer relationship with the Craft Boat studio—built around access, support and useful trade resources.</p>
  </div>
  <div class=\"cb-steps\">
    <article><p class=\"cb-num\">01</p><h3>Early Access</h3><p class=\"cb-muted\">Selected collections available first through Craft Boat Trade.</p></article>
    <article><p class=\"cb-num\">02</p><h3>Custom Possibilities</h3><p class=\"cb-muted\">Develop colours, patterns, dimensions or packaging for larger programs.</p></article>
    <article><p class=\"cb-num\">03</p><h3>Direct Studio Support</h3><p class=\"cb-muted\">Work directly with our Jaipur design and production team.</p></article>
    <article><p class=\"cb-num\">04</p><h3>Stockist Resources</h3><p class=\"cb-muted\">Access approved product imagery, craft stories and merchandising material.</p></article>
  </div>
</section>

<section class=\"cb-confidence\">
  <div>
    <p class=\"cb-kicker\">Buy Craft Boat with confidence</p>
    <h2 class=\"cb-display\">Know the numbers before the cartons leave Jaipur.</h2>
    <ul>
      <li><h3>Pack-safe ordering</h3><p class=\"cb-muted\">Every quantity respects the product’s MOQ and case pack.</p></li>
      <li><h3>Clear availability</h3><p class=\"cb-muted\">Ready stock and made-to-order lines carry distinct dispatch windows.</p></li>
      <li><h3>One place to return</h3><p class=\"cb-muted\">Orders, invoices, saved products, tracking and reorder stay in your account.</p></li>
    </ul>
    <a class=\"cb-btn cb-btn--line\" href=\"index.php?route=account/register&amp;language=en-gb&amp;account=trade\">Apply to buy</a>
  </div>
  <div class=\"cb-photos\">
    <div class=\"tall\" style=\"background-image:url('catalog/view/image/craftboat/trays.png')\"></div>
    <div class=\"sq\" style=\"background-image:url('catalog/view/image/craftboat/pouch.png')\"></div>
    <div class=\"sq\" style=\"background-image:url('catalog/view/image/craftboat/shade.png')\"></div>
  </div>
</section>

<section class=\"cb-collections\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Shop by collection</p>
      <h2>Stories for cohesive shelves.</h2>
    </div>
    <p>Editorial worlds remain distinct from practical product categories.</p>
  </div>
  <div class=\"cb-collections__grid\">
    <a class=\"cb-tile\" href=\"index.php?route=product/collection&amp;language=en-gb&amp;collection=saffron\" style=\"background-image:url('catalog/view/image/craftboat/collection-saffron.png')\">
      <span>01</span><h3>Saffron valley</h3><p>Floral and sun-warmed block print.</p><span class=\"cb-btn cb-btn--glass\">Explore Collection <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-tile\" href=\"index.php?route=product/collection&amp;language=en-gb&amp;collection=marbled\" style=\"background-image:url('catalog/view/image/craftboat/collection-marbled.png')\">
      <span>02</span><h3>Marbled Stories</h3><p>One-of-one colour pulled by hand.</p><span class=\"cb-btn cb-btn--glass\">Explore Collection <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-tile\" href=\"index.php?route=product/collection&amp;language=en-gb&amp;collection=holiday\" style=\"background-image:url('catalog/view/image/craftboat/collection-holiday.png')\">
      <span>03</span><h3>Holiday 2026</h3><p>Keepsake gifting for the season.</p><span class=\"cb-btn cb-btn--glass\">Explore Collection <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
  </div>
</section>

<section class=\"cb-section\" style=\"text-align:center\">
  <p class=\"cb-kicker\">Precious material stories</p>
  <h2 class=\"cb-display\">Waste becomes paper. Paper becomes story.</h2>
  <p class=\"cb-muted\" style=\"margin:16px auto 0;max-width:551px\">In our Jaipur studio, discarded cotton textile is transformed into paper, then marbled, block printed, bound and shaped by hand.</p>
</section>
<div class=\"cb-story__photo\" style=\"height:420px;background-image:url('catalog/view/image/craftboat/paper-mill.png')\"></div>

<section class=\"cb-desk\">
  <div class=\"cb-desk__photo\" style=\"background-image:url('catalog/view/image/craftboat/desk-left.png')\"></div>
  <div class=\"cb-desk__copy\">
    <p class=\"cb-kicker\">A curated paper world</p>
    <h2>The perfect <em>desk story</em> for your store, right this way.</h2>
    <a class=\"cb-btn cb-btn--black\" href=\"index.php?route=product/special&amp;language=en-gb\">Shop paper and desk →</a>
  </div>
  <div class=\"cb-desk__photo\" style=\"background-image:url('catalog/view/image/craftboat/desk-right.png')\"></div>
</section>

<section class=\"cb-custom\">
  <div class=\"cb-custom__photo\" style=\"background-image:url('catalog/view/image/craftboat/custom.png')\"></div>
  <div class=\"cb-custom__copy\">
    <p class=\"cb-kicker\">Made for your store</p>
    <h2 class=\"cb-display\">Your idea, <em>shaped by hand.</em></h2>
    <p>Share a product family, quantity, dimensions, colours, target price and delivery date. Our Jaipur studio will respond with feasibility and next steps.</p>
    <p><a class=\"cb-btn cb-btn--black\" href=\"index.php?route=information/contact&amp;language=en-gb\">Start a custom brief</a></p>
  </div>
</section>

<section class=\"cb-reviews\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Verified wholesale feedback</p>
      <h2>Loved by Craft Boat stockists.</h2>
    </div>
    <p>Ratings and excerpts below are clearly attributed to Craft Boat’s current Faire brand page.</p>
  </div>
  <div class=\"cb-scores\">
    <div><strong>5.0</strong><span>Brand rating · 36 reviews</span></div>
    <div><strong>5.0</strong><span>Product quality</span></div>
    <div><strong>4.8</strong><span>Fulfilment</span></div>
    <div><strong>5.0</strong><span>Communication</span></div>
    <div><a href=\"https://www.faire.com/\" target=\"_blank\" rel=\"noopener\">View all on Faire ↗</a></div>
  </div>
  <div class=\"cb-quotes\">
    <article><p>“Everything is so lovely! Quality is top notch.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
    <article><p>“All the products we ordered are beautiful! Very pleased with the quality.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
    <article><p>“All the products we ordered are beautiful! Very pleased with the quality.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
    <article><p>“Everything is so lovely! Quality is top notch.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
  </div>
</section>

<section class=\"cb-notes\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Craft Boat newspaper</p>
      <h2>Notes for thoughtful retail.</h2>
    </div>
    <a class=\"cb-btn cb-btn--line\" href=\"";
        // line 351
        yield ($context["contact"] ?? null);
        yield "\">Suggest a stockist topic →</a>
  </div>
  <div class=\"cb-notes__grid\">
    <article>
      <img src=\"catalog/view/image/craftboat/note-1.png\" alt=\"\">
      <h3>Building a paper-led gifting table</h3>
      <p class=\"cb-muted\">Pair useful price points with one strong material story.</p>
      <a class=\"cb-link\" href=\"";
        // line 358
        yield ($context["contact"] ?? null);
        yield "\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
    <article>
      <img src=\"catalog/view/image/craftboat/note-2.png\" alt=\"\">
      <h3>How to merchandise one-of-one marbling</h3>
      <p class=\"cb-muted\">Let colour variation work as the display, not a complication.</p>
      <a class=\"cb-link\" href=\"";
        // line 364
        yield ($context["contact"] ?? null);
        yield "\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
    <article>
      <img src=\"catalog/view/image/craftboat/note-3.png\" alt=\"\">
      <h3>Planning a ready-stock refill</h3>
      <p class=\"cb-muted\">Use availability, margin and case cost to make a fast top-up decision.</p>
      <a class=\"cb-link\" href=\"";
        // line 370
        yield ($context["contact"] ?? null);
        yield "\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
  </div>
</section>

<section class=\"cb-works\">
  <img class=\"cb-seal\" src=\"catalog/view/image/craftboat/seal-lg.svg\" alt=\"Craft Boat\">
  <p class=\"cb-kicker\">How wholesale works</p>
  <h2 class=\"cb-display\">A clear path from <em>hello to reorder.</em></h2>
  <div class=\"cb-works__grid\">
    <article><p class=\"cb-num\">01</p><h3>Apply</h3><p class=\"cb-muted\">Share your store details once. We review most accounts within two business days.</p></article>
    <article><p class=\"cb-num\">02</p><h3>Shop your terms</h3><p class=\"cb-muted\">See buyer-specific prices, margin, minimums and prepaid benefits as you browse.</p></article>
    <article><p class=\"cb-num\">03</p><h3>Order &amp; stay in touch</h3><p class=\"cb-muted\">Build an order, pay securely and keep product conversations attached to it.</p></article>
  </div>
  <a class=\"cb-btn cb-btn--black\" href=\"index.php?route=account/register&amp;language=en-gb&amp;account=wholesale\">Open a wholesale account</a>
</section>

<section class=\"cb-retail\">
  <img class=\"cb-retail__mark\" src=\"catalog/view/image/craftboat/pattern.svg\" alt=\"\">
  <div>
    <p class=\"cb-kicker\">Shopping for yourself?</p>
    <h2 class=\"cb-display\">Buy individual pieces from our retail store.</h2>
  </div>
  <div>
    <p>Shop retail at</p>
    <a class=\"cb-btn cb-btn--white\" href=\"https://www.seedsofanaar.com/\" target=\"_blank\" rel=\"noopener\">Seeds of Anaar <img src=\"catalog/view/image/craftboat/external.svg\" alt=\"\"></a>
  </div>
</section>
<script>
(function () {
  var track = document.getElementById('cb-depts');
  var dots = document.querySelectorAll('.cb-depts__dots button');
  if (!track || !dots.length || !window.matchMedia('(max-width: 700px)').matches) return;
  var slides = track.querySelectorAll('.cb-dept');
  function update() {
    var index = Math.round(track.scrollLeft / track.clientWidth);
    dots.forEach(function (dot, i) { dot.classList.toggle('is-on', i === index); });
  }
  track.addEventListener('scroll', update, { passive: true });
  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () {
      var left = slides[i].getBoundingClientRect().left - track.getBoundingClientRect().left + track.scrollLeft;
      track.scrollTo({ left: left, behavior: 'smooth' });
    });
  });
})();
</script>
";
        // line 417
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
        return "catalog/view/template/common/home.twig";
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
        return array (  819 => 417,  769 => 370,  760 => 364,  751 => 358,  741 => 351,  624 => 237,  621 => 236,  600 => 232,  595 => 230,  589 => 227,  585 => 226,  579 => 225,  572 => 223,  568 => 222,  562 => 220,  558 => 219,  541 => 205,  508 => 181,  498 => 178,  479 => 168,  469 => 165,  450 => 155,  440 => 152,  418 => 133,  410 => 127,  389 => 123,  380 => 121,  374 => 118,  370 => 117,  364 => 116,  357 => 114,  353 => 113,  349 => 112,  344 => 111,  340 => 110,  324 => 97,  320 => 96,  316 => 95,  312 => 94,  308 => 93,  304 => 92,  300 => 91,  296 => 90,  292 => 89,  288 => 88,  284 => 87,  280 => 86,  264 => 73,  256 => 68,  248 => 63,  234 => 51,  221 => 49,  217 => 48,  202 => 36,  198 => 35,  194 => 34,  190 => 33,  186 => 32,  182 => 31,  176 => 27,  172 => 25,  168 => 23,  147 => 21,  130 => 20,  127 => 19,  125 => 18,  118 => 14,  110 => 8,  107 => 7,  80 => 5,  62 => 4,  60 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<section class=\"cb-hero\" data-cb-banner{% if banners|length == 1 %} style=\"--cb-banner:url('{{ banners[0].image }}');{% if banners[0].mobile %}--cb-banner-mobile:url('{{ banners[0].mobile }}');{% endif %}\"{% endif %}>
  {% if banners|length > 1 %}
    {% for banner in banners %}
    <div class=\"cb-hero__slide{% if loop.first %} is-on{% endif %}\" style=\"--cb-banner:url('{{ banner.image }}');{% if banner.mobile %}--cb-banner-mobile:url('{{ banner.mobile }}');{% endif %}\"></div>
    {% endfor %}
  {% endif %}
  <div class=\"cb-hero__shade\"></div>
  <div class=\"cb-hero__copy\">
    <p class=\"cb-kicker\">craft boat trade</p>
    <h1>Soulful objects, made to <em>keep.</em></h1>
    <p>Handmade paper, textile and home objects for thoughtful stores and collected interiors.</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"{{ shop }}\">Shop wholesale</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"index.php?route=account/register&amp;language=en-gb&amp;account=trade\">Apply for a Trade Account</a>
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
  <a class=\"cb-message\" href=\"index.php?route=information/contact&amp;language=en-gb\">Message Craft Boat <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
</section>

<nav class=\"cb-shopbar\" aria-label=\"Start shopping\">
  <a href=\"{{ shop }}\">Start Shopping</a>
  <a href=\"{{ arrivals }}\">New Arrivals <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"{{ bestsellers_link }}\">Bestsellers <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"{{ ready_link }}\">Ready to ship <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"{{ holiday }}\">Holiday 2026 <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"{{ shop }}\">All Products <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
</nav>

<section class=\"cb-section\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Shop by category</p>
      <h2>Find what your store needs.</h2>
    </div>
    <p>Browse by product type without needing to know the editorial collection.</p>
  </div>
  <div class=\"cb-cats\">
    {% for category in categories %}
    <a class=\"cb-cat\" href=\"{{ category.href }}\"><span class=\"cb-cat__photo\"><img src=\"{{ category.image }}\" alt=\"\"></span><span class=\"cb-cat__label\">{{ category.name }} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span></a>
    {% endfor %}
  </div>
</section>

<section class=\"cb-section cb-section--tight\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Explore categories</p>
      <h2>Build your assortment by department.</h2>
    </div>
    <p>Adapted from Craft Boat’s real Faire taxonomy, then simplified for a single-brand buying journey.</p>
  </div>
  <div class=\"cb-depts\" id=\"cb-depts\">
    <a class=\"cb-dept\" href=\"{{ dept_home }}\" style=\"background-image:url('catalog/view/image/craftboat/dept-home.png')\">
      <h3>Home accents</h3>
      <p>Hand-finished trays, frames and small objects with a strong shelf story.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-dept\" href=\"{{ dept_storage }}\" style=\"background-image:url('catalog/view/image/craftboat/dept-storage.png')\">
      <h3>Storage &amp; organisation</h3>
      <p>Keepsake boxes, desk trays, pen pots and pouches for useful displays.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-dept\" href=\"{{ dept_stationery }}\" style=\"background-image:url('catalog/view/image/craftboat/dept-stationery.png')\">
      <h3>Stationery &amp; writing</h3>
      <p>Handmade paper, journals, notebooks and paper bundles for considered gifting.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
  </div>
  <div class=\"cb-depts__dots\" hidden>
    <button type=\"button\" class=\"is-on\" aria-label=\"Home accents\"></button>
    <button type=\"button\" aria-label=\"Storage and organisation\"></button>
    <button type=\"button\" aria-label=\"Stationery and writing\"></button>
  </div>
  <p class=\"cb-more\">More to explore</p>
  <div class=\"cb-chips\">
    <a href=\"{{ dept_home }}\">Home accents</a>
    <a href=\"{{ dept_storage }}\">Storage &amp; organisation</a>
    <a href=\"{{ dept_home }}\">Kitchen &amp; tabletop</a>
    <a href=\"{{ categories[2].href }}\">Textiles &amp; bedding</a>
    <a href=\"{{ dept_stationery }}\">Stationery &amp; writing</a>
    <a href=\"{{ categories[4].href }}\">Gift wrapping</a>
    <a href=\"{{ dept_stationery }}\">Craft materials</a>
    <a href=\"{{ categories[2].href }}\">Accessories &amp; pouches</a>
    <a href=\"{{ dept_home }}\">Frames &amp; decorative objects</a>
    <a href=\"{{ categories[0].href }}\">Desk organisation</a>
    <a href=\"{{ dept_home }}\">Lighting &amp; lampshades</a>
    <a href=\"{{ categories[5].href }}\">Holiday keepsakes</a>
  </div>
</section>

<section class=\"cb-section\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Buyer favourites</p>
      <h2>Best sellers</h2>
    </div>
    <p>Product names and suggested retail remain visible. Sign in to unlock wholesale pricing and quick ordering.</p>
  </div>
  <div class=\"cb-grid\">
    {% for product in bestsellers %}
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
    {% endfor %}
  </div>
</section>

<section class=\"cb-catalog\">
  <p class=\"cb-kicker\">Explore full catalog</p>
  <h2 class=\"cb-display\">Discover the full collection with wholesale pricing.</h2>
  <a class=\"cb-btn cb-btn--black\" href=\"{{ shop }}\">View all products</a>
</section>

<section class=\"cb-peach\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Buy by assortment</p>
      <h2>Build a stronger shelf, faster.</h2>
    </div>
    <p class=\"cb-muted\" style=\"color:#202020\">Curated case-pack plans turn product discovery into a viable wholesale order. Review the exact units and values before adding.</p>
  </div>
  <div class=\"cb-assort\">
    <article>
      <div class=\"cb-thumbs\"><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-paper.png\" alt=\"\"></span></div>
      <div class=\"cb-assort__body\">
        <p class=\"cb-green\">dispatch 3–5 days</p>
        <p>6 proven lines · 32 units</p>
        <h3>Opening Edit</h3>
        <p class=\"cb-muted\">A balanced first order across desk, gifting, textile and home.</p>
        <div class=\"cb-row\"><span>Wholesale</span><b>{% if logged %}Locked{% else %}Sign in{% endif %}</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1860</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"{{ logged ? account : login }}\">{% if logged %}View your account{% else %}Sign in to add assortment{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    </article>
    <article>
      <div class=\"cb-thumbs\"><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-textiles.png\" alt=\"\"></span></div>
      <div class=\"cb-assort__body\">
        <p class=\"cb-green\">dispatch 3–5 days</p>
        <p>4 lines · 20 units</p>
        <h3>Ready-Stock Refill</h3>
        <p class=\"cb-muted\">In-stock bestsellers for a fast floor refresh or top-up order.</p>
        <div class=\"cb-row\"><span>Wholesale</span><b>{% if logged %}Locked{% else %}Sign in{% endif %}</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1176</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"{{ logged ? account : login }}\">{% if logged %}View your account{% else %}Sign in to add assortment{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    </article>
    <article>
      <div class=\"cb-thumbs\"><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span><span><img src=\"catalog/view/image/craftboat/cat-home.png\" alt=\"\"></span></div>
      <div class=\"cb-assort__body\">
        <p class=\"cb-green\">dispatch 3–5 days</p>
        <p>4 lines · 20 giftable units</p>
        <h3>Gifting Table</h3>
        <p class=\"cb-muted\">Easy-to-merchandise paper and textile pieces for gifting moments.</p>
        <div class=\"cb-row\"><span>Wholesale</span><b>{% if logged %}Locked{% else %}Sign in{% endif %}</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1860</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"{{ logged ? account : login }}\">{% if logged %}View your account{% else %}Sign in to add assortment{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
      </div>
    </article>
  </div>
</section>

<section class=\"cb-section\">
  <div>
    <p class=\"cb-kicker\">Buy by assortment</p>
    <h2 class=\"cb-display\" style=\"max-width:658px\">Choose the story your customer will take home.</h2>
    <div class=\"cb-tabs\">
      <a class=\"is-on\" href=\"index.php?route=product/special&amp;language=en-gb\">Handmade paper</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Hand marbled</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Block printed</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Natural dyed</a>
      <a href=\"index.php?route=product/special&amp;language=en-gb\">Made in Jaipur</a>
    </div>
  </div>
  <div class=\"cb-story\">
    <div class=\"cb-story__photo\" style=\"background-image:url('catalog/view/image/craftboat/paper-mill.png')\"></div>
    <div class=\"cb-story__copy\">
      <p class=\"cb-kicker\">Handmade paper</p>
      <h2 class=\"cb-display\">Waste becomes paper. Paper becomes possibility.</h2>
      <p class=\"cb-muted\">Cotton textile offcuts are pulped, pulled into sheets and transformed into journals, wrapping paper and rigid objects by hand.</p>
      <p><a class=\"cb-btn cb-btn--line\" href=\"{{ paper }}\">Shop handmade paper</a></p>
    </div>
  </div>
</section>

<section class=\"cb-ready\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">In stock in Jaipur</p>
      <h2>Ready to Ship</h2>
    </div>
    <p>Available now and expected to dispatch within 3–5 days. Approved buyers can see quantities and add full case packs immediately.</p>
  </div>
  <div class=\"cb-grid\">
    {% for product in ready %}
    <a class=\"cb-card\" href=\"{{ product.href }}\">
      <span class=\"cb-badge\">ready</span>
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"{{ product.product_id }}\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
      <div>
        <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.sku }}</span></div>
        <h3>{{ product.name }}</h3>
        <p class=\"cb-collection\">{{ product.collection }}</p>
      </div>
      <div>
        <p class=\"cb-ship\">{{ product.ship }}</p>
        <hr>
        <span class=\"cb-card__foot\"><span>{% if product.role_price %}{% if product.role_base %}<s class=\"cb-card__was\">{{ product.role_base }}</s>{% endif %}{{ product.role_price }}{% elseif logged %}Pricing locked for this account{% else %}Sign in to view pricing{% endif %}</span> <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
    {% endfor %}
  </div>
  <div class=\"cb-center-btn\"><a class=\"cb-btn cb-btn--line\" href=\"{{ shop }}\">Shop all ready stock</a></div>
</section>

<section class=\"cb-cream\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">The direct difference</p>
      <h2>Made for our stockists.</h2>
    </div>
    <p>A closer relationship with the Craft Boat studio—built around access, support and useful trade resources.</p>
  </div>
  <div class=\"cb-steps\">
    <article><p class=\"cb-num\">01</p><h3>Early Access</h3><p class=\"cb-muted\">Selected collections available first through Craft Boat Trade.</p></article>
    <article><p class=\"cb-num\">02</p><h3>Custom Possibilities</h3><p class=\"cb-muted\">Develop colours, patterns, dimensions or packaging for larger programs.</p></article>
    <article><p class=\"cb-num\">03</p><h3>Direct Studio Support</h3><p class=\"cb-muted\">Work directly with our Jaipur design and production team.</p></article>
    <article><p class=\"cb-num\">04</p><h3>Stockist Resources</h3><p class=\"cb-muted\">Access approved product imagery, craft stories and merchandising material.</p></article>
  </div>
</section>

<section class=\"cb-confidence\">
  <div>
    <p class=\"cb-kicker\">Buy Craft Boat with confidence</p>
    <h2 class=\"cb-display\">Know the numbers before the cartons leave Jaipur.</h2>
    <ul>
      <li><h3>Pack-safe ordering</h3><p class=\"cb-muted\">Every quantity respects the product’s MOQ and case pack.</p></li>
      <li><h3>Clear availability</h3><p class=\"cb-muted\">Ready stock and made-to-order lines carry distinct dispatch windows.</p></li>
      <li><h3>One place to return</h3><p class=\"cb-muted\">Orders, invoices, saved products, tracking and reorder stay in your account.</p></li>
    </ul>
    <a class=\"cb-btn cb-btn--line\" href=\"index.php?route=account/register&amp;language=en-gb&amp;account=trade\">Apply to buy</a>
  </div>
  <div class=\"cb-photos\">
    <div class=\"tall\" style=\"background-image:url('catalog/view/image/craftboat/trays.png')\"></div>
    <div class=\"sq\" style=\"background-image:url('catalog/view/image/craftboat/pouch.png')\"></div>
    <div class=\"sq\" style=\"background-image:url('catalog/view/image/craftboat/shade.png')\"></div>
  </div>
</section>

<section class=\"cb-collections\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Shop by collection</p>
      <h2>Stories for cohesive shelves.</h2>
    </div>
    <p>Editorial worlds remain distinct from practical product categories.</p>
  </div>
  <div class=\"cb-collections__grid\">
    <a class=\"cb-tile\" href=\"index.php?route=product/collection&amp;language=en-gb&amp;collection=saffron\" style=\"background-image:url('catalog/view/image/craftboat/collection-saffron.png')\">
      <span>01</span><h3>Saffron valley</h3><p>Floral and sun-warmed block print.</p><span class=\"cb-btn cb-btn--glass\">Explore Collection <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-tile\" href=\"index.php?route=product/collection&amp;language=en-gb&amp;collection=marbled\" style=\"background-image:url('catalog/view/image/craftboat/collection-marbled.png')\">
      <span>02</span><h3>Marbled Stories</h3><p>One-of-one colour pulled by hand.</p><span class=\"cb-btn cb-btn--glass\">Explore Collection <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-tile\" href=\"index.php?route=product/collection&amp;language=en-gb&amp;collection=holiday\" style=\"background-image:url('catalog/view/image/craftboat/collection-holiday.png')\">
      <span>03</span><h3>Holiday 2026</h3><p>Keepsake gifting for the season.</p><span class=\"cb-btn cb-btn--glass\">Explore Collection <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
  </div>
</section>

<section class=\"cb-section\" style=\"text-align:center\">
  <p class=\"cb-kicker\">Precious material stories</p>
  <h2 class=\"cb-display\">Waste becomes paper. Paper becomes story.</h2>
  <p class=\"cb-muted\" style=\"margin:16px auto 0;max-width:551px\">In our Jaipur studio, discarded cotton textile is transformed into paper, then marbled, block printed, bound and shaped by hand.</p>
</section>
<div class=\"cb-story__photo\" style=\"height:420px;background-image:url('catalog/view/image/craftboat/paper-mill.png')\"></div>

<section class=\"cb-desk\">
  <div class=\"cb-desk__photo\" style=\"background-image:url('catalog/view/image/craftboat/desk-left.png')\"></div>
  <div class=\"cb-desk__copy\">
    <p class=\"cb-kicker\">A curated paper world</p>
    <h2>The perfect <em>desk story</em> for your store, right this way.</h2>
    <a class=\"cb-btn cb-btn--black\" href=\"index.php?route=product/special&amp;language=en-gb\">Shop paper and desk →</a>
  </div>
  <div class=\"cb-desk__photo\" style=\"background-image:url('catalog/view/image/craftboat/desk-right.png')\"></div>
</section>

<section class=\"cb-custom\">
  <div class=\"cb-custom__photo\" style=\"background-image:url('catalog/view/image/craftboat/custom.png')\"></div>
  <div class=\"cb-custom__copy\">
    <p class=\"cb-kicker\">Made for your store</p>
    <h2 class=\"cb-display\">Your idea, <em>shaped by hand.</em></h2>
    <p>Share a product family, quantity, dimensions, colours, target price and delivery date. Our Jaipur studio will respond with feasibility and next steps.</p>
    <p><a class=\"cb-btn cb-btn--black\" href=\"index.php?route=information/contact&amp;language=en-gb\">Start a custom brief</a></p>
  </div>
</section>

<section class=\"cb-reviews\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Verified wholesale feedback</p>
      <h2>Loved by Craft Boat stockists.</h2>
    </div>
    <p>Ratings and excerpts below are clearly attributed to Craft Boat’s current Faire brand page.</p>
  </div>
  <div class=\"cb-scores\">
    <div><strong>5.0</strong><span>Brand rating · 36 reviews</span></div>
    <div><strong>5.0</strong><span>Product quality</span></div>
    <div><strong>4.8</strong><span>Fulfilment</span></div>
    <div><strong>5.0</strong><span>Communication</span></div>
    <div><a href=\"https://www.faire.com/\" target=\"_blank\" rel=\"noopener\">View all on Faire ↗</a></div>
  </div>
  <div class=\"cb-quotes\">
    <article><p>“Everything is so lovely! Quality is top notch.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
    <article><p>“All the products we ordered are beautiful! Very pleased with the quality.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
    <article><p>“All the products we ordered are beautiful! Very pleased with the quality.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
    <article><p>“Everything is so lovely! Quality is top notch.”</p><small>Lauren · Shreveport, Louisiana · Originally reviewed on Faire · Aug 5, 2026</small></article>
  </div>
</section>

<section class=\"cb-notes\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Craft Boat newspaper</p>
      <h2>Notes for thoughtful retail.</h2>
    </div>
    <a class=\"cb-btn cb-btn--line\" href=\"{{ contact }}\">Suggest a stockist topic →</a>
  </div>
  <div class=\"cb-notes__grid\">
    <article>
      <img src=\"catalog/view/image/craftboat/note-1.png\" alt=\"\">
      <h3>Building a paper-led gifting table</h3>
      <p class=\"cb-muted\">Pair useful price points with one strong material story.</p>
      <a class=\"cb-link\" href=\"{{ contact }}\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
    <article>
      <img src=\"catalog/view/image/craftboat/note-2.png\" alt=\"\">
      <h3>How to merchandise one-of-one marbling</h3>
      <p class=\"cb-muted\">Let colour variation work as the display, not a complication.</p>
      <a class=\"cb-link\" href=\"{{ contact }}\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
    <article>
      <img src=\"catalog/view/image/craftboat/note-3.png\" alt=\"\">
      <h3>Planning a ready-stock refill</h3>
      <p class=\"cb-muted\">Use availability, margin and case cost to make a fast top-up decision.</p>
      <a class=\"cb-link\" href=\"{{ contact }}\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
  </div>
</section>

<section class=\"cb-works\">
  <img class=\"cb-seal\" src=\"catalog/view/image/craftboat/seal-lg.svg\" alt=\"Craft Boat\">
  <p class=\"cb-kicker\">How wholesale works</p>
  <h2 class=\"cb-display\">A clear path from <em>hello to reorder.</em></h2>
  <div class=\"cb-works__grid\">
    <article><p class=\"cb-num\">01</p><h3>Apply</h3><p class=\"cb-muted\">Share your store details once. We review most accounts within two business days.</p></article>
    <article><p class=\"cb-num\">02</p><h3>Shop your terms</h3><p class=\"cb-muted\">See buyer-specific prices, margin, minimums and prepaid benefits as you browse.</p></article>
    <article><p class=\"cb-num\">03</p><h3>Order &amp; stay in touch</h3><p class=\"cb-muted\">Build an order, pay securely and keep product conversations attached to it.</p></article>
  </div>
  <a class=\"cb-btn cb-btn--black\" href=\"index.php?route=account/register&amp;language=en-gb&amp;account=wholesale\">Open a wholesale account</a>
</section>

<section class=\"cb-retail\">
  <img class=\"cb-retail__mark\" src=\"catalog/view/image/craftboat/pattern.svg\" alt=\"\">
  <div>
    <p class=\"cb-kicker\">Shopping for yourself?</p>
    <h2 class=\"cb-display\">Buy individual pieces from our retail store.</h2>
  </div>
  <div>
    <p>Shop retail at</p>
    <a class=\"cb-btn cb-btn--white\" href=\"https://www.seedsofanaar.com/\" target=\"_blank\" rel=\"noopener\">Seeds of Anaar <img src=\"catalog/view/image/craftboat/external.svg\" alt=\"\"></a>
  </div>
</section>
<script>
(function () {
  var track = document.getElementById('cb-depts');
  var dots = document.querySelectorAll('.cb-depts__dots button');
  if (!track || !dots.length || !window.matchMedia('(max-width: 700px)').matches) return;
  var slides = track.querySelectorAll('.cb-dept');
  function update() {
    var index = Math.round(track.scrollLeft / track.clientWidth);
    dots.forEach(function (dot, i) { dot.classList.toggle('is-on', i === index); });
  }
  track.addEventListener('scroll', update, { passive: true });
  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () {
      var left = slides[i].getBoundingClientRect().left - track.getBoundingClientRect().left + track.scrollLeft;
      track.scrollTo({ left: left, behavior: 'smooth' });
    });
  });
})();
</script>
{{ footer }}
", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\home.twig");
    }
}
