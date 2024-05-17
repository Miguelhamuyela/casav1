@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')
<main id="main">

     <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="lis2tbox">


            @foreach ($slideshows as $item)
            <div class="carousel-item active" style="background-image: url(/storage/{{$item->path}})">
                <div class="carousel-container">
                  <div class="container">
                    <h2 class="animate__animated animate__fadeInDown">{{$item->title}}</h2>
                    @isset($item->button)
                    <a href="{{$item->link}}" class="btn-get-started">{{$item->button}}</a>
                    @endisset
                    </div>
                </div>
              </div>
            @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="/site/assets/img/hero5.jpg" class="img-fluid rounded" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 class="mb-4">Bem vindos à Faculdade de Humanidades da Universidade Agostinho Neto!</h3>
            <div class="fst-italic">

                <p style="text-align: justify;font-size: large;">
                    A Faculdade de Humanidades da Universidade Agostinho Neto,
                     adiante designada por (FHUAN), é, nos termos da lei, uma pessoa
                     colectiva de direito público, com estatuto de unidade orgânica,
                     dotada de autonomia científica, pedagógica, administrativa,
                     financeira e disciplinar, destinada à formação de quadros
                     superiores na área das humanidades.
                </p>


                <p style="text-align: justify;font-size: large;">
                    A FHUAN desenvolve as suas actividades em todo o território nacional,
                     na Região Académica nº 1, em que está inserida a UAN, sem prejuízo da
                      mobilidade do corpo docente e discente, da universalidade, dos objectos
                       de estudo e de investigação científica.
                </p>

            </div>



          </div>
        </div>

      </div>
    </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
          <div class="container">

            <div class="row counters">

              <div class="col-lg-4 col-6 text-center">
                @isset($graduation)
                <span data-purecounter-start="0" data-purecounter-end="{{$graduation->totalGraduated}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Licenciados</p>
                @endisset
              </div>

              <div class="col-lg-4 col-6 text-center">
                @isset($master)
                <span data-purecounter-start="0" data-purecounter-end="{{$master->totalMaster}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Mestres</p>
                @endisset

              </div>

              <div class="col-lg-4 col-6 text-center">
                @isset($doctorated)
                <span data-purecounter-start="0" data-purecounter-end="{{$doctorated->totalDoctorate}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Doutorados</p>
                @endisset

              </div>



            </div>

          </div>
        </section><!-- End Counts Section -->



      <!-- ======= Popular Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

          <div class="section-title">

            <p class="text-center">Oferta Formativa</p>
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <a style="cursor:pointer;" href="{{route('site.graduatedCourse')}}">
              <div class="course-item">
                <img src="/site/assets/img/Licenciatura-resize.jpg" class="img-fluid" alt="...">
                <div class="course-content">

                  <h3><a style="cursor:pointer;" href="{{route('site.graduatedCourse')}}">Licenciaturas</a></h3>
                  <p style="text-align: justify;">A Faculdade de Humanidades da universidade Agostinho possui uma oferta curricular de seis (6) cursos de Licenciatura.</p>

                </div>
              </div>
            </a>
            </div>

            <!-- End Course Item-->


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <a style="cursor:pointer;" href="{{route('site.MasterCourse')}}">
              <div class="course-item">
                <img src="/site/assets/img/duas-pessoas-pensativas-trabalhando-com-laptop-na-biblioteca-publica.jpg" class="img-fluid" alt="...">
                <div class="course-content">

                  <h3><a style="cursor:pointer;" href="{{route('site.MasterCourse')}}">Mestrados</a></h3>
                  <p style="text-align: justify;">
                    Para os Mestrados em Humanidades são oferecidos nove (9) cursos.
                    Preparamos os nossos estudantes para se distinguirem pelas suas
                    competências técnicas e científicas, tornando-os mais competitivos
                    no mercado de trabalho.
                  </p>

                </div>
              </div>
            </a>
            </div>

            <!-- End Course Item-->


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <a style="cursor:pointer;" href="{{route('site.DoctorateCourse')}}">
              <div class="course-item">
                <img src="/site/assets/img/retrato-de-uma-bela-mulher-de-negocios-africana-no-trabalho.jpg" class="img-fluid" alt="...">
                <div class="course-content">

                  <h3><a style="cursor:pointer;" href="{{route('site.DoctorateCourse')}}">Doutoramentos</a></h3>
                  <p style="text-align: justify;">
                    A Faculdade de Humanidades oferece cursos de Doutoramento destinados a quem
                    pretende desenvolver competências específicas em várias áreas do conhecimento e a
                    quem pretende seguir uma carreira académica, ao nível do ensino ou da investigação.
                  </p>

                </div>
              </div>
            </a>
            </div> <!-- End Course Item-->
          </div>

        </div>
      </section><!-- End Popular Courses Section -->


      <section id="events" class="events">
        <div class="container aos-init aos-animate" data-aos="fade-up">

          <div class="section-title">

            <p class="text-center">Últimos Acontecimentos na FH-UAN</p>
          </div>

          <div class="row">
            @isset($news)
            @foreach ($news as $item)
            <div class="col-md-4 d-flex align-items-stretch">
                <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                <div class="card"><div class="card-img">
                   <img src="/storage/{{$item->path}}" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{{$item->title}}</a>
                    </h5>
                    <p class="fst-italic text-center">
                      {{$item->date}}, {{$item->typewriter}}</p>
                      <p style="text-align:justify;" class="card-text">

                        {!! html_entity_decode(mb_substr($item->body, 0, 120, 'UTF-8'))!!}...
                    </p>
                  </div>
                </div>
            </a>
              </div>


              @endforeach
              @endisset





            </div>

          </div>
        </section>

        <div class="viral-story-blog-post shadow-lg bg-white rounded">
        <div class="container">

          <div class="row">
              <div class="col-12 text-center mt-5">
                  <h5>Parceiros</h5>

              </div>

              <section id="clients" class="clients">
                <div class="container" data-aos="zoom-in">

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($partners as $item)
                                <div class="swiper-slide">
                                    <a target="_blank" href="{{ $item->link }}">
                                        <img src="/storage/{{ $item->image }}" alt="{{ $item->name }}">
                                    </a>

                                </div>
                            @endforeach


                        </div>

                    </div>

                </div>
            </section>

          </div>
      </div>
    </div>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>


@endsection
