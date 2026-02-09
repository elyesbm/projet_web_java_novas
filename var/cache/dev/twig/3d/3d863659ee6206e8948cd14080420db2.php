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

/* admin/atelier/list.html.twig */
class __TwigTemplate_d1ab28fabce553018b78246038134cf3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "admin/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/list.html.twig"));

        $this->parent = $this->load("admin/base_admin.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Ateliers - NOVAS Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "Ateliers & Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "Gestion des événements et inscriptions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<div class=\"space-y-6\">

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\">
                <i data-lucide=\"calendar-days\" class=\"w-7 h-7\"></i>
            </div>
            <div>
                <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "</p>
                <p class=\"text-slate-500\">Ateliers ce mois</p>
            </div>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-600\">
                <i data-lucide=\"users\" class=\"w-7 h-7\"></i>
            </div>
            <div>
                <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">
                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsContexte"]) || array_key_exists("statsContexte", $context) ? $context["statsContexte"] : (function () { throw new RuntimeError('Variable "statsContexte" does not exist.', 28, $this->source); })()), "soft", [], "any", false, false, false, 28) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsContexte"]) || array_key_exists("statsContexte", $context) ? $context["statsContexte"] : (function () { throw new RuntimeError('Variable "statsContexte" does not exist.', 28, $this->source); })()), "hard", [], "any", false, false, false, 28)), "html", null, true);
        yield "
                </p>
                <p class=\"text-slate-500\">Réservations (Soft + Hard)</p>
            </div>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <h3 class=\"text-sm font-semibold text-slate-900 dark:text-white mb-4\">Répartition Hard / Soft</h3>
            <div class=\"h-32\">
                <canvas id=\"contexteChart\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Prochains ateliers</h3>

                <div class=\"space-y-4\">
                    <div class=\"flex gap-4 p-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors cursor-pointer\">
                        <div class=\"w-14 h-14 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex flex-col items-center justify-center shrink-0\">
                            <span class=\"text-xs font-bold uppercase\">Fév</span>
                            <span class=\"text-lg font-bold\">15</span>
                        </div>
                        <div class=\"flex-1 min-w-0\">
                            <h4 class=\"font-semibold text-slate-900 dark:text-white truncate\">Prise de Parole en Public</h4>
                            <p class=\"text-sm text-slate-500\">14:00 • Salle A102</p>
                            <div class=\"mt-2 flex items-center gap-2\">
                                <div class=\"flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-1.5\">
                                    <div class=\"bg-purple-500 h-1.5 rounded-full\" style=\"width: 75%\"></div>
                                </div>
                                <span class=\"text-xs text-slate-500\">15/20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-6 text-white shadow-lg\">
                <h3 class=\"text-lg font-bold mb-2\">Créer un atelier</h3>
                <p class=\"text-indigo-100 text-sm mb-4\">Programmez un nouvel événement</p>
                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_new");
        yield "\"
                   class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors text-sm font-medium\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouvel atelier
                </a>
            </div>
        </div>

        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"flex items-center justify-between mb-6\">
                    <h3 class=\"text-lg font-bold text-slate-900 dark:text-white\">Calendrier</h3>
                    <div class=\"flex items-center gap-2\">
                        <button class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700\">
                            <i data-lucide=\"chevron-left\" class=\"w-5 h-5\"></i>
                        </button>
                        <span class=\"font-medium\">Février 2024</span>
                        <button class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700\">
                            <i data-lucide=\"chevron-right\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                </div>

                <div class=\"grid grid-cols-7 gap-2 text-center text-xs mb-2\">
                    <div class=\"text-slate-500 py-2\">Dim</div>
                    <div class=\"text-slate-500 py-2\">Lun</div>
                    <div class=\"text-slate-500 py-2\">Mar</div>
                    <div class=\"text-slate-500 py-2\">Mer</div>
                    <div class=\"text-slate-500 py-2\">Jeu</div>
                    <div class=\"text-slate-500 py-2\">Ven</div>
                    <div class=\"text-slate-500 py-2\">Sam</div>
                </div>

                <div class=\"grid grid-cols-7 gap-2\">
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 106
            yield "                        <div class=\"aspect-square rounded-xl border border-slate-200 dark:border-slate-700 hover:border-indigo-300 flex items-center justify-center cursor-pointer transition-all\">
                            <span class=\"text-sm font-medium text-slate-700 dark:text-slate-300\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                </div>
            </div>

            <!-- Barre de recherche et filtres -->
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <form method=\"GET\" action=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
        yield "\" class=\"space-y-4\">
                    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
                        <!-- Recherche -->
                        <div class=\"md:col-span-2\">
                            <label for=\"search\" class=\"block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2\">
                                Rechercher
                            </label>
                            <div class=\"relative\">
                                <i data-lucide=\"search\" class=\"absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400\"></i>
                                <input type=\"text\"
                                       id=\"search\"
                                       name=\"search\"
                                       value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 127, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                       placeholder=\"Nom d'atelier...\"
                                       class=\"w-full pl-10 pr-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                            </div>
                        </div>

                        <!-- Filtre par contexte -->
                        <div>
                            <label for=\"contexte\" class=\"block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2\">
                                Contexte
                            </label>
                            <select id=\"contexte\"
                                    name=\"contexte\"
                                    class=\"w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                                <option value=\"\">Tous</option>
                                <option value=\"0\" ";
        // line 142
        yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 142, $this->source); })()) == 0)) ? ("selected") : (""));
        yield ">Soft Skill</option>
                                <option value=\"1\" ";
        // line 143
        yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 143, $this->source); })()) == 1)) ? ("selected") : (""));
        yield ">Hard Skill</option>
                            </select>
                        </div>

                        <!-- Tri -->
                        <div>
                            <label for=\"sort\" class=\"block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2\">
                                Trier par
                            </label>
                            <select id=\"sort\"
                                    name=\"sort\"
                                    class=\"w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                                <option value=\"id_desc\" ";
        // line 155
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 155, $this->source); })()) == "id_desc")) ? ("selected") : (""));
        yield ">Plus récent</option>
                                <option value=\"id_asc\" ";
        // line 156
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 156, $this->source); })()) == "id_asc")) ? ("selected") : (""));
        yield ">Plus ancien</option>
                                <option value=\"date_asc\" ";
        // line 157
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 157, $this->source); })()) == "date_asc")) ? ("selected") : (""));
        yield ">Date (↑)</option>
                                <option value=\"date_desc\" ";
        // line 158
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 158, $this->source); })()) == "date_desc")) ? ("selected") : (""));
        yield ">Date (↓)</option>
                                <option value=\"titre_asc\" ";
        // line 159
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 159, $this->source); })()) == "titre_asc")) ? ("selected") : (""));
        yield ">Titre (A-Z)</option>
                                <option value=\"titre_desc\" ";
        // line 160
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 160, $this->source); })()) == "titre_desc")) ? ("selected") : (""));
        yield ">Titre (Z-A)</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"flex items-center gap-2\">
                        <button type=\"submit\"
                                class=\"px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors flex items-center gap-2\">
                            <i data-lucide=\"filter\" class=\"w-4 h-4\"></i>
                            Appliquer
                        </button>
                        ";
        // line 171
        if (((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 171, $this->source); })()) ||  !(null === (isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 171, $this->source); })())))) {
            // line 172
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
            yield "\"
                               class=\"px-4 py-2 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors flex items-center gap-2\">
                                <i data-lucide=\"x\" class=\"w-4 h-4\"></i>
                                Réinitialiser
                            </a>
                        ";
        }
        // line 178
        yield "                    </div>
                </form>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 overflow-hidden\">
                <div class=\"px-6 py-4 border-b border-slate-200 dark:border-slate-700\">
                    <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white\">Tous les ateliers (";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 184, $this->source); })())), "html", null, true);
        yield ")</h3>
                </div>

                <div class=\"overflow-x-auto\">
                    <table class=\"w-full text-left\">
                        <thead class=\"bg-slate-50 dark:bg-slate-700/50\">
                            <tr>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Atelier</th>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Date</th>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Places</th>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right\">Actions</th>
                            </tr>
                        </thead>

                        <tbody class=\"divide-y divide-slate-100 dark:divide-slate-700\">
                        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ateliers"]) || array_key_exists("ateliers", $context) ? $context["ateliers"] : (function () { throw new RuntimeError('Variable "ateliers" does not exist.', 199, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["atelier"]) {
            // line 200
            yield "                            <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                                <td class=\"px-6 py-4\">
                                    <div class=\"flex items-center gap-3\">
                                        <div class=\"w-10 h-10 rounded-lg bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center\">
                                            <i data-lucide=\"calendar-days\" class=\"w-5 h-5\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-semibold text-slate-900 dark:text-white\">
                                                ";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "titreAtelier", [], "any", false, false, false, 208), "html", null, true);
            yield "
                                            </p>
                                            <p class=\"text-sm text-slate-500\">
                                                Type : ";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "typeAtelier", [], "any", false, false, false, 211)), "html", null, true);
            yield "
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">
                                    ";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "dateAtelier", [], "any", false, false, false, 218), "d M Y"), "html", null, true);
            yield "
                                </td>

                                <td class=\"px-6 py-4\">
                                    <span class=\"text-sm font-medium text-rose-600\">
                                        ";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "capacite", [], "any", false, false, false, 223), "html", null, true);
            yield "
                                    </span>
                                    <span class=\"text-sm text-slate-500\">restantes</span>
                                </td>

                                <td class=\"px-6 py-4 text-right\">
                                    <div class=\"flex items-center justify-end gap-2\">
                                        <a href=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 230)]), "html", null, true);
            yield "\"
                                           class=\"inline-flex items-center gap-1.5 px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">
                                            <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                            Modifier
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 235)]), "html", null, true);
            yield "\" class=\"inline\"
                                              onsubmit=\"return confirm('Supprimer cet atelier ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["atelier"], "id", [], "any", false, false, false, 237))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"inline-flex items-center justify-center p-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\" title=\"Supprimer\">
                                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 245
        if (!$context['_iterated']) {
            // line 246
            yield "                            <tr>
                                <td colspan=\"4\" class=\"px-6 py-6 text-center text-slate-500\">
                                    Aucun atelier en base
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['atelier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        yield "                        </tbody>
                    </table>
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

    // line 262
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 263
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
    (function() {
        const ctx = document.getElementById('contexteChart');
        if (!ctx) return;

        const data = {
            labels: ['Soft Skill', 'Hard Skill'],
            datasets: [{
                data: [";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statsContexte"] ?? null), "soft", [], "any", true, true, false, 273)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsContexte"]) || array_key_exists("statsContexte", $context) ? $context["statsContexte"] : (function () { throw new RuntimeError('Variable "statsContexte" does not exist.', 273, $this->source); })()), "soft", [], "any", false, false, false, 273), 0)) : (0)), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statsContexte"] ?? null), "hard", [], "any", true, true, false, 273)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statsContexte"]) || array_key_exists("statsContexte", $context) ? $context["statsContexte"] : (function () { throw new RuntimeError('Variable "statsContexte" does not exist.', 273, $this->source); })()), "hard", [], "any", false, false, false, 273), 0)) : (0)), "html", null, true);
        yield "],
                backgroundColor: ['#0ea5e9', '#d946ef'],
            }]
        };

        new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    })();
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
        return "admin/atelier/list.html.twig";
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
        return array (  537 => 273,  523 => 263,  510 => 262,  491 => 252,  480 => 246,  478 => 245,  465 => 237,  460 => 235,  452 => 230,  442 => 223,  434 => 218,  424 => 211,  418 => 208,  408 => 200,  403 => 199,  385 => 184,  377 => 178,  367 => 172,  365 => 171,  351 => 160,  347 => 159,  343 => 158,  339 => 157,  335 => 156,  331 => 155,  316 => 143,  312 => 142,  294 => 127,  279 => 115,  272 => 110,  263 => 107,  260 => 106,  256 => 105,  219 => 71,  173 => 28,  159 => 17,  149 => 9,  136 => 8,  113 => 6,  90 => 5,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'admin/base_admin.html.twig' %}

