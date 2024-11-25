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
class __TwigTemplate_468508646c1c5a56cc188544f5a88786 extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "</head>
<body>
    <header class=\"bg-dark text-white py-3\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-dark\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"/\">Filmoteca</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/films/list\">Liste des films</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/films/add\">Ajouter un film</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            ";
        // line 31
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 32
        yield "        </div>
    </header>

    <main class=\"container my-4\">
        ";
        // line 36
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 37
        yield "    </main>

    <footer class=\"bg-light text-center py-3 mt-auto\">
        <div class=\"container\">
            <p class=\"mb-0\">&copy; ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Filmoteca. Tous droits réservés.</p>
            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 43
        yield "        </div>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    ";
        // line 47
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 48
        yield "</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Filmoteca";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  174 => 47,  164 => 42,  154 => 36,  144 => 31,  134 => 8,  123 => 6,  116 => 48,  114 => 47,  108 => 43,  106 => 42,  102 => 41,  96 => 37,  94 => 36,  88 => 32,  86 => 31,  62 => 9,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Filmoteca{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <header class=\"bg-dark text-white py-3\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-dark\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"/\">Filmoteca</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/films/list\">Liste des films</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/films/add\">Ajouter un film</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {% block header %}{% endblock %}
        </div>
    </header>

    <main class=\"container my-4\">
        {% block content %}{% endblock %}
    </main>

    <footer class=\"bg-light text-center py-3 mt-auto\">
        <div class=\"container\">
            <p class=\"mb-0\">&copy; {{ \"now\"|date(\"Y\") }} Filmoteca. Tous droits réservés.</p>
            {% block footer %}{% endblock %}
        </div>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/filmoteca/src/views/base.html.twig");
    }
}
