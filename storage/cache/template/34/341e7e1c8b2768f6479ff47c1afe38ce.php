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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_e8fa28b73ecc42e153ebb7343fcaa98a extends Template
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
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  ";
        // line 8
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 12
        yield ($context["content_top"] ?? null);
        yield "
      <h1>Your trade account</h1>
      <div class=\"cb-acct-board\">
        <section class=\"cb-acct-card\">
          <h2>";
        // line 16
        yield ($context["text_my_account"] ?? null);
        yield "</h2>
          <a href=\"";
        // line 17
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a>
          <a href=\"";
        // line 18
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a>
          <a href=\"";
        // line 19
        yield ($context["payment_method"] ?? null);
        yield "\">";
        yield ($context["text_payment_method"] ?? null);
        yield "</a>
          <a href=\"";
        // line 20
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a>
          <a href=\"";
        // line 21
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a>
        </section>
        <section class=\"cb-acct-card\">
          <h2>";
        // line 24
        yield ($context["text_my_orders"] ?? null);
        yield "</h2>
          <a href=\"";
        // line 25
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a>
          <a href=\"";
        // line 26
        yield ($context["subscription"] ?? null);
        yield "\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a>
          <a href=\"";
        // line 27
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a>
          ";
        // line 28
        if ((($tmp = ($context["reward"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "            <a href=\"";
            yield ($context["reward"] ?? null);
            yield "\">";
            yield ($context["text_reward"] ?? null);
            yield "</a>
          ";
        }
        // line 31
        yield "          <a href=\"";
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a>
          <a href=\"";
        // line 32
        yield ($context["transaction"] ?? null);
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a>
        </section>
        <div class=\"cb-acct-stack\">
          ";
        // line 35
        if ((($tmp = ($context["affiliate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "            <section class=\"cb-acct-card\">
              <h2>";
            // line 37
            yield ($context["text_my_affiliate"] ?? null);
            yield "</h2>
              ";
            // line 38
            if ((($tmp =  !($context["tracking"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "                <a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_add"] ?? null);
                yield "</a>
              ";
            } else {
                // line 41
                yield "                <a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_edit"] ?? null);
                yield "</a>
                <a href=\"";
                // line 42
                yield ($context["tracking"] ?? null);
                yield "\">";
                yield ($context["text_tracking"] ?? null);
                yield "</a>
              ";
            }
            // line 44
            yield "            </section>
          ";
        }
        // line 46
        yield "          <section class=\"cb-acct-card\">
            <h2>";
        // line 47
        yield ($context["text_my_newsletter"] ?? null);
        yield "</h2>
            <a href=\"";
        // line 48
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a>
          </section>
        </div>
      </div>
      ";
        // line 52
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 53
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 55
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
        return "catalog/view/template/account/account.twig";
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
        return array (  231 => 55,  226 => 53,  222 => 52,  213 => 48,  209 => 47,  206 => 46,  202 => 44,  195 => 42,  188 => 41,  180 => 39,  178 => 38,  174 => 37,  171 => 36,  169 => 35,  161 => 32,  154 => 31,  146 => 29,  144 => 28,  138 => 27,  132 => 26,  126 => 25,  122 => 24,  114 => 21,  108 => 20,  102 => 19,  96 => 18,  90 => 17,  86 => 16,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}</div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>Your trade account</h1>
      <div class=\"cb-acct-board\">
        <section class=\"cb-acct-card\">
          <h2>{{ text_my_account }}</h2>
          <a href=\"{{ edit }}\">{{ text_edit }}</a>
          <a href=\"{{ password }}\">{{ text_password }}</a>
          <a href=\"{{ payment_method }}\">{{ text_payment_method }}</a>
          <a href=\"{{ address }}\">{{ text_address }}</a>
          <a href=\"{{ wishlist }}\">{{ text_wishlist }}</a>
        </section>
        <section class=\"cb-acct-card\">
          <h2>{{ text_my_orders }}</h2>
          <a href=\"{{ order }}\">{{ text_order }}</a>
          <a href=\"{{ subscription }}\">{{ text_subscription }}</a>
          <a href=\"{{ download }}\">{{ text_download }}</a>
          {% if reward %}
            <a href=\"{{ reward }}\">{{ text_reward }}</a>
          {% endif %}
          <a href=\"{{ return }}\">{{ text_return }}</a>
          <a href=\"{{ transaction }}\">{{ text_transaction }}</a>
        </section>
        <div class=\"cb-acct-stack\">
          {% if affiliate %}
            <section class=\"cb-acct-card\">
              <h2>{{ text_my_affiliate }}</h2>
              {% if not tracking %}
                <a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a>
              {% else %}
                <a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a>
                <a href=\"{{ tracking }}\">{{ text_tracking }}</a>
              {% endif %}
            </section>
          {% endif %}
          <section class=\"cb-acct-card\">
            <h2>{{ text_my_newsletter }}</h2>
            <a href=\"{{ newsletter }}\">{{ text_newsletter }}</a>
          </section>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\account.twig");
    }
}
