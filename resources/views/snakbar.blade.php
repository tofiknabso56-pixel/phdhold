<style>
    .paper-snackbar {
        transition-property: opacity, bottom, left, right, width, margin, border-radius;
        transition-duration: 0.5s;
        transition-timing-function: ease;
        font-family: RobotoDraft;
        font-size: 14px;
        min-height: 14px;
        background-color: #323232;
        position: absolute;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
        line-height: 22px;
        padding: 18px 24px;
        bottom: 0px;
        opacity: 0;
    }
    .paper-snackbar .action {
        background: inherit;
        display: inline-block;
        border: none;
        font-size: inherit;
        text-transform: uppercase;
        color: #ffeb3b;
        margin: 0px 0px 0px 24px;
        padding: 0px;
        min-width: min-content;
    }
    .paper-button {
        position: relative;
        padding: 4px 0;
        margin: 1em;
        width: 160px;
        overflow: hidden;
        user-select: none;
        color: #000;
        text-transform: uppercase;
        border-radius: 3px;
        outline-color: #ccc;
    }
    .paper-button:hover {
        cursor: pointer;
    }
    .paper-button .ripple {
        position: absolute;
        width: 320px;
        height: 320px;
        background-color: rgba(204, 204, 204, 0.5);
        left: 0;
        top: 0;
        border-radius: 50%;
        margin-left: - 160px;
        margin-top: - 160px;
        transform: scaleX(0) scaleY(0);
        z-index: 9000;
    }
    .paper-button button, .paper-button input[type="submit"] {
        background: inherit;
        border: none;
        display: block;
        width: 100%;
        height: 100%;
        font-family: 'Roboto';
        font-size: 1em;
        color: #000;
        text-transform: uppercase;
    }
    .paper-button.colored, .paper-button.colored button {
        color: #4285f4;
    }
    .paper-button .ripple {
        background-color: rgba(204, 204, 204, 0.5);
    }
    .paper-button.raised-button.colored .ripple {
        background-color: rgba(255, 255, 255, 0.5);
    }
    .paper-button.raised-button .ripple {
        background-color: rgba(204, 204, 204, 0.5);
    }
    .paper-button.raised-button.colored {
        background-color: #4285f4;
    }
    .paper-button .raised-button {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    }
    .paper-button.raised-button.colored {
        background: #4285f4;
        color: #fff;
    }
    .paper-button[disabled] {
        background-color: #EAEAEA !important;
        color: #A8A8A8 !important;
        cursor: auto;
    }
    .paper-button:hover {
        background-color: #EAEAEA;
    }
    .paper-button.raised-button.colored:hover {
        background-color: #3367d6;
    }
    button.paper-button {
        border: 0;
        font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
        font-size: 1em;
        line-height: 25px;
        background-color: #fff;
    }
    .paper-button input[type="submit"] {
        outline-color: #ccc;
    }
    .paper-button.colored.raised-button input[type="submit"] {
        color: #fff;
    }
    /** Shadows **/
    .paper-shadow-animated.paper-shadow {
        transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .paper-shadow-top-z-1 {
        box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
    }
    .paper-shadow-bottom-z-1 {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    }
    .paper-shadow-top-z-2 {
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .paper-shadow-bottom-z-2 {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);
    }
    .paper-shadow-top-z-3 {
        box-shadow: 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }
    .paper-shadow-bottom-z-3 {
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24);
    }
    .paper-shadow-top-z-4 {
        box-shadow: 0 25px 55px 0 rgba(0, 0, 0, 0.21);
    }
    /** Card **/
    .card {
        background: white;
        width: 300px;
        height: 300px;
        position: relative;
        margin: 16px;
        border-radius: 2px;
    }

</style>

{{--<link href='//fonts.googleapis.com/css?family=RobotoDraft:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en' rel='stylesheet' type='text/css'>--}}

<script>
    /* This is a prototype */
    var createSnackbar = (function() {
        var previous = null;
        return function(message, actionText, action) {
            if (previous) {
                previous.dismiss();
            }
            var snackbar = document.createElement('div');
            snackbar.className = 'paper-snackbar';
            snackbar.dismiss = function() {
                this.style.opacity = 0;
            };
            var text = document.createTextNode(message);
            snackbar.appendChild(text);
            if (actionText) {
                if (!action) {
                    action = snackbar.dismiss.bind(snackbar);
                }
                var actionButton = document.createElement('button');
                actionButton.className = 'action';
                actionButton.innerHTML = actionText;
                actionButton.addEventListener('click', action);
                snackbar.appendChild(actionButton);
            }
            setTimeout(function() {
                if (previous === this) {
                    previous.dismiss();
                }
            }.bind(snackbar), 1500);

            snackbar.addEventListener('transitionend', function(event, elapsed) {
                if (event.propertyName === 'opacity' && this.style.opacity == 0) {
                    this.parentElement.removeChild(this);
                    if (previous === this) {
                        previous = null;
                    }
                }
            }.bind(snackbar));



            previous = snackbar;
            document.body.appendChild(snackbar);
            // In order for the animations to trigger, I have to force the original style to be computed, and then change it.
            getComputedStyle(snackbar).bottom;
            snackbar.style.bottom = '0px';
            snackbar.style.opacity = 1;
        };
    })();

    var longMessage = "This is a longer message that won't fit on one line. It is, inevitably, quite a boring thing. Hopefully it is still useful.";
    var shortMessage = 'Your message was sent';

    document.getElementById('single').addEventListener('click', function() {
        createSnackbar(shortMessage);
    });

    document.getElementById('multi').addEventListener('click', function() {
        createSnackbar(longMessage);
    });

    document.getElementById('singleaction').addEventListener('click', function() {
        createSnackbar(shortMessage, 'X');
    });

    document.getElementById('multiaction').addEventListener('click', function() {
        createSnackbar(longMessage, 'Wot?', function() { alert('Moo!'); });
    });


    function callMessageFunction(shortMessage){
        createSnackbar(shortMessage, 'X');
    }



    /* This stuff just for ripple effect for buttons. Not part of the Snackbar */


    var find = document.querySelectorAll.bind(document);
    var buttons = find('.paper-button');

    for(i=0; i < buttons.length; i++){
        var button = buttons[i];
        button.addEventListener('click', function(e) {

            var bound = this.getBoundingClientRect();
            var x = e.clientX - bound.left;
            var y = e.clientY - bound.top;

            var ripple = this.querySelector('.ripple');

            if (ripple) {
                TweenLite.set(ripple, {x: x, y: y, scaleX: 0, scaleY: 0, opacity: 1});

                TweenLite.to(ripple, 1.5, {scaleX: 1, scaleY: 1, opacity: 0, ease: Expo.easeOut});
            }
        });
    }
</script>
