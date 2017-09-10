!function(){
    'use strict';

    function Nav(el) {
        this.$el    = $(el);
        this.$btn   = this.$el.siblings('#nav_btn');
        this.isOpen = false;
        this.init();
    }

    Nav.prototype = {
        init: function () {
            var self = this;

            self.$el.removeClass('is-open');
            self.$btn.removeClass('is-open');

            self.$btn.on('click', function() {
                if(self.isOpen) {
                    $(this).removeClass('is-open');
                    self.$el.removeClass('is-open');
                    self.isOpen = false;
                } else {
                    $(this).addClass('is-open');
                    self.$el.addClass('is-open');
                    self.isOpen = true;
                }
            })
        }
    }

    $(function() {
        var nav = new Nav('#nav');
    })
}()