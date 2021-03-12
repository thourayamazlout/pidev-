<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_143f7bf0387c6ca1929eb569a00d85cbf62512a3cd9c8295239d87f29970388b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/feather/feather.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <!-- endinject -->

  <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/images/favicon.png"), "html", null, true);
        echo "\">
  <title>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 28
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "</head>
<body>
     ";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 251
        echo "

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themevendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/template.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/settings.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/todolist.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/dashboard.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
  <!-- End custom js for this page-->

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "            ";
        // line 30
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "            ";
        // line 33
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 37
        echo "       <!-- partial:partials/_navbar.html -->
     <div class=\"container-scroller\">
       <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
         <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
           <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\">Tunisia Blue Sky</a>
           <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">test2</a>
         </div>

         <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
           <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
             <span class=\"icon-menu\"></span>
           </button>
           <ul class=\"navbar-nav mr-lg-2\">
             <li class=\"nav-item nav-search d-none d-lg-block\">
               <div class=\"input-group\">
                 <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
                 </div>
                 <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
               </div>
             </li>
           </ul>
           <ul class=\"navbar-nav navbar-nav-right\">
             <li class=\"nav-item dropdown\">
               <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                 <i class=\"icon-bell mx-0\"></i>
                 <span class=\"count\"></span>
               </a>
               <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                 <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                 <a class=\"dropdown-item preview-item\">
                   <div class=\"preview-thumbnail\">
                     <div class=\"preview-icon bg-success\">
                       <i class=\"ti-info-alt mx-0\"></i>
                     </div>
                   </div>
                   <div class=\"preview-item-content\">
                     <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                     <p class=\"font-weight-light small-text mb-0 text-muted\">
                       Just now
                     </p>
                   </div>
                 </a>
                 <a class=\"dropdown-item preview-item\">
                   <div class=\"preview-thumbnail\">
                     <div class=\"preview-icon bg-warning\">
                       <i class=\"ti-settings mx-0\"></i>
                     </div>
                   </div>
                   <div class=\"preview-item-content\">
                     <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                     <p class=\"font-weight-light small-text mb-0 text-muted\">
                       Private message
                     </p>
                   </div>
                 </a>
                 <a class=\"dropdown-item preview-item\">
                   <div class=\"preview-thumbnail\">
                     <div class=\"preview-icon bg-info\">
                       <i class=\"ti-user mx-0\"></i>
                     </div>
                   </div>
                   <div class=\"preview-item-content\">
                     <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                     <p class=\"font-weight-light small-text mb-0 text-muted\">
                       2 days ago
                     </p>
                   </div>
                 </a>
               </div>
             </li>
             <li class=\"nav-item nav-profile dropdown\">
               <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                 <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/images/faces/face28.jpg"), "html", null, true);
        echo "\">
               </a>
               <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                 <a class=\"dropdown-item\">
                   <i class=\"ti-settings text-primary\"></i>
                   Settings
                 </a>
                 <a class=\"dropdown-item\">
                   <i class=\"ti-power-off text-primary\"></i>
                   Logout
                 </a>
               </div>
             </li>
             <li class=\"nav-item nav-settings d-none d-lg-flex\">
               <a class=\"nav-link\" href=\"#\">
                 <i class=\"icon-ellipsis\"></i>
               </a>
             </li>
           </ul>
           <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
             <span class=\"icon-menu\"></span>
           </button>
         </div>
       </nav>
       <div class=\"container-fluid page-body-wrapper\">
       <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
         <ul class=\"nav\">
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"dash\">
               <i class=\"icon-grid menu-icon\"></i>
               <span class=\"menu-title\">Dashboard</span>
             </a>
           </li>
           <li class=\"nav-item\" >
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"escapade\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
               <i class=\"icon-layout menu-icon\"></i>
               <span class=\"menu-title\">Escapades</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"ui-basic\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"   ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/pages/ui-features/buttons.html"), "html", null, true);
        echo "\">Buttons</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"   ";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/pages/ui-features/dropdowns.html"), "html", null, true);
        echo "\">Dropdowns</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/pages/ui-features/typography.html"), "html", null, true);
        echo "\">Typography</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
               <i class=\"icon-columns menu-icon\"></i>
               <span class=\"menu-title\">Form elements</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"form-elements\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
               <i class=\"icon-bar-graph menu-icon\"></i>
               <span class=\"menu-title\">Charts</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"charts\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
               <i class=\"icon-grid-2 menu-icon\"></i>
               <span class=\"menu-title\">Tables</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"tables\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
               <i class=\"icon-contract menu-icon\"></i>
               <span class=\"menu-title\">Icons</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"icons\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"auth\">
               <i class=\"icon-head menu-icon\"></i>
               <span class=\"menu-title\">User Pages</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"auth\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"error\">
               <i class=\"icon-ban menu-icon\"></i>
               <span class=\"menu-title\">reclamation</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"error\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-404.html\"> 404 </a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-500.html\"> 500 </a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"pages/documentation/documentation.html\">
               <i class=\"icon-paper menu-icon\"></i>
               <span class=\"menu-title\">Documentation</span>
             </a>
           </li>
         </ul>
       </nav>
         <div class=\"main-panel\">
           <div class=\"content-wrapper\">
             ";
        // line 243
        $this->displayBlock('body', $context, $blocks);
        // line 245
        echo "           </div>
     </div>

     </div>

     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 243
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 244
        echo "             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 244,  501 => 243,  486 => 245,  484 => 243,  459 => 221,  443 => 208,  387 => 155,  383 => 154,  379 => 153,  335 => 112,  258 => 37,  248 => 36,  238 => 33,  236 => 32,  226 => 31,  216 => 30,  214 => 29,  204 => 28,  185 => 25,  170 => 272,  166 => 271,  160 => 268,  156 => 267,  152 => 266,  148 => 265,  144 => 264,  138 => 261,  134 => 260,  130 => 259,  126 => 258,  120 => 255,  114 => 251,  112 => 36,  108 => 34,  105 => 31,  102 => 28,  98 => 25,  94 => 24,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  67 => 12,  63 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset ('theme/vendors/feather/feather.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('theme/vendors/ti-icons/css/themify-icons.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('theme/vendors/css/vendor.bundle.base.css') }}\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"{{ asset ('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('theme/vendors/ti-icons/css/themify-icons.css')}}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('theme/js/select.dataTables.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('theme/css/vertical-layout-light/style.css')}}\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <!-- endinject -->

  <img src=\"{{ asset('theme/images/favicon.png') }}\">
  <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}
        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
