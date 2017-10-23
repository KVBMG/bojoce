<?php

/* ::base.html.twig */
class __TwigTemplate_095362af5631b80ec4ed9658b0272e48ac0d445d922720ea7a7c62bddd1d3502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf8f69e871e852917b275fc6310137e30cedf86ddc2b804a3bc0efd6a9b9920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf8f69e871e852917b275fc6310137e30cedf86ddc2b804a3bc0efd6a9b9920->enter($__internal_9cf8f69e871e852917b275fc6310137e30cedf86ddc2b804a3bc0efd6a9b9920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " | Eco-Job </title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Your description\">
        <meta name=\"keywords\" content=\"Your keywords\">
        <meta name=\"author\" content=\"Your name\">

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>
    <body class=\"front\">

        <div id=\"main\">

            <div class=\"top1_wrapper\">
                <div class=\"container\">
                    <div class=\"top1 clearfix\">
                        <div class=\"location1_wrapper\"><div class=\"location1 fa1\"><i class=\"fa fa-map-marker\"></i><span>8901 Marmora Road, Glasgow, D04 89GR.</span></div></div>
                        <div class=\"phone1_wrapper\"><div class=\"phone1 fa1\"><i class=\"fa fa-phone\"></i><span>1-800-123-1234</span></div></div>
                        <div class=\"mail1_wrapper\"><div class=\"mail1 fa1\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div></div>

                        <div class=\"social_wrapper\">
                            <ul class=\"social clearfix\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                                ";
        // line 72
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            echo "<li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>";
        }
        // line 73
        echo "                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"top2_wrapper\">
                <div class=\"container\">
                    <div class=\"top2 clearfix\">
                        <header>
                            <div class=\"logo_wrapper\">
                                <a href=\"index.html\" class=\"logo\">
                                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                        </header>
                        <div class=\"navbar navbar_ navbar-default\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"navbar-collapse navbar-collapse_ collapse\">
                                <ul class=\"nav navbar-nav sf-menu clearfix\">
                                    <li class=\"active\"><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous__offre_searchpage");
        echo "\">Accueil</a></li>            
                                    ";
        // line 100
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 101
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous__offre_searchpage");
            echo "\">Recherche</a></li>
                                    <li><a href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_index");
            echo "\">Candidat</a></li>
                                    <li><a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_index");
            echo "\">Recruteur</a></li>
                                    ";
        } else {
            // line 105
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECRUTEUR")) {
                // line 106
                echo "                                            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous__offre_searchpage");
                echo "\">Recherche</a></li>
                                            <li><a href=\"";
                // line 107
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_banquecv");
                echo "\">Banque de CV</a></li>
                                            <li><a href=\"";
                // line 108
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_index");
                echo "\">Recruteur</a></li>                                            
                                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CANDIDAT")) {
                // line 110
                echo "                                            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous_map");
                echo "\">Recherche</a></li>
                                            <li><a href=\"";
                // line 111
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_index");
                echo "\">Candidat</a></li>
                                        ";
            }
            // line 113
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_messagerie_inbox");
            echo "\">Messages</a></li>
                                    ";
        }
        // line 115
        echo "                                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "                                                                                                                                                                                                       
                                        <li class=\"sub-menu sub-menu-1\"><a href=\"#\">Mon compte<em></em></a>
                                            <ul>
                                                <li><a href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>                                                  
                                                <li><a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>  
                                            </ul>
                                        </li>                                            
                                    ";
        } else {
            // line 123
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                                    ";
        }
        // line 124
        echo "                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 170
        echo "                <div class=\"bot2_wrapper\">
                    <div class=\"container\">
                        <div class=\"copyright\">Copyright &copy; 2017. All Rights Reserved.</div>
                        <ul class=\"menu_bottom\">
                            <li><a href=\"#\">About the company</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Contact us</a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>
