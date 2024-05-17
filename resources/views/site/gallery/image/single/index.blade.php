@extends('layouts.merge.site')
@section('titulo', ' Cultura e Desporto')
@section('content')

    <main>

        <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
            <div class="container">
              <h2 class="mt-5">{{ $titleGallery->name }}</h2>
             </div>
          </div><!-- End Breadcrumbs -->



          <section id="popular-courses" class="courses">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="row">
                    @foreach ($gallery->images as $item)
                        <div style="" class="col-lg-4 col-md-6 px-1 my-1">
                            <a style=""  data-fancybox="gallery" data-src="/storage/{{ $item->path }}">

                                <div
                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:300px;'>
                                </div>

                            </a>
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
@section('CSSJS')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