</head>
<body>
     {% block header %}
       <!-- partial:partials/_navbar.html -->
     <div class=\"container-scroller\">
       <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
         <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
           <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\">Tunisia Blue Sky</a>
           <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">test2</a>
         </div>

         <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
           <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
             <span class=\"icon-menu\"></span>
           </button>
           <ul class=\"navbar-nav mr-lg-2\">
             <li class=\"nav-item nav-search d-none d-lg-block\">
               <div class=\"input-group\">
                 <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
                 </div>
                 <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
               </div>
             </li>
           </ul>
           <ul class=\"navbar-nav navbar-nav-right\">
             <li class=\"nav-item dropdown\">
               <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                 <i class=\"icon-bell mx-0\"></i>
                 <span class=\"count\"></span>
               </a>
               <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                 <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                 <a class=\"dropdown-item preview-item\">
                   <div class=\"preview-thumbnail\">
                     <div class=\"preview-icon bg-success\">
                       <i class=\"ti-info-alt mx-0\"></i>
                     </div>
                   </div>
                   <div class=\"preview-item-content\">
                     <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                     <p class=\"font-weight-light small-text mb-0 text-muted\">
                       Just now
                     </p>
                   </div>
                 </a>
                 <a class=\"dropdown-item preview-item\">
                   <div class=\"preview-thumbnail\">
                     <div class=\"preview-icon bg-warning\">
                       <i class=\"ti-settings mx-0\"></i>
                     </div>
                   </div>
                   <div class=\"preview-item-content\">
                     <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                     <p class=\"font-weight-light small-text mb-0 text-muted\">
                       Private message
                     </p>
                   </div>
                 </a>
                 <a class=\"dropdown-item preview-item\">
                   <div class=\"preview-thumbnail\">
                     <div class=\"preview-icon bg-info\">
                       <i class=\"ti-user mx-0\"></i>
                     </div>
                   </div>
                   <div class=\"preview-item-content\">
                     <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                     <p class=\"font-weight-light small-text mb-0 text-muted\">
                       2 days ago
                     </p>
                   </div>
                 </a>
               </div>
             </li>
             <li class=\"nav-item nav-profile dropdown\">
               <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                 <img src=\"{{ asset('theme/images/faces/face28.jpg') }}\">
               </a>
               <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                 <a class=\"dropdown-item\">
                   <i class=\"ti-settings text-primary\"></i>
                   Settings
                 </a>
                 <a class=\"dropdown-item\">
                   <i class=\"ti-power-off text-primary\"></i>
                   Logout
                 </a>
               </div>
             </li>
             <li class=\"nav-item nav-settings d-none d-lg-flex\">
               <a class=\"nav-link\" href=\"#\">
                 <i class=\"icon-ellipsis\"></i>
               </a>
             </li>
           </ul>
           <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
             <span class=\"icon-menu\"></span>
           </button>
         </div>
       </nav>
       <div class=\"container-fluid page-body-wrapper\">
       <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
         <ul class=\"nav\">
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"dash\">
               <i class=\"icon-grid menu-icon\"></i>
               <span class=\"menu-title\">Dashboard</span>
             </a>
           </li>
           <li class=\"nav-item\" >
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"escapade\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
               <i class=\"icon-layout menu-icon\"></i>
               <span class=\"menu-title\">Escapades</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"ui-basic\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"   {{ asset ('theme/pages/ui-features/buttons.html')}}\">Buttons</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"   {{ asset ('theme/pages/ui-features/dropdowns.html')}}\">Dropdowns</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ asset ('theme/pages/ui-features/typography.html')}}\">Typography</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
               <i class=\"icon-columns menu-icon\"></i>
               <span class=\"menu-title\">Form elements</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"form-elements\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
               <i class=\"icon-bar-graph menu-icon\"></i>
               <span class=\"menu-title\">Charts</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"charts\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
               <i class=\"icon-grid-2 menu-icon\"></i>
               <span class=\"menu-title\">Tables</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"tables\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
               <i class=\"icon-contract menu-icon\"></i>
               <span class=\"menu-title\">Icons</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"icons\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"{{ path('user_index') }}\" aria-expanded=\"false\" aria-controls=\"auth\">
               <i class=\"icon-head menu-icon\"></i>
               <span class=\"menu-title\">User Pages</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"auth\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" data-toggle=\"collapse\" href=\"{{ path('reclamation_index') }}\" aria-expanded=\"false\" aria-controls=\"error\">
               <i class=\"icon-ban menu-icon\"></i>
               <span class=\"menu-title\">reclamation</span>
               <i class=\"menu-arrow\"></i>
             </a>
             <div class=\"collapse\" id=\"error\">
               <ul class=\"nav flex-column sub-menu\">
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-404.html\"> 404 </a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-500.html\"> 500 </a></li>
               </ul>
             </div>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"pages/documentation/documentation.html\">
               <i class=\"icon-paper menu-icon\"></i>
               <span class=\"menu-title\">Documentation</span>
             </a>
           </li>
         </ul>
       </nav>
         <div class=\"main-panel\">
           <div class=\"content-wrapper\">
             {% block body %}
             {% endblock %}
           </div>
     </div>

     </div>

     {% endblock %}


  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=\"{{ asset ('themevendors/js/vendor.bundle.base.js') }}\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"{{ asset ('theme/vendors/chart.js/Chart.min.js') }}\"></script>
  <script src=\"{{ asset ('theme/vendors/datatables.net/jquery.dataTables.js') }}\"></script>
  <script src=\"{{ asset ('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}\"></script>
  <script src=\"{{ asset ('theme/js/dataTables.select.min.js') }}\"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"{{ asset ('theme/js/off-canvas.js')}}\"></script>
  <script src=\"{{ asset ('theme/js/hoverable-collapse.js')}}\"></script>
  <script src=\"{{ asset ('theme/js/template.js')}}\"></script>
  <script src=\"{{ asset ('theme/js/settings.js')}}\"></script>
  <script src=\"{{ asset ('theme/js/todolist.js')}}\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"{{ asset ('theme/js/dashboard.js')}}\"></script>
  <script src=\"{{ asset ('theme/js/Chart.roundedBarCharts.js')}}\"></script>
  <!-- End custom js for this page-->

</body>
</html>", "base.html.twig", "E:\\xampp\\php\\pidevartefact\\templates\\base.html.twig");
    }
}
