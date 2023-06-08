  <aside class="main-sidebar">

    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image ReadlImage2 img-circle" style="background:#fff;padding:0;margin:0;">
          <!-- <?php echo $fotoPerfil; ?> -->
          <img src="<?php echo _ROUTE_ ?>assets/img/user-3.png" style="background:#fff;" class="img-circle imageImage2">
        </div>
        <div class="pull-left info">
          <p>
            Alexander Pierce
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <style>
          /*.skin-blue .wrapper,.skin-blue .main-sidebar,.skin-blue .left-side {  background-color: #000;} 
.skin-blue .sidebar-menu > li:hover > a,.skin-blue .sidebar-menu > li.active > a,.skin-blue .sidebar-menu > li.menu-open > a {  color: #DDD;  background:#111;}
.skin-blue .sidebar-menu > li > .treeview-menu {  margin: 0 1px;  background: #333;}
.skin-blue .sidebar-menu > li.header {  color: #ddd;  background: #111;}
.skin-blue .sidebar-menu > li.active > a {  border-left-color: #333;}*/

          .skin-blue .wrapper,
          .skin-blue .main-sidebar,
          .skin-blue .left-side {
            background-color: #024;
          }

          .skin-blue .sidebar-menu>li:hover>a,
          .skin-blue .sidebar-menu>li.active>a,
          .skin-blue .sidebar-menu>li.menu-open>a {
            color: #DDD;
            background: #035;
          }

          .skin-blue .sidebar-menu>li>.treeview-menu {
            margin: 0 1px;
            background: #146;
          }

          .skin-blue .sidebar-menu>li.header {
            color: #ddd;
            background: #135;
          }

          .skin-blue .sidebar-menu>li.active>a {
            border-left-color: #359;
          }

          .color-corto {
            color: #0055AA;
          }

          .color-completo {
            color: #FFF;
          }

          .logo {
            background: #FFFFFF11 !important;
          }

          .skin-blue .sidebar a {
            color: #FFF;
          }

          .skin-blue .user-panel>.info,
          .skin-blue .user-panel>.info>a {
            color: #fff;
          }

          .skin-blue .sidebar a:hover {
            text-decoration: none;
          }

          .skin-blue .sidebar-menu .treeview-menu>li.active>a,
          .skin-blue .sidebar-menu .treeview-menu>li>a:hover {
            color: #FFF;
          }

          .skin-blue .sidebar-menu .treeview-menu>li>a {
            color: #CCC;
          }

          .main-footer {
            background: #000;
          }

          .main-footer .string {
            color: #FFF;
          }

          .control-sidebar-dark,
          div.control-sidebar-bg,
          .control-sidebar-tabs li.active a {
            color: #FFF;
            background: #000 !important;
          }

          .control-sidebar-tabs a {
            background: #FFFFFF11 !important;
            color: #ddd !important;
          }

          .tab-pane li a:hover p,
          .tab-pane li a:hover h3,
          .tab-pane li a:hover h4,
          .tab-pane li a:hover label {
            color: #ddd !important;
          }

          .tab-pane li a:hover {
            background: #111 !important;
            color: #FFF !important;
          }

          .tab-content p,
          .tab-content h3,
          .tab-content h4,
          .tab-content label {
            color: #DDD !important;
          }

          .skin-blue .sidebar-menu .treeview-menu2>li>a {
            background: #212121 !important
          }
        </style>

        <!-- ======================================================================================================================= -->



        <li class="header">NAVEGACION PRINCIPAL</li>

        <!-- ======================================================================================================================= -->
        <!--  HOME   -->
        <!-- ======================================================================================================================= -->
        <?php if ($url == "Home") { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
          <a href="<?= _ROUTE_ ?>Home">
            <i class="fa fa-home"></i> <span>Inicio</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
          </li>

          <!-- ======================================================================================================================= -->

          <!-- ======================================================================================================================= -->
          <!--  USUARIOS   -->
          <!-- ======================================================================================================================= -->

          <?php if ($url == "Usuarios") { ?>
            <li class="active ">
            <?php } else { ?>
            <li class="">
            <?php } ?>
            <a href="<?= _ROUTE_ ?>Usuarios">
              <i class="fa fa-cogs"></i> <span>Usuarios</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
            </li>

            <!-- ======================================================================================================================= -->


            <!-- ======================================================================================================================= -->
            <!--  ALUMNOS   -->
            <!-- ======================================================================================================================= -->


            <?php if ($url == "Alumnos") { ?>
              <li class="active">
              <?php } else { ?>
              <li class="">
              <?php } ?>
              <!-- <a href="<?= _ROUTE_ ?>Alumnos"> -->
              <a href="#">
                <i class="fa fa-users"></i> <span>Alumnos</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>

              </li>

              <?php if ($url == "Especialidades") { ?>
                <li class="active">
                <?php } else { ?>
                <li class="">
                <?php } ?>
                <!-- <a href="<?= _ROUTE_ ?>Especialidades"> -->
                <a href="#">
                  <i class="fa fa-users"></i> <span>Especialidades</span>
                  <span class="pull-right-container">
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                  </span>
                </a>
                </li>

                <?php if ($url == "Profesores") { ?>
                  <li class="active">
                  <?php } else { ?>
                  <li class="">
                  <?php } ?>
                  <!-- <a href="<?= _ROUTE_ ?>Profesores"> -->
                  <a href="#">
                    <i class="fa fa-users"></i> <span>Profesores</span>
                    <span class="pull-right-container">
                      <!-- <i class="fa fa-angle-left pull-right"></i> -->
                    </span>
                  </a>
                  </li>

                  <?php if ($url == "Proyectos") { ?>
                    <li class="active">
                    <?php } else { ?>
                    <li class="">
                    <?php } ?>
                    <!-- <a href="<?= _ROUTE_ ?>Proyectos"> -->
                    <a href="#">
                      <i class="fa fa-users"></i> <span>Proyectos</span>
                      <span class="pull-right-container">
                        <!-- <i class="fa fa-angle-left pull-right"></i> -->
                      </span>
                    </a>
                    </li>



                    <?php //} 
                    ?>
                    <!-- ======================================================================================================================= -->




                    <!-- ======================================================================================================================= -->
                    <!--  CONFIG SC   -->
                    <!-- ======================================================================================================================= -->


                    <?php if ($url == "Cohortes" || $url == "Periodos" || $url == "Secciones" || $url == "Saberes") { ?>
                      <li class="active treeview">
                      <?php } else { ?>
                      <li class="treeview">
                      <?php } ?>
                      <a href="#">
                        <i class="fa fa-rocket"></i> <span>Config. SC</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">

                        <?php //if($amCategoriasR==1){ 
                        ?>


                        <?php if ($url == "Cohortes") { ?>
                          <li class="active">
                          <?php } else { ?>
                          <li class="">
                          <?php } ?>
                          <!-- <a href="<?= _ROUTE_ ?>Cohortes"> -->
                          <a href="#">
                            <i class="fa fa-fighter-jet"></i> <span>Cohortes</span>
                          </a>
                          </li>

                          <?php //} 
                          ?>
                          <?php //if($amCategoriasC==1){ 
                          ?>


                          <?php if ($url == "Periodos") { ?>
                            <li class="active">
                            <?php } else { ?>
                            <li>
                            <?php } ?>
                            <!-- <a href="<?= _ROUTE_ ?>Periodos"> -->
                            <a href="#">
                              <i class="fa fa-fighter-jet"></i> <span>Periodos</span>
                            </a>
                            </li>

                            <?php if ($url == "Secciones") { ?>
                              <li class="active">
                              <?php } else { ?>
                              <li class="">
                              <?php } ?>
                              <!-- <a href="<?= _ROUTE_ ?>Secciones"> -->
                              <a href="#">
                                <i class="fa fa-fighter-jet"></i> <span>Secciones</span>
                              </a>
                              </li>

                              <?php if ($url == "Saberes") { ?>
                                <li class="active">
                                <?php } else { ?>
                                <li class="">
                                <?php } ?>
                                <!-- <a href="<?= _ROUTE_ ?>Saberes"> -->
                                <a href="#">
                                  <i class="fa fa-fighter-jet"></i> <span>Saberes</span>
                                </a>
                                </li>


                                <?php //} 
                                ?>
                      </ul>
                      </li>
                      <?php //} 
                      ?>


      </ul>
    </section>
  </aside>