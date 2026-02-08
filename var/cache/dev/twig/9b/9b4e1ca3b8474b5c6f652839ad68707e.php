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

/* front/skill/mes_skills.html.twig */
class __TwigTemplate_0a7adf48d3f411383dcbeb75e93da047 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/skill/mes_skills.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/skill/mes_skills.html.twig"));

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

        yield "Mes Skills - NoVas";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les skills
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"glass-card rounded-3xl p-8 relative overflow-hidden\">
                <div class=\"absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-[80px]\"></div>
                
                <div class=\"relative flex flex-col md:flex-row items-center gap-8\">
                    <!-- Stats Circle -->
                    <div class=\"relative\">
                        <div class=\"w-32 h-32 rounded-full border-4 border-primary/30 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <p class=\"font-serif text-4xl font-bold text-primary\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 37, $this->source); })())), "html", null, true);
        yield "</p>
                                <p class=\"text-xs text-muted-foreground\">Skills</p>
                            </div>
                        </div>
                        <div class=\"absolute -bottom-2 -right-2 w-10 h-10 bg-accent rounded-xl flex items-center justify-center\">
                            <i data-lucide=\"trending-up\" class=\"w-5 h-5 text-white\"></i>
                        </div>
                    </div>
                    
                    <div class=\"flex-1 text-center md:text-left\">
                        <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes Competences</h1>
                        <p class=\"text-muted-foreground mb-4\">Votre parcours de developpement personnel et academique</p>
                        
                        <div class=\"flex flex-wrap justify-center md:justify-start gap-3\">
                            <span class=\"px-4 py-2 bg-academic/20 text-academic rounded-full text-sm\">
                                ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 52, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52) == "hard"); })), "html", null, true);
        yield " Hard Skills
                            </span>
                            <span class=\"px-4 py-2 bg-personal/20 text-personal rounded-full text-sm\">
                                ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 55, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55) == "soft"); })), "html", null, true);
        yield " Soft Skills
                            </span>
                        </div>
                    </div>
                    
                    <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_ajouter");
        yield "\" class=\"px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center gap-2\">
                        <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                        Ajouter un skill
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- My Skills Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 gap-6\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 74
            yield "                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all group\">
                    <div class=\"flex items-start gap-4\">
                        <!-- Icon -->
                        <div class=\"w-16 h-16 rounded-2xl ";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 77) == "hard")) ? ("bg-academic/20") : ("bg-personal/20"));
            yield " flex items-center justify-center flex-shrink-0\">
                            <i data-lucide=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "icon", [], "any", false, false, false, 78), "html", null, true);
            yield "\" class=\"w-8 h-8 ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 78) == "hard")) ? ("text-academic") : ("text-personal"));
            yield "\"></i>
                        </div>
                        
                        <!-- Content -->
                        <div class=\"flex-1\">
                            <div class=\"flex items-start justify-between mb-2\">
                                <div>
                                    <h3 class=\"text-xl font-semibold group-hover:text-primary transition-colors\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "nom", [], "any", false, false, false, 85), "html", null, true);
            yield "</h3>
                                    <p class=\"text-sm text-muted-foreground\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "categorie", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>
                                </div>
                                <div class=\"flex flex-col items-end gap-1\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 89
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 89) == "hard")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
            yield "\">
                                        ";
            // line 90
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "type", [], "any", false, false, false, 90) == "hard")) ? ("Hard") : ("Soft"));
            yield "
                                    </span>
                                    ";
            // line 92
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "certifie", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent flex items-center gap-1\">
                                        <i data-lucide=\"check-circle\" class=\"w-3 h-3\"></i>
                                        Certifie
                                    </span>
                                    ";
            }
            // line 98
            yield "                                </div>
                            </div>
                            
                            <!-- Niveau -->
                            <div class=\"flex items-center gap-2 mb-4\">
                                ";
            // line 103
            $context["niveauColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "niveau", [], "any", false, false, false, 103) == "Debutant")) ? ("text-yellow-500 bg-yellow-500/20") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "niveau", [], "any", false, false, false, 103) == "Intermediaire")) ? ("text-orange-500 bg-orange-500/20") : ("text-green-500 bg-green-500/20"))));
            // line 104
            yield "                                <span class=\"px-3 py-1 rounded-lg text-xs font-medium ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauColor"]) || array_key_exists("niveauColor", $context) ? $context["niveauColor"] : (function () { throw new RuntimeError('Variable "niveauColor" does not exist.', 104, $this->source); })()), "html", null, true);
            yield "\">
                                    ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "niveau", [], "any", false, false, false, 105), "html", null, true);
            yield "
                                </span>
                                <span class=\"text-xs text-muted-foreground\">Acquis le ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "date_acquisition", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                            </div>
                            
                            <!-- Progress Bar -->
                            <div class=\"mb-4\">
                                <div class=\"flex justify-between text-sm mb-2\">
                                    <span class=\"text-muted-foreground\">Progression</span>
                                    <span class=\"font-semibold\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "progression", [], "any", false, false, false, 114), "html", null, true);
            yield "%</span>
                                </div>
                                <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                    <div class=\"h-full bg-primary rounded-full transition-all duration-1000 relative\" style=\"width: ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "progression", [], "any", false, false, false, 117), "html", null, true);
            yield "%\">
                                        <div class=\"absolute inset-0 bg-gradient-to-r from-transparent to-white/20\"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- XP Info -->
                            <div class=\"flex items-center justify-between p-3 bg-secondary/50 rounded-xl\">
                                <div class=\"flex items-center gap-2\">
                                    <i data-lucide=\"zap\" class=\"w-4 h-4 text-primary\"></i>
                                    <span class=\"text-sm\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "xp", [], "any", false, false, false, 127), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "prochain_niveau", [], "any", false, false, false, 127), "html", null, true);
            yield " XP</span>
                                </div>
                                <span class=\"text-xs text-muted-foreground\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "prochain_niveau", [], "any", false, false, false, 129) - CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "xp", [], "any", false, false, false, 129)), "html", null, true);
            yield " XP pour niveau superieur</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"flex gap-3 mt-6 pt-6 border-t border-white/5\">
                        <button class=\"flex-1 h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors flex items-center justify-center gap-2\">
                            <i data-lucide=\"book-open\" class=\"w-4 h-4\"></i>
                            Continuer
                        </button>
                        <button class=\"w-12 h-12 bg-secondary border border-white/10 rounded-xl flex items-center justify-center hover:bg-white/5 transition-colors\">
                            <i data-lucide=\"more-vertical\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
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
        return "front/skill/mes_skills.html.twig";
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
        return array (  321 => 146,  298 => 129,  291 => 127,  278 => 117,  272 => 114,  262 => 107,  257 => 105,  252 => 104,  250 => 103,  243 => 98,  236 => 93,  234 => 92,  229 => 90,  225 => 89,  219 => 86,  215 => 85,  203 => 78,  199 => 77,  194 => 74,  190 => 73,  174 => 60,  166 => 55,  160 => 52,  142 => 37,  118 => 16,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Mes Skills - NoVas{% endblock %}

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
                <a href=\"{{ path('app_skills_index') }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les skills
                </a>
                
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class=\"pt-32 pb-12 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        
        <div class=\"max-w-7xl mx-auto relative\">
            <div class=\"glass-card rounded-3xl p-8 relative overflow-hidden\">
                <div class=\"absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-[80px]\"></div>
                
                <div class=\"relative flex flex-col md:flex-row items-center gap-8\">
                    <!-- Stats Circle -->
                    <div class=\"relative\">
                        <div class=\"w-32 h-32 rounded-full border-4 border-primary/30 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <p class=\"font-serif text-4xl font-bold text-primary\">{{ mesSkills|length }}</p>
                                <p class=\"text-xs text-muted-foreground\">Skills</p>
                            </div>
                        </div>
                        <div class=\"absolute -bottom-2 -right-2 w-10 h-10 bg-accent rounded-xl flex items-center justify-center\">
                            <i data-lucide=\"trending-up\" class=\"w-5 h-5 text-white\"></i>
                        </div>
                    </div>
                    
                    <div class=\"flex-1 text-center md:text-left\">
                        <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes Competences</h1>
                        <p class=\"text-muted-foreground mb-4\">Votre parcours de developpement personnel et academique</p>
                        
                        <div class=\"flex flex-wrap justify-center md:justify-start gap-3\">
                            <span class=\"px-4 py-2 bg-academic/20 text-academic rounded-full text-sm\">
                                {{ mesSkills|filter(s => s.type == 'hard')|length }} Hard Skills
                            </span>
                            <span class=\"px-4 py-2 bg-personal/20 text-personal rounded-full text-sm\">
                                {{ mesSkills|filter(s => s.type == 'soft')|length }} Soft Skills
                            </span>
                        </div>
                    </div>
                    
                    <a href=\"{{ path('app_skills_ajouter') }}\" class=\"px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center gap-2\">
                        <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                        Ajouter un skill
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- My Skills Grid -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"grid md:grid-cols-2 gap-6\">
                {% for skill in mesSkills %}
                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all group\">
                    <div class=\"flex items-start gap-4\">
                        <!-- Icon -->
                        <div class=\"w-16 h-16 rounded-2xl {{ skill.type == 'hard' ? 'bg-academic/20' : 'bg-personal/20' }} flex items-center justify-center flex-shrink-0\">
                            <i data-lucide=\"{{ skill.icon }}\" class=\"w-8 h-8 {{ skill.type == 'hard' ? 'text-academic' : 'text-personal' }}\"></i>
                        </div>
                        
                        <!-- Content -->
                        <div class=\"flex-1\">
                            <div class=\"flex items-start justify-between mb-2\">
                                <div>
                                    <h3 class=\"text-xl font-semibold group-hover:text-primary transition-colors\">{{ skill.nom }}</h3>
                                    <p class=\"text-sm text-muted-foreground\">{{ skill.categorie }}</p>
                                </div>
                                <div class=\"flex flex-col items-end gap-1\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ skill.type == 'hard' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                                        {{ skill.type == 'hard' ? 'Hard' : 'Soft' }}
                                    </span>
                                    {% if skill.certifie %}
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent flex items-center gap-1\">
                                        <i data-lucide=\"check-circle\" class=\"w-3 h-3\"></i>
                                        Certifie
                                    </span>
                                    {% endif %}
                                </div>
                            </div>
                            
                            <!-- Niveau -->
                            <div class=\"flex items-center gap-2 mb-4\">
                                {% set niveauColor = skill.niveau == 'Debutant' ? 'text-yellow-500 bg-yellow-500/20' : skill.niveau == 'Intermediaire' ? 'text-orange-500 bg-orange-500/20' : 'text-green-500 bg-green-500/20' %}
                                <span class=\"px-3 py-1 rounded-lg text-xs font-medium {{ niveauColor }}\">
                                    {{ skill.niveau }}
                                </span>
                                <span class=\"text-xs text-muted-foreground\">Acquis le {{ skill.date_acquisition }}</span>
                            </div>
                            
                            <!-- Progress Bar -->
                            <div class=\"mb-4\">
                                <div class=\"flex justify-between text-sm mb-2\">
                                    <span class=\"text-muted-foreground\">Progression</span>
                                    <span class=\"font-semibold\">{{ skill.progression }}%</span>
                                </div>
                                <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                    <div class=\"h-full bg-primary rounded-full transition-all duration-1000 relative\" style=\"width: {{ skill.progression }}%\">
                                        <div class=\"absolute inset-0 bg-gradient-to-r from-transparent to-white/20\"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- XP Info -->
                            <div class=\"flex items-center justify-between p-3 bg-secondary/50 rounded-xl\">
                                <div class=\"flex items-center gap-2\">
                                    <i data-lucide=\"zap\" class=\"w-4 h-4 text-primary\"></i>
                                    <span class=\"text-sm\">{{ skill.xp }} / {{ skill.prochain_niveau }} XP</span>
                                </div>
                                <span class=\"text-xs text-muted-foreground\">{{ skill.prochain_niveau - skill.xp }} XP pour niveau superieur</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"flex gap-3 mt-6 pt-6 border-t border-white/5\">
                        <button class=\"flex-1 h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors flex items-center justify-center gap-2\">
                            <i data-lucide=\"book-open\" class=\"w-4 h-4\"></i>
                            Continuer
                        </button>
                        <button class=\"w-12 h-12 bg-secondary border border-white/10 rounded-xl flex items-center justify-center hover:bg-white/5 transition-colors\">
                            <i data-lucide=\"more-vertical\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
</div>
{% endblock %}", "front/skill/mes_skills.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\skill\\mes_skills.html.twig");
    }
}
