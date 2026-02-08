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

/* admin/user/list.html.twig */
class __TwigTemplate_944947b9a26e0a64ab7d43c473a847f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

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

        yield "Utilisateurs - NOVAS Admin";
        
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

        yield "Gestion des utilisateurs";
        
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

        yield "Liste des étudiants et administrateurs";
        
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
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-slate-900 dark:text-white\">1,234</p>
            <p class=\"text-sm text-slate-500\">Total utilisateurs</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-emerald-600\">1,180</p>
            <p class=\"text-sm text-slate-500\">Actifs ce mois</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-amber-600\">+45</p>
            <p class=\"text-sm text-slate-500\">Nouveaux (7j)</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-purple-600\">12</p>
            <p class=\"text-sm text-slate-500\">Administrateurs</p>
        </div>
    </div>

    ";
        // line 31
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-4 flex flex-col md:flex-row gap-4 justify-between\">
        <div class=\"flex-1 max-w-md relative\">
            <i data-lucide=\"search\" class=\"w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
            <input type=\"text\" placeholder=\"Rechercher un utilisateur...\" class=\"w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
        </div>
        <div class=\"flex gap-3\">
            <select class=\"px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm\">
                <option>Tous les rôles</option>
                <option>Étudiant</option>
                <option>Admin</option>
            </select>
            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary-600 hover:bg-primary-700 text-white transition-colors shadow-lg shadow-primary-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                <span>Ajouter</span>
            </a>
        </div>
    </div>

    ";
        // line 50
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"w-full text-left\">
                <thead class=\"bg-slate-50 dark:bg-slate-700/50\">
                    <tr>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Utilisateur</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Email</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Rôle</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Statut</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-100 dark:divide-slate-700\">
                    <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center gap-3\">
                                <img src=\"https://ui-avatars.com/api/?name=Marie+Dupont&background=random\" class=\"w-10 h-10 rounded-full\">
                                <div>
                                    <p class=\"font-semibold text-slate-900 dark:text-white\">Marie Dupont</p>
                                    <p class=\"text-xs text-slate-500\">L3 Informatique</p>
                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">marie.dupont@univ-lyon.fr</td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Étudiant</span></td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400\">Actif</span></td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_edit", ["id" => 1]);
        yield "\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <button onclick=\"if(confirm('Supprimer ?')) showToast('Utilisateur supprimé', 'success')\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center gap-3\">
                                <img src=\"https://ui-avatars.com/api/?name=Thomas+Martin&background=random\" class=\"w-10 h-10 rounded-full\">
                                <div>
                                    <p class=\"font-semibold text-slate-900 dark:text-white\">Thomas Martin</p>
                                    <p class=\"text-xs text-slate-500\">M1 Mathématiques</p>
                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">thomas.martin@univ-lyon.fr</td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400\">Admin</span></td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400\">Actif</span></td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_edit", ["id" => 2]);
        yield "\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <button onclick=\"if(confirm('Supprimer ?')) showToast('Utilisateur supprimé', 'success')\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        ";
        // line 108
        yield "        <div class=\"px-6 py-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between\">
            <p class=\"text-sm text-slate-500\">Affichage de 1-10 sur 1,234</p>
            <div class=\"flex gap-2\">
                <button class=\"p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50\"><i data-lucide=\"chevron-left\" class=\"w-4 h-4\"></i></button>
                <button class=\"w-8 h-8 rounded-lg bg-primary-600 text-white text-sm font-medium\">1</button>
                <button class=\"w-8 h-8 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium\">2</button>
                <button class=\"p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800\"><i data-lucide=\"chevron-right\" class=\"w-4 h-4\"></i></button>
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
        return "admin/user/list.html.twig";
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
        return array (  261 => 108,  249 => 98,  226 => 78,  196 => 50,  186 => 42,  173 => 31,  152 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Utilisateurs - NOVAS Admin{% endblock %}
{% block page_title %}Gestion des utilisateurs{% endblock %}
{% block page_subtitle %}Liste des étudiants et administrateurs{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    
    {# Stats #}
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-slate-900 dark:text-white\">1,234</p>
            <p class=\"text-sm text-slate-500\">Total utilisateurs</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-emerald-600\">1,180</p>
            <p class=\"text-sm text-slate-500\">Actifs ce mois</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-amber-600\">+45</p>
            <p class=\"text-sm text-slate-500\">Nouveaux (7j)</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-purple-600\">12</p>
            <p class=\"text-sm text-slate-500\">Administrateurs</p>
        </div>
    </div>

    {# Toolbar #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-4 flex flex-col md:flex-row gap-4 justify-between\">
        <div class=\"flex-1 max-w-md relative\">
            <i data-lucide=\"search\" class=\"w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
            <input type=\"text\" placeholder=\"Rechercher un utilisateur...\" class=\"w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
        </div>
        <div class=\"flex gap-3\">
            <select class=\"px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm\">
                <option>Tous les rôles</option>
                <option>Étudiant</option>
                <option>Admin</option>
            </select>
            <a href=\"{{ path('app_admin_users_new') }}\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary-600 hover:bg-primary-700 text-white transition-colors shadow-lg shadow-primary-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                <span>Ajouter</span>
            </a>
        </div>
    </div>

    {# Table #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"w-full text-left\">
                <thead class=\"bg-slate-50 dark:bg-slate-700/50\">
                    <tr>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Utilisateur</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Email</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Rôle</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Statut</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-100 dark:divide-slate-700\">
                    <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center gap-3\">
                                <img src=\"https://ui-avatars.com/api/?name=Marie+Dupont&background=random\" class=\"w-10 h-10 rounded-full\">
                                <div>
                                    <p class=\"font-semibold text-slate-900 dark:text-white\">Marie Dupont</p>
                                    <p class=\"text-xs text-slate-500\">L3 Informatique</p>
                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">marie.dupont@univ-lyon.fr</td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Étudiant</span></td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400\">Actif</span></td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"{{ path('app_admin_users_edit', {id: 1}) }}\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <button onclick=\"if(confirm('Supprimer ?')) showToast('Utilisateur supprimé', 'success')\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center gap-3\">
                                <img src=\"https://ui-avatars.com/api/?name=Thomas+Martin&background=random\" class=\"w-10 h-10 rounded-full\">
                                <div>
                                    <p class=\"font-semibold text-slate-900 dark:text-white\">Thomas Martin</p>
                                    <p class=\"text-xs text-slate-500\">M1 Mathématiques</p>
                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">thomas.martin@univ-lyon.fr</td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400\">Admin</span></td>
                        <td class=\"px-6 py-4\"><span class=\"px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400\">Actif</span></td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"{{ path('app_admin_users_edit', {id: 2}) }}\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <button onclick=\"if(confirm('Supprimer ?')) showToast('Utilisateur supprimé', 'success')\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        {# Pagination #}
        <div class=\"px-6 py-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between\">
            <p class=\"text-sm text-slate-500\">Affichage de 1-10 sur 1,234</p>
            <div class=\"flex gap-2\">
                <button class=\"p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50\"><i data-lucide=\"chevron-left\" class=\"w-4 h-4\"></i></button>
                <button class=\"w-8 h-8 rounded-lg bg-primary-600 text-white text-sm font-medium\">1</button>
                <button class=\"w-8 h-8 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium\">2</button>
                <button class=\"p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800\"><i data-lucide=\"chevron-right\" class=\"w-4 h-4\"></i></button>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/user/list.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\user\\list.html.twig");
    }
}
