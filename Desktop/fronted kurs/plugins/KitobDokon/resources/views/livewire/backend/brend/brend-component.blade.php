<div>
    @if($show==1)
       @include('livewire.backend.show')
    @endif


    <div class="p-4">
        <header class="d-flex justify-content-between align-items-center ">
            <h5>{{__('works.brends')}}</h5>
            <div class="left">
                <a href="{{route('admin')}}"><span style="color:#000; "><i class="fa fa-home"></i> &nbsp; {{__('works.home')}} &nbsp; </span></a>/
                <a><span style="color:#000; "><i class="fa fa-list-alt"></i> &nbsp; {{__('works.brends')}} &nbsp; </span></a>
            </div>
        </header>

        <div class="card mt-2">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="search">
                    <form action="">
                        <div class="form-group">
                            <input type="search" wire:model.live="search" name="" id="" style="border: none;outline: none; padding:5px; border-radius: 5px; width: 500px;" placeholder="Brend search">
                        </div>
                    </form>
                </div>

                <button type="button"  class="btn btn-primary" style="margin-left:400px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{__('works.newBrend')}}
                </button>

                <!-- Modal -->
                @include('backend.brend.create')
            </div>
            @if($brendEdit==1)
                @include('livewire.backend.brend.edit')
            @endif
            @if($brendShow==1)
                @include('livewire.backend.brend.show')
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
                    @if(isset($brends))
                        @foreach($brends as $brend)
                            <tr>
                                <td>{{$brend->id}}</td>
                                <td style="text-transform: capitalize">{{$brend->name}}</td>
                                <td><button type="button" wire:click="updateBrend({{$brend->id}})" class="btn btn-{{$brend->status=='active' ? 'success' : 'warning'}}">{{$brend->status}}</button></td>
                                <td>
                                    <button type="button"  class="btn btn-sm btn-primary" wire:click="showBrend({{$brend}})" ><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning" wire:click="editBrend({{$brend}})"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" wire:click="deleteBrend({{$brend->id}})"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                @if(isset($brends)){{$brends->links()}} @endif
            </div>
        </div>
    </div>

</div>
