<x-app-layout>

      <div id="parts-list" class="parts-grid">
        @foreach($parts as $part)
            <div class="part-card">
                <img src="{{ $part['image'] ?? 'https://placehold.co/300x300' }}" alt="{{ $part['name'] }}" class="part-image">
                <div class="part-info">
                    <h3 class="part-name">{{ $part['name'] }}</h3>
                    <p class="part-description">{{ $part['description'] }}</p>
                    <p class="part-price">${{ number_format($part['price'], 2) }}</p>
                    <a href="{{ route('part.details', $part) }}" class="button">Ver detalhes</a>
                    </div>
            </div>
        @endforeach
    </div>
  


      <div class="pagination">
        <a href="#" class="next">
           {{ $parts->links() }}
          <i class="fa fa-angle-right"></i>
        </a>
      </div>

  </x-app-layout>