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

/* catalog/view/template/account/address_list.twig */
class __TwigTemplate_4338a5fa71444601d9186f9ead522605 extends Template
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
        if ((($tmp = ($context["addresses"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div class=\"cb-addr\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 4
                yield "      <article class=\"cb-addr__card\">
        <div class=\"cb-addr__top\">
          <h2>";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 6);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 6);
                yield "</h2>
          ";
                // line 7
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"cb-addr__badge\">";
                    yield ($context["text_default"] ?? null);
                    yield "</span>";
                }
                // line 8
                yield "        </div>
        ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "          <p class=\"cb-addr__company\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 10);
                    yield "</p>
        ";
                }
                // line 12
                yield "        <p>
          ";
                // line 13
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 13);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 13);
                }
                yield "<br>
          ";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 14);
                yield "<br>
          ";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 15);
                yield ", ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 15);
                yield "
        </p>
        <div class=\"cb-addr__actions\">
          <a href=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "edit", [], "any", false, false, false, 18);
                yield "\" class=\"btn btn-light\">";
                yield ($context["button_edit"] ?? null);
                yield "</a>
          <a href=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "delete", [], "any", false, false, false, 19);
                yield "\" class=\"btn btn-danger\">";
                yield ($context["button_delete"] ?? null);
                yield "</a>
        </div>
      </article>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "  </div>
";
        } else {
            // line 25
            yield "  <p class=\"cb-addr__empty\">";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/address_list.twig";
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
        return array (  125 => 25,  121 => 23,  109 => 19,  103 => 18,  95 => 15,  89 => 14,  81 => 13,  78 => 12,  72 => 10,  70 => 9,  67 => 8,  61 => 7,  55 => 6,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if addresses %}
  <div class=\"cb-addr\">
    {% for address in addresses %}
      <article class=\"cb-addr__card\">
        <div class=\"cb-addr__top\">
          <h2>{{ address.firstname }} {{ address.lastname }}</h2>
          {% if address.default %}<span class=\"cb-addr__badge\">{{ text_default }}</span>{% endif %}
        </div>
        {% if address.company %}
          <p class=\"cb-addr__company\">{{ address.company }}</p>
        {% endif %}
        <p>
          {{ address.address_1 }}{% if address.address_2 %}<br>{{ address.address_2 }}{% endif %}<br>
          {{ address.city }} {{ address.postcode }}<br>
          {{ address.zone }}, {{ address.country }}
        </p>
        <div class=\"cb-addr__actions\">
          <a href=\"{{ address.edit }}\" class=\"btn btn-light\">{{ button_edit }}</a>
          <a href=\"{{ address.delete }}\" class=\"btn btn-danger\">{{ button_delete }}</a>
        </div>
      </article>
    {% endfor %}
  </div>
{% else %}
  <p class=\"cb-addr__empty\">{{ text_no_results }}</p>
{% endif %}
", "catalog/view/template/account/address_list.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\address_list.twig");
    }
}
