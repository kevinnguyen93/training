<?php

/* WebProfilerBundle:Collector:form.html.twig */
class __TwigTemplate_5fbab0a0e10c6a01d4b74ad0ba653fb927b2cc3bc2aa776cedaba43388442501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_0b3acce97713772776957a99c61925d7684102bffcf408f29e33c2282f20b417"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors")) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms")), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms")), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                echo $context["__internal_0b3acce97713772776957a99c61925d7684102bffcf408f29e33c2282f20b417"]->getform_tree_entry((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), (isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                echo $context["__internal_0b3acce97713772776957a99c61925d7684102bffcf408f29e33c2282f20b417"]->getform_tree_details((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), (isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms_by_hash"));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    buttons[i].addEventListener('click', function (e) {
                        toggle(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    tabs[i].addEventListener('click', function (e) {
                        select(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage));

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 415
    public function getform_tree_entry($_name = null, $_data = null, $_expanded = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
            "expanded" => $_expanded,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 416
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
            echo "-details\">
            ";
            // line 418
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children")))) {
                // line 419
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 421
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 423
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "
            ";
            // line 424
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")) > 0))) {
                // line 425
                echo "            <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")), "html", null, true);
                echo "</div>
            ";
            }
            // line 427
            echo "        </div>

        ";
            // line 429
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children")))) {
                // line 430
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-children\"";
                if ((!(isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded")))) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 431
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children"));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 432
                    echo "                    ";
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => (isset($context["childName"]) ? $context["childName"] : $this->getContext($context, "childName")), 1 => (isset($context["childData"]) ? $context["childData"] : $this->getContext($context, "childData")), 2 => false), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                echo "            </ul>
        ";
            }
            // line 436
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 439
    public function getform_tree_details($_name = null, $_data = null, $_forms_by_hash = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
            "forms_by_hash" => $_forms_by_hash,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 440
            echo "    <div class=\"tree-details\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
            echo "-details\">
        <h2>
            ";
            // line 442
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "
            ";
            // line 443
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true)) {
                // line 444
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type"), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 446
            echo "        </h2>

        ";
            // line 448
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")) > 0))) {
                // line 449
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 451
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 457
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 463
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 464
                    echo "                <tr>
                    <td>";
                    // line 465
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 467
                    if (twig_test_empty($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "origin"))) {
                        // line 468
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ((!$this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "origin"), array(), "array", true, true))) {
                        // line 470
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 472
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash")), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "origin"), array(), "array"), "name"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 474
                    echo "                    </td>
                    <td>
                        ";
                    // line 476
                    if (twig_test_empty($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"))) {
                        // line 477
                        echo "                            <em>Unknown.</em>
                        ";
                    } elseif ($this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cause", array(), "any", false, true), "root", array(), "any", true, true)) {
                        // line 479
                        echo "                            <strong>Constraint Violation</strong><br/>
                            <pre>";
                        // line 480
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "root"), "html", null, true);
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "path")))) {
                            if ((twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "path")) != "[")) {
                                echo ".";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "path"), "html", null, true);
                        }
                        echo " = ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "value"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 482
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "html", null, true);
                        echo "</pre>
                        ";
                    }
                    // line 484
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                echo "            </table>
        </div>
        ";
            }
            // line 490
            echo "
        ";
            // line 491
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 492
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 493
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 499
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 504
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 505
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "model"), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 507
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 509
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 513
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "norm"), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 518
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 519
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "view"), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 521
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 523
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 528
            echo "
        ";
            // line 529
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 530
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 531
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 537
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 538
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 539
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 543
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 544
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "view"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 546
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 548
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 552
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "norm"), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 557
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 558
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "model"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 560
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 562
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 566
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 568
                echo "        </div>
        ";
            }
            // line 570
            echo "
        ";
            // line 571
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 572
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 573
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 579
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-passed_options\">
            ";
                // line 580
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options"))) {
                    // line 581
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 587
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options"));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 588
                        echo "                <tr>
                    <th>";
                        // line 589
                        echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 590
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 592
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"), (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), array(), "array") === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                            // line 593
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 595
                            echo "                            <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"), (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 597
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 600
                    echo "            </table>
            ";
                } else {
                    // line 602
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 604
                echo "        </div>
        ";
            }
            // line 606
            echo "
        ";
            // line 607
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 608
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 609
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 615
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 621
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 622
                    echo "                <tr>
                    <th>";
                    // line 623
                    echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 624
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 627
                echo "            </table>
        </div>
        ";
            }
            // line 630
            echo "
        ";
            // line 631
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 632
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 633
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 639
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 645
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "view_vars"));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 646
                    echo "                <tr>
                    <th>";
                    // line 647
                    echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 648
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 651
                echo "            </table>
        </div>
        ";
            }
            // line 654
            echo "    </div>

    ";
            // line 656
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children"));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 657
                echo "        ";
                echo $this->getAttribute($this, "form_tree_details", array(0 => (isset($context["childName"]) ? $context["childName"] : $this->getContext($context, "childName")), 1 => (isset($context["childData"]) ? $context["childData"] : $this->getContext($context, "childData")), 2 => (isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash"))), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 657,  1073 => 656,  1069 => 654,  1055 => 648,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  972 => 608,  970 => 607,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  828 => 538,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 518,  780 => 513,  770 => 507,  764 => 505,  762 => 504,  740 => 491,  724 => 484,  718 => 482,  705 => 480,  702 => 479,  698 => 477,  686 => 472,  682 => 470,  676 => 467,  664 => 463,  646 => 451,  642 => 449,  628 => 444,  626 => 443,  622 => 442,  616 => 440,  603 => 439,  591 => 436,  578 => 432,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  293 => 198,  280 => 194,  276 => 193,  271 => 190,  249 => 181,  174 => 74,  167 => 71,  118 => 49,  462 => 202,  449 => 198,  441 => 196,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  380 => 160,  361 => 146,  351 => 141,  348 => 140,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  289 => 196,  286 => 112,  267 => 101,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 71,  185 => 75,  172 => 62,  165 => 60,  127 => 60,  110 => 22,  90 => 26,  703 => 626,  695 => 624,  691 => 623,  679 => 620,  675 => 619,  667 => 617,  659 => 615,  655 => 457,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 651,  1060 => 333,  1051 => 647,  1048 => 646,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  975 => 609,  971 => 304,  967 => 606,  963 => 604,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 590,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  891 => 571,  888 => 570,  884 => 568,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 539,  826 => 247,  824 => 537,  822 => 245,  819 => 244,  815 => 531,  812 => 530,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  774 => 509,  754 => 499,  751 => 206,  748 => 205,  745 => 493,  742 => 492,  739 => 200,  737 => 490,  735 => 198,  732 => 487,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 625,  696 => 476,  692 => 474,  690 => 174,  687 => 622,  683 => 621,  681 => 169,  678 => 468,  673 => 165,  671 => 465,  668 => 464,  663 => 616,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 448,  636 => 446,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  620 => 136,  617 => 135,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  592 => 126,  589 => 124,  587 => 434,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  575 => 114,  574 => 431,  570 => 112,  567 => 110,  565 => 430,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  536 => 419,  522 => 92,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  446 => 197,  443 => 74,  439 => 195,  429 => 188,  425 => 64,  421 => 62,  412 => 60,  410 => 59,  399 => 56,  397 => 55,  394 => 168,  389 => 51,  383 => 49,  377 => 47,  373 => 156,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 137,  339 => 28,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 128,  321 => 18,  317 => 17,  300 => 121,  295 => 11,  290 => 7,  287 => 5,  282 => 3,  275 => 105,  270 => 102,  265 => 299,  263 => 294,  260 => 293,  255 => 284,  250 => 274,  245 => 270,  242 => 269,  222 => 238,  212 => 224,  207 => 75,  194 => 70,  191 => 77,  181 => 65,  178 => 64,  161 => 162,  146 => 147,  134 => 54,  126 => 121,  124 => 108,  114 => 91,  104 => 42,  84 => 24,  76 => 25,  34 => 11,  77 => 20,  58 => 17,  65 => 26,  262 => 188,  257 => 291,  251 => 182,  237 => 262,  232 => 249,  223 => 60,  215 => 53,  210 => 50,  202 => 43,  188 => 76,  186 => 190,  175 => 40,  160 => 29,  153 => 69,  150 => 55,  137 => 88,  129 => 122,  113 => 48,  97 => 41,  81 => 23,  70 => 19,  53 => 12,  23 => 1,  480 => 162,  474 => 80,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 58,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 48,  379 => 119,  374 => 116,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 143,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 4,  283 => 88,  278 => 106,  268 => 300,  264 => 84,  258 => 187,  252 => 283,  247 => 273,  241 => 90,  229 => 85,  220 => 81,  214 => 231,  177 => 63,  169 => 168,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 317,  269 => 94,  254 => 92,  243 => 56,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 56,  219 => 237,  217 => 232,  208 => 46,  204 => 78,  179 => 69,  159 => 158,  143 => 56,  135 => 62,  119 => 40,  102 => 41,  71 => 29,  67 => 20,  63 => 18,  59 => 11,  38 => 7,  94 => 34,  89 => 37,  85 => 23,  75 => 17,  68 => 14,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 27,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 9,  31 => 3,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 73,  166 => 167,  163 => 30,  158 => 79,  156 => 58,  151 => 152,  142 => 59,  138 => 56,  136 => 138,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 12,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 56,  145 => 70,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 31,  96 => 37,  83 => 33,  74 => 27,  66 => 10,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 40,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 177,  168 => 61,  164 => 70,  162 => 59,  154 => 153,  149 => 148,  147 => 54,  144 => 144,  141 => 51,  133 => 87,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 87,  106 => 45,  103 => 32,  99 => 31,  95 => 28,  92 => 37,  86 => 29,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 22,  57 => 12,  54 => 20,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
