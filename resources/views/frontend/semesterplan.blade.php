@extends('frontend.index')
@section('content')



<div class="container">
  <div class="col-sm-12 col-12" id="mainpage">


   <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
      <li class="list-group-item font-weight-bold bg-success text-light" id="about">সেমিস্টার প্ল্যান</li>
      <li class="list-group-item">

        <div class="table table-responsive">
          <table id="example" class="display table-bordered" style="width:100%">
            <thead>
              <tr style="font-size: 15px;">
                <th>ক্রমিক</th>
                <th>শিরোনাম</th>
                <th>বিভাগ</th>
                <th>সেমিস্টার</th>
                <th>শিফট</th>
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
                <td><a href="{{ asset($d->image) }}" target="blank" style="text-decoration: none;color: black">{{ $d->title }}</a></td>
                <td>{{ $d->department_name_bn }}</td>
                <td>{{ $d->semester_name_bn }}</td>
                <td>{{ $d->shift }}</td>
                <td><a  href="{{ asset($d->image) }}" class="btn btn-sm btn-danger" download="" ><img src="{{ asset("/") }}frontend/img/pdf_icon.png" class="img-fluid"></a></td>
              </tr>


              @endforeach
              @endif



            </table>

          </div>

        </li>

      </ul>
    </div>
  </div>





</div>
</div>







@endsection