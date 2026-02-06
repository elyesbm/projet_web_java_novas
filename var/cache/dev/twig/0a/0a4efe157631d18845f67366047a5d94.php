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
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
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
                <button class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium\">Tous les parcours</button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Hard Skills
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Soft Skills
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Mes parcours
                </button>
            </div>
        </div>
    </section>

    <!-- Paths Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 gap-8\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["parcours"]);
        foreach ($context['_seq'] as $context["_key"] => $context["parcours"]) {
            // line 69
            yield "                <div class=\"glass-card rounded-3xl overflow-hidden group hover:border-primary/30 transition-all duration-500\">
                    <!-- Image -->
                    <div class=\"relative h-56 overflow-hidden\">
                        <img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "image", [], "any", false, false, false, 72))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "titre", [], "any", false, false, false, 72), "html", null, true);
            yield "\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-700\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/80 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium ";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "type_skill", [], "any", false, false, false, 77) == "hard")) ? ("bg-academic/90 text-white") : ("bg-personal/90 text-white"));
            yield " backdrop-blur-sm\">
                                ";
            // line 78
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "type_skill", [], "any", false, false, false, 78) == "hard")) ? ("Hard Skill") : ("Soft Skill"));
            yield "
                            </span>
                            ";
            // line 80
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "certifiant", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium bg-accent/90 text-white backdrop-blur-sm flex items-center gap-1\">
                                <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                                Certifiant
                            </span>
                            ";
            }
            // line 86
            yield "                        </div>
                        
                        <!-- Skill Link -->
                        <div class=\"absolute bottom-4 left-4\">
                            <div class=\"flex items-center gap-2 px-3 py-1.5 rounded-full bg-background/80 backdrop-blur-sm text-sm\">
                                <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                                <span>Skill: ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "skill_lie", [], "any", false, false, false, 92), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <h3 class=\"font-serif text-2xl font-medium mb-3 group-hover:text-primary transition-colors\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "titre", [], "any", false, false, false, 99), "html", null, true);
            yield "</h3>
                        <p class=\"text-muted-foreground mb-6 line-clamp-2\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "description", [], "any", false, false, false, 100), "html", null, true);
            yield "</p>
                        
                        <!-- Info Grid -->
                        <div class=\"grid grid-cols-3 gap-4 mb-6\">
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "duree", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"book-open\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "modules", [], "any", false, false, false, 110), "html", null, true);
            yield " modules</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"users\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "participants", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        
                        <!-- Niveaux -->
                        <div class=\"flex items-center gap-4 mb-6 p-4 bg-secondary/30 rounded-xl\">
                            <div class=\"flex-1\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Niveau de depart</p>
                                <p class=\"text-sm font-medium\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "niveau_depart", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
                            </div>
                            <div class=\"flex items-center gap-2\">
                                <div class=\"w-12 h-px bg-primary/50\"></div>
                                <i data-lucide=\"arrow-right\" class=\"w-4 h-4 text-primary\"></i>
                                <div class=\"w-12 h-px bg-primary/50\"></div>
                            </div>
                            <div class=\"flex-1 text-right\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Niveau final</p>
                                <p class=\"text-sm font-medium text-primary\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "niveau_arrivee", [], "any", false, false, false, 131), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_path_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcours"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"flex items-center justify-center gap-2 w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                            <span>Commencer ce parcours</span>
                            <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcours'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "            </div>
        </div>
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
        return array (  293 => 143,  280 => 136,  272 => 131,  260 => 122,  249 => 114,  242 => 110,  235 => 106,  226 => 100,  222 => 99,  212 => 92,  204 => 86,  197 => 81,  195 => 80,  190 => 78,  186 => 77,  176 => 72,  171 => 69,  167 => 68,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
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
                <button class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium\">Tous les parcours</button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                    Hard Skills
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors flex items-center gap-2\">
                    <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                    Soft Skills
                </button>
                <button class=\"px-6 py-2.5 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Mes parcours
                </button>
            </div>
        </div>
    </section>

    <!-- Paths Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 gap-8\">
                {% for parcours in parcours %}
                <div class=\"glass-card rounded-3xl overflow-hidden group hover:border-primary/30 transition-all duration-500\">
                    <!-- Image -->
                    <div class=\"relative h-56 overflow-hidden\">
                        <img src=\"{{ asset('images/' ~ parcours.image) }}\" alt=\"{{ parcours.titre }}\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-700\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-background via-background/80 to-transparent\"></div>
                        
                        <!-- Badges -->
                        <div class=\"absolute top-4 left-4 flex gap-2\">
                            <span class=\"px-3 py-1.5 rounded-full text-xs font-medium {{ parcours.type_skill == 'hard' ? 'bg-academic/90 text-white' : 'bg-personal/90 text-white' }} backdrop-blur-sm\">
                                {{ parcours.type_skill == 'hard' ? 'Hard Skill' : 'Soft Skill' }}
                            </span>
                            {% if parcours.certifiant %}
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
                                <span>Skill: {{ parcours.skill_lie }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class=\"p-6\">
                        <h3 class=\"font-serif text-2xl font-medium mb-3 group-hover:text-primary transition-colors\">{{ parcours.titre }}</h3>
                        <p class=\"text-muted-foreground mb-6 line-clamp-2\">{{ parcours.description }}</p>
                        
                        <!-- Info Grid -->
                        <div class=\"grid grid-cols-3 gap-4 mb-6\">
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"clock\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">{{ parcours.duree }}</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"book-open\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">{{ parcours.modules }} modules</p>
                            </div>
                            <div class=\"text-center p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"users\" class=\"w-5 h-5 text-primary mx-auto mb-1\"></i>
                                <p class=\"text-xs text-muted-foreground\">{{ parcours.participants }}</p>
                            </div>
                        </div>
                        
                        <!-- Niveaux -->
                        <div class=\"flex items-center gap-4 mb-6 p-4 bg-secondary/30 rounded-xl\">
                            <div class=\"flex-1\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Niveau de depart</p>
                                <p class=\"text-sm font-medium\">{{ parcours.niveau_depart }}</p>
                            </div>
                            <div class=\"flex items-center gap-2\">
                                <div class=\"w-12 h-px bg-primary/50\"></div>
                                <i data-lucide=\"arrow-right\" class=\"w-4 h-4 text-primary\"></i>
                                <div class=\"w-12 h-px bg-primary/50\"></div>
                            </div>
                            <div class=\"flex-1 text-right\">
                                <p class=\"text-xs text-muted-foreground mb-1\">Niveau final</p>
                                <p class=\"text-sm font-medium text-primary\">{{ parcours.niveau_arrivee }}</p>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <a href=\"{{ path('app_learning_path_detail', {id: parcours.id}) }}\" class=\"flex items-center justify-center gap-2 w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 group/btn\">
                            <span>Commencer ce parcours</span>
                            <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover/btn:translate-x-1 transition-transform\"></i>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
</div>
{% endblock %}", "front/learning_path/index.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\front\\learning_path\\index.html.twig");
    }
}
