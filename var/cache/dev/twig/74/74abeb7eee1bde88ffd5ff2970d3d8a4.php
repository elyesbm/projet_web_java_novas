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

/* front/learning_path/detail.html.twig */
class __TwigTemplate_bc8c437c58c7e3072c774c21809d9bae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/learning_path/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/learning_path/detail.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - NoVas";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_paths_index");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux parcours</span>
            </a>
            
            <div class=\"flex items-center gap-2\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 right-0 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"grid lg:grid-cols-2 gap-12 items-center\">
                <div>
                    <div class=\"flex items-center gap-2 mb-4\">
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 32, $this->source); })()), "type_skill", [], "any", false, false, false, 32) == "hard")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
        yield "\">
                            ";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 33, $this->source); })()), "type_skill", [], "any", false, false, false, 33) == "hard")) ? ("Hard Skill") : ("Soft Skill"));
        yield "
                        </span>
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent flex items-center gap-1\">
                            <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                            Certifiant
                        </span>
                    </div>
                    
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 41, $this->source); })()), "titre", [], "any", false, false, false, 41), "html", null, true);
        yield "</h1>
                    <p class=\"text-muted-foreground text-lg mb-6\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
                    
                    <div class=\"flex flex-wrap gap-4 mb-8\">
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Skill vise: <strong>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 47, $this->source); })()), "skill_lie", [], "any", false, false, false, 47), "html", null, true);
        yield "</strong></span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"user\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Par ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 51, $this->source); })()), "formateur", [], "any", false, false, false, 51), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    
                    <div class=\"flex gap-4\">
                        <button class=\"px-8 py-4 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center gap-2\">
                            <i data-lucide=\"play\" class=\"w-5 h-5\"></i>
                            Commencer maintenant
                        </button>
                        <button class=\"px-8 py-4 bg-secondary border border-white/10 rounded-xl font-medium hover:bg-white/5 transition-colors flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-5 h-5\"></i>
                            Sauvegarder
                        </button>
                    </div>
                </div>
                
                <!-- Skill Evolution Card -->
                <div class=\"glass-card rounded-3xl p-8 relative\">
                    <div class=\"absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-[80px]\"></div>
                    <div class=\"relative\">
                        <h3 class=\"font-serif text-xl font-medium mb-6\">Evolution du skill</h3>
                        
                        <div class=\"flex items-center justify-between mb-8\">
                            <div class=\"text-center\">
                                <div class=\"w-20 h-20 rounded-full border-4 border-secondary flex items-center justify-center mb-2\">
                                    <span class=\"font-serif text-2xl font-bold text-muted-foreground\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 76, $this->source); })()), "progression_skill", [], "any", false, false, false, 76), "debut", [], "any", false, false, false, 76), "html", null, true);
        yield "</span>
                                </div>
                                <p class=\"text-sm text-muted-foreground\">Debut</p>
                            </div>
                            
                            <div class=\"flex-1 px-4\">
                                <div class=\"h-2 bg-secondary rounded-full overflow-hidden relative\">
                                    <div class=\"absolute inset-0 bg-gradient-to-r from-muted-foreground via-primary to-accent\"></div>
                                    <div class=\"absolute top-0 bottom-0 w-1 bg-white\" style=\"left: ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 84, $this->source); })()), "progression_skill", [], "any", false, false, false, 84), "actuel", [], "any", false, false, false, 84), "html", null, true);
        yield "%\"></div>
                                </div>
                                <div class=\"flex justify-between mt-2\">
                                    <span class=\"text-xs text-muted-foreground\">Actuel: ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 87, $this->source); })()), "progression_skill", [], "any", false, false, false, 87), "actuel", [], "any", false, false, false, 87), "html", null, true);
        yield "%</span>
                                    <span class=\"text-xs text-accent\">Objectif: ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 88, $this->source); })()), "progression_skill", [], "any", false, false, false, 88), "fin", [], "any", false, false, false, 88), "html", null, true);
        yield "%</span>
                                </div>
                            </div>
                            
                            <div class=\"text-center\">
                                <div class=\"w-20 h-20 rounded-full border-4 border-accent flex items-center justify-center mb-2\">
                                    <span class=\"font-serif text-2xl font-bold text-accent\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 94, $this->source); })()), "progression_skill", [], "any", false, false, false, 94), "fin", [], "any", false, false, false, 94), "html", null, true);
        yield "</span>
                                </div>
                                <p class=\"text-sm text-accent\">Final</p>
                            </div>
                        </div>
                        
                        <div class=\"p-4 bg-secondary/50 rounded-xl\">
                            <div class=\"flex items-center gap-3\">
                                <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center\">
                                    <i data-lucide=\"trending-up\" class=\"w-6 h-6 text-primary\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-muted-foreground\">Progression estimée</p>
                                    <p class=\"font-medium\">+";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 107, $this->source); })()), "progression_skill", [], "any", false, false, false, 107), "fin", [], "any", false, false, false, 107) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 107, $this->source); })()), "progression_skill", [], "any", false, false, false, 107), "actuel", [], "any", false, false, false, 107)), "html", null, true);
        yield "% de competence acquise</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectifs -->
    <section class=\"px-6 py-12 border-t border-white/5\">
        <div class=\"max-w-7xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Objectifs pedagogiques</h2>
            <div class=\"grid md:grid-cols-2 gap-4\">
                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 122, $this->source); })()), "objectifs", [], "any", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
            // line 123
            yield "                <div class=\"flex items-start gap-4 p-4 bg-secondary/30 rounded-xl\">
                    <div class=\"w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center flex-shrink-0\">
                        <i data-lucide=\"check\" class=\"w-4 h-4 text-primary\"></i>
                    </div>
                    <p class=\"text-foreground\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["objectif"], "html", null, true);
            yield "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class=\"px-6 py-12 border-t border-white/5\">
        <div class=\"max-w-4xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Parcours de progression</h2>
            
            <div class=\"relative\">
                <!-- Line -->
                <div class=\"absolute left-8 top-0 bottom-0 w-px bg-white/10\"></div>
                
                <div class=\"space-y-8\">
                    ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 144, $this->source); })()), "etapes", [], "any", false, false, false, 144));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 145
            yield "                    <div class=\"relative flex items-start gap-6\">
                        <!-- Number -->
                        <div class=\"relative z-10 w-16 h-16 rounded-2xl bg-secondary border border-white/10 flex items-center justify-center flex-shrink-0\">
                            <span class=\"font-serif text-2xl font-bold text-primary\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "numero", [], "any", false, false, false, 148), "html", null, true);
            yield "</span>
                        </div>
                        
                        <!-- Content -->
                        <div class=\"flex-1 glass-card rounded-2xl p-6 hover:border-primary/30 transition-all\">
                            <div class=\"flex items-start justify-between mb-2\">
                                <h3 class=\"font-medium text-lg\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "titre", [], "any", false, false, false, 154), "html", null, true);
            yield "</h3>
                                <span class=\"px-3 py-1 rounded-full text-xs bg-secondary text-muted-foreground\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "duree", [], "any", false, false, false, 155), "html", null, true);
            yield "</span>
                            </div>
                            <p class=\"text-sm text-muted-foreground\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "description", [], "any", false, false, false, 157), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['etape'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"px-6 py-12\">
        <div class=\"max-w-3xl mx-auto glass-card rounded-3xl p-12 text-center relative overflow-hidden\">
            <div class=\"absolute inset-0 bg-primary/5\"></div>
            <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-primary/20 rounded-full blur-[100px]\"></div>
            
            <div class=\"relative\">
                <h2 class=\"font-serif text-3xl font-medium mb-4\">Pret a commencer ?</h2>
                <p class=\"text-muted-foreground mb-8\">Rejoignez les ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 174, $this->source); })()), "participants", [], "any", false, false, false, 174), "html", null, true);
        yield " etudiants qui suivent deja ce parcours.</p>
                <button class=\"px-8 py-4 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-xl shadow-primary/30 flex items-center gap-2 mx-auto\">
                    <i data-lucide=\"rocket\" class=\"w-5 h-5\"></i>
                    Commencer le parcours
                </button>
            </div>
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
        return "front/learning_path/detail.html.twig";
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
        return array (  345 => 174,  330 => 161,  320 => 157,  315 => 155,  311 => 154,  302 => 148,  297 => 145,  293 => 144,  277 => 130,  268 => 127,  262 => 123,  258 => 122,  240 => 107,  224 => 94,  215 => 88,  211 => 87,  205 => 84,  194 => 76,  166 => 51,  159 => 47,  151 => 42,  147 => 41,  136 => 33,  132 => 32,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}{{ parcours.titre }} - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_learning_paths_index') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux parcours</span>
            </a>
            
            <div class=\"flex items-center gap-2\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"absolute top-20 right-0 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"grid lg:grid-cols-2 gap-12 items-center\">
                <div>
                    <div class=\"flex items-center gap-2 mb-4\">
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ parcours.type_skill == 'hard' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                            {{ parcours.type_skill == 'hard' ? 'Hard Skill' : 'Soft Skill' }}
                        </span>
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent flex items-center gap-1\">
                            <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                            Certifiant
                        </span>
                    </div>
                    
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">{{ parcours.titre }}</h1>
                    <p class=\"text-muted-foreground text-lg mb-6\">{{ parcours.description }}</p>
                    
                    <div class=\"flex flex-wrap gap-4 mb-8\">
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Skill vise: <strong>{{ parcours.skill_lie }}</strong></span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"user\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Par {{ parcours.formateur }}</span>
                        </div>
                    </div>
                    
                    <div class=\"flex gap-4\">
                        <button class=\"px-8 py-4 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center gap-2\">
                            <i data-lucide=\"play\" class=\"w-5 h-5\"></i>
                            Commencer maintenant
                        </button>
                        <button class=\"px-8 py-4 bg-secondary border border-white/10 rounded-xl font-medium hover:bg-white/5 transition-colors flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-5 h-5\"></i>
                            Sauvegarder
                        </button>
                    </div>
                </div>
                
                <!-- Skill Evolution Card -->
                <div class=\"glass-card rounded-3xl p-8 relative\">
                    <div class=\"absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-[80px]\"></div>
                    <div class=\"relative\">
                        <h3 class=\"font-serif text-xl font-medium mb-6\">Evolution du skill</h3>
                        
                        <div class=\"flex items-center justify-between mb-8\">
                            <div class=\"text-center\">
                                <div class=\"w-20 h-20 rounded-full border-4 border-secondary flex items-center justify-center mb-2\">
                                    <span class=\"font-serif text-2xl font-bold text-muted-foreground\">{{ parcours.progression_skill.debut }}</span>
                                </div>
                                <p class=\"text-sm text-muted-foreground\">Debut</p>
                            </div>
                            
                            <div class=\"flex-1 px-4\">
                                <div class=\"h-2 bg-secondary rounded-full overflow-hidden relative\">
                                    <div class=\"absolute inset-0 bg-gradient-to-r from-muted-foreground via-primary to-accent\"></div>
                                    <div class=\"absolute top-0 bottom-0 w-1 bg-white\" style=\"left: {{ parcours.progression_skill.actuel }}%\"></div>
                                </div>
                                <div class=\"flex justify-between mt-2\">
                                    <span class=\"text-xs text-muted-foreground\">Actuel: {{ parcours.progression_skill.actuel }}%</span>
                                    <span class=\"text-xs text-accent\">Objectif: {{ parcours.progression_skill.fin }}%</span>
                                </div>
                            </div>
                            
                            <div class=\"text-center\">
                                <div class=\"w-20 h-20 rounded-full border-4 border-accent flex items-center justify-center mb-2\">
                                    <span class=\"font-serif text-2xl font-bold text-accent\">{{ parcours.progression_skill.fin }}</span>
                                </div>
                                <p class=\"text-sm text-accent\">Final</p>
                            </div>
                        </div>
                        
                        <div class=\"p-4 bg-secondary/50 rounded-xl\">
                            <div class=\"flex items-center gap-3\">
                                <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center\">
                                    <i data-lucide=\"trending-up\" class=\"w-6 h-6 text-primary\"></i>
                                </div>
                                <div>
                                    <p class=\"text-sm text-muted-foreground\">Progression estimée</p>
                                    <p class=\"font-medium\">+{{ parcours.progression_skill.fin - parcours.progression_skill.actuel }}% de competence acquise</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectifs -->
    <section class=\"px-6 py-12 border-t border-white/5\">
        <div class=\"max-w-7xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Objectifs pedagogiques</h2>
            <div class=\"grid md:grid-cols-2 gap-4\">
                {% for objectif in parcours.objectifs %}
                <div class=\"flex items-start gap-4 p-4 bg-secondary/30 rounded-xl\">
                    <div class=\"w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center flex-shrink-0\">
                        <i data-lucide=\"check\" class=\"w-4 h-4 text-primary\"></i>
                    </div>
                    <p class=\"text-foreground\">{{ objectif }}</p>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class=\"px-6 py-12 border-t border-white/5\">
        <div class=\"max-w-4xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Parcours de progression</h2>
            
            <div class=\"relative\">
                <!-- Line -->
                <div class=\"absolute left-8 top-0 bottom-0 w-px bg-white/10\"></div>
                
                <div class=\"space-y-8\">
                    {% for etape in parcours.etapes %}
                    <div class=\"relative flex items-start gap-6\">
                        <!-- Number -->
                        <div class=\"relative z-10 w-16 h-16 rounded-2xl bg-secondary border border-white/10 flex items-center justify-center flex-shrink-0\">
                            <span class=\"font-serif text-2xl font-bold text-primary\">{{ etape.numero }}</span>
                        </div>
                        
                        <!-- Content -->
                        <div class=\"flex-1 glass-card rounded-2xl p-6 hover:border-primary/30 transition-all\">
                            <div class=\"flex items-start justify-between mb-2\">
                                <h3 class=\"font-medium text-lg\">{{ etape.titre }}</h3>
                                <span class=\"px-3 py-1 rounded-full text-xs bg-secondary text-muted-foreground\">{{ etape.duree }}</span>
                            </div>
                            <p class=\"text-sm text-muted-foreground\">{{ etape.description }}</p>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class=\"px-6 py-12\">
        <div class=\"max-w-3xl mx-auto glass-card rounded-3xl p-12 text-center relative overflow-hidden\">
            <div class=\"absolute inset-0 bg-primary/5\"></div>
            <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-primary/20 rounded-full blur-[100px]\"></div>
            
            <div class=\"relative\">
                <h2 class=\"font-serif text-3xl font-medium mb-4\">Pret a commencer ?</h2>
                <p class=\"text-muted-foreground mb-8\">Rejoignez les {{ parcours.participants }} etudiants qui suivent deja ce parcours.</p>
                <button class=\"px-8 py-4 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-xl shadow-primary/30 flex items-center gap-2 mx-auto\">
                    <i data-lucide=\"rocket\" class=\"w-5 h-5\"></i>
                    Commencer le parcours
                </button>
            </div>
        </div>
    </section>
</div>
{% endblock %}", "front/learning_path/detail.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\front\\learning_path\\detail.html.twig");
    }
}
