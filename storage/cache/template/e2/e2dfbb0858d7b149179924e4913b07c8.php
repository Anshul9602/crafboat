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

/* webadmin/view/template/customer/customer_approval_info.twig */
class __TwigTemplate_c54ed84fd3ce48c51f52d8dd84ab43b1 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-url=\"";
        // line 6
        yield ($context["approve"] ?? null);
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-thumbs-up\"></i> Approve</button>
        <button type=\"button\" data-url=\"";
        // line 7
        yield ($context["deny"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-thumbs-down\"></i> Reject</button>
        <a href=\"";
        // line 8
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 10
        yield ($context["customer"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-eye\"></i> Trade application</div>
      <div class=\"card-body\">
        <div class=\"row mb-3\">
          <div class=\"col-sm-3 text-muted\">Customer</div>
          <div class=\"col-sm-9\">";
        // line 24
        yield ($context["customer"] ?? null);
        yield "</div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-3 text-muted\">E-mail</div>
          <div class=\"col-sm-9\">";
        // line 28
        yield ($context["email"] ?? null);
        yield "</div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-3 text-muted\">Mobile</div>
          <div class=\"col-sm-9\">";
        // line 32
        yield ($context["telephone"] ?? null);
        yield "</div>
        </div>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 35
            yield "          <div class=\"row mb-3\">
            <div class=\"col-sm-3 text-muted\">";
            // line 36
            yield CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 36);
            yield "</div>
            <div class=\"col-sm-9\">";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 37)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 37)) : ("—"));
            yield "</div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["documents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 41
            yield "          <div class=\"row mb-3\">
            <div class=\"col-sm-3 text-muted\">";
            // line 42
            yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "label", [], "any", false, false, false, 42);
            yield "</div>
            <div class=\"col-sm-9\">
              ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["document"], "image", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "href", [], "any", false, false, false, 45);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "image", [], "any", false, false, false, 45);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 45);
                yield "\" style=\"width:96px;height:96px;object-fit:cover;border:1px solid #ddd;border-radius:8px;\"></a>
              ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["document"], "href", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "href", [], "any", false, false, false, 47);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 47);
                yield "</a>
              ";
            } else {
                // line 49
                yield "                —
              ";
            }
            // line 51
            yield "            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('[data-url]').on('click', function() {
    var element = this;

    \$.ajax({
        url: \$(element).attr('data-url'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                location = '";
        // line 79
        yield ($context["back"] ?? null);
        yield "';
            }
        }
    });
});
//--></script>
";
        // line 85
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
        return "webadmin/view/template/customer/customer_approval_info.twig";
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
        return array (  216 => 85,  207 => 79,  180 => 54,  172 => 51,  168 => 49,  160 => 47,  158 => 46,  149 => 45,  147 => 44,  142 => 42,  139 => 41,  134 => 40,  125 => 37,  121 => 36,  118 => 35,  114 => 34,  109 => 32,  102 => 28,  95 => 24,  84 => 15,  73 => 13,  69 => 12,  64 => 10,  59 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-url=\"{{ approve }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-thumbs-up\"></i> Approve</button>
        <button type=\"button\" data-url=\"{{ deny }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-thumbs-down\"></i> Reject</button>
        <a href=\"{{ back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>{{ customer }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-eye\"></i> Trade application</div>
      <div class=\"card-body\">
        <div class=\"row mb-3\">
          <div class=\"col-sm-3 text-muted\">Customer</div>
          <div class=\"col-sm-9\">{{ customer }}</div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-3 text-muted\">E-mail</div>
          <div class=\"col-sm-9\">{{ email }}</div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-3 text-muted\">Mobile</div>
          <div class=\"col-sm-9\">{{ telephone }}</div>
        </div>
        {% for field in fields %}
          <div class=\"row mb-3\">
            <div class=\"col-sm-3 text-muted\">{{ field.label }}</div>
            <div class=\"col-sm-9\">{{ field.value ?: '—' }}</div>
          </div>
        {% endfor %}
        {% for document in documents %}
          <div class=\"row mb-3\">
            <div class=\"col-sm-3 text-muted\">{{ document.label }}</div>
            <div class=\"col-sm-9\">
              {% if document.image %}
                <a href=\"{{ document.href }}\"><img src=\"{{ document.image }}\" alt=\"{{ document.name }}\" style=\"width:96px;height:96px;object-fit:cover;border:1px solid #ddd;border-radius:8px;\"></a>
              {% elseif document.href %}
                <a href=\"{{ document.href }}\">{{ document.name }}</a>
              {% else %}
                —
              {% endif %}
            </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('[data-url]').on('click', function() {
    var element = this;

    \$.ajax({
        url: \$(element).attr('data-url'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                location = '{{ back }}';
            }
        }
    });
});
//--></script>
{{ footer }}
", "webadmin/view/template/customer/customer_approval_info.twig", "C:\\xampp\\htdocs\\crafboat\\webadmin\\view\\template\\customer\\customer_approval_info.twig");
    }
}
