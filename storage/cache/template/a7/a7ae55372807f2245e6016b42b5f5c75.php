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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_51cab5f838a75104e835c3b3b5d121a7 extends Template
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
<nav class=\"cb-crumb\" aria-label=\"Breadcrumb\">
  ";
        // line 3
        if ((($tmp = ($context["collection_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield ($context["collection_href"] ?? null);
            yield "\">";
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["collection_name"] ?? null));
            yield "</a><span>/</span>";
        }
        // line 4
        yield "  <span>";
        yield ($context["heading_title"] ?? null);
        yield "</span>
</nav>

<section class=\"cb-pdp\">
  <div class=\"cb-pdp__gallery\">
    <div class=\"cb-pdp__main\">
      <img id=\"cb-pdp-photo\" src=\"";
        // line 10
        yield (($_v0 = ($context["gallery"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
        yield "\" alt=\"";
        yield ($context["heading_title"] ?? null);
        yield "\">
    </div>
    <div class=\"cb-pdp__thumbs\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["gallery"] ?? null), 1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            yield "      <button type=\"button\" data-src=\"";
            yield $context["image"];
            yield "\" aria-label=\"Show image\"><img src=\"";
            yield $context["image"];
            yield "\" alt=\"\"></button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    </div>
  </div>
  <div class=\"cb-pdp__info\">
    <span class=\"cb-badge cb-badge--static\">";
        // line 19
        yield ($context["badge"] ?? null);
        yield "</span>
    <p class=\"cb-pdp__meta\">";
        // line 20
        yield ($context["category_name"] ?? null);
        if ((($tmp = ($context["collection_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · ";
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["collection_name"] ?? null));
        }
        yield "</p>
    <h1>";
        // line 21
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    ";
        // line 22
        if ((($tmp = ($context["collection_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"cb-pdp__collection\">";
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["collection_name"] ?? null));
            yield "</p>";
        }
        // line 23
        yield "    <p class=\"cb-ship";
        if ((($tmp = ($context["ship_wait"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " cb-ship--wait";
        }
        yield "\">";
        yield ($context["ship"] ?? null);
        yield "</p>
    <p class=\"cb-pdp__summary\">";
        // line 24
        yield ($context["summary"] ?? null);
        yield "</p>
    <div class=\"cb-pdp__price\">
      <div class=\"cb-pdp__figures\">
        <div>
          <span>Suggested retail</span>
          <strong>";
        // line 29
        yield ($context["price"] ?? null);
        yield "</strong>
        </div>
        <div>
          <span>Wholesale</span>
          <strong>";
        // line 33
        if ((($tmp = ($context["wholesale"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ($context["wholesale_price"] ?? null);
        } else {
            yield "Locked";
        }
        yield "</strong>
        </div>
      </div>
      ";
        // line 36
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <h2>Add this case pack to your order.</h2>
        <p>Case pack of ";
            // line 38
            yield ($context["minimum"] ?? null);
            yield ". The cart opens with this quantity.</p>
        <form class=\"cb-pdp__actions\" action=\"";
            // line 39
            yield ($context["cart_add"] ?? null);
            yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 40
            yield ($context["product_id"] ?? null);
            yield "\">
          <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 41
            yield ($context["minimum"] ?? null);
            yield "\">
          <button type=\"submit\" class=\"cb-btn cb-btn--black\">Add to cart</button>
          <a class=\"cb-btn cb-btn--line\" href=\"";
            // line 43
            yield ($context["account"] ?? null);
            yield "\">Go to your account</a>
        </form>
      ";
        } else {
            // line 46
            yield "        <h2>Wholesale pricing is reserved for approved stockists.</h2>
        <p>Sign in to view price, margin, inventory and quick-add controls.</p>
        <div class=\"cb-pdp__actions\">
          <a class=\"cb-btn cb-btn--black\" href=\"";
            // line 49
            yield ($context["login"] ?? null);
            yield "\">Sign in to view pricing</a>
          <a class=\"cb-btn cb-btn--line\" href=\"";
            // line 50
            yield ($context["register"] ?? null);
            yield "\">Apply for Trade</a>
        </div>
      ";
        }
        // line 53
        yield "    </div>
    <dl class=\"cb-specs\">
      <div><dt>SKU</dt><dd>";
        // line 55
        yield ($context["model"] ?? null);
        yield "</dd></div>
      <div><dt>MOQ / case pack</dt><dd>";
        // line 56
        yield ($context["minimum"] ?? null);
        yield " / ";
        yield ($context["minimum"] ?? null);
        yield "</dd></div>
      <div><dt>Dimensions</dt><dd>";
        // line 57
        yield ($context["dimensions"] ?? null);
        yield "</dd></div>
      <div><dt>Material</dt><dd>";
        // line 58
        yield ($context["material"] ?? null);
        yield "</dd></div>
      <div><dt>Technique</dt><dd>";
        // line 59
        yield ($context["technique"] ?? null);
        yield "</dd></div>
      <div><dt>Lead time</dt><dd>";
        // line 60
        yield ($context["lead"] ?? null);
        yield "</dd></div>
      <div><dt>Packing</dt><dd>";
        // line 61
        yield ($context["packing"] ?? null);
        yield "</dd></div>
    </dl>
  </div>
</section>

<section class=\"cb-coll-products\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Complete the shelf</p>
      <h2>Related products</h2>
    </div>
    <a class=\"cb-btn cb-btn--line\" href=\"";
        // line 72
        yield ($context["view_all"] ?? null);
        yield "\">View all →</a>
  </div>
  <div class=\"cb-grid\">
    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["related_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
            yield "\">
      <span class=\"cb-badge\">";
            // line 77
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 77);
            yield "</span>
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"";
            // line 79
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 79);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 81
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 81);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 81);
            yield "</span></div>
        <h3>";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 83
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 83));
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship";
            // line 86
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " cb-ship--wait";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 86);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\">";
            // line 88
            if ((($tmp = ($context["wholesale"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Wholesale pricing unlocked";
            } elseif ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Wholesale price locked";
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
<script>
\$(document).on('ajaxSuccess', function (event, xhr, settings) {
  if (!settings.url || settings.url.indexOf('checkout/cart.add') === -1) return;
  var json = xhr.responseJSON || {};
  if (!json.success) return;
  var opener = document.querySelector('[data-cart-open]');
  if (opener) opener.click();
});
document.querySelectorAll('.cb-pdp__thumbs button').forEach(function (button) {
  button.addEventListener('click', function () {
    var photo = document.getElementById('cb-pdp-photo');
    var next = button.getAttribute('data-src');
    var current = photo.getAttribute('src');
    photo.setAttribute('src', next);
    button.setAttribute('data-src', current);
    button.querySelector('img').setAttribute('src', current);
  });
});
</script>
";
        // line 143
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
        return "catalog/view/template/product/product.twig";
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
        return array (  372 => 143,  332 => 112,  328 => 111,  315 => 101,  304 => 92,  288 => 88,  279 => 86,  273 => 83,  269 => 82,  263 => 81,  256 => 79,  251 => 77,  246 => 76,  242 => 75,  236 => 72,  222 => 61,  218 => 60,  214 => 59,  210 => 58,  206 => 57,  200 => 56,  196 => 55,  192 => 53,  186 => 50,  182 => 49,  177 => 46,  171 => 43,  166 => 41,  162 => 40,  158 => 39,  154 => 38,  151 => 37,  149 => 36,  139 => 33,  132 => 29,  124 => 24,  115 => 23,  109 => 22,  105 => 21,  97 => 20,  93 => 19,  88 => 16,  77 => 14,  73 => 13,  65 => 10,  55 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<nav class=\"cb-crumb\" aria-label=\"Breadcrumb\">
  {% if collection_name %}<a href=\"{{ collection_href }}\">{{ collection_name|title }}</a><span>/</span>{% endif %}
  <span>{{ heading_title }}</span>
</nav>

<section class=\"cb-pdp\">
  <div class=\"cb-pdp__gallery\">
    <div class=\"cb-pdp__main\">
      <img id=\"cb-pdp-photo\" src=\"{{ gallery[0] }}\" alt=\"{{ heading_title }}\">
    </div>
    <div class=\"cb-pdp__thumbs\">
      {% for image in gallery|slice(1, 2) %}
      <button type=\"button\" data-src=\"{{ image }}\" aria-label=\"Show image\"><img src=\"{{ image }}\" alt=\"\"></button>
      {% endfor %}
    </div>
  </div>
  <div class=\"cb-pdp__info\">
    <span class=\"cb-badge cb-badge--static\">{{ badge }}</span>
    <p class=\"cb-pdp__meta\">{{ category_name }}{% if collection_name %} · {{ collection_name|title }}{% endif %}</p>
    <h1>{{ heading_title }}</h1>
    {% if collection_name %}<p class=\"cb-pdp__collection\">{{ collection_name|title }}</p>{% endif %}
    <p class=\"cb-ship{% if ship_wait %} cb-ship--wait{% endif %}\">{{ ship }}</p>
    <p class=\"cb-pdp__summary\">{{ summary }}</p>
    <div class=\"cb-pdp__price\">
      <div class=\"cb-pdp__figures\">
        <div>
          <span>Suggested retail</span>
          <strong>{{ price }}</strong>
        </div>
        <div>
          <span>Wholesale</span>
          <strong>{% if wholesale %}{{ wholesale_price }}{% else %}Locked{% endif %}</strong>
        </div>
      </div>
      {% if logged %}
        <h2>Add this case pack to your order.</h2>
        <p>Case pack of {{ minimum }}. The cart opens with this quantity.</p>
        <form class=\"cb-pdp__actions\" action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\">
          <input type=\"hidden\" name=\"quantity\" value=\"{{ minimum }}\">
          <button type=\"submit\" class=\"cb-btn cb-btn--black\">Add to cart</button>
          <a class=\"cb-btn cb-btn--line\" href=\"{{ account }}\">Go to your account</a>
        </form>
      {% else %}
        <h2>Wholesale pricing is reserved for approved stockists.</h2>
        <p>Sign in to view price, margin, inventory and quick-add controls.</p>
        <div class=\"cb-pdp__actions\">
          <a class=\"cb-btn cb-btn--black\" href=\"{{ login }}\">Sign in to view pricing</a>
          <a class=\"cb-btn cb-btn--line\" href=\"{{ register }}\">Apply for Trade</a>
        </div>
      {% endif %}
    </div>
    <dl class=\"cb-specs\">
      <div><dt>SKU</dt><dd>{{ model }}</dd></div>
      <div><dt>MOQ / case pack</dt><dd>{{ minimum }} / {{ minimum }}</dd></div>
      <div><dt>Dimensions</dt><dd>{{ dimensions }}</dd></div>
      <div><dt>Material</dt><dd>{{ material }}</dd></div>
      <div><dt>Technique</dt><dd>{{ technique }}</dd></div>
      <div><dt>Lead time</dt><dd>{{ lead }}</dd></div>
      <div><dt>Packing</dt><dd>{{ packing }}</dd></div>
    </dl>
  </div>
</section>

<section class=\"cb-coll-products\">
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Complete the shelf</p>
      <h2>Related products</h2>
    </div>
    <a class=\"cb-btn cb-btn--line\" href=\"{{ view_all }}\">View all →</a>
  </div>
  <div class=\"cb-grid\">
    {% for product in related_products %}
    <a class=\"cb-card\" href=\"{{ product.href }}\">
      <span class=\"cb-badge\">{{ product.badge }}</span>
      <img class=\"cb-heart\" src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\">
      <img class=\"cb-card__img\" src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
      <div>
        <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.sku }}</span></div>
        <h3>{{ product.name }}</h3>
        <p class=\"cb-collection\">{{ product.collection|title }}</p>
      </div>
      <div>
        <p class=\"cb-ship{% if product.wait %} cb-ship--wait{% endif %}\">{{ product.ship }}</p>
        <hr>
        <span class=\"cb-card__foot\">{% if wholesale %}Wholesale pricing unlocked{% elseif logged %}Wholesale price locked{% else %}Sign in to view wholesale pricing{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
      </div>
    </a>
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
<script>
\$(document).on('ajaxSuccess', function (event, xhr, settings) {
  if (!settings.url || settings.url.indexOf('checkout/cart.add') === -1) return;
  var json = xhr.responseJSON || {};
  if (!json.success) return;
  var opener = document.querySelector('[data-cart-open]');
  if (opener) opener.click();
});
document.querySelectorAll('.cb-pdp__thumbs button').forEach(function (button) {
  button.addEventListener('click', function () {
    var photo = document.getElementById('cb-pdp-photo');
    var next = button.getAttribute('data-src');
    var current = photo.getAttribute('src');
    photo.setAttribute('src', next);
    button.setAttribute('data-src', current);
    button.querySelector('img').setAttribute('src', current);
  });
});
</script>
{{ footer }}
", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\product\\product.twig");
    }
}
