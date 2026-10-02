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

/* webadmin/view/template/design/banner_form.twig */
class __TwigTemplate_31d13e827ea7c3cb4033143be44102e7 extends Template
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
        <button type=\"submit\" form=\"form-banner\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
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
        <form id=\"form-banner\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 33
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <br/>
          <ul class=\"nav nav-tabs\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 40
            yield "              <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 40);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            yield "</a></li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "          </ul>
          <div class=\"tab-content\">
            ";
        // line 44
        $context["image_row"] = 0;
        // line 45
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            yield "              <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            yield "\" class=\"tab-pane";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\">
                <table id=\"image-";
            // line 47
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"required\">";
            // line 50
            yield ($context["entry_title"] ?? null);
            yield "</th>
                      <th>";
            // line 51
            yield ($context["entry_link"] ?? null);
            yield "</th>
                      <th class=\"text-center\">";
            // line 52
            yield ($context["entry_image"] ?? null);
            yield "</th>
                      <th class=\"text-end\">";
            // line 53
            yield ($context["entry_sort_order"] ?? null);
            yield "</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 58
            if ((($tmp = (($_v0 = ($context["banner_images"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = ($context["banner_images"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                    // line 60
                    yield "                        <tr id=\"image-row-";
                    yield ($context["image_row"] ?? null);
                    yield "\">
                          <td>
                            <input type=\"text\" name=\"banner_image[";
                    // line 62
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][title]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "title", [], "any", false, false, false, 62);
                    yield "\" placeholder=\"";
                    yield ($context["entry_title"] ?? null);
                    yield "\" id=\"input-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-title\" class=\"form-control\"/>
                            <div id=\"error-image-";
                    // line 63
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-title\" class=\"invalid-feedback\"></div>
                          </td>
                          <td style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[";
                    // line 65
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][link]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "link", [], "any", false, false, false, 65);
                    yield "\" placeholder=\"";
                    yield ($context["entry_link"] ?? null);
                    yield "\" id=\"input-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-link\" class=\"form-control\"/></td>
                          <td class=\"text-center\">
                            <div class=\"d-flex flex-wrap gap-2 justify-content-center\">
                              <div class=\"border rounded d-block\" style=\"width: 160px;\">
                                <div class=\"small text-start px-2 py-1\">";
                    // line 69
                    yield ($context["entry_image_desktop"] ?? null);
                    yield "</div>
                                <img src=\"";
                    // line 70
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "thumb", [], "any", false, false, false, 70);
                    yield "\" alt=\"\" title=\"\" id=\"thumb-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "\" data-oc-placeholder=\"";
                    yield ($context["placeholder"] ?? null);
                    yield "\" class=\"img-fluid\"/>
                                <input type=\"hidden\" name=\"banner_image[";
                    // line 71
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][image]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 71);
                    yield "\" id=\"input-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-image\"/>
                                <div class=\"d-grid\">
                                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-";
                    // line 73
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-image\" data-oc-thumb=\"#thumb-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
                    yield ($context["button_edit"] ?? null);
                    yield "</button>
                                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-";
                    // line 74
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-image\" data-oc-thumb=\"#thumb-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    yield ($context["button_clear"] ?? null);
                    yield "</button>
                                </div>
                              </div>
                              <div class=\"border rounded d-block\" style=\"width: 160px;\">
                                <div class=\"small text-start px-2 py-1\">";
                    // line 78
                    yield ($context["entry_image_mobile"] ?? null);
                    yield "</div>
                                <img src=\"";
                    // line 79
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "mobile_thumb", [], "any", false, false, false, 79);
                    yield "\" alt=\"\" title=\"\" id=\"thumb-mobile-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "\" data-oc-placeholder=\"";
                    yield ($context["placeholder"] ?? null);
                    yield "\" class=\"img-fluid\"/>
                                <input type=\"hidden\" name=\"banner_image[";
                    // line 80
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][mobile_image]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "mobile_image", [], "any", false, false, false, 80);
                    yield "\" id=\"input-mobile-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-image\"/>
                                <div class=\"d-grid\">
                                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-mobile-";
                    // line 82
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-image\" data-oc-thumb=\"#thumb-mobile-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
                    yield ($context["button_edit"] ?? null);
                    yield "</button>
                                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-mobile-";
                    // line 83
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-image\" data-oc-thumb=\"#thumb-mobile-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    yield ($context["button_clear"] ?? null);
                    yield "</button>
                                </div>
                              </div>
                            </div></td>
                          <td class=\"text-end\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[";
                    // line 87
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                    yield "][";
                    yield ($context["image_row"] ?? null);
                    yield "][sort_order]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "sort_order", [], "any", false, false, false, 87);
                    yield "\" placeholder=\"";
                    yield ($context["entry_sort_order"] ?? null);
                    yield "\" id=\"input-image-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                    yield "-";
                    yield ($context["image_row"] ?? null);
                    yield "-sort-order\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#image-row-";
                    // line 88
                    yield ($context["image_row"] ?? null);
                    yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
                    yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
                    // line 90
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 91
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['banner_image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                yield "                    ";
            }
            // line 93
            yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-banner-";
            // line 97
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            yield "\" data-language=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_banner_add"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "          </div>
          <input type=\"hidden\" name=\"banner_id\" value=\"";
        // line 104
        yield ($context["banner_id"] ?? null);
        yield "\" id=\"input-banner-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 111
        yield ($context["image_row"] ?? null);
        yield ";

