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

/* jobs/mes_offres.html.twig */
class __TwigTemplate_16c615561588e4dcbfb0f5b58b65eafe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/mes_offres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/mes_offres.html.twig"));

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

        yield "Mes offres - NoVas Jobs";
        
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
        yield "<!-- Navigation -->
<nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
    <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
            <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
            </div>
            <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
        </a>
        
        <div class=\"hidden md:flex items-center gap-8\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Jobs</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_mes_offres");
        yield "\" class=\"text-sm text-primary font-medium\">Mes offres</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_ajouter");
        yield "\" class=\"text-sm font-medium bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4 inline mr-1\"></i>
                Nouvelle offre
            </a>
        </div>
    </div>
</nav>

<!-- Content -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/4 w-[400px] h-[400px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-6xl mx-auto px-6\">
        <div class=\"flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8\">
            <div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes <span class=\"italic text-primary\">offres</span></h1>
                <p class=\"text-muted-foreground\">Gérez vos opportunités et suivez les candidatures.</p>
            </div>
            
            <!-- Tabs -->
            <div class=\"flex p-1 rounded-xl bg-white/5 border border-white/10\">
                <button class=\"px-4 py-2 rounded-lg bg-primary text-white text-sm font-medium\">Actives</button>
                <button class=\"px-4 py-2 rounded-lg text-sm text-muted-foreground hover:text-foreground transition\">Pourvues</button>
                <button class=\"px-4 py-2 rounded-lg text-sm text-muted-foreground hover:text-foreground transition\">Archivées</button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center\">
                        <i data-lucide=\"briefcase\" class=\"w-5 h-5 text-primary\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "total", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Offres publiées</p>
                    </div>
                </div>
            </div>
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center\">
                        <i data-lucide=\"activity\" class=\"w-5 h-5 text-accent\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold text-accent\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "actives", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Actives</p>
                    </div>
                </div>
            </div>
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center\">
                        <i data-lucide=\"users\" class=\"w-5 h-5 text-primary\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 80, $this->source); })()), "candidatures", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Candidatures</p>
                    </div>
                </div>
            </div>
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center\">
                        <i data-lucide=\"check-circle\" class=\"w-5 h-5 text-accent\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold text-accent\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 91, $this->source); })()), "pourvues", [], "any", false, false, false, 91), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Pourvues</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jobs List -->
        <div class=\"space-y-4\">
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 100, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 101
            yield "            <div class=\"glass-card rounded-2xl p-6 hover:border-primary/30 transition-all group\">
                <div class=\"flex flex-col lg:flex-row gap-6\">
                    <!-- Info -->
                    <div class=\"flex-1\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <div class=\"flex items-center gap-3\">
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium 
                                    ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["job"], "statut", [], "any", false, false, false, 108) == "active")) {
                yield "bg-accent/20 text-accent
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 109
$context["job"], "statut", [], "any", false, false, false, 109) == "pourvue")) {
                yield "bg-primary/20 text-primary
                                    ";
            } else {
                // line 110
                yield "bg-white/10 text-muted-foreground";
            }
            yield "\">
                                    ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["job"], "statut", [], "any", false, false, false, 111)), "html", null, true);
            yield "
                                </span>
                                <span class=\"text-xs text-muted-foreground\">Publié le ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "datePublication", [], "any", false, false, false, 113), "d/m/Y"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-xl font-bold text-primary\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "remuneration", [], "any", false, false, false, 116), "html", null, true);
            yield "€</p>
                                <p class=\"text-xs text-muted-foreground\">/heure</p>
                            </div>
                        </div>
                        
                        <h3 class=\"text-lg font-semibold mb-2\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "titre", [], "any", false, false, false, 121), "html", null, true);
            yield "</h3>
                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
                        
                        <div class=\"flex flex-wrap gap-3 text-sm text-muted-foreground\">
                            <span class=\"flex items-center gap-1\">
                                <i data-lucide=\"map-pin\" class=\"w-4 h-4\"></i>
                                ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "localisation", [], "any", false, false, false, 127), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <i data-lucide=\"clock\" class=\"w-4 h-4\"></i>
                                ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "duree", [], "any", false, false, false, 131), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <i data-lucide=\"users\" class=\"w-4 h-4\"></i>
                                ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "nbCandidatures", [], "any", false, false, false, 135), "html", null, true);
            yield " candidature(s)
                            </span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class=\"flex lg:flex-col gap-2 lg:border-l lg:border-white/10 lg:pl-6\">
                        <a href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_candidatures", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" 
                           class=\"flex items-center justify-center gap-2 px-4 py-2 rounded-xl bg-primary/10 text-primary hover:bg-primary hover:text-white transition text-sm font-medium\">
                            <i data-lucide=\"users\" class=\"w-4 h-4\"></i>
                            Candidatures
                        </a>
                        <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" 
                           class=\"flex items-center justify-center gap-2 px-4 py-2 rounded-xl border border-white/20 hover:bg-white/5 transition text-sm\">
                            <i data-lucide=\"edit\" class=\"w-4 h-4\"></i>
                            Modifier
                        </a>
                        <button onclick=\"if(confirm('Supprimer cette offre ?')) window.location.href='";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "'\" 
                                class=\"flex items-center justify-center gap-2 px-4 py-2 rounded-xl border border-red-500/30 text-red-400 hover:bg-red-500/10 transition text-sm\">
                            <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 160
        if (!$context['_iterated']) {
            // line 161
            yield "            <div class=\"text-center py-16 glass-card rounded-2xl\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"inbox\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h3 class=\"font-semibold mb-2\">Aucune offre publiée</h3>
                <p class=\"text-muted-foreground mb-6\">Commencez par créer votre première opportunité.</p>
                <a href=\"";
            // line 167
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_ajouter");
            yield "\" class=\"inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-medium hover:bg-primary/90 transition\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Créer une offre
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['job'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "        </div>
    </div>
</section>
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
        return "jobs/mes_offres.html.twig";
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
        return array (  354 => 173,  342 => 167,  334 => 161,  332 => 160,  319 => 152,  311 => 147,  303 => 142,  293 => 135,  286 => 131,  279 => 127,  271 => 122,  267 => 121,  259 => 116,  253 => 113,  248 => 111,  243 => 110,  238 => 109,  234 => 108,  225 => 101,  220 => 100,  208 => 91,  194 => 80,  180 => 69,  166 => 58,  127 => 22,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_home.html.twig' %}

{% block title %}Mes offres - NoVas Jobs{% endblock %}

{% block body %}
<!-- Navigation -->
<nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
    <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
        <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
            <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
            </div>
            <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
        </a>
        
        <div class=\"hidden md:flex items-center gap-8\">
            <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Jobs</a>
            <a href=\"{{ path('app_jobs_mes_offres') }}\" class=\"text-sm text-primary font-medium\">Mes offres</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_jobs_ajouter') }}\" class=\"text-sm font-medium bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4 inline mr-1\"></i>
                Nouvelle offre
            </a>
        </div>
    </div>
</nav>

<!-- Content -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/4 w-[400px] h-[400px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-6xl mx-auto px-6\">
        <div class=\"flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8\">
            <div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes <span class=\"italic text-primary\">offres</span></h1>
                <p class=\"text-muted-foreground\">Gérez vos opportunités et suivez les candidatures.</p>
            </div>
            
            <!-- Tabs -->
            <div class=\"flex p-1 rounded-xl bg-white/5 border border-white/10\">
                <button class=\"px-4 py-2 rounded-lg bg-primary text-white text-sm font-medium\">Actives</button>
                <button class=\"px-4 py-2 rounded-lg text-sm text-muted-foreground hover:text-foreground transition\">Pourvues</button>
                <button class=\"px-4 py-2 rounded-lg text-sm text-muted-foreground hover:text-foreground transition\">Archivées</button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center\">
                        <i data-lucide=\"briefcase\" class=\"w-5 h-5 text-primary\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold\">{{ stats.total }}</p>
                        <p class=\"text-xs text-muted-foreground\">Offres publiées</p>
                    </div>
                </div>
            </div>
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center\">
                        <i data-lucide=\"activity\" class=\"w-5 h-5 text-accent\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold text-accent\">{{ stats.actives }}</p>
                        <p class=\"text-xs text-muted-foreground\">Actives</p>
                    </div>
                </div>
            </div>
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center\">
                        <i data-lucide=\"users\" class=\"w-5 h-5 text-primary\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold\">{{ stats.candidatures }}</p>
                        <p class=\"text-xs text-muted-foreground\">Candidatures</p>
                    </div>
                </div>
            </div>
            <div class=\"glass-card rounded-xl p-4\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center\">
                        <i data-lucide=\"check-circle\" class=\"w-5 h-5 text-accent\"></i>
                    </div>
                    <div>
                        <p class=\"text-2xl font-bold text-accent\">{{ stats.pourvues }}</p>
                        <p class=\"text-xs text-muted-foreground\">Pourvues</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jobs List -->
        <div class=\"space-y-4\">
            {% for job in jobs %}
            <div class=\"glass-card rounded-2xl p-6 hover:border-primary/30 transition-all group\">
                <div class=\"flex flex-col lg:flex-row gap-6\">
                    <!-- Info -->
                    <div class=\"flex-1\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <div class=\"flex items-center gap-3\">
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium 
                                    {% if job.statut == 'active' %}bg-accent/20 text-accent
                                    {% elseif job.statut == 'pourvue' %}bg-primary/20 text-primary
                                    {% else %}bg-white/10 text-muted-foreground{% endif %}\">
                                    {{ job.statut|capitalize }}
                                </span>
                                <span class=\"text-xs text-muted-foreground\">Publié le {{ job.datePublication|date('d/m/Y') }}</span>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-xl font-bold text-primary\">{{ job.remuneration }}€</p>
                                <p class=\"text-xs text-muted-foreground\">/heure</p>
                            </div>
                        </div>
                        
                        <h3 class=\"text-lg font-semibold mb-2\">{{ job.titre }}</h3>
                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ job.description }}</p>
                        
                        <div class=\"flex flex-wrap gap-3 text-sm text-muted-foreground\">
                            <span class=\"flex items-center gap-1\">
                                <i data-lucide=\"map-pin\" class=\"w-4 h-4\"></i>
                                {{ job.localisation }}
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <i data-lucide=\"clock\" class=\"w-4 h-4\"></i>
                                {{ job.duree }}
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <i data-lucide=\"users\" class=\"w-4 h-4\"></i>
                                {{ job.nbCandidatures }} candidature(s)
                            </span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class=\"flex lg:flex-col gap-2 lg:border-l lg:border-white/10 lg:pl-6\">
                        <a href=\"{{ path('app_jobs_candidatures', {'id': job.id}) }}\" 
                           class=\"flex items-center justify-center gap-2 px-4 py-2 rounded-xl bg-primary/10 text-primary hover:bg-primary hover:text-white transition text-sm font-medium\">
                            <i data-lucide=\"users\" class=\"w-4 h-4\"></i>
                            Candidatures
                        </a>
                        <a href=\"{{ path('app_jobs_modifier', {'id': job.id}) }}\" 
                           class=\"flex items-center justify-center gap-2 px-4 py-2 rounded-xl border border-white/20 hover:bg-white/5 transition text-sm\">
                            <i data-lucide=\"edit\" class=\"w-4 h-4\"></i>
                            Modifier
                        </a>
                        <button onclick=\"if(confirm('Supprimer cette offre ?')) window.location.href='{{ path('app_jobs_supprimer', {'id': job.id}) }}'\" 
                                class=\"flex items-center justify-center gap-2 px-4 py-2 rounded-xl border border-red-500/30 text-red-400 hover:bg-red-500/10 transition text-sm\">
                            <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"text-center py-16 glass-card rounded-2xl\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"inbox\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h3 class=\"font-semibold mb-2\">Aucune offre publiée</h3>
                <p class=\"text-muted-foreground mb-6\">Commencez par créer votre première opportunité.</p>
                <a href=\"{{ path('app_jobs_ajouter') }}\" class=\"inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-medium hover:bg-primary/90 transition\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Créer une offre
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}", "jobs/mes_offres.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\jobs\\mes_offres.html.twig");
    }
}
