<template>
    <div class="login-wrap">
        <div class="ms-login">
            <div class="ms-title">后台管理系统</div>
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="0px" class="ms-content">
                <el-form-item prop="username">
                    <el-input v-model="ruleForm.username" placeholder="username">
                        <el-button slot="prepend" icon="el-icon-lx-people"></el-button>
                    </el-input>
                </el-form-item>
                <el-form-item prop="password">
                    <el-input type="password" placeholder="password" v-model="ruleForm.password" @keyup.enter.native="submitForm('ruleForm')">
                        <el-button slot="prepend" icon="el-icon-lx-lock"></el-button>
                    </el-input>
                </el-form-item>
                <div class="login-btn">
                    <el-button type="primary" @click="submitForm('ruleForm')">登录</el-button>
                </div>
                <p class="login-tips">Tips : 沃航科技官网后台，非授权用户禁止登录。</p>
            </el-form>
        </div>
    </div>
</template>

<script>
import func from '@/components/common/functions'
export default {
    data: function(){
        return {
            ruleForm: {
                username: '',
                password: ''
            },
            rules: {
                username: [
                    { required: true, message: '请输入用户名', trigger: 'blur' }
                ],
                password: [
                    { required: true, message: '请输入密码', trigger: 'blur' }
                ]
            }
        }
    },
    methods: {
        async submitForm(formName) {
            let _this = this
            _this.$refs[formName].validate(async (valid) => {
                if (valid) {
                    let res1 = await func.ajax(APIADDR + '/index.php?do=apilogin', JSON.stringify({
                        username: _this.ruleForm.username,
                        password: _this.ruleForm.password
                    }))
                    let obj1 = JSON.parse(res1)
                    if (obj1.errcode === 0) {
                        _this.$root.token = obj1.token
                        sessionStorage.setItem('token', obj1.token)
                        let res2 = await func.ajax(APIADDR + '/index.php?do=apigetuserinfo', JSON.stringify({
                            token: obj1.token
                        }))
                        let obj2 = JSON.parse(res2)
                        if (obj2.errcode === 0) {
                            _this.$root.userinfo = obj2.userinfo
                            sessionStorage.setItem('userinfo', JSON.stringify(obj2.userinfo))
                            _this.$router.push('/')
                        } else {
                            _this.$message.error(obj2.errmsg);
                        }
                    } else if (obj1.errcode === -1) {
                        _this.$message.error(obj1.errmsg);
                    }
                } else {
                    console.log('error submit!!');
                    return false;
                }
            });
        }
    }
}
</script>

<style scoped>
    .login-wrap{
        position: relative;
        width:100%;
        height:100%;
        background-image: url(../../assets/img/login-bg.jpg);
        background-size: 100%;
    }
    .ms-title{
        width:100%;
        line-height: 50px;
        text-align: center;
        font-size:20px;
        color: #fff;
        border-bottom: 1px solid #ddd;
    }
    .ms-login{
        position: absolute;
        left:50%;
        top:50%;
        width:350px;
        margin:-190px 0 0 -175px;
        border-radius: 5px;
        background: rgba(255,255,255, 0.3);
        overflow: hidden;
    }
    .ms-content{
        padding: 30px 30px;
    }
    .login-btn{
        text-align: center;
    }
    .login-btn button{
        width:100%;
        height:36px;
        margin-bottom: 10px;
    }
    .login-tips{
        font-size:12px;
        line-height:30px;
        color:#fff;
    }
</style>