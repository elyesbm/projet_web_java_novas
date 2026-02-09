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

/* front/auth/register.html.twig */
class __TwigTemplate_47403475f3cdcf15494e8297f55727be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/auth/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/auth/register.html.twig"));

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

        yield "Inscription - NoVas";
        
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
        yield "<div class=\"min-h-screen flex items-center justify-center relative overflow-hidden py-12\">
    <!-- Background Effects -->
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-primary/20 rounded-full blur-[120px]\"></div>
    <div class=\"absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[100px]\"></div>
    
    <!-- Back to Home -->
    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"absolute top-6 left-6 flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
        <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
        <span class=\"text-sm\">Retour</span>
    </a>
    
    <!-- Register Card -->
    <div class=\"relative w-full max-w-lg mx-4\">
        <div class=\"glass-card rounded-3xl p-8 md:p-10 shadow-2xl\">
            <!-- Logo -->
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary glow-primary mb-4\">
                    <i data-lucide=\"user-plus\" class=\"w-8 h-8 text-white\"></i>
                </div>
                <h1 class=\"font-serif text-2xl font-semibold mb-2\">Créer un compte</h1>
                <p class=\"text-muted-foreground text-sm\">Rejoignez la communauté NoVas</p>
            </div>
            
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            yield "                <div class=\"mb-5 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
            ";
        // line 35
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-5", "novalidate" => "novalidate"]]);
        yield "
                
                ";
        // line 38
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), 'errors');
        yield "
                
                ";
        // line 41
        yield "                <div class=\"grid grid-cols-2 gap-4\">
                    ";
        // line 43
        yield "                    <div class=\"space-y-2\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "PRENOM", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "block text-sm font-medium mb-1"]]);
        yield "
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "PRENOM", [], "any", false, false, false, 47), 'widget');
        yield "
                        </div>
                        ";
        // line 50
        yield "                        <div class=\"text-rose-400 text-xs mt-1\">
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "PRENOM", [], "any", false, false, false, 51), 'errors');
        yield "
                        </div>
                    </div>
                    
                    ";
        // line 56
        yield "                    <div class=\"space-y-2\">
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "NOM", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "block text-sm font-medium mb-1"]]);
        yield "
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "NOM", [], "any", false, false, false, 60), 'widget');
        yield "
                        </div>
                        ";
        // line 63
        yield "                        <div class=\"text-rose-400 text-xs mt-1\">
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "NOM", [], "any", false, false, false, 64), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                ";
        // line 70
        yield "                <div class=\"space-y-2\">
                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "EMAIL", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "block text-sm font-medium mb-1"]]);
        yield "
                    <div class=\"relative\">
                        <i data-lucide=\"mail\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "EMAIL", [], "any", false, false, false, 74), 'widget');
        yield "
                    </div>
                    ";
        // line 77
        yield "                    <div class=\"text-rose-400 text-xs mt-1\">
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "EMAIL", [], "any", false, false, false, 78), 'errors');
        yield "
                    </div>
                </div>
                
                ";
        // line 83
        yield "                <div class=\"space-y-2\">
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "NUMERO", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "block text-sm font-medium mb-1"]]);
        yield "
                    <div class=\"relative\">
                        <i data-lucide=\"phone\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "NUMERO", [], "any", false, false, false, 87), 'widget');
        yield "
                    </div>
                    ";
        // line 90
        yield "                    <div class=\"text-rose-400 text-xs mt-1\">
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "NUMERO", [], "any", false, false, false, 91), 'errors');
        yield "
                    </div>
                </div>
                
                ";
        // line 96
        yield "                <div class=\"space-y-2\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "plainPassword", [], "any", false, false, false, 97), "first", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "block text-sm font-medium mb-1"]]);
        yield "
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "plainPassword", [], "any", false, false, false, 100), "first", [], "any", false, false, false, 100), 'widget');
        yield "
                        <button type=\"button\" onclick=\"togglePassword(this)\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground transition-colors\">
                            <i data-lucide=\"eye\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                    ";
        // line 106
        yield "                    <div class=\"text-rose-400 text-xs mt-1\">
                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "plainPassword", [], "any", false, false, false, 107), "first", [], "any", false, false, false, 107), 'errors');
        yield "
                    </div>
                </div>
                
                ";
        // line 112
        yield "                <div class=\"space-y-2\">
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), "plainPassword", [], "any", false, false, false, 113), "second", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "block text-sm font-medium mb-1"]]);
        yield "
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "plainPassword", [], "any", false, false, false, 116), "second", [], "any", false, false, false, 116), 'widget');
        yield "
                    </div>
                    ";
        // line 119
        yield "                    <div class=\"text-rose-400 text-xs mt-1\">
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), "plainPassword", [], "any", false, false, false, 120), "second", [], "any", false, false, false, 120), 'errors');
        yield "
                    </div>
                </div>
                
                ";
        // line 125
        yield "                <label class=\"flex items-start gap-3 cursor-pointer group\">
                    <input type=\"checkbox\" required class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary focus:ring-offset-0\">
                    <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                        J'accepte les <a href=\"#\" class=\"text-primary hover:underline\">conditions d'utilisation</a> et la <a href=\"#\" class=\"text-primary hover:underline\">politique de confidentialité</a>. Je certifie être étudiant.
                    </span>
                </label>
                
                <button type=\"submit\" class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2 group\">
                    Créer mon compte
                    <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover:translate-x-1 transition-transform\"></i>
                </button>
                
            ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), 'form_end');
        yield "
            
            <!-- Login Link -->
            <p class=\"text-center text-sm text-muted-foreground mt-8\">
                Déjà inscrit ? 
                <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary font-medium hover:underline\">Se connecter</a>
            </p>
        </div>
    </div>
