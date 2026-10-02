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

/* webadmin/view/template/catalog/product_form.twig */
class __TwigTemplate_700e02da52b85d60fe52ff9ab0250f25 extends Template
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
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
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
    ";
        // line 17
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["text_variant"] ?? null);
            yield "</div>
    ";
        }
        // line 20
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_data"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_links"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_attribute"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_subscription"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_discount"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        yield ($context["tab_seo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        yield ($context["tab_design"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        yield ($context["tab_report"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 41
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
            // line 42
            yield "                  <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 42);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
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
        // line 44
        yield "              </ul>
              <div class=\"tab-content\">
                ";
        // line 46
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
            // line 47
            yield "                  <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "\" class=\"tab-pane";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\">
                    <fieldset>
                      <legend>";
            // line 49
            yield ($context["text_general"] ?? null);
            yield "</legend>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-name-";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_name"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_description[";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "][name]\" value=\"";
            yield (((($tmp = (($_v0 = ($context["product_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["product_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "name", [], "any", false, false, false, 54)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\" class=\"form-control\"/>
                            ";
            // line 55
            if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                yield "][name]\" value=\"1\" id=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                yield "\" class=\"form-check-input\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 58)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null), "name", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
                yield "\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            ";
            }
            // line 62
            yield "                          </div>
                          <div id=\"error-name-";
            // line 63
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-description-";
            // line 67
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                              <textarea name=\"product_description[";
            // line 71
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"w-100 position-relative\">";
            yield (((($tmp = (($_v3 = ($context["product_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["product_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null), "description", [], "any", false, false, false, 71)) : (""));
            yield "</textarea>
                            </div>
                            ";
            // line 73
            if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][";
                // line 76
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "][description]\" value=\"1\" id=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "\" class=\"form-check-input\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 76)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null), "description", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                yield "\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            ";
            }
            // line 80
            yield "                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>";
            // line 85
            yield ($context["text_meta"] ?? null);
            yield "</legend>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-meta-title-";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_description[";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
            yield "][meta_title]\" value=\"";
            yield (((($tmp = (($_v6 = ($context["product_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["product_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null), "meta_title", [], "any", false, false, false, 90)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
            yield "\" class=\"form-control\"/>
                            ";
            // line 91
            if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][";
                // line 94
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                yield "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                yield "\" class=\"form-check-input\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 94)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null), "meta_title", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
                yield "\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            ";
            }
            // line 98
            yield "                          </div>
                          <div id=\"error-meta-title-";
            // line 99
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-description-";
            // line 103
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"product_description[";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
            yield "\" class=\"form-control\">";
            yield (((($tmp = (($_v9 = ($context["product_description"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["product_description"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "meta_description", [], "any", false, false, false, 106)) : (""));
            yield "</textarea>
                            ";
            // line 107
            if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][";
                // line 110
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
                yield "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
                yield "\" class=\"form-check-input\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 110)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null), "meta_description", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
                yield "\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            ";
            }
            // line 114
            yield "                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-keyword-";
            // line 118
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"product_description[";
            // line 121
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
            yield "\" class=\"form-control\">";
            yield (((($tmp = (($_v12 = ($context["product_description"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["product_description"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 121)) : (""));
            yield "</textarea>
                            ";
            // line 122
            if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 123
                yield "                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
                yield "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
                yield "\" class=\"form-check-input\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 125)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
                yield "\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            ";
            }
            // line 129
            yield "                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tag-";
            // line 133
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_tag"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_description[";
            // line 136
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
            yield "][tag]\" value=\"";
            yield (((($tmp = (($_v15 = ($context["product_description"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v16 = ($context["product_description"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null), "tag", [], "any", false, false, false, 136)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_tag"] ?? null);
            yield "\" id=\"input-tag-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
            yield "\" class=\"form-control\"/>
                            ";
            // line 137
            if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][";
                // line 140
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
                yield "][tag]\" value=\"1\" id=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
                yield "\" class=\"form-check-input\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 140)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140)] ?? null) : null), "tag", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
                yield "\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            ";
            }
            // line 144
            yield "                          </div>
                          <div class=\"form-text\">";
            // line 145
            yield ($context["help_tag"] ?? null);
            yield "</div>
                        </div>
                      </div>
                    </fieldset>
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
        // line 151
        yield "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 154
        yield ($context["master_id"] ?? null);
        yield "\"/>
              <fieldset>
                <legend>";
        // line 156
        yield ($context["text_model"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 158
        yield ($context["entry_model"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 161
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 162
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 165
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 169
        yield "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 174
        yield ($context["entry_product_code"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select id=\"input-code\" class=\"form-select\">
                        ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["identifiers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["identifier"]) {
            // line 179
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["identifier"], "code", [], "any", false, false, false, 179);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["identifier"], "code", [], "any", false, false, false, 179);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['identifier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                      </select>
                      <input type=\"text\" value=\"\" placeholder=\"";
        // line 182
        yield ($context["entry_product_code"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control w-75\"/>
                      <button type=\"button\" id=\"button-code\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
                    </div>
                    <div class=\"input-group\">
                      <div class=\"form-control p-0\" style=\"height: 100px; overflow: auto;\">
                        <table id=\"product-code\" class=\"table m-0\">
                          <tbody>
                            ";
        // line 189
        $context["code_row"] = 0;
        // line 190
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 191
            yield "                              <tr id=\"code-row-";
            yield ($context["code_row"] ?? null);
            yield "\">
                                <td style=\"width: 1px;\">";
            // line 192
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 192);
            yield "<input type=\"hidden\" name=\"product_code[";
            yield ($context["code_row"] ?? null);
            yield "][code]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 192);
            yield "\"/></td>
                                <td id=\"input-code-";
            // line 193
            yield ($context["code_row"] ?? null);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 193);
            yield "
                                  <div id=\"error-code-";
            // line 194
            yield ($context["code_row"] ?? null);
            yield "\" class=\"invalid-feedback\"></div>
                                  <input type=\"hidden\" name=\"product_code[";
            // line 195
            yield ($context["code_row"] ?? null);
            yield "][value]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 195);
            yield "\"></td>
                                <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                              </tr>
                              ";
            // line 198
            $context["code_row"] = (($context["code_row"] ?? null) + 1);
            // line 199
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        yield "                          </tbody>
                        </table>
                      </div>
                      ";
        // line 203
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[product_code]\" value=\"1\" id=\"input-variant-code\" data-oc-toggle=\"switch\" data-oc-target=\"#input-code, #product-code\" class=\"form-check-input\"";
            // line 206
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_code", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-code\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 210
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 211
        yield ($context["help_product_code"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 216
        yield ($context["text_price"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 218
        yield ($context["entry_price"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 221
        yield ($context["price"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_price"] ?? null);
        yield "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 222
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 223
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 225
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 229
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 233
        yield ($context["entry_tax_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 237
        yield ($context["text_none"] ?? null);
        yield "</option>
                        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 239
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 239);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 239) == ($context["tax_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 239);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tax_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                      </select>
                      ";
        // line 242
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 243
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 245
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 249
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 254
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 256
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 258
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 262
        yield ($context["entry_minimum"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 265
        yield ($context["minimum"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_minimum"] ?? null);
        yield "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 266
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 269
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 273
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 274
        yield ($context["help_minimum"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 278
        yield ($context["entry_subtract"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 282
        if ((($tmp = ($context["subtract"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 284
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 285
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 287
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 287)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 291
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 295
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 300
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 300);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 300) == ($context["stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 300);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        yield "                      </select>
                      ";
        // line 303
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 304
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 306
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 310
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 311
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 315
        yield ($context["entry_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 318
        yield ($context["location"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_location"] ?? null);
        yield "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 319
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 320
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 322
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 326
        yield "                    </div>
                  </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 331
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
                    <div class=\"col-sm-10 col-md-4\">
                        <div class=\"input-group\">
                            <input type=\"date\" name=\"date_added\" value=\"";
        // line 334
        yield ($context["date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["date_added"] ?? null);
        yield "\" id=\"input-date-added\" class=\"form-control\"/>
                            ";
        // line 335
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 336
            yield "                                <div class=\"input-group-text\">
                                    <div class=\"form-check form-switch\">
                                        <input type=\"checkbox\" name=\"override[date_added]\" value=\"1\" id=\"input-variant-date-added\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-added\" class=\"form-check-input\"";
            // line 338
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_added", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-date-added\" class=\"form-check-label\"></label>
                                    </div>
                                </div>
                            ";
        }
        // line 342
        yield "                        </div>
                    </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 347
        yield ($context["entry_date_available"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"";
        // line 350
        yield ($context["date_available"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_available"] ?? null);
        yield "\" id=\"input-date-available\" class=\"form-control\"/>
                      ";
        // line 351
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 352
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 354
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 354)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 358
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 363
        yield ($context["text_specification"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 365
        yield ($context["entry_shipping"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 369
        if ((($tmp = ($context["shipping"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 371
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 372
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 374
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 378
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 382
        yield ($context["entry_dimension"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 385
        yield ($context["length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_length"] ?? null);
        yield "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 386
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 387
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 389
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 393
        yield "                      <input type=\"text\" name=\"width\" value=\"";
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 394
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 395
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 397
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 401
        yield "                      <input type=\"text\" name=\"height\" value=\"";
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 402
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 403
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 405
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 405)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 409
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 413
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 418
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 418);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 418) == ($context["length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 418);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        yield "                      </select>
                      ";
        // line 421
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 422
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 424
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 428
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 432
        yield ($context["entry_weight"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 435
        yield ($context["weight"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_weight"] ?? null);
        yield "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 436
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 437
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 439
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 439)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 443
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 447
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 452
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 452);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 452) == ($context["weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 452);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        yield "                      </select>
                      ";
        // line 455
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 458
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 462
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 466
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 470
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 472
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 473
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 475
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 475)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 479
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 483
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"sort_order\" value=\"";
        // line 486
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 487
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 488
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 490
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 490)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 494
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 501
        yield ($context["entry_manufacturer"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 504
        yield ($context["manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 505
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 506
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 508
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 508)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 512
        yield "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 513
        yield ($context["manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 515
        yield ($context["help_manufacturer"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 519
        yield ($context["entry_category"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 521
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          ";
        // line 527
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 528
            yield "                            <tr id=\"product-category-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 528);
            yield "\">
                              <td>";
            // line 529
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 529);
            yield "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 529);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 536
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 537
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 539
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 539)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 543
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 544
        yield ($context["help_category"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 548
        yield ($context["entry_filter"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 550
        yield ($context["entry_filter"] ?? null);
        yield "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          ";
        // line 556
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 557
            yield "                            <tr id=\"product-filter-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 557);
            yield "\">
                              <td>";
            // line 558
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 558);
            yield "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 558);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 565
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 568
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 568)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 572
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 573
        yield ($context["help_filter"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 577
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 581
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 582
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 583
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583);
            yield "\" id=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583), ($context["product_store"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 583);
            yield "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 586
        yield "                    </div>
                    ";
        // line 587
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 588
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 590
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 594
        yield "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 598
        yield ($context["entry_download"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 600
        yield ($context["entry_download"] ?? null);
        yield "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 607
            yield "                            <tr id=\"product-download-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 607);
            yield "\">
                              <td>";
            // line 608
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 608);
            yield "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 608);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_download'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 612
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 615
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 616
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 618
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 618)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 622
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 623
        yield ($context["help_download"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 627
        yield ($context["entry_related"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 629
        yield ($context["entry_related"] ?? null);
        yield "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          ";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 636
            yield "                            <tr id=\"product-related-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 636);
            yield "\">
                              <td>";
            // line 637
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 637);
            yield "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 637);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_related'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 641
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 644
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 645
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 647
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 647)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 651
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 652
        yield ($context["help_related"] ?? null);
        yield "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 661
        yield ($context["entry_attribute"] ?? null);
        yield "</th>
                      <th>";
        // line 662
        yield ($context["entry_text"] ?? null);
        yield "</th>
                      <th>";
        // line 663
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 664
            yield "                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 665
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 665)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 667
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 671
        $context["attribute_row"] = 0;
        // line 672
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 673
            yield "                      <tr id=\"attribute-row-";
            yield ($context["attribute_row"] ?? null);
            yield "\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 675
            yield ($context["attribute_row"] ?? null);
            yield "][attribute_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 675);
            yield "\" id=\"input-attribute-id-";
            yield ($context["attribute_row"] ?? null);
            yield "\"/> <input type=\"text\" name=\"product_attribute[";
            yield ($context["attribute_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 675);
            yield "\" placeholder=\"";
            yield ($context["entry_attribute"] ?? null);
            yield "\" id=\"input-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" data-oc-target=\"autocomplete-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 676
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>";
            // line 679
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 680
                yield "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 681
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 681);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 681);
                yield "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 682
                yield ($context["attribute_row"] ?? null);
                yield "][product_attribute_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 682);
                yield "][text]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_text"] ?? null);
                yield "\" id=\"input-text-";
                yield ($context["attribute_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 682);
                yield "\" class=\"form-control\">";
                yield (((($tmp = (($_v18 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 682)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 682)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v19 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 682)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 682)] ?? null) : null), "text", [], "any", false, false, false, 682)) : (""));
                yield "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 684
            yield "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 685
            yield ($context["attribute_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 687
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 688
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 689
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 693
        yield ($context["button_attribute_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 699
        if ((($tmp =  !($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 700
            yield "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  ";
            // line 704
            $context["option_row"] = 0;
            // line 705
            yield "                  ";
            $context["option_value_row"] = 0;
            // line 706
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 707
                yield "
                    <fieldset id=\"option-row-";
                // line 708
                yield ($context["option_row"] ?? null);
                yield "\">
                      <legend>";
                // line 709
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 709);
                yield "</legend>
                      <div id=\"error-option-row-";
                // line 710
                yield ($context["option_row"] ?? null);
                yield "\" class=\"invalid-feedback\"></div>
                      <input type=\"hidden\" name=\"product_option[";
                // line 711
                yield ($context["option_row"] ?? null);
                yield "][product_option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 711);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][name]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 711);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 711);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][type]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 711);
                yield "\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-";
                // line 717
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-label\">";
                yield ($context["entry_required"] ?? null);
                yield "</label> <select name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][required]\" id=\"input-required-";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-select\">
                              <option value=\"1\"";
                // line 718
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 718)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_enabled"] ?? null);
                yield "</option>
                              <option value=\"0\"";
                // line 719
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 719)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_disabled"] ?? null);
                yield "</option>
                            </select>
                          </div>

                          ";
                // line 723
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 723) == "text")) {
                    // line 724
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 725
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 725);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 728
                yield "
                          ";
                // line 729
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 729) == "textarea")) {
                    // line 730
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 731
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <textarea name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" rows=\"5\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 731);
                    yield "</textarea>
                            </div>
                          ";
                }
                // line 734
                yield "
                          ";
                // line 735
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 735) == "file")) {
                    // line 736
                    yield "                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-";
                    // line 737
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 737);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 740
                yield "
                          ";
                // line 741
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 741) == "date")) {
                    // line 742
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 743
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"date\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 743);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 746
                yield "
                          ";
                // line 747
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 747) == "time")) {
                    // line 748
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 749
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"time\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 749);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 752
                yield "
                          ";
                // line 753
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 753) == "datetime")) {
                    // line 754
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 755
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"datetime-local\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 755);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 758
                yield "
                          ";
                // line 759
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 759) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 759) == "radio")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 759) == "checkbox")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 759) == "image"))) {
                    // line 760
                    yield "                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>";
                    // line 764
                    yield ($context["entry_option_value"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 765
                    yield ($context["entry_quantity"] ?? null);
                    yield "</th>
                                    <th>";
                    // line 766
                    yield ($context["entry_subtract"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 767
                    yield ($context["entry_price"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 768
                    yield ($context["entry_points"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 769
                    yield ($context["entry_weight"] ?? null);
                    yield "</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-";
                    // line 773
                    yield ($context["option_row"] ?? null);
                    yield "\">
                                  ";
                    // line 774
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 774));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 775
                        yield "                                    <tr id=\"option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "\">
                                      <td>";
                        // line 776
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 776);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 777
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 777);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][product_option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 777);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 778
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 778);
                        yield " <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][quantity]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 778);
                        yield "\"/></td>
                                      <td>";
                        // line 779
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 779)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 780
                            yield "                                          ";
                            yield ($context["text_yes"] ?? null);
                            yield "
                                        ";
                        } else {
                            // line 782
                            yield "                                          ";
                            yield ($context["text_no"] ?? null);
                            yield "
                                        ";
                        }
                        // line 784
                        yield "                                        <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][subtract]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 784);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 785
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 785);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 785);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 786
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 786);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 786);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 787
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 787);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 787);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 788
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 788);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 788);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 789
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 789);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 789);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 790
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 790);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 790);
                        yield "\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 791
                        yield ($context["button_edit"] ?? null);
                        yield "\" data-option-row=\"";
                        yield ($context["option_row"] ?? null);
                        yield "\" data-option-value-row=\"";
                        yield ($context["option_value_row"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_remove"] ?? null);
                        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 793
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 794
                        yield "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product_option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 795
                    yield "                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 799
                    yield ($context["button_option_value_add"] ?? null);
                    yield "\" data-option-row=\"";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-";
                    // line 803
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"d-none\">
                                ";
                    // line 804
                    if ((($tmp = (($_v20 = ($context["option_values"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 804)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 805
                        yield "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($_v21 = ($context["option_values"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 805)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 806
                            yield "                                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 806);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 806);
                            yield "</option>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 808
                        yield "                                ";
                    }
                    // line 809
                    yield "                              </select>
                            </div>
                          ";
                }
                // line 812
                yield "                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"";
                // line 815
                yield ($context["button_remove"] ?? null);
                yield "\" onclick=\"\$('#option-row-";
                yield ($context["option_row"] ?? null);
                yield "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    ";
                // line 819
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 820
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product_option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 821
            yield "                </div>
                <fieldset>
                  <legend class=\"float-none\">";
            // line 823
            yield ($context["text_option_add"] ?? null);
            yield "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 825
            yield ($context["entry_option"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 827
            yield ($context["entry_option"] ?? null);
            yield "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 829
            yield ($context["help_option"] ?? null);
            yield "</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 835
            yield "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 836
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 837
                yield "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 838
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 838);
                yield "</legend>

                    ";
                // line 840
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 840) == "select")) {
                    // line 841
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 841)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 842
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 842);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 845
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 845);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 845);
                    yield "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 846
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                              ";
                    // line 847
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 847));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 848
                        yield "                                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 848);
                        yield "\"";
                        if (((($_v22 = ($context["variant"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 848)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 848) == (($_v23 = ($context["variant"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 848)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 848);
                        yield "
                                  ";
                        // line 849
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 849)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 850
                            yield "                                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 850);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 850);
                            yield ")
                                  ";
                        }
                        // line 851
                        yield "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 853
                    yield "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 856
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 856);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 856);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 856);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 856)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 856)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 856);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 860
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 860);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 864
                yield "
                    ";
                // line 865
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 865) == "radio")) {
                    // line 866
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 866)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 867
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 867);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 870
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 870);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 871
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 871));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 872
                        yield "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 873
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 873);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 873);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 873);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v25 = ($context["variant"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 873)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 873) == (($_v26 = ($context["variant"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 873)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 873);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 874
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 874)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 875
                            yield "                                      <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 875);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 875);
                            yield " ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 875)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 875);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 875);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 876
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 876);
                        yield "
                                    ";
                        // line 877
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 877)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 878
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 878);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 878);
                            yield ")
                                    ";
                        }
                        // line 879
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 882
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 885
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 885);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 885);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 885);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 885)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 885)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 885);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 889
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 889);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 893
                yield "
                    ";
                // line 894
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 894) == "checkbox")) {
                    // line 895
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 895)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 896
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 896);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 899
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 899);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 900
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 900));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 901
                        yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 902
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 902);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 902);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 902);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v28 = ($context["variant"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 902)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 902), (($_v29 = ($context["variant"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 902)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 902);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 903
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 903)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 904
                            yield "                                      <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 904);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 904);
                            yield " ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 904)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 904);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 904);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 905
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 905);
                        yield "
                                    ";
                        // line 906
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 906)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 907
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 907);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 907);
                            yield ")
                                    ";
                        }
                        // line 908
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 911
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 914
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 914)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 918
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 918);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 922
                yield "
                    ";
                // line 923
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 923) == "text")) {
                    // line 924
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 924)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 925
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 925);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 925);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 928
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v31 = ($context["variant"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v32 = ($context["variant"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 928)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 928);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 931
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 931);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 931);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 931);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 931)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 931)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 931);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 935
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 935);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 939
                yield "
                    ";
                // line 940
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 940) == "textarea")) {
                    // line 941
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 941)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 942
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 942);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 942);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 945
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 945);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 945);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 945);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v34 = ($context["variant"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 945)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v35 = ($context["variant"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 945)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 945)));
                    yield "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 948
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 948)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 952
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 952);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 956
                yield "
                    ";
                // line 957
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 957) == "file")) {
                    // line 958
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 958)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 959
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 959);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 962
                    yield ($context["upload"] ?? null);
                    yield "\" id=\"button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 962);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 962);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 963
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 963);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v37 = ($context["variant"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 963)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v38 = ($context["variant"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 963)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 963)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 963);
                    yield "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 964
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 964);
                    yield "\"";
                    if ((($tmp =  !(($_v39 = ($context["variant"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 964)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 965
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965);
                    yield "\"";
                    if ((($tmp =  !(($_v40 = ($context["variant"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 965)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 968
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v41 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 968)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 972
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 972);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 976
                yield "
                    ";
                // line 977
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 977) == "date")) {
                    // line 978
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 978)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 979
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 979);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 979);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[";
                    // line 982
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v42 = ($context["variant"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v43 = ($context["variant"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 982)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 982);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 985
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v44 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 985)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 989
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 989);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 993
                yield "
                    ";
                // line 994
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 994) == "time")) {
                    // line 995
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 995)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 996
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 996);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 996);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 998
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 998);
                    yield "\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[";
                    // line 999
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 999);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v45 = ($context["variant"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 999)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v46 = ($context["variant"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 999)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 999)));
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1002
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v47 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1002)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1006
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1006);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1010
                yield "
                    ";
                // line 1011
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1011) == "datetime")) {
                    // line 1012
                    yield "                      <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1012)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1013
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1013);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1013);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[";
                    // line 1016
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v48 = ($context["variant"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v49 = ($context["variant"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1016)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1019
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1019);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1019);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1019);
                    yield "\" class=\"form-check-input\"";
                    if ((($tmp = (($_v50 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1019)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1019)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1019);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1023
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1023);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1027
                yield "                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1029
            yield "              </div>
            ";
        }
        // line 1031
        yield "            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1036
        yield ($context["entry_subscription"] ?? null);
        yield "</th>
                      <th>";
        // line 1037
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th>";
        // line 1038
        yield ($context["entry_trial_price"] ?? null);
        yield "</th>
                      <th>";
        // line 1039
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th>
                        ";
        // line 1041
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1042
            yield "                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1043
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1043)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1045
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1049
        $context["subscription_row"] = 0;
        // line 1050
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1051
            yield "                      <tr id=\"subscription-row-";
            yield ($context["subscription_row"] ?? null);
            yield "\">
                        <td><select name=\"product_subscription[";
            // line 1052
            yield ($context["subscription_row"] ?? null);
            yield "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1053
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1054
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1054);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1054) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1054))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1054);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1056
            yield "                          </select></td>
                        <td><select name=\"product_subscription[";
            // line 1057
            yield ($context["subscription_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1058
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1059
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1059);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1059) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1059))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1059);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1061
            yield "                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1062
            yield ($context["subscription_row"] ?? null);
            yield "][trial_price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1062);
            yield "\" placeholder=\"";
            yield ($context["entry_trial_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1063
            yield ($context["subscription_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1063);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1064
            yield ($context["subscription_row"] ?? null);
            yield "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1066
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1067
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_subscription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1068
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1072
        yield ($context["button_subscription_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1083
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1084
        yield ($context["entry_quantity"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1085
        yield ($context["entry_priority"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1086
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1087
        yield ($context["entry_type"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1088
        yield ($context["entry_special"] ?? null);
        yield "</th>
                      <th>";
        // line 1089
        yield ($context["entry_date_start"] ?? null);
        yield "</th>
                      <th>";
        // line 1090
        yield ($context["entry_date_end"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1091
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1092
            yield "                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1093
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1093)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1095
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1099
        $context["discount_row"] = 0;
        // line 1100
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1101
            yield "                      <tr id=\"discount-row-";
            yield ($context["discount_row"] ?? null);
            yield "\">
                        <td><select name=\"product_discount[";
            // line 1102
            yield ($context["discount_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1104
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1104);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1104) == CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1104))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1104);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1106
            yield "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1107
            yield ($context["discount_row"] ?? null);
            yield "][quantity]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1107);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1108
            yield ($context["discount_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1108);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1109
            yield ($context["discount_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1109);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[";
            // line 1110
            yield ($context["discount_row"] ?? null);
            yield "][type]\" class=\"form-select\">
                            <option value=\"F\"";
            // line 1111
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1111) == "F")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_fixed"] ?? null);
            yield "</option>
                            <option value=\"S\"";
            // line 1112
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1112) == "S")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_subtract"] ?? null);
            yield "</option>
                            <option value=\"P\"";
            // line 1113
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1113) == "P")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_percentage"] ?? null);
            yield "</option>
                          </select></td>
                        <td>
                          <div class=\"form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[";
            // line 1117
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"0\"/> <input type=\"checkbox\" name=\"product_discount[";
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"1\" class=\"form-check-input\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "special", [], "any", false, false, false, 1117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/>
                          </div>
                        </td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1120
            yield ($context["discount_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1120);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1121
            yield ($context["discount_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1121);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1122
            yield ($context["discount_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1124
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1125
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_discount'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1126
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1130
        yield ($context["button_discount_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1138
        yield ($context["text_image"] ?? null);
        yield "</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"";
        // line 1140
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"";
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1142
        yield ($context["button_edit"] ?? null);
        yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1143
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    ";
        // line 1144
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1145
            yield "                      <div class=\"mx-auto w-25\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1147
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 1151
        yield "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1155
        yield ($context["text_image_additional"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1160
        yield ($context["entry_image"] ?? null);
        yield "</th>
                        <th>";
        // line 1161
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                        <th class=\"text-end\">
                          ";
        // line 1163
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1164
            yield "                            <div class=\"form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1165
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1167
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1171
        $context["image_row"] = 0;
        // line 1172
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1173
            yield "                        <tr id=\"product-image-row-";
            yield ($context["image_row"] ?? null);
            yield "\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"";
            // line 1176
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1176);
            yield "\" alt=\"\" title=\"\" id=\"product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[";
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1176);
            yield "\" id=\"input-product-image-";
            yield ($context["image_row"] ?? null);
            yield "\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1178
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1179
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[";
            // line 1183
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1183);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1184
            yield ($context["image_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1186
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1187
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1188
        yield "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1192
        yield ($context["button_image_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1202
        yield ($context["text_reward"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1204
        yield ($context["entry_points"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1207
        yield ($context["points"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1208
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1209
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1211
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1215
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1216
        yield ($context["help_points"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1221
        yield ($context["text_points"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1226
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                        <th class=\"text-end\">";
        // line 1227
        yield ($context["entry_reward"] ?? null);
        yield "&nbsp;&nbsp;";
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1228
            yield "                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1229
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          ";
        }
        // line 1231
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1236
            yield "                        <tr>
                          <td>";
            // line 1237
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1237);
            yield "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1238
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1238);
            yield "][points]\" value=\"";
            yield (((($tmp = (($_v51 = ($context["product_reward"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1238)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v52 = ($context["product_reward"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1238)] ?? null) : null), "points", [], "any", false, false, false, 1238)) : (""));
            yield "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1241
        yield "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1248
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1253
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 1254
        yield ($context["entry_keyword"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1258
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1259
            yield "                      <tr>
                        <td>";
            // line 1260
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1260);
            yield "</td>
                        <td>
                          ";
            // line 1262
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1263
                yield "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1264
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1264);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1264);
                yield "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1265
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1265);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1265);
                yield "]\" value=\"";
                if ((($tmp = (($_v53 = (($_v54 = ($context["product_seo_url"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1265)] ?? null) : null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1265)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v55 = (($_v56 = ($context["product_seo_url"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1265)] ?? null) : null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1265)] ?? null) : null);
                }
                yield "\" id=\"input-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1265);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1265);
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1267
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1267);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1267);
                yield "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1268
            yield "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1271
        yield "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1281
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 1282
        yield ($context["entry_layout"] ?? null);
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1283
            yield "                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1284
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1286
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1290
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1291
            yield "                      <tr>
                        <td>";
            // line 1292
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1292);
            yield "</td>
                        <td><select name=\"product_layout[";
            // line 1293
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1293);
            yield "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1295
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1296
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1296);
                yield "\"";
                if (((($_v57 = ($context["product_layout"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1296)] ?? null) : null) && ((($_v58 = ($context["product_layout"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1296)] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1296)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1296);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1298
            yield "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1301
        yield "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1308
        yield ($context["text_report"] ?? null);
        yield "</legend>
                <div id=\"report\">";
        // line 1309
        yield ($context["report"] ?? null);
        yield "</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1314
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1322
        yield ($context["ckeditor"] ?? null);
        yield "'
});

var code_row = ";
        // line 1325
        yield ($context["code_row"] ?? null);
        yield ";

\$('#button-code').on('click', function() {
    var html = '';

    let code = \$('#input-code').val();
    let value = \$('#input-value').val();

    html += '<tr id=\"code-row-' + code_row + '\">';
    html += '  <td style=\"width: 1px;\">' + code + '<input type=\"hidden\" name=\"product_code[' + code_row + '][code]\" value=\"' + code + '\"/></td>';
    html += '  <td>' + value + '<div id=\"error-code-' + code_row + '\" class=\"invalid-feedback\"></div><input type=\"hidden\" name=\"product_code[' + code_row + '][value]\" value=\"' + value + '\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-code').append(html);

    code_row++;
});

\$('#product-code').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1352
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1357
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1379
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1413
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1447
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1481
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1515
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(decodeHTMLEntities(item['label']));
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1535
        yield ($context["attribute_row"] ?? null);
        yield ";

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_attribute"] ?? null), "js");
        yield "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  ";
        // line 1549
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1550
            yield "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1551
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1551);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1551), "js");
            yield "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1552
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1552);
            yield "][text]\" rows=\"5\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_text"] ?? null), "js");
            yield "\" id=\"input-text-' + attribute_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1552);
            yield "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1555
        yield "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1566
        if ((($tmp =  !($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1567
            yield "var option_row = ";
            yield ($context["option_row"] ?? null);
            yield ";

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1572
            yield ($context["user_token"] ?? null);
            yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <div id=\"error-option-row-' + option_row + '\" class=\"invalid-feedback\"></div>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + decodeHTMLEntities(item['label']) + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">";
            // line 1600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_required"] ?? null), "js");
            yield "</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">";
            // line 1602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '\t         <option value=\"0\">";
            // line 1603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1609
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1623
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1624
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1631
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1637
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1638
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1644
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>";
            // line 1654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</td>';
            html += '        <td>";
            // line 1656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1657
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1658
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1659
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_option_value_add"] ?? null), "js");
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1694
            yield ($context["option_value_row"] ?? null);
            yield ";

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_option_value"] ?? null), "js");
            yield "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1715
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1732
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1733
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1736
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1740
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\">";
            // line 1741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1743
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1744
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1788
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1792
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1809
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_save"] ?? null), "js");
            yield "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_cancel"] ?? null), "js");
            yield "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1828
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "' : '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
            yield "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 1847
        yield "
var discount_row = ";
        // line 1848
        yield ($context["discount_row"] ?? null);
        yield ";

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1853
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1854
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1854);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1854), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1856
        yield "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"";
        // line 1857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1858
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">";
        // line 1861
        yield ($context["text_fixed"] ?? null);
        yield "</option>';
    html += '    <option value=\"S\">";
        // line 1862
        yield ($context["text_subtract"] ?? null);
        yield "</option>';
    html += '    <option value=\"P\">";
        // line 1863
        yield ($context["text_percentage"] ?? null);
        yield "</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1869
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_start"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_end"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = ";
        // line 1879
        yield ($context["image_row"] ?? null);
        yield ";

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 1884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 1890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 1899
        yield ($context["subscription_row"] ?? null);
        yield ";

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 1904
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 1905
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1905);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1905), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1907
        yield "    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1909
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1910
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1910);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1910), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1912
        yield "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 1913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_trial_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 1914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 1923
        if ((($tmp = ($context["master_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1924
            yield "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 1990
        yield "
\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 1997
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
        return "webadmin/view/template/catalog/product_form.twig";
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
        return array (  4876 => 1997,  4867 => 1990,  4799 => 1924,  4797 => 1923,  4786 => 1915,  4782 => 1914,  4778 => 1913,  4775 => 1912,  4764 => 1910,  4760 => 1909,  4756 => 1907,  4745 => 1905,  4741 => 1904,  4733 => 1899,  4722 => 1891,  4718 => 1890,  4712 => 1887,  4708 => 1886,  4701 => 1884,  4693 => 1879,  4682 => 1871,  4678 => 1870,  4674 => 1869,  4665 => 1863,  4661 => 1862,  4657 => 1861,  4652 => 1859,  4648 => 1858,  4644 => 1857,  4641 => 1856,  4630 => 1854,  4626 => 1853,  4618 => 1848,  4615 => 1847,  4595 => 1832,  4586 => 1828,  4567 => 1814,  4559 => 1809,  4539 => 1792,  4532 => 1788,  4512 => 1771,  4505 => 1767,  4485 => 1750,  4476 => 1744,  4472 => 1743,  4467 => 1741,  4463 => 1740,  4456 => 1736,  4450 => 1733,  4446 => 1732,  4426 => 1715,  4419 => 1711,  4399 => 1694,  4369 => 1667,  4358 => 1659,  4354 => 1658,  4350 => 1657,  4346 => 1656,  4342 => 1655,  4338 => 1654,  4326 => 1645,  4322 => 1644,  4313 => 1638,  4309 => 1637,  4300 => 1631,  4296 => 1630,  4287 => 1624,  4283 => 1623,  4274 => 1617,  4270 => 1616,  4261 => 1610,  4257 => 1609,  4248 => 1603,  4244 => 1602,  4239 => 1600,  4208 => 1572,  4199 => 1567,  4197 => 1566,  4184 => 1556,  4181 => 1555,  4168 => 1552,  4162 => 1551,  4159 => 1550,  4155 => 1549,  4147 => 1544,  4135 => 1535,  4112 => 1515,  4075 => 1481,  4038 => 1447,  4001 => 1413,  3964 => 1379,  3939 => 1357,  3931 => 1352,  3901 => 1325,  3895 => 1322,  3884 => 1314,  3876 => 1309,  3872 => 1308,  3863 => 1301,  3855 => 1298,  3840 => 1296,  3836 => 1295,  3831 => 1293,  3827 => 1292,  3824 => 1291,  3820 => 1290,  3814 => 1286,  3806 => 1284,  3803 => 1283,  3800 => 1282,  3796 => 1281,  3784 => 1271,  3776 => 1268,  3766 => 1267,  3749 => 1265,  3743 => 1264,  3740 => 1263,  3736 => 1262,  3731 => 1260,  3728 => 1259,  3724 => 1258,  3717 => 1254,  3713 => 1253,  3705 => 1248,  3696 => 1241,  3685 => 1238,  3681 => 1237,  3678 => 1236,  3674 => 1235,  3668 => 1231,  3660 => 1229,  3657 => 1228,  3653 => 1227,  3649 => 1226,  3641 => 1221,  3633 => 1216,  3630 => 1215,  3621 => 1211,  3617 => 1209,  3615 => 1208,  3609 => 1207,  3603 => 1204,  3598 => 1202,  3585 => 1192,  3579 => 1188,  3573 => 1187,  3571 => 1186,  3564 => 1184,  3556 => 1183,  3545 => 1179,  3537 => 1178,  3522 => 1176,  3515 => 1173,  3510 => 1172,  3508 => 1171,  3502 => 1167,  3494 => 1165,  3491 => 1164,  3489 => 1163,  3484 => 1161,  3480 => 1160,  3472 => 1155,  3466 => 1151,  3457 => 1147,  3453 => 1145,  3451 => 1144,  3447 => 1143,  3443 => 1142,  3434 => 1140,  3429 => 1138,  3418 => 1130,  3412 => 1126,  3406 => 1125,  3404 => 1124,  3397 => 1122,  3389 => 1121,  3381 => 1120,  3369 => 1117,  3358 => 1113,  3350 => 1112,  3342 => 1111,  3338 => 1110,  3330 => 1109,  3322 => 1108,  3314 => 1107,  3311 => 1106,  3296 => 1104,  3292 => 1103,  3288 => 1102,  3283 => 1101,  3278 => 1100,  3276 => 1099,  3270 => 1095,  3262 => 1093,  3259 => 1092,  3257 => 1091,  3253 => 1090,  3249 => 1089,  3245 => 1088,  3241 => 1087,  3237 => 1086,  3233 => 1085,  3229 => 1084,  3225 => 1083,  3211 => 1072,  3205 => 1068,  3199 => 1067,  3197 => 1066,  3190 => 1064,  3182 => 1063,  3174 => 1062,  3171 => 1061,  3156 => 1059,  3152 => 1058,  3148 => 1057,  3145 => 1056,  3130 => 1054,  3126 => 1053,  3122 => 1052,  3117 => 1051,  3112 => 1050,  3110 => 1049,  3104 => 1045,  3096 => 1043,  3093 => 1042,  3091 => 1041,  3086 => 1039,  3082 => 1038,  3078 => 1037,  3074 => 1036,  3067 => 1031,  3063 => 1029,  3056 => 1027,  3049 => 1023,  3032 => 1019,  3022 => 1016,  3014 => 1013,  3007 => 1012,  3005 => 1011,  3002 => 1010,  2995 => 1006,  2978 => 1002,  2970 => 999,  2966 => 998,  2959 => 996,  2952 => 995,  2950 => 994,  2947 => 993,  2940 => 989,  2923 => 985,  2913 => 982,  2905 => 979,  2898 => 978,  2896 => 977,  2893 => 976,  2886 => 972,  2869 => 968,  2857 => 965,  2847 => 964,  2839 => 963,  2825 => 962,  2819 => 959,  2812 => 958,  2810 => 957,  2807 => 956,  2800 => 952,  2783 => 948,  2771 => 945,  2763 => 942,  2756 => 941,  2754 => 940,  2751 => 939,  2744 => 935,  2727 => 931,  2715 => 928,  2707 => 925,  2700 => 924,  2698 => 923,  2695 => 922,  2688 => 918,  2671 => 914,  2666 => 911,  2658 => 908,  2651 => 907,  2649 => 906,  2644 => 905,  2629 => 904,  2627 => 903,  2613 => 902,  2610 => 901,  2606 => 900,  2602 => 899,  2596 => 896,  2589 => 895,  2587 => 894,  2584 => 893,  2577 => 889,  2560 => 885,  2555 => 882,  2547 => 879,  2540 => 878,  2538 => 877,  2533 => 876,  2518 => 875,  2516 => 874,  2502 => 873,  2499 => 872,  2495 => 871,  2491 => 870,  2485 => 867,  2478 => 866,  2476 => 865,  2473 => 864,  2466 => 860,  2449 => 856,  2444 => 853,  2437 => 851,  2430 => 850,  2428 => 849,  2417 => 848,  2413 => 847,  2409 => 846,  2403 => 845,  2397 => 842,  2390 => 841,  2388 => 840,  2383 => 838,  2380 => 837,  2376 => 836,  2373 => 835,  2364 => 829,  2359 => 827,  2354 => 825,  2349 => 823,  2345 => 821,  2339 => 820,  2337 => 819,  2328 => 815,  2323 => 812,  2318 => 809,  2315 => 808,  2304 => 806,  2299 => 805,  2297 => 804,  2293 => 803,  2284 => 799,  2278 => 795,  2272 => 794,  2270 => 793,  2257 => 791,  2243 => 790,  2238 => 789,  2224 => 788,  2219 => 787,  2205 => 786,  2200 => 785,  2191 => 784,  2185 => 782,  2179 => 780,  2177 => 779,  2167 => 778,  2153 => 777,  2149 => 776,  2144 => 775,  2140 => 774,  2136 => 773,  2129 => 769,  2125 => 768,  2121 => 767,  2117 => 766,  2113 => 765,  2109 => 764,  2103 => 760,  2101 => 759,  2098 => 758,  2082 => 755,  2079 => 754,  2077 => 753,  2074 => 752,  2058 => 749,  2055 => 748,  2053 => 747,  2050 => 746,  2034 => 743,  2031 => 742,  2029 => 741,  2026 => 740,  2010 => 737,  2007 => 736,  2005 => 735,  2002 => 734,  1986 => 731,  1983 => 730,  1981 => 729,  1978 => 728,  1962 => 725,  1959 => 724,  1957 => 723,  1946 => 719,  1938 => 718,  1928 => 717,  1905 => 711,  1901 => 710,  1897 => 709,  1893 => 708,  1890 => 707,  1885 => 706,  1882 => 705,  1880 => 704,  1874 => 700,  1872 => 699,  1863 => 693,  1857 => 689,  1851 => 688,  1849 => 687,  1842 => 685,  1839 => 684,  1820 => 682,  1814 => 681,  1811 => 680,  1807 => 679,  1801 => 676,  1783 => 675,  1777 => 673,  1772 => 672,  1770 => 671,  1764 => 667,  1756 => 665,  1753 => 664,  1751 => 663,  1747 => 662,  1743 => 661,  1731 => 652,  1728 => 651,  1719 => 647,  1715 => 645,  1713 => 644,  1708 => 641,  1696 => 637,  1691 => 636,  1687 => 635,  1678 => 629,  1673 => 627,  1666 => 623,  1663 => 622,  1654 => 618,  1650 => 616,  1648 => 615,  1643 => 612,  1631 => 608,  1626 => 607,  1622 => 606,  1613 => 600,  1608 => 598,  1602 => 594,  1593 => 590,  1589 => 588,  1587 => 587,  1584 => 586,  1565 => 583,  1562 => 582,  1558 => 581,  1551 => 577,  1544 => 573,  1541 => 572,  1532 => 568,  1528 => 566,  1526 => 565,  1521 => 562,  1509 => 558,  1504 => 557,  1500 => 556,  1491 => 550,  1486 => 548,  1479 => 544,  1476 => 543,  1467 => 539,  1463 => 537,  1461 => 536,  1456 => 533,  1444 => 529,  1439 => 528,  1435 => 527,  1426 => 521,  1421 => 519,  1414 => 515,  1409 => 513,  1406 => 512,  1397 => 508,  1393 => 506,  1391 => 505,  1385 => 504,  1379 => 501,  1370 => 494,  1361 => 490,  1357 => 488,  1355 => 487,  1349 => 486,  1343 => 483,  1337 => 479,  1328 => 475,  1324 => 473,  1322 => 472,  1315 => 470,  1308 => 466,  1302 => 462,  1293 => 458,  1289 => 456,  1287 => 455,  1284 => 454,  1269 => 452,  1265 => 451,  1258 => 447,  1252 => 443,  1243 => 439,  1239 => 437,  1237 => 436,  1231 => 435,  1225 => 432,  1219 => 428,  1210 => 424,  1206 => 422,  1204 => 421,  1201 => 420,  1186 => 418,  1182 => 417,  1175 => 413,  1169 => 409,  1160 => 405,  1156 => 403,  1154 => 402,  1147 => 401,  1138 => 397,  1134 => 395,  1132 => 394,  1125 => 393,  1116 => 389,  1112 => 387,  1110 => 386,  1104 => 385,  1098 => 382,  1092 => 378,  1083 => 374,  1079 => 372,  1077 => 371,  1070 => 369,  1063 => 365,  1058 => 363,  1051 => 358,  1042 => 354,  1038 => 352,  1036 => 351,  1030 => 350,  1024 => 347,  1017 => 342,  1008 => 338,  1004 => 336,  1002 => 335,  996 => 334,  990 => 331,  983 => 326,  974 => 322,  970 => 320,  968 => 319,  962 => 318,  956 => 315,  949 => 311,  946 => 310,  937 => 306,  933 => 304,  931 => 303,  928 => 302,  913 => 300,  909 => 299,  902 => 295,  896 => 291,  887 => 287,  883 => 285,  881 => 284,  874 => 282,  867 => 278,  860 => 274,  857 => 273,  848 => 269,  844 => 267,  842 => 266,  836 => 265,  830 => 262,  821 => 258,  816 => 256,  811 => 254,  804 => 249,  795 => 245,  791 => 243,  789 => 242,  786 => 241,  771 => 239,  767 => 238,  763 => 237,  756 => 233,  750 => 229,  741 => 225,  737 => 223,  735 => 222,  729 => 221,  723 => 218,  718 => 216,  710 => 211,  707 => 210,  698 => 206,  694 => 204,  692 => 203,  687 => 200,  681 => 199,  679 => 198,  671 => 195,  667 => 194,  661 => 193,  653 => 192,  648 => 191,  643 => 190,  641 => 189,  631 => 182,  628 => 181,  617 => 179,  613 => 178,  606 => 174,  599 => 169,  590 => 165,  586 => 163,  584 => 162,  578 => 161,  572 => 158,  567 => 156,  562 => 154,  557 => 151,  537 => 145,  534 => 144,  517 => 140,  513 => 138,  511 => 137,  501 => 136,  493 => 133,  487 => 129,  470 => 125,  466 => 123,  464 => 122,  454 => 121,  446 => 118,  440 => 114,  423 => 110,  419 => 108,  417 => 107,  407 => 106,  399 => 103,  392 => 99,  389 => 98,  372 => 94,  368 => 92,  366 => 91,  356 => 90,  348 => 87,  343 => 85,  336 => 80,  319 => 76,  315 => 74,  313 => 73,  300 => 71,  291 => 67,  284 => 63,  281 => 62,  264 => 58,  260 => 56,  258 => 55,  248 => 54,  240 => 51,  235 => 49,  225 => 47,  208 => 46,  204 => 44,  177 => 42,  160 => 41,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  103 => 23,  98 => 21,  95 => 20,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
    {% if master_id %}
      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_variant }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_data }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_links }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_subscription }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_discount }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_seo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_design }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_report }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                {% for language in languages %}
                  <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">
                {% for language in languages %}
                  <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                    <fieldset>
                      <legend>{{ text_general }}</legend>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-name-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                            {% if master_id %}
                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][name]\" value=\"1\" id=\"input-variant-name-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].name %} checked{% endif %}/> <label for=\"input-variant-name-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            {% endif %}
                          </div>
                          <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                              <textarea name=\"product_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"w-100 position-relative\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                            </div>
                            {% if master_id %}
                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][description]\" value=\"1\" id=\"input-variant-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].description %} checked{% endif %}/> <label for=\"input-variant-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            {% endif %}
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>{{ text_meta }}</legend>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_description[{{ language.language_id }}][meta_title]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                            {% if master_id %}
                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_title]\" value=\"1\" id=\"input-variant-meta-title-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_title %} checked{% endif %}/> <label for=\"input-variant-meta-title-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            {% endif %}
                          </div>
                          <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"product_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>
                            {% if master_id %}
                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_description]\" value=\"1\" id=\"input-variant-meta-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_description %} checked{% endif %}/> <label for=\"input-variant-meta-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            {% endif %}
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"product_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>
                            {% if master_id %}
                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_keyword %} checked{% endif %}/> <label for=\"input-variant-meta-keyword-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            {% endif %}
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tag-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_tag }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_description[{{ language.language_id }}][tag]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].tag }}\" placeholder=\"{{ entry_tag }}\" id=\"input-tag-{{ language.language_id }}\" class=\"form-control\"/>
                            {% if master_id %}
                              <div class=\"input-group-text\">
                                <div class=\"form-switch\">
                                  <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][tag]\" value=\"1\" id=\"input-variant-tag-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].tag %} checked{% endif %}/> <label for=\"input-variant-tag-{{ language.language_id }}\" class=\"form-check-label\"></label>
                                </div>
                              </div>
                            {% endif %}
                          </div>
                          <div class=\"form-text\">{{ help_tag }}</div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                {% endfor %}
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
              <fieldset>
                <legend>{{ text_model }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">{{ entry_model }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"{% if override.model %} checked{% endif %}/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_product_code }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select id=\"input-code\" class=\"form-select\">
                        {% for identifier in identifiers %}
                          <option value=\"{{ identifier.code }}\">{{ identifier.code }}</option>
                        {% endfor %}
                      </select>
                      <input type=\"text\" value=\"\" placeholder=\"{{ entry_product_code }}\" id=\"input-value\" class=\"form-control w-75\"/>
                      <button type=\"button\" id=\"button-code\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
                    </div>
                    <div class=\"input-group\">
                      <div class=\"form-control p-0\" style=\"height: 100px; overflow: auto;\">
                        <table id=\"product-code\" class=\"table m-0\">
                          <tbody>
                            {% set code_row = 0 %}
                            {% for product_code in product_codes %}
                              <tr id=\"code-row-{{ code_row }}\">
                                <td style=\"width: 1px;\">{{ product_code.code }}<input type=\"hidden\" name=\"product_code[{{ code_row }}][code]\" value=\"{{ product_code.code }}\"/></td>
                                <td id=\"input-code-{{ code_row }}\">{{ product_code.value }}
                                  <div id=\"error-code-{{ code_row }}\" class=\"invalid-feedback\"></div>
                                  <input type=\"hidden\" name=\"product_code[{{ code_row }}][value]\" value=\"{{ product_code.value }}\"></td>
                                <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                              </tr>
                              {% set code_row = code_row + 1 %}
                            {% endfor %}
                          </tbody>
                        </table>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[product_code]\" value=\"1\" id=\"input-variant-code\" data-oc-toggle=\"switch\" data-oc-target=\"#input-code, #product-code\" class=\"form-check-input\"{% if override.product_code %} checked{% endif %}/> <label for=\"input-variant-code\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_product_code }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_price }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"{{ price }}\" placeholder=\"{{ entry_price }}\" id=\"input-price\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"{% if override.price %} checked{% endif %}/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">{{ entry_tax_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">{{ text_none }}</option>
                        {% for tax_class in tax_classes %}
                          <option value=\"{{ tax_class.tax_class_id }}\"{% if tax_class.tax_class_id == tax_class_id %} selected{% endif %}>{{ tax_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"{% if override.tax_class_id %} checked{% endif %}/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">{{ entry_quantity }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">{{ entry_minimum }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_minimum }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_subtract }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"{% if subtract %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"{% if override.subtract %} checked{% endif %}/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        {% for stock_status in stock_statuses %}
                          <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"{% if override.stock_status_id %} checked{% endif %}/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_stock_status }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"{% if override.location %} checked{% endif %}/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">{{ entry_date_added }}</label>
                    <div class=\"col-sm-10 col-md-4\">
                        <div class=\"input-group\">
                            <input type=\"date\" name=\"date_added\" value=\"{{ date_added }}\" placeholder=\"{{ date_added }}\" id=\"input-date-added\" class=\"form-control\"/>
                            {% if master_id %}
                                <div class=\"input-group-text\">
                                    <div class=\"form-check form-switch\">
                                        <input type=\"checkbox\" name=\"override[date_added]\" value=\"1\" id=\"input-variant-date-added\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-added\" class=\"form-check-input\"{% if override.date_added %} checked{% endif %}/> <label for=\"input-variant-date-added\" class=\"form-check-label\"></label>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">{{ entry_date_available }}</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" id=\"input-date-available\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"{% if override.date_available %} checked{% endif %}/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_specification }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shipping }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"{% if shipping %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"{% if override.shipping %} checked{% endif %}/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">{{ entry_dimension }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"{{ length }}\" placeholder=\"{{ entry_length }}\" id=\"input-length\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"{% if override.length %} checked{% endif %}/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"{% if override.width %} checked{% endif %}/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"{% if override.height %} checked{% endif %}/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        {% for length_class in length_classes %}
                          <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"{% if override.length_class_id %} checked{% endif %}/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">{{ entry_weight }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"{{ weight }}\" placeholder=\"{{ entry_weight }}\" id=\"input-weight\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"{% if override.weight %} checked{% endif %}/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        {% for weight_class in weight_classes %}
                          <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"{% if override.weight_class_id %} checked{% endif %}/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"{% if override.status %} checked{% endif %}/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"{% if override.sort_order %} checked{% endif %}/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_manufacturer }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"{% if override.manufacturer %} checked{% endif %}/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">{{ help_manufacturer }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_category }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          {% for product_category in product_categories %}
                            <tr id=\"product-category-{{ product_category.category_id }}\">
                              <td>{{ product_category.name }}<input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"{% if override.product_category %} checked{% endif %}/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_category }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_filter }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          {% for product_filter in product_filters %}
                            <tr id=\"product-filter-{{ product_filter.filter_id }}\">
                              <td>{{ product_filter.name }}<input type=\"hidden\" name=\"product_filter[]\" value=\"{{ product_filter.filter_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"{% if override.product_filter %} checked{% endif %}/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_filter }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for store in stores %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\" id=\"input-store-{{ store.store_id }}\" class=\"form-check-input\"{% if store.store_id in product_store %} checked{% endif %}/> <label for=\"input-store-{{ store.store_id }}\" class=\"form-check-label\">{{ store.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"{% if override.product_store %} checked{% endif %}/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_download }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"{{ entry_download }}\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          {% for product_download in product_downloads %}
                            <tr id=\"product-download-{{ product_download.download_id }}\">
                              <td>{{ product_download.name }}<input type=\"hidden\" name=\"product_download[]\" value=\"{{ product_download.download_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"{% if override.product_download %} checked{% endif %}/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_download }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_related }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table table-sm table-hover table-borderless m-0\">
                        <tbody>
                          {% for product_related in product_relateds %}
                            <tr id=\"product-related-{{ product_related.product_id }}\">
                              <td>{{ product_related.name }}<input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"{% if override.product_related %} checked{% endif %}/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_related }}</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_attribute }}</th>
                      <th>{{ entry_text }}</th>
                      <th>{% if master_id %}
                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"{% if override.product_attribute %} checked{% endif %}/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set attribute_row = 0 %}
                    {% for product_attribute in product_attributes %}
                      <tr id=\"attribute-row-{{ attribute_row }}\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[{{ attribute_row }}][attribute_id]\" value=\"{{ product_attribute.attribute_id }}\" id=\"input-attribute-id-{{ attribute_row }}\"/> <input type=\"text\" name=\"product_attribute[{{ attribute_row }}][name]\" value=\"{{ product_attribute.name }}\" placeholder=\"{{ entry_attribute }}\" id=\"input-attribute-{{ attribute_row }}\" data-oc-target=\"autocomplete-attribute-{{ attribute_row }}\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-{{ attribute_row }}\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>{% for language in languages %}
                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <textarea name=\"product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" id=\"input-text-{{ attribute_row }}-{{ language.language_id }}\" class=\"form-control\">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>
                            </div>
                          {% endfor %}</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-{{ attribute_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set attribute_row = attribute_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"{{ button_attribute_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            {% if not master_id %}
              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  {% set option_row = 0 %}
                  {% set option_value_row = 0 %}
                  {% for product_option in product_options %}

                    <fieldset id=\"option-row-{{ option_row }}\">
                      <legend>{{ product_option.name }}</legend>
                      <div id=\"error-option-row-{{ option_row }}\" class=\"invalid-feedback\"></div>
                      <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_id]\" value=\"{{ product_option.product_option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][name]\" value=\"{{ product_option.name }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][option_id]\" value=\"{{ product_option.option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][type]\" value=\"{{ product_option.type }}\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-{{ option_row }}\" class=\"form-label\">{{ entry_required }}</label> <select name=\"product_option[{{ option_row }}][required]\" id=\"input-required-{{ option_row }}\" class=\"form-select\">
                              <option value=\"1\"{% if product_option.required %} selected{% endif %}>{{ text_enabled }}</option>
                              <option value=\"0\"{% if not product_option.required %} selected{% endif %}>{{ text_disabled }}</option>
                            </select>
                          </div>

                          {% if product_option.type == 'text' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'textarea' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <textarea name=\"product_option[{{ option_row }}][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\">{{ product_option.value }}</textarea>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'file' %}
                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'date' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"date\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'time' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"time\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'datetime' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"datetime-local\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}
                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>{{ entry_option_value }}</th>
                                    <th class=\"text-end\">{{ entry_quantity }}</th>
                                    <th>{{ entry_subtract }}</th>
                                    <th class=\"text-end\">{{ entry_price }}</th>
                                    <th class=\"text-end\">{{ entry_points }}</th>
                                    <th class=\"text-end\">{{ entry_weight }}</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-{{ option_row }}\">
                                  {% for product_option_value in product_option.product_option_value %}
                                    <tr id=\"option-value-row-{{ option_value_row }}\">
                                      <td>{{ product_option_value.name }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]\" value=\"{{ product_option_value.option_value_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]\" value=\"{{ product_option_value.product_option_value_id }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.quantity }} <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]\" value=\"{{ product_option_value.quantity }}\"/></td>
                                      <td>{% if product_option_value.subtract %}
                                          {{ text_yes }}
                                        {% else %}
                                          {{ text_no }}
                                        {% endif %}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]\" value=\"{{ product_option_value.subtract }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.price_prefix }}{{ product_option_value.price }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]\" value=\"{{ product_option_value.price_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]\" value=\"{{ product_option_value.price }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.points_prefix }}{{ product_option_value.points }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]\" value=\"{{ product_option_value.points_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]\" value=\"{{ product_option_value.points }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.weight_prefix }}{{ product_option_value.weight }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]\" value=\"{{ product_option_value.weight_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]\" value=\"{{ product_option_value.weight }}\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" data-option-row=\"{{ option_row }}\" data-option-value-row=\"{{ option_value_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    {% set option_value_row = option_value_row + 1 %}
                                  {% endfor %}
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" data-option-row=\"{{ option_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-{{ option_row }}\" class=\"d-none\">
                                {% if option_values[product_option.option_id] %}
                                  {% for option_value in option_values[product_option.option_id] %}
                                    <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>
                                  {% endfor %}
                                {% endif %}
                              </select>
                            </div>
                          {% endif %}
                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" onclick=\"\$('#option-row-{{ option_row }}').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    {% set option_row = option_row + 1 %}
                  {% endfor %}
                </div>
                <fieldset>
                  <legend class=\"float-none\">{{ text_option_add }}</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">{{ entry_option }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"{{ entry_option }}\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">{{ help_option }}</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            {% else %}
              <div id=\"tab-option\" class=\"tab-pane\">
                {% for option in options %}
                  <fieldset>
                    <legend class=\"float-none\">{{ option.name }}</legend>

                    {% if option.type == 'select' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                              <option value=\"\">{{ text_select }}</option>
                              {% for option_value in option.product_option_value %}
                                <option value=\"{{ option_value.product_option_value_id }}\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} selected{% endif %}>{{ option_value.name }}
                                  {% if option_value.price %}
                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                  {% endif %}</option>
                              {% endfor %}
                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %}
                                      <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id in variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %}
                                      <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-{{ option.product_option_id }}\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}
                  </fieldset>
                {% endfor %}
              </div>
            {% endif %}
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_subscription }}</th>
                      <th>{{ entry_customer_group }}</th>
                      <th>{{ entry_trial_price }}</th>
                      <th>{{ entry_price }}</th>
                      <th>
                        {% if master_id %}
                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"{% if override.product_subscription %} checked{% endif %}/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set subscription_row = 0 %}
                    {% for product_subscription in product_subscriptions %}
                      <tr id=\"subscription-row-{{ subscription_row }}\">
                        <td><select name=\"product_subscription[{{ subscription_row }}][subscription_plan_id]\" class=\"form-select\">
                            {% for subscription_plan in subscription_plans %}
                              <option value=\"{{ subscription_plan.subscription_plan_id }}\"{% if subscription_plan.subscription_plan_id == product_subscription.subscription_plan_id %} selected{% endif %}>{{ subscription_plan.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><select name=\"product_subscription[{{ subscription_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_subscription.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][trial_price]\" value=\"{{ product_subscription.trial_price }}\" placeholder=\"{{ entry_trial_price }}\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][price]\" value=\"{{ product_subscription.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-{{ subscription_row }}').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set subscription_row = subscription_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"{{ button_subscription_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_customer_group }}</th>
                      <th class=\"text-end\">{{ entry_quantity }}</th>
                      <th class=\"text-end\">{{ entry_priority }}</th>
                      <th class=\"text-end\">{{ entry_price }}</th>
                      <th class=\"text-end\">{{ entry_type }}</th>
                      <th class=\"text-end\">{{ entry_special }}</th>
                      <th>{{ entry_date_start }}</th>
                      <th>{{ entry_date_end }}</th>
                      <th class=\"text-end\">{% if master_id %}
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"{% if override.product_discount %} checked{% endif %}/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set discount_row = 0 %}
                    {% for product_discount in product_discounts %}
                      <tr id=\"discount-row-{{ discount_row }}\">
                        <td><select name=\"product_discount[{{ discount_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_discount.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][quantity]\" value=\"{{ product_discount.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][priority]\" value=\"{{ product_discount.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][price]\" value=\"{{ product_discount.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[{{ discount_row }}][type]\" class=\"form-select\">
                            <option value=\"F\"{% if product_discount.type == 'F' %} selected{% endif %}>{{ text_fixed }}</option>
                            <option value=\"S\"{% if product_discount.type == 'S' %} selected{% endif %}>{{ text_subtract }}</option>
                            <option value=\"P\"{% if product_discount.type == 'P' %} selected{% endif %}>{{ text_percentage }}</option>
                          </select></td>
                        <td>
                          <div class=\"form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[{{ discount_row }}][special]\" value=\"0\"/> <input type=\"checkbox\" name=\"product_discount[{{ discount_row }}][special]\" value=\"1\" class=\"form-check-input\"{% if product_discount.special %} checked{% endif %}/>
                          </div>
                        </td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_start]\" value=\"{{ product_discount.date_start }}\" placeholder=\"{{ entry_date_start }}\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_end]\" value=\"{{ product_discount.date_end }}\" placeholder=\"{{ entry_date_end }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-{{ discount_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set discount_row = discount_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"{{ button_discount_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image }}</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    {% if master_id %}
                      <div class=\"mx-auto w-25\">
                        <div class=\"form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"{% if override.image %} checked{% endif %}/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_image_additional }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_image }}</th>
                        <th>{{ entry_sort_order }}</th>
                        <th class=\"text-end\">
                          {% if master_id %}
                            <div class=\"form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"{% if override.product_image %} checked{% endif %}/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% set image_row = 0 %}
                      {% for product_image in product_images %}
                        <tr id=\"product-image-row-{{ image_row }}\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" id=\"product-image-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-product-image-{{ image_row }}\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-{{ image_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        {% set image_row = image_row + 1 %}
                      {% endfor %}
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"{{ button_image_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_reward }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"{{ points }}\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"{% if override.points %} checked{% endif %}/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_points }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_points }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_customer_group }}</th>
                        <th class=\"text-end\">{{ entry_reward }}&nbsp;&nbsp;{% if master_id %}
                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"{% if override.product_reward %} checked{% endif %}/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for customer_group in customer_groups %}
                        <tr>
                          <td>{{ customer_group.name }}</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[{{ customer_group.customer_group_id }}][points]\" value=\"{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}\" class=\"form-control\"/></td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_keyword }}</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_keyword }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td>
                          {% for language in languages %}
                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\" id=\"input-keyword-{{ store.store_id }}-{{ language.language_id }}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                          {% endfor %}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_layout }}{% if master_id %}
                          <div class=\"form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"{% if override.product_layout %} checked{% endif %}/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td><select name=\"product_layout[{{ store.store_id }}]\" class=\"form-select\">
                            <option value=\"\"></option>
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_report }}</legend>
                <div id=\"report\">{{ report }}</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

