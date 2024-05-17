@extends('layouts.merge.site')
@section('titulo', 'História')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">História da FH-UAN</h2>
       </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">


            <div class="col-md-5 col-12" data-aos="fade-left" data-aos-delay="100">
                <img src="/storage/{{$history->image}}" class="img-fluid rounded" alt="">

            </div>

            <div class="col-md-7">
                <div>
                    <h3 style="color: #081c4c;">{{$history->title}}</h3>
                    <div style="text-align: justify;">
                        {!! html_entity_decode($history->Dean_body)!!}
                    </div>
                </div>
            </div>

            @isset($history->body)
            <div class="col-lg-12 mt-5">
                <div style="text-align: justify;">{!! html_entity_decode($history->body) !!}</div>
            </div>
            @endisset
         </div>


      </div>
    </section><!-- End Events Section -->

  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>
@endsection
