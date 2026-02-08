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

/* front/marketplace/mes_articles.html.twig */
class __TwigTemplate_8f92c67b2e1e9f2c6ea5a6d4c2f11f76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/mes_articles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/mes_articles.html.twig"));

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

        yield "Mes Articles - EduVie Marketplace";
        
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
        yield "\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Retour au catalogue
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <!-- Header -->
            <div class=\"flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8\">
                <div>
                    <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes articles</h1>
                    <p class=\"text-muted-foreground\">Gerez vos annonces et suivez vos ventes</p>
                </div>
                <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_ajouter");
        yield "\" class=\"flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Nouvelle annonce
                </a>
            </div>

            <!-- Stats -->
            <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-primary\">5</p>
                    <p class=\"text-sm text-muted-foreground\">Annonces actives</p>
                </div>
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-accent\">12</p>
                    <p class=\"text-sm text-muted-foreground\">Vues aujourd'hui</p>
                </div>
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-personal\">3</p>
                    <p class=\"text-sm text-muted-foreground\">Messages</p>
                </div>
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-green-400\">1,250 €</p>
                    <p class=\"text-sm text-muted-foreground\">Ventes totales</p>
                </div>
            </div>

            <!-- Filters -->
            <div class=\"glass-card rounded-2xl p-4 flex flex-wrap gap-4 mb-8\">
                <button class=\"px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium\">Tous</button>
                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">Disponibles</button>
                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">Reserves</button>
                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">Vendus</button>
                
                <div class=\"ml-auto\">
                    <select class=\"h-10 bg-secondary border border-white/10 rounded-xl px-3 text-sm focus:outline-none focus:border-primary text-muted-foreground\">
                        <option>Trier par date</option>
                        <option>Trier par prix</option>
                        <option>Trier par vues</option>
                    </select>
                </div>
            </div>

            <!-- Articles Table -->
            <div class=\"glass-card rounded-3xl overflow-hidden\">
                <div class=\"overflow-x-auto\">
                    <table class=\"w-full\">
                        <thead class=\"bg-secondary/50\">
                            <tr>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Article</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Categorie</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Prix</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Statut</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Stats</th>
                                <th class=\"text-right p-4 text-sm font-medium text-muted-foreground\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-white/5\">
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 93
            yield "                            <tr class=\"hover:bg-secondary/30 transition-colors\">
                                <td class=\"p-4\">
                                    <div class=\"flex items-center gap-4\">
                                        <img src=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 96))), "html", null, true);
            yield "\" class=\"w-16 h-16 rounded-xl object-cover\">
                                        <div>
                                            <h4 class=\"font-medium hover:text-primary transition-colors cursor-pointer\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 98), "html", null, true);
            yield "</h4>
                                            <p class=\"text-xs text-muted-foreground\">Publie le 15 Feb 2024</p>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"p-4\">
                                    <span class=\"px-3 py-1 rounded-full text-xs bg-secondary text-muted-foreground\">
                                        ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 105), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"p-4\">
                                    <p class=\"font-serif text-xl font-bold text-primary\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 109), "html", null, true);
            yield " €</p>
                                </td>
                                <td class=\"p-4\">
                                    <span class=\"px-3 py-1 rounded-full text-xs 
                                        ";
            // line 113
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 113) == "disponible")) ? ("bg-green-500/20 text-green-400") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 114
$context["article"], "statut", [], "any", false, false, false, 114) == "reserve")) ? ("bg-yellow-500/20 text-yellow-400") : ("bg-muted text-muted-foreground"))));
            // line 115
            yield "\">
                                        ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 116)), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"p-4\">
                                    <div class=\"flex items-center gap-4 text-sm text-muted-foreground\">
                                        <span class=\"flex items-center gap-1\">
                                            <i data-lucide=\"eye\" class=\"w-4 h-4\"></i>
                                            ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vues", [], "any", false, false, false, 123), "html", null, true);
            yield "
                                        </span>
                                        <span class=\"flex items-center gap-1\">
                                            <i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>
                                            ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "messages", [], "any", false, false, false, 127), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </td>
                                <td class=\"p-4\">
                                    <div class=\"flex items-center justify-end gap-2\">
                                        <a href=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            yield "\" class=\"w-10 h-10 rounded-xl bg-secondary flex items-center justify-center hover:bg-white/5 transition-colors\" title=\"Voir\">
                                            <i data-lucide=\"eye\" class=\"w-5 h-5\"></i>
                                        </a>
                                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"w-10 h-10 rounded-xl bg-secondary flex items-center justify-center hover:bg-primary/20 transition-colors text-primary\" title=\"Modifier\">
                                            <i data-lucide=\"edit-2\" class=\"w-5 h-5\"></i>
                                        </a>
                                        <button class=\"w-10 h-10 rounded-xl bg-secondary flex items-center justify-center hover:bg-red-500/20 transition-colors text-red-400\" title=\"Supprimer\">
                                            <i data-lucide=\"trash-2\" class=\"w-5 h-5\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                        </tbody>
                    </table>
                </div>
            </div>
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
        return "front/marketplace/mes_articles.html.twig";
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
        return array (  289 => 146,  273 => 136,  267 => 133,  258 => 127,  251 => 123,  241 => 116,  238 => 115,  236 => 114,  235 => 113,  228 => 109,  221 => 105,  211 => 98,  206 => 96,  201 => 93,  197 => 92,  137 => 35,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Mes Articles - EduVie Marketplace{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_marketplace_index') }}\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_marketplace_index') }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Retour au catalogue
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <!-- Header -->
            <div class=\"flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8\">
                <div>
                    <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes articles</h1>
                    <p class=\"text-muted-foreground\">Gerez vos annonces et suivez vos ventes</p>
                </div>
                <a href=\"{{ path('app_marketplace_ajouter') }}\" class=\"flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Nouvelle annonce
                </a>
            </div>

            <!-- Stats -->
            <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-primary\">5</p>
                    <p class=\"text-sm text-muted-foreground\">Annonces actives</p>
                </div>
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-accent\">12</p>
                    <p class=\"text-sm text-muted-foreground\">Vues aujourd'hui</p>
                </div>
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-personal\">3</p>
                    <p class=\"text-sm text-muted-foreground\">Messages</p>
                </div>
                <div class=\"glass-card rounded-2xl p-5 text-center\">
                    <p class=\"font-serif text-3xl font-bold text-green-400\">1,250 €</p>
                    <p class=\"text-sm text-muted-foreground\">Ventes totales</p>
                </div>
            </div>

            <!-- Filters -->
            <div class=\"glass-card rounded-2xl p-4 flex flex-wrap gap-4 mb-8\">
                <button class=\"px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium\">Tous</button>
                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">Disponibles</button>
                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">Reserves</button>
                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">Vendus</button>
                
                <div class=\"ml-auto\">
                    <select class=\"h-10 bg-secondary border border-white/10 rounded-xl px-3 text-sm focus:outline-none focus:border-primary text-muted-foreground\">
                        <option>Trier par date</option>
                        <option>Trier par prix</option>
                        <option>Trier par vues</option>
                    </select>
                </div>
            </div>

            <!-- Articles Table -->
            <div class=\"glass-card rounded-3xl overflow-hidden\">
                <div class=\"overflow-x-auto\">
                    <table class=\"w-full\">
                        <thead class=\"bg-secondary/50\">
                            <tr>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Article</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Categorie</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Prix</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Statut</th>
                                <th class=\"text-left p-4 text-sm font-medium text-muted-foreground\">Stats</th>
                                <th class=\"text-right p-4 text-sm font-medium text-muted-foreground\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-white/5\">
                            {% for article in articles %}
                            <tr class=\"hover:bg-secondary/30 transition-colors\">
                                <td class=\"p-4\">
                                    <div class=\"flex items-center gap-4\">
                                        <img src=\"{{ asset('images/' ~ article.image) }}\" class=\"w-16 h-16 rounded-xl object-cover\">
                                        <div>
                                            <h4 class=\"font-medium hover:text-primary transition-colors cursor-pointer\">{{ article.titre }}</h4>
                                            <p class=\"text-xs text-muted-foreground\">Publie le 15 Feb 2024</p>
                                        </div>
                                    </div>
                                </td>
                                <td class=\"p-4\">
                                    <span class=\"px-3 py-1 rounded-full text-xs bg-secondary text-muted-foreground\">
                                        {{ article.categorie }}
                                    </span>
                                </td>
                                <td class=\"p-4\">
                                    <p class=\"font-serif text-xl font-bold text-primary\">{{ article.prix }} €</p>
                                </td>
                                <td class=\"p-4\">
                                    <span class=\"px-3 py-1 rounded-full text-xs 
                                        {{ article.statut == 'disponible' ? 'bg-green-500/20 text-green-400' : 
                                           article.statut == 'reserve' ? 'bg-yellow-500/20 text-yellow-400' : 
                                           'bg-muted text-muted-foreground' }}\">
                                        {{ article.statut|capitalize }}
                                    </span>
                                </td>
                                <td class=\"p-4\">
                                    <div class=\"flex items-center gap-4 text-sm text-muted-foreground\">
                                        <span class=\"flex items-center gap-1\">
                                            <i data-lucide=\"eye\" class=\"w-4 h-4\"></i>
                                            {{ article.vues }}
                                        </span>
                                        <span class=\"flex items-center gap-1\">
                                            <i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>
                                            {{ article.messages }}
                                        </span>
                                    </div>
                                </td>
                                <td class=\"p-4\">
                                    <div class=\"flex items-center justify-end gap-2\">
                                        <a href=\"{{ path('app_marketplace_detail', {id: article.id}) }}\" class=\"w-10 h-10 rounded-xl bg-secondary flex items-center justify-center hover:bg-white/5 transition-colors\" title=\"Voir\">
                                            <i data-lucide=\"eye\" class=\"w-5 h-5\"></i>
                                        </a>
                                        <a href=\"{{ path('app_marketplace_modifier', {id: article.id}) }}\" class=\"w-10 h-10 rounded-xl bg-secondary flex items-center justify-center hover:bg-primary/20 transition-colors text-primary\" title=\"Modifier\">
                                            <i data-lucide=\"edit-2\" class=\"w-5 h-5\"></i>
                                        </a>
                                        <button class=\"w-10 h-10 rounded-xl bg-secondary flex items-center justify-center hover:bg-red-500/20 transition-colors text-red-400\" title=\"Supprimer\">
                                            <i data-lucide=\"trash-2\" class=\"w-5 h-5\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "front/marketplace/mes_articles.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\marketplace\\mes_articles.html.twig");
    }
}
