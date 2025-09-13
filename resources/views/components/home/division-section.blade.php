<section id="divisi" class="wrapper !bg-[#ffffff] ">
    <div class="container py-10 lg:py-15 !text-center">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="md:w-10/12 xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:!ml-[16.66666667%] lg:!ml-[16.66666667%] md:!ml-[8.33333333%]">
                <h2 class="!text-[.75rem] uppercase !text-[#aab0bc] !mb-3 !tracking-[0.02rem] !leading-[1.35]">Divisi Kami</h2>
                <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-10 xl:!px-10">HIMSI UBSI hadir untuk membantu mahasiswa 
                    <span class="!relative z-[2] after:content-[''] after:absolute after:z-[-1] after:block after:bg-no-repeat after:bg-bottom after:bottom-[-0.1em] after:w-[110%] after:h-[0.3em] after:-translate-x-2/4 after:left-2/4  style-2 yellow">bersinergi </span> dan <span class="!relative z-[2] after:content-[''] after:absolute after:z-[-1] after:block after:bg-no-repeat after:bg-bottom after:bottom-[-0.1em] after:w-[110%] after:h-[0.3em] after:-translate-x-2/4 after:left-2/4  style-2 yellow"> berkembang. </span></h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="!relative">
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-12.5px] lg:mx-[-12.5px] md:mx-[-12.5px] !mt-[-25px] !text-center">
                
                @foreach ( $divisi as $d )
                    <div class="md:w-6/12 lg:w-6/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[12.5px] lg:!px-[12.5px] md:!px-[12.5px] max-w-full !mt-[25px] ">
                        <div class="card !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                            <div class="card-body flex-[1_1_auto] p-[20px]">
                                <img src="{{ asset('storage/himsi/' . $d->logo) }}" class="svg-inject icon-svg icon-svg-md !w-[5.6rem] !h-[5.6rem] !text-[#fab758] text-yellow !mb-3 m-[0_auto]" alt="{{ $d->name }}">
                                <h4>{{ $d->name }}</h4>
                                <p class="!mb-2">{{ \Illuminate\Support\Str::limit($d->description, 80) }}</p>
                                <a href="{{ route('division.show', ['id' => $d->id]) }}" class="more hover !text-[#fab758] focus:!text-[#fab758] hover:!text-[#fab758]">Selengkapnya</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>    
                @endforeach

            </div>
                <!--/.row -->
        </div>
        <!-- /.relative -->
    </div>
</section>
<!-- /section -->