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
      <div class=\"cb-acct-tiles\">
        <a class=\"cb-acct-tile\" href=\"";
        // line 15
        yield ($context["wishlist"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-heart\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Wishlist</strong><em>Save pieces for a later order.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 20
        yield ($context["address"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-location-dot\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Address book</strong><em>Shipping and billing addresses.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 25
        yield ($context["password"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-lock\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Password</strong><em>Change your account password.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 30
        yield ($context["order"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-box\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Orders</strong><em>View your order history.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 35
        yield ($context["download"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-download\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Downloads</strong><em>Files from your orders.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 40
        yield ($context["return"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-rotate-left\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Returns</strong><em>Manage your return requests.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 45
        yield ($context["newsletter"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-envelope\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Newsletter</strong><em>Studio notes and wholesale updates.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 50
        yield ($context["edit"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-user\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Account</strong><em>Edit your name, email and phone.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 55
        yield ($context["payment_method"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-credit-card\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Payment methods</strong><em>Cards saved for checkout.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 60
        yield ($context["subscription"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-repeat\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Subscriptions</strong><em>Recurring orders on your account.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"";
        // line 65
        yield ($context["transaction"] ?? null);
        yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-receipt\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Transactions</strong><em>Balance and account activity.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        ";
        // line 70
        if ((($tmp = ($context["reward"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "        <a class=\"cb-acct-tile\" href=\"";
            yield ($context["reward"] ?? null);
            yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-star\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Reward points</strong><em>Points earned on your orders.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        ";
        }
        // line 77
        yield "        ";
        if ((($tmp = ($context["affiliate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "        <a class=\"cb-acct-tile\" href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-user-plus\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Affiliate</strong><em>";
            // line 80
            if ((($tmp =  !($context["tracking"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Register for an affiliate account.";
            } else {
                yield "Edit your affiliate information.";
            }
            yield "</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        ";
            // line 83
            if ((($tmp = ($context["tracking"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "        <a class=\"cb-acct-tile\" href=\"";
                yield ($context["tracking"] ?? null);
                yield "\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-link\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Tracking</strong><em>Your affiliate tracking code.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        ";
            }
            // line 90
            yield "        ";
        }
        // line 91
        yield "      </div>
      <h2 class=\"cb-acct-kicker\">Quick actions</h2>
      <div class=\"cb-acct-actions\">
        <a class=\"cb-acct-action\" href=\"";
        // line 94
        yield ($context["logout"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-from-bracket\"></i><span>Logout</span></a>
        <a class=\"cb-acct-action\" href=\"";
        // line 95
        yield ($context["order"] ?? null);
        yield "\"><i class=\"fa-solid fa-magnifying-glass\"></i><span>Track order</span></a>
        <a class=\"cb-acct-action\" href=\"";
        // line 96
        yield ($context["continue"] ?? null);
        yield "\"><i class=\"fa-solid fa-bag-shopping\"></i><span>Continue shopping</span></a>
      </div>
      ";
        // line 98
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 99
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 101
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
        return array (  246 => 101,  241 => 99,  237 => 98,  232 => 96,  228 => 95,  224 => 94,  219 => 91,  216 => 90,  206 => 84,  204 => 83,  194 => 80,  188 => 78,  185 => 77,  175 => 71,  173 => 70,  165 => 65,  157 => 60,  149 => 55,  141 => 50,  133 => 45,  125 => 40,  117 => 35,  109 => 30,  101 => 25,  93 => 20,  85 => 15,  79 => 12,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
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
      <div class=\"cb-acct-tiles\">
        <a class=\"cb-acct-tile\" href=\"{{ wishlist }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-heart\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Wishlist</strong><em>Save pieces for a later order.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ address }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-location-dot\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Address book</strong><em>Shipping and billing addresses.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ password }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-lock\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Password</strong><em>Change your account password.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ order }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-box\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Orders</strong><em>View your order history.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ download }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-download\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Downloads</strong><em>Files from your orders.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ return }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-rotate-left\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Returns</strong><em>Manage your return requests.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ newsletter }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-envelope\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Newsletter</strong><em>Studio notes and wholesale updates.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ edit }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-user\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Account</strong><em>Edit your name, email and phone.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ payment_method }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-credit-card\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Payment methods</strong><em>Cards saved for checkout.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ subscription }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-repeat\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Subscriptions</strong><em>Recurring orders on your account.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        <a class=\"cb-acct-tile\" href=\"{{ transaction }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-receipt\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Transactions</strong><em>Balance and account activity.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        {% if reward %}
        <a class=\"cb-acct-tile\" href=\"{{ reward }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-regular fa-star\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Reward points</strong><em>Points earned on your orders.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        {% endif %}
        {% if affiliate %}
        <a class=\"cb-acct-tile\" href=\"{{ affiliate }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-user-plus\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Affiliate</strong><em>{% if not tracking %}Register for an affiliate account.{% else %}Edit your affiliate information.{% endif %}</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        {% if tracking %}
        <a class=\"cb-acct-tile\" href=\"{{ tracking }}\">
          <span class=\"cb-acct-tile__icon\"><i class=\"fa-solid fa-link\"></i></span>
          <span class=\"cb-acct-tile__copy\"><strong>Tracking</strong><em>Your affiliate tracking code.</em></span>
          <span class=\"cb-acct-tile__go\" aria-hidden=\"true\">→</span>
        </a>
        {% endif %}
        {% endif %}
      </div>
      <h2 class=\"cb-acct-kicker\">Quick actions</h2>
      <div class=\"cb-acct-actions\">
        <a class=\"cb-acct-action\" href=\"{{ logout }}\"><i class=\"fa-solid fa-arrow-right-from-bracket\"></i><span>Logout</span></a>
        <a class=\"cb-acct-action\" href=\"{{ order }}\"><i class=\"fa-solid fa-magnifying-glass\"></i><span>Track order</span></a>
        <a class=\"cb-acct-action\" href=\"{{ continue }}\"><i class=\"fa-solid fa-bag-shopping\"></i><span>Continue shopping</span></a>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\account.twig");
    }
}
