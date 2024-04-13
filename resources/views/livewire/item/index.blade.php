<x-bs.container class="my-5">
    @foreach ($items as $item)
        <div wire:key='{{ $item->id }}' class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-3">
            <div class="card text-center">
                <img src="{{ asset($item->itemPics->first()?->url ?? 'img/not-found.jpeg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->category->name }}</h5>
                    <h6>{{ $item->description }}</h6>
                    <p class="card-text">{{ $item->description }}.</p>


                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-secondary">Stock: {{ $item->stock }}</span>
                        <span class="text-danger fs-4 fw-bold">S/.{{ $item->price }}</span>
                    </div>

                    <button data-bs-toggle="modal" data-bs-target="#show-modal-item-{{ $item->id }}" type="button"
                        class="btn btn-primary">Ver detalles</button>
                </div>
            </div>
            <livewire:item.show-modal :$item :key="'show-' . $item->id"  @show-modal="$refresh" />
        </div>
    @endforeach
    {{ $items->onEachSide(0)->links() }}
</x-bs.container>