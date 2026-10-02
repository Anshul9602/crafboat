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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_f2f631886e4d8ef7fd76699ff0c97adf extends Template
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
<div id=\"account-login\" class=\"container cb-auth\">
  <div class=\"row g-0 align-items-stretch\">
    <div class=\"col-lg-6\">
      <img src=\"";
        // line 5
        yield ($context["photo"] ?? null);
        yield "\" alt=\"\" class=\"cb-auth__img\">
    </div>
    <div id=\"content\" class=\"col-lg-6 cb-auth__form\">
    ";
        // line 8
        yield ($context["content_top"] ?? null);
        yield "
    ";
        // line 9
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        // line 12
        yield "    ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        // line 15
        yield "    <form id=\"form-login\" action=\"";
        yield ($context["login"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
      <h1>";
        // line 16
        yield ($context["text_returning_customer"] ?? null);
        yield "</h1>
      <p>";
        // line 17
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</p>
      <div class=\"mb-3\">
        <label for=\"input-email\" class=\"col-form-label\">";
        // line 19
        yield ($context["entry_email"] ?? null);
        yield "</label>
        <input type=\"email\" name=\"email\" value=\"";
        // line 20
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
      </div>
      <div class=\"mb-3\">
        <label for=\"input-password\" class=\"col-form-label\">";
        // line 23
        yield ($context["entry_password"] ?? null);
        yield "</label>
        <input type=\"password\" name=\"password\" value=\"";
        // line 24
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control mb-1\"/>
        <a href=\"";
        // line 25
        yield ($context["forgotten"] ?? null);
        yield "\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a>
      </div>
      ";
        // line 27
        if ((($tmp = ($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "        <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\"/>
      ";
        }
        // line 30
        yield "      <button type=\"submit\" class=\"btn btn-primary\">";
        yield ($context["button_login"] ?? null);
        yield "</button>
    </form>
    <p class=\"cb-auth__note\">New to Craft Boat? <a href=\"";
        // line 32
        yield ($context["register"] ?? null);
        yield "\">Apply for a trade account</a> or <a href=\"";
        yield ($context["register_wholesale"] ?? null);
        yield "\">apply for a wholesale account</a>.</p>
    ";
        // line 33
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
  </div>
</div>
";
        // line 37
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
        return "catalog/view/template/account/login.twig";
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
        return array (  146 => 37,  139 => 33,  133 => 32,  127 => 30,  121 => 28,  119 => 27,  112 => 25,  106 => 24,  102 => 23,  94 => 20,  90 => 19,  85 => 17,  81 => 16,  76 => 15,  70 => 13,  67 => 12,  61 => 10,  59 => 9,  55 => 8,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-login\" class=\"container cb-auth\">
  <div class=\"row g-0 align-items-stretch\">
    <div class=\"col-lg-6\">
      <img src=\"{{ photo }}\" alt=\"\" class=\"cb-auth__img\">
    </div>
    <div id=\"content\" class=\"col-lg-6 cb-auth__form\">
    {{ content_top }}
    {% if success %}
      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endif %}
    {% if error_warning %}
      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endif %}
    <form id=\"form-login\" action=\"{{ login }}\" method=\"post\" data-oc-toggle=\"ajax\">
      <h1>{{ text_returning_customer }}</h1>
      <p>{{ text_i_am_returning_customer }}</p>
      <div class=\"mb-3\">
        <label for=\"input-email\" class=\"col-form-label\">{{ entry_email }}</label>
        <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
      </div>
      <div class=\"mb-3\">
        <label for=\"input-password\" class=\"col-form-label\">{{ entry_password }}</label>
        <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control mb-1\"/>
        <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a>
      </div>
      {% if redirect %}
        <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
      {% endif %}
      <button type=\"submit\" class=\"btn btn-primary\">{{ button_login }}</button>
    </form>
    <p class=\"cb-auth__note\">New to Craft Boat? <a href=\"{{ register }}\">Apply for a trade account</a> or <a href=\"{{ register_wholesale }}\">apply for a wholesale account</a>.</p>
    {{ content_bottom }}
    </div>
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/login.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\login.twig");
    }
}