\$('button[id^=\\'button-banner\\']').on('click', function() {
    var element = this;

    html = '<tr id=\"image-row-' + image_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_title"] ?? null), "js");
        yield "\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-title\" class=\"form-control\"/>';
    html += '    <div id=\"error-image-' + \$(element).attr('data-language') + '-' + image_row + '-title\" class=\"invalid-feedback\"></div>';
    html += '  </td>';
    html += '  <td><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_link"] ?? null), "js");
        yield "\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-link\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-center\">';
    html += '    <div class=\"d-flex flex-wrap gap-2 justify-content-center\">';
    html += '      <div class=\"border rounded d-block\" style=\"width: 160px;\">';
    html += '        <div class=\"small text-start px-2 py-1\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_image_desktop"] ?? null), "js");
        yield "</div>';
    html += '        <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/>';
    html += '        <input type=\"hidden\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][image]\" value=\"\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-image\"/>';
    html += '        <div class=\"d-grid\">';
    html += '          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"border rounded d-block\" style=\"width: 160px;\">';
    html += '        <div class=\"small text-start px-2 py-1\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_image_mobile"] ?? null), "js");
        yield "</div>';
    html += '        <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-mobile-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/>';
    html += '        <input type=\"hidden\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][mobile_image]\" value=\"\" id=\"input-mobile-' + \$(element).attr('data-language') + '-' + image_row + '-image\"/>';
    html += '        <div class=\"d-grid\">';
    html += '          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-mobile-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-mobile-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-mobile-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-mobile-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '        </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-sort-order\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#image-' + \$(element).attr('data-language') + ' tbody').append(html);

    image_row++;
});
//--></script>
";
        // line 153
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
        return "webadmin/view/template/design/banner_form.twig";
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
        return array (  553 => 153,  542 => 145,  538 => 144,  530 => 139,  526 => 138,  518 => 135,  514 => 134,  507 => 130,  503 => 129,  495 => 126,  491 => 125,  484 => 121,  478 => 118,  468 => 111,  458 => 104,  455 => 103,  431 => 97,  425 => 93,  422 => 92,  416 => 91,  414 => 90,  407 => 88,  393 => 87,  378 => 83,  366 => 82,  353 => 80,  343 => 79,  339 => 78,  324 => 74,  312 => 73,  299 => 71,  289 => 70,  285 => 69,  268 => 65,  261 => 63,  247 => 62,  241 => 60,  236 => 59,  234 => 58,  226 => 53,  222 => 52,  218 => 51,  214 => 50,  208 => 47,  199 => 46,  181 => 45,  179 => 44,  175 => 42,  148 => 40,  131 => 39,  120 => 33,  113 => 29,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-banner\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-banner\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
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
          <br/>
          <ul class=\"nav nav-tabs\">
            {% for language in languages %}
              <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
            {% endfor %}
          </ul>
          <div class=\"tab-content\">
            {% set image_row = 0 %}
            {% for language in languages %}
              <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                <table id=\"image-{{ language.language_id }}\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"required\">{{ entry_title }}</th>
                      <th>{{ entry_link }}</th>
                      <th class=\"text-center\">{{ entry_image }}</th>
                      <th class=\"text-end\">{{ entry_sort_order }}</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    {% if banner_images[language.language_id] %}
                      {% for banner_image in banner_images[language.language_id] %}
                        <tr id=\"image-row-{{ image_row }}\">
                          <td>
                            <input type=\"text\" name=\"banner_image[{{ language.language_id }}][{{ image_row }}][title]\" value=\"{{ banner_image.title }}\" placeholder=\"{{ entry_title }}\" id=\"input-image-{{ language.language_id }}-{{ image_row }}-title\" class=\"form-control\"/>
                            <div id=\"error-image-{{ language.language_id }}-{{ image_row }}-title\" class=\"invalid-feedback\"></div>
                          </td>
                          <td style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[{{ language.language_id }}][{{ image_row }}][link]\" value=\"{{ banner_image.link }}\" placeholder=\"{{ entry_link }}\" id=\"input-image-{{ language.language_id }}-{{ image_row }}-link\" class=\"form-control\"/></td>
                          <td class=\"text-center\">
                            <div class=\"d-flex flex-wrap gap-2 justify-content-center\">
                              <div class=\"border rounded d-block\" style=\"width: 160px;\">
                                <div class=\"small text-start px-2 py-1\">{{ entry_image_desktop }}</div>
                                <img src=\"{{ banner_image.thumb }}\" alt=\"\" title=\"\" id=\"thumb-image-{{ language.language_id }}-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>
                                <input type=\"hidden\" name=\"banner_image[{{ language.language_id }}][{{ image_row }}][image]\" value=\"{{ banner_image.image }}\" id=\"input-image-{{ language.language_id }}-{{ image_row }}-image\"/>
                                <div class=\"d-grid\">
                                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-{{ language.language_id }}-{{ image_row }}-image\" data-oc-thumb=\"#thumb-image-{{ language.language_id }}-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-{{ language.language_id }}-{{ image_row }}-image\" data-oc-thumb=\"#thumb-image-{{ language.language_id }}-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                                </div>
                              </div>
                              <div class=\"border rounded d-block\" style=\"width: 160px;\">
                                <div class=\"small text-start px-2 py-1\">{{ entry_image_mobile }}</div>
                                <img src=\"{{ banner_image.mobile_thumb }}\" alt=\"\" title=\"\" id=\"thumb-mobile-{{ language.language_id }}-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>
                                <input type=\"hidden\" name=\"banner_image[{{ language.language_id }}][{{ image_row }}][mobile_image]\" value=\"{{ banner_image.mobile_image }}\" id=\"input-mobile-{{ language.language_id }}-{{ image_row }}-image\"/>
                                <div class=\"d-grid\">
                                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-mobile-{{ language.language_id }}-{{ image_row }}-image\" data-oc-thumb=\"#thumb-mobile-{{ language.language_id }}-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-mobile-{{ language.language_id }}-{{ image_row }}-image\" data-oc-thumb=\"#thumb-mobile-{{ language.language_id }}-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                                </div>
                              </div>
                            </div></td>
                          <td class=\"text-end\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[{{ language.language_id }}][{{ image_row }}][sort_order]\" value=\"{{ banner_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-image-{{ language.language_id }}-{{ image_row }}-sort-order\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#image-row-{{ image_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        {% set image_row = image_row + 1 %}
                      {% endfor %}
                    {% endif %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-banner-{{ language.language_id }}\" data-language=\"{{ language.language_id }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_banner_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            {% endfor %}
          </div>
          <input type=\"hidden\" name=\"banner_id\" value=\"{{ banner_id }}\" id=\"input-banner-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var image_row = {{ image_row }};

\$('button[id^=\\'button-banner\\']').on('click', function() {
    var element = this;

    html = '<tr id=\"image-row-' + image_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][title]\" value=\"\" placeholder=\"{{ entry_title|escape('js') }}\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-title\" class=\"form-control\"/>';
    html += '    <div id=\"error-image-' + \$(element).attr('data-language') + '-' + image_row + '-title\" class=\"invalid-feedback\"></div>';
    html += '  </td>';
    html += '  <td><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][link]\" value=\"\" placeholder=\"{{ entry_link|escape('js') }}\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-link\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-center\">';
    html += '    <div class=\"d-flex flex-wrap gap-2 justify-content-center\">';
    html += '      <div class=\"border rounded d-block\" style=\"width: 160px;\">';
    html += '        <div class=\"small text-start px-2 py-1\">{{ entry_image_desktop|escape('js') }}</div>';
    html += '        <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/>';
    html += '        <input type=\"hidden\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][image]\" value=\"\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-image\"/>';
    html += '        <div class=\"d-grid\">';
    html += '          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"border rounded d-block\" style=\"width: 160px;\">';
    html += '        <div class=\"small text-start px-2 py-1\">{{ entry_image_mobile|escape('js') }}</div>';
    html += '        <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-mobile-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/>';
    html += '        <input type=\"hidden\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][mobile_image]\" value=\"\" id=\"input-mobile-' + \$(element).attr('data-language') + '-' + image_row + '-image\"/>';
    html += '        <div class=\"d-grid\">';
    html += '          <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-mobile-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-mobile-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '          <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-mobile-' + \$(element).attr('data-language') + '-' + image_row + '-image\" data-oc-thumb=\"#thumb-mobile-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '        </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"{{ entry_sort_order|escape('js') }}\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-sort-order\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#image-' + \$(element).attr('data-language') + ' tbody').append(html);

    image_row++;
});
//--></script>
{{ footer }}
", "webadmin/view/template/design/banner_form.twig", "C:\\xampp\\htdocs\\crafboat\\webadmin\\view\\template\\design\\banner_form.twig");
    }
}
