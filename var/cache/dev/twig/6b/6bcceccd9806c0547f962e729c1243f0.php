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

/* skill/ajouter.html.twig */
class __TwigTemplate_247f814cdcbec1a6a2d07f88bf9658f8 extends Template
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
        return "base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/ajouter.html.twig"));

        $this->parent = $this->load("base_home.html.twig", 1);
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

        yield "Ajouter un Skill - NoVas";
        
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
        yield "<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_mes");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour a mes skills</span>
            </a>
            
            <div class=\"flex items-center gap-2\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-2xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"plus-circle\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Ajouter un nouveau skill</h1>
                <p class=\"text-muted-foreground\">Identifiez et ajoutez une competence a votre profil</p>
            </div>
            
            <form method=\"post\" class=\"glass-card rounded-3xl p-8 space-y-6\">
                <!-- Type de skill -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Type de competence</label>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"hard\" class=\"peer hidden\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-academic peer-checked:bg-academic/20 transition-all text-center\">
                                <i data-lucide=\"code\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Hard Skill</p>
                                <p class=\"text-xs text-muted-foreground\">Technique, academique</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"soft\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-personal peer-checked:bg-personal/20 transition-all text-center\">
                                <i data-lucide=\"heart\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Soft Skill</p>
                                <p class=\"text-xs text-muted-foreground\">Interpersonnel, humain</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Nom du skill -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Nom du skill</label>
                    <input type=\"text\" name=\"nom\" required placeholder=\"Ex: Communication orale, Python...\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                
                <!-- Categorie -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Categorie</label>
                    <div class=\"relative\">
                        <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer\">
                            <option value=\"\">Selectionnez une categorie</option>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 74
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                        </select>
                        <i data-lucide=\"chevron-down\" class=\"absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground pointer-events-none\"></i>
                    </div>
                </div>
                
                <!-- Niveau actuel -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Votre niveau actuel</label>
                    <div class=\"grid grid-cols-3 gap-3\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"niveau\" value=\"Debutant\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-yellow-500 peer-checked:bg-yellow-500/20 transition-all text-center\">
                                <div class=\"w-3 h-3 rounded-full bg-yellow-500 mx-auto mb-2\"></div>
                                <p class=\"text-sm font-medium\">Debutant</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"niveau\" value=\"Intermediaire\" class=\"peer hidden\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-orange-500 peer-checked:bg-orange-500/20 transition-all text-center\">
                                <div class=\"w-3 h-3 rounded-full bg-orange-500 mx-auto mb-2\"></div>
                                <p class=\"text-sm font-medium\">Intermediaire</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"niveau\" value=\"Avance\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-green-500 peer-checked:bg-green-500/20 transition-all text-center\">
                                <div class=\"w-3 h-3 rounded-full bg-green-500 mx-auto mb-2\"></div>
                                <p class=\"text-sm font-medium\">Avance</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description (optionnel)</label>
                    <textarea name=\"description\" rows=\"3\" placeholder=\"Decrivez votre experience avec ce skill...\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\"></textarea>
                </div>
                
                <!-- Auto-evaluation -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Auto-evaluation (%)</label>
                    <input type=\"range\" name=\"evaluation\" min=\"0\" max=\"100\" value=\"50\" class=\"w-full h-2 bg-secondary rounded-lg appearance-none cursor-pointer accent-primary\" oninput=\"document.getElementById('evalValue').textContent = this.value + '%'\">
                    <div class=\"flex justify-between text-xs text-muted-foreground mt-2\">
                        <span>Debutant</span>
                        <span id=\"evalValue\" class=\"text-primary font-medium\">50%</span>
                        <span>Expert</span>
                    </div>
                </div>
                
                <!-- Submit -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_mes");
        yield "\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Ajouter le skill
                    </button>
                </div>
            </form>
        </div>
    </div>
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
        return "skill/ajouter.html.twig";
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
        return array (  241 => 128,  187 => 76,  176 => 74,  172 => 73,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_home.html.twig' %}

{% block title %}Ajouter un Skill - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_skills_mes') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour a mes skills</span>
            </a>
            
            <div class=\"flex items-center gap-2\">
                <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center\">
                    <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-2xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"plus-circle\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Ajouter un nouveau skill</h1>
                <p class=\"text-muted-foreground\">Identifiez et ajoutez une competence a votre profil</p>
            </div>
            
            <form method=\"post\" class=\"glass-card rounded-3xl p-8 space-y-6\">
                <!-- Type de skill -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Type de competence</label>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"hard\" class=\"peer hidden\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-academic peer-checked:bg-academic/20 transition-all text-center\">
                                <i data-lucide=\"code\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Hard Skill</p>
                                <p class=\"text-xs text-muted-foreground\">Technique, academique</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"soft\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-personal peer-checked:bg-personal/20 transition-all text-center\">
                                <i data-lucide=\"heart\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Soft Skill</p>
                                <p class=\"text-xs text-muted-foreground\">Interpersonnel, humain</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Nom du skill -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Nom du skill</label>
                    <input type=\"text\" name=\"nom\" required placeholder=\"Ex: Communication orale, Python...\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>
                
                <!-- Categorie -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Categorie</label>
                    <div class=\"relative\">
                        <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer\">
                            <option value=\"\">Selectionnez une categorie</option>
                            {% for cat in categories %}
                            <option value=\"{{ cat }}\">{{ cat }}</option>
                            {% endfor %}
                        </select>
                        <i data-lucide=\"chevron-down\" class=\"absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground pointer-events-none\"></i>
                    </div>
                </div>
                
                <!-- Niveau actuel -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Votre niveau actuel</label>
                    <div class=\"grid grid-cols-3 gap-3\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"niveau\" value=\"Debutant\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-yellow-500 peer-checked:bg-yellow-500/20 transition-all text-center\">
                                <div class=\"w-3 h-3 rounded-full bg-yellow-500 mx-auto mb-2\"></div>
                                <p class=\"text-sm font-medium\">Debutant</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"niveau\" value=\"Intermediaire\" class=\"peer hidden\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-orange-500 peer-checked:bg-orange-500/20 transition-all text-center\">
                                <div class=\"w-3 h-3 rounded-full bg-orange-500 mx-auto mb-2\"></div>
                                <p class=\"text-sm font-medium\">Intermediaire</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"niveau\" value=\"Avance\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-green-500 peer-checked:bg-green-500/20 transition-all text-center\">
                                <div class=\"w-3 h-3 rounded-full bg-green-500 mx-auto mb-2\"></div>
                                <p class=\"text-sm font-medium\">Avance</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description (optionnel)</label>
                    <textarea name=\"description\" rows=\"3\" placeholder=\"Decrivez votre experience avec ce skill...\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\"></textarea>
                </div>
                
                <!-- Auto-evaluation -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Auto-evaluation (%)</label>
                    <input type=\"range\" name=\"evaluation\" min=\"0\" max=\"100\" value=\"50\" class=\"w-full h-2 bg-secondary rounded-lg appearance-none cursor-pointer accent-primary\" oninput=\"document.getElementById('evalValue').textContent = this.value + '%'\">
                    <div class=\"flex justify-between text-xs text-muted-foreground mt-2\">
                        <span>Debutant</span>
                        <span id=\"evalValue\" class=\"text-primary font-medium\">50%</span>
                        <span>Expert</span>
                    </div>
                </div>
                
                <!-- Submit -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"{{ path('app_skills_mes') }}\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Ajouter le skill
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "skill/ajouter.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\skill\\ajouter.html.twig");
    }
}
