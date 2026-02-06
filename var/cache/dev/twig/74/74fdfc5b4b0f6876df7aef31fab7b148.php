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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvel") : ("Modifier"));
        yield " atelier - NOVAS Admin";
        
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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvel atelier") : ("Modifier l'atelier"));
        
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
        yield "<div class=\"max-w-5xl mx-auto\">
    <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-indigo-500/25 relative overflow-hidden\">
        <div class=\"absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 blur-3xl\"></div>
        <div class=\"relative flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"calendar-days\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">Détails de l'atelier</h2>
                <p class=\"text-indigo-100\">Créez une expérience d'apprentissage</p>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"space-y-6\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Titre <span class=\"text-rose-500\">*</span></label>
                        <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500 text-lg\" placeholder=\"ex: Maîtrise de Python\">
                    </div>

                    <div class=\"grid grid-cols-2 gap-4\">
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Type</label>
                            <div class=\"grid grid-cols-2 gap-3\">
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"type\" value=\"hard\" class=\"peer sr-only\" checked>
                                    <div class=\"p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-indigo-500 peer-checked:bg-indigo-50 dark:peer-checked:bg-indigo-900/20 text-center transition-all\">
                                        <i data-lucide=\"cpu\" class=\"w-6 h-6 mx-auto mb-2 text-indigo-500\"></i>
                                        <p class=\"font-semibold text-slate-900 dark:text-white\">Hard Skill</p>
                                    </div>
                                </label>
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"type\" value=\"soft\" class=\"peer sr-only\">
                                    <div class=\"p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-purple-500 peer-checked:bg-purple-50 dark:peer-checked:bg-purple-900/20 text-center transition-all\">
                                        <i data-lucide=\"heart-handshake\" class=\"w-6 h-6 mx-auto mb-2 text-purple-500\"></i>
                                        <p class=\"font-semibold text-slate-900 dark:text-white\">Soft Skill</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie</label>
                            <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                                <option>Programmation</option>
                                <option>Data Science</option>
                                <option>Communication</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                        <textarea rows=\"4\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500 resize-none\" placeholder=\"Décrivez l'atelier...\"></textarea>
                    </div>

                    <div class=\"grid grid-cols-3 gap-4\">
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Date</label>
                            <input type=\"date\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Heure</label>
                            <input type=\"time\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Durée</label>
                            <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                                <option>1 heure</option>
                                <option selected>2 heures</option>
                                <option>3 heures</option>
                                <option>Journée</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Capacité</h3>
                <div class=\"space-y-4\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Places disponibles</label>
                        <div class=\"flex items-center gap-4\">
                            <button type=\"button\" onclick=\"document.getElementById('places').value = Math.max(1, parseInt(document.getElementById('places').value) - 1)\" class=\"w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 flex items-center justify-center\"><i data-lucide=\"minus\" class=\"w-4 h-4\"></i></button>
                            <input type=\"number\" id=\"places\" value=\"20\" min=\"1\" max=\"100\" class=\"w-20 text-center px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500 text-2xl font-bold\">
                            <button type=\"button\" onclick=\"document.getElementById('places').value = Math.min(100, parseInt(document.getElementById('places').value) + 1)\" class=\"w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 flex items-center justify-center\"><i data-lucide=\"plus\" class=\"w-4 h-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Formateur</h3>
                <div class=\"space-y-4\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom</label>
                        <input type=\"text\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\" placeholder=\"Dr. Marie Dupont\">
                    </div>
                </div>
            </div>

            <div class=\"flex flex-col gap-3\">
                <button onclick=\"showToast('Atelier enregistré', 'success'); setTimeout(() => window.location.href = '";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
        yield "', 1500);\" class=\"w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium shadow-lg shadow-indigo-500/25 transition-all\">
                    ";
        // line 114
        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 114, $this->source); })()), "create")) : ("create")) == "create")) ? ("Créer l'atelier") : ("Enregistrer"));
        yield "
                </button>
                <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
        yield "\" class=\"w-full py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium text-center transition-colors\">
                    Annuler
                </a>
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
        return array (  265 => 116,  260 => 114,  256 => 113,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode|default('create') == 'create' ? 'Nouvel' : 'Modifier' }} atelier - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode|default('create') == 'create' ? 'Nouvel atelier' : 'Modifier l\\'atelier' }}{% endblock %}
{% block page_subtitle %}Programmer un événement de formation{% endblock %}

