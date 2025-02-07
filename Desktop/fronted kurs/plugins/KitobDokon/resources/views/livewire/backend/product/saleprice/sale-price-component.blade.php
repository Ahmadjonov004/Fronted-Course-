<div>
    <button type="button" wire:click="showSalePrice({{$id}})" class="btn btn-sm btn-info"><i class="fa-solid fa-sack-dollar"></i></button>

    @if(isset($saleShow))
        @if($saleShow == 1)
            @include('livewire.backend.product.saleprice.salePrice')
        @endif
    @endif
    @if(isset($show))
        @if($show == 1)
            @include('livewire.backend.show')
        @endif
    @endif
</div>
