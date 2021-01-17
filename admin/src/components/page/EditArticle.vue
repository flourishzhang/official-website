<template>
    <div>
        <div class="crumbs">
            <el-breadcrumb separator="/">
                <el-breadcrumb-item><i class="el-icon-lx-calendar"></i> 文章编辑</el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <div class="container">
            <div class="form-box">
                <el-form ref="form" :model="form" label-width="80px">
                    <el-form-item label="文章标题">
                        <el-input v-model="form.title"></el-input>
                    </el-form-item>
                    <el-form-item label="文章简介">
                        <el-input v-model="form.desc"></el-input>
                    </el-form-item>
                    <el-form-item label="文章类">
                        <el-select v-model="form.type" placeholder="请选择">
                            <el-option label="公司动态" :value="1"></el-option>
                            <el-option label="媒体报道" :value="2"></el-option>
                            <el-option label="行业资讯" :value="3"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="发布时间">
                        <el-col :span="11">
                            <el-date-picker type="datetime" placeholder="选择发布时间" v-model="form.publishtime" style="width: 100%;" :clearable="false"></el-date-picker>
                        </el-col>
                    </el-form-item>
                    <el-form-item label="是否发布">
                        <el-switch v-model="form.status"></el-switch>
                    </el-form-item>
                    <el-form-item label="文章图片">
                        <img :src="cronImg" class="pre-img" @click="SelectImg">
                    </el-form-item>
                    <el-form-item label="文章内容">
                        <textarea :id="textareaid" style="width: 1100px; height: 300px"></textarea>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="OnSubmit">表单提交</el-button>
                    </el-form-item>
                </el-form>
            </div>

            <el-dialog title="裁剪图片" :visible.sync="dialogVisible" width="80%">
                <vue-cropper ref='cropper' :src="cronsrc" :aspectRatio="30/17" dragMode="crop" style="width:100%;height:300px;"></vue-cropper>
                <span slot="footer" class="dialog-footer">
                    <el-button @click="dialogVisible = false">取 消</el-button>
                    <el-button type="primary" @click="cropImage">确 定</el-button>
                </span>
            </el-dialog>
        </div>
    </div>
</template>

<script>
import VueCropper  from 'vue-cropperjs'
import func from '@/components/common/functions'
export default {
    name: 'baseform',
    data: function() {
        let defaultImg = require('@/assets/img/defaultImg.png')
        let now = new Date()
        return {
            form: {
                articleid: 0,
                title: '',
                desc: '',
                publishtime: now,
                status: true,
                type: 1,
                file: null
            },
            textareaid: 'tid-' + now.getTime(),
            dialogVisible: false,
            oldthumbnail: '',
            defaultImg: defaultImg,
            cronsrc: defaultImg,
            cronImg: defaultImg,
            ue: null
        }
    },
    components: {
        VueCropper
    },
    async mounted () {
        let _this = this
        _this.ue = UE.getEditor(_this.textareaid)
        if (_this.$route.query.hasOwnProperty('articleid')) {
            let articleid = parseInt(_this.$route.query.articleid)
            let res = await func.ajax(APIADDR + '?do=apigetarticledesc', JSON.stringify({
                token: _this.$root.token,
                articleid: articleid
            }))
            let obj = JSON.parse(res)
            if (obj.errcode == 0) {
                _this.form = {
                    articleid: articleid,
                    title: obj.article.title,
                    desc: obj.article.desc,
                    publishtime: new Date(obj.article.publishtime),
                    status: obj.article.articlestatus == 1 ? true : false,
                    type: obj.article.articletype,
                    file: null
                }
                _this.oldthumbnail = obj.article.thumbnail
                _this.defaultImg = APIADDR + obj.article.thumbnail
                _this.cronImg = _this.defaultImg
                setTimeout(() => {
                    _this.ue.setContent(obj.article.content)
                }, 500)
            } else if (obj.errcode === 2000) {
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                _this.$message.error(obj.errmsg)
            }
        }
    },
    methods: {
        async cropImage () {
            let _this = this
            _this.$refs.cropper.getCroppedCanvas({width: 300, height: 170}).toBlob(function (blob) {
                _this.form.file = blob
                if (_this.cronImg != _this.defaultImg) {
                    URL.revokeObjectURL(_this.cronImg)
                }
                _this.cronImg = URL.createObjectURL(blob)
            })
            _this.dialogVisible = false
        },
        async SelectImg () {
            let _this = this
            let input = document.createElement('input')
            input.type = 'file'
            input.accept = 'image/*'
            input.onchange = function () {
                let file = input.files[0]
                _this.dialogVisible = true
                if (_this.cronsrc != _this.defaultImg) {
                    URL.revokeObjectURL(_this.cronsrc)
                }
                _this.cronsrc = URL.createObjectURL(file)
                _this.$refs.cropper && _this.$refs.cropper.replace(_this.cronsrc)
            }
            let e = new MouseEvent('click')
            input.dispatchEvent(e)
        },
        async OnSubmit () {
            let _this = this
            let formdata = new FormData()
            formdata.append ('token', _this.$root.token)
            formdata.append ('articleid', _this.form.articleid)
            if (_this.form.title == '') {
                _this.$message.error('文章标题不能为空')
                return
            }
            formdata.append ('title', _this.form.title)
            if (_this.form.desc == '') {
                _this.$message.error('文章简介不能为空')
                return
            }
            formdata.append ('desc', _this.form.desc)
            formdata.append ('publishtime', func.parsedatetime(_this.form.publishtime))
            formdata.append ('status', _this.form.status == true ? 1 : 0)
            formdata.append ('type', _this.form.type)
            if (_this.form.publishtime == '') {
                _this.$message.error('文章简介不能为空')
                return
            }
            if (_this.ue.hasContents() == false) {
                _this.$message.error('文章内容不能为空')
                return
            }
            formdata.append ('content', _this.ue.getContent())
            if (_this.form.articleid === 0 && _this.form.file === null) {
                _this.$message.error('文章缩略图不能为空')
                return
            }
            if (_this.form.file != null) {
                formdata.append ('file', _this.form.file)
            }
            if (_this.oldthumbnail != '') {
                formdata.append ('oldthumbnail', _this.oldthumbnail)
            }
            const loading = this.$loading({
                lock: true,
                text: '传输中',
                spinner: 'el-icon-loading',
                background: 'rgba(0, 0, 0, 0.7)'
            })
            let res = await func.ajax(APIADDR + '?do=apieditarticle', formdata)
            let obj = JSON.parse(res)
            if (obj.errcode == 0) {
                loading.close()
                _this.$message.success('创建或修改文章成功')
                _this.$router.go(-1)
            } else if (obj.errcode === 2000) {
                loading.close()
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                loading.close()
                _this.$message.error(obj.errmsg)
            }
        }
    },
    beforeDestroy() {
        let _this = this
        _this.ue.destroy()
        if (_this.cronsrc != _this.defaultImg) {
            URL.revokeObjectURL(_this.cronsrc)
        }
        if (_this.cronImg != _this.defaultImg) {
            URL.revokeObjectURL(_this.cronImg)
        }
    }
}
</script>

<style scoped>
.pre-img{
    width: 300px;
    height: 170px;
    background: #f8f8f8;
    border: 1px solid #eee;
    border-radius: 5px;
}
</style>
