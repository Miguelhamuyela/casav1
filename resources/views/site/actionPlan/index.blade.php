@extends('layouts.merge.site')
@section('titulo', 'Plano de Acção')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Plano de Acção</h2>
       </div>
    </div><!-- End Breadcrumbs -->


<section id="popular-courses" class="courses">
    <div class="container aos-init aos-animate" data-aos="fade-up">


      <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">



        <!-- End Course Item-->

        <div class="col-lg-12 mt-3">

            <h3>{{$actionPlan->title}}</h3>
            <div style="text-align: justify;" class="">
             {!!html_entity_decode($actionPlan->body)!!}
            </div>

          </div>


          <section id="departments" class="departments">
            <div class="container">



              <div class="row gy-4">
                <div class="col-lg-3">
                  <ul class="nav nav-tabs flex-column" role="tablist">

                    @foreach ($actionPlanRoles as $item)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link show " data-bs-toggle="tab" href="#tab-{{$item->id}}"  role="tab">{{$item->title}}</a>
                      </li>
                    @endforeach



                  </ul>
                </div>
                <div class="col-lg-9">
                  <div class="tab-content">

                    @foreach ($actionPlanRoles as $item)


                    <div class="tab-pane  show" id="tab-{{$item->id}}" role="tabpanel">
                      <div class="row gy-4">
                        <div class="col-lg-12 details order-2 order-lg-1">




                          <h3>{{$item->title}}</h3>
                          <p style="text-align: justify;">
                           {!!html_entity_decode($item->body)!!}
                          </p>
                          <p><a target="_blank" href="/storage/{{$item->doc}}">Baixar Plano de Acção</a></p>

                          </div>

                      </div>
                    </div>



                    @endforeach









                      </div>
                    </div>


                  </div>
                </div>
              </div>

            </div>
          </section>


    </div>
  </section>
  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>
@endsection
