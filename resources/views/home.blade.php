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
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}" >
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('bootstrap/js/bootstrap.min.js')}}">


            <link rel="shortcut icon" type="imagex/png" href="{{asset('Imagens/logoSistema.png')}}">

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </head>

        <body>
            <div class="container-fluid" id="layout">
                <div class="container-fluid text-center bg-light p-4 position-static h-auto min-vh-100 flex-column d-flex">
                    <header class="text-center bg-info shadow-lg align-content-center p-auto d-block" id="header">
                        <h1 class="text-center"><b>WebTrânsito</b></h1>
                    </header>

                    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mt-2 mb-2 shadow-sm">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('Imagens/logoSistema.png')}}" width="60"  alt="Início"></a>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="btn nav-link active" data-bs-toggle="modal" data-bs-target="#modal" aria-current="page">Novo AIT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn nav-link" href="{{route('register')}}">Cadastrar Usuário</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                            <ul class="navbar-nav">
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Pesquisar
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                  <li><a class="dropdown-item" href="{{route('meus_registros')}}">Meus Registros</a></li>
                                                  <li><a class="dropdown-item" href="{{route('pesquisar')}}">Pesquisa Avançada</a></li>
                                                </ul>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="col-lg navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-link"> </li>
                                </ul>
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <span>
                                        <div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <li class="nav-item">
                                                    <a class="btn nav-link" :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                    </a>
                                                </li>
                                            </form>
                                        </div>
                                    </span>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    @php
                        $user = Auth::user();
                    @endphp

                    <div class="container bg-light mt-2 mb-2" id="body">
                        <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="headTable">
                            <fieldset>
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="{{asset('Imagens/logoSistema.png')}}" alt="Responsive image" width="200" height="150" class="border border-dark d-md-inline-flex">
                                    </div>

                                    <div class="col-md-8 offset-md-2 align-content-center">
                                        <div class="row align-content-center mt-4">
                                            <div class="col-md-2"></div>
                                            <div class="col-md">
                                                <h4 class="text-align-center">Auto de Infrações de Trânsito - AIT</h4>
                                            </div>
                                        </div>
                                        <div class="row align-content-center mt-4">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-3">
                                                <input disabled type="text" class="form-control" placeholder="{{$user->matricula}}">
                                            </div>

                                            <div class="col-md-7">
                                                <input disabled type="text" class="form-control" placeholder="{{$user->name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        @yield('index')
                        @yield('conteudo')


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

            <!-- Modal -->
            <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Atenção</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <form method="POST" action="{{route('store.ait')}}">
                                @csrf

                                @php
                                    $cod_ait = App\Http\Controllers\WebtransitoController::gerarCodAit();
                                @endphp

                                <input hidden type="text" name="user_id" value="{{Auth::User()->id}}">
                                <input hidden type="text" name="cod_ait" value="{{$cod_ait}}">
                                <input hidden type="text" name="orgao_autuador" value="{{Auth::User()->orgao}}">
                                <input hidden type="text" name="matricula" value="{{Auth::User()->matricula}}">
                                <input hidden type="text" name="nome" value="{{Auth::User()->name}}">

                                <div class="modal-body">
                                    <p>Ao Iniciar uma autuação ela não poderá mais ser cancelada.</p>
                                    <br>
                                    <p>Deseja realmente continuar?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ asset('js/app.js') }}" type="text/js"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
    </html>

