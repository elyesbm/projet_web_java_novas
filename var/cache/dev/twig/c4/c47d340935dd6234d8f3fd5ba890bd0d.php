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

    <!-- Publications List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto space-y-6\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 73
            yield "                ";
            $context["isAnonymous"] = Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "imageAuteur", [], "any", false, false, false, 73));
            // line 74
            yield "
                ";
            // line 75
            $context["contextMap"] = [1 => "academic", 2 => "personal", 3 => "help"];
            // line 76
            yield "                ";
            $context["contexte"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["contextMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 76), [], "array", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 76), [], "array", false, false, false, 76)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 76), [], "array", false, false, false, 76)) : ("help"));
            // line 77
            yield "
                <article class=\"glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all\" id=\"pub-";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "\">
                    <!-- Header -->
                    <div class=\"p-6 pb-4\">
                        <div class=\"flex items-start justify-between\">
                            <div class=\"flex items-center gap-4\">
                                <!-- Avatar -->
                                ";
            // line 84
            if ((($tmp = (isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "                                    <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                        <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                                    </div>
                                ";
            } else {
                // line 89
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 89) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 89), "IMAGE", [], "any", false, false, false, 89))) {
                    // line 90
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 90), "IMAGE", [], "any", false, false, false, 90))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 90), "PRENOM", [], "any", false, false, false, 90) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 90), "NOM", [], "any", false, false, false, 90)), "html", null, true);
                    yield "\" class=\"w-14 h-14 rounded-full object-cover ring-2 ring-primary/30\">
                                    ";
                } else {
                    // line 92
                    yield "                                        <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                            <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                                        </div>
                                    ";
                }
                // line 96
                yield "                                ";
            }
            // line 97
            yield "
                                <!-- Info -->
                                <div>
                                    ";
            // line 100
            if ((($tmp = (isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 100, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                                        <h3 class=\"font-semibold text-lg\">Anonyme</h3>
                                    ";
            } else {
                // line 103
                yield "                                        <h3 class=\"font-semibold text-lg\">
                                            ";
                // line 104
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 104), "PRENOM", [], "any", false, false, false, 104) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 104), "NOM", [], "any", false, false, false, 104)), "html", null, true)) : ("Utilisateur"));
                yield "
                                        </h3>
                                    ";
            }
            // line 107
            yield "
                                    ";
            // line 108
            if ((( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 108, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 108)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 108), "ROLE", [], "any", false, false, false, 108))) {
                // line 109
                yield "                                        <p class=\"text-sm text-muted-foreground\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 109), "ROLE", [], "any", false, false, false, 109), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 111
            yield "
                                    <p class=\"text-xs text-muted-foreground mt-0.5\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 112), "d M Y à H:i"), "html", null, true);
            yield "</p>
                                </div>
                            </div>

                            <!-- Context Badge -->
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium
                                ";
            // line 118
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 118, $this->source); })()) == "academic")) ? ("bg-academic/20 text-academic") : ((((            // line 119
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 119, $this->source); })()) == "personal")) ? ("bg-personal/20 text-personal") : ("bg-primary/20 text-primary"))));
            // line 120
            yield "\">
                                ";
            // line 121
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 121, $this->source); })()) == "academic")) ? ("Academic") : ((((            // line 122
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 122, $this->source); })()) == "personal")) ? ("Personal") : ("Entraide"))));
            yield "
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class=\"px-6 pb-4\">
                        <h2 class=\"font-serif text-xl md:text-2xl font-medium mb-3 text-primary\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 129), "html", null, true);
            yield "</h2>
                        <p class=\"text-foreground leading-relaxed\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 130), "html", null, true);
            yield "</p>
                    </div>

                    <!-- Actions Bar -->
                    <div class=\"px-6 py-4 bg-secondary/30 border-t border-white/5 flex items-center justify-between\">
                        <div class=\"flex items-center gap-6\">
                            <!-- Likes -->
                            <button class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors group\">
                                <i data-lucide=\"heart\" class=\"w-5 h-5 group-hover:fill-primary/20\"></i>
                                <span class=\"text-sm\">";
            // line 139
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", true, true, false, 139) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 139)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 139), "html", null, true)) : (0));
            yield "</span>
                            </button>

                            <!-- Comments Toggle -->
                            <button onclick=\"toggleComments(";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield ")\" class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors\">
                                <i data-lucide=\"message-circle\" class=\"w-5 h-5\"></i>
                                <span class=\"text-sm\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 145)), "html", null, true);
            yield " commentaires</span>
                            </button>
                        </div>

                        <div class=\"flex items-center gap-3\">
                            <!-- Status -->
                            <span class=\"px-2 py-1 rounded-lg text-xs flex items-center gap-1
    ";
            // line 152
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 152) == 1)) ? ("bg-green-500/20 text-green-400") : ("bg-red-500/20 text-red-400"));
            // line 154
            yield "\">
        
    <span class=\"w-1.5 h-1.5 rounded-full 
        ";
            // line 157
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 157) == 1)) ? ("bg-green-400") : ("bg-red-400"));
            yield "\"></span>

    ";
            // line 159
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 159) == 1)) ? ("actif") : ("inactif"));
            yield "
