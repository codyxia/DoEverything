<script setup>
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    data:[]
})
</script>
<template>
    <Head title="账号列表" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">账号管理</h2>
        </template>
        <div class="py-12">
            <div class="flex flex-wrap justify-center gap-5">
                <button type="button" class="rounded-lg border border-primary-500 bg-primary-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-primary-700 hover:bg-primary-700 focus:ring focus:ring-primary-200 disabled:cursor-not-allowed disabled:border-primary-300 disabled:bg-primary-300">Button text</button>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 overflow-x-auto">
                <div class="">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">企业</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">姓名</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">用户名</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">状态</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">操作</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        <tr v-for="item in data">
                            <th class="px-6 py-4 font-medium text-gray-900">{{item.id}}</th>
                            <td class="px-6 py-4">{{item.company_id}}</td>
                            <td class="px-6 py-4">{{item.name}}</td>
                            <td class="px-6 py-4">{{item.user_name}}</td>
                            <td class="px-6 py-4">
                              <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
                                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Paid
                              </span>
                            </td>
                            <td class="flex justify-end gap-4 px-6 py-4 font-medium">
                                <a href="">停用</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </AuthenticatedLayout>

</template>

<style scoped>

</style>
