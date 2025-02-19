<x-app-layout>
  @section('styles')
      <link rel="stylesheet" href="{{ asset('css/part-details.css') }}">
  @endsection

  <div class="container">
      <div id="part-details" class="part-details">
          <div class="part-card" style="width: 50rem"> 
              <img src="{{ $part['image'] ?? 'https://placehold.co/300x300' }}" alt="{{ $part['name'] }}" class="part-image">
              <div class="part-info">
                  <h1 class="part-name">{{ $part['name'] }}</h1>
                  <p class="part-description">{{ $part['description'] }}</p>
                  <p class="part-price">${{ number_format($part['price'], 2) }}</p>
                  <p class="part-stock">Código da peça: {{ $part['part_number'] }}</p>
                  <p class="part-categories">Categorias: {{ implode(', ', $part->categories->pluck('name')->toArray()) }}</p>
                  <a href="{{ redirect()->back()->getTargetUrl() }}" class="button">Voltar para o catálogo</a>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>