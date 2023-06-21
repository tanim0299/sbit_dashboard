@extends('frontend.index')
@section('content')







<div class="container">
  <div class="col-sm-12 col-12" id="mainpage">


    @if(count($data)>0)

    <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
      <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">
         @if($data[0]->type == 1)
         প্রসপেক্টাস
         @elseif($data[0]->type == 2)
         ভর্তির নিয়মাবলী
         @elseif($data[0]->type == 3)
         ভর্তির পদ্ধতি
         @elseif($data[0]->type == 4)
         ভর্তি পরীক্ষার ফলাফল
         @else
         ভর্তির পরীক্ষার প্রশ্নপত্র
         @endif

       </li>
       <li class="list-group-item">

        <div class="table table-responsive">
          <table id="example" class="display table-bordered" style="width:100%">
            <thead>
              <tr style="font-size: 15px;">
                <th>ক্রমিক</th>
                <th>প্রকাশের তারিখ</th>
                <th>শিরোনাম</th>
                <th>ডাউনলোড</th>
              </tr>
            </thead>
            <tbody>


              @php
              $i = 1;
              @endphp
              @if(isset($data))
              @foreach($data as $d)

              <tr style="font-size: 12px;">
                <td>{{ $i++ }}</td>
                <td>{{ date('d M Y', strtotime($d->date)); }}</td>
                <td>{{ $d->title }}</td>
                <td><a  href="{{ asset($d->image) }}" class="btn btn-sm btn-danger" download="" ><span uk-icon="icon: file-pdf; ratio: 1"></span></a></td>
              </tr>


              @endforeach
              @endif



            </table>

          </div>

        </li>

      </ul>


    </div>

    @else
     Not Found...

    @endif




</div>
</div>







@endsection