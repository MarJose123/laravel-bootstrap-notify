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

    }


}).call(
    this,
    typeof exports !== 'undefined' ? exports : null,
    typeof module !== 'undefined' ? /* istanbul ignore next */ module : null,
    typeof define !== 'undefined' ? /* istanbul ignore next */ define : null
);

