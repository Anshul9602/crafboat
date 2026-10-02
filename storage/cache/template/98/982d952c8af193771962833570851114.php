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

/* webadmin/view/template/customer/customer_form.twig */
class __TwigTemplate_a26f4aeda230b954014b147c903b2823 extends Template
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
        ";
        // line 6
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "          <a href=\"";
            yield ($context["orders"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_order"] ?? null);
            yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        ";
        }
        // line 9
        yield "        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 10
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 24
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_address"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_payment_method"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_transaction"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_ip"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_authorize"] ?? null);
        yield "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            <form id=\"form-customer\" action=\"";
        // line 35
        yield ($context["save"] ?? null);
        yield "\" method=\"post\">
              <fieldset>
                <legend>";
        // line 37
        yield ($context["text_customer"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_store"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 43
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 43);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 43) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 43);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 50
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                      ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54) == ($context["language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 61
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 65
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 65);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 71
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 78
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 80
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 85
        yield ($context["entry_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 87
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3";
        // line 91
        if ((($tmp = ($context["config_telephone_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " required";
        }
        yield "\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 92
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 94
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 99
            yield "
                  ";
            // line 100
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 100) == "account")) {
                // line 101
                yield "
                    ";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "select")) {
                    // line 103
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "\" class=\"form-select\">
                            <option value=\"\">";
                    // line 107
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                            ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 109
                        yield "                              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 109);
                        yield "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    yield "                          </select>
                          <div id=\"error-custom-field-";
                    // line 112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 116
                yield "
                    ";
                // line 117
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 117) == "radio")) {
                    // line 118
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 121
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 122));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 123
                        yield "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 124
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 124);
                        yield "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    yield "                          </div>
                          <div id=\"error-custom-field-";
                    // line 128
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 132
                yield "
                    ";
                // line 133
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 137
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 139
                        yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                        // line 140
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                        yield "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    yield "                          </div>
                          <div id=\"error-custom-field-";
                    // line 144
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 148
                yield "
                    ";
                // line 149
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 149) == "text")) {
                    // line 150
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 151
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 153)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 158
                yield "
                    ";
                // line 159
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "textarea")) {
                    // line 160
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 161
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 163
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163)));
                    yield "</textarea>
                          <div id=\"error-custom-field-";
                    // line 164
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 168
                yield "
                    ";
                // line 169
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 169) == "file")) {
                    // line 170
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 171
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 171);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 174
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) : (""));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 176
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    yield "\"";
                    if ((($tmp =  !(($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 177
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "\"";
                    if ((($tmp =  !(($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 179
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 183
                yield "
                    ";
                // line 184
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 184) == "date")) {
                    // line 185
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 186
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 186);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"date\" name=\"custom_field[";
                    // line 188
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 188)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 188);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 189
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 193
                yield "
                    ";
                // line 194
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 194) == "time")) {
                    // line 195
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 196
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"time\" name=\"custom_field[";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 198)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 203
                yield "
                    ";
                // line 204
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 204) == "datetime")) {
                    // line 205
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 206
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"datetime-local\" name=\"custom_field[";
                    // line 208
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v18 = ($context["account_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v19 = ($context["account_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 208)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 209
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 213
                yield "
                  ";
            }
            // line 215
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "              </fieldset>
              <fieldset>
                <legend>";
        // line 218
        yield ($context["text_password"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 220
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 222
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 227
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 229
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 235
        yield ($context["text_other"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 237
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"";
        // line 241
        if ((($tmp = ($context["newsletter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 246
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 250
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 255
        yield ($context["entry_safe"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"";
        // line 259
        if ((($tmp = ($context["safe"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 261
        yield ($context["help_safe"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 265
        yield ($context["entry_commenter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"commenter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"commenter\" value=\"1\" id=\"input-commenter\" class=\"form-check-input\"";
        // line 269
        if ((($tmp = ($context["commenter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 271
        yield ($context["help_commenter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Trade application</legend>
                <p class=\"form-text\">Wholesale pricing stays off until this customer is approved and placed in the Wholesale group. Business type does not turn pricing on.</p>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-company\">Company / business name</label><div class=\"col-sm-10\"><input type=\"text\" name=\"company\" value=\"";
        // line 278
        yield ($context["company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-contact\">Contact person</label><div class=\"col-sm-10\"><input type=\"text\" name=\"contact\" value=\"";
        // line 279
        yield ($context["contact"] ?? null);
        yield "\" id=\"input-contact\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-gstin\">GSTIN / Tax ID</label><div class=\"col-sm-10\"><input type=\"text\" name=\"gstin\" value=\"";
        // line 280
        yield ($context["gstin"] ?? null);
        yield "\" id=\"input-gstin\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-pan\">PAN / business registration no.</label><div class=\"col-sm-10\"><input type=\"text\" name=\"pan\" value=\"";
        // line 281
        yield ($context["pan"] ?? null);
        yield "\" id=\"input-pan\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-business-type\">Business type</label><div class=\"col-sm-10\"><select name=\"business_type\" id=\"input-business-type\" class=\"form-select\"><option value=\"\">Select</option>";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["business_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            yield "<option value=\"";
            yield $context["type"];
            yield "\"";
            if (($context["type"] == ($context["business_type"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield $context["type"];
            yield "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</select></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-monthly-purchase\">Expected monthly purchase</label><div class=\"col-sm-10\"><input type=\"text\" name=\"monthly_purchase\" value=\"";
        // line 283
        yield ($context["monthly_purchase"] ?? null);
        yield "\" id=\"input-monthly-purchase\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-stores\">Number of stores</label><div class=\"col-sm-10\"><input type=\"text\" name=\"stores\" value=\"";
        // line 284
        yield ($context["stores"] ?? null);
        yield "\" id=\"input-stores\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-website\">Website</label><div class=\"col-sm-10\"><input type=\"text\" name=\"website\" value=\"";
        // line 285
        yield ($context["website"] ?? null);
        yield "\" id=\"input-website\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-address\">Billing address</label><div class=\"col-sm-10\"><textarea name=\"billing_address\" id=\"input-billing-address\" rows=\"3\" class=\"form-control\">";
        // line 286
        yield ($context["billing_address"] ?? null);
        yield "</textarea></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-city\">Billing city</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_city\" value=\"";
        // line 287
        yield ($context["billing_city"] ?? null);
        yield "\" id=\"input-billing-city\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-postcode\">Billing PIN</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_postcode\" value=\"";
        // line 288
        yield ($context["billing_postcode"] ?? null);
        yield "\" id=\"input-billing-postcode\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-country\">Billing country</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_country\" value=\"";
        // line 289
        yield ($context["billing_country"] ?? null);
        yield "\" id=\"input-billing-country\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-zone\">Billing state</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_zone\" value=\"";
        // line 290
        yield ($context["billing_zone"] ?? null);
        yield "\" id=\"input-billing-zone\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">Shipping same as billing</label><div class=\"col-sm-10\"><input type=\"hidden\" name=\"shipping_same\" value=\"0\"/><input type=\"checkbox\" name=\"shipping_same\" value=\"1\" class=\"form-check-input\"";
        // line 291
        if ((($context["shipping_same"] ?? null) == "1")) {
            yield " checked";
        }
        yield "/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-address\">Shipping address</label><div class=\"col-sm-10\"><textarea name=\"shipping_address\" id=\"input-shipping-address\" rows=\"3\" class=\"form-control\">";
        // line 292
        yield ($context["shipping_address"] ?? null);
        yield "</textarea></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-city\">Shipping city</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_city\" value=\"";
        // line 293
        yield ($context["shipping_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-postcode\">Shipping PIN</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 294
        yield ($context["shipping_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-country\">Shipping country</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_country\" value=\"";
        // line 295
        yield ($context["shipping_country"] ?? null);
        yield "\" id=\"input-shipping-country\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-zone\">Shipping state</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_zone\" value=\"";
        // line 296
        yield ($context["shipping_zone"] ?? null);
        yield "\" id=\"input-shipping-zone\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-reference\">Reference / existing supplier</label><div class=\"col-sm-10\"><textarea name=\"reference\" id=\"input-reference\" rows=\"3\" class=\"form-control\">";
        // line 297
        yield ($context["reference"] ?? null);
        yield "</textarea></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">Trade license / GST certificate</label><div class=\"col-sm-10\">";
        // line 298
        if ((($tmp = ($context["trade_license"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield ($context["upload_download"] ?? null);
            yield "&code=";
            yield ($context["trade_license"] ?? null);
            yield "\">";
            yield ($context["trade_license_name"] ?? null);
            yield "</a>";
        } else {
            yield "—";
        }
        yield "<input type=\"hidden\" name=\"trade_license\" value=\"";
        yield ($context["trade_license"] ?? null);
        yield "\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">PAN / business document</label><div class=\"col-sm-10\">";
        // line 299
        if ((($tmp = ($context["pan_document"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield ($context["upload_download"] ?? null);
            yield "&code=";
            yield ($context["pan_document"] ?? null);
            yield "\">";
            yield ($context["pan_document_name"] ?? null);
            yield "</a>";
        } else {
            yield "—";
        }
        yield "<input type=\"hidden\" name=\"pan_document\" value=\"";
        yield ($context["pan_document"] ?? null);
        yield "\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">Cancelled cheque</label><div class=\"col-sm-10\">";
        // line 300
        if ((($tmp = ($context["cheque"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield ($context["upload_download"] ?? null);
            yield "&code=";
            yield ($context["cheque"] ?? null);
            yield "\">";
            yield ($context["cheque_name"] ?? null);
            yield "</a>";
        } else {
            yield "—";
        }
        yield "<input type=\"hidden\" name=\"cheque\" value=\"";
        yield ($context["cheque"] ?? null);
        yield "\"/></div></div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 302
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            </form>
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 307
        yield ($context["text_address"] ?? null);
        yield "</legend>
              <div id=\"address\">";
        // line 308
        yield ($context["address"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 313
        yield ($context["text_payment_method"] ?? null);
        yield "</legend>
              <div id=\"payment-method\">";
        // line 314
        yield ($context["payment_method"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 319
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 320
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 323
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 325
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 327
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 331
        yield ($context["button_history_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 337
        yield ($context["text_transaction"] ?? null);
        yield "</legend>
              <div id=\"transaction\">";
        // line 338
        yield ($context["transaction"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 341
        yield ($context["text_transaction_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 343
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 345
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 349
        yield ($context["entry_amount"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 351
        yield ($context["entry_amount"] ?? null);
        yield "\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 355
        yield ($context["button_transaction_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 361
        yield ($context["text_reward"] ?? null);
        yield "</legend>
              <div id=\"reward\">";
        // line 362
        yield ($context["reward"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 365
        yield ($context["text_reward_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">";
        // line 367
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 369
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 373
        yield ($context["entry_points"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 375
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 376
        yield ($context["help_points"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 380
        yield ($context["button_reward_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 386
        yield ($context["text_ip"] ?? null);
        yield "</legend>
              <div id=\"ip\">";
        // line 387
        yield ($context["ip"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 392
        yield ($context["text_authorize"] ?? null);
        yield "</legend>
              <div id=\"authorize\">";
        // line 393
        yield ($context["authorize"] ?? null);
        yield "</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token=";
        // line 443
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 455
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 538
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token=";
        // line 553
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 574
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token=";
        // line 593
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token=";
        // line 616
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token=";
        // line 637
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-transaction').button('loading');
        },
        complete: function() {
            \$('#button-transaction').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token=";
        // line 660
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token=";
        // line 682
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token=";
        // line 705
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#authorize').load('index.php?route=customer/customer.authorize&user_token=";
        // line 759
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 768
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
        return "webadmin/view/template/customer/customer_form.twig";
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
        return array (  1600 => 768,  1588 => 759,  1531 => 705,  1505 => 682,  1480 => 660,  1454 => 637,  1430 => 616,  1404 => 593,  1382 => 574,  1358 => 553,  1340 => 538,  1254 => 455,  1239 => 443,  1186 => 393,  1182 => 392,  1174 => 387,  1170 => 386,  1161 => 380,  1154 => 376,  1150 => 375,  1145 => 373,  1138 => 369,  1133 => 367,  1128 => 365,  1122 => 362,  1118 => 361,  1109 => 355,  1102 => 351,  1097 => 349,  1090 => 345,  1085 => 343,  1080 => 341,  1074 => 338,  1070 => 337,  1061 => 331,  1054 => 327,  1049 => 325,  1044 => 323,  1038 => 320,  1034 => 319,  1026 => 314,  1022 => 313,  1014 => 308,  1010 => 307,  1002 => 302,  985 => 300,  969 => 299,  953 => 298,  949 => 297,  945 => 296,  941 => 295,  937 => 294,  933 => 293,  929 => 292,  923 => 291,  919 => 290,  915 => 289,  911 => 288,  907 => 287,  903 => 286,  899 => 285,  895 => 284,  891 => 283,  872 => 282,  868 => 281,  864 => 280,  860 => 279,  856 => 278,  846 => 271,  839 => 269,  832 => 265,  825 => 261,  818 => 259,  811 => 255,  801 => 250,  794 => 246,  784 => 241,  777 => 237,  772 => 235,  761 => 229,  756 => 227,  746 => 222,  741 => 220,  736 => 218,  732 => 216,  726 => 215,  722 => 213,  715 => 209,  705 => 208,  698 => 206,  693 => 205,  691 => 204,  688 => 203,  681 => 199,  671 => 198,  664 => 196,  659 => 195,  657 => 194,  654 => 193,  647 => 189,  637 => 188,  630 => 186,  625 => 185,  623 => 184,  620 => 183,  613 => 179,  602 => 177,  592 => 176,  584 => 175,  572 => 174,  566 => 171,  561 => 170,  559 => 169,  556 => 168,  549 => 164,  539 => 163,  532 => 161,  527 => 160,  525 => 159,  522 => 158,  515 => 154,  505 => 153,  498 => 151,  493 => 150,  491 => 149,  488 => 148,  481 => 144,  478 => 143,  457 => 140,  454 => 139,  450 => 138,  446 => 137,  441 => 135,  436 => 134,  434 => 133,  431 => 132,  424 => 128,  421 => 127,  400 => 124,  397 => 123,  393 => 122,  389 => 121,  384 => 119,  379 => 118,  377 => 117,  374 => 116,  367 => 112,  364 => 111,  349 => 109,  345 => 108,  341 => 107,  335 => 106,  328 => 104,  323 => 103,  321 => 102,  318 => 101,  316 => 100,  313 => 99,  309 => 98,  300 => 94,  295 => 92,  289 => 91,  280 => 87,  275 => 85,  265 => 80,  260 => 78,  250 => 73,  245 => 71,  239 => 67,  224 => 65,  220 => 64,  214 => 61,  207 => 56,  192 => 54,  188 => 53,  182 => 50,  175 => 45,  160 => 43,  156 => 42,  150 => 39,  145 => 37,  140 => 35,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  99 => 21,  92 => 16,  81 => 14,  77 => 13,  72 => 11,  66 => 10,  61 => 9,  53 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        {% if orders %}
          <a href=\"{{ orders }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_order }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        {% endif %}
        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_address }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_payment_method }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_transaction }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_ip }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_authorize }}</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\">
              <fieldset>
                <legend>{{ text_customer }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      {% for store in stores %}
                        <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-language\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.language_id }}\"{% if language.language_id == language_id %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      {% for customer_group in customer_groups %}
                        <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3{% if config_telephone_required %} required{% endif %}\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                {% for custom_field in custom_fields %}

                  {% if custom_field.location == 'account' %}

                    {% if custom_field.type == 'select' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                            <option value=\"\">{{ text_select }}</option>
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                            {% endfor %}
                          </select>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'radio' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'checkbox' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'text' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'textarea' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'file' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'date' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'time' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'datetime' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                  {% endif %}
                {% endfor %}
              </fieldset>
              <fieldset>
                <legend>{{ text_password }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">{{ entry_confirm }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_other }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_newsletter }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"{% if newsletter %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_safe }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"{% if safe %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_safe }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_commenter }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"commenter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"commenter\" value=\"1\" id=\"input-commenter\" class=\"form-check-input\"{% if commenter %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_commenter }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Trade application</legend>
                <p class=\"form-text\">Wholesale pricing stays off until this customer is approved and placed in the Wholesale group. Business type does not turn pricing on.</p>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-company\">Company / business name</label><div class=\"col-sm-10\"><input type=\"text\" name=\"company\" value=\"{{ company }}\" id=\"input-company\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-contact\">Contact person</label><div class=\"col-sm-10\"><input type=\"text\" name=\"contact\" value=\"{{ contact }}\" id=\"input-contact\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-gstin\">GSTIN / Tax ID</label><div class=\"col-sm-10\"><input type=\"text\" name=\"gstin\" value=\"{{ gstin }}\" id=\"input-gstin\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-pan\">PAN / business registration no.</label><div class=\"col-sm-10\"><input type=\"text\" name=\"pan\" value=\"{{ pan }}\" id=\"input-pan\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-business-type\">Business type</label><div class=\"col-sm-10\"><select name=\"business_type\" id=\"input-business-type\" class=\"form-select\"><option value=\"\">Select</option>{% for type in business_types %}<option value=\"{{ type }}\"{% if type == business_type %} selected{% endif %}>{{ type }}</option>{% endfor %}</select></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-monthly-purchase\">Expected monthly purchase</label><div class=\"col-sm-10\"><input type=\"text\" name=\"monthly_purchase\" value=\"{{ monthly_purchase }}\" id=\"input-monthly-purchase\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-stores\">Number of stores</label><div class=\"col-sm-10\"><input type=\"text\" name=\"stores\" value=\"{{ stores }}\" id=\"input-stores\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-website\">Website</label><div class=\"col-sm-10\"><input type=\"text\" name=\"website\" value=\"{{ website }}\" id=\"input-website\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-address\">Billing address</label><div class=\"col-sm-10\"><textarea name=\"billing_address\" id=\"input-billing-address\" rows=\"3\" class=\"form-control\">{{ billing_address }}</textarea></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-city\">Billing city</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_city\" value=\"{{ billing_city }}\" id=\"input-billing-city\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-postcode\">Billing PIN</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_postcode\" value=\"{{ billing_postcode }}\" id=\"input-billing-postcode\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-country\">Billing country</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_country\" value=\"{{ billing_country }}\" id=\"input-billing-country\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-billing-zone\">Billing state</label><div class=\"col-sm-10\"><input type=\"text\" name=\"billing_zone\" value=\"{{ billing_zone }}\" id=\"input-billing-zone\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">Shipping same as billing</label><div class=\"col-sm-10\"><input type=\"hidden\" name=\"shipping_same\" value=\"0\"/><input type=\"checkbox\" name=\"shipping_same\" value=\"1\" class=\"form-check-input\"{% if shipping_same == '1' %} checked{% endif %}/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-address\">Shipping address</label><div class=\"col-sm-10\"><textarea name=\"shipping_address\" id=\"input-shipping-address\" rows=\"3\" class=\"form-control\">{{ shipping_address }}</textarea></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-city\">Shipping city</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" id=\"input-shipping-city\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-postcode\">Shipping PIN</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-country\">Shipping country</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_country\" value=\"{{ shipping_country }}\" id=\"input-shipping-country\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-shipping-zone\">Shipping state</label><div class=\"col-sm-10\"><input type=\"text\" name=\"shipping_zone\" value=\"{{ shipping_zone }}\" id=\"input-shipping-zone\" class=\"form-control\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\" for=\"input-reference\">Reference / existing supplier</label><div class=\"col-sm-10\"><textarea name=\"reference\" id=\"input-reference\" rows=\"3\" class=\"form-control\">{{ reference }}</textarea></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">Trade license / GST certificate</label><div class=\"col-sm-10\">{% if trade_license %}<a href=\"{{ upload_download }}&code={{ trade_license }}\">{{ trade_license_name }}</a>{% else %}—{% endif %}<input type=\"hidden\" name=\"trade_license\" value=\"{{ trade_license }}\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">PAN / business document</label><div class=\"col-sm-10\">{% if pan_document %}<a href=\"{{ upload_download }}&code={{ pan_document }}\">{{ pan_document_name }}</a>{% else %}—{% endif %}<input type=\"hidden\" name=\"pan_document\" value=\"{{ pan_document }}\"/></div></div>
                <div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">Cancelled cheque</label><div class=\"col-sm-10\">{% if cheque %}<a href=\"{{ upload_download }}&code={{ cheque }}\">{{ cheque_name }}</a>{% else %}—{% endif %}<input type=\"hidden\" name=\"cheque\" value=\"{{ cheque }}\"/></div></div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            </form>
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_address }}</legend>
              <div id=\"address\">{{ address }}</div>
            </fieldset>
          </div>
          <div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_payment_method }}</legend>
              <div id=\"payment-method\">{{ payment_method }}</div>
            </fieldset>
          </div>
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_history_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_transaction }}</legend>
              <div id=\"transaction\">{{ transaction }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_transaction_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">{{ entry_amount }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"{{ entry_amount }}\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_transaction_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_reward }}</legend>
              <div id=\"reward\">{{ reward }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_reward_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_points }}</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_reward_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_ip }}</legend>
              <div id=\"ip\">{{ ip }}</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_authorize }}</legend>
              <div id=\"authorize\">{{ authorize }}</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token={{ user_token }}&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-transaction').button('loading');
        },
        complete: function() {
            \$('#button-transaction').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#authorize').load('index.php?route=customer/customer.authorize&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "webadmin/view/template/customer/customer_form.twig", "C:\\xampp\\htdocs\\crafboat\\webadmin\\view\\template\\customer\\customer_form.twig");
    }
}
