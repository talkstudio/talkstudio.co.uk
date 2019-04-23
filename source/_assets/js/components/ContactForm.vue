<template>
    <form @submit.prevent="submit">
        <div v-if="anyErrors" class="bg-red-dark text-white p-4 mb-4 rounded">
            <ul class="list-reset">
                <template v-for="errorGroup in errors">
                    <li :key="index" v-for="(error, index) in errorGroup">
                        {{ error }}
                    </li>
                </template>
            </ul>
        </div>

        <div class="md:flex">
            <div class="md:w-1/2 md:pr-2">
                <div class="mb-4">
                    <label for="name" class="hidden">Name</label>

                    <input
                        id="name"
                        type="text"
                        class="input is-dark"
                        v-model="form.name"
                        required
                        placeholder="Name"
                    >
                </div>

                <div class="mb-4">
                    <label for="email" class="hidden">Email</label>

                    <input
                        id="email"
                        type="text"
                        class="input is-dark"
                        v-model="form.email"
                        required
                        placeholder="Email"
                    >
                </div>

                <div class="mb-4">
                    <label for="type" class="hidden">Select enquiry type...</label>

                    <div class="select w-full is-dark">
                        <select id="type" v-model="form.type" required>
                            <option :value="null" selected>Select enquiry type...</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Consultancy">Consultancy</option>
                            <option value="Branding">Branding</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 md:pl-2">
                <div class="mb-4">
                    <label for="message" class="hidden">Message</label>

                    <textarea
                        id="message"
                        class="textarea is-dark resize-none h-40"
                        v-model="form.message"
                        required
                        placeholder="Message"
                    ></textarea>
                </div>

                <div class="text-right">
                    <button
                        type="submit"
                        class="button white outlined w-full md:w-auto"
                        :class="{ 'loading': isProcessing }"
                        :disabled="isProcessing"
                    >
                        <span>Submit</span>

                        <span class="icon">
                            <icon icon="angle-right"></icon>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import axios from 'axios';
    
    const initalValues = () => {
        return {
            name: '',
            email: '',
            type: null,
            message: ''
        }
    };

    export default {
        data() {
            return {
                form: initalValues(),

                errors: {},
                isProcessing: false,
            }
        },

        computed: {
            anyErrors() {
                return Object.keys(this.errors).length > 0;
            }
        },

        methods: {
            submit() {
                this.errors = {};
                this.isProcessing = true;

                axios.post('http://formtrap.io/forms/2/enquiries', this.form)
                    .then(response => {
                        this.form = initalValues();
                    })
                    .catch(error => {
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        } else {
                            this.errors = {
                                error: ['An unexpected error occured.']
                            }
                        }
                    })
                    .finally(() => {
                        this.isProcessing = false;
                    });
            }
        }
    }
</script>
