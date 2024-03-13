@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/services_main.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xxs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    The Company is focused on providing savers, investors and institutional clients with solutions through a large range of financial products. Cucchiara operates with regulated banks and brokers who enjoy excellent ratings and reputation in the international financial markets.Given our FSP status, we are not a member of any Stock Exchange.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Brokerage
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5 pl-32">
                            Operating globally across major markets, we engage in both bilateral over-the-counter (OTC) negotiations and trading on listed exchanges. Our suite of financial instruments includes sovereign and corporate bonds from developed and emerging markets, shares of companies worldwide, ETFs, self-managed and third-party investment funds, derivatives (options and futures), commodities, currencies, cryptocurrencies, and tailored structured notes, among others.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/services_01.png') }}" class="xxs:w-20 sm:w-28" alt="about image"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/services_02.png') }}" class="xxs:w-20 sm:w-28" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Financial Advisory
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5 pr-32">
                            Nuestro equipo de profesionales brinda soluciones de inversión adaptadas a cada perfil de cliente y sus necesidades financieras. Ofrecemos una visión a largo plazo y buscamos la obtención de la mejor relación de riesgo/rentabilidad según cada contexto de mercado.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
