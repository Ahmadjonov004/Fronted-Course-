<div>
    <style>
        .modal-content{
            background-color: #fff;
        }
    </style>
    <form action="{{route('banner.update' , $id)}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method("PUT")
            <div class="modal-dialog card1" style="left: 20%;left: 20%; role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('works.newBanner')}}</h5>
                        <button type="button" class="close" wire:click="close()" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" >&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="text">Nomi uz</label>
                                <input type="text" id="text" name="name_uz" value="{{$name['uz']}}" class="form-control" placeholder="Banner nomini kiriting">
                            </div>
                            <div class="form-group col-6">
                                <label for="texten">Nomi en</label>
                                <input type="text" id="texten" name="name_en" value="{{{$name['en']}}}" class="form-control" placeholder="Banner nomini kiriting">
                            </div>
                            <div class="form-group">
                                <label for="textru">Nomi ru</label>
                                <input type="text" id="textru" name="name_ru" value="{{$name['rus']}}" class="form-control" placeholder="Banner nomini kiriting">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group">
                                <label for="title">Sarlavha uz</label>
                                <textarea type="text"  id="title" name="title_uz" class="form-control" placeholder="Banner sarlavhasini kiriritng" cols="2" rows="2">{{$title['uz']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="titleen">Sarlavha en</label>
                                <textarea type="text" id="titleen"  name="title_en" class="form-control" placeholder="Banner sarlavhasini kiriritng" cols="2" rows="2">{{$title['en']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="titleru">Sarlavha ru</label>
                                <textarea type="text" id="titleru"  name="title_ru" class="form-control" placeholder="Banner sarlavhasini kiriritng" cols="2" rows="2">{{$title['rus']}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img">Rasmi</label><br><img src="/storage/banner_img/{{$image}}" width="100px" alt="">
                            <input type="file" name="image" id="img" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="close()" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary mx-2">Save</button>
                    </div>
                </div>
            </div>
    </form>
</div>
