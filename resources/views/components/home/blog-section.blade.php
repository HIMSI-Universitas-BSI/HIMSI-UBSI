<section class="wrapper !bg-[#ffffff] ">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
    <div class="flex flex-wrap mx-[-15px]">
        <div class="lg:w-9/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
        <h2 class="!text-[.75rem] !leading-[1.35] uppercase !text-[#3f78e0]  !text-center">Kegiatan Kami</h2>
        <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-6 !text-center">Berikut adalah kegiatan terbaru HIMSI UBSI yang telah kami selenggarakan.</h3>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="!relative">
        <div class="swiper-container dots-closer blog grid-view !mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">

                    @foreach ($blogs as $b)
                        <div class="swiper-slide">
                            <div class="item-inner">
                                <article>
                                    <div class="card min-h-[620px] max-h-[620px]">
                                        
                                        <figure class="card-img-top overlay overlay-1 hover-scale group"><a href="{{ route('blog.show', ['id' => $b->id]) }}"> 
                                            <img class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105 max-h-[240px]" src="{{ asset('storage/blog/' . $b->banner) }}" alt="image"></a>
                                            <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                                                <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">Selengkapnya</h5>
                                            </figcaption>
                                        </figure>

                                        <div class="card-body flex-[1_1_auto] p-[40px] xl:!p-[1.75rem_1.75rem_1rem_1.75rem] lg:!p-[1.75rem_1.75rem_1rem_1.75rem] md:!p-[1.75rem_1.75rem_1rem_1.75rem] max-md:pb-4  ">
                                            <div class="post-header">
                                                <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                                                    <a href="{{ route('blog.show', ['id' => $b->id]) }}" class="hover" rel="category">{{ $b->branch->name }}</a>
                                                </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 !mt-1 !mb-3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="{{ route('blog.show', ['id' => $b->id]) }}"> {{ \Illuminate\Support\Str::limit($b->title, 50, '...') }}</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="!relative">
                                                <p> {{ \Illuminate\Support\Str::limit(strip_tags($b->content), 100, '...') }} </p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        
                                        <!--/.card-body -->
                                        <div class="card-footer xl:!p-[1.25rem_1.75rem_1.25rem] lg:!p-[1.25rem_1.75rem_1.25rem] md:!p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                                            <ul class="!text-[0.7rem] !text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                                                <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>{{ date('d F, Y', strtotime($b->created_at)) }}</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                <!-- /.card -->
                                </article>
                            <!-- /article -->
                            </div>
                        </div>
                    @endforeach
                </div>
            <!-- /.swiper -->
            </div>
        <!-- /.swiper-container -->
    </div>
    <!-- /.relative -->
    </div>
</section>
    <!-- /section -->