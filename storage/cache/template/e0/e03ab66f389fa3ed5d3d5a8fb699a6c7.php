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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_a37672bb046800a008242e2fafcbba51 extends Template
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
        yield "<a class=\"cb-card\" href=\"";
        yield ($context["href"] ?? null);
        yield "\">
  <span class=\"cb-badge\">";
        // line 2
        yield ($context["badge"] ?? null);
        yield "</span>
  <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"";
        // line 3
        yield ($context["product_id"] ?? null);
        yield "\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
  <img class=\"cb-card__img\" src=\"";
        // line 4
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\">
  <div>
    <div class=\"cb-meta\"><span>";
        // line 6
        yield ($context["category_name"] ?? null);
        yield "</span><span>";
        yield ($context["sku"] ?? null);
        yield "</span></div>
    <h3>";
        // line 7
        yield ($context["name"] ?? null);
        yield "</h3>
    ";
        // line 8
        if ((($tmp = ($context["collection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"cb-collection\">";
            yield ($context["collection"] ?? null);
            yield "</p>";
        }
        // line 9
        yield "  </div>
  <div>
    <p class=\"cb-ship";
        // line 11
        if ((($tmp = ($context["ship_wait"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " cb-ship--wait";
        }
        yield "\">";
        yield ($context["ship"] ?? null);
        yield "</p>
    <hr>
    <span class=\"cb-card__foot\">";
        // line 13
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Signed in · pricing unlocks after approval";
        } else {
            yield "Sign in to view wholesale pricing";
        }
        yield " <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
  </div>
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/thumb.twig";
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
        return array (  91 => 13,  82 => 11,  78 => 9,  72 => 8,  68 => 7,  62 => 6,  55 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a class=\"cb-card\" href=\"{{ href }}\">
  <span class=\"cb-badge\">{{ badge }}</span>
  <span class=\"cb-heart\" role=\"button\" tabindex=\"0\" data-wishlist=\"{{ product_id }}\" aria-label=\"Save\"><img src=\"catalog/view/image/craftboat/heart.svg\" alt=\"\"></span>
  <img class=\"cb-card__img\" src=\"{{ thumb }}\" alt=\"{{ name }}\">
  <div>
    <div class=\"cb-meta\"><span>{{ category_name }}</span><span>{{ sku }}</span></div>
    <h3>{{ name }}</h3>
    {% if collection %}<p class=\"cb-collection\">{{ collection }}</p>{% endif %}
  </div>
  <div>
    <p class=\"cb-ship{% if ship_wait %} cb-ship--wait{% endif %}\">{{ ship }}</p>
    <hr>
    <span class=\"cb-card__foot\">{% if logged %}Signed in · pricing unlocks after approval{% else %}Sign in to view wholesale pricing{% endif %} <img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></span>
  </div>
</a>
", "catalog/view/template/product/thumb.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\product\\thumb.twig");
    }
}
