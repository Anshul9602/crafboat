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
<section class=\"cb-hero\" style=\"background-image:url('catalog/view/image/craftboat/hero.png')\">
  <div class=\"cb-hero__shade\"></div>
  <div class=\"cb-hero__copy\">
    <p class=\"cb-kicker\">craft boat trade</p>
    <h1>Soulful objects, made to <em>keep.</em></h1>
    <p>Handmade paper, textile and home objects for thoughtful stores and collected interiors.</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"";
        // line 9
        yield ($context["shop"] ?? null);
        yield "\">Shop wholesale</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"index.php?route=account/register&amp;language=en-gb\">Apply for a Trade Account</a>
    </div>
  </div>
  <img class=\"cb-hero__dots\" src=\"catalog/view/image/craftboat/dots.svg\" alt=\"\">
  <a class=\"cb-message\" href=\"index.php?route=information/contact&amp;language=en-gb\">Message Craft Boat <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
</section>

<nav class=\"cb-shopbar\" aria-label=\"Start shopping\">
  <span>Start Shopping</span>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">New Arrivals <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">Bestsellers <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">Ready to ship <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">Holiday 2026 <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"";
        // line 23
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            yield "    <a class=\"cb-cat\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
            yield "\"><span class=\"cb-cat__photo\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 36);
            yield "\" alt=\"\"></span><span class=\"cb-cat__label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
            yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
  <div class=\"cb-depts\">
    <a class=\"cb-dept\" href=\"";
        // line 50
        yield ($context["dept_home"] ?? null);
        yield "\" style=\"background-image:url('catalog/view/image/craftboat/dept-home.png')\">
      <h3>Home accents</h3>
      <p>Hand-finished trays, frames and small objects with a strong shelf story.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-dept\" href=\"";
        // line 55
        yield ($context["dept_storage"] ?? null);
        yield "\" style=\"background-image:url('catalog/view/image/craftboat/dept-storage.png')\">
      <h3>Storage &amp; organisation</h3>
      <p>Keepsake boxes, desk trays, pen pots and pouches for useful displays.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
    <a class=\"cb-dept\" href=\"";
        // line 60
        yield ($context["dept_stationery"] ?? null);
        yield "\" style=\"background-image:url('catalog/view/image/craftboat/dept-stationery.png')\">
      <h3>Stationery &amp; writing</h3>
      <p>Handmade paper, journals, notebooks and paper bundles for considered gifting.</p>
      <span class=\"cb-dept__go\">shop department <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
    </a>
  </div>
  <p class=\"cb-more\">More to explore</p>
  <div class=\"cb-chips\">
    <a href=\"";
        // line 68
        yield ($context["dept_home"] ?? null);
        yield "\">Home accents</a>
    <a href=\"";
        // line 69
        yield ($context["dept_storage"] ?? null);
        yield "\">Storage &amp; organisation</a>
    <a href=\"";
        // line 70
        yield ($context["dept_home"] ?? null);
        yield "\">Kitchen &amp; tabletop</a>
    <a href=\"";
        // line 71
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["categories"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[2] ?? null) : null), "href", [], "any", false, false, false, 71);
        yield "\">Textiles &amp; bedding</a>
    <a href=\"";
        // line 72
        yield ($context["dept_stationery"] ?? null);
        yield "\">Stationery &amp; writing</a>
    <a href=\"";
        // line 73
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["categories"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[4] ?? null) : null), "href", [], "any", false, false, false, 73);
        yield "\">Gift wrapping</a>
    <a href=\"";
        // line 74
        yield ($context["dept_stationery"] ?? null);
        yield "\">Craft materials</a>
    <a href=\"";
        // line 75
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["categories"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[2] ?? null) : null), "href", [], "any", false, false, false, 75);
        yield "\">Accessories &amp; pouches</a>
    <a href=\"";
        // line 76
        yield ($context["dept_home"] ?? null);
        yield "\">Frames &amp; decorative objects</a>
    <a href=\"";
        // line 77
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["categories"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[0] ?? null) : null), "href", [], "any", false, false, false, 77);
        yield "\">Desk organisation</a>
    <a href=\"";
        // line 78
        yield ($context["dept_home"] ?? null);
        yield "\">Lighting &amp; lampshades</a>
    <a href=\"";
        // line 79
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["categories"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[5] ?? null) : null), "href", [], "any", false, false, false, 79);
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bestsellers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 93
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
            yield "\">
      <span class=\"cb-badge\">";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 94);
            yield "</span>
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"";
            // line 96
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 96);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 98
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 98);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 98);
            yield "</span></div>
        <h3>";
            // line 99
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 100
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 100);
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship";
            // line 103
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " cb-ship--wait";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 103);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\">";
            // line 105
            if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Signed in · pricing unlocks after approval";
            } else {
                yield "Sign in to view wholesale pricing";
            }
            yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "  </div>
</section>

