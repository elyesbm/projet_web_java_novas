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

/* front/user/profile.html.twig */
class __TwigTemplate_3b8ceb327f158d431115a15857408a0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/user/profile.html.twig"));

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

        yield "Mon Profil - NoVas";
        
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
        yield "<nav class=\"fixed top-0 left-0 right-0 z-50 glass border-b border-border/30\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"flex items-center justify-between h-20\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Accueil</a>
            <div class=\"hidden md:flex items-center gap-8\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_learning_paths_index");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Parcours</a>
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_ateliers");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Ateliers</a>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publications_index");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Publications</a>
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Emplois</a>
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_index");
        yield "\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Compétences</a>
            </div>
            <div class=\"flex items-center gap-4\">
                <div class=\"hidden md:flex items-center gap-3 px-4 py-2 glass-card rounded-xl\">
                    ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "IMAGE", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "IMAGE", [], "any", false, false, false, 20), "html", null, true);
            yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-cover ring-2 ring-primary/30\">
                    ";
        } else {
            // line 22
            yield "                        <img src=\"https://ui-avatars.com/api/?name=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "PRENOM", [], "any", false, false, false, 22)), "html", null, true);
            yield "+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "NOM", [], "any", false, false, false, 22)), "html", null, true);
            yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-cover ring-2 ring-primary/30\">
                    ";
        }
        // line 24
        yield "                    <span class=\"text-sm font-medium\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "PRENOM", [], "any", false, false, false, 24), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "NOM", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
                </div>
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Déconnexion</a>
            </div>
        </div>
    </div>
</nav>

<section class=\"relative min-h-screen pt-32 pb-16\">
    <div class=\"absolute inset-0 -z-10\">
        <div class=\"absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl\"></div>
        <div class=\"absolute bottom-20 right-10 w-96 h-96 bg-academic/10 rounded-full blur-3xl\"></div>
    </div>

    <div class=\"max-w-3xl mx-auto px-6\">
        <div class=\"glass-card rounded-3xl p-8 md:p-12\">
            <h2 class=\"font-serif text-2xl font-semibold text-foreground mb-8 flex items-center gap-2\">
                <i data-lucide=\"user\" class=\"w-6 h-6 text-primary\"></i>
                Mon profil
            </h2>

            <div class=\"flex flex-col sm:flex-row items-center sm:items-start gap-8\">
                <div class=\"flex-shrink-0\">
                    ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "IMAGE", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "IMAGE", [], "any", false, false, false, 48), "html", null, true);
            yield "\" alt=\"\" class=\"w-32 h-32 rounded-2xl object-cover ring-4 ring-primary/20 shadow-xl\" onerror=\"this.src='https://ui-avatars.com/api/?name=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "PRENOM", [], "any", false, false, false, 48)), "html", null, true);
            yield "+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "NOM", [], "any", false, false, false, 48)), "html", null, true);
            yield "&size=128'\">
                    ";
        } else {
            // line 50
            yield "                        <img src=\"https://ui-avatars.com/api/?name=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "PRENOM", [], "any", false, false, false, 50)), "html", null, true);
            yield "+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "NOM", [], "any", false, false, false, 50)), "html", null, true);
            yield "&size=128\" alt=\"\" class=\"w-32 h-32 rounded-2xl object-cover ring-4 ring-primary/20 shadow-xl\">
                    ";
        }
        // line 52
        yield "                </div>
                <div class=\"flex-1 w-full space-y-6\">
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Nom complet</p>
                        <p class=\"text-xl font-semibold text-foreground\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "PRENOM", [], "any", false, false, false, 56), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "NOM", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Email</p>
                        <p class=\"text-foreground flex items-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4 text-primary\"></i>
                            ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "EMAIL", [], "any", false, false, false, 62), "html", null, true);
        yield "
                        </p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Téléphone</p>
                        <p class=\"text-foreground flex items-center gap-2\">
                            <i data-lucide=\"phone\" class=\"w-4 h-4 text-primary\"></i>
                            ";
        // line 69
        yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "NUMERO", [], "any", false, false, false, 69)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "NUMERO", [], "any", false, false, false, 69) != ""))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "NUMERO", [], "any", false, false, false, 69), "html", null, true)) : ("—"));
        yield "
                        </p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Rôle</p>
                        <p class=\"flex items-center gap-2\">
                            ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "ROLE", [], "any", false, false, false, 75) == "ROLE_ADMIN")) {
            // line 76
            yield "                                <span class=\"px-3 py-1.5 rounded-full text-sm font-medium bg-purple-500/20 text-purple-400 border border-purple-500/30\">Admin</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "ROLE", [], "any", false, false, false, 77) == "ROLE_PSY")) {
            // line 78
            yield "                                <span class=\"px-3 py-1.5 rounded-full text-sm font-medium bg-teal-500/20 text-teal-400 border border-teal-500/30\">Psy</span>
                            ";
        } else {
            // line 80
            yield "                                <span class=\"px-3 py-1.5 rounded-full text-sm font-medium bg-blue-500/20 text-blue-400 border border-blue-500/30\">Étudiant</span>
                            ";
        }
        // line 82
        yield "                        </p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Identifiant</p>
                        <p class=\"text-sm text-muted-foreground\">#";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>

            <div class=\"mt-10 pt-8 border-t border-border/50\">
                <h3 class=\"text-sm font-semibold text-foreground mb-4\">Résumé de l’activité</h3>
                <div class=\"grid grid-cols-2 sm:grid-cols-4 gap-4\">
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-primary\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "publications", [], "any", false, false, false, 95)), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Publications</p>
                    </div>
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-accent\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "commentaires", [], "any", false, false, false, 99)), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Commentaires</p>
                    </div>
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-academic\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "reservations", [], "any", false, false, false, 103)), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Réservations</p>
                    </div>
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-personal\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "offrejobs", [], "any", false, false, false, 107)), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Offres créées</p>
                    </div>
                </div>
            </div>

            <div class=\"mt-8 flex flex-wrap gap-4\">
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-border hover:bg-white/5 transition-colors text-sm font-medium\">
                    <i data-lucide=\"arrow-left\" class=\"w-4 h-4\"></i>
                    Retour à l’accueil
                </a>
                <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit");
        yield "\" class=\"inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white hover:bg-primary/90 transition-colors text-sm font-medium shadow-lg shadow-primary/25\">
                    <i data-lucide=\"edit\" class=\"w-4 h-4\"></i>
                    Modifier mon profil
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    if (typeof lucide !== 'undefined') lucide.createIcons();
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
        return "front/user/profile.html.twig";
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
        return array (  308 => 118,  301 => 114,  291 => 107,  284 => 103,  277 => 99,  270 => 95,  258 => 86,  252 => 82,  248 => 80,  244 => 78,  242 => 77,  239 => 76,  237 => 75,  228 => 69,  218 => 62,  207 => 56,  201 => 52,  193 => 50,  183 => 48,  181 => 47,  157 => 26,  149 => 24,  141 => 22,  135 => 20,  133 => 19,  126 => 15,  122 => 14,  118 => 13,  114 => 12,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}Mon Profil - NoVas{% endblock %}

