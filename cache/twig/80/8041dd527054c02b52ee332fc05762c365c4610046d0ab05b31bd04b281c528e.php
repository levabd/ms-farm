<?php

/* partials/base.html.twig */
class __TwigTemplate_b6ee39eaf9c2850c060e3a38fdfad0eff64cbc746b9a44e5f593de819eb0497c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 60
        echo "</head>
<body class=\"home page page-id-5 page-template page-template-full_width page-template-full_width-php ajax_fade page_not_loaded  qode-title-hidden qode_grid_1300 footer_responsive_adv qode-theme-ver-9.6 wpb-js-composer js-comp-ver-4.12 vc_responsive\" itemscope itemtype=\"http://schema.org/WebPage\">

  <div class=\"wrapper\">
    <div class=\"wrapper_inner\">
      <!-- Google Analytics start -->
      <!-- Google Analytics end -->
      ";
        // line 67
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 70
        echo "
      <div class=\"content  has_slider\">
        <div class=\"content_inner\">
          <style type=\"text/css\" data-type=\"vc_shortcodes-custom-css-5\">.vc_custom_1468420979451{padding-top: 120px !important;padding-bottom: 71px !important;}.vc_custom_1469010542810{padding-top: 120px !important;padding-bottom: 70px !important;}.vc_custom_1468484781766{padding-top: 120px !important;padding-bottom: 79px !important;}.vc_custom_1469533445800{padding-top: 8px !important;background-color: #f6f6f6 !important;}.vc_custom_1469010574102{padding-right: 4% !important;}.vc_custom_1469533582717{padding-right: 16% !important;padding-left: 16% !important;}.vc_custom_1468424143369{padding-top: 8.2% !important;padding-bottom: 9.2% !important;}</style>
          ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        </div>
      </div>

      ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "    </div>
  </div>
  <script type='text/javascript'>
  /* <![CDATA[ */
  var _wpcf7 = {\"loaderUrl\":\"\\/user\\/themes\\/-bridge74\\/contact-form-7\\/ajax-loader.gif\",\"recaptchaEmpty\":\"Будь-ласка підтвердіть що ви не робот.\",\"sending\":\"Надсилання ...\"};
  /* ]]> */
  </script>

  <script type='text/javascript' src='/user/themes/-bridge74/js/contact-form-7/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/contact-form-7/scripts.js?ver=4.4.2'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/qode-like.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/plugins.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.carouFredSel-6.2.1.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/lemmon-slider.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.fullPage.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.mousewheel.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.touchSwipe.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/isotope/isotope.pkgd.min.js?ver=4.12'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.stretch.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/TweenLite.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/ScrollToPlugin.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/smoothPageScroll.min.js?ver=4.5.9'></script>
  
  <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBNlYg2cPE3-QTyOSgNN7Rxnr6ScuFD9Vk'></script>

  <script type='text/javascript' src='/user/themes/-bridge74/js/default_dynamic.js?ver=1481193858'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/default.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/custom_js.js?ver=1481193858'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/comment-reply.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/ajax.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/js_composer_front.min.js?ver=4.12'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/wp-embed.min.js?ver=4.5.9'></script>


</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
  ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<link rel=\"profile\" href=\"http://gmpg.org/xfn/11\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.ico");
        echo "\" />
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.ico");
        echo "\">
  <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.ico");
        echo "\"/>

  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

