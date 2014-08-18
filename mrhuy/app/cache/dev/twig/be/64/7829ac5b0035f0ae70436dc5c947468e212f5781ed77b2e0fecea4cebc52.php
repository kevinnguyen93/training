<?php

/* AcmeStoreBundle:Default:home.html.twig */
class __TwigTemplate_be647829ac5b0035f0ae70436dc5c947468e212f5781ed77b2e0fecea4cebc52 extends Twig_Template
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Report GUI Flat UI</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Loading Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/bootstrap/css/prettify.css"), "html", null, true);
        echo "\" />

    <!-- Loading Flat UI -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/css/flat-ui.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/report.css"), "html", null, true);
        echo "\" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

</head>
<body>
    <div class=\"container\">
        <div class=\"row block_menutop\">
            <div class=\"col-xs-12\">
                <div class=\"block_top\">
                    <nav class=\"navbar navbar-inverse navbar-embossed\" role=\"navigation\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-01\">
                                <span class=\"sr-only\">Toggle navigation</span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-01\">
                            <div class=\"float-left\">
                                <ul class=\"nav navbar-nav navbar-left\">
                                    <li><a href=\"\">Dashboard</a></li>
                                    <li><a href=\"\">My Peer Assessments</a></li>
                                    <li><a href=\"\">Employee Records</a></li>
                                </ul>
                            </div>
                            <div class=\"float-right\">
                                <div  class=\"color-white block-user-status\" ><span>Welcome Back Linda Hun! > </span><a href=\"\">Logout</a></div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div> <!-- block_menutop -->

        <div class=\"row block_link\">
            <div class=\"col-xs-12\">
                <div class=\"font-size-14\">My Peer Assessment > Manage Assessment > #Assessment_Name > Overview</div>
            </div>
        </div> <!-- block_link -->

        <div class=\"row block_title\">
            <div class=\"col-xs-12\">
                <h4>Peer Assessment: #Assessment_Name</h4>
            </div>
        </div> <!-- block_title -->

        <hr/>
        <div class=\"row block_link_overview\">
            <div class=\"col-xs-12\">
                <div class=\"font-size-14\"><a href=\"\">Overview</a> <span>Individual Reports</span></div>
            </div>
        </div> <!-- block_link_overview -->
        <hr/>

        <div class=\"row block_btn_export\">
            <div class=\"col-xs-12\">
                <div class=\"col-xs-3\">
                    <a href=\"\" class=\"btn btn-block btn-lg btn-info\">Export Results By Category</a>
                </div>
                <div class=\"col-xs-3\">
                    <a href=\"\" class=\"btn btn-block btn-lg btn-info\">Export Results By Questions</a>
                </div>
            </div>
        </div> <!-- block_link_overview -->

        <div class=\"row block_link_pds\">
            <div class=\"col-xs-12\">
                <div class=\"col-xs-6\">
                    <hr/>
                    <div class=\"font-size-14\">
                        <a href=\"\">Print This Report</a>|<a href=\"\">Download</a>|<a href=\"\">Share</a>
                    </div>
                    <hr/>
                </div>
            </div>
        </div> <!-- block_link_pds -->

        <div class=\"row block_table1\">
            <div class=\"col-xs-12\">
                <div class=\"col-xs-9\">
                    <div class=\"panel panel-default\">
                        <table class=\"table table-border-right\">
                            <tr>
                                <th>% AVG</th>
                                <th>AVG</th>
                                <th>Median</th>
                                <th>Mode</th>
                                <th>SD</th>
                                <th>Completed</th>
                                <th>Pending</th>
                            </tr>
                            <tr>
                                <td>68%</td>
                                <td>5.8</td>
                                <td>5.5</td>
                                <td>6.7</td>
                                <td>1.2</td>
                                <td>82</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- block_table1 -->

        <div class=\"row block_table2\">
            <div class=\"col-xs-12\">
                <div class=\"block_table2_sub1 table-border-right\">
                    <div class=\"col-xs-4\">
                        <h4>Rating Scale</h4>
                        <div class=\"panel panel-default\">
                            <table class=\"table\">
                                <tr>
                                    <td>1</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lorem ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"block_table2_sub2 table-border-right\">
                    <div class=\"col-xs-8\">
                        <h4>Overall Result</h4>
                        <div class=\"panel panel-default\">
                            <table class=\"table\">
                                <tr>
                                    <td></td>
                                    <td>Category</td>
                                    <td>Weight</td>
                                    <td>%AVG</td>
                                    <td>AVG</td>
                                    <td>Median</td>
                                    <td>Mode</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                    <td>20%</td>
                                    <td>14.00%</td>
                                    <td>5.7</td>
                                    <td>5.5</td>
                                    <td>6.7</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                    <td>20%</td>
                                    <td>14.00%</td>
                                    <td>5.7</td>
                                    <td>5.5</td>
                                    <td>6.7</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                    <td>20%</td>
                                    <td>14.00%</td>
                                    <td>5.7</td>
                                    <td>5.5</td>
                                    <td>6.7</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                    <td>20%</td>
                                    <td>14.00%</td>
                                    <td>5.7</td>
                                    <td>5.5</td>
                                    <td>6.7</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Lorem ipsum dolor sit.</td>
                                    <td>20%</td>
                                    <td>14.00%</td>
                                    <td>5.7</td>
                                    <td>5.5</td>
                                    <td>6.7</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><strong>Total Peer Assessment</strong></td>
                                    <td>100%</td>
                                    <td>68.01%</td>
                                    <td>5.7</td>
                                    <td>5.5</td>
                                    <td>6.7</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- block_table2 -->

        <div class=\"row block_listrates\">
            <div class=\"col-xs-12\">
                <h4>List Of Raters</h4>
                <div class=\"col-xs-9\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Employee Name</th>
                                <th>Status</th>
                                <th>%AVG</th>
                                <th>AVG</th>
                                <th>Media</th>
                                <th>Mode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href=\"\">Kenneth Yap</a></td>
                                <td>Pading</td>
                                <td>68.00%</td>
                                <td>5.7</td>
                                <td>5.5</td>
                                <td>6.7</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href=\"\">Vincent Hung</a></td>
                                <td>Completed</td>
                                <td>98.79%</td>
                                <td>5.5</td>
                                <td>5.5</td>
                                <td>6.7</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href=\"\">Weng Cheng</a></td>
                                <td>Completed</td>
                                <td>78.91%</td>
                                <td>5.3</td>
                                <td>5.5</td>
                                <td>6.7</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href=\"\">Lauren Yang</a></td>
                                <td>Completed</td>
                                <td>57.15%</td>
                                <td>5.1</td>
                                <td>5.5</td>
                                <td>6.7</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href=\"\">Luis Loo</a></td>
                                <td>Pending</td>
                                <td>45.91%</td>
                                <td>5.8</td>
                                <td>5.5</td>
                                <td>6.7</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href=\"\">Linda Wang</a></td>
                                <td>Pending</td>
                                <td>54.01%</td>
                                <td>5.7</td>
                                <td>5.5</td>
                                <td>6.7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- block_listrates -->

        <div class=\"row block_category\">
            <div class=\"col-xs-12\">
                <div class=\"col-xs-12\">
                    <h4>Category Summary</h4>
                    <div class=\"description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda at blanditiis cum cupiditate delectus dicta dolor doloremque eligendi error fugiat fugit harum itaque iure, minima molestiae nostrum perferendis porro possimus quam rem sequi unde voluptas voluptatem voluptatum? Neque, officia.</div>
                </div>
                <div class=\"col-xs-12\">
                    <div class=\"block_blockquote bg-darkgray\">
                        <div class=\"float-left col-xs-6 padding-0 block_blockquote_text\">
                            <h5>Overall Peer RatingL 68% or 5.6 Avergae</h5>
                            <small>Aggregate rating for all categories assessed</small>
                        </div>
                        <div class=\"float-right col-xs-6\">
                            <table class=\"table\">
                                <tr>
                                    <td class=\"col-xs-6\"></td>
                                    <td>%AVG</td>
                                    <td>AVG</td>
                                    <td>Mo</td>
                                    <td>Md</td>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Peer</small>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: 68.01%;\">5.6</div>
                                        </div>
                                    </td>
                                    <td>68.01%</td>
                                    <td>5.6</td>
                                    <td>6</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Self</small>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar progress-bar-success\" style=\"width: 59.01%;\">5.2</div>
                                        </div>
                                    </td>
                                    <td>59.01%</td>
                                    <td>5.2</td>
                                    <td>5</td>
                                    <td>2</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <div class=\"block_principle\">
                        <div>
                            <h5>Principle Behaviour - 20%</h5>
                            <smal>The short description that was provideded during the setup of assessment goes here.</smal>
                        </div>
                        <div class=\"col-xs-3 min-height-100\"></div>
                        <div class=\"col-xs-6\">
                            <table class=\"table border-none\">
                                <tr>
                                    <td class=\"col-xs-6\"></td>
                                    <td>%AVG</td>
                                    <td>AVG</td>
                                    <td>Mo</td>
                                    <td>Md</td>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Peer</small>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" style=\"width: 17.01%;\">5.7</div>
                                        </div>
                                    </td>
                                    <td>17.01%</td>
                                    <td>5.7</td>
                                    <td>6</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>
                                        <small>Self</small>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar progress-bar-success\" style=\"width: 15.01%;\">4.9</div>
                                        </div>
                                    </td>
                                    <td>15.01%</td>
                                    <td>4.9</td>
                                    <td>5</td>
                                    <td>2</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <hr style=\"float: left; width: 100%\">
            </div>
        </div><!-- block_category -->

        <div class=\"row block_individual\">
            <div class=\"col-xs-12 padding-lr30\">
                <h4>Individual Results from Question Assessed</h4>
                <div class=\"col-xs-6\">
                    <div style=\"padding-top: 38px;padding-bottom: 21px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, porro!</div>
                    <div style=\"padding-top: 60px;padding-bottom: 42px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    <div style=\"padding-top: 38px;padding-bottom: 21px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem cupiditate dolorem eaque eius eligendi est explicabo fugit id inventore itaque libero neque, non provident qui quod ratione sequi vitae!</div>
                </div>
                <div class=\"col-xs-4 float-right\">

                    <table class=\"table border-none font-size-14\">
                        <tr>
                            <td class=\"col-xs-6\"></td>
                            <td>%AVG</td>
                            <td>AVG</td>
                            <td>Mo</td>
                            <td>Md</td>
                        </tr>
                        <tr>
                            <td>
                                <small>Peer</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 68.01%;\">5.6</div>
                                </div>
                            </td>
                            <td>68.01%</td>
                            <td>5.6</td>
                            <td>6</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>
                                <small>Self</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 59.01%;\">5.2</div>
                                </div>
                            </td>
                            <td>59.01%</td>
                            <td>5.2</td>
                            <td>5</td>
                            <td>2</td>
                        </tr>
                    </table>
                    <table class=\"table border-none font-size-14\">
                        <tr>
                            <td class=\"col-xs-6\"></td>
                            <td>%AVG</td>
                            <td>AVG</td>
                            <td>Mo</td>
                            <td>Md</td>
                        </tr>
                        <tr>
                            <td>
                                <small>Peer</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 68.01%;\">5.6</div>
                                </div>
                            </td>
                            <td>68.01%</td>
                            <td>5.6</td>
                            <td>6</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>
                                <small>Self</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 59.01%;\">5.2</div>
                                </div>
                            </td>
                            <td>59.01%</td>
                            <td>5.2</td>
                            <td>5</td>
                            <td>2</td>
                        </tr>
                    </table>
                    <table class=\"table border-none font-size-14\">
                        <tr>
                            <td class=\"col-xs-6\"></td>
                            <td>%AVG</td>
                            <td>AVG</td>
                            <td>Mo</td>
                            <td>Md</td>
                        </tr>
                        <tr>
                            <td>
                                <small>Peer</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 68.01%;\">5.6</div>
                                </div>
                            </td>
                            <td>68.01%</td>
                            <td>5.6</td>
                            <td>6</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>
                                <small>Self</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 59.01%;\">5.2</div>
                                </div>
                            </td>
                            <td>59.01%</td>
                            <td>5.2</td>
                            <td>5</td>
                            <td>2</td>
                        </tr>
                    </table>
                </div>
                <hr style=\"float: left; width: 100%\">
            </div>
        </div><!-- block_individual -->

        <div class=\"row block_job\">
            <div class=\"col-xs-12\">
                <div class=\"block_principle\">
                    <div>
                        <h5>Job Skills - 20%</h5>
                        <smal>The short description that was provideded during the setup of assessment goes here.</smal>
                    </div>
                    <div class=\"col-xs-3 min-height-100\"></div>
                    <div class=\"col-xs-6\">
                        <table class=\"table border-none\">
                            <tr>
                                <td class=\"col-xs-6\"></td>
                                <td>%AVG</td>
                                <td>AVG</td>
                                <td>Mo</td>
                                <td>Md</td>
                            </tr>
                            <tr>
                                <td class=\"td_progress\">
                                    <small>Peer</small>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" style=\"width: 17.01%;\">5.7</div>
                                    </div>
                                </td>
                                <td>17.01%</td>
                                <td>5.7</td>
                                <td>6</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td class=\"td_progress\">
                                    <small>Self</small>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-success\" style=\"width: 15.01%;\">4.9</div>
                                    </div>
                                </td>
                                <td>15.01%</td>
                                <td>4.9</td>
                                <td>5</td>
                                <td>2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr style=\"float: left; width: 100%\">
            </div>
        </div><!-- block_job -->

        <div class=\"row\">
            <div class=\"col-xs-12 padding-lr30\">
                <h4>Individual Results from Question Assessed</h4>
                <div class=\"col-xs-6\">
                    <div style=\"padding-top: 20px;padding-bottom: 21px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, porro!</div>
                </div>
                <div class=\"col-xs-4 float-right\">

                    <table class=\"table border-none font-size-14\">
                        <tr>
                            <td class=\"col-xs-6\"></td>
                            <td>%AVG</td>
                            <td>AVG</td>
                            <td>Mo</td>
                            <td>Md</td>
                        </tr>
                        <tr>
                            <td class=\"td_progress\">
                                <small>Peer</small>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 68.01%;\">5.6</div>
                                </div>
                            </td>
                            <td>68.01%</td>
                            <td>5.6</td>
                            <td>6</td>
                            <td>4</td>
                        </tr>
                    </table>
                </div>
                <hr style=\"float: left; width: 100%\">
            </div>
        </div>


    </div>

    <!-- load Js -->
    <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/flatui-checkbox.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/flatui-radio.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.stacktable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/video.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 626,  695 => 624,  691 => 623,  679 => 620,  675 => 619,  667 => 617,  659 => 615,  655 => 614,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 250,  826 => 247,  824 => 246,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 625,  696 => 178,  692 => 175,  690 => 174,  687 => 622,  683 => 621,  681 => 169,  678 => 168,  673 => 165,  671 => 618,  668 => 163,  663 => 616,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  620 => 136,  617 => 135,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  592 => 126,  589 => 124,  587 => 123,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  575 => 114,  574 => 113,  570 => 112,  567 => 110,  565 => 109,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  536 => 95,  522 => 92,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  446 => 75,  443 => 74,  439 => 71,  429 => 66,  425 => 64,  421 => 62,  412 => 60,  410 => 59,  399 => 56,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 47,  373 => 46,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 19,  321 => 18,  317 => 17,  300 => 13,  295 => 11,  290 => 7,  287 => 5,  282 => 3,  275 => 330,  270 => 316,  265 => 299,  263 => 294,  260 => 293,  255 => 284,  250 => 274,  245 => 270,  242 => 269,  222 => 238,  212 => 224,  207 => 216,  194 => 197,  191 => 196,  181 => 185,  178 => 184,  161 => 162,  146 => 147,  134 => 133,  126 => 121,  124 => 108,  114 => 91,  104 => 74,  84 => 33,  76 => 25,  34 => 11,  77 => 25,  58 => 21,  65 => 22,  262 => 88,  257 => 291,  251 => 58,  237 => 262,  232 => 249,  223 => 60,  215 => 53,  210 => 50,  202 => 43,  188 => 194,  186 => 190,  175 => 40,  160 => 29,  153 => 17,  150 => 16,  137 => 88,  129 => 122,  113 => 82,  97 => 78,  81 => 32,  70 => 23,  53 => 5,  23 => 1,  480 => 162,  474 => 80,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 58,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 48,  379 => 119,  374 => 116,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 106,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 98,  309 => 97,  305 => 95,  298 => 12,  294 => 90,  285 => 4,  283 => 88,  278 => 331,  268 => 300,  264 => 84,  258 => 81,  252 => 283,  247 => 273,  241 => 77,  229 => 46,  220 => 70,  214 => 231,  177 => 63,  169 => 168,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 2,  273 => 317,  269 => 94,  254 => 92,  243 => 56,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 56,  219 => 237,  217 => 232,  208 => 46,  204 => 215,  179 => 69,  159 => 158,  143 => 56,  135 => 53,  119 => 95,  102 => 32,  71 => 15,  67 => 23,  63 => 15,  59 => 17,  38 => 12,  94 => 45,  89 => 37,  85 => 75,  75 => 17,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 77,  88 => 6,  78 => 21,  46 => 7,  27 => 1,  44 => 15,  31 => 4,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 30,  158 => 67,  156 => 157,  151 => 152,  142 => 59,  138 => 54,  136 => 138,  121 => 107,  117 => 83,  105 => 80,  91 => 44,  62 => 21,  49 => 17,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 16,  69 => 11,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 57,  157 => 56,  145 => 46,  139 => 139,  131 => 132,  123 => 47,  120 => 40,  115 => 43,  111 => 90,  108 => 36,  101 => 73,  98 => 31,  96 => 53,  83 => 25,  74 => 16,  66 => 10,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 9,  209 => 223,  203 => 78,  199 => 212,  193 => 40,  189 => 71,  187 => 84,  182 => 66,  176 => 178,  173 => 177,  168 => 72,  164 => 163,  162 => 57,  154 => 153,  149 => 148,  147 => 58,  144 => 144,  141 => 143,  133 => 87,  130 => 41,  125 => 85,  122 => 43,  116 => 94,  112 => 42,  109 => 87,  106 => 86,  103 => 32,  99 => 54,  95 => 28,  92 => 21,  86 => 36,  82 => 22,  80 => 31,  73 => 24,  64 => 3,  60 => 22,  57 => 11,  54 => 20,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 7,  36 => 5,  33 => 5,  30 => 7,);
    }
}
