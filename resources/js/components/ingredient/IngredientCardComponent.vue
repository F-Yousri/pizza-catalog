

<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ingredient.name}}</div>

                <div class="card-body">
                    {{ingredient.cost_price}}
                </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            ingredient: Object
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
