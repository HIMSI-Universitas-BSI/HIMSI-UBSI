<!-- /section -->
<section id="snippet-1" class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
        <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
                <p class="text-center !mb-8">Trusted by over 2K+ clients across the world</p>
                <div class="swiper-container clients !mb-0 relative z-10" data-margin="30" data-dots="false" data-loop="true"
                        data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="7"
                        data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
                        <div class="swiper">
                        <div class="swiper-wrapper ticker">
                                @foreach ($clients as $client)
                                        <div class="swiper-slide px-5"><img class="!w-full !h-auto" src="{{ asset('storage/' . $client->logo) }}""
                                                alt="{{ $client->name }}"></div>
                                @endforeach
                        </div>
                        <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                </div>
        <!-- /.swiper-container -->
        </div>
</section>
<!-- /section -->
