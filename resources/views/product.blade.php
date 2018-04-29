@extends('layouts.pheader')

<div class="my-3 p-3 bg-black rounded box-shadow">
	<div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">{{$product->id}}. {{$product->name}}</h6>
		<div class="my-3 p-3 bg-white rounded box-shadow">
			Description: {{$product->description}}
			<br>
			Price:
			<span>
			<strike>{{$product->price }} </strike> 
	              <?php 
	              $newprice = $product->price - $product->rpercent/100*$product->price;
	              $newprice = number_format($newprice, 2, '.', ',');
	              ?> {{ $newprice}}
	              <b><font size="2.5" color="red"> -{{$product->rpercent}}%</font></b></span>
			<br>
			Rating: {{$product->rating}}
			<hr>
			@if (Auth::user()->products->find($product->id))
			<form method = "POST" action = "/product/{{$product->id}}">
				{{ method_field('delete') }}
		    	{{csrf_field()}}
		    	<div class="form-group">
		        <button type = "submit" class = "btn btn-secondary"><b>Remove from cart</b></button>
		    	</div>
		    </form>
		    @else
		    <form method = "POST" action = "/product/{{$product->id}}/aaa">
		    	{{csrf_field()}}
		    	<div class="form-group">
		        <button type = "submit" class = "btn btn-primary"><b>Add to cart</b></button>
		    	</div>
		    </form>
		    @endif 

		</div><br>
			<h6 class="border-bottom border-gray pb-2 mb-0">Comments: </h6>

		@foreach($comments as $c)
			<div class="my-3 p-3 bg-white rounded box-shadow">
		        <div class="media text-muted pt-3">
		          	<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
		            	<div class="d-flex justify-content-between align-items-center w-100">
		              		<strong class="text-gray-dark">{{$c->description}}</strong>
		            	</div>
		         	</div>
					{{ date('F d, Y', strtotime($c->updated_at)) }}
	        	</div>
	        	<small class="d-block text-right mt-3">
		          	<b><i> <?php 
		            $usr = App\User::find($c->user_id);
		            $u = $usr->name;
		            ?> {{$u}}
		            </i></b>
	        	</small>
	      	</div>
      	@endforeach
      <br><hr><br>
	  	<div class="form-group d-block mt-3 text-center" >
		    <form method = "POST" action = "/product/{{$product->id}}/add-comment">
		    	{{csrf_field()}}
		        <textarea rows="3" class = "form-control" id = "content" name = "content" required="TRUE"></textarea>
		        <br><br>
		        <button type = "submit" class = "btn btn-secondary"><b>Comment</b></button>
		    </form>
	  	</div> 
	</div>
</div></div>
@extends('layouts.pfooter')