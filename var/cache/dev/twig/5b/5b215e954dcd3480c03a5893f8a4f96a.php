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

/* front/reservation/reserver.html.twig */
class __TwigTemplate_a0a4e93ad11a29134f211d69cab6a600 extends Template
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
        // line 2
        return "front/base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/reserver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/reserver.html.twig"));

        $this->parent = $this->load("front/base_home.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
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

        // line 7
        yield "<div class=\"min-h-screen bg-background\">
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>

            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ateliers");
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les ateliers
                </a>
            </div>
        </div>
    </nav>

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

                <div class=\"flex gap-4\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 40, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">A venir</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 44, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Passes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex gap-2 p-1 bg-secondary/50 rounded-xl w-fit\">
                <button class=\"px-6 py-2.5 rounded-lg bg-primary text-white text-sm font-medium shadow-lg shadow-primary/25\">
                    A venir (";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 56, $this->source); })())), "html", null, true);
        yield ")
                </button>
                <button class=\"px-6 py-2.5 rounded-lg text-sm text-muted-foreground hover:text-foreground hover:bg-white/5 transition-colors\">
                    Historique (";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 59, $this->source); })())), "html", null, true);
        yield ")
                </button>
            </div>
        </div>
    </section>

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 67, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 68
            yield "            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">
                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square bg-white rounded-2xl p-4 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <i data-lucide=\"qr-code\" class=\"w-24 h-24 text-foreground mx-auto mb-2\"></i>
                                <p class=\"text-xs text-muted-foreground font-mono\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "qr_code", [], "any", false, false, false, 74), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 83
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 83), "type", [], "any", false, false, false, 83) == "soft")) ? ("bg-personal/20 text-personal") : ("bg-academic/20 text-academic"));
            yield "\">
                                        ";
            // line 84
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 84), "type", [], "any", false, false, false, 84) == "soft")) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 86
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 86) == "confirmee")) ? ("bg-green-500/20 text-green-400") : ("bg-yellow-500/20 text-yellow-400"));
            yield "\">
                                        ";
            // line 87
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 87) == "confirmee")) ? ("Confirmee") : ("En attente"));
            yield "
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 90), "titre", [], "any", false, false, false, 90), "html", null, true);
            yield "</h3>
                                <p class=\"text-sm text-muted-foreground\">Reserve le ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date_reservation", [], "any", false, false, false, 91), "html", null, true);
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
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 111), "date", [], "any", false, false, false, 111), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Horaire</p>
                                    <p class=\"text-sm font-medium\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 118), "heure", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"map-pin\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Lieu</p>
                                    <p class=\"text-sm font-medium\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 125), "lieu", [], "any", false, false, false, 125), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"user\" class=\"w-4 h-4\"></i>
                            <span>Formateur : ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 132), "formateur", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 137
        if (!$context['_iterated']) {
            // line 138
            yield "            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <div class=\"w-20 h-20 rounded-full bg-secondary flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"calendar-x\" class=\"w-10 h-10 text-muted-foreground\"></i>
                </div>
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
                <a href=\"";
            // line 144
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ateliers");
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
        // line 150
        yield "        </div>
    </section>

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-6\">Historique</h2>

            <div class=\"space-y-4\">
                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 159
            yield "                <div class=\"glass-card rounded-2xl p-4 opacity-60 hover:opacity-100 transition-opacity\">
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"w-12 h-12 rounded-xl bg-secondary flex items-center justify-center\">
                                <i data-lucide=\"check-circle\" class=\"w-6 h-6 text-accent\"></i>
                            </div>
                            <div>
                                <h4 class=\"font-medium\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "atelier", [], "any", false, false, false, 166), "titre", [], "any", false, false, false, 166), "html", null, true);
            yield "</h4>
                                <p class=\"text-sm text-muted-foreground\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "atelier", [], "any", false, false, false, 167), "date", [], "any", false, false, false, 167), "html", null, true);
            yield " • ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "atelier", [], "any", false, false, false, 167), "type", [], "any", false, false, false, 167) == "soft")) ? ("Soft Skill") : ("Hard Skill"));
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
        // line 176
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
        return "front/reservation/reserver.html.twig";
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
        return array (  360 => 176,  343 => 167,  339 => 166,  330 => 159,  326 => 158,  316 => 150,  304 => 144,  296 => 138,  294 => 137,  284 => 132,  274 => 125,  264 => 118,  254 => 111,  231 => 91,  227 => 90,  221 => 87,  217 => 86,  212 => 84,  208 => 83,  196 => 74,  188 => 68,  183 => 67,  172 => 59,  166 => 56,  151 => 44,  144 => 40,  116 => 15,  109 => 11,  105 => 10,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'front/base_home.html.twig' %}

{% block title %}Mes Reservations - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>

            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_ateliers') }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les ateliers
                </a>
            </div>
        </div>
    </nav>

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

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            {% for reservation in reservations %}
            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">
                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square bg-white rounded-2xl p-4 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <i data-lucide=\"qr-code\" class=\"w-24 h-24 text-foreground mx-auto mb-2\"></i>
                                <p class=\"text-xs text-muted-foreground font-mono\">{{ reservation.qr_code }}</p>
                            </div>
                        </div>
                    </div>

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
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <div class=\"w-20 h-20 rounded-full bg-secondary flex items-center justify-center mx-auto mb-4\">
                    <i data-lucide=\"calendar-x\" class=\"w-10 h-10 text-muted-foreground\"></i>
                </div>
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
                <a href=\"{{ path('app_ateliers') }}\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors\">
                    <i data-lucide=\"calendar\" class=\"w-5 h-5\"></i>
                    Decouvrir les ateliers
                </a>
            </div>
            {% endfor %}
        </div>
    </section>

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
{% endblock %}
", "front/reservation/reserver.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\reservation\\reserver.html.twig");
    }
}
