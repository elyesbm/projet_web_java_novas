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

/* front/marketplace/ajouter.html.twig */
class __TwigTemplate_b2140c60c83b3927a55b727cb667b0a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/ajouter.html.twig"));

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

        yield "Nouvelle Annonce - EduVie Marketplace";
        
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
    
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_mes");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour a mes articles</span>
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"plus-circle\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Nouvelle annonce</h1>
                <p class=\"text-muted-foreground\">Vendez vos articles a la communaute etudiante</p>
            </div>
            
            <form method=\"post\" class=\"glass-card rounded-3xl p-8 space-y-6\" enctype=\"multipart/form-data\">
                <!-- Images -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Photos de l'article</label>
                    <div class=\"grid grid-cols-4 gap-4\">
                        <div class=\"aspect-square rounded-xl border-2 border-dashed border-white/10 flex flex-col items-center justify-center cursor-pointer hover:border-primary/30 transition-colors bg-secondary/30\">
                            <i data-lucide=\"camera\" class=\"w-8 h-8 text-muted-foreground mb-2\"></i>
                            <span class=\"text-xs text-muted-foreground\">Ajouter</span>
                        </div>
                    </div>
                    <p class=\"text-xs text-muted-foreground mt-2\">Jusqu'a 5 photos. Formats acceptes : JPG, PNG</p>
                </div>

                <!-- Type -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Type d'article</label>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"academic\" class=\"peer hidden\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-academic peer-checked:bg-academic/20 transition-all text-center\">
                                <i data-lucide=\"graduation-cap\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Academic</p>
                                <p class=\"text-xs text-muted-foreground\">Livres, fournitures...</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"personnel\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-personal peer-checked:bg-personal/20 transition-all text-center\">
                                <i data-lucide=\"user\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Personal</p>
                                <p class=\"text-xs text-muted-foreground\">Electronique, mobilier...</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Categorie -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Categorie</label>
                    <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                        <option value=\"\">Selectionnez une categorie</option>
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 72
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 72), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 72), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                    </select>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre de l'annonce</label>
                    <input type=\"text\" name=\"titre\" required placeholder=\"Ex: MacBook Pro M2 13 pouces\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>

                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description</label>
                    <textarea name=\"contenu\" rows=\"5\" required placeholder=\"Decrivez votre article en detail (etat, caracteristiques, raison de la vente...)\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\"></textarea>
                </div>

                <!-- Prix -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prix (€)</label>
                    <div class=\"relative\">
                        <input type=\"number\" name=\"prix\" required min=\"0\" placeholder=\"0\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 focus:outline-none focus:border-primary transition-all text-2xl font-bold\">
                        <span class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground font-medium\">€</span>
                    </div>
                    <div class=\"flex items-center gap-2 mt-3\">
                        <input type=\"checkbox\" name=\"negociable\" class=\"w-4 h-4 rounded border-white/10 bg-secondary text-primary focus:ring-primary\">
                        <span class=\"text-sm text-muted-foreground\">Prix negociable</span>
                    </div>
                </div>

                <!-- Submit -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_mes");
        yield "\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Publier l'annonce
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
        return "front/marketplace/ajouter.html.twig";
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
        return array (  217 => 104,  185 => 74,  174 => 72,  170 => 71,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Nouvelle Annonce - EduVie Marketplace{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_marketplace_mes') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour a mes articles</span>
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"plus-circle\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Nouvelle annonce</h1>
                <p class=\"text-muted-foreground\">Vendez vos articles a la communaute etudiante</p>
            </div>
            
            <form method=\"post\" class=\"glass-card rounded-3xl p-8 space-y-6\" enctype=\"multipart/form-data\">
                <!-- Images -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Photos de l'article</label>
                    <div class=\"grid grid-cols-4 gap-4\">
                        <div class=\"aspect-square rounded-xl border-2 border-dashed border-white/10 flex flex-col items-center justify-center cursor-pointer hover:border-primary/30 transition-colors bg-secondary/30\">
                            <i data-lucide=\"camera\" class=\"w-8 h-8 text-muted-foreground mb-2\"></i>
                            <span class=\"text-xs text-muted-foreground\">Ajouter</span>
                        </div>
                    </div>
                    <p class=\"text-xs text-muted-foreground mt-2\">Jusqu'a 5 photos. Formats acceptes : JPG, PNG</p>
                </div>

                <!-- Type -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Type d'article</label>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"academic\" class=\"peer hidden\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-academic peer-checked:bg-academic/20 transition-all text-center\">
                                <i data-lucide=\"graduation-cap\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Academic</p>
                                <p class=\"text-xs text-muted-foreground\">Livres, fournitures...</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"personnel\" class=\"peer hidden\">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-personal peer-checked:bg-personal/20 transition-all text-center\">
                                <i data-lucide=\"user\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Personal</p>
                                <p class=\"text-xs text-muted-foreground\">Electronique, mobilier...</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Categorie -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Categorie</label>
                    <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                        <option value=\"\">Selectionnez une categorie</option>
                        {% for cat in categories %}
                        <option value=\"{{ cat.id }}\">{{ cat.nom }}</option>
                        {% endfor %}
                    </select>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre de l'annonce</label>
                    <input type=\"text\" name=\"titre\" required placeholder=\"Ex: MacBook Pro M2 13 pouces\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>

                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description</label>
                    <textarea name=\"contenu\" rows=\"5\" required placeholder=\"Decrivez votre article en detail (etat, caracteristiques, raison de la vente...)\" class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\"></textarea>
                </div>

                <!-- Prix -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prix (€)</label>
                    <div class=\"relative\">
                        <input type=\"number\" name=\"prix\" required min=\"0\" placeholder=\"0\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 focus:outline-none focus:border-primary transition-all text-2xl font-bold\">
                        <span class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground font-medium\">€</span>
                    </div>
                    <div class=\"flex items-center gap-2 mt-3\">
                        <input type=\"checkbox\" name=\"negociable\" class=\"w-4 h-4 rounded border-white/10 bg-secondary text-primary focus:ring-primary\">
                        <span class=\"text-sm text-muted-foreground\">Prix negociable</span>
                    </div>
                </div>

                <!-- Submit -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"{{ path('app_marketplace_mes') }}\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Publier l'annonce
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "front/marketplace/ajouter.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\marketplace\\ajouter.html.twig");
    }
}
