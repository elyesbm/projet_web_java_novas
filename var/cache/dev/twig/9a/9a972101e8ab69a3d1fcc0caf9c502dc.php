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

/* marketplace/detail.html.twig */
class __TwigTemplate_7f73f92e354d1df3579ad25de2f3aad5 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/detail.html.twig"));

        $this->parent = $this->load("base_home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - EduVie Marketplace";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour au catalogue</span>
            </a>
            
            <div class=\"flex items-center gap-2\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid lg:grid-cols-2 gap-12\">
                <!-- Left - Images -->
                <div class=\"space-y-4\">
                    <div class=\"glass-card rounded-3xl p-4\">
                        <div class=\"aspect-square rounded-2xl overflow-hidden\">
                            <img id=\"mainImage\" src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), "html", null, true);
        yield "\" class=\"w-full h-full object-cover\">
                        </div>
                    </div>
                    
                    <!-- Thumbnails -->
                    <div class=\"flex gap-3\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 37, $this->source); })()), "images", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 38
            yield "                        <button onclick=\"document.getElementById('mainImage').src = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . $context["img"])), "html", null, true);
            yield "'\" class=\"w-20 h-20 rounded-xl overflow-hidden border-2 border-transparent hover:border-primary transition-all\">
                            <img src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . $context["img"])), "html", null, true);
            yield "\" class=\"w-full h-full object-cover\">
                        </button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </div>
                </div>

                <!-- Right - Details & Purchase -->
                <div class=\"space-y-6\">
                    <!-- Header -->
                    <div>
                        <div class=\"flex items-center gap-2 mb-3\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50) == "academic")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
        yield "\">
                                ";
        // line 51
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51) == "academic")) ? ("Academic") : ("Personal"));
        yield "
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-secondary text-muted-foreground\">
                                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "categorie", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
        yield "
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400 flex items-center gap-1\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-green-400\"></span>
                                ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "statut", [], "any", false, false, false, 58), "html", null, true);
        yield "
                            </span>
                        </div>
                        
                        <h1 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 62, $this->source); })()), "titre", [], "any", false, false, false, 62), "html", null, true);
        yield "</h1>
                        
                        <div class=\"flex items-center gap-4 mb-6\">
                            <div class=\"flex items-center gap-2\">
                                <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 66, $this->source); })()), "vendeur", [], "any", false, false, false, 66), "avatar", [], "any", false, false, false, 66))), "html", null, true);
        yield "\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
                                <div>
                                    <p class=\"font-medium\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 68, $this->source); })()), "vendeur", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
                                    <p class=\"text-xs text-muted-foreground\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 69, $this->source); })()), "vendeur", [], "any", false, false, false, 69), "niveau", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"h-8 w-px bg-white/10\"></div>
                            <div class=\"flex items-center gap-1 text-sm text-muted-foreground\">
                                <i data-lucide=\"star\" class=\"w-4 h-4 text-yellow-500 fill-yellow-500\"></i>
                                <span class=\"font-medium text-foreground\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 75, $this->source); })()), "vendeur", [], "any", false, false, false, 75), "note", [], "any", false, false, false, 75), "html", null, true);
        yield "</span>
                                <span>(";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 76, $this->source); })()), "vendeur", [], "any", false, false, false, 76), "annonces", [], "any", false, false, false, 76), "html", null, true);
        yield " annonces)</span>
                            </div>
                        </div>
                        
                        <p class=\"font-serif text-4xl font-bold text-primary mb-2\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 80, $this->source); })()), "prix", [], "any", false, false, false, 80), "html", null, true);
        yield " €</p>
                        <p class=\"text-sm text-muted-foreground\">Prix negociable</p>
                    </div>

                    <!-- Description -->
                    <div class=\"glass-card rounded-2xl p-6\">
                        <h3 class=\"font-medium mb-3\">Description</h3>
                        <p class=\"text-muted-foreground leading-relaxed whitespace-pre-line\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "contenu", [], "any", false, false, false, 87), "html", null, true);
        yield "</p>
                    </div>

                    <!-- Purchase Form -->
                    <div class=\"glass-card rounded-3xl p-6 border border-primary/30\">
                        <h3 class=\"font-serif text-xl font-medium mb-4 flex items-center gap-2\">
                            <i data-lucide=\"shopping-cart\" class=\"w-5 h-5 text-primary\"></i>
                            Formulaire d'achat
                        </h3>
                        
                        <form method=\"post\" class=\"space-y-4\">
                            <div class=\"grid grid-cols-2 gap-4\">
                                <div>
                                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prenom</label>
                                    <input type=\"text\" required class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"Jean\">
                                </div>
                                <div>
                                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Nom</label>
                                    <input type=\"text\" required class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"Dupont\">
                                </div>
                            </div>
                            
                            <div>
                                <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Email universitaire</label>
                                <input type=\"email\" required class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"jean.dupont@univ.fr\">
                            </div>
                            
                            <div>
                                <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Telephone</label>
                                <input type=\"tel\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"06 12 34 56 78\">
                            </div>
                            
                            <div>
                                <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Message au vendeur (optionnel)</label>
                                <textarea rows=\"3\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none\" placeholder=\"Bonjour, je suis interesse par votre article...\"></textarea>
                            </div>
                            
                            <div class=\"flex items-center gap-3 p-4 bg-secondary/50 rounded-xl\">
                                <input type=\"checkbox\" required class=\"w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary\">
                                <span class=\"text-sm text-muted-foreground\">Je confirme etre etudiant et avoir lu les <a href=\"#\" class=\"text-primary hover:underline\">conditions de vente</a></span>
                            </div>
                            
                            <button type=\"submit\" class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                                <i data-lucide=\"credit-card\" class=\"w-5 h-5\"></i>
                                Contacter le vendeur
                            </button>
                            
                            <p class=\"text-center text-xs text-muted-foreground\">
                                Le paiement se fait en main propre sur le campus
                            </p>
                        </form>
                    </div>

                    <!-- Stats -->
                    <div class=\"flex items-center justify-between text-sm text-muted-foreground\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"eye\" class=\"w-4 h-4\"></i>
                            ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 144, $this->source); })()), "vues", [], "any", false, false, false, 144), "html", null, true);
        yield " vues
                        </span>
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4\"></i>
                            Publie le ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 148, $this->source); })()), "date", [], "any", false, false, false, 148), "d M Y"), "html", null, true);
        yield "
                        </span>
                        <button class=\"flex items-center gap-2 hover:text-primary transition-colors\">
                            <i data-lucide=\"flag\" class=\"w-4 h-4\"></i>
                            Signaler
                        </button>
                    </div>
                </div>
            </div>

            <!-- Similar Articles -->
            <section class=\"mt-16\">
                <h2 class=\"font-serif text-2xl font-medium mb-6\">Articles similaires</h2>
                <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles_similaires"]) || array_key_exists("articles_similaires", $context) ? $context["articles_similaires"] : (function () { throw new RuntimeError('Variable "articles_similaires" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sim"]) {
            // line 163
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sim"], "id", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\" class=\"glass-card rounded-2xl overflow-hidden hover:border-primary/30 transition-all group\">
                        <div class=\"h-40 overflow-hidden\">
                            <img src=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["sim"], "image", [], "any", false, false, false, 165))), "html", null, true);
            yield "\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform\">
                        </div>
                        <div class=\"p-4\">
                            <h3 class=\"font-medium mb-2 group-hover:text-primary transition-colors\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sim"], "titre", [], "any", false, false, false, 168), "html", null, true);
            yield "</h3>
                            <p class=\"font-serif text-xl font-bold text-primary\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sim"], "prix", [], "any", false, false, false, 169), "html", null, true);
            yield " €</p>
                        </div>
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sim'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "                </div>
            </section>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/detail.html.twig";
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
        return array (  354 => 173,  344 => 169,  340 => 168,  334 => 165,  328 => 163,  324 => 162,  307 => 148,  300 => 144,  240 => 87,  230 => 80,  223 => 76,  219 => 75,  210 => 69,  206 => 68,  201 => 66,  194 => 62,  187 => 58,  180 => 54,  174 => 51,  170 => 50,  160 => 42,  151 => 39,  146 => 38,  142 => 37,  131 => 31,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_home.html.twig' %}

{% block title %}{{ article.titre }} - EduVie Marketplace{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_marketplace_index') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour au catalogue</span>
            </a>
            
            <div class=\"flex items-center gap-2\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid lg:grid-cols-2 gap-12\">
                <!-- Left - Images -->
                <div class=\"space-y-4\">
                    <div class=\"glass-card rounded-3xl p-4\">
                        <div class=\"aspect-square rounded-2xl overflow-hidden\">
                            <img id=\"mainImage\" src=\"{{ asset('images/' ~ article.image) }}\" alt=\"{{ article.titre }}\" class=\"w-full h-full object-cover\">
                        </div>
                    </div>
                    
                    <!-- Thumbnails -->
                    <div class=\"flex gap-3\">
                        {% for img in article.images %}
                        <button onclick=\"document.getElementById('mainImage').src = '{{ asset('images/' ~ img) }}'\" class=\"w-20 h-20 rounded-xl overflow-hidden border-2 border-transparent hover:border-primary transition-all\">
                            <img src=\"{{ asset('images/' ~ img) }}\" class=\"w-full h-full object-cover\">
                        </button>
                        {% endfor %}
                    </div>
                </div>

                <!-- Right - Details & Purchase -->
                <div class=\"space-y-6\">
                    <!-- Header -->
                    <div>
                        <div class=\"flex items-center gap-2 mb-3\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ article.type == 'academic' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                                {{ article.type == 'academic' ? 'Academic' : 'Personal' }}
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-secondary text-muted-foreground\">
                                {{ article.categorie.nom }}
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400 flex items-center gap-1\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-green-400\"></span>
                                {{ article.statut }}
                            </span>
                        </div>
                        
                        <h1 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">{{ article.titre }}</h1>
                        
                        <div class=\"flex items-center gap-4 mb-6\">
                            <div class=\"flex items-center gap-2\">
                                <img src=\"{{ asset('images/' ~ article.vendeur.avatar) }}\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
                                <div>
                                    <p class=\"font-medium\">{{ article.vendeur.nom }}</p>
                                    <p class=\"text-xs text-muted-foreground\">{{ article.vendeur.niveau }}</p>
                                </div>
                            </div>
                            <div class=\"h-8 w-px bg-white/10\"></div>
                            <div class=\"flex items-center gap-1 text-sm text-muted-foreground\">
                                <i data-lucide=\"star\" class=\"w-4 h-4 text-yellow-500 fill-yellow-500\"></i>
                                <span class=\"font-medium text-foreground\">{{ article.vendeur.note }}</span>
                                <span>({{ article.vendeur.annonces }} annonces)</span>
                            </div>
                        </div>
                        
                        <p class=\"font-serif text-4xl font-bold text-primary mb-2\">{{ article.prix }} €</p>
                        <p class=\"text-sm text-muted-foreground\">Prix negociable</p>
                    </div>

                    <!-- Description -->
                    <div class=\"glass-card rounded-2xl p-6\">
                        <h3 class=\"font-medium mb-3\">Description</h3>
                        <p class=\"text-muted-foreground leading-relaxed whitespace-pre-line\">{{ article.contenu }}</p>
                    </div>

                    <!-- Purchase Form -->
                    <div class=\"glass-card rounded-3xl p-6 border border-primary/30\">
                        <h3 class=\"font-serif text-xl font-medium mb-4 flex items-center gap-2\">
                            <i data-lucide=\"shopping-cart\" class=\"w-5 h-5 text-primary\"></i>
                            Formulaire d'achat
                        </h3>
                        
                        <form method=\"post\" class=\"space-y-4\">
                            <div class=\"grid grid-cols-2 gap-4\">
                                <div>
                                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prenom</label>
                                    <input type=\"text\" required class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"Jean\">
                                </div>
                                <div>
                                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Nom</label>
                                    <input type=\"text\" required class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"Dupont\">
                                </div>
                            </div>
                            
                            <div>
                                <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Email universitaire</label>
                                <input type=\"email\" required class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"jean.dupont@univ.fr\">
                            </div>
                            
                            <div>
                                <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Telephone</label>
                                <input type=\"tel\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\" placeholder=\"06 12 34 56 78\">
                            </div>
                            
                            <div>
                                <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Message au vendeur (optionnel)</label>
                                <textarea rows=\"3\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none\" placeholder=\"Bonjour, je suis interesse par votre article...\"></textarea>
                            </div>
                            
                            <div class=\"flex items-center gap-3 p-4 bg-secondary/50 rounded-xl\">
                                <input type=\"checkbox\" required class=\"w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary\">
                                <span class=\"text-sm text-muted-foreground\">Je confirme etre etudiant et avoir lu les <a href=\"#\" class=\"text-primary hover:underline\">conditions de vente</a></span>
                            </div>
                            
                            <button type=\"submit\" class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                                <i data-lucide=\"credit-card\" class=\"w-5 h-5\"></i>
                                Contacter le vendeur
                            </button>
                            
                            <p class=\"text-center text-xs text-muted-foreground\">
                                Le paiement se fait en main propre sur le campus
                            </p>
                        </form>
                    </div>

                    <!-- Stats -->
                    <div class=\"flex items-center justify-between text-sm text-muted-foreground\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"eye\" class=\"w-4 h-4\"></i>
                            {{ article.vues }} vues
                        </span>
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4\"></i>
                            Publie le {{ article.date|date('d M Y') }}
                        </span>
                        <button class=\"flex items-center gap-2 hover:text-primary transition-colors\">
                            <i data-lucide=\"flag\" class=\"w-4 h-4\"></i>
                            Signaler
                        </button>
                    </div>
                </div>
            </div>

            <!-- Similar Articles -->
            <section class=\"mt-16\">
                <h2 class=\"font-serif text-2xl font-medium mb-6\">Articles similaires</h2>
                <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                    {% for sim in articles_similaires %}
                    <a href=\"{{ path('app_marketplace_detail', {id: sim.id}) }}\" class=\"glass-card rounded-2xl overflow-hidden hover:border-primary/30 transition-all group\">
                        <div class=\"h-40 overflow-hidden\">
                            <img src=\"{{ asset('images/' ~ sim.image) }}\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform\">
                        </div>
                        <div class=\"p-4\">
                            <h3 class=\"font-medium mb-2 group-hover:text-primary transition-colors\">{{ sim.titre }}</h3>
                            <p class=\"font-serif text-xl font-bold text-primary\">{{ sim.prix }} €</p>
                        </div>
                    </a>
                    {% endfor %}
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock %}", "marketplace/detail.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\marketplace\\detail.html.twig");
    }
}
