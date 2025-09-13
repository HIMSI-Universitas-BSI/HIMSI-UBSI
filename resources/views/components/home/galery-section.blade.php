<section class="py-10 bg-white">
    <!-- /.container -->
    <div class="container">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="md:w-11/12 lg:w-8/12 xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
            <h2 class="!text-[calc(1.345rem_+_1.14vw)] font-bold !leading-[1.2] xl:!text-[2.2rem] !mb-4">{{ $galeryTitle }}</h2>
            <p class="lead !text-[1.05rem] !leading-[1.55] !font-normal !mb-12">{{ $galeryText }}</p>
            </div>
            <!-- /column -->
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    
    <!-- /.swiper-container -->
    <div class="swiper-container swiper-auto swiper-auto-xs !mb-8 relative !z-10" 
        data-margin="40" data-nav="false" data-dots="false" data-centered="true" 
        data-loop="true" data-items-auto="true" data-autoplay="true" 
        data-autoplaytime="1" data-drag="false" data-resizeupdate="false" 
        data-speed="7000">

        <div class="swiper overflow-visible pointer-events-none">
            <div class="swiper-wrapper ticker">

                @foreach ($branchesAsc as $branch)
                    @foreach ($branch->blogs as $blog)
                        @php
                            $images = is_array($blog->image) ? $blog->image : json_decode($blog->image, true);
                        @endphp

                        @if (!empty($images))
                            @foreach ($images as $img)
                                <div class="swiper-slide">
                                    <figure class="w-full max-w-[600px] max-h-[340px] overflow-hidden rounded-[0.8rem] mx-auto">
                                        <img class="h-full w-full object-contain" 
                                            src="{{ asset('storage/blog/' . $img) }}" 
                                            alt="{{ $branch->name }}">
                                    </figure>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                @endforeach

            </div>
            <!--/.swiper-wrapper -->
        </div>
    <!-- /.swiper -->
    </div>


    <!-- swiper kedua (rtl) -->
    <div class="swiper-container swiper-auto swiper-auto-xs relative !z-10" 
        data-margin="40" data-nav="false" data-dots="false" data-centered="true" 
        data-loop="true" data-items-auto="true" data-autoplay="true" 
        data-autoplaytime="1" data-drag="false" data-resizeupdate="false" 
        data-speed="7000">

        <div class="swiper overflow-visible pointer-events-none" dir="rtl">
            <div class="swiper-wrapper ticker">
                
                @foreach ($branchesDesc as $branch)
                    @foreach ($branch->blogs as $blog)
                        @php
                            $images = is_array($blog->image) ? $blog->image : json_decode($blog->image, true);
                        @endphp

                        @if (!empty($images))
                            @foreach ($images as $img)
                                <div class="swiper-slide">
                                    <figure class="w-full max-w-[600px] max-h-[340px] overflow-hidden rounded-[0.8rem] mx-auto">
                                        <img class="h-full w-full object-contain" 
                                            src="{{ asset('storage/blog/' . $img) }}" 
                                            alt="{{ $branch->name }}">
                                    </figure>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                @endforeach

            </div>
            <!--/.swiper-wrapper -->
        </div>
    <!-- /.swiper -->
    </div>
</section>