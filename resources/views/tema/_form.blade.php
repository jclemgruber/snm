	<form method="POST" role="form" action="{{ url('/temas') }}">
		{{ csrf_field() }}

		<div class="row">
			@include('form-errors')
		</div>

		<div class="row">
			<div class="input-field col s12">
				<input type="text" id="name" name="name" value="{{ old('name') }}">
				<label for="name">Nome do tema</label>
			</div>
		</div>

		<div class="row">
			<snm-datepicker class="input-field col s12 m6" label="Data de início das inscrições" id="subscription_start_date" value="{{old('subscription_start_date') }}"></snm-datepicker>

			<snm-datepicker class="input-field col s12 m6" label="Data de fim das inscrições" id="subscription_end_date" value="{{ old('subscription_end_date') }}"></snm-datepicker>
		</div>

		<div class="row">
			<snm-datepicker class="input-field col s12 m6" label="Data de início do evento" id="event_start_date" value="{{ old('tema->event_start_date') }}"></snm-datepicker>

			<snm-datepicker class="input-field col s12 m6" label="Data de encerramento do evento" id="event_end_date" value="{{old('event_end_date') }}"></snm-datepicker>
		</div>

		<div class="row">
			<label>Página antes do início das inscrições</label>
			<snm-editor name="before_subscription_page" id="before_subscription_page" value="{{ old('before_subscription_page') }}" height="100">
			</snm-editor>
		</div>

		<div class="row">
			<button class="btn waves-effect waves-light" type="submit" name="action">Salvar informações
    			<i class="material-icons right">send</i>
  			</button>
  		</div>

	</form>
