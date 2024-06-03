<label>
    <br/>Nombre:
    <textarea name="nombre">{{old('nombre', $cliente->nombre)}}</textarea>
</label><br/>

@error('nombre')
<small style="color: red">{{$message}}</small>
@enderror

<label>
    <br/>Teléfono:
    <input name="telefono" type="text" value="{{old('telefono', $cliente->telefono)}}">
</label><br/>

@error('telefono')
<small style="color: red">{{$message}}</small>
@enderror

<label>
    <br/>Email:
    <input name="email" type="text" value="{{old('email', $cliente->email)}}">
</label><br/>

@error('email')
<small style="color: red">{{$message}}</small>
@enderror 
