@extends('layouts.principal')

@section('title', 'Normativas')

@section('content')
    <div>
        {{-- slide --}}
        <div style="background-image: url({{ asset('/img/Universidad.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara y Cía LTD se compromete a salvaguardar los intereses de los inversores y garantizar la transparencia e integridad de sus operaciones en el mercado financiero.
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
                            Normativas
                        </div>
                    </div>
                    <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                        <div class="text-white xs:pr-0 lg:pr-20 pb-16">
                            <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                                En Nueva Zelanda, los proveedores de servicios financieros están regulados por la Autoridad de Mercados Financieros (FMA). La FMA fue establecida bajo la Ley de la Autoridad de Mercados Financieros de 2011 y es responsable de garantizar la integridad de los mercados financieros, fomentar la confianza pública en esos mercados y proteger a los inversores y otros participantes del mercado. Aunque la FMA opera de manera independiente, está sujeta a rendición de cuentas ante el Parlamento de Nueva Zelanda.<br><br>
                                Bajo este marco legal, desde marzo de 2016, Cucchiara y Cía. LTD está registrada como Proveedor de Servicios Financieros (FSP) bajo el número de registro FSP481546. Los FSP están regulados por la Ley de Proveedores de Servicios Financieros (Registro y Resolución de Disputas) de 2008. Como FSP, Cucchiara y Cía. LTD debe cumplir con ciertos requisitos legales y regulatorios para operar en Nueva Zelanda. Estos requisitos incluyen la obtención de una licencia y el cumplimiento de regulaciones específicas destinadas a proteger a los inversores y mantener la integridad del sistema financiero.</b><br><br>
                                Cucchiara y Cía LTD también es miembro de un Esquema de Resolución de Disputas aprobado de acuerdo con la sección 50 de la Ley de Proveedores de Servicios Financieros (Registro y Resolución de Disputas) de 2008. Esto proporciona a los clientes un canal independiente a través del cual pueden buscar resolver cualquier queja que puedan tener sobre nuestro servicio.
                            </div>
                            <div class="flex pt-4 flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row justify-center items-center">
                                <a href="https://www.fma.govt.nz/about-us/"><img src="{{ asset('/img/NZ_Logo_FMA.png') }}"class="h-28" alt="" /></a>
                                <a href="https://fdrs.org.nz/"><img src="{{ asset('/img/logo_02.png') }}"class="h-24" alt="" /></a>
                            </div>
                        </div>
                        <div class="xxs:pt-4 xs:pt-4 sm:pt-0 md:pt-32 items-center justify-center">
                            <a href="https://fsp-app.companiesoffice.govt.nz/orp-fsp-register/viewInstance/view.html?id=757b371f1b6eec44bad4008937136b8f5d6e41a918e243dbef10caad30e045ae&_timestamp=7894451527668311" target="blank" class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                FSP Registration
                            </a>
                            <a href="https://app.companiesoffice.govt.nz/companies/app/service/services/documents/E760A5071EAC228079F8F08CEE550517/CertIncorporation_4558080_25January2024.pdf" target="blank" class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
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
