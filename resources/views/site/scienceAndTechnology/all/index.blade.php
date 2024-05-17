@extends('layouts.merge.site')
@section('titulo', 'Ciência e Tecnologia')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Ciência e Tecnologia</h2>
    </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">
            @foreach ($scienceAndTechnology as $item)
          <div class="col-md-4 d-flex align-items-stretch">
            <a href="{!! url('/ciencia-e-tecnologia/' . urlencode($item->title)) !!}">
            <div class="card">
              <div class="card-img">
                <img src="/storage/{{$item->path}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{!! url('/ciencia-e-tecnologia/' . urlencode($item->title)) !!}">{{$item->title}}</a></h5>
                <p class="fst-italic text-center">{{$item->date}}, {{$item->typewriter}}</p>
                <p class="card-text">  {!! html_entity_decode(mb_substr($item->body, 0, 120, 'UTF-8'))!!}</p>
              </div>
            </div>
        </a>
          </div>
          @endforeach

        </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-md-3">
            <h6>{{ $scienceAndTechnology->links() }}</h6>
        </div>
    </div>
    </section><!-- End Events Section -->

  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>
@endsection
