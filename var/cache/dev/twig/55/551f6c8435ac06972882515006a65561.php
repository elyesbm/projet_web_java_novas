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

/* front/jobs/candidatures.html.twig */
class __TwigTemplate_784633bd9eaa1176a867c9786cc4f405 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/candidatures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/candidatures.html.twig"));

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

        yield "Candidatures - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - NoVas";
        
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
        
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_mes_offres");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4 inline mr-1\"></i>
                Mes offres
            </a>
        </div>
    </div>
</nav>

<!-- Content -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-5xl mx-auto px-6\">
        <!-- Job Info -->
        <div class=\"glass-card rounded-2xl p-6 mb-8\">
            <div class=\"flex flex-col md:flex-row md:items-center justify-between gap-4\">
                <div>
                    <span class=\"text-sm text-muted-foreground\">Offre</span>
                    <h1 class=\"text-xl font-semibold\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), "html", null, true);
        yield "</h1>
                </div>
                <div class=\"flex items-center gap-4\">
                    <div class=\"text-right\">
                        <p class=\"text-2xl font-bold text-primary\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 40, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-sm text-muted-foreground\">Candidature(s)</p>
                    </div>
                    <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center\">
                        <i data-lucide=\"users\" class=\"w-6 h-6 text-primary\"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class=\"flex gap-2 mb-6 overflow-x-auto pb-2\">
            <button class=\"px-4 py-2 rounded-xl bg-primary text-white text-sm font-medium whitespace-nowrap\">Toutes</button>
            <button class=\"px-4 py-2 rounded-xl bg-white/5 text-muted-foreground hover:text-foreground text-sm whitespace-nowrap transition\">En attente</button>
            <button class=\"px-4 py-2 rounded-xl bg-white/5 text-muted-foreground hover:text-foreground text-sm whitespace-nowrap transition\">Acceptées</button>
            <button class=\"px-4 py-2 rounded-xl bg-white/5 text-muted-foreground hover:text-foreground text-sm whitespace-nowrap transition\">Refusées</button>
        </div>

        <!-- Candidatures List -->
        <div class=\"space-y-4\">
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 61
            yield "            <div class=\"glass-card rounded-2xl p-6 ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 61) == "acceptee")) {
                yield "border-accent/30";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 61) == "refusee")) {
                yield "border-red-500/30 opacity-60";
            }
            yield "\">
                <div class=\"flex flex-col md:flex-row gap-6\">
                    <!-- Candidate Info -->
                    <div class=\"flex items-start gap-4 md:w-1/3\">
                        <div class=\"w-14 h-14 rounded-full bg-primary/20 flex items-center justify-center text-xl font-bold text-primary flex-shrink-0\">
                            ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "candidat", [], "any", false, false, false, 66), "nom", [], "any", false, false, false, 66)), "html", null, true);
            yield "
                        </div>
                        <div>
                            <h3 class=\"font-semibold\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "candidat", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
            yield "</h3>
                            <p class=\"text-sm text-muted-foreground\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "candidat", [], "any", false, false, false, 70), "niveau", [], "any", false, false, false, 70), "html", null, true);
            yield "</p>
                            <div class=\"flex items-center gap-1 mt-1 text-sm text-primary\">
                                <i data-lucide=\"star\" class=\"w-4 h-4 fill-primary\"></i>
                                <span>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "candidat", [], "any", false, false, false, 73), "note", [], "any", false, false, false, 73), "html", null, true);
            yield "/5</span>
                            </div>
                            <p class=\"text-xs text-muted-foreground mt-2\">
                                Postulé le ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "date", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
            yield "
                            </p>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class=\"flex-1 md:border-l md:border-white/10 md:pl-6\">
                        <h4 class=\"text-sm font-medium mb-2 text-muted-foreground\">Message du candidat</h4>
                        <p class=\"text-sm leading-relaxed bg-white/5 rounded-xl p-4\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "message", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                    </div>

                    <!-- Actions -->
                    <div class=\"flex md:flex-col gap-2 md:w-48\">
                        ";
            // line 89
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 89) == "en_attente")) {
                // line 90
                yield "                        <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_accepter_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" class=\"flex-1\">
                            <button type=\"submit\" class=\"w-full py-2 rounded-xl bg-accent text-white font-medium hover:bg-accent/90 transition flex items-center justify-center gap-2\">
                                <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                                Accepter
                            </button>
                        </form>
                        <form method=\"POST\" action=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_refuser_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" class=\"flex-1\">
                            <button type=\"submit\" class=\"w-full py-2 rounded-xl border border-white/20 hover:bg-white/5 transition flex items-center justify-center gap-2\">
                                <i data-lucide=\"x\" class=\"w-4 h-4\"></i>
                                Refuser
                            </button>
                        </form>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 102
$context["candidature"], "statut", [], "any", false, false, false, 102) == "acceptee")) {
                // line 103
                yield "                        <div class=\"w-full py-2 rounded-xl bg-accent/20 text-accent text-center font-medium flex items-center justify-center gap-2\">
                            <i data-lucide=\"check-circle\" class=\"w-4 h-4\"></i>
                            Acceptée
                        </div>
                        <a href=\"mailto:";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "candidat", [], "any", false, false, false, 107), "email", [], "any", false, false, false, 107), "html", null, true);
                yield "\" class=\"w-full py-2 rounded-xl bg-primary text-white text-center font-medium hover:bg-primary/90 transition flex items-center justify-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4\"></i>
                            Contacter
                        </a>
                        ";
            } else {
                // line 112
                yield "                        <div class=\"w-full py-2 rounded-xl bg-red-500/20 text-red-400 text-center font-medium flex items-center justify-center gap-2\">
                            <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                            Refusée
                        </div>
                        ";
            }
            // line 117
            yield "                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "            <div class=\"text-center py-16 glass-card rounded-2xl\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"inbox\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h3 class=\"font-semibold mb-2\">Aucune candidature</h3>
                <p class=\"text-muted-foreground\">Les candidatures apparaîtront ici.</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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
        return "front/jobs/candidatures.html.twig";
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
        return array (  295 => 129,  282 => 121,  280 => 120,  273 => 117,  266 => 112,  258 => 107,  252 => 103,  250 => 102,  241 => 96,  231 => 90,  229 => 89,  221 => 84,  210 => 76,  204 => 73,  198 => 70,  194 => 69,  188 => 66,  175 => 61,  170 => 60,  147 => 40,  140 => 36,  118 => 17,  107 => 9,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Candidatures - {{ job.titre }} - NoVas{% endblock %}

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
        
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_jobs_mes_offres') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4 inline mr-1\"></i>
                Mes offres
            </a>
        </div>
    </div>
</nav>

<!-- Content -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-5xl mx-auto px-6\">
        <!-- Job Info -->
        <div class=\"glass-card rounded-2xl p-6 mb-8\">
            <div class=\"flex flex-col md:flex-row md:items-center justify-between gap-4\">
                <div>
                    <span class=\"text-sm text-muted-foreground\">Offre</span>
                    <h1 class=\"text-xl font-semibold\">{{ job.titre }}</h1>
                </div>
                <div class=\"flex items-center gap-4\">
                    <div class=\"text-right\">
                        <p class=\"text-2xl font-bold text-primary\">{{ candidatures|length }}</p>
                        <p class=\"text-sm text-muted-foreground\">Candidature(s)</p>
                    </div>
                    <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center\">
                        <i data-lucide=\"users\" class=\"w-6 h-6 text-primary\"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class=\"flex gap-2 mb-6 overflow-x-auto pb-2\">
            <button class=\"px-4 py-2 rounded-xl bg-primary text-white text-sm font-medium whitespace-nowrap\">Toutes</button>
            <button class=\"px-4 py-2 rounded-xl bg-white/5 text-muted-foreground hover:text-foreground text-sm whitespace-nowrap transition\">En attente</button>
            <button class=\"px-4 py-2 rounded-xl bg-white/5 text-muted-foreground hover:text-foreground text-sm whitespace-nowrap transition\">Acceptées</button>
            <button class=\"px-4 py-2 rounded-xl bg-white/5 text-muted-foreground hover:text-foreground text-sm whitespace-nowrap transition\">Refusées</button>
        </div>

        <!-- Candidatures List -->
        <div class=\"space-y-4\">
            {% for candidature in candidatures %}
            <div class=\"glass-card rounded-2xl p-6 {% if candidature.statut == 'acceptee' %}border-accent/30{% elseif candidature.statut == 'refusee' %}border-red-500/30 opacity-60{% endif %}\">
                <div class=\"flex flex-col md:flex-row gap-6\">
                    <!-- Candidate Info -->
                    <div class=\"flex items-start gap-4 md:w-1/3\">
                        <div class=\"w-14 h-14 rounded-full bg-primary/20 flex items-center justify-center text-xl font-bold text-primary flex-shrink-0\">
                            {{ candidature.candidat.nom|first }}
                        </div>
                        <div>
                            <h3 class=\"font-semibold\">{{ candidature.candidat.nom }}</h3>
                            <p class=\"text-sm text-muted-foreground\">{{ candidature.candidat.niveau }}</p>
                            <div class=\"flex items-center gap-1 mt-1 text-sm text-primary\">
                                <i data-lucide=\"star\" class=\"w-4 h-4 fill-primary\"></i>
                                <span>{{ candidature.candidat.note }}/5</span>
                            </div>
                            <p class=\"text-xs text-muted-foreground mt-2\">
                                Postulé le {{ candidature.date|date('d/m/Y') }}
                            </p>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class=\"flex-1 md:border-l md:border-white/10 md:pl-6\">
                        <h4 class=\"text-sm font-medium mb-2 text-muted-foreground\">Message du candidat</h4>
                        <p class=\"text-sm leading-relaxed bg-white/5 rounded-xl p-4\">{{ candidature.message }}</p>
                    </div>

                    <!-- Actions -->
                    <div class=\"flex md:flex-col gap-2 md:w-48\">
                        {% if candidature.statut == 'en_attente' %}
                        <form method=\"POST\" action=\"{{ path('app_jobs_accepter_candidature', {'id': candidature.id}) }}\" class=\"flex-1\">
                            <button type=\"submit\" class=\"w-full py-2 rounded-xl bg-accent text-white font-medium hover:bg-accent/90 transition flex items-center justify-center gap-2\">
                                <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                                Accepter
                            </button>
                        </form>
                        <form method=\"POST\" action=\"{{ path('app_jobs_refuser_candidature', {'id': candidature.id}) }}\" class=\"flex-1\">
                            <button type=\"submit\" class=\"w-full py-2 rounded-xl border border-white/20 hover:bg-white/5 transition flex items-center justify-center gap-2\">
                                <i data-lucide=\"x\" class=\"w-4 h-4\"></i>
                                Refuser
                            </button>
                        </form>
                        {% elseif candidature.statut == 'acceptee' %}
                        <div class=\"w-full py-2 rounded-xl bg-accent/20 text-accent text-center font-medium flex items-center justify-center gap-2\">
                            <i data-lucide=\"check-circle\" class=\"w-4 h-4\"></i>
                            Acceptée
                        </div>
                        <a href=\"mailto:{{ candidature.candidat.email }}\" class=\"w-full py-2 rounded-xl bg-primary text-white text-center font-medium hover:bg-primary/90 transition flex items-center justify-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4\"></i>
                            Contacter
                        </a>
                        {% else %}
                        <div class=\"w-full py-2 rounded-xl bg-red-500/20 text-red-400 text-center font-medium flex items-center justify-center gap-2\">
                            <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                            Refusée
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"text-center py-16 glass-card rounded-2xl\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"inbox\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h3 class=\"font-semibold mb-2\">Aucune candidature</h3>
                <p class=\"text-muted-foreground\">Les candidatures apparaîtront ici.</p>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}", "front/jobs/candidatures.html.twig", "C:\\Users\\khali\\projet_web_java_novas\\templates\\front\\jobs\\candidatures.html.twig");
    }
}
