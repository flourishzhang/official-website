<template>
<div class="table">
    <div class="crumbs">
        <el-breadcrumb separator="/">
            <el-breadcrumb-item><i class="el-icon-lx-cascades"></i> 新闻管理</el-breadcrumb-item>
        </el-breadcrumb>
    </div>
    <div class="container">
        <div class="handle-box">
            筛选条件：
            <el-select v-model="articletype" placeholder="类型筛选" class="handle-select mr10" @change="GetArticleList">
                <el-option key="0" label="全部" :value="0"></el-option>
                <el-option key="1" label="公司动态" :value="1"></el-option>
                <el-option key="2" label="媒体报道" :value="2"></el-option>
                <el-option key="3" label="行业资讯" :value="3"></el-option>
            </el-select>
            <el-select v-model="articlestatus" placeholder="状态筛选" class="handle-select mr10" @change="GetArticleList">
                <el-option key="0" label="全部" :value="0"></el-option>
                <el-option key="1" label="禁止" :value="1"></el-option>
                <el-option key="2" label="激活" :value="2"></el-option>
            </el-select>
            <el-input v-model="keyword" placeholder="关键词" class="handle-input mr10"></el-input>
            <el-button type="primary" icon="search" @click="GetArticleList">搜索</el-button>
            排序依据：
            <el-select v-model="articleorder" placeholder="排序" class="handle-select mr10" @change="GetArticleList">
                <el-option key="0" label="生成时间" :value="0"></el-option>
                <el-option key="1" label="发布时间" :value="1"></el-option>
            </el-select>
            <el-button type="success" icon="search" style="float: right;" @click="CreateArticle">新增</el-button>
            <el-button type="warning" icon="search" style="float: right;" @click="pushbaidu">提交百度</el-button>
        </div>
        <el-table :data="articlelist" border class="table" ref="multipleTable" @selection-change="function (val) {
                multipleSelection = val
            }">
            <el-table-column type="selection" width="55">
            </el-table-column>
            <el-table-column prop="articleid" label="ID" width="65">
            </el-table-column>
            <el-table-column prop="title" label="文章标题" width="210">
            </el-table-column>
            <el-table-column label="文章类型" width="80" :formatter="function (row) {
                switch (row.articletype) {
                    case 1:return '公司动态';break;
                    case 2:return '媒体报道';break;
                    case 3:return '行业资讯';break;
                }
            }">
            </el-table-column>
            <el-table-column prop="createtime" width="160" label="生成时间">
            </el-table-column>
            <el-table-column prop="modifytime" width="160" label="修改时间">
            </el-table-column>
            <el-table-column prop="publishtime" width="160" label="发布时间">
            </el-table-column>
            <el-table-column prop="nickname" width="60" label="作者">
            </el-table-column>
            <el-table-column label="文章状态" width="80" :formatter="function (row) {
                switch (row.articlestatus) {
                    case 0:return '未发布';break;
                    case 1:return '发布';break;
                }
            }">
            </el-table-column>
            <el-table-column label="操作" align="center">
                <template slot-scope="scope">
                    <el-button type="text" icon="el-icon-edit" @click="handleEdit(scope.row)">编辑</el-button>
                </template>
            </el-table-column>
        </el-table>
        <div class="pagination">
            <el-pagination
                background
                @size-change="function (val) {
                    pagesize = val
                    GetArticleList ()
                }"
                @current-change="GetArticleList"
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
            articletype: 0,
            articlestatus: 0,
            articleorder: 0,
            keyword: '',
            totalcount: 0,
            pagesize: 10,
            currentpage: 1,
            articlelist: [],
            multipleSelection: []
        }
    },
    async created () {
        let _this = this
        _this.GetArticleList ()
    },
    methods: {
        async pushbaidu () {
            let _this = this
            let ids = []
            for (let i = 0, len = _this.multipleSelection.length ; i < len ; i++) {
                ids.push(_this.multipleSelection[i].articleid);
            }
            let option = {
                token: _this.$root.token,
                ids: ids
            }
            const loading = this.$loading({
                lock: true,
                text: '传输中',
                spinner: 'el-icon-loading',
                background: 'rgba(0, 0, 0, 0.7)'
            })
            let res = await func.ajax(APIADDR + '?do=apipushbaidu', JSON.stringify(option));
            let obj = JSON.parse(res)
            if (obj.errcode == 0) {
                loading.close()
                _this.$alert(obj.msg, '返回信息');
            } else if (obj.errcode === 2000) {
                loading.close()
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                loading.close()
                _this.$message.error(obj.errmsg)
            }
        },
        async CreateArticle () {
            let _this = this
            _this.$router.push('/editarticle')
        },
        async GetArticleList () {
            let _this = this
            let option = {
                token: _this.$root.token,
                page: _this.currentpage,
                size: _this.pagesize,
                order: _this.articleorder
            }
            if (_this.articletype != 0) {
                option.articletype = _this.articletype
            }
            if (_this.articlestatus != 0) {
                option.articlestatus = _this.articlestatus - 1
            }
            if (_this.keyword != '') {
                option.keyword = _this.keyword
            }
            let res = await func.ajax(APIADDR + '?do=apigetarticlelist', JSON.stringify(option));
            let obj = JSON.parse(res)
            if (obj.errcode == 0) {
                _this.articlelist = obj.articlelist
                _this.totalcount = obj.totalcount
            } else if (obj.errcode === 2000) {
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                _this.$message.error(obj.errmsg)
            }
        },
        async handleEdit (scope) {
            let _this = this
            _this.$router.push({path: '/editarticle', query: {articleid: scope.articleid}})
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
