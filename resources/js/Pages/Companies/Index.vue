<template>
    <AppLayout>
        <Link v-if="permissions.posts_manage" :href="route('companies.create')" class="inline-block px-4 py-3 bg-blue-500 text-white rounded mb-4">Add new</Link>

        <table class="mt-4 min-w-full divide-y divide-gray-200 border">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</span>
                </th>

                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Company Name</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Type</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Address</span>
                </th>
                
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Net Worth</span>
                </th>

                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <tr v-for="company in companies" :key="company.id">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ company.id }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ company.name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ company.type }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ company.address }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ company.net_worth }}
                    
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    <Link :href="route('companies.edit', company.id)" class="px-2 py-1 bg-blue-600 text-white rounded font-bold uppercase mr-2">Edit</Link>
                    <button  @click="destroy(company.id)" type="button" class="px-2 py-1 bg-red-600 text-white rounded font-bold uppercase">
                        Delete
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </AppLayout>
</template>

<script>
import AppLayout from "../../Layouts/App"
import { Head, Link } from "@inertiajs/inertia-vue3"
import {Inertia} from "@inertiajs/inertia";

export default {
    components: {
        AppLayout, Head, Link
    },
    props: {
        companies: Object,
        permissions: Object,
    },
    setup() {
        const destroy = (id) => {
            if (confirm('Are you sure?')) {
                Inertia.delete(route('companies.destroy', id))
            }
        }

        return { destroy }
    }
}
</script>
