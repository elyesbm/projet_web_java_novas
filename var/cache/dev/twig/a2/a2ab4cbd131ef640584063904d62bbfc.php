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

/* front/marketplace/modifier.html.twig */
class __TwigTemplate_a01ff5c7a32abede6150350fbcc67bc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/modifier.html.twig"));

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

        yield "Modifier l'annonce - EduVie Marketplace";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux produits</span>
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"edit-2\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Modifier l'annonce</h1>
                <p class=\"text-muted-foreground\">Mettez à jour les informations de votre article</p>
            </div>
            
            <form method=\"post\" class=\"glass-card rounded-3xl p-8 space-y-6\">
                <!-- Type -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Type d'article</label>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"academic\" class=\"peer hidden\" ";
        // line 36
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "typeArticle", [], "any", false, false, false, 36) == "academic")) ? ("checked") : (""));
        yield ">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-academic peer-checked:bg-academic/20 transition-all text-center\">
                                <i data-lucide=\"graduation-cap\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Academic</p>
                                <p class=\"text-xs text-muted-foreground\">Livres, fournitures...</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"personnel\" class=\"peer hidden\" ";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "typeArticle", [], "any", false, false, false, 44) == "personnel")) ? ("checked") : (""));
        yield ">
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-personal peer-checked:bg-personal/20 transition-all text-center\">
                                <i data-lucide=\"user\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Personal</p>
                                <p class=\"text-xs text-muted-foreground\">Électronique, mobilier...</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Catégorie -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Catégorie</label>
                    <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                        <option value=\"\">Sélectionnez une catégorie</option>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 60
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "categorie", [], "any", false, false, false, 60) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "categorie", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 60)))) ? ("selected") : (""));
            yield ">
                                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 61), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                    </select>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre de l'annonce</label>
                    <input type=\"text\" name=\"titre\" required value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 70, $this->source); })()), "titreArticle", [], "any", false, false, false, 70), "html", null, true);
        yield "\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>

                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description</label>
                    <textarea name=\"contenu\" rows=\"5\" required class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 76, $this->source); })()), "contenueArticle", [], "any", false, false, false, 76), "html", null, true);
        yield "</textarea>
                </div>

                <!-- Prix -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prix (€)</label>
                    <div class=\"relative\">
                        <input type=\"number\" name=\"prix\" required min=\"0\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 83, $this->source); })()), "prixArticle", [], "any", false, false, false, 83), "html", null, true);
        yield "\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 focus:outline-none focus:border-primary transition-all text-2xl font-bold\">
                        <span class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground font-medium\">€</span>
                    </div>
                </div>

                <!-- Statut -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Statut</label>
                    <select name=\"statut\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                        <option value=\"disponible\" ";
        // line 92
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 92, $this->source); })()), "statutArticle", [], "any", false, false, false, 92) == "disponible")) ? ("selected") : (""));
        yield ">Disponible</option>
                        <option value=\"reserve\" ";
        // line 93
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 93, $this->source); })()), "statutArticle", [], "any", false, false, false, 93) == "reserve")) ? ("selected") : (""));
        yield ">Réservé</option>
                        <option value=\"vendu\" ";
        // line 94
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 94, $this->source); })()), "statutArticle", [], "any", false, false, false, 94) == "vendu")) ? ("selected") : (""));
        yield ">Vendu</option>
                    </select>
                </div>

                <!-- Image -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Image (nom du fichier)</label>
                    <input type=\"text\" name=\"image_article\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 101, $this->source); })()), "imageArticle", [], "any", false, false, false, 101), "html", null, true);
        yield "\" placeholder=\"skills-learning.jpg\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                </div>

                <!-- Submit -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Enregistrer les modifications
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
        return "front/marketplace/modifier.html.twig";
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
        return array (  249 => 106,  241 => 101,  231 => 94,  227 => 93,  223 => 92,  211 => 83,  201 => 76,  192 => 70,  184 => 64,  175 => 61,  168 => 60,  164 => 59,  146 => 44,  135 => 36,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Modifier l'annonce - EduVie Marketplace{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    
    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_marketplace_index') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux produits</span>
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"edit-2\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Modifier l'annonce</h1>
                <p class=\"text-muted-foreground\">Mettez à jour les informations de votre article</p>
            </div>
            
            <form method=\"post\" class=\"glass-card rounded-3xl p-8 space-y-6\">
                <!-- Type -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Type d'article</label>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"academic\" class=\"peer hidden\" {{ article.typeArticle == 'academic' ? 'checked' : '' }}>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-academic peer-checked:bg-academic/20 transition-all text-center\">
                                <i data-lucide=\"graduation-cap\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Academic</p>
                                <p class=\"text-xs text-muted-foreground\">Livres, fournitures...</p>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"personnel\" class=\"peer hidden\" {{ article.typeArticle == 'personnel' ? 'checked' : '' }}>
                            <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-personal peer-checked:bg-personal/20 transition-all text-center\">
                                <i data-lucide=\"user\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                <p class=\"font-medium\">Personal</p>
                                <p class=\"text-xs text-muted-foreground\">Électronique, mobilier...</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Catégorie -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Catégorie</label>
                    <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                        <option value=\"\">Sélectionnez une catégorie</option>
                        {% for cat in categories %}
                            <option value=\"{{ cat.id }}\" {{ article.categorie and article.categorie.id == cat.id ? 'selected' : '' }}>
                                {{ cat.nom }}
                            </option>
                        {% endfor %}
                    </select>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre de l'annonce</label>
                    <input type=\"text\" name=\"titre\" required value=\"{{ article.titreArticle }}\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50\">
                </div>

                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description</label>
                    <textarea name=\"contenu\" rows=\"5\" required class=\"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\">{{ article.contenueArticle }}</textarea>
                </div>

                <!-- Prix -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prix (€)</label>
                    <div class=\"relative\">
                        <input type=\"number\" name=\"prix\" required min=\"0\" value=\"{{ article.prixArticle }}\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-4 pr-12 focus:outline-none focus:border-primary transition-all text-2xl font-bold\">
                        <span class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground font-medium\">€</span>
                    </div>
                </div>

                <!-- Statut -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Statut</label>
                    <select name=\"statut\" class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                        <option value=\"disponible\" {{ article.statutArticle == 'disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value=\"reserve\" {{ article.statutArticle == 'reserve' ? 'selected' : '' }}>Réservé</option>
                        <option value=\"vendu\" {{ article.statutArticle == 'vendu' ? 'selected' : '' }}>Vendu</option>
                    </select>
                </div>

                <!-- Image -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Image (nom du fichier)</label>
                    <input type=\"text\" name=\"image_article\" value=\"{{ article.imageArticle }}\" placeholder=\"skills-learning.jpg\" class=\"w-full h-12 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all\">
                </div>

                <!-- Submit -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"{{ path('app_marketplace_index') }}\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

", "front/marketplace/modifier.html.twig", "C:\\Users\\khali\\projet_web_java_novas\\templates\\front\\marketplace\\modifier.html.twig");
    }
}
