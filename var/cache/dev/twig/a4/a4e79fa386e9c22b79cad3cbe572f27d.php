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
            </div>
            <p class=\"text-3xl font-bold\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSkills"]) || array_key_exists("totalSkills", $context) ? $context["totalSkills"] : (function () { throw new RuntimeError('Variable "totalSkills" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</p>
            <p class=\"text-cyan-100\">Compétences</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\"><i data-lucide=\"route\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPaths"]) || array_key_exists("totalPaths", $context) ? $context["totalPaths"] : (function () { throw new RuntimeError('Variable "totalPaths" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</p><p class=\"text-slate-500\">Parcours</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"trending-up\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">—</p><p class=\"text-slate-500\">Certifications</p></div>
        </div>
    </div>

    ";
        // line 30
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button type=\"button\" data-tab=\"skills\" class=\"tab-admin py-4 text-sm font-semibold text-cyan-600 border-b-2 border-cyan-600 -mb-px\">Compétences</button>
                <button type=\"button\" data-tab=\"paths\" class=\"tab-admin py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 border-b-2 border-transparent -mb-px\">Parcours</button>
            </div>
            <div id=\"btn-new-skills\" class=\"flex items-center gap-2\">
                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-cyan-600 hover:bg-cyan-700 text-white text-sm transition-colors shadow-lg shadow-cyan-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouveau
                </a>
            </div>
            <div id=\"btn-new-paths\" class=\"flex items-center gap-2 hidden\">
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_learning_path_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm transition-colors shadow-lg shadow-indigo-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouveau parcours
                </a>
            </div>
        </div>

        ";
        // line 51
        yield "        <div id=\"content-skills\" class=\"tab-content p-6\">
            ";
        // line 53
        yield "            <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "\" id=\"form-filters-admin\" class=\"flex flex-col lg:flex-row gap-4 items-end lg:items-center mb-6 p-4 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-slate-100 dark:border-slate-700\">
                <div class=\"relative flex-1 w-full\">
                    <i data-lucide=\"search\" class=\"absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400\"></i>
                    <input type=\"text\" name=\"q\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 56, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher (nom, description)...\" class=\"w-full h-11 pl-10 pr-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500\">
                </div>
                <div class=\"flex gap-2 flex-wrap items-center\">
                    <span class=\"text-sm text-slate-500 hidden sm:inline\">Type :</span>
                    <button type=\"submit\" name=\"type\" value=\"\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 60
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 60, $this->source); })()))) ? ("bg-cyan-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Tous</button>
                    <button type=\"submit\" name=\"type\" value=\"soft\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 61
        yield ((((isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 61, $this->source); })()) == "soft")) ? ("bg-purple-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Soft</button>
                    <button type=\"submit\" name=\"type\" value=\"hard\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 62
        yield ((((isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 62, $this->source); })()) == "hard")) ? ("bg-blue-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Hard</button>
                </div>
                <div class=\"flex gap-2 items-center w-full lg:w-auto\">
                    <label for=\"filter-cat-admin\" class=\"text-sm text-slate-500 hidden sm:inline\">Catégorie :</label>
                    <select name=\"categorie\" id=\"filter-cat-admin\" onchange=\"document.getElementById('form-filters-admin').submit()\" class=\"h-11 px-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm min-w-[160px] focus:ring-2 focus:ring-cyan-500\">
                        <option value=\"\">Toutes</option>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 69
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["search_categorie"]) || array_key_exists("search_categorie", $context) ? $context["search_categorie"] : (function () { throw new RuntimeError('Variable "search_categorie" does not exist.', 69, $this->source); })()) == $context["cat"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                    </select>
                </div>
                <button type=\"submit\" class=\"h-11 px-5 rounded-lg bg-cyan-600 hover:bg-cyan-700 text-white text-sm font-medium flex items-center gap-2 shrink-0\">
                    <i data-lucide=\"search\" class=\"w-4 h-4\"></i>
                    Appliquer
                </button>
            </form>

            ";
        // line 79
        if ((((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 79, $this->source); })()) || (isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 79, $this->source); })())) || (isset($context["search_categorie"]) || array_key_exists("search_categorie", $context) ? $context["search_categorie"] : (function () { throw new RuntimeError('Variable "search_categorie" does not exist.', 79, $this->source); })()))) {
            // line 80
            yield "            <div class=\"flex items-center justify-between mb-4\">
                <p class=\"text-sm text-slate-500\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 81, $this->source); })())), "html", null, true);
            yield " résultat(s)";
            if ((($tmp = (isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " pour « ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 81, $this->source); })()), "html", null, true);
                yield " »";
            }
            yield "</p>
                <a href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
            yield "\" class=\"text-sm text-cyan-600 hover:underline\">Réinitialiser</a>
            </div>
            ";
        }
        // line 85
        yield "
            ";
        // line 87
        yield "            ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 87, $this->source); })()))) {
            // line 88
            yield "            <div class=\"text-center py-12 rounded-xl bg-slate-50 dark:bg-slate-700/30 border border-slate-100 dark:border-slate-700\">
                ";
            // line 89
            if ((((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 89, $this->source); })()) || (isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 89, $this->source); })())) || (isset($context["search_categorie"]) || array_key_exists("search_categorie", $context) ? $context["search_categorie"] : (function () { throw new RuntimeError('Variable "search_categorie" does not exist.', 89, $this->source); })()))) {
                // line 90
                yield "                <i data-lucide=\"search-x\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucun skill trouvé</p>
                <p class=\"text-sm text-slate-500 mb-4\">Modifiez la recherche ou <a href=\"";
                // line 92
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
                yield "\" class=\"text-cyan-600 hover:underline\">réinitialisez les filtres</a>.</p>
                <a href=\"";
                // line 93
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
                yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-cyan-600 text-white text-sm hover:bg-cyan-700\">Voir tout</a>
                ";
            } else {
                // line 95
                yield "                <i data-lucide=\"zap\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucune compétence</p>
                <p class=\"text-sm text-slate-500 mb-4\"><a href=\"";
                // line 97
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_new");
                yield "\" class=\"text-cyan-600 hover:underline\">Créer la première</a>.</p>
                <a href=\"";
                // line 98
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_new");
                yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-cyan-600 text-white text-sm hover:bg-cyan-700\"><i data-lucide=\"plus\" class=\"w-4 h-4\"></i> Nouveau</a>
                ";
            }
            // line 100
            yield "            </div>
            ";
        } else {
            // line 102
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\" id=\"skills-grid\">
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 104
                yield "                ";
                $context["typeSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "contexteSkill", [], "any", false, false, false, 104) == "hard")) ? ("hard") : ("soft"));
                // line 105
                yield "                ";
                $context["iconSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "contexteSkill", [], "any", false, false, false, 105) == "hard")) ? ("code") : ("heart"));
                // line 106
                yield "                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 hover-card border border-slate-100 dark:border-slate-700 relative overflow-hidden group\">
                    <div class=\"absolute top-0 right-0 w-32 h-32 bg-blue-400/10 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110\"></div>
                    <div class=\"relative\">
                        <div class=\"flex items-start justify-between mb-4\">
                            <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconSkill"]) || array_key_exists("iconSkill", $context) ? $context["iconSkill"] : (function () { throw new RuntimeError('Variable "iconSkill" does not exist.', 110, $this->source); })()), "html", null, true);
                yield "\" class=\"w-6 h-6\"></i></div>
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 111, $this->source); })()), "html", null, true);
                yield "</span>
                        </div>
                        <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-1\">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "nomSkill", [], "any", false, false, false, 113), "html", null, true);
                yield "</h3>
                        <p class=\"text-sm text-slate-500 mb-3\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "categorie", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                        <p class=\"text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2\">";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "descriptionSkill", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "descriptionSkill", [], "any", false, false, false, 115), "—")) : ("—")), "html", null, true);
                yield "</p>
                        <div class=\"flex gap-2\">
                            <a href=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\" class=\"flex-1 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">Modifier</a>
                            <form method=\"post\" action=\"";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                yield "\" class=\"inline\" onsubmit=\"return confirm('Supprimer cette compétence ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_skill_" . CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 119))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"px-3 py-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "            </div>
            ";
        }
        // line 128
        yield "        </div>

        ";
        // line 131
        yield "        <div id=\"content-paths\" class=\"tab-content hidden p-6\">
            ";
        // line 133
        yield "            <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "\" id=\"form-filters-paths\" class=\"flex flex-col lg:flex-row gap-4 items-end lg:items-center mb-6 p-4 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-slate-100 dark:border-slate-700\">
                <input type=\"hidden\" name=\"tab\" value=\"paths\">
                <div class=\"relative flex-1 w-full\">
                    <i data-lucide=\"search\" class=\"absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400\"></i>
                    <input type=\"text\" name=\"q_path\" value=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_q_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_q_path"]) || array_key_exists("search_q_path", $context) ? $context["search_q_path"] : (function () { throw new RuntimeError('Variable "search_q_path" does not exist.', 137, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher (titre, description, compétence)...\" class=\"w-full h-11 pl-10 pr-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500\">
                </div>
                <div class=\"flex gap-2 flex-wrap items-center\">
                    <span class=\"text-sm text-slate-500 hidden sm:inline\">Niveau :</span>
                    <button type=\"submit\" name=\"niveau_path\" value=\"\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 141
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["search_niveau_path"]) || array_key_exists("search_niveau_path", $context) ? $context["search_niveau_path"] : (function () { throw new RuntimeError('Variable "search_niveau_path" does not exist.', 141, $this->source); })()))) ? ("bg-indigo-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Tous</button>
                    <button type=\"submit\" name=\"niveau_path\" value=\"1\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 142
        yield ((((isset($context["search_niveau_path"]) || array_key_exists("search_niveau_path", $context) ? $context["search_niveau_path"] : (function () { throw new RuntimeError('Variable "search_niveau_path" does not exist.', 142, $this->source); })()) == "1")) ? ("bg-amber-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Débutant</button>
                    <button type=\"submit\" name=\"niveau_path\" value=\"2\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 143
        yield ((((isset($context["search_niveau_path"]) || array_key_exists("search_niveau_path", $context) ? $context["search_niveau_path"] : (function () { throw new RuntimeError('Variable "search_niveau_path" does not exist.', 143, $this->source); })()) == "2")) ? ("bg-blue-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Intermédiaire</button>
                    <button type=\"submit\" name=\"niveau_path\" value=\"3\" class=\"px-4 py-2 rounded-lg text-sm font-medium ";
        // line 144
        yield ((((isset($context["search_niveau_path"]) || array_key_exists("search_niveau_path", $context) ? $context["search_niveau_path"] : (function () { throw new RuntimeError('Variable "search_niveau_path" does not exist.', 144, $this->source); })()) == "3")) ? ("bg-emerald-600 text-white") : ("bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500"));
        yield "\">Avancé</button>
                </div>
                <div class=\"flex gap-2 items-center w-full lg:w-auto\">
                    <label for=\"filter-statut-path\" class=\"text-sm text-slate-500 hidden sm:inline\">Statut :</label>
                    <select name=\"statut_path\" id=\"filter-statut-path\" onchange=\"document.getElementById('form-filters-paths').submit()\" class=\"h-11 px-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm min-w-[140px] focus:ring-2 focus:ring-indigo-500\">
                        <option value=\"\">Tous</option>
                        <option value=\"1\" ";
        // line 150
        yield ((((isset($context["search_statut_path"]) || array_key_exists("search_statut_path", $context) ? $context["search_statut_path"] : (function () { throw new RuntimeError('Variable "search_statut_path" does not exist.', 150, $this->source); })()) == "1")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"0\" ";
        // line 151
        yield ((((isset($context["search_statut_path"]) || array_key_exists("search_statut_path", $context) ? $context["search_statut_path"] : (function () { throw new RuntimeError('Variable "search_statut_path" does not exist.', 151, $this->source); })()) == "0")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>
                <button type=\"submit\" class=\"h-11 px-5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium flex items-center gap-2 shrink-0\">
                    <i data-lucide=\"search\" class=\"w-4 h-4\"></i>
                    Appliquer
                </button>
            </form>

            ";
        // line 160
        if ((((isset($context["search_q_path"]) || array_key_exists("search_q_path", $context) ? $context["search_q_path"] : (function () { throw new RuntimeError('Variable "search_q_path" does not exist.', 160, $this->source); })()) || ((((array_key_exists("search_niveau_path", $context) &&  !(null === $context["search_niveau_path"]))) ? ($context["search_niveau_path"]) : ("")) != "")) || ((((array_key_exists("search_statut_path", $context) &&  !(null === $context["search_statut_path"]))) ? ($context["search_statut_path"]) : ("")) != ""))) {
            // line 161
            yield "            <div class=\"flex items-center justify-between mb-4\">
                <p class=\"text-sm text-slate-500\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["learningPaths"]) || array_key_exists("learningPaths", $context) ? $context["learningPaths"] : (function () { throw new RuntimeError('Variable "learningPaths" does not exist.', 162, $this->source); })())), "html", null, true);
            yield " résultat(s)";
            if ((($tmp = (isset($context["search_q_path"]) || array_key_exists("search_q_path", $context) ? $context["search_q_path"] : (function () { throw new RuntimeError('Variable "search_q_path" does not exist.', 162, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " pour « ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_q_path"]) || array_key_exists("search_q_path", $context) ? $context["search_q_path"] : (function () { throw new RuntimeError('Variable "search_q_path" does not exist.', 162, $this->source); })()), "html", null, true);
                yield " »";
            }
            yield "</p>
                <a href=\"";
            // line 163
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
            yield "?tab=paths\" class=\"text-sm text-indigo-600 hover:underline\">Réinitialiser</a>
            </div>
            ";
        }
        // line 166
        yield "
            <div class=\"flex items-center justify-between mb-6\">
                <p class=\"text-sm text-slate-500\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["learningPaths"]) || array_key_exists("learningPaths", $context) ? $context["learningPaths"] : (function () { throw new RuntimeError('Variable "learningPaths" does not exist.', 168, $this->source); })())), "html", null, true);
        yield " parcours</p>
                <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_learning_path_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouveau parcours
                </a>
            </div>
            ";
        // line 174
        $context["has_path_filters"] = (((isset($context["search_q_path"]) || array_key_exists("search_q_path", $context) ? $context["search_q_path"] : (function () { throw new RuntimeError('Variable "search_q_path" does not exist.', 174, $this->source); })()) || ((((array_key_exists("search_niveau_path", $context) &&  !(null === $context["search_niveau_path"]))) ? ($context["search_niveau_path"]) : ("")) != "")) || ((((array_key_exists("search_statut_path", $context) &&  !(null === $context["search_statut_path"]))) ? ($context["search_statut_path"]) : ("")) != ""));
        // line 175
        yield "            ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["learningPaths"]) || array_key_exists("learningPaths", $context) ? $context["learningPaths"] : (function () { throw new RuntimeError('Variable "learningPaths" does not exist.', 175, $this->source); })()))) {
            // line 176
            yield "            <div class=\"text-center py-12 rounded-xl bg-slate-50 dark:bg-slate-700/30 border border-slate-100 dark:border-slate-700\">
                ";
            // line 177
            if ((($tmp = (isset($context["has_path_filters"]) || array_key_exists("has_path_filters", $context) ? $context["has_path_filters"] : (function () { throw new RuntimeError('Variable "has_path_filters" does not exist.', 177, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "                <i data-lucide=\"search-x\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucun parcours trouvé</p>
                <p class=\"text-sm text-slate-500 mb-4\">Modifiez la recherche ou <a href=\"";
                // line 180
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
                yield "?tab=paths\" class=\"text-indigo-600 hover:underline\">réinitialisez les filtres</a>.</p>
                <a href=\"";
                // line 181
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
                yield "?tab=paths\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm hover:bg-indigo-700\">Voir tout</a>
                ";
            } else {
                // line 183
                yield "                <i data-lucide=\"route\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucun parcours</p>
                <p class=\"text-sm text-slate-500 mb-4\"><a href=\"";
                // line 185
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_learning_path_new");
                yield "\" class=\"text-indigo-600 hover:underline\">Créer le premier</a>.</p>
                <a href=\"";
                // line 186
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_learning_path_new");
                yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm hover:bg-indigo-700\"><i data-lucide=\"plus\" class=\"w-4 h-4\"></i> Nouveau parcours</a>
                ";
            }
            // line 188
            yield "            </div>
            ";
        } else {
            // line 190
            yield "            <div class=\"overflow-x-auto\">
                <table class=\"w-full text-left\">
                    <thead>
                        <tr class=\"border-b border-slate-200 dark:border-slate-700 text-slate-500 text-sm\">
                            <th class=\"pb-3 font-semibold\">Titre</th>
                            <th class=\"pb-3 font-semibold\">Compétence</th>
                            <th class=\"pb-3 font-semibold\">Durée</th>
                            <th class=\"pb-3 font-semibold\">Niveau</th>
                            <th class=\"pb-3 font-semibold\">Statut</th>
                            <th class=\"pb-3 font-semibold text-right\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["learningPaths"]) || array_key_exists("learningPaths", $context) ? $context["learningPaths"] : (function () { throw new RuntimeError('Variable "learningPaths" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lp"]) {
                // line 204
                yield "                        <tr class=\"border-b border-slate-100 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/30\">
                            <td class=\"py-4 font-medium text-slate-900 dark:text-white\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "titrePath", [], "any", false, false, false, 205), "html", null, true);
                yield "</td>
                            <td class=\"py-4 text-slate-600 dark:text-slate-400\">";
                // line 206
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "skill", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "skill", [], "any", false, false, false, 206), "nomSkill", [], "any", false, false, false, 206), "html", null, true)) : ("—"));
                yield "</td>
                            <td class=\"py-4 text-slate-600 dark:text-slate-400\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "dureeEstimee", [], "any", false, false, false, 207), "html", null, true);
                yield " h</td>
                            <td class=\"py-4\">
                                ";
                // line 209
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "niveauPath", [], "any", false, false, false, 209) == 1)) {
                    yield "<span class=\"px-2 py-1 rounded text-xs bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400\">Débutant</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 210
$context["lp"], "niveauPath", [], "any", false, false, false, 210) == 2)) {
                    yield "<span class=\"px-2 py-1 rounded text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400\">Intermédiaire</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 211
$context["lp"], "niveauPath", [], "any", false, false, false, 211) == 3)) {
                    yield "<span class=\"px-2 py-1 rounded text-xs bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400\">Avancé</span>
                                ";
                } else {
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "niveauPath", [], "any", false, false, false, 212), "html", null, true);
                }
                // line 213
                yield "                            </td>
                            <td class=\"py-4\">
                                <span class=\"px-2 py-1 rounded text-xs ";
                // line 215
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "statutPath", [], "any", false, false, false, 215) == 1)) ? ("bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400") : ("bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400"));
                yield "\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "statutPath", [], "any", false, false, false, 215) == 1)) ? ("Actif") : ("Inactif"));
                yield "</span>
                            </td>
                            <td class=\"py-4 text-right\">
                                <a href=\"";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_learning_path_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "id", [], "any", false, false, false, 218)]), "html", null, true);
                yield "\" class=\"inline-flex items-center gap-1 px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-400 text-sm hover:bg-slate-100 dark:hover:bg-slate-600\">Modifier</a>
                                <form method=\"post\" action=\"";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_learning_path_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "id", [], "any", false, false, false, 219)]), "html", null, true);
                yield "\" class=\"inline ml-1\" onsubmit=\"return confirm('Supprimer ce parcours ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_learning_path_" . CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "id", [], "any", false, false, false, 220))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"inline-flex items-center gap-1 px-3 py-1.5 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 text-sm hover:bg-rose-50 dark:hover:bg-rose-900/20\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            yield "                    </tbody>
                </table>
            </div>
            ";
        }
        // line 230
        yield "        </div>
    </div>