{% block body %}
<div class=\"max-w-5xl mx-auto\">
    <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-indigo-500/25 relative overflow-hidden\">
        <div class=\"absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 blur-3xl\"></div>
        <div class=\"relative flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"calendar-days\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">Détails de l'atelier</h2>
                <p class=\"text-indigo-100\">Créez une expérience d'apprentissage</p>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"space-y-6\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Titre <span class=\"text-rose-500\">*</span></label>
                        <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500 text-lg\" placeholder=\"ex: Maîtrise de Python\">
                    </div>

                    <div class=\"grid grid-cols-2 gap-4\">
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Type</label>
                            <div class=\"grid grid-cols-2 gap-3\">
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"type\" value=\"hard\" class=\"peer sr-only\" checked>
                                    <div class=\"p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-indigo-500 peer-checked:bg-indigo-50 dark:peer-checked:bg-indigo-900/20 text-center transition-all\">
                                        <i data-lucide=\"cpu\" class=\"w-6 h-6 mx-auto mb-2 text-indigo-500\"></i>
                                        <p class=\"font-semibold text-slate-900 dark:text-white\">Hard Skill</p>
                                    </div>
                                </label>
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"type\" value=\"soft\" class=\"peer sr-only\">
                                    <div class=\"p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-purple-500 peer-checked:bg-purple-50 dark:peer-checked:bg-purple-900/20 text-center transition-all\">
                                        <i data-lucide=\"heart-handshake\" class=\"w-6 h-6 mx-auto mb-2 text-purple-500\"></i>
                                        <p class=\"font-semibold text-slate-900 dark:text-white\">Soft Skill</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie</label>
                            <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                                <option>Programmation</option>
                                <option>Data Science</option>
                                <option>Communication</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                        <textarea rows=\"4\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500 resize-none\" placeholder=\"Décrivez l'atelier...\"></textarea>
                    </div>

                    <div class=\"grid grid-cols-3 gap-4\">
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Date</label>
                            <input type=\"date\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Heure</label>
                            <input type=\"time\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Durée</label>
                            <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\">
                                <option>1 heure</option>
                                <option selected>2 heures</option>
                                <option>3 heures</option>
                                <option>Journée</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Capacité</h3>
                <div class=\"space-y-4\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Places disponibles</label>
                        <div class=\"flex items-center gap-4\">
                            <button type=\"button\" onclick=\"document.getElementById('places').value = Math.max(1, parseInt(document.getElementById('places').value) - 1)\" class=\"w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 flex items-center justify-center\"><i data-lucide=\"minus\" class=\"w-4 h-4\"></i></button>
                            <input type=\"number\" id=\"places\" value=\"20\" min=\"1\" max=\"100\" class=\"w-20 text-center px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500 text-2xl font-bold\">
                            <button type=\"button\" onclick=\"document.getElementById('places').value = Math.min(100, parseInt(document.getElementById('places').value) + 1)\" class=\"w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 flex items-center justify-center\"><i data-lucide=\"plus\" class=\"w-4 h-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Formateur</h3>
                <div class=\"space-y-4\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom</label>
                        <input type=\"text\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-indigo-500\" placeholder=\"Dr. Marie Dupont\">
                    </div>
                </div>
            </div>

            <div class=\"flex flex-col gap-3\">
                <button onclick=\"showToast('Atelier enregistré', 'success'); setTimeout(() => window.location.href = '{{ path('app_admin_ateliers_list') }}', 1500);\" class=\"w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium shadow-lg shadow-indigo-500/25 transition-all\">
                    {{ mode|default('create') == 'create' ? 'Créer l\\'atelier' : 'Enregistrer' }}
                </button>
                <a href=\"{{ path('app_admin_ateliers_list') }}\" class=\"w-full py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium text-center transition-colors\">
                    Annuler
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/atelier/form.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\atelier\\form.html.twig");
    }
}
