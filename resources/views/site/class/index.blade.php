@extends('layouts.merge.site')
@section('titulo', 'Aulas')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Aulas</h2>
       </div>
    </div><!-- End Breadcrumbs -->


<section id="popular-courses" class="courses">
    <div class="container aos-init aos-animate" data-aos="fade-up">


        <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">


            @foreach ($class as $item)

            <div class="col-md-3 col-12  align-items-stretch mt-3">
                <a target="_blank" href="/storage/{{$item->link}}">
                <div class="course-item">


                    <div class="row">
                        <img src="/storage/{{$item->cover}}" class="img-fluid" alt="...">

                    </div>
                 <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>{{$item->eventDate}}</h4>

                    </div>

                    <h3><a target="_target"  href="/storage/{{$item->link}}">{{$item->title}}</a></h3>

                  </div>
                </div>
            </a>
              </div>

            @endforeach
        <!-- End Course Item-->


        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <h6>{{ $class->links() }}</h6>
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


