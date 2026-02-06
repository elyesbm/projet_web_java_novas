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

/* front/user/profile.html.twig */
class __TwigTemplate_3b8ceb327f158d431115a15857408a0a extends Template
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
        // line 2
        return "base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/profile.html.twig"));

        $this->parent = $this->load("base_home.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Mon Profil - EduVie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<!-- Navigation Header Style Front Office -->
<nav class=\"fixed top-0 left-0 right-0 z-50 glass border-b border-border/30\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"flex items-center justify-between h-20\">
            <!-- Logo -->
            

            <!-- Desktop Navigation -->
            <div class=\"hidden md:flex items-center gap-8\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Accueil</a>
                <a href=\"#progression\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Ma Progression</a>
                <a href=\"#competences\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Competences</a>
                <a href=\"#parcours\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Mes Parcours</a>
            </div>

            <!-- User Menu -->
            <div class=\"flex items-center gap-4\">
                <div class=\"hidden md:flex items-center gap-3 px-4 py-2 glass-card rounded-xl\">
                    <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/student-avatar.jpg"), "html", null, true);
        yield "\" alt=\"Sarah\" class=\"w-8 h-8 rounded-full object-cover ring-2 ring-primary/30\">
                    <span class=\"text-sm font-medium\">Sarah</span>
                </div>
                
            </div>
        </div>
    </div>
</nav>

<!-- Hero Profile Section -->
<section class=\"relative min-h-[70vh] flex items-center pt-32 pb-16 overflow-hidden\">
    <!-- Background Elements -->
    <div class=\"absolute inset-0 -z-10\">
        <div class=\"absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl animate-pulse-slow\"></div>
        <div class=\"absolute bottom-20 right-10 w-96 h-96 bg-academic/10 rounded-full blur-3xl animate-pulse-slow delay-300\"></div>
        <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-personal/5 rounded-full blur-3xl\"></div>
    </div>

    <div class=\"max-w-7xl mx-auto px-6 lg:px-8 w-full\">
        <div class=\"glass-card rounded-3xl p-8 md:p-12 relative overflow-hidden\">
            <div class=\"absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-[100px]\"></div>
            
            <!-- Edit Button -->
            <button onclick=\"toggleEditMode()\" class=\"absolute top-6 right-6 z-10 flex items-center gap-2 px-4 py-2 bg-primary/10 hover:bg-primary/20 text-primary rounded-xl text-sm font-medium transition-colors\">
                <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                <span class=\"hidden sm:inline\">Modifier mon profil</span>
            </button>
            
            <div class=\"relative flex flex-col lg:flex-row items-center gap-8 lg:gap-12\">
                <!-- Avatar Section avec upload -->
                <div class=\"relative flex-shrink-0 group\">
                    <div class=\"w-40 h-40 md:w-48 md:h-48 rounded-3xl overflow-hidden ring-4 ring-primary/30 shadow-2xl shadow-primary/20 relative\">
                        <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/student-avatar.jpg"), "html", null, true);
        yield "\" alt=\"Sarah Martin\" class=\"w-full h-full object-cover\">
                        <div class=\"absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center cursor-pointer\">
                            <i data-lucide=\"camera\" class=\"w-8 h-8 text-white\"></i>
                        </div>
                    </div>
                    <div class=\"absolute -top-3 -left-3 px-4 py-1.5 bg-accent rounded-full text-sm font-bold shadow-lg animate-pulse\">
                        Lvl 12
                    </div>
                    <div class=\"absolute -bottom-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-xs font-medium border border-green-500/30\">
                        En ligne
                    </div>
                </div>
                
                <!-- Info Section -->
                <div class=\"flex-1 text-center lg:text-left space-y-4\">
                    <div>
                        <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-2\">Sarah Martin</h1>
                        <p class=\"text-lg text-muted-foreground flex items-center justify-center lg:justify-start gap-2\">
                            <i data-lucide=\"graduation-cap\" class=\"w-5 h-5 text-academic\"></i>
                            Etudiante en L3 Informatique • Universite Paris-Saclay
                        </p>
                    </div>
                    
                    <div class=\"flex flex-wrap justify-center lg:justify-start gap-3\">
                        <span class=\"px-4 py-2 bg-academic/20 text-academic rounded-full text-sm font-medium flex items-center gap-2\">
                            <i data-lucide=\"book-open\" class=\"w-4 h-4\"></i>
                            Academic
                        </span>
                        <span class=\"px-4 py-2 bg-personal/20 text-personal rounded-full text-sm font-medium flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-4 h-4\"></i>
                            Personal
                        </span>
                        <span class=\"px-4 py-2 bg-primary/20 text-primary rounded-full text-sm font-medium flex items-center gap-2\">
                            <i data-lucide=\"zap\" class=\"w-4 h-4\"></i>
                            Active
                        </span>
                    </div>
                    
                    <div class=\"flex flex-wrap justify-center lg:justify-start gap-6 text-sm text-muted-foreground pt-2\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4 text-primary\"></i>
                            sarah.martin@univ.fr
                        </span>
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"map-pin\" class=\"w-4 h-4 text-primary\"></i>
                            Paris, France
                        </span>
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                            Membre depuis 2021
                        </span>
                    </div>

                    <!-- Bio editable -->
                    <div class=\"relative group mt-4\">
                        <p class=\"text-foreground/80 max-w-2xl leading-relaxed italic border-l-2 border-primary/30 pl-4\">
                            \"Passionnee par l'intelligence artificielle et le developpement personnel. Je cherche a developper mes competences techniques tout en cultivant mon leadership.\"
                        </p>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class=\"grid grid-cols-2 gap-4 w-full lg:w-auto\">
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-primary group-hover:text-primary/80\">2,450</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">XP Total</p>
                    </div>
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-accent group-hover:text-accent/80\">5</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">Badges</p>
                    </div>
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-academic group-hover:text-academic/80\">12</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">Cours</p>
                    </div>
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-personal group-hover:text-personal/80\">8</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">Ateliers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Progression & Stats Section -->
<section id=\"progression\" class=\"py-16 relative\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-flex items-center gap-2 px-4 py-2 bg-primary/10 rounded-full text-sm font-medium text-primary mb-4\">
                <i data-lucide=\"trending-up\" class=\"h-4 w-4\"></i>
                Ma Progression
            </span>
            <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Continuez votre ascension</h2>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">Suivez votre evolution et atteignez de nouveaux sommets</p>
        </div>

        <div class=\"grid lg:grid-cols-3 gap-8\">
            <!-- Level Progress Card -->
            <div class=\"lg:col-span-1\">
                <div class=\"glass-card rounded-3xl p-8 h-full relative overflow-hidden\">
                    <div class=\"absolute top-0 right-0 w-32 h-32 bg-accent/20 rounded-full blur-3xl\"></div>
                    
                    <div class=\"relative text-center\">
                        <div class=\"inline-flex items-center justify-center w-24 h-24 rounded-full bg-gradient-to-br from-primary to-accent mb-4 shadow-xl shadow-primary/30\">
                            <span class=\"text-3xl font-bold text-white\">12</span>
                        </div>
                        <h3 class=\"font-serif text-2xl font-medium mb-2\">Niveau Actuel</h3>
                        <p class=\"text-muted-foreground text-sm mb-6\">2,450 / 3,000 XP</p>
                        
                        <div class=\"space-y-2\">
                            <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-gradient-to-r from-primary to-accent rounded-full transition-all duration-1000\" style=\"width: 82%\"></div>
                            </div>
                            <div class=\"flex justify-between text-xs text-muted-foreground\">
                                <span>Niveau 12</span>
                                <span>550 XP avant niveau 13</span>
                            </div>
                        </div>

                        <div class=\"mt-6 pt-6 border-t border-border/50\">
                            <div class=\"flex items-center justify-center gap-2 text-sm text-accent\">
                                <i data-lucide=\"flame\" class=\"w-4 h-4\"></i>
                                <span> serie de 15 jours!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Progress -->
            <div class=\"lg:col-span-2\">
                <div class=\"glass-card rounded-3xl p-8 h-full\">
                    <h3 class=\"font-serif text-xl font-medium mb-6\">Progression par categorie</h3>
                    
                    <div class=\"grid md:grid-cols-2 gap-8\">
                        <div class=\"space-y-6\">
                            <div class=\"group\">
                                <div class=\"flex justify-between items-center mb-3\">
                                    <div class=\"flex items-center gap-3\">
                                        <div class=\"w-10 h-10 rounded-xl bg-academic/20 flex items-center justify-center\">
                                            <i data-lucide=\"book-open\" class=\"w-5 h-5 text-academic\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Academic</p>
                                            <p class=\"text-xs text-muted-foreground\">12 cours termines</p>
                                        </div>
                                    </div>
                                    <span class=\"font-serif text-2xl font-bold text-academic\">75%</span>
                                </div>
                                <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                    <div class=\"h-full bg-gradient-to-r from-academic to-academic/70 rounded-full transition-all duration-1000 group-hover:shadow-[0_0_20px_rgba(var(--academic),0.5)]\" style=\"width: 75%\"></div>
                                </div>
                            </div>

                            <div class=\"group\">
                                <div class=\"flex justify-between items-center mb-3\">
                                    <div class=\"flex items-center gap-3\">
                                        <div class=\"w-10 h-10 rounded-xl bg-personal/20 flex items-center justify-center\">
                                            <i data-lucide=\"heart\" class=\"w-5 h-5 text-personal\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Personal</p>
                                            <p class=\"text-xs text-muted-foreground\">8 ateliers suivis</p>
                                        </div>
                                    </div>
                                    <span class=\"font-serif text-2xl font-bold text-personal\">60%</span>
                                </div>
                                <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                    <div class=\"h-full bg-gradient-to-r from-personal to-personal/70 rounded-full transition-all duration-1000 group-hover:shadow-[0_0_20px_rgba(var(--personal),0.5)]\" style=\"width: 60%\"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Next Milestones -->
                        <div class=\"space-y-4\">
                            <h4 class=\"text-sm font-medium text-muted-foreground uppercase tracking-wider mb-4\">Prochains objectifs</h4>
                            
                            <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors cursor-pointer group\">
                                <div class=\"w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"target\" class=\"w-6 h-6 text-accent\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Terminer 5 cours cette semaine</p>
                                    <p class=\"text-xs text-muted-foreground\">3/5 complete • +200 XP</p>
                                </div>
                                <i data-lucide=\"chevron-right\" class=\"w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors\"></i>
                            </div>

                            <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors cursor-pointer group\">
                                <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"message-circle\" class=\"w-6 h-6 text-primary\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Participer au forum</p>
                                    <p class=\"text-xs text-muted-foreground\">0/3 reponses • +150 XP</p>
                                </div>
                                <i data-lucide=\"chevron-right\" class=\"w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors\"></i>
                            </div>

                            <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors cursor-pointer group opacity-60\">
                                <div class=\"w-12 h-12 rounded-xl bg-personal/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"award\" class=\"w-6 h-6 text-personal\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Obtenir le badge Expert</p>
                                    <p class=\"text-xs text-muted-foreground\">Debloque au niveau 15</p>
                                </div>
                                <i data-lucide=\"lock\" class=\"w-5 h-5 text-muted-foreground\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id=\"competences\" class=\"py-16 relative overflow-hidden\">
    <div class=\"absolute inset-0 bg-gradient-to-b from-transparent via-primary/5 to-transparent\"></div>
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8 relative\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-flex items-center gap-2 px-4 py-2 bg-accent/10 rounded-full text-sm font-medium text-accent mb-4\">
                <i data-lucide=\"sparkles\" class=\"h-4 w-4\"></i>
                Mes Competences
            </span>
            <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Mon expertise</h2>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">Competences developpees au fil de mon parcours</p>
        </div>

        <div class=\"glass-card rounded-3xl p-8\">
            <div class=\"flex flex-wrap gap-3 mb-8\">
                ";
        // line 290
        $context["skills"] = [["name" => "Python", "level" => "Avance", "color" => "academic", "xp" => 850], ["name" => "Machine Learning", "level" => "Intermediaire", "color" => "primary", "xp" => 620], ["name" => "Leadership", "level" => "Avance", "color" => "personal", "xp" => 900], ["name" => "Communication", "level" => "Expert", "color" => "accent", "xp" => 1200], ["name" => "JavaScript", "level" => "Intermediaire", "color" => "academic", "xp" => 540], ["name" => "Gestion de projet", "level" => "Intermediaire", "color" => "personal", "xp" => 480], ["name" => "Design Thinking", "level" => "Debutant", "color" => "primary", "xp" => 320], ["name" => "Prise de parole", "level" => "Avance", "color" => "personal", "xp" => 750]];
        // line 300
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 300, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 301
            yield "                    <div class=\"group relative px-4 py-3 rounded-xl border border-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "color", [], "any", false, false, false, 301), "html", null, true);
            yield "/30 bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "color", [], "any", false, false, false, 301), "html", null, true);
            yield "/10 hover:bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "color", [], "any", false, false, false, 301), "html", null, true);
            yield "/20 transition-all cursor-default\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"font-medium text-";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "color", [], "any", false, false, false, 303), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 303), "html", null, true);
            yield "</span>
                            <span class=\"text-xs px-2 py-0.5 rounded-full bg-background/50 text-muted-foreground\">";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "level", [], "any", false, false, false, 304), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"mt-1 text-xs text-muted-foreground\">";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "xp", [], "any", false, false, false, 306), "html", null, true);
            yield " XP</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "            </div>

            <!-- Certifications -->
            <div class=\"border-t border-border/50 pt-8\">
                <h3 class=\"font-serif text-xl font-medium mb-6 flex items-center gap-3\">
                    <i data-lucide=\"award\" class=\"w-5 h-5 text-primary\"></i>
                    Mes Certifications
                </h3>
                <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 gap-4\">
                    <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors group cursor-pointer\">
                        <div class=\"w-12 h-12 rounded-xl bg-academic/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"badge-check\" class=\"w-6 h-6 text-academic\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-medium text-sm\">Data Science Fundamentals</p>
                            <p class=\"text-xs text-muted-foreground\">IBM • Dec 2024</p>
                        </div>
                        <button class=\"text-muted-foreground hover:text-primary transition-colors\">
                            <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                        </button>
                    </div>
                    
                    <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors group cursor-pointer\">
                        <div class=\"w-12 h-12 rounded-xl bg-personal/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"users\" class=\"w-6 h-6 text-personal\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-medium text-sm\">Leadership Agile</p>
                            <p class=\"text-xs text-muted-foreground\">EduVie • Nov 2024</p>
                        </div>
                        <button class=\"text-muted-foreground hover:text-primary transition-colors\">
                            <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                        </button>
                    </div>

                    <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors group cursor-pointer border-2 border-dashed border-border hover:border-primary/30\">
                        <div class=\"w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0\">
                            <i data-lucide=\"plus\" class=\"w-6 h-6 text-primary\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-medium text-sm text-primary\">Ajouter une certification</p>
                            <p class=\"text-xs text-muted-foreground\">Importer un nouveau certificat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Badges Section -->
