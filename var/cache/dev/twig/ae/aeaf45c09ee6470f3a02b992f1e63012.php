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

/* admin/dashboard.html.twig */
class __TwigTemplate_a505aedcf757d2f6f374bd4d862c1149 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Dashboard - NOVAS Admin";
        
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

        yield "Tableau de bord";
        
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

        yield "Vue d'ensemble de votre plateforme";
        
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
        yield "<div class=\"space-y-8 animate-fade-in\">
    
    ";
        // line 11
        yield "    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600\"><i data-lucide=\"users\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full\">+12%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,234</h3>
            <p class=\"text-sm text-slate-500\">Utilisateurs actifs</p>
        </div>
        
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-rose-100 dark:bg-rose-900/30 text-rose-600\"><i data-lucide=\"shopping-bag\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-rose-600 bg-rose-50 px-2 py-1 rounded-full\">+8%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">456</h3>
            <p class=\"text-sm text-slate-500\">Articles marketplace</p>
        </div>
        
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-full\">+24%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">89</h3>
            <p class=\"text-sm text-slate-500\">Offres d'emploi</p>
        </div>
        
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600\"><i data-lucide=\"calendar-days\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full\">+5%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">32</h3>
            <p class=\"text-sm text-slate-500\">Ateliers ce mois</p>
        </div>
    </div>

    ";
        // line 50
        yield "    <div class=\"bg-gradient-to-r from-primary-600 to-secondary-600 rounded-2xl p-8 text-white shadow-lg\">
        <h3 class=\"text-xl font-bold mb-6\">Actions rapides</h3>
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_new");
        yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"user-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvel utilisateur</p>
            </a>
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_new");
        yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"package-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvel article</p>
            </a>
            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_new");
        yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"calendar-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvel atelier</p>
            </a>
            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_new");
        yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"zap\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvelle compétence</p>
            </a>
        </div>
    </div>

    ";
        // line 73
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"px-6 py-4 border-b border-slate-200 dark:border-slate-700 flex items-center justify-between\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white\">Activité récente</h3>
            <a href=\"#\" class=\"text-sm text-primary-600 hover:text-primary-700\">Voir tout</a>
        </div>
        <div class=\"divide-y divide-slate-100 dark:divide-slate-700\">
            <div class=\"p-4 flex items-center gap-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors\">
                <div class=\"w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center\"><i data-lucide=\"user-plus\" class=\"w-5 h-5\"></i></div>
                <div class=\"flex-1\"><p class=\"font-medium text-slate-900 dark:text-white\">Nouvel utilisateur inscrit</p><p class=\"text-sm text-slate-500\">Marie Dupont • Il y a 5 min</p></div>
            </div>
            <div class=\"p-4 flex items-center gap-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors\">
                <div class=\"w-10 h-10 rounded-full bg-rose-100 dark:bg-rose-900/30 text-rose-600 flex items-center justify-center\"><i data-lucide=\"shopping-bag\" class=\"w-5 h-5\"></i></div>
                <div class=\"flex-1\"><p class=\"font-medium text-slate-900 dark:text-white\">Article publié</p><p class=\"text-sm text-slate-500\">MacBook Pro M2 • Il y a 12 min</p></div>
            </div>
            <div class=\"p-4 flex items-center gap-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors\">
                <div class=\"w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center\"><i data-lucide=\"briefcase\" class=\"w-5 h-5\"></i></div>
                <div class=\"flex-1\"><p class=\"font-medium text-slate-900 dark:text-white\">Nouvelle offre d'emploi</p><p class=\"text-sm text-slate-500\">Tutorat Maths • Il y a 1h</p></div>
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
        return "admin/dashboard.html.twig";
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
        return array (  228 => 73,  218 => 65,  211 => 61,  204 => 57,  197 => 53,  192 => 50,  152 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Dashboard - NOVAS Admin{% endblock %}
{% block page_title %}Tableau de bord{% endblock %}
{% block page_subtitle %}Vue d'ensemble de votre plateforme{% endblock %}

{% block body %}
<div class=\"space-y-8 animate-fade-in\">
    
    {# Stats Cards #}
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600\"><i data-lucide=\"users\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full\">+12%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,234</h3>
            <p class=\"text-sm text-slate-500\">Utilisateurs actifs</p>
        </div>
        
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-rose-100 dark:bg-rose-900/30 text-rose-600\"><i data-lucide=\"shopping-bag\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-rose-600 bg-rose-50 px-2 py-1 rounded-full\">+8%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">456</h3>
            <p class=\"text-sm text-slate-500\">Articles marketplace</p>
        </div>
        
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-full\">+24%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">89</h3>
            <p class=\"text-sm text-slate-500\">Offres d'emploi</p>
        </div>
        
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600\"><i data-lucide=\"calendar-days\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full\">+5%</span>
            </div>
            <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">32</h3>
            <p class=\"text-sm text-slate-500\">Ateliers ce mois</p>
        </div>
    </div>

    {# Quick Actions #}
    <div class=\"bg-gradient-to-r from-primary-600 to-secondary-600 rounded-2xl p-8 text-white shadow-lg\">
        <h3 class=\"text-xl font-bold mb-6\">Actions rapides</h3>
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
            <a href=\"{{ path('app_admin_users_new') }}\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"user-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvel utilisateur</p>
            </a>
            <a href=\"{{ path('app_admin_marketplace_new') }}\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"package-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvel article</p>
            </a>
            <a href=\"{{ path('app_admin_ateliers_new') }}\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"calendar-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvel atelier</p>
            </a>
            <a href=\"{{ path('app_admin_skills_new') }}\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                <i data-lucide=\"zap\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                <p class=\"font-medium\">Nouvelle compétence</p>
            </a>
        </div>
    </div>

    {# Recent Activity #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"px-6 py-4 border-b border-slate-200 dark:border-slate-700 flex items-center justify-between\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white\">Activité récente</h3>
            <a href=\"#\" class=\"text-sm text-primary-600 hover:text-primary-700\">Voir tout</a>
        </div>
        <div class=\"divide-y divide-slate-100 dark:divide-slate-700\">
            <div class=\"p-4 flex items-center gap-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors\">
                <div class=\"w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center\"><i data-lucide=\"user-plus\" class=\"w-5 h-5\"></i></div>
                <div class=\"flex-1\"><p class=\"font-medium text-slate-900 dark:text-white\">Nouvel utilisateur inscrit</p><p class=\"text-sm text-slate-500\">Marie Dupont • Il y a 5 min</p></div>
            </div>
            <div class=\"p-4 flex items-center gap-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors\">
                <div class=\"w-10 h-10 rounded-full bg-rose-100 dark:bg-rose-900/30 text-rose-600 flex items-center justify-center\"><i data-lucide=\"shopping-bag\" class=\"w-5 h-5\"></i></div>
                <div class=\"flex-1\"><p class=\"font-medium text-slate-900 dark:text-white\">Article publié</p><p class=\"text-sm text-slate-500\">MacBook Pro M2 • Il y a 12 min</p></div>
            </div>
            <div class=\"p-4 flex items-center gap-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors\">
                <div class=\"w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center\"><i data-lucide=\"briefcase\" class=\"w-5 h-5\"></i></div>
                <div class=\"flex-1\"><p class=\"font-medium text-slate-900 dark:text-white\">Nouvelle offre d'emploi</p><p class=\"text-sm text-slate-500\">Tutorat Maths • Il y a 1h</p></div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/dashboard.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\dashboard.html.twig");
    }
}
