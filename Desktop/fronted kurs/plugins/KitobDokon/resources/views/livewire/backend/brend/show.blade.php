<div>
    <div class="card1" style="position:absolute;left: 0;">
            <div class="card-header" style="background-color: #fff">
                <h5 class="modal-title" id="exampleModalLabel">Show Brend</h5>
                <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th><td>{{$id}}</td>
            </tr>
            <tr>
                <th>Name</th><td>{{$name}}</td>
            </tr>
            <tr>
                <th>Status</th><td>{{$status}}</td>
            </tr>
        </table>
        <div class="card-footer" style="background-color: #fff">
            <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
