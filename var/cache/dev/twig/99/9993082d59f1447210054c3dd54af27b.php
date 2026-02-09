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

/* front/marketplace/ajouter_public.html.twig */
class __TwigTemplate_8940686ea4fe1035b210156d4195b4d3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/ajouter_public.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/ajouter_public.html.twig"));

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

        yield "Nouvelle Annonce (publique) - Marketplace";
        
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
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"plus-circle\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Ajouter un produit (publique)</h1>
                <p class=\"text-muted-foreground\">Ce formulaire permet d'ajouter un article sans se connecter. L'annonce sera publiée sans auteur.</p>
            </div>

            <form method=\"post\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_ajouter_public");
        yield "\" enctype=\"multipart/form-data\" class=\"glass-card rounded-3xl p-8 space-y-6\">
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Image (choisir un fichier depuis votre PC)</label>
                    <input type=\"file\" name=\"image\" accept=\"image/*\" class=\"w-full bg-secondary border border-white/10 rounded-xl px-4 py-2\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Categorie</label>
                    <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4\">
                        <option value=\"\">Selectionnez une categorie</option>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 29
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 29), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                    </select>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre</label>
                    <input type=\"text\" name=\"titre\" required class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description</label>
                    <textarea name=\"contenu\" rows=\"5\" required class=\"w-full bg-secondary border rounded-xl p-4 resize-none\"></textarea>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prix (€)</label>
                    <input type=\"number\" name=\"prix\" required min=\"0\" class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Type</label>
                    <select name=\"type\" class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                        <option value=\"academic\">Academic</option>
                        <option value=\"personnel\">Personal</option>
                    </select>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Statut</label>
                    <select name=\"statut\" class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                        <option value=\"disponible\">Disponible</option>
                        <option value=\"reserve\">Réservé</option>
                        <option value=\"vendu\">Vendu</option>
                    </select>
                </div>

                <div class=\"flex gap-4 pt-4\">
                    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"flex-1 h-14 bg-secondary border rounded-xl flex items-center justify-center\">Annuler</a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl\">Publier (publique)</button>
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

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", ["success"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 78
            yield "        <script>
            // Fallback redirect in case server rendered the same page with a success flash
            window.location.href = \"";
            // line 80
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
            yield "\";
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/marketplace/ajouter_public.html.twig";
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
        return array (  222 => 80,  218 => 78,  213 => 77,  200 => 76,  181 => 67,  143 => 31,  132 => 29,  128 => 28,  115 => 18,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Nouvelle Annonce (publique) - Marketplace{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"pt-32 pb-24 px-6\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"plus-circle\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Ajouter un produit (publique)</h1>
                <p class=\"text-muted-foreground\">Ce formulaire permet d'ajouter un article sans se connecter. L'annonce sera publiée sans auteur.</p>
            </div>

            <form method=\"post\" action=\"{{ path('app_marketplace_ajouter_public') }}\" enctype=\"multipart/form-data\" class=\"glass-card rounded-3xl p-8 space-y-6\">
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Image (choisir un fichier depuis votre PC)</label>
                    <input type=\"file\" name=\"image\" accept=\"image/*\" class=\"w-full bg-secondary border border-white/10 rounded-xl px-4 py-2\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Categorie</label>
                    <select name=\"categorie\" required class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4\">
                        <option value=\"\">Selectionnez une categorie</option>
                        {% for cat in categories %}
                            <option value=\"{{ cat.id }}\">{{ cat.nom }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre</label>
                    <input type=\"text\" name=\"titre\" required class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Description</label>
                    <textarea name=\"contenu\" rows=\"5\" required class=\"w-full bg-secondary border rounded-xl p-4 resize-none\"></textarea>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Prix (€)</label>
                    <input type=\"number\" name=\"prix\" required min=\"0\" class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Type</label>
                    <select name=\"type\" class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                        <option value=\"academic\">Academic</option>
                        <option value=\"personnel\">Personal</option>
                    </select>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Statut</label>
                    <select name=\"statut\" class=\"w-full h-14 bg-secondary border rounded-xl px-4\">
                        <option value=\"disponible\">Disponible</option>
                        <option value=\"reserve\">Réservé</option>
                        <option value=\"vendu\">Vendu</option>
                    </select>
                </div>

                <div class=\"flex gap-4 pt-4\">
                    <a href=\"{{ path('app_marketplace_index') }}\" class=\"flex-1 h-14 bg-secondary border rounded-xl flex items-center justify-center\">Annuler</a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl\">Publier (publique)</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {% for flash in app.flashes('success') %}
        <script>
            // Fallback redirect in case server rendered the same page with a success flash
            window.location.href = \"{{ path('app_marketplace_index') }}\";
        </script>
    {% endfor %}
{% endblock %}
", "front/marketplace/ajouter_public.html.twig", "C:\\Users\\khali\\projet_web_java_novas\\templates\\front\\marketplace\\ajouter_public.html.twig");
    }
}
