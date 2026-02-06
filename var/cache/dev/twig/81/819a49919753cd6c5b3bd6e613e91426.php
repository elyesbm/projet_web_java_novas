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

/* base.html.twig */
class __TwigTemplate_432d7a90ff9bba53cdbd01282f208e1b extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    ";
        // line 9
        yield "    <script src=\"https://cdn.tailwindcss.com\"></script>
    
    ";
        // line 12
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 17
        yield "    <script src=\"https://unpkg.com/lucide@latest\"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Nunito', 'sans-serif'],
                        serif: ['Playfair Display', 'Georgia', 'serif'],
                    },
                    colors: {
                        background: 'oklch(0.96 0.015 75)',
                        foreground: 'oklch(0.25 0.02 50)',
                        card: 'oklch(0.98 0.01 75)',
                        'card-foreground': 'oklch(0.25 0.02 50)',
                        primary: 'oklch(0.62 0.14 45)',
                        'primary-foreground': 'oklch(0.98 0.01 75)',
                        secondary: 'oklch(0.92 0.02 75)',
                        'secondary-foreground': 'oklch(0.35 0.03 50)',
                        muted: 'oklch(0.94 0.015 75)',
                        'muted-foreground': 'oklch(0.45 0.02 50)',
                        accent: 'oklch(0.65 0.08 145)',
                        'accent-foreground': 'oklch(0.98 0.01 75)',
                        academic: 'oklch(0.55 0.08 250)',
                        'academic-foreground': 'oklch(0.98 0.01 75)',
                        personal: 'oklch(0.68 0.15 55)',
                        'personal-foreground': 'oklch(0.98 0.01 75)',
                        border: 'oklch(0.88 0.02 75)',
                        input: 'oklch(0.94 0.015 75)',
                        ring: 'oklch(0.62 0.14 45)',
                    },
                    borderRadius: {
                        'xl': 'calc(0.5rem + 4px)',
                        '2xl': '1rem',
                        '3xl': '1.5rem',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom animations */
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slide-in-from-top-2 {
            from { transform: translateY(-0.5rem); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fade-in {
            animation: fade-in 0.5s ease-out;
        }
        
        .animate-slide-in {
            animation: slide-in-from-top-2 0.2s ease-out;
        }
        
        /* Smooth transitions */
        .transition-all-300 {
            transition: all 0.3s ease;
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-0.25rem);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: oklch(0.94 0.015 75);
        }
        
        ::-webkit-scrollbar-thumb {
            background: oklch(0.88 0.02 75);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: oklch(0.62 0.14 45);
        }
    </style>
    
    ";
        // line 113
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 114
        yield "</head>
<body class=\"bg-background text-foreground font-sans antialiased\">
    ";
        // line 116
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 117
        yield "    
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
    
    ";
        // line 123
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 124
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

        yield "EduVie - Votre Parcours Etudiant";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
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

    // line 116
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

    // line 123
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  269 => 123,  247 => 116,  225 => 113,  202 => 6,  190 => 124,  188 => 123,  180 => 117,  178 => 116,  174 => 114,  172 => 113,  74 => 17,  68 => 12,  64 => 9,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}EduVie - Votre Parcours Etudiant{% endblock %}</title>
    
    {# Tailwind CSS via CDN #}
    <script src=\"https://cdn.tailwindcss.com\"></script>
    
    {# Google Fonts #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">
    
    {# Lucide Icons #}
    <script src=\"https://unpkg.com/lucide@latest\"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Nunito', 'sans-serif'],
                        serif: ['Playfair Display', 'Georgia', 'serif'],
                    },
                    colors: {
                        background: 'oklch(0.96 0.015 75)',
                        foreground: 'oklch(0.25 0.02 50)',
                        card: 'oklch(0.98 0.01 75)',
                        'card-foreground': 'oklch(0.25 0.02 50)',
                        primary: 'oklch(0.62 0.14 45)',
                        'primary-foreground': 'oklch(0.98 0.01 75)',
                        secondary: 'oklch(0.92 0.02 75)',
                        'secondary-foreground': 'oklch(0.35 0.03 50)',
                        muted: 'oklch(0.94 0.015 75)',
                        'muted-foreground': 'oklch(0.45 0.02 50)',
                        accent: 'oklch(0.65 0.08 145)',
                        'accent-foreground': 'oklch(0.98 0.01 75)',
                        academic: 'oklch(0.55 0.08 250)',
                        'academic-foreground': 'oklch(0.98 0.01 75)',
                        personal: 'oklch(0.68 0.15 55)',
                        'personal-foreground': 'oklch(0.98 0.01 75)',
                        border: 'oklch(0.88 0.02 75)',
                        input: 'oklch(0.94 0.015 75)',
                        ring: 'oklch(0.62 0.14 45)',
                    },
                    borderRadius: {
                        'xl': 'calc(0.5rem + 4px)',
                        '2xl': '1rem',
                        '3xl': '1.5rem',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom animations */
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slide-in-from-top-2 {
            from { transform: translateY(-0.5rem); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fade-in {
            animation: fade-in 0.5s ease-out;
        }
        
        .animate-slide-in {
            animation: slide-in-from-top-2 0.2s ease-out;
        }
        
        /* Smooth transitions */
        .transition-all-300 {
            transition: all 0.3s ease;
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-0.25rem);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: oklch(0.94 0.015 75);
        }
        
        ::-webkit-scrollbar-thumb {
            background: oklch(0.88 0.02 75);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: oklch(0.62 0.14 45);
        }
    </style>
    
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"bg-background text-foreground font-sans antialiased\">
    {% block body %}{% endblock %}
    
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
    
    {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\ASUS\\Desktop\\pidev\\projet_symfony\\templates\\base.html.twig");
    }
}
