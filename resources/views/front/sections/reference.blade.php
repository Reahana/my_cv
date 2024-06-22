<h3 class="bg-light text-decoration-underline">Reference:</h3>


     <div class="container">
         <div class="row">
             @foreach($references as $reference)

                 <div class="col-6 border border-dark">
                     <p>
                         {{$reference->name}} <br>
                         {{$reference->post}} <br>
                         {{$reference->company}} <br>
                         Mobile: +880{{$reference->mobile}}
                     </p>

                 </div>

             @endforeach
         </div>

     </div>