</span>


                            <!-- Modifier -->
                            <a href=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            yield "\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent hover:border-primary/30 transition-colors\" title=\"Modifier la publication\">
                                <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                                <span>Modifier</span>
                            </a>

                            <!-- Supprimer -->
                            <form action=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_publication_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 171))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent hover:border-red-500/30 transition-colors\" title=\"Supprimer la publication\">
                                    <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                    <span>Supprimer</span>
                                </button>
                            </form>

                            <!-- Signaler -->
                            <a href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_signaler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 179)]), "html", null, true);
            yield "\" class=\"text-muted-foreground hover:text-red-400 transition-colors\" title=\"Signaler\">
                                <i data-lucide=\"flag\" class=\"w-5 h-5\"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Comments Section (Hidden by default) -->
                    <div id=\"comments-";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 186), "html", null, true);
            yield "\" class=\"hidden border-t border-white/5\">
                        <div class=\"p-6 bg-secondary/20\">
                            <!-- Comments List -->
                            <div class=\"space-y-4 mb-6\">
                                ";
            // line 190
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 190)) > 0)) {
                // line 191
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 192
                    yield "                                        <div class=\"flex gap-4\">
                                            ";
                    // line 193
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 193) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 193), "IMAGE", [], "any", false, false, false, 193))) {
                        // line 194
                        yield "                                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 194), "IMAGE", [], "any", false, false, false, 194))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 194), "PRENOM", [], "any", false, false, false, 194) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 194), "NOM", [], "any", false, false, false, 194)), "html", null, true);
                        yield "\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-white/5\">
                                            ";
                    } else {
                        // line 196
                        yield "                                                <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/5\">
                                                    <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                                </div>
                                            ";
                    }
                    // line 200
                    yield "
                                            <div class=\"flex-1\">
                                                <div class=\"glass-card rounded-2xl rounded-tl-none p-4\">
                                                    <div class=\"flex items-center justify-between mb-2\">
                                                        <div class=\"flex items-center gap-2\">
                                                            <h4 class=\"font-medium text-sm\">";
                    // line 205
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 205), "PRENOM", [], "any", false, false, false, 205) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 205), "NOM", [], "any", false, false, false, 205)), "html", null, true)) : ("Utilisateur"));
                    yield "</h4>
                                                            <span class=\"text-xs text-muted-foreground\">";
                    // line 206
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "dateCreation", [], "any", false, false, false, 206), "d M H:i"), "html", null, true);
                    yield "</span>
                                                        </div>

                                                        <!-- Supprimer commentaire -->
<div class=\"flex items-center gap-2\">

    <!-- Modifier commentaire -->
    <a href=\"";
                    // line 213
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 213)]), "html", null, true);
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
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 223)]), "html", null, true);
                    yield "\"
          method=\"post\"
          onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 226
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 226))), "html", null, true);
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


                                                    </div>

                                                    <p class=\"text-sm text-foreground\">";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 241), "html", null, true);
                    yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 246
                yield "                                ";
            } else {
                // line 247
                yield "                                    <div class=\"text-center py-8\">
                                        <i data-lucide=\"message-square\" class=\"w-12 h-12 text-muted-foreground mx-auto mb-3 opacity-50\"></i>
                                        <p class=\"text-muted-foreground text-sm\">Aucun commentaire pour le moment.</p>
                                        <p class=\"text-xs text-muted-foreground mt-1\">Soyez le premier a repondre !</p>
                                    </div>
                                ";
            }
            // line 253
            yield "                            </div>

                            <!-- Add Comment -->
