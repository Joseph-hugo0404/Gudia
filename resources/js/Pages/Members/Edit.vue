<template>
    <AppLayout>
        <form @submit.prevent="form.put(route('members.update', form.id))">
            <div>
                

                <div class="mt-4">
                    <label for="last_name" class="block font-medium text-sm text-gray-700">
                        Last Name
                    </label>
                    <textarea v-model="form.last_name" id="last_name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    <div v-if="errors.last_name" class="text-red-600">
                        {{ errors.last_name }}
                    </div>
                </div>

                <div>
                    <label for="first_name" class="block font-medium text-sm text-gray-700">
                        First Name
                    </label>
                    <input v-model="form.first_name" type="text" id="first_name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.first_name" class="text-red-600">
                        {{ errors.first_name }}
                    </div>
                </div>

                <div>
                    <label for="designation" class="block font-medium text-sm text-gray-700">
                        Designation
                    </label>
                    <input v-model="form.designation" type="text" id="designation" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.designation" class="text-red-600">
                        {{ errors.designation }}
                    </div>
                </div>

                <div v-for="member in members" :key="member.id" class="block font-medium text-sm text-gray-700">
                    {{ member.company.name }}
                </div>

            </div>

            <div class="py-4">
                <button type="submit" class="inline-block px-4 py-3 bg-blue-500 text-white rounded">
                    Save 
                </button>
                <Link :href="route('members.index')" class="ml-2 inline-block px-4 py-3 bg-gray-100 rounded">
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
        member: Object,
        errors: Object
    },
    setup(props) {
        const form = useForm(props.member)

        return { form }
    }
}
</script>
