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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_ae5e1ca7d82c8c5d01999bda4ab631c8 extends Template
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
        yield "</main>
<footer class=\"cb-footer\">
  <div class=\"cb-footer__brand\">
    <img src=\"catalog/view/image/craftboat/seal.svg\" alt=\"Craft Boat\">
    <p>Craft-led design and production, handmade in Jaipur since 2015.</p>
  </div>
  <div>
    <h3>Wholesale</h3>
    <a href=\"";
        // line 9
        yield ($context["shop_all"] ?? null);
        yield "\">Shop all</a>
    <a href=\"";
        // line 10
        yield ($context["collection"] ?? null);
        yield "\">Collection</a>
    <a href=\"index.php?route=account/register&amp;language=en-gb\">Apply for an account</a>
    ";
        // line 12
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <a href=\"";
            yield ($context["account"] ?? null);
            yield "\">Account</a>
    ";
        } else {
            // line 15
            yield "      <a href=\"";
            yield ($context["login"] ?? null);
            yield "\">Sign in</a>
    ";
        }
        // line 17
        yield "  </div>
  <div>
    <h3>Work with us</h3>
    <a href=\"";
        // line 20
        yield ($context["contact"] ?? null);
        yield "\">Custom orders</a>
    <a href=\"";
        // line 21
        yield ($context["about"] ?? null);
        yield "\">Our process</a>
    <a href=\"";
        // line 22
        yield ($context["contact"] ?? null);
        yield "\">Wholesale terms</a>
    <a href=\"";
        // line 23
        yield ($context["contact"] ?? null);
        yield "\">FAQ’s</a>
  </div>
  <div>
    <h2>Studio notes, by email</h2>
    <p>New collections, trade show dates and wholesale updates. No noise.</p>
    <form class=\"cb-news\" action=\"";
        // line 28
        yield ($context["newsletter"] ?? null);
        yield "\" method=\"get\">
      <input type=\"email\" name=\"email\" placeholder=\"Email address\" aria-label=\"Email address\">
      <button type=\"submit\" aria-label=\"Subscribe\"><img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></button>
    </form>
  </div>
</footer>
<div class=\"cb-drawer\" id=\"cb-drawer\" hidden>
  <button type=\"button\" class=\"cb-drawer__backdrop\" data-cart-close aria-label=\"Close cart\"></button>
  <div class=\"cb-drawer__panel\" id=\"cb-drawer-panel\"></div>
</div>
</div>
";
        // line 39
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"";
        // line 40
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
<script>
(function () {
  var drawer = document.getElementById('cb-drawer');
  var panel = document.getElementById('cb-drawer-panel');
  if (!drawer || !panel) return;

  function openCart(url) {
    drawer.hidden = false;
    document.body.classList.add('cb-drawer-open');
    requestAnimationFrame(function () { drawer.classList.add('is-open'); });
    fetch(url).then(function (response) { return response.text(); }).then(function (html) {
      panel.innerHTML = html;
    });
  }

  function closeCart() {
    drawer.classList.remove('is-open');
    document.body.classList.remove('cb-drawer-open');
    window.setTimeout(function () {
      if (!drawer.classList.contains('is-open')) drawer.hidden = true;
    }, 280);
  }

  document.addEventListener('click', function (event) {
    var opener = event.target.closest('[data-cart-open]');
    if (opener) {
      event.preventDefault();
      openCart(opener.getAttribute('data-cart-url'));
      return;
    }
    if (event.target.closest('[data-cart-close]')) {
      event.preventDefault();
      closeCart();
      return;
    }
    var remove = event.target.closest('#cb-drawer-panel .cb-cart__remove');
    if (remove) {
      event.preventDefault();
      fetch(remove.getAttribute('href')).then(function () {
        var button = document.querySelector('[data-cart-open]');
        if (button) openCart(button.getAttribute('data-cart-url'));
      });
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') closeCart();
  });
})();
</script>
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            yield "<script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 91);
            yield "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  183 => 92,  172 => 91,  118 => 40,  114 => 39,  100 => 28,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  75 => 17,  69 => 15,  63 => 13,  61 => 12,  56 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>
<footer class=\"cb-footer\">
  <div class=\"cb-footer__brand\">
    <img src=\"catalog/view/image/craftboat/seal.svg\" alt=\"Craft Boat\">
    <p>Craft-led design and production, handmade in Jaipur since 2015.</p>
  </div>
  <div>
    <h3>Wholesale</h3>
    <a href=\"{{ shop_all }}\">Shop all</a>
    <a href=\"{{ collection }}\">Collection</a>
    <a href=\"index.php?route=account/register&amp;language=en-gb\">Apply for an account</a>
    {% if logged %}
      <a href=\"{{ account }}\">Account</a>
    {% else %}
      <a href=\"{{ login }}\">Sign in</a>
    {% endif %}
  </div>
  <div>
    <h3>Work with us</h3>
    <a href=\"{{ contact }}\">Custom orders</a>
    <a href=\"{{ about }}\">Our process</a>
    <a href=\"{{ contact }}\">Wholesale terms</a>
    <a href=\"{{ contact }}\">FAQ’s</a>
  </div>
  <div>
    <h2>Studio notes, by email</h2>
    <p>New collections, trade show dates and wholesale updates. No noise.</p>
    <form class=\"cb-news\" action=\"{{ newsletter }}\" method=\"get\">
      <input type=\"email\" name=\"email\" placeholder=\"Email address\" aria-label=\"Email address\">
      <button type=\"submit\" aria-label=\"Subscribe\"><img src=\"catalog/view/image/craftboat/arrow.svg\" alt=\"\"></button>
    </form>
  </div>
</footer>
<div class=\"cb-drawer\" id=\"cb-drawer\" hidden>
  <button type=\"button\" class=\"cb-drawer__backdrop\" data-cart-close aria-label=\"Close cart\"></button>
  <div class=\"cb-drawer__panel\" id=\"cb-drawer-panel\"></div>
</div>
</div>
{{ cookie }}
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
<script>
(function () {
  var drawer = document.getElementById('cb-drawer');
  var panel = document.getElementById('cb-drawer-panel');
  if (!drawer || !panel) return;

  function openCart(url) {
    drawer.hidden = false;
    document.body.classList.add('cb-drawer-open');
    requestAnimationFrame(function () { drawer.classList.add('is-open'); });
    fetch(url).then(function (response) { return response.text(); }).then(function (html) {
      panel.innerHTML = html;
    });
  }

  function closeCart() {
    drawer.classList.remove('is-open');
    document.body.classList.remove('cb-drawer-open');
    window.setTimeout(function () {
      if (!drawer.classList.contains('is-open')) drawer.hidden = true;
    }, 280);
  }

  document.addEventListener('click', function (event) {
    var opener = event.target.closest('[data-cart-open]');
    if (opener) {
      event.preventDefault();
      openCart(opener.getAttribute('data-cart-url'));
      return;
    }
    if (event.target.closest('[data-cart-close]')) {
      event.preventDefault();
      closeCart();
      return;
    }
    var remove = event.target.closest('#cb-drawer-panel .cb-cart__remove');
    if (remove) {
      event.preventDefault();
      fetch(remove.getAttribute('href')).then(function () {
        var button = document.querySelector('[data-cart-open]');
        if (button) openCart(button.getAttribute('data-cart-url'));
      });
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') closeCart();
  });
})();
</script>
{% for script in scripts %}<script src=\"{{ script.href }}\" type=\"text/javascript\"></script>{% endfor %}
</body></html>
", "catalog/view/template/common/footer.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\footer.twig");
    }
}
