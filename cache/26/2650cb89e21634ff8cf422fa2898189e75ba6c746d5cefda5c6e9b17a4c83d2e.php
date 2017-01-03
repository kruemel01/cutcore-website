<?php

/* index.html */
class __TwigTemplate_180b49903b87473aa61c7c0e714e0256f4e40ba3c723f7a9bf369b3a0ff3b56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>cutcore</title>
    <link rel=\"stylesheet\" href=\"./main.css\">

    <link href=\"https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"./apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"./favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"./favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"manifest\" href=\"./manifest.json\">
    <link rel=\"mask-icon\" href=\"./safari-pinned-tab.svg\" color=\"#5bbad5\">
    <meta name=\"theme-color\" content=\"#ffffff\">
  </head>
  <body>
    <div class=\"splash\" id=\"top\">
      <img class=\"splash-image\" src=\"./img/splash.jpg\" alt=\"CUTCORE\">
    </div>
    <nav>
      <h1 class=\"navEntry\"><a href=\"#top\">CUTCORE</a></h1>
      <ul>
        <li><a class=\"navEntry\" href=\"#about\">About</a></li>
        <li><a class=\"navEntry\" href=\"#projects\">Projekte</a></li>
        <li><a class=\"navEntry\" href=\"#youtube\">Youtube</a></li>
        <li><a class=\"navEntry\" href=\"#contact\">Kontakt</a></li>
        <li class=\"icon\"><a class=\"navEntry\" href=\"javascript:void(0);\" onclick=\"navigationHandler()\">Menü</a></li>
      </ul>
    </nav>
    <section id=\"about\">
      <h2>About</h2>
      <p class=\"intro\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["aboutText"] ?? null), "html", null, true);
        echo "</p>
      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aboutPersons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 36
            echo "      <div class=\"person\">
        <div class=\"img-wrap\">
          <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "imgUrl", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "\">
        </div>
        <div class=\"info-wrap\">
          <h3>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</h3>
          <a class=\"link\" href=\"mailto:";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "email", array()), "html", null, true);
            echo "</a>
          <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "position", array()), "html", null, true);
            echo "</span>
          <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "text", array()), "html", null, true);
            echo "</p>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </section>
    <section id=\"projects\">
      <h2>Projekte</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem asperiores quidem, eaque nulla aliquid neque voluptates, eius quod dolorem dicta! Cupiditate quisquam, recusandae atque impedit. Ea mollitia, explicabo. Pariatur aut ab dolorum ipsa maiores totam est rem eligendi minus officia? Facilis delectus deserunt tempora ut, ea tenetur voluptatum, illum blanditiis laboriosam non cupiditate modi deleniti magni quam accusamus incidunt nisi! Dicta laudantium repellendus, dolorem deserunt atque quibusdam fugit quae veniam dolorum numquam libero, distinctio unde doloremque necessitatibus eaque ullam asperiores cum totam aspernatur. Delectus nobis repellat reiciendis assumenda quos, perspiciatis repellendus ad voluptatum cum excepturi, quo animi quis porro, natus.</p>
    </section>
    <section id=\"youtube\">
      <h2>Youtube</h2>
      <div class=\"youtube-grid\">
        <div class=\"video\">
          <img src=\"https://img.youtube.com/vi/PPQKoeJ-uxU/maxresdefault.jpg\" alt=\"\">
          <span>Snowboarden im Zillertal</span>
        </div>
        <div class=\"video\">
          <img src=\"https://img.youtube.com/vi/TnlLgY1s4c8/maxresdefault.jpg\" alt=\"\">
          <span>Die Funktionsweise eines Unterseeboots</span>
        </div>
        <div class=\"video\">
          <img src=\"https://img.youtube.com/vi/aPXcmB5pMpc/maxresdefault.jpg\" alt=\"\">
          <span>An overview of the Industrial Revolution</span>
        </div>
        <div class=\"video\">
          <img src=\"https://img.youtube.com/vi/PPQKoeJ-uxU/maxresdefault.jpg\" alt=\"\">
          <span>Snowboarden im Zillertal</span>
        </div>
        <div class=\"video\">
          <img src=\"https://img.youtube.com/vi/PPQKoeJ-uxU/maxresdefault.jpg\" alt=\"\">
          <span>Snowboarden im Zillertal</span>
        </div>
        <div class=\"video\">
          <img src=\"https://img.youtube.com/vi/PPQKoeJ-uxU/maxresdefault.jpg\" alt=\"\">
          <span>Snowboarden im Zillertal</span>
        </div>
      </div>
    </section>
    <section id=\"contact\">
      <h2>Kontakt</h2>
      <p class=\"intro\">Sie haben irgendwelche Fragen oder Wünsche? Wir haben immer ein offenes Ohr. Schreiben Sie einfach eine E-Mail an <a class=\"link\" href=\"mailto:kontakt@cutcore.de\">kontakt@cutcore.de</a>, twittern sie uns unter <a class=\"link\" href=\"https://twitter.com/cutcore\">@cutcore</a> oder nutzen Sie einfach unser Kontaktformular.</p>
    </section>

    <footer>
      <img src=\"./img/footer.jpg\" alt=\"\">
      <span>&copy; CUTCORE ";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " // IMPRESSUM</span>
    </footer>

    <script src=\"jquery-3.1.1.min.js\"></script>
    <script src=\"main.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 89,  98 => 48,  88 => 44,  84 => 43,  78 => 42,  74 => 41,  66 => 38,  62 => 36,  58 => 35,  54 => 34,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\Users\\Fabian\\Documents\\Privat\\cutcore-website\\templates\\index.html");
    }
}
