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

    <!-- Filters -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"glass-card rounded-2xl p-4 flex flex-col lg:flex-row gap-4\">
                <div class=\"relative flex-1\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" placeholder=\"Rechercher un skill...\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                
                <div class=\"flex gap-3 flex-wrap\">
                    <button class=\"px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium\">Tous</button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-personal/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                        Soft Skills
                    </button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-academic/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                        Hard Skills
                    </button>
                </div>
                
                <select class=\"h-12 bg-secondary border border-white/10 rounded-xl px-4 text-sm focus:outline-none focus:border-primary transition-all text-muted-foreground\">
                    <option>Toutes les categories</option>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 79
            yield "                    <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </select>
            </div>
        </div>
    </section>

    <!-- Skills Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 91
            yield "                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all duration-500 hover:-translate-y-2 group\">
                    <!-- Header -->
                    <div class=\"flex items-start justify-between mb-4\">
                        <div class=\"w-14 h-14 rounded-2xl ";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 94) == "hard")) ? ("bg-academic/20") : ("bg-personal/20"));
            yield " flex items-center justify-center group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "icon", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"w-7 h-7 ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 95) == "hard")) ? ("text-academic") : ("text-personal"));
            yield "\"></i>
                        </div>
                        
                        <div class=\"flex flex-col items-end gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 99
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 99) == "hard")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
            yield "\">
                                ";
            // line 100
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 100) == "hard")) ? ("Hard Skill") : ("Soft Skill"));
            yield "
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-secondary text-muted-foreground\">
                                ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "categorie", [], "any", false, false, false, 103), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class=\"text-xl font-semibold mb-2 group-hover:text-primary transition-colors\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "nom", [], "any", false, false, false, 109), "html", null, true);
            yield "</h3>
                    <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "description", [], "any", false, false, false, 110), "html", null, true);
            yield "</p>
                    
                    <!-- Niveau Badge -->
                    <div class=\"flex items-center gap-2 mb-4\">
                        <div class=\"flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-secondary\">
                            ";
            // line 115
            $context["niveauColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "niveau", [], "any", false, false, false, 115) == "Debutant")) ? ("text-yellow-500") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "niveau", [], "any", false, false, false, 115) == "Intermediaire")) ? ("text-orange-500") : ("text-green-500"))));
            // line 116
            yield "                            <div class=\"w-2 h-2 rounded-full ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauColor"]) || array_key_exists("niveauColor", $context) ? $context["niveauColor"] : (function () { throw new RuntimeError('Variable "niveauColor" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "\"></div>
                            <span class=\"text-xs font-medium ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauColor"]) || array_key_exists("niveauColor", $context) ? $context["niveauColor"] : (function () { throw new RuntimeError('Variable "niveauColor" does not exist.', 117, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "niveau", [], "any", false, false, false, 117), "html", null, true);
            yield "</span>
                        </div>
                        <span class=\"text-xs text-muted-foreground\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "etudiants", [], "any", false, false, false, 119), "html", null, true);
            yield " etudiants</span>
                    </div>
                    
                    <!-- Progress -->
                    <div class=\"mb-4\">
                        <div class=\"flex justify-between text-sm mb-2\">
                            <span class=\"text-muted-foreground\">Maitrise moyenne</span>
                            <span class=\"font-semibold\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "pourcentage", [], "any", false, false, false, 126), "html", null, true);
            yield "%</span>
                        </div>
                        <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                            <div class=\"h-full bg-primary rounded-full transition-all duration-1000\" style=\"width: ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "pourcentage", [], "any", false, false, false, 129), "html", null, true);
            yield "%\"></div>
                        </div>
                    </div>
                    
                    <!-- Action -->
                    <button class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl font-medium hover:bg-primary hover:border-primary hover:text-white transition-all flex items-center justify-center gap-2 group/btn\">
                        <span>Developper ce skill</span>
                        <i data-lucide=\"arrow-right\" class=\"w-4 h-4 group-hover/btn:translate-x-1 transition-transform\"></i>
                    </button>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
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
        return array (  310 => 140,  293 => 129,  287 => 126,  277 => 119,  270 => 117,  265 => 116,  263 => 115,  255 => 110,  251 => 109,  242 => 103,  236 => 100,  232 => 99,  223 => 95,  219 => 94,  214 => 91,  210 => 90,  199 => 81,  190 => 79,  186 => 78,  151 => 46,  118 => 16,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    <!-- Filters -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"glass-card rounded-2xl p-4 flex flex-col lg:flex-row gap-4\">
                <div class=\"relative flex-1\">
                    <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                    <input type=\"text\" placeholder=\"Rechercher un skill...\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                
                <div class=\"flex gap-3 flex-wrap\">
                    <button class=\"px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium\">Tous</button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-personal/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-personal\"></span>
                        Soft Skills
                    </button>
                    <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm text-muted-foreground hover:text-foreground hover:border-academic/30 transition-all flex items-center gap-2\">
                        <span class=\"w-2 h-2 rounded-full bg-academic\"></span>
                        Hard Skills
                    </button>
                </div>
                
                <select class=\"h-12 bg-secondary border border-white/10 rounded-xl px-4 text-sm focus:outline-none focus:border-primary transition-all text-muted-foreground\">
                    <option>Toutes les categories</option>
                    {% for cat in categories %}
                    <option>{{ cat }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
    </section>

    <!-- Skills Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-6\">
                {% for skill in skills %}
                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all duration-500 hover:-translate-y-2 group\">
                    <!-- Header -->
                    <div class=\"flex items-start justify-between mb-4\">
                        <div class=\"w-14 h-14 rounded-2xl {{ skill.type == 'hard' ? 'bg-academic/20' : 'bg-personal/20' }} flex items-center justify-center group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"{{ skill.icon }}\" class=\"w-7 h-7 {{ skill.type == 'hard' ? 'text-academic' : 'text-personal' }}\"></i>
                        </div>
                        
                        <div class=\"flex flex-col items-end gap-2\">
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ skill.type == 'hard' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                                {{ skill.type == 'hard' ? 'Hard Skill' : 'Soft Skill' }}
                            </span>
                            <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-secondary text-muted-foreground\">
                                {{ skill.categorie }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class=\"text-xl font-semibold mb-2 group-hover:text-primary transition-colors\">{{ skill.nom }}</h3>
                    <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ skill.description }}</p>
                    
                    <!-- Niveau Badge -->
                    <div class=\"flex items-center gap-2 mb-4\">
                        <div class=\"flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-secondary\">
                            {% set niveauColor = skill.niveau == 'Debutant' ? 'text-yellow-500' : skill.niveau == 'Intermediaire' ? 'text-orange-500' : 'text-green-500' %}
                            <div class=\"w-2 h-2 rounded-full {{ niveauColor }}\"></div>
                            <span class=\"text-xs font-medium {{ niveauColor }}\">{{ skill.niveau }}</span>
                        </div>
                        <span class=\"text-xs text-muted-foreground\">{{ skill.etudiants }} etudiants</span>
                    </div>
                    
                    <!-- Progress -->
                    <div class=\"mb-4\">
                        <div class=\"flex justify-between text-sm mb-2\">
                            <span class=\"text-muted-foreground\">Maitrise moyenne</span>
                            <span class=\"font-semibold\">{{ skill.pourcentage }}%</span>
                        </div>
                        <div class=\"h-2 bg-secondary rounded-full overflow-hidden\">
                            <div class=\"h-full bg-primary rounded-full transition-all duration-1000\" style=\"width: {{ skill.pourcentage }}%\"></div>
                        </div>
                    </div>
                    
                    <!-- Action -->
                    <button class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl font-medium hover:bg-primary hover:border-primary hover:text-white transition-all flex items-center justify-center gap-2 group/btn\">
                        <span>Developper ce skill</span>
                        <i data-lucide=\"arrow-right\" class=\"w-4 h-4 group-hover/btn:translate-x-1 transition-transform\"></i>
                    </button>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
</div>
{% endblock %}", "front/skill/index.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\skill\\index.html.twig");
    }
}
