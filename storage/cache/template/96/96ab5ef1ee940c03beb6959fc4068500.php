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

/* webadmin/view/template/customer/custom_field_form.twig */
class __TwigTemplate_a8ff171c3102cf261dc3217b2108190b extends Template
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
        <button type=\"submit\" form=\"form-custom-field\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-custom-field\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        yield ($context["text_custom_field"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 24
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 27
            yield "                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 28);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 28);
            yield "\"/></div>
                    <input type=\"text\" name=\"custom_field_description[";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "][name]\" value=\"";
            yield (((($tmp = (($_v0 = ($context["custom_field_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["custom_field_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null), "name", [], "any", false, false, false, 29)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29);
            yield "\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-";
            // line 31
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 31);
            yield "\" class=\"invalid-feedback\"></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_location"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"location\" id=\"input-location\" class=\"form-select\">
                  <option value=\"account\"";
        // line 39
        if ((($context["location"] ?? null) == "account")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_account"] ?? null);
        yield "</option>
                  <option value=\"address\"";
        // line 40
        if ((($context["location"] ?? null) == "address")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_address"] ?? null);
        yield "</option>
                  <option value=\"affiliate\"";
        // line 41
        if ((($context["location"] ?? null) == "affiliate")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_affiliate"] ?? null);
        yield "</option>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 46
        yield ($context["entry_type"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"";
        // line 49
        yield ($context["text_choose"] ?? null);
        yield "\">
                    <option value=\"select\"";
        // line 50
        if ((($context["type"] ?? null) == "select")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_select"] ?? null);
        yield "</option>
                    <option value=\"radio\"";
        // line 51
        if ((($context["type"] ?? null) == "radio")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_radio"] ?? null);
        yield "</option>
                    <option value=\"checkbox\"";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_checkbox"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 54
        yield ($context["text_input"] ?? null);
        yield "\">
                    <option value=\"text\"";
        // line 55
        if ((($context["type"] ?? null) == "text")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_text"] ?? null);
        yield "</option>
                    <option value=\"textarea\"";
        // line 56
        if ((($context["type"] ?? null) == "textarea")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_textarea"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 58
        yield ($context["text_file"] ?? null);
        yield "\">
                    <option value=\"file\"";
        // line 59
        if ((($context["type"] ?? null) == "file")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_file"] ?? null);
        yield "</option>
                  </optgroup>
                  <optgroup label=\"";
        // line 61
        yield ($context["text_date"] ?? null);
        yield "\">
                    <option value=\"date\"";
        // line 62
        if ((($context["type"] ?? null) == "date")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_date"] ?? null);
        yield "</option>
                    <option value=\"time\"";
        // line 63
        if ((($context["type"] ?? null) == "time")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_time"] ?? null);
        yield "</option>
                    <option value=\"datetime\"";
        // line 64
        if ((($context["type"] ?? null) == "datetime")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_datetime"] ?? null);
        yield "</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-value\">
              <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 70
        yield ($context["entry_value"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"value\" value=\"";
        // line 72
        yield ($context["value"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-validation\">
              <label for=\"input-validation\" class=\"col-sm-2 col-form-label\">";
        // line 76
        yield ($context["entry_validation"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"";
        // line 78
        yield ($context["validation"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_regex"] ?? null);
        yield "\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 79
        yield ($context["help_regex"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 83
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 86
        $context["customer_group_row"] = 0;
        // line 87
        yield "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 88
            yield "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field_customer_group[";
            // line 89
            yield ($context["customer_group_row"] ?? null);
            yield "][customer_group_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89), ($context["custom_field_customer_group"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 89);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 89);
            yield "</label>
                    </div>
                    ";
            // line 91
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 92
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 97
        yield ($context["entry_required"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 100
        $context["customer_group_row"] = 0;
        // line 101
        yield "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 102
            yield "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field_customer_group[";
            // line 103
            yield ($context["customer_group_row"] ?? null);
            yield "][required]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 103);
            yield "\" id=\"input-required-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 103);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 103), ($context["custom_field_required"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-required-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 103);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 103);
            yield "</label>
                    </div>
                    ";
            // line 105
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 106
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 111
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 115
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 120
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"number\" name=\"sort_order\" value=\"";
        // line 122
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 123
        yield ($context["help_sort_order"] ?? null);
        yield "</div>
              </div>
            </div>
          </fieldset>
          <br/>
          <div id=\"custom-field-value\">
            <fieldset>
              <legend>";
        // line 130
        yield ($context["text_value"] ?? null);
        yield "</legend>
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <th class=\"required\">";
        // line 134
        yield ($context["entry_custom_value"] ?? null);
        yield "</th>
                    <th class=\"text-end\">";
        // line 135
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 140
        $context["custom_field_value_row"] = 0;
        // line 141
        yield "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_field_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 142
            yield "                    <tr id=\"custom-field-value-row-";
            yield ($context["custom_field_value_row"] ?? null);
            yield "\">
                      <td style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[";
            // line 143
            yield ($context["custom_field_value_row"] ?? null);
            yield "][custom_field_value_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143);
            yield "\"/>
                        ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 145
                yield "                          <div class=\"input-group\">
                            <div class=\"input-group-text\"><img src=\"";
                // line 146
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 146);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 146);
                yield "\"/></div>
                            <input type=\"text\" name=\"custom_field_value[";
                // line 147
                yield ($context["custom_field_value_row"] ?? null);
                yield "][custom_field_value_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
                yield "][name]\" value=\"";
                yield (((($tmp = (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "any", false, false, false, 147)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "any", false, false, false, 147)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147)] ?? null) : null), "name", [], "any", false, false, false, 147)) : (""));
                yield "\" id=\"input-custom-field-";
                yield ($context["custom_field_value_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
                yield "\" placeholder=\"";
                yield ($context["entry_custom_value"] ?? null);
                yield "\" class=\"form-control\"/>
                          </div>
                          <div id=\"error-custom-field-";
                // line 149
                yield ($context["custom_field_value_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
                yield "\" class=\"invalid-feedback\"></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            yield "</td>
                      <td class=\"text-end\"><input type=\"text\" name=\"custom_field_value[";
            // line 151
            yield ($context["custom_field_value_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "sort_order", [], "any", false, false, false, 151);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#custom-field-value-row-";
            // line 152
            yield ($context["custom_field_value_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 154
            $context["custom_field_value_row"] = (($context["custom_field_value_row"] ?? null) + 1);
            // line 155
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"addCustomFieldValue();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 160
        yield ($context["button_custom_field_value_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </fieldset>
          </div>
          <input type=\"hidden\" name=\"custom_field_id\" value=\"";
        // line 166
        yield ($context["custom_field_id"] ?? null);
        yield "\" id=\"input-custom-field-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
        \$('#custom-field-value').show();
        \$('#display-value, #display-validation').hide();
    } else {
        \$('#custom-field-value').hide();
        \$('#display-value, #display-validation').show();
    }

    if (this.value == 'date') {
        \$('#display-value > div').html('<input type=\"date\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_value"] ?? null), "js");
        yield "\" id=\"input-value\" class=\"form-control\"/>');
    } else if (this.value == 'time') {
        \$('#display-value > div').html('<input type=\"time\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_value"] ?? null), "js");
        yield "\" id=\"input-value\" class=\"form-control\"/>');
    } else if (this.value == 'datetime') {
        \$('#display-value > div').html('<input type=\"datetime-local\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_value"] ?? null), "js");
        yield "\" id=\"input-value\" class=\"form-control\"/>');
    } else if (this.value == 'textarea') {
        \$('#display-value > div').html('<textarea name=\"value\" placeholder=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_value"] ?? null), "js");
        yield "\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
    } else {
        \$('#display-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_value"] ?? null), "js");
        yield "\" id=\"input-value\" class=\"form-control\"/>');
    }
});

\$('#input-type').trigger('change');

var custom_field_value_row = ";
        // line 197
        yield ($context["custom_field_value_row"] ?? null);
        yield ";

function addCustomFieldValue() {
    html = '<tr id=\"custom-field-value-row-' + custom_field_value_row + '\">';
    html += '  <td style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
  ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 203
            yield "    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 204), "js");
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 204), "js");
            yield "\" /></div>';
    html += '      <input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][";
            // line 205
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 205);
            yield "][name]\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_custom_value"] ?? null), "js");
            yield "\" id=\"input-custom-field-";
            yield ($context["custom_field_value_row"] ?? null);
            yield "-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 205);
            yield "\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-custom-field-value-";
            // line 207
            yield ($context["custom_field_value_row"] ?? null);
            yield "-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 207);
            yield "\" class=\"invalid-feedback\"></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row-' + custom_field_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#custom-field-value tbody').append(html);

    custom_field_value_row++;
}
//--></script>
";
        // line 219
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
        return "webadmin/view/template/customer/custom_field_form.twig";
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
        return array (  672 => 219,  661 => 211,  657 => 210,  654 => 209,  644 => 207,  633 => 205,  627 => 204,  624 => 203,  620 => 202,  612 => 197,  603 => 191,  598 => 189,  593 => 187,  588 => 185,  583 => 183,  563 => 166,  554 => 160,  548 => 156,  542 => 155,  540 => 154,  533 => 152,  525 => 151,  522 => 150,  512 => 149,  497 => 147,  491 => 146,  488 => 145,  484 => 144,  478 => 143,  473 => 142,  468 => 141,  466 => 140,  458 => 135,  454 => 134,  447 => 130,  437 => 123,  431 => 122,  426 => 120,  416 => 115,  409 => 111,  403 => 107,  397 => 106,  395 => 105,  378 => 103,  375 => 102,  370 => 101,  368 => 100,  362 => 97,  356 => 93,  350 => 92,  348 => 91,  331 => 89,  328 => 88,  323 => 87,  321 => 86,  315 => 83,  308 => 79,  302 => 78,  297 => 76,  288 => 72,  283 => 70,  270 => 64,  262 => 63,  254 => 62,  250 => 61,  241 => 59,  237 => 58,  228 => 56,  220 => 55,  216 => 54,  207 => 52,  199 => 51,  191 => 50,  187 => 49,  181 => 46,  169 => 41,  161 => 40,  153 => 39,  147 => 36,  142 => 33,  134 => 31,  123 => 29,  117 => 28,  114 => 27,  110 => 26,  105 => 24,  100 => 22,  95 => 20,  90 => 18,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-custom-field\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-custom-field\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>{{ text_custom_field }}</legend>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
              <div class=\"col-sm-10\">
                {% for language in languages %}
                  <div class=\"input-group\">
                    <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                    <input type=\"text\" name=\"custom_field_description[{{ language.language_id }}][name]\" value=\"{{ custom_field_description[language.language_id] ? custom_field_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                  </div>
                  <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                {% endfor %}
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-location\" class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
              <div class=\"col-sm-10\">
                <select name=\"location\" id=\"input-location\" class=\"form-select\">
                  <option value=\"account\"{% if location == 'account' %} selected{% endif %}>{{ text_account }}</option>
                  <option value=\"address\"{% if location == 'address' %} selected{% endif %}>{{ text_address }}</option>
                  <option value=\"affiliate\"{% if location == 'affiliate' %} selected{% endif %}>{{ text_affiliate }}</option>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">{{ entry_type }}</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  <optgroup label=\"{{ text_choose }}\">
                    <option value=\"select\"{% if type == 'select' %} selected{% endif %}>{{ text_select }}</option>
                    <option value=\"radio\"{% if type == 'radio' %} selected{% endif %}>{{ text_radio }}</option>
                    <option value=\"checkbox\"{% if type == 'checkbox' %} selected{% endif %}>{{ text_checkbox }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_input }}\">
                    <option value=\"text\"{% if type == 'text' %} selected{% endif %}>{{ text_text }}</option>
                    <option value=\"textarea\"{% if type == 'textarea' %} selected{% endif %}>{{ text_textarea }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_file }}\">
                    <option value=\"file\"{% if type == 'file' %} selected{% endif %}>{{ text_file }}</option>
                  </optgroup>
                  <optgroup label=\"{{ text_date }}\">
                    <option value=\"date\"{% if type == 'date' %} selected{% endif %}>{{ text_date }}</option>
                    <option value=\"time\"{% if type == 'time' %} selected{% endif %}>{{ text_time }}</option>
                    <option value=\"datetime\"{% if type == 'datetime' %} selected{% endif %}>{{ text_datetime }}</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-value\">
              <label for=\"input-value\" class=\"col-sm-2 col-form-label\">{{ entry_value }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"value\" value=\"{{ value }}\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"row mb-3\" id=\"display-validation\">
              <label for=\"input-validation\" class=\"col-sm-2 col-form-label\">{{ entry_validation }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"{{ validation }}\" placeholder=\"{{ text_regex }}\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_regex }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  {% set customer_group_row = 0 %}
                  {% for customer_group in customer_groups %}
                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field_customer_group[{{ customer_group_row }}][customer_group_id]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in custom_field_customer_group %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                    </div>
                    {% set customer_group_row = customer_group_row + 1 %}
                  {% endfor %}
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_required }}</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  {% set customer_group_row = 0 %}
                  {% for customer_group in customer_groups %}
                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field_customer_group[{{ customer_group_row }}][required]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-required-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in custom_field_required %} checked{% endif %}/> <label for=\"input-required-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                    </div>
                    {% set customer_group_row = customer_group_row + 1 %}
                  {% endfor %}
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
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
              <div class=\"col-sm-10\">
                <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_sort_order }}</div>
              </div>
            </div>
          </fieldset>
          <br/>
          <div id=\"custom-field-value\">
            <fieldset>
              <legend>{{ text_value }}</legend>
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <th class=\"required\">{{ entry_custom_value }}</th>
                    <th class=\"text-end\">{{ entry_sort_order }}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  {% set custom_field_value_row = 0 %}
                  {% for custom_field_value in custom_field_values %}
                    <tr id=\"custom-field-value-row-{{ custom_field_value_row }}\">
                      <td style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[{{ custom_field_value_row }}][custom_field_value_id]\" value=\"{{ custom_field_value.custom_field_value_id }}\"/>
                        {% for language in languages %}
                          <div class=\"input-group\">
                            <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                            <input type=\"text\" name=\"custom_field_value[{{ custom_field_value_row }}][custom_field_value_description][{{ language.language_id }}][name]\" value=\"{{ custom_field_value.custom_field_value_description[language.language_id] ? custom_field_value.custom_field_value_description[language.language_id].name }}\" id=\"input-custom-field-{{ custom_field_value_row }}-{{ language.language_id }}\" placeholder=\"{{ entry_custom_value }}\" class=\"form-control\"/>
                          </div>
                          <div id=\"error-custom-field-{{ custom_field_value_row }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                        {% endfor %}</td>
                      <td class=\"text-end\"><input type=\"text\" name=\"custom_field_value[{{ custom_field_value_row }}][sort_order]\" value=\"{{ custom_field_value.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#custom-field-value-row-{{ custom_field_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                    </tr>
                    {% set custom_field_value_row = custom_field_value_row + 1 %}
                  {% endfor %}
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"addCustomFieldValue();\" data-bs-toggle=\"tooltip\" title=\"{{ button_custom_field_value_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </fieldset>
          </div>
          <input type=\"hidden\" name=\"custom_field_id\" value=\"{{ custom_field_id }}\" id=\"input-custom-field-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function() {
    if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
        \$('#custom-field-value').show();
        \$('#display-value, #display-validation').hide();
    } else {
        \$('#custom-field-value').hide();
        \$('#display-value, #display-validation').show();
    }

    if (this.value == 'date') {
        \$('#display-value > div').html('<input type=\"date\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"{{ entry_value|escape('js') }}\" id=\"input-value\" class=\"form-control\"/>');
    } else if (this.value == 'time') {
        \$('#display-value > div').html('<input type=\"time\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"{{ entry_value|escape('js') }}\" id=\"input-value\" class=\"form-control\"/>');
    } else if (this.value == 'datetime') {
        \$('#display-value > div').html('<input type=\"datetime-local\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"{{ entry_value|escape('js') }}\" id=\"input-value\" class=\"form-control\"/>');
    } else if (this.value == 'textarea') {
        \$('#display-value > div').html('<textarea name=\"value\" placeholder=\"{{ entry_value|escape('js') }}\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
    } else {
        \$('#display-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"{{ entry_value|escape('js') }}\" id=\"input-value\" class=\"form-control\"/>');
    }
});

\$('#input-type').trigger('change');

var custom_field_value_row = {{ custom_field_value_row }};

function addCustomFieldValue() {
    html = '<tr id=\"custom-field-value-row-' + custom_field_value_row + '\">';
    html += '  <td style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
  {% for language in languages %}
    html += '    <div class=\"input-group\">';
    html += '      <div class=\"input-group-text\"><img src=\"{{ language.image|escape('js') }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '      <input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][{{ language.language_id }}][name]\" value=\"\" placeholder=\"{{ entry_custom_value|escape('js') }}\" id=\"input-custom-field-{{ custom_field_value_row }}-{{ language.language_id }}\" class=\"form-control\"/>';
    html += '    </div>';
    html += '    <div id=\"error-custom-field-value-{{ custom_field_value_row }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row-' + custom_field_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#custom-field-value tbody').append(html);

    custom_field_value_row++;
}
//--></script>
{{ footer }} 
", "webadmin/view/template/customer/custom_field_form.twig", "C:\\xampp\\htdocs\\crafboat\\webadmin\\view\\template\\customer\\custom_field_form.twig");
    }
}
