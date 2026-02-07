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
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_nouvelle");
        yield "\" class=\"flex items-center justify-center gap-2 w-full h-12 bg-primary text-white rounded-xl font-medium\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Nouvelle publication
                </a>
            </div>
            
            <!-- Filters -->
            <div class=\"glass-card rounded-2xl p-2 flex flex-wrap gap-2 justify-center\">
                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index");
        yield "\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors ";
        yield (((null === (isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 55, $this->source); })()))) ? ("bg-primary text-white") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
        yield "\">
                    Toutes
                </a>
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index", ["contexte" => 1]);
        yield "\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center gap-2 ";
        yield ((((isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 58, $this->source); })()) == 1)) ? ("bg-academic/20 text-academic border border-academic/50") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
        yield "\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Academic
                </a>
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index", ["contexte" => 2]);
        yield "\" class=\"px-6 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center gap-2 ";
        yield ((((isset($context["contexte_filter"]) || array_key_exists("contexte_filter", $context) ? $context["contexte_filter"] : (function () { throw new RuntimeError('Variable "contexte_filter" does not exist.', 62, $this->source); })()) == 2)) ? ("bg-personal/20 text-personal border border-personal/50") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 74
            yield "            ";
            $context["contextMap"] = [1 => "academic", 2 => "personal", 3 => "help"];
            // line 75
            yield "            ";
            $context["contexte"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["contextMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 75), [], "array", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 75, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 75), [], "array", false, false, false, 75)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contextMap"]) || array_key_exists("contextMap", $context) ? $context["contextMap"] : (function () { throw new RuntimeError('Variable "contextMap" does not exist.', 75, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 75), [], "array", false, false, false, 75)) : ("help"));
            // line 76
            yield "            <article class=\"glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all\" id=\"pub-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "\">
                <!-- Header -->
                <div class=\"p-6 pb-4\">
                    <div class=\"flex items-start justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <!-- Avatar -->
                            ";
            // line 82
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 82), "IMAGE", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 83), "IMAGE", [], "any", false, false, false, 83))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 83), "PRENOM", [], "any", false, false, false, 83) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 83), "NOM", [], "any", false, false, false, 83)), "html", null, true);
                yield "\" class=\"w-14 h-14 rounded-full object-cover ring-2 ring-primary/30\">
                            ";
            } else {
                // line 85
                yield "                            <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                            </div>
                            ";
            }
            // line 89
            yield "                            
                            <!-- Info -->
                            <div>
                                <h3 class=\"font-semibold text-lg\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 92), "PRENOM", [], "any", false, false, false, 92) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 92), "NOM", [], "any", false, false, false, 92)), "html", null, true);
            yield "</h3>
                                ";
            // line 93
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 93), "ROLE", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                                <p class=\"text-sm text-muted-foreground\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 94), "ROLE", [], "any", false, false, false, 94), "html", null, true);
                yield "</p>
                                ";
            }
            // line 96
            yield "                                <p class=\"text-xs text-muted-foreground mt-0.5\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "dateCreation", [], "any", false, false, false, 96), "d M Y à H:i"), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        
                        <!-- Context Badge -->
                        <span class=\"px-3 py-1.5 rounded-full text-xs font-medium 
                            ";
            // line 102
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 102, $this->source); })()) == "academic")) ? ("bg-academic/20 text-academic") : ((((            // line 103
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 103, $this->source); })()) == "personal")) ? ("bg-personal/20 text-personal") : ("bg-primary/20 text-primary"))));
            // line 104
            yield "\">
                            ";
            // line 105
            yield ((((isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 105, $this->source); })()) == "academic")) ? ("Academic") : ((((            // line 106
(isset($context["contexte"]) || array_key_exists("contexte", $context) ? $context["contexte"] : (function () { throw new RuntimeError('Variable "contexte" does not exist.', 106, $this->source); })()) == "personal")) ? ("Personal") : ("Entraide"))));
            yield "
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class=\"px-6 pb-4\">
                    <h2 class=\"font-serif text-xl md:text-2xl font-medium mb-3 text-primary\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 113), "html", null, true);
            yield "</h2>
                    <p class=\"text-foreground leading-relaxed\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contenu", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
                </div>
                
                <!-- Actions Bar -->
                <div class=\"px-6 py-4 bg-secondary/30 border-t border-white/5 flex items-center justify-between\">
                    <div class=\"flex items-center gap-6\">
                        <!-- Likes -->
                        <button class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors group\">
                            <i data-lucide=\"heart\" class=\"w-5 h-5 group-hover:fill-primary/20\"></i>
                            <span class=\"text-sm\">";
            // line 123
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 123), "html", null, true)) : (0));
            yield "</span>
                        </button>
                        
                        <!-- Comments Toggle -->
                        <button onclick=\"toggleComments(";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 127), "html", null, true);
            yield ")\" class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors\">
                            <i data-lucide=\"message-circle\" class=\"w-5 h-5\"></i>
                            <span class=\"text-sm\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 129)), "html", null, true);
            yield " commentaires</span>
                        </button>
                    </div>
                    
                    <div class=\"flex items-center gap-3\">
                        <!-- Status -->
                        <span class=\"px-2 py-1 rounded-lg text-xs bg-green-500/20 text-green-400 flex items-center gap-1\">
                            <span class=\"w-1.5 h-1.5 rounded-full bg-green-400\"></span>
                            ";
            // line 137
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 137) == 1)) ? ("actif") : ("inactif"));
            yield "
                        </span>

                        <!-- Modifier -->
                        <a href=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent hover:border-primary/30 transition-colors\" title=\"Modifier la publication\">
                            <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                            <span>Modifier</span>
                        </a>

                        <!-- Supprimer (le contrôleur n'autorise que l'auteur) -->
                        <form action=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Supprimer cette publication ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_publication_" . CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 148))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent hover:border-red-500/30 transition-colors\" title=\"Supprimer la publication\">
                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                <span>Supprimer</span>
                            </button>
                        </form>
                        
                        <!-- Signaler -->
                        <a href=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_signaler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\" class=\"text-muted-foreground hover:text-red-400 transition-colors\" title=\"Signaler\">
                            <i data-lucide=\"flag\" class=\"w-5 h-5\"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Comments Section (Hidden by default) -->
                <div id=\"comments-";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 163), "html", null, true);
            yield "\" class=\"hidden border-t border-white/5\">
                    <div class=\"p-6 bg-secondary/20\">
                        <!-- Comments List -->
                        <div class=\"space-y-4 mb-6\">
                            ";
            // line 167
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 167)) > 0)) {
                // line 168
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 168));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 169
                    yield "                                <div class=\"flex gap-4\">
                                    ";
                    // line 170
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 170), "IMAGE", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 171
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 171), "IMAGE", [], "any", false, false, false, 171))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 171), "PRENOM", [], "any", false, false, false, 171) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 171), "NOM", [], "any", false, false, false, 171)), "html", null, true);
                        yield "\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-white/5\">
                                    ";
                    } else {
                        // line 173
                        yield "                                    <div class=\"w-10 h-10 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/5\">
                                        <i data-lucide=\"user\" class=\"w-5 h-5 text-muted-foreground\"></i>
                                    </div>
                                    ";
                    }
                    // line 177
                    yield "                                    <div class=\"flex-1\">
                                        <div class=\"glass-card rounded-2xl rounded-tl-none p-4\">
                                            <div class=\"flex items-center justify-between mb-2\">
                                                <div class=\"flex items-center gap-2\">
                                                    <h4 class=\"font-medium text-sm\">";
                    // line 181
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 181), "PRENOM", [], "any", false, false, false, 181) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 181), "NOM", [], "any", false, false, false, 181)), "html", null, true);
                    yield "</h4>
                                                    <span class=\"text-xs text-muted-foreground\">";
                    // line 182
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "dateCreation", [], "any", false, false, false, 182), "d M H:i"), "html", null, true);
                    yield "</span>
                                                </div>
                                                <form action=\"";
                    // line 184
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_commentaire_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 184), "idComment" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                    yield "\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 185
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 185))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent hover:border-red-500/30 transition-colors\" title=\"Supprimer le commentaire\">
                                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                                        <span>Supprimer</span>
                                                    </button>
                                                </form>
                                            </div>
                                            <p class=\"text-sm text-foreground\">";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 192), "html", null, true);
                    yield "</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                yield "                            ";
            } else {
                // line 198
                yield "                                <div class=\"text-center py-8\">
                                    <i data-lucide=\"message-square\" class=\"w-12 h-12 text-muted-foreground mx-auto mb-3 opacity-50\"></i>
                                    <p class=\"text-muted-foreground text-sm\">Aucun commentaire pour le moment.</p>
                                    <p class=\"text-xs text-muted-foreground mt-1\">Soyez le premier a repondre !</p>
                                </div>
                            ";
            }
            // line 204
            yield "                        </div>
                        
                        <!-- Add Comment -->
                        <form action=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_commenter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 207)]), "html", null, true);
            yield "\" method=\"post\" class=\"flex gap-4\">
                            <img src=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/student-avatar.jpg"), "html", null, true);
            yield "\" alt=\"Moi\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
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
        // line 225
        yield "        </div>
    </section>
