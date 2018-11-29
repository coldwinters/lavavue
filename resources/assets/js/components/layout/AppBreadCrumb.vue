<template>
    <el-breadcrumb separator-class="el-icon-d-arrow-right">
        <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
        <el-breadcrumb-item>活动管理</el-breadcrumb-item>
        <el-breadcrumb-item>活动列表</el-breadcrumb-item>
        <el-breadcrumb-item>活动详情</el-breadcrumb-item>
    </el-breadcrumb>
</template>

<script>
    export default {
        name: "AppBreadCrumb"
    }
</script>

<style scoped>

</style>