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
                            <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 32, $this->source); })()), "imageAtelier", [], "any", false, false, false, 32), "html", null, true);
        yield "\"
                                 alt=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 33, $this->source); })()), "titreAtelier", [], "any", false, false, false, 33), "html", null, true);
        yield "\"
                                 class=\"w-full h-full object-cover\">

                            <div class=\"absolute inset-0 bg-gradient-to-t from-background to-transparent\"></div>

                            <div class=\"absolute top-4 left-4\">
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium
                                    ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 40, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 40) == 0)) ? ("bg-personal/90 text-white") : ("bg-academic/90 text-white"));
        // line 42
        yield "\">
                                    ";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 43, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 43) == 0)) ? ("Soft Skill") : ("Hard Skill"));
        yield "
                                </span>
                            </div>
                        </div>

                        <div class=\"p-6\">
                            <div class=\"text-xs text-muted-foreground mb-3\">
                                ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 50, $this->source); })()), "typeAtelier", [], "any", false, false, false, 50), "html", null, true);
        yield "
                            </div>

                            <h1 class=\"font-serif text-2xl font-medium mb-4\">
                                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 54, $this->source); })()), "titreAtelier", [], "any", false, false, false, 54), "html", null, true);
        yield "
                            </h1>

                            <p class=\"text-muted-foreground mb-6\">
                                ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 58, $this->source); })()), "descriptionAtelier", [], "any", false, false, false, 58), "html", null, true);
        yield "
                            </p>

                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <span>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 63, $this->source); })()), "dateAtelier", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 70
        yield "                <div>
                    <div class=\"glass-card rounded-3xl p-8 sticky top-32\">
                        <h2 class=\"font-serif text-xl font-medium mb-6\">
                            Formulaire de réservation
                        </h2>

                        ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["class" => "space-y-5", "novalidate" => "novalidate"]]);
        // line 82
        yield "

                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "_token", [], "any", false, false, false, 84), 'row');
        yield "

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Nom</label>
                                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "nom_user", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "w-full h-12 bg-secondary border border-white/10 rounded-xl px-4"]]);
        // line 92
        yield "
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "nom_user", [], "any", false, false, false, 93), 'errors');
        yield "
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Email</label>
                                ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email_user", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "w-full h-12 bg-secondary border border-white/10 rounded-xl px-4"]]);
        // line 102
        yield "
                                ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "email_user", [], "any", false, false, false, 103), 'errors');
        yield "
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Commentaire</label>
                                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "commentaire_reservation", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "w-full bg-secondary border border-white/10 rounded-xl p-4 resize-none", "rows" => 3]]);
        // line 113
        yield "
                                ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "commentaire_reservation", [], "any", false, false, false, 114), 'errors');
        yield "
                            </div>

                            ";
        // line 118
        yield "                            <label class=\"flex items-start gap-3 cursor-pointer group\">
                                <input type=\"checkbox\"
                                       class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary\">
                                <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                                    Je m'engage à être présent à l'atelier ou à prévenir en cas d'empêchement.
                                </span>
                            </label>

                            <button type=\"submit\"
                                    class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                                Confirmer ma réservation
                            </button>

                        ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "
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
        return array (  267 => 131,  252 => 118,  246 => 114,  243 => 113,  241 => 108,  233 => 103,  230 => 102,  228 => 98,  220 => 93,  217 => 92,  215 => 88,  208 => 84,  204 => 82,  202 => 76,  194 => 70,  185 => 63,  177 => 58,  170 => 54,  163 => 50,  153 => 43,  150 => 42,  148 => 40,  138 => 33,  134 => 32,  129 => 29,  111 => 13,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
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
                </div>

                {# ================= FORMULAIRE ================= #}
                <div>
                    <div class=\"glass-card rounded-3xl p-8 sticky top-32\">
                        <h2 class=\"font-serif text-xl font-medium mb-6\">
                            Formulaire de réservation
                        </h2>

                        {{ form_start(form, {
                            method: 'POST',
                            attr: {
                                class: 'space-y-5',
                                novalidate: 'novalidate'
                            }
                        }) }}

                            {{ form_row(form._token) }}

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Nom</label>
                                {{ form_widget(form.nom_user, {
                                    attr: {
                                        class: 'w-full h-12 bg-secondary border border-white/10 rounded-xl px-4'
                                    }
                                }) }}
                                {{ form_errors(form.nom_user) }}
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Email</label>
                                {{ form_widget(form.email_user, {
                                    attr: {
                                        class: 'w-full h-12 bg-secondary border border-white/10 rounded-xl px-4'
                                    }
                                }) }}
                                {{ form_errors(form.email_user) }}
                            </div>

                            <div>
                                <label class=\"block text-sm font-medium mb-2\">Commentaire</label>
                                {{ form_widget(form.commentaire_reservation, {
                                    attr: {
                                        class: 'w-full bg-secondary border border-white/10 rounded-xl p-4 resize-none',
                                        rows: 3
                                    }
                                }) }}
                                {{ form_errors(form.commentaire_reservation) }}
                            </div>

                            {# Checkbox informative UNIQUEMENT #}
                            <label class=\"flex items-start gap-3 cursor-pointer group\">
                                <input type=\"checkbox\"
                                       class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary\">
                                <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                                    Je m'engage à être présent à l'atelier ou à prévenir en cas d'empêchement.
                                </span>
                            </label>

                            <button type=\"submit\"
                                    class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                                Confirmer ma réservation
                            </button>

                        {{ form_end(form) }}
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
