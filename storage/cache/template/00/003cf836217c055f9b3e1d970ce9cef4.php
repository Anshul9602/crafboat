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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_535d3b1caab8b99fdde98ec117f66058 extends Template
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
<div id=\"checkout-cart\" class=\"container\">
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
  <div class=\"row\">
    ";
        // line 9
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">
      ";
        // line 11
        yield ($context["content_top"] ?? null);
        yield "
      <div id=\"shopping-cart\">";
        // line 12
        yield ($context["list"] ?? null);
        yield "</div>
      ";
        // line 13
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 15
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('click', '[data-qty]', function(e) {
    e.preventDefault();

    if (this.disabled) {
        return;
    }

    var form = \$(this).closest('form');
    var input = form.find('input[name=\"quantity\"]');
    var pack = parseInt(form.attr('data-step'), 10) || 1;
    var current = parseInt(input.val(), 10) || pack;
    var delta = parseInt(\$(this).attr('data-qty'), 10);
    var next = current;

    if (delta > 0) {
        next = current < pack ? pack : current + pack;
    } else if (current > pack) {
        next = current - pack;

        if (next < pack) {
            next = pack;
        }
    }

    if (String(next) === String(input.val())) {
        return;
    }

    input.val(next);
    form.trigger('submit');
});

\$('#shopping-cart').on('change', 'input[name=\"quantity\"]', function() {
    var input = \$(this);
    var pack = parseInt(input.closest('form').attr('data-step'), 10) || 1;
    var next = parseInt(input.val(), 10);

    if (isNaN(next) || next < pack) {
        next = pack;
    } else if (next % pack !== 0) {
        next = next + (pack - (next % pack));
    }

    input.val(next);
    input.closest('form').trigger('submit');
});

\$('#shopping-cart').on('submit', '#output-cart form', function(e) {
    e.preventDefault();

    var element = this;

    if (\$(element).data('saving')) {
        return;
    }

    var button = (e.originalEvent && e.originalEvent.submitter) ? e.originalEvent.submitter : \$(element).find('[formaction]').get(0);

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).data('saving', 1);
        },
        complete: function() {
            \$(element).data('saving', 0);
        },
        success: function(json) {
            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 98
        yield ($context["language"] ?? null);
        yield "', {}, function() {
                    var units = \$('#shopping-cart [data-units]').attr('data-units');

                    if (units !== undefined) {
                        \$('.cb-tools__cart .cb-pill').text(units);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').on('change', '[data-select-all]', function() {
    \$('#output-cart .cb-bag__check').prop('checked', this.checked);
});

\$('#shopping-cart').on('change', '.cb-bag__check', function() {
    var boxes = \$('#output-cart .cb-bag__check');
    \$('[data-select-all]').prop('checked', boxes.length > 0 && boxes.filter(':checked').length === boxes.length);
});

\$('#shopping-cart').on('click', '[data-remove-selected]', function(e) {
    e.preventDefault();

    var urls = [];

    \$('#output-cart .cb-bag__check:checked').each(function() {
        var href = \$(this).closest('.cb-bag__item').find('.cb-bag__remove').attr('href');

        if (href) {
            urls.push(href);
        }
    });

    if (!urls.length) {
        return;
    }

    var next = function() {
        var url = urls.shift();

        if (!url) {
            \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 143
        yield ($context["language"] ?? null);
        yield "', {}, function() {
                var units = \$('#shopping-cart [data-units]').attr('data-units');

                if (units !== undefined) {
                    \$('.cb-tools__cart .cb-pill').text(units);
                }
            });
            return;
        }

        \$.ajax({ url: url, dataType: 'json', complete: next });
    };

    next();
});

\$('#shopping-cart').on('submit', '.cb-also form', function(e) {
    e.preventDefault();

    var form = this;

    \$.ajax({
        url: \$(form).attr('action'),
        type: 'post',
        data: \$(form).serialize(),
        dataType: 'json',
        success: function(json) {
            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['success']) {
                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 175
        yield ($context["language"] ?? null);
        yield "', {}, function() {
                    var units = \$('#shopping-cart [data-units]').attr('data-units');

                    if (units !== undefined) {
                        \$('.cb-tools__cart .cb-pill').text(units);
                    }
                });
            }
        }
    });
});

\$('#shopping-cart').on('click', '.cb-bag__remove', function(e) {
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
            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 213
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').observe(function(e) {
    \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 223
        yield ($context["language"] ?? null);
        yield "');
});

\$('#cart').on('submit', 'form', function(e) {
    window.setTimeout(function() {
        \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 228
        yield ($context["language"] ?? null);
        yield "');
    }, 3000);
});

