<html>


<div style="color: chartreuse">
    @if(session('status'))
        <div class=" ">
            {{session('status')}}
        </div>
    @endif
</div>
@foreach($idea as $fololo)
    <div>
        {{$fololo->story}}     -    <a href="{{route('trial.edit', $fololo->id)}}" type="button">edit</a>
    </div>

@endforeach
</html>
