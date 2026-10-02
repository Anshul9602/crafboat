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

/* catalog/view/template/account/address_form.twig */
class __TwigTemplate_5786aa57c56e2abd5484418bf001d67e extends Template
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
<div id=\"account-address\" class=\"container cb-apply\">
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
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["text_address"] ?? null);
        yield "</h1>
      <form id=\"form-address\" action=\"";
        // line 11
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-firstname\">";
        // line 15
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 16
        yield ($context["firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-lastname\">";
        // line 20
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 21
        yield ($context["lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-company\">";
        // line 25
        yield ($context["entry_company"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"company\" value=\"";
        // line 26
        yield ($context["company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\"/>
              <div id=\"error-company\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-12 mb-3 required\">
              <label class=\"form-label\" for=\"input-address-1\">";
        // line 30
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"address_1\" value=\"";
        // line 31
        yield ($context["address_1"] ?? null);
        yield "\" id=\"input-address-1\" class=\"form-control\"/>
              <div id=\"error-address-1\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-12 mb-3\">
              <label class=\"form-label\" for=\"input-address-2\">";
        // line 35
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"address_2\" value=\"";
        // line 36
        yield ($context["address_2"] ?? null);
        yield "\" id=\"input-address-2\" class=\"form-control\"/>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-country\">";
        // line 39
        yield ($context["entry_country"] ?? null);
        yield "</label>
              <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
                <option value=\"0\">";
        // line 41
        yield ($context["text_select"] ?? null);
        yield "</option>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 43
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 43);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 43) == ($context["country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 43);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "              </select>
              <div id=\"error-country\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-zone\">";
        // line 49
        yield ($context["entry_zone"] ?? null);
        yield "</label>
              <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\">
                <option value=\"\">";
        // line 51
        yield ($context["text_select"] ?? null);
        yield "</option>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 53
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 53);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 53) == ($context["zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 53);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "              </select>
              <div id=\"error-zone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-city\">";
        // line 59
        yield ($context["entry_city"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"city\" value=\"";
        // line 60
        yield ($context["city"] ?? null);
        yield "\" id=\"input-city\" class=\"form-control\"/>
              <div id=\"error-city\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-postcode\">";
        // line 64
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"postcode\" value=\"";
        // line 65
        yield ($context["postcode"] ?? null);
        yield "\" id=\"input-postcode\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"10\"/>
              <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 71
            yield "
            ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 72) == "select")) {
                // line 73
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-custom-field-";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 74);
                yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 76
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                yield "]\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                yield "\" class=\"form-select\">
                    <option value=\"\">";
                // line 77
                yield ($context["text_select"] ?? null);
                yield "</option>
                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 79
                    yield "                      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 79);
                    yield "\"";
                    if (((($_v0 = ($context["address_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 79) == (($_v1 = ($context["address_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79)] ?? null) : null)))) {
                        yield " selected";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 79);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                  </select>
                  <div id=\"error-custom-field-";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 86
            yield "
            ";
            // line 87
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 87) == "radio")) {
                // line 88
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 89);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                yield "\">
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 93
                    yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 94
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v2 = ($context["address_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94) == (($_v3 = ($context["address_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 94);
                    yield "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                yield "                  </div>
                  <div id=\"error-custom-field-";
                // line 98
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 102
            yield "
            ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 103) == "checkbox")) {
                // line 104
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 105);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                yield "\">
                    ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 109
                    yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v4 = ($context["address_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110), (($_v5 = ($context["address_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                    yield "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "                  </div>
                  <div id=\"error-custom-field-";
                // line 114
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 118
            yield "
            ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "text")) {
                // line 120
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-custom-field-";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "]\" value=\"";
                if ((($tmp = (($_v6 = ($context["address_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v7 = ($context["address_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 128
            yield "
            ";
            // line 129
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "textarea")) {
                // line 130
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-custom-field-";
                // line 131
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 133
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                yield "\" class=\"form-control\">";
                if ((($tmp = (($_v8 = ($context["address_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v9 = ($context["address_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 133);
                }
                yield "</textarea>
                  <div id=\"error-custom-field-";
                // line 134
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 138
            yield "
            ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 139) == "file")) {
                // line 140
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 141
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 144
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 145
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                yield "]\" value=\"";
                if ((($tmp = (($_v10 = ($context["address_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v11 = ($context["address_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null);
                }
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                yield "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 151
            yield "
            ";
            // line 152
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 152) == "date")) {
                // line 153
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-custom-field-";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"date\" name=\"custom_field[";
                // line 156
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "]\" value=\"";
                if ((($tmp = (($_v12 = ($context["address_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v13 = ($context["address_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 156);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 157
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 161
            yield "
            ";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "time")) {
                // line 163
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-custom-field-";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"time\" name=\"custom_field[";
                // line 166
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "]\" value=\"";
                if ((($tmp = (($_v14 = ($context["address_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v15 = ($context["address_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 166);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 171
            yield "
            ";
            // line 172
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 172) == "datetime")) {
                // line 173
                yield "              <div class=\"row mb-3";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required";
                }
                yield "\">
                <label for=\"input-custom-field-";
                // line 174
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"datetime-local\" name=\"custom_field[";
                // line 176
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                yield "]\" value=\"";
                if ((($tmp = (($_v16 = ($context["address_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v17 = ($context["address_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 176);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 177
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 181
            yield "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "
          <div class=\"row\">
          <div class=\"col-12 mb-3\">
            <label class=\"form-label\">";
        // line 186
        yield ($context["entry_default"] ?? null);
        yield "</label>
            <div class=\"cb-pay\">
              <div class=\"form-check\">
                <input type=\"radio\" name=\"default\" value=\"1\" id=\"input-default-yes\" class=\"form-check-input\"";
        // line 189
        if ((($tmp = ($context["default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                <label for=\"input-default-yes\" class=\"form-check-label\">";
        // line 190
        yield ($context["text_yes"] ?? null);
        yield "</label>
              </div>
              <div class=\"form-check\">
                <input type=\"radio\" name=\"default\" value=\"0\" id=\"input-default-no\" class=\"form-check-input\"";
        // line 193
        if ((($tmp =  !($context["default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                <label for=\"input-default-no\" class=\"form-check-label\">";
        // line 194
        yield ($context["text_no"] ?? null);
        yield "</label>
              </div>
            </div>
          </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"";
        // line 202
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 205
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </div>
      </form>
      ";
        // line 209
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 210
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 217
        yield ($context["language"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            \$('#input-postcode').closest('.mb-3').toggleClass('required', json['postcode_required'] == '1');

            html = '<option value=\"\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 236
        yield ($context["zone_id"] ?? null);
        yield "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 254
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
        return "catalog/view/template/account/address_form.twig";
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
        return array (  783 => 254,  769 => 243,  759 => 236,  750 => 230,  734 => 217,  724 => 210,  720 => 209,  713 => 205,  705 => 202,  694 => 194,  688 => 193,  682 => 190,  676 => 189,  670 => 186,  665 => 183,  658 => 181,  651 => 177,  637 => 176,  630 => 174,  623 => 173,  621 => 172,  618 => 171,  611 => 167,  597 => 166,  590 => 164,  583 => 163,  581 => 162,  578 => 161,  571 => 157,  557 => 156,  550 => 154,  543 => 153,  541 => 152,  538 => 151,  531 => 147,  520 => 145,  508 => 144,  502 => 141,  495 => 140,  493 => 139,  490 => 138,  483 => 134,  469 => 133,  462 => 131,  455 => 130,  453 => 129,  450 => 128,  443 => 124,  429 => 123,  422 => 121,  415 => 120,  413 => 119,  410 => 118,  403 => 114,  400 => 113,  379 => 110,  376 => 109,  372 => 108,  368 => 107,  363 => 105,  356 => 104,  354 => 103,  351 => 102,  344 => 98,  341 => 97,  320 => 94,  317 => 93,  313 => 92,  309 => 91,  304 => 89,  297 => 88,  295 => 87,  292 => 86,  285 => 82,  282 => 81,  267 => 79,  263 => 78,  259 => 77,  253 => 76,  246 => 74,  239 => 73,  237 => 72,  234 => 71,  230 => 70,  222 => 65,  218 => 64,  211 => 60,  207 => 59,  201 => 55,  186 => 53,  182 => 52,  178 => 51,  173 => 49,  167 => 45,  152 => 43,  148 => 42,  144 => 41,  139 => 39,  133 => 36,  129 => 35,  122 => 31,  118 => 30,  111 => 26,  107 => 25,  100 => 21,  96 => 20,  89 => 16,  85 => 15,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-address\" class=\"container cb-apply\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ text_address }}</h1>
      <form id=\"form-address\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-firstname\">{{ entry_firstname }}</label>
              <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
              <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-company\">{{ entry_company }}</label>
              <input type=\"text\" name=\"company\" value=\"{{ company }}\" id=\"input-company\" class=\"form-control\"/>
              <div id=\"error-company\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-12 mb-3 required\">
              <label class=\"form-label\" for=\"input-address-1\">{{ entry_address_1 }}</label>
              <input type=\"text\" name=\"address_1\" value=\"{{ address_1 }}\" id=\"input-address-1\" class=\"form-control\"/>
              <div id=\"error-address-1\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-12 mb-3\">
              <label class=\"form-label\" for=\"input-address-2\">{{ entry_address_2 }}</label>
              <input type=\"text\" name=\"address_2\" value=\"{{ address_2 }}\" id=\"input-address-2\" class=\"form-control\"/>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-country\">{{ entry_country }}</label>
              <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
                <option value=\"0\">{{ text_select }}</option>
                {% for country in countries %}
                  <option value=\"{{ country.country_id }}\"{% if country.country_id == country_id %} selected{% endif %}>{{ country.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-country\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-zone\">{{ entry_zone }}</label>
              <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for zone in zones %}
                  <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == zone_id %} selected{% endif %}>{{ zone.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-zone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-city\">{{ entry_city }}</label>
              <input type=\"text\" name=\"city\" value=\"{{ city }}\" id=\"input-city\" class=\"form-control\"/>
              <div id=\"error-city\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-postcode\">{{ entry_postcode }}</label>
              <input type=\"text\" name=\"postcode\" value=\"{{ postcode }}\" id=\"input-postcode\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"10\"/>
              <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          {% for custom_field in custom_fields %}

            {% if custom_field.type == 'select' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'checkbox' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'text' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'textarea' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'file' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'date' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'time' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %}\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

          {% endfor %}

          <div class=\"row\">
          <div class=\"col-12 mb-3\">
            <label class=\"form-label\">{{ entry_default }}</label>
            <div class=\"cb-pay\">
              <div class=\"form-check\">
                <input type=\"radio\" name=\"default\" value=\"1\" id=\"input-default-yes\" class=\"form-check-input\"{% if default %} checked{% endif %}/>
                <label for=\"input-default-yes\" class=\"form-check-label\">{{ text_yes }}</label>
              </div>
              <div class=\"form-check\">
                <input type=\"radio\" name=\"default\" value=\"0\" id=\"input-default-no\" class=\"form-check-input\"{% if not default %} checked{% endif %}/>
                <label for=\"input-default-no\" class=\"form-check-label\">{{ text_no }}</label>
              </div>
            </div>
          </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language={{ language }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            \$('#input-postcode').closest('.mb-3').toggleClass('required', json['postcode_required'] == '1');

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/account/address_form.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\address_form.twig");
    }
}
