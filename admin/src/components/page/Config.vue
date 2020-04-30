<template>
    <div>
        <div class="crumbs">
            <el-breadcrumb separator="/">
                <el-breadcrumb-item><i class="el-icon-lx-calendar"></i> 系统配置</el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <div class="container">
            <div class="form-box">
                <el-form ref="form" label-width="100px">
                    <el-form-item label="网站名称">
                        <el-input v-model="title"></el-input>
                    </el-form-item>
                    <el-form-item label="网站关键词">
                        <el-input v-model="keywords"></el-input>
                    </el-form-item>
                    <el-form-item label="网站描述">
                        <el-input type="textarea" v-model="description"></el-input>
                    </el-form-item>
                    <el-form-item label="公司地址">
                        <el-input v-model="address"></el-input>
                    </el-form-item>
                    <el-form-item label="QQ号">
                        <el-input v-model="QQ"></el-input>
                    </el-form-item>
                    <el-form-item label="电话号码">
                        <el-input v-model="telephone"></el-input>
                    </el-form-item>
                    <el-form-item label="手机号">
                        <el-input v-model="mobile"></el-input>
                    </el-form-item>
                    <el-form-item label="邮箱号">
                        <el-input v-model="email"></el-input>
                    </el-form-item>
                    <el-form-item label="重点关键词">
                        <el-input v-model="importantword"></el-input>
                    </el-form-item>
                    <el-form-item label="备案号">
                        <el-input v-model="record"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="onSubmit">表单提交</el-button>
                    </el-form-item>
                </el-form>
            </div>
        </div>
    </div>
</template>

<script>
import func from '@/components/common/functions'
export default {
    name: 'config',
    data: function() {
        return {
            title: '',
            keywords: '',
            description: '',
            address: '',
            QQ: '',
            telephone: '',
            mobile: '',
            email: '',
            importantword: '',
            record: ''
        }
    },
    created: async function () {
        this.getConfig ();
    },
    methods: {
        getConfig: async function () {
            let _this = this
            let option = {
                token: _this.$root.token
            }
            let res = await func.ajax(APIADDR + '/index.php?do=apigetconfig', JSON.stringify(option));
            let obj = JSON.parse (res)
            if (obj.errcode == 0) {
                _this.title = obj.data.title
                _this.keywords = obj.data.keywords
                _this.description = obj.data.description
                _this.address = obj.data.address
                _this.QQ = obj.data.QQ
                _this.telephone = obj.data.telephone
                _this.mobile = obj.data.mobile
                _this.email = obj.data.email
                _this.importantword = obj.data.importantword
                _this.record = obj.data.record
            } else if (obj.errcode === 2000) {
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                _this.$message.error(obj.errmsg)
            }
        },
        onSubmit: async function () {
            let _this = this
            let option = {
                token: _this.$root.token,
                title: _this.title,
                keywords: _this.keywords,
                description: _this.description,
                address: _this.address,
                QQ: _this.QQ,
                telephone: _this.telephone,
                mobile: _this.mobile,
                email: _this.email,
                importantword: _this.importantword,
                record: _this.record
            }
            let res = await func.ajax(APIADDR + '/index.php?do=apisetconfig', JSON.stringify(option));
            let obj = JSON.parse (res)
            if (obj.errcode == 0) {
                _this.$message.success('设置成功')
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
