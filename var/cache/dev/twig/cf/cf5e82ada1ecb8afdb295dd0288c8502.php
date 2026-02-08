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
                <h1 class=\"font-serif text-2xl font-semibold mb-2\">Creer un compte</h1>
                <p class=\"text-muted-foreground text-sm\">Rejoignez la communaute NoVas</p>
            </div>
            
            <!-- Progress Steps -->
            <div class=\"flex items-center justify-center gap-4 mb-8\">
                <div class=\"flex items-center gap-2\">
                    <div class=\"w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center text-sm font-medium\">1</div>
                    <span class=\"text-sm text-foreground\">Profil</span>
                </div>
                <div class=\"w-12 h-px bg-white/10\"></div>
                <div class=\"flex items-center gap-2\">
                    <div class=\"w-8 h-8 rounded-full bg-white/10 text-muted-foreground flex items-center justify-center text-sm font-medium\">2</div>
                    <span class=\"text-sm text-muted-foreground\">Etudes</span>
                </div>
                <div class=\"w-12 h-px bg-white/10\"></div>
                <div class=\"flex items-center gap-2\">
                    <div class=\"w-8 h-8 rounded-full bg-white/10 text-muted-foreground flex items-center justify-center text-sm font-medium\">3</div>
                    <span class=\"text-sm text-muted-foreground\">Compte</span>
                </div>
            </div>
            
            <!-- Form -->
            <form action=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" method=\"post\" class=\"space-y-5\">
                <!-- Name Row -->
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Prenom</label>
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input 
                                type=\"text\" 
                                name=\"firstName\" 
                                required 
                                class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                                placeholder=\"Jean\"
                            >
                        </div>
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Nom</label>
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input 
                                type=\"text\" 
                                name=\"lastName\" 
                                required 
                                class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                                placeholder=\"Dupont\"
                            >
                        </div>
                    </div>
                </div>
                
                <!-- Email -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Email universitaire</label>
                    <div class=\"relative\">
                        <i data-lucide=\"mail\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input 
                            type=\"email\" 
                            name=\"email\" 
                            required 
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                            placeholder=\"jean.dupont@univ.fr\"
                        >
                    </div>
                </div>
                
                <!-- Level Select -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Niveau d'etudes</label>
                    <div class=\"relative\">
                        <i data-lucide=\"graduation-cap\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <select 
                            name=\"level\" 
                            required
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all appearance-none cursor-pointer\"
                        >
                            <option value=\"\" disabled selected>Selectionnez votre niveau</option>
                            <option value=\"l1\">Licence 1</option>
                            <option value=\"l2\">Licence 2</option>
                            <option value=\"l3\">Licence 3</option>
                            <option value=\"m1\">Master 1</option>
                            <option value=\"m2\">Master 2</option>
                            <option value=\"doctorat\">Doctorat</option>
                        </select>
                        <i data-lucide=\"chevron-down\" class=\"absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground pointer-events-none\"></i>
                    </div>
                </div>
                
                <!-- Password -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Mot de passe</label>
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input 
                            type=\"password\" 
                            name=\"password\" 
                            required 
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-12 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                            placeholder=\"Minimum 8 caracteres\"
                        >
                        <button type=\"button\" onclick=\"togglePassword(this)\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground transition-colors\">
                            <i data-lucide=\"eye\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Confirm Password -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Confirmer le mot de passe</label>
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input 
                            type=\"password\" 
                            name=\"password_confirm\" 
                            required 
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                            placeholder=\"••••••••\"
                        >
                    </div>
                </div>
                
                <!-- Terms -->
                <label class=\"flex items-start gap-3 cursor-pointer group\">
                    <input type=\"checkbox\" required class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary focus:ring-offset-0\">
                    <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                        J'accepte les <a href=\"#\" class=\"text-primary hover:underline\">conditions d'utilisation</a> et la <a href=\"#\" class=\"text-primary hover:underline\">politique de confidentialite</a>. Je certifie etre etudiant.
                    </span>
                </label>
                
                <!-- Submit -->
                <button type=\"submit\" class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2 group\">
                    Creer mon compte
                    <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover:translate-x-1 transition-transform\"></i>
                </button>
            </form>
            
            <!-- Login Link -->
            <p class=\"text-center text-sm text-muted-foreground mt-8\">
                Deja inscrit ? 
                <a href=\"";
        // line 168
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
        return array (  270 => 168,  148 => 49,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <h1 class=\"font-serif text-2xl font-semibold mb-2\">Creer un compte</h1>
                <p class=\"text-muted-foreground text-sm\">Rejoignez la communaute NoVas</p>
            </div>
            
            <!-- Progress Steps -->
            <div class=\"flex items-center justify-center gap-4 mb-8\">
                <div class=\"flex items-center gap-2\">
                    <div class=\"w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center text-sm font-medium\">1</div>
                    <span class=\"text-sm text-foreground\">Profil</span>
                </div>
                <div class=\"w-12 h-px bg-white/10\"></div>
                <div class=\"flex items-center gap-2\">
                    <div class=\"w-8 h-8 rounded-full bg-white/10 text-muted-foreground flex items-center justify-center text-sm font-medium\">2</div>
                    <span class=\"text-sm text-muted-foreground\">Etudes</span>
                </div>
                <div class=\"w-12 h-px bg-white/10\"></div>
                <div class=\"flex items-center gap-2\">
                    <div class=\"w-8 h-8 rounded-full bg-white/10 text-muted-foreground flex items-center justify-center text-sm font-medium\">3</div>
                    <span class=\"text-sm text-muted-foreground\">Compte</span>
                </div>
            </div>
            
            <!-- Form -->
            <form action=\"{{ path('app_register') }}\" method=\"post\" class=\"space-y-5\">
                <!-- Name Row -->
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Prenom</label>
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input 
                                type=\"text\" 
                                name=\"firstName\" 
                                required 
                                class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                                placeholder=\"Jean\"
                            >
                        </div>
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Nom</label>
                        <div class=\"relative\">
                            <i data-lucide=\"user\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input 
                                type=\"text\" 
                                name=\"lastName\" 
                                required 
                                class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                                placeholder=\"Dupont\"
                            >
                        </div>
                    </div>
                </div>
                
                <!-- Email -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Email universitaire</label>
                    <div class=\"relative\">
                        <i data-lucide=\"mail\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input 
                            type=\"email\" 
                            name=\"email\" 
                            required 
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                            placeholder=\"jean.dupont@univ.fr\"
                        >
                    </div>
                </div>
                
                <!-- Level Select -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Niveau d'etudes</label>
                    <div class=\"relative\">
                        <i data-lucide=\"graduation-cap\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <select 
                            name=\"level\" 
                            required
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all appearance-none cursor-pointer\"
                        >
                            <option value=\"\" disabled selected>Selectionnez votre niveau</option>
                            <option value=\"l1\">Licence 1</option>
                            <option value=\"l2\">Licence 2</option>
                            <option value=\"l3\">Licence 3</option>
                            <option value=\"m1\">Master 1</option>
                            <option value=\"m2\">Master 2</option>
                            <option value=\"doctorat\">Doctorat</option>
                        </select>
                        <i data-lucide=\"chevron-down\" class=\"absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground pointer-events-none\"></i>
                    </div>
                </div>
                
                <!-- Password -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Mot de passe</label>
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input 
                            type=\"password\" 
                            name=\"password\" 
                            required 
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-12 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                            placeholder=\"Minimum 8 caracteres\"
                        >
                        <button type=\"button\" onclick=\"togglePassword(this)\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground transition-colors\">
                            <i data-lucide=\"eye\" class=\"w-5 h-5\"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Confirm Password -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Confirmer le mot de passe</label>
                    <div class=\"relative\">
                        <i data-lucide=\"lock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                        <input 
                            type=\"password\" 
                            name=\"password_confirm\" 
                            required 
                            class=\"w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50\"
                            placeholder=\"••••••••\"
                        >
                    </div>
                </div>
                
                <!-- Terms -->
                <label class=\"flex items-start gap-3 cursor-pointer group\">
                    <input type=\"checkbox\" required class=\"mt-1 w-5 h-5 rounded border-white/10 bg-secondary text-primary focus:ring-primary focus:ring-offset-0\">
                    <span class=\"text-sm text-muted-foreground group-hover:text-foreground transition-colors\">
                        J'accepte les <a href=\"#\" class=\"text-primary hover:underline\">conditions d'utilisation</a> et la <a href=\"#\" class=\"text-primary hover:underline\">politique de confidentialite</a>. Je certifie etre etudiant.
                    </span>
                </label>
                
                <!-- Submit -->
                <button type=\"submit\" class=\"w-full h-14 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/25 flex items-center justify-center gap-2 group\">
                    Creer mon compte
                    <i data-lucide=\"arrow-right\" class=\"w-5 h-5 group-hover:translate-x-1 transition-transform\"></i>
                </button>
            </form>
            
            <!-- Login Link -->
            <p class=\"text-center text-sm text-muted-foreground mt-8\">
                Deja inscrit ? 
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
{% endblock %}", "front/auth/register.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\auth\\register.html.twig");
    }
}
