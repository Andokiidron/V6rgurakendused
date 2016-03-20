window.onload = function () {
    var nupp = document.getElementsByClassName("bead");
    for (var i = 0; i < nupp.length; i++) {
        nupp[i].onclick = function () {
            var floatpos = getComputedStyle(this,null).getPropertyValue("float");
            if (floatpos=="left") {
                this.style.cssFloat="right";
            }else if (floatpos=="right") {
                this.style.cssFloat="left";}  
        }
    }
}