var code_row = {{ code_row }};

\$('#button-code').on('click', function() {
    var html = '';

    let code = \$('#input-code').val();
    let value = \$('#input-value').val();

    html += '<tr id=\"code-row-' + code_row + '\">';
    html += '  <td style=\"width: 1px;\">' + code + '<input type=\"hidden\" name=\"product_code[' + code_row + '][code]\" value=\"' + code + '\"/></td>';
    html += '  <td>' + value + '<div id=\"error-code-' + code_row + '\" class=\"invalid-feedback\"></div><input type=\"hidden\" name=\"product_code[' + code_row + '][value]\" value=\"' + value + '\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-code').append(html);

    code_row++;
});

\$('#product-code').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(decodeHTMLEntities(item['label']));
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = {{ attribute_row }};

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"{{ entry_attribute|escape('js') }}\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  {% for language in languages %}
    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text|escape('js') }}\" id=\"input-text-' + attribute_row + '-{{ language.language_id }}\" class=\"form-control\"></textarea>';
    html += '</div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

{% if not master_id %}
var option_row = {{ option_row }};

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <div id=\"error-option-row-' + option_row + '\" class=\"invalid-feedback\"></div>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + decodeHTMLEntities(item['label']) + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">{{ entry_required|escape('js') }}</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '\t         <option value=\"0\">{{ text_no|escape('js') }}</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>{{ entry_option_value|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_quantity|escape('js') }}</td>';
            html += '        <td>{{ entry_subtract|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_price|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_points|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_weight|escape('js') }}</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add|escape('js') }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = {{ option_value_row }};

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> {{ text_option_value|escape('js') }}</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">{{ entry_quantity|escape('js') }}</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"{{ entry_quantity|escape('js') }}\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">{{ entry_subtract|escape('js') }}</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\">{{ text_no|escape('js') }}</option>';
    } else {
        html += '      \t <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\" selected>{{ text_no|escape('js') }}</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">{{ entry_price|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"{{ entry_price|escape('js') }}\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">{{ entry_points|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"{{ entry_points|escape('js') }}\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">{{ entry_weight|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"{{ entry_weight|escape('js') }}\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">{{ button_save|escape('js') }}</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">{{ button_cancel|escape('js') }}</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '{{ text_yes|escape('js') }}' : '{{ text_no|escape('js') }}') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit|escape('js') }}\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
{% endif %}

var discount_row = {{ discount_row }};

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '    <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"{{ entry_quantity|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">{{ text_fixed }}</option>';
    html += '    <option value=\"S\">{{ text_subtract }}</option>';
    html += '    <option value=\"P\">{{ text_percentage }}</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = {{ image_row }};

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = {{ subscription_row }};

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  {% for subscription_plan in subscription_plans %}
    html += '      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"{{ entry_trial_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

{% if master_id %}
// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
{% endif %}

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
{{ footer }}
", "webadmin/view/template/catalog/product_form.twig", "C:\\xampp\\htdocs\\crafboat\\webadmin\\view\\template\\catalog\\product_form.twig");
    }
}