</div>

<script>
(function() {
    const params = new URLSearchParams(window.location.search);
    const tab = params.get('tab');
    if (tab === 'paths') {
        document.querySelectorAll('.tab-admin').forEach(b => {
            b.classList.remove('text-cyan-600', 'border-cyan-600', 'text-slate-500', 'border-transparent');
            b.classList.add('text-slate-500', 'border-transparent');
            if (b.dataset.tab === 'paths') {
                b.classList.remove('text-slate-500', 'border-transparent');
                b.classList.add('text-indigo-600', 'border-b-2', 'border-indigo-600');
            }
        });
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
        document.getElementById('content-paths')?.classList.remove('hidden');
        document.getElementById('btn-new-skills')?.classList.add('hidden');
        document.getElementById('btn-new-paths')?.classList.remove('hidden');
    }
})();
document.querySelectorAll('.tab-admin').forEach(btn => {
    btn.addEventListener('click', function() {
        const tab = this.dataset.tab;
        document.querySelectorAll('.tab-admin').forEach(b => {
            b.classList.remove('text-cyan-600', 'border-cyan-600', 'text-indigo-600', 'border-indigo-600');
            b.classList.add('text-slate-500', 'border-transparent');
        });
        this.classList.remove('text-slate-500', 'border-transparent');
        if (tab === 'paths') {
            this.classList.add('text-indigo-600', 'border-b-2', 'border-indigo-600');
        } else {
            this.classList.add('text-cyan-600', 'border-b-2', 'border-cyan-600');
        }
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
        document.getElementById('content-' + tab).classList.remove('hidden');
        document.getElementById('btn-new-skills').classList.toggle('hidden', tab !== 'skills');
        document.getElementById('btn-new-paths').classList.toggle('hidden', tab !== 'paths');
    });
});
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
        return array (  620 => 230,  614 => 226,  602 => 220,  598 => 219,  594 => 218,  586 => 215,  582 => 213,  579 => 212,  574 => 211,  570 => 210,  566 => 209,  561 => 207,  557 => 206,  553 => 205,  550 => 204,  546 => 203,  531 => 190,  527 => 188,  522 => 186,  518 => 185,  514 => 183,  509 => 181,  505 => 180,  501 => 178,  499 => 177,  496 => 176,  493 => 175,  491 => 174,  483 => 169,  479 => 168,  475 => 166,  469 => 163,  459 => 162,  456 => 161,  454 => 160,  442 => 151,  438 => 150,  429 => 144,  425 => 143,  421 => 142,  417 => 141,  410 => 137,  402 => 133,  399 => 131,  395 => 128,  391 => 126,  378 => 119,  374 => 118,  370 => 117,  365 => 115,  361 => 114,  357 => 113,  352 => 111,  348 => 110,  342 => 106,  339 => 105,  336 => 104,  332 => 103,  329 => 102,  325 => 100,  320 => 98,  316 => 97,  312 => 95,  307 => 93,  303 => 92,  299 => 90,  297 => 89,  294 => 88,  291 => 87,  288 => 85,  282 => 82,  272 => 81,  269 => 80,  267 => 79,  257 => 71,  244 => 69,  240 => 68,  231 => 62,  227 => 61,  223 => 60,  216 => 56,  209 => 53,  206 => 51,  196 => 43,  187 => 37,  178 => 30,  167 => 21,  159 => 16,  152 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
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
            </div>
            <p class=\"text-3xl font-bold\">{{ totalSkills }}</p>
            <p class=\"text-cyan-100\">Compétences</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\"><i data-lucide=\"route\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">{{ totalPaths }}</p><p class=\"text-slate-500\">Parcours</p></div>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"trending-up\" class=\"w-7 h-7\"></i></div>
            <div><p class=\"text-3xl font-bold text-slate-900 dark:text-white\">—</p><p class=\"text-slate-500\">Certifications</p></div>
        </div>
    </div>

    {# Onglets Compétences | Parcours #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button type=\"button\" data-tab=\"skills\" class=\"tab-admin py-4 text-sm font-semibold text-cyan-600 border-b-2 border-cyan-600 -mb-px\">Compétences</button>
                <button type=\"button\" data-tab=\"paths\" class=\"tab-admin py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 border-b-2 border-transparent -mb-px\">Parcours</button>
            </div>
            <div id=\"btn-new-skills\" class=\"flex items-center gap-2\">
                <a href=\"{{ path('app_admin_skills_new') }}\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-cyan-600 hover:bg-cyan-700 text-white text-sm transition-colors shadow-lg shadow-cyan-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouveau
                </a>
            </div>
            <div id=\"btn-new-paths\" class=\"flex items-center gap-2 hidden\">
                <a href=\"{{ path('app_admin_learning_path_new') }}\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm transition-colors shadow-lg shadow-indigo-500/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouveau parcours
                </a>
            </div>
        </div>

        {# Contenu onglet Compétences #}
        <div id=\"content-skills\" class=\"tab-content p-6\">
            {# Recherche & Filtres #}
            <form method=\"get\" action=\"{{ path('app_admin_skills_list') }}\" id=\"form-filters-admin\" class=\"flex flex-col lg:flex-row gap-4 items-end lg:items-center mb-6 p-4 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-slate-100 dark:border-slate-700\">
                <div class=\"relative flex-1 w-full\">
                    <i data-lucide=\"search\" class=\"absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400\"></i>
                    <input type=\"text\" name=\"q\" value=\"{{ search_q|default('') }}\" placeholder=\"Rechercher (nom, description)...\" class=\"w-full h-11 pl-10 pr-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500\">
                </div>
                <div class=\"flex gap-2 flex-wrap items-center\">
                    <span class=\"text-sm text-slate-500 hidden sm:inline\">Type :</span>
                    <button type=\"submit\" name=\"type\" value=\"\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_type is empty ? 'bg-cyan-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Tous</button>
                    <button type=\"submit\" name=\"type\" value=\"soft\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_type == 'soft' ? 'bg-purple-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Soft</button>
                    <button type=\"submit\" name=\"type\" value=\"hard\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_type == 'hard' ? 'bg-blue-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Hard</button>
                </div>
                <div class=\"flex gap-2 items-center w-full lg:w-auto\">
                    <label for=\"filter-cat-admin\" class=\"text-sm text-slate-500 hidden sm:inline\">Catégorie :</label>
                    <select name=\"categorie\" id=\"filter-cat-admin\" onchange=\"document.getElementById('form-filters-admin').submit()\" class=\"h-11 px-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm min-w-[160px] focus:ring-2 focus:ring-cyan-500\">
                        <option value=\"\">Toutes</option>
                        {% for cat in categories %}
                        <option value=\"{{ cat }}\" {{ search_categorie == cat ? 'selected' : '' }}>{{ cat }}</option>
                        {% endfor %}
                    </select>
                </div>
                <button type=\"submit\" class=\"h-11 px-5 rounded-lg bg-cyan-600 hover:bg-cyan-700 text-white text-sm font-medium flex items-center gap-2 shrink-0\">
                    <i data-lucide=\"search\" class=\"w-4 h-4\"></i>
                    Appliquer
                </button>
            </form>

            {% if search_q or search_type or search_categorie %}
            <div class=\"flex items-center justify-between mb-4\">
                <p class=\"text-sm text-slate-500\">{{ skills|length }} résultat(s){% if search_q %} pour « {{ search_q }} »{% endif %}</p>
                <a href=\"{{ path('app_admin_skills_list') }}\" class=\"text-sm text-cyan-600 hover:underline\">Réinitialiser</a>
            </div>
            {% endif %}

            {# Grille des skills #}
            {% if skills is empty %}
            <div class=\"text-center py-12 rounded-xl bg-slate-50 dark:bg-slate-700/30 border border-slate-100 dark:border-slate-700\">
                {% if search_q or search_type or search_categorie %}
                <i data-lucide=\"search-x\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucun skill trouvé</p>
                <p class=\"text-sm text-slate-500 mb-4\">Modifiez la recherche ou <a href=\"{{ path('app_admin_skills_list') }}\" class=\"text-cyan-600 hover:underline\">réinitialisez les filtres</a>.</p>
                <a href=\"{{ path('app_admin_skills_list') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-cyan-600 text-white text-sm hover:bg-cyan-700\">Voir tout</a>
                {% else %}
                <i data-lucide=\"zap\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucune compétence</p>
                <p class=\"text-sm text-slate-500 mb-4\"><a href=\"{{ path('app_admin_skills_new') }}\" class=\"text-cyan-600 hover:underline\">Créer la première</a>.</p>
                <a href=\"{{ path('app_admin_skills_new') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-cyan-600 text-white text-sm hover:bg-cyan-700\"><i data-lucide=\"plus\" class=\"w-4 h-4\"></i> Nouveau</a>
                {% endif %}
            </div>
            {% else %}
            <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\" id=\"skills-grid\">
                {% for skill in skills %}
                {% set typeSkill = skill.contexteSkill == 'hard' ? 'hard' : 'soft' %}
                {% set iconSkill = skill.contexteSkill == 'hard' ? 'code' : 'heart' %}
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 hover-card border border-slate-100 dark:border-slate-700 relative overflow-hidden group\">
                    <div class=\"absolute top-0 right-0 w-32 h-32 bg-blue-400/10 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110\"></div>
                    <div class=\"relative\">
                        <div class=\"flex items-start justify-between mb-4\">
                            <div class=\"p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600\"><i data-lucide=\"{{ iconSkill }}\" class=\"w-6 h-6\"></i></div>
                            <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">{{ typeSkill }}</span>
                        </div>
                        <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-1\">{{ skill.nomSkill }}</h3>
                        <p class=\"text-sm text-slate-500 mb-3\">{{ skill.categorie }}</p>
                        <p class=\"text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2\">{{ skill.descriptionSkill|default('—') }}</p>
                        <div class=\"flex gap-2\">
                            <a href=\"{{ path('app_admin_skills_edit', { id: skill.id }) }}\" class=\"flex-1 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_admin_skills_delete', { id: skill.id }) }}\" class=\"inline\" onsubmit=\"return confirm('Supprimer cette compétence ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_skill_' ~ skill.id) }}\">
                                <button type=\"submit\" class=\"px-3 py-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>

        {# Contenu onglet Parcours #}
        <div id=\"content-paths\" class=\"tab-content hidden p-6\">
            {# Recherche & Filtres parcours #}
            <form method=\"get\" action=\"{{ path('app_admin_skills_list') }}\" id=\"form-filters-paths\" class=\"flex flex-col lg:flex-row gap-4 items-end lg:items-center mb-6 p-4 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-slate-100 dark:border-slate-700\">
                <input type=\"hidden\" name=\"tab\" value=\"paths\">
                <div class=\"relative flex-1 w-full\">
                    <i data-lucide=\"search\" class=\"absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400\"></i>
                    <input type=\"text\" name=\"q_path\" value=\"{{ search_q_path|default('') }}\" placeholder=\"Rechercher (titre, description, compétence)...\" class=\"w-full h-11 pl-10 pr-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500\">
                </div>
                <div class=\"flex gap-2 flex-wrap items-center\">
                    <span class=\"text-sm text-slate-500 hidden sm:inline\">Niveau :</span>
                    <button type=\"submit\" name=\"niveau_path\" value=\"\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_niveau_path is empty ? 'bg-indigo-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Tous</button>
                    <button type=\"submit\" name=\"niveau_path\" value=\"1\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_niveau_path == '1' ? 'bg-amber-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Débutant</button>
                    <button type=\"submit\" name=\"niveau_path\" value=\"2\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_niveau_path == '2' ? 'bg-blue-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Intermédiaire</button>
                    <button type=\"submit\" name=\"niveau_path\" value=\"3\" class=\"px-4 py-2 rounded-lg text-sm font-medium {{ search_niveau_path == '3' ? 'bg-emerald-600 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-500' }}\">Avancé</button>
                </div>
                <div class=\"flex gap-2 items-center w-full lg:w-auto\">
                    <label for=\"filter-statut-path\" class=\"text-sm text-slate-500 hidden sm:inline\">Statut :</label>
                    <select name=\"statut_path\" id=\"filter-statut-path\" onchange=\"document.getElementById('form-filters-paths').submit()\" class=\"h-11 px-4 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm min-w-[140px] focus:ring-2 focus:ring-indigo-500\">
                        <option value=\"\">Tous</option>
                        <option value=\"1\" {{ search_statut_path == '1' ? 'selected' : '' }}>Actif</option>
                        <option value=\"0\" {{ search_statut_path == '0' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>
                <button type=\"submit\" class=\"h-11 px-5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium flex items-center gap-2 shrink-0\">
                    <i data-lucide=\"search\" class=\"w-4 h-4\"></i>
                    Appliquer
                </button>
            </form>

            {% if search_q_path or (search_niveau_path ?? '') != '' or (search_statut_path ?? '') != '' %}
            <div class=\"flex items-center justify-between mb-4\">
                <p class=\"text-sm text-slate-500\">{{ learningPaths|length }} résultat(s){% if search_q_path %} pour « {{ search_q_path }} »{% endif %}</p>
                <a href=\"{{ path('app_admin_skills_list') }}?tab=paths\" class=\"text-sm text-indigo-600 hover:underline\">Réinitialiser</a>
            </div>
            {% endif %}

            <div class=\"flex items-center justify-between mb-6\">
                <p class=\"text-sm text-slate-500\">{{ learningPaths|length }} parcours</p>
                <a href=\"{{ path('app_admin_learning_path_new') }}\" class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouveau parcours
                </a>
            </div>
            {% set has_path_filters = search_q_path or (search_niveau_path ?? '') != '' or (search_statut_path ?? '') != '' %}
            {% if learningPaths is empty %}
            <div class=\"text-center py-12 rounded-xl bg-slate-50 dark:bg-slate-700/30 border border-slate-100 dark:border-slate-700\">
                {% if has_path_filters %}
                <i data-lucide=\"search-x\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucun parcours trouvé</p>
                <p class=\"text-sm text-slate-500 mb-4\">Modifiez la recherche ou <a href=\"{{ path('app_admin_skills_list') }}?tab=paths\" class=\"text-indigo-600 hover:underline\">réinitialisez les filtres</a>.</p>
                <a href=\"{{ path('app_admin_skills_list') }}?tab=paths\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm hover:bg-indigo-700\">Voir tout</a>
                {% else %}
                <i data-lucide=\"route\" class=\"w-12 h-12 mx-auto mb-4 text-slate-400\"></i>
                <p class=\"text-slate-600 dark:text-slate-400 mb-2\">Aucun parcours</p>
                <p class=\"text-sm text-slate-500 mb-4\"><a href=\"{{ path('app_admin_learning_path_new') }}\" class=\"text-indigo-600 hover:underline\">Créer le premier</a>.</p>
                <a href=\"{{ path('app_admin_learning_path_new') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm hover:bg-indigo-700\"><i data-lucide=\"plus\" class=\"w-4 h-4\"></i> Nouveau parcours</a>
                {% endif %}
            </div>
            {% else %}
            <div class=\"overflow-x-auto\">
                <table class=\"w-full text-left\">
                    <thead>
                        <tr class=\"border-b border-slate-200 dark:border-slate-700 text-slate-500 text-sm\">
                            <th class=\"pb-3 font-semibold\">Titre</th>
                            <th class=\"pb-3 font-semibold\">Compétence</th>
                            <th class=\"pb-3 font-semibold\">Durée</th>
                            <th class=\"pb-3 font-semibold\">Niveau</th>
                            <th class=\"pb-3 font-semibold\">Statut</th>
                            <th class=\"pb-3 font-semibold text-right\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for lp in learningPaths %}
                        <tr class=\"border-b border-slate-100 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/30\">
                            <td class=\"py-4 font-medium text-slate-900 dark:text-white\">{{ lp.titrePath }}</td>
                            <td class=\"py-4 text-slate-600 dark:text-slate-400\">{{ lp.skill ? lp.skill.nomSkill : '—' }}</td>
                            <td class=\"py-4 text-slate-600 dark:text-slate-400\">{{ lp.dureeEstimee }} h</td>
                            <td class=\"py-4\">
                                {% if lp.niveauPath == 1 %}<span class=\"px-2 py-1 rounded text-xs bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400\">Débutant</span>
                                {% elseif lp.niveauPath == 2 %}<span class=\"px-2 py-1 rounded text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400\">Intermédiaire</span>
                                {% elseif lp.niveauPath == 3 %}<span class=\"px-2 py-1 rounded text-xs bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400\">Avancé</span>
                                {% else %}{{ lp.niveauPath }}{% endif %}
                            </td>
                            <td class=\"py-4\">
                                <span class=\"px-2 py-1 rounded text-xs {{ lp.statutPath == 1 ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400' : 'bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400' }}\">{{ lp.statutPath == 1 ? 'Actif' : 'Inactif' }}</span>
                            </td>
                            <td class=\"py-4 text-right\">
                                <a href=\"{{ path('app_admin_learning_path_edit', { id: lp.id }) }}\" class=\"inline-flex items-center gap-1 px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-400 text-sm hover:bg-slate-100 dark:hover:bg-slate-600\">Modifier</a>
                                <form method=\"post\" action=\"{{ path('app_admin_learning_path_delete', { id: lp.id }) }}\" class=\"inline ml-1\" onsubmit=\"return confirm('Supprimer ce parcours ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_learning_path_' ~ lp.id) }}\">
                                    <button type=\"submit\" class=\"inline-flex items-center gap-1 px-3 py-1.5 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 text-sm hover:bg-rose-50 dark:hover:bg-rose-900/20\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            {% endif %}
        </div>
    </div>
</div>

<script>
(function() {
    const params = new URLSearchParams(window.location.search);
    const tab = params.get('tab');
    if (tab === 'paths') {
        document.querySelectorAll('.tab-admin').forEach(b => {
            b.classList.remove('text-cyan-600', 'border-cyan-600', 'text-slate-500', 'border-transparent');
            b.classList.add('text-slate-500', 'border-transparent');
            if (b.dataset.tab === 'paths') {
                b.classList.remove('text-slate-500', 'border-transparent');
                b.classList.add('text-indigo-600', 'border-b-2', 'border-indigo-600');
            }
        });
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
        document.getElementById('content-paths')?.classList.remove('hidden');
        document.getElementById('btn-new-skills')?.classList.add('hidden');
        document.getElementById('btn-new-paths')?.classList.remove('hidden');
    }
})();
document.querySelectorAll('.tab-admin').forEach(btn => {
    btn.addEventListener('click', function() {
        const tab = this.dataset.tab;
        document.querySelectorAll('.tab-admin').forEach(b => {
            b.classList.remove('text-cyan-600', 'border-cyan-600', 'text-indigo-600', 'border-indigo-600');
            b.classList.add('text-slate-500', 'border-transparent');
        });
        this.classList.remove('text-slate-500', 'border-transparent');
        if (tab === 'paths') {
            this.classList.add('text-indigo-600', 'border-b-2', 'border-indigo-600');
        } else {
            this.classList.add('text-cyan-600', 'border-b-2', 'border-cyan-600');
        }
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
        document.getElementById('content-' + tab).classList.remove('hidden');
        document.getElementById('btn-new-skills').classList.toggle('hidden', tab !== 'skills');
        document.getElementById('btn-new-paths').classList.toggle('hidden', tab !== 'paths');
    });
});
</script>
{% endblock %}
", "admin/skill/list.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\admin\\skill\\list.html.twig");
    }
}
