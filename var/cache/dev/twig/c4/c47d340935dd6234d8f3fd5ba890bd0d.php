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

/* front/publication/index.html.twig */
class __TwigTemplate_9d5f666d17b6421b5c686913acf1b8dc extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication/index.html.twig"));

        $this->parent = $this->load("front/base_home.html.twig", 1);
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

        yield "Publications - NoVas";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
            </a>

            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_nouvelle");
        yield "\" class=\"hidden sm:flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouvelle publication
                </a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-8 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>

        <div class=\"max-w-4xl mx-auto relative\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                    <i data-lucide=\"message-square\" class=\"w-4 h-4\"></i>
                    Publications
                </div>
                <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                    Echangez avec la <span class=\"italic text-primary\">communaute</span>
                </h1>
                <p class=\"text-muted-foreground max-w-2xl mx-auto\">
                    Partagez vos experiences, posez vos questions et entraidez-vous avec d'autres etudiants.
                </p>
            </div>

            <!-- Mobile New Post Button -->
            <div class=\"sm:hidden mb-6\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_nouvelle");
        yield "\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Nouvelle publication
                </a>
            </div>

            <!-- Filters -->
            <div class=\"glass-card rounded-2xl p-2 flex flex-wrap gap-2 justify-center\">
                <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index");
        yield "\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors ";
        yield (((null === (isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 54, $this->source); })()))) ? ("bg-primary text-white") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
        yield "\">
                    Toutes
                </a>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index", ["contexte" => 1]);
        yield "\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center gap-2 ";
        yield ((((isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 57, $this->source); })()) == 1)) ? ("bg-academic/20 text-academic border border-academic/50") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
        yield "\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Academic
                </a>
                <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index", ["contexte" => 2]);
        yield "\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center gap-2 ";
        yield ((((isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 61, $this->source); })()) == 2)) ? ("bg-personal/20 text-personal border border-personal/50") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
        yield "\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Personal
                </a>
            </div>
        </div>
    </section>

    ";
        // line 70
        yield "<form method=\"get\"
      action=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index");
        yield "\"
      class=\"mt-6 mb-10 max-w-4xl mx-auto\">

    <div class=\"flex flex-col md:flex-row md:items-center gap-4\">

        ";
        // line 77
        yield "        <div class=\"relative flex-1\">
            <input
                type=\"text\"
                name=\"q\"
                value=\"";
        // line 81
        yield (((array_key_exists("q", $context) &&  !(null === $context["q"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["q"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "query", [], "any", false, false, false, 81), "get", ["q"], "method", false, false, false, 81), "html", null, true)));
        yield "\"
                placeholder=\"Rechercher une publication...\"
                class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4
                       text-sm focus:outline-none focus:border-primary transition-all
                       placeholder:text-muted-foreground/50\"
            />
            <button type=\"submit\"
                    class=\"absolute left-3 top-1/2 -translate-y-1/2 p-1 text-muted-foreground hover:text-primary transition-colors\"
                    title=\"Rechercher\">
                <i data-lucide=\"search\" class=\"w-5 h-5\"></i>
            </button>
        </div>

        ";
        // line 95
        yield "        <div class=\"md:w-72 w-full\">
            <select
                name=\"sort\"
                onchange=\"this.form.submit()\"
                class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4
                       text-sm focus:outline-none focus:border-primary transition-all\"
            >
                <option value=\"created_desc\" ";
        // line 102
        yield ((((((array_key_exists("sort", $context) &&  !(null === $context["sort"]))) ? ($context["sort"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "query", [], "any", false, false, false, 102), "get", ["sort"], "method", false, false, false, 102))) == "created_desc")) ? ("selected") : (""));
        yield ">
                    Dernière création
                </option>
                <option value=\"updated_desc\" ";
        // line 105
        yield ((((((array_key_exists("sort", $context) &&  !(null === $context["sort"]))) ? ($context["sort"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "query", [], "any", false, false, false, 105), "get", ["sort"], "method", false, false, false, 105))) == "updated_desc")) ? ("selected") : (""));
        yield ">
                    Dernière modification
                </option>
            </select>
        </div>

        ";
        // line 112
        yield "        ";
        if ((($tmp =  !(null === (isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 112, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "            <input type=\"hidden\" name=\"contexte\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\">
        ";
        }
        // line 115
        yield "    </div>
</form>


    <!-- Publications List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto space-y-6\">
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 123
            yield "                ";
            $context["isAnonymous"] = Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "imageAuteur", [], "any", false, false, false, 123));
            // line 124
            yield "                ";
            $context["contextMap"] = [1 => "academic", 2 => "personal", 3 => "help"];
            // line 125
            yield "                ";
            $context["contexte"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["contextMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 125), [], "array", true, true, false, 125) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 125, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 125), [], "array", false, false, false, 125)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 125, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 125), [], "array", false, false, false, 125)) : ("help"));
            // line 126
            yield "
                <article class=\"glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all\" id=\"pub-";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 127), "html", null, true);
            yield "\">
                    <!-- Header -->
                    <div class=\"p-6 pb-4\">
                        <div class=\"flex items-start justify-between\">
                            <div class=\"flex items-center gap-4\">
                                <!-- Avatar -->
                                ";
            // line 133
            if ((($tmp = (isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 133, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                                    <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                        <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                                    </div>
                                ";
            } else {
                // line 138
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 138) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 138), "IMAGE", [], "any", false, false, false, 138))) {
                    // line 139
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 139), "IMAGE", [], "any", false, false, false, 139))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 139), "PRENOM", [], "any", false, false, false, 139) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 139), "NOM", [], "any", false, false, false, 139)), "html", null, true);
                    yield "\" class=\"w-14 h-14 rounded-full object-cover ring-2 ring-primary/30\">
                                    ";
                } else {
                    // line 141
                    yield "                                        <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                            <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                                        </div>
                                    ";
                }
                // line 145
                yield "                                ";
            }
            // line 146
            yield "
                                <!-- Info -->
                                <div>
                                    ";
            // line 149
            if ((($tmp = (isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "                                        <h3 class=\"font-semibold text-lg\">Anonyme</h3>
                                    ";
            } else {
                // line 152
                yield "                                        <h3 class=\"font-semibold text-lg\">
                                            ";
                // line 153
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 153), "PRENOM", [], "any", false, false, false, 153) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 153), "NOM", [], "any", false, false, false, 153)), "html", null, true)) : ("Utilisateur"));
                yield "
                                        </h3>
                                    ";
            }
            // line 156
            yield "
                                    ";
            // line 157
            if ((( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 157, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 157)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 157), "ROLE", [], "any", false, false, false, 157))) {
                // line 158
                yield "                                        <p class=\"text-sm text-muted-foreground\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 158), "ROLE", [], "any", false, false, false, 158), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 160
            yield "
                                    <p class=\"text-xs text-muted-foreground mt-0.5\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 161), "d M Y à H:i"), "html", null, true);
            yield "</p>
                                </div>
                            </div>

                            <!-- Context Badge -->
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium
                                ";
            // line 167
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 167, $this->source); })()) == "academic")) ? ("bg-academic/20 text-academic") : ((((            // line 168
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 168, $this->source); })()) == "personal")) ? ("bg-personal/20 text-personal") : ("bg-primary/20 text-primary"))));
            // line 169
            yield "\">
                                ";
            // line 170
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 170, $this->source); })()) == "academic")) ? ("Academic") : ((((            // line 171
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 171, $this->source); })()) == "personal")) ? ("Personal") : ("Entraide"))));
            yield "
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class=\"px-6 pb-4\">
                        <h2 class=\"font-serif text-xl md:text-2xl font-medium mb-3 text-primary\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 178), "html", null, true);
            yield "</h2>
                        <p class=\"text-foreground leading-relaxed\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 179), "html", null, true);
            yield "</p>
                    </div>

                    <!-- Actions Bar -->
                    <div class=\"px-6 py-4 bg-secondary/30 border-t border-white/5 flex items-center justify-between\">
                        <div class=\"flex items-center gap-6\">
                            <!-- Likes -->
                            <button
                                type=\"button\"
                                onclick=\"likePublication(";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 188), "html", null, true);
            yield ")\"
                                class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors group\"
                            >
                                <i data-lucide=\"heart\" class=\"w-5 h-5 group-hover:fill-primary/20\"></i>
                                <span class=\"text-sm\" id=\"likes-";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 192), "html", null, true);
            yield "\">
                                    ";
            // line 193
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 193)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 193), "html", null, true)) : (0));
            yield "
                                </span>
                            </button>

                            <!-- Comments Toggle -->
                            <button onclick=\"toggleComments(";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 198), "html", null, true);
            yield ")\" class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors\">
                                <i data-lucide=\"message-circle\" class=\"w-5 h-5\"></i>
                                <span class=\"text-sm\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 200)), "html", null, true);
            yield " commentaires</span>
                            </button>
                        </div>

                        <div class=\"flex items-center gap-3\">
                            <!-- Status -->
                            <span class=\"px-2 py-1 rounded-lg text-xs flex items-center gap-1
                                ";
            // line 207
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 207) == 1)) ? ("bg-green-500/20 text-green-400") : ("bg-red-500/20 text-red-400"));
            yield "\">
                                <span class=\"w-1.5 h-1.5 rounded-full ";
            // line 208
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 208) == 1)) ? ("bg-green-400") : ("bg-red-400"));
            yield "\"></span>
                                ";
            // line 209
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 209) == 1)) ? ("actif") : ("inactif"));
            yield "
                            </span>

                            ";
            // line 213
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 213) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213) == (isset($context["current_user_id"]) || array_key_exists("current_user_id", $context) ? $context["current_user_id"] : (function () { throw new RuntimeError('Variable "current_user_id" does not exist.', 213, $this->source); })())))) {
                // line 214
                yield "                                <!-- Modifier -->
                                <a href=\"";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 215)]), "html", null, true);
                yield "\"
                                   class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent hover:border-primary/30 transition-colors\"
                                   title=\"Modifier la publication\">
                                    <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                    <span>Modifier</span>
                                </a>

                                <!-- Supprimer -->
                                <form action=\"";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 223)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_publication_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 224))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent hover:border-red-500/30 transition-colors\" title=\"Supprimer la publication\">
                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                        <span>Supprimer</span>
                                    </button>
                                </form>
                            ";
            }
            // line 231
            yield "
                            <!-- Signaler -->
                            <a href=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_signaler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 233)]), "html", null, true);
            yield "\" class=\"text-muted-foreground hover:text-red-400 transition-colors\" title=\"Signaler\">
                                <i data-lucide=\"flag\" class=\"w-5 h-5\"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Comments Section (Hidden by default) -->
                    ";
            // line 240
            $context["cform"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment_forms"]) || array_key_exists("comment_forms", $context) ? $context["comment_forms"] : (function () { throw new RuntimeError('Variable "comment_forms" does not exist.', 240, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 240), [], "array", false, false, false, 240);
            // line 241
            yield "                    ";
            $context["comment_error_flashes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "flashes", [("comment_error_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 241))], "method", false, false, false, 241);
            // line 242
            yield "                    ";
            $context["comment_success_flashes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "flashes", [("comment_success_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 242))], "method", false, false, false, 242);
            // line 243
            yield "                    ";
            $context["has_comment_errors"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 243, $this->source); })()), "contenu", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "errors", [], "any", false, false, false, 243)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comment_error_flashes"]) || array_key_exists("comment_error_flashes", $context) ? $context["comment_error_flashes"] : (function () { throw new RuntimeError('Variable "comment_error_flashes" does not exist.', 243, $this->source); })())) > 0));
            // line 244
            yield "
                    <div id=\"comments-";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 245), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp = (isset($context["has_comment_errors"]) || array_key_exists("has_comment_errors", $context) ? $context["has_comment_errors"] : (function () { throw new RuntimeError('Variable "has_comment_errors" does not exist.', 245, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("hidden"));
            yield " border-t border-white/5\">
                        <div class=\"p-6 bg-secondary/20\">
                            <!-- Comments List -->
                            <div class=\"space-y-4 mb-6\">
                                ";
            // line 249
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 249)) > 0)) {
                // line 250
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 250));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 251
                    yield "                                        <div class=\"flex gap-4\">
                                            ";
                    // line 252
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 252) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 252), "IMAGE", [], "any", false, false, false, 252))) {
                        // line 253
                        yield "                                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 253), "IMAGE", [], "any", false, false, false, 253))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 253), "PRENOM", [], "any", false, false, false, 253) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 253), "NOM", [], "any", false, false, false, 253)), "html", null, true);
                        yield "\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-white/5\">
                                            ";
                    } else {
                        // line 255
                        yield "                                                <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/5\">
                                                    <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                                </div>
                                            ";
                    }
                    // line 259
                    yield "
                                            <div class=\"flex-1\">
                                                <div class=\"glass-card rounded-2xl rounded-tl-none p-4\">
                                                    <div class=\"flex items-center justify-between mb-2\">
                                                        <div class=\"flex items-center gap-2\">
                                                            <h4 class=\"font-medium text-sm\">";
                    // line 264
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 264), "PRENOM", [], "any", false, false, false, 264) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 264), "NOM", [], "any", false, false, false, 264)), "html", null, true)) : ("Utilisateur"));
                    yield "</h4>
                                                            <span class=\"text-xs text-muted-foreground\">";
                    // line 265
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "dateCreation", [], "any", false, false, false, 265), "d M H:i"), "html", null, true);
                    yield "</span>
                                                        </div>

                                                        ";
                    // line 269
                    yield "                                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 269) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 269), "id", [], "any", false, false, false, 269) == (isset($context["current_user_id"]) || array_key_exists("current_user_id", $context) ? $context["current_user_id"] : (function () { throw new RuntimeError('Variable "current_user_id" does not exist.', 269, $this->source); })())))) {
                        // line 270
                        yield "                                                            <div class=\"flex items-center gap-2\">
                                                                <!-- Modifier commentaire -->
                                                                <a href=\"";
                        // line 272
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 272)]), "html", null, true);
                        yield "\"
                                                                   class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium
                                                                          text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent
                                                                          hover:border-primary/30 transition-colors\"
                                                                   title=\"Modifier le commentaire\">
                                                                    <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                                                    <span>Modifier</span>
                                                                </a>

                                                                <!-- Supprimer commentaire -->
                                                                <form action=\"";
                        // line 282
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 282)]), "html", null, true);
                        yield "\"
                                                                      method=\"post\"
                                                                      onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 285
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 285))), "html", null, true);
                        yield "\">
                                                                    <button type=\"submit\"
                                                                            class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium
                                                                                   text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent
                                                                                   hover:border-red-500/30 transition-colors\">
                                                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                                                        <span>Supprimer</span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        ";
                    }
                    // line 296
                    yield "                                                    </div>

                                                    <p class=\"text-sm text-foreground\">";
                    // line 298
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 298), "html", null, true);
                    yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                yield "                                ";
            } else {
                // line 304
                yield "                                    <div class=\"text-center py-8\">
                                        <i data-lucide=\"message-square\" class=\"w-12 h-12 text-muted-foreground mx-auto mb-3 opacity-50\"></i>
                                        <p class=\"text-muted-foreground text-sm\">Aucun commentaire pour le moment.</p>
                                        <p class=\"text-xs text-muted-foreground mt-1\">Soyez le premier a repondre !</p>
                                    </div>
                                ";
            }
            // line 310
            yield "                            </div>

                            <!-- Add Comment -->

                            ";
            // line 314
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 314, $this->source); })()), 'form_start', ["attr" => ["class" => "flex gap-4"]]);
            yield "
                            <input type=\"hidden\" name=\"return_q\" value=\"";
            // line 315
            yield (((array_key_exists("q", $context) &&  !(null === $context["q"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["q"], "html", null, true)) : (""));
            yield "\">
<input type=\"hidden\" name=\"return_sort\" value=\"";
            // line 316
            yield (((array_key_exists("sort", $context) &&  !(null === $context["sort"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sort"], "html", null, true)) : ("created_desc"));
            yield "\">
<input type=\"hidden\" name=\"return_contexte\" value=\"";
            // line 317
            yield (((array_key_exists("contexte_filter", $context) &&  !(null === $context["contexte_filter"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["contexte_filter"], "html", null, true)) : (""));
            yield "\">

                                ";
            // line 319
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319), "IMAGE", [], "any", false, false, false, 319))) {
                // line 320
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320), "IMAGE", [], "any", false, false, false, 320))), "html", null, true);
                yield "\" alt=\"Moi\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
                                ";
            } else {
                // line 322
                yield "                                    <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-primary/30\">
                                        <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                    </div>
                                ";
            }
            // line 326
            yield "
                                <div class=\"flex-1 relative\">
                                ";
            // line 329
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 329, $this->source); })()), "contenu", [], "any", false, false, false, 329), "vars", [], "any", false, false, false, 329), "errors", [], "any", false, false, false, 329)) > 0)) {
                // line 330
                yield "    <div class=\"mt-2 text-sm text-red-400\">
        ";
                // line 331
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 331, $this->source); })()), "contenu", [], "any", false, false, false, 331), 'errors');
                yield "
        
    </div>
