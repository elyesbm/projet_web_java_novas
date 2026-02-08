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

/* admin/marketplace/form.html.twig */
class __TwigTemplate_fbb5a94aa9fe13470ec094ff49681d9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/marketplace/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/marketplace/form.html.twig"));

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
        yield " article - NOVAS Admin";
        
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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvel article") : ("Modifier l'article"));
        
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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 5, $this->source); })()), "create")) : ("create")) == "create")) ? ("Ajouter un article au marketplace") : ("Modifier les informations"));
        
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
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        
        ";
        // line 12
        yield "        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Informations de l'article</h3>
                
                <div class=\"space-y-2 mb-6\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Titre <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500 text-lg\" placeholder=\"ex: MacBook Pro M2\">
                </div>

                <div class=\"space-y-2 mb-6\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                    <textarea rows=\"5\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500 resize-none\" placeholder=\"Décrivez votre article...\"></textarea>
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Prix (€) <span class=\"text-rose-500\">*</span></label>
                        <input type=\"number\" required min=\"0\" step=\"0.01\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500 text-2xl font-bold text-rose-600\" placeholder=\"0.00\">
                    </div>
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie <span class=\"text-rose-500\">*</span></label>
                        <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500\">
                            <option>Électronique</option>
                            <option>Livres</option>
                            <option>Fournitures</option>
                            <option>Mobilier</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Photos</h3>
                <div class=\"grid grid-cols-4 gap-4\">
                    <div class=\"aspect-square rounded-xl border-2 border-dashed border-slate-300 dark:border-slate-600 flex flex-col items-center justify-center cursor-pointer hover:border-rose-500 transition-colors bg-slate-50 dark:bg-slate-700/30\">
                        <i data-lucide=\"plus\" class=\"w-8 h-8 text-slate-400 mb-2\"></i>
                        <span class=\"text-xs text-slate-500\">Ajouter</span>
                    </div>
                </div>
                <p class=\"text-xs text-slate-500 mt-3\">Maximum 5 photos. 2MB par fichier.</p>
            </div>
        </div>

        ";
        // line 56
        yield "        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6 sticky top-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Aperçu</h3>
                <div class=\"aspect-[4/3] rounded-xl bg-slate-100 dark:bg-slate-700 mb-4 flex items-center justify-center text-slate-400\">
                    <i data-lucide=\"image\" class=\"w-12 h-12\"></i>
                </div>
                <h4 class=\"font-bold text-slate-900 dark:text-white mb-1\">Titre de l'article</h4>
                <p class=\"text-2xl font-bold text-rose-600 mb-3\">-- €</p>
                <div class=\"flex items-center gap-2 text-sm text-slate-500\">
                    <i data-lucide=\"map-pin\" class=\"w-4 h-4\"></i>
                    <span>Campus Lyon 1</span>
                </div>
            </div>

            <div class=\"flex flex-col gap-3\">
                <button onclick=\"showToast('Article enregistré', 'success'); setTimeout(() => window.location.href = '";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_list");
        yield "', 1500);\" class=\"w-full py-3 rounded-xl bg-gradient-to-r from-rose-500 to-pink-600 hover:from-rose-600 hover:to-pink-700 text-white font-medium shadow-lg shadow-rose-500/25 transition-all\">
                    ";
        // line 72
        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 72, $this->source); })()), "create")) : ("create")) == "create")) ? ("Publier l'article") : ("Enregistrer"));
        yield "
                </button>
                <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_list");
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
        return "admin/marketplace/form.html.twig";
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
        return array (  225 => 74,  220 => 72,  216 => 71,  199 => 56,  154 => 12,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode|default('create') == 'create' ? 'Nouvel' : 'Modifier' }} article - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode|default('create') == 'create' ? 'Nouvel article' : 'Modifier l\\'article' }}{% endblock %}
{% block page_subtitle %}{{ mode|default('create') == 'create' ? 'Ajouter un article au marketplace' : 'Modifier les informations' }}{% endblock %}

{% block body %}
<div class=\"max-w-5xl mx-auto\">
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        
        {# Main Form #}
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Informations de l'article</h3>
                
                <div class=\"space-y-2 mb-6\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Titre <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500 text-lg\" placeholder=\"ex: MacBook Pro M2\">
                </div>

                <div class=\"space-y-2 mb-6\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                    <textarea rows=\"5\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500 resize-none\" placeholder=\"Décrivez votre article...\"></textarea>
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Prix (€) <span class=\"text-rose-500\">*</span></label>
                        <input type=\"number\" required min=\"0\" step=\"0.01\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500 text-2xl font-bold text-rose-600\" placeholder=\"0.00\">
                    </div>
                    <div class=\"space-y-2\">
                        <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie <span class=\"text-rose-500\">*</span></label>
                        <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-rose-500\">
                            <option>Électronique</option>
                            <option>Livres</option>
                            <option>Fournitures</option>
                            <option>Mobilier</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Photos</h3>
                <div class=\"grid grid-cols-4 gap-4\">
                    <div class=\"aspect-square rounded-xl border-2 border-dashed border-slate-300 dark:border-slate-600 flex flex-col items-center justify-center cursor-pointer hover:border-rose-500 transition-colors bg-slate-50 dark:bg-slate-700/30\">
                        <i data-lucide=\"plus\" class=\"w-8 h-8 text-slate-400 mb-2\"></i>
                        <span class=\"text-xs text-slate-500\">Ajouter</span>
                    </div>
                </div>
                <p class=\"text-xs text-slate-500 mt-3\">Maximum 5 photos. 2MB par fichier.</p>
            </div>
        </div>

        {# Sidebar Preview #}
        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6 sticky top-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Aperçu</h3>
                <div class=\"aspect-[4/3] rounded-xl bg-slate-100 dark:bg-slate-700 mb-4 flex items-center justify-center text-slate-400\">
                    <i data-lucide=\"image\" class=\"w-12 h-12\"></i>
                </div>
                <h4 class=\"font-bold text-slate-900 dark:text-white mb-1\">Titre de l'article</h4>
                <p class=\"text-2xl font-bold text-rose-600 mb-3\">-- €</p>
                <div class=\"flex items-center gap-2 text-sm text-slate-500\">
                    <i data-lucide=\"map-pin\" class=\"w-4 h-4\"></i>
                    <span>Campus Lyon 1</span>
                </div>
            </div>

            <div class=\"flex flex-col gap-3\">
                <button onclick=\"showToast('Article enregistré', 'success'); setTimeout(() => window.location.href = '{{ path('app_admin_marketplace_list') }}', 1500);\" class=\"w-full py-3 rounded-xl bg-gradient-to-r from-rose-500 to-pink-600 hover:from-rose-600 hover:to-pink-700 text-white font-medium shadow-lg shadow-rose-500/25 transition-all\">
                    {{ mode|default('create') == 'create' ? 'Publier l\\'article' : 'Enregistrer' }}
                </button>
                <a href=\"{{ path('app_admin_marketplace_list') }}\" class=\"w-full py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium text-center transition-colors\">
                    Annuler
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/marketplace/form.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\marketplace\\form.html.twig");
    }
}
