@extends('layouts.merge.site')
@section('titulo', 'Detalhes Sobre Ciência e Tecnologia')
@section('content')
    <main>

        <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
            <div class="container">
              <h2 class="mt-5">{{$scienceAndTechnology->title}}</h2>
          </div>
          </div><!-- End Breadcrumbs -->




        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

              <div class="row">

                <div class="col-lg-8 entries">

                  <article class="entry">

                    <div class="entry-img">
                        <div
                        style='background-image:url("/storage/{{ $scienceAndTechnology->image }}");background-position:center;background-size:cover;height:700px;border-radius:5px;'>
                    </div>
                    </div>

                    <h2 class="entry-title">
                      <a href="#">{{ $scienceAndTechnology->title}}</a>
                    </h2>

                    <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$scienceAndTechnology->typewriter}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ date('d/m/Y', strtotime($scienceAndTechnology->date)) }}</time></a></li>

                      </ul>
                    </div>

                    <div class="entry-content">
                      <p>
                        {!!html_entity_decode($scienceAndTechnology->body)!!}
                    </p>

                    </div>

                  </article><!-- End blog entry -->



                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                  <div class="sidebar">

                    <h3 class="sidebar-title">Outros Items de Ciências e Tecnologia</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($lasted as $item)
                      <div class="post-item clearfix">
                        <img src="/storage/{{ $item->path }}" alt="">
                        <h4><a href="{!! url('/ciencia-e-tecnologia/' . urlencode($item->title)) !!}">{{ $item->title }}</a></h4>
                        <time datetime="2020-01-01">{{ date('d-m-Y', strtotime($item->date)) }}</time>
                      </div>
                      @endforeach



                    </div><!-- End sidebar recent posts-->


                  </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

              </div>

            </div>
          </section>


    </main>


    <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
        ...
    </div>
@endsection
