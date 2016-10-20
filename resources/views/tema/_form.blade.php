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
			<div class="input-field col s12 m6">
				<input type="text" id="subscription_start_date" name="subscription_start_date" value="{{old('subscription_start_date') }}" class="dateinput">
				<label for="subscription_start_date">Data de início das inscrições</label>
			</div>

			<div class="input-field col s12 m6">
				<input type="text" id="subscription_end_date" name="subscription_end_date" value="{{old('subscription_end_date') }}" class="dateinput">
				<label for="subscription_end_date">Data de fim das inscrições</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m6">
				<input type="text" id="event_start_date" name="event_start_date" value="{{old('event_start_date') }}" class="dateinput">
				<label for="event_start_date">Data de início do evento</label>
			</div>

			<div class="input-field col s12 m6">
				<input type="text" id="event_end_date" name="subscription_end_date" value="{{old('event_end_date') }}" class="dateinput">
				<label for="event_end_date">Data de encerramento do evento</label>
			</div>
		</div>

		<div class="row">
			<label>Página antes do início das inscrições</label>
			<snm-editor name="before_subscription_page" id="before_subscription_page" value="{{ old('before_subscription_page') }}" height=100>
			</snm-editor>
		</div>

		<div class="row">
			<button class="btn waves-effect waves-light" type="submit" name="action">Salvar informações
    			<i class="material-icons right">send</i>
  			</button>
  		</div>

	</form>

@section('post-script')

	<script type="text/javascript">

		$( document ).ready(function(){
			$('.dateinput').pickadate({
		        selectMonths: true,
		        selectYears: 15,
		        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
		        today: 'hoje',
		        clear: 'limpar',
		        formatSubmit: 'dd/mm/yyyy',
		        format: 'dd/mm/yyyy',

		        onSet: function( arg ){
		          if ( 'select' in arg ){ //prevent closing on selecting month/year
		              this.close();
		          }
		        }
		    });
		});

	</script>

@endsection