
var car = {
nbSlide : 0,
nbCurrent : 1,
elemCurrent : null,
elem : null,
timer : null,

  init : function (elem){
    this.nbSlide = elem.find(".slide").length;
    elem.find(".nav span").click(function(){car.gotoSlide($(this).text()); })
    elem.find(".prev").click(function(){car.prev($()); })
    elem.find(".next").click(function(){car.next($()); })

              //initialisation du carousel
              this.elem = elem;
              elem.find(".slide").hide();
              elem.find(".slide:first").show();
              this.elemCurrent = elem.find(".slide:first");
              this.elem.find(".nav span:first").addClass("active");
              this.timer = window.setInterval("car.next()", 5000 );
            },
      gotoSlide : function(num){
        if (num == this.nbCurrent) {return false;}
        this.elemCurrent.fadeOut();
        this.elem.find("#slide"+num).fadeIn();
        this.elem.find(".nav span").removeClass("active");
        this.elem.find(".nav span:eq("+(num-1)+")").addClass("active");
        this.nbCurrent = num;
        this.elemCurrent = this.elem.find("#slide"+num);
        //alert(num);
      },

      next : function () {
      var num = this.nbCurrent+1;
        if (num>this.nbSlide) {
          num=1;
        }
      this.gotoSlide(num);
      },

      prev : function () {
        var num= this.nbCurrent-1;
        if (num<1) {
          num=this.nbSlide;
        }
      this.gotoSlide(num);
      },
}

$(function() {
car.init($("#carousel"));
});