</div>

<script>
    function toggleComments(pubId) {
        const commentsSection = document.getElementById('comments-' + pubId);
        commentsSection.classList.toggle('hidden');
        
        // Scroll to comments if opening
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
        return array (  469 => 225,  446 => 208,  442 => 207,  437 => 204,  429 => 198,  426 => 197,  415 => 192,  405 => 185,  401 => 184,  396 => 182,  392 => 181,  386 => 177,  380 => 173,  372 => 171,  370 => 170,  367 => 169,  362 => 168,  360 => 167,  353 => 163,  343 => 156,  332 => 148,  328 => 147,  319 => 141,  312 => 137,  301 => 129,  296 => 127,  289 => 123,  277 => 114,  273 => 113,  263 => 106,  262 => 105,  259 => 104,  257 => 103,  256 => 102,  246 => 96,  240 => 94,  238 => 93,  234 => 92,  229 => 89,  223 => 85,  215 => 83,  213 => 82,  203 => 76,  200 => 75,  197 => 74,  193 => 73,  177 => 62,  168 => 58,  160 => 55,  149 => 47,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            {% set contextMap = { 1: 'academic', 2: 'personal', 3: 'help' } %}
            {% set contexte = contextMap[pub.contexte] ?? 'help' %}
            <article class=\"glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all\" id=\"pub-{{ pub.id }}\">
                <!-- Header -->
                <div class=\"p-6 pb-4\">
                    <div class=\"flex items-start justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <!-- Avatar -->
                            {% if pub.auteur.IMAGE %}
                            <img src=\"{{ asset('images/' ~ pub.auteur.IMAGE) }}\" alt=\"{{ pub.auteur.PRENOM ~ ' ' ~ pub.auteur.NOM }}\" class=\"w-14 h-14 rounded-full object-cover ring-2 ring-primary/30\">
                            {% else %}
                            <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                            </div>
                            {% endif %}
                            
                            <!-- Info -->
                            <div>
                                <h3 class=\"font-semibold text-lg\">{{ pub.auteur.PRENOM ~ ' ' ~ pub.auteur.NOM }}</h3>
                                {% if pub.auteur.ROLE %}
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
                        <span class=\"px-2 py-1 rounded-lg text-xs bg-green-500/20 text-green-400 flex items-center gap-1\">
                            <span class=\"w-1.5 h-1.5 rounded-full bg-green-400\"></span>
                            {{ pub.statut == 1 ? 'actif' : 'inactif' }}
                        </span>

                        <!-- Modifier -->
                        <a href=\"{{ path('app_publication_modifier', { id: pub.id }) }}\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-primary hover:bg-primary/10 border border-transparent hover:border-primary/30 transition-colors\" title=\"Modifier la publication\">
                            <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                            <span>Modifier</span>
                        </a>

                        <!-- Supprimer (le contrôleur n'autorise que l'auteur) -->
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
                                    {% if comment.auteur.IMAGE %}
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
                                                    <h4 class=\"font-medium text-sm\">{{ comment.auteur.PRENOM ~ ' ' ~ comment.auteur.NOM }}</h4>
                                                    <span class=\"text-xs text-muted-foreground\">{{ comment.dateCreation|date('d M H:i') }}</span>
                                                </div>
                                                <form action=\"{{ path('app_publication_commentaire_supprimer', { id: pub.id, idComment: comment.id }) }}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_comment_' ~ comment.id) }}\">
                                                    <button type=\"submit\" class=\"flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 border border-transparent hover:border-red-500/30 transition-colors\" title=\"Supprimer le commentaire\">
                                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                                        <span>Supprimer</span>
                                                    </button>
                                                </form>
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
                        <form action=\"{{ path('app_publication_commenter', {id: pub.id}) }}\" method=\"post\" class=\"flex gap-4\">
                            <img src=\"{{ asset('images/student-avatar.jpg') }}\" alt=\"Moi\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-primary/30\">
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
        
        // Scroll to comments if opening
        if (!commentsSection.classList.contains('hidden')) {
            setTimeout(() => {
                commentsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
    }
</script>
{% endblock %}", "front/publication/index.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\front\\publication\\index.html.twig");
    }
}
