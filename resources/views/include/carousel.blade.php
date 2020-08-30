<div id="themsccarousel" class="carousel slide container container-sm container-md container-lg" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($carousels as $carousel)
        <li data-target="#themsccarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }} card border rounded"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($carousels as $carousel)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ asset('carousel/' . $carousel->image) }}" class="border rounded-lg carousel-img-h card-img w-100" alt="{{$carousel->title}}" >
            <div class="carousel-caption">
                <h5>{{$carousel->title}}</h5>
                <p>{{$carousel->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#themsccarousel" role="button" data-slide="prev">
        <span class="fas fa-arrow-left fa-2x"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#themsccarousel" role="button" data-slide="next">
        <span class="fas fa-arrow-right fa-2x"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
