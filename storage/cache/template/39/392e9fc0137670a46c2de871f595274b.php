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

/* extension/opencart/catalog/view/template/module/account.twig */
class __TwigTemplate_7ea963edba5dff3aa24f132edb26366f extends Template
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
        yield "<div class=\"list-group cb-account-nav mb-3\">
  ";
        // line 2
        if ((($tmp =  !($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <a href=\"";
            yield ($context["login"] ?? null);
            yield "\" class=\"list-group-item";
            if ((($context["route"] ?? null) == "account/login")) {
                yield " is-active";
            }
            yield "\">";
            yield ($context["text_login"] ?? null);
            yield "</a>
    <a href=\"";
            // line 4
            yield ($context["register"] ?? null);
            yield "\" class=\"list-group-item";
            if ((($context["route"] ?? null) == "account/register")) {
                yield " is-active";
            }
            yield "\">";
            yield ($context["text_register"] ?? null);
            yield "</a>
    <a href=\"";
            // line 5
            yield ($context["forgotten"] ?? null);
            yield "\" class=\"list-group-item";
            if ((($context["route"] ?? null) == "account/forgotten")) {
                yield " is-active";
            }
            yield "\">";
            yield ($context["text_forgotten"] ?? null);
            yield "</a>
  ";
        }
        // line 7
        yield "  <a href=\"";
        yield ($context["account"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/account")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
  ";
        // line 8
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <a href=\"";
            yield ($context["edit"] ?? null);
            yield "\" class=\"list-group-item";
            if ((($context["route"] ?? null) == "account/edit")) {
                yield " is-active";
            }
            yield "\">";
            yield ($context["text_edit"] ?? null);
            yield "</a>
    <a href=\"";
            // line 10
            yield ($context["password"] ?? null);
            yield "\" class=\"list-group-item";
            if ((($context["route"] ?? null) == "account/password")) {
                yield " is-active";
            }
            yield "\">";
            yield ($context["text_password"] ?? null);
            yield "</a>
  ";
        }
        // line 12
        yield "  <a href=\"";
        yield ($context["payment_method"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/payment_method")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_payment_method"] ?? null);
        yield "</a>
  <a href=\"";
        // line 13
        yield ($context["address"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/address")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a>
  <a href=\"";
        // line 14
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/wishlist")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a>
  <a href=\"";
        // line 15
        yield ($context["order"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/order")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a>
  <a href=\"";
        // line 16
        yield ($context["download"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/download")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a>
  <a href=\"";
        // line 17
        yield ($context["subscription"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/subscription")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a>
  <a href=\"";
        // line 18
        yield ($context["reward"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/reward")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_reward"] ?? null);
        yield "</a>
  <a href=\"";
        // line 19
        yield ($context["return"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/returns")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a>
  <a href=\"";
        // line 20
        yield ($context["transaction"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/transaction")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a>
  <a href=\"";
        // line 21
        yield ($context["newsletter"] ?? null);
        yield "\" class=\"list-group-item";
        if ((($context["route"] ?? null) == "account/newsletter")) {
            yield " is-active";
        }
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a>
  ";
        // line 22
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <a href=\"";
            yield ($context["logout"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a>
  ";
        }
        // line 25
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/account.twig";
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
        return array (  225 => 25,  217 => 23,  215 => 22,  205 => 21,  195 => 20,  185 => 19,  175 => 18,  165 => 17,  155 => 16,  145 => 15,  135 => 14,  125 => 13,  114 => 12,  103 => 10,  92 => 9,  90 => 8,  79 => 7,  68 => 5,  58 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"list-group cb-account-nav mb-3\">
  {% if not logged %}
    <a href=\"{{ login }}\" class=\"list-group-item{% if route == 'account/login' %} is-active{% endif %}\">{{ text_login }}</a>
    <a href=\"{{ register }}\" class=\"list-group-item{% if route == 'account/register' %} is-active{% endif %}\">{{ text_register }}</a>
    <a href=\"{{ forgotten }}\" class=\"list-group-item{% if route == 'account/forgotten' %} is-active{% endif %}\">{{ text_forgotten }}</a>
  {% endif %}
  <a href=\"{{ account }}\" class=\"list-group-item{% if route == 'account/account' %} is-active{% endif %}\">{{ text_account }}</a>
  {% if logged %}
    <a href=\"{{ edit }}\" class=\"list-group-item{% if route == 'account/edit' %} is-active{% endif %}\">{{ text_edit }}</a>
    <a href=\"{{ password }}\" class=\"list-group-item{% if route == 'account/password' %} is-active{% endif %}\">{{ text_password }}</a>
  {% endif %}
  <a href=\"{{ payment_method }}\" class=\"list-group-item{% if route == 'account/payment_method' %} is-active{% endif %}\">{{ text_payment_method }}</a>
  <a href=\"{{ address }}\" class=\"list-group-item{% if route == 'account/address' %} is-active{% endif %}\">{{ text_address }}</a>
  <a href=\"{{ wishlist }}\" class=\"list-group-item{% if route == 'account/wishlist' %} is-active{% endif %}\">{{ text_wishlist }}</a>
  <a href=\"{{ order }}\" class=\"list-group-item{% if route == 'account/order' %} is-active{% endif %}\">{{ text_order }}</a>
  <a href=\"{{ download }}\" class=\"list-group-item{% if route == 'account/download' %} is-active{% endif %}\">{{ text_download }}</a>
  <a href=\"{{ subscription }}\" class=\"list-group-item{% if route == 'account/subscription' %} is-active{% endif %}\">{{ text_subscription }}</a>
  <a href=\"{{ reward }}\" class=\"list-group-item{% if route == 'account/reward' %} is-active{% endif %}\">{{ text_reward }}</a>
  <a href=\"{{ return }}\" class=\"list-group-item{% if route == 'account/returns' %} is-active{% endif %}\">{{ text_return }}</a>
  <a href=\"{{ transaction }}\" class=\"list-group-item{% if route == 'account/transaction' %} is-active{% endif %}\">{{ text_transaction }}</a>
  <a href=\"{{ newsletter }}\" class=\"list-group-item{% if route == 'account/newsletter' %} is-active{% endif %}\">{{ text_newsletter }}</a>
  {% if logged %}
    <a href=\"{{ logout }}\" class=\"list-group-item\">{{ text_logout }}</a>
  {% endif %}
</div>
", "extension/opencart/catalog/view/template/module/account.twig", "C:\\xampp\\htdocs\\crafboat\\extension\\opencart\\catalog\\view\\template\\module\\account.twig");
    }
}