</div>

<script>
    function togglePassword(btn) {
        const input = btn.parentElement.querySelector('input');
        const icon = btn.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.setAttribute('data-lucide', 'eye-off');
        } else {
            input.type = 'password';
            icon.setAttribute('data-lucide', 'eye');
        }
        lucide.createIcons();
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
        return "front/auth/register.html.twig";
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
        return array (  330 => 142,  322 => 137,  308 => 125,  301 => 120,  298 => 119,  293 => 116,  287 => 113,  284 => 112,  277 => 107,  274 => 106,  266 => 100,  260 => 97,  257 => 96,  250 => 91,  247 => 90,  242 => 87,  236 => 84,  233 => 83,  226 => 78,  223 => 77,  218 => 74,  212 => 71,  209 => 70,  201 => 64,  198 => 63,  193 => 60,  187 => 57,  184 => 56,  177 => 51,  174 => 50,  169 => 47,  163 => 44,  160 => 43,  157 => 41,  151 => 38,  145 => 35,  142 => 33,  133 => 31,  129 => 30,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Inscription - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen flex items-center justify-center relative overflow-hidden py-12\">
    <!-- Background Effects -->
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-primary/20 rounded-full blur-[120px]\"></div>
    <div class=\"absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[100px]\"></div>
    
    <!-- Back to Home -->
    <a href=\"{{ path('app_home') }}\" class=\"absolute top-6 left-6 flex items-center gap-2 text-muted-foreground hover:text-foreground transition-colors\">
        <i data-lucide=\"arrow-left\" class=\"w-5 h-5\"></i>
        <span class=\"text-sm\">Retour</span>
    </a>
    
    <!-- Register Card -->
    <div class=\"relative w-full max-w-lg mx-4\">
        <div class=\"glass-card rounded-3xl p-8 md:p-10 shadow-2xl\">
            <!-- Logo -->
            <div class=\"text-center mb-8\">
                <div class=\"inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary glow-primary mb-4\">
                    <i data-lucide=\"user-plus\" class=\"w-8 h-8 text-white\"></i>
                </div>
                <h1 class=\"font-serif text-2xl font-semibold mb-2\">Créer un compte</h1>
                <p class=\"text-muted-foreground text-sm\">Rejoignez la communauté NoVas</p>
            </div>
            
            {% for message in app.flashes('success') %}
                <div class=\"mb-5 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm\">{{ message }}</div>
            {% endfor %}

            {# ⬇️ IMPORTANT : 'novalidate' désactive la validation HTML5 pour forcer la validation serveur #}
            {{ form_start(registrationForm, { 'attr': { 'class': 'space-y-5', 'novalidate': 'novalidate' } }) }}
                
                {# Erreurs globales du formulaire #}
                {{ form_errors(registrationForm) }}
                
                {# Ligne Prénom + Nom #}
                <div class=\"grid grid-cols-2 gap-4\">
                    {# Prénom #}
                    <div class=\"space-y-2\">
                        {{ form_label(registrationForm.PRENOM, null, {'label_attr': {'class': 'block text-sm font-medium mb-1'}}) }}
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                            {{ form_widget(registrationForm.PRENOM) }}
                        </div>
                        {# ⬇️ Message d'erreur pour PRENOM #}
                        <div class=\"text-rose-400 text-xs mt-1\">
                            {{ form_errors(registrationForm.PRENOM) }}
                        </div>
                    </div>
                    
                    {# Nom #}
                    <div class=\"space-y-2\">
                        {{ form_label(registrationForm.NOM, null, {'label_attr': {'class': 'block text-sm font-medium mb-1'}}) }}
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                            {{ form_widget(registrationForm.NOM) }}
                        </div>
                        {# ⬇️ Message d'erreur pour NOM #}
                        <div class=\"text-rose-400 text-xs mt-1\">
                            {{ form_errors(registrationForm.NOM) }}
                        </div>
                    </div>
                </div>
                
                {# Email #}
                <div class=\"space-y-2\">
                    {{ form_label(registrationForm.EMAIL, null, {'label_attr': {'class': 'block text-sm font-medium mb-1'}}) }}
                    <div class=\"relative\">
                        <i data-lucide=\"mail\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        {{ form_widget(registrationForm.EMAIL) }}
                    </div>
                    {# ⬇️ Message d'erreur pour EMAIL #}
                    <div class=\"text-rose-400 text-xs mt-1\">
                        {{ form_errors(registrationForm.EMAIL) }}
                    </div>
                </div>
                
                {# Numéro #}
                <div class=\"space-y-2\">
                    {{ form_label(registrationForm.NUMERO, null, {'label_attr': {'class': 'block text-sm font-medium mb-1'}}) }}
                    <div class=\"relative\">
                        <i data-lucide=\"phone\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        {{ form_widget(registrationForm.NUMERO) }}
                    </div>
                    {# ⬇️ Message d'erreur pour NUMERO #}
                    <div class=\"text-rose-400 text-xs mt-1\">
                        {{ form_errors(registrationForm.NUMERO) }}
                    </div>
                </div>
                
                {# Mot de passe #}
                <div class=\"space-y-2\">
                    {{ form_label(registrationForm.plainPassword.first, null, {'label_attr': {'class': 'block text-sm font-medium mb-1'}}) }}
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        {{ form_widget(registrationForm.plainPassword.first) }}
                        <button type=\"button\" onclick=\"togglePassword(this)\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground transition-colors\">
                            <i data-lucide=\"eye\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                    {# ⬇️ Message d'erreur pour mot de passe #}
                    <div class=\"text-rose-400 text-xs mt-1\">
                        {{ form_errors(registrationForm.plainPassword.first) }}
                    </div>
                </div>
                
                {# Confirmation mot de passe #}
                <div class=\"space-y-2\">
                    {{ form_label(registrationForm.plainPassword.second, null, {'label_attr': {'class': 'block text-sm font-medium mb-1'}}) }}
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground z-10\"></i>
                        {{ form_widget(registrationForm.plainPassword.second) }}
                    </div>
                    {# ⬇️ Message d'erreur pour confirmation #}
                    <div class=\"text-rose-400 text-xs mt-1\">
                        {{ form_errors(registrationForm.plainPassword.second) }}
                    </div>
                </div>
                
                {# Checkbox conditions #}
                <label class=\"flex items-start gap-3 cursor-pointer group\">
                    <input type=\"checkbox\" required class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary focus:ring-offset-0\">
                    <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                        J'accepte les <a href=\"#\" class=\"text-primary hover:underline\">conditions d'utilisation</a> et la <a href=\"#\" class=\"text-primary hover:underline\">politique de confidentialité</a>. Je certifie être étudiant.
                    </span>
                </label>
                
                <button type=\"submit\" class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2 group\">
                    Créer mon compte
                    <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover:translate-x-1 transition-transform\"></i>
                </button>
                
            {{ form_end(registrationForm) }}
            
            <!-- Login Link -->
            <p class=\"text-center text-sm text-muted-foreground mt-8\">
                Déjà inscrit ? 
                <a href=\"{{ path('app_login') }}\" class=\"text-primary font-medium hover:underline\">Se connecter</a>
            </p>
        </div>
    </div>
</div>

<script>
    function togglePassword(btn) {
        const input = btn.parentElement.querySelector('input');
        const icon = btn.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.setAttribute('data-lucide', 'eye-off');
        } else {
            input.type = 'password';
            icon.setAttribute('data-lucide', 'eye');
        }
        lucide.createIcons();
    }
</script>
{% endblock %}", "front/auth/register.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\front\\auth\\register.html.twig");
    }
}
