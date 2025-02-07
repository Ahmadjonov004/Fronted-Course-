<div>
    <style>
        th{
            text-transform: capitalize;
        }
        td{
            text-transform: capitalize;
        }
    </style>
   <div class="p-4">
       <header class="d-flex justify-content-between align-items-center ">
           <h5>{{__('works.products')}}</h5>
           <div class="left">
               <a href="{{route('admin')}}"><span style="color:#000; "><i class="fa fa-home"></i> &nbsp; {{__('works.home')}} &nbsp; </span></a>/
               <a><span style="color:#000; "><i class="fa fa-list-alt"></i> &nbsp; {{__('works.products')}} &nbsp; </span></a>
           </div>
       </header>
       @if(isset($show))@if($show==1)
           @include('livewire.backend.show')
       @endif @endif

       @if(isset($productShow)) @if($productShow==1)
            @include('livewire.backend.product.show')
       @endif @endif
       @if(isset($productUpdate)) @if($productUpdate==1)
           @include('livewire.backend.product.update')
       @endif @endif
       <div class="card mt-2">
           <div class="card-header d-flex align-items-center justify-content-between">
               <div class="search">
                   <form action="">
                       <div class="form-group d-flex" style="gap:10px;">
                           <input type="search" wire:model.live="search" name="" id="" style="border: none;outline: none; padding:5px; border-radius: 5px; width: 500px;" placeholder="Product search">
                           <button type="button" class="btn btn-lg"><i class="fa-solid fa-arrow-down-a-z"></i></button>
                           <button type="button" class="btn btn-lg"><i class="fa-solid fa-coins"></i></button>
                       </div>
                   </form>
               </div>

               <button type="button"  class="btn btn-primary" style="margin-left:260px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   {{__('works.newProduct')}}
               </button>

               @include('livewire.backend.product.create')
           </div>

           @php $lang = app()->getLocale();@endphp
           <div class="card-body">
               <table class="table table-bordered ">
                   <thead>
                   <tr>
                       <th>Id</th>
                       <th>{{__('works.name')}}</th>
                       <th>{{__('works.bodyPrice')}}</th>
                       <th>{{__('works.salePrice')}}</th>
                       <th>{{__('works.discountPrice')}}</th>
                       <th>{{__('works.count')}}</th>
                       <th>{{__('works.category')}}</th>
                       <th>{{__('works.brend')}}</th>
                       <th>{{__('works.status')}}</th>
                       <th>{{__('works.action')}}</th>
                   </tr>
                   </thead>
                   <tbody>
                   @if(isset($products))
                       @foreach($products as $product)
                           <tr>
                               <td>{{$product->id}}</td>
                               <td>{{$product->name[app()->getLocale()]}}</td>
                               <td>{{$product->body_price}} UZS</td>
                               <td>{{$product->sale_price == NULL ? '---' : $product->sale_price}} UZS</td>
                               <td>{{$product->discount_price == NULL ? '---' : $product->discount_price}} UZS</td>
                               <td>{{$product->count}} ta</td>
                               <td>{{$product->category->name[app()->getLocale()]}}</td>
                               <td>{{$product->brend->name}}</td>
                               <td><button wire:click="active({{$product->id}})" type="button" class="btn btn-sm btn-{{$product->status=='active'?'success':'warning'}}">{{$product->status}}</button></td>
                               <td>
                                   <button type="button" wire:click="showProduct({{$product->id}})"  class="btn btn-sm btn-primary" ><i class="fa fa-eye"></i></button>
                                   <button class="btn btn-sm btn-warning" wire:click="updateProduct({{$product->id}})"><i class="fa fa-edit"></i></button>
                                   @livewire('backend.product.saleprice.sale-price-component',['id' => $product->id])
                                   <button type="button" class="btn btn-sm btn-secondary "><i class="fa-solid fa-percent"></i></button>
                                   <button class="btn btn-sm btn-danger" wire:click="destroy({{$product->id}})" ><i class="fa fa-trash"></i></button>
                               </td>
                           </tr>
                       @endforeach
                   @endif
                   </tbody>
               </table>
               @if(isset($products)){{$products->links()}} @endif
           </div>
       </div>
   </div>
</div>
