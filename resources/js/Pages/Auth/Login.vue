<template>
    <div class="div-login">
        <form @submit.prevent="submitFormLogin">
            <div class="field">
                <label>Usuário</label>
                <input class="input is-small" ref="user_input" v-model="formLogin.user" type="text">
            </div>
            <div class="field">
                <label>Senha</label>
                <input class="input is-small" v-model="formLogin.password" type="text">
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
            user: null,
            password: null
        })
        return {
            formLogin
        }
    },
    methods: {
        submitFormLogin(){
            Inertia.post('/', this.formLogin);
        }
    },
    mounted(){
        this.$refs.user_input.focus()
    }
}
</script>
