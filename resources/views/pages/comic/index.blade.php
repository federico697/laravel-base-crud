@extends('layouts.app')
@section('title-page', 'welcome')
@section('libreria')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>
@endsection
@section('main-content')
    <h1>index page comic</h1>
    <div>
      <a href="{{route(comics.create)}}"></a>
    </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">title</th>
                {{-- <th scope="col">description</th> --}}
                <th scope="col">thumb</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $elem)
                <tr>
                    <td>{{$elem->id}}</td>
                    <td>{{$elem->title}}</td>
                    {{-- <td>{{$elem->description}}</td> --}}
                    <td>
                        <img src="{{$elem->thumb}}" alt="{{$elem->title}}" width="50px">
                    </td>
                    <td>{{$elem->price}}</td>
                    <td>{{$elem->series}}</td>
                    <td>{{$elem->sale_date}}</td>
                    <td>{{$elem->type}}</td>
                    <td>
                      <a href="{{route('comics.show', $elem->id)}}">
                        <i class="fa-solid fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{$comics->links()}}
          </div>
    </div>
@endsection