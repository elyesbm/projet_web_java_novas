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

/* admin/atelier/form.html.twig */
class __TwigTemplate_c7e078c813ed909917d27b5679257786 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/form.html.twig"));

        $this->parent = $this->load("admin/base_admin.html.twig", 1);
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "create")) ? ("Nouvel atelier") : ("Modifier atelier"));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()) == "create")) ? ("Nouvel atelier") : ("Modifier l’atelier"));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_subtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        yield "Programmer un événement de formation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "max-w-5xl mx-auto"]]);
        yield "

<!-- HEADER -->
<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg\">
    <div class=\"flex items-center gap-4\">
        <div class=\"w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center\">
            <i data-lucide=\"calendar-days\" class=\"w-8 h-8\"></i>
        </div>
        <div>
            <h2 class=\"text-2xl font-bold\">Détails de l'atelier</h2>
            <p class=\"text-indigo-100\">Créez une expérience d'apprentissage</p>
        </div>
    </div>
</div>

<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

    <!-- COL GAUCHE -->
    <div class=\"lg:col-span-2 space-y-6\">

        <div class=\"bg-white rounded-2xl p-6 shadow\">
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "titre_atelier", [], "any", false, false, false, 29), 'row', ["label" => "Titre", "attr" => ["class" => "w-full px-4 py-3 rounded-xl border text-lg"]]);
        // line 32
        yield "

            <!-- CONTEXTE AVEC ICÔNES -->
            <label class=\"block mt-6 mb-2 font-medium\">Contexte</label>
            <div class=\"grid grid-cols-2 gap-4\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "contexte_atelier", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 38
            yield "                    <label class=\"cursor-pointer\">
                        ";
            // line 39
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "peer sr-only"]]);
            yield "
                        <div class=\"p-4 rounded-xl border-2 text-center
                            peer-checked:border-indigo-500 peer-checked:bg-indigo-50 transition\">
                            ";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42) == 1)) {
                // line 43
                yield "                                <i data-lucide=\"cpu\" class=\"w-6 h-6 mx-auto mb-2 text-indigo-500\"></i>
                                <strong>Hard Skill</strong>
                            ";
            } else {
                // line 46
                yield "                                <i data-lucide=\"heart-handshake\" class=\"w-6 h-6 mx-auto mb-2 text-purple-500\"></i>
                                <strong>Soft Skill</strong>
                            ";
            }
            // line 49
            yield "                        </div>
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </div>

            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type_atelier", [], "any", false, false, false, 54), 'row', ["label" => "Type", "attr" => ["class" => "w-full mt-6 px-4 py-3 rounded-xl border"]]);
        // line 57
        yield "

            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description_atelier", [], "any", false, false, false, 59), 'row', ["label" => "Description", "attr" => ["class" => "w-full px-4 py-3 rounded-xl border resize-none"]]);
        // line 62
        yield "

            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "date_atelier", [], "any", false, false, false, 64), 'row', ["label" => "Date", "attr" => ["class" => "w-full px-4 py-3 rounded-xl border"]]);
        // line 67
        yield "
        </div>
    </div>

    <!-- COL DROITE -->
    <div class=\"space-y-6\">

        <!-- CAPACITÉ (UN SEUL CHAMP ✅) -->
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Capacité</h3>
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "capacite", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "w-full px-4 py-3 rounded-xl border text-center text-xl font-bold"]]);
        // line 79
        yield "
        </div>

        <!-- IMAGE URL + PREVIEW -->
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Image (URL)</h3>
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "image_atelier", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "w-full px-4 py-3 rounded-xl border", "oninput" => "previewImage(this.value)"]]);
        // line 90
        yield "
            <img id=\"preview\" class=\"mt-4 rounded-xl hidden max-h-48 mx-auto\">
        </div>

        <!-- STATUT -->
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Statut</h3>
            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "statut_atelier", [], "any", false, false, false, 97), 'widget');
        yield "
        </div>

        <!-- ACTIONS -->
        <div class=\"flex flex-col gap-3\">
            <button type=\"submit\"
                class=\"w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium\">
                ";
        // line 104
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 104, $this->source); })()) == "create")) ? ("Créer l’atelier") : ("Enregistrer"));
        yield "
            </button>

            <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
        yield "\"
               class=\"w-full py-3 rounded-xl border text-center\">
                Annuler
            </a>
        </div>

    </div>
</div>

";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_end');
        yield "

