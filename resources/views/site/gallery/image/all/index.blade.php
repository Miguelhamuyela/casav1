@extends('layouts.merge.site')
@section('titulo', ' Cultura e Desporto')
@section('content')

    <main>
         <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
        <div class="container">
          <h2 class="mt-5">Cultura e Desporto</h2>
         </div>
      </div><!-- End Breadcrumbs -->


      <section id="popular-courses" class="courses">
        <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="row">
                    @foreach ($galleries as $item)
                        <div class="col-lg-4 col-md-6 px-1 my-1">
                            <a href="{!! url('/galeria/' . urlencode($item->name)) !!}">
                                <div
                                    style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;height:250px;z-index:10000;'>
                                </div>
                                <h5 class="py-2"> {{ $item->name }}</h5>
                            </a>

                        </div>
                    @endforeach

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4  ">
                        <h6>{{ $galleries->links() }}</h6>
                    </div>
                </div>

            </div>
        </section>


    </main>
    <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
        ...
    </div>
@endsection
