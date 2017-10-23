<?php

/* EcoJobMainBundle:Main:index.html.twig */
class __TwigTemplate_242ad0d3948c057ac40245996f1e98150b0f2646c019f5027646c296af8947fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobMainBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a54f51df9b209805df7105dcd8df24f9ee253a9121dfdb39644027981c3e3cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54f51df9b209805df7105dcd8df24f9ee253a9121dfdb39644027981c3e3cfb->enter($__internal_a54f51df9b209805df7105dcd8df24f9ee253a9121dfdb39644027981c3e3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMainBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54f51df9b209805df7105dcd8df24f9ee253a9121dfdb39644027981c3e3cfb->leave($__internal_a54f51df9b209805df7105dcd8df24f9ee253a9121dfdb39644027981c3e3cfb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef963785d3ffacd370713b380b540734f3fe84ad5458ec9126d5cb8e9b311613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef963785d3ffacd370713b380b540734f3fe84ad5458ec9126d5cb8e9b311613->enter($__internal_ef963785d3ffacd370713b380b540734f3fe84ad5458ec9126d5cb8e9b311613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_ef963785d3ffacd370713b380b540734f3fe84ad5458ec9126d5cb8e9b311613->leave($__internal_ef963785d3ffacd370713b380b540734f3fe84ad5458ec9126d5cb8e9b311613_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_40266395a340d5a281e38c84bcdaad42dc59fabd44b11da5479a9ec8a441f991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40266395a340d5a281e38c84bcdaad42dc59fabd44b11da5479a9ec8a441f991->enter($__internal_40266395a340d5a281e38c84bcdaad42dc59fabd44b11da5479a9ec8a441f991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div id=\"slider_wrapper\">
  <div id=\"slider\">
    <div id=\"flexslider\">
      <ul class=\"slides clearfix\">
        <li>
          <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide01.png"), "html", null, true);
        echo "\" alt=\"\">
        </li>
        <li>
          <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide02.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </li>
        <li>
          <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide03.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </li>

      </ul>
    </div>

    <div id=\"slogan\">
      <div class=\"title\">Emploi environnement</div>
      <div class=\"content\">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada nibh dui, id ullamcorper arcu consectetur vitae.
        </p>
        ";
        // line 29
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 30
            echo "          <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn-default btn1\">S'inscrire</a>
        ";
        }
        // line 32
        echo "      </div>
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
</div>

<div class=\"nursing_wrapper\">
  <div class=\"wave1\"></div>
  <div class=\"nursing\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <div class=\"title minheight1\">
            <div class=\"txt1\">Professional In-Home Care</div>
            <div class=\"txt2\">Nursing Agency</div>
            <div class=\"txt3\">the best and most comprehensive
hospice care services</div>
          </div>
        </div>
        <div class=\"col-sm-8\">
          <div class=\"caption minheight1\">
            <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Aenean malesuada nibh dui, id ullamcorper arcu consectetur vitae. Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. <a href=\"#\">Mauris vel laoreet risus.</a> Vestibulum lacinia facilisis est ac tincidunt. Sed in arcu tempus, ornare magna eu, tristique lacus. Sed a elit sed odio bibendum condimentum. Donec in libero nec risus condimentum commodo sed nec enim. Donec consequat, purus non interdum interdum, tortor libero placerat leo, sed pellentesque sapien sem sed erat.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"get_wrapper\">
  <div class=\"container\">
    <div class=\"col-sm-4\">
      <a href=\"#\">
        <i class=\"fa fa-envelope-o\"></i>
        <span class=\"txt1\">Get Quote</span>
        <span class=\"txt2\">Donec consequat, purus non interdum ...</span>
      </a>
    </div>
    <div class=\"col-sm-4\">
      <a href=\"#\">
        <i class=\"fa fa-calendar\"></i>
        <span class=\"txt1\">Scheduling</span>
        <span class=\"txt2\">Vestibulum eu nunc ac erat placerat rhoncus et id eros. Curabitur risus sem, pellentesque a justo ac, rutrum placerat ipsum.</span>
      </a>
    </div>
    <div class=\"col-sm-4\">
      <a href=\"#\">
        <i class=\"fa fa-user-md\"></i>
        <span class=\"txt1\">Career</span>
        <span class=\"txt2\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
      </a>
    </div>
  </div>
</div>

<div class=\"splash1\">
  <div class=\"container\">
      <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li role=\"presentation\" class=\"active\">
        <a href=\"#tabpanel\" aria-controls=\"tabpanel\" role=\"tab\" data-toggle=\"tab\"><span class=\"txt1\">Why Choose Us</span></a>
      </li>
      <li role=\"presentation\">
        <a href=\"#tabpane2\" aria-controls=\"tabpane2\" role=\"tab\" data-toggle=\"tab\"><span class=\"txt1\">Common Questions</span></a>
      </li>
      <li role=\"presentation\">
        <a href=\"#tabpane3\" aria-controls=\"tabpane3\" role=\"tab\" data-toggle=\"tab\"><span class=\"txt1\">Become Part Of Nursing Agency</span></a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\">
      <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"tabpanel\">

        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"title1\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <p>Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. Mauris vel laoreet risus. Vestibulum lacinia facilisis est ac tincidunt. Sed in arcu tempus, ornare magna eu, tristique lacus. </p>
          </div>
          <div class=\"col-sm-4\">
            <ul class=\"ul1\">
              <li><a href=\"#\">Phasellus at pellentesque augue</a></li>
              <li><a href=\"#\">Proin aliquet lorem non nunc dapibus viverra.</a></li>
              <li><a href=\"#\">Ut ultrices non dolor eu consectetur</a></li>
              <li><a href=\"#\">Aliquam vel posuere eros</a></li>
              <li><a href=\"#\">Semper posuere leo</a></li>
              <li><a href=\"#\">Vestibulum efficitur diam ut nulla</a></li>
              <li><a href=\"#\">Egestas malesuada</a></li>
            </ul>
          </div>
          <div class=\"col-sm-4\">
            <ul class=\"ul1\">
              <li><a href=\"#\">Phasellus at pellentesque augue</a></li>
              <li><a href=\"#\">Proin aliquet lorem non nunc dapibus viverra.</a></li>
              <li><a href=\"#\">Ut ultrices non dolor eu consectetur</a></li>
              <li><a href=\"#\">Aliquam vel posuere eros</a></li>
              <li><a href=\"#\">Semper posuere leo</a></li>
              <li><a href=\"#\">Vestibulum efficitur diam ut nulla</a></li>
              <li><a href=\"#\">Egestas malesuada</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabpane2\">

        <div class=\"row\">
          <div class=\"col-sm-6\">

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Scelerisque eget, malesuada at?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. </dd>
              </dl>
            </div>

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
              </dl>
            </div>

          </div>
          <div class=\"col-sm-6\">

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Quisque nullatibulum libero?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
              </dl>
            </div>

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Nulla facilisinean nec eros?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
              </dl>
            </div>

          </div>
        </div>

      </div>
      <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabpane3\">

        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"thumb1\">
              <div class=\"thumbnail clearfix\">
                <figure class=\"\">
                  <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home01.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                </figure>
                <div class=\"caption\">
                  <div class=\"title2\">Looking for a good job?</div>
                  <p>
                    Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo.
                  </p>
                  <br>
                  <a href=\"#\" class=\"btn-default btn1\">submit your resume</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-sm-5 col-sm-offset-1\">
            <ul class=\"ul1\">
              <li><a href=\"#\">Phasellus at pellentesque augue</a></li>
              <li><a href=\"#\">Proin aliquet lorem non nunc dapibus viverra.</a></li>
              <li><a href=\"#\">Ut ultrices non dolor eu consectetur</a></li>
              <li><a href=\"#\">Aliquam vel posuere eros</a></li>
              <li><a href=\"#\">Semper posuere leo</a></li>
              <li><a href=\"#\">Vestibulum efficitur diam ut nulla</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class=\"services\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div class=\"services1\">
          <a href=\"#\">
            <figure><img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/service1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></figure>
            <span class=\"caption\">
              <span class=\"txt1\">24 Hours Service</span>
              <span class=\"txt2\">Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur.</span>
            </span>
          </a>
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"services1\">
          <a href=\"#\">
            <figure><img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/service2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></figure>
            <span class=\"caption\">
              <span class=\"txt1\">Free Online Estimate</span>
              <span class=\"txt2\">Vivamus facilisis libero diam, molestie rutrum sem malesuada ac. Vestibulum faucibus ligula eu enim commodo volutpat.</span>
            </span>
          </a>
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"services1\">
          <a href=\"#\">
            <figure><img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/service3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></figure>
            <span class=\"caption\">
              <span class=\"txt1\">In Home Health Care</span>
              <span class=\"txt2\">Suspendisse eget nunc nec diam gravida volutpat. Nulla ac ex at mauris laoreet facilisis.</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"parallax1\" class=\"parallax\">
  <div class=\"bg1 parallax-bg\"></div>
  <div class=\"overlay\"></div>
  <div class=\"parallax-content\">
    <div class=\"container\">

      <div class=\"txt1\">we have more experienced staff and do not outsource</div>
      <div class=\"txt2\">We provide the best medical team!</div>
      <div class=\"txt3\"><a href=\"#\" class=\"btn-default btn1\">request care now</a></div>

    </div>
  </div>
</div>

<div class=\"review_wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">

        <div class=\"title3\">CUSTOMER REVIEWS</div>

        <div class=\"review1 clearfix\">
          <div class=\"text\">
            <div class=\"txt1\">Professional and friendly care team! </div>
            <div class=\"txt2\">Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. <a href=\"#\">Ut ultrices non dolor eu consectetur.</a> Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. </div>
          </div>
          <div class=\"author\">
            <figure><img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/customer1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></figure>
            <div class=\"name\"><strong>Connor Walker</strong> - Customer</div>
          </div>
        </div>

        <div class=\"hl1\"></div>

        <div class=\"review1 clearfix\">
          <div class=\"text\">
            <div class=\"txt1\">Professional and friendly care team! </div>
            <div class=\"txt2\">Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</div>
          </div>
          <div class=\"author\">
            <figure><img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/customer2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></figure>
            <div class=\"name\"><strong>Alexa Smith</strong> - Customer</div>
          </div>
        </div>

      </div>
      <div class=\"col-sm-6\">

        <div class=\"quote_wrapper\">

          <div class=\"title4\">GET A QUICK <span>QUOTE</span></div>
          <div class=\"title5\">contact us for more information</div>

          <br>

          <div id=\"note\"></div>
          <div id=\"fields\">
            <form id=\"ajax-contact-form\" class=\"form-horizontal\" action=\"javascript:alert('success.');\">
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputName\">First Name</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" value=\"First Name\" onBlur=\"if(this.value=='') this.value='First Name'\" onFocus=\"if(this.value =='First Name' ) this.value=''\">
                  </div>
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputLName\">Last Name</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputLName\" name=\"lname\" value=\"Last Name\" onBlur=\"if(this.value=='') this.value='Last Name'\" onFocus=\"if(this.value =='Last Name' ) this.value=''\">
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputEmail\">Email</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"email\" value=\"E-mail address\" onBlur=\"if(this.value=='') this.value='E-mail address'\" onFocus=\"if(this.value =='E-mail address' ) this.value=''\">
                  </div>
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputPhone\">Phone</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputPhone\" name=\"phone\" value=\"Phone\" onBlur=\"if(this.value=='') this.value='Phone'\" onFocus=\"if(this.value =='Phone' ) this.value=''\">
                  </div>
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div class=\"form-group\">
                      <label for=\"inputMessage\">Your Message</label>
                      <textarea class=\"form-control\" rows=\"5\" id=\"inputMessage\" name=\"content\" onBlur=\"if(this.value=='') this.value='Message'\"
                                  onFocus=\"if(this.value =='Message' ) this.value=''\">Message</textarea>
                  </div>
                </div>
              </div>

              <button type=\"submit\" class=\"btn-default btn-cf-submit\">Submit</button>
            </form>
          </div>




        </div>



      </div>
    </div>


  </div>
</div>

<div id=\"banner_wrapper\">
  <div id=\"banner_inner\">
    <div class=\"\">
      <div id=\"banner\">
        <div class=\"container\">
          <a class=\"banner_prev\" href=\"#\"></a>
          <a class=\"banner_next\" href=\"#\"></a>
          <div class=\"carousel-box\">
            <div class=\"inner\">
              <div class=\"carousel main\">
                <ul>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/partner5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>



                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"bot1_wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <div class=\"logo2_wrapper\">
          <a href=\"index.html\" class=\"logo2\">
            <img src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
          </a>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien.
        </p>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"bot1_title\">services</div>
        <ul class=\"ul0\">
          <li><a href=\"#\">Quisque</a></li>
          <li><a href=\"#\">Scelerisque eget,</a></li>
          <li><a href=\"#\">Vivamus eget niiam</a></li>
          <li><a href=\"#\">Nulla facilisinean</a></li>
          <li><a href=\"#\">Vestibulum ante</a></li>
          <li><a href=\"#\">Primis in faucib</a></li>
          <li><a href=\"#\">Orci luctus et</a></li>
          <li><a href=\"#\">Ultrices posuere</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"bot1_title\">Additional Info</div>
        <ul class=\"ul2\">
          <li><a href=\"#\">Quisque nullatibulum libero</a></li>
          <li><a href=\"#\">Scelerisque eget, malesuada at</a></li>
          <li><a href=\"#\">Vivamus eget niiam cursus leo</a></li>
          <li><a href=\"#\">Nulla facilisinean nec eros</a></li>
          <li><a href=\"#\">Vestibulum ante ipsum</a></li>
          <li><a href=\"#\">Primis in faucib</a></li>
          <li><a href=\"#\">Orci luctus et</a></li>
          <li><a href=\"#\">Ultrices posuere</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"bot1_title\">Cntacts</div>
        <p>
          Have questions? Call us today!
        </p>
        <div class=\"phone2\">1-800-123-1234</div>
        <div class=\"mail2_wrapper\"><div class=\"mail2\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div></div>

        <div class=\"social2_wrapper\">
          <ul class=\"social2 clearfix\">
            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
";
        
        $__internal_40266395a340d5a281e38c84bcdaad42dc59fabd44b11da5479a9ec8a441f991->leave($__internal_40266395a340d5a281e38c84bcdaad42dc59fabd44b11da5479a9ec8a441f991_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 519,  607 => 495,  595 => 486,  583 => 477,  571 => 468,  559 => 459,  546 => 449,  534 => 440,  522 => 431,  510 => 422,  498 => 413,  405 => 323,  389 => 310,  347 => 271,  333 => 260,  319 => 249,  280 => 213,  97 => 32,  91 => 30,  89 => 29,  74 => 17,  68 => 14,  62 => 11,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} Accueil {{parent()}} {% endblock %}

{% block content %}
<div id=\"slider_wrapper\">
  <div id=\"slider\">
    <div id=\"flexslider\">
      <ul class=\"slides clearfix\">
        <li>
          <img src=\"{{asset('images/slide01.png')}}\" alt=\"\">
        </li>
        <li>
          <img src=\"{{asset('images/slide02.jpg')}}\" alt=\"\">
        </li>
        <li>
          <img src=\"{{asset('images/slide03.jpg')}}\" alt=\"\">
        </li>

      </ul>
    </div>

    <div id=\"slogan\">
      <div class=\"title\">Emploi environnement</div>
      <div class=\"content\">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada nibh dui, id ullamcorper arcu consectetur vitae.
        </p>
        {% if not app.user %}
          <a href=\"{{path('fos_user_registration_register')}}\" class=\"btn-default btn1\">S'inscrire</a>
        {% endif %}
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
</div>

<div class=\"nursing_wrapper\">
  <div class=\"wave1\"></div>
  <div class=\"nursing\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <div class=\"title minheight1\">
            <div class=\"txt1\">Professional In-Home Care</div>
            <div class=\"txt2\">Nursing Agency</div>
            <div class=\"txt3\">the best and most comprehensive
hospice care services</div>
          </div>
        </div>
        <div class=\"col-sm-8\">
          <div class=\"caption minheight1\">
            <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Aenean malesuada nibh dui, id ullamcorper arcu consectetur vitae. Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. <a href=\"#\">Mauris vel laoreet risus.</a> Vestibulum lacinia facilisis est ac tincidunt. Sed in arcu tempus, ornare magna eu, tristique lacus. Sed a elit sed odio bibendum condimentum. Donec in libero nec risus condimentum commodo sed nec enim. Donec consequat, purus non interdum interdum, tortor libero placerat leo, sed pellentesque sapien sem sed erat.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"get_wrapper\">
  <div class=\"container\">
    <div class=\"col-sm-4\">
      <a href=\"#\">
        <i class=\"fa fa-envelope-o\"></i>
        <span class=\"txt1\">Get Quote</span>
        <span class=\"txt2\">Donec consequat, purus non interdum ...</span>
      </a>
    </div>
    <div class=\"col-sm-4\">
      <a href=\"#\">
        <i class=\"fa fa-calendar\"></i>
        <span class=\"txt1\">Scheduling</span>
        <span class=\"txt2\">Vestibulum eu nunc ac erat placerat rhoncus et id eros. Curabitur risus sem, pellentesque a justo ac, rutrum placerat ipsum.</span>
      </a>
    </div>
    <div class=\"col-sm-4\">
      <a href=\"#\">
        <i class=\"fa fa-user-md\"></i>
        <span class=\"txt1\">Career</span>
        <span class=\"txt2\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
      </a>
    </div>
  </div>
</div>

<div class=\"splash1\">
  <div class=\"container\">
      <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li role=\"presentation\" class=\"active\">
        <a href=\"#tabpanel\" aria-controls=\"tabpanel\" role=\"tab\" data-toggle=\"tab\"><span class=\"txt1\">Why Choose Us</span></a>
      </li>
      <li role=\"presentation\">
        <a href=\"#tabpane2\" aria-controls=\"tabpane2\" role=\"tab\" data-toggle=\"tab\"><span class=\"txt1\">Common Questions</span></a>
      </li>
      <li role=\"presentation\">
        <a href=\"#tabpane3\" aria-controls=\"tabpane3\" role=\"tab\" data-toggle=\"tab\"><span class=\"txt1\">Become Part Of Nursing Agency</span></a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\">
      <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"tabpanel\">

        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"title1\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <p>Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. Mauris vel laoreet risus. Vestibulum lacinia facilisis est ac tincidunt. Sed in arcu tempus, ornare magna eu, tristique lacus. </p>
          </div>
          <div class=\"col-sm-4\">
            <ul class=\"ul1\">
              <li><a href=\"#\">Phasellus at pellentesque augue</a></li>
              <li><a href=\"#\">Proin aliquet lorem non nunc dapibus viverra.</a></li>
              <li><a href=\"#\">Ut ultrices non dolor eu consectetur</a></li>
              <li><a href=\"#\">Aliquam vel posuere eros</a></li>
              <li><a href=\"#\">Semper posuere leo</a></li>
              <li><a href=\"#\">Vestibulum efficitur diam ut nulla</a></li>
              <li><a href=\"#\">Egestas malesuada</a></li>
            </ul>
          </div>
          <div class=\"col-sm-4\">
            <ul class=\"ul1\">
              <li><a href=\"#\">Phasellus at pellentesque augue</a></li>
              <li><a href=\"#\">Proin aliquet lorem non nunc dapibus viverra.</a></li>
              <li><a href=\"#\">Ut ultrices non dolor eu consectetur</a></li>
              <li><a href=\"#\">Aliquam vel posuere eros</a></li>
              <li><a href=\"#\">Semper posuere leo</a></li>
              <li><a href=\"#\">Vestibulum efficitur diam ut nulla</a></li>
              <li><a href=\"#\">Egestas malesuada</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabpane2\">

        <div class=\"row\">
          <div class=\"col-sm-6\">

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Scelerisque eget, malesuada at?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. </dd>
              </dl>
            </div>

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
              </dl>
            </div>

          </div>
          <div class=\"col-sm-6\">

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Quisque nullatibulum libero?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
              </dl>
            </div>

            <div class=\"dl1\">
              <dl class=\"dlq\">
                <dt>Q:</dt>
                <dd>Nulla facilisinean nec eros?</dd>
              </dl>
              <dl class=\"dla\">
                <dt>A:</dt>
                <dd>Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
              </dl>
            </div>

          </div>
        </div>

      </div>
      <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabpane3\">

        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"thumb1\">
              <div class=\"thumbnail clearfix\">
                <figure class=\"\">
                  <img src=\"{{asset('images/home01.png')}}\" alt=\"\" class=\"img-responsive\">
                </figure>
                <div class=\"caption\">
                  <div class=\"title2\">Looking for a good job?</div>
                  <p>
                    Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere leo.
                  </p>
                  <br>
                  <a href=\"#\" class=\"btn-default btn1\">submit your resume</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-sm-5 col-sm-offset-1\">
            <ul class=\"ul1\">
              <li><a href=\"#\">Phasellus at pellentesque augue</a></li>
              <li><a href=\"#\">Proin aliquet lorem non nunc dapibus viverra.</a></li>
              <li><a href=\"#\">Ut ultrices non dolor eu consectetur</a></li>
              <li><a href=\"#\">Aliquam vel posuere eros</a></li>
              <li><a href=\"#\">Semper posuere leo</a></li>
              <li><a href=\"#\">Vestibulum efficitur diam ut nulla</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class=\"services\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div class=\"services1\">
          <a href=\"#\">
            <figure><img src=\"{{asset('images/service1.jpg')}}\" alt=\"\" class=\"img-responsive\"></figure>
            <span class=\"caption\">
              <span class=\"txt1\">24 Hours Service</span>
              <span class=\"txt2\">Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur.</span>
            </span>
          </a>
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"services1\">
          <a href=\"#\">
            <figure><img src=\"{{asset('images/service2.jpg')}}\" alt=\"\" class=\"img-responsive\"></figure>
            <span class=\"caption\">
              <span class=\"txt1\">Free Online Estimate</span>
              <span class=\"txt2\">Vivamus facilisis libero diam, molestie rutrum sem malesuada ac. Vestibulum faucibus ligula eu enim commodo volutpat.</span>
            </span>
          </a>
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"services1\">
          <a href=\"#\">
            <figure><img src=\"{{asset('images/service3.jpg')}}\" alt=\"\" class=\"img-responsive\"></figure>
            <span class=\"caption\">
              <span class=\"txt1\">In Home Health Care</span>
              <span class=\"txt2\">Suspendisse eget nunc nec diam gravida volutpat. Nulla ac ex at mauris laoreet facilisis.</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"parallax1\" class=\"parallax\">
  <div class=\"bg1 parallax-bg\"></div>
  <div class=\"overlay\"></div>
  <div class=\"parallax-content\">
    <div class=\"container\">

      <div class=\"txt1\">we have more experienced staff and do not outsource</div>
      <div class=\"txt2\">We provide the best medical team!</div>
      <div class=\"txt3\"><a href=\"#\" class=\"btn-default btn1\">request care now</a></div>

    </div>
  </div>
</div>

<div class=\"review_wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">

        <div class=\"title3\">CUSTOMER REVIEWS</div>

        <div class=\"review1 clearfix\">
          <div class=\"text\">
            <div class=\"txt1\">Professional and friendly care team! </div>
            <div class=\"txt2\">Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus viverra. <a href=\"#\">Ut ultrices non dolor eu consectetur.</a> Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. </div>
          </div>
          <div class=\"author\">
            <figure><img src=\"{{asset('images/customer1.jpg')}}\" alt=\"\" class=\"img-responsive\"></figure>
            <div class=\"name\"><strong>Connor Walker</strong> - Customer</div>
          </div>
        </div>

        <div class=\"hl1\"></div>

        <div class=\"review1 clearfix\">
          <div class=\"text\">
            <div class=\"txt1\">Professional and friendly care team! </div>
            <div class=\"txt2\">Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</div>
          </div>
          <div class=\"author\">
            <figure><img src=\"{{asset('images/customer2.jpg')}}\" alt=\"\" class=\"img-responsive\"></figure>
            <div class=\"name\"><strong>Alexa Smith</strong> - Customer</div>
          </div>
        </div>

      </div>
      <div class=\"col-sm-6\">

        <div class=\"quote_wrapper\">

          <div class=\"title4\">GET A QUICK <span>QUOTE</span></div>
          <div class=\"title5\">contact us for more information</div>

          <br>

          <div id=\"note\"></div>
          <div id=\"fields\">
            <form id=\"ajax-contact-form\" class=\"form-horizontal\" action=\"javascript:alert('success.');\">
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputName\">First Name</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" value=\"First Name\" onBlur=\"if(this.value=='') this.value='First Name'\" onFocus=\"if(this.value =='First Name' ) this.value=''\">
                  </div>
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputLName\">Last Name</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputLName\" name=\"lname\" value=\"Last Name\" onBlur=\"if(this.value=='') this.value='Last Name'\" onFocus=\"if(this.value =='Last Name' ) this.value=''\">
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputEmail\">Email</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"email\" value=\"E-mail address\" onBlur=\"if(this.value=='') this.value='E-mail address'\" onFocus=\"if(this.value =='E-mail address' ) this.value=''\">
                  </div>
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                      <label for=\"inputPhone\">Phone</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputPhone\" name=\"phone\" value=\"Phone\" onBlur=\"if(this.value=='') this.value='Phone'\" onFocus=\"if(this.value =='Phone' ) this.value=''\">
                  </div>
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div class=\"form-group\">
                      <label for=\"inputMessage\">Your Message</label>
                      <textarea class=\"form-control\" rows=\"5\" id=\"inputMessage\" name=\"content\" onBlur=\"if(this.value=='') this.value='Message'\"
                                  onFocus=\"if(this.value =='Message' ) this.value=''\">Message</textarea>
                  </div>
                </div>
              </div>

              <button type=\"submit\" class=\"btn-default btn-cf-submit\">Submit</button>
            </form>
          </div>




        </div>



      </div>
    </div>


  </div>
</div>

<div id=\"banner_wrapper\">
  <div id=\"banner_inner\">
    <div class=\"\">
      <div id=\"banner\">
        <div class=\"container\">
          <a class=\"banner_prev\" href=\"#\"></a>
          <a class=\"banner_next\" href=\"#\"></a>
          <div class=\"carousel-box\">
            <div class=\"inner\">
              <div class=\"carousel main\">
                <ul>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner1.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner2.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner3.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner4.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner5.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner1.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner2.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner3.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner4.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class=\"banner\">
                      <div class=\"banner_inner\">
                        <a href=\"#\">
                          <figure><img src=\"{{asset('images/partner5.jpg')}}\" alt=\"\" class=\"img-responsive\"><em></em></figure>
                        </a>
                      </div>
                    </div>
                  </li>



                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"bot1_wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <div class=\"logo2_wrapper\">
          <a href=\"index.html\" class=\"logo2\">
            <img src=\"{{asset('images/logo2.png')}}\" alt=\"\" class=\"img-responsive\">
          </a>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit, nulla quis fermentum hendrerit, nisi diam viverra metus, porta semper est ipsum et sapien.
        </p>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"bot1_title\">services</div>
        <ul class=\"ul0\">
          <li><a href=\"#\">Quisque</a></li>
          <li><a href=\"#\">Scelerisque eget,</a></li>
          <li><a href=\"#\">Vivamus eget niiam</a></li>
          <li><a href=\"#\">Nulla facilisinean</a></li>
          <li><a href=\"#\">Vestibulum ante</a></li>
          <li><a href=\"#\">Primis in faucib</a></li>
          <li><a href=\"#\">Orci luctus et</a></li>
          <li><a href=\"#\">Ultrices posuere</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"bot1_title\">Additional Info</div>
        <ul class=\"ul2\">
          <li><a href=\"#\">Quisque nullatibulum libero</a></li>
          <li><a href=\"#\">Scelerisque eget, malesuada at</a></li>
          <li><a href=\"#\">Vivamus eget niiam cursus leo</a></li>
          <li><a href=\"#\">Nulla facilisinean nec eros</a></li>
          <li><a href=\"#\">Vestibulum ante ipsum</a></li>
          <li><a href=\"#\">Primis in faucib</a></li>
          <li><a href=\"#\">Orci luctus et</a></li>
          <li><a href=\"#\">Ultrices posuere</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"bot1_title\">Cntacts</div>
        <p>
          Have questions? Call us today!
        </p>
        <div class=\"phone2\">1-800-123-1234</div>
        <div class=\"mail2_wrapper\"><div class=\"mail2\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div></div>

        <div class=\"social2_wrapper\">
          <ul class=\"social2 clearfix\">
            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
{% endblock %}
", "EcoJobMainBundle:Main:index.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MainBundle/Resources/views/Main/index.html.twig");
    }
}
