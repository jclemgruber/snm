<template>
    <div>
    	<input type="text" class="input-mask validate" :id="id" :name="id" :value="value">
    	<label :for="id" data-error="Digite o CPF">{{ label }}</label>
    </div>
</template>

<script>

	import '../../vendor/js/jquery.mask'

    export default {

    	props: {
    		'id': {
    			type: String,
    			required: true
    		},
    		'label': {
    			type: String,
    			required: true
    		},
    		'mask': {
    			type: String,
    			required: true
    		},
    		'value': {
    			type: String
    		}
    	},

        ready() {
        	window.$('.input-mask').mask(this.mask);
        }
    }
</script>
