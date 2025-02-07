<div>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="card-dialog card3" style="z-index: 3; width: 800px; position: absolute;top: 100px;left: 55%;transform: translateX(-50%);z-index: 4;border-radius: 20px; background-color: white" >
            <div class="modal-content">
                <div class="card-header" style="background-color: #fff;padding:10px;">
                    <h5 class="modal-title" id="exampleModalLabel">Show Category</h5>
                    <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th><td>{{$id}}</td>
                        </tr>
                        <tr>
                            <th>Nomi</th><td>{{$name['uz']}}  || {{$name['en']}}  ||  {{$name['rus']}} </td>
                        </tr>
                        <tr>
                            <th>Rasmi</th><td> @foreach($images as $image)
                                <img width="100px" src="/storage/product_img/{{$image['path']}}" alt="">
                                @endforeach</td>
                        </tr>
                        <tr>
                            <th>Sotib olingan narx</th><td>{{$body_price}} UZS</td>
                        </tr>
                        <tr>
                            <th>Sotuvdagi narxi</th><td>{{$sale_price}} UZS</td>
                        </tr>
                        <tr>
                            <th>Chegirmadagi narx</th><td>{{$discount_price}} UZS</td>
                        </tr>
                        <tr>
                            <th>Mahsulotni soni</th><td>{{$count}} ta</td>
                        </tr>
                        <tr>
                            <th>Kategoriya</th><td>{{$category}}</td>
                        </tr>
                        <tr>
                            <th>Brend</th><td>{{$brend}}</td>
                        </tr>
                        <tr>
                            <th>Status</th><td>{{$status}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer" style="background-color: #fff;padding: 10px">
                    <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
