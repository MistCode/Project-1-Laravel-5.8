	<div class="form-group">
		{!! Form::label('name', 'Nombre:') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'El Nombre es...']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('slug', 'Alias:') !!}
		{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder'=>'El Alias es...']) !!}
	</div>

	<div class="form-group">
		<div class="file-loading"> 
		    <input id="input-b1" name="avatar" type="file" class="file" data-browse-on-zone-click="true">
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('descript', 'Descripcion:') !!}
		{!! Form::textarea('descript', null, ['class' => 'form-control', 'placeholder'=>'Escribe algo de...']) !!}
	</div>