<section class=\"py-16 relative\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-flex items-center gap-2 px-4 py-2 bg-accent/10 rounded-full text-sm font-medium text-accent mb-4\">
                <i data-lucide=\"trophy\" class=\"h-4 w-4\"></i>
                Mes Recompenses
            </span>
            <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Badges collectionnes</h2>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">Mes achievements debloques lors de mon parcours</p>
        </div>

        <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6\">
            ";
        // line 372
        $context["badges"] = [["icon" => "star", "name" => "Premier Pas", "desc" => "Inscription complete", "color" => "primary", "date" => "Jan 2021", "unlocked" => true], ["icon" => "zap", "name" => "Rapide", "desc" => "10 cours en 1 semaine", "color" => "accent", "date" => "Mar 2023", "unlocked" => true], ["icon" => "book-open", "name" => "Scholar", "desc" => "50 cours termines", "color" => "academic", "date" => "Jun 2023", "unlocked" => true], ["icon" => "heart", "name" => "Bienveillant", "desc" => "Aide 10 etudiants", "color" => "personal", "date" => "Sep 2023", "unlocked" => true], ["icon" => "award", "name" => "Expert", "desc" => "Niveau 10 atteint", "color" => "primary", "date" => "Dec 2023", "unlocked" => true], ["icon" => "trophy", "name" => "Champion", "desc" => "1er prix hackathon", "color" => "accent", "date" => "Jan 2024", "unlocked" => true]];
        // line 380
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 380, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 381
            yield "                <div class=\"group glass-card rounded-3xl p-6 text-center hover:scale-105 transition-all duration-300 hover:shadow-2xl hover:shadow-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 381), "html", null, true);
            yield "/20 border border-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 381), "html", null, true);
            yield "/20 relative overflow-hidden\">
                    <div class=\"absolute inset-0 bg-gradient-to-br from-";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 382), "html", null, true);
            yield "/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity\"></div>
                    <div class=\"relative w-16 h-16 mx-auto rounded-2xl bg-";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 383), "html", null, true);
            yield "/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform\">
                        <i data-lucide=\"";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icon", [], "any", false, false, false, 384), "html", null, true);
            yield "\" class=\"w-8 h-8 text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 384), "html", null, true);
            yield "\"></i>
                    </div>
                    <h4 class=\"font-serif text-lg font-medium mb-1 relative\">";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "name", [], "any", false, false, false, 386), "html", null, true);
            yield "</h4>
                    <p class=\"text-xs text-muted-foreground mb-2 relative\">";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "desc", [], "any", false, false, false, 387), "html", null, true);
            yield "</p>
                    <span class=\"text-xs text-";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "color", [], "any", false, false, false, 388), "html", null, true);
            yield " font-medium relative\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "date", [], "any", false, false, false, 388), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        yield "        </div>
    </div>
