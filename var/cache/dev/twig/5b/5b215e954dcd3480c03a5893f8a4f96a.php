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
        // line 1
        return "front/base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/reserver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/reserver.html.twig"));

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

        yield "Reserver - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 3, $this->source); })()), "titreAtelier", [], "any", false, false, false, 3), "html", null, true);
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
        yield "<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 right-0 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    <div class=\"absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent/10 rounded-full blur-[100px]\"></div>

    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ateliers");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux ateliers</span>
            </a>

            <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
            </div>
        </div>
    </nav>

    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"grid lg:grid-cols-2 gap-12\">

                ";
        // line 29
        yield "                <div class=\"space-y-6\">
                    <div class=\"glass-card rounded-3xl overflow-hidden\">
                        <div class=\"relative h-64\">
                            ";
        // line 33
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 33, $this->source); })()), "imageAtelier", [], "any", false, false, false, 33), "html", null, true);
        yield "\"
                                 alt=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 34, $this->source); })()), "titreAtelier", [], "any", false, false, false, 34), "html", null, true);
        yield "\"
                                 class=\"w-full h-full object-cover\">

                            <div class=\"absolute inset-0 bg-gradient-to-t from-background to-transparent\"></div>

                            <div class=\"absolute top-4 left-4\">
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium
                                    ";
        // line 41
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 41, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 41) == 0)) ? ("bg-personal/90 text-white") : ("bg-academic/90 text-white"));
        // line 43
        yield "\">
                                    ";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 44, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 44) == 0)) ? ("Soft Skill") : ("Hard Skill"));
        yield "
                                </span>
                            </div>
                        </div>

                        <div class=\"p-6\">
                            <div class=\"text-xs text-muted-foreground mb-3\">
                                ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 51, $this->source); })()), "typeAtelier", [], "any", false, false, false, 51), "html", null, true);
        yield "
                            </div>

                            <h1 class=\"font-serif text-2xl font-medium mb-4\">
                                ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 55, $this->source); })()), "titreAtelier", [], "any", false, false, false, 55), "html", null, true);
        yield "
                            </h1>

                            <p class=\"text-muted-foreground mb-6\">
                                ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 59, $this->source); })()), "descriptionAtelier", [], "any", false, false, false, 59), "html", null, true);
        yield "
                            </p>

                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <span>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 64, $this->source); })()), "dateAtelier", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"glass-card rounded-2xl p-4 border border-yellow-500/30 bg-yellow-500/10\">
                        <div class=\"flex items-start gap-3\">
                            <i data-lucide=\"alert-circle\" class=\"w-5 h-5 text-yellow-500 mt-0.5\"></i>
                            <div>
                                <p class=\"text-sm font-medium text-yellow-500\">Places limitées</p>
                                <p class=\"text-xs text-muted-foreground mt-1\">
                                    ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 75, $this->source); })()), "capacite", [], "any", false, false, false, 75) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 75, $this->source); })()), "reservations", [], "any", false, false, false, 75))), "html", null, true);
        yield "
                                    places restantes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 84
        yield "                <div>
                    <div class=\"glass-card rounded-3xl p-8 sticky top-32\">
                        <h2 class=\"font-serif text-xl font-medium mb-6\">
                            Formulaire de réservation
                        </h2>

                        <form method=\"post\" class=\"space-y-5\">
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "_token", [], "any", false, false, false, 91), 'row');
        yield "

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Nom</label>
                                <input type=\"text\"
                                       name=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "nom_user", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "full_name", [], "any", false, false, false, 96), "html", null, true);
        yield "\"
                                       value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "nom_user", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97), "html", null, true);
        yield "\"
                                       required
                                       class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4\">
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Email</label>
                                <input type=\"email\"
                                       name=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "email_user", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "full_name", [], "any", false, false, false, 105), "html", null, true);
        yield "\"
                                       value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "email_user", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
        yield "\"
                                       required
                                       class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4\">
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Commentaire</label>
                                <textarea name=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "commentaire_reservation", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "full_name", [], "any", false, false, false, 113), "html", null, true);
        yield "\"
                                          rows=\"3\"
                                          class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 resize-none\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "commentaire_reservation", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115), "html", null, true);
        yield "</textarea>
                            </div>

                            ";
        // line 119
        yield "                            <label class=\"flex items-start gap-3 cursor-pointer group\">
                                <input type=\"checkbox\"
                                       required
                                       class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary focus:ring-offset-0\">
                                <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                                    Je m'engage à être présent à l'atelier ou à prévenir en cas d'empêchement.
                                </span>
                            </label>

                            <button type=\"submit\"
                                    class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                                Confirmer ma réservation
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
        return array (  268 => 119,  262 => 115,  257 => 113,  247 => 106,  243 => 105,  232 => 97,  228 => 96,  220 => 91,  211 => 84,  200 => 75,  186 => 64,  178 => 59,  171 => 55,  164 => 51,  154 => 44,  151 => 43,  149 => 41,  139 => 34,  134 => 33,  129 => 29,  111 => 13,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Reserver - {{ atelier.titreAtelier }} - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 right-0 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    <div class=\"absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent/10 rounded-full blur-[100px]\"></div>

    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_ateliers') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux ateliers</span>
            </a>

            <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
            </div>
        </div>
    </nav>

    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"grid lg:grid-cols-2 gap-12\">

                {# ================= ATELIER ================= #}
                <div class=\"space-y-6\">
                    <div class=\"glass-card rounded-3xl overflow-hidden\">
                        <div class=\"relative h-64\">
                            {# ✅ IMAGE VIA URL (CORRECTION ICI UNIQUEMENT) #}
                            <img src=\"{{ atelier.imageAtelier }}\"
                                 alt=\"{{ atelier.titreAtelier }}\"
                                 class=\"w-full h-full object-cover\">

                            <div class=\"absolute inset-0 bg-gradient-to-t from-background to-transparent\"></div>

                            <div class=\"absolute top-4 left-4\">
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium
                                    {{ atelier.contexteAtelier == 0
                                        ? 'bg-personal/90 text-white'
                                        : 'bg-academic/90 text-white' }}\">
                                    {{ atelier.contexteAtelier == 0 ? 'Soft Skill' : 'Hard Skill' }}
                                </span>
                            </div>
                        </div>

                        <div class=\"p-6\">
                            <div class=\"text-xs text-muted-foreground mb-3\">
                                {{ atelier.typeAtelier }}
                            </div>

                            <h1 class=\"font-serif text-2xl font-medium mb-4\">
                                {{ atelier.titreAtelier }}
                            </h1>

                            <p class=\"text-muted-foreground mb-6\">
                                {{ atelier.descriptionAtelier }}
                            </p>

                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <span>{{ atelier.dateAtelier|date('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"glass-card rounded-2xl p-4 border border-yellow-500/30 bg-yellow-500/10\">
                        <div class=\"flex items-start gap-3\">
                            <i data-lucide=\"alert-circle\" class=\"w-5 h-5 text-yellow-500 mt-0.5\"></i>
                            <div>
                                <p class=\"text-sm font-medium text-yellow-500\">Places limitées</p>
                                <p class=\"text-xs text-muted-foreground mt-1\">
                                    {{ atelier.capacite - atelier.reservations|length }}
                                    places restantes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {# ================= FORMULAIRE ================= #}
                <div>
                    <div class=\"glass-card rounded-3xl p-8 sticky top-32\">
                        <h2 class=\"font-serif text-xl font-medium mb-6\">
                            Formulaire de réservation
                        </h2>

                        <form method=\"post\" class=\"space-y-5\">
                            {{ form_row(form._token) }}

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Nom</label>
                                <input type=\"text\"
                                       name=\"{{ form.nom_user.vars.full_name }}\"
                                       value=\"{{ form.nom_user.vars.value }}\"
                                       required
                                       class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4\">
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Email</label>
                                <input type=\"email\"
                                       name=\"{{ form.email_user.vars.full_name }}\"
                                       value=\"{{ form.email_user.vars.value }}\"
                                       required
                                       class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4\">
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Commentaire</label>
                                <textarea name=\"{{ form.commentaire_reservation.vars.full_name }}\"
                                          rows=\"3\"
                                          class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 resize-none\">{{ form.commentaire_reservation.vars.value }}</textarea>
                            </div>

                            {# ✅ CHECKBOX DE CONFIRMATION (AJOUTÉE) #}
                            <label class=\"flex items-start gap-3 cursor-pointer group\">
                                <input type=\"checkbox\"
                                       required
                                       class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary focus:ring-offset-0\">
                                <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                                    Je m'engage à être présent à l'atelier ou à prévenir en cas d'empêchement.
                                </span>
                            </label>

                            <button type=\"submit\"
                                    class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                                Confirmer ma réservation
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{% endblock %}
", "front/reservation/reserver.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\reservation\\reserver.html.twig");
    }
}
