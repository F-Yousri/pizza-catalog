<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza Component</div>

                    <div v-for="pizza in pizzas" class="card-body">
                        <pizza-card-component :pizza=pizza></pizza-card-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            pizzas: Array
        },
        mounted() {
            console.log('pizzas')
        }
    }
</script>