<script type='text/javascript'>
  /* <![CDATA[ */
  var LS_Meta = {\"v\":\"5.6.9\"};
  /* ]]> */
</script>

  <script type='text/javascript' src='/user/themes/-bridge74/js/greensock.js?ver=1.11.8'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.js?ver=1.12.4'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery-migrate.min.js?ver=1.4.1'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/LayerSlider/layerslider.kreaturamedia.jquery.js?ver=5.6.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/LayerSlider/layerslider.transitions.js?ver=5.6.9'></script>


  <!--[if lte IE 9]>
    <link href=\"/user/themes/-bridge74/css/vc_lte_ie9.min.css\" type=\"text/css\" rel=\"stylesheet\" />
  <![endif]-->
  
  <!--[if IE  8]>
    <link href=\"/user/themes/-bridge74/css/vc-ie8.min.css\" type=\"text/css\" rel=\"stylesheet\" />
  <![endif]-->

  <style type=\"text/css\">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
  <style type=\"text/css\" data-type=\"vc_shortcodes-custom-css\">.vc_custom_1468420979451{padding-top: 120px !important;padding-bottom: 71px !important;}.vc_custom_1469010542810{padding-top: 120px !important;padding-bottom: 70px !important;}.vc_custom_1468484781766{padding-top: 120px !important;padding-bottom: 79px !important;}.vc_custom_1469533445800{padding-top: 108px !important;background-color: #f6f6f6 !important;}.vc_custom_1469010574102{padding-right: 4% !important;}.vc_custom_1469533582717{padding-right: 16% !important;padding-left: 16% !important;}.vc_custom_1468424143369{padding-top: 8.2% !important;padding-bottom: 9.2% !important;}</style><noscript><style type=\"text/css\"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>

  ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/layerslider.css", 1 => 100), "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/contact-form-7/styles.css", 1 => 100), "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/styles.css", 1 => 100), "method");
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/stylesheet.min.css", 1 => 100), "method");
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/print.css", 1 => 100), "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/webkit_stylesheet.css", 1 => 100), "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style_dynamic.css", 1 => 100), "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/responsive.min.css", 1 => 100), "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style_dynamic_responsive.css", 1 => 100), "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom_css.css", 1 => 100), "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/js_composer.min.css", 1 => 100), "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome/css/font-awesome.min.css", 1 => 100), "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/elegant-icons/style.min.css", 1 => 100), "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/linea-icons/style.css", 1 => 100), "method");
        // line 29
        echo "
    <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic|Hind+Siliguri:100,200,300,400,500,600,700,800,900,300italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
  ";
    }

    // line 67
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 68
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "      ";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "          ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
        echo "      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 82,  248 => 81,  245 => 80,  240 => 75,  236 => 76,  233 => 75,  230 => 74,  226 => 69,  223 => 68,  220 => 67,  213 => 29,  210 => 28,  207 => 27,  204 => 26,  201 => 25,  198 => 24,  195 => 23,  192 => 22,  189 => 21,  186 => 20,  183 => 19,  180 => 18,  177 => 17,  174 => 16,  171 => 15,  168 => 14,  136 => 33,  134 => 14,  129 => 12,  125 => 11,  121 => 10,  117 => 8,  115 => 7,  107 => 6,  104 => 5,  101 => 4,  61 => 83,  59 => 80,  54 => 77,  52 => 74,  46 => 70,  44 => 67,  35 => 60,  33 => 4,  28 => 2,  25 => 1,);
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
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<link rel=\"profile\" href=\"http://gmpg.org/xfn/11\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ url('theme://img/favicon.ico') }}\" />
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ url('theme://img/favicon.ico') }}\">
  <link rel=\"apple-touch-icon\" href=\"{{ url('theme://img/favicon.ico') }}\"/>

  {% block stylesheets %}
    {% do assets.addCss('theme://css/layerslider.css',100) %}
    {% do assets.addCss('theme://css/contact-form-7/styles.css',100) %}
    {% do assets.addCss('theme://css/styles.css',100) %}
    {% do assets.addCss('theme://css/stylesheet.min.css',100) %}
    {% do assets.addCss('theme://css/print.css',100) %}
    {% do assets.addCss('theme://css/webkit_stylesheet.css',100) %}
    {% do assets.addCss('theme://css/style_dynamic.css',100) %}
    {% do assets.addCss('theme://css/responsive.min.css',100) %}
    {% do assets.addCss('theme://css/style_dynamic_responsive.css',100) %}
    {% do assets.addCss('theme://css/custom_css.css',100) %}
    {% do assets.addCss('theme://css/js_composer.min.css',100) %}
    {% do assets.addCss('theme://css/font-awesome/css/font-awesome.min.css',100) %}
    {% do assets.addCss('theme://css/elegant-icons/style.min.css',100) %}
    {% do assets.addCss('theme://css/linea-icons/style.css',100) %}

    <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic|Hind+Siliguri:100,200,300,400,500,600,700,800,900,300italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
  {% endblock %}
  {{ assets.css() }}

