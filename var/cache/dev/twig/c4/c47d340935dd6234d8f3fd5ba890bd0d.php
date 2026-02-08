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
                <button class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium\">Toutes</button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Academic
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Personal
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <i data-lucide=\"help-circle\" class=\"w-4 h-4 text-primary\"></i>
                    Entraide
                </button>
            </div>
        </div>
    </section>

    <!-- Publications List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto space-y-6\">
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 82), "avatar", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 83), "avatar", [], "any", false, false, false, 83))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92), "html", null, true);
            yield "</h3>
                                ";
            // line 93
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 93), "niveau", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                                <p class=\"text-sm text-muted-foreground\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "auteur", [], "any", false, false, false, 94), "niveau", [], "any", false, false, false, 94), "html", null, true);
                yield "</p>
                                ";
            }
            // line 96
            yield "                                <p class=\"text-xs text-muted-foreground mt-0.5\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "date_creation", [], "any", false, false, false, 96), "d M Y à H:i"), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        
                        <!-- Context Badge -->
                        <span class=\"px-3 py-1.5 rounded-full text-xs font-medium 
                            ";
            // line 102
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 102) == "academic")) ? ("bg-academic/20 text-academic") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 103
$context["pub"], "contexte", [], "any", false, false, false, 103) == "personal")) ? ("bg-personal/20 text-personal") : ("bg-primary/20 text-primary"))));
            // line 104
            yield "\">
                            ";
            // line 105
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "contexte", [], "any", false, false, false, 105) == "academic")) ? ("Academic") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 106
$context["pub"], "contexte", [], "any", false, false, false, 106) == "personal")) ? ("Personal") : ("Entraide"))));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "likes", [], "any", false, false, false, 123), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires_count", [], "any", false, false, false, 129), "html", null, true);
            yield " commentaires</span>
                        </button>
                    </div>
                    
                    <div class=\"flex items-center gap-3\">
                        <!-- Status -->
                        <span class=\"px-2 py-1 rounded-lg text-xs bg-green-500/20 text-green-400 flex items-center gap-1\">
                            <span class=\"w-1.5 h-1.5 rounded-full bg-green-400\"></span>
                            ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "statut", [], "any", false, false, false, 137), "html", null, true);
            yield "
                        </span>
                        
                        <!-- Signaler -->
                        <a href=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_signaler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" class=\"text-muted-foreground hover:text-red-400 transition-colors\" title=\"Signaler\">
                            <i data-lucide=\"flag\" class=\"w-5 h-5\"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Comments Section (Hidden by default) -->
                <div id=\"comments-";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\" class=\"hidden border-t border-white/5\">
                    <div class=\"p-6 bg-secondary/20\">
                        <!-- Comments List -->
                        <div class=\"space-y-4 mb-6\">
                            ";
            // line 152
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 152)) > 0)) {
                // line 153
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "commentaires", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 154
                    yield "                                <div class=\"flex gap-4\">
                                    <img src=\"";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 155), "avatar", [], "any", false, false, false, 155))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 155), "nom", [], "any", false, false, false, 155), "html", null, true);
                    yield "\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-white/5\">
                                    <div class=\"flex-1\">
                                        <div class=\"glass-card rounded-2xl rounded-tl-none p-4\">
                                            <div class=\"flex items-center justify-between mb-2\">
                                                <h4 class=\"font-medium text-sm\">";
                    // line 159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 159), "nom", [], "any", false, false, false, 159), "html", null, true);
                    yield "</h4>
                                                <span class=\"text-xs text-muted-foreground\">";
                    // line 160
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 160), "d M H:i"), "html", null, true);
                    yield "</span>
                                            </div>
                                            <p class=\"text-sm text-foreground\">";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 162), "html", null, true);
                    yield "</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                yield "                            ";
            } else {
                // line 168
                yield "                                <div class=\"text-center py-8\">
                                    <i data-lucide=\"message-square\" class=\"w-12 h-12 text-muted-foreground mx-auto mb-3 opacity-50\"></i>
                                    <p class=\"text-muted-foreground text-sm\">Aucun commentaire pour le moment.</p>
                                    <p class=\"text-xs text-muted-foreground mt-1\">Soyez le premier a repondre !</p>
                                </div>
                            ";
            }
            // line 174
            yield "                        </div>
                        
                        <!-- Add Comment -->
                        <form action=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_commenter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "id", [], "any", false, false, false, 177)]), "html", null, true);
            yield "\" method=\"post\" class=\"flex gap-4\">
                            <img src=\"";
            // line 178
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
        // line 195
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
        return array (  399 => 195,  376 => 178,  372 => 177,  367 => 174,  359 => 168,  356 => 167,  345 => 162,  340 => 160,  336 => 159,  327 => 155,  324 => 154,  319 => 153,  317 => 152,  310 => 148,  300 => 141,  293 => 137,  282 => 129,  277 => 127,  270 => 123,  258 => 114,  254 => 113,  244 => 106,  243 => 105,  240 => 104,  238 => 103,  237 => 102,  227 => 96,  221 => 94,  219 => 93,  215 => 92,  210 => 89,  204 => 85,  196 => 83,  194 => 82,  184 => 76,  180 => 75,  149 => 47,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <button class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium\">Toutes</button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Academic
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Personal
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <i data-lucide=\"help-circle\" class=\"w-4 h-4 text-primary\"></i>
                    Entraide
                </button>
            </div>
        </div>
    </section>

    <!-- Publications List -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-4xl mx-auto space-y-6\">
            {% for pub in publications %}
            <article class=\"glass-card rounded-3xl overflow-hidden hover:border-primary/30 transition-all\" id=\"pub-{{ pub.id }}\">
                <!-- Header -->
                <div class=\"p-6 pb-4\">
                    <div class=\"flex items-start justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <!-- Avatar -->
                            {% if pub.auteur.avatar %}
                            <img src=\"{{ asset('images/' ~ pub.auteur.avatar) }}\" alt=\"{{ pub.auteur.nom }}\" class=\"w-14 h-14 rounded-full object-cover ring-2 ring-primary/30\">
                            {% else %}
                            <div class=\"w-14 h-14 rounded-full bg-secondary flex items-center justify-center ring-2 ring-white/10\">
                                <i data-lucide=\"user\" class=\"w-7 h-7 text-muted-foreground\"></i>
                            </div>
                            {% endif %}
                            
                            <!-- Info -->
                            <div>
                                <h3 class=\"font-semibold text-lg\">{{ pub.auteur.nom }}</h3>
                                {% if pub.auteur.niveau %}
                                <p class=\"text-sm text-muted-foreground\">{{ pub.auteur.niveau }}</p>
                                {% endif %}
                                <p class=\"text-xs text-muted-foreground mt-0.5\">{{ pub.date_creation|date('d M Y à H:i') }}</p>
                            </div>
                        </div>
                        
                        <!-- Context Badge -->
                        <span class=\"px-3 py-1.5 rounded-full text-xs font-medium 
                            {{ pub.contexte == 'academic' ? 'bg-academic/20 text-academic' : 
                               pub.contexte == 'personal' ? 'bg-personal/20 text-personal' : 
                               'bg-primary/20 text-primary' }}\">
                            {{ pub.contexte == 'academic' ? 'Academic' : 
                               pub.contexte == 'personal' ? 'Personal' : 'Entraide' }}
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
                            <span class=\"text-sm\">{{ pub.likes }}</span>
                        </button>
                        
                        <!-- Comments Toggle -->
                        <button onclick=\"toggleComments({{ pub.id }})\" class=\"flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors\">
                            <i data-lucide=\"message-circle\" class=\"w-5 h-5\"></i>
                            <span class=\"text-sm\">{{ pub.commentaires_count }} commentaires</span>
                        </button>
                    </div>
                    
                    <div class=\"flex items-center gap-3\">
                        <!-- Status -->
                        <span class=\"px-2 py-1 rounded-lg text-xs bg-green-500/20 text-green-400 flex items-center gap-1\">
                            <span class=\"w-1.5 h-1.5 rounded-full bg-green-400\"></span>
                            {{ pub.statut }}
                        </span>
                        
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
                                    <img src=\"{{ asset('images/' ~ comment.auteur.avatar) }}\" alt=\"{{ comment.auteur.nom }}\" class=\"w-10 h-10 rounded-full object-cover ring-2 ring-white/5\">
                                    <div class=\"flex-1\">
                                        <div class=\"glass-card rounded-2xl rounded-tl-none p-4\">
                                            <div class=\"flex items-center justify-between mb-2\">
                                                <h4 class=\"font-medium text-sm\">{{ comment.auteur.nom }}</h4>
                                                <span class=\"text-xs text-muted-foreground\">{{ comment.date|date('d M H:i') }}</span>
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
{% endblock %}", "front/publication/index.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\publication\\index.html.twig");
    }
}
