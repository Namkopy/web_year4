! function(e) {
    "use strict";
    var a = function() {};
    a.prototype.createAreaChart = function(e, a, r, t, i, o, b, s) { Morris.Area({ element: e, pointSize: 0, lineWidth: 1, data: t, xkey: i, ykeys: o, labels: b, resize: !0, gridLineColor: "#eee", hideHover: "auto", lineColors: s, fillOpacity: .9, behaveLikeLine: !0 }) }, a.prototype.createDonutChart = function(e, a, r) { Morris.Donut({ element: e, data: a, resize: !0, colors: r }) }, a.prototype.createStackedChart = function(e, a, r, t, i, o) { Morris.Bar({ element: e, data: a, xkey: r, ykeys: t, stacked: !0, labels: i, hideHover: "auto", resize: !0, gridLineColor: "#eee", barColors: o }) }, e("#sparkline").sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], { type: "bar", height: "134", barWidth: "10", barSpacing: "7", barColor: "#3eb7ba" }), a.prototype.init = function() {
        this.createAreaChart("morris-area-example", 0, 0, [{ y: "2011", a: 0, b: 0, c: 0 }, { y: "2012", a: 150, b: 45, c: 15 }, { y: "2013", a: 60, b: 150, c: 195 }, { y: "2014", a: 180, b: 36, c: 21 }, { y: "2015", a: 90, b: 60, c: 360 }, { y: "2016", a: 75, b: 240, c: 120 }, { y: "2017", a: 30, b: 30, c: 30 }], "y", ["a", "b", "c"], ["Series A", "Series B", "Series C"], ["#ccc", "#36508b", "#3eb7ba"]);
        this.createDonutChart("morris-donut-example", [{ label: "Order", value: 12 },
            { label: "Booking", value: 30 },
            { label: "Staff", value: 20 }
        ], ["#f0f1f4", "#3eb7ba", "#36508b"]);
        this.createStackedChart("morris-bar-stacked", [{ y: "2005", a: 45, b: 180 }, { y: "2006", a: 75, b: 65 }, { y: "2007", a: 100, b: 90 }, { y: "2008", a: 75, b: 65 }, { y: "2009", a: 100, b: 90 }, { y: "2010", a: 75, b: 65 }, { y: "2011", a: 50, b: 40 }, { y: "2012", a: 75, b: 65 }, { y: "2013", a: 50, b: 40 }, { y: "2014", a: 75, b: 65 }, { y: "2015", a: 100, b: 90 }, { y: "2016", a: 80, b: 65 }], "y", ["a", "b"], ["Series A", "Series B"], ["#36508b", "#f0f1f4"])
    }, e.Dashboard = new a, e.Dashboard.Constructor = a
}(window.jQuery),
function(e) {
    "use strict";
    window.jQuery.Dashboard.init()
}();