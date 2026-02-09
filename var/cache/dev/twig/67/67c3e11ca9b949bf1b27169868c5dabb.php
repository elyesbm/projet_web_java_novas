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

/* front/reservation/mes_reservations.html.twig */
class __TwigTemplate_91361864c19c9e8c07c3115ef95c17f9 extends Template
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
        // line 3
        return "front/base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/reservation/mes_reservations.html.twig"));

        $this->parent = $this->load("front/base_home.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Mes Reservations - NoVas";
        
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
        yield "<div class=\"min-h-screen bg-background\">
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>

            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_mes", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Mes reservations
                </a>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ateliers");
        yield "\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les ateliers
                </a>
            </div>
        </div>
    </nav>

    <section class=\"pt-32 pb-12 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex flex-col md:flex-row md:items-end justify-between gap-6\">
                <div>
                    <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                        <i data-lucide=\"calendar-check\" class=\"w-4 h-4\"></i>
                        Mes reservations
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Vos <span class=\"italic text-primary\">ateliers</span> reserves
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Retrouvez tous vos ateliers et telechargez vos QR codes d'acces.
                    </p>
                </div>

                <div class=\"flex gap-4\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 44, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">A venir</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 48, $this->source); })())), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-muted-foreground\">Passes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Barre de recherche et filtres -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <form method=\"GET\" action=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_mes", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" id=\"searchReservationForm\" class=\"glass-card rounded-2xl p-6\">
                <div class=\"flex flex-col md:flex-row gap-4\">
                    <!-- Recherche par nom d'atelier -->
                    <div class=\"flex-1\">
                        <label for=\"search\" class=\"block text-sm font-medium mb-2 text-muted-foreground\">
                            Rechercher une réservation
                        </label>
                        <div class=\"relative\">
                            <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"text\"
                                   id=\"search\"
                                   name=\"search\"
                                   value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 71, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                   placeholder=\"Ex: Python, Communication...\"
                                   class=\"w-full h-12 pl-12 pr-4 bg-secondary border border-white/10 rounded-xl focus:outline-none focus:border-primary transition-colors\">
                        </div>
                    </div>

                    <!-- Filtre par statut -->
                    <div class=\"md:w-64\">
                        <label for=\"statut\" class=\"block text-sm font-medium mb-2 text-muted-foreground\">
                            Filtrer par statut
                        </label>
                        <select id=\"statut\"
                                name=\"statut\"
                                class=\"w-full h-12 px-4 bg-secondary border border-white/10 rounded-xl focus:outline-none focus:border-primary transition-colors appearance-none cursor-pointer\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"0\" ";
        // line 86
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 86, $this->source); })()) == 0)) ? ("selected") : (""));
        yield ">En attente</option>
                            <option value=\"1\" ";
        // line 87
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 87, $this->source); })()) == 1)) ? ("selected") : (""));
        yield ">Confirmée</option>
                        </select>
                    </div>

                    <!-- Boutons -->
                    <div class=\"flex items-end gap-2\">
                        <button type=\"submit\"
                                class=\"h-12 px-6 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all flex items-center gap-2\">
                            <i data-lucide=\"filter\" class=\"w-5 h-5\"></i>
                            <span>Filtrer</span>
                        </button>
                        ";
        // line 98
        if (((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 98, $this->source); })()) ||  !(null === (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 98, $this->source); })())))) {
            // line 99
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_mes", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\"
                               class=\"h-12 px-6 bg-secondary border border-white/10 text-foreground rounded-xl font-medium hover:bg-white/5 transition-all flex items-center gap-2\">
                                <i data-lucide=\"x\" class=\"w-5 h-5\"></i>
                                <span>Réinitialiser</span>
                            </a>
                        ";
        }
        // line 105
        yield "                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 113, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 114
            yield "            ";
            $context["atelier"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "atelier", [], "any", false, false, false, 114);
            // line 115
            yield "            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">

                    ";
            // line 119
            yield "                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square rounded-2xl overflow-hidden bg-secondary\">
                            <img src=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 121, $this->source); })()), "imageAtelier", [], "any", false, false, false, 121), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 122, $this->source); })()), "titreAtelier", [], "any", false, false, false, 122), "html", null, true);
            yield "\"
                                 class=\"w-full h-full object-cover\">
                        </div>
                    </div>

                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 131
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 131, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 131) == 0)) ? ("bg-personal/20 text-personal") : ("bg-academic/20 text-academic"));
            yield "\">
                                        ";
            // line 132
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 132, $this->source); })()), "contexteAtelier", [], "any", false, false, false, 132) == 0)) ? ("Soft Skill") : ("Hard Skill"));
            yield "
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium ";
            // line 134
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutReservation", [], "any", false, false, false, 134) == 1)) ? ("bg-green-500/20 text-green-400") : ("bg-yellow-500/20 text-yellow-400"));
            yield "\">
                                        ";
            // line 135
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutReservation", [], "any", false, false, false, 135) == 1)) ? ("Confirmee") : ("En attente"));
            yield "
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 138, $this->source); })()), "titreAtelier", [], "any", false, false, false, 138), "html", null, true);
            yield "</h3>
                                <p class=\"text-sm text-muted-foreground\">
                                    Atelier du ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 140, $this->source); })()), "dateAtelier", [], "any", false, false, false, 140), "d/m/Y"), "html", null, true);
            yield "
                                </p>
                            </div>

                            <div class=\"flex gap-2\">
                                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                                    QR Code
                                </button>
                                <form method=\"post\" action=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" class=\"inline\" onsubmit=\"return confirm('Annuler cette réservation ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("annuler" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 150))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-xl text-sm text-red-400 hover:bg-red-500/20 transition-colors flex items-center gap-2\">
                                        <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                                        Annuler
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"grid sm:grid-cols-2 gap-4\">
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Date atelier</p>
                                    <p class=\"text-sm font-medium\">";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 164, $this->source); })()), "dateAtelier", [], "any", false, false, false, 164), "d F Y"), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"tag\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Type</p>
                                    <p class=\"text-sm font-medium\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["atelier"]) || array_key_exists("atelier", $context) ? $context["atelier"] : (function () { throw new RuntimeError('Variable "atelier" does not exist.', 171, $this->source); })()), "typeAtelier", [], "any", false, false, false, 171)), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        </div>

                        ";
            // line 176
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "commentaireReservation", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"message-square\" class=\"w-4 h-4\"></i>
                            <span>";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "commentaireReservation", [], "any", false, false, false, 179), "html", null, true);
                yield "</span>
                        </div>
                        ";
            }
            // line 182
            yield "                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 185
        if (!$context['_iterated']) {
            // line 186
            yield "            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "        </div>
    </section>
</div>

<script>
// Recherche en temps réel avec debounce pour les réservations
(function() {
    const searchInput = document.getElementById('search');
    const statutSelect = document.getElementById('statut');
    const form = document.getElementById('searchReservationForm');
    let timeoutId = null;

    // Fonction pour soumettre le formulaire
    function submitForm() {
        form.submit();
    }

    // Recherche en temps réel sur le champ de recherche
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            // Annuler le timeout précédent
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            
            // Attendre 500ms avant de soumettre
            timeoutId = setTimeout(submitForm, 500);
        });
    }

    // Soumission immédiate sur changement de filtre statut
    if (statutSelect) {
        statutSelect.addEventListener('change', function() {
            // Annuler le timeout de recherche si en cours
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            submitForm();
        });
    }
})();
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
        return "front/reservation/mes_reservations.html.twig";
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
        return array (  383 => 191,  373 => 186,  371 => 185,  364 => 182,  358 => 179,  354 => 177,  352 => 176,  344 => 171,  334 => 164,  317 => 150,  313 => 149,  301 => 140,  296 => 138,  290 => 135,  286 => 134,  281 => 132,  277 => 131,  265 => 122,  261 => 121,  257 => 119,  252 => 115,  249 => 114,  244 => 113,  234 => 105,  224 => 99,  222 => 98,  208 => 87,  204 => 86,  186 => 71,  171 => 59,  157 => 48,  150 => 44,  122 => 19,  116 => 16,  109 => 12,  105 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% extends 'front/base_home.html.twig' %}

