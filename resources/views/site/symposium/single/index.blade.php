@extends('layouts.merge.site')
@section('titulo', 'Detalhes do Simpósio')
@section('content')
    <main>

        <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
            <div class="container">
              <h2 class="mt-5">{{$symposium->title}}</h2>
          </div>
          </div><!-- End Breadcrumbs -->




        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

              <div class="row">

                <div class="col-lg-8 entries">

                  <article class="entry">

                    <div class="entry-img">
                        <div
                        style='background-image:url("/storage/{{ $symposium->image }}");background-position:center;background-size:cover;height:700px;border-radius:5px;'>
                    </div>
                    </div>

                    <h2 class="entry-title">
                      <a href="#">{{ $symposium->title}}</a>
                    </h2>

                    <div class="entry-meta">
                      <ul>



                      </ul>
                    </div>

                    <div style="text-align: justify;" class="entry-content">

                        {!!html_entity_decode($symposium->body)!!}


                    </div>

                  </article><!-- End blog entry -->



                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                  <div class="sidebar">

                    <h3 class="sidebar-title">Outros Simpósio</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($lasted as $item)
                      <div class="post-item clearfix">
                        <img src="/storage/{{ $item->image }}" alt="">
                        <h4><a href="{!! url('/simposio/' . urlencode($item->title)) !!}">{{ $item->title }}</a></h4>

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
