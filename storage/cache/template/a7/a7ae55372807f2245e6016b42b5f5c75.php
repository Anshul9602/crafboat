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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["gallery"] ?? null), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            yield "      <button type=\"button\" data-src=\"";
            yield $context["image"];
            yield "\" aria-label=\"Show this image large\"><img src=\"";
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
        ";
        // line 27
        if ((($context["trade"] ?? null) || ($context["wholesale"] ?? null))) {
            // line 28
            yield "          <div>
            <span>";
            // line 29
            if ((($tmp = ($context["trade"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Trade";
            } else {
                yield "Wholesale";
            }
            yield "</span>
            <strong>";
            // line 30
            yield (((($tmp = ($context["trade"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["trade_price"] ?? null)) : (($context["wholesale_price"] ?? null)));
            yield "</strong>
            <small class=\"cb-pdp__was";
            // line 31
            if ((($context["trade_off"] ?? null) || ($context["wholesale_off"] ?? null))) {
                yield " is-off";
            }
            yield "\">";
            yield ($context["price"] ?? null);
            yield "</small>
            ";
            // line 32
            if ((($context["trade"] ?? null) && ($context["trade_off"] ?? null))) {
                yield "<em class=\"cb-pdp__off\">";
                yield ($context["trade_off"] ?? null);
                yield "</em>";
            }
            // line 33
            yield "            ";
            if ((($context["wholesale"] ?? null) && ($context["wholesale_off"] ?? null))) {
                yield "<em class=\"cb-pdp__off\">";
                yield ($context["wholesale_off"] ?? null);
                yield "</em>";
            }
            // line 34
            yield "          </div>
        ";
        } else {
            // line 36
            yield "          <div>
            <span>Suggested retail</span>
            <strong>";
            // line 38
            yield ($context["price"] ?? null);
            yield "</strong>
          </div>
          <div>
            <span>Your price</span>
            <strong>Locked</strong>
          </div>
        ";
        }
        // line 45
        yield "      </div>
      ";
        // line 46
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "        <h2>Add this case pack to your order.</h2>
        <p>Case pack of ";
            // line 48
            yield ($context["minimum"] ?? null);
            yield ". The cart opens with this quantity.</p>
        <form class=\"cb-pdp__actions\" action=\"";
            // line 49
            yield ($context["cart_add"] ?? null);
            yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 50
            yield ($context["product_id"] ?? null);
            yield "\">
          <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 51
            yield ($context["minimum"] ?? null);
            yield "\">
          <button type=\"submit\" class=\"cb-btn cb-btn--black\">Add to cart</button>
          <a class=\"cb-btn cb-btn--line\" href=\"";
            // line 53
            yield ($context["account"] ?? null);
            yield "\">Go to your account</a>
        </form>
      ";
        } else {
            // line 56
            yield "        <h2>Wholesale pricing is reserved for approved stockists.</h2>
        <p>Sign in to view price, margin, inventory and quick-add controls.</p>
        <div class=\"cb-pdp__actions\">
          <a class=\"cb-btn cb-btn--black\" href=\"";
            // line 59
            yield ($context["login"] ?? null);
            yield "\">Sign in to view pricing</a>
          <a class=\"cb-btn cb-btn--line\" href=\"";
            // line 60
            yield ($context["register"] ?? null);
            yield "\">Apply for Trade</a>
        </div>
      ";
        }
        // line 63
        yield "    </div>
    <dl class=\"cb-specs\">
      <div><dt>SKU</dt><dd>";
        // line 65
        yield ($context["model"] ?? null);
        yield "</dd></div>
      <div><dt>MOQ / case pack</dt><dd>";
        // line 66
        yield ($context["minimum"] ?? null);
        yield " / ";
        yield ($context["minimum"] ?? null);
        yield "</dd></div>
      <div><dt>Dimensions</dt><dd>";
        // line 67
        yield ($context["dimensions"] ?? null);
        yield "</dd></div>
      <div><dt>Material</dt><dd>";
        // line 68
        yield ($context["material"] ?? null);
        yield "</dd></div>
      <div><dt>Technique</dt><dd>";
        // line 69
        yield ($context["technique"] ?? null);
        yield "</dd></div>
      <div><dt>Lead time</dt><dd>";
        // line 70
        yield ($context["lead"] ?? null);
        yield "</dd></div>
      <div><dt>Packing</dt><dd>";
        // line 71
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
        // line 82
        yield ($context["view_all"] ?? null);
        yield "\">View all →</a>
  </div>
  <div class=\"cb-grid\">
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["related_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 86
            yield "    <a class=\"cb-card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
            yield "\">
      <span class=\"cb-badge\">";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "badge", [], "any", false, false, false, 87);
            yield "</span>
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"";
            // line 88
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
            yield "\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"";
            // line 89
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 89);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
            yield "\">
      <div>
        <div class=\"cb-meta\"><span>";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 91);
            yield "</span><span>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 91);
            yield "</span></div>
        <h3>";
            // line 92
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 92);
            yield "</h3>
        <p class=\"cb-collection\">";
            // line 93
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "collection", [], "any", false, false, false, 93));
            yield "</p>
      </div>
      <div>
        <p class=\"cb-ship";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "wait", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " cb-ship--wait";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ship", [], "any", false, false, false, 96);
            yield "</p>
        <hr>
        <span class=\"cb-card__foot\"><span>";
            // line 98
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<s class=\"cb-card__was\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_base", [], "any", false, false, false, 98);
                    yield "</s>";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "role_price", [], "any", false, false, false, 98);
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
        // line 102
        yield "  </div>
