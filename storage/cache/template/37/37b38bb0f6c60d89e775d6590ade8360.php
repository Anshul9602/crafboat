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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_44238842bd2945cc16289789452faeba extends Template
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
<section id=\"product-search\" class=\"cb-find\">
  ";
        // line 3
        yield ($context["content_top"] ?? null);
        yield "
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Catalog</p>
      <h1 class=\"cb-display\">";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    </div>
    <p>Find a piece by name, SKU, material or category. Trade prices stay hidden until an account is approved.</p>
  </div>
  <div class=\"cb-find__form\">
    <div>
      <label for=\"input-search\">";
        // line 13
        yield ($context["entry_search"] ?? null);
        yield "</label>
      <input type=\"text\" name=\"search\" value=\"";
        // line 14
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_keyword"] ?? null);
        yield "\" id=\"input-search\"/>
      <div class=\"form-check\">
        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\"";
        // line 16
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
        <label for=\"input-description\">";
        // line 17
        yield ($context["entry_description"] ?? null);
        yield "</label>
      </div>
    </div>
    <div>
      <label for=\"input-category\">";
        // line 21
        yield ($context["text_category"] ?? null);
        yield "</label>
      <select name=\"category_id\" id=\"input-category\">
        <option value=\"0\">";
        // line 23
        yield ($context["text_category"] ?? null);
        yield "</option>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 25
            yield "          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 25);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 25) == ($context["category_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 25);
            yield "</option>
          ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 27
                yield "            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 27);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 27);
                yield "</option>
            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 29
                    yield "              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 29);
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                        yield " selected";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 29);
                    yield "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "      </select>
      <div class=\"form-check\">
        <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\"";
        // line 35
        if ((($tmp = ($context["sub_category"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
        <label for=\"input-sub-category\">";
        // line 36
        yield ($context["text_sub_category"] ?? null);
        yield "</label>
      </div>
    </div>
    <button type=\"button\" id=\"button-search\" class=\"cb-btn cb-btn--black\">";
        // line 39
        yield ($context["button_search"] ?? null);
        yield "</button>
  </div>
  ";
        // line 41
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "    <div class=\"cb-coll-tools\">
      <p class=\"cb-kicker\">";
            // line 43
            yield ($context["text_search"] ?? null);
            yield "</p>
      <div class=\"cb-coll-sort\">
        <span>";
            // line 45
            yield ($context["text_sort"] ?? null);
            yield "</span>
        <label>
          <select id=\"input-sort\" aria-label=\"";
            // line 47
            yield ($context["text_sort"] ?? null);
            yield "\" onchange=\"location = this.value;\">
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 49
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 49);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 49) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 49);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "          </select>
          <img src=\"catalog/view/image/craftboat/chevron.svg\" alt=\"\">
        </label>
      </div>
    </div>
    <div class=\"cb-grid\">
      ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 58
                yield "        ";
                yield $context["product"];
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "    </div>
    <div class=\"cb-find__pages\">
      ";
            // line 62
            yield ($context["pagination"] ?? null);
            yield "
      <p>";
            // line 63
            yield ($context["results"] ?? null);
            yield "</p>
    </div>
  ";
        } else {
            // line 66
            yield "    <p class=\"cb-find__empty\">";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
  ";
        }
        // line 68
        yield "  ";
        yield ($context["content_bottom"] ?? null);
        yield "
</section>
<script type=\"text/javascript\"><!--
\$('#button-search').on('click', function() {
    url = 'index.php?route=product/search&language=";
        // line 72
        yield ($context["language"] ?? null);
        yield "';

    var search = \$('#input-search').val();

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var description = \$('#input-description:checked').prop('value');

    if (description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').on('keydown', function(e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function() {
    \$('#input-sub-category').prop('disabled', this.value == '0');
});

\$('#input-category').trigger('change');
//--></script>
";
        // line 113
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
        return "catalog/view/template/product/search.twig";
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
        return array (  309 => 113,  265 => 72,  257 => 68,  251 => 66,  245 => 63,  241 => 62,  237 => 60,  228 => 58,  224 => 57,  216 => 51,  201 => 49,  197 => 48,  193 => 47,  188 => 45,  183 => 43,  180 => 42,  178 => 41,  173 => 39,  167 => 36,  161 => 35,  157 => 33,  151 => 32,  145 => 31,  130 => 29,  126 => 28,  115 => 27,  111 => 26,  100 => 25,  96 => 24,  92 => 23,  87 => 21,  80 => 17,  74 => 16,  67 => 14,  63 => 13,  54 => 7,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<section id=\"product-search\" class=\"cb-find\">
  {{ content_top }}
  <div class=\"cb-head\">
    <div>
      <p class=\"cb-kicker\">Catalog</p>
      <h1 class=\"cb-display\">{{ heading_title }}</h1>
    </div>
    <p>Find a piece by name, SKU, material or category. Trade prices stay hidden until an account is approved.</p>
  </div>
  <div class=\"cb-find__form\">
    <div>
      <label for=\"input-search\">{{ entry_search }}</label>
      <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_keyword }}\" id=\"input-search\"/>
      <div class=\"form-check\">
        <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\"{% if description %} checked{% endif %}/>
        <label for=\"input-description\">{{ entry_description }}</label>
      </div>
    </div>
    <div>
      <label for=\"input-category\">{{ text_category }}</label>
      <select name=\"category_id\" id=\"input-category\">
        <option value=\"0\">{{ text_category }}</option>
        {% for category_1 in categories %}
          <option value=\"{{ category_1.category_id }}\"{% if category_1.category_id == category_id %} selected{% endif %}>{{ category_1.name }}</option>
          {% for category_2 in category_1.children %}
            <option value=\"{{ category_2.category_id }}\"{% if category_2.category_id == category_id %} selected{% endif %}>{{ category_2.name }}</option>
            {% for category_3 in category_2.children %}
              <option value=\"{{ category_3.category_id }}\"{% if category_3.category_id == category_id %} selected{% endif %}>{{ category_3.name }}</option>
            {% endfor %}
          {% endfor %}
        {% endfor %}
      </select>
      <div class=\"form-check\">
        <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\"{% if sub_category %} checked{% endif %}/>
        <label for=\"input-sub-category\">{{ text_sub_category }}</label>
      </div>
    </div>
    <button type=\"button\" id=\"button-search\" class=\"cb-btn cb-btn--black\">{{ button_search }}</button>
  </div>
  {% if products %}
    <div class=\"cb-coll-tools\">
      <p class=\"cb-kicker\">{{ text_search }}</p>
      <div class=\"cb-coll-sort\">
        <span>{{ text_sort }}</span>
        <label>
          <select id=\"input-sort\" aria-label=\"{{ text_sort }}\" onchange=\"location = this.value;\">
            {% for sorts in sorts %}
              <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
            {% endfor %}
          </select>
          <img src=\"catalog/view/image/craftboat/chevron.svg\" alt=\"\">
        </label>
      </div>
    </div>
    <div class=\"cb-grid\">
      {% for product in products %}
        {{ product }}
      {% endfor %}
    </div>
    <div class=\"cb-find__pages\">
      {{ pagination }}
      <p>{{ results }}</p>
    </div>
  {% else %}
    <p class=\"cb-find__empty\">{{ text_no_results }}</p>
  {% endif %}
  {{ content_bottom }}
</section>
<script type=\"text/javascript\"><!--
\$('#button-search').on('click', function() {
    url = 'index.php?route=product/search&language={{ language }}';

    var search = \$('#input-search').val();

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var description = \$('#input-description:checked').prop('value');

    if (description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').on('keydown', function(e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function() {
    \$('#input-sub-category').prop('disabled', this.value == '0');
});

\$('#input-category').trigger('change');
//--></script>
{{ footer }}
", "catalog/view/template/product/search.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\product\\search.twig");
    }
}
