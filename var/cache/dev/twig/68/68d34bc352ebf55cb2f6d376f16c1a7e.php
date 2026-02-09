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

/* front/skill/index.html.twig */
class __TwigTemplate_f157fbbfec578b20ba0b9dbce29fc204 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/skill/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/skill/index.html.twig"));

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

        yield "Skills & Talents - NoVas";
        
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
            <!-- Logo -->
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_mes");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"sparkles\" class=\"w-4 h-4\"></i>
                    Mes Skills
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 right-20 w-96 h-96 bg-primary/10 rounded-full blur-[100px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"flex flex-col md:flex-row md:items-end justify-between gap-6\">
                <div>
                    <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                        <i data-lucide=\"sparkles\" class=\"w-4 h-4\"></i>
                        Skills & Talents
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Decouvrez vos <span class=\"italic text-primary\">talents</span>
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Identifiez, developpez et valorisez vos competences dans une approche inclusive et personnalisee.
                    </p>
                </div>
                
                <div class=\"flex gap-4\">
                    <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_ajouter");
        yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                        <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                        Ajouter un skill
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recherche & Filtres -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <form method=\"get\" action=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
        yield "\" id=\"form-filters\" class=\"glass-card rounded-2xl p-4 flex flex-col lg:flex-row gap-4 items-end lg:items-center\">
                <div class=\"relative flex-1 w-full\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" name=\"q\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 61, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un skill (nom, description)...\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                
                <div class=\"flex gap-3 flex-wrap items-center\">
                    <span class=\"text-sm text-muted-foreground hidden sm:inline\">Type :</span>
                    <button type=\"submit\" name=\"type\" value=\"\" class=\"px-4 py-2 rounded-xl text-sm font-medium ";
        // line 66
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 66, $this->source); })()))) ? ("bg-primary text-white") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground"));
        yield "\">Tous</button>
                    <button type=\"submit\" name=\"type\" value=\"soft\" class=\"px-4 py-2 rounded-xl text-sm font-medium flex items-center gap-2 ";
        // line 67
        yield ((((isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 67, $this->source); })()) == "soft")) ? ("bg-personal/30 text-personal border border-personal/50") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground hover:border-personal/30"));
        yield "\">
                        <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                        Soft Skills
                    </button>
                    <button type=\"submit\" name=\"type\" value=\"hard\" class=\"px-4 py-2 rounded-xl text-sm font-medium flex items-center gap-2 ";
        // line 71
        yield ((((isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 71, $this->source); })()) == "hard")) ? ("bg-academic/30 text-academic border border-academic/50") : ("bg-secondary border border-white/10 text-muted-foreground hover:text-foreground hover:border-academic/30"));
        yield "\">
                        <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                        Hard Skills
                    </button>
                </div>
                
                <div class=\"flex gap-3 flex-wrap items-center w-full lg:w-auto\">
                    <label for=\"filter-categorie\" class=\"text-sm text-muted-foreground hidden sm:inline\">Catégorie :</label>
                    <select name=\"categorie\" id=\"filter-categorie\" onchange=\"document.getElementById('form-filters').submit()\" class=\"h-12 bg-secondary border border-white/10 rounded-xl px-4 text-sm focus:outline-none focus:border-primary transition-all text-muted-foreground min-w-[180px]\">
                        <option value=\"\">Toutes les catégories</option>
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 82
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["search_categorie"]) || array_key_exists("search_categorie", $context) ? $context["search_categorie"] : (function () { throw new RuntimeError('Variable "search_categorie" does not exist.', 82, $this->source); })()) == $context["cat"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                    </select>
                </div>
                
                <button type=\"submit\" class=\"h-12 px-6 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all flex items-center gap-2 shrink-0\">
                    <i data-lucide=\"search\" class=\"w-4 h-4\"></i>
                    Appliquer
                </button>
            </form>
        </div>
    </section>

    <!-- Skills Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            ";
        // line 98
        if ((((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 98, $this->source); })()) || (isset($context["search_type"]) || array_key_exists("search_type", $context) ? $context["search_type"] : (function () { throw new RuntimeError('Variable "search_type" does not exist.', 98, $this->source); })())) || (isset($context["search_categorie"]) || array_key_exists("search_categorie", $context) ? $context["search_categorie"] : (function () { throw new RuntimeError('Variable "search_categorie" does not exist.', 98, $this->source); })()))) {
            // line 99
            yield "            <div class=\"flex items-center justify-between mb-6\">
                <p class=\"text-sm text-muted-foreground\">
                    ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 101, $this->source); })())), "html", null, true);
            yield " résultat(s)
                    ";
            // line 102
            if ((($tmp = (isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " pour « ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 102, $this->source); })()), "html", null, true);
                yield " »";
            }
            // line 103
            yield "                </p>
                <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
            yield "\" class=\"text-sm text-primary hover:underline\">Réinitialiser les filtres</a>
            </div>
            ";
        }
        // line 107
        yield "            
            ";
        // line 108
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 108, $this->source); })()))) {
            // line 109
            yield "            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <i data-lucide=\"search-x\" class=\"w-16 h-16 text-muted-foreground mx-auto mb-4 opacity-50\"></i>
                <h3 class=\"text-xl font-semibold mb-2\">Aucun skill trouvé</h3>
                <p class=\"text-muted-foreground mb-6\">Modifiez la recherche ou les filtres, ou <a href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
            yield "\" class=\"text-primary hover:underline\">réinitialisez</a> pour tout afficher.</p>
                <a href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
            yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                    <i data-lucide=\"rotate-ccw\" class=\"w-5 h-5\"></i>
                    Voir tous les skills
                </a>
            </div>
            ";
        } else {
            // line 119
            yield "            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 121
                yield "                ";
                $context["typeSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "contexteSkill", [], "any", false, false, false, 121) == "hard")) ? ("hard") : ("soft"));
                // line 122
                yield "                ";
                $context["iconSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "contexteSkill", [], "any", false, false, false, 122) == "hard")) ? ("code") : ("heart"));
                // line 123
                yield "                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all duration-500 hover:-translate-y-2 group\">
                    <!-- Header -->
                    <div class=\"flex items-start justify-between mb-4\">
                        <div class=\"w-14 h-14 rounded-2xl ";
                // line 126
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 126, $this->source); })()) == "hard")) ? ("bg-academic/20") : ("bg-personal/20"));
                yield " flex items-center justify-center group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconSkill"]) || array_key_exists("iconSkill", $context) ? $context["iconSkill"] : (function () { throw new RuntimeError('Variable "iconSkill" does not exist.', 127, $this->source); })()), "html", null, true);
                yield "\" class=\"w-7 h-7 ";
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 127, $this->source); })()) == "hard")) ? ("text-academic") : ("text-personal"));
                yield "\"></i>
                        </div>
                        
                        <div class=\"flex flex-col items-end gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
                // line 131
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 131, $this->source); })()) == "hard")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
                yield "\">
                                ";
                // line 132
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 132, $this->source); })()) == "hard")) ? ("Hard Skill") : ("Soft Skill"));
                yield "
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-secondary text-muted-foreground\">
                                ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "categorie", [], "any", false, false, false, 135), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class=\"text-xl font-semibold mb-2 group-hover:text-primary transition-colors\">";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "nomSkill", [], "any", false, false, false, 141), "html", null, true);
                yield "</h3>
                    <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "descriptionSkill", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "descriptionSkill", [], "any", false, false, false, 142), "")) : ("")), "html", null, true);
                yield "</p>
                    
                    <!-- Action -->
                    <a href=\"";
                // line 145
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_ajouter");
                yield "\" class=\"block w-full h-12 bg-secondary border border-white/10 rounded-xl font-medium hover:bg-primary hover:border-primary hover:text-white transition-all flex items-center justify-center gap-2 group/btn\">
                        <span>Ajouter ce skill</span>
                        <i data-lucide=\"arrow-right\" class=\"w-4 h-4 group-hover/btn:translate-x-1 transition-transform\"></i>
                    </a>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "            </div>
            ";
        }
        // line 153
        yield "        </div>
    </section>
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
        return "front/skill/index.html.twig";
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
        return array (  361 => 153,  357 => 151,  345 => 145,  339 => 142,  335 => 141,  326 => 135,  320 => 132,  316 => 131,  307 => 127,  303 => 126,  298 => 123,  295 => 122,  292 => 121,  288 => 120,  285 => 119,  276 => 113,  272 => 112,  267 => 109,  265 => 108,  262 => 107,  256 => 104,  253 => 103,  247 => 102,  243 => 101,  239 => 99,  237 => 98,  221 => 84,  208 => 82,  204 => 81,  191 => 71,  184 => 67,  180 => 66,  172 => 61,  166 => 58,  151 => 46,  118 => 16,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Skills & Talents - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <!-- Logo -->
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_skills_mes') }}\" class=\"flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"sparkles\" class=\"w-4 h-4\"></i>
                    Mes Skills
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 right-20 w-96 h-96 bg-primary/10 rounded-full blur-[100px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"flex flex-col md:flex-row md:items-end justify-between gap-6\">
                <div>
                    <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                        <i data-lucide=\"sparkles\" class=\"w-4 h-4\"></i>
                        Skills & Talents
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Decouvrez vos <span class=\"italic text-primary\">talents</span>
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Identifiez, developpez et valorisez vos competences dans une approche inclusive et personnalisee.
                    </p>
                </div>
                
                <div class=\"flex gap-4\">
                    <a href=\"{{ path('app_skills_ajouter') }}\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                        <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                        Ajouter un skill
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recherche & Filtres -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <form method=\"get\" action=\"{{ path('app_skills_index') }}\" id=\"form-filters\" class=\"glass-card rounded-2xl p-4 flex flex-col lg:flex-row gap-4 items-end lg:items-center\">
                <div class=\"relative flex-1 w-full\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" name=\"q\" value=\"{{ search_q|default('') }}\" placeholder=\"Rechercher un skill (nom, description)...\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                
                <div class=\"flex gap-3 flex-wrap items-center\">
                    <span class=\"text-sm text-muted-foreground hidden sm:inline\">Type :</span>
                    <button type=\"submit\" name=\"type\" value=\"\" class=\"px-4 py-2 rounded-xl text-sm font-medium {{ search_type is empty ? 'bg-primary text-white' : 'bg-secondary border border-white/10 text-muted-foreground hover:text-foreground' }}\">Tous</button>
                    <button type=\"submit\" name=\"type\" value=\"soft\" class=\"px-4 py-2 rounded-xl text-sm font-medium flex items-center gap-2 {{ search_type == 'soft' ? 'bg-personal/30 text-personal border border-personal/50' : 'bg-secondary border border-white/10 text-muted-foreground hover:text-foreground hover:border-personal/30' }}\">
                        <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                        Soft Skills
                    </button>
                    <button type=\"submit\" name=\"type\" value=\"hard\" class=\"px-4 py-2 rounded-xl text-sm font-medium flex items-center gap-2 {{ search_type == 'hard' ? 'bg-academic/30 text-academic border border-academic/50' : 'bg-secondary border border-white/10 text-muted-foreground hover:text-foreground hover:border-academic/30' }}\">
                        <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                        Hard Skills
                    </button>
                </div>
                
                <div class=\"flex gap-3 flex-wrap items-center w-full lg:w-auto\">
                    <label for=\"filter-categorie\" class=\"text-sm text-muted-foreground hidden sm:inline\">Catégorie :</label>
                    <select name=\"categorie\" id=\"filter-categorie\" onchange=\"document.getElementById('form-filters').submit()\" class=\"h-12 bg-secondary border border-white/10 rounded-xl px-4 text-sm focus:outline-none focus:border-primary transition-all text-muted-foreground min-w-[180px]\">
                        <option value=\"\">Toutes les catégories</option>
                        {% for cat in categories %}
                        <option value=\"{{ cat }}\" {{ search_categorie == cat ? 'selected' : '' }}>{{ cat }}</option>
                        {% endfor %}
                    </select>
                </div>
                
                <button type=\"submit\" class=\"h-12 px-6 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all flex items-center gap-2 shrink-0\">
                    <i data-lucide=\"search\" class=\"w-4 h-4\"></i>
                    Appliquer
                </button>
            </form>
        </div>
    </section>

    <!-- Skills Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            {% if search_q or search_type or search_categorie %}
            <div class=\"flex items-center justify-between mb-6\">
                <p class=\"text-sm text-muted-foreground\">
                    {{ skills|length }} résultat(s)
                    {% if search_q %} pour « {{ search_q }} »{% endif %}
                </p>
                <a href=\"{{ path('app_skills_index') }}\" class=\"text-sm text-primary hover:underline\">Réinitialiser les filtres</a>
            </div>
            {% endif %}
            
            {% if skills is empty %}
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <i data-lucide=\"search-x\" class=\"w-16 h-16 text-muted-foreground mx-auto mb-4 opacity-50\"></i>
                <h3 class=\"text-xl font-semibold mb-2\">Aucun skill trouvé</h3>
                <p class=\"text-muted-foreground mb-6\">Modifiez la recherche ou les filtres, ou <a href=\"{{ path('app_skills_index') }}\" class=\"text-primary hover:underline\">réinitialisez</a> pour tout afficher.</p>
                <a href=\"{{ path('app_skills_index') }}\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                    <i data-lucide=\"rotate-ccw\" class=\"w-5 h-5\"></i>
                    Voir tous les skills
                </a>
            </div>
            {% else %}
            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
                {% for skill in skills %}
                {% set typeSkill = skill.contexteSkill == 'hard' ? 'hard' : 'soft' %}
                {% set iconSkill = skill.contexteSkill == 'hard' ? 'code' : 'heart' %}
                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all duration-500 hover:-translate-y-2 group\">
                    <!-- Header -->
                    <div class=\"flex items-start justify-between mb-4\">
                        <div class=\"w-14 h-14 rounded-2xl {{ typeSkill == 'hard' ? 'bg-academic/20' : 'bg-personal/20' }} flex items-center justify-center group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"{{ iconSkill }}\" class=\"w-7 h-7 {{ typeSkill == 'hard' ? 'text-academic' : 'text-personal' }}\"></i>
                        </div>
                        
                        <div class=\"flex flex-col items-end gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ typeSkill == 'hard' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                                {{ typeSkill == 'hard' ? 'Hard Skill' : 'Soft Skill' }}
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-secondary text-muted-foreground\">
                                {{ skill.categorie }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class=\"text-xl font-semibold mb-2 group-hover:text-primary transition-colors\">{{ skill.nomSkill }}</h3>
                    <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ skill.descriptionSkill|default('') }}</p>
                    
                    <!-- Action -->
                    <a href=\"{{ path('app_skills_ajouter') }}\" class=\"block w-full h-12 bg-secondary border border-white/10 rounded-xl font-medium hover:bg-primary hover:border-primary hover:text-white transition-all flex items-center justify-center gap-2 group/btn\">
                        <span>Ajouter ce skill</span>
                        <i data-lucide=\"arrow-right\" class=\"w-4 h-4 group-hover/btn:translate-x-1 transition-transform\"></i>
                    </a>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
    </section>
</div>
{% endblock %}", "front/skill/index.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\front\\skill\\index.html.twig");
    }
}