\$(function() {
    var block = document.getElementById('cb-cart-block');

    if (block && block.getAttribute('data-message') && window.cbShowNotice) {
        cbShowNotice('Checkout', block.getAttribute('data-message'));
    }
});
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
        return "catalog/view/template/checkout/cart.twig";
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
        return array (  331 => 240,  316 => 228,  308 => 223,  295 => 213,  254 => 175,  219 => 143,  171 => 98,  85 => 15,  80 => 13,  76 => 12,  72 => 11,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">
    {{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <div id=\"shopping-cart\">{{ list }}</div>
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('click', '[data-qty]', function(e) {
    e.preventDefault();

    if (this.disabled) {
        return;
    }

    var form = \$(this).closest('form');
    var input = form.find('input[name=\"quantity\"]');
    var pack = parseInt(form.attr('data-step'), 10) || 1;
    var current = parseInt(input.val(), 10) || pack;
    var delta = parseInt(\$(this).attr('data-qty'), 10);
    var next = current;

    if (delta > 0) {
        next = current < pack ? pack : current + pack;
    } else if (current > pack) {
        next = current - pack;

        if (next < pack) {
            next = pack;
        }
    }

    if (String(next) === String(input.val())) {
        return;
    }

    input.val(next);
    form.trigger('submit');
});

\$('#shopping-cart').on('change', 'input[name=\"quantity\"]', function() {
    var input = \$(this);
    var pack = parseInt(input.closest('form').attr('data-step'), 10) || 1;
    var next = parseInt(input.val(), 10);

    if (isNaN(next) || next < pack) {
        next = pack;
    } else if (next % pack !== 0) {
        next = next + (pack - (next % pack));
    }

    input.val(next);
    input.closest('form').trigger('submit');
});

\$('#shopping-cart').on('submit', '#output-cart form', function(e) {
    e.preventDefault();

    var element = this;

    if (\$(element).data('saving')) {
        return;
    }

    var button = (e.originalEvent && e.originalEvent.submitter) ? e.originalEvent.submitter : \$(element).find('[formaction]').get(0);

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).data('saving', 1);
        },
        complete: function() {
            \$(element).data('saving', 0);
        },
        success: function(json) {
            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}', {}, function() {
                    var units = \$('#shopping-cart [data-units]').attr('data-units');

                    if (units !== undefined) {
                        \$('.cb-tools__cart .cb-pill').text(units);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').on('change', '[data-select-all]', function() {
    \$('#output-cart .cb-bag__check').prop('checked', this.checked);
});

\$('#shopping-cart').on('change', '.cb-bag__check', function() {
    var boxes = \$('#output-cart .cb-bag__check');
    \$('[data-select-all]').prop('checked', boxes.length > 0 && boxes.filter(':checked').length === boxes.length);
});

\$('#shopping-cart').on('click', '[data-remove-selected]', function(e) {
    e.preventDefault();

    var urls = [];

    \$('#output-cart .cb-bag__check:checked').each(function() {
        var href = \$(this).closest('.cb-bag__item').find('.cb-bag__remove').attr('href');

        if (href) {
            urls.push(href);
        }
    });

    if (!urls.length) {
        return;
    }

    var next = function() {
        var url = urls.shift();

        if (!url) {
            \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}', {}, function() {
                var units = \$('#shopping-cart [data-units]').attr('data-units');

                if (units !== undefined) {
                    \$('.cb-tools__cart .cb-pill').text(units);
                }
            });
            return;
        }

        \$.ajax({ url: url, dataType: 'json', complete: next });
    };

    next();
});

\$('#shopping-cart').on('submit', '.cb-also form', function(e) {
    e.preventDefault();

    var form = this;

    \$.ajax({
        url: \$(form).attr('action'),
        type: 'post',
        data: \$(form).serialize(),
        dataType: 'json',
        success: function(json) {
            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['success']) {
                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}', {}, function() {
                    var units = \$('#shopping-cart [data-units]').attr('data-units');

                    if (units !== undefined) {
                        \$('.cb-tools__cart .cb-pill').text(units);
                    }
                });
            }
        }
    });
});

\$('#shopping-cart').on('click', '.cb-bag__remove', function(e) {
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
            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').observe(function(e) {
    \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
});

\$('#cart').on('submit', 'form', function(e) {
    window.setTimeout(function() {
        \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');
    }, 3000);
});

\$(function() {
    var block = document.getElementById('cb-cart-block');

    if (block && block.getAttribute('data-message') && window.cbShowNotice) {
        cbShowNotice('Checkout', block.getAttribute('data-message'));
    }
});
//--></script>
{{ footer }}
", "catalog/view/template/checkout/cart.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