<section class=\"cb-catalog\">
  <p class=\"cb-kicker\">Explore full catalog</p>
  <h2 class=\"cb-display\">Discover the full collection with wholesale pricing.</h2>
  <a class=\"cb-btn cb-btn--black\" href=\"";
        // line 115
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
        // line 134
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Locked";
        } else {
            yield "Sign in";
        }
        yield "</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1860</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"";
        // line 137
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
        // line 147
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Locked";
        } else {
            yield "Sign in";
        }
        yield "</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1176</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"";
        // line 150
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
        // line 160
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Locked";
        } else {
            yield "Sign in";
        }
        yield "</b></div>
        <div class=\"cb-row\"><span>Suggested retail</span><b>\$1860</b></div>
        <div class=\"cb-row\"><span>Projected gross profit</span><b>Locked</b></div>
        <a class=\"cb-link\" href=\"";
        // line 163
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
        // line 187
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
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ready"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 202
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 202);
            yield "\">
      <span class=\"cb-badge\">ready</span>
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"";
            // line 205
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 205);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 205);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 207
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 207);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 207);
            yield "</span></div>
        <h3>";
            // line 208
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 208);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 209
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 209);
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship\">";
            // line 212
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 212);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\">";
            // line 214
            if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Signed in · pricing unlocks after approval";
            } else {
                yield "Sign in to view wholesale pricing";
            }
            yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        yield "  </div>
  <div class=\"cb-center-btn\"><a class=\"cb-btn cb-btn--line\" href=\"";
        // line 219
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
    <a class=\"cb-btn cb-btn--line\" href=\"index.php?route=account/register&amp;language=en-gb\">Apply to buy</a>
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
        // line 333
        yield ($context["contact"] ?? null);
        yield "\">Suggest a stockist topic →</a>
  </div>
  <div class=\"cb-notes__grid\">
    <article>
      <img src=\"catalog/view/image/craftboat/note-1.png\" alt=\"\">
      <h3>Building a paper-led gifting table</h3>
      <p class=\"cb-muted\">Pair useful price points with one strong material story.</p>
      <a class=\"cb-link\" href=\"";
        // line 340
        yield ($context["contact"] ?? null);
        yield "\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
    <article>
      <img src=\"catalog/view/image/craftboat/note-2.png\" alt=\"\">
      <h3>How to merchandise one-of-one marbling</h3>
      <p class=\"cb-muted\">Let colour variation work as the display, not a complication.</p>
      <a class=\"cb-link\" href=\"";
        // line 346
        yield ($context["contact"] ?? null);
        yield "\">read the note <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
    </article>
    <article>
      <img src=\"catalog/view/image/craftboat/note-3.png\" alt=\"\">
      <h3>Planning a ready-stock refill</h3>
      <p class=\"cb-muted\">Use availability, margin and case cost to make a fast top-up decision.</p>
      <a class=\"cb-link\" href=\"";
        // line 352
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
  <a class=\"cb-btn cb-btn--black\" href=\"index.php?route=account/register&amp;language=en-gb\">Open a wholesale account</a>
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
";
        // line 380
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
        return array (  643 => 380,  612 => 352,  603 => 346,  594 => 340,  584 => 333,  467 => 219,  464 => 218,  450 => 214,  445 => 212,  439 => 209,  435 => 208,  429 => 207,  422 => 205,  415 => 202,  411 => 201,  394 => 187,  361 => 163,  351 => 160,  332 => 150,  322 => 147,  303 => 137,  293 => 134,  271 => 115,  263 => 109,  249 => 105,  240 => 103,  234 => 100,  230 => 99,  224 => 98,  217 => 96,  212 => 94,  207 => 93,  203 => 92,  187 => 79,  183 => 78,  179 => 77,  175 => 76,  171 => 75,  167 => 74,  163 => 73,  159 => 72,  155 => 71,  151 => 70,  147 => 69,  143 => 68,  132 => 60,  124 => 55,  116 => 50,  102 => 38,  89 => 36,  85 => 35,  70 => 23,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<section class=\"cb-hero\" style=\"background-image:url('catalog/view/image/craftboat/hero.png')\">
  <div class=\"cb-hero__shade\"></div>
  <div class=\"cb-hero__copy\">
    <p class=\"cb-kicker\">craft boat trade</p>
    <h1>Soulful objects, made to <em>keep.</em></h1>
    <p>Handmade paper, textile and home objects for thoughtful stores and collected interiors.</p>
    <div class=\"cb-hero__actions\">
      <a class=\"cb-btn cb-btn--white\" href=\"{{ shop }}\">Shop wholesale</a>
      <a class=\"cb-btn cb-btn--ghost\" href=\"index.php?route=account/register&amp;language=en-gb\">Apply for a Trade Account</a>
    </div>
  </div>
  <img class=\"cb-hero__dots\" src=\"catalog/view/image/craftboat/dots.svg\" alt=\"\">
  <a class=\"cb-message\" href=\"index.php?route=information/contact&amp;language=en-gb\">Message Craft Boat <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
</section>

<nav class=\"cb-shopbar\" aria-label=\"Start shopping\">
  <span>Start Shopping</span>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">New Arrivals <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">Bestsellers <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">Ready to ship <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
  <a href=\"index.php?route=product/special&amp;language=en-gb\">Holiday 2026 <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></a>
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
  <div class=\"cb-depts\">
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
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
      <div>
        <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.sku }}</span></div>
        <h3>{{ product.name }}</h3>
        <p class=\"cb-collection\">{{ product.collection }}</p>
      </div>
      <div>
        <p class=\"cb-ship\">{{ product.ship }}</p>
        <hr>
        <span class=\"cb-card__foot\">{% if logged %}Signed in · pricing unlocks after approval{% else %}Sign in to view wholesale pricing{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
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
    <a class=\"cb-btn cb-btn--line\" href=\"index.php?route=account/register&amp;language=en-gb\">Apply to buy</a>
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
  <a class=\"cb-btn cb-btn--black\" href=\"index.php?route=account/register&amp;language=en-gb\">Open a wholesale account</a>
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
{{ footer }}
", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\home.twig");
    }
}
