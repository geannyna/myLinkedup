<x-layout>
    <x-slot name='title'>{{__('myLinkedup')}}</x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to Dashboard') }}
                    
                        <a class="nav-link nav_letra" {{--href="{{ route('revisor.become') }}"--}}>
                          <p>Crear publicacion</p>
                        </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
