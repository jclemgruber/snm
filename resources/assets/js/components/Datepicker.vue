<template>

<div class="input-field">
    <label for="{{id}}">{{label}}</label>
    <input type="date" class="datepicker" 
          :name="name"
          :id="id"
          :placeholder="placeholder ? placeholder : null"
          v-model="value"
    >
</div>

</template>

<script>
    export default {
        
        props: {
            value: {
                required: true
            },
            label: {
                type: String,
                default: '',
                required: true
            },
            placeholder: {
                type: String,
                default: ''
            },
            id: {
                type: String,
                default: 'dt-1'
            }
        },

        data: function() {
            return {
            }
        },

        methods: {
            beforeCreate: function() {
                this.id = Math.random().toString(36).substr(2, 9);
            }
        },

        watch: {
            value() {
                console.log('valor modificado.');
            }
        },

        ready() {
            var _this = this;

            $('#'+_this.id).pickadate({
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
        }
    }
</script>