</section>

<section class=\"cb-coll-story\">
  <div class=\"cb-coll-story__photo\" style=\"background-image:url('catalog/view/image/craftboat/collection-story.png')\"></div>
  <div class=\"cb-coll-story__copy\">
    <p class=\"cb-kicker\">The making story</p>
    <h2 class=\"cb-display\">Made as a family, finished by hand.</h2>
    <p>Hand-carved blocks register each colour separately before the printed cotton is wrapped, pleated, stitched or bound in Jaipur.</p>
    <p><a class=\"cb-btn cb-btn--black\" href=\"";
        // line 111
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
        // line 121
        yield ($context["register"] ?? null);
        yield "\">Apply for a trade account →</a>
    <a class=\"cb-unlock__login\" href=\"";
        // line 122
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
document.querySelectorAll('.cb-pdp__thumbs button').forEach(function (button) {
  button.addEventListener('click', function () {
    var photo = document.getElementById('cb-pdp-photo');
    var thumb = button.querySelector('img');
    if (!photo || !thumb) return;
    var next = thumb.getAttribute('src');
    var current = photo.getAttribute('src');
    photo.setAttribute('src', next);
    thumb.setAttribute('src', current);
    button.setAttribute('data-src', current);
    photo.closest('.cb-pdp__main').scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});
if (window.jQuery) {
  jQuery(document).on('ajaxSuccess', function (event, xhr, settings) {
    if (!settings.url || settings.url.indexOf('checkout/cart.add') === -1) return;
    var json = xhr.responseJSON || {};
    if (!json.success) return;
    var opener = document.querySelector('[data-cart-open]');
    if (opener) opener.click();
  });
}
</script>
";
        // line 158
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
        return array (  425 => 158,  380 => 122,  376 => 121,  363 => 111,  352 => 102,  331 => 98,  322 => 96,  316 => 93,  312 => 92,  306 => 91,  299 => 89,  295 => 88,  291 => 87,  286 => 86,  282 => 85,  276 => 82,  262 => 71,  258 => 70,  254 => 69,  250 => 68,  246 => 67,  240 => 66,  236 => 65,  232 => 63,  226 => 60,  222 => 59,  217 => 56,  211 => 53,  206 => 51,  202 => 50,  198 => 49,  194 => 48,  191 => 47,  189 => 46,  186 => 45,  176 => 38,  172 => 36,  168 => 34,  161 => 33,  155 => 32,  147 => 31,  143 => 30,  135 => 29,  132 => 28,  130 => 27,  124 => 24,  115 => 23,  109 => 22,  105 => 21,  97 => 20,  93 => 19,  88 => 16,  77 => 14,  73 => 13,  65 => 10,  55 => 4,  47 => 3,  42 => 1,);
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
      {% for image in gallery|slice(1) %}
      <button type=\"button\" data-src=\"{{ image }}\" aria-label=\"Show this image large\"><img src=\"{{ image }}\" alt=\"\"></button>
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
        {% if trade or wholesale %}
          <div>
            <span>{% if trade %}Trade{% else %}Wholesale{% endif %}</span>
            <strong>{{ trade ? trade_price : wholesale_price }}</strong>
            <small class=\"cb-pdp__was{% if trade_off or wholesale_off %} is-off{% endif %}\">{{ price }}</small>
            {% if trade and trade_off %}<em class=\"cb-pdp__off\">{{ trade_off }}</em>{% endif %}
            {% if wholesale and wholesale_off %}<em class=\"cb-pdp__off\">{{ wholesale_off }}</em>{% endif %}
          </div>
        {% else %}
          <div>
            <span>Suggested retail</span>
            <strong>{{ price }}</strong>
          </div>
          <div>
            <span>Your price</span>
            <strong>Locked</strong>
          </div>
        {% endif %}
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
      <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"{{ product.product_id }}\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
      <img class=\"cb-card__img\" src=\"{{ product.image }}\" alt=\"{{ product.name }}\">
      <div>
        <div class=\"cb-meta\"><span>{{ product.category }}</span><span>{{ product.sku }}</span></div>
        <h3>{{ product.name }}</h3>
        <p class=\"cb-collection\">{{ product.collection|title }}</p>
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
document.querySelectorAll('.cb-pdp__thumbs button').forEach(function (button) {
  button.addEventListener('click', function () {
    var photo = document.getElementById('cb-pdp-photo');
    var thumb = button.querySelector('img');
    if (!photo || !thumb) return;
    var next = thumb.getAttribute('src');
    var current = photo.getAttribute('src');
    photo.setAttribute('src', next);
    thumb.setAttribute('src', current);
    button.setAttribute('data-src', current);
    photo.closest('.cb-pdp__main').scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});
if (window.jQuery) {
  jQuery(document).on('ajaxSuccess', function (event, xhr, settings) {
    if (!settings.url || settings.url.indexOf('checkout/cart.add') === -1) return;
    var json = xhr.responseJSON || {};
    if (!json.success) return;
    var opener = document.querySelector('[data-cart-open]');
    if (opener) opener.click();
  });
}
</script>
{{ footer }}
", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\product\\product.twig");
    }
}
