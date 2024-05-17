@extends('layouts.merge.site')
@section('titulo', 'Revistas')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Revistas</h2>
       </div>
    </div><!-- End Breadcrumbs -->


<section id="popular-courses" class="courses">
    <div class="container aos-init aos-animate" data-aos="fade-up">


      <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">


            @foreach ($magazine as $item)
            <div class="col-md-3 col-12 align-items-stretch mt-3" id="magazine-row">
                <div class="course-item">
                    <a target="_blank" href="/storage/{{$item->link}}" class="row " data-aos="" data-aos-delay="100"  >
                        <img id="magazine-img" src="/storage/{{$item->cover}}" class="img-fluid" alt="...">
                    </a>

                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>{{$item->eventDate}}</h4>

                    </div>

                    <h3><a target="_blank" href="/storage/{{$item->link}}">{{$item->title}}</a></h3>

                  </div>
                </div>
              </div>
            @endforeach
        <!-- End Course Item-->


        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <h6>{{ $magazine->links() }}</h6>
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
