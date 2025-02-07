<form action="{{route('brend.update' , $id)}}" method="post">
    @csrf
    @method('PUT')
        <div class="card1" style="position:absolute;left: 0;">
            <div class="modal-content">
                <div class="card-header" style="background-color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Edit brends </h5>
                    <button type="button" wire:click="close()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body" style="background-color: #fff;">
                    <div class="form-group">
                        <label for="name">{{__('works.name')}}</label>
                        <input type="text" name="name" value="{{$name}}" class="form-control" placeholder="Brend nomini kiriting">
                    </div>
                </div>
                <div style="background-color: #fff;" class="card-footer">
                    <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
</form>
