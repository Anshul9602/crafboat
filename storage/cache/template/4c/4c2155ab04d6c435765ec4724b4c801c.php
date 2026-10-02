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
    <a href=\"index.php?route=account/register&amp;language=en-gb&amp;account=trade\">Apply for an account</a>
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
<div id=\"cb-saved\" hidden data-add=\"";
        // line 91
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-remove=\"";
        yield ($context["wishlist_remove"] ?? null);
        yield "\" data-ids=\"";
        yield Twig\Extension\CoreExtension::join(($context["saved_ids"] ?? null), ",");
        yield "\"></div>
<div class=\"cb-notice\" id=\"cb-notice\" hidden>
  <div class=\"cb-notice__card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"cb-notice-title\">
    <h2 id=\"cb-notice-title\"></h2>
    <p id=\"cb-notice-message\"></p>
    <button type=\"button\" class=\"cb-btn cb-btn--black\" data-notice-close>Close</button>
  </div>
</div>
<aside class=\"cb-toast\" id=\"cb-toast\" hidden>
  <strong>Saved</strong>
  <p></p>
</aside>
<script>
(function () {
  var notice = document.getElementById('cb-notice');
  if (!notice) return;
  notice.addEventListener('click', function (event) {
    if (event.target === notice || event.target.closest('[data-notice-close]')) {
      notice.hidden = true;
    }
  });
})();
</script>
<script>
(function () {
  var root = document.getElementById('cb-saved');
  if (!root) return;
  var saved = (root.getAttribute('data-ids') || '').split(',').filter(Boolean);

  var toast = document.getElementById('cb-toast');
  var toastTimer = 0;

  function mark() {
    document.querySelectorAll('[data-wishlist]').forEach(function (heart) {
      var on = saved.indexOf(String(heart.getAttribute('data-wishlist'))) !== -1;
      heart.classList.toggle('is-saved', on);
      heart.setAttribute('aria-pressed', on ? 'true' : 'false');
    });
  }

  function notify(message) {
    if (!toast) return;
    toast.querySelector('p').textContent = message;
    toast.hidden = false;
    toast.classList.remove('is-in');
    window.clearTimeout(toastTimer);
    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () { toast.classList.add('is-in'); });
    });
    toastTimer = window.setTimeout(function () {
      toast.classList.remove('is-in');
      window.setTimeout(function () {
        if (!toast.classList.contains('is-in')) toast.hidden = true;
      }, 350);
    }, 2800);
  }

  function send(heart) {
    var id = heart.getAttribute('data-wishlist');
    var on = heart.classList.contains('is-saved');
    var body = new URLSearchParams();
    body.set('product_id', id);
    fetch(on ? root.getAttribute('data-remove') : root.getAttribute('data-add'), {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
      body: body.toString(),
      credentials: 'same-origin'
    }).then(function (response) { return response.json(); }).then(function (json) {
      if (!json || json.error) {
        window.alert(String((json && json.error) || 'Could not update your saved list').replace(/<[^>]+>/g, ''));
        return;
      }
      if (on) {
        saved = saved.filter(function (item) { return item !== String(id); });
      } else if (saved.indexOf(String(id)) === -1) {
        saved.push(String(id));
      }
      mark();
      if (!on) {
        var note = String(json.success || 'Saved to your list').replace(/<[^>]+>/g, '');
        notify(note.replace(/^Success:\\s*/, ''));
      }
      if (typeof json.count !== 'undefined') {
        document.querySelectorAll('.cb-saved-count').forEach(function (pill) {
          pill.textContent = json.count;
        });
      }
    });
  }

  mark();
  document.addEventListener('click', function (event) {
    var heart = event.target.closest('[data-wishlist]');
    if (!heart) return;
    event.preventDefault();
    event.stopPropagation();
    send(heart);
  });
  var bar = document.querySelector('.cb-bar');
  var nav = bar ? bar.querySelector('.cb-nav') : null;
  var desktop = window.matchMedia('(min-width: 701px)');
  var barY = window.scrollY;
  var compact = false;
  var compactLock = 0;
  function setCompact(next) {
    if (!bar || compact === next) return;
    compact = next;
    compactLock = Date.now() + 280;
    if (next) {
      bar.classList.remove('is-ready');
      bar.classList.add('is-compact');
    } else {
      bar.classList.remove('is-compact');
    }
  }
  if (nav) {
    nav.addEventListener('transitionend', function (event) {
      if (event.propertyName !== 'max-height' || compact) return;
      bar.classList.add('is-ready');
    });
  }
  if (bar && desktop.matches) bar.classList.add('is-ready');
  window.addEventListener('scroll', function () {
    if (!bar || !desktop.matches) {
      setCompact(false);
      if (bar) bar.classList.add('is-ready');
      barY = window.scrollY;
      return;
    }
    if (Date.now() < compactLock) {
      barY = window.scrollY;
      return;
    }
    var y = window.scrollY;
    if (y < 80) {
      setCompact(false);
      bar.classList.add('is-ready');
    } else if (y > barY + 16) {
      setCompact(true);
    } else if (y < barY - 16) {
      setCompact(false);
    }
    barY = y;
  }, { passive: true });
  if (window.matchMedia('(max-width: 700px)').matches) {
    document.querySelectorAll('.cb-search input').forEach(function (input) {
      input.setAttribute('placeholder', 'Search products');
    });
    var header = document.querySelector('.cb-header');
    var topbar = document.querySelector('.cb-topbar');
    var lastY = window.scrollY;
    var away = false;
    var awayLock = 0;
    function placeHeader() {
      if (!header) return;
      var topH = topbar ? topbar.offsetHeight : 0;
      header.style.top = Math.max(0, topH - window.scrollY) + 'px';
      if (bar) bar.style.height = header.offsetHeight + 'px';
    }
    placeHeader();
    window.addEventListener('scroll', function () {
      placeHeader();
      if (!header || document.body.classList.contains('cb-nav-open')) return;
      if (Date.now() < awayLock) {
        lastY = window.scrollY;
        return;
      }
      var y = window.scrollY;
      var next = away;
      if (y < 80) next = false;
      else if (y > lastY + 16) next = true;
      else if (y < lastY - 16) next = false;
      lastY = y;
      if (next === away) return;
      away = next;
      awayLock = Date.now() + 240;
      header.classList.toggle('is-away', away);
    }, { passive: true });
  }
  function setNav(open) {
    var nav = document.getElementById('cb-nav');
    var toggle = document.querySelector('[data-nav-toggle]');
    if (!nav) return;
    nav.classList.toggle('is-open', open);
    document.body.classList.toggle('cb-nav-open', open);
    if (!open) nav.querySelectorAll('.cb-nav__item.is-open').forEach(function (item) { item.classList.remove('is-open'); });
    if (toggle) toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  }
  document.addEventListener('click', function (event) {
    if (event.target.closest('[data-nav-toggle]')) {
      var nav = document.getElementById('cb-nav');
      setNav(!(nav && nav.classList.contains('is-open')));
      return;
    }
    if (event.target.closest('[data-nav-close]')) {
      setNav(false);
      return;
    }
    if (!window.matchMedia('(max-width: 700px)').matches) return;
    var parentLink = event.target.closest('.cb-nav__item > a');
    if (!parentLink || !parentLink.parentElement.querySelector('.cb-mega')) return;
    event.preventDefault();
    var item = parentLink.parentElement;
    var open = !item.classList.contains('is-open');
    item.parentElement.querySelectorAll('.cb-nav__item.is-open').forEach(function (other) { other.classList.remove('is-open'); });
    item.classList.toggle('is-open', open);
    if (open) document.getElementById('cb-nav').scrollTop = item.offsetTop;
  });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') setNav(false);
  });
  document.addEventListener('keydown', function (event) {
    if (event.key !== 'Enter' && event.key !== ' ') return;
    var heart = event.target.closest('[data-wishlist]');
    if (!heart) return;
    event.preventDefault();
    send(heart);
  });
})();
</script>
<script>
document.querySelectorAll('[data-cb-banner]').forEach(function (hero) {
  var slides = hero.querySelectorAll('.cb-hero__slide, .cb-coll-hero__slide');
  var dots = hero.querySelectorAll('[data-cb-dot]');
  if (slides.length < 2) return;
  var index = 0;
  function show(next) {
    index = (next + slides.length) % slides.length;
    slides.forEach(function (slide, i) { slide.classList.toggle('is-on', i === index); });
    dots.forEach(function (dot, i) { dot.classList.toggle('is-on', i === index); });
  }
  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { show(i); });
  });
  setInterval(function () { show(index + 1); }, 5000);
});
</script>
";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            yield "<script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 328);
            yield "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
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
        return array (  427 => 329,  416 => 328,  172 => 91,  118 => 40,  114 => 39,  100 => 28,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  75 => 17,  69 => 15,  63 => 13,  61 => 12,  56 => 10,  52 => 9,  42 => 1,);
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
    <a href=\"index.php?route=account/register&amp;language=en-gb&amp;account=trade\">Apply for an account</a>
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
<div id=\"cb-saved\" hidden data-add=\"{{ wishlist_add }}\" data-remove=\"{{ wishlist_remove }}\" data-ids=\"{{ saved_ids|join(',') }}\"></div>
<div class=\"cb-notice\" id=\"cb-notice\" hidden>
  <div class=\"cb-notice__card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"cb-notice-title\">
    <h2 id=\"cb-notice-title\"></h2>
    <p id=\"cb-notice-message\"></p>
    <button type=\"button\" class=\"cb-btn cb-btn--black\" data-notice-close>Close</button>
  </div>
