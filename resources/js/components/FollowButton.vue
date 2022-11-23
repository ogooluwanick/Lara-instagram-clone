<template>
    <div class="container">
                 <a href="#" class="font-weight-bold ml-5 " @click="followUser"  style="color:#0095f6;">Follow</a>
    </div>
</template>

<!-- <template>
        <div>
            <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
        </div>
</template> -->
    
    <script>
        export default {
            props: ['userId', 'follows'],
    
            mounted() {
                console.log('Follow Btn mounted.')
                console.log(this.userId)
            },
    
            data: function () {
                return {
                    status: this.follows,
                }
            },
    
            methods: {
                followUser() {
                        axios.post('/follow/' + this.userId)
                        .then(response => {
                            this.status = ! this.status;
    
                            console.log(response.data);
                        })
                        .catch(errors => {
                            if (errors.response.status == 401) {
                                window.location = '/login';
                            }
                        });
                }
            },
    
        //     computed: {
        //         buttonText() {
        //             return (this.status) ? 'Unfollow' : 'Follow';
        //         }
        //     }
        }
    </script>