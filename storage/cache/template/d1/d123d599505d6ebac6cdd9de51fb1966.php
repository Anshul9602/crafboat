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

/* catalog/view/template/account/register.twig */
class __TwigTemplate_5ec191825c5c5c3522e6f2d46c213b92 extends Template
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
<div id=\"account-register\" class=\"container";
        // line 2
        if ((($context["account"] ?? null) == "login")) {
            yield " cb-auth";
        } else {
            yield " cb-apply";
        }
        yield "\">
  <div class=\"row g-0 align-items-stretch\">
    ";
        // line 4
        if ((($context["account"] ?? null) == "login")) {
            // line 5
            yield "    <div class=\"col-lg-6\">
      <img src=\"";
            // line 6
            yield ($context["photo"] ?? null);
            yield "\" alt=\"\" class=\"cb-auth__img\">
    </div>
    ";
        }
        // line 9
        yield "    <div id=\"content\" class=\"";
        if ((($context["account"] ?? null) == "login")) {
            yield "col-lg-6 cb-auth__form";
        } else {
            yield "col-12";
        }
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 11
        if ((($context["account"] ?? null) == "login")) {
            // line 12
            yield "        <p>Use the email and password for your approved account.</p>
      ";
        } else {
            // line 14
            yield "        <p>";
            yield ($context["text_account_already"] ?? null);
            yield "</p>
      ";
        }
        // line 16
        yield "      <div class=\"cb-auth__types\">
        <a href=\"";
        // line 17
        yield ($context["trade"] ?? null);
        yield "\"";
        if ((($context["account"] ?? null) == "trade")) {
            yield " class=\"is-on\"";
        }
        yield ">Trade account</a>
        <a href=\"";
        // line 18
        yield ($context["wholesale"] ?? null);
        yield "\"";
        if ((($context["account"] ?? null) == "wholesale")) {
            yield " class=\"is-on\"";
        }
        yield ">Wholesale account</a>
        <a href=\"";
        // line 19
        yield ($context["signin"] ?? null);
        yield "\"";
        if ((($context["account"] ?? null) == "login")) {
            yield " class=\"is-on\"";
        }
        yield ">Sign in</a>
      </div>
      ";
        // line 21
        if ((($context["account"] ?? null) == "login")) {
            // line 22
            yield "      <form id=\"form-login\" action=\"";
            yield ($context["login"] ?? null);
            yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <div class=\"mb-3\">
          <label for=\"input-email\" class=\"form-label\">E-Mail</label>
          <input type=\"email\" name=\"email\" value=\"\" placeholder=\"E-Mail\" id=\"input-email\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-password\" class=\"form-label\">Password</label>
          <input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" id=\"input-password\" class=\"form-control mb-1\"/>
          <a href=\"";
            // line 30
            yield ($context["forgotten"] ?? null);
            yield "\">Forgotten Password</a>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
      </form>
      ";
        } else {
            // line 35
            yield "      <form id=\"form-register\" action=\"";
            yield ($context["register"] ?? null);
            yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <p class=\"cb-auth__note\">Wholesale prices stay locked until Craft Boat approves this account. Choosing a business type does not turn pricing on.</p>
        <fieldset id=\"account\">
          <legend>Business details</legend>
          <div class=\"row\">
            <input type=\"hidden\" name=\"customer_group_id\" value=\"";
            // line 40
            yield ($context["customer_group_id"] ?? null);
            yield "\" id=\"input-customer-group\"/>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-company\">Company / business name</label>
              <input type=\"text\" name=\"company\" id=\"input-company\" class=\"form-control\"/>
              <div id=\"error-company\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-contact\">Contact person</label>
              <input type=\"text\" name=\"contact\" id=\"input-contact\" class=\"form-control\"/>
              <div id=\"error-contact\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-email\">Email</label>
              <input type=\"email\" name=\"email\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-telephone\">Mobile number</label>
              <input type=\"tel\" name=\"telephone\" id=\"input-telephone\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"16\" placeholder=\"9876543210\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-password\">Password</label>
              <input type=\"password\" name=\"password\" id=\"input-password\" class=\"form-control\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Billing address</legend>
          <div class=\"row\">
            <div class=\"col-12 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-address\">Address</label>
              <textarea name=\"billing_address\" id=\"input-billing-address\" rows=\"3\" class=\"form-control\"></textarea>
              <div id=\"error-billing-address\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-country\">Country</label>
              <select name=\"billing_country_id\" id=\"input-billing-country\" class=\"form-select\" data-zone=\"#input-billing-zone\">
                <option value=\"\">Select</option>
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 81
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 81);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 81);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "              </select>
              <div id=\"error-billing-country\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-zone\">State</label>
              <select name=\"billing_zone_id\" id=\"input-billing-zone\" class=\"form-select\">
                <option value=\"\">Select</option>
              </select>
              <div id=\"error-billing-zone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-city\">City</label>
              <input type=\"text\" name=\"billing_city\" id=\"input-billing-city\" class=\"form-control\"/>
              <div id=\"error-billing-city\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-postcode\">PIN</label>
              <input type=\"text\" name=\"billing_postcode\" id=\"input-billing-postcode\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"6\" placeholder=\"302001\"/>
              <div id=\"error-billing-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Shipping address</legend>
          <div class=\"row\">
            <div class=\"col-12 mb-3\">
              <div class=\"form-check\">
                <input type=\"checkbox\" name=\"shipping_same\" value=\"1\" id=\"input-shipping-same\" class=\"form-check-input\" checked/>
                <label class=\"form-check-label\" for=\"input-shipping-same\">Same as billing address</label>
              </div>
            </div>
          </div>
          <div id=\"shipping-fields\" class=\"row\">
            <div class=\"col-12 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-address\">Address</label>
              <textarea name=\"shipping_address\" id=\"input-shipping-address\" rows=\"3\" class=\"form-control\"></textarea>
              <div id=\"error-shipping-address\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-country\">Country</label>
              <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\" data-zone=\"#input-shipping-zone\">
                <option value=\"\">Select</option>
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 126
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 126);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 126);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "              </select>
              <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-zone\">State</label>
              <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\">
                <option value=\"\">Select</option>
              </select>
              <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-city\">City</label>
              <input type=\"text\" name=\"shipping_city\" id=\"input-shipping-city\" class=\"form-control\"/>
              <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-postcode\">PIN</label>
              <input type=\"text\" name=\"shipping_postcode\" id=\"input-shipping-postcode\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"6\" placeholder=\"302001\"/>
              <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Tax and business</legend>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-gstin\">GSTIN / Tax ID</label>
              <input type=\"text\" name=\"gstin\" id=\"input-gstin\" class=\"form-control\" maxlength=\"15\" placeholder=\"22AAAAA0000A1Z5\" autocapitalize=\"characters\"/>
              <div id=\"error-gstin\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-pan\">PAN / business registration no.</label>
              <input type=\"text\" name=\"pan\" id=\"input-pan\" class=\"form-control\" maxlength=\"10\" placeholder=\"ABCDE1234F\" autocapitalize=\"characters\"/>
              <div id=\"error-pan\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-business-type\">Business type</label>
              <select name=\"business_type\" id=\"input-business-type\" class=\"form-select\">
                <option value=\"\">Select</option>
                ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["business_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 168
                yield "                  <option value=\"";
                yield $context["type"];
                yield "\">";
                yield $context["type"];
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            yield "              </select>
              <div id=\"error-business-type\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-monthly-purchase\">Expected monthly purchase</label>
              <input type=\"text\" name=\"monthly_purchase\" id=\"input-monthly-purchase\" class=\"form-control\" inputmode=\"decimal\" placeholder=\"50000\"/>
              <div id=\"error-monthly-purchase\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-stores\">Number of stores</label>
              <input type=\"number\" name=\"stores\" id=\"input-stores\" class=\"form-control\" min=\"1\" step=\"1\" inputmode=\"numeric\"/>
              <div id=\"error-stores\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-website\">Website, if applicable</label>
              <input type=\"url\" name=\"website\" id=\"input-website\" class=\"form-control\" placeholder=\"https://example.com\"/>
            </div>
            <div class=\"col-12 mb-3\">
              <label class=\"form-label\" for=\"input-reference\">Reference / existing supplier</label>
              <textarea name=\"reference\" id=\"input-reference\" rows=\"3\" class=\"form-control\"></textarea>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Documents</legend>
          <div class=\"row\">
            <div class=\"col-md-4 mb-3 required\">
              <label class=\"form-label\">Trade license / GST certificate</label>
              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
            // line 198
            yield ($context["upload"] ?? null);
            yield "\" data-oc-size-max=\"";
            yield ($context["config_file_max_size"] ?? null);
            yield "\" data-oc-size-error=\"";
            yield ($context["error_upload_size"] ?? null);
            yield "\" data-oc-target=\"#input-trade-license\" data-oc-accept=\"jpg,jpeg,png,webp,gif,pdf\" accept=\"image/jpeg,image/png,image/webp,image/gif,application/pdf\" class=\"btn btn-light\">Upload</button>
              <span class=\"cb-upload-preview\"></span>
              <input type=\"hidden\" name=\"trade_license\" id=\"input-trade-license\" value=\"\"/>
              <div id=\"error-trade-license\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-4 mb-3 required\">
              <label class=\"form-label\">PAN / business document</label>
              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
            // line 205
            yield ($context["upload"] ?? null);
            yield "\" data-oc-size-max=\"";
            yield ($context["config_file_max_size"] ?? null);
            yield "\" data-oc-size-error=\"";
            yield ($context["error_upload_size"] ?? null);
            yield "\" data-oc-target=\"#input-pan-document\" data-oc-accept=\"jpg,jpeg,png,webp,gif,pdf\" accept=\"image/jpeg,image/png,image/webp,image/gif,application/pdf\" class=\"btn btn-light\">Upload</button>
              <span class=\"cb-upload-preview\"></span>
              <input type=\"hidden\" name=\"pan_document\" id=\"input-pan-document\" value=\"\"/>
              <div id=\"error-pan-document\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-4 mb-3\">
              <label class=\"form-label\">Cancelled cheque / bank details</label>
              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
            // line 212
            yield ($context["upload"] ?? null);
            yield "\" data-oc-size-max=\"";
            yield ($context["config_file_max_size"] ?? null);
            yield "\" data-oc-size-error=\"";
            yield ($context["error_upload_size"] ?? null);
            yield "\" data-oc-target=\"#input-cheque\" data-oc-accept=\"jpg,jpeg,png,webp,gif,pdf\" accept=\"image/jpeg,image/png,image/webp,image/gif,application/pdf\" class=\"btn btn-light\">Upload</button>
              <span class=\"cb-upload-preview\"></span>
              <input type=\"hidden\" name=\"cheque\" id=\"input-cheque\" value=\"\"/>
              <div id=\"error-cheque\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <div class=\"form-check form-switch mb-3\">
          <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
          <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
          <label class=\"form-check-label\" for=\"input-newsletter\">";
            // line 222
            yield ($context["entry_newsletter"] ?? null);
            yield "</label>
        </div>
        ";
            // line 224
            yield ($context["captcha"] ?? null);
            yield "
        <div class=\"text-end\">
          ";
            // line 226
            if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 227
                yield "            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">";
                // line 228
                yield ($context["text_agree"] ?? null);
                yield "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
            </div>
          ";
            }
            // line 231
            yield "          <button type=\"submit\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</button>
        </div>
      </form>
      ";
        }
        // line 235
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 242
        yield ($context["language"] ?? null);
        yield "',
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

