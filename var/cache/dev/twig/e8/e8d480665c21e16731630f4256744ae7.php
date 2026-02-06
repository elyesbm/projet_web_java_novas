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

/* admin/jobs/form.html.twig */
class __TwigTemplate_9c3e611917283fed4e678c774162030e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jobs/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jobs/form.html.twig"));

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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvelle") : ("Modifier"));
        yield " offre - NOVAS Admin";
        
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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvelle offre") : ("Modifier l'offre"));
        
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

        yield "Détails de l'offre d'emploi";
        
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
    <div class=\"bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-amber-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"briefcase\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">Détails de l'offre</h2>
                <p class=\"text-amber-100\">Attirez les meilleurs candidats</p>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"space-y-6\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Titre <span class=\"text-rose-500\">*</span></label>
                        <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500 text-lg\" placeholder=\"ex: Tutorat Mathématiques L1-L2\">
                    </div>

                    <div class=\"grid grid-cols-2 gap-4\">
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie</label>
                            <div class=\"grid grid-cols-3 gap-2\">
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"categorie\" value=\"tutorat\" class=\"peer sr-only\" checked>
                                    <div class=\"p-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-amber-500 peer-checked:bg-amber-50 dark:peer-checked:bg-amber-900/20 text-center transition-all\">
                                        <i data-lucide=\"book-open\" class=\"w-5 h-5 mx-auto mb-1 text-amber-500\"></i>
                                        <span class=\"text-xs font-medium\">Tutorat</span>
                                    </div>
                                </label>
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"categorie\" value=\"aide\" class=\"peer sr-only\">
                                    <div class=\"p-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-amber-500 peer-checked:bg-amber-50 dark:peer-checked:bg-amber-900/20 text-center transition-all\">
                                        <i data-lucide=\"help-circle\" class=\"w-5 h-5 mx-auto mb-1 text-amber-500\"></i>
                                        <span class=\"text-xs font-medium\">Aide</span>
                                    </div>
                                </label>
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"categorie\" value=\"creation\" class=\"peer sr-only\">
                                    <div class=\"p-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-amber-500 peer-checked:bg-amber-50 dark:peer-checked:bg-amber-900/20 text-center transition-all\">
                                        <i data-lucide=\"lightbulb\" class=\"w-5 h-5 mx-auto mb-1 text-amber-500\"></i>
                                        <span class=\"text-xs font-medium\">Création</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Lieu</label>
                            <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500\">
                                <option>Sur le campus</option>
                                <option>En ligne</option>
                                <option>À domicile</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                        <textarea rows=\"5\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500 resize-none\" placeholder=\"Décrivez la mission...\"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Rémunération</h3>
                <div class=\"space-y-4\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Tarif horaire</label>
                        <div class=\"relative\">
                            <input type=\"number\" min=\"0\" step=\"0.50\" class=\"w-full pl-4 pr-12 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500 text-2xl font-bold text-amber-600\" placeholder=\"25\">
                            <span class=\"absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 font-medium\">€/h</span>
                        </div>
                    </div>
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Durée estimée</label>
                        <input type=\"text\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500\" placeholder=\"ex: 2h/semaine\">
                    </div>
                </div>
            </div>

            <div class=\"flex flex-col gap-3\">
                <button onclick=\"showToast('Offre enregistrée', 'success'); setTimeout(() => window.location.href = '";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_jobs_list");
        yield "', 1500);\" class=\"w-full py-3 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 hover:to-orange-700 text-white font-medium shadow-lg shadow-amber-500/25 transition-all\">
                    ";
        // line 93
        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 93, $this->source); })()), "create")) : ("create")) == "create")) ? ("Publier l'offre") : ("Enregistrer"));
        yield "
                </button>
                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_jobs_list");
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
        return "admin/jobs/form.html.twig";
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
        return array (  244 => 95,  239 => 93,  235 => 92,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode|default('create') == 'create' ? 'Nouvelle' : 'Modifier' }} offre - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode|default('create') == 'create' ? 'Nouvelle offre' : 'Modifier l\\'offre' }}{% endblock %}
{% block page_subtitle %}Détails de l'offre d'emploi{% endblock %}

{% block body %}
<div class=\"max-w-5xl mx-auto\">
    <div class=\"bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-amber-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"briefcase\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">Détails de l'offre</h2>
                <p class=\"text-amber-100\">Attirez les meilleurs candidats</p>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"space-y-6\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Titre <span class=\"text-rose-500\">*</span></label>
                        <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500 text-lg\" placeholder=\"ex: Tutorat Mathématiques L1-L2\">
                    </div>

                    <div class=\"grid grid-cols-2 gap-4\">
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie</label>
                            <div class=\"grid grid-cols-3 gap-2\">
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"categorie\" value=\"tutorat\" class=\"peer sr-only\" checked>
                                    <div class=\"p-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-amber-500 peer-checked:bg-amber-50 dark:peer-checked:bg-amber-900/20 text-center transition-all\">
                                        <i data-lucide=\"book-open\" class=\"w-5 h-5 mx-auto mb-1 text-amber-500\"></i>
                                        <span class=\"text-xs font-medium\">Tutorat</span>
                                    </div>
                                </label>
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"categorie\" value=\"aide\" class=\"peer sr-only\">
                                    <div class=\"p-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-amber-500 peer-checked:bg-amber-50 dark:peer-checked:bg-amber-900/20 text-center transition-all\">
                                        <i data-lucide=\"help-circle\" class=\"w-5 h-5 mx-auto mb-1 text-amber-500\"></i>
                                        <span class=\"text-xs font-medium\">Aide</span>
                                    </div>
                                </label>
                                <label class=\"cursor-pointer\">
                                    <input type=\"radio\" name=\"categorie\" value=\"creation\" class=\"peer sr-only\">
                                    <div class=\"p-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-amber-500 peer-checked:bg-amber-50 dark:peer-checked:bg-amber-900/20 text-center transition-all\">
                                        <i data-lucide=\"lightbulb\" class=\"w-5 h-5 mx-auto mb-1 text-amber-500\"></i>
                                        <span class=\"text-xs font-medium\">Création</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class=\"space-y-2\">
                            <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Lieu</label>
                            <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500\">
                                <option>Sur le campus</option>
                                <option>En ligne</option>
                                <option>À domicile</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                        <textarea rows=\"5\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500 resize-none\" placeholder=\"Décrivez la mission...\"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Rémunération</h3>
                <div class=\"space-y-4\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Tarif horaire</label>
                        <div class=\"relative\">
                            <input type=\"number\" min=\"0\" step=\"0.50\" class=\"w-full pl-4 pr-12 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500 text-2xl font-bold text-amber-600\" placeholder=\"25\">
                            <span class=\"absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 font-medium\">€/h</span>
                        </div>
                    </div>
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Durée estimée</label>
                        <input type=\"text\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-amber-500\" placeholder=\"ex: 2h/semaine\">
                    </div>
                </div>
            </div>

            <div class=\"flex flex-col gap-3\">
                <button onclick=\"showToast('Offre enregistrée', 'success'); setTimeout(() => window.location.href = '{{ path('app_admin_jobs_list') }}', 1500);\" class=\"w-full py-3 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 hover:to-orange-700 text-white font-medium shadow-lg shadow-amber-500/25 transition-all\">
                    {{ mode|default('create') == 'create' ? 'Publier l\\'offre' : 'Enregistrer' }}
                </button>
                <a href=\"{{ path('app_admin_jobs_list') }}\" class=\"w-full py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium text-center transition-colors\">
                    Annuler
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/jobs/form.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\jobs\\form.html.twig");
    }
}
