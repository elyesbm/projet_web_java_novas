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

/* front/jobs/mes_candidatures.html.twig */
class __TwigTemplate_a6f50ea5e97f77a502f19cd05a9d7355 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/mes_candidatures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/mes_candidatures.html.twig"));

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

        yield "Mes candidatures - NoVas Jobs";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_mes_candidatures");
        yield "\" class=\"text-sm text-primary font-medium\">Mes candidatures</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"text-sm font-medium bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                Trouver une offre
            </a>
        </div>
    </div>
</nav>

<!-- Content -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-5xl mx-auto px-6\">
        <div class=\"mb-8\">
            <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes <span class=\"italic text-primary\">candidatures</span></h1>
            <p class=\"text-muted-foreground\">Suivez l'état de vos demandes.</p>
        </div>

        <!-- Stats -->
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "total", [], "any", false, false, false, 43), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-muted-foreground\">Total</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-yellow-500\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 47, $this->source); })()), "enAttente", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-muted-foreground\">En attente</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-accent\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 51, $this->source); })()), "acceptees", [], "any", false, false, false, 51), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-muted-foreground\">Acceptées</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-red-400\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 55, $this->source); })()), "refusees", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                <p class=\"text-xs text-muted-foreground\">Refusées</p>
            </div>
        </div>

        <!-- Candidatures List -->
        <div class=\"space-y-4\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 63
            yield "            <div class=\"glass-card rounded-2xl p-6 ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 63) == "acceptee")) {
                yield "border-l-4 border-accent";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 63) == "refusee")) {
                yield "border-l-4 border-red-500 opacity-60";
            } else {
                yield "border-l-4 border-yellow-500";
            }
            yield "\">
                <div class=\"flex flex-col md:flex-row gap-6\">
                    <!-- Job Info -->
                    <div class=\"flex-1\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium 
                                ";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 69) == "en_attente")) {
                yield "bg-yellow-500/20 text-yellow-500
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["candidature"], "statut", [], "any", false, false, false, 70) == "acceptee")) {
                yield "bg-accent/20 text-accent
                                ";
            } else {
                // line 71
                yield "bg-red-500/20 text-red-400";
            }
            yield "\">
                                ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 72) == "en_attente")) {
                yield "En attente
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 73
$context["candidature"], "statut", [], "any", false, false, false, 73) == "acceptee")) {
                yield "Acceptée
                                ";
            } else {
                // line 74
                yield "Refusée";
            }
            // line 75
            yield "                            </span>
                            <span class=\"text-xs text-muted-foreground\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "date", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
            yield "</span>
                        </div>
                        
                        <h3 class=\"text-lg font-semibold mb-2\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 79), "titre", [], "any", false, false, false, 79), "html", null, true);
            yield "</h3>
                        <p class=\"text-sm text-muted-foreground mb-3\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 80), "createur", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 80), "localisation", [], "any", false, false, false, 80), "html", null, true);
            yield "</p>
                        
                        <div class=\"flex items-center gap-4 text-sm\">
                            <span class=\"text-primary font-semibold\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 83), "remuneration", [], "any", false, false, false, 83), "html", null, true);
            yield "€/heure</span>
                            <span class=\"text-muted-foreground\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 84), "duree", [], "any", false, false, false, 84), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class=\"flex md:flex-col gap-2 md:justify-center\">
                        <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" 
                           class=\"px-4 py-2 rounded-xl bg-primary/10 text-primary hover:bg-primary hover:text-white transition text-sm font-medium text-center\">
                            Voir l'offre
                        </a>
                        ";
            // line 94
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 94) == "acceptee")) {
                // line 95
                yield "                        <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "job", [], "any", false, false, false, 95), "createur", [], "any", false, false, false, 95), "email", [], "any", false, false, false, 95), "html", null, true);
                yield "\" 
                           class=\"px-4 py-2 rounded-xl bg-accent text-white hover:bg-accent/90 transition text-sm font-medium text-center flex items-center justify-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4\"></i>
                            Contacter
                        </a>
                        ";
            }
            // line 101
            yield "                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 104
        if (!$context['_iterated']) {
            // line 105
            yield "            <div class=\"text-center py-16 glass-card rounded-2xl\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"search\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h3 class=\"font-semibold mb-2\">Aucune candidature</h3>
                <p class=\"text-muted-foreground mb-6\">Commencez à postuler aux offres qui vous intéressent.</p>
                <a href=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
            yield "\" class=\"inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-medium hover:bg-primary/90 transition\">
                    <i data-lucide=\"briefcase\" class=\"w-5 h-5\"></i>
                    Parcourir les offres
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
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
        return "front/jobs/mes_candidatures.html.twig";
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
        return array (  311 => 117,  299 => 111,  291 => 105,  289 => 104,  282 => 101,  272 => 95,  270 => 94,  263 => 90,  254 => 84,  250 => 83,  242 => 80,  238 => 79,  232 => 76,  229 => 75,  226 => 74,  221 => 73,  217 => 72,  212 => 71,  207 => 70,  203 => 69,  187 => 63,  182 => 62,  172 => 55,  165 => 51,  158 => 47,  151 => 43,  127 => 22,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Mes candidatures - NoVas Jobs{% endblock %}

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
            <a href=\"{{ path('app_jobs_mes_candidatures') }}\" class=\"text-sm text-primary font-medium\">Mes candidatures</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm font-medium bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                Trouver une offre
            </a>
        </div>
    </div>
</nav>

<!-- Content -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-5xl mx-auto px-6\">
        <div class=\"mb-8\">
            <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes <span class=\"italic text-primary\">candidatures</span></h1>
            <p class=\"text-muted-foreground\">Suivez l'état de vos demandes.</p>
        </div>

        <!-- Stats -->
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-8\">
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold\">{{ stats.total }}</p>
                <p class=\"text-xs text-muted-foreground\">Total</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-yellow-500\">{{ stats.enAttente }}</p>
                <p class=\"text-xs text-muted-foreground\">En attente</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-accent\">{{ stats.acceptees }}</p>
                <p class=\"text-xs text-muted-foreground\">Acceptées</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-red-400\">{{ stats.refusees }}</p>
                <p class=\"text-xs text-muted-foreground\">Refusées</p>
            </div>
        </div>

        <!-- Candidatures List -->
        <div class=\"space-y-4\">
            {% for candidature in candidatures %}
            <div class=\"glass-card rounded-2xl p-6 {% if candidature.statut == 'acceptee' %}border-l-4 border-accent{% elseif candidature.statut == 'refusee' %}border-l-4 border-red-500 opacity-60{% else %}border-l-4 border-yellow-500{% endif %}\">
                <div class=\"flex flex-col md:flex-row gap-6\">
                    <!-- Job Info -->
                    <div class=\"flex-1\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium 
                                {% if candidature.statut == 'en_attente' %}bg-yellow-500/20 text-yellow-500
                                {% elseif candidature.statut == 'acceptee' %}bg-accent/20 text-accent
                                {% else %}bg-red-500/20 text-red-400{% endif %}\">
                                {% if candidature.statut == 'en_attente' %}En attente
                                {% elseif candidature.statut == 'acceptee' %}Acceptée
                                {% else %}Refusée{% endif %}
                            </span>
                            <span class=\"text-xs text-muted-foreground\">{{ candidature.date|date('d/m/Y') }}</span>
                        </div>
                        
                        <h3 class=\"text-lg font-semibold mb-2\">{{ candidature.job.titre }}</h3>
                        <p class=\"text-sm text-muted-foreground mb-3\">{{ candidature.job.createur.nom }} • {{ candidature.job.localisation }}</p>
                        
                        <div class=\"flex items-center gap-4 text-sm\">
                            <span class=\"text-primary font-semibold\">{{ candidature.job.remuneration }}€/heure</span>
                            <span class=\"text-muted-foreground\">{{ candidature.job.duree }}</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class=\"flex md:flex-col gap-2 md:justify-center\">
                        <a href=\"{{ path('app_jobs_detail', {'id': candidature.job.id}) }}\" 
                           class=\"px-4 py-2 rounded-xl bg-primary/10 text-primary hover:bg-primary hover:text-white transition text-sm font-medium text-center\">
                            Voir l'offre
                        </a>
                        {% if candidature.statut == 'acceptee' %}
                        <a href=\"mailto:{{ candidature.job.createur.email }}\" 
                           class=\"px-4 py-2 rounded-xl bg-accent text-white hover:bg-accent/90 transition text-sm font-medium text-center flex items-center justify-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4\"></i>
                            Contacter
                        </a>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"text-center py-16 glass-card rounded-2xl\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"search\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h3 class=\"font-semibold mb-2\">Aucune candidature</h3>
                <p class=\"text-muted-foreground mb-6\">Commencez à postuler aux offres qui vous intéressent.</p>
                <a href=\"{{ path('app_jobs_index') }}\" class=\"inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-medium hover:bg-primary/90 transition\">
                    <i data-lucide=\"briefcase\" class=\"w-5 h-5\"></i>
                    Parcourir les offres
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}", "front/jobs/mes_candidatures.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\jobs\\mes_candidatures.html.twig");
    }
}
