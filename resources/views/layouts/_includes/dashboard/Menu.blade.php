<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fe fe-user fe-16"></span>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>

    @if (null !== Auth::user())
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100  d-flex">
                    <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ route('admin.home') }}">
                        <img src="/site/assets/img/Logo_Humanos.png" class="img-fluid" height="125" style="width:50%; margin:auto" />

                    </a>
                </div>

                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Painel</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.home') }}">
                                <i class="fe fe-home fe-16"></i>
                                <span class="ml-3 item-text">Painel</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                                <i class="fe fe-globe fe-16"></i>
                                <span class="ml-3 item-text">Site</span>
                            </a>
                        </li>
                    </ul>


                    @if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)

                     {{-- Menu de slideshow --}}
                     <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Slideshow </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#slideshow" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-layers"></i>
                            <span class="ml-3 item-text"> Slideshows</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="slideshow">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Slideshow </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.index') }}">
                                    <span class="ml-1 item-text">Listar Slideshows </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                     {{-- Menu de Estatisticas --}}
                     <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Estatisticas de Estudantes Formados</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.graduation.show') }}">

                                <i class="fe fe-book-open"></i>
                                <span class="ml-3 item-text">Licenciados</span>
                            </a>
                        </li>


                    </ul>

                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.master.show') }}">

                                <i class="fe fe-book-open"></i>
                                <span class="ml-3 item-text">Mestres</span>
                            </a>
                        </li>


                    </ul>

                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.doctorate.show') }}">

                                <i class="fe fe-book-open"></i>
                                <span class="ml-3 item-text">Doutorados</span>
                            </a>
                        </li>


                    </ul>

                     {{-- Menu de Parceiros --}}
                     <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Parceiros </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#parceiro" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-instagram"></i>
                            <span class="ml-3 item-text"> Parceiros</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="parceiro">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.partner.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Parceiros </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.partner.index') }}">
                                    <span class="ml-1 item-text">Listar Parceiros </span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{-- Menu Sobre --}}
                        <p class="text-muted nav-heading mt-2 mb-1">
                            <span> Sobre a FH-UAN </span>
                        </p>
                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.history.show') }}">

                                    <i class="fe fe-book"></i>
                                    <span class="ml-3 item-text">História</span>
                                </a>
                            </li>


                        </ul>

                        <li class="nav-item dropdown">
                            <a href="#actionPlan" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-activity"></i>
                                    <span class="ml-3 item-text">Plano de Acção</span></a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="actionPlan">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.actionPlan.show') }}">
                                        <span class="ml-1 item-text">Cadastrar Plano de Acção</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.actionPlanRoles.index') }}">
                                        <span class="ml-1 item-text">Listar Planos de Acção</span>
                                    </a>
                                </li>

                            </ul>

                        </li>



                        <li class="nav-item dropdown">
                            <a href="#governingBodie" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-users"></i>
                                <span class="ml-1 item-text">Órgãos Directivos</span>
                            </a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="governingBodie">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.governingBodie.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Órgão Directivo</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.governingBodie.index') }}">
                                        <span class="ml-1 item-text">Listar Órgão Directivo</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                         {{-- Menu de Cursos --}}
                         <p class="text-muted nav-heading mt-2 mb-1">
                            <span> Cursos </span>
                        </p>
                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.graduatedCourse.show') }}">

                                    <i class="fe fe-book-open"></i>
                                    <span class="ml-3 item-text">Licenciaturas</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.MasterCourse.show') }}">

                                    <i class="fe fe-book-open"></i>
                                    <span class="ml-3 item-text">Mestrados</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.DoctorateCourse.show') }}">

                                    <i class="fe fe-book-open"></i>
                                    <span class="ml-3 item-text">Doutoramentos</span>
                                </a>
                            </li>


                        </ul>




                        {{-- Menu de Departamentos --}}
                        <p class="text-muted nav-heading mt-2 mb-1">
                            <span> Departamentos </span>
                        </p>
                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.departmentOfPortuguese.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Departamento de L.Literatura Portuguesa</span>
                                </a>
                            </li>


                        </ul>

                              <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.departmentOfEnglish.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Departamento de L.Literatura Inglesa</span>
                                </a>
                            </li>


                        </ul>


                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.departmentOfFranch.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Departamento de L.Literatura Francesa</span>
                                </a>
                            </li>


                        </ul>


                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.departmentOfPhilosofy.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Departamento de Filosofia</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.departmentOfExecutive.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Departamento do Secretariado Executivo e Comunicação Empresarial</span>
                                </a>
                            </li>


                        </ul>



                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.BudgetDepartment.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Dep.Administração e Gestão do Orçamento</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.HumanResourcesDepartment.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Dep.Recursos Humano</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.LibraryDepartment.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Dep.Biblioteca</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.AcademicDepartment.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Dep.Assuntos Acadêmicos</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.DocumentationDepartment.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Dep.Documentação e Informação</span>
                                </a>
                            </li>


                        </ul>

                        <ul class="navbar-nav flex-fill w-100 mb-2">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{ route('admin.postgraduateDepartment.show') }}">

                                    <i class=""></i>
                                    <span class="ml-3 item-text">Dep.Pós Graduação e Investigação</span>
                                </a>
                            </li>


                        </ul>


                        {{-- Menu de Publicações --}}
                        <p class="text-muted nav-heading mt-2 mb-1">
                            <span> Publicações </span>
                        </p>
                        <li class="nav-item dropdown">
                            <a href="#magazine" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-book"></i>
                                <span class="ml-3 item-text"> Revistas</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="magazine">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.magazine.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Revistas </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.magazine.index') }}">
                                        <span class="ml-1 item-text">Listar Revistas </span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="#scientificArticle" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-book"></i>
                                <span class="ml-3 item-text"> Artigos Cientificos</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="scientificArticle">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.scientificArticle.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Artigos  </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.scientificArticle.index') }}">
                                        <span class="ml-1 item-text">Listar Artigos  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="#classes" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-book-open"></i>
                                <span class="ml-3 item-text"> Aulas</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="classes">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.classes.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Aulas  </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.classes.index') }}">
                                        <span class="ml-1 item-text">Listar Aulas  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#miscellaneous" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-rss fe-16"></i>
                                <span class="ml-3 item-text"> Diversos</span>
                            </a>


                            <ul class="collapse list-unstyled pl-4 w-100" id="miscellaneous">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.miscellaneous.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Diversos  </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.miscellaneous.index') }}">
                                        <span class="ml-1 item-text">Listar Diversos  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                          {{-- Menu de Notícias --}}

                          <li class="nav-item dropdown">
                            <a href="#news" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-rss fe-16"></i>
                                <span class="ml-3 item-text"> Notícias </span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="news">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Notícia</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
                                        <span class="ml-1 item-text">Listar Notícias</span>
                                    </a>
                                </li>
                            </ul>
                        </li>






                        <p class="text-muted nav-heading mt-2 mb-1">
                            <span> Actividades </span>
                        </p>
                        <li class="nav-item dropdown">
                            <a href="#symposium" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-layers"></i>
                                    <span class="ml-3 item-text">Simpósio</span></a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="symposium">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.symposium.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Simpósio</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.symposium.index') }}">
                                        <span class="ml-1 item-text">Listar Simpósios</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a href="#congress" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-layers"></i>
                                    <span class="ml-3 item-text">Congresso</span></a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="congress">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.congress.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Congresso</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.congress.index') }}">
                                        <span class="ml-1 item-text">Listar Congressos</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a href="#festivals" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-layers"></i>
                                    <span class="ml-3 item-text">Festivais</span></a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="festivals">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.festivals.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Festival</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.festivals.index') }}">
                                        <span class="ml-1 item-text">Listar Festivais</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a href="#fairs" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-layers"></i>
                                    <span class="ml-3 item-text">Feiras</span></a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="fairs">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.fairs.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Feira</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.fairs.index') }}">
                                        <span class="ml-1 item-text">Listar Feiras</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a href="#gallery" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-instagram"></i>
                                <span class="ml-3 item-text"> Cultura e Desporto</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="gallery">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.gallery.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Galerias </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.gallery.index') }}">
                                        <span class="ml-1 item-text">Listar Galerias </span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item dropdown">
                            <a href="#scienceAndTechnology" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle  nav-link">
                                <i class="fe fe-layers"></i>
                                    <span class="ml-3 item-text">Ciência e Tecnologia</span></a>

                            <ul class="collapse list-unstyled pl-4 w-100" id="scienceAndTechnology">

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.scienceAndTechnology.create') }}">
                                        <span class="ml-1 item-text">Cadastrar Ciência e Tecnologia</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pl-3"
                                        href="{{ route('admin.scienceAndTechnology.index') }}">
                                        <span class="ml-1 item-text">Listar Ciência e Tecnologia</span>
                                    </a>
                                </li>

                            </ul>

                        </li>










                    @endif

                    @if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                    {{-- Menu de Configurações --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Configurações</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.configuration.show') }}">

                                <i class="fe fe-settings fe-16"></i>
                                <span class="ml-3 item-text">Configurações</span>
                            </a>
                        </li>
                    </ul>
                @endif



                    @if ('Administrador' == Auth::user()->level)
                        {{-- Menu de Utilizadores --}}
                        <p class="text-muted nav-heading mt-2 mb-1">
                            <span> Utilizadores</span>
                        </p>
                        <li class="nav-item dropdown">
                            <a href="#user" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle nav-link">
                                <i class="fe fe-user-plus fe-16"></i>
                                <span class="ml-3 item-text"> Utilizadores</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="user">

                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('register') }}">
                                        <span class="ml-1 item-text">Cadastrar Utilizador</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                                        <span class="ml-1 item-text">Listar Utilizadores</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif




                </ul>

            </nav>
        </aside>

    @endif

</nav>
