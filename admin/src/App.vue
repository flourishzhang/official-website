<template>
    <div id="app">
        <router-view v-if="showview"></router-view>
    </div>
</template>
<script>
import func from '@/components/common/functions'
export default {
    data: function(){
        return {
            showview: false
        }
    },
    async created () {
        let _this = this
        const token = sessionStorage.getItem('token')
        _this.$root.token = token
        if (!token) {
            _this.showview = true
            _this.$router.push('/')
        } else {
            let res = await func.ajax(APIADDR + '/index.php?do=apigetuserinfo', JSON.stringify({
                token: token
            }))
            let obj = JSON.parse(res)
            if (obj.errcode === 0) {
                _this.$root.userinfo = obj.userinfo
                sessionStorage.setItem('userinfo', JSON.stringify(obj.userinfo))
            } else if (obj.errcode === 2000) {
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                _this.$message.error(obj.errmsg)
            }
            _this.showview = true
        }
    }
}
</script>
<style>
    @import "./assets/css/main.css";
    @import "./assets/css/color-dark.css";     /*深色主题*/
    /*@import "./assets/css/theme-green/color-green.css";   浅绿色主题*/
</style>