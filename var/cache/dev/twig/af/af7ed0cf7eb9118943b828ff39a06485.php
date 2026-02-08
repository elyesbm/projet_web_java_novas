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

/* admin/user/form.html.twig */
class __TwigTemplate_aefcc1be792ac9c44a66fdc824eb0d38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "create")) ? ("Nouvel") : ("Modifier"));
        yield " utilisateur - NOVAS Admin";
        
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()) == "create")) ? ("Nouvel utilisateur") : ("Modifier utilisateur"));
        
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 5, $this->source); })()) == "create")) ? ("Créer un nouveau compte") : ("Modifier les informations"));
        
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
        yield "<div class=\"max-w-3xl mx-auto\">
    <form class=\"space-y-6\" onsubmit=\"event.preventDefault(); showToast('";
        // line 9
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 9, $this->source); })()) == "create")) ? ("Utilisateur créé") : ("Modifications enregistrées"));
        yield "', 'success'); setTimeout(() => window.location.href = '";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_list");
        yield "', 1500);\">
        
        ";
        // line 12
        yield "        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <div class=\"flex items-center gap-6\">
                <div class=\"w-24 h-24 rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center text-white text-3xl font-bold\">ND</div>
                <div>
                    <h4 class=\"font-semibold text-slate-900 dark:text-white mb-1\">Photo de profil</h4>
                    <p class=\"text-sm text-slate-500 mb-3\">JPG, PNG. Max 2MB.</p>
                    <button type=\"button\" class=\"text-sm text-primary-600 hover:text-primary-700 font-medium\">Changer la photo</button>
                </div>
            </div>
        </div>

        ";
        // line 24
        yield "        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Informations personnelles</h3>
            
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"Dupont\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Prénom <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"Marie\">
                </div>
            </div>
            
            <div class=\"space-y-2 mb-6\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Email <span class=\"text-rose-500\">*</span></label>
                <input type=\"email\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"marie.dupont@univ-lyon.fr\">
            </div>
            
            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Niveau d'études</label>
                <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
                    <option>Licence 1</option>
                    <option>Licence 2</option>
                    <option>Licence 3</option>
                    <option>Master 1</option>
                    <option>Master 2</option>
                </select>
            </div>
        </div>

        ";
        // line 56
        yield "        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Rôle et permissions</h3>
            
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                <label class=\"relative flex cursor-pointer\">
                    <input type=\"radio\" name=\"role\" value=\"etudiant\" class=\"peer sr-only\" checked>
                    <div class=\"w-full p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-primary-500 peer-checked:bg-primary-50 dark:peer-checked:bg-primary-900/20 hover:border-slate-300 transition-all\">
                        <i data-lucide=\"user\" class=\"w-6 h-6 mb-2 text-slate-400 peer-checked:text-primary-500\"></i>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Étudiant</p>
                    </div>
                </label>
                <label class=\"relative flex cursor-pointer\">
                    <input type=\"radio\" name=\"role\" value=\"moderateur\" class=\"peer sr-only\">
                    <div class=\"w-full p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-primary-500 peer-checked:bg-primary-50 dark:peer-checked:bg-primary-900/20 hover:border-slate-300 transition-all\">
                        <i data-lucide=\"shield-check\" class=\"w-6 h-6 mb-2 text-slate-400 peer-checked:text-primary-500\"></i>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Modérateur</p>
                    </div>
                </label>
                <label class=\"relative flex cursor-pointer\">
                    <input type=\"radio\" name=\"role\" value=\"admin\" class=\"peer sr-only\">
                    <div class=\"w-full p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-primary-500 peer-checked:bg-primary-50 dark:peer-checked:bg-primary-900/20 hover:border-slate-300 transition-all\">
                        <i data-lucide=\"crown\" class=\"w-6 h-6 mb-2 text-slate-400 peer-checked:text-primary-500\"></i>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Admin</p>
                    </div>
                </label>
            </div>
        </div>

        ";
        // line 85
        yield "        ";
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 85, $this->source); })()) == "create")) {
            // line 86
            yield "        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Sécurité</h3>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Mot de passe <span class=\"text-rose-500\">*</span></label>
                    <input type=\"password\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"••••••••\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Confirmation <span class=\"text-rose-500\">*</span></label>
                    <input type=\"password\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"••••••••\">
                </div>
            </div>
        </div>
        ";
        }
        // line 100
        yield "
        ";
        // line 102
        yield "        <div class=\"flex items-center justify-between pt-6\">
            <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_list");
        yield "\" class=\"flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4\"></i>
                Annuler
            </a>
            <button type=\"submit\" class=\"flex items-center gap-2 px-8 py-3 rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-medium shadow-lg shadow-primary-500/25 transition-all\">
                <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                ";
        // line 109
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 109, $this->source); })()) == "create")) ? ("Créer l'utilisateur") : ("Enregistrer"));
        yield "
            </button>
        </div>
    </form>
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
        return "admin/user/form.html.twig";
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
        return array (  269 => 109,  260 => 103,  257 => 102,  254 => 100,  238 => 86,  235 => 85,  205 => 56,  172 => 24,  159 => 12,  152 => 9,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode == 'create' ? 'Nouvel' : 'Modifier' }} utilisateur - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode == 'create' ? 'Nouvel utilisateur' : 'Modifier utilisateur' }}{% endblock %}
{% block page_subtitle %}{{ mode == 'create' ? 'Créer un nouveau compte' : 'Modifier les informations' }}{% endblock %}

