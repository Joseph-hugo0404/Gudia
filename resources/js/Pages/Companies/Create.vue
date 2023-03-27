<template>
    <AppLayout>
        <form @submit.prevent="form.post(route('companies.store'))">
            <div>
                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">
                        Company Name
                    </label>
                    <input v-model="form.name" type="text" id="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.name" class="text-red-600">
                        {{ errors.name }}
                    </div>
                </div>

                <div class="mt-4">
                    <label for="type" class="block font-medium text-sm text-gray-700">
                        Type
                    </label>
                    <input v-model="form.type" type="text" id="type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.type" class="text-red-600">
                        {{ errors.type }}
                    </div>
                </div>

                <div class="mt-4">
                    <label for="address" class="block font-medium text-sm text-gray-700">
                        Address
                    </label>
                    <input v-model="form.address" type="text" id="address" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.address" class="text-red-600">
                        {{ errors.address }}
                    </div>
                </div>

                <div class="mt-4">
                    <label for="net_worth" class="block font-medium text-sm text-gray-700">
                        Net Worth
                    </label>
                    <input v-model="form.net_worth" type="numeric" id="net_worth" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.net_worth" class="text-red-600">
                        {{ errors.net_worth }}
                    </div>
                </div>

            </div>

            <div class="py-4">
                <button type="submit" :disabled="form.processing" class="inline-block px-4 py-3 bg-blue-500 text-white rounded">
                    Save post
                </button>
                <Link :href="route('companies.index')" class="ml-2 inline-block px-4 py-3 bg-gray-100 rounded">
                    Cancel
                </Link>
            </div>
        </form>
    </AppLayout>
</template>

<script>
import AppLayout from "../../Layouts/App"
import { Head, Link, useForm } from "@inertiajs/inertia-vue3"

export default {
    components: {
        AppLayout, Head, Link,
    },
    props: {
        errors: Object
    },
    setup() {
        const form = useForm({
            name: '',
            type: '',
            address: '',
            net_worth: ''
        })

        return { form }
    }
}
</script>
