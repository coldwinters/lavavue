<template>
    <el-menu
            mode="horizontal"
            background-color="#262626"
            text-color="#ffffff"
            active-text-color="#ffffff">
        <el-menu-item index="1">处理中心</el-menu-item>
        <el-menu-item index="2">我的工作台</el-menu-item>
        <el-menu-item index="3" disabled>消息中心</el-menu-item>
        <el-menu-item index="4"><a href="https://www.ele.me" target="_blank">订单管理</a></el-menu-item>
    </el-menu>
</template>

<script>
    export default {
        name: "AppHeader"
    }
</script>

<style lang="stylus" scoped>
</style>