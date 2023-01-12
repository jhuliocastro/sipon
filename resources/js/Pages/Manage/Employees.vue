<template>
    <AppDefault>
        <div class="card-background">
            <div class="actions">
                <button class="button is-link is-small" @click="showModalCadastrar">Cadastrar Colaborador</button>
            </div>
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Colaborador</th>
                        <th>Turno</th>
                        <th>Equipe</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="fader" v-if="this.fader"></div>
        <!--MODAL CADASTRAR-->
        <div class="modal-actions" v-if="this.modalCadastrar">
            <form @submit.prevent="submitFormCadastrar">
                <div class="modal-actions-head">
                    <span class="title">Cadastrar Colaborador</span>
                </div>
                <div class="modal-actions-body">
                    <div class="bread">Dados Pessoais</div>
                    <div class="field">
                        <label>Nome Completo <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.name" ref="nameCadastrar">
                    </div>
                    <div class="field">
                        <label>CPF <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.cpf" ref="cpfCadastrar">
                    </div>
                    <div class="field">
                        <label>RG <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.rg" ref="rgCadastrar">
                    </div>
                    <div class="field">
                        <label>PIS</label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.pis" ref="pisCadastrar">
                    </div>
                    <div class="field">
                        <label>Endereço</label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.address" ref="addressCadastrar">
                    </div>
                    <div class="field">
                        <label>Bairro</label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.district" ref="districtCadastrar">
                    </div>
                    <div class="field">
                        <label>Cidade</label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.city" ref="cityCadastrar">
                    </div>
                    <div class="bread">Alocação</div>
                    <div class="field">
                        <label>Data de Admissão <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="date" class="input is-small" v-model="this.formCadastrar.dateAdmission" ref="dateAdmissionCadastrar">
                    </div>
                    <div class="field">
                        <label>Cargo <span class="obrigatorio">(obrigatório)</span></label>
                        <div class="control" style="width: 100%;">
                            <div class="select is-small" style="width: 100%;">
                                <select style="width: 100%;" v-model="this.formCadastrar.office" ref="officeCadastrar">
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Turno <span class="obrigatorio">(obrigatório)</span></label>
                        <div class="control" style="width: 100%;">
                            <div class="select is-small" style="width: 100%;">
                                <select style="width: 100%;" v-model="this.formCadastrar.shift" ref="shiftCadastrar">
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Equipe <span class="obrigatorio">(obrigatório)</span></label>
                        <div class="control" style="width: 100%;">
                            <div class="select is-small" style="width: 100%;">
                                <select style="width: 100%;" v-model="this.formCadastrar.team" ref="teamCadastrar">
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="bread">Acesso ao Sistema</div>
                    <div class="field">
                        <label>Login <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="text" class="input is-small" v-model="this.formCadastrar.login" ref="loginCadastrar">
                    </div>
                    <div class="field">
                        <label>Senha <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="password" class="input is-small" v-model="this.formCadastrar.password" ref="passwordCadastrar">
                    </div>
                    <div class="field">
                        <label>Confirmação de Senha <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="password" class="input is-small" v-model="this.formCadastrar.confirmPassword" ref="confirmPasswordCadastrar">
                    </div>
                    <div class="field">
                        <label>Email <span class="obrigatorio">(obrigatório)</span></label>
                        <input type="email" class="input is-small" v-model="this.formCadastrar.email" ref="emailCadastrar">
                    </div>
                    <div class="field">
                        <label>Permissão <span class="obrigatorio">(obrigatório)</span></label>
                        <div class="control" style="width: 100%;">
                            <div class="select is-small" style="width: 100%;">
                                <select style="width: 100%;" v-model="this.formCadastrar.permission" ref="permissionCadastrar">
                                    <option>Administrador</option>
                                    <option>Colaborador</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-actions-footer">
                    <button class="button is-default is-small button-left" @click="hideModalCadastrar">Voltar</button>
                    <button class="button is-link is-small button-right" :disabled="!this.statusButtonSubmitCadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </AppDefault>
</template>

<script>
import '../../../css/employees.css'
import AppDefault from '../Layouts/AppDefault.vue'
import VueFeather from 'vue-feather'
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {
    name: "Employees",
    components: {
        AppDefault,
        VueFeather
    },
    data(){
        const formCadastrar = reactive({
            name: null,
            cpf: null,
            rg: null,
            pis: null,
            address: null,
            district: null,
            city: null,
            dateAdmission: null,
            office: null,
            shift: null,
            team: null,
            login: null,
            password: null,
            confirmPassword: null,
            email: null,
            permission: null,
        })

        return {
            fader: false,

            modalCadastrar: false,
            statusButtonSubmitCadastrar: true,

            formCadastrar
        }
    },
    methods:{
        showModalCadastrar: function(){
            this.fader = true
            this.modalCadastrar = true
        },

        hideModalCadastrar: function(){
            this.fader = false
            this.modalCadastrar = false
        },

        submitFormCadastrar: function(){
            let url = route('employees.store');
            Inertia.post(url, this.formCadastrar, {
                onStart: () => {
                    this.statusButtonSubmitCadastrar = false
                },
                onFinish: () => {
                    this.statusButtonSubmitCadastrar = true
                },
                onSuccess: (response) => {
                    if(response.props.flash.status === false){
                        this.formCadastrar.password = null
                        this.formCadastrar.confirmPassword = null
                        this.$refs.passwordCadastrar.focus()
                        this.$toast.error(response.props.flash.info)
                    }
                },
                onError: (response) => {
                    if(response.name){
                        this.$toast.error('Nome completo é obrigatório')
                        this.$refs.nameCadastrar.focus()
                    }else if(response.cpf){
                        this.$toast.error('CPF é obrigatório')
                        this.$refs.cpfCadastrar.focus()
                    }else if(response.rg){
                        this.$toast.error('RG é obrigatório')
                        this.$refs.rgCadastrar.focus()
                    }else if(response.dateAdmission){
                        this.$toast.error('Data de admissão é obrigatório')
                        this.$refs.dateAdmissionCadastrar.focus()
                    }else if(response.team){
                        this.$toast.error('Equipe é obrigatório')
                        this.$refs.teamCadastrar.focus()
                    }else if(response.office){
                        this.$toast.error('Cargo é obrigatório')
                        this.$refs.officeCadastrar.focus()
                    }else if(response.shift){
                        this.$toast.error('Turno é obrigatório')
                        this.$refs.shiftCadastrar.focus()
                    }else if(response.login){
                        this.$toast.error('Login é obrigatório')
                        this.$refs.loginCadastrar.focus()
                    }else if(response.password){
                        this.$toast.error('Senha é obrigatório')
                        this.$refs.passwordCadastrar.focus()
                    }else if(response.confirmPassword){
                        this.$toast.error('Confirmação de senha é obrigatório')
                        this.$refs.confirmPasswordCadastrar.focus()
                    }else if(response.email){
                        this.$toast.error('Email é obrigatório')
                        this.$refs.emailCadastrar.focus()
                    }else if(response.permission){
                        this.$toast.error('Permissão é obrigatório')
                        this.$refs.permissionCadastrar.focus()
                    }
                }
            })
        }
    }
}
</script>
