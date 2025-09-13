<x-layout.base title="{{ $blog->title }}">
    <div class="bg-white grow shrink-0">

        <x-layout.navbar1 />
    
        <section class="wrapper !bg-[#edf2fc]">
            <div class="container pt-10 pb-36 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] xl:pb-40 lg:pb-40 md:pb-40 !text-center">
                <div class="flex flex-wrap mx-[-15px]">
                    <div class="md:w-10/12 lg:w-10/12 xl:w-8/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                        <div class="post-header !mb-[.9rem]">
                            <div class="inline-flex uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] !mb-[0.4rem]  text-line relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                                <a href="#" class="hover" rel="category">{{ $blog->branch->name }}</a>
                            </div>
                            <!-- /.post-category -->
                            <h1 class="!text-[calc(1.365rem_+_1.38vw)] font-bold !leading-[1.2] xl:!text-[2.4rem] !mb-4">{{ $blog->title }}</h1>
                            <ul class="!text-[0.8rem] !text-[#aab0bc] m-0 p-0 list-none !mb-5">
                                <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>{{ date('d F, Y', strtotime($blog->created_at)) }}</span></li>
                                <li class="post-author inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]"><a class="!text-[0.8rem] !text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-user pr-[0.2rem] align-[-.05rem] before:content-['\ed6f']"></i><span>{{ $blog->createdBy->name }}</span></a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper !bg-[#ffffff]">
            <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
                <div class="flex flex-wrap mx-[-15px]">
                <div class="xl:w-10/12 lg:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                    <div class="blog single !mt-[-7rem]">
                    <div class="card">
                        <figure class="card-img-top"><img src="{{ asset('storage/blog/' . $blog->banner) }}" alt="image"></figure>
                        <div class="card-body flex-[1_1_auto] p-[40px] xl:!p-[2.8rem_3rem_2.8rem] lg:!p-[2.8rem_3rem_2.8rem] md:!p-[2.8rem_3rem_2.8rem]">
                        <div class="classic-view">
                            <article class="post !mb-8">
                            <div class="relative !mb-5">
                                <p>{!! $blog->content !!}</p>

                                <blockquote class="border-l-[#3f78e0] !leading-[1.7] font-medium !pl-4 border-l-[0.15rem] border-solid !text-[1rem] !my-8">
                                    <p><p>{!! $blog->quotes !!}</p></p>
                                    <footer class="!text-[0.6rem] !text-[#aab0bc] !mb-4 before:content-['\2014\a0'] font-bold uppercase !tracking-[0.02rem] !mt-0">{{ $blog->branch->name }}</footer>
                                </blockquote>

                                <div class="flex flex-wrap mx-[-15px] !mt-3 !mb-10">
                                    
                                    @foreach ($blog->image as $img )
                                        <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mt-[30px]">
                                            <figure class="overflow-hidden translate-y-0 group rounded cursor-dark">
                                                <a href="{{ asset('storage/blog/' . $img) }}" data-glightbox="title: Heading; description: {{ $blog->title }}" data-gallery="post"> 
                                                    <img src="{{ asset('storage/blog/' . $img) }}" alt="image">
                                                </a>
                                            </figure>
                                        </div>
                                    @endforeach

                                </div>
                                <!-- /.row -->
                                
                            </div>
                            <!-- /.post-content -->
                        
                        </div>
                    </article>
                <!-- /.post -->
            </div>
            <!-- /.classic-view -->
        </section>
    
        <x-layout.footer/>
    </div>
</x-layout.base>