{% block title %}Mes Reservations - NoVas{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-background\">
    <nav class=\"fixed top-0 w-full z-50 border-b border-white/10 bg-background/80 backdrop-blur-xl\">
        <div class=\"max-w-7xl mx-auto px-6 h-20 flex items-center justify-between\">
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"EduVie\" class=\"h-10 w-auto\">
            </a>

            <div class=\"flex items-center gap-4\">
                <a href=\"{{ path('app_reservation_mes', { id: user.id }) }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Mes reservations
                </a>
                <a href=\"{{ path('app_ateliers') }}\" class=\"px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors\">
                    Decouvrir les ateliers
                </a>
            </div>
        </div>
    </nav>

    <section class=\"pt-32 pb-12 px-6\">
        <div class=\"max-w-7xl mx-auto\">
            <div class=\"flex flex-col md:flex-row md:items-end justify-between gap-6\">
                <div>
                    <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/30 bg-primary/10 text-primary text-sm mb-4\">
                        <i data-lucide=\"calendar-check\" class=\"w-4 h-4\"></i>
                        Mes reservations
                    </div>
                    <h1 class=\"font-serif text-4xl md:text-5xl font-medium mb-4\">
                        Vos <span class=\"italic text-primary\">ateliers</span> reserves
                    </h1>
                    <p class=\"text-muted-foreground max-w-xl\">
                        Retrouvez tous vos ateliers et telechargez vos QR codes d'acces.
                    </p>
                </div>

                <div class=\"flex gap-4\">
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-primary\">{{ reservations|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">A venir</p>
                    </div>
                    <div class=\"glass-card rounded-2xl px-6 py-4 text-center\">
                        <p class=\"font-serif text-2xl font-bold text-accent\">{{ historique|length }}</p>
                        <p class=\"text-xs text-muted-foreground\">Passes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Barre de recherche et filtres -->
    <section class=\"px-6 pb-8\">
        <div class=\"max-w-7xl mx-auto\">
            <form method=\"GET\" action=\"{{ path('app_reservation_mes', { id: user.id }) }}\" id=\"searchReservationForm\" class=\"glass-card rounded-2xl p-6\">
                <div class=\"flex flex-col md:flex-row gap-4\">
                    <!-- Recherche par nom d'atelier -->
                    <div class=\"flex-1\">
                        <label for=\"search\" class=\"block text-sm font-medium mb-2 text-muted-foreground\">
                            Rechercher une réservation
                        </label>
                        <div class=\"relative\">
                            <i data-lucide=\"search\" class=\"absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground\"></i>
                            <input type=\"text\"
                                   id=\"search\"
                                   name=\"search\"
                                   value=\"{{ search|default('') }}\"
                                   placeholder=\"Ex: Python, Communication...\"
                                   class=\"w-full h-12 pl-12 pr-4 bg-secondary border border-white/10 rounded-xl focus:outline-none focus:border-primary transition-colors\">
                        </div>
                    </div>

                    <!-- Filtre par statut -->
                    <div class=\"md:w-64\">
                        <label for=\"statut\" class=\"block text-sm font-medium mb-2 text-muted-foreground\">
                            Filtrer par statut
                        </label>
                        <select id=\"statut\"
                                name=\"statut\"
                                class=\"w-full h-12 px-4 bg-secondary border border-white/10 rounded-xl focus:outline-none focus:border-primary transition-colors appearance-none cursor-pointer\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"0\" {{ statut == 0 ? 'selected' : '' }}>En attente</option>
                            <option value=\"1\" {{ statut == 1 ? 'selected' : '' }}>Confirmée</option>
                        </select>
                    </div>

                    <!-- Boutons -->
                    <div class=\"flex items-end gap-2\">
                        <button type=\"submit\"
                                class=\"h-12 px-6 bg-primary text-white rounded-xl font-medium hover:bg-primary/90 transition-all flex items-center gap-2\">
                            <i data-lucide=\"filter\" class=\"w-5 h-5\"></i>
                            <span>Filtrer</span>
                        </button>
                        {% if search or statut is not null %}
                            <a href=\"{{ path('app_reservation_mes', { id: user.id }) }}\"
                               class=\"h-12 px-6 bg-secondary border border-white/10 text-foreground rounded-xl font-medium hover:bg-white/5 transition-all flex items-center gap-2\">
                                <i data-lucide=\"x\" class=\"w-5 h-5\"></i>
                                <span>Réinitialiser</span>
                            </a>
                        {% endif %}
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class=\"px-6 pb-24\">
        <div class=\"max-w-7xl mx-auto space-y-6\">
            {% for reservation in reservations %}
            {% set atelier = reservation.atelier %}
            <div class=\"glass-card rounded-3xl p-6 hover:border-primary/30 transition-all\">
                <div class=\"flex flex-col lg:flex-row gap-6\">

                    {# ==== IMAGE ATELIER VIA URL (CORRECTION ICI) ==== #}
                    <div class=\"lg:w-48 flex-shrink-0\">
                        <div class=\"aspect-square rounded-2xl overflow-hidden bg-secondary\">
                            <img src=\"{{ atelier.imageAtelier }}\"
                                 alt=\"{{ atelier.titreAtelier }}\"
                                 class=\"w-full h-full object-cover\">
                        </div>
                    </div>

                    <div class=\"flex-1 space-y-4\">
                        <div class=\"flex flex-wrap items-start justify-between gap-4\">
                            <div>
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ atelier.contexteAtelier == 0 ? 'bg-personal/20 text-personal' : 'bg-academic/20 text-academic' }}\">
                                        {{ atelier.contexteAtelier == 0 ? 'Soft Skill' : 'Hard Skill' }}
                                    </span>
                                    <span class=\"px-3 py-1 rounded-full text-xs font-medium {{ reservation.statutReservation == 1 ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400' }}\">
                                        {{ reservation.statutReservation == 1 ? 'Confirmee' : 'En attente' }}
                                    </span>
                                </div>
                                <h3 class=\"text-xl font-semibold\">{{ atelier.titreAtelier }}</h3>
                                <p class=\"text-sm text-muted-foreground\">
                                    Atelier du {{ atelier.dateAtelier|date('d/m/Y') }}
                                </p>
                            </div>

                            <div class=\"flex gap-2\">
                                <button class=\"px-4 py-2 bg-secondary border border-white/10 rounded-xl text-sm hover:bg-white/5 transition-colors flex items-center gap-2\">
                                    <i data-lucide=\"download\" class=\"w-4 h-4\"></i>
                                    QR Code
                                </button>
                                <form method=\"post\" action=\"{{ path('app_reservation_annuler', { id: reservation.id }) }}\" class=\"inline\" onsubmit=\"return confirm('Annuler cette réservation ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('annuler' ~ reservation.id) }}\">
                                    <button type=\"submit\" class=\"px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-xl text-sm text-red-400 hover:bg-red-500/20 transition-colors flex items-center gap-2\">
                                        <i data-lucide=\"x-circle\" class=\"w-4 h-4\"></i>
                                        Annuler
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class=\"grid sm:grid-cols-2 gap-4\">
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"calendar\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Date atelier</p>
                                    <p class=\"text-sm font-medium\">{{ atelier.dateAtelier|date('d F Y') }}</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-3 bg-secondary/50 rounded-xl\">
                                <i data-lucide=\"tag\" class=\"w-5 h-5 text-primary\"></i>
                                <div>
                                    <p class=\"text-xs text-muted-foreground\">Type</p>
                                    <p class=\"text-sm font-medium\">{{ atelier.typeAtelier|capitalize }}</p>
                                </div>
                            </div>
                        </div>

                        {% if reservation.commentaireReservation %}
                        <div class=\"flex items-center gap-2 text-sm text-muted-foreground pt-4 border-t border-white/10\">
                            <i data-lucide=\"message-square\" class=\"w-4 h-4\"></i>
                            <span>{{ reservation.commentaireReservation }}</span>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"glass-card rounded-3xl p-12 text-center\">
                <h3 class=\"text-xl font-medium mb-2\">Aucune reservation</h3>
                <p class=\"text-muted-foreground mb-6\">Vous n'avez pas encore reserve d'atelier.</p>
            </div>
            {% endfor %}
        </div>
    </section>
</div>

<script>
// Recherche en temps réel avec debounce pour les réservations
(function() {
    const searchInput = document.getElementById('search');
    const statutSelect = document.getElementById('statut');
    const form = document.getElementById('searchReservationForm');
    let timeoutId = null;

    // Fonction pour soumettre le formulaire
    function submitForm() {
        form.submit();
    }

    // Recherche en temps réel sur le champ de recherche
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            // Annuler le timeout précédent
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            
            // Attendre 500ms avant de soumettre
            timeoutId = setTimeout(submitForm, 500);
        });
    }

    // Soumission immédiate sur changement de filtre statut
    if (statutSelect) {
        statutSelect.addEventListener('change', function() {
            // Annuler le timeout de recherche si en cours
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            submitForm();
        });
    }
})();
</script>
{% endblock %}
", "front/reservation/mes_reservations.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\front\\reservation\\mes_reservations.html.twig");
    }
}
