<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" @click="visit(pizza.url)">
                    <div class="card-header">{{pizza.name}}</div>

                    <div class="card-body">
                        {{pizza.selling_price}}
                    </div>
                </div>
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
