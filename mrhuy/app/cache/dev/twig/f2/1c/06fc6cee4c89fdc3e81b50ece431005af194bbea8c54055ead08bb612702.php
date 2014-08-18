<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_f21c06fc6cee4c89fdc3e81b50ece431005af194bbea8c54055ead08bb612702 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  29 => 4,  42 => 12,  35 => 7,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 29,  75 => 28,  56 => 9,  50 => 15,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 35,  86 => 28,  66 => 25,  51 => 15,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  44 => 10,  27 => 4,  22 => 2,  54 => 21,  162 => 47,  157 => 43,  152 => 41,  149 => 40,  142 => 59,  138 => 57,  134 => 32,  131 => 31,  128 => 30,  123 => 47,  120 => 43,  118 => 40,  113 => 37,  111 => 30,  108 => 29,  105 => 40,  100 => 17,  94 => 22,  89 => 20,  87 => 20,  82 => 28,  73 => 22,  69 => 25,  64 => 12,  57 => 16,  53 => 14,  47 => 11,  43 => 8,  38 => 13,  32 => 6,  26 => 3,  84 => 46,  80 => 19,  76 => 25,  72 => 16,  68 => 14,  65 => 20,  62 => 24,  55 => 13,  49 => 19,  46 => 14,  40 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
