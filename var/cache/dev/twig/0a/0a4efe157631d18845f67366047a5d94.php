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

/* front/learning_path/index.html.twig */
class __TwigTemplate_49b336e6433791c247c896be9c9311e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/learning_path/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/learning_path/index.html.twig"));

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

        yield "Parcours d'apprentissage - NoVas";
        
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
                <span class=\"text-xl font-bold tracking-tight\">NoVas</span>
            </a>
            
            <div class=\"flex items-center gap-4\">
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 left-20 w-96 h-96 bg-accent/10 rounded-full blur-[100px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"text-center max-w-3xl mx-auto\">
                <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-accent/30 bg-accent/10 text-accent text-sm mb-4\">
                    <i data-lucide=\"route\" class=\"w-4 h-4\"></i>
                    Parcours d'apprentissage
                </div>
                <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                    Votre chemin vers <span class=\"italic text-primary\">l'excellence</span>
                </h1>
                <p class=\"text-muted-foreground text-lg\">
                    Des parcours structures pour developper vos competences, etape par etape, dans une approche inclusive et motivante.
                </p>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"glass-card rounded-2xl p-4 flex flex-wrap gap-4 justify-center\">
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_paths_index");
        yield "\" class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium\">Tous les parcours</a>
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_paths_index");
        yield "\" class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Hard Skills
                </a>
                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_paths_index");
        yield "\" class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Soft Skills
                </a>
            </div>
        </div>
    </section>

    <!-- Paths Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            ";
        // line 64
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <i data-lucide=\"route\" class=\"w-16 h-16 text-muted-foreground mx-auto mb-4 opacity-50\"></i>
                <h3 class=\"text-xl font-semibold mb-2\">Aucun parcours pour le moment</h3>
                <p class=\"text-muted-foreground\">Les parcours ajoutés par l'équipe apparaîtront ici.</p>
            </div>
            ";
        } else {
            // line 71
            yield "            <div class=\"grid md:grid-cols-2 gap-8\">
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lp"]) {
                // line 73
                yield "                ";
                $context["typeSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "skill", [], "any", false, false, false, 73) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "skill", [], "any", false, false, false, 73), "contexteSkill", [], "any", false, false, false, 73) == "hard"))) ? ("hard") : ("soft"));
                // line 74
                yield "                ";
                $context["skillNom"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "skill", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "skill", [], "any", false, false, false, 74), "nomSkill", [], "any", false, false, false, 74)) : ("Compétence"));
                // line 75
                yield "                ";
                $context["niveauLabel"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "niveauPath", [], "any", false, false, false, 75) == 1)) ? ("Débutant") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "niveauPath", [], "any", false, false, false, 75) == 2)) ? ("Intermédiaire") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "niveauPath", [], "any", false, false, false, 75) == 3)) ? ("Avancé") : ("—"))))));
                // line 76
                yield "                ";
                $context["certifiant"] = (CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "statutPath", [], "any", false, false, false, 76) == 1);
                // line 77
                yield "                <div class=\"glass-card rounded-3xl overflow-hidden group hover:border-primary/30 transition-all duration-500\">
                    <!-- Image -->
                    <div class=\"relative h-56 overflow-hidden\">
                        <img src=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/skills-learning.jpg"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "titrePath", [], "any", false, false, false, 80), "html", null, true);
                yield "\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-700\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/80 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium ";
                // line 85
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 85, $this->source); })()) == "hard")) ? ("bg-academic/90 text-white") : ("bg-personal/90 text-white"));
                yield " backdrop-blur-sm\">
                                ";
                // line 86
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 86, $this->source); })()) == "hard")) ? ("Hard Skill") : ("Soft Skill"));
                yield "
                            </span>
                            ";
                // line 88
                if ((($tmp = (isset($context["certifiant"]) || array_key_exists("certifiant", $context) ? $context["certifiant"] : (function () { throw new RuntimeError('Variable "certifiant" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 89
                    yield "                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium bg-accent/90 text-white backdrop-blur-sm flex items-center gap-1\">
                                <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                                Certifiant
                            </span>
                            ";
                }
                // line 94
                yield "                        </div>
                        
                        <!-- Skill Link -->
                        <div class=\"absolute bottom-4 left-4\">
                            <div class=\"flex items-center gap-2 px-3 py-1.5 rounded-full bg-background/80 backdrop-blur-sm text-sm\">
                                <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                                <span>Skill: ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["skillNom"]) || array_key_exists("skillNom", $context) ? $context["skillNom"] : (function () { throw new RuntimeError('Variable "skillNom" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <h3 class=\"font-serif text-2xl font-medium mb-3 group-hover:text-primary transition-colors\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "titrePath", [], "any", false, false, false, 107), "html", null, true);
                yield "</h3>
                        <p class=\"text-muted-foreground mb-6 line-clamp-2\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "descriptionSkill", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "descriptionSkill", [], "any", false, false, false, 108), "Parcours d'apprentissage.")) : ("Parcours d'apprentissage.")), "html", null, true);
                yield "</p>
                        
                        <!-- Info Grid -->
                        <div class=\"grid grid-cols-3 gap-4 mb-6\">
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "dureeEstimee", [], "any", false, false, false, 114), "html", null, true);
                yield " h</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"book-open\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "dureeEstimee", [], "any", false, false, false, 118), "html", null, true);
                yield " modules</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"users\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">—</p>
                            </div>
                        </div>
                        
                        <!-- Niveaux -->
                        <div class=\"flex items-center gap-4 mb-6 p-4 bg-secondary/30 rounded-xl\">
                            <div class=\"flex-1\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Niveau</p>
                                <p class=\"text-sm font-medium\">";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauLabel"]) || array_key_exists("niveauLabel", $context) ? $context["niveauLabel"] : (function () { throw new RuntimeError('Variable "niveauLabel" does not exist.', 130, $this->source); })()), "html", null, true);
                yield "</p>
                            </div>
                            <div class=\"flex-1 text-right\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Objectif</p>
                                <p class=\"text-sm font-medium text-primary\">";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauLabel"]) || array_key_exists("niveauLabel", $context) ? $context["niveauLabel"] : (function () { throw new RuntimeError('Variable "niveauLabel" does not exist.', 134, $this->source); })()), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <a href=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_path_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lp"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                yield "\" class=\"flex items-center justify-center gap-2 w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                            <span>Commencer ce parcours</span>
                            <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                        </a>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "            </div>
            ";
        }
        // line 148
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
        return "front/learning_path/index.html.twig";
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
        return array (  319 => 148,  315 => 146,  302 => 139,  294 => 134,  287 => 130,  272 => 118,  265 => 114,  256 => 108,  252 => 107,  242 => 100,  234 => 94,  227 => 89,  225 => 88,  220 => 86,  216 => 85,  206 => 80,  201 => 77,  198 => 76,  195 => 75,  192 => 74,  189 => 73,  185 => 72,  182 => 71,  174 => 65,  172 => 64,  158 => 53,  151 => 49,  147 => 48,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Parcours d'apprentissage - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
                <span class=\"text-xl font-bold tracking-tight\">NoVas</span>
            </a>
            
            <div class=\"flex items-center gap-4\">
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 left-20 w-96 h-96 bg-accent/10 rounded-full blur-[100px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"text-center max-w-3xl mx-auto\">
                <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-accent/30 bg-accent/10 text-accent text-sm mb-4\">
                    <i data-lucide=\"route\" class=\"w-4 h-4\"></i>
                    Parcours d'apprentissage
                </div>
                <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                    Votre chemin vers <span class=\"italic text-primary\">l'excellence</span>
                </h1>
                <p class=\"text-muted-foreground text-lg\">
                    Des parcours structures pour developper vos competences, etape par etape, dans une approche inclusive et motivante.
                </p>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"glass-card rounded-2xl p-4 flex flex-wrap gap-4 justify-center\">
                <a href=\"{{ path('app_learning_paths_index') }}\" class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium\">Tous les parcours</a>
                <a href=\"{{ path('app_learning_paths_index') }}\" class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Hard Skills
                </a>
                <a href=\"{{ path('app_learning_paths_index') }}\" class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Soft Skills
                </a>
            </div>
        </div>
    </section>

    <!-- Paths Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            {% if parcours is empty %}
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <i data-lucide=\"route\" class=\"w-16 h-16 text-muted-foreground mx-auto mb-4 opacity-50\"></i>
                <h3 class=\"text-xl font-semibold mb-2\">Aucun parcours pour le moment</h3>
                <p class=\"text-muted-foreground\">Les parcours ajoutés par l'équipe apparaîtront ici.</p>
            </div>
            {% else %}
            <div class=\"grid md:grid-cols-2 gap-8\">
                {% for lp in parcours %}
                {% set typeSkill = lp.skill and lp.skill.contexteSkill == 'hard' ? 'hard' : 'soft' %}
                {% set skillNom = lp.skill ? lp.skill.nomSkill : 'Compétence' %}
                {% set niveauLabel = lp.niveauPath == 1 ? 'Débutant' : (lp.niveauPath == 2 ? 'Intermédiaire' : (lp.niveauPath == 3 ? 'Avancé' : '—')) %}
                {% set certifiant = lp.statutPath == 1 %}
                <div class=\"glass-card rounded-3xl overflow-hidden group hover:border-primary/30 transition-all duration-500\">
                    <!-- Image -->
                    <div class=\"relative h-56 overflow-hidden\">
                        <img src=\"{{ asset('images/skills-learning.jpg') }}\" alt=\"{{ lp.titrePath }}\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-700\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/80 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium {{ typeSkill == 'hard' ? 'bg-academic/90 text-white' : 'bg-personal/90 text-white' }} backdrop-blur-sm\">
                                {{ typeSkill == 'hard' ? 'Hard Skill' : 'Soft Skill' }}
                            </span>
                            {% if certifiant %}
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium bg-accent/90 text-white backdrop-blur-sm flex items-center gap-1\">
                                <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                                Certifiant
                            </span>
                            {% endif %}
                        </div>
                        
                        <!-- Skill Link -->
                        <div class=\"absolute bottom-4 left-4\">
                            <div class=\"flex items-center gap-2 px-3 py-1.5 rounded-full bg-background/80 backdrop-blur-sm text-sm\">
                                <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                                <span>Skill: {{ skillNom }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <h3 class=\"font-serif text-2xl font-medium mb-3 group-hover:text-primary transition-colors\">{{ lp.titrePath }}</h3>
                        <p class=\"text-muted-foreground mb-6 line-clamp-2\">{{ lp.descriptionSkill|default('Parcours d\\'apprentissage.') }}</p>
                        
                        <!-- Info Grid -->
                        <div class=\"grid grid-cols-3 gap-4 mb-6\">
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">{{ lp.dureeEstimee }} h</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"book-open\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">{{ lp.dureeEstimee }} modules</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"users\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">—</p>
                            </div>
                        </div>
                        
                        <!-- Niveaux -->
                        <div class=\"flex items-center gap-4 mb-6 p-4 bg-secondary/30 rounded-xl\">
                            <div class=\"flex-1\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Niveau</p>
                                <p class=\"text-sm font-medium\">{{ niveauLabel }}</p>
                            </div>
                            <div class=\"flex-1 text-right\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Objectif</p>
                                <p class=\"text-sm font-medium text-primary\">{{ niveauLabel }}</p>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <a href=\"{{ path('app_learning_path_detail', { id: lp.id }) }}\" class=\"flex items-center justify-center gap-2 w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                            <span>Commencer ce parcours</span>
                            <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
    </section>
</div>
{% endblock %}
", "front/learning_path/index.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\front\\learning_path\\index.html.twig");
    }
}
