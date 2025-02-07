<div>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="card-dialog card1" style="z-index: 3; position:absolute;left: 50%; background-color: white" >
            <div class="modal-content">
                <div class="card-header" style="background-color: #fff">
                    <h5 class="modal-title" id="exampleModalLabel">Show Banner</h5>
                    <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th><td>{{$id}}</td>
                        </tr>
                        <tr>
                            <th>Nomi uz</th><td>{{$name['uz']}}</td>
                        </tr>
                        <tr>
                            <th>Nomi en</th><td>{{$name['en']}}</td>
                        </tr>
                        <tr>
                            <th>Nomi ru</th><td>{{$name['rus']}}</td>
                        </tr>
                        <tr>
                            <th>Rasmi</th><td><img src="/storage/banner_img/{{$image}}" width="100px" alt=""></td>
                        </tr>
                        <tr>
                            <th>Sarlavha uz</th><td>{{$title['uz']}}</td>
                        </tr>
                        <tr>
                            <th>Sarlavha en</th><td>{{$title['en']}}</td>
                        </tr>
                        <tr>
                            <th>Sarlavha ru</th><td>{{$title['rus']}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer" style="background-color: #fff;padding: 0 10px 5px 10px;">
                    <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
