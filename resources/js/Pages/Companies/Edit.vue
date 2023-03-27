<template>
    <AppLayout>
        <form @submit.prevent="form.put(route('companies.update', form.id))">
            <div>
                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">
                        Name
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
                    <textarea v-model="form.type" id="type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    <div v-if="errors.type" class="text-red-600">
                        {{ errors.type }}
                    </div>
                </div>

                <div>
                    <label for="address" class="block font-medium text-sm text-gray-700">
                        Address
                    </label>
                    <input v-model="form.address" type="text" id="address" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.address" class="text-red-600">
                        {{ errors.address }}
                    </div>
                </div>

                <div>
                    <label for="net_worth" class="block font-medium text-sm text-gray-700">
                        Net Worth
                    </label>
                    <input v-model="form.net_worth" type="text" id="net_worth" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.net_worth" class="text-red-600">
                        {{ errors.net_worth }}
                    </div>
                </div>

            </div>

            <div class="py-4">
                <button type="submit" class="inline-block px-4 py-3 bg-blue-500 text-white rounded">
                    Save 
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
        AppLayout, Head, Link
    },
    props: {
        company: Object,
        errors: Object
    },
    setup(props) {
        const form = useForm(props.company)

        return { form }
    }
}
</script>
