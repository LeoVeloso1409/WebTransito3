<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a class="navbar-brand" href="{{url('/home')}}"> <img src="assets/Imagens/logoSistema.png" width="100"  alt=""></a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <legend class="font-sans text-secondary">Cadastro de Usuário</legend>

        <form class="row g-3" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nome -->
            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Nome" required autofocus />
            </div>

            <!-- Matrícula -->
            <div class="mt-4">
                <x-input id="matricula" class="block mt-1 w-full" type="text" name="matricula" :value="old('matricula')" placeholder="Matrícula" required autofocus />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required />
            </div>

            <div class="row mt-4">
                <!-- Orgão -->
                <div class="col">
                    <select id="orgao" name="orgao" class="form-select" required>
                        <option selected>Orgão</option>
                        <option value="PMMG">PMMG</option>
                        <option value="PCMG">PCMG</option>
                    </select>
                </div>

                <!-- Unidade -->
                <div class="col" >
                    <select id="unidade" name="unidade" class="form-select" required>
                        <option selected>Unidade</option>
                        <option value="1 BPM">1 BPM</option>
                        <option value="2 BPM">2 BPM</option>
                        <option value="3 BPM">3BPM</option>
                        <option value="...">...</option>
                        <option value="55 BPM">55BPM</option>
                    </select>
                </div>

                <!-- Função -->
                <div class="col">
                    <select id="funcao" name="funcao" class="form-select" required>
                        <option selected>Função</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="AGENTE">AGENTE</option>
                    </select>
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Senha" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirmar Senha" required />
            </div>

            <div class="flex items-center justify-center mt-4">
                <div class="row p-2">
                    <div class="col-6">
                        <x-button>
                            {{ __('Cadastrar') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
