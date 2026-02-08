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

/* front/reservation/ateliers.html.twig */
class __TwigTemplate_83864aa4977e28cae8cb2f4ab79d93e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/ateliers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/ateliers.html.twig"));

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
            <!-- Logo -->
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"EduVie\" class=\"h-10 w-auto\">
                </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 16
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
                        <p class=\"font-serif text-2xl font-bold text-primary\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 45, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Ateliers disponibles</p>
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 87
            yield "                ";
            $context["places_restantes"] = (CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 87) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "reservations", [], "any", false, false, false, 87)));
            // line 88
            yield "                ";
            $context["image_src"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "imageAtelier", [], "any", false, false, false, 88) && (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "imageAtelier", [], "any", false, false, false, 88)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "imageAtelier", [], "any", false, false, false, 88)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "imageAtelier", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "imageAtelier", [], "any", false, false, false, 88)))) : (""))));
            // line 89
            yield "                <div class=\"group glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all duration-500 hover:-translate-y-2\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        ";
            // line 92
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "imageAtelier", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_src"]) || array_key_exists("image_src", $context) ? $context["image_src"] : (function () { throw new RuntimeError('Variable "image_src" does not exist.', 93, $this->source); })()), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titreAtelier", [], "any", false, false, false, 93), "html", null, true);
                yield "\" class=\"w-full h-full object-cover group-hover:scale-110 transition-transform duration-700\">
                        ";
            } else {
                // line 95
                yield "                        <div class=\"w-full h-full bg-secondary flex items-center justify-center\">
                            <i data-lucide=\"calendar-days\" class=\"w-16 h-16 text-muted-foreground\"></i>
                        </div>
                        ";
            }
            // line 99
            yield "                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 103
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "contexteAtelier", [], "any", false, false, false, 103) == 0)) ? ("bg-personal/90 text-white") : ("bg-academic/90 text-white"));
            yield " backdrop-blur-sm\">
                                ";
            // line 104
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "contexteAtelier", [], "any", false, false, false, 104) == 0)) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                            </span>
                        </div>
                        
                        <!-- Places remaining -->
                        <div class=\"absolute top-4 right-4 glass-card px-3 py-1 rounded-full\">
                            <span class=\"text-xs font-medium ";
            // line 110
            yield ((((isset($context["places_restantes"]) || array_key_exists("places_restantes", $context) ? $context["places_restantes"] : (function () { throw new RuntimeError('Variable "places_restantes" does not exist.', 110, $this->source); })()) < 5)) ? ("text-red-400") : ("text-foreground"));
            yield "\">
                                ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["places_restantes"]) || array_key_exists("places_restantes", $context) ? $context["places_restantes"] : (function () { throw new RuntimeError('Variable "places_restantes" does not exist.', 111, $this->source); })()), "html", null, true);
            yield " places
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-3\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "typeAtelier", [], "any", false, false, false, 120)), "html", null, true);
            yield "
                        </div>
                        
                        <h3 class=\"text-xl font-semibold mb-3 group-hover:text-primary transition-colors\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titreAtelier", [], "any", false, false, false, 123), "html", null, true);
            yield "</h3>
                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "descriptionAtelier", [], "any", false, false, false, 124), "html", null, true);
            yield "</p>
                        
                        <!-- Details -->
                        <div class=\"space-y-2 mb-6\">
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                                <span>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "dateAtelier", [], "any", false, false, false, 130), "d F Y"), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar for places -->
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between text-xs mb-2\">
                                <span class=\"text-muted-foreground\">Places reservees</span>
                                <span class=\"text-foreground\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "reservations", [], "any", false, false, false, 138)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 138), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-primary rounded-full transition-all\" style=\"width: ";
            // line 141
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 141) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "reservations", [], "any", false, false, false, 141)) / CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 141)) * 100)), "html", null, true)) : (0));
            yield "%\"></div>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        ";
            // line 146
            if (((isset($context["places_restantes"]) || array_key_exists("places_restantes", $context) ? $context["places_restantes"] : (function () { throw new RuntimeError('Variable "places_restantes" does not exist.', 146, $this->source); })()) > 0)) {
                // line 147
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                yield "\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                            <span>Reserver ma place</span>
                            <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                        </a>
                        ";
            } else {
                // line 152
                yield "                        <span class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary/50 text-white rounded-xl font-medium cursor-not-allowed opacity-75\">
                            <i data-lucide=\"x-circle\" class=\"w-5 h-5\"></i>
                            Complet
                        </span>
                        ";
            }
            // line 157
            yield "                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
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
        return "front/reservation/ateliers.html.twig";
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
        return array (  332 => 160,  324 => 157,  317 => 152,  308 => 147,  306 => 146,  298 => 141,  290 => 138,  279 => 130,  270 => 124,  266 => 123,  260 => 120,  248 => 111,  244 => 110,  235 => 104,  231 => 103,  225 => 99,  219 => 95,  211 => 93,  209 => 92,  204 => 89,  201 => 88,  198 => 87,  194 => 86,  150 => 45,  118 => 16,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Ateliers - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <!-- Logo -->
                <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"EduVie\" class=\"h-10 w-auto\">
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
                        <p class=\"font-serif text-2xl font-bold text-primary\">{{ ateliers|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Ateliers disponibles</p>
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
                {% set places_restantes = atelier.capacite - atelier.reservations|length %}
                {% set image_src = (atelier.imageAtelier and (atelier.imageAtelier starts with 'http')) ? atelier.imageAtelier : (atelier.imageAtelier ? asset('images/' ~ atelier.imageAtelier) : '') %}
                <div class=\"group glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all duration-500 hover:-translate-y-2\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        {% if atelier.imageAtelier %}
                        <img src=\"{{ image_src }}\" alt=\"{{ atelier.titreAtelier }}\" class=\"w-full h-full object-cover group-hover:scale-110 transition-transform duration-700\">
                        {% else %}
                        <div class=\"w-full h-full bg-secondary flex items-center justify-center\">
                            <i data-lucide=\"calendar-days\" class=\"w-16 h-16 text-muted-foreground\"></i>
                        </div>
                        {% endif %}
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ atelier.contexteAtelier == 0 ? 'bg-personal/90 text-white' : 'bg-academic/90 text-white' }} backdrop-blur-sm\">
                                {{ atelier.contexteAtelier == 0 ? 'Soft Skill' : 'Hard Skill' }}
                            </span>
                        </div>
                        
                        <!-- Places remaining -->
                        <div class=\"absolute top-4 right-4 glass-card px-3 py-1 rounded-full\">
                            <span class=\"text-xs font-medium {{ places_restantes < 5 ? 'text-red-400' : 'text-foreground' }}\">
                                {{ places_restantes }} places
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-3\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            {{ atelier.typeAtelier|capitalize }}
                        </div>
                        
                        <h3 class=\"text-xl font-semibold mb-3 group-hover:text-primary transition-colors\">{{ atelier.titreAtelier }}</h3>
                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ atelier.descriptionAtelier }}</p>
                        
                        <!-- Details -->
                        <div class=\"space-y-2 mb-6\">
                            <div class=\"flex items-center gap-3 text-sm text-muted-foreground\">
                                <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                                <span>{{ atelier.dateAtelier|date('d F Y') }}</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar for places -->
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between text-xs mb-2\">
                                <span class=\"text-muted-foreground\">Places reservees</span>
                                <span class=\"text-foreground\">{{ atelier.reservations|length }}/{{ atelier.capacite }}</span>
                            </div>
                            <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-primary rounded-full transition-all\" style=\"width: {{ atelier.capacite > 0 ? ((atelier.reservations|length) / atelier.capacite * 100)|round : 0 }}%\"></div>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        {% if places_restantes > 0 %}
                        <a href=\"{{ path('app_reservation_reserver', { id: atelier.id }) }}\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                            <span>Reserver ma place</span>
                            <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                        </a>
                        {% else %}
                        <span class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary/50 text-white rounded-xl font-medium cursor-not-allowed opacity-75\">
                            <i data-lucide=\"x-circle\" class=\"w-5 h-5\"></i>
                            Complet
                        </span>
                        {% endif %}
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
{% endblock %}", "front/reservation/ateliers.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\reservation\\ateliers.html.twig");
    }
}
