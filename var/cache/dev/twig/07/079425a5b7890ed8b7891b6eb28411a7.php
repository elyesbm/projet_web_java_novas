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

/* admin/jobs/list.html.twig */
class __TwigTemplate_90e3a3244f0e72506d521a01fc7981cf extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jobs/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jobs/list.html.twig"));

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

        yield "Emplois - NOVAS Admin";
        
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

        yield "Offres d'emploi";
        
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

        yield "Gestion des offres et candidatures";
        
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
        yield "<div class=\"space-y-6\">
    
    ";
        // line 11
        yield "    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">89</p><p class=\"text-slate-500\">Offres actives</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-600\"><i data-lucide=\"file-text\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">234</p><p class=\"text-slate-500\">Candidatures</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"check-circle\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">156</p><p class=\"text-slate-500\">Pourvues</p></div>
        </div>
    </div>

    ";
        // line 27
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('offres')\" id=\"tab-offres\" class=\"py-4 text-sm font-semibold text-amber-600 border-b-2 border-amber-600\">Offres</button>
                <button onclick=\"switchTab('candidatures')\" id=\"tab-candidatures\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Candidatures</button>
            </div>
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_jobs_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-amber-600 hover:bg-amber-700 text-white text-sm transition-colors shadow-lg shadow-amber-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                Nouvelle offre
            </a>
        </div>

        ";
        // line 40
        yield "        <div id=\"content-offres\" class=\"p-6\">
            <div class=\"space-y-4\">
                ";
        // line 43
        yield "                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                    <div class=\"flex flex-col lg:flex-row lg:items-start gap-6\">
                        <div class=\"flex items-start gap-4 lg:w-1/4\">
                            <div class=\"w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center shrink-0\"><i data-lucide=\"book-open\" class=\"w-6 h-6\"></i></div>
                            <div>
                                <span class=\"inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400 mb-2\">Tutorat</span>
                                <p class=\"text-sm text-slate-500 flex items-center gap-1\"><i data-lucide=\"map-pin\" class=\"w-3 h-3\"></i>Campus Lyon 1</p>
                            </div>
                        </div>
                        <div class=\"flex-1\">
                            <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">Tutorat Mathématiques L1-L2</h3>
                            <p class=\"text-slate-600 dark:text-slate-400 text-sm mb-3 line-clamp-2\">Je recherche un étudiant en M1 ou M2 Mathématiques pour donner des cours de soutien...</p>
                            <div class=\"flex items-center gap-4 text-sm text-slate-500\">
                                <span class=\"flex items-center gap-1\"><i data-lucide=\"clock\" class=\"w-4 h-4\"></i>2h/semaine</span>
                                <span class=\"flex items-center gap-1\"><i data-lucide=\"euro\" class=\"w-4 h-4\"></i>25€/h</span>
                            </div>
                        </div>
                        <div class=\"flex flex-row lg:flex-col items-center lg:items-end gap-4\">
                            <div class=\"text-center lg:text-right\"><p class=\"text-2xl font-bold text-slate-900 dark:text-white\">5</p><p class=\"text-xs text-slate-500\">candidatures</p></div>
                            <div class=\"flex items-center gap-2\">
                                <button onclick=\"showToast('Candidatures affichées', 'info')\" class=\"px-3 py-2 rounded-lg bg-amber-50 dark:bg-amber-900/20 text-amber-600 text-sm font-medium hover:bg-amber-100 dark:hover:bg-amber-900/30 transition-colors\">Voir</button>
                                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_jobs_edit", ["id" => 1]);
        yield "\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <button onclick=\"if(confirm('Supprimer ?')) showToast('Offre supprimée', 'success')\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 74
        yield "        <div id=\"content-candidatures\" class=\"p-6 hidden\">
            <div class=\"space-y-4\">
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700\">
                    <div class=\"flex items-center gap-4\">
                        <img src=\"https://ui-avatars.com/api/?name=Lucas+Moreau&background=random\" class=\"w-12 h-12 rounded-full\">
                        <div class=\"flex-1\">
                            <p class=\"font-semibold text-slate-900 dark:text-white\">Lucas Moreau</p>
                            <p class=\"text-sm text-slate-500\">Candidature pour: Tutorat Mathématiques</p>
                            <p class=\"text-xs text-slate-400\">Il y a 2 heures</p>
                        </div>
                        <div class=\"flex gap-2\">
                            <button class=\"px-3 py-2 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 text-sm font-medium\">Accepter</button>
                            <button class=\"px-3 py-2 rounded-lg bg-rose-100 dark:bg-rose-900/30 text-rose-600 text-sm font-medium\">Refuser</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 95
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        yield "<script>
    function switchTab(tab) {
        document.getElementById('content-offres').classList.toggle('hidden', tab !== 'offres');
        document.getElementById('content-candidatures').classList.toggle('hidden', tab !== 'candidatures');
        document.getElementById('tab-offres').className = 'py-4 text-sm font-semibold ' + (tab === 'offres' ? 'text-amber-600 border-b-2 border-amber-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        document.getElementById('tab-candidatures').className = 'py-4 text-sm font-semibold ' + (tab === 'candidatures' ? 'text-amber-600 border-b-2 border-amber-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
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
        return "admin/jobs/list.html.twig";
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
        return array (  272 => 96,  249 => 95,  226 => 74,  214 => 64,  191 => 43,  187 => 40,  178 => 33,  170 => 27,  153 => 11,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Emplois - NOVAS Admin{% endblock %}
{% block page_title %}Offres d'emploi{% endblock %}
{% block page_subtitle %}Gestion des offres et candidatures{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    
    {# Stats #}
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">89</p><p class=\"text-slate-500\">Offres actives</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-600\"><i data-lucide=\"file-text\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">234</p><p class=\"text-slate-500\">Candidatures</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"check-circle\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">156</p><p class=\"text-slate-500\">Pourvues</p></div>
        </div>
    </div>

    {# Tabs #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('offres')\" id=\"tab-offres\" class=\"py-4 text-sm font-semibold text-amber-600 border-b-2 border-amber-600\">Offres</button>
                <button onclick=\"switchTab('candidatures')\" id=\"tab-candidatures\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Candidatures</button>
            </div>
            <a href=\"{{ path('app_admin_jobs_new') }}\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-amber-600 hover:bg-amber-700 text-white text-sm transition-colors shadow-lg shadow-amber-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                Nouvelle offre
            </a>
        </div>

        {# Offres Tab #}
        <div id=\"content-offres\" class=\"p-6\">
            <div class=\"space-y-4\">
                {# Job Card #}
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                    <div class=\"flex flex-col lg:flex-row lg:items-start gap-6\">
                        <div class=\"flex items-start gap-4 lg:w-1/4\">
                            <div class=\"w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center shrink-0\"><i data-lucide=\"book-open\" class=\"w-6 h-6\"></i></div>
                            <div>
                                <span class=\"inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400 mb-2\">Tutorat</span>
                                <p class=\"text-sm text-slate-500 flex items-center gap-1\"><i data-lucide=\"map-pin\" class=\"w-3 h-3\"></i>Campus Lyon 1</p>
                            </div>
                        </div>
                        <div class=\"flex-1\">
                            <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">Tutorat Mathématiques L1-L2</h3>
                            <p class=\"text-slate-600 dark:text-slate-400 text-sm mb-3 line-clamp-2\">Je recherche un étudiant en M1 ou M2 Mathématiques pour donner des cours de soutien...</p>
                            <div class=\"flex items-center gap-4 text-sm text-slate-500\">
                                <span class=\"flex items-center gap-1\"><i data-lucide=\"clock\" class=\"w-4 h-4\"></i>2h/semaine</span>
                                <span class=\"flex items-center gap-1\"><i data-lucide=\"euro\" class=\"w-4 h-4\"></i>25€/h</span>
                            </div>
                        </div>
                        <div class=\"flex flex-row lg:flex-col items-center lg:items-end gap-4\">
                            <div class=\"text-center lg:text-right\"><p class=\"text-2xl font-bold text-slate-900 dark:text-white\">5</p><p class=\"text-xs text-slate-500\">candidatures</p></div>
                            <div class=\"flex items-center gap-2\">
                                <button onclick=\"showToast('Candidatures affichées', 'info')\" class=\"px-3 py-2 rounded-lg bg-amber-50 dark:bg-amber-900/20 text-amber-600 text-sm font-medium hover:bg-amber-100 dark:hover:bg-amber-900/30 transition-colors\">Voir</button>
                                <a href=\"{{ path('app_admin_jobs_edit', {id: 1}) }}\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <button onclick=\"if(confirm('Supprimer ?')) showToast('Offre supprimée', 'success')\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Candidatures Tab (hidden) #}
        <div id=\"content-candidatures\" class=\"p-6 hidden\">
            <div class=\"space-y-4\">
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700\">
                    <div class=\"flex items-center gap-4\">
                        <img src=\"https://ui-avatars.com/api/?name=Lucas+Moreau&background=random\" class=\"w-12 h-12 rounded-full\">
                        <div class=\"flex-1\">
                            <p class=\"font-semibold text-slate-900 dark:text-white\">Lucas Moreau</p>
                            <p class=\"text-sm text-slate-500\">Candidature pour: Tutorat Mathématiques</p>
                            <p class=\"text-xs text-slate-400\">Il y a 2 heures</p>
                        </div>
                        <div class=\"flex gap-2\">
                            <button class=\"px-3 py-2 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 text-sm font-medium\">Accepter</button>
                            <button class=\"px-3 py-2 rounded-lg bg-rose-100 dark:bg-rose-900/30 text-rose-600 text-sm font-medium\">Refuser</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script>
    function switchTab(tab) {
        document.getElementById('content-offres').classList.toggle('hidden', tab !== 'offres');
        document.getElementById('content-candidatures').classList.toggle('hidden', tab !== 'candidatures');
        document.getElementById('tab-offres').className = 'py-4 text-sm font-semibold ' + (tab === 'offres' ? 'text-amber-600 border-b-2 border-amber-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        document.getElementById('tab-candidatures').className = 'py-4 text-sm font-semibold ' + (tab === 'candidatures' ? 'text-amber-600 border-b-2 border-amber-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
    }
</script>
{% endblock %}
{% endblock %}", "admin/jobs/list.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\jobs\\list.html.twig");
    }
}
