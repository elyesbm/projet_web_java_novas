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

/* admin/skill/list.html.twig */
class __TwigTemplate_d95d27aa25a480bb36ffb18052b2826b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/skill/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/skill/list.html.twig"));

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

        yield "Compétences - NOVAS Admin";
        
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

        yield "Skills & Learning Paths";
        
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

        yield "Gestion des compétences et parcours";
        
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
        <div class=\"bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg shadow-cyan-500/25\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-white/20 backdrop-blur-sm\"><i data-lucide=\"zap\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-medium bg-white/20 px-2 py-1 rounded-full\">+8</span>
            </div>
            <p class=\"text-3xl font-bold\">48</p>
            <p class=\"text-cyan-100\">Compétences</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\"><i data-lucide=\"route\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">24</p><p class=\"text-slate-500\">Parcours</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"trending-up\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">2.4k</p><p class=\"text-slate-500\">Certifications</p></div>
        </div>
    </div>

    ";
        // line 31
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('skills')\" id=\"tab-skills\" class=\"py-4 text-sm font-semibold text-cyan-600 border-b-2 border-cyan-600\">Compétences</button>
                <button onclick=\"switchTab('paths')\" id=\"tab-paths\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Learning Paths</button>
            </div>
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-cyan-600 hover:bg-cyan-700 text-white text-sm transition-colors shadow-lg shadow-cyan-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                Nouveau
            </a>
        </div>

        <div class=\"p-6\">
            ";
        // line 45
        yield "            <div class=\"flex flex-wrap gap-3 mb-6\">
                <button onclick=\"filterSkills('all')\" class=\"px-4 py-2 rounded-full text-sm font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 transition-colors\">Toutes</button>
                <button onclick=\"filterSkills('hard')\" class=\"px-4 py-2 rounded-full text-sm font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors\">Hard Skills</button>
                <button onclick=\"filterSkills('soft')\" class=\"px-4 py-2 rounded-full text-sm font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors\">Soft Skills</button>
            </div>

            ";
        // line 52
        yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\" id=\"skills-grid\">
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 hover-card border border-slate-100 dark:border-slate-700 relative overflow-hidden group\">
                    <div class=\"absolute top-0 right-0 w-32 h-32 bg-blue-400/10 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110\"></div>
                    <div class=\"relative\">
                        <div class=\"flex items-start justify-between mb-4\">
                            <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"code\" class=\"w-6 h-6\"></i></div>
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">hard</span>
                        </div>
                        <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-1\">Python</h3>
                        <p class=\"text-sm text-slate-500 mb-3\">Programmation</p>
                        <p class=\"text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2\">Maîtrise du langage Python et ses frameworks</p>
                        <div class=\"flex items-center justify-between mb-4\">
                            <span class=\"text-sm text-slate-500\"><i data-lucide=\"users\" class=\"w-4 h-4 inline mr-1\"></i>567 étudiants</span>
                            <span class=\"text-xs font-medium px-2 py-1 rounded bg-slate-200 dark:bg-slate-600 text-slate-700 dark:text-slate-300\">Avancé</span>
                        </div>
                        <div class=\"flex gap-2\">
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_edit", ["id" => 1]);
        yield "\" class=\"flex-1 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">Modifier</a>
                            <button onclick=\"if(confirm('Supprimer ?')) showToast('Compétence supprimée', 'success')\" class=\"px-3 py-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 78
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

        // line 79
        yield "<script>
    function switchTab(tab) {
        const isSkills = tab === 'skills';
        document.getElementById('tab-skills').className = 'py-4 text-sm font-semibold ' + (isSkills ? 'text-cyan-600 border-b-2 border-cyan-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        document.getElementById('tab-paths').className = 'py-4 text-sm font-semibold ' + (!isSkills ? 'text-cyan-600 border-b-2 border-cyan-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        showToast(isSkills ? 'Affichage des compétences' : 'Affichage des parcours', 'info');
    }
    
    function filterSkills(type) {
        event.target.parentElement.querySelectorAll('button').forEach(btn => {
            btn.className = 'px-4 py-2 rounded-full text-sm font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors';
        });
        event.target.className = 'px-4 py-2 rounded-full text-sm font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 transition-colors';
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
        return "admin/skill/list.html.twig";
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
        return array (  254 => 79,  231 => 78,  218 => 68,  200 => 52,  192 => 45,  182 => 37,  174 => 31,  153 => 11,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Compétences - NOVAS Admin{% endblock %}
{% block page_title %}Skills & Learning Paths{% endblock %}
{% block page_subtitle %}Gestion des compétences et parcours{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    
    {# Stats #}
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg shadow-cyan-500/25\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-white/20 backdrop-blur-sm\"><i data-lucide=\"zap\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-medium bg-white/20 px-2 py-1 rounded-full\">+8</span>
            </div>
            <p class=\"text-3xl font-bold\">48</p>
            <p class=\"text-cyan-100\">Compétences</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\"><i data-lucide=\"route\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">24</p><p class=\"text-slate-500\">Parcours</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"trending-up\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">2.4k</p><p class=\"text-slate-500\">Certifications</p></div>
        </div>
    </div>

    {# Tabs & Filters #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('skills')\" id=\"tab-skills\" class=\"py-4 text-sm font-semibold text-cyan-600 border-b-2 border-cyan-600\">Compétences</button>
                <button onclick=\"switchTab('paths')\" id=\"tab-paths\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Learning Paths</button>
            </div>
            <a href=\"{{ path('app_admin_skills_new') }}\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-cyan-600 hover:bg-cyan-700 text-white text-sm transition-colors shadow-lg shadow-cyan-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                Nouveau
            </a>
        </div>

        <div class=\"p-6\">
            {# Filter Buttons #}
            <div class=\"flex flex-wrap gap-3 mb-6\">
                <button onclick=\"filterSkills('all')\" class=\"px-4 py-2 rounded-full text-sm font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 transition-colors\">Toutes</button>
                <button onclick=\"filterSkills('hard')\" class=\"px-4 py-2 rounded-full text-sm font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors\">Hard Skills</button>
                <button onclick=\"filterSkills('soft')\" class=\"px-4 py-2 rounded-full text-sm font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors\">Soft Skills</button>
            </div>

            {# Skills Grid #}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\" id=\"skills-grid\">
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 hover-card border border-slate-100 dark:border-slate-700 relative overflow-hidden group\">
                    <div class=\"absolute top-0 right-0 w-32 h-32 bg-blue-400/10 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110\"></div>
                    <div class=\"relative\">
                        <div class=\"flex items-start justify-between mb-4\">
                            <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"code\" class=\"w-6 h-6\"></i></div>
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">hard</span>
                        </div>
                        <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-1\">Python</h3>
                        <p class=\"text-sm text-slate-500 mb-3\">Programmation</p>
                        <p class=\"text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2\">Maîtrise du langage Python et ses frameworks</p>
                        <div class=\"flex items-center justify-between mb-4\">
                            <span class=\"text-sm text-slate-500\"><i data-lucide=\"users\" class=\"w-4 h-4 inline mr-1\"></i>567 étudiants</span>
                            <span class=\"text-xs font-medium px-2 py-1 rounded bg-slate-200 dark:bg-slate-600 text-slate-700 dark:text-slate-300\">Avancé</span>
                        </div>
                        <div class=\"flex gap-2\">
                            <a href=\"{{ path('app_admin_skills_edit', {id: 1}) }}\" class=\"flex-1 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">Modifier</a>
                            <button onclick=\"if(confirm('Supprimer ?')) showToast('Compétence supprimée', 'success')\" class=\"px-3 py-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
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
        const isSkills = tab === 'skills';
        document.getElementById('tab-skills').className = 'py-4 text-sm font-semibold ' + (isSkills ? 'text-cyan-600 border-b-2 border-cyan-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        document.getElementById('tab-paths').className = 'py-4 text-sm font-semibold ' + (!isSkills ? 'text-cyan-600 border-b-2 border-cyan-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        showToast(isSkills ? 'Affichage des compétences' : 'Affichage des parcours', 'info');
    }
    
    function filterSkills(type) {
        event.target.parentElement.querySelectorAll('button').forEach(btn => {
            btn.className = 'px-4 py-2 rounded-full text-sm font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors';
        });
        event.target.className = 'px-4 py-2 rounded-full text-sm font-medium bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 transition-colors';
    }
</script>
{% endblock %}
{% endblock %}", "admin/skill/list.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\skill\\list.html.twig");
    }
}
