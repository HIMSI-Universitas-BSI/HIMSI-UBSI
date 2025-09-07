<x-layout.base title="{{ $divisi->name }}">
    <div class="bg-white grow shrink-0">

    <x-layout.navbar1 />
        <!-- /header -->
        <section class="wrapper !bg-[#edf2fc]">
            <div class="container pt-10 pb-36 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] xl:pb-60 lg:pb-60 md:pb-60 !text-center">
            <div class="flex flex-wrap mx-[-15px]">
                <div class="md:w-10/12 lg:w-8/12 xl:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                <div class="post-header">
                    <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem]">
                        <img src="{{ asset('storage/' . $divisi->logo) }}" class="svg-inject icon-svg icon-svg-md !w-[7.6rem] !h-[7.6rem] !text-[#fab758] text-yellow !mb-3 m-[0_auto]" alt="{{ $divisi->name }}">
                    </div>
                    <!-- /.post-category -->
                    <h1 class="!text-[calc(1.365rem_+_1.38vw)] font-bold !leading-[1.2] xl:!text-[2.4rem] !mb-3">{{ $divisi->name }}</h1>
                    <p class="lead !leading-[1.65] text-[.9rem] font-medium md:!px-14 lg:!px-14 xl:!px-20 xxl:!px-32">Sinergi dan Berkembang.</p>
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
        <div class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
            <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
            <div class="flex flex-wrap mx-[-15px]">

                <div class="w-full flex-[0_0_auto] !px-[15px] max-w-full">
                <article class="!mt-[-12.5rem]">
                    <figure class="!rounded-[.4rem] !mb-8 xl:!mb-[3.5rem] lg:!mb-[3.5rem] md:!mb-[3.5rem]">
                        <img class="!rounded-[.4rem]" src="{{ asset('storage/' . $divisi->image) }}" alt="{{ $divisi->name }}">
                    </figure>
                    <div class="flex flex-wrap mx-[-15px]">
                    <div class="xl:w-10/12 xl:!ml-[8.33333333%] lg:w-10/12 lg:!ml-[8.33333333%] w-full flex-[0_0_auto] !px-[15px] max-w-full">
                        <h2 class="!text-[calc(1.265rem_+_0.18vw)] font-bold xl:!text-[1.4rem] !leading-[1.35] !mb-4">Tentang Divisi</h2>
                        <div class="flex flex-wrap mx-0">
                        <div class="xl:w-9/12 lg:w-9/12 md:w-9/12 w-full flex-[0_0_auto] max-w-full">
                            <p>{{ $divisi->description }}</p>
                        </div>
                        <!--/column -->
                        <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                    </div>
                    
                    <div class="flex flex-wrap mx-[-15px] !mt-8 xl:!mt-[4.5rem] lg:!mt-[4.5rem] md:!mt-[4.5rem]">
                        <div class="xl:w-10/12 xl:!ml-[8.33333333%] lg:w-10/12 lg:!ml-[8.33333333%] md:w-10/12 md:!ml-[8.33333333%] flex-[0_0_auto] !px-[15px] max-w-full">
                            <h2 class="!mb-4">Tugas dan Fungsi</h2>

                            @if($divisi->job_description && is_array($divisi->job_description))
                                <ul class="pl-0 list-none bullet-bg bullet-soft-green">
                                    @foreach($divisi->job_description as $item)
                                        <li class="relative !pl-6 !mt-[0.35rem]">
                                            <i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none !tracking-[normal] !text-center flex items-center justify-center bg-[#def4ee] !text-[#45c4a0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i>
                                            {{ $item['job'] }}
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-500">Belum ada deskripsi tugas.</p>
                            @endif

                        </div>
                    </div>
                    <!-- /.row -->
                </article>
                <!-- /.project -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
    
        <x-layout.footer/>
    </div>
</x-layout.base>