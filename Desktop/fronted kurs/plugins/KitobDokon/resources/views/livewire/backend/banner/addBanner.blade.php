<div>
    <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('works.newBanner')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="text">Nomi uz</label>
                                <input type="text" id="text" name="name_uz" class="form-control" placeholder="Banner nomini kiriting">
                            </div>
                            <div class="form-group col-6">
                                <label for="texten">Nomi en</label>
                                <input type="text" id="texten" name="name_en" class="form-control" placeholder="Banner nomini kiriting">
                            </div>
                            <div class="form-group">
                                <label for="textru">Nomi ru</label>
                                <input type="text" id="textru" name="name_ru" class="form-control" placeholder="Banner nomini kiriting">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group">
                                <label for="title">Sarlavha uz</label>
                                <textarea type="text" id="title" name="title_uz" class="form-control" placeholder="Banner sarlavhasini kiriritng" cols="2" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="titleen">Sarlavha en</label>
                                <textarea type="text" id="titleen" name="title_en" class="form-control" placeholder="Banner sarlavhasini kiriritng" cols="2" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="titleru">Sarlavha ru</label>
                                <textarea type="text" id="titleru" name="title_ru" class="form-control" placeholder="Banner sarlavhasini kiriritng" cols="2" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img">Rasmi</label>
                            <input type="file" name="image" id="img" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
