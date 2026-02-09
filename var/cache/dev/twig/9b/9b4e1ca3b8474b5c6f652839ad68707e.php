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
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"NoVas\" class=\"h-10 w-auto\">
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Découvrir les skills
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
                    <div class=\"relative\">
                        <div class=\"w-32 h-32 rounded-full border-4 border-primary/30 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <p class=\"font-serif text-4xl font-bold text-primary\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 34, $this->source); })())), "html", null, true);
        yield "</p>
                                <p class=\"text-xs text-muted-foreground\">Skills</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"flex-1 text-center md:text-left\">
                        <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes Compétences</h1>
                        <p class=\"text-muted-foreground mb-4\">Les talents que vous avez ajoutés à votre profil</p>
                        
                        ";
        // line 44
        $context["hardCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 44, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 44, $this->source); })()), "contexteSkill", [], "any", false, false, false, 44) == "hard"); }));
        // line 45
        yield "                        ";
        $context["softCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 45, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 45, $this->source); })()), "contexteSkill", [], "any", false, false, false, 45) == "soft"); }));
        // line 46
        yield "                        <div class=\"flex flex-wrap justify-center md:justify-start gap-3\">
                            <span class=\"px-4 py-2 bg-academic/20 text-academic rounded-full text-sm\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hardCount"]) || array_key_exists("hardCount", $context) ? $context["hardCount"] : (function () { throw new RuntimeError('Variable "hardCount" does not exist.', 47, $this->source); })()), "html", null, true);
        yield " Hard Skills</span>
                            <span class=\"px-4 py-2 bg-personal/20 text-personal rounded-full text-sm\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["softCount"]) || array_key_exists("softCount", $context) ? $context["softCount"] : (function () { throw new RuntimeError('Variable "softCount" does not exist.', 48, $this->source); })()), "html", null, true);
        yield " Soft Skills</span>
                        </div>
                    </div>
                    
                    <a href=\"";
        // line 52
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
            ";
        // line 64
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <i data-lucide=\"sparkles\" class=\"w-16 h-16 text-primary mx-auto mb-4 opacity-50\"></i>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore ajouté de skill. Ajoutez votre premier talent !</p>
                <a href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_ajouter");
            yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Ajouter un skill
                </a>
            </div>
            ";
        } else {
            // line 74
            yield "            <div class=\"grid md:grid-cols-2 gap-6\">
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mesSkills"]) || array_key_exists("mesSkills", $context) ? $context["mesSkills"] : (function () { throw new RuntimeError('Variable "mesSkills" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 76
                yield "                ";
                $context["typeSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "contexteSkill", [], "any", false, false, false, 76) == "hard")) ? ("hard") : ("soft"));
                // line 77
                yield "                ";
                $context["iconSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "contexteSkill", [], "any", false, false, false, 77) == "hard")) ? ("code") : ("heart"));
                // line 78
                yield "                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all group\">
                    <div class=\"flex items-start gap-4\">
                        <div class=\"w-16 h-16 rounded-2xl ";
                // line 80
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 80, $this->source); })()) == "hard")) ? ("bg-academic/20") : ("bg-personal/20"));
                yield " flex items-center justify-center flex-shrink-0\">
                            <i data-lucide=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconSkill"]) || array_key_exists("iconSkill", $context) ? $context["iconSkill"] : (function () { throw new RuntimeError('Variable "iconSkill" does not exist.', 81, $this->source); })()), "html", null, true);
                yield "\" class=\"w-8 h-8 ";
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 81, $this->source); })()) == "hard")) ? ("text-academic") : ("text-personal"));
                yield "\"></i>
                        </div>
                        
                        <div class=\"flex-1\">
                            <div class=\"flex items-start justify-between mb-2\">
                                <div>
                                    <h3 class=\"text-xl font-semibold group-hover:text-primary transition-colors\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "nomSkill", [], "any", false, false, false, 87), "html", null, true);
                yield "</h3>
                                    <p class=\"text-sm text-muted-foreground\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "categorie", [], "any", false, false, false, 88), "html", null, true);
                yield "</p>
                                </div>
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
                // line 90
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 90, $this->source); })()) == "hard")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
                yield "\">
                                    ";
                // line 91
                yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 91, $this->source); })()) == "hard")) ? ("Hard") : ("Soft"));
                yield "
                                </span>
                            </div>
                            ";
                // line 94
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "descriptionSkill", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "                            <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "descriptionSkill", [], "any", false, false, false, 95), "html", null, true);
                    yield "</p>
                            ";
                }
                // line 97
                yield "                        </div>
                    </div>
                    
                    <!-- Actions: Modifier / Supprimer -->
                    <div class=\"flex gap-3 mt-6 pt-6 border-t border-white/5\">
                        <a href=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                yield "\" class=\"flex-1 h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors flex items-center justify-center gap-2\">
                            <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                            Modifier
                        </a>
                        <form method=\"post\" action=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce skill ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_skill_" . CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 107))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"h-12 px-4 bg-secondary border border-white/10 rounded-xl text-muted-foreground hover:bg-rose-500/20 hover:border-rose-500/30 hover:text-rose-500 transition-colors flex items-center justify-center gap-2\">
                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "            </div>
            ";
        }
        // line 118
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
        return array (  298 => 118,  294 => 116,  279 => 107,  275 => 106,  268 => 102,  261 => 97,  255 => 95,  253 => 94,  247 => 91,  243 => 90,  238 => 88,  234 => 87,  223 => 81,  219 => 80,  215 => 78,  212 => 77,  209 => 76,  205 => 75,  202 => 74,  193 => 68,  188 => 65,  186 => 64,  171 => 52,  164 => 48,  160 => 47,  157 => 46,  154 => 45,  152 => 44,  139 => 34,  117 => 15,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"NoVas\" class=\"h-10 w-auto\">
            </a>
            
            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_skills_index') }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Découvrir les skills
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
                    <div class=\"relative\">
                        <div class=\"w-32 h-32 rounded-full border-4 border-primary/30 flex items-center justify-center\">
                            <div class=\"text-center\">
                                <p class=\"font-serif text-4xl font-bold text-primary\">{{ mesSkills|length }}</p>
                                <p class=\"text-xs text-muted-foreground\">Skills</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"flex-1 text-center md:text-left\">
                        <h1 class=\"font-serif text-3xl font-medium mb-2\">Mes Compétences</h1>
                        <p class=\"text-muted-foreground mb-4\">Les talents que vous avez ajoutés à votre profil</p>
                        
                        {% set hardCount = mesSkills|filter(s => s.contexteSkill == 'hard')|length %}
                        {% set softCount = mesSkills|filter(s => s.contexteSkill == 'soft')|length %}
                        <div class=\"flex flex-wrap justify-center md:justify-start gap-3\">
                            <span class=\"px-4 py-2 bg-academic/20 text-academic rounded-full text-sm\">{{ hardCount }} Hard Skills</span>
                            <span class=\"px-4 py-2 bg-personal/20 text-personal rounded-full text-sm\">{{ softCount }} Soft Skills</span>
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
            {% if mesSkills is empty %}
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <i data-lucide=\"sparkles\" class=\"w-16 h-16 text-primary mx-auto mb-4 opacity-50\"></i>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore ajouté de skill. Ajoutez votre premier talent !</p>
                <a href=\"{{ path('app_skills_ajouter') }}\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all\">
                    <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                    Ajouter un skill
                </a>
            </div>
            {% else %}
            <div class=\"grid md:grid-cols-2 gap-6\">
                {% for skill in mesSkills %}
                {% set typeSkill = skill.contexteSkill == 'hard' ? 'hard' : 'soft' %}
                {% set iconSkill = skill.contexteSkill == 'hard' ? 'code' : 'heart' %}
                <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all group\">
                    <div class=\"flex items-start gap-4\">
                        <div class=\"w-16 h-16 rounded-2xl {{ typeSkill == 'hard' ? 'bg-academic/20' : 'bg-personal/20' }} flex items-center justify-center flex-shrink-0\">
                            <i data-lucide=\"{{ iconSkill }}\" class=\"w-8 h-8 {{ typeSkill == 'hard' ? 'text-academic' : 'text-personal' }}\"></i>
                        </div>
                        
                        <div class=\"flex-1\">
                            <div class=\"flex items-start justify-between mb-2\">
                                <div>
                                    <h3 class=\"text-xl font-semibold group-hover:text-primary transition-colors\">{{ skill.nomSkill }}</h3>
                                    <p class=\"text-sm text-muted-foreground\">{{ skill.categorie }}</p>
                                </div>
                                <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ typeSkill == 'hard' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                                    {{ typeSkill == 'hard' ? 'Hard' : 'Soft' }}
                                </span>
                            </div>
                            {% if skill.descriptionSkill %}
                            <p class=\"text-sm text-muted-foreground mb-4 line-clamp-2\">{{ skill.descriptionSkill }}</p>
                            {% endif %}
                        </div>
                    </div>
                    
                    <!-- Actions: Modifier / Supprimer -->
                    <div class=\"flex gap-3 mt-6 pt-6 border-t border-white/5\">
                        <a href=\"{{ path('app_skills_modifier', { id: skill.id }) }}\" class=\"flex-1 h-12 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-colors flex items-center justify-center gap-2\">
                            <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                            Modifier
                        </a>
                        <form method=\"post\" action=\"{{ path('app_skills_supprimer', { id: skill.id }) }}\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce skill ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_skill_' ~ skill.id) }}\">
                            <button type=\"submit\" class=\"h-12 px-4 bg-secondary border border-white/10 rounded-xl text-muted-foreground hover:bg-rose-500/20 hover:border-rose-500/30 hover:text-rose-500 transition-colors flex items-center justify-center gap-2\">
                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
    </section>
</div>
{% endblock %}
", "front/skill/mes_skills.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\front\\skill\\mes_skills.html.twig");
    }
}
