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

/* admin/marketplace/list.html.twig */
class __TwigTemplate_9c2af318b4d8e6e747184db86b5968d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/marketplace/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/marketplace/list.html.twig"));

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

        yield "Marketplace - NOVAS Admin";
        
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

        yield "Marketplace";
        
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

        yield "Gestion des articles et catégories";
        
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
        yield "    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl p-6 text-white\">
            <p class=\"text-3xl font-bold\">456</p>
            <p class=\"text-rose-100\">Articles totaux</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-3xl font-bold text-emerald-600\">389</p>
            <p class=\"text-sm text-slate-500\">En ligne</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-3xl font-bold text-amber-600\">42</p>
            <p class=\"text-sm text-slate-500\">En attente</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-3xl font-bold text-primary-600\">12.4k€</p>
            <p class=\"text-sm text-slate-500\">Valeur totale</p>
        </div>
    </div>

    ";
        // line 31
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('articles')\" id=\"tab-articles\" class=\"py-4 text-sm font-semibold text-rose-600 border-b-2 border-rose-600\">Articles</button>
                <button onclick=\"switchTab('categories')\" id=\"tab-categories\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Catégories</button>
            </div>
        </div>

        ";
        // line 40
        yield "        <div id=\"content-articles\" class=\"p-6\">
            <div class=\"flex flex-col md:flex-row gap-4 justify-between mb-6\">
                <div class=\"flex-1 max-w-md relative\">
                    <i data-lucide=\"search\" class=\"w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
                    <input type=\"text\" placeholder=\"Rechercher un article...\" class=\"w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:ring-2 focus:ring-rose-500\">
                </div>
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white transition-colors shadow-lg shadow-rose-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Ajouter un article
                </a>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                ";
        // line 54
        yield "                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl overflow-hidden hover-card border border-slate-100 dark:border-slate-700 group\">
                    <div class=\"aspect-[4/3] bg-slate-200 dark:bg-slate-600 relative\">
                        <div class=\"absolute inset-0 flex items-center justify-center text-slate-400\">
                            <i data-lucide=\"image\" class=\"w-12 h-12\"></i>
                        </div>
                        <div class=\"absolute top-3 right-3\">
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-emerald-500 text-white\">Publié</span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <span class=\"text-xs text-slate-500\">Électronique</span>
                            <span class=\"text-lg font-bold text-rose-600\">899€</span>
                        </div>
                        <h3 class=\"font-semibold text-slate-900 dark:text-white mb-2 line-clamp-2\">MacBook Pro M2 13 pouces</h3>
                        <p class=\"text-sm text-slate-500 mb-3\">Par Thomas B.</p>
                        <div class=\"flex gap-2\">
                            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_edit", ["id" => 1]);
        yield "\" class=\"flex-1 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-center text-sm font-medium hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">Modifier</a>
                            <button onclick=\"if(confirm('Supprimer ?')) showToast('Article supprimé', 'success')\" class=\"px-3 py-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 80
        yield "        <div id=\"content-categories\" class=\"p-6 hidden\">
            <div class=\"flex justify-end mb-6\">
                <button onclick=\"showToast('Fonctionnalité à implémenter', 'info')\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white transition-colors shadow-lg shadow-rose-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouvelle catégorie
                </button>
            </div>
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                <div class=\"p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50 border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
                    <div class=\"w-12 h-12 rounded-xl bg-white dark:bg-slate-800 flex items-center justify-center shadow-sm\"><i data-lucide=\"book\" class=\"w-6 h-6 text-rose-600\"></i></div>
                    <div class=\"flex-1\"><h4 class=\"font-semibold text-slate-900 dark:text-white\">Livres</h4><p class=\"text-sm text-slate-500\">45 articles</p></div>
                    <button class=\"p-2 hover:bg-rose-100 dark:hover:bg-rose-900/30 rounded-lg text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 98
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

        // line 99
        yield "<script>
    function switchTab(tab) {
        document.getElementById('content-articles').classList.toggle('hidden', tab !== 'articles');
        document.getElementById('content-categories').classList.toggle('hidden', tab !== 'categories');
        document.getElementById('tab-articles').className = 'py-4 text-sm font-semibold ' + (tab === 'articles' ? 'text-rose-600 border-b-2 border-rose-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        document.getElementById('tab-categories').className = 'py-4 text-sm font-semibold ' + (tab === 'categories' ? 'text-rose-600 border-b-2 border-rose-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
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
        return "admin/marketplace/list.html.twig";
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
        return array (  275 => 99,  252 => 98,  232 => 80,  221 => 71,  202 => 54,  192 => 46,  184 => 40,  174 => 31,  153 => 11,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Marketplace - NOVAS Admin{% endblock %}
{% block page_title %}Marketplace{% endblock %}
{% block page_subtitle %}Gestion des articles et catégories{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    
    {# Stats #}
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"bg-gradient-to-br from-rose-500 to-pink-600 rounded-xl p-6 text-white\">
            <p class=\"text-3xl font-bold\">456</p>
            <p class=\"text-rose-100\">Articles totaux</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-3xl font-bold text-emerald-600\">389</p>
            <p class=\"text-sm text-slate-500\">En ligne</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-3xl font-bold text-amber-600\">42</p>
            <p class=\"text-sm text-slate-500\">En attente</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-3xl font-bold text-primary-600\">12.4k€</p>
            <p class=\"text-sm text-slate-500\">Valeur totale</p>
        </div>
    </div>

    {# Tabs #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('articles')\" id=\"tab-articles\" class=\"py-4 text-sm font-semibold text-rose-600 border-b-2 border-rose-600\">Articles</button>
                <button onclick=\"switchTab('categories')\" id=\"tab-categories\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Catégories</button>
            </div>
        </div>

        {# Articles Tab #}
        <div id=\"content-articles\" class=\"p-6\">
            <div class=\"flex flex-col md:flex-row gap-4 justify-between mb-6\">
                <div class=\"flex-1 max-w-md relative\">
                    <i data-lucide=\"search\" class=\"w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
                    <input type=\"text\" placeholder=\"Rechercher un article...\" class=\"w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:ring-2 focus:ring-rose-500\">
                </div>
                <a href=\"{{ path('app_admin_marketplace_new') }}\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white transition-colors shadow-lg shadow-rose-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Ajouter un article
                </a>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                {# Article Card #}
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl overflow-hidden hover-card border border-slate-100 dark:border-slate-700 group\">
                    <div class=\"aspect-[4/3] bg-slate-200 dark:bg-slate-600 relative\">
                        <div class=\"absolute inset-0 flex items-center justify-center text-slate-400\">
                            <i data-lucide=\"image\" class=\"w-12 h-12\"></i>
                        </div>
                        <div class=\"absolute top-3 right-3\">
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-emerald-500 text-white\">Publié</span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <span class=\"text-xs text-slate-500\">Électronique</span>
                            <span class=\"text-lg font-bold text-rose-600\">899€</span>
                        </div>
                        <h3 class=\"font-semibold text-slate-900 dark:text-white mb-2 line-clamp-2\">MacBook Pro M2 13 pouces</h3>
                        <p class=\"text-sm text-slate-500 mb-3\">Par Thomas B.</p>
                        <div class=\"flex gap-2\">
                            <a href=\"{{ path('app_admin_marketplace_edit', {id: 1}) }}\" class=\"flex-1 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-center text-sm font-medium hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">Modifier</a>
                            <button onclick=\"if(confirm('Supprimer ?')) showToast('Article supprimé', 'success')\" class=\"px-3 py-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Categories Tab (hidden by default) #}
        <div id=\"content-categories\" class=\"p-6 hidden\">
            <div class=\"flex justify-end mb-6\">
                <button onclick=\"showToast('Fonctionnalité à implémenter', 'info')\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white transition-colors shadow-lg shadow-rose-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouvelle catégorie
                </button>
            </div>
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                <div class=\"p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50 border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
                    <div class=\"w-12 h-12 rounded-xl bg-white dark:bg-slate-800 flex items-center justify-center shadow-sm\"><i data-lucide=\"book\" class=\"w-6 h-6 text-rose-600\"></i></div>
                    <div class=\"flex-1\"><h4 class=\"font-semibold text-slate-900 dark:text-white\">Livres</h4><p class=\"text-sm text-slate-500\">45 articles</p></div>
                    <button class=\"p-2 hover:bg-rose-100 dark:hover:bg-rose-900/30 rounded-lg text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script>
    function switchTab(tab) {
        document.getElementById('content-articles').classList.toggle('hidden', tab !== 'articles');
        document.getElementById('content-categories').classList.toggle('hidden', tab !== 'categories');
        document.getElementById('tab-articles').className = 'py-4 text-sm font-semibold ' + (tab === 'articles' ? 'text-rose-600 border-b-2 border-rose-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
        document.getElementById('tab-categories').className = 'py-4 text-sm font-semibold ' + (tab === 'categories' ? 'text-rose-600 border-b-2 border-rose-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300');
    }
</script>
{% endblock %}
{% endblock %}", "admin/marketplace/list.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\marketplace\\list.html.twig");
    }
}
