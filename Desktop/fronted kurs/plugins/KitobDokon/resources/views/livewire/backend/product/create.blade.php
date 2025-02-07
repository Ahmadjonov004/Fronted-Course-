<div>
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('works.newProduct')}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row mb-1">
                           <div class="form-group col-6">
                               <label for="nameuz">Name_uz</label>
                               <input type="text" name="name_uz" class="form-control" id="nameuz" placeholder="Mahsulot nomini kiriting">
                           </div>
                           <div class="form-group col-6">
                               <label for="nameeng">Name_eng</label>
                               <input type="text" name="name_eng" class="form-control" id="nameeng" placeholder="Enter a product name">
                           </div>
                           <div class="form-group col-12">
                               <label for="namerus">Name_ru</label>
                               <input type="text" name="name_ru" class="form-control" id="nameru" placeholder="Введите название продукт">
                           </div>
                       </div>
                        <div class="form-group col-12">
                            <label for="image">Image</label>
                            <input type="file" name="image[]" multiple class="form-control" id="image">
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="price">{{__('works.bodyPrice')}}</label>
                                <input type="number" class="form-control" name="body_price" id="price" placeholder="Mahsulot narxini kiriting">
                            </div>
                            <div class="form-group col-6">
                                <label for="count">{{__('works.count')}}</label>
                                <input type="number" class="form-control" id="count" name="count" placeholder="Mahsulot sonini kiriting">
                            </div>
                        </div>
                       <div class="row">
                           <div class="form-group col-6">
                               <label for="" style="text-transform: capitalize">{{__('categories')}}</label>
                               <select name="category_id" id="" class="form-control">
                                   @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name[app()->getLocale()]}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group col-6">
                               <label>{{__('works.brends')}}</label>
                               <select name="brend_id" id="" class="form-control">
                                   @foreach($brends as $brend)
                                       <option value="{{$brend->id}}">{{$brend->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                        <div class="form-group">
                            <label for="uz">Description_uz</label>
                            <textarea name="description_uz" class="form-control" id="" cols="1" rows="1" placeholder="Mahsulotga tavif yozing"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="eng">Description_eng</label>
                            <textarea name="description_eng" class="form-control" id="eng" cols="1" rows="1" placeholder="Enter a description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rus">Description_ru</label>
                            <textarea name="description_ru" class="form-control"  id="" cols="1" rows="1" placeholder="Напишите описание товара"></textarea>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="">{{__('works.benfits')}}</label>--}}
{{--                            <input type="text" name="benfits_1" class="form-control benfits"  placeholder="Afzalliklarni yozing">--}}
{{--                            <div class="addBenfit"></div>--}}
{{--                            <button type="button" class="btn btn-sm btn-primary" id="benfitsBtn"><i class="fa fa-plus"></i></button>--}}
{{--                        </div>--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
{{--    <script>--}}
{{--        let btn = document.querySelector('#benfitsBtn')--}}
{{--        let add = document.querySelector('.addBenfit');--}}
{{--        let num=1;--}}
{{--        btn.addEventListener('click' , ()=>{--}}
{{--            newDiv = document.createElement('div');--}}
{{--            newDiv.setAttribute('class' , 'd-flex align-items-center')--}}
{{--            add.appendChild(newDiv)--}}
{{--            newInput = document.createElement('input');--}}
{{--            newInput.setAttribute('type' , 'text');--}}
{{--            newInput.setAttribute('name' , `benfits_${++num}`);;--}}
{{--            newInput.setAttribute('class' , 'form-control benfits')--}}
{{--            newInput.setAttribute('placeholder', 'Afzalliklarni yozing')--}}
{{--            newBtn = document.createElement('button');--}}
{{--            newBtn.setAttribute('class' , 'btn  btn-danger')--}}
{{--            newBtn.setAttribute('type' , 'button')--}}
{{--            newI = document.createElement('i');--}}
{{--            newI.setAttribute('class' , 'fa fa-trash');--}}
{{--            newBtn.appendChild(newI)--}}
{{--            newDiv.appendChild(newInput);--}}
{{--            newDiv.appendChild(newBtn)--}}

{{--            newBtn.addEventListener('click' , ()=>{--}}
{{--                newDiv.removeChild(newInput);--}}
{{--                newDiv.removeChild(newBtn);--}}
{{--                add.removeChild(newDiv)--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
</div>
