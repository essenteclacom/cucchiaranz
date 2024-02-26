@extends('layouts.main')

@section('title', 'Regulations')

@section('content')
    <div>
        {{-- slide --}}
        <div style="background-image: url({{ asset('/img/Universidad.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara y Cía S.A. se adhiere y cumple rigurosamente todas las normativas vigentes del mercado de capitales argentino velando por la transparencia y la integridad de todas sus operaciones.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        {{-- end slide --}}
        <div class="bg-primary">
            <div class="container">
                <div class="flex flex-col xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-center pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20 pt-32 pb-10">
                        <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                            Regulation
                        </div>
                    </div>
                    <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                        <div class="text-white xs:pr-0 lg:pr-20 pb-16">
                            <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                                In New Zealand, financial service providers are regulated by the Financial Markets Authority (FMA). The FMA was established under the Financial Markets Authority Act 2011 and is responsible for ensuring the integrity of financial markets, promoting public confidence in those markets, and protecting investors and other market participants. While the FMA operates independently, it is accountable to the New Zealand Parliament.<br><br>
                                Under this legal framework, since March 2016, Cucchiara and Cía. LTD has been registered as a Financial Services Provider (FSP) under registration number FSP481546. FSPs are governed by the Financial Service Providers (Registration & Dispute Resolution) Act 2008. As an FSP, Cucchiara and Cía LTD must comply with certain legal and regulatory requirements to operate in New Zealand. These requirements include obtaining a license and adhering to specific regulations aimed at protecting investors and maintaining the integrity of the financial system.</b><br><br>
                                Cucchiara and Cía LTD is also a member of a Dispute Resolution Scheme approved in accordance with section 50 of the Financial Service Providers (Registration & Dispute Resolution) Act 2008. This provides clients with an independent channel through which they can seek to resolve any complaints they may have about our service.
                            </div>
                            <div class="flex pt-4 flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row justify-center items-center">
                                <a href="https://www.fma.govt.nz/about-us/"><img src="{{ asset('/img/NZ_Logo_FMA.png') }}"class="h-28" alt="" /></a>
                                <a href="https://fdrs.org.nz/"><img src="{{ asset('/img/logo_02.png') }}"class="h-24" alt="" /></a>
                            </div>
                        </div>
                        <div class="xxs:pt-4 xs:pt-4 sm:pt-0 md:pt-32 items-center justify-center">
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                FSP Registration
                            </a>
                            <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                Certificate of Incorporation
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
