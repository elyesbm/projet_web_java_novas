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
                <div class=\"p-3 rounded-xl bg-violet-100 dark:bg-violet-900/30 text-violet-600\">
                    <i data-lucide=\"message-square\" class=\"w-6 h-6\"></i>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPublications"]) || array_key_exists("totalPublications", $context) ? $context["totalPublications"] : (function () { throw new RuntimeError('Variable "totalPublications" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Publications</p>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-pink-100 dark:bg-pink-900/30 text-pink-600 mb-4\">
                <i data-lucide=\"message-circle\" class=\"w-6 h-6\"></i>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCommentaires"]) || array_key_exists("totalCommentaires", $context) ? $context["totalCommentaires"] : (function () { throw new RuntimeError('Variable "totalCommentaires" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Commentaires</p>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 mb-4\">
                <i data-lucide=\"flag\" class=\"w-6 h-6\"></i>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</p>
            <p class=\"text-sm text-slate-500\">Signalés</p>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 mb-4\">
                <i data-lucide=\"heart\" class=\"w-6 h-6\"></i>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalLikes"]) || array_key_exists("totalLikes", $context) ? $context["totalLikes"] : (function () { throw new RuntimeError('Variable "totalLikes" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Likes</p>
        </div>
    </div>

    ";
        // line 48
        yield "    <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_list");
        yield "\"
          class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-4\">
        <div class=\"flex flex-col md:flex-row md:items-center gap-4\">

            <div class=\"relative flex-1\">
                <input
                    type=\"text\"
                    name=\"q\"
                    value=\"";
        // line 56
        yield (((array_key_exists("q", $context) &&  !(null === $context["q"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["q"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "get", ["q"], "method", false, false, false, 56), "html", null, true)));
        yield "\"
                    placeholder=\"Rechercher (titre, contenu, auteur)...\"
                    class=\"w-full h-12 bg-slate-50 dark:bg-slate-700/40 border border-slate-200 dark:border-slate-700 rounded-xl pl-12 pr-4
                           text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/30 focus:border-violet-500 transition-all\"
                />
                <button type=\"submit\"
                        class=\"absolute left-3 top-1/2 -translate-y-1/2 p-1 text-slate-400 hover:text-violet-600 transition-colors\"
                        title=\"Rechercher\">
                    <i data-lucide=\"search\" class=\"w-5 h-5\"></i>
                </button>
            </div>

            <div class=\"md:w-72 w-full\">
                <select
                    name=\"sort\"
                    onchange=\"this.form.submit()\"
                    class=\"w-full h-12 bg-slate-50 dark:bg-slate-700/40 border border-slate-200 dark:border-slate-700 rounded-xl px-4
                           text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/30 focus:border-violet-500 transition-all\"
                >
                    <option value=\"created_desc\" ";
        // line 75
        yield ((((((array_key_exists("sort", $context) &&  !(null === $context["sort"]))) ? ($context["sort"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "query", [], "any", false, false, false, 75), "get", ["sort"], "method", false, false, false, 75))) == "created_desc")) ? ("selected") : (""));
        yield ">
                        Dernière création
                    </option>
                    <option value=\"updated_desc\" ";
        // line 78
        yield ((((((array_key_exists("sort", $context) &&  !(null === $context["sort"]))) ? ($context["sort"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "query", [], "any", false, false, false, 78), "get", ["sort"], "method", false, false, false, 78))) == "updated_desc")) ? ("selected") : (""));
        yield ">
                        Dernière modification
                    </option>
                </select>
            </div>

            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_list");
        yield "\"
               class=\"h-12 inline-flex items-center justify-center px-4 rounded-xl text-sm font-semibold
                      bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-600 transition\">
                Réinitialiser
            </a>
        </div>
    </form>

    ";
        // line 93
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('publications')\" id=\"tab-publications\"
                        class=\"py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600\">
                    Publications
                </button>

                <button onclick=\"switchTab('signales')\" id=\"tab-signales\"
                        class=\"py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2\">
                    Signalés
                    <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3</span>
                </button>
            </div>
        </div>

        ";
        // line 110
        yield "        <div class=\"p-6 space-y-6\" id=\"content-publications\">
            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 112
            yield "                ";
            $context["contextMap"] = [1 => "academic", 2 => "personal", 3 => "help"];
            // line 113
            yield "                ";
            $context["contexte"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["contextMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 113), [], "array", true, true, false, 113) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 113, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 113), [], "array", false, false, false, 113)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 113, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 113), [], "array", false, false, false, 113)) : ("help"));
            // line 114
            yield "
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                    <div class=\"flex items-center gap-3 mb-4\">
                        ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 117) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 117), "IMAGE", [], "any", false, false, false, 117))) {
                // line 118
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 118), "IMAGE", [], "any", false, false, false, 118))), "html", null, true);
                yield "\" class=\"w-12 h-12 rounded-full object-cover\">
                        ";
            } else {
                // line 120
                yield "                            <div class=\"w-12 h-12 rounded-full bg-slate-200 dark:bg-slate-600 flex items-center justify-center font-bold text-slate-700 dark:text-white\">
                                ";
                // line 121
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 121), "PRENOM", [], "any", false, false, false, 121)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 121), "NOM", [], "any", false, false, false, 121))), "html", null, true)) : ("U"));
                yield "
                            </div>
                        ";
            }
            // line 124
            yield "
                        <div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">
                                ";
            // line 127
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 127), "PRENOM", [], "any", false, false, false, 127) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 127), "NOM", [], "any", false, false, false, 127)), "html", null, true)) : ("Utilisateur"));
            yield "
                            </p>
                            <p class=\"text-sm text-slate-500\">
                                ";
            // line 130
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 130), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                                ";
            // line 131
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateModification", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "                                    <span class=\"text-xs text-slate-400\"> • modifié ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateModification", [], "any", false, false, false, 132), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                ";
            }
            // line 134
            yield "                            </p>
                        </div>

                        <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium
                            ";
            // line 138
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 138, $this->source); })()) == "academic")) ? ("bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400") : ((((            // line 139
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 139, $this->source); })()) == "personal")) ? ("bg-pink-100 text-pink-700 dark:bg-pink-900/30 dark:text-pink-400") : ("bg-violet-100 text-violet-700 dark:bg-violet-900/30 dark:text-violet-400"))));
            // line 140
            yield "\">

                            ";
            // line 142
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 142, $this->source); })()) == "academic")) ? ("Académique") : (((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 142, $this->source); })()) == "personal")) ? ("Personnel") : ("Entraide"))));
            yield "
                        </span>
                    </div>

                    <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 146), "html", null, true);
            yield "</h3>
                    <p class=\"text-slate-600 dark:text-slate-400 mb-4\">
                        ";
            // line 148
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 148)) > 140)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 148), 0, 140) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 148), "html", null, true)));
            yield "
                    </p>

                    <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-4 h-4\"></i>";
            // line 153
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 153)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 153), "html", null, true)) : (0));
            yield " likes
                        </span>

                        ";
            // line 157
            yield "                        <button
                            type=\"button\"
                            onclick=\"toggleAdminComments(";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 159), "html", null, true);
            yield ")\"
                            class=\"flex items-center gap-2 hover:text-violet-600 transition-colors\"
                            title=\"Afficher/Masquer les commentaires\"
                        >
                            <i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 163)), "html", null, true);
            yield " commentaires
                        </button>

                        <div class=\"ml-auto flex gap-2\">
                            <a href=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 167)]), "html", null, true);
            yield "\"
                               class=\"px-3 py-2 rounded-lg bg-violet-50 dark:bg-violet-900/20 text-violet-600 text-sm font-medium hover:bg-violet-100 dark:hover:bg-violet-900/30 transition-colors\">
                                Modérer
                            </a>

                            <form method=\"post\" action=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            yield "\"
                                  onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_delete_pub_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 174))), "html", null, true);
            yield "\">
                                <button class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\" title=\"Supprimer\">
                                    <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    ";
            // line 183
            yield "                    <div id=\"admin-comments-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 183), "html", null, true);
            yield "\" class=\"hidden mt-4 space-y-3\">
                        ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 184));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 185
                yield "                            <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 border border-slate-100 dark:border-slate-700\">
                                <div class=\"flex items-center justify-between mb-2\">
                                    <div class=\"text-sm\">
                                        <span class=\"font-semibold text-slate-900 dark:text-white\">
                                            ";
                // line 189
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 189), "PRENOM", [], "any", false, false, false, 189) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 189), "NOM", [], "any", false, false, false, 189)), "html", null, true)) : ("Utilisateur"));
                yield "
                                        </span>
                                        <span class=\"text-xs text-slate-500\">
                                            • ";
                // line 192
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCreation", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCreation", [], "any", false, false, false, 192), "d/m/Y H:i"), "html", null, true)) : (""));
                yield "
                                        </span>
                                    </div>

                                    <button
                                        type=\"button\"
                                        class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\"
                                        title=\"Supprimer\"
                                        onclick=\"if(confirm('Supprimer ce commentaire ?')) showToast('Suppression à implémenter', 'warning')\"
                                    >
                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                    </button>
                                </div>

                                <p class=\"text-slate-600 dark:text-slate-400 text-sm\">";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 206), "html", null, true);
                yield "</p>
                            </div>
                        ";
                $context['_iterated'] = true;
            }
            // line 208
            if (!$context['_iterated']) {
                // line 209
                yield "                            <p class=\"text-slate-500 text-sm\">Aucun commentaire.</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "                    </div>

                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 214
        if (!$context['_iterated']) {
            // line 215
            yield "                <p class=\"text-slate-500 text-center py-12\">Aucune publication.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pub'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "        </div>

        ";
        // line 220
        yield "        <div class=\"p-6 hidden space-y-6\" id=\"content-signales\">
            <div class=\"bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-2xl p-6\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0\">
                        <i data-lucide=\"alert-triangle\" class=\"w-6 h-6\"></i>
                    </div>
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
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_edit", ["id" => 1]);
        yield "\" class=\"px-4 py-2 rounded-lg bg-violet-100 dark:bg-violet-900/30 text-violet-700 text-sm font-medium hover:bg-violet-200 dark:hover:bg-violet-900/50 transition-colors\">Examiner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function switchTab(tab) {
        ['publications', 'signales'].forEach(t => {
            const content = document.getElementById('content-' + t);
            const btn = document.getElementById('tab-' + t);
            if (!content || !btn) return;

            content.classList.toggle('hidden', t !== tab);

            const isActive = (t === tab);

            const baseClass = t === 'signales'
                ? 'py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2'
                : 'py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300';

            const activeClass = t === 'signales'
                ? 'py-4 text-sm font-semibold text-rose-600 border-b-2 border-rose-600 flex items-center gap-2'
                : 'py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600';

            btn.className = isActive ? activeClass : baseClass;
        });

        if (window.lucide) lucide.createIcons();
    }

    function toggleAdminComments(pubId) {
        const el = document.getElementById('admin-comments-' + pubId);
        if (!el) return;
        el.classList.toggle('hidden');
        if (window.lucide) lucide.createIcons();
    }

    document.addEventListener('DOMContentLoaded', () => {
        switchTab('publications');
        if (window.lucide) lucide.createIcons();
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
        return array (  512 => 238,  492 => 220,  488 => 217,  481 => 215,  479 => 214,  472 => 211,  465 => 209,  463 => 208,  456 => 206,  439 => 192,  433 => 189,  427 => 185,  422 => 184,  417 => 183,  406 => 174,  401 => 172,  393 => 167,  386 => 163,  379 => 159,  375 => 157,  369 => 153,  361 => 148,  356 => 146,  349 => 142,  345 => 140,  343 => 139,  342 => 138,  336 => 134,  330 => 132,  328 => 131,  324 => 130,  318 => 127,  313 => 124,  307 => 121,  304 => 120,  298 => 118,  296 => 117,  291 => 114,  288 => 113,  285 => 112,  280 => 111,  277 => 110,  259 => 93,  248 => 84,  239 => 78,  233 => 75,  211 => 56,  199 => 48,  191 => 42,  172 => 26,  161 => 18,  152 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
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
                <div class=\"p-3 rounded-xl bg-violet-100 dark:bg-violet-900/30 text-violet-600\">
                    <i data-lucide=\"message-square\" class=\"w-6 h-6\"></i>
                </div>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">{{ totalPublications }}</p>
            <p class=\"text-sm text-slate-500\">Publications</p>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-pink-100 dark:bg-pink-900/30 text-pink-600 mb-4\">
                <i data-lucide=\"message-circle\" class=\"w-6 h-6\"></i>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">{{ totalCommentaires }}</p>
            <p class=\"text-sm text-slate-500\">Commentaires</p>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 mb-4\">
                <i data-lucide=\"flag\" class=\"w-6 h-6\"></i>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">12</p>
            <p class=\"text-sm text-slate-500\">Signalés</p>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <div class=\"p-3 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 mb-4\">
                <i data-lucide=\"heart\" class=\"w-6 h-6\"></i>
            </div>
            <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">{{ totalLikes }}</p>
            <p class=\"text-sm text-slate-500\">Likes</p>
        </div>
    </div>

    {# ✅ Recherche + Tri (BACK) #}
    <form method=\"get\" action=\"{{ path('app_admin_publications_list') }}\"
          class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-4\">
        <div class=\"flex flex-col md:flex-row md:items-center gap-4\">

            <div class=\"relative flex-1\">
                <input
                    type=\"text\"
                    name=\"q\"
                    value=\"{{ q ?? app.request.query.get('q') }}\"
                    placeholder=\"Rechercher (titre, contenu, auteur)...\"
                    class=\"w-full h-12 bg-slate-50 dark:bg-slate-700/40 border border-slate-200 dark:border-slate-700 rounded-xl pl-12 pr-4
                           text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/30 focus:border-violet-500 transition-all\"
                />
                <button type=\"submit\"
                        class=\"absolute left-3 top-1/2 -translate-y-1/2 p-1 text-slate-400 hover:text-violet-600 transition-colors\"
                        title=\"Rechercher\">
                    <i data-lucide=\"search\" class=\"w-5 h-5\"></i>
                </button>
            </div>

            <div class=\"md:w-72 w-full\">
                <select
                    name=\"sort\"
                    onchange=\"this.form.submit()\"
                    class=\"w-full h-12 bg-slate-50 dark:bg-slate-700/40 border border-slate-200 dark:border-slate-700 rounded-xl px-4
                           text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/30 focus:border-violet-500 transition-all\"
                >
                    <option value=\"created_desc\" {{ (sort ?? app.request.query.get('sort')) == 'created_desc' ? 'selected' : '' }}>
                        Dernière création
                    </option>
                    <option value=\"updated_desc\" {{ (sort ?? app.request.query.get('sort')) == 'updated_desc' ? 'selected' : '' }}>
                        Dernière modification
                    </option>
                </select>
            </div>

            <a href=\"{{ path('app_admin_publications_list') }}\"
               class=\"h-12 inline-flex items-center justify-center px-4 rounded-xl text-sm font-semibold
                      bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-600 transition\">
                Réinitialiser
            </a>
        </div>
    </form>

    {# Tabs #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('publications')\" id=\"tab-publications\"
                        class=\"py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600\">
                    Publications
                </button>

                <button onclick=\"switchTab('signales')\" id=\"tab-signales\"
                        class=\"py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2\">
                    Signalés
                    <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3</span>
                </button>
            </div>
        </div>

        {# ===================== ONGLET PUBLICATIONS ===================== #}
        <div class=\"p-6 space-y-6\" id=\"content-publications\">
            {% for pub in publications %}
                {% set contextMap = { 1: 'academic', 2: 'personal', 3: 'help' } %}
                {% set contexte = contextMap[pub.contexte] ?? 'help' %}

                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                    <div class=\"flex items-center gap-3 mb-4\">
                        {% if pub.auteur and pub.auteur.IMAGE %}
                            <img src=\"{{ asset('images/' ~ pub.auteur.IMAGE) }}\" class=\"w-12 h-12 rounded-full object-cover\">
                        {% else %}
                            <div class=\"w-12 h-12 rounded-full bg-slate-200 dark:bg-slate-600 flex items-center justify-center font-bold text-slate-700 dark:text-white\">
                                {{ pub.auteur ? (pub.auteur.PRENOM|first ~ pub.auteur.NOM|first) : 'U' }}
                            </div>
                        {% endif %}

                        <div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">
                                {{ pub.auteur ? (pub.auteur.PRENOM ~ ' ' ~ pub.auteur.NOM) : 'Utilisateur' }}
                            </p>
                            <p class=\"text-sm text-slate-500\">
                                {{ pub.dateCreation ? pub.dateCreation|date('d/m/Y H:i') : '' }}
                                {% if pub.dateModification %}
                                    <span class=\"text-xs text-slate-400\"> • modifié {{ pub.dateModification|date('d/m/Y H:i') }}</span>
                                {% endif %}
                            </p>
                        </div>

                        <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium
                            {{ contexte == 'academic' ? 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400' :
                               contexte == 'personal' ? 'bg-pink-100 text-pink-700 dark:bg-pink-900/30 dark:text-pink-400' :
                               'bg-violet-100 text-violet-700 dark:bg-violet-900/30 dark:text-violet-400' }}\">

                            {{ contexte == 'academic' ? 'Académique' : contexte == 'personal' ? 'Personnel' : 'Entraide' }}
                        </span>
                    </div>

                    <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">{{ pub.titre }}</h3>
                    <p class=\"text-slate-600 dark:text-slate-400 mb-4\">
                        {{ pub.contenu|length > 140 ? pub.contenu|slice(0, 140) ~ '...' : pub.contenu }}
                    </p>

                    <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-4 h-4\"></i>{{ pub.likes ?? 0 }} likes
                        </span>

                        {# ✅ Un seul bouton commentaires #}
                        <button
                            type=\"button\"
                            onclick=\"toggleAdminComments({{ pub.id }})\"
                            class=\"flex items-center gap-2 hover:text-violet-600 transition-colors\"
                            title=\"Afficher/Masquer les commentaires\"
                        >
                            <i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>{{ pub.commentaires|length }} commentaires
                        </button>

                        <div class=\"ml-auto flex gap-2\">
                            <a href=\"{{ path('app_admin_publications_edit', {id: pub.id}) }}\"
                               class=\"px-3 py-2 rounded-lg bg-violet-50 dark:bg-violet-900/20 text-violet-600 text-sm font-medium hover:bg-violet-100 dark:hover:bg-violet-900/30 transition-colors\">
                                Modérer
                            </a>

                            <form method=\"post\" action=\"{{ path('app_admin_publications_delete', {id: pub.id}) }}\"
                                  onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_delete_pub_' ~ pub.id) }}\">
                                <button class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\" title=\"Supprimer\">
                                    <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    {# ===================== COMMENTAIRES SOUS LA PUBLICATION ===================== #}
                    <div id=\"admin-comments-{{ pub.id }}\" class=\"hidden mt-4 space-y-3\">
                        {% for c in pub.commentaires %}
                            <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 border border-slate-100 dark:border-slate-700\">
                                <div class=\"flex items-center justify-between mb-2\">
                                    <div class=\"text-sm\">
                                        <span class=\"font-semibold text-slate-900 dark:text-white\">
                                            {{ c.auteur ? (c.auteur.PRENOM ~ ' ' ~ c.auteur.NOM) : 'Utilisateur' }}
                                        </span>
                                        <span class=\"text-xs text-slate-500\">
                                            • {{ c.dateCreation ? c.dateCreation|date('d/m/Y H:i') : '' }}
                                        </span>
                                    </div>

                                    <button
                                        type=\"button\"
                                        class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\"
                                        title=\"Supprimer\"
                                        onclick=\"if(confirm('Supprimer ce commentaire ?')) showToast('Suppression à implémenter', 'warning')\"
                                    >
                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                    </button>
                                </div>

                                <p class=\"text-slate-600 dark:text-slate-400 text-sm\">{{ c.contenu }}</p>
                            </div>
                        {% else %}
                            <p class=\"text-slate-500 text-sm\">Aucun commentaire.</p>
                        {% endfor %}
                    </div>

                </div>
            {% else %}
                <p class=\"text-slate-500 text-center py-12\">Aucune publication.</p>
            {% endfor %}
        </div>

        {# ===================== ONGLET SIGNALÉS ===================== #}
        <div class=\"p-6 hidden space-y-6\" id=\"content-signales\">
            <div class=\"bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-2xl p-6\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0\">
                        <i data-lucide=\"alert-triangle\" class=\"w-6 h-6\"></i>
                    </div>
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

<script>
    function switchTab(tab) {
        ['publications', 'signales'].forEach(t => {
            const content = document.getElementById('content-' + t);
            const btn = document.getElementById('tab-' + t);
            if (!content || !btn) return;

            content.classList.toggle('hidden', t !== tab);

            const isActive = (t === tab);

            const baseClass = t === 'signales'
                ? 'py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2'
                : 'py-4 text-sm font-semibold text-slate-500 hover:text-slate-700 dark:hover:text-slate-300';

            const activeClass = t === 'signales'
                ? 'py-4 text-sm font-semibold text-rose-600 border-b-2 border-rose-600 flex items-center gap-2'
                : 'py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600';

            btn.className = isActive ? activeClass : baseClass;
        });

        if (window.lucide) lucide.createIcons();
    }

    function toggleAdminComments(pubId) {
        const el = document.getElementById('admin-comments-' + pubId);
        if (!el) return;
        el.classList.toggle('hidden');
        if (window.lucide) lucide.createIcons();
    }

    document.addEventListener('DOMContentLoaded', () => {
        switchTab('publications');
        if (window.lucide) lucide.createIcons();
    });
</script>

{% endblock %}
", "admin/publication/list.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\admin\\publication\\list.html.twig");
    }
}
