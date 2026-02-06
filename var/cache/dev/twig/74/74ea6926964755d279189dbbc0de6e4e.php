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

/* reservation/ateliers.html.twig */
class __TwigTemplate_b1f6c1af3b3f69c33f940ed77d1d8f1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/ateliers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/ateliers.html.twig"));

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

        yield "Ateliers - NoVas";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_mes");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"calendar-check\" class=\"w-4 h-4\"></i>
                    Mes reservations
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex flex-col md:flex-row md:items-end justify-between gap-6\">
                <div>
                    <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                        <i data-lucide=\"calendar\" class=\"w-4 h-4\"></i>
                        Ateliers disponibles
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Decouvrez nos <span class=\"italic text-primary\">ateliers</span>
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Reservez votre place dans nos ateliers exclusifs et developpez vos competences en groupe.
                    </p>
                </div>
                
                <!-- Stats -->
                <div class=\"flex gap-6\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">6</p>
                        <p class=\"text-xs text-muted-foreground\">Ateliers ce mois</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">3</p>
                        <p class=\"text-xs text-muted-foreground\">Mes reservations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"glass-card rounded-2xl p-4 flex flex-col md:flex-row gap-4\">
                <div class=\"relative flex-1\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" placeholder=\"Rechercher un atelier...\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                <div class=\"flex gap-3 flex-wrap\">
                    <button class=\"px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-colors\">
                        Tous
                    </button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-primary/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                        Soft Skills
                    </button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-primary/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                        Hard Skills
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Ateliers Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 89
            yield "                <div class=\"group glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all duration-500 hover:-translate-y-2\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        <img src=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "image", [], "any", false, false, false, 92))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titre", [], "any", false, false, false, 92), "html", null, true);
            yield "\" class=\"w-full h-full object-cover group-hover:scale-110 transition-transform duration-700\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 97
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "type", [], "any", false, false, false, 97) == "soft")) ? ("bg-personal/90 text-white") : ("bg-academic/90 text-white"));
            yield " backdrop-blur-sm\">
                                ";
            // line 98
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "type", [], "any", false, false, false, 98) == "soft")) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                            </span>
                        </div>
                        
                        <!-- Places remaining -->
                        <div class=\"absolute top-4 right-4 glass-card px-3 py-1 rounded-full\">
                            <span class=\"text-xs font-medium ";
            // line 104
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_restantes", [], "any", false, false, false, 104) < 5)) ? ("text-red-400") : ("text-foreground"));
            yield "\">
                                ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_restantes", [], "any", false, false, false, 105), "html", null, true);
            yield " places
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-3\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "categorie", [], "any", false, false, false, 114), "html", null, true);
            yield "
                        </div>
                        
                        <h3 class=\"text-xl font-semibold mb-3 group-hover:text-primary transition-colors\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titre", [], "any", false, false, false, 117), "html", null, true);
            yield "</h3>
                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "description", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
                        
                        <!-- Details -->
                        <div class=\"space-y-2 mb-6\">
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                                <span>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "date", [], "any", false, false, false, 124), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"clock\" class=\"w-4 h-4 text-primary\"></i>
                                <span>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "heure", [], "any", false, false, false, 128), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"map-pin\" class=\"w-4 h-4 text-primary\"></i>
                                <span>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "lieu", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"user\" class=\"w-4 h-4 text-primary\"></i>
                                <span>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "formateur", [], "any", false, false, false, 136), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar for places -->
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between text-xs mb-2\">
                                <span class=\"text-muted-foreground\">Places reservees</span>
                                <span class=\"text-foreground\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_total", [], "any", false, false, false, 144) - CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_restantes", [], "any", false, false, false, 144)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_total", [], "any", false, false, false, 144), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-primary rounded-full transition-all\" style=\"width: ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_total", [], "any", false, false, false, 147) - CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_restantes", [], "any", false, false, false, 147)) / CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_total", [], "any", false, false, false, 147)) * 100)), "html", null, true);
            yield "%\"></div>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <a href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_restantes", [], "any", false, false, false, 152) == 0)) ? ("opacity-50 cursor-not-allowed") : (""));
            yield "\">
                            ";
            // line 153
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "places_restantes", [], "any", false, false, false, 153) == 0)) {
                // line 154
                yield "                                <i data-lucide=\"x-circle\" class=\"w-5 h-5\"></i>
                                Complet
                            ";
            } else {
                // line 157
                yield "                                <span>Reserver ma place</span>
                                <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                            ";
            }
            // line 160
            yield "                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto glass-card rounded-3xl p-12 text-center relative overflow-hidden\">
            <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-primary/20 rounded-full blur-[100px]\"></div>
            <div class=\"relative\">
                <h2 class=\"font-serif text-3xl font-medium mb-4\">Vous ne trouvez pas ce que vous cherchez ?</h2>
                <p class=\"text-muted-foreground mb-6\">Proposez un nouvel atelier ou contactez notre equipe.</p>
                <button class=\"inline-flex items-center gap-2 px-6 py-3 bg-secondary border border-white/10 rounded-xl text-sm font-medium hover:bg-white/5 transition-colors\">
                    <i data-lucide=\"mail\" class=\"w-4 h-4\"></i>
                    Contacter l'equipe
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
        return "reservation/ateliers.html.twig";
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
        return array (  332 => 164,  323 => 160,  318 => 157,  313 => 154,  311 => 153,  305 => 152,  297 => 147,  289 => 144,  278 => 136,  271 => 132,  264 => 128,  257 => 124,  248 => 118,  244 => 117,  238 => 114,  226 => 105,  222 => 104,  213 => 98,  209 => 97,  199 => 92,  194 => 89,  190 => 88,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_home.html.twig' %}

{% block title %}Ateliers - NoVas{% endblock %}

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
                <a href=\"{{ path('app_reservation_mes') }}\" class=\"flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"calendar-check\" class=\"w-4 h-4\"></i>
                    Mes reservations
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex flex-col md:flex-row md:items-end justify-between gap-6\">
                <div>
                    <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                        <i data-lucide=\"calendar\" class=\"w-4 h-4\"></i>
                        Ateliers disponibles
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Decouvrez nos <span class=\"italic text-primary\">ateliers</span>
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Reservez votre place dans nos ateliers exclusifs et developpez vos competences en groupe.
                    </p>
                </div>
                
                <!-- Stats -->
                <div class=\"flex gap-6\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">6</p>
                        <p class=\"text-xs text-muted-foreground\">Ateliers ce mois</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">3</p>
                        <p class=\"text-xs text-muted-foreground\">Mes reservations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"glass-card rounded-2xl p-4 flex flex-col md:flex-row gap-4\">
                <div class=\"relative flex-1\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" placeholder=\"Rechercher un atelier...\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                <div class=\"flex gap-3 flex-wrap\">
                    <button class=\"px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-colors\">
                        Tous
                    </button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-primary/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                        Soft Skills
                    </button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-primary/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                        Hard Skills
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Ateliers Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
                {% for atelier in ateliers %}
                <div class=\"group glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all duration-500 hover:-translate-y-2\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        <img src=\"{{ asset('images/' ~ atelier.image) }}\" alt=\"{{ atelier.titre }}\" class=\"w-full h-full object-cover group-hover:scale-110 transition-transform duration-700\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ atelier.type == 'soft' ? 'bg-personal/90 text-white' : 'bg-academic/90 text-white' }} backdrop-blur-sm\">
                                {{ atelier.type == 'soft' ? 'Soft Skill' : 'Hard Skill' }}
                            </span>
                        </div>
                        
                        <!-- Places remaining -->
                        <div class=\"absolute top-4 right-4 glass-card px-3 py-1 rounded-full\">
                            <span class=\"text-xs font-medium {{ atelier.places_restantes < 5 ? 'text-red-400' : 'text-foreground' }}\">
                                {{ atelier.places_restantes }} places
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-3\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            {{ atelier.categorie }}
                        </div>
                        
                        <h3 class=\"text-xl font-semibold mb-3 group-hover:text-primary transition-colors\">{{ atelier.titre }}</h3>
                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ atelier.description }}</p>
                        
                        <!-- Details -->
                        <div class=\"space-y-2 mb-6\">
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                                <span>{{ atelier.date }}</span>
                            </div>
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"clock\" class=\"w-4 h-4 text-primary\"></i>
                                <span>{{ atelier.heure }}</span>
                            </div>
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"map-pin\" class=\"w-4 h-4 text-primary\"></i>
                                <span>{{ atelier.lieu }}</span>
                            </div>
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"user\" class=\"w-4 h-4 text-primary\"></i>
                                <span>{{ atelier.formateur }}</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar for places -->
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between text-xs mb-2\">
                                <span class=\"text-muted-foreground\">Places reservees</span>
                                <span class=\"text-foreground\">{{ atelier.places_total - atelier.places_restantes }}/{{ atelier.places_total }}</span>
                            </div>
                            <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-primary rounded-full transition-all\" style=\"width: {{ ((atelier.places_total - atelier.places_restantes) / atelier.places_total * 100)|round }}%\"></div>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <a href=\"{{ path('app_reservation_reserver', {id: atelier.id}) }}\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn {{ atelier.places_restantes == 0 ? 'opacity-50 cursor-not-allowed' : '' }}\">
                            {% if atelier.places_restantes == 0 %}
                                <i data-lucide=\"x-circle\" class=\"w-5 h-5\"></i>
                                Complet
                            {% else %}
                                <span>Reserver ma place</span>
                                <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                            {% endif %}
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto glass-card rounded-3xl p-12 text-center relative overflow-hidden\">
            <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-primary/20 rounded-full blur-[100px]\"></div>
            <div class=\"relative\">
                <h2 class=\"font-serif text-3xl font-medium mb-4\">Vous ne trouvez pas ce que vous cherchez ?</h2>
                <p class=\"text-muted-foreground mb-6\">Proposez un nouvel atelier ou contactez notre equipe.</p>
                <button class=\"inline-flex items-center gap-2 px-6 py-3 bg-secondary border border-white/10 rounded-xl text-sm font-medium hover:bg-white/5 transition-colors\">
                    <i data-lucide=\"mail\" class=\"w-4 h-4\"></i>
                    Contacter l'equipe
                </button>
            </div>
        </div>
    </section>
</div>
{% endblock %}", "reservation/ateliers.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\reservation\\ateliers.html.twig");
    }
}
