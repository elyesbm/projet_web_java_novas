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

/* front/skill/ajouter.html.twig */
class __TwigTemplate_028223cef87c63860598d25c7700db05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/skill/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/skill/ajouter.html.twig"));

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
                <span class=\"text-sm\">Retour à mes skills</span>
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
                <p class=\"text-muted-foreground\">Identifiez et ajoutez une compétence à votre profil</p>
            </div>
            
            ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["class" => "glass-card rounded-3xl p-8 space-y-6", "id" => "skill-form", "novalidate" => "novalidate"]]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom_skill", [], "any", false, false, false, 38), 'row');
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "contexte_skill", [], "any", false, false, false, 39), 'row');
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40), 'row');
        yield "
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description_skill", [], "any", false, false, false, 41), 'row');
        yield "
                
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_mes");
        yield "\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Ajouter le skill
                    </button>
                </div>
            ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "

            <!-- Container pour les notifications -->
            <div id=\"toast-container\" class=\"fixed bottom-6 right-6 z-50 space-y-3 pointer-events-none\"></div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const form = document.getElementById('skill-form');
                    if (!form) return;

                    const nomInput = document.getElementById('";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nom_skill", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        yield "');
                    const categorieInput = document.getElementById('";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "categorie", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "');
                    const contexteInput = document.getElementById('";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "contexte_skill", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "');
                    const descriptionInput = document.getElementById('";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description_skill", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "');

                    function showToast(message, type = 'error') {
                        const container = document.getElementById('toast-container');
                        if (!container) return;

                        const toast = document.createElement('div');
                        const colors = {
                            success: 'bg-emerald-500',
                            error: 'bg-red-600',
                            warning: 'bg-amber-500',
                            info: 'bg-blue-500',
                        };

                        toast.className = 'pointer-events-auto flex items-center gap-3 px-6 py-4 rounded-xl shadow-lg text-white transform translate-x-full transition-transform duration-300 ' + (colors[type] || colors.error);
                        toast.innerHTML = `
                            <i data-lucide=\"\${type === 'success' ? 'check-circle' : type === 'warning' ? 'alert-triangle' : type === 'info' ? 'info' : 'x-circle'}\" class=\"w-5 h-5\"></i>
                            <span class=\"font-medium text-sm\">\${message}</span>
                        `;

                        container.appendChild(toast);
                        if (window.lucide) {
                            window.lucide.createIcons();
                        }

                        // Animation d'apparition
                        requestAnimationFrame(() => {
                            toast.classList.remove('translate-x-full');
                        });

                        // Disparition automatique
                        setTimeout(() => {
                            toast.classList.add('translate-x-full');
                            setTimeout(() => toast.remove(), 300);
                        }, 4000);
                    }

                    form.addEventListener('submit', function (e) {
                        const errors = [];

                        const nom = nomInput.value.trim();
                        const categorie = categorieInput.value;
                        const contexte = contexteInput.value;
                        const description = descriptionInput.value.trim();

                        // Nom du skill
                        if (!nom) {
                            errors.push('Le nom du skill est obligatoire.');
                        } else if (nom.length < 3) {
                            errors.push('Le nom du skill doit contenir au moins 3 caractères.');
                        } else if (nom.length > 255) {
                            errors.push('Le nom du skill ne peut pas dépasser 255 caractères.');
                        }

                        // Catégorie
                        if (!categorie) {
                            errors.push('La catégorie est obligatoire.');
                        }

                        // Type de compétence
                        if (!contexte) {
                            errors.push('Le type de compétence est obligatoire.');
                        }

                        // Description (optionnelle mais limitée)
                        if (description.length > 255) {
                            errors.push('La description ne peut pas dépasser 255 caractères.');
                        }

                        if (errors.length > 0) {
                            e.preventDefault();
                            errors.forEach(message => showToast(message, 'error'));
                        }
                    });
                });
            </script>
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
        return "front/skill/ajouter.html.twig";
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
        return array (  194 => 65,  190 => 64,  186 => 63,  182 => 62,  169 => 52,  158 => 44,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

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
                <span class=\"text-sm\">Retour à mes skills</span>
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
                <p class=\"text-muted-foreground\">Identifiez et ajoutez une compétence à votre profil</p>
            </div>
            
            {{ form_start(form, { 'attr': { 'class': 'glass-card rounded-3xl p-8 space-y-6', 'id': 'skill-form', 'novalidate': 'novalidate' } }) }}
                {{ form_row(form.nom_skill) }}
                {{ form_row(form.contexte_skill) }}
                {{ form_row(form.categorie) }}
                {{ form_row(form.description_skill) }}
                
                <div class=\"flex gap-4 pt-4\">
                    <a href=\"{{ path('app_skills_mes') }}\" class=\"flex-1 h-14 bg-secondary border border-white/10 rounded-xl font-medium flex items-center justify-center hover:bg-white/5 transition-colors\">
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"flex-1 h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2\">
                        <i data-lucide=\"check\" class=\"w-5 h-5\"></i>
                        Ajouter le skill
                    </button>
                </div>
            {{ form_end(form) }}

            <!-- Container pour les notifications -->
            <div id=\"toast-container\" class=\"fixed bottom-6 right-6 z-50 space-y-3 pointer-events-none\"></div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const form = document.getElementById('skill-form');
                    if (!form) return;

                    const nomInput = document.getElementById('{{ form.nom_skill.vars.id }}');
                    const categorieInput = document.getElementById('{{ form.categorie.vars.id }}');
                    const contexteInput = document.getElementById('{{ form.contexte_skill.vars.id }}');
                    const descriptionInput = document.getElementById('{{ form.description_skill.vars.id }}');

                    function showToast(message, type = 'error') {
                        const container = document.getElementById('toast-container');
                        if (!container) return;

                        const toast = document.createElement('div');
                        const colors = {
                            success: 'bg-emerald-500',
                            error: 'bg-red-600',
                            warning: 'bg-amber-500',
                            info: 'bg-blue-500',
                        };

                        toast.className = 'pointer-events-auto flex items-center gap-3 px-6 py-4 rounded-xl shadow-lg text-white transform translate-x-full transition-transform duration-300 ' + (colors[type] || colors.error);
                        toast.innerHTML = `
                            <i data-lucide=\"\${type === 'success' ? 'check-circle' : type === 'warning' ? 'alert-triangle' : type === 'info' ? 'info' : 'x-circle'}\" class=\"w-5 h-5\"></i>
                            <span class=\"font-medium text-sm\">\${message}</span>
                        `;

                        container.appendChild(toast);
                        if (window.lucide) {
                            window.lucide.createIcons();
                        }

                        // Animation d'apparition
                        requestAnimationFrame(() => {
                            toast.classList.remove('translate-x-full');
                        });

                        // Disparition automatique
                        setTimeout(() => {
                            toast.classList.add('translate-x-full');
                            setTimeout(() => toast.remove(), 300);
                        }, 4000);
                    }

                    form.addEventListener('submit', function (e) {
                        const errors = [];

                        const nom = nomInput.value.trim();
                        const categorie = categorieInput.value;
                        const contexte = contexteInput.value;
                        const description = descriptionInput.value.trim();

                        // Nom du skill
                        if (!nom) {
                            errors.push('Le nom du skill est obligatoire.');
                        } else if (nom.length < 3) {
                            errors.push('Le nom du skill doit contenir au moins 3 caractères.');
                        } else if (nom.length > 255) {
                            errors.push('Le nom du skill ne peut pas dépasser 255 caractères.');
                        }

                        // Catégorie
                        if (!categorie) {
                            errors.push('La catégorie est obligatoire.');
                        }

                        // Type de compétence
                        if (!contexte) {
                            errors.push('Le type de compétence est obligatoire.');
                        }

                        // Description (optionnelle mais limitée)
                        if (description.length > 255) {
                            errors.push('La description ne peut pas dépasser 255 caractères.');
                        }

                        if (errors.length > 0) {
                            e.preventDefault();
                            errors.forEach(message => showToast(message, 'error'));
                        }
                    });
                });
            </script>
        </div>
    </div>
</div>
{% endblock %}
", "front/skill/ajouter.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\front\\skill\\ajouter.html.twig");
    }
}
