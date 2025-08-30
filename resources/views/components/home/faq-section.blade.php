<section class="wrapper !bg-[#EEEEEE]">
    <div class="container py-[4.5rem] md:py-5">
    <div class="flex flex-wrap mx-[-15px]">
        <div class="lg:w-11/12 xl:w-11/12 xxl:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
            <h2 class="!text-[.75rem] uppercase !text-[#aab0bc] !tracking-[0.02rem] !leading-[1.35] !mb-3">FAQ</h2>
            <h3 class="lead !text-[1.05rem] !leading-[1.55] !font-semibold !mb-12">{{ $faqTitle }}</h3>
        </div>
        <!--/column -->
    </div>
    <!--/.row -->
    <div class="flex flex-wrap mx-[-15px]">
        <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
        <div id="accordion-3" class="accordion-wrapper">
            
            @foreach ($faqs as $f)
                @php
                    $collapseId = 'accordion-collapse-' . $loop->index;
                    $headingId = 'accordion-heading-' . $loop->index;
                @endphp

                <div class="card accordion-item !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)] !mb-5">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 bg-inherit" id="{{ $headingId }}">
                        <button class="before:!text-[#3f78e0] hover:!text-[#3f78e0] collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#{{ $collapseId }}"
                            aria-expanded="false"
                            aria-controls="{{ $collapseId }}">
                            {{ $f->question }}
                        </button>
                    </div>
                    <!-- /.card-header -->

                    <div id="{{ $collapseId }}" 
                        class="collapse" 
                        aria-labelledby="{{ $headingId }}" 
                        data-bs-parent="#accordion-3">
                        <div class="card-body flex-[1_1_auto] p-[0_1.25rem_.25rem_2.35rem]">
                            <p>{{ $f->answer }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                </div>
                <!-- /.card -->
            @endforeach

        <!-- /.accordion-wrapper -->
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>