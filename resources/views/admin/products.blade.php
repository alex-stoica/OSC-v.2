@include('layouts.pheader')

<div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">ceva</h6>
        @foreach ($products as $p)
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark"><a href="/product/{{$p->id}}">#{{$p->id}}. {{$p->name}}</a></strong>
              <a href="/admin/product/{{$p->id}}">EDIT PRODUCT</a>
            </div>
            <span class="d-block">
              Price: <strike>{{$p->price }} </strike> 
              <?php 
              $newprice = $p->price - $p->rpercent/100*$p->price;
              $newprice = number_format($newprice, 2, '.', ',');
              ?> {{ $newprice}}
              <b><font size="2.5" color="red"> -{{$p->rpercent}}%</font></b></span>
            <span class="d-block">
              {{$p->description}}
            </span>
          </div>
        </div>
        @endforeach
      </div>


@include('layouts.pfooter')