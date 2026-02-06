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

/* user/_sidebar.html.twig */
class __TwigTemplate_40a777d23c372f71f6b4cdb01ce32fda extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_sidebar.html.twig"));

        // line 2
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", ["_route"], "method", false, false, false, 2);
        // line 3
        yield "
<!-- Mobile Toggle -->
<button onclick=\"toggleSidebar()\" class=\"fixed top-4 left-4 z-50 lg:hidden w-12 h-12 glass-card rounded-xl flex items-center justify-center\">
    <i data-lucide=\"menu\" class=\"w-6 h-6\"></i>
</button>

<!-- Overlay -->
<div id=\"sidebarOverlay\" onclick=\"toggleSidebar()\" class=\"fixed inset-0 bg-black/50 backdrop-blur-sm z-30 lg:hidden hidden\"></div>

<!-- Sidebar -->
<aside id=\"sidebar\" class=\"fixed left-0 top-0 h-full w-72 glass-sidebar z-40 transition-transform duration-300 -translate-x-full lg:translate-x-0\">
    <div class=\"flex flex-col h-full\">
        <!-- Logo -->
        <div class=\"p-6 border-b border-white/5\">
           <!-- Logo -->
<a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 group\">
    <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"EduVie\" class=\"h-10 w-auto\">
