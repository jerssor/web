<div class="form-group">
    {!! Form::label('NIT', 'NIT') !!}
    {!! Form::text('NIT', null, ['class'=>'form-control', 'placeholder' => 'Ingresar el NIT del hospedaje']) !!}
    @error('NIT')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre') !!}
    {!! Form::text('Nombre', null, ['class'=>'form-control', 'placeholder' => 'Ingresar el Nombre del hospedaje']) !!}
    
    @error('Nombre')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder' => 'Ingresar el Nombre del hospedaje','readonly']) !!}
    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

{!! Form::hidden('user_id', auth()->user()->id)!!}
    
<div class="form-group">  
    {!! Form::label('Telefono', 'Telefono') !!}
    {!! Form::text('Telefono', null, ['class'=>'form-control', 'placeholder' => 'Ingresar el Telefono del hospedaje']) !!}
    
    @error('Telefono')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div> 
<div class="form-group">  
    {!! Form::label('Correo', 'Correo') !!}
    {!! Form::text('Correo', null, ['class'=>'form-control', 'placeholder' => 'Ingresar el Correo del hospedaje']) !!}
    
    @error('Correo')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div> 
<div class="form-group">   
    {!! Form::label('Direccion', 'Direccion') !!}
    {!! Form::text('Direccion', null, ['class'=>'form-control', 'placeholder' => 'Ingresar la Direccion del hospedaje']) !!}
    
    @error('Direccion')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div> 

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($hospedaje->image)
                <img id="picture" src="{{Storage::url($hospedaje->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_960_720.jpg" alt="">
       
            @endisset   
        </div>    
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('logo', 'Logo') !!} <br>
            {!! Form::file('logo',['class'=>'form-control-file']) !!} 
    
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum magni, quo ipsam provident repellendus, corrupti aut iure ut enim distinctio neque delectus reprehenderit possimus? Porro, deleniti. Earum, dolor libero!</p>
    </div>
</div>


<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status',1,true) !!} 
        Borrador
    </label>
    <label>
        {!! Form::radio('status',2) !!} 
        Publicado
    </label>
    
    @error('status')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div> 
<div class="form-group">  
    {!! Form::label('Descripcion', 'Descripcion') !!}
    {!! Form::textarea('Descripcion', null, ['class'=>'form-control', 'placeholder' => 'Ingresar la descripcion del hospedaje']) !!}
    
    @error('Descripcion')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>
<div class="form-group">    
    {!! Form::label('tipo_hospedaje_id', 'Tipo de hospedaje') !!}
    {!! Form::select('tipo_hospedaje_id',$tipos_hospedajes,null, ['class'=>'form-control']) !!}
    
    @error('tipo_hospedaje_id')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Habitaciones</p>

    @foreach ($habitaciones as $habitacion)
    
    <label class="mr-2">
        {!! Form::checkbox('Tipo_habitacion[]', $habitacion->id, null) !!}
        {{$habitacion->Tipo_habitacion}}
    </label>
    <br>    
    @endforeach
    @error('Tipo_habitacion')
    <span class="text-danger">{{$message}}</span>
@enderror
    
</div>