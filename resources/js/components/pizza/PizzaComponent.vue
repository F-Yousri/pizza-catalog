<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-for="ingredient in pizza.ingredients" class="card-body">
                <ingredient-card-component :ingredient=ingredient></ingredient-card-component>
            </div>
        </div>
        
    </div>
</template>

<script>
    export default {
        props: {
            pizza: Object
        },
        methods: {
            visit: function(url) {
                window.location.href= url
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
