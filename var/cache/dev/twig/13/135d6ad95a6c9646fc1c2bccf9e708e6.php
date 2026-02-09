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

/* front/marketplace/categories/index.html.twig */
class __TwigTemplate_42a0140e82d1b64b9e1118322bcbb2ba extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/marketplace/categories/index.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
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

        yield "Catégories - Marketplace";
        
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
        yield "<div class=\"max-w-4xl mx-auto p-6\">
    <h1 class=\"text-2xl font-semibold mb-4\">Gestion des catégories</h1>

    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_categorie_ajouter");
        yield "\" class=\"inline-block mb-4 px-4 py-2 bg-primary text-primary-foreground rounded\">Ajouter une catégorie</a>

    <div class=\"space-y-3\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 13
            yield "            <div class=\"p-4 border rounded flex justify-between items-start\">
                <div>
                    <div class=\"font-medium\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "getNomCategorie", [], "method", false, false, false, 15), "html", null, true);
            yield "</div>
                    <div class=\"text-sm text-muted\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "getDescriptionCategorie", [], "method", false, false, false, 16), "html", null, true);
            yield "</div>
                </div>
                <div class=\"flex items-center gap-2\">
                    <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_categorie_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "getId", [], "method", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"px-3 py-1 border rounded\">Modifier</a>

                    <form method=\"post\" action=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_categorie_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "getId", [], "method", false, false, false, 21)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("supprimer_categorie_" . CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "getId", [], "method", false, false, false, 22))), "html", null, true);
            yield "\">
                        <button class=\"px-3 py-1 bg-red-500 text-white rounded\">Supprimer</button>
                    </form>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 27
        if (!$context['_iterated']) {
            // line 28
            yield "            <div class=\"p-4 border rounded\">Aucune catégorie trouvée.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </div>
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
        return "front/marketplace/categories/index.html.twig";
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
        return array (  158 => 30,  151 => 28,  149 => 27,  139 => 22,  135 => 21,  130 => 19,  124 => 16,  120 => 15,  116 => 13,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Catégories - Marketplace{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto p-6\">
    <h1 class=\"text-2xl font-semibold mb-4\">Gestion des catégories</h1>

    <a href=\"{{ path('app_marketplace_categorie_ajouter') }}\" class=\"inline-block mb-4 px-4 py-2 bg-primary text-primary-foreground rounded\">Ajouter une catégorie</a>

    <div class=\"space-y-3\">
        {% for cat in categories %}
            <div class=\"p-4 border rounded flex justify-between items-start\">
                <div>
                    <div class=\"font-medium\">{{ cat.getNomCategorie() }}</div>
                    <div class=\"text-sm text-muted\">{{ cat.getDescriptionCategorie() }}</div>
                </div>
                <div class=\"flex items-center gap-2\">
                    <a href=\"{{ path('app_marketplace_categorie_modifier', {'id': cat.getId()}) }}\" class=\"px-3 py-1 border rounded\">Modifier</a>

                    <form method=\"post\" action=\"{{ path('app_marketplace_categorie_supprimer', {'id': cat.getId()}) }}\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('supprimer_categorie_' ~ cat.getId()) }}\">
                        <button class=\"px-3 py-1 bg-red-500 text-white rounded\">Supprimer</button>
                    </form>
                </div>
            </div>
        {% else %}
            <div class=\"p-4 border rounded\">Aucune catégorie trouvée.</div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "front/marketplace/categories/index.html.twig", "C:\\Users\\khali\\projet_web_java_novas\\templates\\front\\marketplace\\categories\\index.html.twig");
    }
}
