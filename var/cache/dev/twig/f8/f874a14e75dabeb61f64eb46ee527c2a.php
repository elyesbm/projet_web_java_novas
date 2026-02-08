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

/* front/jobs/detail.html.twig */
class __TwigTemplate_2b5aec1b839c27ae05ad57f145bc11fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jobs/detail.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - NoVas Jobs";
        
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
        yield "<!-- Navigation -->
<nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
    <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
            <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
            </div>
            <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
        </a>
        
        <div class=\"hidden md:flex items-center gap-8\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"text-sm text-primary font-medium\">Jobs</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marketplace_index");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Marketplace</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4 inline mr-1\"></i>
                Retour aux offres
            </a>
        </div>
    </div>
</nav>

<!-- Job Detail -->
<section class=\"relative pt-32 pb-16\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-5xl mx-auto px-6\">
        <!-- Breadcrumb -->
        <div class=\"flex items-center gap-2 text-sm text-muted-foreground mb-8\">
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"hover:text-foreground\">Accueil</a>
            <i data-lucide=\"chevron-right\" class=\"w-4 h-4\"></i>
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"hover:text-foreground\">Jobs</a>
            <i data-lucide=\"chevron-right\" class=\"w-4 h-4\"></i>
            <span class=\"text-foreground\">Détail</span>
        </div>

        <div class=\"grid lg:grid-cols-3 gap-8\">
            <!-- Main Content -->
            <div class=\"lg:col-span-2 space-y-6\">
                <div class=\"glass-card rounded-2xl p-8\">
                    <div class=\"flex items-start justify-between mb-6\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center\">
                                ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52) == "tutorat")) {
            // line 53
            yield "                                    <i data-lucide=\"book-open\" class=\"w-8 h-8 text-primary\"></i>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54) == "aide")) {
            // line 55
            yield "                                    <i data-lucide=\"help-circle\" class=\"w-8 h-8 text-primary\"></i>
                                ";
        } else {
            // line 57
            yield "                                    <i data-lucide=\"wrench\" class=\"w-8 h-8 text-primary\"></i>
                                ";
        }
        // line 59
        yield "                            </div>
                            <div>
                                <span class=\"inline-block px-3 py-1 rounded-full text-xs font-medium bg-primary/20 text-primary mb-2\">
                                    ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62)), "html", null, true);
        yield "
                                </span>
                                <h1 class=\"text-2xl md:text-3xl font-bold\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 64, $this->source); })()), "titre", [], "any", false, false, false, 64), "html", null, true);
        yield "</h1>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-3xl font-bold text-primary\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 68, $this->source); })()), "remuneration", [], "any", false, false, false, 68), "html", null, true);
        yield "€</p>
                            <p class=\"text-sm text-muted-foreground\">/heure</p>
                        </div>
                    </div>

                    <div class=\"flex flex-wrap gap-4 mb-8 text-sm\">
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"map-pin\" class=\"w-4 h-4 text-primary\"></i>
                            <span>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 76, $this->source); })()), "localisation", [], "any", false, false, false, 76), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4 text-primary\"></i>
                            <span>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 80, $this->source); })()), "duree", [], "any", false, false, false, 80), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                            <span>Publié le ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 84, $this->source); })()), "datePublication", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"users\" class=\"w-4 h-4 text-primary\"></i>
                            <span>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 88, $this->source); })()), "nbCandidatures", [], "any", false, false, false, 88), "html", null, true);
        yield " candidature(s)</span>
                        </div>
                    </div>

                    <div class=\"space-y-6\">
                        <div>
                            <h3 class=\"text-lg font-semibold mb-3 flex items-center gap-2\">
                                <i data-lucide=\"file-text\" class=\"w-5 h-5 text-primary\"></i>
                                Description
                            </h3>
                            <p class=\"text-muted-foreground leading-relaxed whitespace-pre-line\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), "html", null, true);
        yield "</p>
                        </div>

                        ";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 101, $this->source); })()), "competencesRequises", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "                        <div>
                            <h3 class=\"text-lg font-semibold mb-3 flex items-center gap-2\">
                                <i data-lucide=\"check-circle\" class=\"w-5 h-5 text-primary\"></i>
                                Compétences requises
                            </h3>
                            <div class=\"flex flex-wrap gap-2\">
                                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 108, $this->source); })()), "competencesRequises", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 109
                yield "                                <span class=\"px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-sm border border-primary/20\">
                                    ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["competence"], "html", null, true);
                yield "
                                </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "                            </div>
                        </div>
                        ";
        }
        // line 116
        yield "
                        ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 117, $this->source); })()), "matiere", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                        <div>
                            <h3 class=\"text-lg font-semibold mb-3 flex items-center gap-2\">
                                <i data-lucide=\"book\" class=\"w-5 h-5 text-primary\"></i>
                                Matière concernée
                            </h3>
                            <p class=\"text-muted-foreground\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 123, $this->source); })()), "matiere", [], "any", false, false, false, 123), "html", null, true);
            yield "</p>
                        </div>
                        ";
        }
        // line 126
        yield "                    </div>
                </div>

                <!-- Creator Card -->
                <div class=\"glass-card rounded-2xl p-6\">
                    <h3 class=\"text-lg font-semibold mb-4\">À propos du créateur</h3>
                    <div class=\"flex items-center gap-4\">
                        <div class=\"w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center text-xl font-bold text-primary\">
                            ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 134, $this->source); })()), "createur", [], "any", false, false, false, 134), "nom", [], "any", false, false, false, 134)), "html", null, true);
        yield "
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-semibold text-lg\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 137, $this->source); })()), "createur", [], "any", false, false, false, 137), "nom", [], "any", false, false, false, 137), "html", null, true);
        yield "</p>
                            <p class=\"text-sm text-muted-foreground\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 138, $this->source); })()), "createur", [], "any", false, false, false, 138), "niveau", [], "any", false, false, false, 138), "html", null, true);
        yield "</p>
                            <div class=\"flex items-center gap-4 mt-2 text-sm text-muted-foreground\">
                                <span class=\"flex items-center gap-1\">
                                    <i data-lucide=\"award\" class=\"w-4 h-4\"></i>
                                    Membre depuis ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 142, $this->source); })()), "createur", [], "any", false, false, false, 142), "membreDepuis", [], "any", false, false, false, 142), "html", null, true);
        yield "
                                </span>
                                <span class=\"flex items-center gap-1\">
                                    <i data-lucide=\"star\" class=\"w-4 h-4 text-primary fill-primary\"></i>
                                    ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 146, $this->source); })()), "createur", [], "any", false, false, false, 146), "note", [], "any", false, false, false, 146), "html", null, true);
        yield "/5
                                </span>
                            </div>
                        </div>
                        <a href=\"#\" class=\"px-4 py-2 rounded-xl border border-white/20 hover:bg-white/5 transition text-sm\">
                            Voir le profil
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class=\"space-y-6\">
                <!-- Apply Card -->
                <div class=\"glass-card rounded-2xl p-6 sticky top-24\">
                    ";
        // line 161
        if ((($tmp = (isset($context["dejaPostule"]) || array_key_exists("dejaPostule", $context) ? $context["dejaPostule"] : (function () { throw new RuntimeError('Variable "dejaPostule" does not exist.', 161, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                    <div class=\"text-center py-4\">
                        <div class=\"w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center mx-auto mb-4\">
                            <i data-lucide=\"check\" class=\"w-8 h-8 text-accent\"></i>
                        </div>
                        <h3 class=\"font-semibold mb-2\">Candidature envoyée !</h3>
                        <p class=\"text-sm text-muted-foreground mb-4\">Vous avez déjà postulé à cette offre.</p>
                        <a href=\"";
            // line 168
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_mes_candidatures");
            yield "\" class=\"block w-full py-3 rounded-xl bg-primary/10 text-primary text-center font-medium hover:bg-primary/20 transition\">
                            Voir mes candidatures
                        </a>
                    </div>
                    ";
        } elseif ((($tmp =         // line 172
(isset($context["isCreateur"]) || array_key_exists("isCreateur", $context) ? $context["isCreateur"] : (function () { throw new RuntimeError('Variable "isCreateur" does not exist.', 172, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                    <div class=\"text-center py-4\">
                        <div class=\"w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center mx-auto mb-4\">
                            <i data-lucide=\"settings\" class=\"w-8 h-8 text-primary\"></i>
                        </div>
                        <h3 class=\"font-semibold mb-2\">Votre offre</h3>
                        <p class=\"text-sm text-muted-foreground mb-4\">Gérez les candidatures reçues.</p>
                        <a href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_candidatures", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)]), "html", null, true);
            yield "\" class=\"block w-full py-3 rounded-xl bg-primary text-white text-center font-medium hover:bg-primary/90 transition mb-3\">
                            Voir les candidatures
                        </a>
                        <a href=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 182, $this->source); })()), "id", [], "any", false, false, false, 182)]), "html", null, true);
            yield "\" class=\"block w-full py-3 rounded-xl border border-white/20 text-center font-medium hover:bg-white/5 transition\">
                            Modifier l'offre
                        </a>
                    </div>
                    ";
        } else {
            // line 187
            yield "                    <h3 class=\"text-lg font-semibold mb-4\">Postuler à cette offre</h3>
                    <form action=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_postuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188)]), "html", null, true);
            yield "\" method=\"POST\" class=\"space-y-4\">
                        <div>
                            <label class=\"block text-sm font-medium mb-2\">Votre message</label>
                            <textarea name=\"message\" rows=\"4\" placeholder=\"Présentez-vous et expliquez pourquoi vous êtes intéressé...\" 
                                      class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none resize-none text-sm\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"w-full py-3 rounded-xl bg-primary text-white font-medium hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                            Envoyer ma candidature
                        </button>
                    </form>
                    <p class=\"text-xs text-muted-foreground text-center mt-4\">
                        Le créateur recevra votre candidature et vous répondra sous 48h.
                    </p>
                    ";
        }
        // line 202
        yield "                </div>

                <!-- Similar Jobs -->
                <div class=\"glass-card rounded-2xl p-6\">
                    <h3 class=\"text-lg font-semibold mb-4\">Offres similaires</h3>
                    <div class=\"space-y-4\">
                        ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jobsSimilaires"]) || array_key_exists("jobsSimilaires", $context) ? $context["jobsSimilaires"] : (function () { throw new RuntimeError('Variable "jobsSimilaires" does not exist.', 208, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["similar"]) {
            // line 209
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "id", [], "any", false, false, false, 209)]), "html", null, true);
            yield "\" class=\"block p-4 rounded-xl bg-white/5 hover:bg-white/10 transition group\">
                            <div class=\"flex justify-between items-start mb-2\">
                                <h4 class=\"font-medium text-sm group-hover:text-primary transition-colors\">";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "titre", [], "any", false, false, false, 211), "html", null, true);
            yield "</h4>
                                <span class=\"text-primary font-semibold text-sm\">";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "remuneration", [], "any", false, false, false, 212), "html", null, true);
            yield "€</span>
                            </div>
                            <p class=\"text-xs text-muted-foreground\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "type", [], "any", false, false, false, 214)), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "localisation", [], "any", false, false, false, 214), "html", null, true);
            yield "</p>
                        </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['similar'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
        return "front/jobs/detail.html.twig";
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
        return array (  450 => 217,  439 => 214,  434 => 212,  430 => 211,  424 => 209,  420 => 208,  412 => 202,  395 => 188,  392 => 187,  384 => 182,  378 => 179,  370 => 173,  368 => 172,  361 => 168,  353 => 162,  351 => 161,  333 => 146,  326 => 142,  319 => 138,  315 => 137,  309 => 134,  299 => 126,  293 => 123,  286 => 118,  284 => 117,  281 => 116,  276 => 113,  267 => 110,  264 => 109,  260 => 108,  252 => 102,  250 => 101,  244 => 98,  231 => 88,  224 => 84,  217 => 80,  210 => 76,  199 => 68,  192 => 64,  187 => 62,  182 => 59,  178 => 57,  174 => 55,  172 => 54,  169 => 53,  167 => 52,  152 => 40,  147 => 38,  128 => 22,  121 => 18,  117 => 17,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base_home.html.twig' %}

{% block title %}{{ job.titre }} - NoVas Jobs{% endblock %}

{% block body %}
<!-- Navigation -->
<nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
    <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
        <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
            <div class=\"w-10 h-10 rounded-xl bg-primary flex items-center justify-center glow-primary\">
                <i data-lucide=\"graduation-cap\" class=\"w-6 h-6 text-white\"></i>
            </div>
            <span class=\"text-xl font-bold tracking-tight\">Edu<span class=\"text-primary\">Vie</span></span>
        </a>
        
        <div class=\"hidden md:flex items-center gap-8\">
            <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm text-primary font-medium\">Jobs</a>
            <a href=\"{{ path('app_marketplace_index') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">Marketplace</a>
        </div>
        
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4 inline mr-1\"></i>
                Retour aux offres
            </a>
        </div>
    </div>
</nav>

<!-- Job Detail -->
<section class=\"relative pt-32 pb-16\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-5xl mx-auto px-6\">
        <!-- Breadcrumb -->
        <div class=\"flex items-center gap-2 text-sm text-muted-foreground mb-8\">
            <a href=\"{{ path('app_home') }}\" class=\"hover:text-foreground\">Accueil</a>
            <i data-lucide=\"chevron-right\" class=\"w-4 h-4\"></i>
            <a href=\"{{ path('app_jobs_index') }}\" class=\"hover:text-foreground\">Jobs</a>
            <i data-lucide=\"chevron-right\" class=\"w-4 h-4\"></i>
            <span class=\"text-foreground\">Détail</span>
        </div>

        <div class=\"grid lg:grid-cols-3 gap-8\">
            <!-- Main Content -->
            <div class=\"lg:col-span-2 space-y-6\">
                <div class=\"glass-card rounded-2xl p-8\">
                    <div class=\"flex items-start justify-between mb-6\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center\">
                                {% if job.type == 'tutorat' %}
                                    <i data-lucide=\"book-open\" class=\"w-8 h-8 text-primary\"></i>
                                {% elseif job.type == 'aide' %}
                                    <i data-lucide=\"help-circle\" class=\"w-8 h-8 text-primary\"></i>
                                {% else %}
                                    <i data-lucide=\"wrench\" class=\"w-8 h-8 text-primary\"></i>
                                {% endif %}
                            </div>
                            <div>
                                <span class=\"inline-block px-3 py-1 rounded-full text-xs font-medium bg-primary/20 text-primary mb-2\">
                                    {{ job.type|capitalize }}
                                </span>
                                <h1 class=\"text-2xl md:text-3xl font-bold\">{{ job.titre }}</h1>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-3xl font-bold text-primary\">{{ job.remuneration }}€</p>
                            <p class=\"text-sm text-muted-foreground\">/heure</p>
                        </div>
                    </div>

                    <div class=\"flex flex-wrap gap-4 mb-8 text-sm\">
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"map-pin\" class=\"w-4 h-4 text-primary\"></i>
                            <span>{{ job.localisation }}</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"clock\" class=\"w-4 h-4 text-primary\"></i>
                            <span>{{ job.duree }}</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"calendar\" class=\"w-4 h-4 text-primary\"></i>
                            <span>Publié le {{ job.datePublication|date('d/m/Y') }}</span>
                        </div>
                        <div class=\"flex items-center gap-2 px-4 py-2 rounded-xl bg-white/5\">
                            <i data-lucide=\"users\" class=\"w-4 h-4 text-primary\"></i>
                            <span>{{ job.nbCandidatures }} candidature(s)</span>
                        </div>
                    </div>

                    <div class=\"space-y-6\">
                        <div>
                            <h3 class=\"text-lg font-semibold mb-3 flex items-center gap-2\">
                                <i data-lucide=\"file-text\" class=\"w-5 h-5 text-primary\"></i>
                                Description
                            </h3>
                            <p class=\"text-muted-foreground leading-relaxed whitespace-pre-line\">{{ job.description }}</p>
                        </div>

                        {% if job.competencesRequises %}
                        <div>
                            <h3 class=\"text-lg font-semibold mb-3 flex items-center gap-2\">
                                <i data-lucide=\"check-circle\" class=\"w-5 h-5 text-primary\"></i>
                                Compétences requises
                            </h3>
                            <div class=\"flex flex-wrap gap-2\">
                                {% for competence in job.competencesRequises %}
                                <span class=\"px-3 py-1.5 rounded-lg bg-primary/10 text-primary text-sm border border-primary/20\">
                                    {{ competence }}
                                </span>
                                {% endfor %}
                            </div>
                        </div>
                        {% endif %}

                        {% if job.matiere %}
                        <div>
                            <h3 class=\"text-lg font-semibold mb-3 flex items-center gap-2\">
                                <i data-lucide=\"book\" class=\"w-5 h-5 text-primary\"></i>
                                Matière concernée
                            </h3>
                            <p class=\"text-muted-foreground\">{{ job.matiere }}</p>
                        </div>
                        {% endif %}
                    </div>
                </div>

                <!-- Creator Card -->
                <div class=\"glass-card rounded-2xl p-6\">
                    <h3 class=\"text-lg font-semibold mb-4\">À propos du créateur</h3>
                    <div class=\"flex items-center gap-4\">
                        <div class=\"w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center text-xl font-bold text-primary\">
                            {{ job.createur.nom|first }}
                        </div>
                        <div class=\"flex-1\">
                            <p class=\"font-semibold text-lg\">{{ job.createur.nom }}</p>
                            <p class=\"text-sm text-muted-foreground\">{{ job.createur.niveau }}</p>
                            <div class=\"flex items-center gap-4 mt-2 text-sm text-muted-foreground\">
                                <span class=\"flex items-center gap-1\">
                                    <i data-lucide=\"award\" class=\"w-4 h-4\"></i>
                                    Membre depuis {{ job.createur.membreDepuis }}
                                </span>
                                <span class=\"flex items-center gap-1\">
                                    <i data-lucide=\"star\" class=\"w-4 h-4 text-primary fill-primary\"></i>
                                    {{ job.createur.note }}/5
                                </span>
                            </div>
                        </div>
                        <a href=\"#\" class=\"px-4 py-2 rounded-xl border border-white/20 hover:bg-white/5 transition text-sm\">
                            Voir le profil
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class=\"space-y-6\">
                <!-- Apply Card -->
                <div class=\"glass-card rounded-2xl p-6 sticky top-24\">
                    {% if dejaPostule %}
                    <div class=\"text-center py-4\">
                        <div class=\"w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center mx-auto mb-4\">
                            <i data-lucide=\"check\" class=\"w-8 h-8 text-accent\"></i>
                        </div>
                        <h3 class=\"font-semibold mb-2\">Candidature envoyée !</h3>
                        <p class=\"text-sm text-muted-foreground mb-4\">Vous avez déjà postulé à cette offre.</p>
                        <a href=\"{{ path('app_jobs_mes_candidatures') }}\" class=\"block w-full py-3 rounded-xl bg-primary/10 text-primary text-center font-medium hover:bg-primary/20 transition\">
                            Voir mes candidatures
                        </a>
                    </div>
                    {% elseif isCreateur %}
                    <div class=\"text-center py-4\">
                        <div class=\"w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center mx-auto mb-4\">
                            <i data-lucide=\"settings\" class=\"w-8 h-8 text-primary\"></i>
                        </div>
                        <h3 class=\"font-semibold mb-2\">Votre offre</h3>
                        <p class=\"text-sm text-muted-foreground mb-4\">Gérez les candidatures reçues.</p>
                        <a href=\"{{ path('app_jobs_candidatures', {'id': job.id}) }}\" class=\"block w-full py-3 rounded-xl bg-primary text-white text-center font-medium hover:bg-primary/90 transition mb-3\">
                            Voir les candidatures
                        </a>
                        <a href=\"{{ path('app_jobs_modifier', {'id': job.id}) }}\" class=\"block w-full py-3 rounded-xl border border-white/20 text-center font-medium hover:bg-white/5 transition\">
                            Modifier l'offre
                        </a>
                    </div>
                    {% else %}
                    <h3 class=\"text-lg font-semibold mb-4\">Postuler à cette offre</h3>
                    <form action=\"{{ path('app_jobs_postuler', {'id': job.id}) }}\" method=\"POST\" class=\"space-y-4\">
                        <div>
                            <label class=\"block text-sm font-medium mb-2\">Votre message</label>
                            <textarea name=\"message\" rows=\"4\" placeholder=\"Présentez-vous et expliquez pourquoi vous êtes intéressé...\" 
                                      class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none resize-none text-sm\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"w-full py-3 rounded-xl bg-primary text-white font-medium hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                            Envoyer ma candidature
                        </button>
                    </form>
                    <p class=\"text-xs text-muted-foreground text-center mt-4\">
                        Le créateur recevra votre candidature et vous répondra sous 48h.
                    </p>
                    {% endif %}
                </div>

                <!-- Similar Jobs -->
                <div class=\"glass-card rounded-2xl p-6\">
                    <h3 class=\"text-lg font-semibold mb-4\">Offres similaires</h3>
                    <div class=\"space-y-4\">
                        {% for similar in jobsSimilaires %}
                        <a href=\"{{ path('app_jobs_detail', {'id': similar.id}) }}\" class=\"block p-4 rounded-xl bg-white/5 hover:bg-white/10 transition group\">
                            <div class=\"flex justify-between items-start mb-2\">
                                <h4 class=\"font-medium text-sm group-hover:text-primary transition-colors\">{{ similar.titre }}</h4>
                                <span class=\"text-primary font-semibold text-sm\">{{ similar.remuneration }}€</span>
                            </div>
                            <p class=\"text-xs text-muted-foreground\">{{ similar.type|capitalize }} • {{ similar.localisation }}</p>
                        </a>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "front/jobs/detail.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\jobs\\detail.html.twig");
    }
}
