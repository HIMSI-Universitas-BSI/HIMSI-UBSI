<section id="dpc" class="wrapper !bg-[#ffffff] ">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
    <div class="flex flex-wrap mx-[-15px]">
        <div class="lg:w-9/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
        <h2 class="!text-[.75rem] uppercase !text-[#aab0bc] !mb-3 !tracking-[0.02rem] !leading-[1.35]">Dewan Pimpinan Cabang (DPC)</h2>
        <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-10">DPC HIMSI yang tersebar di berbagai wilayah, sebagai wadah <span class="!relative z-[2] after:content-[''] after:absolute after:z-[-1] after:block after:bg-no-repeat after:bg-bottom after:bottom-[-0.1em] after:w-[110%] after:h-[0.3em] after:-translate-x-2/4 after:left-2/4  style-2 yellow">pengembangan</span> mahasiswa Sistem Informasi.</h3>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="swiper-container grid-view !mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
        <div class="swiper-wrapper">
            
            @foreach ( $branches as $b )
                <div class="swiper-slide group">
                    <figure class="!rounded-[.4rem] !mb-6">
                        <img 
                            class="!rounded-[.4rem] h-[400px] w-[200px] object-cover" 
                            src="{{ asset('storage/himsi/' . $b->poster) }}" 
                            alt="image">
                            @foreach ($b->blogs as $blog)
                                @foreach ($blog->image as $img)
                                    @if (!empty($img))
                                        <a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)] hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]" 
                                            href="{{ asset('storage/blog/' . $img) }}" 
                                            data-glightbox 
                                            data-gallery="projects-group-{{ $b->id }}">
                                            <i class="uil uil-focus-add before:content-['\eb22']"></i>
                                        </a>
                                    @endif
                                @endforeach
                            @endforeach
                    </figure>
                    <div class="project-details flex justify-center flex-col">
                        <div class="post-header">
                        <h2 class="post-title h3"><a href="/" class="!text-[#343f52] hover:!text-[#3f78e0]">{{ $b->name }}</a></h2>
                        <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">{{ $b->location }}</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                <!-- /.project-details -->
                </div>
                <!--/.swiper-slide -->
            @endforeach

            <!--/.swiper-slide -->
        </div>
        <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
    </div>
</section>
<!-- /section -->