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

/* admin/learning_path/form.html.twig */
class __TwigTemplate_3e00caa61d4493fe8740a8f2aa6e57e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/learning_path/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/learning_path/form.html.twig"));

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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "create")) ? ("Nouveau") : ("Modifier"));
        yield " parcours - NOVAS Admin";
        
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()) == "create")) ? ("Nouveau parcours") : ("Modifier le parcours"));
        
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 5, $this->source); })()) == "create")) ? ("Créer un parcours d'apprentissage") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["learning_path"] ?? null), "titrePath", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["learning_path"]) || array_key_exists("learning_path", $context) ? $context["learning_path"] : (function () { throw new RuntimeError('Variable "learning_path" does not exist.', 5, $this->source); })()), "titrePath", [], "any", false, false, false, 5)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["learning_path"]) || array_key_exists("learning_path", $context) ? $context["learning_path"] : (function () { throw new RuntimeError('Variable "learning_path" does not exist.', 5, $this->source); })()), "titrePath", [], "any", false, false, false, 5), "html", null, true)) : (""))));
        
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
    <div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-indigo-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"route\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">";
        // line 13
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 13, $this->source); })()) == "create")) ? ("Définir le parcours") : ("Modifier le parcours"));
        yield "</h2>
                <p class=\"text-indigo-100\">";
        // line 14
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 14, $this->source); })()) == "create")) ? ("Liez un parcours à une compétence") : ("Modifiez les champs ci-dessous"));
        yield "</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-8\">
        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8"]]);
        yield "
            <div class=\"space-y-2\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre_path", [], "any", false, false, false, 22), 'label');
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "titre_path", [], "any", false, false, false, 23), 'widget');
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre_path", [], "any", false, false, false, 24), 'errors');
        yield "
            </div>
            <div class=\"space-y-2\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "skill", [], "any", false, false, false, 27), 'label');
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "skill", [], "any", false, false, false, 28), 'widget');
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "skill", [], "any", false, false, false, 29), 'errors');
        yield "
            </div>
            <div class=\"space-y-2\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description_skill", [], "any", false, false, false, 32), 'label');
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description_skill", [], "any", false, false, false, 33), 'widget');
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description_skill", [], "any", false, false, false, 34), 'errors');
        yield "
            </div>
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                <div class=\"space-y-2\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "duree_estimee", [], "any", false, false, false, 38), 'label');
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "duree_estimee", [], "any", false, false, false, 39), 'widget');
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "duree_estimee", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>
                <div class=\"space-y-2\">
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "niveau_path", [], "any", false, false, false, 43), 'label');
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "niveau_path", [], "any", false, false, false, 44), 'widget');
        yield "
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "niveau_path", [], "any", false, false, false, 45), 'errors');
        yield "
                </div>
                <div class=\"space-y-2\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "statut_path", [], "any", false, false, false, 48), 'label');
        yield "
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "statut_path", [], "any", false, false, false, 49), 'widget');
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "statut_path", [], "any", false, false, false, 50), 'errors');
        yield "
                </div>
            </div>
            <div class=\"space-y-2\">
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "contexte_path", [], "any", false, false, false, 54), 'label');
        yield "
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "contexte_path", [], "any", false, false, false, 55), 'widget');
        yield "
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "contexte_path", [], "any", false, false, false, 56), 'errors');
        yield "
            </div>

            <div class=\"border-t border-slate-200 dark:border-slate-700 pt-8 space-y-4\">
                <div class=\"flex items-center justify-between\">
                    <h3 class=\"font-semibold text-lg\">Étapes du parcours</h3>
                    <button type=\"button\" class=\"add-etape px-4 py-2 rounded-lg bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium flex items-center gap-2\">
                        <i data-lucide=\"plus\" class=\"w-4 h-4\"></i> Ajouter une étape
                    </button>
                </div>
                <div class=\"etapes-list space-y-4\" data-prototype=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "etapes", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "prototype", [], "any", false, false, false, 66), 'widget'), "html_attr");
        yield "\" data-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "etapes", [], "any", false, false, false, 66)), "html", null, true);
        yield "\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "etapes", [], "any", false, false, false, 67));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 68
            yield "                    <div class=\"etape-item p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 space-y-3\">
                        <div class=\"flex justify-between items-center\">
                            <span class=\"text-sm font-medium text-slate-600 dark:text-slate-400\">Étape ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 70), "html", null, true);
            yield "</span>
                            <button type=\"button\" class=\"remove-etape text-red-500 hover:text-red-600 text-sm flex items-center gap-1\">
                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i> Supprimer
                            </button>
                        </div>
                        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3\">
                            <div class=\"md:col-span-2\">";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "titre", [], "any", false, false, false, 76), 'row');
            yield "</div>
                            <div>";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "type_etape", [], "any", false, false, false, 77), 'row');
            yield "</div>
                            <div>";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "ordre", [], "any", false, false, false, 78), 'row');
            yield "</div>
                            <div class=\"md:col-span-2\">";
            // line 79
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "description", [], "any", false, false, false, 79), 'row');
            yield "</div>
                            <div>";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "url", [], "any", false, false, false, 80), 'row');
            yield "</div>
                            <div>";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "duree_minutes", [], "any", false, false, false, 81), 'row');
            yield "</div>
                            <div>";
            // line 82
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "niveau_min", [], "any", false, false, false, 82), 'row');
            yield "</div>
                        </div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                </div>
            </div>

            <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200 dark:border-slate-700\">
                <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "\" class=\"px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium transition-colors\">Annuler</a>
                <button type=\"submit\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-medium shadow-lg shadow-indigo-500/25 transition-all flex items-center gap-2\">
                    <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                    ";
        // line 93
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 93, $this->source); })()) == "create")) ? ("Créer le parcours") : ("Enregistrer"));
        yield "
                </button>
            </div>
        ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.etapes-list');
    if (!container) return;
    const prototype = container.dataset.prototype;
    const addBtn = document.querySelector('.add-etape');
    let index = parseInt(container.dataset.index || '0', 10);

    addBtn?.addEventListener('click', function() {
        const html = prototype.replace(/__name__/g, index);
        const div = document.createElement('div');
        div.className = 'etape-item p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 space-y-3';
        div.innerHTML = '<div class=\"flex justify-between items-center\"><span class=\"text-sm font-medium text-slate-600 dark:text-slate-400\">Étape ' + (index + 1) + '</span><button type=\"button\" class=\"remove-etape text-red-500 hover:text-red-600 text-sm flex items-center gap-1\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i> Supprimer</button></div><div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3\">' + html + '</div>';
        container.appendChild(div);
        if (typeof lucide !== 'undefined') lucide.createIcons();
        index++;
    });

    container.addEventListener('click', function(e) {
        if (e.target.closest('.remove-etape')) {
            e.target.closest('.etape-item')?.remove();
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
        return "admin/learning_path/form.html.twig";
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
        return array (  377 => 96,  371 => 93,  365 => 90,  359 => 86,  341 => 82,  337 => 81,  333 => 80,  329 => 79,  325 => 78,  321 => 77,  317 => 76,  308 => 70,  304 => 68,  287 => 67,  281 => 66,  268 => 56,  264 => 55,  260 => 54,  253 => 50,  249 => 49,  245 => 48,  239 => 45,  235 => 44,  231 => 43,  225 => 40,  221 => 39,  217 => 38,  210 => 34,  206 => 33,  202 => 32,  196 => 29,  192 => 28,  188 => 27,  182 => 24,  178 => 23,  174 => 22,  169 => 20,  160 => 14,  156 => 13,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode == 'create' ? 'Nouveau' : 'Modifier' }} parcours - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode == 'create' ? 'Nouveau parcours' : 'Modifier le parcours' }}{% endblock %}
{% block page_subtitle %}{{ mode == 'create' ? 'Créer un parcours d\\'apprentissage' : (learning_path.titrePath ?? '') }}{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto\">
    <div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-indigo-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"route\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">{{ mode == 'create' ? 'Définir le parcours' : 'Modifier le parcours' }}</h2>
                <p class=\"text-indigo-100\">{{ mode == 'create' ? 'Liez un parcours à une compétence' : 'Modifiez les champs ci-dessous' }}</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-8\">
        {{ form_start(form, { 'attr': { 'class': 'space-y-8' } }) }}
            <div class=\"space-y-2\">
                {{ form_label(form.titre_path) }}
                {{ form_widget(form.titre_path) }}
                {{ form_errors(form.titre_path) }}
            </div>
            <div class=\"space-y-2\">
                {{ form_label(form.skill) }}
                {{ form_widget(form.skill) }}
                {{ form_errors(form.skill) }}
            </div>
            <div class=\"space-y-2\">
                {{ form_label(form.description_skill) }}
                {{ form_widget(form.description_skill) }}
                {{ form_errors(form.description_skill) }}
            </div>
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
                <div class=\"space-y-2\">
                    {{ form_label(form.duree_estimee) }}
                    {{ form_widget(form.duree_estimee) }}
                    {{ form_errors(form.duree_estimee) }}
                </div>
                <div class=\"space-y-2\">
                    {{ form_label(form.niveau_path) }}
                    {{ form_widget(form.niveau_path) }}
                    {{ form_errors(form.niveau_path) }}
                </div>
                <div class=\"space-y-2\">
                    {{ form_label(form.statut_path) }}
                    {{ form_widget(form.statut_path) }}
                    {{ form_errors(form.statut_path) }}
                </div>
            </div>
            <div class=\"space-y-2\">
                {{ form_label(form.contexte_path) }}
                {{ form_widget(form.contexte_path) }}
                {{ form_errors(form.contexte_path) }}
            </div>

            <div class=\"border-t border-slate-200 dark:border-slate-700 pt-8 space-y-4\">
                <div class=\"flex items-center justify-between\">
                    <h3 class=\"font-semibold text-lg\">Étapes du parcours</h3>
                    <button type=\"button\" class=\"add-etape px-4 py-2 rounded-lg bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium flex items-center gap-2\">
                        <i data-lucide=\"plus\" class=\"w-4 h-4\"></i> Ajouter une étape
                    </button>
                </div>
                <div class=\"etapes-list space-y-4\" data-prototype=\"{{ form_widget(form.etapes.vars.prototype)|e('html_attr') }}\" data-index=\"{{ form.etapes|length }}\">
                    {% for etape in form.etapes %}
                    <div class=\"etape-item p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 space-y-3\">
                        <div class=\"flex justify-between items-center\">
                            <span class=\"text-sm font-medium text-slate-600 dark:text-slate-400\">Étape {{ loop.index }}</span>
                            <button type=\"button\" class=\"remove-etape text-red-500 hover:text-red-600 text-sm flex items-center gap-1\">
                                <i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i> Supprimer
                            </button>
                        </div>
                        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3\">
                            <div class=\"md:col-span-2\">{{ form_row(etape.titre) }}</div>
                            <div>{{ form_row(etape.type_etape) }}</div>
                            <div>{{ form_row(etape.ordre) }}</div>
                            <div class=\"md:col-span-2\">{{ form_row(etape.description) }}</div>
                            <div>{{ form_row(etape.url) }}</div>
                            <div>{{ form_row(etape.duree_minutes) }}</div>
                            <div>{{ form_row(etape.niveau_min) }}</div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>

            <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200 dark:border-slate-700\">
                <a href=\"{{ path('app_admin_skills_list') }}\" class=\"px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium transition-colors\">Annuler</a>
                <button type=\"submit\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-medium shadow-lg shadow-indigo-500/25 transition-all flex items-center gap-2\">
                    <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                    {{ mode == 'create' ? 'Créer le parcours' : 'Enregistrer' }}
                </button>
            </div>
        {{ form_end(form) }}
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.etapes-list');
    if (!container) return;
    const prototype = container.dataset.prototype;
    const addBtn = document.querySelector('.add-etape');
    let index = parseInt(container.dataset.index || '0', 10);

    addBtn?.addEventListener('click', function() {
        const html = prototype.replace(/__name__/g, index);
        const div = document.createElement('div');
        div.className = 'etape-item p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 space-y-3';
        div.innerHTML = '<div class=\"flex justify-between items-center\"><span class=\"text-sm font-medium text-slate-600 dark:text-slate-400\">Étape ' + (index + 1) + '</span><button type=\"button\" class=\"remove-etape text-red-500 hover:text-red-600 text-sm flex items-center gap-1\"><i data-lucide=\"trash-2\" class=\"w-4 h-4\"></i> Supprimer</button></div><div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3\">' + html + '</div>';
        container.appendChild(div);
        if (typeof lucide !== 'undefined') lucide.createIcons();
        index++;
    });

    container.addEventListener('click', function(e) {
        if (e.target.closest('.remove-etape')) {
            e.target.closest('.etape-item')?.remove();
        }
    });
});
</script>
{% endblock %}
", "admin/learning_path/form.html.twig", "C:\\Users\\MSI\\Desktop\\projetweb\\projet_web_java_novas\\templates\\admin\\learning_path\\form.html.twig");
    }
}
