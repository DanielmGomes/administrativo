<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Administrativo | TARI Metais</title>

    <!-- Bootstrap -->
    <?= $this->Html->css("bootstrap.min.css") ?>
    <!-- Font Awesome -->
    <?= $this->Html->css("font-awesome.min.css") ?>
    <!-- NProgress -->
    <?= $this->Html->css("nprogress.css") ?>
    <!-- iCheck -->
    <?= $this->Html->css("green.css") ?>
    <!-- bootstrap-wysiwyg -->
    <?= $this->Html->css("prettify.min.css") ?>
    <!-- Select2 -->
    <?= $this->Html->css("select2.min.css") ?>
    <!-- Switchery -->
    <?= $this->Html->css("switchery.min.css") ?>
    <!-- starrr -->
    <?= $this->Html->css("starrr.css") ?>   
    <!-- bootstrap-progressbar -->
    <?= $this->Html->css("bootstrap-progressbar-3.3.4.min.css") ?>
    <!-- JQVMap -->
    <?= $this->Html->css("jqvmap.min.css") ?>
    <!-- bootstrap-daterangepicker -->
    <?= $this->Html->css("daterangepicker.css") ?>

    <!-- Custom Theme Style -->
    <?= $this->Html->css("custom.min.css") ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Administrativo</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?= $this->Html->image("user.svg", ['class' => 'img-circle profile_img']) ?>
              </div>
              <div class="profile_info">
                <span>Bem-Vindo,</span>
                <h2>Administrativo</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-file-text"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a><?php echo $this->Html->link('Fornecedores', ['controller' => 'providers', 'action' => 'add']) ?></a></li>
                      <li><a href="cadastros/funcionarios.php">Funcionarios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Relátorios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a><?php echo $this->Html->link('Fornecedores', ['controller' => 'providers', 'action' => 'index']) ?></a></li>
                      <li><>aFuncionários</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="fa fa-gears" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="fa fa-arrows-alt" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="fa fa-eye-slash" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="fa fa-power-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?= $this->Html->image("user.svg") ?>Administrativo
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><?php echo $this->Html->link('logout', ['controller' => 'users', 'action' => 'logout']) ?></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><?= $this->Html->image("user.svg") ?>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><?= $this->Html->image("user.svg") ?></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><?= $this->Html->image("img.jpg") ?></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><?= $this->Html->image("user.svg") ?></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
  <div class="row tile_count">       
  </div>
  <!-- /top tiles -->
  <br />
</div>
<!-- /page content -->
  


    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Administrativo TARI Metais | desenvolvido por: Daniel Gomes</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

    <!-- jQuery -->
    <?= $this->Html->script("jquery.min.js") ?>
    <!-- Bootstrap -->
    <?= $this->Html->script("bootstrap.min.js") ?>
    <!-- FastClick -->
    <?= $this->Html->script("fastclick.js") ?>
    <!-- NProgress -->
    <?= $this->Html->script("nprogress.js") ?>
    <!-- Chart.js -->
    <?= $this->Html->script("Chart.min.js") ?>
    <!-- gauge.js -->
    <?= $this->Html->script("gauge.min.js") ?>
    <!-- bootstrap-progressbar -->
    <?= $this->Html->script("bootstrap-progressbar.min.js") ?>
    <!-- iCheck -->
    <?= $this->Html->script("icheck.min.js") ?>
    <!-- Skycons -->
    <?= $this->Html->script("skycons.js") ?>
    <!-- Flot -->
    <?= $this->Html->script("jquery.flot.js") ?>
    <?= $this->Html->script("jquery.flot.pie.js") ?>
    <?= $this->Html->script("jquery.flot.time.js") ?>
    <?= $this->Html->script("jquery.flot.stack.js") ?>
    <?= $this->Html->script("jquery.flot.resize.js") ?>
    <!-- Flot plugins -->
    <?= $this->Html->script("jquery.flot.orderBars.js") ?>
    <?= $this->Html->script("jquery.flot.spline.min.js") ?>
    <?= $this->Html->script("curvedLines.js") ?>
    <!-- DateJS -->
    <?= $this->Html->script("date.js") ?>
    <!-- JQVMap -->
    <?= $this->Html->script("jquery.vmap.js") ?>
    <?= $this->Html->script("jquery.vmap.world.js") ?>
    <?= $this->Html->script("jquery.vmap.sampledata.js") ?>
    <!-- bootstrap-daterangepicker -->
    <?= $this->Html->script("moment.min.js") ?>
    <?= $this->Html->script("daterangepicker.js") ?>
    <!-- bootstrap-wysiwyg -->
    <?= $this->Html->script("bootstrap-wysiwyg.min.js") ?>
    <?= $this->Html->script("jquery.hotkeys.js") ?>
    <?= $this->Html->script("prettify.js") ?>
    <!-- Custom Theme Scripts -->
    <?= $this->Html->script("custom.min.js") ?>
    <!-- jQuery Tags Input -->
    <?= $this->Html->script("jquery.tagsinput.js") ?>
    <!-- Switchery -->
    <?= $this->Html->script("switchery.min.js") ?>
    <!-- Select2 -->
    <?= $this->Html->script("select2.full.min.js") ?>
    <!-- Parsley -->
    <?= $this->Html->script("parsley.min.js") ?>
    <!-- Autosize -->
    <?= $this->Html->script("autosize.min.js") ?>
    <!-- jQuery autocomplete -->
    <?= $this->Html->script("jquery.autocomplete.min.js") ?>
    <!-- starrr -->
    <?= $this->Html->script("starrr.js") ?>
    <!-- cidades -->
    <?= $this->Html->script("ajax.js") ?>
    
  </body>
</html>
