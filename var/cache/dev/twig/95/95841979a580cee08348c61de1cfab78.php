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
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "        <div class=\"rounded-xl bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-200 px-4 py-3\">
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "        <div class=\"rounded-xl bg-rose-50 dark:bg-rose-900/20 border border-rose-200 dark:border-rose-800 text-rose-800 dark:text-rose-200 px-4 py-3\">
            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
    ";
        // line 21
        yield "    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-slate-900 dark:text-white\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Total utilisateurs</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-emerald-600\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })())), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Affichés</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-purple-600\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_admins"]) || array_key_exists("total_admins", $context) ? $context["total_admins"] : (function () { throw new RuntimeError('Variable "total_admins" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Administrateurs</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-teal-600\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("total_psy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_psy"]) || array_key_exists("total_psy", $context) ? $context["total_psy"] : (function () { throw new RuntimeError('Variable "total_psy" does not exist.', 35, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-slate-500\">Psy</p>
        </div>
    </div>

    ";
        // line 41
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-4 flex flex-col md:flex-row gap-4 justify-between\">
        <form method=\"get\" action=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_list");
        yield "\" class=\"flex flex-1 max-w-md gap-3 flex-wrap items-center\">
            <div class=\"flex-1 min-w-[200px] relative\">
                <i data-lucide=\"search\" class=\"w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
                <input type=\"text\" name=\"q\" placeholder=\"Rechercher (nom, prénom, email)...\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 45, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
            </div>
            <select name=\"role\" class=\"px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm\" onchange=\"this.form.submit()\">
                <option value=\"\">Tous les rôles</option>
                <option value=\"ROLE_USER\" ";
        // line 49
        yield ((((isset($context["role_filter"]) || array_key_exists("role_filter", $context) ? $context["role_filter"] : (function () { throw new RuntimeError('Variable "role_filter" does not exist.', 49, $this->source); })()) == "ROLE_USER")) ? ("selected") : (""));
        yield ">Étudiant</option>
                <option value=\"ROLE_ADMIN\" ";
        // line 50
        yield ((((isset($context["role_filter"]) || array_key_exists("role_filter", $context) ? $context["role_filter"] : (function () { throw new RuntimeError('Variable "role_filter" does not exist.', 50, $this->source); })()) == "ROLE_ADMIN")) ? ("selected") : (""));
        yield ">Admin</option>
                <option value=\"ROLE_PSY\" ";
        // line 51
        yield ((((isset($context["role_filter"]) || array_key_exists("role_filter", $context) ? $context["role_filter"] : (function () { throw new RuntimeError('Variable "role_filter" does not exist.', 51, $this->source); })()) == "ROLE_PSY")) ? ("selected") : (""));
        yield ">Psy</option>
            </select>
        </form>
        <div class=\"flex gap-3\">
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary-600 hover:bg-primary-700 text-white transition-colors shadow-lg shadow-primary-500/25\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                <span>Ajouter</span>
            </a>
        </div>
    </div>

    ";
        // line 63
        yield "    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"w-full text-left\">
                <thead class=\"bg-slate-50 dark:bg-slate-700/50\">
                    <tr>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Utilisateur</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Email</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Téléphone</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Rôle</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-100 dark:divide-slate-700\">
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 77
            yield "                    <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center gap-3\">
                                ";
            // line 80
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "IMAGE", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "IMAGE", [], "any", false, false, false, 81), "html", null, true);
                yield "\" alt=\"\" class=\"w-10 h-10 rounded-full object-cover\" onerror=\"this.src='https://ui-avatars.com/api/?name=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "NOM", [], "any", false, false, false, 81)), "html", null, true);
                yield "+";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "PRENOM", [], "any", false, false, false, 81)), "html", null, true);
                yield "&background=random'\">
                                ";
            } else {
                // line 83
                yield "                                    <img src=\"https://ui-avatars.com/api/?name=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "NOM", [], "any", false, false, false, 83)), "html", null, true);
                yield "+";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "PRENOM", [], "any", false, false, false, 83)), "html", null, true);
                yield "&background=random\" class=\"w-10 h-10 rounded-full\">
                                ";
            }
            // line 85
            yield "                                <div>
                                    <p class=\"font-semibold text-slate-900 dark:text-white\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "PRENOM", [], "any", false, false, false, 86), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "NOM", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>
                                    <p class=\"text-xs text-slate-500\">#";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 87), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "EMAIL", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "NUMERO", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4\">
                            ";
            // line 94
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "ROLE", [], "any", false, false, false, 94) == "ROLE_ADMIN")) {
                // line 95
                yield "                                <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400\">Admin</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 96
$context["user"], "ROLE", [], "any", false, false, false, 96) == "ROLE_PSY")) {
                // line 97
                yield "                                <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700 dark:bg-teal-900/30 dark:text-teal-400\">Psy</span>
                            ";
            } else {
                // line 99
                yield "                                <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Étudiant</span>
                            ";
            }
            // line 101
            yield "                        </td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\" title=\"Modifier\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <form method=\"post\" action=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" class=\"inline\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("user_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 106))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\" title=\"Supprimer\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 112
        if (!$context['_iterated']) {
            // line 113
            yield "                    <tr>
                        <td colspan=\"5\" class=\"px-6 py-12 text-center text-slate-500\">Aucun utilisateur.</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                </tbody>
            </table>
        </div>

        <div class=\"px-6 py-4 border-t border-slate-200 dark:border-slate-700\">
            <p class=\"text-sm text-slate-500\">Affichage de 1 à ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 122, $this->source); })())), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 122, $this->source); })()), "html", null, true);
        yield "</p>
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
        return array (  388 => 122,  381 => 117,  372 => 113,  370 => 112,  359 => 106,  355 => 105,  351 => 104,  346 => 101,  342 => 99,  338 => 97,  336 => 96,  333 => 95,  331 => 94,  326 => 92,  322 => 91,  315 => 87,  309 => 86,  306 => 85,  298 => 83,  288 => 81,  286 => 80,  281 => 77,  276 => 76,  261 => 63,  251 => 55,  244 => 51,  240 => 50,  236 => 49,  229 => 45,  223 => 42,  220 => 41,  212 => 35,  205 => 31,  198 => 27,  191 => 23,  187 => 21,  184 => 19,  175 => 16,  172 => 15,  167 => 14,  158 => 11,  155 => 10,  151 => 9,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}Utilisateurs - NOVAS Admin{% endblock %}
{% block page_title %}Gestion des utilisateurs{% endblock %}
{% block page_subtitle %}Liste des étudiants et administrateurs{% endblock %}

{% block body %}
<div class=\"space-y-6\">
    {% for message in app.flashes('success') %}
        <div class=\"rounded-xl bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-200 px-4 py-3\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"rounded-xl bg-rose-50 dark:bg-rose-900/20 border border-rose-200 dark:border-rose-800 text-rose-800 dark:text-rose-200 px-4 py-3\">
            {{ message }}
        </div>
    {% endfor %}

    {# Stats #}
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-slate-900 dark:text-white\">{{ total }}</p>
            <p class=\"text-sm text-slate-500\">Total utilisateurs</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-emerald-600\">{{ users|length }}</p>
            <p class=\"text-sm text-slate-500\">Affichés</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-purple-600\">{{ total_admins }}</p>
            <p class=\"text-sm text-slate-500\">Administrateurs</p>
        </div>
        <div class=\"bg-white dark:bg-slate-800 rounded-xl p-4 shadow-soft border border-slate-100 dark:border-slate-700\">
            <p class=\"text-2xl font-bold text-teal-600\">{{ total_psy|default(0) }}</p>
            <p class=\"text-sm text-slate-500\">Psy</p>
        </div>
    </div>

    {# Toolbar #}
    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-4 flex flex-col md:flex-row gap-4 justify-between\">
        <form method=\"get\" action=\"{{ path('app_admin_users_list') }}\" class=\"flex flex-1 max-w-md gap-3 flex-wrap items-center\">
            <div class=\"flex-1 min-w-[200px] relative\">
                <i data-lucide=\"search\" class=\"w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
                <input type=\"text\" name=\"q\" placeholder=\"Rechercher (nom, prénom, email)...\" value=\"{{ search_q|default('') }}\" class=\"w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:ring-2 focus:ring-primary-500\">
            </div>
            <select name=\"role\" class=\"px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm\" onchange=\"this.form.submit()\">
                <option value=\"\">Tous les rôles</option>
                <option value=\"ROLE_USER\" {{ role_filter == 'ROLE_USER' ? 'selected' : '' }}>Étudiant</option>
                <option value=\"ROLE_ADMIN\" {{ role_filter == 'ROLE_ADMIN' ? 'selected' : '' }}>Admin</option>
                <option value=\"ROLE_PSY\" {{ role_filter == 'ROLE_PSY' ? 'selected' : '' }}>Psy</option>
            </select>
        </form>
        <div class=\"flex gap-3\">
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
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Téléphone</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Rôle</th>
                        <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-100 dark:divide-slate-700\">
                    {% for user in users %}
                    <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center gap-3\">
                                {% if user.IMAGE %}
                                    <img src=\"{{ user.IMAGE }}\" alt=\"\" class=\"w-10 h-10 rounded-full object-cover\" onerror=\"this.src='https://ui-avatars.com/api/?name={{ user.NOM|url_encode }}+{{ user.PRENOM|url_encode }}&background=random'\">
                                {% else %}
                                    <img src=\"https://ui-avatars.com/api/?name={{ user.NOM|url_encode }}+{{ user.PRENOM|url_encode }}&background=random\" class=\"w-10 h-10 rounded-full\">
                                {% endif %}
                                <div>
                                    <p class=\"font-semibold text-slate-900 dark:text-white\">{{ user.PRENOM }} {{ user.NOM }}</p>
                                    <p class=\"text-xs text-slate-500\">#{{ user.id }}</p>
                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">{{ user.EMAIL }}</td>
                        <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">{{ user.NUMERO }}</td>
                        <td class=\"px-6 py-4\">
                            {% if user.ROLE == 'ROLE_ADMIN' %}
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-400\">Admin</span>
                            {% elseif user.ROLE == 'ROLE_PSY' %}
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700 dark:bg-teal-900/30 dark:text-teal-400\">Psy</span>
                            {% else %}
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400\">Étudiant</span>
                            {% endif %}
                        </td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"{{ path('app_admin_users_edit', {id: user.id}) }}\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-blue-600\" title=\"Modifier\"><i data-lucide=\"pencil\" class=\"w-4 h-4\"></i></a>
                                <form method=\"post\" action=\"{{ path('app_admin_users_delete', {id: user.id}) }}\" class=\"inline\" onsubmit=\"return confirm('Supprimer cet utilisateur ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('user_delete_' ~ user.id) }}\">
                                    <button type=\"submit\" class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-rose-600\" title=\"Supprimer\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"px-6 py-12 text-center text-slate-500\">Aucun utilisateur.</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"px-6 py-4 border-t border-slate-200 dark:border-slate-700\">
            <p class=\"text-sm text-slate-500\">Affichage de 1 à {{ users|length }} sur {{ total }}</p>
        </div>
    </div>
</div>
{% endblock %}
", "admin/user/list.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\user\\list.html.twig");
    }
}
