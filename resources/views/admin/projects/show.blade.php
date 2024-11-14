@extends("layouts.app")



@section("content")
<h1>{{$project->title}} Page:</h1>
<div class="container">
    <div class="row justify-content-center">
     
    
        <div class="card col-12  p-4">
            
            <div class="card-body">

             

              <h1 class="card-title  fw-bold">Progetto: {{$project->title}}</h1>

              @forelse($project->technologies as $technology)
              <span class="badge text-bg-primary">
                {{ $technology->name }}
              </span>
              
              @empty
              <span>Non sono individuate tecnologie</span>
              @endforelse
              <span class="badge text-bg-warning">{{ $project->type->name }}</span>

              <p class="card-title">Descrizione: {{$project->content}}</p>
              
              @if($project->image)
              <img  src="{{ asset("/storage/" . $project->image) }}" alt="{{ $project->title }}">
              @else
              <p>Non ci sono immagini qui...</p>
              @endif
            
        
              <div>Link: <a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a></div>
          

            </div>
          </div>
      
        </div>
    </div>
</div>

@endsection