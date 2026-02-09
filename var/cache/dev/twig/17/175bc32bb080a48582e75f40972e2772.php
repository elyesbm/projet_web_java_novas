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

/* admin/base_admin.html.twig */
class __TwigTemplate_1baa125e530fa4fc64b17190f83a4231 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base_admin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" class=\"light\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap\" rel=\"stylesheet\">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        primary: { 50: '#f0f9ff', 100: '#e0f2fe', 200: '#bae6fd', 300: '#7dd3fc', 400: '#38bdf8', 500: '#0ea5e9', 600: '#0284c7', 700: '#0369a1' },
                        secondary: { 50: '#fdf4ff', 100: '#fae8ff', 500: '#d946ef', 600: '#c026d3', 700: '#a21caf' }
                    }
                }
            }
        }
    </script>
    
    <style>
        .glass { background: rgba(255,255,255,0.85); backdrop-filter: blur(12px); }
        .dark .glass { background: rgba(15,23,42,0.85); }
        .text-gradient { background: linear-gradient(135deg, #0ea5e9, #d946ef); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .nav-link { position: relative; transition: all 0.3s; }
        .nav-link::before { content: ''; position: absolute; left: 0; top: 50%; transform: translateY(-50%) scaleY(0); width: 3px; height: 60%; background: linear-gradient(to bottom, #0ea5e9, #d946ef); border-radius: 0 4px 4px 0; transition: transform 0.3s; }
        .nav-link:hover::before, .nav-link.active::before { transform: translateY(-50%) scaleY(1); }
        .nav-link.active { background: linear-gradient(90deg, rgba(14,165,233,0.1), transparent); color: #0ea5e9; }
        .hover-card { transition: all 0.3s; }
        .hover-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -15px rgba(0,0,0,0.15); }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
        .dark ::-webkit-scrollbar-thumb { background: #475569; }
    </style>
    
    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 46
        yield "</head>
<body class=\"bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-200 font-sans antialiased\">

    <div class=\"flex h-screen overflow-hidden\">
        
        ";
        // line 52
        yield "        <aside id=\"sidebar\" class=\"w-72 h-full glass border-r border-slate-200 dark:border-slate-700 flex flex-col z-30 transition-transform duration-300 lg:translate-x-0 -translate-x-full fixed lg:relative\">
            
            ";
        // line 55
        yield "            <div class=\"p-6 border-b border-slate-200 dark:border-slate-700\">
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"flex items-center gap-3\">
                    <div class=\"w-12 h-12 rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center text-white font-bold text-2xl shadow-lg\">N</div>
                    <div>
                        <h1 class=\"font-display font-bold text-2xl text-gradient\">NOVAS</h1>
                        <p class=\"text-xs text-slate-500 uppercase tracking-wider\">Administration</p>
                    </div>
                </a>
            </div>
            
            ";
        // line 66
        yield "            <nav class=\"flex-1 overflow-y-auto py-6 px-4 space-y-2\">
                
                ";
        // line 68
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68);
        // line 69
        yield "                
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 70, $this->source); })()) == "app_admin_dashboard")) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-600\"><i data-lucide=\"layout-dashboard\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Dashboard</span>
                </a>
                
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_list");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield (((is_string($_v0 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 75, $this->source); })())) && is_string($_v1 = "app_admin_users") && str_starts_with($_v0, $_v1))) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"users\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Utilisateurs</span>
                </a>
                
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_marketplace_list");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield (((is_string($_v2 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 80, $this->source); })())) && is_string($_v3 = "app_admin_marketplace") && str_starts_with($_v2, $_v3))) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-rose-100 dark:bg-rose-900/30 flex items-center justify-center text-rose-600\"><i data-lucide=\"shopping-bag\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Marketplace</span>
                </a>
                
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_jobs_list");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield (((is_string($_v4 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 85, $this->source); })())) && is_string($_v5 = "app_admin_jobs") && str_starts_with($_v4, $_v5))) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Emplois</span>
                </a>
                
                <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_publications_list");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield (((is_string($_v6 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 90, $this->source); })())) && is_string($_v7 = "app_admin_publications") && str_starts_with($_v6, $_v7))) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-violet-100 dark:bg-violet-900/30 flex items-center justify-center text-violet-600\"><i data-lucide=\"message-square\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Publications</span>
                </a>
                
                <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ateliers_list");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield (((is_string($_v8 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 95, $this->source); })())) && is_string($_v9 = "app_admin_ateliers") && str_starts_with($_v8, $_v9))) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\"><i data-lucide=\"calendar-days\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Ateliers</span>
                </a>
                
                <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield (((is_string($_v10 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 100, $this->source); })())) && is_string($_v11 = "app_admin_skills") && str_starts_with($_v10, $_v11))) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                    <div class=\"w-10 h-10 rounded-lg bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-cyan-600\"><i data-lucide=\"zap\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Compétences</span>
                </a>
                
                <div class=\"pt-4 mt-4 border-t border-slate-200 dark:border-slate-700\">
                    <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_settings");
        yield "\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl ";
        yield ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 106, $this->source); })()) == "app_admin_settings")) ? ("active") : ("text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800"));
        yield "\">
                        <div class=\"w-10 h-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600\"><i data-lucide=\"settings\" class=\"w-5 h-5\"></i></div>
                        <span class=\"font-semibold\">Paramètres</span>
                    </a>
                </div>
            </nav>
            
            ";
        // line 114
        yield "            <div class=\"p-4 border-t border-slate-200 dark:border-slate-700 space-y-3\">
                <div class=\"flex items-center gap-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700\">
                    ";
        // line 116
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "IMAGE", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "IMAGE", [], "any", false, false, false, 117), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "PRENOM", [], "any", false, false, false, 117), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "NOM", [], "any", false, false, false, 117), "html", null, true);
            yield "\" class=\"w-10 h-10 rounded-lg object-cover\">
                    ";
        } else {
            // line 119
            yield "                        <div class=\"w-10 h-10 rounded-lg bg-gradient-to-br from-primary-400 to-secondary-400 flex items-center justify-center text-white font-bold text-sm\">
                            ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "PRENOM", [], "any", false, false, false, 120), 0, 1), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "NOM", [], "any", false, false, false, 120), 0, 1), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 123
        yield "                    <div class=\"flex-1 min-w-0\">
                        <p class=\"text-sm font-semibold text-slate-900 dark:text-white truncate\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "PRENOM", [], "any", false, false, false, 124), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "NOM", [], "any", false, false, false, 124), "html", null, true);
        yield "</p>
                        <p class=\"text-xs text-slate-500 truncate\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "EMAIL", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
                    </div>
                    <button onclick=\"toggleTheme()\" class=\"p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700\">
                        <i data-lucide=\"moon\" class=\"w-4 h-4 hidden dark:block\"></i>
                        <i data-lucide=\"sun\" class=\"w-4 h-4 block dark:hidden\"></i>
                    </button>
                </div>
                <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"w-full flex items-center justify-center gap-2 px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors font-medium text-sm\">
                    <i data-lucide=\"log-out\" class=\"w-4 h-4\"></i>
                    Déconnexion
                </a>
            </div>
        </aside>

        ";
        // line 140
        yield "        <div class=\"flex-1 flex flex-col overflow-hidden\">
            
            ";
        // line 143
        yield "            <header class=\"sticky top-0 z-20 glass border-b border-slate-200 dark:border-slate-700 px-8 py-4\">
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-4\">
                        <button onclick=\"toggleSidebar()\" class=\"lg:hidden p-2 -ml-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800\">
                            <i data-lucide=\"menu\" class=\"w-6 h-6\"></i>
                        </button>
                        <div>
                            <h2 class=\"text-2xl font-display font-bold text-slate-800 dark:text-white\">";
        // line 150
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h2>
                            <p class=\"text-sm text-slate-500 hidden sm:block\">";
        // line 151
        yield from $this->unwrap()->yieldBlock('page_subtitle', $context, $blocks);
        yield "</p>
                        </div>
                    </div>
                    
                    <div class=\"flex items-center gap-3\">
                        <div class=\"relative hidden md:block\">
                            <input type=\"text\" placeholder=\"Rechercher...\" class=\"w-64 pl-10 pr-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm focus:ring-2 focus:ring-primary-500\">
                            <i data-lucide=\"search\" class=\"w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
                        </div>
                        <button class=\"relative p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800\">
                            <i data-lucide=\"bell\" class=\"w-5 h-5\"></i>
                            <span class=\"absolute top-1 right-1 w-2 h-2 bg-rose-500 rounded-full\"></span>
                        </button>
                    </div>
                </div>
            </header>

            ";
        // line 169
        yield "            <main class=\"flex-1 overflow-y-auto p-8\">
                ";
        // line 170
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 171
        yield "            </main>
        </div>
    </div>

    ";
        // line 176
        yield "    <div id=\"toast-container\" class=\"fixed bottom-6 right-6 z-50 space-y-3\"></div>

    <script>
        lucide.createIcons();
        
        function toggleTheme() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        }
        
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
        
        function showToast(message, type = 'success') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            const colors = { success: 'bg-emerald-500', error: 'bg-rose-500', warning: 'bg-amber-500', info: 'bg-blue-500' };
            const icons = { success: 'check-circle', error: 'x-circle', warning: 'alert-triangle', info: 'info' };
            
            toast.className = `flex items-center gap-3 px-6 py-4 rounded-xl shadow-lg text-white \${colors[type]} transform translate-x-full transition-transform duration-300`;
            toast.innerHTML = `<i data-lucide=\"\${icons[type]}\" class=\"w-5 h-5\"></i><span class=\"font-medium\">\${message}</span>`;
            
            container.appendChild(toast);
            lucide.createIcons();
            
            setTimeout(() => toast.classList.remove('translate-x-full'), 100);
            setTimeout(() => { toast.classList.add('translate-x-full'); setTimeout(() => toast.remove(), 300); }, 4000);
        }
        
        if (localStorage.getItem('theme') === 'dark') document.documentElement.classList.add('dark');
    </script>
    
    ";
        // line 209
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 210
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "NOVAS Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
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

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        yield "Bienvenue";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 209
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/base_admin.html.twig";
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
        return array (  488 => 209,  466 => 170,  443 => 151,  420 => 150,  398 => 45,  375 => 6,  363 => 210,  361 => 209,  326 => 176,  320 => 171,  318 => 170,  315 => 169,  295 => 151,  291 => 150,  282 => 143,  278 => 140,  268 => 132,  258 => 125,  252 => 124,  249 => 123,  242 => 120,  239 => 119,  229 => 117,  227 => 116,  223 => 114,  211 => 106,  200 => 100,  190 => 95,  180 => 90,  170 => 85,  160 => 80,  150 => 75,  140 => 70,  137 => 69,  135 => 68,  131 => 66,  119 => 56,  116 => 55,  112 => 52,  105 => 46,  103 => 45,  61 => 6,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"light\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}NOVAS Admin{% endblock %}</title>
    
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700&display=swap\" rel=\"stylesheet\">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        primary: { 50: '#f0f9ff', 100: '#e0f2fe', 200: '#bae6fd', 300: '#7dd3fc', 400: '#38bdf8', 500: '#0ea5e9', 600: '#0284c7', 700: '#0369a1' },
                        secondary: { 50: '#fdf4ff', 100: '#fae8ff', 500: '#d946ef', 600: '#c026d3', 700: '#a21caf' }
                    }
                }
            }
        }
    </script>
    
    <style>
        .glass { background: rgba(255,255,255,0.85); backdrop-filter: blur(12px); }
        .dark .glass { background: rgba(15,23,42,0.85); }
        .text-gradient { background: linear-gradient(135deg, #0ea5e9, #d946ef); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .nav-link { position: relative; transition: all 0.3s; }
        .nav-link::before { content: ''; position: absolute; left: 0; top: 50%; transform: translateY(-50%) scaleY(0); width: 3px; height: 60%; background: linear-gradient(to bottom, #0ea5e9, #d946ef); border-radius: 0 4px 4px 0; transition: transform 0.3s; }
        .nav-link:hover::before, .nav-link.active::before { transform: translateY(-50%) scaleY(1); }
        .nav-link.active { background: linear-gradient(90deg, rgba(14,165,233,0.1), transparent); color: #0ea5e9; }
        .hover-card { transition: all 0.3s; }
        .hover-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -15px rgba(0,0,0,0.15); }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
        .dark ::-webkit-scrollbar-thumb { background: #475569; }
    </style>
    
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-200 font-sans antialiased\">

    <div class=\"flex h-screen overflow-hidden\">
        
        {# SIDEBAR NAVIGATION #}
        <aside id=\"sidebar\" class=\"w-72 h-full glass border-r border-slate-200 dark:border-slate-700 flex flex-col z-30 transition-transform duration-300 lg:translate-x-0 -translate-x-full fixed lg:relative\">
            
            {# Logo #}
            <div class=\"p-6 border-b border-slate-200 dark:border-slate-700\">
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"flex items-center gap-3\">
                    <div class=\"w-12 h-12 rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center text-white font-bold text-2xl shadow-lg\">N</div>
                    <div>
                        <h1 class=\"font-display font-bold text-2xl text-gradient\">NOVAS</h1>
                        <p class=\"text-xs text-slate-500 uppercase tracking-wider\">Administration</p>
                    </div>
                </a>
            </div>
            
            {# Navigation #}
            <nav class=\"flex-1 overflow-y-auto py-6 px-4 space-y-2\">
                
                {% set current_route = app.request.get('_route') %}
                
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route == 'app_admin_dashboard' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-600\"><i data-lucide=\"layout-dashboard\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Dashboard</span>
                </a>
                
                <a href=\"{{ path('app_admin_users_list') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route starts with 'app_admin_users' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600\"><i data-lucide=\"users\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Utilisateurs</span>
                </a>
                
                <a href=\"{{ path('app_admin_marketplace_list') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route starts with 'app_admin_marketplace' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-rose-100 dark:bg-rose-900/30 flex items-center justify-center text-rose-600\"><i data-lucide=\"shopping-bag\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Marketplace</span>
                </a>
                
                <a href=\"{{ path('app_admin_jobs_list') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route starts with 'app_admin_jobs' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600\"><i data-lucide=\"briefcase\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Emplois</span>
                </a>
                
                <a href=\"{{ path('app_admin_publications_list') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route starts with 'app_admin_publications' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-violet-100 dark:bg-violet-900/30 flex items-center justify-center text-violet-600\"><i data-lucide=\"message-square\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Publications</span>
                </a>
                
                <a href=\"{{ path('app_admin_ateliers_list') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route starts with 'app_admin_ateliers' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600\"><i data-lucide=\"calendar-days\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Ateliers</span>
                </a>
                
                <a href=\"{{ path('app_admin_skills_list') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route starts with 'app_admin_skills' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                    <div class=\"w-10 h-10 rounded-lg bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center text-cyan-600\"><i data-lucide=\"zap\" class=\"w-5 h-5\"></i></div>
                    <span class=\"font-semibold\">Compétences</span>
                </a>
                
                <div class=\"pt-4 mt-4 border-t border-slate-200 dark:border-slate-700\">
                    <a href=\"{{ path('app_admin_settings') }}\" class=\"nav-link flex items-center gap-3 px-4 py-3 rounded-xl {{ current_route == 'app_admin_settings' ? 'active' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}\">
                        <div class=\"w-10 h-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600\"><i data-lucide=\"settings\" class=\"w-5 h-5\"></i></div>
                        <span class=\"font-semibold\">Paramètres</span>
                    </a>
                </div>
            </nav>
            
            {# User Profile #}
            <div class=\"p-4 border-t border-slate-200 dark:border-slate-700 space-y-3\">
                <div class=\"flex items-center gap-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700\">
                    {% if app.user.IMAGE %}
                        <img src=\"{{ app.user.IMAGE }}\" alt=\"{{ app.user.PRENOM }} {{ app.user.NOM }}\" class=\"w-10 h-10 rounded-lg object-cover\">
                    {% else %}
                        <div class=\"w-10 h-10 rounded-lg bg-gradient-to-br from-primary-400 to-secondary-400 flex items-center justify-center text-white font-bold text-sm\">
                            {{ app.user.PRENOM|slice(0,1) }}{{ app.user.NOM|slice(0,1) }}
                        </div>
                    {% endif %}
                    <div class=\"flex-1 min-w-0\">
                        <p class=\"text-sm font-semibold text-slate-900 dark:text-white truncate\">{{ app.user.PRENOM }} {{ app.user.NOM }}</p>
                        <p class=\"text-xs text-slate-500 truncate\">{{ app.user.EMAIL }}</p>
                    </div>
                    <button onclick=\"toggleTheme()\" class=\"p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700\">
                        <i data-lucide=\"moon\" class=\"w-4 h-4 hidden dark:block\"></i>
                        <i data-lucide=\"sun\" class=\"w-4 h-4 block dark:hidden\"></i>
                    </button>
                </div>
                <a href=\"{{ path('app_logout') }}\" class=\"w-full flex items-center justify-center gap-2 px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors font-medium text-sm\">
                    <i data-lucide=\"log-out\" class=\"w-4 h-4\"></i>
                    Déconnexion
                </a>
            </div>
        </aside>

        {# MAIN CONTENT #}
        <div class=\"flex-1 flex flex-col overflow-hidden\">
            
            {# Top Bar #}
            <header class=\"sticky top-0 z-20 glass border-b border-slate-200 dark:border-slate-700 px-8 py-4\">
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-4\">
                        <button onclick=\"toggleSidebar()\" class=\"lg:hidden p-2 -ml-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800\">
                            <i data-lucide=\"menu\" class=\"w-6 h-6\"></i>
                        </button>
                        <div>
                            <h2 class=\"text-2xl font-display font-bold text-slate-800 dark:text-white\">{% block page_title %}Dashboard{% endblock %}</h2>
                            <p class=\"text-sm text-slate-500 hidden sm:block\">{% block page_subtitle %}Bienvenue{% endblock %}</p>
                        </div>
                    </div>
                    
                    <div class=\"flex items-center gap-3\">
                        <div class=\"relative hidden md:block\">
                            <input type=\"text\" placeholder=\"Rechercher...\" class=\"w-64 pl-10 pr-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm focus:ring-2 focus:ring-primary-500\">
                            <i data-lucide=\"search\" class=\"w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-slate-400\"></i>
                        </div>
                        <button class=\"relative p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800\">
                            <i data-lucide=\"bell\" class=\"w-5 h-5\"></i>
                            <span class=\"absolute top-1 right-1 w-2 h-2 bg-rose-500 rounded-full\"></span>
                        </button>
                    </div>
                </div>
            </header>

            {# Page Content #}
            <main class=\"flex-1 overflow-y-auto p-8\">
                {% block body %}{% endblock %}
            </main>
        </div>
    </div>

    {# Toast Container #}
    <div id=\"toast-container\" class=\"fixed bottom-6 right-6 z-50 space-y-3\"></div>

    <script>
        lucide.createIcons();
        
        function toggleTheme() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        }
        
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
        
        function showToast(message, type = 'success') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            const colors = { success: 'bg-emerald-500', error: 'bg-rose-500', warning: 'bg-amber-500', info: 'bg-blue-500' };
            const icons = { success: 'check-circle', error: 'x-circle', warning: 'alert-triangle', info: 'info' };
            
            toast.className = `flex items-center gap-3 px-6 py-4 rounded-xl shadow-lg text-white \${colors[type]} transform translate-x-full transition-transform duration-300`;
            toast.innerHTML = `<i data-lucide=\"\${icons[type]}\" class=\"w-5 h-5\"></i><span class=\"font-medium\">\${message}</span>`;
            
            container.appendChild(toast);
            lucide.createIcons();
            
            setTimeout(() => toast.classList.remove('translate-x-full'), 100);
            setTimeout(() => { toast.classList.add('translate-x-full'); setTimeout(() => toast.remove(), 300); }, 4000);
        }
        
        if (localStorage.getItem('theme') === 'dark') document.documentElement.classList.add('dark');
    </script>
    
    {% block javascripts %}{% endblock %}
</body>
</html>", "admin/base_admin.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\admin\\base_admin.html.twig");
    }
}