<script type='text/javascript'>
  /* <![CDATA[ */
  var LS_Meta = {\"v\":\"5.6.9\"};
  /* ]]> */
</script>

  <script type='text/javascript' src='/user/themes/-bridge74/js/greensock.js?ver=1.11.8'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.js?ver=1.12.4'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery-migrate.min.js?ver=1.4.1'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/LayerSlider/layerslider.kreaturamedia.jquery.js?ver=5.6.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/LayerSlider/layerslider.transitions.js?ver=5.6.9'></script>


  <!--[if lte IE 9]>
    <link href=\"/user/themes/-bridge74/css/vc_lte_ie9.min.css\" type=\"text/css\" rel=\"stylesheet\" />
  <![endif]-->
  
  <!--[if IE  8]>
    <link href=\"/user/themes/-bridge74/css/vc-ie8.min.css\" type=\"text/css\" rel=\"stylesheet\" />
  <![endif]-->

  <style type=\"text/css\">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
  <style type=\"text/css\" data-type=\"vc_shortcodes-custom-css\">.vc_custom_1468420979451{padding-top: 120px !important;padding-bottom: 71px !important;}.vc_custom_1469010542810{padding-top: 120px !important;padding-bottom: 70px !important;}.vc_custom_1468484781766{padding-top: 120px !important;padding-bottom: 79px !important;}.vc_custom_1469533445800{padding-top: 108px !important;background-color: #f6f6f6 !important;}.vc_custom_1469010574102{padding-right: 4% !important;}.vc_custom_1469533582717{padding-right: 16% !important;padding-left: 16% !important;}.vc_custom_1468424143369{padding-top: 8.2% !important;padding-bottom: 9.2% !important;}</style><noscript><style type=\"text/css\"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>

  {% endblock head%}
</head>
<body class=\"home page page-id-5 page-template page-template-full_width page-template-full_width-php ajax_fade page_not_loaded  qode-title-hidden qode_grid_1300 footer_responsive_adv qode-theme-ver-9.6 wpb-js-composer js-comp-ver-4.12 vc_responsive\" itemscope itemtype=\"http://schema.org/WebPage\">

  <div class=\"wrapper\">
    <div class=\"wrapper_inner\">
      <!-- Google Analytics start -->
      <!-- Google Analytics end -->
      {% block header_navigation %}
        {% include 'partials/navigation.html.twig' %}
      {% endblock %}

      <div class=\"content  has_slider\">
        <div class=\"content_inner\">
          <style type=\"text/css\" data-type=\"vc_shortcodes-custom-css-5\">.vc_custom_1468420979451{padding-top: 120px !important;padding-bottom: 71px !important;}.vc_custom_1469010542810{padding-top: 120px !important;padding-bottom: 70px !important;}.vc_custom_1468484781766{padding-top: 120px !important;padding-bottom: 79px !important;}.vc_custom_1469533445800{padding-top: 8px !important;background-color: #f6f6f6 !important;}.vc_custom_1469010574102{padding-right: 4% !important;}.vc_custom_1469533582717{padding-right: 16% !important;padding-left: 16% !important;}.vc_custom_1468424143369{padding-top: 8.2% !important;padding-bottom: 9.2% !important;}</style>
          {% block body %}
            {% block content %}{% endblock %}
          {% endblock %}
        </div>
      </div>

      {% block footer %}
        {% include 'partials/footer.html.twig' %}
      {% endblock %}
    </div>
  </div>
  <script type='text/javascript'>
  /* <![CDATA[ */
  var _wpcf7 = {\"loaderUrl\":\"\\/user\\/themes\\/-bridge74\\/contact-form-7\\/ajax-loader.gif\",\"recaptchaEmpty\":\"Будь-ласка підтвердіть що ви не робот.\",\"sending\":\"Надсилання ...\"};
  /* ]]> */
  </script>

  <script type='text/javascript' src='/user/themes/-bridge74/js/contact-form-7/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/contact-form-7/scripts.js?ver=4.4.2'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/qode-like.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/plugins.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.carouFredSel-6.2.1.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/lemmon-slider.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.fullPage.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.mousewheel.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.touchSwipe.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/isotope/isotope.pkgd.min.js?ver=4.12'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/jquery.stretch.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/TweenLite.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/ScrollToPlugin.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/smoothPageScroll.min.js?ver=4.5.9'></script>
  
  <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBNlYg2cPE3-QTyOSgNN7Rxnr6ScuFD9Vk'></script>

  <script type='text/javascript' src='/user/themes/-bridge74/js/default_dynamic.js?ver=1481193858'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/default.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/custom_js.js?ver=1481193858'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/comment-reply.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/ajax.min.js?ver=4.5.9'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/js_composer_front.min.js?ver=4.12'></script>
  <script type='text/javascript' src='/user/themes/-bridge74/js/wp-embed.min.js?ver=4.5.9'></script>


</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\user\\themes\\-bridge74\\templates\\partials\\base.html.twig");
    }
}
