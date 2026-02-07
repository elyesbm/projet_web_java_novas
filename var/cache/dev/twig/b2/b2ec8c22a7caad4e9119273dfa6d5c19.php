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

/* admin/publication/list.html.twig */
class __TwigTemplate_921da7b052108fabb8432339a8bf4d56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/publication/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/publication/list.html.twig"));

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

        yield "Publications - NOVAS Admin";
        
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

        yield "Publications & Forum";
        
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

        yield "Modération des contenus";
        
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
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-violet-100 dark:bg-violet-900/30 text-violet-600\"><i data-lucide=\"message-square\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full\">+15%</span>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,245</p>
            <p class=\"text-sm text-slate-500\">Publications</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-pink-100 dark:bg-pink-900/30 text-pink-600 mb-4\"><i data-lucide=\"message-circle\" class=\"w-6 h-6\"></i></div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">3,678</p>
            <p class=\"text-sm text-slate-500\">Commentaires</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 mb-4\"><i data-lucide=\"flag\" class=\"w-6 h-6\"></i></div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</p>
            <p class=\"text-sm text-slate-500\">Signalés</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 mb-4\"><i data-lucide=\"heart\" class=\"w-6 h-6\"></i></div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">8.9k</p>
            <p class=\"text-sm text-slate-500\">Likes</p>
        </div>
    </div>

    ";
        // line 38
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('publications')\" id=\"tab-publications\" class=\"py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600\">Publications</button>
                <button onclick=\"switchTab('commentaires')\" id=\"tab-commentaires\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Commentaires</button>
                <button onclick=\"switchTab('signales')\" id=\"tab-signales\" class=\"py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2\">
                    Signalés
                    <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3</span>
                </button>
            </div>
        </div>

        <div class=\"p-6 space-y-6\" id=\"content-publications\">
            ";
        // line 52
        yield "            <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center gap-3 mb-4\">
                    <img src=\"https://ui-avatars.com/api/?name=Marie+Dubois&background=random\" class=\"w-12 h-12 rounded-full\">
                    <div>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Marie Dubois</p>
                        <p class=\"text-sm text-slate-500\">L3 Informatique • Il y a 2 heures</p>
                    </div>
                    <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Académique</span>
                </div>
                <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">Conseils pour réussir les examens de ML ?</h3>
                <p class=\"text-slate-600 dark:text-slate-400 mb-4\">Les examens approchent et j'aimerais avoir vos conseils pour bien réviser...</p>
                <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"heart\" class=\"w-4 h-4\"></i>24 likes</span>
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>12 commentaires</span>
                    <div class=\"ml-auto flex gap-2\">
                        <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_edit", ["id" => 1]);
        yield "\" class=\"px-3 py-2 rounded-lg bg-violet-50 dark:bg-violet-900/20 text-violet-600 text-sm font-medium hover:bg-violet-100 dark:hover:bg-violet-900/30 transition-colors\">Modérer</a>
                        <button onclick=\"if(confirm('Supprimer ?')) showToast('Publication supprimée', 'success')\" class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"p-6 hidden\" id=\"content-commentaires\">
            <p class=\"text-slate-500 text-center py-8\">Commentaires à implémenter</p>
        </div>

        <div class=\"p-6 hidden space-y-6\" id=\"content-signales\">
            <div class=\"bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-2xl p-6\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0\"><i data-lucide=\"alert-triangle\" class=\"w-6 h-6\"></i></div>
                    <div class=\"flex-1\">
                        <div class=\"flex items-center gap-2 mb-2\">
                            <h3 class=\"font-semibold text-amber-900 dark:text-amber-400\">Publication signalée</h3>
                            <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3 signalements</span>
                        </div>
                        <p class=\"text-amber-700 dark:text-amber-300 text-sm mb-4\">Cette publication a été signalée pour \"contenu inapproprié\"</p>
                        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 mb-4\">
                            <p class=\"text-slate-600 dark:text-slate-400 text-sm\">\"Ce contenu est offensant et ne respecte pas les règles de la communauté...\"</p>
                        </div>
                        <div class=\"flex gap-2\">
                            <button onclick=\"showToast('Publication approuvée', 'success')\" class=\"px-4 py-2 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 text-sm font-medium hover:bg-emerald-200 dark:hover:bg-emerald-900/50 transition-colors\">Approuver</button>
                            <button onclick=\"showToast('Publication masquée', 'warning')\" class=\"px-4 py-2 rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-700 text-sm font-medium hover:bg-amber-200 dark:hover:bg-amber-900/50 transition-colors\">Masquer</button>
                            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_edit", ["id" => 1]);
        yield "\" class=\"px-4 py-2 rounded-lg bg-violet-100 dark:bg-violet-900/30 text-violet-700 text-sm font-medium hover:bg-violet-200 dark:hover:bg-violet-900/50 transition-colors\">Examiner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 103
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

        // line 104
        yield "<script>
    function switchTab(tab) {
        ['publications', 'commentaires', 'signales'].forEach(t => {
            document.getElementById('content-' + t).classList.toggle('hidden', t !== tab);
            const btn = document.getElementById('tab-' + t);
            const isActive = t === tab;
            const baseClass = t === 'signales' ? 'text-rose-500 hover:text-rose-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300';
            const activeClass = t === 'signales' ? 'text-rose-600 border-b-2 border-rose-600' : 'text-violet-600 border-b-2 border-violet-600';
            btn.className = 'py-4 text-sm font-semibold ' + (isActive ? activeClass : baseClass) + (t === 'signales' ? ' flex items-center gap-2' : '');
        });
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
        return "admin/publication/list.html.twig";
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
        return array (  278 => 104,  255 => 103,  243 => 94,  213 => 67,  196 => 52,  181 => 38,  153 => 11,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Publications - NOVAS Admin{% endblock %}
{% block page_title %}Publications & Forum{% endblock %}
{% block page_subtitle %}Modération des contenus{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    
    {# Stats #}
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"p-3 rounded-xl bg-violet-100 dark:bg-violet-900/30 text-violet-600\"><i data-lucide=\"message-square\" class=\"w-6 h-6\"></i></div>
                <span class=\"text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full\">+15%</span>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,245</p>
            <p class=\"text-sm text-slate-500\">Publications</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-pink-100 dark:bg-pink-900/30 text-pink-600 mb-4\"><i data-lucide=\"message-circle\" class=\"w-6 h-6\"></i></div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">3,678</p>
            <p class=\"text-sm text-slate-500\">Commentaires</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 mb-4\"><i data-lucide=\"flag\" class=\"w-6 h-6\"></i></div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</p>
            <p class=\"text-sm text-slate-500\">Signalés</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 mb-4\"><i data-lucide=\"heart\" class=\"w-6 h-6\"></i></div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">8.9k</p>
            <p class=\"text-sm text-slate-500\">Likes</p>
        </div>
    </div>

    {# Tabs #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('publications')\" id=\"tab-publications\" class=\"py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600\">Publications</button>
                <button onclick=\"switchTab('commentaires')\" id=\"tab-commentaires\" class=\"py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300\">Commentaires</button>
                <button onclick=\"switchTab('signales')\" id=\"tab-signales\" class=\"py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2\">
                    Signalés
                    <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3</span>
                </button>
            </div>
        </div>

        <div class=\"p-6 space-y-6\" id=\"content-publications\">
            {# Publication Card #}
            <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center gap-3 mb-4\">
                    <img src=\"https://ui-avatars.com/api/?name=Marie+Dubois&background=random\" class=\"w-12 h-12 rounded-full\">
                    <div>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Marie Dubois</p>
                        <p class=\"text-sm text-slate-500\">L3 Informatique • Il y a 2 heures</p>
                    </div>
                    <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Académique</span>
                </div>
                <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">Conseils pour réussir les examens de ML ?</h3>
                <p class=\"text-slate-600 dark:text-slate-400 mb-4\">Les examens approchent et j'aimerais avoir vos conseils pour bien réviser...</p>
                <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"heart\" class=\"w-4 h-4\"></i>24 likes</span>
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>12 commentaires</span>
                    <div class=\"ml-auto flex gap-2\">
                        <a href=\"{{ path('app_admin_publications_edit', {id: 1}) }}\" class=\"px-3 py-2 rounded-lg bg-violet-50 dark:bg-violet-900/20 text-violet-600 text-sm font-medium hover:bg-violet-100 dark:hover:bg-violet-900/30 transition-colors\">Modérer</a>
                        <button onclick=\"if(confirm('Supprimer ?')) showToast('Publication supprimée', 'success')\" class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"p-6 hidden\" id=\"content-commentaires\">
            <p class=\"text-slate-500 text-center py-8\">Commentaires à implémenter</p>
        </div>

        <div class=\"p-6 hidden space-y-6\" id=\"content-signales\">
            <div class=\"bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-2xl p-6\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0\"><i data-lucide=\"alert-triangle\" class=\"w-6 h-6\"></i></div>
                    <div class=\"flex-1\">
                        <div class=\"flex items-center gap-2 mb-2\">
                            <h3 class=\"font-semibold text-amber-900 dark:text-amber-400\">Publication signalée</h3>
                            <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3 signalements</span>
                        </div>
                        <p class=\"text-amber-700 dark:text-amber-300 text-sm mb-4\">Cette publication a été signalée pour \"contenu inapproprié\"</p>
                        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 mb-4\">
                            <p class=\"text-slate-600 dark:text-slate-400 text-sm\">\"Ce contenu est offensant et ne respecte pas les règles de la communauté...\"</p>
                        </div>
                        <div class=\"flex gap-2\">
                            <button onclick=\"showToast('Publication approuvée', 'success')\" class=\"px-4 py-2 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 text-sm font-medium hover:bg-emerald-200 dark:hover:bg-emerald-900/50 transition-colors\">Approuver</button>
                            <button onclick=\"showToast('Publication masquée', 'warning')\" class=\"px-4 py-2 rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-700 text-sm font-medium hover:bg-amber-200 dark:hover:bg-amber-900/50 transition-colors\">Masquer</button>
                            <a href=\"{{ path('app_admin_publications_edit', {id: 1}) }}\" class=\"px-4 py-2 rounded-lg bg-violet-100 dark:bg-violet-900/30 text-violet-700 text-sm font-medium hover:bg-violet-200 dark:hover:bg-violet-900/50 transition-colors\">Examiner</a>
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
        ['publications', 'commentaires', 'signales'].forEach(t => {
            document.getElementById('content-' + t).classList.toggle('hidden', t !== tab);
            const btn = document.getElementById('tab-' + t);
            const isActive = t === tab;
            const baseClass = t === 'signales' ? 'text-rose-500 hover:text-rose-600' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300';
            const activeClass = t === 'signales' ? 'text-rose-600 border-b-2 border-rose-600' : 'text-violet-600 border-b-2 border-violet-600';
            btn.className = 'py-4 text-sm font-semibold ' + (isActive ? activeClass : baseClass) + (t === 'signales' ? ' flex items-center gap-2' : '');
        });
    }
</script>
{% endblock %}
{% endblock %}", "admin/publication/list.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\admin\\publication\\list.html.twig");
    }
}
