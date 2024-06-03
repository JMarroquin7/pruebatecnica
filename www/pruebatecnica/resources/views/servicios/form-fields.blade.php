<label>
    <br/>Fecha ingreso:
    <input type="date" name="fecha_ingreso">{{old('nombre', $servicio->fecha_ingreso)}}</input>
</label><br/>

@error('fecha_ingreso')
<small style="color: red">{{$message}}</small>
@enderror

<label>
    <br/>Estado:
    <input name="estado" type="text" value="{{old('estado', $servicio->estado)}}">
</label><br/>


@error('estado')
<small style="color: red">{{$message}}</small>
@enderror

<br/> <label>
    <br/>Diagnóstico:
    <input name="diagnostico" type="text" value="{{old('diagnostico', $servicio->diagnostico)}}">
</label><br/>

@error('diagnostico')
<small style="color: red">{{$message}}</small>
@enderror 

<label>
    <br/>Solución:
    <input name="solucion" type="text" value="{{old('solucion', $servicio->solucion)}}">
</label><br/>

@error('solucion')
<small style="color: red">{{$message}}</small>
@enderror 
