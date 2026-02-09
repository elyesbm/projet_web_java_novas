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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 3, $this->source); })()), "titrePath", [], "any", false, false, false, 3), "html", null, true);
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
        $context["typeSkill"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 6, $this->source); })()), "skill", [], "any", false, false, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 6, $this->source); })()), "skill", [], "any", false, false, false, 6), "contexteSkill", [], "any", false, false, false, 6) == "hard"))) ? ("hard") : ("soft"));
        // line 7
        $context["skillNom"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 7, $this->source); })()), "skill", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 7, $this->source); })()), "skill", [], "any", false, false, false, 7), "nomSkill", [], "any", false, false, false, 7)) : ("Compétence"));
        // line 8
        $context["niveauLabel"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 8, $this->source); })()), "niveauPath", [], "any", false, false, false, 8) == 1)) ? ("Débutant") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 8, $this->source); })()), "niveauPath", [], "any", false, false, false, 8) == 2)) ? ("Intermédiaire") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 8, $this->source); })()), "niveauPath", [], "any", false, false, false, 8) == 3)) ? ("Avancé") : ("—"))))));
        // line 9
        $context["objectifs"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 9, $this->source); })()), "descriptionSkill", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 9, $this->source); })()), "descriptionSkill", [], "any", false, false, false, 9), "."), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (Twig\Extension\CoreExtension::trim((isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 9, $this->source); })())) != ""); })) : ([]));
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 10, $this->source); })()))) {
            $context["objectifs"] = ["Maîtriser les concepts du parcours.", "Progresser à votre rythme."];
        }
        // line 11
        $context["progression_skill"] = ["debut" => 0, "fin" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 11, $this->source); })()), "niveauPath", [], "any", false, false, false, 11) == 1)) ? (50) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 11, $this->source); })()), "niveauPath", [], "any", false, false, false, 11) == 2)) ? (80) : (100)))), "actuel" => 0];
        // line 12
        yield "<div class=\"min-h-screen bg-background\">
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 16
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
        // line 38
        yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 38, $this->source); })()) == "hard")) ? ("bg-academic/20 text-academic") : ("bg-personal/20 text-personal"));
        yield "\">
                            ";
        // line 39
        yield ((((isset($context["typeSkill"]) || array_key_exists("typeSkill", $context) ? $context["typeSkill"] : (function () { throw new RuntimeError('Variable "typeSkill" does not exist.', 39, $this->source); })()) == "hard")) ? ("Hard Skill") : ("Soft Skill"));
        yield "
                        </span>
                        ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 41, $this->source); })()), "statutPath", [], "any", false, false, false, 41) == 1)) {
            // line 42
            yield "                        <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent flex items-center gap-1\">
                            <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                            Certifiant
                        </span>
                        ";
        }
        // line 47
        yield "                    </div>
                    
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 49, $this->source); })()), "titrePath", [], "any", false, false, false, 49), "html", null, true);
        yield "</h1>
                    <p class=\"text-muted-foreground text-lg mb-6\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["parcours"] ?? null), "descriptionSkill", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 50, $this->source); })()), "descriptionSkill", [], "any", false, false, false, 50), "Parcours d'apprentissage NoVas.")) : ("Parcours d'apprentissage NoVas.")), "html", null, true);
        yield "</p>
                    
                    <div class=\"flex flex-wrap gap-4 mb-8\">
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Skill visé: <strong>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["skillNom"]) || array_key_exists("skillNom", $context) ? $context["skillNom"] : (function () { throw new RuntimeError('Variable "skillNom" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "</strong></span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Durée: ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 59, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 59), "html", null, true);
        yield " h</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"bar-chart\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Niveau: ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauLabel"]) || array_key_exists("niveauLabel", $context) ? $context["niveauLabel"] : (function () { throw new RuntimeError('Variable "niveauLabel" does not exist.', 63, $this->source); })()), "html", null, true);
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
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 88, $this->source); })()), "debut", [], "any", false, false, false, 88), "html", null, true);
        yield "</span>
                                </div>
                                <p class=\"text-sm text-muted-foreground\">Début</p>
                            </div>
                            
                            <div class=\"flex-1 px-4\">
                                <div class=\"h-2 bg-secondary rounded-full overflow-hidden relative\">
                                    <div class=\"absolute inset-0 bg-gradient-to-r from-muted-foreground via-primary to-accent\"></div>
                                    <div class=\"absolute top-0 bottom-0 w-1 bg-white\" style=\"left: ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 96, $this->source); })()), "actuel", [], "any", false, false, false, 96), "html", null, true);
        yield "%\"></div>
                                </div>
                                <div class=\"flex justify-between mt-2\">
                                    <span class=\"text-xs text-muted-foreground\">Actuel: ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 99, $this->source); })()), "actuel", [], "any", false, false, false, 99), "html", null, true);
        yield "%</span>
                                    <span class=\"text-xs text-accent\">Objectif: ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 100, $this->source); })()), "fin", [], "any", false, false, false, 100), "html", null, true);
        yield "%</span>
                                </div>
                            </div>
                            
                            <div class=\"text-center\">
                                <div class=\"w-20 h-20 rounded-full border-4 border-accent flex items-center justify-center mb-2\">
                                    <span class=\"font-serif text-2xl font-bold text-accent\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 106, $this->source); })()), "fin", [], "any", false, false, false, 106), "html", null, true);
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
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 119, $this->source); })()), "fin", [], "any", false, false, false, 119) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["progression_skill"]) || array_key_exists("progression_skill", $context) ? $context["progression_skill"] : (function () { throw new RuntimeError('Variable "progression_skill" does not exist.', 119, $this->source); })()), "actuel", [], "any", false, false, false, 119)), "html", null, true);
        yield "% de compétence à acquérir</p>
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
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Objectifs pédagogiques</h2>
            <div class=\"grid md:grid-cols-2 gap-4\">
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
            // line 135
            yield "                <div class=\"flex items-start gap-4 p-4 bg-secondary/30 rounded-xl\">
                    <div class=\"w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center flex-shrink-0\">
                        <i data-lucide=\"check\" class=\"w-4 h-4 text-primary\"></i>
                    </div>
                    <p class=\"text-foreground\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["objectif"]), "html", null, true);
            yield "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "            </div>
        </div>
    </section>

    <!-- Contenu du parcours -->
    <section class=\"px-6 py-12 border-t border-white/5\">
        <div class=\"max-w-4xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Contenu du parcours</h2>
            ";
        // line 150
        $context["typeIcon"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 150, $this->source); })()), "typeEtape", [], "any", false, false, false, 150) == "video")) ? ("video") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 150, $this->source); })()), "typeEtape", [], "any", false, false, false, 150) == "post")) ? ("file-text") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 150, $this->source); })()), "typeEtape", [], "any", false, false, false, 150) == "exercice")) ? ("pencil") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 150, $this->source); })()), "typeEtape", [], "any", false, false, false, 150) == "quiz")) ? ("help-circle") : ("book-open"))))))));
        // line 151
        yield "            <div class=\"relative flex items-start gap-6\">
                <div class=\"relative z-10 w-16 h-16 rounded-2xl bg-secondary border border-white/10 flex items-center justify-center flex-shrink-0\">
                    <i data-lucide=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeIcon"]) || array_key_exists("typeIcon", $context) ? $context["typeIcon"] : (function () { throw new RuntimeError('Variable "typeIcon" does not exist.', 153, $this->source); })()), "html", null, true);
        yield "\" class=\"w-7 h-7 text-primary\"></i>
                </div>
                <div class=\"flex-1 glass-card rounded-2xl p-6 hover:border-primary/30 transition-all\">
                    <div class=\"flex items-start justify-between gap-4 mb-2\">
                        <h3 class=\"font-medium text-lg\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 157, $this->source); })()), "titrePath", [], "any", false, false, false, 157), "html", null, true);
        yield "</h3>
                        <span class=\"px-3 py-1 rounded-full text-xs bg-secondary text-muted-foreground whitespace-nowrap\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 158, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 158), "html", null, true);
        yield " h</span>
                    </div>
                    ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 160, $this->source); })()), "descriptionSkill", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                    <p class=\"text-sm text-muted-foreground mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 161, $this->source); })()), "descriptionSkill", [], "any", false, false, false, 161), "html", null, true);
            yield "</p>
                    ";
        }
        // line 163
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 163, $this->source); })()), "url", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 164, $this->source); })()), "url", [], "any", false, false, false, 164), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary/20 hover:bg-primary/30 text-primary text-sm font-medium transition-colors\">
                        <i data-lucide=\"external-link\" class=\"w-4 h-4\"></i>
                        ";
            // line 166
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 166, $this->source); })()), "typeEtape", [], "any", false, false, false, 166) == "video")) ? ("Voir la vidéo") : ("Accéder à la ressource"));
            yield "
                    </a>
                    ";
        }
        // line 169
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
                <h2 class=\"font-serif text-3xl font-medium mb-4\">Prêt à commencer ?</h2>
                <p class=\"text-muted-foreground mb-8\">Développez votre compétence avec ce parcours structuré.</p>
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
        return array (  360 => 169,  354 => 166,  348 => 164,  345 => 163,  339 => 161,  337 => 160,  332 => 158,  328 => 157,  321 => 153,  317 => 151,  315 => 150,  305 => 142,  296 => 139,  290 => 135,  286 => 134,  268 => 119,  252 => 106,  243 => 100,  239 => 99,  233 => 96,  222 => 88,  194 => 63,  187 => 59,  180 => 55,  172 => 50,  168 => 49,  164 => 47,  157 => 42,  155 => 41,  150 => 39,  146 => 38,  121 => 16,  115 => 12,  113 => 11,  109 => 10,  107 => 9,  105 => 8,  103 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}{{ parcours.titrePath }} - NoVas{% endblock %}

