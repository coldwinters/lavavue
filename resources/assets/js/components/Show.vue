<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Detail</div>

                    <div class="panel-body">
                        <div class="bs-callout bs-callout-danger">
                            <h4>{{ admin.name }}</h4>
                            <p>{{ admin.email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/admins/' + this.$route.params.id).then(response => {
                this.admin = response.data
            })
        },
        data () {
            return {
                admin: {}
            }
        }
    }
</script>
