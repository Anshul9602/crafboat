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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_97a41042f5cbbfbae3f0189469c4c7b3 extends Template
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
        yield "<div class=\"tck-mega__panel\">
  <div class=\"tck-mega__grid\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            yield "      <a class=\"tck-mega__card\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
            yield "\">
        <img src=\"";
            // line 5
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 5);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
            yield "\">
        <span>";
            // line 6
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
            yield " <i class=\"fa-solid fa-arrow-up-right\"></i></span>
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/menu.twig";
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
        return array (  70 => 9,  61 => 6,  55 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"tck-mega__panel\">
  <div class=\"tck-mega__grid\">
    {% for category in categories %}
      <a class=\"tck-mega__card\" href=\"{{ category.href }}\">
        <img src=\"{{ category.image }}\" alt=\"{{ category.name }}\">
        <span>{{ category.name }} <i class=\"fa-solid fa-arrow-up-right\"></i></span>
      </a>
    {% endfor %}
  </div>
</div>
", "catalog/view/template/common/menu.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\menu.twig");
    }
}
