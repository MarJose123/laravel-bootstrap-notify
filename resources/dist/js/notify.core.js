/* This will be the JS API to call the toast notification without the being loaded or refresh */
(function (exports, module, define) {
    "use strict";

    let notify = {};
    String.prototype.format = function (str, vals) {

        if (typeof str === '') {
            return str;
        }
            return str.replace("/(%?)%\\{([^\\}]+)\\}/g", function (m0, m1, m2) {
                if (m1 === '%') {
                    return "%{" + m2 + "}";
                } else {
                    return String(vals[m2]);
                }
            });
    };

    notify.extend({
        version:{
            major: 1,
            minor: 0,
            patch: 0,
            metadata: "beta",
            toString: function () {
                let version = String.format("%{major}.%{minor}.%{patch}", notify.version);
                if (notify.version.metadata) {
                    version += "+" + notify.version.metadata;
                }
                return version;
            }
        },
        //information
        info: {
            license: 'MIT',
            author: 'Marjose Darang',
            motto: 'If your doing it right, then you are not wrong!',
            copyright: '2022',
            toString: function () {
                return String.format("License: %{license} \n author: %{author}\n Motto: %{motto}\n CopyRight: %{copyright}", notify.info);
            }
        }

        });



    notify.toast = {

        success: (icon, title, message) => {
                $.notify({
                    // options
                    icon: icon,
                    title: title,
                    message:message,
                },{
                    // settings
                    element: 'body',
                    position: null,
                    type: "success",
                    allow_dismiss: true,
                    newest_on_top: true,
                    showProgressbar: false,
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: null,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                    onShow: null,
                    onShown: null,
                    onClose: null,
                    onClosed: null,
                    icon_type: 'class',
                    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
                });
        },

        warning: (icon, title, message) => {

        }

    }


}).call(
    this,
    typeof exports !== 'undefined' ? exports : null,
    typeof module !== 'undefined' ? /* istanbul ignore next */ module : null,
    typeof define !== 'undefined' ? /* istanbul ignore next */ define : null
);

