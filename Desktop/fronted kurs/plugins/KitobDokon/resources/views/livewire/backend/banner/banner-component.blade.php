<div>
    <style>
        th{
            text-transform: capitalize;
        }
        td,h5,span{
            text-transform: capitalize;
        }
    </style>
    @php $lang = app()->getLocale();@endphp

    <div class="p-4">
        <header class="d-flex justify-content-between align-items-center ">
            <h5>{{__('works.banner')}}</h5>
            <div class="left">
                <a href="{{route('admin')}}"><span style="color:#000; "><i class="fa fa-home"></i> &nbsp; {{__('works.home')}} &nbsp; </span></a>/
                <a><span style=" color:#000; text-transform: capitalize;   "><i class="fa fa-list-alt"></i> &nbsp; {{__('works.banner')}} &nbsp; </span></a>
            </div>
        </header>
            @if(isset($show))@if($show==1)
                @include('livewire.backend.show')
            @endif @endif
        @include('livewire.backend.banner.addBanner')
            @if($showBanner === 1)
                @include('livewire.backend.banner.show')
            @endif
        @if($updateBanner === 1)
            @include('livewire.backend.banner.update')
        @endif
        <div class="card mt-2">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="search">
                    <form action="">
                        <div class="form-group d-flex" style="gap:10px;">
                            <input type="search" wire:model.live="search" name="" id="" style="border: none;outline: none; padding:5px; border-radius: 5px; width: 500px;" placeholder="Product search">
                        </div>
                    </form>
                </div>
                <button type="button"  class="btn btn-primary" style="margin-left:260px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{__('works.newBanner')}}
                </button>
            </div>
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>{{__('works.name')}}</th>
                        <th>{{__('works.title')}}</th>
                        <th>{{__('works.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($banners))
                            @foreach($banners as $banner)
                            <tr>
                                <td>{{$banner->id}}</td>
                                <td>{{$banner->name['uz']}}</td>
                                <td>{{$banner->title['uz']}}</td>
                                <td>
                                    <button type="button" wire:click="bannerShow({{$banner->id}})" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" wire:click="bannerUpdate({{$banner->id}})" ><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" wire:click="delete({{$banner->id}})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{--               @if(isset($categories)){{$categories->links()}} @endif--}}
            </div>
        </div>
    </div>
</div>
