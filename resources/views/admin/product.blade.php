@include('layouts.pheader')
<div class="my-3 p-3 bg-white rounded box-shadow">
        <h4 class="border-bottom border-gray pb-2 mb-0">ID: #{{$p->id}}
        </h4>

        <hr>

        <div class="form-group d-block mt-3 text-left" >
          <form method = "POST" action = "/admin/product/{{$p->id}}">
            {{csrf_field()}}
            {{ method_field('patch') }}
              
        <div class="media text-muted pt-3">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              Name: {{$p->name}} 
            </div>
            <input id="name" name = "name" placeholder="{{$p->name}}">
            <hr>
            <div class="d-flex justify-content-between align-items-center w-100">
              Description: {{$p->description}} 
            </div>

            <input id="description" name = "description" placeholder="{{$p->description}}"><hr>
            <span class="d-block">
              Price: <strike>{{$p->price }} </strike> 
              <?php 
              $newprice = $p->price - $p->rpercent/100*$p->price;
              $newprice = number_format($newprice, 2, '.', ',');
              ?> {{ $newprice}}
              </span>

              <input id="price" name = "price" placeholder="{{$p->price}}"><hr>

              <span class="d-block">
              Discount: <b><font size="2.5" color="red"> -{{$p->rpercent}}%</font></b></span>

              <input id="rpercent" name = "rpercent" placeholder="{{$p->rpercent}}"><hr>

              <span class="d-block">
              Quantity: {{$p->quantity}}</span>

              <span class="d-block">
              Rating: {{$p->rating}}</span>
              <br>


            <button type = "submit" class = "btn btn-secondary"><b>UPDATE</b></button>
          </form>
          
        </div> 
          </div>
          <form method = "POST" action = "/admin/product/{{$p->id}}">
            {{csrf_field()}}
            {{ method_field('delete') }}


          <button type = "submit" class = "btn btn-danger"><b>DELETE PRODUCT</b></button>
          </form>

        </div>
      </div>


@include('layouts.afooter')