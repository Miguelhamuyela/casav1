@extends('layouts.merge.site')
@section('titulo', 'Simpósio')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Simpósios</h2>
       </div>
    </div><!-- End Breadcrumbs -->


    <section id="events" class="events">
        <div class="container aos-init aos-animate" data-aos="fade-up">

          <div class="row">
            @foreach ($symposium as $item)
            <div class="col-md-4 mt-5 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <a href="{!! url('/simposio/' . urlencode($item->title)) !!}">
                        <img src="/storage/{{$item->image}}" alt="...">
                    </a>

                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                        <a href="{!! url('/simposio/' . urlencode($item->title)) !!}">{{$item->title}}</a>
                    </h5>
                    <div style="text-align: justify;">
                        <p class="card-text">
                            {!!html_entity_decode(mb_substr($item->body, 0, 320, 'UTF-8'))!!}...
                        </p>
                        <a style="background:#081c4c;color:white; " target="_blank" href="/storage/{{$item->link}}" class="btn btn-outline">Baixar Programa</a>
                    </div>

                  </div>
                </div>
              </div>
            @endforeach


          </div>

        </div>
      </section>

  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>
@endsection