{% block body %}
<nav class=\"fixed top-0 left-0 right-0 z-50 glass border-b border-border/30\">
    <div class=\"max-w-7xl mx-auto px-6 lg:px-8\">
        <div class=\"flex items-center justify-between h-20\">
            <a href=\"{{ path('app_home') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Accueil</a>
            <div class=\"hidden md:flex items-center gap-8\">
                <a href=\"{{ path('app_learning_paths_index') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Parcours</a>
                <a href=\"{{ path('app_reservation_ateliers') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Ateliers</a>
                <a href=\"{{ path('app_publications_index') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Publications</a>
                <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Emplois</a>
                <a href=\"{{ path('app_skills_index') }}\" class=\"text-sm font-medium text-muted-foreground hover:text-foreground transition-colors\">Compétences</a>
            </div>
            <div class=\"flex items-center gap-4\">
                <div class=\"hidden md:flex items-center gap-3 px-4 py-2 glass-card rounded-xl\">
                    {% if user.IMAGE %}
                        <img src=\"{{ user.IMAGE }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-cover ring-2 ring-primary/30\">
                    {% else %}
                        <img src=\"https://ui-avatars.com/api/?name={{ user.PRENOM|url_encode }}+{{ user.NOM|url_encode }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-cover ring-2 ring-primary/30\">
                    {% endif %}
                    <span class=\"text-sm font-medium\">{{ user.PRENOM }} {{ user.NOM }}</span>
                </div>
                <a href=\"{{ path('app_logout') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Déconnexion</a>
            </div>
        </div>
    </div>
</nav>

