! function () {
    "use strict";
    var e = "undefined" == typeof global ? self : global;
    if ("function" != typeof e.require) {
        var r = {},
            n = {},
            t = {},
            i = {}.hasOwnProperty,
            o = /^\.\.?(\/|$)/,
            u = function (e, r) {
                for (var n, t = [], i = (o.test(r) ? e + "/" + r : r).split("/"), u = 0, a = i.length; u < a; u++) n = i[u], ".." === n ? t.pop() : "." !== n && "" !== n && t.push(n);
                return t.join("/")
            },
            a = function (e) {
                return e.split("/").slice(0, -1).join("/")
            },
            l = function (r) {
                return function (n) {
                    var t = u(a(r), n);
                    return e.require(t, r)
                }
            },
            c = function (e, r) {
                var t = h && h.createHot(e),
                    i = {
                        id: e,
                        exports: {},
                        hot: t
                    };
                return n[e] = i, r(i.exports, l(e), i), i.exports
            },
            f = function (e) {
                var r = t[e];
                return r && e !== r ? f(r) : e
            },
            s = function (e, r) {
                return f(u(a(e), r))
            },
            p = function (e, t) {
                null == t && (t = "/");
                var o = f(e);
                if (i.call(n, o)) return n[o].exports;
                if (i.call(r, o)) return c(o, r[o]);
                throw new Error("Cannot find module '" + e + "' from '" + t + "'")
            };
        p.alias = function (e, r) {
            t[r] = e
        };
        var d = /\.[^.\/]+$/,
            v = /\/index(\.[^\/]+)?$/,
            _ = function (e) {
                if (d.test(e)) {
                    var r = e.replace(d, "");
                    i.call(t, r) && t[r].replace(d, "") !== r + "/index" || (t[r] = e)
                }
                if (v.test(e)) {
                    var n = e.replace(v, "");
                    i.call(t, n) || (t[n] = e)
                }
            };
        p.register = p.define = function (e, t) {
            if (e && "object" == typeof e)
                for (var o in e) i.call(e, o) && p.register(o, e[o]);
            else r[e] = t, delete n[e], _(e)
        }, p.list = function () {
            var e = [];
            for (var n in r) i.call(r, n) && e.push(n);
            return e
        };
        var h = e._hmr && new e._hmr(s, p, r, n);
        p._cache = n, p.hmr = h && h.wrap, p.brunch = !0, e.require = p
    }
}(),

        })
 