function loadZones(select) {
    var zone = document.querySelector(select.getAttribute('data-zone'));
    if (!zone) return;
    zone.innerHTML = '<option value=\"\">Select</option>';
    if (!select.value) return;
    \$.getJSON('";
        // line 271
        yield ($context["country"] ?? null);
        yield "&country_id=' + select.value, function(json) {
        (json.zone || []).forEach(function(item) {
            var option = document.createElement('option');
            option.value = item.zone_id;
            option.textContent = item.name;
            zone.appendChild(option);
        });
    });
}

document.querySelectorAll('[data-zone]').forEach(function(select) {
    select.addEventListener('change', function() { loadZones(select); });
});

var same = document.getElementById('input-shipping-same');
var shipping = document.getElementById('shipping-fields');
function syncShipping() {
    if (!same || !shipping) return;
    shipping.hidden = same.checked;
    shipping.querySelectorAll('input, select, textarea').forEach(function(field) {
        field.disabled = same.checked;
    });
}
if (same) {
    same.addEventListener('change', syncShipping);
    syncShipping();
}
//--></script>
";
        // line 299
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
        return "catalog/view/template/account/register.twig";
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
        return array (  503 => 299,  472 => 271,  440 => 242,  429 => 235,  421 => 231,  415 => 228,  412 => 227,  410 => 226,  405 => 224,  400 => 222,  383 => 212,  369 => 205,  355 => 198,  325 => 170,  314 => 168,  310 => 167,  269 => 128,  258 => 126,  254 => 125,  210 => 83,  199 => 81,  195 => 80,  152 => 40,  143 => 35,  135 => 30,  123 => 22,  121 => 21,  112 => 19,  104 => 18,  96 => 17,  93 => 16,  87 => 14,  83 => 12,  81 => 11,  77 => 10,  66 => 9,  60 => 6,  57 => 5,  55 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-register\" class=\"container{% if account == 'login' %} cb-auth{% else %} cb-apply{% endif %}\">
  <div class=\"row g-0 align-items-stretch\">
    {% if account == 'login' %}
    <div class=\"col-lg-6\">
      <img src=\"{{ photo }}\" alt=\"\" class=\"cb-auth__img\">
    </div>
    {% endif %}
    <div id=\"content\" class=\"{% if account == 'login' %}col-lg-6 cb-auth__form{% else %}col-12{% endif %}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if account == 'login' %}
        <p>Use the email and password for your approved account.</p>
      {% else %}
        <p>{{ text_account_already }}</p>
      {% endif %}
      <div class=\"cb-auth__types\">
        <a href=\"{{ trade }}\"{% if account == 'trade' %} class=\"is-on\"{% endif %}>Trade account</a>
        <a href=\"{{ wholesale }}\"{% if account == 'wholesale' %} class=\"is-on\"{% endif %}>Wholesale account</a>
        <a href=\"{{ signin }}\"{% if account == 'login' %} class=\"is-on\"{% endif %}>Sign in</a>
      </div>
      {% if account == 'login' %}
      <form id=\"form-login\" action=\"{{ login }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <div class=\"mb-3\">
          <label for=\"input-email\" class=\"form-label\">E-Mail</label>
          <input type=\"email\" name=\"email\" value=\"\" placeholder=\"E-Mail\" id=\"input-email\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-password\" class=\"form-label\">Password</label>
          <input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" id=\"input-password\" class=\"form-control mb-1\"/>
          <a href=\"{{ forgotten }}\">Forgotten Password</a>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
      </form>
      {% else %}
      <form id=\"form-register\" action=\"{{ register }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <p class=\"cb-auth__note\">Wholesale prices stay locked until Craft Boat approves this account. Choosing a business type does not turn pricing on.</p>
        <fieldset id=\"account\">
          <legend>Business details</legend>
          <div class=\"row\">
            <input type=\"hidden\" name=\"customer_group_id\" value=\"{{ customer_group_id }}\" id=\"input-customer-group\"/>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-company\">Company / business name</label>
              <input type=\"text\" name=\"company\" id=\"input-company\" class=\"form-control\"/>
              <div id=\"error-company\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-contact\">Contact person</label>
              <input type=\"text\" name=\"contact\" id=\"input-contact\" class=\"form-control\"/>
              <div id=\"error-contact\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-email\">Email</label>
              <input type=\"email\" name=\"email\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-telephone\">Mobile number</label>
              <input type=\"tel\" name=\"telephone\" id=\"input-telephone\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"16\" placeholder=\"9876543210\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-password\">Password</label>
              <input type=\"password\" name=\"password\" id=\"input-password\" class=\"form-control\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Billing address</legend>
          <div class=\"row\">
            <div class=\"col-12 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-address\">Address</label>
              <textarea name=\"billing_address\" id=\"input-billing-address\" rows=\"3\" class=\"form-control\"></textarea>
              <div id=\"error-billing-address\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-country\">Country</label>
              <select name=\"billing_country_id\" id=\"input-billing-country\" class=\"form-select\" data-zone=\"#input-billing-zone\">
                <option value=\"\">Select</option>
                {% for country in countries %}
                  <option value=\"{{ country.country_id }}\">{{ country.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-billing-country\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-zone\">State</label>
              <select name=\"billing_zone_id\" id=\"input-billing-zone\" class=\"form-select\">
                <option value=\"\">Select</option>
              </select>
              <div id=\"error-billing-zone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-city\">City</label>
              <input type=\"text\" name=\"billing_city\" id=\"input-billing-city\" class=\"form-control\"/>
              <div id=\"error-billing-city\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-billing-postcode\">PIN</label>
              <input type=\"text\" name=\"billing_postcode\" id=\"input-billing-postcode\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"6\" placeholder=\"302001\"/>
              <div id=\"error-billing-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Shipping address</legend>
          <div class=\"row\">
            <div class=\"col-12 mb-3\">
              <div class=\"form-check\">
                <input type=\"checkbox\" name=\"shipping_same\" value=\"1\" id=\"input-shipping-same\" class=\"form-check-input\" checked/>
                <label class=\"form-check-label\" for=\"input-shipping-same\">Same as billing address</label>
              </div>
            </div>
          </div>
          <div id=\"shipping-fields\" class=\"row\">
            <div class=\"col-12 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-address\">Address</label>
              <textarea name=\"shipping_address\" id=\"input-shipping-address\" rows=\"3\" class=\"form-control\"></textarea>
              <div id=\"error-shipping-address\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-country\">Country</label>
              <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\" data-zone=\"#input-shipping-zone\">
                <option value=\"\">Select</option>
                {% for country in countries %}
                  <option value=\"{{ country.country_id }}\">{{ country.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-zone\">State</label>
              <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\">
                <option value=\"\">Select</option>
              </select>
              <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-city\">City</label>
              <input type=\"text\" name=\"shipping_city\" id=\"input-shipping-city\" class=\"form-control\"/>
              <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-shipping-postcode\">PIN</label>
              <input type=\"text\" name=\"shipping_postcode\" id=\"input-shipping-postcode\" class=\"form-control\" inputmode=\"numeric\" maxlength=\"6\" placeholder=\"302001\"/>
              <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Tax and business</legend>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-gstin\">GSTIN / Tax ID</label>
              <input type=\"text\" name=\"gstin\" id=\"input-gstin\" class=\"form-control\" maxlength=\"15\" placeholder=\"22AAAAA0000A1Z5\" autocapitalize=\"characters\"/>
              <div id=\"error-gstin\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-pan\">PAN / business registration no.</label>
              <input type=\"text\" name=\"pan\" id=\"input-pan\" class=\"form-control\" maxlength=\"10\" placeholder=\"ABCDE1234F\" autocapitalize=\"characters\"/>
              <div id=\"error-pan\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-business-type\">Business type</label>
              <select name=\"business_type\" id=\"input-business-type\" class=\"form-select\">
                <option value=\"\">Select</option>
                {% for type in business_types %}
                  <option value=\"{{ type }}\">{{ type }}</option>
                {% endfor %}
              </select>
              <div id=\"error-business-type\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-monthly-purchase\">Expected monthly purchase</label>
              <input type=\"text\" name=\"monthly_purchase\" id=\"input-monthly-purchase\" class=\"form-control\" inputmode=\"decimal\" placeholder=\"50000\"/>
              <div id=\"error-monthly-purchase\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3 required\">
              <label class=\"form-label\" for=\"input-stores\">Number of stores</label>
              <input type=\"number\" name=\"stores\" id=\"input-stores\" class=\"form-control\" min=\"1\" step=\"1\" inputmode=\"numeric\"/>
              <div id=\"error-stores\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-6 mb-3\">
              <label class=\"form-label\" for=\"input-website\">Website, if applicable</label>
              <input type=\"url\" name=\"website\" id=\"input-website\" class=\"form-control\" placeholder=\"https://example.com\"/>
            </div>
            <div class=\"col-12 mb-3\">
              <label class=\"form-label\" for=\"input-reference\">Reference / existing supplier</label>
              <textarea name=\"reference\" id=\"input-reference\" rows=\"3\" class=\"form-control\"></textarea>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Documents</legend>
          <div class=\"row\">
            <div class=\"col-md-4 mb-3 required\">
              <label class=\"form-label\">Trade license / GST certificate</label>
              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-trade-license\" data-oc-accept=\"jpg,jpeg,png,webp,gif,pdf\" accept=\"image/jpeg,image/png,image/webp,image/gif,application/pdf\" class=\"btn btn-light\">Upload</button>
              <span class=\"cb-upload-preview\"></span>
              <input type=\"hidden\" name=\"trade_license\" id=\"input-trade-license\" value=\"\"/>
              <div id=\"error-trade-license\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-4 mb-3 required\">
              <label class=\"form-label\">PAN / business document</label>
              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-pan-document\" data-oc-accept=\"jpg,jpeg,png,webp,gif,pdf\" accept=\"image/jpeg,image/png,image/webp,image/gif,application/pdf\" class=\"btn btn-light\">Upload</button>
              <span class=\"cb-upload-preview\"></span>
              <input type=\"hidden\" name=\"pan_document\" id=\"input-pan-document\" value=\"\"/>
              <div id=\"error-pan-document\" class=\"invalid-feedback\"></div>
            </div>
            <div class=\"col-md-4 mb-3\">
              <label class=\"form-label\">Cancelled cheque / bank details</label>
              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-cheque\" data-oc-accept=\"jpg,jpeg,png,webp,gif,pdf\" accept=\"image/jpeg,image/png,image/webp,image/gif,application/pdf\" class=\"btn btn-light\">Upload</button>
              <span class=\"cb-upload-preview\"></span>
              <input type=\"hidden\" name=\"cheque\" id=\"input-cheque\" value=\"\"/>
              <div id=\"error-cheque\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <div class=\"form-check form-switch mb-3\">
          <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
          <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
          <label class=\"form-check-label\" for=\"input-newsletter\">{{ entry_newsletter }}</label>
        </div>
        {{ captcha }}
        <div class=\"text-end\">
          {% if text_agree %}
            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">{{ text_agree }}</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
            </div>
          {% endif %}
          <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
        </div>
      </form>
      {% endif %}
      {{ content_bottom }}
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language={{ language }}',
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

function loadZones(select) {
    var zone = document.querySelector(select.getAttribute('data-zone'));
    if (!zone) return;
    zone.innerHTML = '<option value=\"\">Select</option>';
    if (!select.value) return;
    \$.getJSON('{{ country|raw }}&country_id=' + select.value, function(json) {
        (json.zone || []).forEach(function(item) {
            var option = document.createElement('option');
            option.value = item.zone_id;
            option.textContent = item.name;
            zone.appendChild(option);
        });
    });
}

document.querySelectorAll('[data-zone]').forEach(function(select) {
    select.addEventListener('change', function() { loadZones(select); });
});

var same = document.getElementById('input-shipping-same');
var shipping = document.getElementById('shipping-fields');
function syncShipping() {
    if (!same || !shipping) return;
    shipping.hidden = same.checked;
    shipping.querySelectorAll('input, select, textarea').forEach(function(field) {
        field.disabled = same.checked;
    });
}
if (same) {
    same.addEventListener('change', syncShipping);
    syncShipping();
}
//--></script>
{{ footer }}
", "catalog/view/template/account/register.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\account\\register.twig");
    }
}
