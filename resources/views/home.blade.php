@extends('layouts.main')

@section('title', 'Home')

@section('content')
    {{-- slide --}}
    <div>
        <div class="sm:bg-no-repeat md:bg-no-repeat lg:relative lg:bg-cover lg:bg-center lg:bg-no-repeat xl:w-full xl:max-w-full xl:overflow-hidden xl:h-auto xl:grid xl:bg-cover xl:bg-no-repeat xl:bg-top justify-center items-center" style="background-image: url('{{ asset('/img/background_home.png')}}')">
            <div class="container relative z-30 xxs:pb-48 xs:pb-52 sm:pb-72 md:pb-96 lg:pb-96">
                <div class="xxs:text-center xs:text-center sm:text-center md:text-left lg:text-left xxs:pt-8 xs:pt-8 sm:pt-20 xl:pt-32 sm:pr-0 md:pr-60 xl:pr-64">
                    <h1 class="font-body font-bolder text-white xxs:text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-5xl animacionfade">
                        Trade worldwide across financial markets
                    </h1>
                    <div class="xxs:pt-12 xs:pt-12 sm:pt-12 md:pt-12 lg:pt-12 xl:pt-12 pl-0 md:pl-1 sm:pr-0 md:pr-60 xl:pr-64">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-xl animacionfade">
                            From stocks to mutual funds, we stand out for transparency and personalized guidance. We make accessing international markets easy. Our clients enjoy direct access to major global stock exchanges, empowering them to explore and capitalize on a variety of investment opportunities. Invest with confidence and constant support.
                        </p>
                    </div>
                    {{-- <div class="absolute md:top-16 lg:-top-4 xl:-top-16 right-0 z--1">
                        <img src="img/Animacion Cucchiara_Mesa de trabajo 1.png" class="xxs:hidden xs:hidden sm:hidden md:block md:w-[48rem] lg:w-[56rem] xl:w-[65rem]">
                    </div> --}}
                    <div class="xxs:h-32 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-40"></div>
                </div>
                <div class="xxs:text-center xs:text-center md:text-left lg:text-left xl:text-left">
                    <span class="text-white font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
                        About Us
                    </span>
                    <div class="xxs:pt-8 xs:pt-8 sm:pt-8 md:pt-8 lg:pt-8 xl:pt-8">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-2xl">
                            Cucchiara y Cía. LTD is a Financial Services Provider (FSP) headquartered in New Zealand. The company specializes in providing comprehensive trading, custody, and settlement services for a diverse range of financial assets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- cards --}}
    <div class="container absolute inset-x-0 fieldset z-30 xxs:px-0 lg:px-28 xl:px-48 xxs:text-center xs:text-center md:text-left lg:text-left xl:text-left xxs:-mt-32 xs:-mt-36 sm:-mt-48 md:-mt-80 lg:-mt-48 xl:-mt-64">
        <span class="text-white font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">
            Services
        </span>
        <div class="grid grid-cols-2 xxs:gap-1 gap-y-10 pt-10 sm:gap-x-6 md:gap-x-14 lg:gap-x-14 xl:gap-x-20 md:pt-12">
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col-reverse xs:flex-col-reverse sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mt-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        <a href="/services">
                            Brokerage
                        </a>
                    </h3>
                </div>
                <div>
                   <img src="{{ asset('/img/card_01.png') }}" alt="development icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col-reverse xs:flex-col-reverse sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mt-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        <a href="/services">
                            Financial<br>Advisory
                        </a>
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_02.png') }}" alt="content marketing icon" class="xxs:w-20"/>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    <div class="xxs:h-c-32 xs:h-c-34 sm:h-[23rem] md:h-44 lg:h-64 xl:h-44"></div>
    {{-- open account --}}
    <div class="container text-center">
        <span class="font-bolder text-color-cucchiara text-center font-body xxs:text-3xl lg:text-3xl">
            Open your account today
        </span>
        <div class="pic-ctn md:hidden sm:visible flex justify-center mt-8">
            <img src="{{ asset('/img/iconosopenaccount-01e.png') }}" alt="" class="pic xxs:h-56 xs:h-56 flex justify-center">
            <img src="{{ asset('/img/iconosopenaccount-02e.png') }}" alt="" class="pic xxs:h-56 xs:h-56 flex justify-center">
            <img src="{{ asset('/img/iconosopenaccount-03e.png') }}" alt="" class="pic xxs:h-56 xs:h-56 flex justify-center">
        </div>
        <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20 md:block xxs:hidden">
            <div class="grid grid-cols-3 gap-0 content-start">
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon_openaccount_01.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon_openaccount_01"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon_openaccount_02.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon_openaccount_02"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/icon_openaccount_03.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon_openaccount_03"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-0 justify-center items-start mt-4">
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Open your<br/>Account
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Define your<br/>investment<br/>portfolio
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Monitor<br/>your investment
                    </h4>
                </div>
            </div>
        </div>
    </div>
    {{-- end open account --}}
    {{-- need --}}
    <div class="bg-quarter">
        <div class="container xxs:flex-col sm:flex-row md:flex-row lg:flex-row flex xl:flex-row  items-center justify-between py-16 md:py-20 lg:flex-row">
            <div class="sm:px-8  xl:pr-28">
                <h2 class="font-body xxs:pb-8 xs:text-base sm:text-2xl md:text-4xl lg:text-5xl font-bold text-white">
                    What do you need to open your account?
                </h2>
            </div>
            <div class="flex xxs:gap-8 sm:gap-2 xxs:flex-col sm:flex-row">
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-48 xs:h-44 xxs:w-56 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center -top-8 sm:h-28 xxs:h-16 xs:h-16">
                                    <img src="{{ asset('/img/wrappedcard01.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xxs:text-base xs:text-base lg:text-3xl sm:text-xl">
                                        Individuals
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-48 xs:h-44 xxs:w-56 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-5 sm:px-5 xxs:pt-6 xs:pt-6 sm:pt-6 md:pt-6 md:px-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xxs:text-xxs xs:text-xs sm:text-xs lg:text-xs">
                                        · Identification document.<br/>
                                        · Proof of income and net worth.<br/>
                                        · Proof of address.<br/>
                                        · Optional: latest income tax and personal assets declarations.<br/>
                                        · Representatives: Identification document and power of attorney before a Notary Public.<br/>
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0-5 lg:pt-8 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base">Open Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-48 xs:h-44 xxs:w-56 xs:w-48 sm:h-48 sm:w-48 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center -top-8 sm:h-28 xxs:h-16 xs:h-16">
                                    <img src="{{ asset('/img/wrappedcard02.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xxs:text-base xs:text-base lg:text-3xl sm:text-xl">
                                        Corporate
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-48 xs:h-44 xxs:w-56 xs:w-48 sm:h-48 sm:w-48 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-5 sm:px-5 xxs:pt-2 xs:pt-2 sm:pt-6 md:pt-6 md:px-5 lg:px-9 lg:pt-4">
                                    <p class="font-body xxs:text-xxs xs:text-xs sm:text-xxs lg:text-xxs">
                                        · Articles of Association together and Certificate of Good Standing.<br/>
                                        · Shareholder Registry.<br/>
                                        · Minutes of the General Assembly approving the latest financial statement along with the Board of Directors' minutes.<br/>
                                        · General Assembly and Board of Directors' minutes with current positions.<br/>
                                        · Identification and address documents of legal representatives.<br/>
                                        · Financial statements certified by an external auditor and legalized by a relevant body.<br/>
                                        · Latest income tax declarations.<br/>
                                        · Proof of address of the Company.<br/>
                                        · Documents referred to above should be apostilled.
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0 lg:pt-2 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base">Open Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end need --}}
    <div class="h-[10rem]"></div>
@endsection
