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

/* front/jobs/index.html.twig */
class __TwigTemplate_60195081faef13af2af80138d23d4829 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/index.html.twig"));

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

        yield "Offres d'emploi étudiant - NoVas";
        
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
        yield "\" class=\"text-sm text-primary font-medium\">Jobs</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Marketplace</a>
            <a href=\"#\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Communauté</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_mes_offres");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors px-4 py-2\">
                Mes offres
            </a>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_ajouter");
        yield "\" class=\"text-sm font-medium bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4 inline mr-1\"></i>
                Publier
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class=\"relative pt-32 pb-16 overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-7xl mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-6\">
                <i data-lucide=\"briefcase\" class=\"w-4 h-4\"></i>
                Opportunités d'apprentissage
            </div>
            <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                Trouvez votre <span class=\"italic text-primary\">prochaine mission</span>
            </h1>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">
                Tutorat, aide académique, activités pratiques... Découvrez des opportunités adaptées à votre profil.
            </p>
        </div>

        <!-- Search & Filters -->
        <div class=\"glass-card rounded-2xl p-6 mb-12 max-w-4xl mx-auto\">
            <div class=\"flex flex-col md:flex-row gap-4\">
                <div class=\"flex-1 relative\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" placeholder=\"Rechercher une offre...\" 
                           class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                </div>
                <div class=\"flex gap-3\">
                    <select class=\"px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none text-sm\">
                        <option>Toutes les catégories</option>
                        <option>Tutorat</option>
                        <option>Aide académique</option>
                        <option>Activités pratiques</option>
                        <option>Projet collaboratif</option>
                    </select>
                    <button class=\"px-6 py-3 rounded-xl bg-primary text-white font-medium hover:bg-primary/90 transition\">
                        Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-12 max-w-4xl mx-auto\">
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-primary\">128</p>
                <p class=\"text-xs text-muted-foreground\">Offres actives</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-accent\">45</p>
                <p class=\"text-xs text-muted-foreground\">Tutorats</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-primary\">32</p>
                <p class=\"text-xs text-muted-foreground\">Projets</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-accent\">51</p>
                <p class=\"text-xs text-muted-foreground\">Autres</p>
            </div>
        </div>
    </div>
</section>

<!-- Jobs List -->
<section class=\"py-12 relative\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 103
            yield "            <div class=\"glass-card rounded-2xl p-6 hover:border-primary/30 transition-all group relative overflow-hidden\">
                <div class=\"absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-3xl -mr-16 -mt-16 group-hover:bg-primary/10 transition-colors\"></div>
                
                <div class=\"relative\">
                    <div class=\"flex items-start justify-between mb-4\">
                        <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center\">
                            ";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["job"], "type", [], "any", false, false, false, 109) == "tutorat")) {
                // line 110
                yield "                                <i data-lucide=\"book-open\" class=\"w-6 h-6 text-primary\"></i>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 111
