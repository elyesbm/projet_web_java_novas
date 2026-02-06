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

/* jobs/ajouter.html.twig */
class __TwigTemplate_4761bc76283419b19f18dd2a0d80b99a extends Template
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
        return "base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jobs/ajouter.html.twig"));

        $this->parent = $this->load("base_home.html.twig", 1);
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

        yield "Publier une offre - NoVas Jobs";
        
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
        
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4 inline mr-1\"></i>
                Retour aux offres
            </a>
        </div>
    </div>
</nav>

<!-- Form Section -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-3xl mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-6\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                Nouvelle opportunité
            </div>
            <h1 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">
                Publier une <span class=\"italic text-primary\">offre d'emploi</span>
            </h1>
            <p class=\"text-muted-foreground\">Décrivez votre besoin et trouvez l'étudiant idéal.</p>
        </div>

        <div class=\"glass-card rounded-2xl p-8\">
            <form method=\"POST\" action=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_ajouter");
        yield "\" class=\"space-y-6\">
                <!-- Type d'offre -->
                <div>
                    <label class=\"block text-sm font-medium mb-3\">Type d'offre</label>
                    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-3\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"tutorat\" class=\"peer sr-only\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"book-open\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Tutorat</span>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"aide\" class=\"peer sr-only\">
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"help-circle\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Aide académique</span>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"pratique\" class=\"peer sr-only\">
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"wrench\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Activité pratique</span>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"projet\" class=\"peer sr-only\">
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"users\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Projet</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Titre de l'offre</label>
                    <input type=\"text\" name=\"titre\" placeholder=\"Ex: Cours de mathématiques niveau L1\" required
                           class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                </div>

                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Description détaillée</label>
                    <textarea name=\"description\" rows=\"5\" placeholder=\"Décrivez la mission, les tâches attendues, le profil recherché...\" required
                              class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none resize-none transition-colors\"></textarea>
                </div>

                <div class=\"grid md:grid-cols-2 gap-6\">
                    <!-- Matière -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Matière/Domaine</label>
                        <input type=\"text\" name=\"matiere\" placeholder=\"Ex: Mathématiques, Informatique...\"
                               class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                    </div>

                    <!-- Localisation -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Localisation</label>
                        <div class=\"relative\">
                            <i data-lucide=\"map-pin\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"text\" name=\"localisation\" placeholder=\"Ex: Campus, En ligne...\" required
                                   class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                        </div>
                    </div>
                </div>

                <div class=\"grid md:grid-cols-2 gap-6\">
                    <!-- Durée -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Durée</label>
                        <div class=\"relative\">
                            <i data-lucide=\"clock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"text\" name=\"duree\" placeholder=\"Ex: 2h/semaine, Projet 1 mois...\" required
                                   class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                        </div>
                    </div>

                    <!-- Rémunération -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Rémunération (€/heure)</label>
                        <div class=\"relative\">
                            <i data-lucide=\"euro\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"number\" name=\"remuneration\" placeholder=\"20\" min=\"0\" required
                                   class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                        </div>
                    </div>
                </div>

                <!-- Compétences -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Compétences requises (séparées par des virgules)</label>
                    <input type=\"text\" name=\"competences\" placeholder=\"Ex: Python, Pédagogie, Patience...\"
                           class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                </div>

                <!-- Buttons -->
                <div class=\"flex gap-4 pt-4\">
                    <button type=\"submit\" class=\"flex-1 py-4 rounded-xl bg-primary text-white font-medium hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                        <i data-lucide=\"check\" class=\"w-5 h-5 inline mr-2\"></i>
                        Publier l'offre
                    </button>
                    <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jobs_index");
        yield "\" class=\"px-8 py-4 rounded-xl border border-white/20 font-medium hover:bg-white/5 transition\">
                        Annuler
                    </a>
                </div>
            </form>
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
        return "jobs/ajouter.html.twig";
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
        return array (  252 => 147,  145 => 43,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_home.html.twig' %}

{% block title %}Publier une offre - NoVas Jobs{% endblock %}

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
        
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_jobs_index') }}\" class=\"text-sm text-muted-foreground hover:text-foreground transition-colors\">
                <i data-lucide=\"arrow-left\" class=\"w-4 h-4 inline mr-1\"></i>
                Retour aux offres
            </a>
        </div>
    </div>
</nav>

<!-- Form Section -->
<section class=\"relative pt-32 pb-16 min-h-screen\">
    <div class=\"absolute inset-0 gradient-orb\"></div>
    <div class=\"absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px]\"></div>
    
    <div class=\"relative max-w-3xl mx-auto px-6\">
        <div class=\"text-center mb-12\">
            <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-6\">
                <i data-lucide=\"plus\" class=\"w-4 h-4\"></i>
                Nouvelle opportunité
            </div>
            <h1 class=\"font-serif text-3xl md:text-4xl font-medium mb-4\">
                Publier une <span class=\"italic text-primary\">offre d'emploi</span>
            </h1>
            <p class=\"text-muted-foreground\">Décrivez votre besoin et trouvez l'étudiant idéal.</p>
        </div>

        <div class=\"glass-card rounded-2xl p-8\">
            <form method=\"POST\" action=\"{{ path('app_jobs_ajouter') }}\" class=\"space-y-6\">
                <!-- Type d'offre -->
                <div>
                    <label class=\"block text-sm font-medium mb-3\">Type d'offre</label>
                    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-3\">
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"tutorat\" class=\"peer sr-only\" checked>
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"book-open\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Tutorat</span>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"aide\" class=\"peer sr-only\">
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"help-circle\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Aide académique</span>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"pratique\" class=\"peer sr-only\">
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"wrench\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Activité pratique</span>
                            </div>
                        </label>
                        <label class=\"cursor-pointer\">
                            <input type=\"radio\" name=\"type\" value=\"projet\" class=\"peer sr-only\">
                            <div class=\"p-4 rounded-xl border border-white/10 peer-checked:border-primary peer-checked:bg-primary/10 transition text-center\">
                                <i data-lucide=\"users\" class=\"w-6 h-6 mx-auto mb-2 text-primary\"></i>
                                <span class=\"text-sm font-medium\">Projet</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Titre -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Titre de l'offre</label>
                    <input type=\"text\" name=\"titre\" placeholder=\"Ex: Cours de mathématiques niveau L1\" required
                           class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                </div>

                <!-- Description -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Description détaillée</label>
                    <textarea name=\"description\" rows=\"5\" placeholder=\"Décrivez la mission, les tâches attendues, le profil recherché...\" required
                              class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none resize-none transition-colors\"></textarea>
                </div>

                <div class=\"grid md:grid-cols-2 gap-6\">
                    <!-- Matière -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Matière/Domaine</label>
                        <input type=\"text\" name=\"matiere\" placeholder=\"Ex: Mathématiques, Informatique...\"
                               class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                    </div>

                    <!-- Localisation -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Localisation</label>
                        <div class=\"relative\">
                            <i data-lucide=\"map-pin\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"text\" name=\"localisation\" placeholder=\"Ex: Campus, En ligne...\" required
                                   class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                        </div>
                    </div>
                </div>

                <div class=\"grid md:grid-cols-2 gap-6\">
                    <!-- Durée -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Durée</label>
                        <div class=\"relative\">
                            <i data-lucide=\"clock\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"text\" name=\"duree\" placeholder=\"Ex: 2h/semaine, Projet 1 mois...\" required
                                   class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                        </div>
                    </div>

                    <!-- Rémunération -->
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Rémunération (€/heure)</label>
                        <div class=\"relative\">
                            <i data-lucide=\"euro\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"number\" name=\"remuneration\" placeholder=\"20\" min=\"0\" required
                                   class=\"w-full pl-12 pr-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                        </div>
                    </div>
                </div>

                <!-- Compétences -->
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Compétences requises (séparées par des virgules)</label>
                    <input type=\"text\" name=\"competences\" placeholder=\"Ex: Python, Pédagogie, Patience...\"
                           class=\"w-full px-4 py-3 rounded-xl bg-background/50 border border-white/10 focus:border-primary/50 focus:outline-none transition-colors\">
                </div>

                <!-- Buttons -->
                <div class=\"flex gap-4 pt-4\">
                    <button type=\"submit\" class=\"flex-1 py-4 rounded-xl bg-primary text-white font-medium hover:bg-primary/90 transition shadow-lg shadow-primary/25\">
                        <i data-lucide=\"check\" class=\"w-5 h-5 inline mr-2\"></i>
                        Publier l'offre
                    </button>
                    <a href=\"{{ path('app_jobs_index') }}\" class=\"px-8 py-4 rounded-xl border border-white/20 font-medium hover:bg-white/5 transition\">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
{% endblock %}", "jobs/ajouter.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\jobs\\ajouter.html.twig");
    }
}
