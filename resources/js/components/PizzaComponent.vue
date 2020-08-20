<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{pizza.name}}</div>

                    <div class="card-body">
                        {{pizza.id}}
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
