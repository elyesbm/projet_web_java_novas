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
        // line 2
        return "front/base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/mes_reservations.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_mes", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Mes reservations
                </a>
                <a href=\"";
        // line 18
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
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 43, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">A venir</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 47, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Passes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 58
            yield "            ";
            $context["atelier"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 58);
            // line 59
            yield "            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">

                    ";
            // line 63
            yield "                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square rounded-2xl overflow-hidden bg-secondary\">
                            <img src=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 65, $this->source); })()), "imageAtelier", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 66, $this->source); })()), "titreAtelier", [], "any", false, false, false, 66), "html", null, true);
            yield "\"
                                 class=\"w-full h-full object-cover\">
                        </div>
                    </div>

                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 75
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 75, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 75) == 0)) ? ("bg-personal/20 text-personal") : ("bg-academic/20 text-academic"));
            yield "\">
                                        ";
            // line 76
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 76, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 76) == 0)) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 78
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutReservation", [], "any", false, false, false, 78) == 1)) ? ("bg-green-500/20 text-green-400") : ("bg-yellow-500/20 text-yellow-400"));
            yield "\">
                                        ";
            // line 79
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutReservation", [], "any", false, false, false, 79) == 1)) ? ("Confirmee") : ("En attente"));
            yield "
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 82, $this->source); })()), "titreAtelier", [], "any", false, false, false, 82), "html", null, true);
            yield "</h3>
                                <p class=\"text-sm text-muted-foreground\">
                                    Atelier du ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 84, $this->source); })()), "dateAtelier", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
            yield "
                                </p>
                            </div>

                            <div class=\"flex gap-2\">
                                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                                    QR Code
                                </button>
                                <form method=\"post\" action=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"inline\" onsubmit=\"return confirm('Annuler cette réservation ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("annuler" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 94))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-xl text-sm text-red-400 hover:bg-red-500/20 transition-colors flex items-center gap-2\">
                                        <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                                        Annuler
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"grid sm:grid-cols-2 gap-4\">
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Date atelier</p>
                                    <p class=\"text-sm font-medium\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 108, $this->source); })()), "dateAtelier", [], "any", false, false, false, 108), "d F Y"), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"tag\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Type</p>
                                    <p class=\"text-sm font-medium\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 115, $this->source); })()), "typeAtelier", [], "any", false, false, false, 115)), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>

                        ";
            // line 120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "commentaireReservation", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"message-square\" class=\"w-4 h-4\"></i>
                            <span>";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "commentaireReservation", [], "any", false, false, false, 123), "html", null, true);
                yield "</span>
                        </div>
                        ";
            }
            // line 126
            yield "                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 129
        if (!$context['_iterated']) {
            // line 130
            yield "            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "        </div>
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
        return array (  309 => 135,  299 => 130,  297 => 129,  290 => 126,  284 => 123,  280 => 121,  278 => 120,  270 => 115,  260 => 108,  243 => 94,  239 => 93,  227 => 84,  222 => 82,  216 => 79,  212 => 78,  207 => 76,  203 => 75,  191 => 66,  187 => 65,  183 => 63,  178 => 59,  175 => 58,  170 => 57,  157 => 47,  150 => 43,  122 => 18,  116 => 15,  109 => 11,  105 => 10,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
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
                <a href=\"{{ path('app_reservation_mes', { id: user.id }) }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Mes reservations
                </a>
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

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            {% for reservation in reservations %}
            {% set atelier = reservation.atelier %}
            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">

                    {# ==== IMAGE ATELIER VIA URL (CORRECTION ICI) ==== #}
                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square rounded-2xl overflow-hidden bg-secondary\">
                            <img src=\"{{ atelier.imageAtelier }}\"
                                 alt=\"{{ atelier.titreAtelier }}\"
                                 class=\"w-full h-full object-cover\">
                        </div>
                    </div>

                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ atelier.contexteAtelier == 0 ? 'bg-personal/20 text-personal' : 'bg-academic/20 text-academic' }}\">
                                        {{ atelier.contexteAtelier == 0 ? 'Soft Skill' : 'Hard Skill' }}
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ reservation.statutReservation == 1 ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400' }}\">
                                        {{ reservation.statutReservation == 1 ? 'Confirmee' : 'En attente' }}
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">{{ atelier.titreAtelier }}</h3>
                                <p class=\"text-sm text-muted-foreground\">
                                    Atelier du {{ atelier.dateAtelier|date('d/m/Y') }}
                                </p>
                            </div>

                            <div class=\"flex gap-2\">
                                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                                    QR Code
                                </button>
                                <form method=\"post\" action=\"{{ path('app_reservation_annuler', { id: reservation.id }) }}\" class=\"inline\" onsubmit=\"return confirm('Annuler cette réservation ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('annuler' ~ reservation.id) }}\">
                                    <button type=\"submit\" class=\"px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-xl text-sm text-red-400 hover:bg-red-500/20 transition-colors flex items-center gap-2\">
                                        <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                                        Annuler
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"grid sm:grid-cols-2 gap-4\">
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Date atelier</p>
                                    <p class=\"text-sm font-medium\">{{ atelier.dateAtelier|date('d F Y') }}</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"tag\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Type</p>
                                    <p class=\"text-sm font-medium\">{{ atelier.typeAtelier|capitalize }}</p>
                                </div>
                            </div>
                        </div>

                        {% if reservation.commentaireReservation %}
                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"message-square\" class=\"w-4 h-4\"></i>
                            <span>{{ reservation.commentaireReservation }}</span>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
            </div>
            {% endfor %}
        </div>
    </section>
</div>
{% endblock %}

", "front/reservation/mes_reservations.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\reservation\\mes_reservations.html.twig");
    }
}
