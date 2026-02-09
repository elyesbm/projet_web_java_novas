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
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>
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
                        Reservez votre place dans nos ateliers exclusifs et developpez vos competences.
                    </p>
                </div>

                <div class=\"flex gap-6\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 35, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Ateliers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ateliers Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">

                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 49
            yield "                ";
            $context["places_restantes"] = (CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 49) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "reservations", [], "any", false, false, false, 49)));
            // line 50
            yield "                ";
            $context["image_src"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["atelier"], "imageAtelier", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 52
$context["atelier"], "imageAtelier", [], "any", false, false, false, 52)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? (CoreExtension::getAttribute($this->env, $this->source,             // line 53
$context["atelier"], "imageAtelier", [], "any", false, false, false, 53)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source,             // line 54
$context["atelier"], "imageAtelier", [], "any", false, false, false, 54)))))) : (null));
            // line 57
            yield "
                <div class=\"group glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all duration-500 hover:-translate-y-2\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        ";
            // line 61
            if ((($tmp = (isset($context["image_src"]) || array_key_exists("image_src", $context) ? $context["image_src"] : (function () { throw new RuntimeError('Variable "image_src" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_src"]) || array_key_exists("image_src", $context) ? $context["image_src"] : (function () { throw new RuntimeError('Variable "image_src" does not exist.', 62, $this->source); })()), "html", null, true);
                yield "\"
                                 alt=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titreAtelier", [], "any", false, false, false, 63), "html", null, true);
                yield "\"
                                 class=\"w-full h-full object-cover group-hover:scale-110 transition-transform duration-700\">
                        ";
            } else {
                // line 66
                yield "                            <div class=\"w-full h-full bg-secondary flex items-center justify-center\">
                                <i data-lucide=\"image\" class=\"w-16 h-16 text-muted-foreground\"></i>
                            </div>
                        ";
            }
            // line 70
            yield "
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent\"></div>

                        <div class=\"absolute top-4 left-4\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium
                                ";
            // line 75
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "contexteAtelier", [], "any", false, false, false, 75) == 0)) ? ("bg-personal/90 text-white") : ("bg-academic/90 text-white"));
            // line 77
            yield "\">
                                ";
            // line 78
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "contexteAtelier", [], "any", false, false, false, 78) == 0)) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                            </span>
                        </div>

                        <div class=\"absolute top-4 right-4 glass-card px-3 py-1 rounded-full\">
                            <span class=\"text-xs font-medium ";
            // line 83
            yield ((((isset($context["places_restantes"]) || array_key_exists("places_restantes", $context) ? $context["places_restantes"] : (function () { throw new RuntimeError('Variable "places_restantes" does not exist.', 83, $this->source); })()) < 5)) ? ("text-red-400") : ("text-foreground"));
            yield "\">
                                ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["places_restantes"]) || array_key_exists("places_restantes", $context) ? $context["places_restantes"] : (function () { throw new RuntimeError('Variable "places_restantes" does not exist.', 84, $this->source); })()), "html", null, true);
            yield " places
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class=\"p-6\">
                        <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-3\">
                            <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "typeAtelier", [], "any", false, false, false, 93)), "html", null, true);
            yield "
                        </div>

                        <h3 class=\"text-xl font-semibold mb-3 group-hover:text-primary transition-colors\">
                            ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titreAtelier", [], "any", false, false, false, 97), "html", null, true);
            yield "
                        </h3>

                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">
                            ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "descriptionAtelier", [], "any", false, false, false, 101), "html", null, true);
            yield "
                        </p>

                        <div class=\"flex items-center gap-3 text-sm text-muted-foreground mb-6\">
                            <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                            ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "dateAtelier", [], "any", false, false, false, 106), "d F Y"), "html", null, true);
            yield "
                        </div>

                        <!-- Progress -->
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between text-xs mb-2\">
                                <span class=\"text-muted-foreground\">Places reservees</span>
                                <span>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "reservations", [], "any", false, false, false, 113)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 113), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-primary rounded-full\"
                                     style=\"width: ";
            // line 117
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 117) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 118
$context["atelier"], "reservations", [], "any", false, false, false, 118)) / CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 118)) * 100)), "html", null, true)) : (0));
            // line 119
            yield "%\">
                                </div>
                            </div>
                        </div>

                        <!-- ACTION (DEV MODE – USER FIXE) -->
                        ";
            // line 125
            if (((isset($context["places_restantes"]) || array_key_exists("places_restantes", $context) ? $context["places_restantes"] : (function () { throw new RuntimeError('Variable "places_restantes" does not exist.', 125, $this->source); })()) > 0)) {
                // line 126
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 126), "userId" => 1]), "html", null, true);
                yield "\"
                               class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                                <span>Reserver ma place</span>
                                <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                            </a>
                        ";
            } else {
                // line 132
                yield "                            <span class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary/50 text-white rounded-xl font-medium cursor-not-allowed opacity-75\">
                                <i data-lucide=\"x-circle\" class=\"w-5 h-5\"></i>
                                Complet
                            </span>
                        ";
            }
            // line 137
            yield "                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "
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
        return array (  307 => 140,  299 => 137,  292 => 132,  282 => 126,  280 => 125,  272 => 119,  270 => 118,  269 => 117,  260 => 113,  250 => 106,  242 => 101,  235 => 97,  228 => 93,  216 => 84,  212 => 83,  204 => 78,  201 => 77,  199 => 75,  192 => 70,  186 => 66,  180 => 63,  175 => 62,  173 => 61,  167 => 57,  165 => 54,  164 => 53,  163 => 52,  162 => 51,  160 => 50,  157 => 49,  153 => 48,  137 => 35,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>
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
                        Reservez votre place dans nos ateliers exclusifs et developpez vos competences.
                    </p>
                </div>

                <div class=\"flex gap-6\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">{{ ateliers|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Ateliers</p>
                    </div>
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
                {% set image_src =
                    atelier.imageAtelier
                    ? (atelier.imageAtelier starts with 'http'
                        ? atelier.imageAtelier
                        : asset('images/' ~ atelier.imageAtelier))
                    : null
                %}

                <div class=\"group glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all duration-500 hover:-translate-y-2\">
                    <!-- Image -->
                    <div class=\"relative h-48 overflow-hidden\">
                        {% if image_src %}
                            <img src=\"{{ image_src }}\"
                                 alt=\"{{ atelier.titreAtelier }}\"
                                 class=\"w-full h-full object-cover group-hover:scale-110 transition-transform duration-700\">
                        {% else %}
                            <div class=\"w-full h-full bg-secondary flex items-center justify-center\">
                                <i data-lucide=\"image\" class=\"w-16 h-16 text-muted-foreground\"></i>
                            </div>
                        {% endif %}

                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent\"></div>

                        <div class=\"absolute top-4 left-4\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium
                                {{ atelier.contexteAtelier == 0
                                    ? 'bg-personal/90 text-white'
                                    : 'bg-academic/90 text-white' }}\">
                                {{ atelier.contexteAtelier == 0 ? 'Soft Skill' : 'Hard Skill' }}
                            </span>
                        </div>

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

                        <h3 class=\"text-xl font-semibold mb-3 group-hover:text-primary transition-colors\">
                            {{ atelier.titreAtelier }}
                        </h3>

                        <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">
                            {{ atelier.descriptionAtelier }}
                        </p>

                        <div class=\"flex items-center gap-3 text-sm text-muted-foreground mb-6\">
                            <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                            {{ atelier.dateAtelier|date('d F Y') }}
                        </div>

                        <!-- Progress -->
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between text-xs mb-2\">
                                <span class=\"text-muted-foreground\">Places reservees</span>
                                <span>{{ atelier.reservations|length }}/{{ atelier.capacite }}</span>
                            </div>
                            <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-primary rounded-full\"
                                     style=\"width: {{ atelier.capacite > 0
                                         ? ((atelier.reservations|length / atelier.capacite) * 100)|round
                                         : 0 }}%\">
                                </div>
                            </div>
                        </div>

                        <!-- ACTION (DEV MODE – USER FIXE) -->
                        {% if places_restantes > 0 %}
                            <a href=\"{{ path('app_reservation_reserver', { id: atelier.id, userId: 1 }) }}\"
                               class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
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
</div>
{% endblock %}
", "front/reservation/ateliers.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\reservation\\ateliers.html.twig");
    }
}
