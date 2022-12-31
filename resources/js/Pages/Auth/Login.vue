<template>
    <div class="div-login">
        <form @submit.prevent="submitFormLogin">
            <div class="field">
                <label>Usuário</label>
                <input class="input is-small" ref="user_input" v-model="formLogin.email" type="text">
            </div>
            <div class="field">
                <label>Senha</label>
                <input class="input is-small" ref="password_input" v-model="formLogin.password" type="password">
            </div>
            <div class="actions">
                <button type="submit" class="button is-link is-small">Login</button>
            </div>
        </form>
    </div>
</template>

<script>
import '../../../css/login.css'
import {useForm} from '@inertiajs/inertia-vue3'
import {Inertia} from "@inertiajs/inertia";

export default{
    data(){
        const formLogin = useForm({
            email: null,
            password: null
        })
        return {
            formLogin
        }
    },
    methods: {
        submitFormLogin(){
            let url = route('login');
            Inertia.post(url, this.formLogin, {
                onSuccess: () => {
                    this.formLogin.reset()
                    this.$refs.user_input.focus()
                    if(this.$page.props.flash.notification.status === false){
                        this.$toast.error(this.$page.props.flash.notification.message);
                    }
                }
            });
        }
    },
    mounted(){
        this.$refs.user_input.focus()
    }
}
</script>
