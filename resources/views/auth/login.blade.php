<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Sistema Web de Auto de Infrações de Trânsito - AIT">
            <meta name="author" content="Leonardo Veloso Neves">
            <title>WebTrânsito - AIT</title>
            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('bootstrap/js/bootstrap.min.js')}}">

            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

            <link rel="shortcut icon" type="imagex/png" href="{{asset('Imagens/logoSistema.png')}}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </head>

        <body>
            <div class="container-fluid">
                <div class="container-fluid text-center bg-light p-4 position-static h-auto min-vh-100 flex-column d-flex">

                    <div class="container">
                        <div class="container w-50 mt-10 p-4 position-static h-auto d-md-inline-flex d-none shadow-lg">
                            <fieldset>
                                <div class="row align-items-center">
                                    <header class="text-center mb-4 bg-light shadow-sm align-content-center p-auto d-block">
                                        <h3 class="text-center"><b>Sistema Auto de Infração de Trânsito - SAIT</b></h3>
                                    </header>
                                    <div class="container-fluid col-sm-6 m-auto">

                                        <img src="{{asset('Imagens/logoSistema.png')}}" class="img-fluid" width="150px" height="90px" alt="Responsive image">

                                        <h4>Autenticação de Usuário</h4>

                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form class="row g-3" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div id="telaLogin" class="container-fluid">
                                                <!-- Matrícula -->
                                                <div class="row p-2">
                                                    <div class="col">
                                                        <input class="form-control" name="matricula" required="required" type="text" placeholder="Matrícula"/>
                                                    </div>
                                                </div>

                                                <!-- Password -->
                                                <div class="row p-2 mt-4">
                                                    <div class="col">
                                                        <input class="form-control" name="password" required="required" type="password" placeholder="Senha"/>
                                                    </div>
                                                </div>

                                                <!-- Remember Me -->
                                                <div class="block">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>

                                                <div class="flex items-center justify-end mt-4">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn nav-link-light" href="{{ route('password.request') }}">
                                                            {{ __('Forgot your password?') }}
                                                        </a>
                                                    @endif

                                                    <div class=" container mt-2 row p-2">
                                                        <div class="col">
                                                            <button type="submit" class="btn btn-success btn-md">Autenticar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <footer class="page-footer align-content-center" id="footer">
                            <div class="footer-copyright">
                                <div class="container text-center">
                                    <p class="font-sans text-secondary">Copyright &copy; 2022 by Leonardo Veloso Neves.<br>IFNMG - Pirapora/MG</p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </body>
    </html>
