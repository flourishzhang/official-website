const app = getApp()
const bdParse = require('../../bdparse/bdParse/bdParse.js');
Page({
    data: {
        time:'',
        title:'',
        nextArticle:{},
        previousArticle:{}
    },
    tiao(e){
        // console.log(e.currentTarget.dataset.id)
        swan.navigateTo({
            url: '/pages/newdet/newdet?id='+e.currentTarget.dataset.id
        });
    },
    tiaoindex(){
        swan.navigateTo({
            url: '/pages/iot/iot'
        });
    },
    onLoad: function (options) {
        var _this = this
        // 监听页面加载的生命周期函数
        // console.log(bdParse)
        swan.request({
            url:app.globalData.apiserver+"/index.php?do=apigetarticledesc",
            method:'POST',
            dataType:'json',
            data:{
                articleid:options.id
            },
            success: function (res) {
                console.log(res)
                bdParse.bdParse('article', 'html', res.data.article.content, _this, 5)
                _this.setData({
                    time:res.data.article.publishtime,
                    title:res.data.article.title,
                    nextArticle:res.data.nextArticle,
                    previousArticle:res.data.previousArticle
                })
            },
            fail: function (err) {
                console.log('错误码：' + err.errCode);
                console.log('错误信息：' + err.errMsg);
            }
        })
    },
    onReady: function() {
        // 监听页面初次渲染完成的生命周期函数
    },
    onShow: function() {
        // 监听页面显示的生命周期函数
    },
    onHide: function() {
        // 监听页面隐藏的生命周期函数
    },
    onUnload: function() {
        // 监听页面卸载的生命周期函数
    },
    onPullDownRefresh: function() {
        // 监听用户下拉动作
    },
    onReachBottom: function() {
        // 页面上拉触底事件的处理函数
    },
    onShareAppMessage: function () {
        // 用户点击右上角转发
    }
});