{% block body %}
{% set typeSkill = parcours.skill and parcours.skill.contexteSkill == 'hard' ? 'hard' : 'soft' %}
{% set skillNom = parcours.skill ? parcours.skill.nomSkill : 'Compétence' %}
{% set niveauLabel = parcours.niveauPath == 1 ? 'Débutant' : (parcours.niveauPath == 2 ? 'Intermédiaire' : (parcours.niveauPath == 3 ? 'Avancé' : '—')) %}
{% set objectifs = parcours.descriptionSkill ? parcours.descriptionSkill|split('.')|filter(o => o|trim != '') : [] %}
{% if objectifs is empty %}{% set objectifs = ['Maîtriser les concepts du parcours.', 'Progresser à votre rythme.'] %}{% endif %}
{% set progression_skill = { debut: 0, fin: parcours.niveauPath == 1 ? 50 : (parcours.niveauPath == 2 ? 80 : 100), actuel: 0 } %}
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
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ typeSkill == 'hard' ? 'bg-academic/20 text-academic' : 'bg-personal/20 text-personal' }}\">
                            {{ typeSkill == 'hard' ? 'Hard Skill' : 'Soft Skill' }}
                        </span>
                        {% if parcours.statutPath == 1 %}
                        <span class=\"px-3 py-1 rounded-full text-xs font-medium bg-accent/20 text-accent flex items-center gap-1\">
                            <i data-lucide=\"award\" class=\"w-3 h-3\"></i>
                            Certifiant
                        </span>
                        {% endif %}
                    </div>
                    
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">{{ parcours.titrePath }}</h1>
                    <p class=\"text-muted-foreground text-lg mb-6\">{{ parcours.descriptionSkill|default('Parcours d\\'apprentissage NoVas.') }}</p>
                    
                    <div class=\"flex flex-wrap gap-4 mb-8\">
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"sparkles\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Skill visé: <strong>{{ skillNom }}</strong></span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Durée: {{ parcours.dureeEstimee }} h</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 bg-secondary rounded-xl\">
                            <i data-lucide=\"bar-chart\" class=\"w-4 h-4 text-primary\"></i>
                            <span class=\"text-sm\">Niveau: {{ niveauLabel }}</span>
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
                                    <span class=\"font-serif text-2xl font-bold text-muted-foreground\">{{ progression_skill.debut }}</span>
                                </div>
                                <p class=\"text-sm text-muted-foreground\">Début</p>
                            </div>
                            
                            <div class=\"flex-1 px-4\">
                                <div class=\"h-2 bg-secondary rounded-full overflow-hidden relative\">
                                    <div class=\"absolute inset-0 bg-gradient-to-r from-muted-foreground via-primary to-accent\"></div>
                                    <div class=\"absolute top-0 bottom-0 w-1 bg-white\" style=\"left: {{ progression_skill.actuel }}%\"></div>
                                </div>
                                <div class=\"flex justify-between mt-2\">
                                    <span class=\"text-xs text-muted-foreground\">Actuel: {{ progression_skill.actuel }}%</span>
                                    <span class=\"text-xs text-accent\">Objectif: {{ progression_skill.fin }}%</span>
                                </div>
                            </div>
                            
                            <div class=\"text-center\">
                                <div class=\"w-20 h-20 rounded-full border-4 border-accent flex items-center justify-center mb-2\">
                                    <span class=\"font-serif text-2xl font-bold text-accent\">{{ progression_skill.fin }}</span>
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
                                    <p class=\"font-medium\">+{{ progression_skill.fin - progression_skill.actuel }}% de compétence à acquérir</p>
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
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Objectifs pédagogiques</h2>
            <div class=\"grid md:grid-cols-2 gap-4\">
                {% for objectif in objectifs %}
                <div class=\"flex items-start gap-4 p-4 bg-secondary/30 rounded-xl\">
                    <div class=\"w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center flex-shrink-0\">
                        <i data-lucide=\"check\" class=\"w-4 h-4 text-primary\"></i>
                    </div>
                    <p class=\"text-foreground\">{{ objectif|trim }}</p>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Contenu du parcours -->
    <section class=\"px-6 py-12 border-t border-white/5\">
        <div class=\"max-w-4xl mx-auto\">
            <h2 class=\"font-serif text-2xl font-medium mb-8\">Contenu du parcours</h2>
            {% set typeIcon = parcours.typeEtape == 'video' ? 'video' : (parcours.typeEtape == 'post' ? 'file-text' : (parcours.typeEtape == 'exercice' ? 'pencil' : (parcours.typeEtape == 'quiz' ? 'help-circle' : 'book-open'))) %}
            <div class=\"relative flex items-start gap-6\">
                <div class=\"relative z-10 w-16 h-16 rounded-2xl bg-secondary border border-white/10 flex items-center justify-center flex-shrink-0\">
                    <i data-lucide=\"{{ typeIcon }}\" class=\"w-7 h-7 text-primary\"></i>
                </div>
                <div class=\"flex-1 glass-card rounded-2xl p-6 hover:border-primary/30 transition-all\">
                    <div class=\"flex items-start justify-between gap-4 mb-2\">
                        <h3 class=\"font-medium text-lg\">{{ parcours.titrePath }}</h3>
                        <span class=\"px-3 py-1 rounded-full text-xs bg-secondary text-muted-foreground whitespace-nowrap\">{{ parcours.dureeEstimee }} h</span>
                    </div>
                    {% if parcours.descriptionSkill %}
                    <p class=\"text-sm text-muted-foreground mb-3\">{{ parcours.descriptionSkill }}</p>
                    {% endif %}
                    {% if parcours.url %}
                    <a href=\"{{ parcours.url }}\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary/20 hover:bg-primary/30 text-primary text-sm font-medium transition-colors\">
                        <i data-lucide=\"external-link\" class=\"w-4 h-4\"></i>
                        {{ parcours.typeEtape == 'video' ? 'Voir la vidéo' : 'Accéder à la ressource' }}
                    </a>
                    {% endif %}
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
                <h2 class=\"font-serif text-3xl font-medium mb-4\">Prêt à commencer ?</h2>
                <p class=\"text-muted-foreground mb-8\">Développez votre compétence avec ce parcours structuré.</p>
                <button class=\"px-8 py-4 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-xl shadow-primary/30 flex items-center gap-2 mx-auto\">
                    <i data-lucide=\"rocket\" class=\"w-5 h-5\"></i>
                    Commencer le parcours
                </button>
            </div>
        </div>
    </section>
</div>
{% endblock %}
", "front/learning_path/detail.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\front\\learning_path\\detail.html.twig");
    }
}