<section class=\"relative min-h-screen pt-32 pb-16\">
    <div class=\"absolute inset-0 -z-10\">
        <div class=\"absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl\"></div>
        <div class=\"absolute bottom-20 right-10 w-96 h-96 bg-academic/10 rounded-full blur-3xl\"></div>
    </div>

    <div class=\"max-w-3xl mx-auto px-6\">
        <div class=\"glass-card rounded-3xl p-8 md:p-12\">
            <h2 class=\"font-serif text-2xl font-semibold text-foreground mb-8 flex items-center gap-2\">
                <i data-lucide=\"user\" class=\"w-6 h-6 text-primary\"></i>
                Mon profil
            </h2>

            <div class=\"flex flex-col sm:flex-row items-center sm:items-start gap-8\">
                <div class=\"flex-shrink-0\">
                    {% if user.IMAGE %}
                        <img src=\"{{ user.IMAGE }}\" alt=\"\" class=\"w-32 h-32 rounded-2xl object-cover ring-4 ring-primary/20 shadow-xl\" onerror=\"this.src='https://ui-avatars.com/api/?name={{ user.PRENOM|url_encode }}+{{ user.NOM|url_encode }}&size=128'\">
                    {% else %}
                        <img src=\"https://ui-avatars.com/api/?name={{ user.PRENOM|url_encode }}+{{ user.NOM|url_encode }}&size=128\" alt=\"\" class=\"w-32 h-32 rounded-2xl object-cover ring-4 ring-primary/20 shadow-xl\">
                    {% endif %}
                </div>
                <div class=\"flex-1 w-full space-y-6\">
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Nom complet</p>
                        <p class=\"text-xl font-semibold text-foreground\">{{ user.PRENOM }} {{ user.NOM }}</p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Email</p>
                        <p class=\"text-foreground flex items-center gap-2\">
                            <i data-lucide=\"mail\" class=\"w-4 h-4 text-primary\"></i>
                            {{ user.EMAIL }}
                        </p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Téléphone</p>
                        <p class=\"text-foreground flex items-center gap-2\">
                            <i data-lucide=\"phone\" class=\"w-4 h-4 text-primary\"></i>
                            {{ user.NUMERO is not null and user.NUMERO != '' ? user.NUMERO : '—' }}
                        </p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Rôle</p>
                        <p class=\"flex items-center gap-2\">
                            {% if user.ROLE == 'ROLE_ADMIN' %}
                                <span class=\"px-3 py-1.5 rounded-full text-sm font-medium bg-purple-500/20 text-purple-400 border border-purple-500/30\">Admin</span>
                            {% elseif user.ROLE == 'ROLE_PSY' %}
                                <span class=\"px-3 py-1.5 rounded-full text-sm font-medium bg-teal-500/20 text-teal-400 border border-teal-500/30\">Psy</span>
                            {% else %}
                                <span class=\"px-3 py-1.5 rounded-full text-sm font-medium bg-blue-500/20 text-blue-400 border border-blue-500/30\">Étudiant</span>
                            {% endif %}
                        </p>
                    </div>
                    <div>
                        <p class=\"text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1\">Identifiant</p>
                        <p class=\"text-sm text-muted-foreground\">#{{ user.id }}</p>
                    </div>
                </div>
            </div>

            <div class=\"mt-10 pt-8 border-t border-border/50\">
                <h3 class=\"text-sm font-semibold text-foreground mb-4\">Résumé de l’activité</h3>
                <div class=\"grid grid-cols-2 sm:grid-cols-4 gap-4\">
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-primary\">{{ user.publications|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Publications</p>
                    </div>
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-accent\">{{ user.commentaires|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Commentaires</p>
                    </div>
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-academic\">{{ user.reservations|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Réservations</p>
                    </div>
                    <div class=\"glass-card rounded-xl p-4 text-center\">
                        <p class=\"text-2xl font-bold text-personal\">{{ user.offrejobs|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Offres créées</p>
                    </div>
                </div>
            </div>

            <div class=\"mt-8 flex flex-wrap gap-4\">
                <a href=\"{{ path('app_home') }}\" class=\"inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-border hover:bg-white/5 transition-colors text-sm font-medium\">
                    <i data-lucide=\"arrow-left\" class=\"w-4 h-4\"></i>
                    Retour à l’accueil
                </a>
                <a href=\"{{ path('app_user_edit') }}\" class=\"inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white hover:bg-primary/90 transition-colors text-sm font-medium shadow-lg shadow-primary/25\">
                    <i data-lucide=\"edit\" class=\"w-4 h-4\"></i>
                    Modifier mon profil
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    if (typeof lucide !== 'undefined') lucide.createIcons();
</script>
{% endblock %}
", "front/user/profile.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\front\\user\\profile.html.twig");
    }
}