<form action=\"";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_ajouter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 256)]), "html", null, true);
            yield "\" method=\"post\" class=\"flex gap-4\">
                                ";
            // line 257
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "user", [], "any", false, false, false, 257) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "user", [], "any", false, false, false, 257), "IMAGE", [], "any", false, false, false, 257))) {
                // line 258
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "user", [], "any", false, false, false, 258), "IMAGE", [], "any", false, false, false, 258))), "html", null, true);
                yield "\" alt=\"Moi\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
                                ";
            } else {
                // line 260
                yield "                                    <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-primary/30\">
                                        <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                    </div>
                                ";
            }
            // line 264
            yield "
                                <div class=\"flex-1 relative\">
                                    <input
                                        type=\"text\"
                                        name=\"contenu\"
                                        placeholder=\"Ecrivez votre commentaire...\"
                                        class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\"
                                    >
                                    <button type=\"submit\" class=\"absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-primary rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors\">
                                        <i data-lucide=\"send\" class=\"w-4 h-4 text-white\"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pub'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
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
        return array (  557 => 281,  535 => 264,  529 => 260,  523 => 258,  521 => 257,  517 => 256,  512 => 253,  504 => 247,  501 => 246,  490 => 241,  472 => 226,  466 => 223,  453 => 213,  443 => 206,  439 => 205,  432 => 200,  426 => 196,  418 => 194,  416 => 193,  413 => 192,  408 => 191,  406 => 190,  399 => 186,  389 => 179,  378 => 171,  374 => 170,  365 => 164,  357 => 159,  352 => 157,  347 => 154,  345 => 152,  335 => 145,  330 => 143,  323 => 139,  311 => 130,  307 => 129,  297 => 122,  296 => 121,  293 => 120,  291 => 119,  290 => 118,  281 => 112,  278 => 111,  272 => 109,  270 => 108,  267 => 107,  261 => 104,  258 => 103,  254 => 101,  252 => 100,  247 => 97,  244 => 96,  238 => 92,  230 => 90,  227 => 89,  221 => 85,  219 => 84,  210 => 78,  207 => 77,  204 => 76,  202 => 75,  199 => 74,  196 => 73,  192 => 72,  176 => 61,  167 => 57,  159 => 54,  148 => 46,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                            <button class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors group\">
                                <i data-lucide=\"heart\" class=\"w-5 h-5 group-hover:fill-primary/20\"></i>
                                <span class=\"text-sm\">{{ pub.likes ?? 0 }}</span>
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
    {{ pub.statut == 1 
        ? 'bg-green-500/20 text-green-400' 
        : 'bg-red-500/20 text-red-400' }}\">
        
    <span class=\"w-1.5 h-1.5 rounded-full 
        {{ pub.statut == 1 ? 'bg-green-400' : 'bg-red-400' }}\"></span>

    {{ pub.statut == 1 ? 'actif' : 'inactif' }}
</span>


                            <!-- Modifier -->
                            <a href=\"{{ path('app_publication_modifier', { id: pub.id }) }}\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent hover:border-primary/30 transition-colors\" title=\"Modifier la publication\">
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

                            <!-- Signaler -->
                            <a href=\"{{ path('app_publication_signaler', {id: pub.id}) }}\" class=\"text-muted-foreground hover:text-red-400 transition-colors\" title=\"Signaler\">
                                <i data-lucide=\"flag\" class=\"w-5 h-5\"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Comments Section (Hidden by default) -->
                    <div id=\"comments-{{ pub.id }}\" class=\"hidden border-t border-white/5\">
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

                                                        <!-- Supprimer commentaire -->
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
<form action=\"{{ path('app_commentaire_ajouter', {id: pub.id}) }}\" method=\"post\" class=\"flex gap-4\">
                                {% if app.user and app.user.IMAGE %}
                                    <img src=\"{{ asset('images/' ~ app.user.IMAGE) }}\" alt=\"Moi\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
                                {% else %}
                                    <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-primary/30\">
                                        <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                    </div>
                                {% endif %}

                                <div class=\"flex-1 relative\">
                                    <input
                                        type=\"text\"
                                        name=\"contenu\"
                                        placeholder=\"Ecrivez votre commentaire...\"
                                        class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\"
                                    >
                                    <button type=\"submit\" class=\"absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-primary rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors\">
                                        <i data-lucide=\"send\" class=\"w-4 h-4 text-white\"></i>
                                    </button>
                                </div>
                            </form>
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
{% endblock %}
", "front/publication/index.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\front\\publication\\index.html.twig");
    }
}