</a>
        </div>

        <!-- Navigation -->
        <nav class=\"flex-1 p-4 space-y-1 overflow-y-auto\">
            ";
        // line 25
        $context["navigation"] = [["name" => "Mon Profil", "route" => "app_user_profile", "icon" => "user"], ["name" => "Mes Competences", "route" => "app_skills_mes", "icon" => "sparkles"], ["name" => "Parcours", "route" => "app_learning_paths_index", "icon" => "book-open"], ["name" => "Ateliers", "route" => "app_reservation_ateliers", "icon" => "calendar"], ["name" => "Mes Reservations", "route" => "app_reservation_mes", "icon" => "ticket"], ["name" => "Forum", "route" => "app_publications_index", "icon" => "message-square"]];
        // line 33
        yield "            
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            yield "                ";
            $context["isActive"] = ((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 35, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 35));
            // line 36
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 36));
            yield "\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-all ";
            yield (((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active bg-primary/10 text-primary") : ("text-muted-foreground hover:text-foreground hover:bg-white/5"));
            yield "\">
                    <i data-lucide=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 37), "html", null, true);
            yield "\" class=\"w-5 h-5 ";
            yield (((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("animate-pulse") : (""));
            yield "\"></i>
                    ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </nav>

        <!-- User Card -->
        <div class=\"p-4 border-t border-white/5\">
            <div class=\"glass-card rounded-2xl p-4\">
                <div class=\"flex items-center gap-3 mb-3\">
                    <div class=\"relative\">
                        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/student-avatar.jpg"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"w-12 h-12 rounded-xl object-cover ring-2 ring-primary/30\">
                        <div class=\"absolute -bottom-1 -right-1 w-4 h-4 rounded-full bg-accent border-2 border-background\"></div>
                    </div>
                    <div class=\"flex-1 min-w-0\">
                        <p class=\"text-sm font-semibold truncate\">Sarah Martin</p>
                        <p class=\"text-xs text-muted-foreground\">L3 Informatique</p>
                    </div>
                </div>
                <div class=\"flex gap-2\">
                    <span class=\"px-2 py-1 bg-academic/20 text-academic text-xs rounded-lg font-medium\">Academic</span>
                    <span class=\"px-2 py-1 bg-personal/20 text-personal text-xs rounded-lg font-medium\">Personal</span>
                </div>
            </div>
            
            <!-- Logout -->
            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-3 px-4 py-3 mt-2 rounded-xl text-sm font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 transition-all\">
                <i data-lucide=\"log-out\" class=\"w-5 h-5\"></i>
                Deconnexion
            </a>
        </div>
    </div>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/_sidebar.html.twig";
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
        return array (  141 => 63,  123 => 48,  114 => 41,  105 => 38,  99 => 37,  92 => 36,  89 => 35,  85 => 34,  82 => 33,  80 => 25,  71 => 19,  67 => 18,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user/_sidebar.html.twig #}
{% set current_route = app.request.attributes.get('_route') %}

<!-- Mobile Toggle -->
<button onclick=\"toggleSidebar()\" class=\"fixed top-4 left-4 z-50 lg:hidden w-12 h-12 glass-card rounded-xl flex items-center justify-center\">
    <i data-lucide=\"menu\" class=\"w-6 h-6\"></i>
</button>

<!-- Overlay -->
<div id=\"sidebarOverlay\" onclick=\"toggleSidebar()\" class=\"fixed inset-0 bg-black/50 backdrop-blur-sm z-30 lg:hidden hidden\"></div>

<!-- Sidebar -->
<aside id=\"sidebar\" class=\"fixed left-0 top-0 h-full w-72 glass-sidebar z-40 transition-transform duration-300 -translate-x-full lg:translate-x-0\">
    <div class=\"flex flex-col h-full\">
        <!-- Logo -->
        <div class=\"p-6 border-b border-white/5\">
           <!-- Logo -->
<a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 group\">
    <img src=\"{{ asset('images/logo.png') }}\" alt=\"EduVie\" class=\"h-10 w-auto\">
</a>
        </div>

        <!-- Navigation -->
        <nav class=\"flex-1 p-4 space-y-1 overflow-y-auto\">
            {% set navigation = [
                { name: 'Mon Profil', route: 'app_user_profile', icon: 'user' },
                { name: 'Mes Competences', route: 'app_skills_mes', icon: 'sparkles' },
                { name: 'Parcours', route: 'app_learning_paths_index', icon: 'book-open' },
                { name: 'Ateliers', route: 'app_reservation_ateliers', icon: 'calendar' },
                { name: 'Mes Reservations', route: 'app_reservation_mes', icon: 'ticket' },
                { name: 'Forum', route: 'app_publications_index', icon: 'message-square' },
            ] %}
            
            {% for item in navigation %}
                {% set isActive = current_route == item.route %}
                <a href=\"{{ path(item.route) }}\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-all {{ isActive ? 'active bg-primary/10 text-primary' : 'text-muted-foreground hover:text-foreground hover:bg-white/5' }}\">
                    <i data-lucide=\"{{ item.icon }}\" class=\"w-5 h-5 {{ isActive ? 'animate-pulse' : '' }}\"></i>
                    {{ item.name }}
                </a>
            {% endfor %}
        </nav>

        <!-- User Card -->
        <div class=\"p-4 border-t border-white/5\">
            <div class=\"glass-card rounded-2xl p-4\">
                <div class=\"flex items-center gap-3 mb-3\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('images/student-avatar.jpg') }}\" alt=\"Avatar\" class=\"w-12 h-12 rounded-xl object-cover ring-2 ring-primary/30\">
                        <div class=\"absolute -bottom-1 -right-1 w-4 h-4 rounded-full bg-accent border-2 border-background\"></div>
                    </div>
                    <div class=\"flex-1 min-w-0\">
                        <p class=\"text-sm font-semibold truncate\">Sarah Martin</p>
                        <p class=\"text-xs text-muted-foreground\">L3 Informatique</p>
                    </div>
                </div>
                <div class=\"flex gap-2\">
                    <span class=\"px-2 py-1 bg-academic/20 text-academic text-xs rounded-lg font-medium\">Academic</span>
                    <span class=\"px-2 py-1 bg-personal/20 text-personal text-xs rounded-lg font-medium\">Personal</span>
                </div>
            </div>
            
            <!-- Logout -->
            <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-3 px-4 py-3 mt-2 rounded-xl text-sm font-medium text-muted-foreground hover:text-red-400 hover:bg-red-500/10 transition-all\">
                <i data-lucide=\"log-out\" class=\"w-5 h-5\"></i>
                Deconnexion
            </a>
        </div>
    </div>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }
</script>", "user/_sidebar.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\user\\_sidebar.html.twig");
    }
}
