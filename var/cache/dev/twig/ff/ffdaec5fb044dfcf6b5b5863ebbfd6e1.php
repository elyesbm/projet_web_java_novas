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

/* admin/settings.html.twig */
class __TwigTemplate_ed31ce4275c288a5cd5a412016348b1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings.html.twig"));

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

        yield "Paramètres - NOVAS Admin";
        
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

        yield "Paramètres";
        
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

        yield "Configuration de la plateforme";
        
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
        yield "<div class=\"max-w-4xl mx-auto space-y-6\">
    
    ";
        // line 11
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"settings\" class=\"w-5 h-5 text-primary-500\"></i>
            Paramètres généraux
        </h3>
        
        <div class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom du site</label>
                    <input type=\"text\" value=\"NOVAS\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Email de contact</label>
                    <input type=\"email\" value=\"contact@novas.edu\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
                </div>
            </div>
            
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Mode maintenance</p>
                    <p class=\"text-sm text-slate-500\">Rendre le site inaccessible aux utilisateurs</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
        </div>
    </div>

    ";
        // line 43
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"palette\" class=\"w-5 h-5 text-secondary-500\"></i>
            Apparence
        </h3>
        
        <div class=\"space-y-6\">
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Thème sombre</p>
                    <p class=\"text-sm text-slate-500\">Activer le mode sombre par défaut</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\" onchange=\"toggleTheme()\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Couleur principale</label>
                <div class=\"flex gap-3\">
                    <button class=\"w-12 h-12 rounded-full bg-blue-500 ring-2 ring-offset-2 ring-blue-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-purple-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-rose-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-amber-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-emerald-500\"></button>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 75
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"bell\" class=\"w-5 h-5 text-amber-500\"></i>
            Notifications
        </h3>
        
        <div class=\"space-y-4\">
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Nouveaux inscrits</p>
                    <p class=\"text-sm text-slate-500\">Recevoir une alerte pour chaque nouvel utilisateur</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\" checked>
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Signalements</p>
                    <p class=\"text-sm text-slate-500\">Alerte immédiate pour les contenus signalés</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\" checked>
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Résumé hebdomadaire</p>
                    <p class=\"text-sm text-slate-500\">Recevoir un résumé des activités par email</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
        </div>
    </div>

    ";
        // line 118
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"shield\" class=\"w-5 h-5 text-emerald-500\"></i>
            Sécurité
        </h3>
        
        <div class=\"space-y-4\">
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Authentification à deux facteurs</p>
                    <p class=\"text-sm text-slate-500\">Sécuriser l'accès admin avec 2FA</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Session timeout (minutes)</label>
                <input type=\"number\" value=\"30\" min=\"5\" max=\"120\" class=\"w-32 px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
            </div>
        </div>
    </div>

    ";
        // line 144
        yield "    <div class=\"bg-rose-50 dark:bg-rose-900/20 border border-rose-200 dark:border-rose-800 rounded-2xl p-6\">
        <h3 class=\"text-lg font-semibold text-rose-900 dark:text-rose-400 mb-4 flex items-center gap-2\">
            <i data-lucide=\"alert-triangle\" class=\"w-5 h-5\"></i>
            Zone dangereuse
        </h3>
        
        <div class=\"space-y-4\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"font-medium text-rose-900 dark:text-rose-400\">Vider le cache</p>
                    <p class=\"text-sm text-rose-700 dark:text-rose-300\">Effacer toutes les données temporaires</p>
                </div>
                <button onclick=\"if(confirm('Vider le cache ?')) showToast('Cache vidé', 'success')\" class=\"px-4 py-2 rounded-xl border border-rose-300 dark:border-rose-700 text-rose-700 dark:text-rose-400 hover:bg-rose-100 dark:hover:bg-rose-900/30 transition-colors\">
                    Vider
                </button>
            </div>
            
            <div class=\"flex items-center justify-between pt-4 border-t border-rose-200 dark:border-rose-800\">
                <div>
                    <p class=\"font-medium text-rose-900 dark:text-rose-400\">Réinitialiser la base de données</p>
                    <p class=\"text-sm text-rose-700 dark:text-rose-300\">⚠️ Cette action est irréversible</p>
                </div>
                <button onclick=\"if(confirm('ÊTES-VOUS SÛR ? Cette action supprimera TOUTES les données !')) showToast('Fonction désactivée', 'error')\" class=\"px-4 py-2 rounded-xl bg-rose-600 hover:bg-rose-700 text-white transition-colors\">
                    Réinitialiser
                </button>
            </div>
        </div>
    </div>

    ";
        // line 174
        yield "    <div class=\"flex justify-end\">
        <button onclick=\"showToast('Paramètres enregistrés', 'success')\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-medium shadow-lg shadow-primary-500/25 transition-all flex items-center gap-2\">
            <i data-lucide=\"save\" class=\"w-4 h-4\"></i>
            Enregistrer les modifications
        </button>
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
        return "admin/settings.html.twig";
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
        return array (  320 => 174,  289 => 144,  262 => 118,  218 => 75,  185 => 43,  152 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Paramètres - NOVAS Admin{% endblock %}
{% block page_title %}Paramètres{% endblock %}
{% block page_subtitle %}Configuration de la plateforme{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto space-y-6\">
    
    {# General Settings #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"settings\" class=\"w-5 h-5 text-primary-500\"></i>
            Paramètres généraux
        </h3>
        
        <div class=\"space-y-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom du site</label>
                    <input type=\"text\" value=\"NOVAS\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Email de contact</label>
                    <input type=\"email\" value=\"contact@novas.edu\" class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
                </div>
            </div>
            
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Mode maintenance</p>
                    <p class=\"text-sm text-slate-500\">Rendre le site inaccessible aux utilisateurs</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
        </div>
    </div>

    {# Appearance #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"palette\" class=\"w-5 h-5 text-secondary-500\"></i>
            Apparence
        </h3>
        
        <div class=\"space-y-6\">
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Thème sombre</p>
                    <p class=\"text-sm text-slate-500\">Activer le mode sombre par défaut</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\" onchange=\"toggleTheme()\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Couleur principale</label>
                <div class=\"flex gap-3\">
                    <button class=\"w-12 h-12 rounded-full bg-blue-500 ring-2 ring-offset-2 ring-blue-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-purple-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-rose-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-amber-500\"></button>
                    <button class=\"w-12 h-12 rounded-full bg-emerald-500\"></button>
                </div>
            </div>
        </div>
    </div>

    {# Notifications #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"bell\" class=\"w-5 h-5 text-amber-500\"></i>
            Notifications
        </h3>
        
        <div class=\"space-y-4\">
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Nouveaux inscrits</p>
                    <p class=\"text-sm text-slate-500\">Recevoir une alerte pour chaque nouvel utilisateur</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\" checked>
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Signalements</p>
                    <p class=\"text-sm text-slate-500\">Alerte immédiate pour les contenus signalés</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\" checked>
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Résumé hebdomadaire</p>
                    <p class=\"text-sm text-slate-500\">Recevoir un résumé des activités par email</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
        </div>
    </div>

    {# Security #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
        <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6 flex items-center gap-2\">
            <i data-lucide=\"shield\" class=\"w-5 h-5 text-emerald-500\"></i>
            Sécurité
        </h3>
        
        <div class=\"space-y-4\">
            <div class=\"flex items-center justify-between p-4 rounded-xl bg-slate-50 dark:bg-slate-700/50\">
                <div>
                    <p class=\"font-medium text-slate-900 dark:text-white\">Authentification à deux facteurs</p>
                    <p class=\"text-sm text-slate-500\">Sécuriser l'accès admin avec 2FA</p>
                </div>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-primary-300 dark:peer-focus:ring-primary-800 rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></div>
                </label>
            </div>
            
            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Session timeout (minutes)</label>
                <input type=\"number\" value=\"30\" min=\"5\" max=\"120\" class=\"w-32 px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
            </div>
        </div>
    </div>

    {# Danger Zone #}
    <div class=\"bg-rose-50 dark:bg-rose-900/20 border border-rose-200 dark:border-rose-800 rounded-2xl p-6\">
        <h3 class=\"text-lg font-semibold text-rose-900 dark:text-rose-400 mb-4 flex items-center gap-2\">
            <i data-lucide=\"alert-triangle\" class=\"w-5 h-5\"></i>
            Zone dangereuse
        </h3>
        
        <div class=\"space-y-4\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"font-medium text-rose-900 dark:text-rose-400\">Vider le cache</p>
                    <p class=\"text-sm text-rose-700 dark:text-rose-300\">Effacer toutes les données temporaires</p>
                </div>
                <button onclick=\"if(confirm('Vider le cache ?')) showToast('Cache vidé', 'success')\" class=\"px-4 py-2 rounded-xl border border-rose-300 dark:border-rose-700 text-rose-700 dark:text-rose-400 hover:bg-rose-100 dark:hover:bg-rose-900/30 transition-colors\">
                    Vider
                </button>
            </div>
            
            <div class=\"flex items-center justify-between pt-4 border-t border-rose-200 dark:border-rose-800\">
                <div>
                    <p class=\"font-medium text-rose-900 dark:text-rose-400\">Réinitialiser la base de données</p>
                    <p class=\"text-sm text-rose-700 dark:text-rose-300\">⚠️ Cette action est irréversible</p>
                </div>
                <button onclick=\"if(confirm('ÊTES-VOUS SÛR ? Cette action supprimera TOUTES les données !')) showToast('Fonction désactivée', 'error')\" class=\"px-4 py-2 rounded-xl bg-rose-600 hover:bg-rose-700 text-white transition-colors\">
                    Réinitialiser
                </button>
            </div>
        </div>
    </div>

    {# Save Button #}
    <div class=\"flex justify-end\">
        <button onclick=\"showToast('Paramètres enregistrés', 'success')\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-medium shadow-lg shadow-primary-500/25 transition-all flex items-center gap-2\">
            <i data-lucide=\"save\" class=\"w-4 h-4\"></i>
            Enregistrer les modifications
        </button>
    </div>
</div>
{% endblock %}", "admin/settings.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\settings.html.twig");
    }
}
