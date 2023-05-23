$(document).ready(function() {   
    e(), $(window).resize(e);
    var t=new Shepherd.Tour( {
        classes: "shadow-md bg-purple-dark", scrollTo: !0
    }
    );
    function e() {
        window.resizeEvt, 576<$(window).width()?$(document).ready(function() {
            clearTimeout(window.resizeEvt), t.start()
        }
        ):$("#tour").on("click", function() {
            clearTimeout(window.resizeEvt), t.cancel(), window.resizeEvt=setTimeout(function() {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Tour only works for large screens!',
                  })

            }
            , 250)
        }
        )
    }
    t.addStep("step-1", {
        text:"Click to expand or collapse the menu.", attachTo:".hamburger--squeeze bottom", buttons:[ {
            text: "Skip", action: t.complete
        }
        , {
            text: "Next", action: t.next
        }
        ]
    }
    ), t.addStep("step-2", {
        text:"Check your notifications from here.", attachTo:".d-flex .notifcation .icon-bell bottom", buttons:[ {
            text: "Skip", action: t.complete
        }
        , {
            text: "previous", action: t.back
        }
        , {
            text: "Next", action: t.next
        }
        ]
    }
    ), t.addStep("step-3", {
        text:"You can choose the light or dark theme here.", attachTo:".dark-light a bottom", buttons:[ {
            text: "Skip", action: t.complete
        }
        , {
            text: "previous", action: t.back
        }
        , {
            text: "Next", action: t.next
        }
        ]
    }
    ), t.addStep("step-4", {
        text:"You can change language from here.", attachTo:".language span bottom", buttons:[ {
            text: "Skip", action: t.complete
        }
        , {
            text: "previous", action: t.back
        }
        , {
            text: "Next", action: t.next
        }
        ]
    }
    ), t.addStep("step-4", {
        text:"Buy this awesomeness at affordable price!", attachTo:".buy-now bottom", buttons:[ {
            text: "previous", action: t.back
        }
        , {
            text: "Finish", action: t.complete
        }
        ]
    }
    )
}



);

