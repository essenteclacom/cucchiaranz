@extends('layouts.main')

@section('title', 'Regulations')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/pexels.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara y Cía S.A. se adhiere y cumple rigurosamente todas las normativas vigentes del mercado de capitales argentino velando por la transparencia y la integridad de todas sus operaciones.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-center pt-20 pb-32">
                    <div class="text-white">
                        <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                            Regulatory & legal
                        </div>
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl pt-10">
                            Cucchiara y Cia Limited (“Cucchiara”) is registered as a Financial Service Provider (FSP) in New Zealand, and as such is governed by the Financial Service Providers (Registration & Dispute Resolution) Act 2008, which is administered by the Ministry of Business, Innovation & Employment (MBIE) through the office of the Registrar of Financial Service Providers. Prior to the enactment of the Financial Services Legislation Amendment Act 2019 (“the Amendment Act”) - a majority of which took effect from the 15th of March 2021 (“the Operative Date”) - the provision of financial services by the Company was governed by a range of legislation, including, in particular:<br/>
                            · Sections 77K, 77L & 77V of Part 3A Financial Advisers Act 2008 (FAA), which stipulated that brokerage services must be provided with due care, skill & diligence, and that a broker must not engage in misleading or deceptive conduct.<br/>
                            · The Financial Advisers (Custodians of FMCA Financial Products) Regulations 2014 (“the Custody Regulations”), which governed the provision of custody services in regard to debt & equity securities, and;<br/>
                            · Sections 19 through 23 of Part 2 Financial Markets Conduct Act 2013 (FMCA) which prohibit misleading or deceptive conduct, and the making of false, misleading or unsubstantiated representations in the course of providing financial services.<br/>
                            With effect from the Operative Date, the Amendment Act repealed FAA, and provisions broadly similar in effect to those cited above from FAA and the Custody Regulations were incorporated into a new subpart 5B to Part 6 of FMCA (collectively, “the Broker Regulations”). Therefore, Cucchiara is subject to substantially the same conduct obligations as it was prior to the repeal of FAA, with the difference being that those obligations are now all to be found within FMCA itself, rather than distributed across FAA, the Custody Regulations and FMCA. For the avoidance of doubt, Cucchiara is still subject to sections 19 through 23 of Part 2 FMCA.<br/>
                            The Broker Regulations are administered by MBIE primarily through the auspices of the Financial Markets Authority (FMA), the New Zealand government agency responsible for enforcing securities, financial reporting and company law as they apply to financial services and securities markets (<a class="underline underline-offset-4" href="https://www.fma.govt.nz/about-us/what-we-do/">more information</a>)<br/>
                            Cucchiara is also a member of a Dispute Resolution Scheme approved in accordance with section 50 of the Financial Service Providers (Registration & Dispute Resolution) Act 2008 (<a class="underline underline-offset-4" href="https://www.fairwayresolution.com/">more information</a>). This provides clients with an independent channel through which they can seek to resolve any complaints they may have about our service.<br/>
                            Important Disclaimer: Please note that Cucchiara is not licensed by MBIE, the FMA, or any other New Zealand government agency, and none of the above should be understood as implying that the Company is regulated by any such agency.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
