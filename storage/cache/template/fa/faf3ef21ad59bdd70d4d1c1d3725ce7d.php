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

/* catalog/view/template/account/affiliate.twig */
class __TwigTemplate_495a942f69751503d6cf5eea26b3a74f extends Template
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
<div id=\"account-affiliate\" class=\"container cb-apply\">
  <div class=\"row\">";
        // line 3
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 4
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <form id=\"form-affiliate\" action=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 8
        yield ($context["text_my_affiliate"] ?? null);
        yield "</legend>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-company\">";
        // line 11
        yield ($context["entry_company"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"company\" value=\"";
        // line 12
        yield ($context["company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\"/>
              <div id=\"error-company\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-website\">";
        // line 16
        yield ($context["entry_website"] ?? null);
        yield "</label>
              <input type=\"url\" name=\"website\" value=\"";
        // line 17
        yield ($context["website"] ?? null);
        yield "\" id=\"input-website\" class=\"form-control\" placeholder=\"https://example.com\"/>
              <div id=\"error-website\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 23
        yield ($context["text_payment"] ?? null);
        yield "</legend>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-tax\">";
        // line 26
        yield ($context["entry_tax"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"tax\" value=\"";
        // line 27
        yield ($context["tax"] ?? null);
        yield "\" id=\"input-tax\" class=\"form-control\" maxlength=\"20\" autocapitalize=\"characters\"/>
              <div id=\"error-tax\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-12 mb-3\">
              <label class=\"form-label\">";
        // line 31
        yield ($context["entry_payment_method"] ?? null);
        yield "</label>
              <div class=\"cb-pay\">
                <div class=\"form-check\">
                  <input type=\"radio\" name=\"payment_method\" value=\"cheque\" id=\"input-payment-cheque\" class=\"form-check-input\"";
        // line 34
        if ((($context["payment_method"] ?? null) == "cheque")) {
            yield " checked";
        }
        yield "/>
                  <label for=\"input-payment-cheque\" class=\"form-check-label\">";
        // line 35
        yield ($context["text_cheque"] ?? null);
        yield "</label>
                </div>
                <div class=\"form-check\">
                  <input type=\"radio\" name=\"payment_method\" value=\"paypal\" id=\"input-payment-paypal\" class=\"form-check-input\"";
        // line 38
        if ((($context["payment_method"] ?? null) == "paypal")) {
            yield " checked";
        }
        yield "/>
                  <label for=\"input-payment-paypal\" class=\"form-check-label\">";
        // line 39
        yield ($context["text_paypal"] ?? null);
        yield "</label>
                </div>
                <div class=\"form-check\">
                  <input type=\"radio\" name=\"payment_method\" value=\"bank\" id=\"input-payment-bank\" class=\"form-check-input\"";
        // line 42
        if ((($context["payment_method"] ?? null) == "bank")) {
            yield " checked";
        }
        yield "/>
                  <label for=\"input-payment-bank\" class=\"form-check-label\">";
        // line 43
        yield ($context["text_bank"] ?? null);
        yield "</label>
                </div>
              </div>
              <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row payment\" id=\"payment-cheque\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-cheque\">";
        // line 51
        yield ($context["entry_cheque"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 52
        yield ($context["cheque"] ?? null);
        yield "\" id=\"input-cheque\" class=\"form-control\"/>
              <div id=\"error-cheque\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row payment\" id=\"payment-paypal\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-paypal\">";
        // line 58
        yield ($context["entry_paypal"] ?? null);
        yield "</label>
              <input type=\"email\" name=\"paypal\" value=\"";
        // line 59
        yield ($context["paypal"] ?? null);
        yield "\" id=\"input-paypal\" class=\"form-control\"/>
              <div id=\"error-paypal\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row payment\" id=\"payment-bank\">
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-bank-name\">";
        // line 65
        yield ($context["entry_bank_name"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"bank_name\" value=\"";
        // line 66
        yield ($context["bank_name"] ?? null);
        yield "\" id=\"input-bank-name\" class=\"form-control\"/>
              <div id=\"error-bank-name\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-bank-branch-number\">";
        // line 70
        yield ($context["entry_bank_branch_number"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 71
        yield ($context["bank_branch_number"] ?? null);
        yield "\" id=\"input-bank-branch-number\" class=\"form-control\"/>
              <div id=\"error-bank-branch-number\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-bank-swift-code\">";
        // line 75
        yield ($context["entry_bank_swift_code"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 76
        yield ($context["bank_swift_code"] ?? null);
        yield "\" id=\"input-bank-swift-code\" class=\"form-control\" maxlength=\"11\" autocapitalize=\"characters\"/>
              <div id=\"error-bank-swift-code\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-bank-account-name\">";
        // line 80
        yield ($context["entry_bank_account_name"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 81
        yield ($context["bank_account_name"] ?? null);
        yield "\" id=\"input-bank-account-name\" class=\"form-control\"/>
              <div id=\"error-bank-account-name\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-bank-account-number\">";
        // line 85
        yield ($context["entry_bank_account_number"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 86
        yield ($context["bank_account_number"] ?? null);
        yield "\" id=\"input-bank-account-number\" class=\"form-control\" inputmode=\"numeric\"/>
              <div id=\"error-bank-account-number\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 91
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 91) == "affiliate")) {
                // line 92
                yield "
              ";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "select")) {
                    // line 94
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 97
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    yield "\" class=\"form-select\">
                      <option value=\"\">";
                    // line 98
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                      ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 99));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 100
                        yield "                        <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                        yield "\"";
                        if (((($_v0 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100) == (($_v1 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                        yield "</option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    yield "                    </select>
                    <div id=\"error-custom-field-";
                    // line 103
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 107
                yield "
              ";
                // line 108
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "radio")) {
                    // line 109
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-custom-field-";
                    // line 112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    yield "\">
                      ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 113));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 114
                        yield "                        <div class=\"form-check\">
                          <input type=\"radio\" name=\"custom_field[";
                        // line 115
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115) == (($_v3 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                        yield "</label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    yield "                    </div>
                    <div id=\"error-custom-field-";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 123
                yield "
              ";
                // line 124
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "checkbox")) {
                    // line 125
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 126
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-custom-field-";
                    // line 128
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    yield "\">
                      ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 129));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 130
                        yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"custom_field[";
                        // line 131
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 131);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 131);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 131), (($_v5 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 131);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 131);
                        yield "</label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    yield "                    </div>
                    <div id=\"error-custom-field-";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 139
                yield "
              ";
                // line 140
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 140) == "text")) {
                    // line 141
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 142
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 144
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v6 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v7 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 144);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                    // line 145
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 149
                yield "
              ";
                // line 150
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 150) == "textarea")) {
                    // line 151
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 152
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "\" class=\"form-control\">";
                    if ((($tmp = (($_v8 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v9 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 154);
                    }
                    yield "</textarea>
                    <div id=\"error-custom-field-";
                    // line 155
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 159
                yield "
              ";
                // line 160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 160) == "file")) {
                    // line 161
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 162
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 165
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                      <input type=\"hidden\" name=\"custom_field[";
                    // line 166
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v10 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v11 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                    yield "\"/>
                    </div>
                    <div id=\"error-custom-field-";
                    // line 168
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 172
                yield "
              ";
                // line 173
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "date")) {
                    // line 174
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"custom_field[";
                    // line 177
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v12 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v13 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 177);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                    // line 178
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 182
                yield "
              ";
                // line 183
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 183) == "time")) {
                    // line 184
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 185
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 185);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"time\" name=\"custom_field[";
                    // line 187
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v14 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v15 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 187);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 187);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                    // line 188
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 192
                yield "
              ";
                // line 193
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "datetime")) {
                    // line 194
                    yield "                <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 195
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                    yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"datetime-local\" name=\"custom_field[";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v16 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v17 = ($context["affiliate_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 197);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 197);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                    yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 202
                yield "
            ";
            }
            // line 204
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "        </fieldset>
        <div class=\"text-end\">
          ";
        // line 207
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">";
            // line 209
            yield ($context["text_agree"] ?? null);
            yield "</label>
              <input type=\"hidden\" name=\"agree\" value=\"0\"/>
              <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
            </div>
          ";
        }
        // line 214
        yield "          <button type=\"submit\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</button>
        </div>
      </form>
      ";
        // line 217
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 218
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
function showPayment() {
    document.querySelectorAll('#form-affiliate .payment').forEach(function(panel) {
        panel.hidden = true;
    });

    var selected = document.querySelector('#form-affiliate input[name=\"payment_method\"]:checked');
    var panel = selected && document.getElementById('payment-' + selected.value);

    if (panel) {
        panel.hidden = false;
    }
}

document.querySelectorAll('#form-affiliate input[name=\"payment_method\"]').forEach(function(input) {
    input.addEventListener('change', showPayment);
});

showPayment();
//--></script>
";
        // line 240
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
        return "catalog/view/template/account/affiliate.twig";
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
        return array (  733 => 240,  708 => 218,  704 => 217,  697 => 214,  689 => 209,  686 => 208,  684 => 207,  680 => 205,  674 => 204,  670 => 202,  663 => 198,  649 => 197,  642 => 195,  635 => 194,  633 => 193,  630 => 192,  623 => 188,  609 => 187,  602 => 185,  595 => 184,  593 => 183,  590 => 182,  583 => 178,  569 => 177,  562 => 175,  555 => 174,  553 => 173,  550 => 172,  543 => 168,  532 => 166,  520 => 165,  514 => 162,  507 => 161,  505 => 160,  502 => 159,  495 => 155,  481 => 154,  474 => 152,  467 => 151,  465 => 150,  462 => 149,  455 => 145,  441 => 144,  434 => 142,  427 => 141,  425 => 140,  422 => 139,  415 => 135,  412 => 134,  391 => 131,  388 => 130,  384 => 129,  380 => 128,  375 => 126,  368 => 125,  366 => 124,  363 => 123,  356 => 119,  353 => 118,  332 => 115,  329 => 114,  325 => 113,  321 => 112,  316 => 110,  309 => 109,  307 => 108,  304 => 107,  297 => 103,  294 => 102,  279 => 100,  275 => 99,  271 => 98,  265 => 97,  258 => 95,  251 => 94,  249 => 93,  246 => 92,  243 => 91,  239 => 90,  232 => 86,  228 => 85,  221 => 81,  217 => 80,  210 => 76,  206 => 75,  199 => 71,  195 => 70,  188 => 66,  184 => 65,  175 => 59,  171 => 58,  162 => 52,  158 => 51,  147 => 43,  141 => 42,  135 => 39,  129 => 38,  123 => 35,  117 => 34,  111 => 31,  104 => 27,  100 => 26,  94 => 23,  85 => 17,  81 => 16,  74 => 12,  70 => 11,  64 => 8,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-affiliate\" class=\"container cb-apply\">
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <form id=\"form-affiliate\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>{{ text_my_affiliate }}</legend>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-company\">{{ entry_company }}</label>
              <input type=\"text\" name=\"company\" value=\"{{ company }}\" id=\"input-company\" class=\"form-control\"/>
              <div id=\"error-company\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-website\">{{ entry_website }}</label>
              <input type=\"url\" name=\"website\" value=\"{{ website }}\" id=\"input-website\" class=\"form-control\" placeholder=\"https://example.com\"/>
              <div id=\"error-website\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_payment }}</legend>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-tax\">{{ entry_tax }}</label>
              <input type=\"text\" name=\"tax\" value=\"{{ tax }}\" id=\"input-tax\" class=\"form-control\" maxlength=\"20\" autocapitalize=\"characters\"/>
              <div id=\"error-tax\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-12 mb-3\">
              <label class=\"form-label\">{{ entry_payment_method }}</label>
              <div class=\"cb-pay\">
                <div class=\"form-check\">
                  <input type=\"radio\" name=\"payment_method\" value=\"cheque\" id=\"input-payment-cheque\" class=\"form-check-input\"{% if payment_method == 'cheque' %} checked{% endif %}/>
                  <label for=\"input-payment-cheque\" class=\"form-check-label\">{{ text_cheque }}</label>
                </div>
                <div class=\"form-check\">
                  <input type=\"radio\" name=\"payment_method\" value=\"paypal\" id=\"input-payment-paypal\" class=\"form-check-input\"{% if payment_method == 'paypal' %} checked{% endif %}/>
                  <label for=\"input-payment-paypal\" class=\"form-check-label\">{{ text_paypal }}</label>
                </div>
                <div class=\"form-check\">
                  <input type=\"radio\" name=\"payment_method\" value=\"bank\" id=\"input-payment-bank\" class=\"form-check-input\"{% if payment_method == 'bank' %} checked{% endif %}/>
                  <label for=\"input-payment-bank\" class=\"form-check-label\">{{ text_bank }}</label>
                </div>
              </div>
              <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row payment\" id=\"payment-cheque\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-cheque\">{{ entry_cheque }}</label>
              <input type=\"text\" name=\"cheque\" value=\"{{ cheque }}\" id=\"input-cheque\" class=\"form-control\"/>
              <div id=\"error-cheque\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row payment\" id=\"payment-paypal\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-paypal\">{{ entry_paypal }}</label>
              <input type=\"email\" name=\"paypal\" value=\"{{ paypal }}\" id=\"input-paypal\" class=\"form-control\"/>
              <div id=\"error-paypal\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row payment\" id=\"payment-bank\">
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-bank-name\">{{ entry_bank_name }}</label>
              <input type=\"text\" name=\"bank_name\" value=\"{{ bank_name }}\" id=\"input-bank-name\" class=\"form-control\"/>
              <div id=\"error-bank-name\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-bank-branch-number\">{{ entry_bank_branch_number }}</label>
              <input type=\"text\" name=\"bank_branch_number\" value=\"{{ bank_branch_number }}\" id=\"input-bank-branch-number\" class=\"form-control\"/>
              <div id=\"error-bank-branch-number\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-bank-swift-code\">{{ entry_bank_swift_code }}</label>
              <input type=\"text\" name=\"bank_swift_code\" value=\"{{ bank_swift_code }}\" id=\"input-bank-swift-code\" class=\"form-control\" maxlength=\"11\" autocapitalize=\"characters\"/>
              <div id=\"error-bank-swift-code\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-bank-account-name\">{{ entry_bank_account_name }}</label>
              <input type=\"text\" name=\"bank_account_name\" value=\"{{ bank_account_name }}\" id=\"input-bank-account-name\" class=\"form-control\"/>
              <div id=\"error-bank-account-name\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-bank-account-number\">{{ entry_bank_account_number }}</label>
              <input type=\"text\" name=\"bank_account_number\" value=\"{{ bank_account_number }}\" id=\"input-bank-account-number\" class=\"form-control\" inputmode=\"numeric\"/>
              <div id=\"error-bank-account-number\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'affiliate' %}

              {% if custom_field.type == 'select' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                      <option value=\"\">{{ text_select }}</option>
                      {% for custom_field_value in custom_field.custom_field_value %}
                        <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if affiliate_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == affiliate_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                      {% endfor %}
                    </select>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                      {% for custom_field_value in custom_field.custom_field_value %}
                        <div class=\"form-check\">
                          <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if affiliate_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == affiliate_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                      {% for custom_field_value in custom_field.custom_field_value %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if affiliate_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in affiliate_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div>
                      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                      <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                    </div>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if affiliate_custom_field[custom_field.custom_field_id] %}{{ affiliate_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
        </fieldset>
        <div class=\"text-end\">
          {% if text_agree %}
            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">{{ text_agree }}</label>
              <input type=\"hidden\" name=\"agree\" value=\"0\"/>
              <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
            </div>
          {% endif %}
          <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
<script type=\"text/javascript\"><!--
function showPayment() {
    document.querySelectorAll('#form-affiliate .payment').forEach(function(panel) {
        panel.hidden = true;
    });

    var selected = document.querySelector('#form-affiliate input[name=\"payment_method\"]:checked');
    var panel = selected && document.getElementById('payment-' + selected.value);

    if (panel) {
        panel.hidden = false;
    }
}

document.querySelectorAll('#form-affiliate input[name=\"payment_method\"]').forEach(function(input) {
    input.addEventListener('change', showPayment);
});

showPayment();
//--></script>
{{ footer }}
", "catalog/view/template/account/affiliate.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\affiliate.twig");
    }
}
