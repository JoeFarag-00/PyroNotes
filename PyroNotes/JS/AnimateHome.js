$( window ).resize( function() {
  centerSplash();
});

!function($){

    "use strict";

    var Typed = function(el, options){

        this.el = $(el);
        this.options = $.extend({}, $.fn.typed.defaults, options);

        this.text = this.el.text();

        this.typeSpeed = this.options.typeSpeed;

        this.backDelay = this.options.backDelay;

        this.strings = this.options.strings;

        this.strPos = 0;


        this.arrayPos = 0;

        // current string based on current values[] array position
        this.string = this.strings[this.arrayPos];

        this.stopNum = 0;

        // Looping logic
        this.loop = this.options.loop;
        this.loopCount = this.options.loopCount;
        this.curLoop = 1;
        if (this.loop === false){
        
            this.stopArray = this.strings.length-1;
        }
        else{
            this.stopArray = this.strings.length;
        }

        // All systems go!
        this.init();
        this.build();
    }

        Typed.prototype =  {

            constructor: Typed

            , init: function(){
    
                this.typewrite(this.string, this.strPos);
            }

            , build: function(){
                this.el.after("<span id=\"typed-cursor\">|</span>");
            }

            // pass current string state to each function
            , typewrite: function(curString, curStrPos){

            
                var humanize = Math.round(Math.random() * (100 - 30)) + this.typeSpeed;
                var self = this;

                
                setTimeout(function() {

                    // make sure array position is less than array length
                    if (self.arrayPos < self.strings.length){

                        // start typing each new char into existing string
                        // curString is function arg
                        self.el.text(self.text + curString.substr(0, curStrPos));

                        if (curStrPos > curString.length && self.arrayPos < self.stopArray){
                            clearTimeout(clear);
                            var clear = setTimeout(function(){
                                self.backspace(curString, curStrPos);
                            }, self.backDelay);
                        }

                        // else, keep typing
                        else{
                            // add characters one by one
                            curStrPos++;
                            // loop the function
                            self.typewrite(curString, curStrPos);
                           
                            if (self.loop === false){
                                if (self.arrayPos === self.stopArray && curStrPos === curString.length){
                                   
                                    var clear = self.options.callback();
                                    clearTimeout(clear);
                                }
                            }
                        }
                    }
                   
                    else if (self.loop === true && self.loopCount === false){
                        self.arrayPos = 0;
                        self.init();
                    }
                        else if(self.loopCount !== false && self.curLoop < self.loopCount){
                            self.arrayPos = 0;
                            self.curLoop = self.curLoop+1;
                            self.init();
                        }

                // humanized value for typing
                }, humanize);

            }

            , backspace: function(curString, curStrPos){

              
                var humanize = Math.round(Math.random() * (100 - 30)) + this.typeSpeed;
                var self = this;

                setTimeout(function() {

                   
                     if (self.arrayPos == 1, 2, 3, 4){
                        self.stopNum = 0;
                     }
                   
                    // replace text with current text + typed characters
                    self.el.text(self.text + curString.substr(0, curStrPos));

                    if (curStrPos > self.stopNum){
                        // subtract characters one by one
                        curStrPos--;
                        // loop the function
                        self.backspace(curString, curStrPos);
                    }
                   
                    else if (curStrPos <= self.stopNum){
                        clearTimeout(clear);
                        var clear = self.arrayPos = self.arrayPos+1;
                        
                        self.typewrite(self.strings[self.arrayPos], curStrPos);
                    }

                // humanized value for typing
                }, humanize);

            }

        }

    $.fn.typed = function (option) {
        return this.each(function () {
          var $this = $(this)
            , data = $this.data('typed')
            , options = typeof option == 'object' && option
          if (!data) $this.data('typed', (data = new Typed(this, options)))
          if (typeof option == 'string') data[option]()
        });
    }

    $.fn.typed.defaults = {
        
       
        typeSpeed: 50, // speed decreases as number increased
        // time before backspacing
        backDelay: 100,
        // loop
        loop: true,
        // false = infinite
        loopCount: false,
        // ending callback function
        callback: function(){ null }
    }


}(window.jQuery);


$(function(){

        $("#typed").typed({
            strings: ["You can add notes","Edit Notes","Keep up with your important work"], //Strings to display when typing
            typeSpeed: 40,
            backDelay: 600,
            loop: true,
            loopCount: false,
            callback: function(){ foo(); }
        });

        function foo(){ console.log("Callback"); }

    });