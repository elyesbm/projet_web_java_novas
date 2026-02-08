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

/* admin/skill/form.html.twig */
class __TwigTemplate_0e6bcfbd9af48ab6564a05729415dc5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/skill/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/skill/form.html.twig"));

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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvelle") : ("Modifier"));
        yield " compétence - NOVAS Admin";
        
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

        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 4, $this->source); })()), "create")) : ("create")) == "create")) ? ("Nouvelle compétence") : ("Modifier la compétence"));
        
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

        yield "Ajouter une compétence au catalogue";
        
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
    <div class=\"bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-blue-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"zap\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">Définir la compétence</h2>
                <p class=\"text-blue-100\">Créez un nouveau skill pour la communauté</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-8\">
        <div class=\"space-y-8\">
            ";
        // line 22
        yield "            <div class=\"space-y-3\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Icône représentative</label>
                <div class=\"grid grid-cols-8 gap-3\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["code", "brain", "message-circle", "users", "heart", "layout", "database", "terminal", "pen-tool", "bar-chart", "globe", "smartphone", "cpu", "shield", "cloud", "git-branch"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 26
            yield "                        <label class=\"cursor-pointer group\">
                            <input type=\"radio\" name=\"icon\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "\" class=\"peer sr-only\" ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield ">
                            <div class=\"aspect-square rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-cyan-500 peer-checked:bg-cyan-50 dark:peer-checked:bg-cyan-900/20 flex items-center justify-center text-slate-400 peer-checked:text-cyan-600 hover:border-slate-300 dark:hover:border-slate-600 transition-all\">
                                <i data-lucide=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "\" class=\"w-6 h-6\"></i>
                            </div>
                        </label>
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
        unset($context['_seq'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                </div>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-lg\" placeholder=\"ex: Python\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie</label>
                    <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500\">
                        <option>Programmation</option>
                        <option>Data Science</option>
                        <option>Communication</option>
                        <option>Management</option>
                    </select>
                </div>
            </div>

            ";
        // line 53
        yield "            <div class=\"space-y-3\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Type de compétence</label>
                <div class=\"grid grid-cols-2 gap-4\">
                    <label class=\"cursor-pointer\">
                        <input type=\"radio\" name=\"type\" value=\"hard\" class=\"peer sr-only\" checked>
                        <div class=\"p-6 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-blue-500 peer-checked:bg-blue-50 dark:peer-checked:bg-blue-900/20 transition-all text-center\">
                            <div class=\"w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center mx-auto mb-3\"><i data-lucide=\"cpu\" class=\"w-6 h-6\"></i></div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">Hard Skill</p>
                            <p class=\"text-sm text-slate-500\">Compétence technique</p>
                        </div>
                    </label>
                    <label class=\"cursor-pointer\">
                        <input type=\"radio\" name=\"type\" value=\"soft\" class=\"peer sr-only\">
                        <div class=\"p-6 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-purple-500 peer-checked:bg-purple-50 dark:peer-checked:bg-purple-900/20 transition-all text-center\">
                            <div class=\"w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center mx-auto mb-3\"><i data-lucide=\"heart-handshake\" class=\"w-6 h-6\"></i></div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">Soft Skill</p>
                            <p class=\"text-sm text-slate-500\">Compétence comportementale</p>
                        </div>
                    </label>
                </div>
            </div>

            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                <textarea rows=\"4\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 resize-none\" placeholder=\"Décrivez cette compétence...\"></textarea>
            </div>

            <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200 dark:border-slate-700\">
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "\" class=\"px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium transition-colors\">Annuler</a>
                <button onclick=\"showToast('Compétence enregistrée', 'success'); setTimeout(() => window.location.href = '";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skills_list");
        yield "', 1500);\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-medium shadow-lg shadow-cyan-500/25 transition-all flex items-center gap-2\">
                    <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                    ";
        // line 84
        yield (((((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 84, $this->source); })()), "create")) : ("create")) == "create")) ? ("Créer la compétence") : ("Enregistrer"));
        yield "
                </button>
            </div>
        </div>
    </div>