";
        
        $__internal_9cf8f69e871e852917b275fc6310137e30cedf86ddc2b804a3bc0efd6a9b9920->leave($__internal_9cf8f69e871e852917b275fc6310137e30cedf86ddc2b804a3bc0efd6a9b9920_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_13f811515f430ec289cb5953b26f92ca004f793d59e370c93a596e06d3af26a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f811515f430ec289cb5953b26f92ca004f793d59e370c93a596e06d3af26a8->enter($__internal_13f811515f430ec289cb5953b26f92ca004f793d59e370c93a596e06d3af26a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_13f811515f430ec289cb5953b26f92ca004f793d59e370c93a596e06d3af26a8->leave($__internal_13f811515f430ec289cb5953b26f92ca004f793d59e370c93a596e06d3af26a8_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_731cede632447cbd75044d5431a28fd5b1511cdf6226fcfabd49ba5888c5b30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731cede632447cbd75044d5431a28fd5b1511cdf6226fcfabd49ba5888c5b30c->enter($__internal_731cede632447cbd75044d5431a28fd5b1511cdf6226fcfabd49ba5888c5b30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_731cede632447cbd75044d5431a28fd5b1511cdf6226fcfabd49ba5888c5b30c->leave($__internal_731cede632447cbd75044d5431a28fd5b1511cdf6226fcfabd49ba5888c5b30c_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3adf2b4ef3cec08a8237b23212380bae8c88ca11d80f7143abcd1b54046cb1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adf2b4ef3cec08a8237b23212380bae8c88ca11d80f7143abcd1b54046cb1b8->enter($__internal_3adf2b4ef3cec08a8237b23212380bae8c88ca11d80f7143abcd1b54046cb1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/public/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>            
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.appear.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.caroufredsel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.parallax-1.1.3.resize.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cform.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_3adf2b4ef3cec08a8237b23212380bae8c88ca11d80f7143abcd1b54046cb1b8->leave($__internal_3adf2b4ef3cec08a8237b23212380bae8c88ca11d80f7143abcd1b54046cb1b8_prof);

    }

    // line 131
    public function block_content($context, array $blocks = array())
    {
        $__internal_62c08fc2b5a6e865eeb904134770c7213b3d3cfed435fc02113b25eb576126b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c08fc2b5a6e865eeb904134770c7213b3d3cfed435fc02113b25eb576126b9->enter($__internal_62c08fc2b5a6e865eeb904134770c7213b3d3cfed435fc02113b25eb576126b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "               
                    <div class=\"header_wrapper\">
                        <div class=\"img\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/header5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"header_inner\">
                            <div class=\"container\">
                                <h1>";
        // line 136
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                                <div class=\"breadcrumbs1\"><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_main_index");
        echo "\">Accueil</a><span></span>";
        $this->displayBlock('content_stitle', $context, $blocks);
        echo "</div>
                            </div>
                        </div>
                        <div id=\"free\">
                            <div class=\"container\">
                                <div class=\"free_inner\">
                                    <div class=\"free\">
                                        <div class=\"txt1\">call us</div>
                                        <div class=\"txt2\">1-800-123-1234</div>
                                        <div class=\"txt3\"><span>or</span></div>
                                        <div class=\"txt4\"><a href=\"#\" class=\"btn-default btn2\">email us</a></div>
                                        <div class=\"txt5\">free consultation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                    ";
        // line 154
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 155
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 156
                echo "                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Erreur! </strong>";
                // line 158
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 162
                echo "                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Succes! </strong>";
                // line 164
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                    ";
        }
        echo " 

                ";
        
        $__internal_62c08fc2b5a6e865eeb904134770c7213b3d3cfed435fc02113b25eb576126b9->leave($__internal_62c08fc2b5a6e865eeb904134770c7213b3d3cfed435fc02113b25eb576126b9_prof);

    }

    // line 136
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_56d45e2425aec59235c4ea490605925b63293590b38ea7a0987293d095fe5786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d45e2425aec59235c4ea490605925b63293590b38ea7a0987293d095fe5786->enter($__internal_56d45e2425aec59235c4ea490605925b63293590b38ea7a0987293d095fe5786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " ";
        
        $__internal_56d45e2425aec59235c4ea490605925b63293590b38ea7a0987293d095fe5786->leave($__internal_56d45e2425aec59235c4ea490605925b63293590b38ea7a0987293d095fe5786_prof);

    }

    // line 137
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_e9ff9b37985a7425d490c05b68fa04cad884f602ffddb2a1ef60601678f0b996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ff9b37985a7425d490c05b68fa04cad884f602ffddb2a1ef60601678f0b996->enter($__internal_e9ff9b37985a7425d490c05b68fa04cad884f602ffddb2a1ef60601678f0b996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        
        $__internal_e9ff9b37985a7425d490c05b68fa04cad884f602ffddb2a1ef60601678f0b996->leave($__internal_e9ff9b37985a7425d490c05b68fa04cad884f602ffddb2a1ef60601678f0b996_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 137,  450 => 136,  439 => 167,  430 => 164,  426 => 162,  421 => 161,  412 => 158,  408 => 156,  403 => 155,  401 => 154,  379 => 137,  375 => 136,  369 => 133,  360 => 131,  350 => 45,  345 => 43,  340 => 41,  335 => 39,  330 => 37,  326 => 36,  321 => 34,  317 => 33,  312 => 31,  307 => 29,  302 => 27,  298 => 26,  294 => 25,  290 => 24,  286 => 23,  282 => 22,  277 => 21,  271 => 20,  262 => 17,  258 => 16,  254 => 15,  250 => 14,  245 => 13,  239 => 12,  228 => 4,  217 => 183,  202 => 170,  200 => 131,  191 => 124,  185 => 123,  178 => 119,  174 => 118,  167 => 115,  161 => 113,  156 => 111,  151 => 110,  146 => 108,  142 => 107,  137 => 106,  134 => 105,  129 => 103,  125 => 102,  120 => 101,  118 => 100,  114 => 99,  98 => 86,  83 => 73,  77 => 72,  51 => 48,  49 => 20,  46 => 19,  44 => 12,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>{% block title %}{% endblock %} | Eco-Job </title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Your description\">
        <meta name=\"keywords\" content=\"Your keywords\">
        <meta name=\"author\" content=\"Your name\">

        {% block stylesheets %}
            <link href=\"{{asset('css/bootstrap.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('css/font-awesome.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('css/flexslider.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('css/animate.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{asset('js/jquery.js')}}\"></script>
\t    <script src=\"{{asset('js/jquery.form.js')}}\"></script>
            <script src=\"{{ asset('bundles/fosjsrouting/public/js/router.js') }}\"></script>
            <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>            
            <script src=\"{{asset('js/jquery-migrate-1.2.1.min.js')}}\"></script>
            <script src=\"{{asset('js/jquery.easing.1.3.js')}}\"></script>
            <script src=\"{{asset('js/superfish.js')}}\"></script>

            <script src=\"{{asset('js/jquery.flexslider.js')}}\"></script>

            <script src=\"{{asset('js/jquery.appear.js')}}\"></script>

            <script src=\"{{asset('js/jquery.equalheights.js')}}\"></script>
            <script src=\"{{asset('js/jquery.ui.totop.js')}}\"></script>

            <script src=\"{{asset('js/jquery.caroufredsel.js')}}\"></script>
            <script src=\"{{asset('js/jquery.touchSwipe.min.js')}}\"></script>

            <script src=\"{{asset('js/jquery.parallax-1.1.3.resize.js')}}\"></script>

            <script src=\"{{asset('js/SmoothScroll.js')}}\"></script>

            <script src=\"{{asset('js/cform.js')}}\"></script>

            <script src=\"{{asset('js/scripts.js')}}\"></script>

        {% endblock %}

        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>
    <body class=\"front\">

        <div id=\"main\">

            <div class=\"top1_wrapper\">
                <div class=\"container\">
                    <div class=\"top1 clearfix\">
                        <div class=\"location1_wrapper\"><div class=\"location1 fa1\"><i class=\"fa fa-map-marker\"></i><span>8901 Marmora Road, Glasgow, D04 89GR.</span></div></div>
                        <div class=\"phone1_wrapper\"><div class=\"phone1 fa1\"><i class=\"fa fa-phone\"></i><span>1-800-123-1234</span></div></div>
                        <div class=\"mail1_wrapper\"><div class=\"mail1 fa1\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div></div>

                        <div class=\"social_wrapper\">
                            <ul class=\"social clearfix\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                                {% if app.user %}<li><a href=\"#\">{{app.user.username}}</a></li>{% endif %}
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"top2_wrapper\">
                <div class=\"container\">
                    <div class=\"top2 clearfix\">
                        <header>
                            <div class=\"logo_wrapper\">
                                <a href=\"index.html\" class=\"logo\">
                                    <img src=\"{{asset('images/logo.png')}}\" alt=\"\" class=\"img-responsive\">
                                </a>
                            </div>
                        </header>
                        <div class=\"navbar navbar_ navbar-default\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"navbar-collapse navbar-collapse_ collapse\">
                                <ul class=\"nav navbar-nav sf-menu clearfix\">
                                    <li class=\"active\"><a href=\"{{path('eco_job_anonymous__offre_searchpage')}}\">Accueil</a></li>            
                                    {% if not app.user %}
                                    <li><a href=\"{{path('eco_job_anonymous__offre_searchpage')}}\">Recherche</a></li>
                                    <li><a href=\"{{path('eco_job_candidat_index')}}\">Candidat</a></li>
                                    <li><a href=\"{{path('eco_job_recruteur_index')}}\">Recruteur</a></li>
                                    {% else %}
                                        {% if is_granted('ROLE_RECRUTEUR') %}
                                            <li><a href=\"{{path('eco_job_anonymous__offre_searchpage')}}\">Recherche</a></li>
                                            <li><a href=\"{{path('eco_job_recruteur_banquecv')}}\">Banque de CV</a></li>
                                            <li><a href=\"{{path('eco_job_recruteur_index')}}\">Recruteur</a></li>                                            
                                        {% elseif is_granted('ROLE_CANDIDAT') %}
                                            <li><a href=\"{{path('eco_job_anonymous_map')}}\">Recherche</a></li>
                                            <li><a href=\"{{path('eco_job_candidat_index')}}\">Candidat</a></li>
                                        {% endif %}
                                        <li><a href=\"{{path('eco_job_messagerie_inbox')}}\">Messages</a></li>
                                    {% endif %}
                                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}                                                                                                                                                                                                       
                                        <li class=\"sub-menu sub-menu-1\"><a href=\"#\">Mon compte<em></em></a>
                                            <ul>
                                                <li><a href=\"{{path('fos_user_profile_show')}}\">Profile</a></li>                                                  
                                                <li><a href=\"{{path('fos_user_security_logout')}}\">Se déconnecter</a></li>  
                                            </ul>
                                        </li>                                            
                                    {% else %}
                                        <li><a href=\"{{path('fos_user_security_login')}}\">Se connecter</a></li>
                                    {% endif %}                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% block content %}               
                    <div class=\"header_wrapper\">
                        <div class=\"img\"><img src=\"{{asset('images/header5.jpg')}}\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"header_inner\">
                            <div class=\"container\">
                                <h1>{% block content_title %} {% endblock %}</h1>
                                <div class=\"breadcrumbs1\"><a href=\"{{path('eco_job_main_index')}}\">Accueil</a><span></span>{% block content_stitle %} {% endblock %}</div>
                            </div>
                        </div>
                        <div id=\"free\">
                            <div class=\"container\">
                                <div class=\"free_inner\">
                                    <div class=\"free\">
                                        <div class=\"txt1\">call us</div>
                                        <div class=\"txt2\">1-800-123-1234</div>
                                        <div class=\"txt3\"><span>or</span></div>
                                        <div class=\"txt4\"><a href=\"#\" class=\"btn-default btn2\">email us</a></div>
                                        <div class=\"txt5\">free consultation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                    {% if app.request.hasPreviousSession %}
                        {% for flashMessage in app.session.flashBag.get('notice_error') %}
                            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Erreur! </strong>{{ flashMessage }}
                            </div>
                        {% endfor %}
                        {% for flashMessage in app.session.flashBag.get('notice_success') %}
                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Succes! </strong>{{ flashMessage }}
                            </div>
                        {% endfor %}
                    {% endif %} 

                {% endblock %}
                <div class=\"bot2_wrapper\">
                    <div class=\"container\">
                        <div class=\"copyright\">Copyright &copy; 2017. All Rights Reserved.</div>
                        <ul class=\"menu_bottom\">
                            <li><a href=\"#\">About the company</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Contact us</a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        </body>
    </html>
", "::base.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/views/base.html.twig");
    }
}
