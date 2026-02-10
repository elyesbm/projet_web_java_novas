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

/* admin/skill/form.html.twig */
class __TwigTemplate_0e6bcfbd9af48ab6564a05729415dc5f extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/skill/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/skill/form.html.twig"));

        $this->parent = $this->load("admin/base_admin.html.twig", 1);
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "create")) ? ("Nouvelle") : ("Modifier"));
        yield " compétence - NOVAS Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()) == "create")) ? ("Nouvelle compétence") : ("Modifier la compétence"));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_subtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 5, $this->source); })()) == "create")) ? ("Ajouter une compétence au catalogue") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["skill"] ?? null), "nomSkill", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 5, $this->source); })()), "nomSkill", [], "any", false, false, false, 5)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 5, $this->source); })()), "nomSkill", [], "any", false, false, false, 5), "html", null, true)) : (""))));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"max-w-4xl mx-auto\">
    <div class=\"bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-blue-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"zap\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">";
        // line 13
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 13, $this->source); })()) == "create")) ? ("Définir la compétence") : ("Modifier la compétence"));
        yield "</h2>
                <p class=\"text-blue-100\">";
        // line 14
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 14, $this->source); })()) == "create")) ? ("Créez un nouveau skill pour la communauté") : ("Modifiez les champs ci-dessous"));
        yield "</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-8\">
        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8", "id" => "admin-skill-form", "novalidate" => "novalidate"]]);
        yield "
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom_skill", [], "any", false, false, false, 23), 'label');
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom_skill", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-slate-900 dark:text-white"]]);
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom_skill", [], "any", false, false, false, 25), 'errors');
        yield "
                </div>
                <div class=\"space-y-2\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28), 'label');
        yield "
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-slate-900 dark:text-white"]]);
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "categorie", [], "any", false, false, false, 30), 'errors');
        yield "
                </div>
            </div>

            <div class=\"space-y-2\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "contexte_skill", [], "any", false, false, false, 35), 'label');
        yield "
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "contexte_skill", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-slate-900 dark:text-white"]]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "contexte_skill", [], "any", false, false, false, 37), 'errors');
        yield "
            </div>

            <div class=\"space-y-2\">
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description_skill", [], "any", false, false, false, 41), 'label');
        yield "
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description_skill", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 resize-none text-slate-900 dark:text-white", "rows" => 4]]);
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description_skill", [], "any", false, false, false, 43), 'errors');
        yield "
            </div>

            <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200 dark:border-slate-700\">
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "\" class=\"px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium transition-colors\">Annuler</a>
                <button type=\"submit\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-medium shadow-lg shadow-cyan-500/25 transition-all flex items-center gap-2\">
                    <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                    ";
        // line 50
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 50, $this->source); })()) == "create")) ? ("Créer la compétence") : ("Enregistrer"));
        yield "
                </button>
            </div>
        ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

