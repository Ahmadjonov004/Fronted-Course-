<div>
    <form action="{{route('product.update' , $id)}}" class="card1" style="margin:50px 0 0 300px;position: absolute !important;left: 30%;"  method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="modal-dialog" style=" background-color: #fff;border-radius: 20px;" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('works.newProduct')}}</h5>
                        <button type="button" class="btn-close"  wire:click="close()" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-1">
                            <div class="form-group co l-6">
                                <label for="nameuz">Name_uz</label>
                                <input type="text" name="name_uz" value="{{$name['uz']}}" class="form-control" id="nameuz" placeholder="Mahsulot nomini kiriting">
                            </div>
                            <div class="form-group col-6">
                                <label for="nameeng">Name_eng</label>
                                <input type="text" name="name_en" value="{{$name['en']}}" class="form-control" id="nameeng" placeholder="Enter a product name">
                            </div>
                            <div class="form-group col-12">
                                <label for="namerus">Name_ru</label>
                                <input type="text" name="name_ru" value="{{$name['rus']}}" class="form-control" id="nameru" placeholder="Введите название продукт">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="image">Image</label>
                            <input type="file" name="image[]" multiple class="form-control" id="image">
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="price">{{__('works.bodyPrice')}}</label>
                                <input type="number" class="form-control" value="{{$body_price}}" name="body_price" id="price" placeholder="Mahsulot narxini kiriting">
                            </div>
                            <div class="form-group col-6">
                                <label for="count">{{__('works.count')}}</label>
                                <input type="number" class="form-control" id="count" value="{{$count}}" name="count" placeholder="Mahsulot sonini kiriting">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="" style="text-transform: capitalize">{{__('categories')}}</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$cat==$category->name['uz'] ? 'selected' : ''}}>{{$category->name[app()->getLocale()]}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>{{__('works.brends')}}</label>
                                <select name="brend_id" id="" class="form-control">
                                    @foreach($brends as $brend)
                                        <option value="{{$brend->id}}" {{$bren==$brend->name ? 'selected' : ''}}>{{$brend->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uz">Description_uz</label>
                            <textarea name="description_uz" class="form-control" id="" cols="1" rows="1" placeholder="Mahsulotga tavif yozing">{{$description['uz']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="eng">Description_eng</label>
                            <textarea name="description_en"  class="form-control" id="eng" cols="1" rows="1" placeholder="Enter a description">{{$description['en']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="rus">Description_ru</label>
                            <textarea name="description_ru"  class="form-control"  id="" cols="1" rows="1" placeholder="Напишите описание товара">{{$description['rus']}}</textarea>
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <label for="">{{__('works.benfits')}}</label>--}}
                        {{--                            <input type="text" name="benfits_1" class="form-control benfits"  placeholder="Afzalliklarni yozing">--}}
                        {{--                            <div class="addBenfit"></div>--}}
                        {{--                            <button type="button" class="btn btn-sm btn-primary" id="benfitsBtn"><i class="fa fa-plus"></i></button>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="close()" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary m-1">Save</button>
                    </div>
                </div>
            </div>
    </form>
</div>
