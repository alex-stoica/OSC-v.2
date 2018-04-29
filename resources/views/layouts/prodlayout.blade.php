@include('layouts.pheader')

      @yield ('discounts')
      @if ($discounts != [])
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">{{$t1}}</h6>
        @foreach ($discounts as $task)
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark"><a href="/product/{{$task->id}}">#{{$task->id}}. {{$task->name}}</a></strong>
              <a href="#">Add to cart, link</a>
            </div>
            <span class="d-block">
              Price: <strike>{{$task->price }} </strike> 
              <?php 
              $newprice = $task->price - $task->rpercent/100*$task->price;
              $newprice = number_format($newprice, 2, '.', ',');
              ?> {{ $newprice}}
              <b><font size="2.5" color="red"> -{{$task->rpercent}}%</font></b></span>
            <span class="d-block">
              <?php $description = implode(' ', array_slice(explode(' ', $task->description), 0, 10)); ?>
              {{ $description }}... 
            </span>
          </div>
        </div>
        @endforeach
        <small class="d-block text-right mt-3">
          <a href="/discounts">All discounts</a>
        </small>
      </div>
      @endif

      @if($suggestions != [])
      @yield ('content')
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>

        <div class="media text-muted pt-3">
          Recommender System based on users preferences (In Progress...)
        </div>
        @foreach ($suggestions as $task)
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">#{{$task->id}}.{{$task->name}} </strong>
              <a href="#">Add to cart, link</a>
            </div>
            <span class="d-block">
              Pret: <strike>{{$task->price }} </strike> 
              <?php 
              $newprice = $task->price - $task->rpercent/100*$task->price;
              $newprice = number_format($newprice, 2, '.', ',');
              ?> {{ $newprice}}
            <span class="d-block">
              <?php $description = implode(' ', array_slice(explode(' ', $task->description), 0, 10)); ?>
              {{ $description }}... 
            </span>
          </div>
        </div>
        @endforeach
        <small class="d-block text-right mt-3">
          <a href="/all-products">All products</a>
        </small>
      </div>
      @endif

@include('layouts.pfooter')
    