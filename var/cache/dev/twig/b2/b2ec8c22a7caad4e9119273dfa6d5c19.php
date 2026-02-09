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
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('publications')\" id=\"tab-publications\" class=\"py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600\">
                    Publications
                </button>

                <button onclick=\"switchTab('signales')\" id=\"tab-signales\" class=\"py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2\">
                    Signalés
                    <span class=\"px-2 py-0.5 rounded-full bg-rose-100 text-rose-600 text-xs\">3</span>
                </button>
            </div>
        </div>

        ";
        // line 63
        yield "        <div class=\"p-6 space-y-6\" id=\"content-publications\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 65
            yield "                ";
            $context["contextMap"] = [1 => "academic", 2 => "personal", 3 => "help"];
            // line 66
            yield "                ";
            $context["contexte"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["contextMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 66), [], "array", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 66, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 66), [], "array", false, false, false, 66)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 66, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 66), [], "array", false, false, false, 66)) : ("help"));
            // line 67
            yield "
                <div class=\"bg-slate-50 dark:bg-slate-700/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 hover-card\">
                    <div class=\"flex items-center gap-3 mb-4\">
                        ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 70) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 70), "IMAGE", [], "any", false, false, false, 70))) {
                // line 71
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 71), "IMAGE", [], "any", false, false, false, 71))), "html", null, true);
                yield "\" class=\"w-12 h-12 rounded-full object-cover\">
                        ";
            } else {
                // line 73
                yield "                            <div class=\"w-12 h-12 rounded-full bg-slate-200 dark:bg-slate-600 flex items-center justify-center font-bold text-slate-700 dark:text-white\">
                                ";
                // line 74
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 74), "PRENOM", [], "any", false, false, false, 74)) . Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 74), "NOM", [], "any", false, false, false, 74))), "html", null, true)) : ("U"));
                yield "
                            </div>
                        ";
            }
            // line 77
            yield "
                        <div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">
                                ";
            // line 80
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 80), "PRENOM", [], "any", false, false, false, 80) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 80), "NOM", [], "any", false, false, false, 80)), "html", null, true)) : ("Utilisateur"));
            yield "
                            </p>
                            <p class=\"text-sm text-slate-500\">
                                ";
            // line 83
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 83), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                            </p>
                        </div>

                        <span class=\"ml-auto px-3 py-1 rounded-full text-xs font-medium
                            ";
            // line 88
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 88, $this->source); })()) == "academic")) ? ("bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400") : ((((            // line 89
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 89, $this->source); })()) == "personal")) ? ("bg-pink-100 text-pink-700 dark:bg-pink-900/30 dark:text-pink-400") : ("bg-violet-100 text-violet-700 dark:bg-violet-900/30 dark:text-violet-400"))));
            // line 90
            yield "\">
                            ";
            // line 91
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 91, $this->source); })()) == "academic")) ? ("Académique") : (((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 91, $this->source); })()) == "personal")) ? ("Personnel") : ("Entraide"))));
            yield "
                        </span>
                    </div>

                    <h3 class=\"text-lg font-bold text-slate-900 dark:text-white mb-2\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 95), "html", null, true);
            yield "</h3>
                    <p class=\"text-slate-600 dark:text-slate-400 mb-4\">
                        ";
            // line 97
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 97)) > 140)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 97), 0, 140) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 97), "html", null, true)));
            yield "
                    </p>

                    <div class=\"flex items-center gap-6 text-sm text-slate-500 border-t border-slate-200 dark:border-slate-700 pt-4\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-4 h-4\"></i>";
            // line 102
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", true, true, false, 102) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 102)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 102), "html", null, true)) : (0));
            yield " likes
                        </span>

                        ";
            // line 106
            yield "                        <button
                            type=\"button\"
                            onclick=\"toggleAdminComments(";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 108), "html", null, true);
            yield ")\"
                            class=\"flex items-center gap-2 hover:text-violet-600 transition-colors\"
                            title=\"Afficher/Masquer les commentaires\"
                        >
                            <i data-lucide=\"message-circle\" class=\"w-4 h-4\"></i>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 112)), "html", null, true);
            yield " commentaires
                        </button>

                        <div class=\"ml-auto flex gap-2\">
                            <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\"
                               class=\"px-3 py-2 rounded-lg bg-violet-50 dark:bg-violet-900/20 text-violet-600 text-sm font-medium hover:bg-violet-100 dark:hover:bg-violet-900/30 transition-colors\">
                                Modérer
                            </a>

                            <form method=\"post\" action=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\"
                                  onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_delete_pub_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 123))), "html", null, true);
            yield "\">
                                <button class=\"p-2 rounded-lg hover:bg-rose-100 dark:hover:bg-rose-900/30 text-rose-600 transition-colors\" title=\"Supprimer\">
                                    <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    ";
            // line 132
            yield "                    <div id=\"admin-comments-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 132), "html", null, true);
            yield "\" class=\"hidden mt-4 space-y-3\">
                        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 133));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 134
                yield "                            <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 border border-slate-100 dark:border-slate-700\">
                                <div class=\"flex items-center justify-between mb-2\">
                                    <div class=\"text-sm\">
                                        <span class=\"font-semibold text-slate-900 dark:text-white\">
                                            ";
                // line 138
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 138), "PRENOM", [], "any", false, false, false, 138) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "auteur", [], "any", false, false, false, 138), "NOM", [], "any", false, false, false, 138)), "html", null, true)) : ("Utilisateur"));
                yield "
                                        </span>
                                        <span class=\"text-xs text-slate-500\">
                                            • ";
                // line 141
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCreation", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCreation", [], "any", false, false, false, 141), "d/m/Y H:i"), "html", null, true)) : (""));
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
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 155), "html", null, true);
                yield "</p>
                            </div>
                        ";
                $context['_iterated'] = true;
            }
            // line 157
            if (!$context['_iterated']) {
                // line 158
                yield "                            <p class=\"text-slate-500 text-sm\">Aucun commentaire.</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "                    </div>

                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 163
        if (!$context['_iterated']) {
            // line 164
            yield "                <p class=\"text-slate-500 text-center py-12\">Aucune publication.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pub'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "        </div>

        ";
        // line 169
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
        // line 187
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
        return array (  439 => 187,  419 => 169,  415 => 166,  408 => 164,  406 => 163,  399 => 160,  392 => 158,  390 => 157,  383 => 155,  366 => 141,  360 => 138,  354 => 134,  349 => 133,  344 => 132,  333 => 123,  328 => 121,  320 => 116,  313 => 112,  306 => 108,  302 => 106,  296 => 102,  288 => 97,  283 => 95,  276 => 91,  273 => 90,  271 => 89,  270 => 88,  262 => 83,  256 => 80,  251 => 77,  245 => 74,  242 => 73,  236 => 71,  234 => 70,  229 => 67,  226 => 66,  223 => 65,  218 => 64,  215 => 63,  199 => 48,  191 => 42,  172 => 26,  161 => 18,  152 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
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

    {# Tabs #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700\">
        <div class=\"border-b border-slate-200 dark:border-slate-700 px-6 flex items-center justify-between\">
            <div class=\"flex gap-6\">
                <button onclick=\"switchTab('publications')\" id=\"tab-publications\" class=\"py-4 text-sm font-semibold text-violet-600 border-b-2 border-violet-600\">
                    Publications
                </button>

                <button onclick=\"switchTab('signales')\" id=\"tab-signales\" class=\"py-4 text-sm font-semibold text-rose-500 hover:text-rose-600 flex items-center gap-2\">
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
