<template>
    <BreezeAuthenticatedLayout>
        <!-- header -->
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Books List
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                   
                    <button 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create Record</button>

                    <!-- table -->
                    <table class="table-fixed w-full posts-table">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 w-20">No.</th>
                                <th class="px-4 py-2">Property Manager</th>
                                <th class="px-4 py-2">Landlord</th>
                                <th class="px-4 py-2">Tenant</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in data.data">
                                <td class="px-4 py-2 border">{{ item.id }}</td>
                                <td class="px-4 py-2 border">{{ item.property_manager }}</td>
                                <td class="px-4 py-2 border">{{ item.landlord }}</td>
                                <td class="px-4 py-2 border">{{item.tenant}}</td>
                                <td class="border px-4 py-2">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button 
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>

import Authenticated from './../Layouts/Authenticated.vue'

export default {
    props: ['data'],
    components: {
        Authenticated,
    }
}

</script>