@extends('layouts.merge.site')
@section('titulo', 'Órgãos Directivos')
@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Organograma</h2>
       </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container aos-init aos-animate" data-aos="fade-up">



        <div class="container">
            <div class="row justify-content-center">


                @foreach ($governieBodie as $item)
                    @if ($item->function == 'Decano')



                        <div class="col-md-4 shadow-lg border-dark mt-1 rounded" >

                            @if (isset($item->image))
                            <div
                                style='background-image:url("/storage/{{ $item->image }}");background-position:center;background-size:cover;height:300px;border-radius:5px;'>
                            </div>

                            @else
                            <div
                                style='background-image:url("/site/img/user.png");background-position:center;background-size:cover;height:300px;border-radius:5px;'>
                            </div>

                            @endif

                            <div class="p-4">

                                <h4>{{  $item->name  }}</h4>
                                <h5>{{ $item->function }}</h5>

                            </div>
                        </div>

                    @endif
                @endforeach

            </div>

        </div>

        <div class="container">
            <div class="row justify-content-center">


                @foreach ($governieBodie as $item)
                    @if ($item->function == 'Vice-Decano P/A Academicos' || $item->function == 'Vice-Decano P/A Científicos')



                        <div class="col-md-4 shadow-lg border-dark mt-1 rounded" >

                            @if (isset($item->image))
                            <div
                                style='background-image:url("/storage/{{ $item->image }}");background-position:center;background-size:cover;height:300px;border-radius:5px;'>
                            </div>

                            @else
                            <div
                                style='background-image:url("/site/img/user.png");background-position:center;background-size:cover;height:300px;border-radius:5px;'>
                            </div>

                            @endif

                            <div class="p-4">

                                <h4>{{  $item->name  }}</h4>
                                <h5>{{ $item->function }}</h5>

                            </div>
                        </div>

                    @endif
                @endforeach

            </div>

        </div>

        <div class="container">
            <div class="row justify-content-center">


                @foreach ($governieBodie as $item)
                    @if ($item->function == 'Chefe DEI LLA' || $item->function == 'Chefe DEI LLLP'
                    || $item->function == 'Chefe DEI LLLI' || $item->function == 'Chefe DEI LLLF'
                     || $item->function == 'Chefe DEI Sec.Executivo'  || $item->function == 'Chefe DEI Filosofia')



                        <div class="col-md-4 shadow-lg border-dark mt-1 rounded" >

                            @if (isset($item->image))
                            <div
                                style='background-image:url("/storage/{{ $item->image }}");background-position:center;background-size:cover;height:300px;border-radius:5px;'>
                            </div>

                            @else
                            <div
                                style='background-image:url("/site/img/user.png");background-position:center;background-size:cover;height:300px;border-radius:5px;'>
                            </div>

                            @endif

                            <div class="p-4">

                                <h4>{{  $item->name  }}</h4>
                                <h5>{{ $item->function }}</h5>

                            </div>
                        </div>

                    @endif
                @endforeach

            </div>

        </div>



      </div>
    </section><!-- End Events Section -->

  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>


@endsection
