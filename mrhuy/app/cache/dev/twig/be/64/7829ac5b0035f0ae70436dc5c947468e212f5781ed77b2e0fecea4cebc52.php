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
        return array (  703 => 626,  699 => 625,  695 => 624,  691 => 623,  687 => 622,  683 => 621,  679 => 620,  675 => 619,  671 => 618,  667 => 617,  663 => 616,  659 => 615,  655 => 614,  60 => 22,  56 => 21,  49 => 17,  44 => 15,  38 => 12,  34 => 11,  29 => 9,  19 => 1,);
    }
}
