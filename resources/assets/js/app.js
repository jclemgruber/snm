
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('example', require('./components/Example.vue'));
Vue.component('snm-datepicker', require('./components/Datepicker.vue'));
Vue.component('snm-maskinput', 	require('./components/Maskinput.vue'));
Vue.component('snm-editor', 	require('./components/Editor.vue'));

var UiTextbox 	= require('keen-ui').UiTextbox;
var UiAlert 	= require('keen-ui').UiAlert;

new Vue({
  el: 'body',

  components: {
	'ui-textbox': UiTextbox,
  	'ui-alert': UiAlert
  },
})

