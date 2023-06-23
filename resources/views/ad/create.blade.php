 <x-layout> {{-- hay que crear livewire y formulario insercion anuncio(unit1) --}}
  <div class="card_central d-flex justify-content-center row-1">
    <div class=" pt-5 mt-5">
      <div class="col-md-6">
       
          <a class="nav-link nav_letra" href="{{ route('ads.create') }}">
              
             <button class="nav_btn"> Crear publicación</button>
          </a>
        
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>