</section>

<!-- Activity & Parcours Section -->
<section id=\"parcours\" class=\"py-16 relative\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"grid lg:grid-cols-3 gap-8\">
            <!-- Recent Activity -->
            <div class=\"lg:col-span-2\">
                <div class=\"glass-card rounded-3xl p-8\">
                    <div class=\"flex items-center justify-between mb-6\">
                        <h3 class=\"font-serif text-2xl font-medium flex items-center gap-3\">
                            <i data-lucide=\"activity\" class=\"w-6 h-6 text-primary\"></i>
                            Mon Activite
                        </h3>
                        <a href=\"#\" class=\"text-sm text-primary hover:text-primary/80 transition-colors\">Voir tout</a>
                    </div>
                    
                    <div class=\"space-y-6 relative before:absolute before:left-4 before:top-2 before:bottom-2 before:w-px before:bg-border\">
                        ";
        // line 411
        $context["activities"] = [["icon" => "check-circle", "text" => "Vous avez termine le cours \"Machine Learning Avance\"", "time" => "Il y a 2 heures", "color" => "academic", "xp" => "+50 XP"], ["icon" => "message-square", "text" => "Vous avez repondu a une question sur le forum", "time" => "Il y a 5 heures", "color" => "primary", "xp" => "+20 XP"], ["icon" => "calendar", "text" => "Vous vous etes inscrit a l'atelier \"Leadership Creatif\"", "time" => "Hier", "color" => "personal", "xp" => "+30 XP"], ["icon" => "star", "text" => "Vous avez obtenu le badge \"Expert\"", "time" => "Il y a 2 jours", "color" => "accent", "xp" => "+100 XP"], ["icon" => "book-open", "text" => "Vous avez commence le parcours \"Data Science\"", "time" => "Il y a 1 semaine", "color" => "academic", "xp" => "+10 XP"]];
        // line 418
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 418, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 419
            yield "                            <div class=\"relative pl-12 flex items-start gap-4 group\">
                                <div class=\"absolute left-0 w-8 h-8 rounded-full bg-";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "color", [], "any", false, false, false, 420), "html", null, true);
            yield "/20 flex items-center justify-center border-2 border-background group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "icon", [], "any", false, false, false, 421), "html", null, true);
            yield "\" class=\"w-4 h-4 text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "color", [], "any", false, false, false, 421), "html", null, true);
            yield "\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"text-sm font-medium group-hover:text-primary transition-colors\">";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "text", [], "any", false, false, false, 424), "html", null, true);
            yield "</p>
                                    <div class=\"flex items-center gap-3 mt-1\">
                                        <p class=\"text-xs text-muted-foreground\">";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "time", [], "any", false, false, false, 426), "html", null, true);
            yield "</p>
                                        <span class=\"text-xs text-accent font-medium\">";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "xp", [], "any", false, false, false, 427), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 432
        yield "                    </div>
                </div>
            </div>

            <!-- Current Paths -->
            <div class=\"lg:col-span-1\">
                <div class=\"glass-card rounded-3xl p-8 h-full\">
                    <div class=\"flex items-center justify-between mb-6\">
                        <h3 class=\"font-serif text-2xl font-medium flex items-center gap-3\">
                            <i data-lucide=\"map\" class=\"w-6 h-6 text-personal\"></i>
                            Mes Parcours
                        </h3>
                        <a href=\"#\" class=\"text-sm text-primary hover:text-primary/80 transition-colors\">Tout voir</a>
                    </div>
                    
                    <div class=\"space-y-4\">
                        <div class=\"p-4 rounded-2xl bg-gradient-to-br from-academic/20 to-academic/5 border border-academic/20 hover:border-academic/40 transition-colors cursor-pointer group\">
                            <div class=\"flex items-center gap-3 mb-3\">
                                <div class=\"w-10 h-10 rounded-xl bg-academic/30 flex items-center justify-center group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"code\" class=\"w-5 h-5 text-academic\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Developpement Web Full Stack</p>
                                    <p class=\"text-xs text-muted-foreground\">75% complete</p>
                                </div>
                            </div>
                            <div class=\"h-1.5 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-academic rounded-full transition-all duration-1000\" style=\"width: 75%\"></div>
                            </div>
                            <p class=\"text-xs text-academic mt-2\">3 cours restants</p>
                        </div>
                        
                        <div class=\"p-4 rounded-2xl bg-gradient-to-br from-personal/20 to-personal/5 border border-personal/20 hover:border-personal/40 transition-colors cursor-pointer group\">
                            <div class=\"flex items-center gap-3 mb-3\">
                                <div class=\"w-10 h-10 rounded-xl bg-personal/30 flex items-center justify-center group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"users\" class=\"w-5 h-5 text-personal\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Leadership & Communication</p>
                                    <p class=\"text-xs text-muted-foreground\">40% complete</p>
                                </div>
                            </div>
                            <div class=\"h-1.5 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-personal rounded-full transition-all duration-1000\" style=\"width: 40%\"></div>
                            </div>
                            <p class=\"text-xs text-personal mt-2\">5 ateliers restants</p>
                        </div>

                        <a href=\"#\" class=\"flex items-center justify-center gap-2 w-full py-3 rounded-xl border-2 border-dashed border-border hover:border-primary hover:bg-primary/5 transition-all text-sm font-medium text-muted-foreground hover:text-primary\">
                            <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                            Decouvrir un nouveau parcours
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Personal Info Edit Modal (Hidden by default) -->
<div id=\"editModal\" class=\"fixed inset-0 z-50 hidden\">
    <div class=\"absolute inset-0 bg-foreground/40 backdrop-blur-sm transition-opacity\" onclick=\"toggleEditMode()\"></div>
    <div class=\"relative min-h-screen flex items-center justify-center p-4\">
        <div class=\"relative w-full max-w-2xl bg-card rounded-3xl shadow-2xl border border-border p-8 animate-scale-in max-h-[90vh] overflow-y-auto\">
            <div class=\"flex items-center justify-between mb-6\">
                <h3 class=\"font-serif text-2xl font-bold text-foreground\">Modifier mon profil</h3>
                <button onclick=\"toggleEditMode()\" class=\"w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center hover:bg-secondary transition-colors\">
                    <i data-lucide=\"x\" class=\"h-5 w-5\"></i>
                </button>
            </div>
            
            <form class=\"space-y-5\" onsubmit=\"event.preventDefault(); toggleEditMode();\">
                <div class=\"grid md:grid-cols-2 gap-5\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prenom</label>
                        <input type=\"text\" value=\"Sarah\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Nom</label>
                        <input type=\"text\" value=\"Martin\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                    </div>
                </div>
                
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Email universitaire</label>
                    <input type=\"email\" value=\"sarah.martin@univ.fr\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                </div>
                
                <div class=\"grid md:grid-cols-2 gap-5\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Niveau d'etudes</label>
                        <select class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                            <option>Licence 3</option>
                            <option>Master 1</option>
                            <option>Master 2</option>
                        </select>
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Filiere</label>
                        <input type=\"text\" value=\"Informatique\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                    </div>
                </div>
                
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Bio</label>
                    <textarea rows=\"3\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-colors resize-none\">Passionnee par l'intelligence artificielle et le developpement personnel. Je cherche a developper mes competences techniques tout en cultivant mon leadership.</textarea>
                </div>
                
                <div class=\"flex justify-end gap-3 pt-4 border-t border-border/50\">
                    <button type=\"button\" onclick=\"toggleEditMode()\" class=\"px-6 py-2.5 border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors\">Annuler</button>
                    <button type=\"submit\" class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-colors shadow-lg shadow-primary/25\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class=\"py-24 relative overflow-hidden\">
    <div class=\"absolute inset-0 bg-gradient-to-br from-primary/10 to-academic/10\"></div>
    <div class=\"absolute top-0 left-1/4 w-96 h-96 bg-personal/20 rounded-full blur-3xl\"></div>
    <div class=\"absolute bottom-0 right-1/4 w-96 h-96 bg-academic/20 rounded-full blur-3xl\"></div>
    
    <div class=\"max-w-4xl mx-auto px-6 lg:px-8 text-center relative\">
        <h2 class=\"font-serif text-4xl md:text-5xl font-medium mb-6\">
            Continuez votre <br>
            <span class=\"italic gradient-text\">transformation</span>
        </h2>
        <p class=\"text-lg text-muted-foreground mb-8 max-w-2xl mx-auto\">
            De nouveaux parcours et ateliers vous attendent. Poussez vos limites et atteignez vos objectifs.
        </p>
        <div class=\"flex flex-wrap justify-center gap-4\">
            <a href=\"";
        // line 564
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_paths_index");
        yield "\" class=\"group inline-flex items-center justify-center rounded-2xl text-lg font-medium bg-primary text-primary-foreground h-16 px-10 shadow-xl shadow-primary/30 hover:shadow-2xl hover:shadow-primary/40 transition-all hover:-translate-y-1\">
                Explorer les parcours
                <i data-lucide=\"arrow-right\" class=\"h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform\"></i>
            </a>
            <a href=\"";
        // line 568
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_ateliers");
        yield "\" class=\"inline-flex items-center justify-center rounded-2xl text-lg font-medium border-2 border-border hover:border-primary/50 hover:bg-primary/5 h-16 px-10 transition-all\">
                Voir les ateliers
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class=\"bg-card border-t border-border/50 py-16\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"grid md:grid-cols-4 gap-12 mb-12\">
            <div class=\"md:col-span-2\">
                <div class=\"flex items-center gap-3 mb-4\">
                    <div class=\"w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-personal flex items-center justify-center\">
                        <i data-lucide=\"graduation-cap\" class=\"h-5 w-5 text-white\"></i>
                    </div>
                    <span class=\"text-xl font-bold\">Edu<span class=\"text-primary\">Vie</span></span>
                </div>
                <p class=\"text-muted-foreground max-w-sm mb-6\">
                    Votre plateforme de developpement academique et personnel.
                </p>
            </div>
            
            <div>
                <h4 class=\"font-semibold text-foreground mb-4\">Mon Compte</h4>
                <ul class=\"space-y-3 text-muted-foreground\">
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Mon Profil</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Mes Parcours</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Mes Reservations</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Parametres</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class=\"font-semibold text-foreground mb-4\">Aide</h4>
                <ul class=\"space-y-3 text-muted-foreground\">
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">FAQ</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Contact</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Confidentialite</a></li>
                </ul>
            </div>
        </div>
        
        <div class=\"pt-8 border-t border-border/50 text-center text-sm text-muted-foreground\">
            <p>&copy; 2024 EduVie. Tous droits reserves.</p>
        </div>
    </div>
