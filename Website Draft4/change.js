    (function($) {
        var slide = function(ele,options) {
            var $ele = $(ele);
            var setting = {
                speed: 1000,
                interval: 2000,
            };
            $.extend(true, setting, options);
            var states = [
                { $zIndex: 1, width: 120, height: 150, top: 69, left: 134, $opacity: 0.2 },
                { $zIndex: 2, width: 130, height: 170, top: 59, left: 0, $opacity: 0.4 },
                { $zIndex: 3, width: 170, height: 218, top: 35, left: 110, $opacity: 0.7 },
                { $zIndex: 4, width: 224, height: 288, top: 0, left: 263, $opacity: 1 },
                { $zIndex: 3, width: 170, height: 218, top: 35, left: 470, $opacity: 0.7 },
                { $zIndex: 2, width: 130, height: 170, top: 59, left: 620, $opacity: 0.4 },
                { $zIndex: 1, width: 120, height: 150, top: 69, left: 500, $opacity: 0.2 }
            ];

            var $lis = $ele.find('li');
            var timer = null;

            // äº‹ä»¶
            $ele.find('.hi-next').on('click', function() {
                next();
            });
            $ele.find('.hi-prev').on('click', function() {
                states.push(states.shift());
                move();
            });
            $ele.on('mouseenter', function() {
                clearInterval(timer);
                timer = null;
            }).on('mouseleave', function() {
                autoPlay();
            });

            move();
            autoPlay();

            // è®©æ¯ä¸ª li å¯¹åº”ä¸Šé¢ states çš„æ¯ä¸ªçŠ¶æ€
            // è®© li ä»Žæ­£ä¸­é—´å±•å¼€
            function move() {
                $lis.each(function(index, element) {
                    var state = states[index];
                    $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
                });
            }

            // åˆ‡æ¢åˆ°ä¸‹ä¸€å¼ 
            function next() {
                // åŽŸç†ï¼šæŠŠæ•°ç»„æœ€åŽä¸€ä¸ªå…ƒç´ ç§»åˆ°ç¬¬ä¸€ä¸ª
                states.unshift(states.pop());
                move();
            }

            function autoPlay() {
                timer = setInterval(next, setting.interval);
            }
        }
        // æ‰¾åˆ°è¦è½®æ’­çš„è½®æ’­å›¾çš„æ ¹æ ‡ç­¾ï¼Œè°ƒç”¨ slide()
        $.fn.hiSlide = function(options) {
            $(this).each(function(index, ele) {
                slide(ele,options);
            });
            // è¿”å›žå€¼ï¼Œä»¥ä¾¿æ”¯æŒé“¾å¼è°ƒç”¨
            return this;
        }
    })(jQuery); 