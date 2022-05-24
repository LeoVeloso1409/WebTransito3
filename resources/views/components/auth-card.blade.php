<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-info-100">


    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-dark shadow-lg overflow-hidden sm:rounded-lg">
        <div class="container-fluid align-content-center w-100 shadow-lg">
            <header class="text-center mb-1 bg-info align-content-center p-auto d-block" id="header">
                <h1 class="text-center text-capitalize"><b>WebTrânsito</b></h1>
            </header>

            <header class="text-center mb-2 bg-light align-content-center p-auto d-block">
                <h3 class="text-center"><b>Sistema Auto de Infração de Trânsito - SAIT</b></h3>
            </header>
        </div>
        <div class="container-fluid align-content-center w-100 shadow-lg">
            <header class="text-center">
                {{ $logo }}
            </header>
        </div>
        {{ $slot }}
    </div>
</div>
