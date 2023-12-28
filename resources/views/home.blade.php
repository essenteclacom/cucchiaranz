@extends('layouts.main')

@section('title', 'Home')

@section('content')
    {{-- slide --}}
    <div>
        <div class="sm:bg-no-repeat md:bg-no-repeat lg:relative lg:bg-cover lg:bg-center lg:bg-no-repeat xl:w-full xl:max-w-full xl:overflow-hidden xl:h-auto xl:grid xl:bg-cover xl:bg-no-repeat xl:bg-top justify-center items-center" style="background-image: url('{{ asset('/img/background_home.png')}}')">
            <div class="container relative z-30 xxs:pb-48 xs:pb-52 sm:pb-72 md:pb-96 lg:pb-96">
                <div class="xxs:text-center xs:text-center sm:text-center md:text-left lg:text-left xxs:pt-8 xs:pt-8 sm:pt-20 xl:pt-32">
                    <h1 class="font-body font-bolder text-white xxs:text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-5xl">
                        The Company
                    </h1>
                    <div class="xxs:pt-12 xs:pt-12 sm:pt-12 md:pt-12 lg:pt-12 xl:pt-12 pl-0 md:pl-1">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-xl xl:pr-[28rem]">
                            Cucchiara y Cia. LTD (“Cucchiara” or “the Company”) provides financial intermediation services and custody of securities to its clients. The Company bases its operative strategy on prudence and responsibility when making decisions, and prides itself on providing a highly personalized service to clients. In this way, through the years, the quality of our relationship with clients and the trust we enjoy has been strengthened, such as with our institutional clients and counterparties, allowing us to enjoy a prestige that we strive daily to maintain.
                        </p>
                    </div>
                    {{-- <div class="absolute md:top-16 lg:-top-4 xl:-top-16 right-0 z--1">
                        <img src="img/Animacion Cucchiara_Mesa de trabajo 1.png" class="xxs:hidden xs:hidden sm:hidden md:block md:w-[48rem] lg:w-[56rem] xl:w-[65rem]">
                    </div> --}}
                    <div class="xxs:h-32 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-40"></div>
                </div>
                <div class="xxs:text-center xs:text-center md:text-left lg:text-left xl:text-left">
                    <span class="text-white font-body font-bold xxs:text-2xl sm:text-3xl lg:text-3xl xl:text-4xl">

                    </span>
                    <div class="xxs:pt-8 xs:pt-8 sm:pt-8 md:pt-8 lg:pt-8 xl:pt-8">
                        <p class="font-body text-white font-normal xxs:text-xs sm:text-lg md:text-lg lg:text-lg xl:text-2xl">
                            This is the reason why both Cucchiara’s traders and management team maintain direct contact with investors, providing them with the support they need when making decisions. We have a global presence through our full-service brokerage firm, Cucchiara y Cía. S.A. (“Cucchiara Argentina”), a Negotiation, Liquidation and Compensation Agent (ALyC) based in Buenos Aires. <b>Cucchiara Argentina</b> commenced operations in 1969 and was founded by Dr. Tomas Cucchiara. Since 2006, we also have a presence in Uruguay through Sekoia Agente de Valores S.A., a company which provides financial advice as well as intermediation of local and foreign securities. Sekoia is authorized and regulated by the Central Bank of Uruguay (BCU).</span>
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
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Brokerage
                    </h3>
                </div>
                <div>
                   <img src="{{ asset('/img/card_01.png') }}" alt="development icon" class="xxs:w-20"/>
                </div>
            </div>
            <div class="rounded-lg sm:px-8 md:px-8 lg:px-20 xxs:py-12 xs:py-12 sm:py-12 md:py-12 xl:py-20 shadow-amplia bg-white flex xxs:flex-col xs:flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center xxs:text-center sm:text-left xxs:mb-6 sm:mb-0">
                    <h3 class="text-color-cucchiara xxs:text-xs sm:text-lg font-body font-bold lg:text-xl xl:text-2xl">
                        Custody
                    </h3>
                </div>
                <div>
                    <img src="{{ asset('/img/card_02.png') }}" alt="content marketing icon" class="xxs:w-20"/>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    <div class="xxs:h-c-32 xs:h-c-34 sm:h-[23rem] md:h-44 lg:h-44 xl:h-44"></div>
    {{-- open account --}}
    <div class="container text-center">
        <span class=" font-bolder text-color-cucchiara text-center font-body xxs:text-3xl lg:text-3xl">
            Openyour account today
        </span>
        <div class="mx-auto bg-white xxs:py-12 xs:py-20 sm:py-16 md:py-12 lg:py-20 xl:py-20">
            <div class="grid grid-cols-4 gap-0 content-start">
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconphone.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon project"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconarrows.png') }}" class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon award"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconbars.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon happy clients"/>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/iconboxes.png') }}"class="mx-auto xxs:h-12 xs:h-20 md:h-24 lg:h-32 xl:h-44" alt="icon puzzle"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-0 justify-content items-center mt-4">
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl">
                        Open your<br/>Account
                    </h4>
                </div>
                <div class="">
                    <h4 class="text-color-cucchiara font-body font-bold text-center xxs:text-xxs xs:text-base lg:text-xl pb-8">
                        Get financial<br/>Advice
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
            <div>
                <h2 class="font-body xxs:pb-8 xs:text-base sm:text-2xl md:text-4xl lg:text-5xl font-bold text-white">
                    What do you<br>need to open<br>your account?
                </h2>
            </div>
            <div class="flex xxs:gap-0 sm:gap-2">
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 h-28">
                                    <img src="{{ asset('/img/personas.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xxs:text-base xs:text-base lg:text-3xl sm:text-xl">
                                        Natural<br/>Person
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-5 sm:px-5 xxs:pt-6 xs:pt-6 sm:pt-6 md:pt-6 md:px-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xxs:text-xxs xs:text-xxs sm:text-xxs lg:text-xs">
                                        · Documento de Identidad.<br/>
                                        · Verificación de domicilio.<br/>
                                        · Justificación de ingresos y patrimonio.<br/>
                                        · En caso de contar con apoderado, documento de identidad de éste, así como copia del poder otorgado ante Escribano Público.
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0-5 lg:pt-8 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base">Abrir cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 h-28">
                                    <img src="{{ asset('/img/contratos.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xxs:text-base xs:text-base lg:text-3xl sm:text-xl">
                                        Corporate<br/>Entities
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xxs:h-40 xs:h-44 xxs:w-40 xs:w-48 sm:h-48 sm:w-48 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:px-5 sm:px-5 xxs:pt-2 xs:pt-2 sm:pt-6 md:pt-6 md:px-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xxs:text-xxs xs:text-xxs sm:text-xxs lg:text-xs">
                                        · Actas de Directorio / Asamblea con designación de cargos.<br/>
                                        · Estatuto de la Sociedad.<br/>
                                        · Registro de accionistas actualizado.<br/>
                                        · Estados contables.<br/>
                                        · Verificación de domicilio de la sociedad.<br/>
                                        · De los representantes de la sociedad y beneficiarios finales.
                                    </p>
                                    <p class="font-body xxs:text-xxs xs:text-xxs pl-4 sm:text-xxs lg:text-xs">
                                        · Documento de identidad<br/>
                                        · Verificación de domicilio
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0 lg:pt-2 px-9 pb-4 underline underline-offset-4">
                                    <a href="" class="font-body font-bold text-a-color xxs:text-xxs xs:text-xxs sm:text-xxs md:text-xs lg:text-base">Abrir cuenta</a>
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
