<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon-speedometer"></i> {{ trans('global.sidebar.Menu') }}</a>
                    </li>
                    <li class="nav-title">
                        Mantenimiento
                    </li>
                    <!--ADMINISTRAR DATOS-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-database"></i>{{ trans('global.sidebar.MenuOne.title') }}</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=7" class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-users"></i>
                                   {{ trans('global.sidebar.MenuOne.submenuOne') }} 
                                </a>
                            </li>
                            <li @click="menu=8" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i>
                                    {{ trans('global.sidebar.MenuOne.submenuTwo') }} 
                                </a>
                            </li>
                            <li @click="menu=1" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i>
                                    {{ trans('global.sidebar.MenuOne.submenuThree') }} 
                                </a>
                            </li>
                            <li @click="menu=2" class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-cube"></i>
                                    {{ trans('global.sidebar.MenuOne.submenuFour') }} 
                                </a>
                            </li>
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> 
                                    {{ trans('global.sidebar.MenuOne.submenuFive') }} 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--ALMACEN-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-archive"></i>{{ trans('global.sidebar.MenuTwo.title') }}</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=3" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-wallet"></i>
                                    {{ trans('global.sidebar.MenuTwo.submenuOne') }}
                                </a>
                            </li>
                            <li @click="menu=4" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> 
                                    {{ trans('global.sidebar.MenuTwo.submenuTwo') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--VENTAS-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i>{{ trans('global.sidebar.MenuThree.title') }}</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-basket-loaded"></i>
                                    {{ trans('global.sidebar.MenuThree.submenuOne') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--CONSULTAS-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i>{{ trans('global.sidebar.MenuFour.title') }}</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=9" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i>
                                    {{ trans('global.sidebar.MenuFour.submenuOne') }}
                                </a>
                            </li>
                            <li @click="menu=10" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i>
                                    {{ trans('global.sidebar.MenuFour.submenuTwo') }}
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