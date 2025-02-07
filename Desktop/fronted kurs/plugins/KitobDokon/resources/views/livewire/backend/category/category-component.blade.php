<div>
    <style>
        .card1{
            width: 500px;
            position: absolute;
            top: 0;
            left: 40%;
            transform: translateX(-50%);
            z-index: 4;
            border-radius: 20px;
        }
        .card-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .shows{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background-color: #95A0AF;
            opacity: 0.5;
            z-index:1;
        }
    </style>

    @if($show==1)
        <div class="shows"></div>
    @endif


    <div class="p-4">
        <header class="d-flex justify-content-between align-items-center ">
            <h5>{{__('works.categories')}}</h5>
            <div class="left">
                <a href="{{route('admin')}}"><span style="color:#000; "><i class="fa fa-home"></i> &nbsp; {{__('works.home')}} &nbsp; </span></a>/
                <a><span style="color:#000; "><i class="fa fa-list-alt"></i> &nbsp; {{__('works.categories')}} &nbsp; </span></a>
            </div>
        </header>

        <div class="card mt-2">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="search">
                    <form action="">
                        <div class="form-group">
                            <input type="search" wire:model.live="search" name="" id="" style="border: none;outline: none; padding:5px; border-radius: 5px; width: 500px;" placeholder="Category search">
                        </div>
                    </form>
                </div>

                <button type="button"  class="btn btn-primary" style="margin-left:400px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{__('works.newCategory')}}
                </button>

                <!-- Modal -->
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add a new category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <ul style="padding-left: 15px;" class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Uzbek</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">English</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Russian</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                <div class="form-group">
                                                    <label for="nameuz">Nomi</label>
                                                    <input type="text" name="name_uz" class="form-control" id="nameuz" placeholder="Categoriya nomini kiriting">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                                <div class="form-group">
                                                    <label for="nameeng">Name</label>
                                                    <input type="text" name="name_eng" class="form-control" id="nameeng" placeholder="Enter a category name">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                                <div class="form-group">
                                                    <label for="namerus">Имя</label>
                                                    <input type="text" name="name_ru" class="form-control" id="nameru" placeholder="Введите название категории">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @if($categoryEdit==1)
                @include('livewire.backend.category.show')
            @endif
            @if($categoryShow==1)
                @include('livewire.backend.category.show2')
            @endif
            @php $lang =app()->getLocale();@endphp
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>{{__('works.name')}}</th>
                        <th>{{__('works.status')}}</th>
                        <th>{{__('works.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($categories))
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>@if(isset($lang)) {{$category->name["$lang"]}}@else {{$category->name["uz"]}} @endif</td>
                                    <td><button type="button" wire:click="updateStatus({{$category->id}})" class="btn btn-{{$category->status=='active' ? 'success' : 'warning'}}">{{$category->status}}</button></td>
                                    <td>
                                        <button type="button" wire:click="showCategory({{$category->id}})" class="btn btn-sm btn-primary" ><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-sm btn-warning" wire:click="editCategory({{$category->id}})"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger" wire:click="deleteCategory({{$category->id}})"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @if(isset($categories)){{$categories->links()}} @endif
            </div>
        </div>
    </div>

</div>
