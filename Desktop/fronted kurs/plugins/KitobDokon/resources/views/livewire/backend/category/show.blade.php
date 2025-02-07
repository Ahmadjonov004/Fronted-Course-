<div>
    <form action="{{route('category.update' , $id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-dialog card1" style="z-index: 3; background-color: white" >
            <div class="modal-content">
                <div class="card-header" style="background-color: #fff">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">

                        <div class="form-group">
                            <ul class="nav nav-pills mb-3" id="pills-tab" style="padding: 15px;" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="uz-tab" data-bs-toggle="pill" data-bs-target="#uz" type="button" role="tab" aria-controls="uz" aria-selected="true">Uzbek</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="eng-tab" data-bs-toggle="pill" data-bs-target="#eng" type="button" role="tab" aria-controls="eng" aria-selected="false">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="rus-tab" data-bs-toggle="pill" data-bs-target="#rus" type="button" role="tab" aria-controls="rus" aria-selected="false">Russian</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="uz" role="tabpanel" aria-labelledby="uz-tab" tabindex="0">
                                    <div class="form-group">
                                        <label for="nameuz">Nomi</label>
                                        <input type="text" name="name_uz" value="{{$name['uz']}}" class="form-control" id="nameuz" placeholder="Categoriya nomini kiriting">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="eng" role="tabpanel" aria-labelledby="eng-tab" tabindex="0">
                                    <div class="form-group">
                                        <label for="nameeng">Name</label>
                                        <input type="text" name="name_eng"  class="form-control" value="{{$name['en']}}" id="nameeng" placeholder="Enter a category name">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="rus" role="tabpanel" aria-labelledby="rus-tab" tabindex="0">
                                    <div class="form-group">
                                        <label for="namerus">Имя</label>
                                        <input type="text" name="name_ru"  value="{{$name['rus']}}" class="form-control" id="namerus" placeholder="Введите название категории">
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="card-footer" style="background-color: #fff">
                    <button type="button" wire:click="close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </form>
</div>
