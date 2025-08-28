<nav class="navbar navbar-expand-lg fancy navbar-light !bg-[#ffffff]  caret-none xl:[background:0_0!important] lg:[background:0_0!important]">
    <div class="container">
        <div class="navbar-collapse-wrapper bg-[rgba(255,255,255)] opacity-100 flex flex-row !flex-nowrap w-full justify-between items-center">
            
            <div class="navbar-brand w-full flex items-center space-x-3">
                <a href="/home" class="block">
                    <img src="{{ asset('images/himsi.png') }}" alt="HIMSI Logo" class="h-10 w-auto max-h-12" style="max-width:150px;">
                </a>
            </div>


            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header xl:!hidden lg:!hidden">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                        
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Divisi</a>
                            <ul class="dropdown-menu">
                                
                                <li class="nav-item"><a class="dropdown-item" href="#">Pendidikan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Kominfo</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">RSDM</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Litbang</a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
                        
                        <div class="offcanvas-footer xl:!hidden lg:!hidden">
                        </div>
                        <!-- /.offcanvas-footer -->
                    </ul>
                </div>
                <!-- /.offcanvas-body -->
            </div>

            <!-- /.navbar-collapse -->
            <div class="navbar-other w-full !flex !ml-auto">
                <ul class="navbar-nav !flex-row !items-center !ml-auto">
                    <li class="nav-item hidden xl:block lg:block md:block">
                        <a href="../../contact.html" class="btn btn-sm btn-primary !text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:!border-[#3f78e0]   active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem]">Daftar Himsi</a>
                    </li>
                    <li class="nav-item xl:!hidden lg:!hidden">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->

        </div>
        <!-- /.navbar-collapse-wrapper -->
    </div>
    <!-- /.container -->
</nav>