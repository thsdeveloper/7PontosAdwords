<template>
    <div class="7p-login-form">
        <h1>Realize o login</h1>
        <v-form v-model="valid" ref="form" lazy-validation>
            <v-text-field label="E-mail" v-model="email" :rules="emailRules" required></v-text-field>
            <v-text-field label="Senha" v-model="password" :rules="nameRules" :counter="6" required></v-text-field>

            <v-checkbox label="Lembrar senha?" v-model="checkbox" :rules="[v => !!v || 'You must agree to continue!']" required></v-checkbox>

            <v-btn @click="submit" :disabled="!valid">entrar</v-btn>
            <v-btn @click="clear">limpar</v-btn>
        </v-form>
    </div>
</template>

<script>
export default {
    data () {
        return {
            valid: true,
            password: '',
            nameRules: [
                (v) => !!v || 'Senha é obrigatória',
                (v) => v && v.length >= 6 || 'A senha deve conter mais de 6 caracteres'
            ],
            email: '',
            emailRules: [
                (v) => !!v || 'E-mail é obrigatório',
                (v) => /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'E-mail não é valido'
            ],
            select: null,
            items: [
                'Item 1',
                'Item 2',
                'Item 3',
                'Item 4'
            ],
            checkbox: false
        }
    },
    methods: {
        submit () {
            if (this.$refs.form.validate()) {
                // Native form submission is not yet supported
                axios.post('/login', {
                    email: this.email,
                    password: this.password,
                })
            }
        },
        clear () {
            this.$refs.form.reset()
        }
    },
    mounted() {
        console.log('Login Form mounted.')
    }
}
</script>
