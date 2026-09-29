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

/* catalog/view/template/common/currency.twig */
class __TwigTemplate_a7be9ee5c3ce45239690badfed899204 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currencies"] ?? null)) > 1)) {
            // line 2
            yield "  <form id=\"form-currency\" action=\"";
            yield ($context["action"] ?? null);
            yield "\" method=\"post\" data-oc-toggle=\"ajax\">
    <div class=\"dropdown\"><span role=\"button\" data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 3
            if ((($tmp = ($context["symbol_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<strong>";
                yield ($context["symbol_left"] ?? null);
                yield "</strong>";
            } elseif ((($tmp = ($context["symbol_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<strong>";
                yield ($context["symbol_right"] ?? null);
                yield "</strong>";
            }
            yield " <span class=\"d-none d-md-inline\">";
            yield ($context["text_currency"] ?? null);
            yield "</span> <i class=\"fa-solid fa-caret-down\"></i></span>
      <ul class=\"dropdown-menu\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 7
                    yield "            <li><span role=\"button\" data-code=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 7);
                    yield "</span></li>
          ";
                } else {
                    // line 9
                    yield "            <li><span role=\"button\" data-code=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 9);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 9);
                    yield "</span></li>
          ";
                }
                // line 11
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\"/>
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 15
            yield ($context["redirect"] ?? null);
            yield "\"/>
  </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/currency.twig";
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
        return array (  102 => 15,  97 => 12,  91 => 11,  81 => 9,  71 => 7,  68 => 6,  64 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if currencies|length > 1 %}
  <form id=\"form-currency\" action=\"{{ action }}\" method=\"post\" data-oc-toggle=\"ajax\">
    <div class=\"dropdown\"><span role=\"button\" data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">{% if symbol_left %}<strong>{{ symbol_left }}</strong>{% elseif symbol_right %}<strong>{{ symbol_right }}</strong>{% endif %} <span class=\"d-none d-md-inline\">{{ text_currency }}</span> <i class=\"fa-solid fa-caret-down\"></i></span>
      <ul class=\"dropdown-menu\">
        {% for currency in currencies %}
          {% if currency.symbol_left %}
            <li><span role=\"button\" data-code=\"{{ currency.code }}\" class=\"dropdown-item\">{{ currency.symbol_left }} {{ currency.title }}</span></li>
          {% else %}
            <li><span role=\"button\" data-code=\"{{ currency.code }}\" class=\"dropdown-item\">{{ currency.symbol_right }} {{ currency.title }}</span></li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\"/>
    <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
  </form>
{% endif %}
", "catalog/view/template/common/currency.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\currency.twig");
    }
}
