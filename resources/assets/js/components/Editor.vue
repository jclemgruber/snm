<template>
    <div>
    	<vue-html5-editor :content="content" :height="height" :value="value" :id="id"></vue-html5-editor>
    	<label :for="id" v-if="label">{{label}}</label>
    </div>
</template>

<script>

	var editor = require("vue-html5-editor");
	Vue.use(editor,{
		name: 'vue-html5-editor',
		hiddenModules: ['full-screen']
	});

    export default {

    	props: {
            name: {
                type: String
            },

            value: {
                type: String,
            },

            label: {
                type: String,
                default: null
            },

            id: {
                type: String,
                default: 'editor1'
            },

            height: {
                type: Number,
                default: 300
            }
    	},

    	data () {
    		return {
    			content: ''
    		}
    	},

        ready() {

        }
    }
</script>

