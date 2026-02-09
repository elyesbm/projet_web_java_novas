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

/* front/marketplace/index.html.twig */
class __TwigTemplate_eb7c8361ac3e87aa9b89d1307a32e329 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/index.html.twig"));

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

        yield "Marketplace - EduVie";
        
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
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"shopping-bag\" class=\"w-4 h-4\"></i>
                    Produits
                </a>
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_ajouter_public");
        yield "\" class=\"flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Ajouter un produit
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero + Ajouter produit -->
    <section class=\"pt-32 pb-8 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"max-w-7xl mx-auto relative flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6\">
            <div>
                <h1 class=\"font-serif text-3xl md:text-4xl font-medium mb-2\">Produits</h1>
                <p class=\"text-muted-foreground\">Gérez les articles de la marketplace.</p>
            </div>
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_ajouter_public");
        yield "\" class=\"flex items-center justify-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 w-fit\">
                <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                Ajouter un produit (article)
            </a>
        </div>
    </section>

    <!-- Liste des produits -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["success"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 49
            yield "                <div class=\"mb-4 p-4 rounded-xl bg-green-500/20 text-green-400 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", ["error"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 52
            yield "                <div class=\"mb-4 p-4 rounded-xl bg-red-500/20 text-red-400 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "
            ";
        // line 55
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 55, $this->source); })()))) {
            // line 56
            yield "                <div class=\"glass-card rounded-2xl p-12 text-center\">
                    <i data-lucide=\"package\" class=\"w-16 h-16 text-muted-foreground mx-auto mb-4\"></i>
                    <p class=\"text-muted-foreground mb-4\">Aucun produit pour le moment.</p>
                    <a href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_ajouter_public");
            yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90\">
                        <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                        Ajouter un produit
                    </a>
                </div>
            ";
        } else {
            // line 65
            yield "                <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 67
                yield "                    <div class=\"group glass-card rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300\">
                        <div class=\"relative h-48 overflow-hidden\">
                            <img src=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 69))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 69), "html", null, true);
                yield "\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-500\">
                            <div class=\"absolute top-3 left-3\">
                                <span class=\"px-2 py-1 rounded-lg text-xs font-medium ";
                // line 71
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 71) == "academic")) ? ("bg-academic/90 text-white") : ("bg-personal/90 text-white"));
                yield "\">
                                    ";
                // line 72
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 72) == "academic")) ? ("Academic") : ("Personal"));
                yield "
                                </span>
                            </div>
                            ";
                // line 75
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 75) != "disponible")) {
                    // line 76
                    yield "                            <div class=\"absolute top-3 right-3\">
                                <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-secondary\">";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 77), "html", null, true);
                    yield "</span>
                            </div>
                            ";
                }
                // line 80
                yield "                        </div>
                        <div class=\"p-4\">
                            <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-2\">
                                <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                                ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84), "html", null, true);
                yield "
                            </div>
                            <h3 class=\"font-medium mb-2 line-clamp-2\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 86), "html", null, true);
                yield "</h3>
                            <p class=\"font-serif text-xl font-bold text-primary mb-4\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 87), "html", null, true);
                yield " €</p>
                            <div class=\"flex items-center gap-2 pt-3 border-t border-white/5\">
                                <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" class=\"flex-1 h-10 rounded-xl bg-secondary border border-white/10 flex items-center justify-center gap-2 text-sm hover:bg-white/5 transition-colors\" title=\"Voir\">
                                    <i data-lucide=\"eye\" class=\"w-4 h-4\"></i>
                                    Voir
                                </a>
                                <a href=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                yield "\" class=\"flex-1 h-10 rounded-xl bg-secondary border border-white/10 flex items-center justify-center gap-2 text-sm hover:bg-primary/20 text-primary transition-colors\" title=\"Modifier\">
                                    <i data-lucide=\"edit-2\" class=\"w-4 h-4\"></i>
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce produit ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("supprimer_article_" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 98))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"h-10 w-10 rounded-xl bg-secondary border border-white/10 flex items-center justify-center hover:bg-red-500/20 text-red-400 transition-colors\" title=\"Supprimer\">
                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "                </div>
            ";
        }
        // line 109
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
        return "front/marketplace/index.html.twig";
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
        return array (  298 => 109,  294 => 107,  279 => 98,  275 => 97,  268 => 93,  261 => 89,  256 => 87,  252 => 86,  247 => 84,  241 => 80,  235 => 77,  232 => 76,  230 => 75,  224 => 72,  220 => 71,  213 => 69,  209 => 67,  205 => 66,  202 => 65,  193 => 59,  188 => 56,  186 => 55,  183 => 54,  174 => 52,  169 => 51,  160 => 49,  156 => 48,  143 => 38,  124 => 22,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Marketplace - EduVie{% endblock %}

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
                <a href=\"{{ path('app_marketplace_index') }}\" class=\"flex items-center gap-2 px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    <i data-lucide=\"shopping-bag\" class=\"w-4 h-4\"></i>
                    Produits
                </a>
                <a href=\"{{ path('app_marketplace_ajouter_public') }}\" class=\"flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25\">
                    <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                    Ajouter un produit
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero + Ajouter produit -->
    <section class=\"pt-32 pb-8 px-6 relative overflow-hidden\">
        <div class=\"absolute inset-0 gradient-orb\"></div>
        <div class=\"max-w-7xl mx-auto relative flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6\">
            <div>
                <h1 class=\"font-serif text-3xl md:text-4xl font-medium mb-2\">Produits</h1>
                <p class=\"text-muted-foreground\">Gérez les articles de la marketplace.</p>
            </div>
            <a href=\"{{ path('app_marketplace_ajouter_public') }}\" class=\"flex items-center justify-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 w-fit\">
                <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                Ajouter un produit (article)
            </a>
        </div>
    </section>

    <!-- Liste des produits -->
    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto\">
            {% for flash in app.flashes('success') %}
                <div class=\"mb-4 p-4 rounded-xl bg-green-500/20 text-green-400 text-sm\">{{ flash }}</div>
            {% endfor %}
            {% for flash in app.flashes('error') %}
                <div class=\"mb-4 p-4 rounded-xl bg-red-500/20 text-red-400 text-sm\">{{ flash }}</div>
            {% endfor %}

            {% if articles is empty %}
                <div class=\"glass-card rounded-2xl p-12 text-center\">
                    <i data-lucide=\"package\" class=\"w-16 h-16 text-muted-foreground mx-auto mb-4\"></i>
                    <p class=\"text-muted-foreground mb-4\">Aucun produit pour le moment.</p>
                    <a href=\"{{ path('app_marketplace_ajouter_public') }}\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-xl font-medium hover:bg-primary/90\">
                        <i data-lucide=\"plus\" class=\"w-5 h-5\"></i>
                        Ajouter un produit
                    </a>
                </div>
            {% else %}
                <div class=\"grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                    {% for article in articles %}
                    <div class=\"group glass-card rounded-2xl overflow-hidden hover:border-primary/30 transition-all duration-300\">
                        <div class=\"relative h-48 overflow-hidden\">
                            <img src=\"{{ asset('images/' ~ article.image) }}\" alt=\"{{ article.titre }}\" class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-500\">
                            <div class=\"absolute top-3 left-3\">
                                <span class=\"px-2 py-1 rounded-lg text-xs font-medium {{ article.type == 'academic' ? 'bg-academic/90 text-white' : 'bg-personal/90 text-white' }}\">
                                    {{ article.type == 'academic' ? 'Academic' : 'Personal' }}
                                </span>
                            </div>
                            {% if article.statut != 'disponible' %}
                            <div class=\"absolute top-3 right-3\">
                                <span class=\"px-2 py-1 rounded-lg text-xs font-medium bg-secondary\">{{ article.statut }}</span>
                            </div>
                            {% endif %}
                        </div>
                        <div class=\"p-4\">
                            <div class=\"flex items-center gap-2 text-xs text-muted-foreground mb-2\">
                                <i data-lucide=\"folder\" class=\"w-3 h-3\"></i>
                                {{ article.categorie.nom }}
                            </div>
                            <h3 class=\"font-medium mb-2 line-clamp-2\">{{ article.titre }}</h3>
                            <p class=\"font-serif text-xl font-bold text-primary mb-4\">{{ article.prix }} €</p>
                            <div class=\"flex items-center gap-2 pt-3 border-t border-white/5\">
                                <a href=\"{{ path('app_marketplace_detail', {id: article.id}) }}\" class=\"flex-1 h-10 rounded-xl bg-secondary border border-white/10 flex items-center justify-center gap-2 text-sm hover:bg-white/5 transition-colors\" title=\"Voir\">
                                    <i data-lucide=\"eye\" class=\"w-4 h-4\"></i>
                                    Voir
                                </a>
                                <a href=\"{{ path('app_marketplace_modifier', {id: article.id}) }}\" class=\"flex-1 h-10 rounded-xl bg-secondary border border-white/10 flex items-center justify-center gap-2 text-sm hover:bg-primary/20 text-primary transition-colors\" title=\"Modifier\">
                                    <i data-lucide=\"edit-2\" class=\"w-4 h-4\"></i>
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('app_marketplace_supprimer', {id: article.id}) }}\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce produit ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('supprimer_article_' ~ article.id) }}\">
                                    <button type=\"submit\" class=\"h-10 w-10 rounded-xl bg-secondary border border-white/10 flex items-center justify-center hover:bg-red-500/20 text-red-400 transition-colors\" title=\"Supprimer\">
                                        <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </section>
</div>
{% endblock %}", "front/marketplace/index.html.twig", "C:\\Users\\khali\\projet_web_java_novas\\templates\\front\\marketplace\\index.html.twig");
    }
}
