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

/* front/marketplace/index.html.twig */
class __TwigTemplate_eb7c8361ac3e87aa9b89d1307a32e329 extends Template
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
        return "front/base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/index.html.twig"));

        $this->parent = $this->load("front/base_home.html.twig", 1);
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

        yield "Marketplace - EduVie";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_mes");
        yield "\" class=\"hidden sm:flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"package\" class=\"w-4 h-4\"></i>
                    Mes articles
                </a>
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_ajouter");
        yield "\" class=\"hidden sm:flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Vendre
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 right-20 w-96 h-96 bg-accent/10 rounded-full blur-[100px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"text-center max-w-3xl mx-auto\">
                <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-accent/30 bg-accent/10 text-accent text-sm mb-4\">
                    <i data-lucide=\"shopping-bag\" class=\"w-4 h-4\"></i>
                    Marketplace etudiant
                </div>
                <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                    Achetez et vendez entre <span class=\"italic text-primary\">etudiants</span>
                </h1>
                <p class=\"text-muted-foreground text-lg mb-8\">
                    Livres, electronique, mobilier, services... Trouvez tout ce dont vous avez besoin a prix etudiant.
                </p>
                
                <!-- Search -->
                <div class=\"glass-card rounded-2xl p-2 flex gap-2 max-w-2xl mx-auto\">
                    <div class=\"relative flex-1\">
                        <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input type=\"text\" placeholder=\"Rechercher un article...\" class=\"w-full h-12 bg-transparent pl-12 pr-4 text-sm focus:outline-none placeholder:text-muted-foreground/50\">
                    </div>
                    <button class=\"px-6 h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors\">
                        Rechercher
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex gap-3 overflow-x-auto pb-4 scrollbar-hide\">
                <button class=\"flex-shrink-0 px-6 py-3 bg-primary text-white rounded-xl text-sm font-medium\">
                    Toutes les categories
                </button>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 71
            yield "                <button class=\"flex-shrink-0 px-6 py-3 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-primary/30 transition-all flex items-center gap-2\">
                    <i data-lucide=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "icon", [], "any", false, false, false, 72), "html", null, true);
            yield "\" class=\"w-4 h-4\"></i>
                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 73), "html", null, true);
            yield "
                </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex items-center justify-between mb-6\">
                <h2 class=\"font-serif text-2xl font-medium\">Articles recents</h2>
                <div class=\"flex items-center gap-2\">
                    <span class=\"text-sm text-muted-foreground\">Trier par :</span>
                    <select class=\"h-10 bg-secondary border border-white/10 rounded-xl px-3 text-sm focus:outline-none focus:border-primary\">
                        <option>Plus recents</option>
                        <option>Prix croissant</option>
                        <option>Prix decroissant</option>
                    </select>
                </div>
            </div>
            
            <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 97
            yield "                <div class=\"group glass-card rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 hover:-translate-y-1\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        <img src=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 100))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 100), "html", null, true);
            yield "\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-500\">
                        
                        <!-- Type Badge -->
                        <div class=\"absolute top-3 left-3\">
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium ";
            // line 104
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 104) == "academic")) ? ("bg-academic/90 text-white") : ("bg-personal/90 text-white"));
            yield "\">
                                ";
            // line 105
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 105) == "academic")) ? ("Academic") : ("Personal"));
            yield "
                            </span>
                        </div>
                        
                        <!-- Status -->
                        ";
            // line 110
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 110) != "disponible")) {
                // line 111
                yield "                        <div class=\"absolute inset-0 bg-background/80 flex items-center justify-center\">
                            <span class=\"px-4 py-2 bg-secondary rounded-xl text-sm font-medium\">Reserve</span>
                        </div>
                        ";
            }
            // line 115
            yield "                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-4\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-2\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 121), "nom", [], "any", false, false, false, 121), "html", null, true);
            yield "
                        </div>
                        
                        <h3 class=\"font-medium mb-2 line-clamp-2 group-hover:text-primary transition-colors\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 124), "html", null, true);
            yield "</h3>
                        
                        <!-- Vendeur -->
                        <div class=\"flex items-center gap-2 mb-3\">
                            <img src=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vendeur", [], "any", false, false, false, 128), "avatar", [], "any", false, false, false, 128))), "html", null, true);
            yield "\" class=\"w-6 h-6 rounded-full object-cover\">
                            <span class=\"text-xs text-muted-foreground\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vendeur", [], "any", false, false, false, 129), "nom", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
                        </div>
                        
                        <!-- Price & Action -->
                        <div class=\"flex items-center justify-between pt-3 border-t border-white/5\">
                            <div>
                                <p class=\"font-serif text-2xl font-bold text-primary\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 135), "html", null, true);
            yield " €</p>
                                ";
            // line 136
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 136) > 50)) {
                // line 137
                yield "                                <p class=\"text-xs text-muted-foreground line-through\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 137) * 1.2)), "html", null, true);
                yield " € neuf</p>
                                ";
            }
            // line 139
            yield "                            </div>
                            <a href=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" class=\"w-10 h-10 bg-secondary border border-white/10 rounded-xl flex items-center justify-center hover:bg-primary hover:border-primary transition-all group/btn\">
                                <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:text-white transition-colors\"></i>
                            </a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "            </div>
            
            <!-- Load More -->
            <div class=\"text-center mt-12\">
                <button class=\"px-8 py-3 bg-secondary border border-white/10 rounded-xl text-sm font-medium hover:bg-white/5 transition-colors\">
                    Charger plus d'articles
                </button>
            </div>
        </div>
    </section>
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
        return "front/marketplace/index.html.twig";
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
        return array (  317 => 147,  304 => 140,  301 => 139,  295 => 137,  293 => 136,  289 => 135,  280 => 129,  276 => 128,  269 => 124,  263 => 121,  255 => 115,  249 => 111,  247 => 110,  239 => 105,  235 => 104,  226 => 100,  221 => 97,  217 => 96,  195 => 76,  186 => 73,  182 => 72,  179 => 71,  175 => 70,  124 => 22,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Marketplace - EduVie{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_marketplace_mes') }}\" class=\"hidden sm:flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"package\" class=\"w-4 h-4\"></i>
                    Mes articles
                </a>
                <a href=\"{{ path('app_marketplace_ajouter') }}\" class=\"hidden sm:flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Vendre
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 right-20 w-96 h-96 bg-accent/10 rounded-full blur-[100px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"text-center max-w-3xl mx-auto\">
                <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-accent/30 bg-accent/10 text-accent text-sm mb-4\">
                    <i data-lucide=\"shopping-bag\" class=\"w-4 h-4\"></i>
                    Marketplace etudiant
                </div>
                <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                    Achetez et vendez entre <span class=\"italic text-primary\">etudiants</span>
                </h1>
                <p class=\"text-muted-foreground text-lg mb-8\">
                    Livres, electronique, mobilier, services... Trouvez tout ce dont vous avez besoin a prix etudiant.
                </p>
                
                <!-- Search -->
                <div class=\"glass-card rounded-2xl p-2 flex gap-2 max-w-2xl mx-auto\">
                    <div class=\"relative flex-1\">
                        <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input type=\"text\" placeholder=\"Rechercher un article...\" class=\"w-full h-12 bg-transparent pl-12 pr-4 text-sm focus:outline-none placeholder:text-muted-foreground/50\">
                    </div>
                    <button class=\"px-6 h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors\">
                        Rechercher
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex gap-3 overflow-x-auto pb-4 scrollbar-hide\">
                <button class=\"flex-shrink-0 px-6 py-3 bg-primary text-white rounded-xl text-sm font-medium\">
                    Toutes les categories
                </button>
                {% for cat in categories %}
                <button class=\"flex-shrink-0 px-6 py-3 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-primary/30 transition-all flex items-center gap-2\">
                    <i data-lucide=\"{{ cat.icon }}\" class=\"w-4 h-4\"></i>
                    {{ cat.nom }}
                </button>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex items-center justify-between mb-6\">
                <h2 class=\"font-serif text-2xl font-medium\">Articles recents</h2>
                <div class=\"flex items-center gap-2\">
                    <span class=\"text-sm text-muted-foreground\">Trier par :</span>
                    <select class=\"h-10 bg-secondary border border-white/10 rounded-xl px-3 text-sm focus:outline-none focus:border-primary\">
                        <option>Plus recents</option>
                        <option>Prix croissant</option>
                        <option>Prix decroissant</option>
                    </select>
                </div>
            </div>
            
            <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                {% for article in articles %}
                <div class=\"group glass-card rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300 hover:-translate-y-1\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        <img src=\"{{ asset('images/' ~ article.image) }}\" alt=\"{{ article.titre }}\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-500\">
                        
                        <!-- Type Badge -->
                        <div class=\"absolute top-3 left-3\">
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium {{ article.type == 'academic' ? 'bg-academic/90 text-white' : 'bg-personal/90 text-white' }}\">
                                {{ article.type == 'academic' ? 'Academic' : 'Personal' }}
                            </span>
                        </div>
                        
                        <!-- Status -->
                        {% if article.statut != 'disponible' %}
                        <div class=\"absolute inset-0 bg-background/80 flex items-center justify-center\">
                            <span class=\"px-4 py-2 bg-secondary rounded-xl text-sm font-medium\">Reserve</span>
                        </div>
                        {% endif %}
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-4\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-2\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            {{ article.categorie.nom }}
                        </div>
                        
                        <h3 class=\"font-medium mb-2 line-clamp-2 group-hover:text-primary transition-colors\">{{ article.titre }}</h3>
                        
                        <!-- Vendeur -->
                        <div class=\"flex items-center gap-2 mb-3\">
                            <img src=\"{{ asset('images/' ~ article.vendeur.avatar) }}\" class=\"w-6 h-6 rounded-full object-cover\">
                            <span class=\"text-xs text-muted-foreground\">{{ article.vendeur.nom }}</span>
                        </div>
                        
                        <!-- Price & Action -->
                        <div class=\"flex items-center justify-between pt-3 border-t border-white/5\">
                            <div>
                                <p class=\"font-serif text-2xl font-bold text-primary\">{{ article.prix }} €</p>
                                {% if article.prix > 50 %}
                                <p class=\"text-xs text-muted-foreground line-through\">{{ (article.prix * 1.2)|round }} € neuf</p>
                                {% endif %}
                            </div>
                            <a href=\"{{ path('app_marketplace_detail', {id: article.id}) }}\" class=\"w-10 h-10 bg-secondary border border-white/10 rounded-xl flex items-center justify-center hover:bg-primary hover:border-primary transition-all group/btn\">
                                <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:text-white transition-colors\"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            
            <!-- Load More -->
            <div class=\"text-center mt-12\">
                <button class=\"px-8 py-3 bg-secondary border border-white/10 rounded-xl text-sm font-medium hover:bg-white/5 transition-colors\">
                    Charger plus d'articles
                </button>
            </div>
        </div>
    </section>
</div>
{% endblock %}", "front/marketplace/index.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\marketplace\\index.html.twig");
    }
}
