<html>

<form action="{{route('trial.create')}}" method="post">
    @csrf
    <div class="flex">
        <div>

            <input style="display: flex; flex-direction: column; margin-top: 2%; margin-bottom: 2%" value="{{old('story')}}" name="story" placeholder="story">
            @error('story')
            {{$message}}
            @enderror
        </div>
        <div>
            <input name="seriously" placeholder="seriously" value="{{old('seriously')}}" style="margin-bottom: 2%">
            @error('seriously')
            {{$message}}
            @enderror
        </div>
        <button type="submit" style="color: cadetblue"> submit</button>
    </div>
</form>


</html>
<style>
    .active{
        color: red;
    }
</style>
