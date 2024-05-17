@extends('layouts.merge.site')
@section('titulo', 'Licenciaturas')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Licenciaturas</h2>
       </div>
    </div><!-- End Breadcrumbs -->


<section id="popular-courses" class="courses">
    <div class="container aos-init aos-animate" data-aos="fade-up">


      <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">




                <div class="container aos-init aos-animate" data-aos="fade-up">

                  <div class="row">
                    <div class="col-lg-5 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                      <img src="/storage/{{$graduatedCourse->image}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 ">
                      <p style="text-align: justify;" >
                        <h3>{{$graduatedCourse->title}}</h3>

                      </p>

                      <div style="text-align: justify;" >
                        {!!html_entity_decode($graduatedCourse->body)!!}
                      </div>


                    </div>
                  </div>

                </div>

        <!-- End Course Item-->


            <div class="col-lg-12 mt-3">
                <div style="text-align: justify;" >

                 {!!html_entity_decode($graduatedCourse->body_Text)!!}
                </div>


              </div>



        <div class="pt-5 pt-lg-0 order-2 order-lg-1 content">
            <h3 style="margin-top: 100px;" class="text-center mt-5">Plano Curricular</h3>


            <div class="row">
                @foreach ($graduatedCourse->CurricularPlan as $item)
                <div class="col-lg-3 col-md-3 col-12 mt-5">
                    <a target="_blank" href="/storage/{{$item->doc}}">{{$item->title}}</a>
                </div>
                @endforeach
            </div>







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
