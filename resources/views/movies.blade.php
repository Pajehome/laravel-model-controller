  @extends ('layout.base')
  @section ('cards')  
    <div class="row justify-content-center">
       @foreach ($movies as $movie)

       <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                <p class="card-text">{{$movie->nationality}}</p>
                <div class="row w-100 justify-content-between">
                    <h6 class="card-link col">{{$movie->date}}</h6>
                    <h6 class="card-link col">{{$movie->vote}}</h6>
                </div>
            </div>
       </div>
       
       @endforeach
    </div>
  @endsection    