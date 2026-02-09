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

/* admin/atelier/form.html.twig */
class __TwigTemplate_c7e078c813ed909917d27b5679257786 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/atelier/form.html.twig"));

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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "create")) ? ("Nouvel atelier") : ("Modifier atelier"));
        
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()) == "create")) ? ("Nouvel atelier") : ("Modifier l’atelier"));
        
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

        yield "Programmer un événement de formation";
        
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
        yield "
";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "max-w-5xl mx-auto", "novalidate" => "novalidate"]]);
        // line 14
        yield "

";
        // line 17
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "valid", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "<div class=\"mb-6 p-4 rounded-xl bg-red-50 border border-red-300 text-red-700\">
    Veuillez corriger les champs en rouge.
</div>
";
        }
        // line 22
        yield "
<!-- HEADER -->
<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg\">
    <div class=\"flex items-center gap-4\">
        <div class=\"w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center\">
            <i data-lucide=\"calendar-days\" class=\"w-8 h-8\"></i>
        </div>
        <div>
            <h2 class=\"text-2xl font-bold\">Détails de l'atelier</h2>
            <p class=\"text-indigo-100\">Créez une expérience d'apprentissage</p>
        </div>
    </div>
</div>

<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

    <!-- COL GAUCHE -->
    <div class=\"lg:col-span-2 space-y-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow\">

            ";
        // line 43
        yield "            ";
        $context["e"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "titre_atelier", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
        // line 44
        yield "            <label class=\"block mb-2 font-medium\">Titre</label>
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "titre_atelier", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 rounded-xl border text-lg " . (((($tmp =         // line 48
(isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 50
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "titre_atelier", [], "any", false, false, false, 51), 'errors');
        yield "

            ";
        // line 54
        yield "            <label class=\"block mt-6 mb-2 font-medium\">Contexte</label>
            <div class=\"grid grid-cols-2 gap-4\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "contexte_atelier", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 57
            yield "                    <label class=\"cursor-pointer\">
                        ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "peer sr-only"]]);
            yield "
                        <div class=\"p-4 rounded-xl border-2 text-center
                            peer-checked:border-indigo-500 peer-checked:bg-indigo-50 transition\">
                            ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61) == 1)) {
                // line 62
                yield "                                <i data-lucide=\"cpu\" class=\"w-6 h-6 mx-auto mb-2 text-indigo-500\"></i>
                                <strong>Hard Skill</strong>
                            ";
            } else {
                // line 65
                yield "                                <i data-lucide=\"heart-handshake\" class=\"w-6 h-6 mx-auto mb-2 text-purple-500\"></i>
                                <strong>Soft Skill</strong>
                            ";
            }
            // line 68
            yield "                        </div>
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "            </div>
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "contexte_atelier", [], "any", false, false, false, 72), 'errors');
        yield "

            ";
        // line 75
        yield "            ";
        $context["e"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "type_atelier", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75));
        // line 76
        yield "            <label class=\"block mt-6 mb-2 font-medium\">Type</label>
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "type_atelier", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 rounded-xl border " . (((($tmp =         // line 80
(isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 80, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 82
        yield "
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "type_atelier", [], "any", false, false, false, 83), 'errors');
        yield "

            ";
        // line 86
        yield "            ";
        $context["e"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "description_atelier", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86));
        // line 87
        yield "            <label class=\"block mt-6 mb-2 font-medium\">Description</label>
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description_atelier", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 rounded-xl border resize-none " . (((($tmp =         // line 91
(isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 4]]);
        // line 94
        yield "
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description_atelier", [], "any", false, false, false, 95), 'errors');
        yield "

            ";
        // line 98
        yield "            ";
        $context["e"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "date_atelier", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98));
        // line 99
        yield "            <label class=\"block mt-6 mb-2 font-medium\">Date</label>
            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "date_atelier", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 rounded-xl border " . (((($tmp =         // line 103
(isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 105
        yield "
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "date_atelier", [], "any", false, false, false, 106), 'errors');
        yield "

        </div>
    </div>

    <!-- COL DROITE -->
    <div class=\"space-y-6\">

        ";
        // line 115
        yield "        ";
        $context["e"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "capacite", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "any", false, false, false, 115));
        // line 116
        yield "        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Capacité</h3>
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "capacite", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 rounded-xl border text-center text-xl font-bold " . (((($tmp =         // line 121
(isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 121, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 123
        yield "
            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "capacite", [], "any", false, false, false, 124), 'errors');
        yield "
        </div>

        ";
        // line 128
        yield "        ";
        $context["e"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "image_atelier", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "any", false, false, false, 128));
        // line 129
        yield "        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Image (URL)</h3>
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "image_atelier", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 rounded-xl border " . (((($tmp =         // line 134
(isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 bg-red-50") : ("border-gray-300"))), "oninput" => "previewImage(this.value)"]]);
        // line 137
        yield "
            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "image_atelier", [], "any", false, false, false, 138), 'errors');
        yield "
            <img id=\"preview\" class=\"mt-4 rounded-xl hidden max-h-48 mx-auto\">
        </div>

        ";
        // line 143
        yield "        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Statut</h3>
            ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "statut_atelier", [], "any", false, false, false, 145), 'widget');
        yield "
            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "statut_atelier", [], "any", false, false, false, 146), 'errors');
        yield "
        </div>

        ";
        // line 150
        yield "        <div class=\"flex flex-col gap-3\">
            <button type=\"submit\"
                class=\"w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium\">
                ";
        // line 153
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 153, $this->source); })()) == "create")) ? ("Créer l’atelier") : ("Enregistrer"));
        yield "
            </button>

            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
        yield "\"
               class=\"w-full py-3 rounded-xl border text-center\">
                Annuler
            </a>
        </div>

    </div>
