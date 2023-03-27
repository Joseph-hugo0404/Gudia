<template>
    <AppLayout>
        <Link :href="route('members.create')" class="inline-block px-4 py-3 bg-blue-500 text-white rounded mb-4">Add new</Link>

        <table class="mt-4 min-w-full divide-y divide-gray-200 border">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</span>
                </th>

                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Last Name</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">First Name</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Designation</span>
                </th>

                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Company ID</span>
                </th>

                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Company Name</span>
                </th>

                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <tr v-for="member in members" :key="member.id">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ ('00000' + member.id).slice(-5) }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ member.last_name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ member.first_name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ member.designation }}
                </td>

                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ ('1000' + member.company_id).slice(-8)  }}
                </td>

                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ member.company.name }}
                    
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    <Link :href="route('members.edit', member.id)" class="px-2 py-1 bg-blue-600 text-white rounded font-bold uppercase mr-2">Edit</Link>
                    <button  @click="destroy(member.id)" type="button" class="px-2 py-1 bg-red-600 text-white rounded font-bold uppercase">
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
        members: Object,
        permissions: Object,
    },
    setup() {
        const destroy = (id) => {
            if (confirm('Are you sure?')) {
                Inertia.delete(route('members.destroy', id))
            }
        }

        return { destroy }
    }
}
</script>