</div>
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
        return "admin/skill/form.html.twig";
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
        return array (  274 => 84,  269 => 82,  265 => 81,  235 => 53,  214 => 33,  196 => 29,  189 => 27,  186 => 26,  169 => 25,  164 => 22,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base_admin.html.twig' %}

{% block title %}{{ mode|default('create') == 'create' ? 'Nouvelle' : 'Modifier' }} compétence - NOVAS Admin{% endblock %}
{% block page_title %}{{ mode|default('create') == 'create' ? 'Nouvelle compétence' : 'Modifier la compétence' }}{% endblock %}
{% block page_subtitle %}Ajouter une compétence au catalogue{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto\">
    <div class=\"bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 rounded-2xl p-8 text-white mb-6 shadow-lg shadow-blue-500/25\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center\"><i data-lucide=\"zap\" class=\"w-8 h-8\"></i></div>
            <div>
                <h2 class=\"text-2xl font-bold\">Définir la compétence</h2>
                <p class=\"text-blue-100\">Créez un nouveau skill pour la communauté</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white dark:bg-slate-800 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 p-8\">
        <div class=\"space-y-8\">
            {# Icon Selection #}
            <div class=\"space-y-3\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Icône représentative</label>
                <div class=\"grid grid-cols-8 gap-3\">
                    {% for icon in ['code', 'brain', 'message-circle', 'users', 'heart', 'layout', 'database', 'terminal', 'pen-tool', 'bar-chart', 'globe', 'smartphone', 'cpu', 'shield', 'cloud', 'git-branch'] %}
                        <label class=\"cursor-pointer group\">
                            <input type=\"radio\" name=\"icon\" value=\"{{ icon }}\" class=\"peer sr-only\" {{ loop.first ? 'checked' : '' }}>
                            <div class=\"aspect-square rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-cyan-500 peer-checked:bg-cyan-50 dark:peer-checked:bg-cyan-900/20 flex items-center justify-center text-slate-400 peer-checked:text-cyan-600 hover:border-slate-300 dark:hover:border-slate-600 transition-all\">
                                <i data-lucide=\"{{ icon }}\" class=\"w-6 h-6\"></i>
                            </div>
                        </label>
                    {% endfor %}
                </div>
            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Nom <span class=\"text-rose-500\">*</span></label>
                    <input type=\"text\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 text-lg\" placeholder=\"ex: Python\">
                </div>
                <div class=\"space-y-2\">
                    <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Catégorie</label>
                    <select class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500\">
                        <option>Programmation</option>
                        <option>Data Science</option>
                        <option>Communication</option>
                        <option>Management</option>
                    </select>
                </div>
            </div>

            {# Type Selection #}
            <div class=\"space-y-3\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Type de compétence</label>
                <div class=\"grid grid-cols-2 gap-4\">
                    <label class=\"cursor-pointer\">
                        <input type=\"radio\" name=\"type\" value=\"hard\" class=\"peer sr-only\" checked>
                        <div class=\"p-6 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-blue-500 peer-checked:bg-blue-50 dark:peer-checked:bg-blue-900/20 transition-all text-center\">
                            <div class=\"w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center mx-auto mb-3\"><i data-lucide=\"cpu\" class=\"w-6 h-6\"></i></div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">Hard Skill</p>
                            <p class=\"text-sm text-slate-500\">Compétence technique</p>
                        </div>
                    </label>
                    <label class=\"cursor-pointer\">
                        <input type=\"radio\" name=\"type\" value=\"soft\" class=\"peer sr-only\">
                        <div class=\"p-6 rounded-xl border-2 border-slate-200 dark:border-slate-700 peer-checked:border-purple-500 peer-checked:bg-purple-50 dark:peer-checked:bg-purple-900/20 transition-all text-center\">
                            <div class=\"w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center mx-auto mb-3\"><i data-lucide=\"heart-handshake\" class=\"w-6 h-6\"></i></div>
                            <p class=\"font-semibold text-slate-900 dark:text-white\">Soft Skill</p>
                            <p class=\"text-sm text-slate-500\">Compétence comportementale</p>
                        </div>
                    </label>
                </div>
            </div>

            <div class=\"space-y-2\">
                <label class=\"block text-sm font-medium text-slate-700 dark:text-slate-300\">Description <span class=\"text-rose-500\">*</span></label>
                <textarea rows=\"4\" required class=\"w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-cyan-500 resize-none\" placeholder=\"Décrivez cette compétence...\"></textarea>
            </div>

            <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200 dark:border-slate-700\">
                <a href=\"{{ path('app_admin_skills_list') }}\" class=\"px-6 py-3 rounded-xl border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 font-medium transition-colors\">Annuler</a>
                <button onclick=\"showToast('Compétence enregistrée', 'success'); setTimeout(() => window.location.href = '{{ path('app_admin_skills_list') }}', 1500);\" class=\"px-8 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-medium shadow-lg shadow-cyan-500/25 transition-all flex items-center gap-2\">
                    <i data-lucide=\"check\" class=\"w-4 h-4\"></i>
                    {{ mode|default('create') == 'create' ? 'Créer la compétence' : 'Enregistrer' }}
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/skill/form.html.twig", "C:\\Users\\FATHI\\Desktop\\pi\\projet_web_java_novas\\templates\\admin\\skill\\form.html.twig");
    }
}
