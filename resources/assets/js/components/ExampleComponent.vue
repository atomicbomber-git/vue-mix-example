<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <div class="list-group item" v-for="item in items">
                                {{ item.name }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ["data_url"],

        data() {
            return {
                "items": [{"name": "Cigarette"}, {name: "Chocolate"}]
            }
        },

        mounted() {
            var self = this
            axios.get(this.data_url)
                .then(function(response) {
                    self.items = response.data
                })
                .catch(function(error) {

                })


            console.log('Component mounted.')
        }
    }
</script>