<script>
function previewImage(url) {
    const img = document.getElementById('preview');
    if (!url) {
        img.classList.add('hidden');
        return;
    }
    img.src = url;
    img.classList.remove('hidden');
}
</script>
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
        return "admin/atelier/form.html.twig";
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
        return array (  293 => 116,  281 => 107,  275 => 104,  265 => 97,  256 => 90,  254 => 85,  246 => 79,  244 => 77,  232 => 67,  230 => 64,  226 => 62,  224 => 59,  220 => 57,  218 => 54,  214 => 52,  206 => 49,  201 => 46,  196 => 43,  194 => 42,  188 => 39,  185 => 38,  181 => 37,  174 => 32,  172 => 29,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode == 'create' ? 'Nouvel atelier' : 'Modifier atelier' }}{% endblock %}
{% block page_title %}{{ mode == 'create' ? 'Nouvel atelier' : 'Modifier l’atelier' }}{% endblock %}
{% block page_subtitle %}Programmer un événement de formation{% endblock %}

{% block body %}
{{ form_start(form, { attr: { class: 'max-w-5xl mx-auto' } }) }}

<!-- HEADER -->
<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg\">
    <div class=\"flex items-center gap-4\">
        <div class=\"w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center\">
            <i data-lucide=\"calendar-days\" class=\"w-8 h-8\"></i>
        </div>
        <div>
            <h2 class=\"text-2xl font-bold\">Détails de l'atelier</h2>
            <p class=\"text-indigo-100\">Créez une expérience d'apprentissage</p>
        </div>
    </div>
</div>

<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

    <!-- COL GAUCHE -->
    <div class=\"lg:col-span-2 space-y-6\">

        <div class=\"bg-white rounded-2xl p-6 shadow\">
            {{ form_row(form.titre_atelier, {
                label: 'Titre',
                attr: { class: 'w-full px-4 py-3 rounded-xl border text-lg' }
            }) }}

            <!-- CONTEXTE AVEC ICÔNES -->
            <label class=\"block mt-6 mb-2 font-medium\">Contexte</label>
            <div class=\"grid grid-cols-2 gap-4\">
                {% for child in form.contexte_atelier %}
                    <label class=\"cursor-pointer\">
                        {{ form_widget(child, { attr: { class: 'peer sr-only' } }) }}
                        <div class=\"p-4 rounded-xl border-2 text-center
                            peer-checked:border-indigo-500 peer-checked:bg-indigo-50 transition\">
                            {% if child.vars.value == 1 %}
                                <i data-lucide=\"cpu\" class=\"w-6 h-6 mx-auto mb-2 text-indigo-500\"></i>
                                <strong>Hard Skill</strong>
                            {% else %}
                                <i data-lucide=\"heart-handshake\" class=\"w-6 h-6 mx-auto mb-2 text-purple-500\"></i>
                                <strong>Soft Skill</strong>
                            {% endif %}
                        </div>
                    </label>
                {% endfor %}
            </div>

            {{ form_row(form.type_atelier, {
                label: 'Type',
                attr: { class: 'w-full mt-6 px-4 py-3 rounded-xl border' }
            }) }}

            {{ form_row(form.description_atelier, {
                label: 'Description',
                attr: { class: 'w-full px-4 py-3 rounded-xl border resize-none' }
            }) }}

            {{ form_row(form.date_atelier, {
                label: 'Date',
                attr: { class: 'w-full px-4 py-3 rounded-xl border' }
            }) }}
        </div>
    </div>

    <!-- COL DROITE -->
    <div class=\"space-y-6\">

        <!-- CAPACITÉ (UN SEUL CHAMP ✅) -->
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Capacité</h3>
            {{ form_widget(form.capacite, {
                attr: { class: 'w-full px-4 py-3 rounded-xl border text-center text-xl font-bold' }
            }) }}
        </div>

        <!-- IMAGE URL + PREVIEW -->
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Image (URL)</h3>
            {{ form_widget(form.image_atelier, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border',
                    oninput: 'previewImage(this.value)'
                }
            }) }}
            <img id=\"preview\" class=\"mt-4 rounded-xl hidden max-h-48 mx-auto\">
        </div>

        <!-- STATUT -->
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Statut</h3>
            {{ form_widget(form.statut_atelier) }}
        </div>

        <!-- ACTIONS -->
        <div class=\"flex flex-col gap-3\">
            <button type=\"submit\"
                class=\"w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium\">
                {{ mode == 'create' ? 'Créer l’atelier' : 'Enregistrer' }}
            </button>

            <a href=\"{{ path('app_admin_ateliers_list') }}\"
               class=\"w-full py-3 rounded-xl border text-center\">
                Annuler
            </a>
        </div>

    </div>
</div>

{{ form_end(form) }}

<script>
function previewImage(url) {
    const img = document.getElementById('preview');
    if (!url) {
        img.classList.add('hidden');
        return;
    }
    img.src = url;
    img.classList.remove('hidden');
}
</script>
{% endblock %}
", "admin/atelier/form.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\atelier\\form.html.twig");
    }
}
