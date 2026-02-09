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

        yield "Bienvenue, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "PRENOM", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "NOM", [], "any", false, false, false, 4), "html", null, true);
        
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

        yield "Vue d'ensemble personnalisée de votre profil et de la plateforme";
        
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
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-lg p-6 border border-slate-200 dark:border-slate-700 shadow-sm\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"relative\">
                    ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "IMAGE", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "IMAGE", [], "any", false, false, false, 16), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "PRENOM", [], "any", false, false, false, 16), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "NOM", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"w-16 h-16 rounded-lg object-cover\">
                    ";
        } else {
            // line 18
            yield "                        <div class=\"w-16 h-16 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center\">
                            <div class=\"w-16 h-16 rounded-lg bg-gradient-to-br from-primary-400 to-secondary-400 flex items-center justify-center text-white font-bold text-xl\">
                                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "PRENOM", [], "any", false, false, false, 20), 0, 1), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "NOM", [], "any", false, false, false, 20), 0, 1), "html", null, true);
            yield "
                            </div>
                        </div>
                    ";
        }
        // line 24
        yield "                </div>
                <div>
                    <h2 class=\"text-xl font-semibold text-slate-900 dark:text-white\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "PRENOM", [], "any", false, false, false, 26), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "NOM", [], "any", false, false, false, 26), "html", null, true);
        yield "</h2>
                    <p class=\"text-sm text-slate-500 dark:text-slate-400\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "EMAIL", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
                    <div class=\"mt-2 flex items-center gap-3\">
                        <span class=\"inline-block px-2 py-1 text-xs font-medium bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded\">
                            ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "ROLE", [], "any", false, false, false, 30) == "ROLE_ADMIN")) {
            // line 31
            yield "                                Administrateur
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "ROLE", [], "any", false, false, false, 32) == "ROLE_FORMATEUR")) {
            // line 33
            yield "                                Formateur
                            ";
        } else {
            // line 35
            yield "                                Utilisateur
                            ";
        }
        // line 37
        yield "                        </span>
                        ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "NUMERO", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                            <span class=\"text-xs text-slate-500 dark:text-slate-400\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "NUMERO", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>
                        ";
        }
        // line 41
        yield "                    </div>
                </div>
            </div>
            <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors font-medium text-sm flex items-center gap-2\">
                <i data-lucide=\"edit\" class=\"w-4 h-4\"></i>
                <span class=\"hidden sm:inline\">Modifier</span>
            </a>
        </div>
    </div>
    
    ";
        // line 52
        yield "    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
        ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "ROLE", [], "any", false, false, false, 53) == "ROLE_ADMIN")) {
            // line 54
            yield "            ";
            // line 55
            yield "            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600\"><i data-lucide=\"users\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full\">Gestion</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,234</h3>
                <p class=\"text-sm text-slate-500\">Utilisateurs actifs</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-rose-100 dark:bg-rose-900/30 text-rose-600\"><i data-lucide=\"shopping-bag\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-rose-600 bg-rose-50 px-2 py-1 rounded-full\">Contenu</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">456</h3>
                <p class=\"text-sm text-slate-500\">Articles marketplace</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-full\">Emplois</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">89</h3>
                <p class=\"text-sm text-slate-500\">Offres d'emploi actives</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600\"><i data-lucide=\"calendar-days\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full\">Formations</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">32</h3>
                <p class=\"text-sm text-slate-500\">Ateliers ce mois</p>
            </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 90
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "ROLE", [], "any", false, false, false, 90) == "ROLE_FORMATEUR")) {
            // line 91
            yield "            ";
            // line 92
            yield "            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"calendar\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full\">Vos ateliers</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</h3>
                <p class=\"text-sm text-slate-500\">Ateliers créés</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600\"><i data-lucide=\"users\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded-full\">Participants</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">245</h3>
                <p class=\"text-sm text-slate-500\">Participants inscrits</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600\"><i data-lucide=\"star\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full\">Évaluations</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">4.8/5</h3>
                <p class=\"text-sm text-slate-500\">Note moyenne</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-orange-100 dark:bg-orange-900/30 text-orange-600\"><i data-lucide=\"trending-up\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-orange-600 bg-orange-50 px-2 py-1 rounded-full\">Revenus</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,450€</h3>
                <p class=\"text-sm text-slate-500\">Ce mois</p>
            </div>
        ";
        } else {
            // line 128
            yield "            ";
            // line 129
            yield "            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"book-open\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full\">Formations</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">5</h3>
                <p class=\"text-sm text-slate-500\">Ateliers suivis</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600\"><i data-lucide=\"briefcase\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full\">Emplois</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">3</h3>
                <p class=\"text-sm text-slate-500\">Candidatures actives</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600\"><i data-lucide=\"shopping-bag\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded-full\">Marketplace</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">8</h3>
                <p class=\"text-sm text-slate-500\">Articles en favoris</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600\"><i data-lucide=\"zap\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-yellow-600 bg-yellow-50 px-2 py-1 rounded-full\">Compétences</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</h3>
                <p class=\"text-sm text-slate-500\">Compétences validées</p>
            </div>
        ";
        }
        // line 165
        yield "    </div>

    ";
        // line 168
        yield "    <div class=\"bg-gradient-to-r from-primary-600 to-secondary-600 rounded-2xl p-8 text-white shadow-lg\">
        <h3 class=\"text-xl font-bold mb-6\">Actions rapides</h3>
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
            ";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "ROLE", [], "any", false, false, false, 171) == "ROLE_ADMIN")) {
            // line 172
            yield "                ";
            // line 173
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_new");
            yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"user-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Nouvel utilisateur</p>
                </a>
                <a href=\"";
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_new");
            yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"package-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Nouvel article</p>
                </a>
                <a href=\"";
            // line 181
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_new");
            yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"calendar-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Nouvel atelier</p>
                </a>
                <a href=\"";
            // line 185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_new");
            yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"zap\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Nouvelle compétence</p>
                </a>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 189
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "ROLE", [], "any", false, false, false, 189) == "ROLE_FORMATEUR")) {
            // line 190
            yield "                ";
            // line 191
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_new");
            yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"calendar-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Créer un atelier</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"message-circle\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Messages</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"bar-chart-2\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Statistiques</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"settings\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Paramètres</p>
                </a>
            ";
        } else {
            // line 208
            yield "                ";
            // line 209
            yield "                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"book-open\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Explorer ateliers</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"briefcase\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Parcourir emplois</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"shopping-bag\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Marketplace</p>
                </a>
                <a href=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 221, $this->source); })()), "id", [], "any", false, false, false, 221)]), "html", null, true);
            yield "\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"settings\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Paramètres</p>
                </a>
            ";
        }
        // line 226
        yield "        </div>
    </div>

    ";
        // line 230
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
        return array (  464 => 230,  459 => 226,  451 => 221,  437 => 209,  435 => 208,  414 => 191,  412 => 190,  410 => 189,  403 => 185,  396 => 181,  389 => 177,  381 => 173,  379 => 172,  377 => 171,  372 => 168,  368 => 165,  330 => 129,  328 => 128,  290 => 92,  288 => 91,  286 => 90,  249 => 55,  247 => 54,  245 => 53,  242 => 52,  232 => 44,  227 => 41,  221 => 39,  219 => 38,  216 => 37,  212 => 35,  208 => 33,  206 => 32,  203 => 31,  201 => 30,  195 => 27,  189 => 26,  185 => 24,  177 => 20,  173 => 18,  163 => 16,  161 => 15,  155 => 11,  151 => 8,  138 => 7,  115 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Dashboard - NOVAS Admin{% endblock %}
{% block page_title %}Bienvenue, {{ user.PRENOM }} {{ user.NOM }}{% endblock %}
{% block page_subtitle %}Vue d'ensemble personnalisée de votre profil et de la plateforme{% endblock %}

{% block body %}
<div class=\"space-y-8 animate-fade-in\">
    
    {# Profile Card - Minimaliste #}
    <div class=\"bg-white dark:bg-slate-800 rounded-lg p-6 border border-slate-200 dark:border-slate-700 shadow-sm\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"relative\">
                    {% if user.IMAGE %}
                        <img src=\"{{ user.IMAGE }}\" alt=\"{{ user.PRENOM }} {{ user.NOM }}\" class=\"w-16 h-16 rounded-lg object-cover\">
                    {% else %}
                        <div class=\"w-16 h-16 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center\">
                            <div class=\"w-16 h-16 rounded-lg bg-gradient-to-br from-primary-400 to-secondary-400 flex items-center justify-center text-white font-bold text-xl\">
                                {{ user.PRENOM|slice(0,1) }}{{ user.NOM|slice(0,1) }}
                            </div>
                        </div>
                    {% endif %}
                </div>
                <div>
                    <h2 class=\"text-xl font-semibold text-slate-900 dark:text-white\">{{ user.PRENOM }} {{ user.NOM }}</h2>
                    <p class=\"text-sm text-slate-500 dark:text-slate-400\">{{ user.EMAIL }}</p>
                    <div class=\"mt-2 flex items-center gap-3\">
                        <span class=\"inline-block px-2 py-1 text-xs font-medium bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded\">
                            {% if user.ROLE == 'ROLE_ADMIN' %}
                                Administrateur
                            {% elseif user.ROLE == 'ROLE_FORMATEUR' %}
                                Formateur
                            {% else %}
                                Utilisateur
                            {% endif %}
                        </span>
                        {% if user.NUMERO %}
                            <span class=\"text-xs text-slate-500 dark:text-slate-400\">{{ user.NUMERO }}</span>
                        {% endif %}
                    </div>
                </div>
            </div>
            <a href=\"{{ path('app_admin_users_edit', {'id': user.id}) }}\" class=\"px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors font-medium text-sm flex items-center gap-2\">
                <i data-lucide=\"edit\" class=\"w-4 h-4\"></i>
                <span class=\"hidden sm:inline\">Modifier</span>
            </a>
        </div>
    </div>
    
    {# Stats Cards - Personnalisées selon le rôle #}
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
        {% if user.ROLE == 'ROLE_ADMIN' %}
            {# Statistiques pour l'Administrateur #}
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600\"><i data-lucide=\"users\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full\">Gestion</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,234</h3>
                <p class=\"text-sm text-slate-500\">Utilisateurs actifs</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-rose-100 dark:bg-rose-900/30 text-rose-600\"><i data-lucide=\"shopping-bag\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-rose-600 bg-rose-50 px-2 py-1 rounded-full\">Contenu</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">456</h3>
                <p class=\"text-sm text-slate-500\">Articles marketplace</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-full\">Emplois</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">89</h3>
                <p class=\"text-sm text-slate-500\">Offres d'emploi actives</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600\"><i data-lucide=\"calendar-days\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full\">Formations</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">32</h3>
                <p class=\"text-sm text-slate-500\">Ateliers ce mois</p>
            </div>
        {% elseif user.ROLE == 'ROLE_FORMATEUR' %}
            {# Statistiques pour le Formateur #}
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"calendar\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full\">Vos ateliers</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</h3>
                <p class=\"text-sm text-slate-500\">Ateliers créés</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600\"><i data-lucide=\"users\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded-full\">Participants</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">245</h3>
                <p class=\"text-sm text-slate-500\">Participants inscrits</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600\"><i data-lucide=\"star\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full\">Évaluations</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">4.8/5</h3>
                <p class=\"text-sm text-slate-500\">Note moyenne</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-orange-100 dark:bg-orange-900/30 text-orange-600\"><i data-lucide=\"trending-up\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-orange-600 bg-orange-50 px-2 py-1 rounded-full\">Revenus</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">1,450€</h3>
                <p class=\"text-sm text-slate-500\">Ce mois</p>
            </div>
        {% else %}
            {# Statistiques pour l'Utilisateur Normal #}
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"book-open\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full\">Formations</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">5</h3>
                <p class=\"text-sm text-slate-500\">Ateliers suivis</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600\"><i data-lucide=\"briefcase\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full\">Emplois</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">3</h3>
                <p class=\"text-sm text-slate-500\">Candidatures actives</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600\"><i data-lucide=\"shopping-bag\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded-full\">Marketplace</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">8</h3>
                <p class=\"text-sm text-slate-500\">Articles en favoris</p>
            </div>
            
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 hover-card\">
                <div class=\"flex items-center justify-between mb-4\">
                    <div class=\"p-3 rounded-xl bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600\"><i data-lucide=\"zap\" class=\"w-6 h-6\"></i></div>
                    <span class=\"text-xs font-bold text-yellow-600 bg-yellow-50 px-2 py-1 rounded-full\">Compétences</span>
                </div>
                <h3 class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</h3>
                <p class=\"text-sm text-slate-500\">Compétences validées</p>
            </div>
        {% endif %}
    </div>

    {# Quick Actions - Personnalisées selon le rôle #}
    <div class=\"bg-gradient-to-r from-primary-600 to-secondary-600 rounded-2xl p-8 text-white shadow-lg\">
        <h3 class=\"text-xl font-bold mb-6\">Actions rapides</h3>
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
            {% if user.ROLE == 'ROLE_ADMIN' %}
                {# Actions pour Administrateur #}
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
            {% elseif user.ROLE == 'ROLE_FORMATEUR' %}
                {# Actions pour Formateur #}
                <a href=\"{{ path('app_admin_ateliers_new') }}\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"calendar-plus\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Créer un atelier</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"message-circle\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Messages</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"bar-chart-2\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Statistiques</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"settings\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Paramètres</p>
                </a>
            {% else %}
                {# Actions pour Utilisateur Normal #}
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"book-open\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Explorer ateliers</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"briefcase\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Parcourir emplois</p>
                </a>
                <a href=\"#\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"shopping-bag\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Marketplace</p>
                </a>
                <a href=\"{{ path('app_admin_users_edit', {'id': user.id}) }}\" class=\"p-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all text-center group\">
                    <i data-lucide=\"settings\" class=\"w-8 h-8 mx-auto mb-2 group-hover:scale-110 transition-transform\"></i>
                    <p class=\"font-medium\">Paramètres</p>
                </a>
            {% endif %}
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
{% endblock %}", "admin/dashboard.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\dashboard.html.twig");
    }
}
