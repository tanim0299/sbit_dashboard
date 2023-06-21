@extends('frontend.index')
@section('content')




<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
  <div class="row">

   <div class="col-sm-9 col-12">


     <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">ফটোগ্যালারি</li>
      </ul>
      <li class="list-group-item">
        <div class="row" uk-lightbox>


          @if(isset($data))
          @foreach($data as $d)

         <div class="col-sm-6 col-12 p-0">
           <a href="{{ url($d->image) }}"><img src="{{ url($d->image) }}" alt="" class="img-fluid photoimg"></a>
           <div class="uk-overlay uk-overlay-primary uk-position-bottom p-1 text-center">
             <p>{{ $d->title }}</p>
           </div>
         </div>


         @endforeach
         @endif


       </div>

     </li>



   </div>
 </div>




 @include('frontend.sidebar')






</div>
</div>
</div>



@endsection