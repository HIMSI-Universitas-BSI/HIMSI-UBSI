<!-- /section -->
<section class="wrapper !bg-[#ffffff]">
    <div class="pt-16 container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">

        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                <div class="flex flex-wrap mx-[-15px] !mt-[-50px] xl:mx-[-35px] lg:mx-[-20px]">
                    <div
                        class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] max-w-full !mt-[50px]">
                        <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php"
                            novalidate>
                            <div class="messages"></div>
                            <div class="flex flex-wrap mx-[-10px]">
                                <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <div class="form-floating relative !mb-4">
                                        <input id="form_name" type="text" name="name"
                                            class=" form-control  relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out     focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset]   focus-visible:!border-[rgba(63,120,224,0.5)]   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]"
                                            placeholder="" required>
                                        <label for="form_name"
                                            class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">First
                                            Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your first name. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <div class="form-floating relative !mb-4">
                                        <input id="form_lastname" type="text" name="surname"
                                            class=" form-control  relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out     focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset]   focus-visible:!border-[rgba(63,120,224,0.5)]   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]"
                                            placeholder="" required>
                                        <label for="form_lastname"
                                            class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Last
                                            Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <div class="form-floating relative !mb-4">
                                        <input id="form_email" type="email" name="email"
                                            class=" form-control  relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out     focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset]   focus-visible:!border-[rgba(63,120,224,0.5)]   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]"
                                            placeholder="" required>
                                        <label for="form_email"
                                            class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Email
                                            *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <div class="form-select-wrapper !mb-4">
                                        <select class="form-select" id="form-select" name="department" required>
                                            <option selected disabled value="">Select a department</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Customer Support">Customer Support</option>
                                        </select>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please select a department. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <div class="form-floating relative !mb-4">
                                        <textarea id="form_message" name="message"
                                            class=" form-control  relative block w-full text-[.75rem] font-medium !text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out     focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset]   focus-visible:!border-[rgba(63,120,224,0.5)]   placeholder:!text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] !leading-[1.25]"
                                            placeholder="" style="height: 150px" required></textarea>
                                        <label for="form_message"
                                            class="!text-[#959ca9] !mb-2 !inline-block text-[.75rem] !absolute !z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Message
                                            *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your messsage. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <div class="form-check block min-h-[1.36rem] !pl-[1.55rem] !mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck"> I agree to <a href="#"
                                                class="hover">terms and policy</a>. </label>
                                        <div class="invalid-feedback"> You must agree before submitting. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="w-full flex-[0_0_auto] !px-[15px] max-w-full">
                                    <input type="submit"
                                        class="btn btn-primary !text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:!border-[#3f78e0]   active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] btn-send !mb-3 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]"
                                        value="Send message">
                                    <p class="!text-[#aab0bc]"><strong>*</strong> These fields are required.</p>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!--/column -->
                    <div
                        class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] max-w-full !mt-[50px]">
                        <div class="flex flex-row">
                            <div>
                                <div
                                    class="icon !text-[#3f78e0] xl:!text-[1.4rem] !text-[calc(1.265rem_+_0.18vw)] !mr-4 !mt-[-0.25rem]">
                                    <i class="uil uil-location-pin-alt before:content-['\ebd8']"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="!mb-1">Address</h5>
                                <address class=" not-italic !leading-[inherit] !mb-4">
                                    {{ $adress }}</address>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div>
                                <div
                                    class="icon !text-[#3f78e0] xl:!text-[1.4rem] !text-[calc(1.265rem_+_0.18vw)] !mr-4 !mt-[-0.25rem]">
                                    <i class="uil uil-phone-volume before:content-['\ec50']"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="!mb-1">Phone</h5>
                                <p>{{ $waMarketing }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div>
                                <div
                                    class="icon !text-[#3f78e0] xl:!text-[1.4rem] !text-[calc(1.265rem_+_0.18vw)] !mr-4 !mt-[-0.25rem]">
                                    <i class="uil uil-envelope before:content-['\eac8']"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="!mb-1">E-mail</h5>
                                <p class="!mb-0">
                                    <a href="mailto:{{ $email }}" class="!text-[#60697b]">{{ $email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
