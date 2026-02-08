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

/* front/publication/nouvelle.html.twig */
class __TwigTemplate_75b385c800662d5cd543d5e694dcd6a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication/nouvelle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication/nouvelle.html.twig"));

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

        yield "Nouvelle Publication - NoVas";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index");
        yield "\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux publications</span>
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
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"edit-3\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Nouvelle publication</h1>
                <p class=\"text-muted-foreground\">Partagez votre experience ou posez une question a la communaute</p>
            </div>

            ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["class" => "glass-card rounded-3xl p-8 space-y-6"]]);
        yield "

                ";
        // line 40
        yield "                ";
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                    <div class=\"p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-sm text-red-200\">
                        ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'errors');
            yield "
                    </div>
                ";
        }
        // line 45
        yield "
                <!-- Contexte -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Contexte de votre publication</label>

                    <div class=\"grid grid-cols-2 gap-4\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "contexte", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 52
            yield "                            <label class=\"cursor-pointer\">
                                ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "peer hidden"]]);
            yield "

                                <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-primary peer-checked:bg-primary/10 transition-all text-center\">
                                    ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56) == 1)) {
                // line 57
                yield "                                        <i data-lucide=\"graduation-cap\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                        <p class=\"font-medium text-sm\">Academic</p>
                                    ";
            } else {
                // line 60
                yield "                                        <i data-lucide=\"heart\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                        <p class=\"font-medium text-sm\">Personal</p>
                                    ";
            }
            // line 63
            yield "                                </div>
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                    </div>

                    <div class=\"mt-2 text-xs text-red-400\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "contexte", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre</label>
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "titre", [], "any", false, false, false, 74), 'widget', ["attr" => ["placeholder" => "Resumez votre publication en une phrase accrocheuse...", "class" => "w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 text-lg font-medium focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50 placeholder:font-normal"]]);
        // line 79
        yield "
                    <div class=\"mt-2 text-xs text-red-400\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "titre", [], "any", false, false, false, 80), 'errors');
        yield "</div>
                </div>

                <!-- Contenu -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Contenu</label>
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "contenu", [], "any", false, false, false, 86), 'widget', ["attr" => ["rows" => 8, "placeholder" => "Decrivez votre question, experience ou partage en detail...", "class" => "w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50"]]);
        // line 92
        yield "
                    <div class=\"flex justify-between mt-2\">
                        <p class=\"text-xs text-muted-foreground\">Soyez respectueux et constructif</p>
                        <p class=\"text-xs text-muted-foreground\">0 / 2000 caracteres</p>
                    </div>
                    <div class=\"mt-2 text-xs text-red-400\">";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "contenu", [], "any", false, false, false, 97), 'errors');
        yield "</div>
                </div>

                <!-- Options -->
                <div class=\"flex items-center gap-4 p-4 bg-secondary/50 rounded-xl\">
                    <label class=\"flex items-center gap-3 cursor-pointer\">
                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "anonyme", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary"]]);
        yield "
                        <span class=\"text-sm text-muted-foreground\">Publier anonymement</span>
                    </label>
                </div>

                <!-- Actions -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index");
        yield "\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"send\" class=\"w-5 h-5\"></i>
                        Publier
                    </button>
                </div>

            ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        yield "
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
        return "front/publication/nouvelle.html.twig";
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
        return array (  261 => 119,  249 => 110,  239 => 103,  230 => 97,  223 => 92,  221 => 86,  212 => 80,  209 => 79,  207 => 74,  198 => 68,  194 => 66,  186 => 63,  181 => 60,  176 => 57,  174 => 56,  168 => 53,  165 => 52,  161 => 51,  153 => 45,  147 => 42,  144 => 41,  141 => 40,  136 => 37,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Nouvelle Publication - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background relative overflow-hidden\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>

    <!-- Navigation -->
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_publications_index') }}\" class=\"flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
                <span class=\"text-sm\">Retour aux publications</span>
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
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/20 mb-4\">
                    <i data-lucide=\"edit-3\" class=\"w-8 h-8 text-primary\"></i>
                </div>
                <h1 class=\"font-serif text-3xl font-medium mb-2\">Nouvelle publication</h1>
                <p class=\"text-muted-foreground\">Partagez votre experience ou posez une question a la communaute</p>
            </div>

            {{ form_start(form, { attr: { class: 'glass-card rounded-3xl p-8 space-y-6' } }) }}

                {# erreurs globales #}
                {% if form_errors(form) %}
                    <div class=\"p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-sm text-red-200\">
                        {{ form_errors(form) }}
                    </div>
                {% endif %}

                <!-- Contexte -->
                <div>
                    <label class=\"block text-sm font-medium mb-3 text-muted-foreground\">Contexte de votre publication</label>

                    <div class=\"grid grid-cols-2 gap-4\">
                        {% for choice in form.contexte %}
                            <label class=\"cursor-pointer\">
                                {{ form_widget(choice, { attr: { class: 'peer hidden' } }) }}

                                <div class=\"p-4 rounded-xl border border-white/10 bg-secondary peer-checked:border-primary peer-checked:bg-primary/10 transition-all text-center\">
                                    {% if choice.vars.value == 1 %}
                                        <i data-lucide=\"graduation-cap\" class=\"w-8 h-8 text-academic mx-auto mb-2\"></i>
                                        <p class=\"font-medium text-sm\">Academic</p>
                                    {% else %}
                                        <i data-lucide=\"heart\" class=\"w-8 h-8 text-personal mx-auto mb-2\"></i>
                                        <p class=\"font-medium text-sm\">Personal</p>
                                    {% endif %}
                                </div>
                            </label>
                        {% endfor %}
                    </div>

                    <div class=\"mt-2 text-xs text-red-400\">{{ form_errors(form.contexte) }}</div>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Titre</label>
                    {{ form_widget(form.titre, {
                        attr: {
                            placeholder: \"Resumez votre publication en une phrase accrocheuse...\",
                            class: \"w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 text-lg font-medium focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50 placeholder:font-normal\"
                        }
                    }) }}
                    <div class=\"mt-2 text-xs text-red-400\">{{ form_errors(form.titre) }}</div>
                </div>

                <!-- Contenu -->
                <div>
                    <label class=\"block text-sm font-medium mb-2 text-muted-foreground\">Contenu</label>
                    {{ form_widget(form.contenu, {
                        attr: {
                            rows: 8,
                            placeholder: \"Decrivez votre question, experience ou partage en detail...\",
                            class: \"w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50\"
                        }
                    }) }}
                    <div class=\"flex justify-between mt-2\">
                        <p class=\"text-xs text-muted-foreground\">Soyez respectueux et constructif</p>
                        <p class=\"text-xs text-muted-foreground\">0 / 2000 caracteres</p>
                    </div>
                    <div class=\"mt-2 text-xs text-red-400\">{{ form_errors(form.contenu) }}</div>
                </div>

                <!-- Options -->
                <div class=\"flex items-center gap-4 p-4 bg-secondary/50 rounded-xl\">
                    <label class=\"flex items-center gap-3 cursor-pointer\">
                        {{ form_widget(form.anonyme, { attr: { class: \"w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary\" } }) }}
                        <span class=\"text-sm text-muted-foreground\">Publier anonymement</span>
                    </label>
                </div>

                <!-- Actions -->
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"{{ path('app_publications_index') }}\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"send\" class=\"w-5 h-5\"></i>
                        Publier
                    </button>
                </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "front/publication/nouvelle.html.twig", "D:\\pi\\projet_web_java_novas\\templates\\front\\publication\\nouvelle.html.twig");
    }
}
