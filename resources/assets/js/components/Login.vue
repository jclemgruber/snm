<template>
<div class="row">
    <div class="col s12 m6 offset-m3 z-depth-3 card-panel">
		<h3>Login</h3>
        <form>

        <div class="row">
        	<div class="input-field col s12" v-if="errors">
        		<div class="card-panel red lighten-1">
        			<span>{{errors}}</span>
        		</div>
        	</div>
        </div>

        <div class="row">

            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="email" type="email" name="email" class="validate" v-model="user.email" required autofocus>
              <label for="email" data-error="E-mail inválido">E-mail</label>
            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="password" class="validate" v-model="user.password" required>
              <label for="password">Senha</label>
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="button" @click="login()">Login
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6 m6 l6">
                <p class="margin medium-small"><a href="#">Registre-se!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small">
                    <a href="#">Esqueceu sua senha?</a>
                </p>
            </div>          
        </div>

        </form>

    </div>
</div>

</template>

<script>
    export default {

        ready() {
        },

        data() {
        	return {
        		user: {
        			email: '',
        			password: ''
        		},

        		errors: null
        	};
        },

        methods: {
        	login(){
        		this.$http.post('/api/token', this.user)
        			.then((response) => {
        				window.localStorage.setItem('token', response.data.token);
        				this.errors = null;
        				//this.$router.go({name: 'meus-museus'});
        			})
        			.catch((err) => {
        				console.log(err.data.error);
        				this.errors = 'Usuário ou senha inválidos';
        			});
        	}
        }
    }
</script>
