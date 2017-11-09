    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">


                        <img alt="image" class="img-circle" src="{!! asset('img/avatar1.jpg') !!}">


                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">Lucas</strong>
                                </span> <span class="text-muted text-xs block">Mello Leão <b class="caret"></b></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                       Hertz
                    </div>
                </li>

                <li class="active">
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Cadastros</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="active">  <a href="{{ url('painel/parceiro') }}">Parceiro</a></li>
                                <li class="active">  <a href="{{ url('painel/conta') }}">Contas Vinculadas</a></li>
                                <li class="active">  <a href="{{ url('painel/despesareceita') }}">Despesas/Receitas</a></li>
                                <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                                
                            </ul>
                 </li>

                        <li>
                                <li class="active">  <a href="{{ url('painel/lancamento') }}" > <i class="fa fa-th-large"></i>Lançamentos</a></li>
                        </li>

                

                


            </ul>


        </div>
    </nav>
