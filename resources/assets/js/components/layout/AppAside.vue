<template>
    <el-row class="tac">
        <el-col>
            <h5>自定义颜色</h5>
            <el-menu
                    background-color="#262626"
                    text-color="#ffffff"
                    active-text-color="#ffffff">
                <el-menu-item index="1">
                    <i class="el-icon-menu"></i>
                    <span slot="title">导航一</span>
                </el-menu-item>
                <el-menu-item index="2">
                    <i class="el-icon-menu"></i>
                    <span slot="title">导航二</span>
                </el-menu-item>
                <el-menu-item index="3" disabled>
                    <i class="el-icon-document"></i>
                    <span slot="title">导航三</span>
                </el-menu-item>
                <el-menu-item index="4">
                    <i class="el-icon-setting"></i>
                    <span slot="title">导航四</span>
                </el-menu-item>
            </el-menu>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "AppAside"
    }
</script>

<style scoped>

</style>