</div>

";
        // line 165
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'form_end');
        yield "

<script>
function previewImage(url) {
    const img = document.getElementById('preview');
    if (!url) {
        img.classList.add('hidden');
        return;
    }
    img.src = url;
    img.classList.remove('hidden');
}
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
        return "admin/atelier/form.html.twig";
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
        return array (  382 => 165,  370 => 156,  364 => 153,  359 => 150,  353 => 146,  349 => 145,  345 => 143,  338 => 138,  335 => 137,  333 => 134,  332 => 131,  328 => 129,  325 => 128,  319 => 124,  316 => 123,  314 => 121,  313 => 118,  309 => 116,  306 => 115,  295 => 106,  292 => 105,  290 => 103,  289 => 100,  286 => 99,  283 => 98,  278 => 95,  275 => 94,  273 => 91,  272 => 88,  269 => 87,  266 => 86,  261 => 83,  258 => 82,  256 => 80,  255 => 77,  252 => 76,  249 => 75,  244 => 72,  241 => 71,  233 => 68,  228 => 65,  223 => 62,  221 => 61,  215 => 58,  212 => 57,  208 => 56,  204 => 54,  199 => 51,  196 => 50,  194 => 48,  193 => 45,  190 => 44,  187 => 43,  165 => 22,  159 => 18,  157 => 17,  153 => 14,  151 => 9,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode == 'create' ? 'Nouvel atelier' : 'Modifier atelier' }}{% endblock %}
{% block page_title %}{{ mode == 'create' ? 'Nouvel atelier' : 'Modifier l’atelier' }}{% endblock %}
{% block page_subtitle %}Programmer un événement de formation{% endblock %}

{% block body %}

{{ form_start(form, {
    attr: {
        class: 'max-w-5xl mx-auto',
        novalidate: 'novalidate'
    }
}) }}

