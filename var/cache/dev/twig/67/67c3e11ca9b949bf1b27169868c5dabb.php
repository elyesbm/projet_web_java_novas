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

/* front/reservation/mes_reservations.html.twig */
class __TwigTemplate_91361864c19c9e8c07c3115ef95c17f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/mes_reservations.html.twig"));

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

        yield "Mes Reservations - NoVas";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_ateliers");
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les ateliers
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
                        <i data-lucide=\"calendar-check\" class=\"w-4 h-4\"></i>
                        Mes reservations
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Vos <span class=\"italic text-primary\">ateliers</span> reserves
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Retrouvez tous vos ateliers et telechargez vos QR codes d'acces.
                    </p>
                </div>
                
                <!-- Quick Stats -->
                <div class=\"flex gap-4\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 44, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">A venir</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 48, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Passes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex gap-2 p-1 bg-secondary/50 rounded-xl w-fit\">
                <button class=\"px-6 py-2.5 rounded-lg bg-primary text-white text-sm font-medium shadow-lg shadow-primary/25\">
                    A venir (";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 61, $this->source); })())), "html", null, true);
        yield ")
                </button>
                <button class=\"px-6 py-2.5 rounded-lg text-sm text-muted-foreground hover:text-foreground hover:bg-white/5 transition-colors\">
                    Historique (";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 64, $this->source); })())), "html", null, true);
        yield ")
                </button>
            </div>
        </div>
    </section>

    <!-- Reservations List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 74
            yield "            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">
                    <!-- QR Code -->
                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square bg-white rounded-2xl p-4 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <i data-lucide=\"qr-code\" class=\"w-24 h-24 text-foreground mx-auto mb-2\"></i>
                                <p class=\"text-xs text-muted-foreground font-mono\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "qr_code", [], "any", false, false, false, 81), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Info -->
                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 91), "type", [], "any", false, false, false, 91) == "soft")) ? ("bg-personal/20 text-personal") : ("bg-academic/20 text-academic"));
            yield "\">
                                        ";
            // line 92
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 92), "type", [], "any", false, false, false, 92) == "soft")) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 94) == "confirmee")) ? ("bg-green-500/20 text-green-400") : ("bg-yellow-500/20 text-yellow-400"));
            yield "\">
                                        ";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 95) == "confirmee")) ? ("Confirmee") : ("En attente"));
            yield "
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 98), "titre", [], "any", false, false, false, 98), "html", null, true);
            yield "</h3>
                                <p class=\"text-sm text-muted-foreground\">Reserve le ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date_reservation", [], "any", false, false, false, 99), "html", null, true);
            yield "</p>
                            </div>
                            
                            <div class=\"flex gap-2\">
                                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                                    QR Code
                                </button>
                                <button class=\"px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-xl text-sm text-red-400 hover:bg-red-500/20 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                                    Annuler
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"grid sm:grid-cols-3 gap-4\">
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Date</p>
                                    <p class=\"text-sm font-medium\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 119), "date", [], "any", false, false, false, 119), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Horaire</p>
                                    <p class=\"text-sm font-medium\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 126), "heure", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"map-pin\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Lieu</p>
                                    <p class=\"text-sm font-medium\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 133), "lieu", [], "any", false, false, false, 133), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"user\" class=\"w-4 h-4\"></i>
                            <span>Formateur : ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 140), "formateur", [], "any", false, false, false, 140), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 145
        if (!$context['_iterated']) {
            // line 146
            yield "            <!-- Empty State -->
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <div class=\"w-20 h-20 rounded-full bg-secondary flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"calendar-x\" class=\"w-10 h-10 text-muted-foreground\"></i>
                </div>
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
                <a href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_ateliers");
            yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors\">
                    <i data-lucide=\"calendar\" class=\"w-5 h-5\"></i>
                    Decouvrir les ateliers
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "        </div>
    </section>

    <!-- History Section -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-6\">Historique</h2>
            
            <div class=\"space-y-4\">
                ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 169
            yield "                <div class=\"glass-card rounded-2xl p-4 opacity-60 hover:opacity-100 transition-opacity\">
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"w-12 h-12 rounded-xl bg-secondary flex items-center justify-center\">
                                <i data-lucide=\"check-circle\" class=\"w-6 h-6 text-accent\"></i>
                            </div>
                            <div>
                                <h4 class=\"font-medium\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "atelier", [], "any", false, false, false, 176), "titre", [], "any", false, false, false, 176), "html", null, true);
            yield "</h4>
                                <p class=\"text-sm text-muted-foreground\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "atelier", [], "any", false, false, false, 177), "date", [], "any", false, false, false, 177), "html", null, true);
            yield " • ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "atelier", [], "any", false, false, false, 177), "type", [], "any", false, false, false, 177) == "soft")) ? ("Soft Skill") : ("Hard Skill"));
            yield "</p>
                            </div>
                        </div>
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent\">
                            Termine
                        </span>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "            </div>
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
        return "front/reservation/mes_reservations.html.twig";
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
        return array (  371 => 186,  354 => 177,  350 => 176,  341 => 169,  337 => 168,  326 => 159,  314 => 153,  305 => 146,  303 => 145,  293 => 140,  283 => 133,  273 => 126,  263 => 119,  240 => 99,  236 => 98,  230 => 95,  226 => 94,  221 => 92,  217 => 91,  204 => 81,  195 => 74,  190 => 73,  178 => 64,  172 => 61,  156 => 48,  149 => 44,  118 => 16,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Mes Reservations - NoVas{% endblock %}

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
                <a href=\"{{ path('app_reservation_ateliers') }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les ateliers
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
                        <i data-lucide=\"calendar-check\" class=\"w-4 h-4\"></i>
                        Mes reservations
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Vos <span class=\"italic text-primary\">ateliers</span> reserves
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Retrouvez tous vos ateliers et telechargez vos QR codes d'acces.
                    </p>
                </div>
                
                <!-- Quick Stats -->
                <div class=\"flex gap-4\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">{{ reservations|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">A venir</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">{{ historique|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Passes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex gap-2 p-1 bg-secondary/50 rounded-xl w-fit\">
                <button class=\"px-6 py-2.5 rounded-lg bg-primary text-white text-sm font-medium shadow-lg shadow-primary/25\">
                    A venir ({{ reservations|length }})
                </button>
                <button class=\"px-6 py-2.5 rounded-lg text-sm text-muted-foreground hover:text-foreground hover:bg-white/5 transition-colors\">
                    Historique ({{ historique|length }})
                </button>
            </div>
        </div>
    </section>

    <!-- Reservations List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            {% for reservation in reservations %}
            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">
                    <!-- QR Code -->
                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square bg-white rounded-2xl p-4 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <i data-lucide=\"qr-code\" class=\"w-24 h-24 text-foreground mx-auto mb-2\"></i>
                                <p class=\"text-xs text-muted-foreground font-mono\">{{ reservation.qr_code }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Info -->
                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ reservation.atelier.type == 'soft' ? 'bg-personal/20 text-personal' : 'bg-academic/20 text-academic' }}\">
                                        {{ reservation.atelier.type == 'soft' ? 'Soft Skill' : 'Hard Skill' }}
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ reservation.statut == 'confirmee' ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400' }}\">
                                        {{ reservation.statut == 'confirmee' ? 'Confirmee' : 'En attente' }}
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">{{ reservation.atelier.titre }}</h3>
                                <p class=\"text-sm text-muted-foreground\">Reserve le {{ reservation.date_reservation }}</p>
                            </div>
                            
                            <div class=\"flex gap-2\">
                                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                                    QR Code
                                </button>
                                <button class=\"px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-xl text-sm text-red-400 hover:bg-red-500/20 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                                    Annuler
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"grid sm:grid-cols-3 gap-4\">
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Date</p>
                                    <p class=\"text-sm font-medium\">{{ reservation.atelier.date }}</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Horaire</p>
                                    <p class=\"text-sm font-medium\">{{ reservation.atelier.heure }}</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"map-pin\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Lieu</p>
                                    <p class=\"text-sm font-medium\">{{ reservation.atelier.lieu }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"user\" class=\"w-4 h-4\"></i>
                            <span>Formateur : {{ reservation.atelier.formateur }}</span>
                        </div>
                    </div>
                </div>
            </div>
            {% else %}
            <!-- Empty State -->
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <div class=\"w-20 h-20 rounded-full bg-secondary flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"calendar-x\" class=\"w-10 h-10 text-muted-foreground\"></i>
                </div>
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
                <a href=\"{{ path('app_reservation_ateliers') }}\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors\">
                    <i data-lucide=\"calendar\" class=\"w-5 h-5\"></i>
                    Decouvrir les ateliers
                </a>
            </div>
            {% endfor %}
        </div>
    </section>

    <!-- History Section -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-6\">Historique</h2>
            
            <div class=\"space-y-4\">
                {% for item in historique %}
                <div class=\"glass-card rounded-2xl p-4 opacity-60 hover:opacity-100 transition-opacity\">
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"w-12 h-12 rounded-xl bg-secondary flex items-center justify-center\">
                                <i data-lucide=\"check-circle\" class=\"w-6 h-6 text-accent\"></i>
                            </div>
                            <div>
                                <h4 class=\"font-medium\">{{ item.atelier.titre }}</h4>
                                <p class=\"text-sm text-muted-foreground\">{{ item.atelier.date }} • {{ item.atelier.type == 'soft' ? 'Soft Skill' : 'Hard Skill' }}</p>
                            </div>
                        </div>
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent\">
                            Termine
                        </span>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
</div>
{% endblock %}", "front/reservation/mes_reservations.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\front\\reservation\\mes_reservations.html.twig");
    }
}