</footer>

<script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Toggle Edit Modal
    function toggleEditMode() {
        const modal = document.getElementById('editModal');
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
        lucide.createIcons();
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('editModal');
            if (!modal.classList.contains('hidden')) {
                toggleEditMode();
            }
        }
    });
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
        return "front/user/profile.html.twig";
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
        return array (  749 => 568,  742 => 564,  608 => 432,  597 => 427,  593 => 426,  588 => 424,  580 => 421,  576 => 420,  573 => 419,  568 => 418,  566 => 411,  544 => 391,  533 => 388,  529 => 387,  525 => 386,  518 => 384,  514 => 383,  510 => 382,  503 => 381,  498 => 380,  496 => 372,  431 => 309,  422 => 306,  417 => 304,  411 => 303,  401 => 301,  396 => 300,  394 => 290,  158 => 57,  123 => 25,  111 => 16,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/profile_front.html.twig #}
{% extends 'base_home.html.twig' %}

{% block title %}Mon Profil - EduVie{% endblock %}

{% block body %}
<!-- Navigation Header Style Front Office -->
<nav class=\"fixed top-0 left-0 right-0 z-50 glass border-b border-border/30\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"flex items-center justify-between h-20\">
            <!-- Logo -->
            

            <!-- Desktop Navigation -->
            <div class=\"hidden md:flex items-center gap-8\">
                <a href=\"{{ path('app_home') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Accueil</a>
                <a href=\"#progression\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Ma Progression</a>
                <a href=\"#competences\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Competences</a>
                <a href=\"#parcours\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Mes Parcours</a>
            </div>

            <!-- User Menu -->
            <div class=\"flex items-center gap-4\">
                <div class=\"hidden md:flex items-center gap-3 px-4 py-2 glass-card rounded-xl\">
                    <img src=\"{{ asset('images/student-avatar.jpg') }}\" alt=\"Sarah\" class=\"w-8 h-8 rounded-full object-cover ring-2 ring-primary/30\">
                    <span class=\"text-sm font-medium\">Sarah</span>
                </div>
                
            </div>
        </div>
    </div>
</nav>

<!-- Hero Profile Section -->
<section class=\"relative min-h-[70vh] flex items-center pt-32 pb-16 overflow-hidden\">
    <!-- Background Elements -->
    <div class=\"absolute inset-0 -z-10\">
        <div class=\"absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl animate-pulse-slow\"></div>
        <div class=\"absolute bottom-20 right-10 w-96 h-96 bg-academic/10 rounded-full blur-3xl animate-pulse-slow delay-300\"></div>
        <div class=\"absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-personal/5 rounded-full blur-3xl\"></div>
    </div>

    <div class=\"max-w-7xl mx-auto px-6 lg:px-8 w-full\">
        <div class=\"glass-card rounded-3xl p-8 md:p-12 relative overflow-hidden\">
            <div class=\"absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-[100px]\"></div>
            
            <!-- Edit Button -->
            <button onclick=\"toggleEditMode()\" class=\"absolute top-6 right-6 z-10 flex items-center gap-2 px-4 py-2 bg-primary/10 hover:bg-primary/20 text-primary rounded-xl text-sm font-medium transition-colors\">
                <i data-lucide=\"pencil\" class=\"w-4 h-4\"></i>
                <span class=\"hidden sm:inline\">Modifier mon profil</span>
            </button>
            
            <div class=\"relative flex flex-col lg:flex-row items-center gap-8 lg:gap-12\">
                <!-- Avatar Section avec upload -->
                <div class=\"relative flex-shrink-0 group\">
                    <div class=\"w-40 h-40 md:w-48 md:h-48 rounded-3xl overflow-hidden ring-4 ring-primary/30 shadow-2xl shadow-primary/20 relative\">
                        <img src=\"{{ asset('images/student-avatar.jpg') }}\" alt=\"Sarah Martin\" class=\"w-full h-full object-cover\">
                        <div class=\"absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center cursor-pointer\">
                            <i data-lucide=\"camera\" class=\"w-8 h-8 text-white\"></i>
                        </div>
                    </div>
                    <div class=\"absolute -top-3 -left-3 px-4 py-1.5 bg-accent rounded-full text-sm font-bold shadow-lg animate-pulse\">
                        Lvl 12
                    </div>
                    <div class=\"absolute -bottom-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-xs font-medium border border-green-500/30\">
                        En ligne
                    </div>
                </div>
                
                <!-- Info Section -->
                <div class=\"flex-1 text-center lg:text-left space-y-4\">
                    <div>
                        <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-2\">Sarah Martin</h1>
                        <p class=\"text-lg text-muted-foreground flex items-center justify-center lg:justify-start gap-2\">
                            <i data-lucide=\"graduation-cap\" class=\"w-5 h-5 text-academic\"></i>
                            Etudiante en L3 Informatique • Universite Paris-Saclay
                        </p>
                    </div>
                    
                    <div class=\"flex flex-wrap justify-center lg:justify-start gap-3\">
                        <span class=\"px-4 py-2 bg-academic/20 text-academic rounded-full text-sm font-medium flex items-center gap-2\">
                            <i data-lucide=\"book-open\" class=\"w-4 h-4\"></i>
                            Academic
                        </span>
                        <span class=\"px-4 py-2 bg-personal/20 text-personal rounded-full text-sm font-medium flex items-center gap-2\">
                            <i data-lucide=\"heart\" class=\"w-4 h-4\"></i>
                            Personal
                        </span>
                        <span class=\"px-4 py-2 bg-primary/20 text-primary rounded-full text-sm font-medium flex items-center gap-2\">
                            <i data-lucide=\"zap\" class=\"w-4 h-4\"></i>
                            Active
                        </span>
                    </div>
                    
                    <div class=\"flex flex-wrap justify-center lg:justify-start gap-6 text-sm text-muted-foreground pt-2\">
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4 text-primary\"></i>
                            sarah.martin@univ.fr
                        </span>
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"map-pin\" class=\"w-4 h-4 text-primary\"></i>
                            Paris, France
                        </span>
                        <span class=\"flex items-center gap-2\">
                            <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                            Membre depuis 2021
                        </span>
                    </div>

                    <!-- Bio editable -->
                    <div class=\"relative group mt-4\">
                        <p class=\"text-foreground/80 max-w-2xl leading-relaxed italic border-l-2 border-primary/30 pl-4\">
                            \"Passionnee par l'intelligence artificielle et le developpement personnel. Je cherche a developper mes competences techniques tout en cultivant mon leadership.\"
                        </p>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class=\"grid grid-cols-2 gap-4 w-full lg:w-auto\">
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-primary group-hover:text-primary/80\">2,450</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">XP Total</p>
                    </div>
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-accent group-hover:text-accent/80\">5</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">Badges</p>
                    </div>
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-academic group-hover:text-academic/80\">12</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">Cours</p>
                    </div>
                    <div class=\"glass-card rounded-2xl p-6 text-center min-w-[120px] hover:scale-105 transition-transform cursor-pointer group\">
                        <p class=\"font-serif text-3xl font-bold text-personal group-hover:text-personal/80\">8</p>
                        <p class=\"text-xs text-muted-foreground uppercase tracking-wider mt-1\">Ateliers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Progression & Stats Section -->
<section id=\"progression\" class=\"py-16 relative\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-flex items-center gap-2 px-4 py-2 bg-primary/10 rounded-full text-sm font-medium text-primary mb-4\">
                <i data-lucide=\"trending-up\" class=\"h-4 w-4\"></i>
                Ma Progression
            </span>
            <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Continuez votre ascension</h2>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">Suivez votre evolution et atteignez de nouveaux sommets</p>
        </div>

        <div class=\"grid lg:grid-cols-3 gap-8\">
            <!-- Level Progress Card -->
            <div class=\"lg:col-span-1\">
                <div class=\"glass-card rounded-3xl p-8 h-full relative overflow-hidden\">
                    <div class=\"absolute top-0 right-0 w-32 h-32 bg-accent/20 rounded-full blur-3xl\"></div>
                    
                    <div class=\"relative text-center\">
                        <div class=\"inline-flex items-center justify-center w-24 h-24 rounded-full bg-gradient-to-br from-primary to-accent mb-4 shadow-xl shadow-primary/30\">
                            <span class=\"text-3xl font-bold text-white\">12</span>
                        </div>
                        <h3 class=\"font-serif text-2xl font-medium mb-2\">Niveau Actuel</h3>
                        <p class=\"text-muted-foreground text-sm mb-6\">2,450 / 3,000 XP</p>
                        
                        <div class=\"space-y-2\">
                            <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-gradient-to-r from-primary to-accent rounded-full transition-all duration-1000\" style=\"width: 82%\"></div>
                            </div>
                            <div class=\"flex justify-between text-xs text-muted-foreground\">
                                <span>Niveau 12</span>
                                <span>550 XP avant niveau 13</span>
                            </div>
                        </div>

                        <div class=\"mt-6 pt-6 border-t border-border/50\">
                            <div class=\"flex items-center justify-center gap-2 text-sm text-accent\">
                                <i data-lucide=\"flame\" class=\"w-4 h-4\"></i>
                                <span> serie de 15 jours!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Progress -->
            <div class=\"lg:col-span-2\">
                <div class=\"glass-card rounded-3xl p-8 h-full\">
                    <h3 class=\"font-serif text-xl font-medium mb-6\">Progression par categorie</h3>
                    
                    <div class=\"grid md:grid-cols-2 gap-8\">
                        <div class=\"space-y-6\">
                            <div class=\"group\">
                                <div class=\"flex justify-between items-center mb-3\">
                                    <div class=\"flex items-center gap-3\">
                                        <div class=\"w-10 h-10 rounded-xl bg-academic/20 flex items-center justify-center\">
                                            <i data-lucide=\"book-open\" class=\"w-5 h-5 text-academic\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Academic</p>
                                            <p class=\"text-xs text-muted-foreground\">12 cours termines</p>
                                        </div>
                                    </div>
                                    <span class=\"font-serif text-2xl font-bold text-academic\">75%</span>
                                </div>
                                <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                    <div class=\"h-full bg-gradient-to-r from-academic to-academic/70 rounded-full transition-all duration-1000 group-hover:shadow-[0_0_20px_rgba(var(--academic),0.5)]\" style=\"width: 75%\"></div>
                                </div>
                            </div>

                            <div class=\"group\">
                                <div class=\"flex justify-between items-center mb-3\">
                                    <div class=\"flex items-center gap-3\">
                                        <div class=\"w-10 h-10 rounded-xl bg-personal/20 flex items-center justify-center\">
                                            <i data-lucide=\"heart\" class=\"w-5 h-5 text-personal\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Personal</p>
                                            <p class=\"text-xs text-muted-foreground\">8 ateliers suivis</p>
                                        </div>
                                    </div>
                                    <span class=\"font-serif text-2xl font-bold text-personal\">60%</span>
                                </div>
                                <div class=\"h-3 bg-secondary rounded-full overflow-hidden\">
                                    <div class=\"h-full bg-gradient-to-r from-personal to-personal/70 rounded-full transition-all duration-1000 group-hover:shadow-[0_0_20px_rgba(var(--personal),0.5)]\" style=\"width: 60%\"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Next Milestones -->
                        <div class=\"space-y-4\">
                            <h4 class=\"text-sm font-medium text-muted-foreground uppercase tracking-wider mb-4\">Prochains objectifs</h4>
                            
                            <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors cursor-pointer group\">
                                <div class=\"w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"target\" class=\"w-6 h-6 text-accent\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Terminer 5 cours cette semaine</p>
                                    <p class=\"text-xs text-muted-foreground\">3/5 complete • +200 XP</p>
                                </div>
                                <i data-lucide=\"chevron-right\" class=\"w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors\"></i>
                            </div>

                            <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors cursor-pointer group\">
                                <div class=\"w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"message-circle\" class=\"w-6 h-6 text-primary\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Participer au forum</p>
                                    <p class=\"text-xs text-muted-foreground\">0/3 reponses • +150 XP</p>
                                </div>
                                <i data-lucide=\"chevron-right\" class=\"w-5 h-5 text-muted-foreground group-hover:text-primary transition-colors\"></i>
                            </div>

                            <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors cursor-pointer group opacity-60\">
                                <div class=\"w-12 h-12 rounded-xl bg-personal/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"award\" class=\"w-6 h-6 text-personal\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Obtenir le badge Expert</p>
                                    <p class=\"text-xs text-muted-foreground\">Debloque au niveau 15</p>
                                </div>
                                <i data-lucide=\"lock\" class=\"w-5 h-5 text-muted-foreground\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id=\"competences\" class=\"py-16 relative overflow-hidden\">
    <div class=\"absolute inset-0 bg-gradient-to-b from-transparent via-primary/5 to-transparent\"></div>
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8 relative\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-flex items-center gap-2 px-4 py-2 bg-accent/10 rounded-full text-sm font-medium text-accent mb-4\">
                <i data-lucide=\"sparkles\" class=\"h-4 w-4\"></i>
                Mes Competences
            </span>
            <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Mon expertise</h2>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">Competences developpees au fil de mon parcours</p>
        </div>

        <div class=\"glass-card rounded-3xl p-8\">
            <div class=\"flex flex-wrap gap-3 mb-8\">
                {% set skills = [
                    {name: 'Python', level: 'Avance', color: 'academic', xp: 850},
                    {name: 'Machine Learning', level: 'Intermediaire', color: 'primary', xp: 620},
                    {name: 'Leadership', level: 'Avance', color: 'personal', xp: 900},
                    {name: 'Communication', level: 'Expert', color: 'accent', xp: 1200},
                    {name: 'JavaScript', level: 'Intermediaire', color: 'academic', xp: 540},
                    {name: 'Gestion de projet', level: 'Intermediaire', color: 'personal', xp: 480},
                    {name: 'Design Thinking', level: 'Debutant', color: 'primary', xp: 320},
                    {name: 'Prise de parole', level: 'Avance', color: 'personal', xp: 750}
                ] %}
                {% for skill in skills %}
                    <div class=\"group relative px-4 py-3 rounded-xl border border-{{ skill.color }}/30 bg-{{ skill.color }}/10 hover:bg-{{ skill.color }}/20 transition-all cursor-default\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"font-medium text-{{ skill.color }}\">{{ skill.name }}</span>
                            <span class=\"text-xs px-2 py-0.5 rounded-full bg-background/50 text-muted-foreground\">{{ skill.level }}</span>
                        </div>
                        <div class=\"mt-1 text-xs text-muted-foreground\">{{ skill.xp }} XP</div>
                    </div>
                {% endfor %}
            </div>

            <!-- Certifications -->
            <div class=\"border-t border-border/50 pt-8\">
                <h3 class=\"font-serif text-xl font-medium mb-6 flex items-center gap-3\">
                    <i data-lucide=\"award\" class=\"w-5 h-5 text-primary\"></i>
                    Mes Certifications
                </h3>
                <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 gap-4\">
                    <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors group cursor-pointer\">
                        <div class=\"w-12 h-12 rounded-xl bg-academic/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"badge-check\" class=\"w-6 h-6 text-academic\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-medium text-sm\">Data Science Fundamentals</p>
                            <p class=\"text-xs text-muted-foreground\">IBM • Dec 2024</p>
                        </div>
                        <button class=\"text-muted-foreground hover:text-primary transition-colors\">
                            <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                        </button>
                    </div>
                    
                    <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors group cursor-pointer\">
                        <div class=\"w-12 h-12 rounded-xl bg-personal/20 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform\">
                            <i data-lucide=\"users\" class=\"w-6 h-6 text-personal\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-medium text-sm\">Leadership Agile</p>
                            <p class=\"text-xs text-muted-foreground\">EduVie • Nov 2024</p>
                        </div>
                        <button class=\"text-muted-foreground hover:text-primary transition-colors\">
                            <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                        </button>
                    </div>

                    <div class=\"flex items-center gap-4 p-4 rounded-2xl bg-secondary/30 hover:bg-secondary/50 transition-colors group cursor-pointer border-2 border-dashed border-border hover:border-primary/30\">
                        <div class=\"w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0\">
                            <i data-lucide=\"plus\" class=\"w-6 h-6 text-primary\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-medium text-sm text-primary\">Ajouter une certification</p>
                            <p class=\"text-xs text-muted-foreground\">Importer un nouveau certificat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Badges Section -->
<section class=\"py-16 relative\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <span class=\"inline-flex items-center gap-2 px-4 py-2 bg-accent/10 rounded-full text-sm font-medium text-accent mb-4\">
                <i data-lucide=\"trophy\" class=\"h-4 w-4\"></i>
                Mes Recompenses
            </span>
            <h2 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">Badges collectionnes</h2>
            <p class=\"text-muted-foreground max-w-2xl mx-auto\">Mes achievements debloques lors de mon parcours</p>
        </div>

        <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6\">
            {% set badges = [
                {icon: 'star', name: 'Premier Pas', desc: 'Inscription complete', color: 'primary', date: 'Jan 2021', unlocked: true},
                {icon: 'zap', name: 'Rapide', desc: '10 cours en 1 semaine', color: 'accent', date: 'Mar 2023', unlocked: true},
                {icon: 'book-open', name: 'Scholar', desc: '50 cours termines', color: 'academic', date: 'Jun 2023', unlocked: true},
                {icon: 'heart', name: 'Bienveillant', desc: 'Aide 10 etudiants', color: 'personal', date: 'Sep 2023', unlocked: true},
                {icon: 'award', name: 'Expert', desc: 'Niveau 10 atteint', color: 'primary', date: 'Dec 2023', unlocked: true},
                {icon: 'trophy', name: 'Champion', desc: '1er prix hackathon', color: 'accent', date: 'Jan 2024', unlocked: true}
            ] %}
            {% for badge in badges %}
                <div class=\"group glass-card rounded-3xl p-6 text-center hover:scale-105 transition-all duration-300 hover:shadow-2xl hover:shadow-{{ badge.color }}/20 border border-{{ badge.color }}/20 relative overflow-hidden\">
                    <div class=\"absolute inset-0 bg-gradient-to-br from-{{ badge.color }}/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity\"></div>
                    <div class=\"relative w-16 h-16 mx-auto rounded-2xl bg-{{ badge.color }}/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform\">
                        <i data-lucide=\"{{ badge.icon }}\" class=\"w-8 h-8 text-{{ badge.color }}\"></i>
                    </div>
                    <h4 class=\"font-serif text-lg font-medium mb-1 relative\">{{ badge.name }}</h4>
                    <p class=\"text-xs text-muted-foreground mb-2 relative\">{{ badge.desc }}</p>
                    <span class=\"text-xs text-{{ badge.color }} font-medium relative\">{{ badge.date }}</span>
                </div>
            {% endfor %}
        </div>
    </div>
</section>

<!-- Activity & Parcours Section -->
<section id=\"parcours\" class=\"py-16 relative\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"grid lg:grid-cols-3 gap-8\">
            <!-- Recent Activity -->
            <div class=\"lg:col-span-2\">
                <div class=\"glass-card rounded-3xl p-8\">
                    <div class=\"flex items-center justify-between mb-6\">
                        <h3 class=\"font-serif text-2xl font-medium flex items-center gap-3\">
                            <i data-lucide=\"activity\" class=\"w-6 h-6 text-primary\"></i>
                            Mon Activite
                        </h3>
                        <a href=\"#\" class=\"text-sm text-primary hover:text-primary/80 transition-colors\">Voir tout</a>
                    </div>
                    
                    <div class=\"space-y-6 relative before:absolute before:left-4 before:top-2 before:bottom-2 before:w-px before:bg-border\">
                        {% set activities = [
                            {icon: 'check-circle', text: 'Vous avez termine le cours \"Machine Learning Avance\"', time: 'Il y a 2 heures', color: 'academic', xp: '+50 XP'},
                            {icon: 'message-square', text: 'Vous avez repondu a une question sur le forum', time: 'Il y a 5 heures', color: 'primary', xp: '+20 XP'},
                            {icon: 'calendar', text: 'Vous vous etes inscrit a l\\'atelier \"Leadership Creatif\"', time: 'Hier', color: 'personal', xp: '+30 XP'},
                            {icon: 'star', text: 'Vous avez obtenu le badge \"Expert\"', time: 'Il y a 2 jours', color: 'accent', xp: '+100 XP'},
                            {icon: 'book-open', text: 'Vous avez commence le parcours \"Data Science\"', time: 'Il y a 1 semaine', color: 'academic', xp: '+10 XP'}
                        ] %}
                        {% for activity in activities %}
                            <div class=\"relative pl-12 flex items-start gap-4 group\">
                                <div class=\"absolute left-0 w-8 h-8 rounded-full bg-{{ activity.color }}/20 flex items-center justify-center border-2 border-background group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"{{ activity.icon }}\" class=\"w-4 h-4 text-{{ activity.color }}\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"text-sm font-medium group-hover:text-primary transition-colors\">{{ activity.text }}</p>
                                    <div class=\"flex items-center gap-3 mt-1\">
                                        <p class=\"text-xs text-muted-foreground\">{{ activity.time }}</p>
                                        <span class=\"text-xs text-accent font-medium\">{{ activity.xp }}</span>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>

            <!-- Current Paths -->
            <div class=\"lg:col-span-1\">
                <div class=\"glass-card rounded-3xl p-8 h-full\">
                    <div class=\"flex items-center justify-between mb-6\">
                        <h3 class=\"font-serif text-2xl font-medium flex items-center gap-3\">
                            <i data-lucide=\"map\" class=\"w-6 h-6 text-personal\"></i>
                            Mes Parcours
                        </h3>
                        <a href=\"#\" class=\"text-sm text-primary hover:text-primary/80 transition-colors\">Tout voir</a>
                    </div>
                    
                    <div class=\"space-y-4\">
                        <div class=\"p-4 rounded-2xl bg-gradient-to-br from-academic/20 to-academic/5 border border-academic/20 hover:border-academic/40 transition-colors cursor-pointer group\">
                            <div class=\"flex items-center gap-3 mb-3\">
                                <div class=\"w-10 h-10 rounded-xl bg-academic/30 flex items-center justify-center group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"code\" class=\"w-5 h-5 text-academic\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Developpement Web Full Stack</p>
                                    <p class=\"text-xs text-muted-foreground\">75% complete</p>
                                </div>
                            </div>
                            <div class=\"h-1.5 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-academic rounded-full transition-all duration-1000\" style=\"width: 75%\"></div>
                            </div>
                            <p class=\"text-xs text-academic mt-2\">3 cours restants</p>
                        </div>
                        
                        <div class=\"p-4 rounded-2xl bg-gradient-to-br from-personal/20 to-personal/5 border border-personal/20 hover:border-personal/40 transition-colors cursor-pointer group\">
                            <div class=\"flex items-center gap-3 mb-3\">
                                <div class=\"w-10 h-10 rounded-xl bg-personal/30 flex items-center justify-center group-hover:scale-110 transition-transform\">
                                    <i data-lucide=\"users\" class=\"w-5 h-5 text-personal\"></i>
                                </div>
                                <div class=\"flex-1\">
                                    <p class=\"font-medium text-sm\">Leadership & Communication</p>
                                    <p class=\"text-xs text-muted-foreground\">40% complete</p>
                                </div>
                            </div>
                            <div class=\"h-1.5 bg-secondary rounded-full overflow-hidden\">
                                <div class=\"h-full bg-personal rounded-full transition-all duration-1000\" style=\"width: 40%\"></div>
                            </div>
                            <p class=\"text-xs text-personal mt-2\">5 ateliers restants</p>
                        </div>

                        <a href=\"#\" class=\"flex items-center justify-center gap-2 w-full py-3 rounded-xl border-2 border-dashed border-border hover:border-primary hover:bg-primary/5 transition-all text-sm font-medium text-muted-foreground hover:text-primary\">
                            <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                            Decouvrir un nouveau parcours
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Personal Info Edit Modal (Hidden by default) -->
<div id=\"editModal\" class=\"fixed inset-0 z-50 hidden\">
    <div class=\"absolute inset-0 bg-foreground/40 backdrop-blur-sm transition-opacity\" onclick=\"toggleEditMode()\"></div>
    <div class=\"relative min-h-screen flex items-center justify-center p-4\">
        <div class=\"relative w-full max-w-2xl bg-card rounded-3xl shadow-2xl border border-border p-8 animate-scale-in max-h-[90vh] overflow-y-auto\">
            <div class=\"flex items-center justify-between mb-6\">
                <h3 class=\"font-serif text-2xl font-bold text-foreground\">Modifier mon profil</h3>
                <button onclick=\"toggleEditMode()\" class=\"w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center hover:bg-secondary transition-colors\">
                    <i data-lucide=\"x\" class=\"h-5 w-5\"></i>
                </button>
            </div>
            
            <form class=\"space-y-5\" onsubmit=\"event.preventDefault(); toggleEditMode();\">
                <div class=\"grid md:grid-cols-2 gap-5\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prenom</label>
                        <input type=\"text\" value=\"Sarah\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Nom</label>
                        <input type=\"text\" value=\"Martin\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                    </div>
                </div>
                
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Email universitaire</label>
                    <input type=\"email\" value=\"sarah.martin@univ.fr\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                </div>
                
                <div class=\"grid md:grid-cols-2 gap-5\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Niveau d'etudes</label>
                        <select class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                            <option>Licence 3</option>
                            <option>Master 1</option>
                            <option>Master 2</option>
                        </select>
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Filiere</label>
                        <input type=\"text\" value=\"Informatique\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-colors\">
                    </div>
                </div>
                
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Bio</label>
                    <textarea rows=\"3\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-colors resize-none\">Passionnee par l'intelligence artificielle et le developpement personnel. Je cherche a developper mes competences techniques tout en cultivant mon leadership.</textarea>
                </div>
                
                <div class=\"flex justify-end gap-3 pt-4 border-t border-border/50\">
                    <button type=\"button\" onclick=\"toggleEditMode()\" class=\"px-6 py-2.5 border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors\">Annuler</button>
                    <button type=\"submit\" class=\"px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-colors shadow-lg shadow-primary/25\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class=\"py-24 relative overflow-hidden\">
    <div class=\"absolute inset-0 bg-gradient-to-br from-primary/10 to-academic/10\"></div>
    <div class=\"absolute top-0 left-1/4 w-96 h-96 bg-personal/20 rounded-full blur-3xl\"></div>
    <div class=\"absolute bottom-0 right-1/4 w-96 h-96 bg-academic/20 rounded-full blur-3xl\"></div>
    
    <div class=\"max-w-4xl mx-auto px-6 lg:px-8 text-center relative\">
        <h2 class=\"font-serif text-4xl md:text-5xl font-medium mb-6\">
            Continuez votre <br>
            <span class=\"italic gradient-text\">transformation</span>
        </h2>
        <p class=\"text-lg text-muted-foreground mb-8 max-w-2xl mx-auto\">
            De nouveaux parcours et ateliers vous attendent. Poussez vos limites et atteignez vos objectifs.
        </p>
        <div class=\"flex flex-wrap justify-center gap-4\">
            <a href=\"{{ path('app_learning_paths_index') }}\" class=\"group inline-flex items-center justify-center rounded-2xl text-lg font-medium bg-primary text-primary-foreground h-16 px-10 shadow-xl shadow-primary/30 hover:shadow-2xl hover:shadow-primary/40 transition-all hover:-translate-y-1\">
                Explorer les parcours
                <i data-lucide=\"arrow-right\" class=\"h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform\"></i>
            </a>
            <a href=\"{{ path('app_reservation_ateliers') }}\" class=\"inline-flex items-center justify-center rounded-2xl text-lg font-medium border-2 border-border hover:border-primary/50 hover:bg-primary/5 h-16 px-10 transition-all\">
                Voir les ateliers
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class=\"bg-card border-t border-border/50 py-16\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"grid md:grid-cols-4 gap-12 mb-12\">
            <div class=\"md:col-span-2\">
                <div class=\"flex items-center gap-3 mb-4\">
                    <div class=\"w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-personal flex items-center justify-center\">
                        <i data-lucide=\"graduation-cap\" class=\"h-5 w-5 text-white\"></i>
                    </div>
                    <span class=\"text-xl font-bold\">Edu<span class=\"text-primary\">Vie</span></span>
                </div>
                <p class=\"text-muted-foreground max-w-sm mb-6\">
                    Votre plateforme de developpement academique et personnel.
                </p>
            </div>
            
            <div>
                <h4 class=\"font-semibold text-foreground mb-4\">Mon Compte</h4>
                <ul class=\"space-y-3 text-muted-foreground\">
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Mon Profil</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Mes Parcours</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Mes Reservations</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Parametres</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class=\"font-semibold text-foreground mb-4\">Aide</h4>
                <ul class=\"space-y-3 text-muted-foreground\">
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">FAQ</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Contact</a></li>
                    <li><a href=\"#\" class=\"hover:text-primary transition-colors\">Confidentialite</a></li>
                </ul>
            </div>
        </div>
        
        <div class=\"pt-8 border-t border-border/50 text-center text-sm text-muted-foreground\">
            <p>&copy; 2024 EduVie. Tous droits reserves.</p>
        </div>
    </div>
</footer>

<script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Toggle Edit Modal
    function toggleEditMode() {
        const modal = document.getElementById('editModal');
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
        lucide.createIcons();
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('editModal');
            if (!modal.classList.contains('hidden')) {
                toggleEditMode();
            }
        }
    });
</script>
{% endblock %}", "front/user/profile.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\front\\user\\profile.html.twig");
    }
}
