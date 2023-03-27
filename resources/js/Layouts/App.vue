<template>
    <div class="min-h-screen bg-black-100">
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">

                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <Link :href="route('posts.index')"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                  :class="{ 'font-bold': $page.component === 'Posts/Index' }">Posts
                            </Link>

                            <Link :href="route('companies.index')"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                  :class="{ 'font-bold': $page.component === 'Companies/Index' }">Companies
                            </Link>

                            <Link :href="route('members.index')"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                  :class="{ 'font-bold': $page.component === 'Members/Index' }">Members
                            </Link>

                            <Link :href="route('pages.about')"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                  :class="{ 'font-bold': $page.component === '' }">About
                            </Link>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div>
                            <div>
                                Hi, {{ $page.props.user.name }}
                                <br/>
                                {{ $page.props.user.email }}
                            </div>
                        </div>
                    </div>
                    <Link :href="route('logout')" method="post"
                          class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 ml-4">
                        Log out
                    </Link>
                </div>
            </div>
        </nav>

        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div v-if="$page.props.flash.message" class="text-blue-600 mb-4">
                                {{ $page.props.flash.message }}
                            </div>

                            <slot/>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link
    }
}

</script>
