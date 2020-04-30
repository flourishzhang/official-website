<template>
<div class="table">
    <div class="crumbs">
        <el-breadcrumb separator="/">
            <el-breadcrumb-item><i class="el-icon-lx-cascades"></i> 蜘蛛记录</el-breadcrumb-item>
        </el-breadcrumb>
    </div>
    <div class="container">
        <div class="handle-box">
            筛选条件：
            <el-select v-model="spidertype" placeholder="类型筛选" class="handle-select mr10" @change="GetSpiderList">
                <el-option key="0" label="全部" :value="0"></el-option>
                <el-option key="1" label="百度搜索" :value="1"></el-option>
                <el-option key="2" label="搜狗搜索" :value="2"></el-option>
                <el-option key="3" label="360搜索" :value="3"></el-option>
                <el-option key="4" label="谷歌搜索" :value="4"></el-option>
                <el-option key="5" label="搜搜搜索" :value="5"></el-option>
            </el-select>
        </div>
        <el-table :data="spiderlist" border class="table" ref="multipleTable">
            <el-table-column prop="spiderlogId" label="ID" width="65">
            </el-table-column>
            <el-table-column prop="name" label="蜘蛛">
            </el-table-column>
            <el-table-column label="访问地址">
                <template slot-scope="scope">
                    <a :href="scope.row.target" target="_blank">{{scope.row.target}}</a>
                </template>
            </el-table-column>
            <el-table-column prop="time" label="访问时间">
            </el-table-column>
        </el-table>
        <div class="pagination">
            <el-pagination
                background
                @size-change="function (val) {
                    pagesize = val
                    GetSpiderList ()
                }"
                @current-change="GetSpiderList"
                :current-page.sync="currentpage"
                :page-sizes="[5, 10, 20, 50]"
                :page-size="pagesize"
                layout="total, sizes, prev, pager, next, jumper"
                :total="totalcount">
            </el-pagination>
        </div>
    </div>
</div>
</template>

<script>
import func from '@/components/common/functions'
export default {
    name: 'basetable',
    data() {
        return {
            spidertype: 0,
            totalcount: 0,
            pagesize: 10,
            currentpage: 1,
            spiderlist: []
        }
    },
    async created () {
        let _this = this
        _this.GetSpiderList ()
    },
    methods: {
        async GetSpiderList () {
            let _this = this
            let option = {
                token: _this.$root.token,
                page: _this.currentpage,
                size: _this.pagesize
            }
            if (_this.spidertype == 1) {
                option.spidertype = '百度搜索'
            } else if (_this.spidertype == 2) {
                option.spidertype = '搜狗搜索'
            } else if (_this.spidertype == 3) {
                option.spidertype = '360搜索'
            } else if (_this.spidertype == 4) {
                option.spidertype = '谷歌搜索'
            } else if (_this.spidertype == 5) {
                option.spidertype = '搜搜搜索'
            }
            let res = await func.ajax(APIADDR + '/index.php?do=apigetspiderlist', JSON.stringify(option));
            let obj = JSON.parse(res)
            if (obj.errcode == 0) {
                _this.spiderlist = obj.spiderlist
                _this.totalcount = obj.totalcount
            } else if (obj.errcode === 2000) {
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                _this.$message.error(obj.errmsg)
            }
        }
    }
}
</script>

<style scoped>
    .handle-box {
        margin-bottom: 20px;
    }

    .handle-select {
        width: 120px;
    }

    .handle-input {
        width: 300px;
        display: inline-block;
    }
    .del-dialog-cnt{
        font-size: 16px;
        text-align: center
    }
    .table{
        width: 100%;
        font-size: 14px;
    }
    .red{
        color: #ff0000;
    }
    .mr10{
        margin-right: 10px;
    }
</style>