";
            }
            // line 335
            yield "
                                    ";
            // line 336
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 336, $this->source); })()), "contenu", [], "any", false, false, false, 336), 'widget', ["attr" => ["placeholder" => "Ecrivez votre commentaire...", "class" => "w-full h-12 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50"]]);
            // line 341
            yield "
                                    ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comment_error_flashes"]) || array_key_exists("comment_error_flashes", $context) ? $context["comment_error_flashes"] : (function () { throw new RuntimeError('Variable "comment_error_flashes" does not exist.', 342, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 343
                yield "    <div class=\"mb-2 text-sm text-red-400 bg-red-500/10 border border-red-500/20 rounded-xl px-4 py-2\">
        ";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
                yield "
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            yield "
";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comment_success_flashes"]) || array_key_exists("comment_success_flashes", $context) ? $context["comment_success_flashes"] : (function () { throw new RuntimeError('Variable "comment_success_flashes" does not exist.', 348, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 349
                yield "    <div class=\"mb-2 text-sm text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 rounded-xl px-4 py-2\">
        ";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
                yield "
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 353
            yield "
                                    ";
            // line 354
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 354, $this->source); })()), "contenu", [], "any", false, false, false, 354), "vars", [], "any", false, false, false, 354), "errors", [], "any", false, false, false, 354)) > 0)) {
                // line 355
                yield "    <div class=\"mt-2 text-sm text-red-400\">
        ";
                // line 356
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 356, $this->source); })()), "contenu", [], "any", false, false, false, 356), 'errors');
                yield "
    </div>
