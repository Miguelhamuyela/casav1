<header style="padding:0px;" id="header" class="fixed-top ">
    <div  class=" clearfix">
        <img style="height:30px;" src="/site/assets/img/bandeira_angola.jpeg" width="100%;" alt="Fin Adviser" class="img-fluid topimg">
    </div>

    <div class="top-bar">
            <ul class="list-unstyled text-inline">
                <li>
                    <a href="javascript:trocarIdioma('fr')">
                    <img src="/site/assets/img/flags/fr.png" alt="">
                    </a>
                </li>

                <li>
                    <a href="javascript:trocarIdioma('pt')">
                    <img src="/site/assets/img/flags/pt.png" alt="">
                    </a>
                </li>

                <li>
                    <a href="javascript:trocarIdioma('en')">
                    <img src="/site/assets/img/flags/us.png" alt="">
                    </a>
                </li>

            </ul>
    </div>

    <div class="container d-flex align-items-center">

       <a href="{{route('site.home')}}" class="logo "><img src="/site/assets/img/Logotipo_da_UAN.png" alt="" class="img-fluid"></a>
      <a href="{{route('site.home')}}" class="logo me-auto"><img src="/site/assets/img/Logo_Humanos.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{route('site.home')}}">Home</a></li>
          <li class="dropdown"><a href="#">Sobre FH-UAN <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('site.history')}}">História da FH-UAN</a></li>
              <li><a href="{{route('site.governingBodie')}}">Organograma</a></li>
              <li><a href="{{route('site.actionPlan')}}">Plano de Acção</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">Ensino <i class="bi bi-chevron-down"></i></a>

            <ul>
              <li class="dropdown"><a href="#"><span>Cursos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('site.graduatedCourse')}}">Licenciatura</a></li>
                  <li><a href="{{route('site.MasterCourse')}}">Mestrado</a></li>
                  <li><a href="{{route('site.DoctorateCourse')}}">Doutoramento</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Departamentos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#">Dep.E.Investigativo <i class="bi bi-chevron-right"></i> </a>
                    <ul>
                      <li><a href="{{route('site.departmentOfPortuguese')}}">Dep.L.Literatura Portuguessa</a></li>
                      <li><a href="{{route('site.departmentOfFranch')}}">Dep.L.Literatura Francesa</a></li>
                      <li><a href="{{route('site.departmentOfEnglish')}}">Dep.L.Literatura Inglesa</a></li>
                      <li><a href="{{route('site.departmentOfExecutive')}}">Dep.Secretariado Exe. e Comunicção empresarial</a></li>
                      <li><a href="{{route('site.departmentOfPhilosofy')}}">Dep.Filosofia</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">Dep.Auxiliares  <i class="bi bi-chevron-down"></i> </a>
                  <ul>
                    <li><a href="{{route('site.postgraduateDepartment')}}">Dep.Pós Graduação e Investigação</a></li>
                    <li><a href="{{route('site.DocumentationDepartment')}}">Dep.Documentação e Informação</a></li>
                    <li><a href="{{route('site.AcademicDepartment')}}">Dep.Assuntos Acadêmicos</a></li>
                    <li><a href="{{route('site.LibraryDepartment')}}">Dep.Biblioteca</a></li>
                    <li><a href="{{route('site.HumanResourcesDepartment')}}">Dep.Recursos Humano</a></li>
                    <li><a href="{{route('site.BudgetDepartment')}}">Dep.Administração e Gestão do Orçamento</a></li>
                  </ul>
                  </li>

                </ul>
              </li>

            </ul>

          </li>
          <li class="dropdown"><a href="#">Publicações <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('site.magazine')}}">Revistas</a></li>
            <li><a href="{{route('site.scientificArticle')}}">Artigos Científicos</a></li>
            <li><a href="{{route('site.classes')}}">Aulas</a></li>
            <li><a href="{{route('site.news')}}">Notícias</a></li>
            <li><a href="{{route('site.miscellaneou')}}">Diversos</a></li>
          </ul>
          </li>

          <li class="dropdown"><a href="#">Serviços <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{route('site.requestStatement')}}">Solicitações de Declarações</a></li>
            <li><a href="{{route('site.enrollmentConfirmations')}}">Confirmações de Matrículas</a></li>
            <li><a href="{{route('site.universityExtensionEnrollment')}}">Inscrições de Extensão Universitária</a></li>
            <li><a href="{{route('site.guidelines')}}">Pautas</a></li>
            <li><a href="{{route('site.feePayments')}}">Pagamentos de Propinas</a></li>
          </ul>
        </li>
          <li class="dropdown"><a href="#">Actividades <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('site.symposium')}}">Simpósios</a></li>
              <li><a href="{{route('site.congress')}}">Congressos</a></li>
              <li><a href="{{route('site.festivals')}}">Festivais</a></li>
              <li><a href="{{route('site.fairs')}}">Feiras</a></li>
              <li><a href="{{route('site.gallery')}}">Cultura e Desporto</a></li>
              <li><a href="{{route('site.scienceAndTechnology')}}">Ciência e Tecnologia</a></li>
            </ul>
          </li>


          <li><a href="{{route('site.contact')}}">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header>
