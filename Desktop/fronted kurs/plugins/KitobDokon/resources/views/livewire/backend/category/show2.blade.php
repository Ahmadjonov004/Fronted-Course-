<div>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="card-dialog card1" style="z-index: 3; background-color: white" >
            <div class="modal-content">
                <div class="card-header" style="background-color: #fff">
                    <h5 class="modal-title" id="exampleModalLabel">Show Category</h5>
                    <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th><td>{{$id}}</td>
                        </tr>
                        <tr>
                            <th>Nomi</th><td>{{$name['uz']}}</td>
                        </tr>
                        <tr>
                            <th>Name</th><td>{{$name['en']}}</td>
                        </tr>
                        <tr>
                            <th>Имя</th><td>{{$name['rus']}}</td>
                        </tr>
                        <tr>
                            <th>Status</th><td>{{$status}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer" style="background-color: #fff">
                    <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
