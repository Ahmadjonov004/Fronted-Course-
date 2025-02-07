<div>
    <div class="card1" style="position:absolute;top: 0;">
        <div class="card-header" style="background-color: #fff;">
            <h5 class="modal-title" id="exampleModalLabel">Mahsulotga narx belgilash</h5>
            <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div>
            <form action="">
                <div class="form-group">
                    <label for="body">Tan narxi</label>
                    <input type="number" id="body" disabled class="form-control" name="sale_price" value="{{$price}}">
                </div>
                <div class="form-group">
                    <label for="price">Foyda foizini kiriting(%)</label>
                    <input type="number" id="price" class="form-control" wire:model.live="num" name="">
                </div>
                <div class="form-group">
                    <label for="sale">Mahsulotni sotiladigan narxi</label>
                    <input type="number" name="sale_price" disabled  class="form-control" value="{{$sale_price}}">
                </div>
            </form>
        </div>
        <div class="card-footer" style="background-color: #fff">
            <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="salePriceSave({{$id}})" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
