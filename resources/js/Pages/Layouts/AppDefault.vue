<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
        <Link class="navbar-item" :href="route('dashboard')">Dashboard</Link>
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
            Gerenciar
            </a>
            <div class="navbar-dropdown">
                <Link class="navbar-item" :href="route('employees.index')">Funcionários</Link>
            </div>
        </div>
        </div>
        <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
            <a class="button is-primary">
                <strong>Logout</strong>
            </a>
            </div>
        </div>
        </div>
    </div>
    </nav>
    <slot/>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
    export default{
        components:{
            Link
        },
        data(){
            return {

            }
        }
    }
</script>