</div>
<aside class=\"cb-toast\" id=\"cb-toast\" hidden>
  <strong>Saved</strong>
  <p></p>
</aside>
<script>
(function () {
  var notice = document.getElementById('cb-notice');
  if (!notice) return;
  notice.addEventListener('click', function (event) {
    if (event.target === notice || event.target.closest('[data-notice-close]')) {
      notice.hidden = true;
    }
  });
})();
</script>
<script>
(function () {
  var root = document.getElementById('cb-saved');
  if (!root) return;
  var saved = (root.getAttribute('data-ids') || '').split(',').filter(Boolean);

  var toast = document.getElementById('cb-toast');
  var toastTimer = 0;

  function mark() {
    document.querySelectorAll('[data-wishlist]').forEach(function (heart) {
      var on = saved.indexOf(String(heart.getAttribute('data-wishlist'))) !== -1;
      heart.classList.toggle('is-saved', on);
      heart.setAttribute('aria-pressed', on ? 'true' : 'false');
    });
  }

  function notify(message) {
    if (!toast) return;
    toast.querySelector('p').textContent = message;
    toast.hidden = false;
    toast.classList.remove('is-in');
    window.clearTimeout(toastTimer);
    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () { toast.classList.add('is-in'); });
    });
    toastTimer = window.setTimeout(function () {
      toast.classList.remove('is-in');
      window.setTimeout(function () {
        if (!toast.classList.contains('is-in')) toast.hidden = true;
      }, 350);
    }, 2800);
  }

  function send(heart) {
    var id = heart.getAttribute('data-wishlist');
    var on = heart.classList.contains('is-saved');
    var body = new URLSearchParams();
    body.set('product_id', id);
    fetch(on ? root.getAttribute('data-remove') : root.getAttribute('data-add'), {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
      body: body.toString(),
      credentials: 'same-origin'
    }).then(function (response) { return response.json(); }).then(function (json) {
      if (!json || json.error) {
        window.alert(String((json && json.error) || 'Could not update your saved list').replace(/<[^>]+>/g, ''));
        return;
      }
      if (on) {
        saved = saved.filter(function (item) { return item !== String(id); });
      } else if (saved.indexOf(String(id)) === -1) {
        saved.push(String(id));
      }
      mark();
      if (!on) {
        var note = String(json.success || 'Saved to your list').replace(/<[^>]+>/g, '');
        notify(note.replace(/^Success:\\s*/, ''));
      }
      if (typeof json.count !== 'undefined') {
        document.querySelectorAll('.cb-saved-count').forEach(function (pill) {
          pill.textContent = json.count;
        });
      }
    });
  }

  mark();
  document.addEventListener('click', function (event) {
    var heart = event.target.closest('[data-wishlist]');
    if (!heart) return;
    event.preventDefault();
    event.stopPropagation();
    send(heart);
  });
  var bar = document.querySelector('.cb-bar');
  var nav = bar ? bar.querySelector('.cb-nav') : null;
  var desktop = window.matchMedia('(min-width: 701px)');
  var barY = window.scrollY;
  var compact = false;
  var compactLock = 0;
  function setCompact(next) {
    if (!bar || compact === next) return;
    compact = next;
    compactLock = Date.now() + 280;
    if (next) {
      bar.classList.remove('is-ready');
      bar.classList.add('is-compact');
    } else {
      bar.classList.remove('is-compact');
    }
  }
  if (nav) {
    nav.addEventListener('transitionend', function (event) {
      if (event.propertyName !== 'max-height' || compact) return;
      bar.classList.add('is-ready');
    });
  }
  if (bar && desktop.matches) bar.classList.add('is-ready');
  window.addEventListener('scroll', function () {
    if (!bar || !desktop.matches) {
      setCompact(false);
      if (bar) bar.classList.add('is-ready');
      barY = window.scrollY;
      return;
    }
    if (Date.now() < compactLock) {
      barY = window.scrollY;
      return;
    }
    var y = window.scrollY;
    if (y < 80) {
      setCompact(false);
      bar.classList.add('is-ready');
    } else if (y > barY + 16) {
      setCompact(true);
    } else if (y < barY - 16) {
      setCompact(false);
    }
    barY = y;
  }, { passive: true });
  if (window.matchMedia('(max-width: 700px)').matches) {
    document.querySelectorAll('.cb-search input').forEach(function (input) {
      input.setAttribute('placeholder', 'Search products');
    });
    var header = document.querySelector('.cb-header');
    var topbar = document.querySelector('.cb-topbar');
    var lastY = window.scrollY;
    var away = false;
    var awayLock = 0;
    function placeHeader() {
      if (!header) return;
      var topH = topbar ? topbar.offsetHeight : 0;
      header.style.top = Math.max(0, topH - window.scrollY) + 'px';
      if (bar) bar.style.height = header.offsetHeight + 'px';
    }
    placeHeader();
    window.addEventListener('scroll', function () {
      placeHeader();
      if (!header || document.body.classList.contains('cb-nav-open')) return;
      if (Date.now() < awayLock) {
        lastY = window.scrollY;
        return;
      }
      var y = window.scrollY;
      var next = away;
      if (y < 80) next = false;
      else if (y > lastY + 16) next = true;
      else if (y < lastY - 16) next = false;
      lastY = y;
      if (next === away) return;
      away = next;
      awayLock = Date.now() + 240;
      header.classList.toggle('is-away', away);
    }, { passive: true });
  }
  function setNav(open) {
    var nav = document.getElementById('cb-nav');
    var toggle = document.querySelector('[data-nav-toggle]');
    if (!nav) return;
    nav.classList.toggle('is-open', open);
    document.body.classList.toggle('cb-nav-open', open);
    if (!open) nav.querySelectorAll('.cb-nav__item.is-open').forEach(function (item) { item.classList.remove('is-open'); });
    if (toggle) toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  }
  document.addEventListener('click', function (event) {
    if (event.target.closest('[data-nav-toggle]')) {
      var nav = document.getElementById('cb-nav');
      setNav(!(nav && nav.classList.contains('is-open')));
      return;
    }
    if (event.target.closest('[data-nav-close]')) {
      setNav(false);
      return;
    }
    if (!window.matchMedia('(max-width: 700px)').matches) return;
    var parentLink = event.target.closest('.cb-nav__item > a');
    if (!parentLink || !parentLink.parentElement.querySelector('.cb-mega')) return;
    event.preventDefault();
    var item = parentLink.parentElement;
    var open = !item.classList.contains('is-open');
    item.parentElement.querySelectorAll('.cb-nav__item.is-open').forEach(function (other) { other.classList.remove('is-open'); });
    item.classList.toggle('is-open', open);
    if (open) document.getElementById('cb-nav').scrollTop = item.offsetTop;
  });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') setNav(false);
  });
  document.addEventListener('keydown', function (event) {
    if (event.key !== 'Enter' && event.key !== ' ') return;
    var heart = event.target.closest('[data-wishlist]');
    if (!heart) return;
    event.preventDefault();
    send(heart);
  });
})();
</script>
<script>
document.querySelectorAll('[data-cb-banner]').forEach(function (hero) {
  var slides = hero.querySelectorAll('.cb-hero__slide, .cb-coll-hero__slide');
  var dots = hero.querySelectorAll('[data-cb-dot]');
  if (slides.length < 2) return;
  var index = 0;
  function show(next) {
    index = (next + slides.length) % slides.length;
    slides.forEach(function (slide, i) { slide.classList.toggle('is-on', i === index); });
    dots.forEach(function (dot, i) { dot.classList.toggle('is-on', i === index); });
  }
  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { show(i); });
  });
  setInterval(function () { show(index + 1); }, 5000);
});
</script>
{% for script in scripts %}<script src=\"{{ script.href }}\" type=\"text/javascript\"></script>{% endfor %}
</body></html>
", "catalog/view/template/common/footer.twig", "C:\\xampp\\htdocs\\crafboat\\catalog\\view\\template\\common\\footer.twig");
    }
}