$context["job"], "type", [], "any", false, false, false, 111) == "aide")) {
                // line 112
                yield "                                <i data-lucide=\"help-circle\" class=\"w-6 h-6 text-primary\"></i>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 113
$context["job"], "type", [], "any", false, false, false, 113) == "pratique")) {
                // line 114
                yield "                                <i data-lucide=\"wrench\" class=\"w-6 h-6 text-primary\"></i>
                            ";
            } else {
                // line 116
                yield "                                <i data-lucide=\"briefcase\" class=\"w-6 h-6 text-primary\"></i>
                            ";
            }
            // line 118
            yield "                        </div>
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium 
                            ";
            // line 120
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["job"], "type", [], "any", false, false, false, 120) == "tutorat")) {
                yield "bg-primary/20 text-primary
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 121
$context["job"], "type", [], "any", false, false, false, 121) == "aide")) {
                yield "bg-accent/20 text-accent
                            ";
            } else {
                // line 122
                yield "bg-primary/10 text-primary";
            }
            yield "\">
                            ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["job"], "type", [], "any", false, false, false, 123)), "html", null, true);
            yield "
                        </span>
                    </div>

                    <h3 class=\"text-lg font-semibold mb-2 group-hover:text-primary transition-colors\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "titre", [], "any", false, false, false, 127), "html", null, true);
            yield "</h3>
                    <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 128), "html", null, true);
            yield "</p>

                    <div class=\"flex items-center gap-4 mb-4 text-sm\">
                        <div class=\"flex items-center gap-1.5 text-muted-foreground\">
                            <i data-lucide=\"map-pin\" class=\"w-4 h-4\"></i>
                            <span>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "localisation", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"flex items-center gap-1.5 text-muted-foreground\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4\"></i>
                            <span>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "duree", [], "any", false, false, false, 137), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    <div class=\"flex items-center justify-between pt-4 border-t border-white/10\">
                        <div class=\"flex items-center gap-2\">
                            <div class=\"w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-xs font-semibold text-primary\">
                                ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "createur", [], "any", false, false, false, 144), "nom", [], "any", false, false, false, 144)), "html", null, true);
            yield "
                            </div>
                            <div class=\"text-sm\">
                                <p class=\"font-medium\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "createur", [], "any", false, false, false, 147), "nom", [], "any", false, false, false, 147), "html", null, true);
            yield "</p>
                                <p class=\"text-xs text-muted-foreground\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "createur", [], "any", false, false, false, 148), "niveau", [], "any", false, false, false, 148), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-lg font-bold text-primary\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "remuneration", [], "any", false, false, false, 152), "html", null, true);
            yield "€</p>
                            <p class=\"text-xs text-muted-foreground\">/heure</p>
                        </div>
                    </div>

                    <a href=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            yield "\" 
                       class=\"mt-4 block w-full py-3 rounded-xl bg-primary/10 text-primary text-center font-medium hover:bg-primary hover:text-white transition-all\">
                        Voir l'offre
                    </a>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 163
        if (!$context['_iterated']) {
            // line 164
            yield "            <div class=\"col-span-full text-center py-16\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"inbox\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <p class=\"text-muted-foreground\">Aucune offre disponible pour le moment</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['job'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "        </div>

        <!-- Pagination -->
        <div class=\"flex justify-center mt-12 gap-2\">
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">
                <i data-lucide=\"chevron-left\" class=\"w-5 h-5\"></i>
            </button>
            <button class=\"w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center\">1</button>
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">2</button>
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">3</button>
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">
                <i data-lucide=\"chevron-right\" class=\"w-5 h-5\"></i>
            </button>
        </div>
    </div>
</section>

<!-- CTA -->
<section class=\"py-24 relative overflow-hidden mt-12\">
    <div class=\"absolute inset-0 bg-primary/5\"></div>
    <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[100px]\"></div>
    
    <div class=\"relative max-w-4xl mx-auto px-6 text-center\">
        <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Vous cherchez de l'aide pour vos études ?</h2>
        <p class=\"text-muted-foreground mb-8\">Publiez une offre et trouvez l'étudiant parfait pour vous accompagner.</p>
        <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_ajouter");
        yield "\" class=\"inline-flex items-center gap-2 bg-primary text-white px-8 py-4 rounded-2xl font-medium hover:bg-primary/90 transition-all shadow-xl shadow-primary/30\">
            <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
            Publier une offre
        </a>
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
        return "front/jobs/index.html.twig";
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
        return array (  377 => 196,  350 => 171,  338 => 164,  336 => 163,  325 => 157,  317 => 152,  310 => 148,  306 => 147,  300 => 144,  290 => 137,  283 => 133,  275 => 128,  271 => 127,  264 => 123,  259 => 122,  254 => 121,  250 => 120,  246 => 118,  242 => 116,  238 => 114,  236 => 113,  233 => 112,  231 => 111,  228 => 110,  226 => 109,  218 => 103,  213 => 102,  134 => 26,  128 => 23,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Offres d'emploi étudiant - NoVas{% endblock %}

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
            <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm text-primary font-medium\">Jobs</a>
            <a href=\"{{ path('app_marketplace_index') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Marketplace</a>
            <a href=\"#\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Communauté</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_jobs_mes_offres') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors px-4 py-2\">
                Mes offres
            </a>
            <a href=\"{{ path('app_jobs_ajouter') }}\" class=\"text-sm font-medium bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4 inline mr-1\"></i>
                Publier
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class=\"relative pt-32 pb-16 overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-7xl mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-6\">
                <i data-lucide=\"briefcase\" class=\"w-4 h-4\"></i>
                Opportunités d'apprentissage
            </div>
            <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                Trouvez votre <span class=\"italic text-primary\">prochaine mission</span>
            </h1>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">
                Tutorat, aide académique, activités pratiques... Découvrez des opportunités adaptées à votre profil.
            </p>
        </div>

        <!-- Search & Filters -->
        <div class=\"glass-card rounded-2xl p-6 mb-12 max-w-4xl mx-auto\">
            <div class=\"flex flex-col md:flex-row gap-4\">
                <div class=\"flex-1 relative\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" placeholder=\"Rechercher une offre...\" 
                           class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                </div>
                <div class=\"flex gap-3\">
                    <select class=\"px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none text-sm\">
                        <option>Toutes les catégories</option>
                        <option>Tutorat</option>
                        <option>Aide académique</option>
                        <option>Activités pratiques</option>
                        <option>Projet collaboratif</option>
                    </select>
                    <button class=\"px-6 py-3 rounded-xl bg-primary text-white font-medium hover:bg-primary/90 transition\">
                        Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4 mb-12 max-w-4xl mx-auto\">
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-primary\">128</p>
                <p class=\"text-xs text-muted-foreground\">Offres actives</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-accent\">45</p>
                <p class=\"text-xs text-muted-foreground\">Tutorats</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-primary\">32</p>
                <p class=\"text-xs text-muted-foreground\">Projets</p>
            </div>
            <div class=\"glass-card rounded-xl p-4 text-center\">
                <p class=\"text-2xl font-bold text-accent\">51</p>
                <p class=\"text-xs text-muted-foreground\">Autres</p>
            </div>
        </div>
    </div>
</section>

<!-- Jobs List -->
<section class=\"py-12 relative\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
            {% for job in jobs %}
            <div class=\"glass-card rounded-2xl p-6 hover:border-primary/30 transition-all group relative overflow-hidden\">
                <div class=\"absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-3xl -mr-16 -mt-16 group-hover:bg-primary/10 transition-colors\"></div>
                
                <div class=\"relative\">
                    <div class=\"flex items-start justify-between mb-4\">
                        <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center\">
                            {% if job.type == 'tutorat' %}
                                <i data-lucide=\"book-open\" class=\"w-6 h-6 text-primary\"></i>
                            {% elseif job.type == 'aide' %}
                                <i data-lucide=\"help-circle\" class=\"w-6 h-6 text-primary\"></i>
                            {% elseif job.type == 'pratique' %}
                                <i data-lucide=\"wrench\" class=\"w-6 h-6 text-primary\"></i>
                            {% else %}
                                <i data-lucide=\"briefcase\" class=\"w-6 h-6 text-primary\"></i>
                            {% endif %}
                        </div>
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium 
                            {% if job.type == 'tutorat' %}bg-primary/20 text-primary
                            {% elseif job.type == 'aide' %}bg-accent/20 text-accent
                            {% else %}bg-primary/10 text-primary{% endif %}\">
                            {{ job.type|capitalize }}
                        </span>
                    </div>

                    <h3 class=\"text-lg font-semibold mb-2 group-hover:text-primary transition-colors\">{{ job.titre }}</h3>
                    <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ job.description }}</p>

                    <div class=\"flex items-center gap-4 mb-4 text-sm\">
                        <div class=\"flex items-center gap-1.5 text-muted-foreground\">
                            <i data-lucide=\"map-pin\" class=\"w-4 h-4\"></i>
                            <span>{{ job.localisation }}</span>
                        </div>
                        <div class=\"flex items-center gap-1.5 text-muted-foreground\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4\"></i>
                            <span>{{ job.duree }}</span>
                        </div>
                    </div>

                    <div class=\"flex items-center justify-between pt-4 border-t border-white/10\">
                        <div class=\"flex items-center gap-2\">
                            <div class=\"w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-xs font-semibold text-primary\">
                                {{ job.createur.nom|first }}
                            </div>
                            <div class=\"text-sm\">
                                <p class=\"font-medium\">{{ job.createur.nom }}</p>
                                <p class=\"text-xs text-muted-foreground\">{{ job.createur.niveau }}</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-lg font-bold text-primary\">{{ job.remuneration }}€</p>
                            <p class=\"text-xs text-muted-foreground\">/heure</p>
                        </div>
                    </div>

                    <a href=\"{{ path('app_jobs_detail', {'id': job.id}) }}\" 
                       class=\"mt-4 block w-full py-3 rounded-xl bg-primary/10 text-primary text-center font-medium hover:bg-primary hover:text-white transition-all\">
                        Voir l'offre
                    </a>
                </div>
            </div>
            {% else %}
            <div class=\"col-span-full text-center py-16\">
                <div class=\"w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"inbox\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <p class=\"text-muted-foreground\">Aucune offre disponible pour le moment</p>
            </div>
            {% endfor %}
        </div>

        <!-- Pagination -->
        <div class=\"flex justify-center mt-12 gap-2\">
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">
                <i data-lucide=\"chevron-left\" class=\"w-5 h-5\"></i>
            </button>
            <button class=\"w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center\">1</button>
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">2</button>
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">3</button>
            <button class=\"w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center hover:bg-white/5 transition\">
                <i data-lucide=\"chevron-right\" class=\"w-5 h-5\"></i>
            </button>
        </div>
    </div>
</section>

<!-- CTA -->
<section class=\"py-24 relative overflow-hidden mt-12\">
    <div class=\"absolute inset-0 bg-primary/5\"></div>
    <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[100px]\"></div>
    
    <div class=\"relative max-w-4xl mx-auto px-6 text-center\">
        <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Vous cherchez de l'aide pour vos études ?</h2>
        <p class=\"text-muted-foreground mb-8\">Publiez une offre et trouvez l'étudiant parfait pour vous accompagner.</p>
        <a href=\"{{ path('app_jobs_ajouter') }}\" class=\"inline-flex items-center gap-2 bg-primary text-white px-8 py-4 rounded-2xl font-medium hover:bg-primary/90 transition-all shadow-xl shadow-primary/30\">
            <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
            Publier une offre
        </a>
    </div>
</section>
{% endblock %}", "front/jobs/index.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\jobs\\index.html.twig");
    }
}
