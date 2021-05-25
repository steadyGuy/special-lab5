<a href="/tours-types/{{$tourType->slug}}">
    <div class="card">
        <img src="{{URL::asset($tourType->image)}}" alt="">
        <h3>0{{$key}}</h3>
        <p>{{$tourType->title}} <br> Смотреть</p>
        <img class="arrow" src="{{URL::asset('/img/Arrow.svg')}}" alt="arrow">
    </div>
</a>
