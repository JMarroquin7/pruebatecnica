<label>
    <br/>Nombre:
    <input name="nombre" type="text" value="{{old('nombre', $marca->nombre)}}">
</label><br/>

@error('nombre')
<small style="color: red">{{$message}}</small>
@enderror

<label>
    <br/>País:
    <input name="pais" type="text" value="{{old('pais', $marca->pais)}}">
</label><br/>

@error('pais')
<small style="color: red">{{$message}}</small>
@enderror 
