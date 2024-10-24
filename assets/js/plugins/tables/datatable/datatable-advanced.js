$(document).ready(function() {
    $(".dom-jQuery-events").DataTable();
    $(".dom-jQuery-events tbody").on("click", "tr", function() {
        var a = table.row(this).data();
        alert("You clicked on " + a[0] + "'s row")
    }), $(".column-rendering").DataTable({
        columnDefs: [{
            render: function(a, b, c) {
                return a + " (" + c[3] + ")"
            },
            targets: 0
        }, {
            visible: !1,
            targets: [3]
        }]
    }), $(".multiple-control-elements").DataTable({
        dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
    }), $(".column-visibility").DataTable({
        columnDefs: [{
            visible: !1,
            targets: -1
        }]
    }), $(".language-file").DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
        }
    });
    var a = {
        searching: !1,
        ordering: !1
    };
    $(".setting-defaults").dataTable($.extend(!0, {}, a, {})), $(".created-callback").DataTable({
        createdRow: function(a, b, c) {
            1 * b[5].replace(/[\$,]/g, "") > 15e4 && $("td", a).eq(5).addClass("highlight")
        }
    });
    $(".row-grouping").DataTable({
        columnDefs: [{
            visible: !1,
            targets: 2
        }],
        order: [
            [2, "asc"]
        ],
        displayLength: 25,
        drawCallback: function(a) {
            var b = this.api(),
                c = b.rows({
                    page: "current"
                }).nodes(),
                d = null;
            b.column(2, {
                page: "current"
            }).data().each(function(a, b) {
                d !== a && ($(c).eq(b).before('<tr class="group"><td colspan="5">' + a + "</td></tr>"), d = a)
            })
        }
    });
    $(".row-grouping tbody").on("click", "tr.group", function() {
        var a = table.order()[0];
        2 === a[0] && "asc" === a[1] ? table.order([2, "desc"]).draw() : table.order([2, "asc"]).draw()
    }), $(".footer-callback").DataTable({
        footerCallback: function(a, b, c, d, e) {
            var f = this.api(),
                g = function(a) {
                    return "string" == typeof a ? 1 * a.replace(/[\$,]/g, "") : "number" == typeof a ? a : 0
                };
            total = f.column(4).data().reduce(function(a, b) {
                return g(a) + g(b)
            }, 0), pageTotal = f.column(4, {
                page: "current"
            }).data().reduce(function(a, b) {
                return g(a) + g(b)
            }, 0), $(f.column(4).footer()).html("$" + pageTotal + " ( $" + total + " total)")
        }
    }), $(".custom-toolbar-elements").DataTable({
        dom: '<"toolbar">frtip'
    }), 
	$("div.toolbar").html("<b>Custom tool bar! Text/images etc.</b>"), $(".file-export").DataTable({
        dom: "Bfrtip",
        buttons: ["csv", "excel", "pdf", "print"]
    }), 
	$(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel").addClass("btn btn-primary mr-1")
});