";
            }
            // line 359
            yield "

                                    <button type=\"submit\" class=\"absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-primary rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors\">
                                        <i data-lucide=\"send\" class=\"w-4 h-4 text-white\"></i>
                                    </button>
                                </div>
                            ";
            // line 365
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cform"]) || array_key_exists("cform", $context) ? $context["cform"] : (function () { throw new RuntimeError('Variable "cform" does not exist.', 365, $this->source); })()), 'form_end');
            yield "
                        </div>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pub'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        yield "        </div>
    </section>
</div>

<script>
    function toggleComments(pubId) {
        const commentsSection = document.getElementById('comments-' + pubId);
        commentsSection.classList.toggle('hidden');

        if (!commentsSection.classList.contains('hidden')) {
            setTimeout(() => {
                commentsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
    }
</script>

<script>
function likePublication(pubId) {
    fetch(`/publications/\${pubId}/like`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.ok) {
            document.getElementById('likes-' + pubId).innerText = data.likes;
        }
    })
    .catch(() => {
        alert('Erreur lors du like');
    });
}
</script>
";
        // line 406
        if ((array_key_exists("open_comments_for", $context) && (isset($context["open_comments_for"]) || array_key_exists("open_comments_for", $context) ? $context["open_comments_for"] : (function () { throw new RuntimeError('Variable "open_comments_for" does not exist.', 406, $this->source); })()))) {
            // line 407
            yield "<script>
document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const openId = params.get('open');

    if (!openId) return;

    // 1) FORCER l'ouverture (pas de toggle)
    const comments = document.getElementById('comments-' + openId);
    if (comments) {
        comments.classList.remove('hidden');
    }

    // 2 Scroller vers la publication (avec léger délai pour être sûr)
    const pubEl = document.getElementById('pub-' + openId);
    if (pubEl) {
        setTimeout(() => {
            pubEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 50);
    }
});
</script>

";
        }
        // line 431
        yield "

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
        return "front/publication/index.html.twig";
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
        return array (  813 => 431,  787 => 407,  785 => 406,  747 => 370,  736 => 365,  728 => 359,  722 => 356,  719 => 355,  717 => 354,  714 => 353,  705 => 350,  702 => 349,  698 => 348,  695 => 347,  686 => 344,  683 => 343,  679 => 342,  676 => 341,  674 => 336,  671 => 335,  664 => 331,  661 => 330,  659 => 329,  655 => 326,  649 => 322,  643 => 320,  641 => 319,  636 => 317,  632 => 316,  628 => 315,  624 => 314,  618 => 310,  610 => 304,  607 => 303,  596 => 298,  592 => 296,  578 => 285,  572 => 282,  559 => 272,  555 => 270,  552 => 269,  546 => 265,  542 => 264,  535 => 259,  529 => 255,  521 => 253,  519 => 252,  516 => 251,  511 => 250,  509 => 249,  500 => 245,  497 => 244,  494 => 243,  491 => 242,  488 => 241,  486 => 240,  476 => 233,  472 => 231,  462 => 224,  458 => 223,  447 => 215,  444 => 214,  441 => 213,  435 => 209,  431 => 208,  427 => 207,  417 => 200,  412 => 198,  404 => 193,  400 => 192,  393 => 188,  381 => 179,  377 => 178,  367 => 171,  366 => 170,  363 => 169,  361 => 168,  360 => 167,  351 => 161,  348 => 160,  342 => 158,  340 => 157,  337 => 156,  331 => 153,  328 => 152,  324 => 150,  322 => 149,  317 => 146,  314 => 145,  308 => 141,  300 => 139,  297 => 138,  291 => 134,  289 => 133,  280 => 127,  277 => 126,  274 => 125,  271 => 124,  268 => 123,  264 => 122,  255 => 115,  249 => 113,  246 => 112,  237 => 105,  231 => 102,  222 => 95,  206 => 81,  200 => 77,  192 => 71,  189 => 70,  176 => 61,  167 => 57,  159 => 54,  148 => 46,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Publications - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
            </a>

            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_publication_nouvelle') }}\" class=\"hidden sm:flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Nouvelle publication
                </a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-8 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>

        <div class=\"max-w-4xl mx-auto relative\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                    <i data-lucide=\"message-square\" class=\"w-4 h-4\"></i>
                    Publications
                </div>
                <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                    Echangez avec la <span class=\"italic text-primary\">communaute</span>
                </h1>
                <p class=\"text-muted-foreground max-w-2xl mx-auto\">
                    Partagez vos experiences, posez vos questions et entraidez-vous avec d'autres etudiants.
                </p>
            </div>

            <!-- Mobile New Post Button -->
            <div class=\"sm:hidden mb-6\">
                <a href=\"{{ path('app_publication_nouvelle') }}\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Nouvelle publication
                </a>
            </div>

            <!-- Filters -->
            <div class=\"glass-card rounded-2xl p-2 flex flex-wrap gap-2 justify-center\">
                <a href=\"{{ path('app_publications_index') }}\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors {{ contexte_filter is null ? 'bg-primary text-white' : 'bg-secondary border border-white/10 text-muted-foreground hover:text-foreground' }}\">
                    Toutes
                </a>
                <a href=\"{{ path('app_publications_index', { contexte: 1 }) }}\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center gap-2 {{ contexte_filter == 1 ? 'bg-academic/20 text-academic border border-academic/50' : 'bg-secondary border border-white/10 text-muted-foreground hover:text-foreground' }}\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Academic
                </a>
                <a href=\"{{ path('app_publications_index', { contexte: 2 }) }}\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center gap-2 {{ contexte_filter == 2 ? 'bg-personal/20 text-personal border border-personal/50' : 'bg-secondary border border-white/10 text-muted-foreground hover:text-foreground' }}\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Personal
                </a>
            </div>
        </div>
    </section>

    {# ✅ Recherche + Tri (même form) #}
<form method=\"get\"
      action=\"{{ path('app_publications_index') }}\"
      class=\"mt-6 mb-10 max-w-4xl mx-auto\">

    <div class=\"flex flex-col md:flex-row md:items-center gap-4\">

        {# 🔎 Recherche #}
        <div class=\"relative flex-1\">
            <input
                type=\"text\"
                name=\"q\"
                value=\"{{ q ?? app.request.query.get('q') }}\"
                placeholder=\"Rechercher une publication...\"
                class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4
                       text-sm focus:outline-none focus:border-primary transition-all
                       placeholder:text-muted-foreground/50\"
            />
            <button type=\"submit\"
                    class=\"absolute left-3 top-1/2 -translate-y-1/2 p-1 text-muted-foreground hover:text-primary transition-colors\"
                    title=\"Rechercher\">
                <i data-lucide=\"search\" class=\"w-5 h-5\"></i>
            </button>
        </div>

        {# 🔽 Tri (submit auto) #}
        <div class=\"md:w-72 w-full\">
            <select
                name=\"sort\"
                onchange=\"this.form.submit()\"
                class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4
                       text-sm focus:outline-none focus:border-primary transition-all\"
            >
                <option value=\"created_desc\" {{ (sort ?? app.request.query.get('sort')) == 'created_desc' ? 'selected' : '' }}>
                    Dernière création
                </option>
                <option value=\"updated_desc\" {{ (sort ?? app.request.query.get('sort')) == 'updated_desc' ? 'selected' : '' }}>
                    Dernière modification
                </option>
            </select>
        </div>

        {# ✅ conserver le filtre contexte si actif #}
        {% if contexte_filter is not null %}
            <input type=\"hidden\" name=\"contexte\" value=\"{{ contexte_filter }}\">
        {% endif %}
    </div>
</form>


    <!-- Publications List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto space-y-6\">
            {% for pub in publications %}
                {% set isAnonymous = (pub.imageAuteur is empty) %}
                {% set contextMap = { 1: 'academic', 2: 'personal', 3: 'help' } %}
                {% set contexte = contextMap[pub.contexte] ?? 'help' %}

                <article class=\"glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all\" id=\"pub-{{ pub.id }}\">
                    <!-- Header -->
                    <div class=\"p-6 pb-4\">
                        <div class=\"flex items-start justify-between\">
                            <div class=\"flex items-center gap-4\">
                                <!-- Avatar -->
                                {% if isAnonymous %}
                                    <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                        <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                                    </div>
                                {% else %}
                                    {% if pub.auteur and pub.auteur.IMAGE %}
                                        <img src=\"{{ asset('images/' ~ pub.auteur.IMAGE) }}\" alt=\"{{ pub.auteur.PRENOM ~ ' ' ~ pub.auteur.NOM }}\" class=\"w-14 h-14 rounded-full object-cover ring-2 ring-primary/30\">
                                    {% else %}
                                        <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                            <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                                        </div>
                                    {% endif %}
                                {% endif %}

                                <!-- Info -->
                                <div>
                                    {% if isAnonymous %}
                                        <h3 class=\"font-semibold text-lg\">Anonyme</h3>
                                    {% else %}
                                        <h3 class=\"font-semibold text-lg\">
                                            {{ pub.auteur ? (pub.auteur.PRENOM ~ ' ' ~ pub.auteur.NOM) : 'Utilisateur' }}
                                        </h3>
                                    {% endif %}

                                    {% if not isAnonymous and pub.auteur and pub.auteur.ROLE %}
                                        <p class=\"text-sm text-muted-foreground\">{{ pub.auteur.ROLE }}</p>
                                    {% endif %}

                                    <p class=\"text-xs text-muted-foreground mt-0.5\">{{ pub.dateCreation|date('d M Y à H:i') }}</p>
                                </div>
                            </div>

                            <!-- Context Badge -->
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium
                                {{ contexte == 'academic' ? 'bg-academic/20 text-academic' :
                                   contexte == 'personal' ? 'bg-personal/20 text-personal' :
                                   'bg-primary/20 text-primary' }}\">
                                {{ contexte == 'academic' ? 'Academic' :
                                   contexte == 'personal' ? 'Personal' : 'Entraide' }}
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class=\"px-6 pb-4\">
                        <h2 class=\"font-serif text-xl md:text-2xl font-medium mb-3 text-primary\">{{ pub.titre }}</h2>
                        <p class=\"text-foreground leading-relaxed\">{{ pub.contenu }}</p>
                    </div>

                    <!-- Actions Bar -->
                    <div class=\"px-6 py-4 bg-secondary/30 border-t border-white/5 flex items-center justify-between\">
                        <div class=\"flex items-center gap-6\">
                            <!-- Likes -->
                            <button
                                type=\"button\"
                                onclick=\"likePublication({{ pub.id }})\"
                                class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors group\"
                            >
                                <i data-lucide=\"heart\" class=\"w-5 h-5 group-hover:fill-primary/20\"></i>
                                <span class=\"text-sm\" id=\"likes-{{ pub.id }}\">
                                    {{ pub.likes ?? 0 }}
                                </span>
                            </button>

                            <!-- Comments Toggle -->
                            <button onclick=\"toggleComments({{ pub.id }})\" class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors\">
                                <i data-lucide=\"message-circle\" class=\"w-5 h-5\"></i>
                                <span class=\"text-sm\">{{ pub.commentaires|length }} commentaires</span>
                            </button>
                        </div>

                        <div class=\"flex items-center gap-3\">
                            <!-- Status -->
                            <span class=\"px-2 py-1 rounded-lg text-xs flex items-center gap-1
                                {{ pub.statut == 1 ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}\">
                                <span class=\"w-1.5 h-1.5 rounded-full {{ pub.statut == 1 ? 'bg-green-400' : 'bg-red-400' }}\"></span>
                                {{ pub.statut == 1 ? 'actif' : 'inactif' }}
                            </span>

                            {# ✅ Modifier/Supprimer UNIQUEMENT si auteur connecté #}
                            {% if pub.auteur and pub.auteur.id == current_user_id %}
                                <!-- Modifier -->
                                <a href=\"{{ path('app_publication_modifier', { id: pub.id }) }}\"
                                   class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent hover:border-primary/30 transition-colors\"
                                   title=\"Modifier la publication\">
                                    <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                    <span>Modifier</span>
                                </a>

                                <!-- Supprimer -->
                                <form action=\"{{ path('app_publication_supprimer', { id: pub.id }) }}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_publication_' ~ pub.id) }}\">
                                    <button type=\"submit\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent hover:border-red-500/30 transition-colors\" title=\"Supprimer la publication\">
                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                        <span>Supprimer</span>
                                    </button>
                                </form>
                            {% endif %}

                            <!-- Signaler -->
                            <a href=\"{{ path('app_publication_signaler', {id: pub.id}) }}\" class=\"text-muted-foreground hover:text-red-400 transition-colors\" title=\"Signaler\">
                                <i data-lucide=\"flag\" class=\"w-5 h-5\"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Comments Section (Hidden by default) -->
                    {% set cform = comment_forms[pub.id] %}
                    {% set comment_error_flashes = app.flashes('comment_error_' ~ pub.id) %}
                    {% set comment_success_flashes = app.flashes('comment_success_' ~ pub.id) %}
                    {% set has_comment_errors = (cform.contenu.vars.errors|length > 0) or (comment_error_flashes|length > 0) %}

                    <div id=\"comments-{{ pub.id }}\" class=\"{{ has_comment_errors ? '' : 'hidden' }} border-t border-white/5\">
                        <div class=\"p-6 bg-secondary/20\">
                            <!-- Comments List -->
                            <div class=\"space-y-4 mb-6\">
                                {% if pub.commentaires|length > 0 %}
                                    {% for comment in pub.commentaires %}
                                        <div class=\"flex gap-4\">
                                            {% if comment.auteur and comment.auteur.IMAGE %}
                                                <img src=\"{{ asset('images/' ~ comment.auteur.IMAGE) }}\" alt=\"{{ comment.auteur.PRENOM ~ ' ' ~ comment.auteur.NOM }}\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-white/5\">
                                            {% else %}
                                                <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/5\">
                                                    <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                                </div>
                                            {% endif %}

                                            <div class=\"flex-1\">
                                                <div class=\"glass-card rounded-2xl rounded-tl-none p-4\">
                                                    <div class=\"flex items-center justify-between mb-2\">
                                                        <div class=\"flex items-center gap-2\">
                                                            <h4 class=\"font-medium text-sm\">{{ comment.auteur ? (comment.auteur.PRENOM ~ ' ' ~ comment.auteur.NOM) : 'Utilisateur' }}</h4>
                                                            <span class=\"text-xs text-muted-foreground\">{{ comment.dateCreation|date('d M H:i') }}</span>
                                                        </div>

                                                        {# ✅ Modifier/Supprimer commentaire UNIQUEMENT si auteur connecté #}
                                                        {% if comment.auteur and comment.auteur.id == current_user_id %}
                                                            <div class=\"flex items-center gap-2\">
                                                                <!-- Modifier commentaire -->
                                                                <a href=\"{{ path('app_commentaire_modifier', { id: comment.id }) }}\"
                                                                   class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium
                                                                          text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent
                                                                          hover:border-primary/30 transition-colors\"
                                                                   title=\"Modifier le commentaire\">
                                                                    <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                                                    <span>Modifier</span>
                                                                </a>

                                                                <!-- Supprimer commentaire -->
                                                                <form action=\"{{ path('app_commentaire_supprimer', { id: comment.id }) }}\"
                                                                      method=\"post\"
                                                                      onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_comment_' ~ comment.id) }}\">
                                                                    <button type=\"submit\"
                                                                            class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium
                                                                                   text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent
                                                                                   hover:border-red-500/30 transition-colors\">
                                                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                                                        <span>Supprimer</span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        {% endif %}
                                                    </div>

                                                    <p class=\"text-sm text-foreground\">{{ comment.contenu }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <div class=\"text-center py-8\">
                                        <i data-lucide=\"message-square\" class=\"w-12 h-12 text-muted-foreground mx-auto mb-3 opacity-50\"></i>
                                        <p class=\"text-muted-foreground text-sm\">Aucun commentaire pour le moment.</p>
                                        <p class=\"text-xs text-muted-foreground mt-1\">Soyez le premier a repondre !</p>
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Add Comment -->

                            {{ form_start(cform, { attr: { class: 'flex gap-4' } }) }}
                            <input type=\"hidden\" name=\"return_q\" value=\"{{ q ?? '' }}\">
<input type=\"hidden\" name=\"return_sort\" value=\"{{ sort ?? 'created_desc' }}\">
<input type=\"hidden\" name=\"return_contexte\" value=\"{{ contexte_filter ?? '' }}\">

                                {% if app.user and app.user.IMAGE %}
                                    <img src=\"{{ asset('images/' ~ app.user.IMAGE) }}\" alt=\"Moi\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
                                {% else %}
                                    <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-primary/30\">
                                        <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                    </div>
                                {% endif %}

                                <div class=\"flex-1 relative\">
                                {# ✅ erreurs de validation #}
{% if cform.contenu.vars.errors|length > 0 %}
    <div class=\"mt-2 text-sm text-red-400\">
        {{ form_errors(cform.contenu) }}
        
    </div>
{% endif %}

                                    {{ form_widget(cform.contenu, {
                                        attr: {
                                            placeholder: \"Ecrivez votre commentaire...\",
                                            class: \"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\"
                                        }
                                    }) }}
                                    {% for msg in comment_error_flashes %}
    <div class=\"mb-2 text-sm text-red-400 bg-red-500/10 border border-red-500/20 rounded-xl px-4 py-2\">
        {{ msg }}
    </div>
{% endfor %}

{% for msg in comment_success_flashes %}
    <div class=\"mb-2 text-sm text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 rounded-xl px-4 py-2\">
        {{ msg }}
    </div>
{% endfor %}

                                    {% if cform.contenu.vars.errors|length > 0 %}
    <div class=\"mt-2 text-sm text-red-400\">
        {{ form_errors(cform.contenu) }}
    </div>
{% endif %}


                                    <button type=\"submit\" class=\"absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-primary rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors\">
                                        <i data-lucide=\"send\" class=\"w-4 h-4 text-white\"></i>
                                    </button>
                                </div>
                            {{ form_end(cform) }}
                        </div>
                    </div>
                </article>
            {% endfor %}
        </div>
    </section>
</div>

<script>
    function toggleComments(pubId) {
        const commentsSection = document.getElementById('comments-' + pubId);
        commentsSection.classList.toggle('hidden');

        if (!commentsSection.classList.contains('hidden')) {
            setTimeout(() => {
                commentsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
    }
</script>

<script>
function likePublication(pubId) {
    fetch(`/publications/\${pubId}/like`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.ok) {
            document.getElementById('likes-' + pubId).innerText = data.likes;
        }
    })
    .catch(() => {
        alert('Erreur lors du like');
    });
}
</script>
{% if open_comments_for is defined and open_comments_for %}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const openId = params.get('open');

    if (!openId) return;

    // 1) FORCER l'ouverture (pas de toggle)
    const comments = document.getElementById('comments-' + openId);
    if (comments) {
        comments.classList.remove('hidden');
    }

    // 2 Scroller vers la publication (avec léger délai pour être sûr)
    const pubEl = document.getElementById('pub-' + openId);
    if (pubEl) {
        setTimeout(() => {
            pubEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 50);
    }
});
</script>

{% endif %}


{% endblock %}
", "front/publication/index.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\front\\publication\\index.html.twig");
    }
}
