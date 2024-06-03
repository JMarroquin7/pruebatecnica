<label>
    <br/>Tipo:
    <input name="tipo" type="text" value="{{old('tipo', $equipo->tipo)}}">
</label><br/>

@error('tipo')
<small style="color: red">{{$message}}</small>
@enderror

<label>
    <br/>Modelo:
    <input name="modelo" type="text" value="{{old('modelo', $equipo->modelo)}}">
</label><br/>

@error('modelo')
<small style="color: red">{{$message}}</small>
@enderror 
