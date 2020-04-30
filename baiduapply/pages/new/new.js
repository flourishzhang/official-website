const app = getApp()
Page({
    data: {
        active:0,
        list:[],
        page:1,
        count:0
    },
    tiao(e){
        // console.log(e.currentTarget.dataset.id)
        swan.navigateTo({
            url: '/pages/newdet/newdet?id='+e.currentTarget.dataset.id
        });
    },
    getdata(e){
        var _this = this
        switch(e.currentTarget.dataset.index){
            case "1":
                _this.setData({
                    page:1
                })
                break;
            case "2":
                if(_this.data.page!=1){
                    _this.setData({
                        page:_this.data.page-1
                    })
                }
                break;
            case "3":
                if(_this.data.page!=Math.ceil(_this.data.count/5)){
                    _this.setData({
                        page:_this.data.page+1
                    })
                }
                break;
            case "4":
                _this.setData({
                    page:Math.ceil(_this.data.count/5)
                })
                break;
            default:break;
        }
        if(_this.active==0){
            console.log(_this)
            swan.request({
                url:app.globalData.apiserver+"/index.php?do=apigetarticlelist",
                method:'POST',
                dataType:'json',
                data:{
                    page:_this.data.page,
                    size:5
                },
                success: function (res) {
                    console.log(res)
                    _this.setData({
                        list:res.data.articlelist
                    })
                    swan.pageScrollTo({
                        scrollTop: 0,
                        duration: 0,
                        success: function (res) {
                            console.log('pageScrollTo success', res);
                        },
                        fail: function (err) {
                            console.log('pageScrollTo fail', err);
                        }
                    });
                },
                fail: function (err) {
                    console.log('错误码：' + err.errCode);
                    console.log('错误信息：' + err.errMsg);
                }
            })
        }else{
            swan.request({
                url:app.globalData.apiserver+"/index.php?do=apigetarticlelist",
                method:'POST',
                dataType:'json',
                data:{
                    page:_this.data.page,
                    size:5,
                    type:_this.active
                },
                success: function (res) {
                    console.log(res)
                    _this.setData({
                        list:res.data.articlelist
                    })
                    swan.pageScrollTo({
                        scrollTop: 0,
                        duration: 0,
                        success: function (res) {
                            console.log('pageScrollTo success', res);
                        },
                        fail: function (err) {
                            console.log('pageScrollTo fail', err);
                        }
                    });
                },
                fail: function (err) {
                    console.log('错误码：' + err.errCode);
                    console.log('错误信息：' + err.errMsg);
                }
            })
        }
    },
    bian(e){
        var _this = this
        this.setData({
            active:e.target.dataset.index
        })
        if(e.target.dataset.index==0){
            swan.request({
                url:app.globalData.apiserver+"/index.php?do=apigetarticlelist",
                method:'POST',
                dataType:'json',
                data:{
                    page:1,
                    size:5
                },
                success: function (res) {
                    console.log(res)
                    _this.setData({
                        list:res.data.articlelist,
                        page:1,
                        count:res.data.totalcount
                    })
                },
                fail: function (err) {
                    console.log('错误码：' + err.errCode);
                    console.log('错误信息：' + err.errMsg);
                }
            })
        }else{
            swan.request({
                url:app.globalData.apiserver+"/index.php?do=apigetarticlelist",
                method:'POST',
                dataType:'json',
                data:{
                    page:1,
                    size:5,
                    type:e.target.dataset.index
                },
                success: function (res) {
                    console.log(res)
                    _this.setData({
                        list:res.data.articlelist,
                        page:1,
                        count:res.data.totalcount
                    })
                },
                fail: function (err) {
                    console.log('错误码：' + err.errCode);
                    console.log('错误信息：' + err.errMsg);
                }
            })
        }
        
    },
    onLoad: function () {
        var _this = this;
        // 监听页面加载的生命周期函数
        swan.request({
            url:app.globalData.apiserver+"/index.php?do=apigetarticlelist",
            method:'POST',
            dataType:'json',
            data:{
                page:1,
                size:5
            },
            success: function (res) {
                console.log(res)
                _this.setData({
                    list:res.data.articlelist,
                    count:res.data.totalcount
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