{# MESSAGE GLOBAL #}
{% if not form.vars.valid %}
<div class=\"mb-6 p-4 rounded-xl bg-red-50 border border-red-300 text-red-700\">
    Veuillez corriger les champs en rouge.
</div>
{% endif %}

<!-- HEADER -->
<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg\">
    <div class=\"flex items-center gap-4\">
        <div class=\"w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center\">
            <i data-lucide=\"calendar-days\" class=\"w-8 h-8\"></i>
        </div>
        <div>
            <h2 class=\"text-2xl font-bold\">Détails de l'atelier</h2>
            <p class=\"text-indigo-100\">Créez une expérience d'apprentissage</p>
        </div>
    </div>
</div>

<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

    <!-- COL GAUCHE -->
    <div class=\"lg:col-span-2 space-y-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow\">

            {# TITRE #}
            {% set e = form.titre_atelier.vars.errors|length %}
            <label class=\"block mb-2 font-medium\">Titre</label>
            {{ form_widget(form.titre_atelier, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border text-lg ' ~
                           (e ? 'border-red-500 bg-red-50' : 'border-gray-300')
                }
            }) }}
            {{ form_errors(form.titre_atelier) }}

            {# CONTEXTE #}
            <label class=\"block mt-6 mb-2 font-medium\">Contexte</label>
            <div class=\"grid grid-cols-2 gap-4\">
                {% for child in form.contexte_atelier %}
                    <label class=\"cursor-pointer\">
                        {{ form_widget(child, { attr: { class: 'peer sr-only' } }) }}
                        <div class=\"p-4 rounded-xl border-2 text-center
                            peer-checked:border-indigo-500 peer-checked:bg-indigo-50 transition\">
                            {% if child.vars.value == 1 %}
                                <i data-lucide=\"cpu\" class=\"w-6 h-6 mx-auto mb-2 text-indigo-500\"></i>
                                <strong>Hard Skill</strong>
                            {% else %}
                                <i data-lucide=\"heart-handshake\" class=\"w-6 h-6 mx-auto mb-2 text-purple-500\"></i>
                                <strong>Soft Skill</strong>
                            {% endif %}
                        </div>
                    </label>
                {% endfor %}
            </div>
            {{ form_errors(form.contexte_atelier) }}

            {# TYPE #}
            {% set e = form.type_atelier.vars.errors|length %}
            <label class=\"block mt-6 mb-2 font-medium\">Type</label>
            {{ form_widget(form.type_atelier, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border ' ~
                           (e ? 'border-red-500 bg-red-50' : 'border-gray-300')
                }
            }) }}
            {{ form_errors(form.type_atelier) }}

            {# DESCRIPTION #}
            {% set e = form.description_atelier.vars.errors|length %}
            <label class=\"block mt-6 mb-2 font-medium\">Description</label>
            {{ form_widget(form.description_atelier, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border resize-none ' ~
                           (e ? 'border-red-500 bg-red-50' : 'border-gray-300'),
                    rows: 4
                }
            }) }}
            {{ form_errors(form.description_atelier) }}

            {# DATE #}
            {% set e = form.date_atelier.vars.errors|length %}
            <label class=\"block mt-6 mb-2 font-medium\">Date</label>
            {{ form_widget(form.date_atelier, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border ' ~
                           (e ? 'border-red-500 bg-red-50' : 'border-gray-300')
                }
            }) }}
            {{ form_errors(form.date_atelier) }}

        </div>
    </div>

    <!-- COL DROITE -->
    <div class=\"space-y-6\">

        {# CAPACITÉ #}
        {% set e = form.capacite.vars.errors|length %}
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Capacité</h3>
            {{ form_widget(form.capacite, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border text-center text-xl font-bold ' ~
                           (e ? 'border-red-500 bg-red-50' : 'border-gray-300')
                }
            }) }}
            {{ form_errors(form.capacite) }}
        </div>

        {# IMAGE URL #}
        {% set e = form.image_atelier.vars.errors|length %}
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Image (URL)</h3>
            {{ form_widget(form.image_atelier, {
                attr: {
                    class: 'w-full px-4 py-3 rounded-xl border ' ~
                           (e ? 'border-red-500 bg-red-50' : 'border-gray-300'),
                    oninput: 'previewImage(this.value)'
                }
            }) }}
            {{ form_errors(form.image_atelier) }}
            <img id=\"preview\" class=\"mt-4 rounded-xl hidden max-h-48 mx-auto\">
        </div>

        {# STATUT #}
        <div class=\"bg-white rounded-2xl p-6 shadow\">
            <h3 class=\"font-semibold mb-2\">Statut</h3>
            {{ form_widget(form.statut_atelier) }}
            {{ form_errors(form.statut_atelier) }}
        </div>

        {# ACTIONS #}
        <div class=\"flex flex-col gap-3\">
            <button type=\"submit\"
                class=\"w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium\">
                {{ mode == 'create' ? 'Créer l’atelier' : 'Enregistrer' }}
            </button>

            <a href=\"{{ path('app_admin_ateliers_list') }}\"
               class=\"w-full py-3 rounded-xl border text-center\">
                Annuler
            </a>
        </div>

    </div>
</div>

{{ form_end(form) }}

<script>
function previewImage(url) {
    const img = document.getElementById('preview');
    if (!url) {
        img.classList.add('hidden');
        return;
    }
    img.src = url;
    img.classList.remove('hidden');
}
</script>

{% endblock %}

", "admin/atelier/form.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\atelier\\form.html.twig");
    }
}
