@extends('layouts.merge.site')
@section('titulo', 'Detalhes da Notícia')
@section('content')
    <main>

        <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
            <div class="container">
              <h2 class="mt-5">{{$news->title}}</h2>
          </div>
          </div><!-- End Breadcrumbs -->




        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

              <div class="row">

                <div class="col-lg-8 entries">

                  <article class="entry">

                    <div class="entry-img">
                        <div
                        style='background-image:url("/storage/{{ $news->path }}");background-position:center;background-size:cover;height:700px;border-radius:5px;'>
                    </div>
                    </div>

                    <h2 class="entry-title">
                      <a href="#">{{ $news->title}}</a>
                    </h2>

                    <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$news->typewriter}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ date('d/m/Y', strtotime($news->date)) }}</time></a></li>

                      </ul>
                    </div>

                    <div style="text-align: justify;" class="entry-content">

                        {!!html_entity_decode($news->body)!!}


                    </div>

                  </article><!-- End blog entry -->



                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                  <div class="sidebar">

                    <h3 class="sidebar-title">Outras Notícias</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($lasted as $item)
                      <div class="post-item clearfix">
                        <img src="/storage/{{ $item->path }}" alt="">
                        <h4><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{{ $item->title }}</a></h4>
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