";
        // line 57
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 58
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('admin-skill-form');
            if (!form || typeof showToast === 'undefined') return;

            const nomInput = document.getElementById('";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "nom_skill", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "');
            const categorieInput = document.getElementById('";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "categorie", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "');
            const contexteInput = document.getElementById('";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "contexte_skill", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "');
            const descriptionInput = document.getElementById('";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "description_skill", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        yield "');

            form.addEventListener('submit', function (e) {
                const errors = [];

                const nom = nomInput.value.trim();
                const categorie = categorieInput.value;
                const contexte = contexteInput.value;
                const description = descriptionInput.value.trim();

                if (!nom) {
                    errors.push('Le nom de la compétence est obligatoire.');
                } else if (nom.length < 3) {
                    errors.push('Le nom de la compétence doit contenir au moins 3 caractères.');
                } else if (nom.length > 255) {
                    errors.push('Le nom de la compétence ne peut pas dépasser 255 caractères.');
                }

                if (!categorie) {
                    errors.push('La catégorie est obligatoire.');
                }

                if (!contexte) {
                    errors.push('Le type de compétence est obligatoire.');
                }

                if (description.length > 255) {
                    errors.push('La description ne peut pas dépasser 255 caractères.');
                }

                if (errors.length > 0) {
                    e.preventDefault();
                    errors.forEach(msg => showToast(msg, 'error'));
                }
            });
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
        return "admin/skill/form.html.twig";
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
        return array (  300 => 67,  296 => 66,  292 => 65,  288 => 64,  278 => 58,  255 => 57,  248 => 53,  242 => 50,  236 => 47,  229 => 43,  225 => 42,  221 => 41,  214 => 37,  210 => 36,  206 => 35,  198 => 30,  194 => 29,  190 => 28,  184 => 25,  180 => 24,  176 => 23,  170 => 20,  161 => 14,  157 => 13,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode == 'create' ? 'Nouvelle' : 'Modifier' }} compétence - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode == 'create' ? 'Nouvelle compétence' : 'Modifier la compétence' }}{% endblock %}
{% block page_subtitle %}{{ mode == 'create' ? 'Ajouter une compétence au catalogue' : (skill.nomSkill ?? '') }}{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto\">
    <div class=\"bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-blue-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"zap\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">{{ mode == 'create' ? 'Définir la compétence' : 'Modifier la compétence' }}</h2>
                <p class=\"text-blue-100\">{{ mode == 'create' ? 'Créez un nouveau skill pour la communauté' : 'Modifiez les champs ci-dessous' }}</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-8\">
        {{ form_start(form, { 'attr': { 'class': 'space-y-8', 'id': 'admin-skill-form', 'novalidate': 'novalidate' } }) }}
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    {{ form_label(form.nom_skill) }}
                    {{ form_widget(form.nom_skill, { 'attr': { 'class': 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-slate-900 dark:text-white' } }) }}
                    {{ form_errors(form.nom_skill) }}
                </div>
                <div class=\"space-y-2\">
                    {{ form_label(form.categorie) }}
                    {{ form_widget(form.categorie, { 'attr': { 'class': 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-slate-900 dark:text-white' } }) }}
                    {{ form_errors(form.categorie) }}
                </div>
            </div>

            <div class=\"space-y-2\">
                {{ form_label(form.contexte_skill) }}
                {{ form_widget(form.contexte_skill, { 'attr': { 'class': 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-slate-900 dark:text-white' } }) }}
                {{ form_errors(form.contexte_skill) }}
            </div>

            <div class=\"space-y-2\">
                {{ form_label(form.description_skill) }}
                {{ form_widget(form.description_skill, { 'attr': { 'class': 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 resize-none text-slate-900 dark:text-white', 'rows': 4 } }) }}
                {{ form_errors(form.description_skill) }}
            </div>

            <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200 dark:border-slate-700\">
                <a href=\"{{ path('app_admin_skills_list') }}\" class=\"px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium transition-colors\">Annuler</a>
                <button type=\"submit\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-medium shadow-lg shadow-cyan-500/25 transition-all flex items-center gap-2\">
                    <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                    {{ mode == 'create' ? 'Créer la compétence' : 'Enregistrer' }}
                </button>
            </div>
        {{ form_end(form) }}
    </div>
</div>

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('admin-skill-form');
            if (!form || typeof showToast === 'undefined') return;

            const nomInput = document.getElementById('{{ form.nom_skill.vars.id }}');
            const categorieInput = document.getElementById('{{ form.categorie.vars.id }}');
            const contexteInput = document.getElementById('{{ form.contexte_skill.vars.id }}');
            const descriptionInput = document.getElementById('{{ form.description_skill.vars.id }}');

            form.addEventListener('submit', function (e) {
                const errors = [];

                const nom = nomInput.value.trim();
                const categorie = categorieInput.value;
                const contexte = contexteInput.value;
                const description = descriptionInput.value.trim();

                if (!nom) {
                    errors.push('Le nom de la compétence est obligatoire.');
                } else if (nom.length < 3) {
                    errors.push('Le nom de la compétence doit contenir au moins 3 caractères.');
                } else if (nom.length > 255) {
                    errors.push('Le nom de la compétence ne peut pas dépasser 255 caractères.');
                }

                if (!categorie) {
                    errors.push('La catégorie est obligatoire.');
                }

                if (!contexte) {
                    errors.push('Le type de compétence est obligatoire.');
                }

                if (description.length > 255) {
                    errors.push('La description ne peut pas dépasser 255 caractères.');
                }

                if (errors.length > 0) {
                    e.preventDefault();
                    errors.forEach(msg => showToast(msg, 'error'));
                }
            });
        });
    </script>
{% endblock %}
{% endblock %}
", "admin/skill/form.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\admin\\skill\\form.html.twig");
    }
}