{% block title %}Ateliers - NOVAS Admin{% endblock %}
{% block page_title %}Ateliers & Réservations{% endblock %}
{% block page_subtitle %}Gestion des événements et inscriptions{% endblock %}

{% block body %}
<div class=\"space-y-6\">

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\">
                <i data-lucide=\"calendar-days\" class=\"w-7 h-7\"></i>
            </div>
            <div>
                <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">{{ ateliers|length }}</p>
                <p class=\"text-slate-500\">Ateliers ce mois</p>
            </div>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700 flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-600\">
                <i data-lucide=\"users\" class=\"w-7 h-7\"></i>
            </div>
            <div>
                <p class=\"text-3xl font-bold text-slate-900 dark:text-white\">
                    {{ (statsContexte.soft + statsContexte.hard) }}
                </p>
                <p class=\"text-slate-500\">Réservations (Soft + Hard)</p>
            </div>
        </div>

        <div class=\"bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-soft border border-slate-100 dark:border-slate-700\">
            <h3 class=\"text-sm font-semibold text-slate-900 dark:text-white mb-4\">Répartition Hard / Soft</h3>
            <div class=\"h-32\">
                <canvas id=\"contexteChart\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

        <div class=\"space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white mb-4\">Prochains ateliers</h3>

                <div class=\"space-y-4\">
                    <div class=\"flex gap-4 p-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors cursor-pointer\">
                        <div class=\"w-14 h-14 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex flex-col items-center justify-center shrink-0\">
                            <span class=\"text-xs font-bold uppercase\">Fév</span>
                            <span class=\"text-lg font-bold\">15</span>
                        </div>
                        <div class=\"flex-1 min-w-0\">
                            <h4 class=\"font-semibold text-slate-900 dark:text-white truncate\">Prise de Parole en Public</h4>
                            <p class=\"text-sm text-slate-500\">14:00 • Salle A102</p>
                            <div class=\"mt-2 flex items-center gap-2\">
                                <div class=\"flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-1.5\">
                                    <div class=\"bg-purple-500 h-1.5 rounded-full\" style=\"width: 75%\"></div>
                                </div>
                                <span class=\"text-xs text-slate-500\">15/20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-6 text-white shadow-lg\">
                <h3 class=\"text-lg font-bold mb-2\">Créer un atelier</h3>
                <p class=\"text-indigo-100 text-sm mb-4\">Programmez un nouvel événement</p>
                <a href=\"{{ path('app_admin_ateliers_new') }}\"
                   class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors text-sm font-medium\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouvel atelier
                </a>
            </div>
        </div>

        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <div class=\"flex items-center justify-between mb-6\">
                    <h3 class=\"text-lg font-bold text-slate-900 dark:text-white\">Calendrier</h3>
                    <div class=\"flex items-center gap-2\">
                        <button class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700\">
                            <i data-lucide=\"chevron-left\" class=\"w-5 h-5\"></i>
                        </button>
                        <span class=\"font-medium\">Février 2024</span>
                        <button class=\"p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700\">
                            <i data-lucide=\"chevron-right\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                </div>

                <div class=\"grid grid-cols-7 gap-2 text-center text-xs mb-2\">
                    <div class=\"text-slate-500 py-2\">Dim</div>
                    <div class=\"text-slate-500 py-2\">Lun</div>
                    <div class=\"text-slate-500 py-2\">Mar</div>
                    <div class=\"text-slate-500 py-2\">Mer</div>
                    <div class=\"text-slate-500 py-2\">Jeu</div>
                    <div class=\"text-slate-500 py-2\">Ven</div>
                    <div class=\"text-slate-500 py-2\">Sam</div>
                </div>

                <div class=\"grid grid-cols-7 gap-2\">
                    {% for day in 1..29 %}
                        <div class=\"aspect-square rounded-xl border border-slate-200 dark:border-slate-700 hover:border-indigo-300 flex items-center justify-center cursor-pointer transition-all\">
                            <span class=\"text-sm font-medium text-slate-700 dark:text-slate-300\">{{ day }}</span>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <!-- Barre de recherche et filtres -->
            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-6\">
                <form method=\"GET\" action=\"{{ path('app_admin_ateliers_list') }}\" class=\"space-y-4\">
                    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
                        <!-- Recherche -->
                        <div class=\"md:col-span-2\">
                            <label for=\"search\" class=\"block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2\">
                                Rechercher
                            </label>
                            <div class=\"relative\">
                                <i data-lucide=\"search\" class=\"absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400\"></i>
                                <input type=\"text\"
                                       id=\"search\"
                                       name=\"search\"
                                       value=\"{{ search|default('') }}\"
                                       placeholder=\"Nom d'atelier...\"
                                       class=\"w-full pl-10 pr-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                            </div>
                        </div>

                        <!-- Filtre par contexte -->
                        <div>
                            <label for=\"contexte\" class=\"block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2\">
                                Contexte
                            </label>
                            <select id=\"contexte\"
                                    name=\"contexte\"
                                    class=\"w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                                <option value=\"\">Tous</option>
                                <option value=\"0\" {{ contexte == 0 ? 'selected' : '' }}>Soft Skill</option>
                                <option value=\"1\" {{ contexte == 1 ? 'selected' : '' }}>Hard Skill</option>
                            </select>
                        </div>

                        <!-- Tri -->
                        <div>
                            <label for=\"sort\" class=\"block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2\">
                                Trier par
                            </label>
                            <select id=\"sort\"
                                    name=\"sort\"
                                    class=\"w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                                <option value=\"id_desc\" {{ sort == 'id_desc' ? 'selected' : '' }}>Plus récent</option>
                                <option value=\"id_asc\" {{ sort == 'id_asc' ? 'selected' : '' }}>Plus ancien</option>
                                <option value=\"date_asc\" {{ sort == 'date_asc' ? 'selected' : '' }}>Date (↑)</option>
                                <option value=\"date_desc\" {{ sort == 'date_desc' ? 'selected' : '' }}>Date (↓)</option>
                                <option value=\"titre_asc\" {{ sort == 'titre_asc' ? 'selected' : '' }}>Titre (A-Z)</option>
                                <option value=\"titre_desc\" {{ sort == 'titre_desc' ? 'selected' : '' }}>Titre (Z-A)</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"flex items-center gap-2\">
                        <button type=\"submit\"
                                class=\"px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors flex items-center gap-2\">
                            <i data-lucide=\"filter\" class=\"w-4 h-4\"></i>
                            Appliquer
                        </button>
                        {% if search or contexte is not null %}
                            <a href=\"{{ path('app_admin_ateliers_list') }}\"
                               class=\"px-4 py-2 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors flex items-center gap-2\">
                                <i data-lucide=\"x\" class=\"w-4 h-4\"></i>
                                Réinitialiser
                            </a>
                        {% endif %}
                    </div>
                </form>
            </div>

            <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 overflow-hidden\">
                <div class=\"px-6 py-4 border-b border-slate-200 dark:border-slate-700\">
                    <h3 class=\"text-lg font-semibold text-slate-900 dark:text-white\">Tous les ateliers ({{ ateliers|length }})</h3>
                </div>

                <div class=\"overflow-x-auto\">
                    <table class=\"w-full text-left\">
                        <thead class=\"bg-slate-50 dark:bg-slate-700/50\">
                            <tr>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Atelier</th>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Date</th>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase\">Places</th>
                                <th class=\"px-6 py-4 text-xs font-semibold text-slate-500 uppercase text-right\">Actions</th>
                            </tr>
                        </thead>

                        <tbody class=\"divide-y divide-slate-100 dark:divide-slate-700\">
                        {% for atelier in ateliers %}
                            <tr class=\"hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors\">
                                <td class=\"px-6 py-4\">
                                    <div class=\"flex items-center gap-3\">
                                        <div class=\"w-10 h-10 rounded-lg bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center\">
                                            <i data-lucide=\"calendar-days\" class=\"w-5 h-5\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-semibold text-slate-900 dark:text-white\">
                                                {{ atelier.titreAtelier }}
                                            </p>
                                            <p class=\"text-sm text-slate-500\">
                                                Type : {{ atelier.typeAtelier|capitalize }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class=\"px-6 py-4 text-sm text-slate-600 dark:text-slate-400\">
                                    {{ atelier.dateAtelier|date('d M Y') }}
                                </td>

                                <td class=\"px-6 py-4\">
                                    <span class=\"text-sm font-medium text-rose-600\">
                                        {{ atelier.capacite }}
                                    </span>
                                    <span class=\"text-sm text-slate-500\">restantes</span>
                                </td>

                                <td class=\"px-6 py-4 text-right\">
                                    <div class=\"flex items-center justify-end gap-2\">
                                        <a href=\"{{ path('app_admin_ateliers_edit', { id: atelier.id }) }}\"
                                           class=\"inline-flex items-center gap-1.5 px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 transition-colors\">
                                            <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                            Modifier
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_admin_ateliers_delete', { id: atelier.id }) }}\" class=\"inline\"
                                              onsubmit=\"return confirm('Supprimer cet atelier ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ atelier.id) }}\">
                                            <button type=\"submit\" class=\"inline-flex items-center justify-center p-2 rounded-lg border border-rose-200 dark:border-rose-800 text-rose-600 hover:bg-rose-50 dark:hover:bg-rose-900/20 transition-colors\" title=\"Supprimer\">
                                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"px-6 py-6 text-center text-slate-500\">
                                    Aucun atelier en base
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
    (function() {
        const ctx = document.getElementById('contexteChart');
        if (!ctx) return;

        const data = {
            labels: ['Soft Skill', 'Hard Skill'],
            datasets: [{
                data: [{{ statsContexte.soft|default(0) }}, {{ statsContexte.hard|default(0) }}],
                backgroundColor: ['#0ea5e9', '#d946ef'],
            }]
        };

        new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    })();
    </script>
{% endblock %}
", "admin/atelier/list.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\atelier\\list.html.twig");
    }
}
