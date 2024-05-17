@extends('layouts.merge.site')
@section('titulo', 'Festivais')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Festivais</h2>
       </div>
    </div><!-- End Breadcrumbs -->


<section id="popular-courses" class="courses">
    <div class="container aos-init aos-animate" data-aos="fade-up">


        <section id="gallery" class="gallery">


            <div class="event-area two text-center pt-60 ">
                    <div class="container">
                        <div class="row">
                            @foreach ($festivals as $item)
                                    <div class="col-lg-6 col-md-12 col-12">

                                        <div class="single-event mb-50 mt-2">
                                            <div class="event-img">
                                                <a href="{!! url('/festival/' . urlencode($item->title)) !!}">
                                                    <img class="img-fluid" src="/storage/{{ $item->image }}" alt="event">
                                                </a>
                                            </div>
                                            <div class="event-content text-start">

                                                <h4><a href="{!! url('/festival/' . urlencode($item->title)) !!}">{!! html_entity_decode(mb_substr($item->title, 0, 30, 'UTF-8')) !!}</a></h4>
                                                <h3>{{ date('d-m-Y', strtotime($item->dateEvent)) }}</h3>
                                                <ul>
                                                    <li><i class="bi bi-clock" aria-hidden="true"></i>{{ $item->startTime }} -{{ $item->endTime }}
                                                    </li>
                                                    <li><i class="bi bi-geo-alt-fill"></i>{{ $item->localization }}</li>
                                                </ul>
                                                <div class="event-content-right">
                                                    <a class="default-btn" href="{!! url('/festival/' . urlencode($item->title)) !!}">Saber Mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                        </div>



              </div>

            </div>
          </section>

        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <h6>{{ $festivals->links() }}</h6>
            </div>
        </div>



      </div>


    </div>
  </section>

  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>
@endsection


