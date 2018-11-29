<template>
    <el-container>
        <el-header height="50px">
            <app-header></app-header>
        </el-header>

        <el-container>
            <el-aside width="200px">
                <app-aside></app-aside>
            </el-aside>

            <el-main>
                <app-bread-crumb></app-bread-crumb>

                <router-view></router-view>
            </el-main>
        </el-container>
    </el-container>
</template>

<script>
    import AppHeader from './components/layout/AppHeader';
    import AppAside from './components/layout/AppAside';
    import AppBreadCrumb from './components/layout/AppBreadCrumb';

    export default {
        components: {
            AppHeader,
            AppAside,
            AppBreadCrumb
        }
    }
</script>

<style lang="stylus" scoped>
</style>