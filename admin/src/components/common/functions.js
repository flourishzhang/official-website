export default {
    ajax: function (url, dat) {
        return new Promise(function (resolve, reject) {
            let xhr = new XMLHttpRequest()
            xhr.onload = function () {
                resolve (xhr.responseText)
            }
            xhr.open ('POST', url)
            xhr.send (dat)
        })
    },
    parsedatetime: function (date) {
        let year = date.getFullYear()
        let month = date.getMonth() + 1
        month = month > 10 ? month : '0' + month
        let day = date.getDate()
        day = day > 10 ? day : '0' + day
        let hour = date.getHours()
        hour = hour > 10 ? hour : '0' + hour
        let minute = date.getMinutes()
        minute = minute > 10 ? minute : '0' + minute
        let second = date.getSeconds()
        second = second > 10 ? second : '0' + second
        return year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
    }
}