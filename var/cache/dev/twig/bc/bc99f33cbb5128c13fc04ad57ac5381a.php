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

/* admin/publication/form.html.twig */
class __TwigTemplate_6ecad779bb7d41f88e5a5c5dd260698f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/publication/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/publication/form.html.twig"));

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

        yield "Modérer publication - NOVAS Admin";
        
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

        yield "Modération de publication";
        
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

        yield "Examiner et modérer le contenu signalé";
        
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
        yield "<div class=\"max-w-4xl mx-auto\">
    ";
        // line 10
        yield "    <div class=\"bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-2xl p-6 mb-6 flex items-start gap-4\">
        <div class=\"w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0\"><i data-lucide=\"alert-triangle\" class=\"w-6 h-6\"></i></div>
        <div>
            <h3 class=\"font-semibold text-amber-900 dark:text-amber-400 mb-1\">Publication signalée</h3>
            <p class=\"text-amber-700 dark:text-amber-300 text-sm\">Cette publication a été signalée par 3 utilisateurs pour \"contenu inapproprié\".</p>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            ";
        // line 21
        yield "            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"flex items-center gap-3 mb-6\">
                    <img src=\"https://ui-avatars.com/api/?name=Marie+Dubois&background=random\" class=\"w-12 h-12 rounded-full\">
                    <div>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Marie Dubois</p>
                        <p class=\"text-sm text-slate-500\">L3 Informatique • Il y a 2 heures</p>
                    </div>
                    <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Académique</span>
                </div>
                
                <h3 class=\"text-xl font-bold text-slate-900 dark:text-white mb-3\">Conseils pour réussir les examens de Machine Learning ?</h3>
                <p class=\"text-slate-600 dark:text-slate-400 leading-relaxed mb-6\">Les examens approchent et j'aimerais avoir vos conseils pour bien réviser le cours de ML. Quelles ressources utilisez-vous ?</p>
                
                <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"heart\" class=\"w-4 h-4\"></i>24 likes</span>
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>12 commentaires</span>
                </div>
            </div>

            ";
        // line 41
        yield "            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Commentaires (12)</h3>
                <div class=\"space-y-4\">
                    <div class=\"flex gap-3 p-4 rounded-xl bg-slate-50 dark:bg-slate-700/30\">
                        <img src=\"https://ui-avatars.com/api/?name=Thomas+Bernard&background=random\" class=\"w-10 h-10 rounded-full\">
                        <div class=\"flex-1\">
                            <div class=\"flex items-center gap-2 mb-1\">
                                <span class=\"font-semibold text-slate-900 dark:text-white\">Thomas Bernard</span>
                                <span class=\"text-xs text-slate-500\">Il y a 1 heure</span>
                            </div>
                            <p class=\"text-slate-600 dark:text-slate-400 text-sm\">Je te conseille les vidéos de 3Blue1Brown sur YouTube !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 59
        yield "        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Décision</h3>
                <div class=\"space-y-3\">
                    <button onclick=\"if(confirm('Approuver cette publication ?')) showToast('Publication approuvée', 'success')\" class=\"w-full p-4 rounded-xl border-2 border-emerald-500 bg-emerald-50 dark:bg-emerald-900/20 text-emerald-700 dark:text-emerald-400 hover:bg-emerald-100 dark:hover:bg-emerald-900/30 transition-colors text-left\">
                        <div class=\"flex items-center gap-3\"><i data-lucide=\"check-circle\" class=\"w-6 h-6\"></i><div><p class=\"font-semibold\">Approuver</p><p class=\"text-xs opacity-80\">Conforme aux règles</p></div></div>
                    </button>
                    <button onclick=\"if(confirm('Masquer cette publication ?')) showToast('Publication masquée', 'warning')\" class=\"w-full p-4 rounded-xl border-2 border-amber-500 bg-amber-50 dark:bg-amber-900/20 text-amber-700 dark:text-amber-400 hover:bg-amber-100 dark:hover:bg-amber-900/30 transition-colors text-left\">
                        <div class=\"flex items-center gap-3\"><i data-lucide=\"eye-off\" class=\"w-6 h-6\"></i><div><p class=\"font-semibold\">Masquer</p><p class=\"text-xs opacity-80\">Retirer temporairement</p></div></div>
                    </button>
                    <button onclick=\"if(confirm('SUPPRIMER définitivement ?')) showToast('Publication supprimée', 'success')\" class=\"w-full p-4 rounded-xl border-2 border-rose-500 bg-rose-50 dark:bg-rose-900/20 text-rose-700 dark:text-rose-400 hover:bg-rose-100 dark:hover:bg-rose-900/30 transition-colors text-left\">
                        <div class=\"flex items-center gap-3\"><i data-lucide=\"trash-2\" class=\"w-6 h-6\"></i><div><p class=\"font-semibold\">Supprimer</p><p class=\"text-xs opacity-80\">Effacer définitivement</p></div></div>
                    </button>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Signalements</h3>
                <div class=\"space-y-3\">
                    <div class=\"flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-slate-700/30\">
                        <div class=\"w-8 h-8 rounded-full bg-rose-100 dark:bg-rose-900/30 text-rose-600 flex items-center justify-center text-xs font-bold\">1</div>
                        <div class=\"flex-1\"><p class=\"text-sm font-medium text-slate-900 dark:text-white\">Contenu inapproprié</p><p class=\"text-xs text-slate-500\">Il y a 2 heures</p></div>
                    </div>
                    <div class=\"flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-slate-700/30\">
                        <div class=\"w-8 h-8 rounded-full bg-rose-100 dark:bg-rose-900/30 text-rose-600 flex items-center justify-center text-xs font-bold\">2</div>
                        <div class=\"flex-1\"><p class=\"text-sm font-medium text-slate-900 dark:text-white\">Harcèlement</p><p class=\"text-xs text-slate-500\">Il y a 1 heure</p></div>
                    </div>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Historique auteur</h3>
                <div class=\"space-y-2 text-sm\">
                    <div class=\"flex justify-between\"><span class=\"text-slate-500\">Membre depuis</span><span class=\"font-medium text-slate-900 dark:text-white\">Sept 2023</span></div>
                    <div class=\"flex justify-between\"><span class=\"text-slate-500\">Publications</span><span class=\"font-medium text-slate-900 dark:text-white\">23</span></div>
                    <div class=\"flex justify-between\"><span class=\"text-slate-500\">Signalements</span><span class=\"font-medium text-emerald-600\">0 précédent</span></div>
                </div>
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
        return "admin/publication/form.html.twig";
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
        return array (  203 => 59,  184 => 41,  163 => 21,  151 => 10,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Modérer publication - NOVAS Admin{% endblock %}
{% block page_title %}Modération de publication{% endblock %}
{% block page_subtitle %}Examiner et modérer le contenu signalé{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto\">
    {# Alert Banner #}
    <div class=\"bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-2xl p-6 mb-6 flex items-start gap-4\">
        <div class=\"w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0\"><i data-lucide=\"alert-triangle\" class=\"w-6 h-6\"></i></div>
        <div>
            <h3 class=\"font-semibold text-amber-900 dark:text-amber-400 mb-1\">Publication signalée</h3>
            <p class=\"text-amber-700 dark:text-amber-300 text-sm\">Cette publication a été signalée par 3 utilisateurs pour \"contenu inapproprié\".</p>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            {# Publication Content #}
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"flex items-center gap-3 mb-6\">
                    <img src=\"https://ui-avatars.com/api/?name=Marie+Dubois&background=random\" class=\"w-12 h-12 rounded-full\">
                    <div>
                        <p class=\"font-semibold text-slate-900 dark:text-white\">Marie Dubois</p>
                        <p class=\"text-sm text-slate-500\">L3 Informatique • Il y a 2 heures</p>
                    </div>
                    <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Académique</span>
                </div>
                
                <h3 class=\"text-xl font-bold text-slate-900 dark:text-white mb-3\">Conseils pour réussir les examens de Machine Learning ?</h3>
                <p class=\"text-slate-600 dark:text-slate-400 leading-relaxed mb-6\">Les examens approchent et j'aimerais avoir vos conseils pour bien réviser le cours de ML. Quelles ressources utilisez-vous ?</p>
                
                <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"heart\" class=\"w-4 h-4\"></i>24 likes</span>
                    <span class=\"flex items-center gap-2\"><i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>12 commentaires</span>
                </div>
            </div>

            {# Comments #}
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Commentaires (12)</h3>
                <div class=\"space-y-4\">
                    <div class=\"flex gap-3 p-4 rounded-xl bg-slate-50 dark:bg-slate-700/30\">
                        <img src=\"https://ui-avatars.com/api/?name=Thomas+Bernard&background=random\" class=\"w-10 h-10 rounded-full\">
                        <div class=\"flex-1\">
                            <div class=\"flex items-center gap-2 mb-1\">
                                <span class=\"font-semibold text-slate-900 dark:text-white\">Thomas Bernard</span>
                                <span class=\"text-xs text-slate-500\">Il y a 1 heure</span>
                            </div>
                            <p class=\"text-slate-600 dark:text-slate-400 text-sm\">Je te conseille les vidéos de 3Blue1Brown sur YouTube !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Sidebar Actions #}
        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Décision</h3>
                <div class=\"space-y-3\">
                    <button onclick=\"if(confirm('Approuver cette publication ?')) showToast('Publication approuvée', 'success')\" class=\"w-full p-4 rounded-xl border-2 border-emerald-500 bg-emerald-50 dark:bg-emerald-900/20 text-emerald-700 dark:text-emerald-400 hover:bg-emerald-100 dark:hover:bg-emerald-900/30 transition-colors text-left\">
                        <div class=\"flex items-center gap-3\"><i data-lucide=\"check-circle\" class=\"w-6 h-6\"></i><div><p class=\"font-semibold\">Approuver</p><p class=\"text-xs opacity-80\">Conforme aux règles</p></div></div>
                    </button>
                    <button onclick=\"if(confirm('Masquer cette publication ?')) showToast('Publication masquée', 'warning')\" class=\"w-full p-4 rounded-xl border-2 border-amber-500 bg-amber-50 dark:bg-amber-900/20 text-amber-700 dark:text-amber-400 hover:bg-amber-100 dark:hover:bg-amber-900/30 transition-colors text-left\">
                        <div class=\"flex items-center gap-3\"><i data-lucide=\"eye-off\" class=\"w-6 h-6\"></i><div><p class=\"font-semibold\">Masquer</p><p class=\"text-xs opacity-80\">Retirer temporairement</p></div></div>
                    </button>
                    <button onclick=\"if(confirm('SUPPRIMER définitivement ?')) showToast('Publication supprimée', 'success')\" class=\"w-full p-4 rounded-xl border-2 border-rose-500 bg-rose-50 dark:bg-rose-900/20 text-rose-700 dark:text-rose-400 hover:bg-rose-100 dark:hover:bg-rose-900/30 transition-colors text-left\">
                        <div class=\"flex items-center gap-3\"><i data-lucide=\"trash-2\" class=\"w-6 h-6\"></i><div><p class=\"font-semibold\">Supprimer</p><p class=\"text-xs opacity-80\">Effacer définitivement</p></div></div>
                    </button>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Signalements</h3>
                <div class=\"space-y-3\">
                    <div class=\"flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-slate-700/30\">
                        <div class=\"w-8 h-8 rounded-full bg-rose-100 dark:bg-rose-900/30 text-rose-600 flex items-center justify-center text-xs font-bold\">1</div>
                        <div class=\"flex-1\"><p class=\"text-sm font-medium text-slate-900 dark:text-white\">Contenu inapproprié</p><p class=\"text-xs text-slate-500\">Il y a 2 heures</p></div>
                    </div>
                    <div class=\"flex items-center gap-3 p-3 rounded-xl bg-slate-50 dark:bg-slate-700/30\">
                        <div class=\"w-8 h-8 rounded-full bg-rose-100 dark:bg-rose-900/30 text-rose-600 flex items-center justify-center text-xs font-bold\">2</div>
                        <div class=\"flex-1\"><p class=\"text-sm font-medium text-slate-900 dark:text-white\">Harcèlement</p><p class=\"text-xs text-slate-500\">Il y a 1 heure</p></div>
                    </div>
                </div>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Historique auteur</h3>
                <div class=\"space-y-2 text-sm\">
                    <div class=\"flex justify-between\"><span class=\"text-slate-500\">Membre depuis</span><span class=\"font-medium text-slate-900 dark:text-white\">Sept 2023</span></div>
                    <div class=\"flex justify-between\"><span class=\"text-slate-500\">Publications</span><span class=\"font-medium text-slate-900 dark:text-white\">23</span></div>
                    <div class=\"flex justify-between\"><span class=\"text-slate-500\">Signalements</span><span class=\"font-medium text-emerald-600\">0 précédent</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/publication/form.html.twig", "C:\\Users\\khali\\projet_web_java_novas\\templates\\admin\\publication\\form.html.twig");
    }
}
