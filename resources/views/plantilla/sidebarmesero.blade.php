<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon-speedometer"></i> {{ trans('global.sidebar.Menu') }}</a>
                    </li>
                    <li class="nav-title">
                        Mantenimiento
                    </li>
                    <!--ADMINISTRAR CONSULTAS-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-database"></i>{{ trans('global.sidebar.MenuFour.title') }}</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=13" class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-th"></i> 
                                    {{ trans('global.sidebar.MenuOne.submenuSix') }} 
                                </a>
                            </li>
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-th"></i> 
                                    {{ trans('global.sidebar.MenuOne.submenuFive') }} 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--GESTIONAR PEDIDOS-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i>{{ trans('global.sidebar.MenuSeven.title') }}</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=14" class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-tag"></i> 
                                    {{ trans('global.sidebar.MenuOne.submenuSeven') }} 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li @click="menu=11" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-book-open"></i>{{ trans('global.sidebar.MenuFive') }}<span class="badge badge-danger">PDF</span></a>
                    </li>
                    <li @click="menu=12" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-info"></i>{{ trans('global.sidebar.MenuSix') }}<span class="badge badge-info">IT</span></a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>