		<div class="form-group">
			{!! Form::label('name', 'Nombre:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('slug', 'Alias (slug):') !!}
			{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('avatar', 'Avatar') !!}
			{!! Form::file('avatar') !!}
		</div>