{% block body %}
<div class=\"max-w-3xl mx-auto\">
    <form class=\"space-y-6\" onsubmit=\"event.preventDefault(); showToast('{{ mode == 'create' ? 'Utilisateur créé' : 'Modifications enregistrées' }}', 'success'); setTimeout(() => window.location.href = '{{ path('app_admin_users_list') }}', 1500);\">
        
        {# Avatar #}
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <div class=\"flex items-center gap-6\">
                <div class=\"w-24 h-24 rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center text-white text-3xl font-bold\">ND</div>
                <div>
                    <h4 class=\"font-semibold text-slate-900 dark:text-white mb-1\">Photo de profil</h4>
                    <p class=\"text-sm text-slate-500 mb-3\">JPG, PNG. Max 2MB.</p>
                    <button type=\"button\" class=\"text-sm text-primary-600 hover:text-primary-700 font-medium\">Changer la photo</button>
                </div>
            </div>
        </div>

        {# Informations #}
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Informations personnelles</h3>
            
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"Dupont\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Prénom <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"Marie\">
                </div>
            </div>
            
            <div class=\"space-y-2 mb-6\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Email <span class=\"text-rose-500\">*</span></label>
                <input type=\"email\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"marie.dupont@univ-lyon.fr\">
            </div>
            
            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Niveau d'études</label>
                <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
                    <option>Licence 1</option>
                    <option>Licence 2</option>
                    <option>Licence 3</option>
                    <option>Master 1</option>
                    <option>Master 2</option>
                </select>
            </div>
        </div>

        {# Rôle #}
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Rôle et permissions</h3>
            
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                <label class=\"relative flex cursor-pointer\">
                    <input type=\"radio\" name=\"role\" value=\"etudiant\" class=\"peer sr-only\" checked>
                    <div class=\"w-full p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-primary-500 peer-checked:bg-primary-50 dark:peer-checked:bg-primary-900/20 hover:border-slate-300 transition-all\">
                        <i data-lucide=\"user\" class=\"w-6 h-6 mb-2 text-slate-400 peer-checked:text-primary-500\"></i>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Étudiant</p>
                    </div>
                </label>
                <label class=\"relative flex cursor-pointer\">
                    <input type=\"radio\" name=\"role\" value=\"moderateur\" class=\"peer sr-only\">
                    <div class=\"w-full p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-primary-500 peer-checked:bg-primary-50 dark:peer-checked:bg-primary-900/20 hover:border-slate-300 transition-all\">
                        <i data-lucide=\"shield-check\" class=\"w-6 h-6 mb-2 text-slate-400 peer-checked:text-primary-500\"></i>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Modérateur</p>
                    </div>
                </label>
                <label class=\"relative flex cursor-pointer\">
                    <input type=\"radio\" name=\"role\" value=\"admin\" class=\"peer sr-only\">
                    <div class=\"w-full p-4 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-primary-500 peer-checked:bg-primary-50 dark:peer-checked:bg-primary-900/20 hover:border-slate-300 transition-all\">
                        <i data-lucide=\"crown\" class=\"w-6 h-6 mb-2 text-slate-400 peer-checked:text-primary-500\"></i>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Admin</p>
                    </div>
                </label>
            </div>
        </div>

        {# Mot de passe (création uniquement) #}
        {% if mode == 'create' %}
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
            <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-6\">Sécurité</h3>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Mot de passe <span class=\"text-rose-500\">*</span></label>
                    <input type=\"password\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"••••••••\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Confirmation <span class=\"text-rose-500\">*</span></label>
                    <input type=\"password\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\" placeholder=\"••••••••\">
                </div>
            </div>
        </div>
        {% endif %}

        {# Actions #}
        <div class=\"flex items-center justify-between pt-6\">
            <a href=\"{{ path('app_admin_users_list') }}\" class=\"flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4\"></i>
                Annuler
            </a>
            <button type=\"submit\" class=\"flex items-center gap-2 px-8 py-3 rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-medium shadow-lg shadow-primary-500/25 transition-all\">
                <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                {{ mode == 'create' ? 'Créer l\\'utilisateur' : 'Enregistrer' }}
            </button>
        </div>
    </form>
</div>
{% endblock %}", "admin/user/form.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\admin\\user\\form.html.twig");
    }
}
