function drawColumn() {
    var a = google.visualization.arrayToDataTable([
            ["Year", "Sales", "Costs"],
            ["2011", 880, 250],
            ["2012", 730, 300],
            ["2013", 960, 450],
            ["2014", 1340, 430],
            ["2015", 1560, 540]
        ]),
        b = {
            height: 75,
            fontSize: 12,
            colors: ["#37BC9B", "#DA4453"],
            chartArea: {
                left: "5%",
                width: "90%",
                height: 50
            },
            tooltip: {
                textStyle: {
                    fontSize: 13
                }
            },
            vAxis: {
                gridlines: {
                    color: "#E4EBF1",
                    count: 10
                },
                minValue: 0
            },
            legend: {
                position: "top",
                alignment: "center",
                textStyle: {
                    fontSize: 12
                }
            }
        },
        c = new google.visualization.ColumnChart(document.getElementById("column-chart"));
    c.draw(a, b)
}! function(a, b, c) {
    "use strict";

    function d(a) {
        a.element;
        if (!a.id) return a.text;
        var b = "<i class='icon-" + c(a.element).data("icon") + "'></i>" + a.text;
        return b
    }

    function e(a) {
        if (a.id) {
            var b = c('<span><img src="robust-assets/images/flags/' + a.element.value.toLowerCase() + '.png" class="img-flag" /> ' + a.text + "</span>");
            return b
        }
        return a.text
    }
   
    c("html");
    c(".switch:checkbox").checkboxpicker(), c("#switch12").checkboxpicker({
        html: !0,
        offLabel: '<span class="icon-remove">',
        onLabel: '<span class="icon-ok">'
    });
    var f = 0;
    if (Array.prototype.forEach) {
        var g = Array.prototype.slice.call(b.querySelectorAll(".switchery"));
        g.forEach(function(a) {
            new Switchery(a)
        })
    } else {
        var h = b.querySelectorAll(".switchery");
        for (f = 0; f < h.length; f++) {
            new Switchery(h[f])
        }
    }
    var i = b.querySelectorAll(".switchery-sm");
    for (f = 0; f < i.length; f++) new Switchery(i[f], {
        className: "switchery switchery-small"
    });
    var j = b.querySelectorAll(".switchery-danger");
    for (f = 0; f < j.length; f++) new Switchery(j[f], {
        color: "#DA4453"
    });
   
   
}(window, document, jQuery), google.load("visualization", "1.0", {
    packages: ["corechart"]
}), google.setOnLoadCallback(drawColumn), $(function() {
    function a() {
        drawColumn()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
});